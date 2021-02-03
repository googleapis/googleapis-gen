# -*- coding: utf-8 -*-

# Copyright 2020 Google LLC
#
# Licensed under the Apache License, Version 2.0 (the "License");
# you may not use this file except in compliance with the License.
# You may obtain a copy of the License at
#
#     http://www.apache.org/licenses/LICENSE-2.0
#
# Unless required by applicable law or agreed to in writing, software
# distributed under the License is distributed on an "AS IS" BASIS,
# WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
# See the License for the specific language governing permissions and
# limitations under the License.
#

import os
import mock

import grpc
from grpc.experimental import aio
import math
import pytest
from proto.marshal.rules.dates import DurationRule, TimestampRule

from google import auth
from google.api_core import client_options
from google.api_core import exceptions
from google.api_core import gapic_v1
from google.api_core import grpc_helpers
from google.api_core import grpc_helpers_async
from google.auth import credentials
from google.auth.exceptions import MutualTLSChannelError
from google.cloud.osconfig_v1beta.services.os_config_service import OsConfigServiceAsyncClient
from google.cloud.osconfig_v1beta.services.os_config_service import OsConfigServiceClient
from google.cloud.osconfig_v1beta.services.os_config_service import pagers
from google.cloud.osconfig_v1beta.services.os_config_service import transports
from google.cloud.osconfig_v1beta.types import guest_policies
from google.cloud.osconfig_v1beta.types import patch_deployments
from google.cloud.osconfig_v1beta.types import patch_jobs
from google.oauth2 import service_account
from google.protobuf import duration_pb2 as duration  # type: ignore
from google.protobuf import field_mask_pb2 as field_mask  # type: ignore
from google.protobuf import timestamp_pb2 as timestamp  # type: ignore
from google.type import datetime_pb2 as datetime  # type: ignore
from google.type import dayofweek_pb2 as dayofweek  # type: ignore
from google.type import timeofday_pb2 as timeofday  # type: ignore


def client_cert_source_callback():
    return b"cert bytes", b"key bytes"


# If default endpoint is localhost, then default mtls endpoint will be the same.
# This method modifies the default endpoint so the client can produce a different
# mtls endpoint for endpoint testing purposes.
def modify_default_endpoint(client):
    return "foo.googleapis.com" if ("localhost" in client.DEFAULT_ENDPOINT) else client.DEFAULT_ENDPOINT


def test__get_default_mtls_endpoint():
    api_endpoint = "example.googleapis.com"
    api_mtls_endpoint = "example.mtls.googleapis.com"
    sandbox_endpoint = "example.sandbox.googleapis.com"
    sandbox_mtls_endpoint = "example.mtls.sandbox.googleapis.com"
    non_googleapi = "api.example.com"

    assert OsConfigServiceClient._get_default_mtls_endpoint(None) is None
    assert OsConfigServiceClient._get_default_mtls_endpoint(api_endpoint) == api_mtls_endpoint
    assert OsConfigServiceClient._get_default_mtls_endpoint(api_mtls_endpoint) == api_mtls_endpoint
    assert OsConfigServiceClient._get_default_mtls_endpoint(sandbox_endpoint) == sandbox_mtls_endpoint
    assert OsConfigServiceClient._get_default_mtls_endpoint(sandbox_mtls_endpoint) == sandbox_mtls_endpoint
    assert OsConfigServiceClient._get_default_mtls_endpoint(non_googleapi) == non_googleapi


def test_os_config_service_client_from_service_account_info():
    creds = credentials.AnonymousCredentials()
    with mock.patch.object(service_account.Credentials, 'from_service_account_info') as factory:
        factory.return_value = creds
        info = {"valid": True}
        client = OsConfigServiceClient.from_service_account_info(info)
        assert client.transport._credentials == creds

        assert client.transport._host == 'osconfig.googleapis.com:443'


@pytest.mark.parametrize("client_class", [
    OsConfigServiceClient,
    OsConfigServiceAsyncClient,
])
def test_os_config_service_client_from_service_account_file(client_class):
    creds = credentials.AnonymousCredentials()
    with mock.patch.object(service_account.Credentials, 'from_service_account_file') as factory:
        factory.return_value = creds
        client = client_class.from_service_account_file("dummy/file/path.json")
        assert client.transport._credentials == creds

        client = client_class.from_service_account_json("dummy/file/path.json")
        assert client.transport._credentials == creds

        assert client.transport._host == 'osconfig.googleapis.com:443'


def test_os_config_service_client_get_transport_class():
    transport = OsConfigServiceClient.get_transport_class()
    available_transports = [
        transports.OsConfigServiceGrpcTransport,
    ]
    assert transport in available_transports

    transport = OsConfigServiceClient.get_transport_class("grpc")
    assert transport == transports.OsConfigServiceGrpcTransport


@pytest.mark.parametrize("client_class,transport_class,transport_name", [
    (OsConfigServiceClient, transports.OsConfigServiceGrpcTransport, "grpc"),
    (OsConfigServiceAsyncClient, transports.OsConfigServiceGrpcAsyncIOTransport, "grpc_asyncio"),
])
@mock.patch.object(OsConfigServiceClient, "DEFAULT_ENDPOINT", modify_default_endpoint(OsConfigServiceClient))
@mock.patch.object(OsConfigServiceAsyncClient, "DEFAULT_ENDPOINT", modify_default_endpoint(OsConfigServiceAsyncClient))
def test_os_config_service_client_client_options(client_class, transport_class, transport_name):
    # Check that if channel is provided we won't create a new one.
    with mock.patch.object(OsConfigServiceClient, 'get_transport_class') as gtc:
        transport = transport_class(
            credentials=credentials.AnonymousCredentials()
        )
        client = client_class(transport=transport)
        gtc.assert_not_called()

    # Check that if channel is provided via str we will create a new one.
    with mock.patch.object(OsConfigServiceClient, 'get_transport_class') as gtc:
        client = client_class(transport=transport_name)
        gtc.assert_called()

    # Check the case api_endpoint is provided.
    options = client_options.ClientOptions(api_endpoint="squid.clam.whelk")
    with mock.patch.object(transport_class, '__init__') as patched:
        patched.return_value = None
        client = client_class(client_options=options)
        patched.assert_called_once_with(
            credentials=None,
            credentials_file=None,
            host="squid.clam.whelk",
            scopes=None,
            client_cert_source_for_mtls=None,
            quota_project_id=None,
            client_info=transports.base.DEFAULT_CLIENT_INFO,
        )

    # Check the case api_endpoint is not provided and GOOGLE_API_USE_MTLS_ENDPOINT is
    # "never".
    with mock.patch.dict(os.environ, {"GOOGLE_API_USE_MTLS_ENDPOINT": "never"}):
        with mock.patch.object(transport_class, '__init__') as patched:
            patched.return_value = None
            client = client_class()
            patched.assert_called_once_with(
                credentials=None,
                credentials_file=None,
                host=client.DEFAULT_ENDPOINT,
                scopes=None,
                client_cert_source_for_mtls=None,
                quota_project_id=None,
                client_info=transports.base.DEFAULT_CLIENT_INFO,
            )

    # Check the case api_endpoint is not provided and GOOGLE_API_USE_MTLS_ENDPOINT is
    # "always".
    with mock.patch.dict(os.environ, {"GOOGLE_API_USE_MTLS_ENDPOINT": "always"}):
        with mock.patch.object(transport_class, '__init__') as patched:
            patched.return_value = None
            client = client_class()
            patched.assert_called_once_with(
                credentials=None,
                credentials_file=None,
                host=client.DEFAULT_MTLS_ENDPOINT,
                scopes=None,
                client_cert_source_for_mtls=None,
                quota_project_id=None,
                client_info=transports.base.DEFAULT_CLIENT_INFO,
            )

    # Check the case api_endpoint is not provided and GOOGLE_API_USE_MTLS_ENDPOINT has
    # unsupported value.
    with mock.patch.dict(os.environ, {"GOOGLE_API_USE_MTLS_ENDPOINT": "Unsupported"}):
        with pytest.raises(MutualTLSChannelError):
            client = client_class()

    # Check the case GOOGLE_API_USE_CLIENT_CERTIFICATE has unsupported value.
    with mock.patch.dict(os.environ, {"GOOGLE_API_USE_CLIENT_CERTIFICATE": "Unsupported"}):
        with pytest.raises(ValueError):
            client = client_class()

    # Check the case quota_project_id is provided
    options = client_options.ClientOptions(quota_project_id="octopus")
    with mock.patch.object(transport_class, '__init__') as patched:
        patched.return_value = None
        client = client_class(client_options=options)
        patched.assert_called_once_with(
            credentials=None,
            credentials_file=None,
            host=client.DEFAULT_ENDPOINT,
            scopes=None,
            client_cert_source_for_mtls=None,
            quota_project_id="octopus",
            client_info=transports.base.DEFAULT_CLIENT_INFO,
        )

@pytest.mark.parametrize("client_class,transport_class,transport_name,use_client_cert_env", [

    (OsConfigServiceClient, transports.OsConfigServiceGrpcTransport, "grpc", "true"),
    (OsConfigServiceAsyncClient, transports.OsConfigServiceGrpcAsyncIOTransport, "grpc_asyncio", "true"),
    (OsConfigServiceClient, transports.OsConfigServiceGrpcTransport, "grpc", "false"),
    (OsConfigServiceAsyncClient, transports.OsConfigServiceGrpcAsyncIOTransport, "grpc_asyncio", "false"),

])
@mock.patch.object(OsConfigServiceClient, "DEFAULT_ENDPOINT", modify_default_endpoint(OsConfigServiceClient))
@mock.patch.object(OsConfigServiceAsyncClient, "DEFAULT_ENDPOINT", modify_default_endpoint(OsConfigServiceAsyncClient))
@mock.patch.dict(os.environ, {"GOOGLE_API_USE_MTLS_ENDPOINT": "auto"})
def test_os_config_service_client_mtls_env_auto(client_class, transport_class, transport_name, use_client_cert_env):
    # This tests the endpoint autoswitch behavior. Endpoint is autoswitched to the default
    # mtls endpoint, if GOOGLE_API_USE_CLIENT_CERTIFICATE is "true" and client cert exists.

    # Check the case client_cert_source is provided. Whether client cert is used depends on
    # GOOGLE_API_USE_CLIENT_CERTIFICATE value.
    with mock.patch.dict(os.environ, {"GOOGLE_API_USE_CLIENT_CERTIFICATE": use_client_cert_env}):
        options = client_options.ClientOptions(client_cert_source=client_cert_source_callback)
        with mock.patch.object(transport_class, '__init__') as patched:
            patched.return_value = None
            client = client_class(client_options=options)

            if use_client_cert_env == "false":
                expected_client_cert_source = None
                expected_host = client.DEFAULT_ENDPOINT
            else:
                expected_client_cert_source = client_cert_source_callback
                expected_host = client.DEFAULT_MTLS_ENDPOINT

            patched.assert_called_once_with(
                credentials=None,
                credentials_file=None,
                host=expected_host,
                scopes=None,
                client_cert_source_for_mtls=expected_client_cert_source,
                quota_project_id=None,
                client_info=transports.base.DEFAULT_CLIENT_INFO,
            )

    # Check the case ADC client cert is provided. Whether client cert is used depends on
    # GOOGLE_API_USE_CLIENT_CERTIFICATE value.
    with mock.patch.dict(os.environ, {"GOOGLE_API_USE_CLIENT_CERTIFICATE": use_client_cert_env}):
        with mock.patch.object(transport_class, '__init__') as patched:
            with mock.patch('google.auth.transport.mtls.has_default_client_cert_source', return_value=True):
                with mock.patch('google.auth.transport.mtls.default_client_cert_source', return_value=client_cert_source_callback):
                    if use_client_cert_env == "false":
                        expected_host = client.DEFAULT_ENDPOINT
                        expected_client_cert_source = None
                    else:
                        expected_host = client.DEFAULT_MTLS_ENDPOINT
                        expected_client_cert_source = client_cert_source_callback

                    patched.return_value = None
                    client = client_class()
                    patched.assert_called_once_with(
                        credentials=None,
                        credentials_file=None,
                        host=expected_host,
                        scopes=None,
                        client_cert_source_for_mtls=expected_client_cert_source,
                        quota_project_id=None,
                        client_info=transports.base.DEFAULT_CLIENT_INFO,
                    )

    # Check the case client_cert_source and ADC client cert are not provided.
    with mock.patch.dict(os.environ, {"GOOGLE_API_USE_CLIENT_CERTIFICATE": use_client_cert_env}):
        with mock.patch.object(transport_class, '__init__') as patched:
            with mock.patch("google.auth.transport.mtls.has_default_client_cert_source", return_value=False):
                patched.return_value = None
                client = client_class()
                patched.assert_called_once_with(
                    credentials=None,
                    credentials_file=None,
                    host=client.DEFAULT_ENDPOINT,
                    scopes=None,
                    client_cert_source_for_mtls=None,
                    quota_project_id=None,
                    client_info=transports.base.DEFAULT_CLIENT_INFO,
                )


@pytest.mark.parametrize("client_class,transport_class,transport_name", [
    (OsConfigServiceClient, transports.OsConfigServiceGrpcTransport, "grpc"),
    (OsConfigServiceAsyncClient, transports.OsConfigServiceGrpcAsyncIOTransport, "grpc_asyncio"),
])
def test_os_config_service_client_client_options_scopes(client_class, transport_class, transport_name):
    # Check the case scopes are provided.
    options = client_options.ClientOptions(
        scopes=["1", "2"],
    )
    with mock.patch.object(transport_class, '__init__') as patched:
        patched.return_value = None
        client = client_class(client_options=options)
        patched.assert_called_once_with(
            credentials=None,
            credentials_file=None,
            host=client.DEFAULT_ENDPOINT,
            scopes=["1", "2"],
            client_cert_source_for_mtls=None,
            quota_project_id=None,
            client_info=transports.base.DEFAULT_CLIENT_INFO,
        )

@pytest.mark.parametrize("client_class,transport_class,transport_name", [
    (OsConfigServiceClient, transports.OsConfigServiceGrpcTransport, "grpc"),
    (OsConfigServiceAsyncClient, transports.OsConfigServiceGrpcAsyncIOTransport, "grpc_asyncio"),
])
def test_os_config_service_client_client_options_credentials_file(client_class, transport_class, transport_name):
    # Check the case credentials file is provided.
    options = client_options.ClientOptions(
        credentials_file="credentials.json"
    )
    with mock.patch.object(transport_class, '__init__') as patched:
        patched.return_value = None
        client = client_class(client_options=options)
        patched.assert_called_once_with(
            credentials=None,
            credentials_file="credentials.json",
            host=client.DEFAULT_ENDPOINT,
            scopes=None,
            client_cert_source_for_mtls=None,
            quota_project_id=None,
            client_info=transports.base.DEFAULT_CLIENT_INFO,
        )


def test_os_config_service_client_client_options_from_dict():
    with mock.patch('google.cloud.osconfig_v1beta.services.os_config_service.transports.OsConfigServiceGrpcTransport.__init__') as grpc_transport:
        grpc_transport.return_value = None
        client = OsConfigServiceClient(
            client_options={'api_endpoint': 'squid.clam.whelk'}
        )
        grpc_transport.assert_called_once_with(
            credentials=None,
            credentials_file=None,
            host="squid.clam.whelk",
            scopes=None,
            client_cert_source_for_mtls=None,
            quota_project_id=None,
            client_info=transports.base.DEFAULT_CLIENT_INFO,
        )


def test_execute_patch_job(transport: str = 'grpc', request_type=patch_jobs.ExecutePatchJobRequest):
    client = OsConfigServiceClient(
        credentials=credentials.AnonymousCredentials(),
        transport=transport,
    )

    # Everything is optional in proto3 as far as the runtime is concerned,
    # and we are mocking out the actual API, so just send an empty request.
    request = request_type()

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.execute_patch_job),
            '__call__') as call:
        # Designate an appropriate return value for the call.
        call.return_value = patch_jobs.PatchJob(
            name='name_value',

            display_name='display_name_value',

            description='description_value',

            state=patch_jobs.PatchJob.State.STARTED,

            dry_run=True,

            error_message='error_message_value',

            percent_complete=0.1705,

            patch_deployment='patch_deployment_value',

        )

        response = client.execute_patch_job(request)

        # Establish that the underlying gRPC stub method was called.
        assert len(call.mock_calls) == 1
        _, args, _ = call.mock_calls[0]

        assert args[0] == patch_jobs.ExecutePatchJobRequest()

    # Establish that the response is the type that we expect.

    assert isinstance(response, patch_jobs.PatchJob)

    assert response.name == 'name_value'

    assert response.display_name == 'display_name_value'

    assert response.description == 'description_value'

    assert response.state == patch_jobs.PatchJob.State.STARTED

    assert response.dry_run is True

    assert response.error_message == 'error_message_value'

    assert math.isclose(response.percent_complete, 0.1705, rel_tol=1e-6)

    assert response.patch_deployment == 'patch_deployment_value'


def test_execute_patch_job_from_dict():
    test_execute_patch_job(request_type=dict)


@pytest.mark.asyncio
async def test_execute_patch_job_async(transport: str = 'grpc_asyncio', request_type=patch_jobs.ExecutePatchJobRequest):
    client = OsConfigServiceAsyncClient(
        credentials=credentials.AnonymousCredentials(),
        transport=transport,
    )

    # Everything is optional in proto3 as far as the runtime is concerned,
    # and we are mocking out the actual API, so just send an empty request.
    request = request_type()

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.execute_patch_job),
            '__call__') as call:
        # Designate an appropriate return value for the call.
        call.return_value = grpc_helpers_async.FakeUnaryUnaryCall(patch_jobs.PatchJob(
            name='name_value',
            display_name='display_name_value',
            description='description_value',
            state=patch_jobs.PatchJob.State.STARTED,
            dry_run=True,
            error_message='error_message_value',
            percent_complete=0.1705,
            patch_deployment='patch_deployment_value',
        ))

        response = await client.execute_patch_job(request)

        # Establish that the underlying gRPC stub method was called.
        assert len(call.mock_calls)
        _, args, _ = call.mock_calls[0]

        assert args[0] == patch_jobs.ExecutePatchJobRequest()

    # Establish that the response is the type that we expect.
    assert isinstance(response, patch_jobs.PatchJob)

    assert response.name == 'name_value'

    assert response.display_name == 'display_name_value'

    assert response.description == 'description_value'

    assert response.state == patch_jobs.PatchJob.State.STARTED

    assert response.dry_run is True

    assert response.error_message == 'error_message_value'

    assert math.isclose(response.percent_complete, 0.1705, rel_tol=1e-6)

    assert response.patch_deployment == 'patch_deployment_value'


@pytest.mark.asyncio
async def test_execute_patch_job_async_from_dict():
    await test_execute_patch_job_async(request_type=dict)


def test_execute_patch_job_field_headers():
    client = OsConfigServiceClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Any value that is part of the HTTP/1.1 URI should be sent as
    # a field header. Set these to a non-empty value.
    request = patch_jobs.ExecutePatchJobRequest()
    request.parent = 'parent/value'

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.execute_patch_job),
            '__call__') as call:
        call.return_value = patch_jobs.PatchJob()

        client.execute_patch_job(request)

        # Establish that the underlying gRPC stub method was called.
        assert len(call.mock_calls) == 1
        _, args, _ = call.mock_calls[0]
        assert args[0] == request

    # Establish that the field header was sent.
    _, _, kw = call.mock_calls[0]
    assert (
        'x-goog-request-params',
        'parent=parent/value',
    ) in kw['metadata']


@pytest.mark.asyncio
async def test_execute_patch_job_field_headers_async():
    client = OsConfigServiceAsyncClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Any value that is part of the HTTP/1.1 URI should be sent as
    # a field header. Set these to a non-empty value.
    request = patch_jobs.ExecutePatchJobRequest()
    request.parent = 'parent/value'

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.execute_patch_job),
            '__call__') as call:
        call.return_value = grpc_helpers_async.FakeUnaryUnaryCall(patch_jobs.PatchJob())

        await client.execute_patch_job(request)

        # Establish that the underlying gRPC stub method was called.
        assert len(call.mock_calls)
        _, args, _ = call.mock_calls[0]
        assert args[0] == request

    # Establish that the field header was sent.
    _, _, kw = call.mock_calls[0]
    assert (
        'x-goog-request-params',
        'parent=parent/value',
    ) in kw['metadata']


def test_get_patch_job(transport: str = 'grpc', request_type=patch_jobs.GetPatchJobRequest):
    client = OsConfigServiceClient(
        credentials=credentials.AnonymousCredentials(),
        transport=transport,
    )

    # Everything is optional in proto3 as far as the runtime is concerned,
    # and we are mocking out the actual API, so just send an empty request.
    request = request_type()

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.get_patch_job),
            '__call__') as call:
        # Designate an appropriate return value for the call.
        call.return_value = patch_jobs.PatchJob(
            name='name_value',

            display_name='display_name_value',

            description='description_value',

            state=patch_jobs.PatchJob.State.STARTED,

            dry_run=True,

            error_message='error_message_value',

            percent_complete=0.1705,

            patch_deployment='patch_deployment_value',

        )

        response = client.get_patch_job(request)

        # Establish that the underlying gRPC stub method was called.
        assert len(call.mock_calls) == 1
        _, args, _ = call.mock_calls[0]

        assert args[0] == patch_jobs.GetPatchJobRequest()

    # Establish that the response is the type that we expect.

    assert isinstance(response, patch_jobs.PatchJob)

    assert response.name == 'name_value'

    assert response.display_name == 'display_name_value'

    assert response.description == 'description_value'

    assert response.state == patch_jobs.PatchJob.State.STARTED

    assert response.dry_run is True

    assert response.error_message == 'error_message_value'

    assert math.isclose(response.percent_complete, 0.1705, rel_tol=1e-6)

    assert response.patch_deployment == 'patch_deployment_value'


def test_get_patch_job_from_dict():
    test_get_patch_job(request_type=dict)


@pytest.mark.asyncio
async def test_get_patch_job_async(transport: str = 'grpc_asyncio', request_type=patch_jobs.GetPatchJobRequest):
    client = OsConfigServiceAsyncClient(
        credentials=credentials.AnonymousCredentials(),
        transport=transport,
    )

    # Everything is optional in proto3 as far as the runtime is concerned,
    # and we are mocking out the actual API, so just send an empty request.
    request = request_type()

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.get_patch_job),
            '__call__') as call:
        # Designate an appropriate return value for the call.
        call.return_value = grpc_helpers_async.FakeUnaryUnaryCall(patch_jobs.PatchJob(
            name='name_value',
            display_name='display_name_value',
            description='description_value',
            state=patch_jobs.PatchJob.State.STARTED,
            dry_run=True,
            error_message='error_message_value',
            percent_complete=0.1705,
            patch_deployment='patch_deployment_value',
        ))

        response = await client.get_patch_job(request)

        # Establish that the underlying gRPC stub method was called.
        assert len(call.mock_calls)
        _, args, _ = call.mock_calls[0]

        assert args[0] == patch_jobs.GetPatchJobRequest()

    # Establish that the response is the type that we expect.
    assert isinstance(response, patch_jobs.PatchJob)

    assert response.name == 'name_value'

    assert response.display_name == 'display_name_value'

    assert response.description == 'description_value'

    assert response.state == patch_jobs.PatchJob.State.STARTED

    assert response.dry_run is True

    assert response.error_message == 'error_message_value'

    assert math.isclose(response.percent_complete, 0.1705, rel_tol=1e-6)

    assert response.patch_deployment == 'patch_deployment_value'


@pytest.mark.asyncio
async def test_get_patch_job_async_from_dict():
    await test_get_patch_job_async(request_type=dict)


def test_get_patch_job_field_headers():
    client = OsConfigServiceClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Any value that is part of the HTTP/1.1 URI should be sent as
    # a field header. Set these to a non-empty value.
    request = patch_jobs.GetPatchJobRequest()
    request.name = 'name/value'

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.get_patch_job),
            '__call__') as call:
        call.return_value = patch_jobs.PatchJob()

        client.get_patch_job(request)

        # Establish that the underlying gRPC stub method was called.
        assert len(call.mock_calls) == 1
        _, args, _ = call.mock_calls[0]
        assert args[0] == request

    # Establish that the field header was sent.
    _, _, kw = call.mock_calls[0]
    assert (
        'x-goog-request-params',
        'name=name/value',
    ) in kw['metadata']


@pytest.mark.asyncio
async def test_get_patch_job_field_headers_async():
    client = OsConfigServiceAsyncClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Any value that is part of the HTTP/1.1 URI should be sent as
    # a field header. Set these to a non-empty value.
    request = patch_jobs.GetPatchJobRequest()
    request.name = 'name/value'

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.get_patch_job),
            '__call__') as call:
        call.return_value = grpc_helpers_async.FakeUnaryUnaryCall(patch_jobs.PatchJob())

        await client.get_patch_job(request)

        # Establish that the underlying gRPC stub method was called.
        assert len(call.mock_calls)
        _, args, _ = call.mock_calls[0]
        assert args[0] == request

    # Establish that the field header was sent.
    _, _, kw = call.mock_calls[0]
    assert (
        'x-goog-request-params',
        'name=name/value',
    ) in kw['metadata']


def test_cancel_patch_job(transport: str = 'grpc', request_type=patch_jobs.CancelPatchJobRequest):
    client = OsConfigServiceClient(
        credentials=credentials.AnonymousCredentials(),
        transport=transport,
    )

    # Everything is optional in proto3 as far as the runtime is concerned,
    # and we are mocking out the actual API, so just send an empty request.
    request = request_type()

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.cancel_patch_job),
            '__call__') as call:
        # Designate an appropriate return value for the call.
        call.return_value = patch_jobs.PatchJob(
            name='name_value',

            display_name='display_name_value',

            description='description_value',

            state=patch_jobs.PatchJob.State.STARTED,

            dry_run=True,

            error_message='error_message_value',

            percent_complete=0.1705,

            patch_deployment='patch_deployment_value',

        )

        response = client.cancel_patch_job(request)

        # Establish that the underlying gRPC stub method was called.
        assert len(call.mock_calls) == 1
        _, args, _ = call.mock_calls[0]

        assert args[0] == patch_jobs.CancelPatchJobRequest()

    # Establish that the response is the type that we expect.

    assert isinstance(response, patch_jobs.PatchJob)

    assert response.name == 'name_value'

    assert response.display_name == 'display_name_value'

    assert response.description == 'description_value'

    assert response.state == patch_jobs.PatchJob.State.STARTED

    assert response.dry_run is True

    assert response.error_message == 'error_message_value'

    assert math.isclose(response.percent_complete, 0.1705, rel_tol=1e-6)

    assert response.patch_deployment == 'patch_deployment_value'


def test_cancel_patch_job_from_dict():
    test_cancel_patch_job(request_type=dict)


@pytest.mark.asyncio
async def test_cancel_patch_job_async(transport: str = 'grpc_asyncio', request_type=patch_jobs.CancelPatchJobRequest):
    client = OsConfigServiceAsyncClient(
        credentials=credentials.AnonymousCredentials(),
        transport=transport,
    )

    # Everything is optional in proto3 as far as the runtime is concerned,
    # and we are mocking out the actual API, so just send an empty request.
    request = request_type()

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.cancel_patch_job),
            '__call__') as call:
        # Designate an appropriate return value for the call.
        call.return_value = grpc_helpers_async.FakeUnaryUnaryCall(patch_jobs.PatchJob(
            name='name_value',
            display_name='display_name_value',
            description='description_value',
            state=patch_jobs.PatchJob.State.STARTED,
            dry_run=True,
            error_message='error_message_value',
            percent_complete=0.1705,
            patch_deployment='patch_deployment_value',
        ))

        response = await client.cancel_patch_job(request)

        # Establish that the underlying gRPC stub method was called.
        assert len(call.mock_calls)
        _, args, _ = call.mock_calls[0]

        assert args[0] == patch_jobs.CancelPatchJobRequest()

    # Establish that the response is the type that we expect.
    assert isinstance(response, patch_jobs.PatchJob)

    assert response.name == 'name_value'

    assert response.display_name == 'display_name_value'

    assert response.description == 'description_value'

    assert response.state == patch_jobs.PatchJob.State.STARTED

    assert response.dry_run is True

    assert response.error_message == 'error_message_value'

    assert math.isclose(response.percent_complete, 0.1705, rel_tol=1e-6)

    assert response.patch_deployment == 'patch_deployment_value'


@pytest.mark.asyncio
async def test_cancel_patch_job_async_from_dict():
    await test_cancel_patch_job_async(request_type=dict)


def test_cancel_patch_job_field_headers():
    client = OsConfigServiceClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Any value that is part of the HTTP/1.1 URI should be sent as
    # a field header. Set these to a non-empty value.
    request = patch_jobs.CancelPatchJobRequest()
    request.name = 'name/value'

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.cancel_patch_job),
            '__call__') as call:
        call.return_value = patch_jobs.PatchJob()

        client.cancel_patch_job(request)

        # Establish that the underlying gRPC stub method was called.
        assert len(call.mock_calls) == 1
        _, args, _ = call.mock_calls[0]
        assert args[0] == request

    # Establish that the field header was sent.
    _, _, kw = call.mock_calls[0]
    assert (
        'x-goog-request-params',
        'name=name/value',
    ) in kw['metadata']


@pytest.mark.asyncio
async def test_cancel_patch_job_field_headers_async():
    client = OsConfigServiceAsyncClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Any value that is part of the HTTP/1.1 URI should be sent as
    # a field header. Set these to a non-empty value.
    request = patch_jobs.CancelPatchJobRequest()
    request.name = 'name/value'

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.cancel_patch_job),
            '__call__') as call:
        call.return_value = grpc_helpers_async.FakeUnaryUnaryCall(patch_jobs.PatchJob())

        await client.cancel_patch_job(request)

        # Establish that the underlying gRPC stub method was called.
        assert len(call.mock_calls)
        _, args, _ = call.mock_calls[0]
        assert args[0] == request

    # Establish that the field header was sent.
    _, _, kw = call.mock_calls[0]
    assert (
        'x-goog-request-params',
        'name=name/value',
    ) in kw['metadata']


def test_list_patch_jobs(transport: str = 'grpc', request_type=patch_jobs.ListPatchJobsRequest):
    client = OsConfigServiceClient(
        credentials=credentials.AnonymousCredentials(),
        transport=transport,
    )

    # Everything is optional in proto3 as far as the runtime is concerned,
    # and we are mocking out the actual API, so just send an empty request.
    request = request_type()

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.list_patch_jobs),
            '__call__') as call:
        # Designate an appropriate return value for the call.
        call.return_value = patch_jobs.ListPatchJobsResponse(
            next_page_token='next_page_token_value',

        )

        response = client.list_patch_jobs(request)

        # Establish that the underlying gRPC stub method was called.
        assert len(call.mock_calls) == 1
        _, args, _ = call.mock_calls[0]

        assert args[0] == patch_jobs.ListPatchJobsRequest()

    # Establish that the response is the type that we expect.

    assert isinstance(response, pagers.ListPatchJobsPager)

    assert response.next_page_token == 'next_page_token_value'


def test_list_patch_jobs_from_dict():
    test_list_patch_jobs(request_type=dict)


@pytest.mark.asyncio
async def test_list_patch_jobs_async(transport: str = 'grpc_asyncio', request_type=patch_jobs.ListPatchJobsRequest):
    client = OsConfigServiceAsyncClient(
        credentials=credentials.AnonymousCredentials(),
        transport=transport,
    )

    # Everything is optional in proto3 as far as the runtime is concerned,
    # and we are mocking out the actual API, so just send an empty request.
    request = request_type()

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.list_patch_jobs),
            '__call__') as call:
        # Designate an appropriate return value for the call.
        call.return_value = grpc_helpers_async.FakeUnaryUnaryCall(patch_jobs.ListPatchJobsResponse(
            next_page_token='next_page_token_value',
        ))

        response = await client.list_patch_jobs(request)

        # Establish that the underlying gRPC stub method was called.
        assert len(call.mock_calls)
        _, args, _ = call.mock_calls[0]

        assert args[0] == patch_jobs.ListPatchJobsRequest()

    # Establish that the response is the type that we expect.
    assert isinstance(response, pagers.ListPatchJobsAsyncPager)

    assert response.next_page_token == 'next_page_token_value'


@pytest.mark.asyncio
async def test_list_patch_jobs_async_from_dict():
    await test_list_patch_jobs_async(request_type=dict)


def test_list_patch_jobs_field_headers():
    client = OsConfigServiceClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Any value that is part of the HTTP/1.1 URI should be sent as
    # a field header. Set these to a non-empty value.
    request = patch_jobs.ListPatchJobsRequest()
    request.parent = 'parent/value'

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.list_patch_jobs),
            '__call__') as call:
        call.return_value = patch_jobs.ListPatchJobsResponse()

        client.list_patch_jobs(request)

        # Establish that the underlying gRPC stub method was called.
        assert len(call.mock_calls) == 1
        _, args, _ = call.mock_calls[0]
        assert args[0] == request

    # Establish that the field header was sent.
    _, _, kw = call.mock_calls[0]
    assert (
        'x-goog-request-params',
        'parent=parent/value',
    ) in kw['metadata']


@pytest.mark.asyncio
async def test_list_patch_jobs_field_headers_async():
    client = OsConfigServiceAsyncClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Any value that is part of the HTTP/1.1 URI should be sent as
    # a field header. Set these to a non-empty value.
    request = patch_jobs.ListPatchJobsRequest()
    request.parent = 'parent/value'

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.list_patch_jobs),
            '__call__') as call:
        call.return_value = grpc_helpers_async.FakeUnaryUnaryCall(patch_jobs.ListPatchJobsResponse())

        await client.list_patch_jobs(request)

        # Establish that the underlying gRPC stub method was called.
        assert len(call.mock_calls)
        _, args, _ = call.mock_calls[0]
        assert args[0] == request

    # Establish that the field header was sent.
    _, _, kw = call.mock_calls[0]
    assert (
        'x-goog-request-params',
        'parent=parent/value',
    ) in kw['metadata']


def test_list_patch_jobs_pager():
    client = OsConfigServiceClient(
        credentials=credentials.AnonymousCredentials,
    )

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.list_patch_jobs),
            '__call__') as call:
        # Set the response to a series of pages.
        call.side_effect = (
            patch_jobs.ListPatchJobsResponse(
                patch_jobs=[
                    patch_jobs.PatchJob(),
                    patch_jobs.PatchJob(),
                    patch_jobs.PatchJob(),
                ],
                next_page_token='abc',
            ),
            patch_jobs.ListPatchJobsResponse(
                patch_jobs=[],
                next_page_token='def',
            ),
            patch_jobs.ListPatchJobsResponse(
                patch_jobs=[
                    patch_jobs.PatchJob(),
                ],
                next_page_token='ghi',
            ),
            patch_jobs.ListPatchJobsResponse(
                patch_jobs=[
                    patch_jobs.PatchJob(),
                    patch_jobs.PatchJob(),
                ],
            ),
            RuntimeError,
        )

        metadata = ()
        metadata = tuple(metadata) + (
            gapic_v1.routing_header.to_grpc_metadata((
                ('parent', ''),
            )),
        )
        pager = client.list_patch_jobs(request={})

        assert pager._metadata == metadata

        results = [i for i in pager]
        assert len(results) == 6
        assert all(isinstance(i, patch_jobs.PatchJob)
                   for i in results)

def test_list_patch_jobs_pages():
    client = OsConfigServiceClient(
        credentials=credentials.AnonymousCredentials,
    )

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.list_patch_jobs),
            '__call__') as call:
        # Set the response to a series of pages.
        call.side_effect = (
            patch_jobs.ListPatchJobsResponse(
                patch_jobs=[
                    patch_jobs.PatchJob(),
                    patch_jobs.PatchJob(),
                    patch_jobs.PatchJob(),
                ],
                next_page_token='abc',
            ),
            patch_jobs.ListPatchJobsResponse(
                patch_jobs=[],
                next_page_token='def',
            ),
            patch_jobs.ListPatchJobsResponse(
                patch_jobs=[
                    patch_jobs.PatchJob(),
                ],
                next_page_token='ghi',
            ),
            patch_jobs.ListPatchJobsResponse(
                patch_jobs=[
                    patch_jobs.PatchJob(),
                    patch_jobs.PatchJob(),
                ],
            ),
            RuntimeError,
        )
        pages = list(client.list_patch_jobs(request={}).pages)
        for page_, token in zip(pages, ['abc','def','ghi', '']):
            assert page_.raw_page.next_page_token == token

@pytest.mark.asyncio
async def test_list_patch_jobs_async_pager():
    client = OsConfigServiceAsyncClient(
        credentials=credentials.AnonymousCredentials,
    )

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.list_patch_jobs),
            '__call__', new_callable=mock.AsyncMock) as call:
        # Set the response to a series of pages.
        call.side_effect = (
            patch_jobs.ListPatchJobsResponse(
                patch_jobs=[
                    patch_jobs.PatchJob(),
                    patch_jobs.PatchJob(),
                    patch_jobs.PatchJob(),
                ],
                next_page_token='abc',
            ),
            patch_jobs.ListPatchJobsResponse(
                patch_jobs=[],
                next_page_token='def',
            ),
            patch_jobs.ListPatchJobsResponse(
                patch_jobs=[
                    patch_jobs.PatchJob(),
                ],
                next_page_token='ghi',
            ),
            patch_jobs.ListPatchJobsResponse(
                patch_jobs=[
                    patch_jobs.PatchJob(),
                    patch_jobs.PatchJob(),
                ],
            ),
            RuntimeError,
        )
        async_pager = await client.list_patch_jobs(request={},)
        assert async_pager.next_page_token == 'abc'
        responses = []
        async for response in async_pager:
            responses.append(response)

        assert len(responses) == 6
        assert all(isinstance(i, patch_jobs.PatchJob)
                   for i in responses)

@pytest.mark.asyncio
async def test_list_patch_jobs_async_pages():
    client = OsConfigServiceAsyncClient(
        credentials=credentials.AnonymousCredentials,
    )

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.list_patch_jobs),
            '__call__', new_callable=mock.AsyncMock) as call:
        # Set the response to a series of pages.
        call.side_effect = (
            patch_jobs.ListPatchJobsResponse(
                patch_jobs=[
                    patch_jobs.PatchJob(),
                    patch_jobs.PatchJob(),
                    patch_jobs.PatchJob(),
                ],
                next_page_token='abc',
            ),
            patch_jobs.ListPatchJobsResponse(
                patch_jobs=[],
                next_page_token='def',
            ),
            patch_jobs.ListPatchJobsResponse(
                patch_jobs=[
                    patch_jobs.PatchJob(),
                ],
                next_page_token='ghi',
            ),
            patch_jobs.ListPatchJobsResponse(
                patch_jobs=[
                    patch_jobs.PatchJob(),
                    patch_jobs.PatchJob(),
                ],
            ),
            RuntimeError,
        )
        pages = []
        async for page_ in (await client.list_patch_jobs(request={})).pages:
            pages.append(page_)
        for page_, token in zip(pages, ['abc','def','ghi', '']):
            assert page_.raw_page.next_page_token == token


def test_list_patch_job_instance_details(transport: str = 'grpc', request_type=patch_jobs.ListPatchJobInstanceDetailsRequest):
    client = OsConfigServiceClient(
        credentials=credentials.AnonymousCredentials(),
        transport=transport,
    )

    # Everything is optional in proto3 as far as the runtime is concerned,
    # and we are mocking out the actual API, so just send an empty request.
    request = request_type()

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.list_patch_job_instance_details),
            '__call__') as call:
        # Designate an appropriate return value for the call.
        call.return_value = patch_jobs.ListPatchJobInstanceDetailsResponse(
            next_page_token='next_page_token_value',

        )

        response = client.list_patch_job_instance_details(request)

        # Establish that the underlying gRPC stub method was called.
        assert len(call.mock_calls) == 1
        _, args, _ = call.mock_calls[0]

        assert args[0] == patch_jobs.ListPatchJobInstanceDetailsRequest()

    # Establish that the response is the type that we expect.

    assert isinstance(response, pagers.ListPatchJobInstanceDetailsPager)

    assert response.next_page_token == 'next_page_token_value'


def test_list_patch_job_instance_details_from_dict():
    test_list_patch_job_instance_details(request_type=dict)


@pytest.mark.asyncio
async def test_list_patch_job_instance_details_async(transport: str = 'grpc_asyncio', request_type=patch_jobs.ListPatchJobInstanceDetailsRequest):
    client = OsConfigServiceAsyncClient(
        credentials=credentials.AnonymousCredentials(),
        transport=transport,
    )

    # Everything is optional in proto3 as far as the runtime is concerned,
    # and we are mocking out the actual API, so just send an empty request.
    request = request_type()

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.list_patch_job_instance_details),
            '__call__') as call:
        # Designate an appropriate return value for the call.
        call.return_value = grpc_helpers_async.FakeUnaryUnaryCall(patch_jobs.ListPatchJobInstanceDetailsResponse(
            next_page_token='next_page_token_value',
        ))

        response = await client.list_patch_job_instance_details(request)

        # Establish that the underlying gRPC stub method was called.
        assert len(call.mock_calls)
        _, args, _ = call.mock_calls[0]

        assert args[0] == patch_jobs.ListPatchJobInstanceDetailsRequest()

    # Establish that the response is the type that we expect.
    assert isinstance(response, pagers.ListPatchJobInstanceDetailsAsyncPager)

    assert response.next_page_token == 'next_page_token_value'


@pytest.mark.asyncio
async def test_list_patch_job_instance_details_async_from_dict():
    await test_list_patch_job_instance_details_async(request_type=dict)


def test_list_patch_job_instance_details_field_headers():
    client = OsConfigServiceClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Any value that is part of the HTTP/1.1 URI should be sent as
    # a field header. Set these to a non-empty value.
    request = patch_jobs.ListPatchJobInstanceDetailsRequest()
    request.parent = 'parent/value'

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.list_patch_job_instance_details),
            '__call__') as call:
        call.return_value = patch_jobs.ListPatchJobInstanceDetailsResponse()

        client.list_patch_job_instance_details(request)

        # Establish that the underlying gRPC stub method was called.
        assert len(call.mock_calls) == 1
        _, args, _ = call.mock_calls[0]
        assert args[0] == request

    # Establish that the field header was sent.
    _, _, kw = call.mock_calls[0]
    assert (
        'x-goog-request-params',
        'parent=parent/value',
    ) in kw['metadata']


@pytest.mark.asyncio
async def test_list_patch_job_instance_details_field_headers_async():
    client = OsConfigServiceAsyncClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Any value that is part of the HTTP/1.1 URI should be sent as
    # a field header. Set these to a non-empty value.
    request = patch_jobs.ListPatchJobInstanceDetailsRequest()
    request.parent = 'parent/value'

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.list_patch_job_instance_details),
            '__call__') as call:
        call.return_value = grpc_helpers_async.FakeUnaryUnaryCall(patch_jobs.ListPatchJobInstanceDetailsResponse())

        await client.list_patch_job_instance_details(request)

        # Establish that the underlying gRPC stub method was called.
        assert len(call.mock_calls)
        _, args, _ = call.mock_calls[0]
        assert args[0] == request

    # Establish that the field header was sent.
    _, _, kw = call.mock_calls[0]
    assert (
        'x-goog-request-params',
        'parent=parent/value',
    ) in kw['metadata']


def test_list_patch_job_instance_details_flattened():
    client = OsConfigServiceClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.list_patch_job_instance_details),
            '__call__') as call:
        # Designate an appropriate return value for the call.
        call.return_value = patch_jobs.ListPatchJobInstanceDetailsResponse()

        # Call the method with a truthy value for each flattened field,
        # using the keyword arguments to the method.
        client.list_patch_job_instance_details(
            parent='parent_value',
        )

        # Establish that the underlying call was made with the expected
        # request object values.
        assert len(call.mock_calls) == 1
        _, args, _ = call.mock_calls[0]

        assert args[0].parent == 'parent_value'


def test_list_patch_job_instance_details_flattened_error():
    client = OsConfigServiceClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Attempting to call a method with both a request object and flattened
    # fields is an error.
    with pytest.raises(ValueError):
        client.list_patch_job_instance_details(
            patch_jobs.ListPatchJobInstanceDetailsRequest(),
            parent='parent_value',
        )


@pytest.mark.asyncio
async def test_list_patch_job_instance_details_flattened_async():
    client = OsConfigServiceAsyncClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.list_patch_job_instance_details),
            '__call__') as call:
        # Designate an appropriate return value for the call.
        call.return_value = patch_jobs.ListPatchJobInstanceDetailsResponse()

        call.return_value = grpc_helpers_async.FakeUnaryUnaryCall(patch_jobs.ListPatchJobInstanceDetailsResponse())
        # Call the method with a truthy value for each flattened field,
        # using the keyword arguments to the method.
        response = await client.list_patch_job_instance_details(
            parent='parent_value',
        )

        # Establish that the underlying call was made with the expected
        # request object values.
        assert len(call.mock_calls)
        _, args, _ = call.mock_calls[0]

        assert args[0].parent == 'parent_value'


@pytest.mark.asyncio
async def test_list_patch_job_instance_details_flattened_error_async():
    client = OsConfigServiceAsyncClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Attempting to call a method with both a request object and flattened
    # fields is an error.
    with pytest.raises(ValueError):
        await client.list_patch_job_instance_details(
            patch_jobs.ListPatchJobInstanceDetailsRequest(),
            parent='parent_value',
        )


def test_list_patch_job_instance_details_pager():
    client = OsConfigServiceClient(
        credentials=credentials.AnonymousCredentials,
    )

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.list_patch_job_instance_details),
            '__call__') as call:
        # Set the response to a series of pages.
        call.side_effect = (
            patch_jobs.ListPatchJobInstanceDetailsResponse(
                patch_job_instance_details=[
                    patch_jobs.PatchJobInstanceDetails(),
                    patch_jobs.PatchJobInstanceDetails(),
                    patch_jobs.PatchJobInstanceDetails(),
                ],
                next_page_token='abc',
            ),
            patch_jobs.ListPatchJobInstanceDetailsResponse(
                patch_job_instance_details=[],
                next_page_token='def',
            ),
            patch_jobs.ListPatchJobInstanceDetailsResponse(
                patch_job_instance_details=[
                    patch_jobs.PatchJobInstanceDetails(),
                ],
                next_page_token='ghi',
            ),
            patch_jobs.ListPatchJobInstanceDetailsResponse(
                patch_job_instance_details=[
                    patch_jobs.PatchJobInstanceDetails(),
                    patch_jobs.PatchJobInstanceDetails(),
                ],
            ),
            RuntimeError,
        )

        metadata = ()
        metadata = tuple(metadata) + (
            gapic_v1.routing_header.to_grpc_metadata((
                ('parent', ''),
            )),
        )
        pager = client.list_patch_job_instance_details(request={})

        assert pager._metadata == metadata

        results = [i for i in pager]
        assert len(results) == 6
        assert all(isinstance(i, patch_jobs.PatchJobInstanceDetails)
                   for i in results)

def test_list_patch_job_instance_details_pages():
    client = OsConfigServiceClient(
        credentials=credentials.AnonymousCredentials,
    )

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.list_patch_job_instance_details),
            '__call__') as call:
        # Set the response to a series of pages.
        call.side_effect = (
            patch_jobs.ListPatchJobInstanceDetailsResponse(
                patch_job_instance_details=[
                    patch_jobs.PatchJobInstanceDetails(),
                    patch_jobs.PatchJobInstanceDetails(),
                    patch_jobs.PatchJobInstanceDetails(),
                ],
                next_page_token='abc',
            ),
            patch_jobs.ListPatchJobInstanceDetailsResponse(
                patch_job_instance_details=[],
                next_page_token='def',
            ),
            patch_jobs.ListPatchJobInstanceDetailsResponse(
                patch_job_instance_details=[
                    patch_jobs.PatchJobInstanceDetails(),
                ],
                next_page_token='ghi',
            ),
            patch_jobs.ListPatchJobInstanceDetailsResponse(
                patch_job_instance_details=[
                    patch_jobs.PatchJobInstanceDetails(),
                    patch_jobs.PatchJobInstanceDetails(),
                ],
            ),
            RuntimeError,
        )
        pages = list(client.list_patch_job_instance_details(request={}).pages)
        for page_, token in zip(pages, ['abc','def','ghi', '']):
            assert page_.raw_page.next_page_token == token

@pytest.mark.asyncio
async def test_list_patch_job_instance_details_async_pager():
    client = OsConfigServiceAsyncClient(
        credentials=credentials.AnonymousCredentials,
    )

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.list_patch_job_instance_details),
            '__call__', new_callable=mock.AsyncMock) as call:
        # Set the response to a series of pages.
        call.side_effect = (
            patch_jobs.ListPatchJobInstanceDetailsResponse(
                patch_job_instance_details=[
                    patch_jobs.PatchJobInstanceDetails(),
                    patch_jobs.PatchJobInstanceDetails(),
                    patch_jobs.PatchJobInstanceDetails(),
                ],
                next_page_token='abc',
            ),
            patch_jobs.ListPatchJobInstanceDetailsResponse(
                patch_job_instance_details=[],
                next_page_token='def',
            ),
            patch_jobs.ListPatchJobInstanceDetailsResponse(
                patch_job_instance_details=[
                    patch_jobs.PatchJobInstanceDetails(),
                ],
                next_page_token='ghi',
            ),
            patch_jobs.ListPatchJobInstanceDetailsResponse(
                patch_job_instance_details=[
                    patch_jobs.PatchJobInstanceDetails(),
                    patch_jobs.PatchJobInstanceDetails(),
                ],
            ),
            RuntimeError,
        )
        async_pager = await client.list_patch_job_instance_details(request={},)
        assert async_pager.next_page_token == 'abc'
        responses = []
        async for response in async_pager:
            responses.append(response)

        assert len(responses) == 6
        assert all(isinstance(i, patch_jobs.PatchJobInstanceDetails)
                   for i in responses)

@pytest.mark.asyncio
async def test_list_patch_job_instance_details_async_pages():
    client = OsConfigServiceAsyncClient(
        credentials=credentials.AnonymousCredentials,
    )

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.list_patch_job_instance_details),
            '__call__', new_callable=mock.AsyncMock) as call:
        # Set the response to a series of pages.
        call.side_effect = (
            patch_jobs.ListPatchJobInstanceDetailsResponse(
                patch_job_instance_details=[
                    patch_jobs.PatchJobInstanceDetails(),
                    patch_jobs.PatchJobInstanceDetails(),
                    patch_jobs.PatchJobInstanceDetails(),
                ],
                next_page_token='abc',
            ),
            patch_jobs.ListPatchJobInstanceDetailsResponse(
                patch_job_instance_details=[],
                next_page_token='def',
            ),
            patch_jobs.ListPatchJobInstanceDetailsResponse(
                patch_job_instance_details=[
                    patch_jobs.PatchJobInstanceDetails(),
                ],
                next_page_token='ghi',
            ),
            patch_jobs.ListPatchJobInstanceDetailsResponse(
                patch_job_instance_details=[
                    patch_jobs.PatchJobInstanceDetails(),
                    patch_jobs.PatchJobInstanceDetails(),
                ],
            ),
            RuntimeError,
        )
        pages = []
        async for page_ in (await client.list_patch_job_instance_details(request={})).pages:
            pages.append(page_)
        for page_, token in zip(pages, ['abc','def','ghi', '']):
            assert page_.raw_page.next_page_token == token


def test_create_patch_deployment(transport: str = 'grpc', request_type=patch_deployments.CreatePatchDeploymentRequest):
    client = OsConfigServiceClient(
        credentials=credentials.AnonymousCredentials(),
        transport=transport,
    )

    # Everything is optional in proto3 as far as the runtime is concerned,
    # and we are mocking out the actual API, so just send an empty request.
    request = request_type()

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.create_patch_deployment),
            '__call__') as call:
        # Designate an appropriate return value for the call.
        call.return_value = patch_deployments.PatchDeployment(
            name='name_value',

            description='description_value',

            one_time_schedule=patch_deployments.OneTimeSchedule(execute_time=timestamp.Timestamp(seconds=751)),
        )

        response = client.create_patch_deployment(request)

        # Establish that the underlying gRPC stub method was called.
        assert len(call.mock_calls) == 1
        _, args, _ = call.mock_calls[0]

        assert args[0] == patch_deployments.CreatePatchDeploymentRequest()

    # Establish that the response is the type that we expect.

    assert isinstance(response, patch_deployments.PatchDeployment)

    assert response.name == 'name_value'

    assert response.description == 'description_value'


def test_create_patch_deployment_from_dict():
    test_create_patch_deployment(request_type=dict)


@pytest.mark.asyncio
async def test_create_patch_deployment_async(transport: str = 'grpc_asyncio', request_type=patch_deployments.CreatePatchDeploymentRequest):
    client = OsConfigServiceAsyncClient(
        credentials=credentials.AnonymousCredentials(),
        transport=transport,
    )

    # Everything is optional in proto3 as far as the runtime is concerned,
    # and we are mocking out the actual API, so just send an empty request.
    request = request_type()

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.create_patch_deployment),
            '__call__') as call:
        # Designate an appropriate return value for the call.
        call.return_value = grpc_helpers_async.FakeUnaryUnaryCall(patch_deployments.PatchDeployment(
            name='name_value',
            description='description_value',
        ))

        response = await client.create_patch_deployment(request)

        # Establish that the underlying gRPC stub method was called.
        assert len(call.mock_calls)
        _, args, _ = call.mock_calls[0]

        assert args[0] == patch_deployments.CreatePatchDeploymentRequest()

    # Establish that the response is the type that we expect.
    assert isinstance(response, patch_deployments.PatchDeployment)

    assert response.name == 'name_value'

    assert response.description == 'description_value'


@pytest.mark.asyncio
async def test_create_patch_deployment_async_from_dict():
    await test_create_patch_deployment_async(request_type=dict)


def test_create_patch_deployment_field_headers():
    client = OsConfigServiceClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Any value that is part of the HTTP/1.1 URI should be sent as
    # a field header. Set these to a non-empty value.
    request = patch_deployments.CreatePatchDeploymentRequest()
    request.parent = 'parent/value'

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.create_patch_deployment),
            '__call__') as call:
        call.return_value = patch_deployments.PatchDeployment()

        client.create_patch_deployment(request)

        # Establish that the underlying gRPC stub method was called.
        assert len(call.mock_calls) == 1
        _, args, _ = call.mock_calls[0]
        assert args[0] == request

    # Establish that the field header was sent.
    _, _, kw = call.mock_calls[0]
    assert (
        'x-goog-request-params',
        'parent=parent/value',
    ) in kw['metadata']


@pytest.mark.asyncio
async def test_create_patch_deployment_field_headers_async():
    client = OsConfigServiceAsyncClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Any value that is part of the HTTP/1.1 URI should be sent as
    # a field header. Set these to a non-empty value.
    request = patch_deployments.CreatePatchDeploymentRequest()
    request.parent = 'parent/value'

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.create_patch_deployment),
            '__call__') as call:
        call.return_value = grpc_helpers_async.FakeUnaryUnaryCall(patch_deployments.PatchDeployment())

        await client.create_patch_deployment(request)

        # Establish that the underlying gRPC stub method was called.
        assert len(call.mock_calls)
        _, args, _ = call.mock_calls[0]
        assert args[0] == request

    # Establish that the field header was sent.
    _, _, kw = call.mock_calls[0]
    assert (
        'x-goog-request-params',
        'parent=parent/value',
    ) in kw['metadata']


def test_get_patch_deployment(transport: str = 'grpc', request_type=patch_deployments.GetPatchDeploymentRequest):
    client = OsConfigServiceClient(
        credentials=credentials.AnonymousCredentials(),
        transport=transport,
    )

    # Everything is optional in proto3 as far as the runtime is concerned,
    # and we are mocking out the actual API, so just send an empty request.
    request = request_type()

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.get_patch_deployment),
            '__call__') as call:
        # Designate an appropriate return value for the call.
        call.return_value = patch_deployments.PatchDeployment(
            name='name_value',

            description='description_value',

            one_time_schedule=patch_deployments.OneTimeSchedule(execute_time=timestamp.Timestamp(seconds=751)),
        )

        response = client.get_patch_deployment(request)

        # Establish that the underlying gRPC stub method was called.
        assert len(call.mock_calls) == 1
        _, args, _ = call.mock_calls[0]

        assert args[0] == patch_deployments.GetPatchDeploymentRequest()

    # Establish that the response is the type that we expect.

    assert isinstance(response, patch_deployments.PatchDeployment)

    assert response.name == 'name_value'

    assert response.description == 'description_value'


def test_get_patch_deployment_from_dict():
    test_get_patch_deployment(request_type=dict)


@pytest.mark.asyncio
async def test_get_patch_deployment_async(transport: str = 'grpc_asyncio', request_type=patch_deployments.GetPatchDeploymentRequest):
    client = OsConfigServiceAsyncClient(
        credentials=credentials.AnonymousCredentials(),
        transport=transport,
    )

    # Everything is optional in proto3 as far as the runtime is concerned,
    # and we are mocking out the actual API, so just send an empty request.
    request = request_type()

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.get_patch_deployment),
            '__call__') as call:
        # Designate an appropriate return value for the call.
        call.return_value = grpc_helpers_async.FakeUnaryUnaryCall(patch_deployments.PatchDeployment(
            name='name_value',
            description='description_value',
        ))

        response = await client.get_patch_deployment(request)

        # Establish that the underlying gRPC stub method was called.
        assert len(call.mock_calls)
        _, args, _ = call.mock_calls[0]

        assert args[0] == patch_deployments.GetPatchDeploymentRequest()

    # Establish that the response is the type that we expect.
    assert isinstance(response, patch_deployments.PatchDeployment)

    assert response.name == 'name_value'

    assert response.description == 'description_value'


@pytest.mark.asyncio
async def test_get_patch_deployment_async_from_dict():
    await test_get_patch_deployment_async(request_type=dict)


def test_get_patch_deployment_field_headers():
    client = OsConfigServiceClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Any value that is part of the HTTP/1.1 URI should be sent as
    # a field header. Set these to a non-empty value.
    request = patch_deployments.GetPatchDeploymentRequest()
    request.name = 'name/value'

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.get_patch_deployment),
            '__call__') as call:
        call.return_value = patch_deployments.PatchDeployment()

        client.get_patch_deployment(request)

        # Establish that the underlying gRPC stub method was called.
        assert len(call.mock_calls) == 1
        _, args, _ = call.mock_calls[0]
        assert args[0] == request

    # Establish that the field header was sent.
    _, _, kw = call.mock_calls[0]
    assert (
        'x-goog-request-params',
        'name=name/value',
    ) in kw['metadata']


@pytest.mark.asyncio
async def test_get_patch_deployment_field_headers_async():
    client = OsConfigServiceAsyncClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Any value that is part of the HTTP/1.1 URI should be sent as
    # a field header. Set these to a non-empty value.
    request = patch_deployments.GetPatchDeploymentRequest()
    request.name = 'name/value'

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.get_patch_deployment),
            '__call__') as call:
        call.return_value = grpc_helpers_async.FakeUnaryUnaryCall(patch_deployments.PatchDeployment())

        await client.get_patch_deployment(request)

        # Establish that the underlying gRPC stub method was called.
        assert len(call.mock_calls)
        _, args, _ = call.mock_calls[0]
        assert args[0] == request

    # Establish that the field header was sent.
    _, _, kw = call.mock_calls[0]
    assert (
        'x-goog-request-params',
        'name=name/value',
    ) in kw['metadata']


def test_list_patch_deployments(transport: str = 'grpc', request_type=patch_deployments.ListPatchDeploymentsRequest):
    client = OsConfigServiceClient(
        credentials=credentials.AnonymousCredentials(),
        transport=transport,
    )

    # Everything is optional in proto3 as far as the runtime is concerned,
    # and we are mocking out the actual API, so just send an empty request.
    request = request_type()

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.list_patch_deployments),
            '__call__') as call:
        # Designate an appropriate return value for the call.
        call.return_value = patch_deployments.ListPatchDeploymentsResponse(
            next_page_token='next_page_token_value',

        )

        response = client.list_patch_deployments(request)

        # Establish that the underlying gRPC stub method was called.
        assert len(call.mock_calls) == 1
        _, args, _ = call.mock_calls[0]

        assert args[0] == patch_deployments.ListPatchDeploymentsRequest()

    # Establish that the response is the type that we expect.

    assert isinstance(response, pagers.ListPatchDeploymentsPager)

    assert response.next_page_token == 'next_page_token_value'


def test_list_patch_deployments_from_dict():
    test_list_patch_deployments(request_type=dict)


@pytest.mark.asyncio
async def test_list_patch_deployments_async(transport: str = 'grpc_asyncio', request_type=patch_deployments.ListPatchDeploymentsRequest):
    client = OsConfigServiceAsyncClient(
        credentials=credentials.AnonymousCredentials(),
        transport=transport,
    )

    # Everything is optional in proto3 as far as the runtime is concerned,
    # and we are mocking out the actual API, so just send an empty request.
    request = request_type()

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.list_patch_deployments),
            '__call__') as call:
        # Designate an appropriate return value for the call.
        call.return_value = grpc_helpers_async.FakeUnaryUnaryCall(patch_deployments.ListPatchDeploymentsResponse(
            next_page_token='next_page_token_value',
        ))

        response = await client.list_patch_deployments(request)

        # Establish that the underlying gRPC stub method was called.
        assert len(call.mock_calls)
        _, args, _ = call.mock_calls[0]

        assert args[0] == patch_deployments.ListPatchDeploymentsRequest()

    # Establish that the response is the type that we expect.
    assert isinstance(response, pagers.ListPatchDeploymentsAsyncPager)

    assert response.next_page_token == 'next_page_token_value'


@pytest.mark.asyncio
async def test_list_patch_deployments_async_from_dict():
    await test_list_patch_deployments_async(request_type=dict)


def test_list_patch_deployments_field_headers():
    client = OsConfigServiceClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Any value that is part of the HTTP/1.1 URI should be sent as
    # a field header. Set these to a non-empty value.
    request = patch_deployments.ListPatchDeploymentsRequest()
    request.parent = 'parent/value'

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.list_patch_deployments),
            '__call__') as call:
        call.return_value = patch_deployments.ListPatchDeploymentsResponse()

        client.list_patch_deployments(request)

        # Establish that the underlying gRPC stub method was called.
        assert len(call.mock_calls) == 1
        _, args, _ = call.mock_calls[0]
        assert args[0] == request

    # Establish that the field header was sent.
    _, _, kw = call.mock_calls[0]
    assert (
        'x-goog-request-params',
        'parent=parent/value',
    ) in kw['metadata']


@pytest.mark.asyncio
async def test_list_patch_deployments_field_headers_async():
    client = OsConfigServiceAsyncClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Any value that is part of the HTTP/1.1 URI should be sent as
    # a field header. Set these to a non-empty value.
    request = patch_deployments.ListPatchDeploymentsRequest()
    request.parent = 'parent/value'

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.list_patch_deployments),
            '__call__') as call:
        call.return_value = grpc_helpers_async.FakeUnaryUnaryCall(patch_deployments.ListPatchDeploymentsResponse())

        await client.list_patch_deployments(request)

        # Establish that the underlying gRPC stub method was called.
        assert len(call.mock_calls)
        _, args, _ = call.mock_calls[0]
        assert args[0] == request

    # Establish that the field header was sent.
    _, _, kw = call.mock_calls[0]
    assert (
        'x-goog-request-params',
        'parent=parent/value',
    ) in kw['metadata']


def test_list_patch_deployments_pager():
    client = OsConfigServiceClient(
        credentials=credentials.AnonymousCredentials,
    )

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.list_patch_deployments),
            '__call__') as call:
        # Set the response to a series of pages.
        call.side_effect = (
            patch_deployments.ListPatchDeploymentsResponse(
                patch_deployments=[
                    patch_deployments.PatchDeployment(),
                    patch_deployments.PatchDeployment(),
                    patch_deployments.PatchDeployment(),
                ],
                next_page_token='abc',
            ),
            patch_deployments.ListPatchDeploymentsResponse(
                patch_deployments=[],
                next_page_token='def',
            ),
            patch_deployments.ListPatchDeploymentsResponse(
                patch_deployments=[
                    patch_deployments.PatchDeployment(),
                ],
                next_page_token='ghi',
            ),
            patch_deployments.ListPatchDeploymentsResponse(
                patch_deployments=[
                    patch_deployments.PatchDeployment(),
                    patch_deployments.PatchDeployment(),
                ],
            ),
            RuntimeError,
        )

        metadata = ()
        metadata = tuple(metadata) + (
            gapic_v1.routing_header.to_grpc_metadata((
                ('parent', ''),
            )),
        )
        pager = client.list_patch_deployments(request={})

        assert pager._metadata == metadata

        results = [i for i in pager]
        assert len(results) == 6
        assert all(isinstance(i, patch_deployments.PatchDeployment)
                   for i in results)

def test_list_patch_deployments_pages():
    client = OsConfigServiceClient(
        credentials=credentials.AnonymousCredentials,
    )

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.list_patch_deployments),
            '__call__') as call:
        # Set the response to a series of pages.
        call.side_effect = (
            patch_deployments.ListPatchDeploymentsResponse(
                patch_deployments=[
                    patch_deployments.PatchDeployment(),
                    patch_deployments.PatchDeployment(),
                    patch_deployments.PatchDeployment(),
                ],
                next_page_token='abc',
            ),
            patch_deployments.ListPatchDeploymentsResponse(
                patch_deployments=[],
                next_page_token='def',
            ),
            patch_deployments.ListPatchDeploymentsResponse(
                patch_deployments=[
                    patch_deployments.PatchDeployment(),
                ],
                next_page_token='ghi',
            ),
            patch_deployments.ListPatchDeploymentsResponse(
                patch_deployments=[
                    patch_deployments.PatchDeployment(),
                    patch_deployments.PatchDeployment(),
                ],
            ),
            RuntimeError,
        )
        pages = list(client.list_patch_deployments(request={}).pages)
        for page_, token in zip(pages, ['abc','def','ghi', '']):
            assert page_.raw_page.next_page_token == token

@pytest.mark.asyncio
async def test_list_patch_deployments_async_pager():
    client = OsConfigServiceAsyncClient(
        credentials=credentials.AnonymousCredentials,
    )

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.list_patch_deployments),
            '__call__', new_callable=mock.AsyncMock) as call:
        # Set the response to a series of pages.
        call.side_effect = (
            patch_deployments.ListPatchDeploymentsResponse(
                patch_deployments=[
                    patch_deployments.PatchDeployment(),
                    patch_deployments.PatchDeployment(),
                    patch_deployments.PatchDeployment(),
                ],
                next_page_token='abc',
            ),
            patch_deployments.ListPatchDeploymentsResponse(
                patch_deployments=[],
                next_page_token='def',
            ),
            patch_deployments.ListPatchDeploymentsResponse(
                patch_deployments=[
                    patch_deployments.PatchDeployment(),
                ],
                next_page_token='ghi',
            ),
            patch_deployments.ListPatchDeploymentsResponse(
                patch_deployments=[
                    patch_deployments.PatchDeployment(),
                    patch_deployments.PatchDeployment(),
                ],
            ),
            RuntimeError,
        )
        async_pager = await client.list_patch_deployments(request={},)
        assert async_pager.next_page_token == 'abc'
        responses = []
        async for response in async_pager:
            responses.append(response)

        assert len(responses) == 6
        assert all(isinstance(i, patch_deployments.PatchDeployment)
                   for i in responses)

@pytest.mark.asyncio
async def test_list_patch_deployments_async_pages():
    client = OsConfigServiceAsyncClient(
        credentials=credentials.AnonymousCredentials,
    )

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.list_patch_deployments),
            '__call__', new_callable=mock.AsyncMock) as call:
        # Set the response to a series of pages.
        call.side_effect = (
            patch_deployments.ListPatchDeploymentsResponse(
                patch_deployments=[
                    patch_deployments.PatchDeployment(),
                    patch_deployments.PatchDeployment(),
                    patch_deployments.PatchDeployment(),
                ],
                next_page_token='abc',
            ),
            patch_deployments.ListPatchDeploymentsResponse(
                patch_deployments=[],
                next_page_token='def',
            ),
            patch_deployments.ListPatchDeploymentsResponse(
                patch_deployments=[
                    patch_deployments.PatchDeployment(),
                ],
                next_page_token='ghi',
            ),
            patch_deployments.ListPatchDeploymentsResponse(
                patch_deployments=[
                    patch_deployments.PatchDeployment(),
                    patch_deployments.PatchDeployment(),
                ],
            ),
            RuntimeError,
        )
        pages = []
        async for page_ in (await client.list_patch_deployments(request={})).pages:
            pages.append(page_)
        for page_, token in zip(pages, ['abc','def','ghi', '']):
            assert page_.raw_page.next_page_token == token


def test_delete_patch_deployment(transport: str = 'grpc', request_type=patch_deployments.DeletePatchDeploymentRequest):
    client = OsConfigServiceClient(
        credentials=credentials.AnonymousCredentials(),
        transport=transport,
    )

    # Everything is optional in proto3 as far as the runtime is concerned,
    # and we are mocking out the actual API, so just send an empty request.
    request = request_type()

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.delete_patch_deployment),
            '__call__') as call:
        # Designate an appropriate return value for the call.
        call.return_value = None

        response = client.delete_patch_deployment(request)

        # Establish that the underlying gRPC stub method was called.
        assert len(call.mock_calls) == 1
        _, args, _ = call.mock_calls[0]

        assert args[0] == patch_deployments.DeletePatchDeploymentRequest()

    # Establish that the response is the type that we expect.
    assert response is None


def test_delete_patch_deployment_from_dict():
    test_delete_patch_deployment(request_type=dict)


@pytest.mark.asyncio
async def test_delete_patch_deployment_async(transport: str = 'grpc_asyncio', request_type=patch_deployments.DeletePatchDeploymentRequest):
    client = OsConfigServiceAsyncClient(
        credentials=credentials.AnonymousCredentials(),
        transport=transport,
    )

    # Everything is optional in proto3 as far as the runtime is concerned,
    # and we are mocking out the actual API, so just send an empty request.
    request = request_type()

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.delete_patch_deployment),
            '__call__') as call:
        # Designate an appropriate return value for the call.
        call.return_value = grpc_helpers_async.FakeUnaryUnaryCall(None)

        response = await client.delete_patch_deployment(request)

        # Establish that the underlying gRPC stub method was called.
        assert len(call.mock_calls)
        _, args, _ = call.mock_calls[0]

        assert args[0] == patch_deployments.DeletePatchDeploymentRequest()

    # Establish that the response is the type that we expect.
    assert response is None


@pytest.mark.asyncio
async def test_delete_patch_deployment_async_from_dict():
    await test_delete_patch_deployment_async(request_type=dict)


def test_delete_patch_deployment_field_headers():
    client = OsConfigServiceClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Any value that is part of the HTTP/1.1 URI should be sent as
    # a field header. Set these to a non-empty value.
    request = patch_deployments.DeletePatchDeploymentRequest()
    request.name = 'name/value'

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.delete_patch_deployment),
            '__call__') as call:
        call.return_value = None

        client.delete_patch_deployment(request)

        # Establish that the underlying gRPC stub method was called.
        assert len(call.mock_calls) == 1
        _, args, _ = call.mock_calls[0]
        assert args[0] == request

    # Establish that the field header was sent.
    _, _, kw = call.mock_calls[0]
    assert (
        'x-goog-request-params',
        'name=name/value',
    ) in kw['metadata']


@pytest.mark.asyncio
async def test_delete_patch_deployment_field_headers_async():
    client = OsConfigServiceAsyncClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Any value that is part of the HTTP/1.1 URI should be sent as
    # a field header. Set these to a non-empty value.
    request = patch_deployments.DeletePatchDeploymentRequest()
    request.name = 'name/value'

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.delete_patch_deployment),
            '__call__') as call:
        call.return_value = grpc_helpers_async.FakeUnaryUnaryCall(None)

        await client.delete_patch_deployment(request)

        # Establish that the underlying gRPC stub method was called.
        assert len(call.mock_calls)
        _, args, _ = call.mock_calls[0]
        assert args[0] == request

    # Establish that the field header was sent.
    _, _, kw = call.mock_calls[0]
    assert (
        'x-goog-request-params',
        'name=name/value',
    ) in kw['metadata']


def test_create_guest_policy(transport: str = 'grpc', request_type=guest_policies.CreateGuestPolicyRequest):
    client = OsConfigServiceClient(
        credentials=credentials.AnonymousCredentials(),
        transport=transport,
    )

    # Everything is optional in proto3 as far as the runtime is concerned,
    # and we are mocking out the actual API, so just send an empty request.
    request = request_type()

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.create_guest_policy),
            '__call__') as call:
        # Designate an appropriate return value for the call.
        call.return_value = guest_policies.GuestPolicy(
            name='name_value',

            description='description_value',

            etag='etag_value',

        )

        response = client.create_guest_policy(request)

        # Establish that the underlying gRPC stub method was called.
        assert len(call.mock_calls) == 1
        _, args, _ = call.mock_calls[0]

        assert args[0] == guest_policies.CreateGuestPolicyRequest()

    # Establish that the response is the type that we expect.

    assert isinstance(response, guest_policies.GuestPolicy)

    assert response.name == 'name_value'

    assert response.description == 'description_value'

    assert response.etag == 'etag_value'


def test_create_guest_policy_from_dict():
    test_create_guest_policy(request_type=dict)


@pytest.mark.asyncio
async def test_create_guest_policy_async(transport: str = 'grpc_asyncio', request_type=guest_policies.CreateGuestPolicyRequest):
    client = OsConfigServiceAsyncClient(
        credentials=credentials.AnonymousCredentials(),
        transport=transport,
    )

    # Everything is optional in proto3 as far as the runtime is concerned,
    # and we are mocking out the actual API, so just send an empty request.
    request = request_type()

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.create_guest_policy),
            '__call__') as call:
        # Designate an appropriate return value for the call.
        call.return_value = grpc_helpers_async.FakeUnaryUnaryCall(guest_policies.GuestPolicy(
            name='name_value',
            description='description_value',
            etag='etag_value',
        ))

        response = await client.create_guest_policy(request)

        # Establish that the underlying gRPC stub method was called.
        assert len(call.mock_calls)
        _, args, _ = call.mock_calls[0]

        assert args[0] == guest_policies.CreateGuestPolicyRequest()

    # Establish that the response is the type that we expect.
    assert isinstance(response, guest_policies.GuestPolicy)

    assert response.name == 'name_value'

    assert response.description == 'description_value'

    assert response.etag == 'etag_value'


@pytest.mark.asyncio
async def test_create_guest_policy_async_from_dict():
    await test_create_guest_policy_async(request_type=dict)


def test_create_guest_policy_field_headers():
    client = OsConfigServiceClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Any value that is part of the HTTP/1.1 URI should be sent as
    # a field header. Set these to a non-empty value.
    request = guest_policies.CreateGuestPolicyRequest()
    request.parent = 'parent/value'

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.create_guest_policy),
            '__call__') as call:
        call.return_value = guest_policies.GuestPolicy()

        client.create_guest_policy(request)

        # Establish that the underlying gRPC stub method was called.
        assert len(call.mock_calls) == 1
        _, args, _ = call.mock_calls[0]
        assert args[0] == request

    # Establish that the field header was sent.
    _, _, kw = call.mock_calls[0]
    assert (
        'x-goog-request-params',
        'parent=parent/value',
    ) in kw['metadata']


@pytest.mark.asyncio
async def test_create_guest_policy_field_headers_async():
    client = OsConfigServiceAsyncClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Any value that is part of the HTTP/1.1 URI should be sent as
    # a field header. Set these to a non-empty value.
    request = guest_policies.CreateGuestPolicyRequest()
    request.parent = 'parent/value'

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.create_guest_policy),
            '__call__') as call:
        call.return_value = grpc_helpers_async.FakeUnaryUnaryCall(guest_policies.GuestPolicy())

        await client.create_guest_policy(request)

        # Establish that the underlying gRPC stub method was called.
        assert len(call.mock_calls)
        _, args, _ = call.mock_calls[0]
        assert args[0] == request

    # Establish that the field header was sent.
    _, _, kw = call.mock_calls[0]
    assert (
        'x-goog-request-params',
        'parent=parent/value',
    ) in kw['metadata']


def test_create_guest_policy_flattened():
    client = OsConfigServiceClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.create_guest_policy),
            '__call__') as call:
        # Designate an appropriate return value for the call.
        call.return_value = guest_policies.GuestPolicy()

        # Call the method with a truthy value for each flattened field,
        # using the keyword arguments to the method.
        client.create_guest_policy(
            parent='parent_value',
            guest_policy=guest_policies.GuestPolicy(name='name_value'),
        )

        # Establish that the underlying call was made with the expected
        # request object values.
        assert len(call.mock_calls) == 1
        _, args, _ = call.mock_calls[0]

        assert args[0].parent == 'parent_value'

        assert args[0].guest_policy == guest_policies.GuestPolicy(name='name_value')


def test_create_guest_policy_flattened_error():
    client = OsConfigServiceClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Attempting to call a method with both a request object and flattened
    # fields is an error.
    with pytest.raises(ValueError):
        client.create_guest_policy(
            guest_policies.CreateGuestPolicyRequest(),
            parent='parent_value',
            guest_policy=guest_policies.GuestPolicy(name='name_value'),
        )


@pytest.mark.asyncio
async def test_create_guest_policy_flattened_async():
    client = OsConfigServiceAsyncClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.create_guest_policy),
            '__call__') as call:
        # Designate an appropriate return value for the call.
        call.return_value = guest_policies.GuestPolicy()

        call.return_value = grpc_helpers_async.FakeUnaryUnaryCall(guest_policies.GuestPolicy())
        # Call the method with a truthy value for each flattened field,
        # using the keyword arguments to the method.
        response = await client.create_guest_policy(
            parent='parent_value',
            guest_policy=guest_policies.GuestPolicy(name='name_value'),
        )

        # Establish that the underlying call was made with the expected
        # request object values.
        assert len(call.mock_calls)
        _, args, _ = call.mock_calls[0]

        assert args[0].parent == 'parent_value'

        assert args[0].guest_policy == guest_policies.GuestPolicy(name='name_value')


@pytest.mark.asyncio
async def test_create_guest_policy_flattened_error_async():
    client = OsConfigServiceAsyncClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Attempting to call a method with both a request object and flattened
    # fields is an error.
    with pytest.raises(ValueError):
        await client.create_guest_policy(
            guest_policies.CreateGuestPolicyRequest(),
            parent='parent_value',
            guest_policy=guest_policies.GuestPolicy(name='name_value'),
        )


def test_get_guest_policy(transport: str = 'grpc', request_type=guest_policies.GetGuestPolicyRequest):
    client = OsConfigServiceClient(
        credentials=credentials.AnonymousCredentials(),
        transport=transport,
    )

    # Everything is optional in proto3 as far as the runtime is concerned,
    # and we are mocking out the actual API, so just send an empty request.
    request = request_type()

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.get_guest_policy),
            '__call__') as call:
        # Designate an appropriate return value for the call.
        call.return_value = guest_policies.GuestPolicy(
            name='name_value',

            description='description_value',

            etag='etag_value',

        )

        response = client.get_guest_policy(request)

        # Establish that the underlying gRPC stub method was called.
        assert len(call.mock_calls) == 1
        _, args, _ = call.mock_calls[0]

        assert args[0] == guest_policies.GetGuestPolicyRequest()

    # Establish that the response is the type that we expect.

    assert isinstance(response, guest_policies.GuestPolicy)

    assert response.name == 'name_value'

    assert response.description == 'description_value'

    assert response.etag == 'etag_value'


def test_get_guest_policy_from_dict():
    test_get_guest_policy(request_type=dict)


@pytest.mark.asyncio
async def test_get_guest_policy_async(transport: str = 'grpc_asyncio', request_type=guest_policies.GetGuestPolicyRequest):
    client = OsConfigServiceAsyncClient(
        credentials=credentials.AnonymousCredentials(),
        transport=transport,
    )

    # Everything is optional in proto3 as far as the runtime is concerned,
    # and we are mocking out the actual API, so just send an empty request.
    request = request_type()

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.get_guest_policy),
            '__call__') as call:
        # Designate an appropriate return value for the call.
        call.return_value = grpc_helpers_async.FakeUnaryUnaryCall(guest_policies.GuestPolicy(
            name='name_value',
            description='description_value',
            etag='etag_value',
        ))

        response = await client.get_guest_policy(request)

        # Establish that the underlying gRPC stub method was called.
        assert len(call.mock_calls)
        _, args, _ = call.mock_calls[0]

        assert args[0] == guest_policies.GetGuestPolicyRequest()

    # Establish that the response is the type that we expect.
    assert isinstance(response, guest_policies.GuestPolicy)

    assert response.name == 'name_value'

    assert response.description == 'description_value'

    assert response.etag == 'etag_value'


@pytest.mark.asyncio
async def test_get_guest_policy_async_from_dict():
    await test_get_guest_policy_async(request_type=dict)


def test_get_guest_policy_field_headers():
    client = OsConfigServiceClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Any value that is part of the HTTP/1.1 URI should be sent as
    # a field header. Set these to a non-empty value.
    request = guest_policies.GetGuestPolicyRequest()
    request.name = 'name/value'

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.get_guest_policy),
            '__call__') as call:
        call.return_value = guest_policies.GuestPolicy()

        client.get_guest_policy(request)

        # Establish that the underlying gRPC stub method was called.
        assert len(call.mock_calls) == 1
        _, args, _ = call.mock_calls[0]
        assert args[0] == request

    # Establish that the field header was sent.
    _, _, kw = call.mock_calls[0]
    assert (
        'x-goog-request-params',
        'name=name/value',
    ) in kw['metadata']


@pytest.mark.asyncio
async def test_get_guest_policy_field_headers_async():
    client = OsConfigServiceAsyncClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Any value that is part of the HTTP/1.1 URI should be sent as
    # a field header. Set these to a non-empty value.
    request = guest_policies.GetGuestPolicyRequest()
    request.name = 'name/value'

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.get_guest_policy),
            '__call__') as call:
        call.return_value = grpc_helpers_async.FakeUnaryUnaryCall(guest_policies.GuestPolicy())

        await client.get_guest_policy(request)

        # Establish that the underlying gRPC stub method was called.
        assert len(call.mock_calls)
        _, args, _ = call.mock_calls[0]
        assert args[0] == request

    # Establish that the field header was sent.
    _, _, kw = call.mock_calls[0]
    assert (
        'x-goog-request-params',
        'name=name/value',
    ) in kw['metadata']


def test_get_guest_policy_flattened():
    client = OsConfigServiceClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.get_guest_policy),
            '__call__') as call:
        # Designate an appropriate return value for the call.
        call.return_value = guest_policies.GuestPolicy()

        # Call the method with a truthy value for each flattened field,
        # using the keyword arguments to the method.
        client.get_guest_policy(
            name='name_value',
        )

        # Establish that the underlying call was made with the expected
        # request object values.
        assert len(call.mock_calls) == 1
        _, args, _ = call.mock_calls[0]

        assert args[0].name == 'name_value'


def test_get_guest_policy_flattened_error():
    client = OsConfigServiceClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Attempting to call a method with both a request object and flattened
    # fields is an error.
    with pytest.raises(ValueError):
        client.get_guest_policy(
            guest_policies.GetGuestPolicyRequest(),
            name='name_value',
        )


@pytest.mark.asyncio
async def test_get_guest_policy_flattened_async():
    client = OsConfigServiceAsyncClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.get_guest_policy),
            '__call__') as call:
        # Designate an appropriate return value for the call.
        call.return_value = guest_policies.GuestPolicy()

        call.return_value = grpc_helpers_async.FakeUnaryUnaryCall(guest_policies.GuestPolicy())
        # Call the method with a truthy value for each flattened field,
        # using the keyword arguments to the method.
        response = await client.get_guest_policy(
            name='name_value',
        )

        # Establish that the underlying call was made with the expected
        # request object values.
        assert len(call.mock_calls)
        _, args, _ = call.mock_calls[0]

        assert args[0].name == 'name_value'


@pytest.mark.asyncio
async def test_get_guest_policy_flattened_error_async():
    client = OsConfigServiceAsyncClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Attempting to call a method with both a request object and flattened
    # fields is an error.
    with pytest.raises(ValueError):
        await client.get_guest_policy(
            guest_policies.GetGuestPolicyRequest(),
            name='name_value',
        )


def test_list_guest_policies(transport: str = 'grpc', request_type=guest_policies.ListGuestPoliciesRequest):
    client = OsConfigServiceClient(
        credentials=credentials.AnonymousCredentials(),
        transport=transport,
    )

    # Everything is optional in proto3 as far as the runtime is concerned,
    # and we are mocking out the actual API, so just send an empty request.
    request = request_type()

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.list_guest_policies),
            '__call__') as call:
        # Designate an appropriate return value for the call.
        call.return_value = guest_policies.ListGuestPoliciesResponse(
            next_page_token='next_page_token_value',

        )

        response = client.list_guest_policies(request)

        # Establish that the underlying gRPC stub method was called.
        assert len(call.mock_calls) == 1
        _, args, _ = call.mock_calls[0]

        assert args[0] == guest_policies.ListGuestPoliciesRequest()

    # Establish that the response is the type that we expect.

    assert isinstance(response, pagers.ListGuestPoliciesPager)

    assert response.next_page_token == 'next_page_token_value'


def test_list_guest_policies_from_dict():
    test_list_guest_policies(request_type=dict)


@pytest.mark.asyncio
async def test_list_guest_policies_async(transport: str = 'grpc_asyncio', request_type=guest_policies.ListGuestPoliciesRequest):
    client = OsConfigServiceAsyncClient(
        credentials=credentials.AnonymousCredentials(),
        transport=transport,
    )

    # Everything is optional in proto3 as far as the runtime is concerned,
    # and we are mocking out the actual API, so just send an empty request.
    request = request_type()

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.list_guest_policies),
            '__call__') as call:
        # Designate an appropriate return value for the call.
        call.return_value = grpc_helpers_async.FakeUnaryUnaryCall(guest_policies.ListGuestPoliciesResponse(
            next_page_token='next_page_token_value',
        ))

        response = await client.list_guest_policies(request)

        # Establish that the underlying gRPC stub method was called.
        assert len(call.mock_calls)
        _, args, _ = call.mock_calls[0]

        assert args[0] == guest_policies.ListGuestPoliciesRequest()

    # Establish that the response is the type that we expect.
    assert isinstance(response, pagers.ListGuestPoliciesAsyncPager)

    assert response.next_page_token == 'next_page_token_value'


@pytest.mark.asyncio
async def test_list_guest_policies_async_from_dict():
    await test_list_guest_policies_async(request_type=dict)


def test_list_guest_policies_field_headers():
    client = OsConfigServiceClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Any value that is part of the HTTP/1.1 URI should be sent as
    # a field header. Set these to a non-empty value.
    request = guest_policies.ListGuestPoliciesRequest()
    request.parent = 'parent/value'

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.list_guest_policies),
            '__call__') as call:
        call.return_value = guest_policies.ListGuestPoliciesResponse()

        client.list_guest_policies(request)

        # Establish that the underlying gRPC stub method was called.
        assert len(call.mock_calls) == 1
        _, args, _ = call.mock_calls[0]
        assert args[0] == request

    # Establish that the field header was sent.
    _, _, kw = call.mock_calls[0]
    assert (
        'x-goog-request-params',
        'parent=parent/value',
    ) in kw['metadata']


@pytest.mark.asyncio
async def test_list_guest_policies_field_headers_async():
    client = OsConfigServiceAsyncClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Any value that is part of the HTTP/1.1 URI should be sent as
    # a field header. Set these to a non-empty value.
    request = guest_policies.ListGuestPoliciesRequest()
    request.parent = 'parent/value'

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.list_guest_policies),
            '__call__') as call:
        call.return_value = grpc_helpers_async.FakeUnaryUnaryCall(guest_policies.ListGuestPoliciesResponse())

        await client.list_guest_policies(request)

        # Establish that the underlying gRPC stub method was called.
        assert len(call.mock_calls)
        _, args, _ = call.mock_calls[0]
        assert args[0] == request

    # Establish that the field header was sent.
    _, _, kw = call.mock_calls[0]
    assert (
        'x-goog-request-params',
        'parent=parent/value',
    ) in kw['metadata']


def test_list_guest_policies_flattened():
    client = OsConfigServiceClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.list_guest_policies),
            '__call__') as call:
        # Designate an appropriate return value for the call.
        call.return_value = guest_policies.ListGuestPoliciesResponse()

        # Call the method with a truthy value for each flattened field,
        # using the keyword arguments to the method.
        client.list_guest_policies(
            parent='parent_value',
        )

        # Establish that the underlying call was made with the expected
        # request object values.
        assert len(call.mock_calls) == 1
        _, args, _ = call.mock_calls[0]

        assert args[0].parent == 'parent_value'


def test_list_guest_policies_flattened_error():
    client = OsConfigServiceClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Attempting to call a method with both a request object and flattened
    # fields is an error.
    with pytest.raises(ValueError):
        client.list_guest_policies(
            guest_policies.ListGuestPoliciesRequest(),
            parent='parent_value',
        )


@pytest.mark.asyncio
async def test_list_guest_policies_flattened_async():
    client = OsConfigServiceAsyncClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.list_guest_policies),
            '__call__') as call:
        # Designate an appropriate return value for the call.
        call.return_value = guest_policies.ListGuestPoliciesResponse()

        call.return_value = grpc_helpers_async.FakeUnaryUnaryCall(guest_policies.ListGuestPoliciesResponse())
        # Call the method with a truthy value for each flattened field,
        # using the keyword arguments to the method.
        response = await client.list_guest_policies(
            parent='parent_value',
        )

        # Establish that the underlying call was made with the expected
        # request object values.
        assert len(call.mock_calls)
        _, args, _ = call.mock_calls[0]

        assert args[0].parent == 'parent_value'


@pytest.mark.asyncio
async def test_list_guest_policies_flattened_error_async():
    client = OsConfigServiceAsyncClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Attempting to call a method with both a request object and flattened
    # fields is an error.
    with pytest.raises(ValueError):
        await client.list_guest_policies(
            guest_policies.ListGuestPoliciesRequest(),
            parent='parent_value',
        )


def test_list_guest_policies_pager():
    client = OsConfigServiceClient(
        credentials=credentials.AnonymousCredentials,
    )

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.list_guest_policies),
            '__call__') as call:
        # Set the response to a series of pages.
        call.side_effect = (
            guest_policies.ListGuestPoliciesResponse(
                guest_policies=[
                    guest_policies.GuestPolicy(),
                    guest_policies.GuestPolicy(),
                    guest_policies.GuestPolicy(),
                ],
                next_page_token='abc',
            ),
            guest_policies.ListGuestPoliciesResponse(
                guest_policies=[],
                next_page_token='def',
            ),
            guest_policies.ListGuestPoliciesResponse(
                guest_policies=[
                    guest_policies.GuestPolicy(),
                ],
                next_page_token='ghi',
            ),
            guest_policies.ListGuestPoliciesResponse(
                guest_policies=[
                    guest_policies.GuestPolicy(),
                    guest_policies.GuestPolicy(),
                ],
            ),
            RuntimeError,
        )

        metadata = ()
        metadata = tuple(metadata) + (
            gapic_v1.routing_header.to_grpc_metadata((
                ('parent', ''),
            )),
        )
        pager = client.list_guest_policies(request={})

        assert pager._metadata == metadata

        results = [i for i in pager]
        assert len(results) == 6
        assert all(isinstance(i, guest_policies.GuestPolicy)
                   for i in results)

def test_list_guest_policies_pages():
    client = OsConfigServiceClient(
        credentials=credentials.AnonymousCredentials,
    )

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.list_guest_policies),
            '__call__') as call:
        # Set the response to a series of pages.
        call.side_effect = (
            guest_policies.ListGuestPoliciesResponse(
                guest_policies=[
                    guest_policies.GuestPolicy(),
                    guest_policies.GuestPolicy(),
                    guest_policies.GuestPolicy(),
                ],
                next_page_token='abc',
            ),
            guest_policies.ListGuestPoliciesResponse(
                guest_policies=[],
                next_page_token='def',
            ),
            guest_policies.ListGuestPoliciesResponse(
                guest_policies=[
                    guest_policies.GuestPolicy(),
                ],
                next_page_token='ghi',
            ),
            guest_policies.ListGuestPoliciesResponse(
                guest_policies=[
                    guest_policies.GuestPolicy(),
                    guest_policies.GuestPolicy(),
                ],
            ),
            RuntimeError,
        )
        pages = list(client.list_guest_policies(request={}).pages)
        for page_, token in zip(pages, ['abc','def','ghi', '']):
            assert page_.raw_page.next_page_token == token

@pytest.mark.asyncio
async def test_list_guest_policies_async_pager():
    client = OsConfigServiceAsyncClient(
        credentials=credentials.AnonymousCredentials,
    )

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.list_guest_policies),
            '__call__', new_callable=mock.AsyncMock) as call:
        # Set the response to a series of pages.
        call.side_effect = (
            guest_policies.ListGuestPoliciesResponse(
                guest_policies=[
                    guest_policies.GuestPolicy(),
                    guest_policies.GuestPolicy(),
                    guest_policies.GuestPolicy(),
                ],
                next_page_token='abc',
            ),
            guest_policies.ListGuestPoliciesResponse(
                guest_policies=[],
                next_page_token='def',
            ),
            guest_policies.ListGuestPoliciesResponse(
                guest_policies=[
                    guest_policies.GuestPolicy(),
                ],
                next_page_token='ghi',
            ),
            guest_policies.ListGuestPoliciesResponse(
                guest_policies=[
                    guest_policies.GuestPolicy(),
                    guest_policies.GuestPolicy(),
                ],
            ),
            RuntimeError,
        )
        async_pager = await client.list_guest_policies(request={},)
        assert async_pager.next_page_token == 'abc'
        responses = []
        async for response in async_pager:
            responses.append(response)

        assert len(responses) == 6
        assert all(isinstance(i, guest_policies.GuestPolicy)
                   for i in responses)

@pytest.mark.asyncio
async def test_list_guest_policies_async_pages():
    client = OsConfigServiceAsyncClient(
        credentials=credentials.AnonymousCredentials,
    )

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.list_guest_policies),
            '__call__', new_callable=mock.AsyncMock) as call:
        # Set the response to a series of pages.
        call.side_effect = (
            guest_policies.ListGuestPoliciesResponse(
                guest_policies=[
                    guest_policies.GuestPolicy(),
                    guest_policies.GuestPolicy(),
                    guest_policies.GuestPolicy(),
                ],
                next_page_token='abc',
            ),
            guest_policies.ListGuestPoliciesResponse(
                guest_policies=[],
                next_page_token='def',
            ),
            guest_policies.ListGuestPoliciesResponse(
                guest_policies=[
                    guest_policies.GuestPolicy(),
                ],
                next_page_token='ghi',
            ),
            guest_policies.ListGuestPoliciesResponse(
                guest_policies=[
                    guest_policies.GuestPolicy(),
                    guest_policies.GuestPolicy(),
                ],
            ),
            RuntimeError,
        )
        pages = []
        async for page_ in (await client.list_guest_policies(request={})).pages:
            pages.append(page_)
        for page_, token in zip(pages, ['abc','def','ghi', '']):
            assert page_.raw_page.next_page_token == token


def test_update_guest_policy(transport: str = 'grpc', request_type=guest_policies.UpdateGuestPolicyRequest):
    client = OsConfigServiceClient(
        credentials=credentials.AnonymousCredentials(),
        transport=transport,
    )

    # Everything is optional in proto3 as far as the runtime is concerned,
    # and we are mocking out the actual API, so just send an empty request.
    request = request_type()

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.update_guest_policy),
            '__call__') as call:
        # Designate an appropriate return value for the call.
        call.return_value = guest_policies.GuestPolicy(
            name='name_value',

            description='description_value',

            etag='etag_value',

        )

        response = client.update_guest_policy(request)

        # Establish that the underlying gRPC stub method was called.
        assert len(call.mock_calls) == 1
        _, args, _ = call.mock_calls[0]

        assert args[0] == guest_policies.UpdateGuestPolicyRequest()

    # Establish that the response is the type that we expect.

    assert isinstance(response, guest_policies.GuestPolicy)

    assert response.name == 'name_value'

    assert response.description == 'description_value'

    assert response.etag == 'etag_value'


def test_update_guest_policy_from_dict():
    test_update_guest_policy(request_type=dict)


@pytest.mark.asyncio
async def test_update_guest_policy_async(transport: str = 'grpc_asyncio', request_type=guest_policies.UpdateGuestPolicyRequest):
    client = OsConfigServiceAsyncClient(
        credentials=credentials.AnonymousCredentials(),
        transport=transport,
    )

    # Everything is optional in proto3 as far as the runtime is concerned,
    # and we are mocking out the actual API, so just send an empty request.
    request = request_type()

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.update_guest_policy),
            '__call__') as call:
        # Designate an appropriate return value for the call.
        call.return_value = grpc_helpers_async.FakeUnaryUnaryCall(guest_policies.GuestPolicy(
            name='name_value',
            description='description_value',
            etag='etag_value',
        ))

        response = await client.update_guest_policy(request)

        # Establish that the underlying gRPC stub method was called.
        assert len(call.mock_calls)
        _, args, _ = call.mock_calls[0]

        assert args[0] == guest_policies.UpdateGuestPolicyRequest()

    # Establish that the response is the type that we expect.
    assert isinstance(response, guest_policies.GuestPolicy)

    assert response.name == 'name_value'

    assert response.description == 'description_value'

    assert response.etag == 'etag_value'


@pytest.mark.asyncio
async def test_update_guest_policy_async_from_dict():
    await test_update_guest_policy_async(request_type=dict)


def test_update_guest_policy_field_headers():
    client = OsConfigServiceClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Any value that is part of the HTTP/1.1 URI should be sent as
    # a field header. Set these to a non-empty value.
    request = guest_policies.UpdateGuestPolicyRequest()
    request.guest_policy.name = 'guest_policy.name/value'

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.update_guest_policy),
            '__call__') as call:
        call.return_value = guest_policies.GuestPolicy()

        client.update_guest_policy(request)

        # Establish that the underlying gRPC stub method was called.
        assert len(call.mock_calls) == 1
        _, args, _ = call.mock_calls[0]
        assert args[0] == request

    # Establish that the field header was sent.
    _, _, kw = call.mock_calls[0]
    assert (
        'x-goog-request-params',
        'guest_policy.name=guest_policy.name/value',
    ) in kw['metadata']


@pytest.mark.asyncio
async def test_update_guest_policy_field_headers_async():
    client = OsConfigServiceAsyncClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Any value that is part of the HTTP/1.1 URI should be sent as
    # a field header. Set these to a non-empty value.
    request = guest_policies.UpdateGuestPolicyRequest()
    request.guest_policy.name = 'guest_policy.name/value'

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.update_guest_policy),
            '__call__') as call:
        call.return_value = grpc_helpers_async.FakeUnaryUnaryCall(guest_policies.GuestPolicy())

        await client.update_guest_policy(request)

        # Establish that the underlying gRPC stub method was called.
        assert len(call.mock_calls)
        _, args, _ = call.mock_calls[0]
        assert args[0] == request

    # Establish that the field header was sent.
    _, _, kw = call.mock_calls[0]
    assert (
        'x-goog-request-params',
        'guest_policy.name=guest_policy.name/value',
    ) in kw['metadata']


def test_update_guest_policy_flattened():
    client = OsConfigServiceClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.update_guest_policy),
            '__call__') as call:
        # Designate an appropriate return value for the call.
        call.return_value = guest_policies.GuestPolicy()

        # Call the method with a truthy value for each flattened field,
        # using the keyword arguments to the method.
        client.update_guest_policy(
            guest_policy=guest_policies.GuestPolicy(name='name_value'),
            update_mask=field_mask.FieldMask(paths=['paths_value']),
        )

        # Establish that the underlying call was made with the expected
        # request object values.
        assert len(call.mock_calls) == 1
        _, args, _ = call.mock_calls[0]

        assert args[0].guest_policy == guest_policies.GuestPolicy(name='name_value')

        assert args[0].update_mask == field_mask.FieldMask(paths=['paths_value'])


def test_update_guest_policy_flattened_error():
    client = OsConfigServiceClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Attempting to call a method with both a request object and flattened
    # fields is an error.
    with pytest.raises(ValueError):
        client.update_guest_policy(
            guest_policies.UpdateGuestPolicyRequest(),
            guest_policy=guest_policies.GuestPolicy(name='name_value'),
            update_mask=field_mask.FieldMask(paths=['paths_value']),
        )


@pytest.mark.asyncio
async def test_update_guest_policy_flattened_async():
    client = OsConfigServiceAsyncClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.update_guest_policy),
            '__call__') as call:
        # Designate an appropriate return value for the call.
        call.return_value = guest_policies.GuestPolicy()

        call.return_value = grpc_helpers_async.FakeUnaryUnaryCall(guest_policies.GuestPolicy())
        # Call the method with a truthy value for each flattened field,
        # using the keyword arguments to the method.
        response = await client.update_guest_policy(
            guest_policy=guest_policies.GuestPolicy(name='name_value'),
            update_mask=field_mask.FieldMask(paths=['paths_value']),
        )

        # Establish that the underlying call was made with the expected
        # request object values.
        assert len(call.mock_calls)
        _, args, _ = call.mock_calls[0]

        assert args[0].guest_policy == guest_policies.GuestPolicy(name='name_value')

        assert args[0].update_mask == field_mask.FieldMask(paths=['paths_value'])


@pytest.mark.asyncio
async def test_update_guest_policy_flattened_error_async():
    client = OsConfigServiceAsyncClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Attempting to call a method with both a request object and flattened
    # fields is an error.
    with pytest.raises(ValueError):
        await client.update_guest_policy(
            guest_policies.UpdateGuestPolicyRequest(),
            guest_policy=guest_policies.GuestPolicy(name='name_value'),
            update_mask=field_mask.FieldMask(paths=['paths_value']),
        )


def test_delete_guest_policy(transport: str = 'grpc', request_type=guest_policies.DeleteGuestPolicyRequest):
    client = OsConfigServiceClient(
        credentials=credentials.AnonymousCredentials(),
        transport=transport,
    )

    # Everything is optional in proto3 as far as the runtime is concerned,
    # and we are mocking out the actual API, so just send an empty request.
    request = request_type()

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.delete_guest_policy),
            '__call__') as call:
        # Designate an appropriate return value for the call.
        call.return_value = None

        response = client.delete_guest_policy(request)

        # Establish that the underlying gRPC stub method was called.
        assert len(call.mock_calls) == 1
        _, args, _ = call.mock_calls[0]

        assert args[0] == guest_policies.DeleteGuestPolicyRequest()

    # Establish that the response is the type that we expect.
    assert response is None


def test_delete_guest_policy_from_dict():
    test_delete_guest_policy(request_type=dict)


@pytest.mark.asyncio
async def test_delete_guest_policy_async(transport: str = 'grpc_asyncio', request_type=guest_policies.DeleteGuestPolicyRequest):
    client = OsConfigServiceAsyncClient(
        credentials=credentials.AnonymousCredentials(),
        transport=transport,
    )

    # Everything is optional in proto3 as far as the runtime is concerned,
    # and we are mocking out the actual API, so just send an empty request.
    request = request_type()

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.delete_guest_policy),
            '__call__') as call:
        # Designate an appropriate return value for the call.
        call.return_value = grpc_helpers_async.FakeUnaryUnaryCall(None)

        response = await client.delete_guest_policy(request)

        # Establish that the underlying gRPC stub method was called.
        assert len(call.mock_calls)
        _, args, _ = call.mock_calls[0]

        assert args[0] == guest_policies.DeleteGuestPolicyRequest()

    # Establish that the response is the type that we expect.
    assert response is None


@pytest.mark.asyncio
async def test_delete_guest_policy_async_from_dict():
    await test_delete_guest_policy_async(request_type=dict)


def test_delete_guest_policy_field_headers():
    client = OsConfigServiceClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Any value that is part of the HTTP/1.1 URI should be sent as
    # a field header. Set these to a non-empty value.
    request = guest_policies.DeleteGuestPolicyRequest()
    request.name = 'name/value'

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.delete_guest_policy),
            '__call__') as call:
        call.return_value = None

        client.delete_guest_policy(request)

        # Establish that the underlying gRPC stub method was called.
        assert len(call.mock_calls) == 1
        _, args, _ = call.mock_calls[0]
        assert args[0] == request

    # Establish that the field header was sent.
    _, _, kw = call.mock_calls[0]
    assert (
        'x-goog-request-params',
        'name=name/value',
    ) in kw['metadata']


@pytest.mark.asyncio
async def test_delete_guest_policy_field_headers_async():
    client = OsConfigServiceAsyncClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Any value that is part of the HTTP/1.1 URI should be sent as
    # a field header. Set these to a non-empty value.
    request = guest_policies.DeleteGuestPolicyRequest()
    request.name = 'name/value'

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.delete_guest_policy),
            '__call__') as call:
        call.return_value = grpc_helpers_async.FakeUnaryUnaryCall(None)

        await client.delete_guest_policy(request)

        # Establish that the underlying gRPC stub method was called.
        assert len(call.mock_calls)
        _, args, _ = call.mock_calls[0]
        assert args[0] == request

    # Establish that the field header was sent.
    _, _, kw = call.mock_calls[0]
    assert (
        'x-goog-request-params',
        'name=name/value',
    ) in kw['metadata']


def test_delete_guest_policy_flattened():
    client = OsConfigServiceClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.delete_guest_policy),
            '__call__') as call:
        # Designate an appropriate return value for the call.
        call.return_value = None

        # Call the method with a truthy value for each flattened field,
        # using the keyword arguments to the method.
        client.delete_guest_policy(
            name='name_value',
        )

        # Establish that the underlying call was made with the expected
        # request object values.
        assert len(call.mock_calls) == 1
        _, args, _ = call.mock_calls[0]

        assert args[0].name == 'name_value'


def test_delete_guest_policy_flattened_error():
    client = OsConfigServiceClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Attempting to call a method with both a request object and flattened
    # fields is an error.
    with pytest.raises(ValueError):
        client.delete_guest_policy(
            guest_policies.DeleteGuestPolicyRequest(),
            name='name_value',
        )


@pytest.mark.asyncio
async def test_delete_guest_policy_flattened_async():
    client = OsConfigServiceAsyncClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.delete_guest_policy),
            '__call__') as call:
        # Designate an appropriate return value for the call.
        call.return_value = None

        call.return_value = grpc_helpers_async.FakeUnaryUnaryCall(None)
        # Call the method with a truthy value for each flattened field,
        # using the keyword arguments to the method.
        response = await client.delete_guest_policy(
            name='name_value',
        )

        # Establish that the underlying call was made with the expected
        # request object values.
        assert len(call.mock_calls)
        _, args, _ = call.mock_calls[0]

        assert args[0].name == 'name_value'


@pytest.mark.asyncio
async def test_delete_guest_policy_flattened_error_async():
    client = OsConfigServiceAsyncClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Attempting to call a method with both a request object and flattened
    # fields is an error.
    with pytest.raises(ValueError):
        await client.delete_guest_policy(
            guest_policies.DeleteGuestPolicyRequest(),
            name='name_value',
        )


def test_lookup_effective_guest_policy(transport: str = 'grpc', request_type=guest_policies.LookupEffectiveGuestPolicyRequest):
    client = OsConfigServiceClient(
        credentials=credentials.AnonymousCredentials(),
        transport=transport,
    )

    # Everything is optional in proto3 as far as the runtime is concerned,
    # and we are mocking out the actual API, so just send an empty request.
    request = request_type()

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.lookup_effective_guest_policy),
            '__call__') as call:
        # Designate an appropriate return value for the call.
        call.return_value = guest_policies.EffectiveGuestPolicy(
        )

        response = client.lookup_effective_guest_policy(request)

        # Establish that the underlying gRPC stub method was called.
        assert len(call.mock_calls) == 1
        _, args, _ = call.mock_calls[0]

        assert args[0] == guest_policies.LookupEffectiveGuestPolicyRequest()

    # Establish that the response is the type that we expect.

    assert isinstance(response, guest_policies.EffectiveGuestPolicy)


def test_lookup_effective_guest_policy_from_dict():
    test_lookup_effective_guest_policy(request_type=dict)


@pytest.mark.asyncio
async def test_lookup_effective_guest_policy_async(transport: str = 'grpc_asyncio', request_type=guest_policies.LookupEffectiveGuestPolicyRequest):
    client = OsConfigServiceAsyncClient(
        credentials=credentials.AnonymousCredentials(),
        transport=transport,
    )

    # Everything is optional in proto3 as far as the runtime is concerned,
    # and we are mocking out the actual API, so just send an empty request.
    request = request_type()

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.lookup_effective_guest_policy),
            '__call__') as call:
        # Designate an appropriate return value for the call.
        call.return_value = grpc_helpers_async.FakeUnaryUnaryCall(guest_policies.EffectiveGuestPolicy(
        ))

        response = await client.lookup_effective_guest_policy(request)

        # Establish that the underlying gRPC stub method was called.
        assert len(call.mock_calls)
        _, args, _ = call.mock_calls[0]

        assert args[0] == guest_policies.LookupEffectiveGuestPolicyRequest()

    # Establish that the response is the type that we expect.
    assert isinstance(response, guest_policies.EffectiveGuestPolicy)


@pytest.mark.asyncio
async def test_lookup_effective_guest_policy_async_from_dict():
    await test_lookup_effective_guest_policy_async(request_type=dict)


def test_lookup_effective_guest_policy_field_headers():
    client = OsConfigServiceClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Any value that is part of the HTTP/1.1 URI should be sent as
    # a field header. Set these to a non-empty value.
    request = guest_policies.LookupEffectiveGuestPolicyRequest()
    request.instance = 'instance/value'

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.lookup_effective_guest_policy),
            '__call__') as call:
        call.return_value = guest_policies.EffectiveGuestPolicy()

        client.lookup_effective_guest_policy(request)

        # Establish that the underlying gRPC stub method was called.
        assert len(call.mock_calls) == 1
        _, args, _ = call.mock_calls[0]
        assert args[0] == request

    # Establish that the field header was sent.
    _, _, kw = call.mock_calls[0]
    assert (
        'x-goog-request-params',
        'instance=instance/value',
    ) in kw['metadata']


@pytest.mark.asyncio
async def test_lookup_effective_guest_policy_field_headers_async():
    client = OsConfigServiceAsyncClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Any value that is part of the HTTP/1.1 URI should be sent as
    # a field header. Set these to a non-empty value.
    request = guest_policies.LookupEffectiveGuestPolicyRequest()
    request.instance = 'instance/value'

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.lookup_effective_guest_policy),
            '__call__') as call:
        call.return_value = grpc_helpers_async.FakeUnaryUnaryCall(guest_policies.EffectiveGuestPolicy())

        await client.lookup_effective_guest_policy(request)

        # Establish that the underlying gRPC stub method was called.
        assert len(call.mock_calls)
        _, args, _ = call.mock_calls[0]
        assert args[0] == request

    # Establish that the field header was sent.
    _, _, kw = call.mock_calls[0]
    assert (
        'x-goog-request-params',
        'instance=instance/value',
    ) in kw['metadata']


def test_credentials_transport_error():
    # It is an error to provide credentials and a transport instance.
    transport = transports.OsConfigServiceGrpcTransport(
        credentials=credentials.AnonymousCredentials(),
    )
    with pytest.raises(ValueError):
        client = OsConfigServiceClient(
            credentials=credentials.AnonymousCredentials(),
            transport=transport,
        )

    # It is an error to provide a credentials file and a transport instance.
    transport = transports.OsConfigServiceGrpcTransport(
        credentials=credentials.AnonymousCredentials(),
    )
    with pytest.raises(ValueError):
        client = OsConfigServiceClient(
            client_options={"credentials_file": "credentials.json"},
            transport=transport,
        )

    # It is an error to provide scopes and a transport instance.
    transport = transports.OsConfigServiceGrpcTransport(
        credentials=credentials.AnonymousCredentials(),
    )
    with pytest.raises(ValueError):
        client = OsConfigServiceClient(
            client_options={"scopes": ["1", "2"]},
            transport=transport,
        )


def test_transport_instance():
    # A client may be instantiated with a custom transport instance.
    transport = transports.OsConfigServiceGrpcTransport(
        credentials=credentials.AnonymousCredentials(),
    )
    client = OsConfigServiceClient(transport=transport)
    assert client.transport is transport


def test_transport_get_channel():
    # A client may be instantiated with a custom transport instance.
    transport = transports.OsConfigServiceGrpcTransport(
        credentials=credentials.AnonymousCredentials(),
    )
    channel = transport.grpc_channel
    assert channel

    transport = transports.OsConfigServiceGrpcAsyncIOTransport(
        credentials=credentials.AnonymousCredentials(),
    )
    channel = transport.grpc_channel
    assert channel


@pytest.mark.parametrize("transport_class", [
    transports.OsConfigServiceGrpcTransport,
    transports.OsConfigServiceGrpcAsyncIOTransport,
])
def test_transport_adc(transport_class):
    # Test default credentials are used if not provided.
    with mock.patch.object(auth, 'default') as adc:
        adc.return_value = (credentials.AnonymousCredentials(), None)
        transport_class()
        adc.assert_called_once()


def test_transport_grpc_default():
    # A client should use the gRPC transport by default.
    client = OsConfigServiceClient(
        credentials=credentials.AnonymousCredentials(),
    )
    assert isinstance(
        client.transport,
        transports.OsConfigServiceGrpcTransport,
    )


def test_os_config_service_base_transport_error():
    # Passing both a credentials object and credentials_file should raise an error
    with pytest.raises(exceptions.DuplicateCredentialArgs):
        transport = transports.OsConfigServiceTransport(
            credentials=credentials.AnonymousCredentials(),
            credentials_file="credentials.json"
        )


def test_os_config_service_base_transport():
    # Instantiate the base transport.
    with mock.patch('google.cloud.osconfig_v1beta.services.os_config_service.transports.OsConfigServiceTransport.__init__') as Transport:
        Transport.return_value = None
        transport = transports.OsConfigServiceTransport(
            credentials=credentials.AnonymousCredentials(),
        )

    # Every method on the transport should just blindly
    # raise NotImplementedError.
    methods = (
        'execute_patch_job',
        'get_patch_job',
        'cancel_patch_job',
        'list_patch_jobs',
        'list_patch_job_instance_details',
        'create_patch_deployment',
        'get_patch_deployment',
        'list_patch_deployments',
        'delete_patch_deployment',
        'create_guest_policy',
        'get_guest_policy',
        'list_guest_policies',
        'update_guest_policy',
        'delete_guest_policy',
        'lookup_effective_guest_policy',
        )
    for method in methods:
        with pytest.raises(NotImplementedError):
            getattr(transport, method)(request=object())


def test_os_config_service_base_transport_with_credentials_file():
    # Instantiate the base transport with a credentials file
    with mock.patch.object(auth, 'load_credentials_from_file') as load_creds, mock.patch('google.cloud.osconfig_v1beta.services.os_config_service.transports.OsConfigServiceTransport._prep_wrapped_messages') as Transport:
        Transport.return_value = None
        load_creds.return_value = (credentials.AnonymousCredentials(), None)
        transport = transports.OsConfigServiceTransport(
            credentials_file="credentials.json",
            quota_project_id="octopus",
        )
        load_creds.assert_called_once_with("credentials.json", scopes=(
            'https://www.googleapis.com/auth/cloud-platform',
            ),
            quota_project_id="octopus",
        )


def test_os_config_service_base_transport_with_adc():
    # Test the default credentials are used if credentials and credentials_file are None.
    with mock.patch.object(auth, 'default') as adc, mock.patch('google.cloud.osconfig_v1beta.services.os_config_service.transports.OsConfigServiceTransport._prep_wrapped_messages') as Transport:
        Transport.return_value = None
        adc.return_value = (credentials.AnonymousCredentials(), None)
        transport = transports.OsConfigServiceTransport()
        adc.assert_called_once()


def test_os_config_service_auth_adc():
    # If no credentials are provided, we should use ADC credentials.
    with mock.patch.object(auth, 'default') as adc:
        adc.return_value = (credentials.AnonymousCredentials(), None)
        OsConfigServiceClient()
        adc.assert_called_once_with(scopes=(
            'https://www.googleapis.com/auth/cloud-platform',),
            quota_project_id=None,
        )


def test_os_config_service_transport_auth_adc():
    # If credentials and host are not provided, the transport class should use
    # ADC credentials.
    with mock.patch.object(auth, 'default') as adc:
        adc.return_value = (credentials.AnonymousCredentials(), None)
        transports.OsConfigServiceGrpcTransport(host="squid.clam.whelk", quota_project_id="octopus")
        adc.assert_called_once_with(scopes=(
            'https://www.googleapis.com/auth/cloud-platform',),
            quota_project_id="octopus",
        )


@pytest.mark.parametrize("transport_class", [transports.OsConfigServiceGrpcTransport, transports.OsConfigServiceGrpcAsyncIOTransport])
def test_os_config_service_grpc_transport_client_cert_source_for_mtls(
    transport_class
):
    cred = credentials.AnonymousCredentials()

    # Check ssl_channel_credentials is used if provided.
    with mock.patch.object(transport_class, "create_channel") as mock_create_channel:
        mock_ssl_channel_creds = mock.Mock()
        transport_class(
            host="squid.clam.whelk",
            credentials=cred,
            ssl_channel_credentials=mock_ssl_channel_creds
        )
        mock_create_channel.assert_called_once_with(
            "squid.clam.whelk:443",
            credentials=cred,
            credentials_file=None,
            scopes=(
                'https://www.googleapis.com/auth/cloud-platform',
            ),
            ssl_credentials=mock_ssl_channel_creds,
            quota_project_id=None,
            options=[
                ("grpc.max_send_message_length", -1),
                ("grpc.max_receive_message_length", -1),
            ],
        )

    # Check if ssl_channel_credentials is not provided, then client_cert_source_for_mtls
    # is used.
    with mock.patch.object(transport_class, "create_channel", return_value=mock.Mock()):
        with mock.patch("grpc.ssl_channel_credentials") as mock_ssl_cred:
            transport_class(
                credentials=cred,
                client_cert_source_for_mtls=client_cert_source_callback
            )
            expected_cert, expected_key = client_cert_source_callback()
            mock_ssl_cred.assert_called_once_with(
                certificate_chain=expected_cert,
                private_key=expected_key
            )


def test_os_config_service_host_no_port():
    client = OsConfigServiceClient(
        credentials=credentials.AnonymousCredentials(),
        client_options=client_options.ClientOptions(api_endpoint='osconfig.googleapis.com'),
    )
    assert client.transport._host == 'osconfig.googleapis.com:443'


def test_os_config_service_host_with_port():
    client = OsConfigServiceClient(
        credentials=credentials.AnonymousCredentials(),
        client_options=client_options.ClientOptions(api_endpoint='osconfig.googleapis.com:8000'),
    )
    assert client.transport._host == 'osconfig.googleapis.com:8000'


def test_os_config_service_grpc_transport_channel():
    channel = grpc.secure_channel('http://localhost/', grpc.local_channel_credentials())

    # Check that channel is used if provided.
    transport = transports.OsConfigServiceGrpcTransport(
        host="squid.clam.whelk",
        channel=channel,
    )
    assert transport.grpc_channel == channel
    assert transport._host == "squid.clam.whelk:443"
    assert transport._ssl_channel_credentials == None


def test_os_config_service_grpc_asyncio_transport_channel():
    channel = aio.secure_channel('http://localhost/', grpc.local_channel_credentials())

    # Check that channel is used if provided.
    transport = transports.OsConfigServiceGrpcAsyncIOTransport(
        host="squid.clam.whelk",
        channel=channel,
    )
    assert transport.grpc_channel == channel
    assert transport._host == "squid.clam.whelk:443"
    assert transport._ssl_channel_credentials == None


# Remove this test when deprecated arguments (api_mtls_endpoint, client_cert_source) are
# removed from grpc/grpc_asyncio transport constructor.
@pytest.mark.parametrize("transport_class", [transports.OsConfigServiceGrpcTransport, transports.OsConfigServiceGrpcAsyncIOTransport])
def test_os_config_service_transport_channel_mtls_with_client_cert_source(
    transport_class
):
    with mock.patch("grpc.ssl_channel_credentials", autospec=True) as grpc_ssl_channel_cred:
        with mock.patch.object(transport_class, "create_channel") as grpc_create_channel:
            mock_ssl_cred = mock.Mock()
            grpc_ssl_channel_cred.return_value = mock_ssl_cred

            mock_grpc_channel = mock.Mock()
            grpc_create_channel.return_value = mock_grpc_channel

            cred = credentials.AnonymousCredentials()
            with pytest.warns(DeprecationWarning):
                with mock.patch.object(auth, 'default') as adc:
                    adc.return_value = (cred, None)
                    transport = transport_class(
                        host="squid.clam.whelk",
                        api_mtls_endpoint="mtls.squid.clam.whelk",
                        client_cert_source=client_cert_source_callback,
                    )
                    adc.assert_called_once()

            grpc_ssl_channel_cred.assert_called_once_with(
                certificate_chain=b"cert bytes", private_key=b"key bytes"
            )
            grpc_create_channel.assert_called_once_with(
                "mtls.squid.clam.whelk:443",
                credentials=cred,
                credentials_file=None,
                scopes=(
                    'https://www.googleapis.com/auth/cloud-platform',
                ),
                ssl_credentials=mock_ssl_cred,
                quota_project_id=None,
                options=[
                    ("grpc.max_send_message_length", -1),
                    ("grpc.max_receive_message_length", -1),
                ],
            )
            assert transport.grpc_channel == mock_grpc_channel
            assert transport._ssl_channel_credentials == mock_ssl_cred


# Remove this test when deprecated arguments (api_mtls_endpoint, client_cert_source) are
# removed from grpc/grpc_asyncio transport constructor.
@pytest.mark.parametrize("transport_class", [transports.OsConfigServiceGrpcTransport, transports.OsConfigServiceGrpcAsyncIOTransport])
def test_os_config_service_transport_channel_mtls_with_adc(
    transport_class
):
    mock_ssl_cred = mock.Mock()
    with mock.patch.multiple(
        "google.auth.transport.grpc.SslCredentials",
        __init__=mock.Mock(return_value=None),
        ssl_credentials=mock.PropertyMock(return_value=mock_ssl_cred),
    ):
        with mock.patch.object(transport_class, "create_channel") as grpc_create_channel:
            mock_grpc_channel = mock.Mock()
            grpc_create_channel.return_value = mock_grpc_channel
            mock_cred = mock.Mock()

            with pytest.warns(DeprecationWarning):
                transport = transport_class(
                    host="squid.clam.whelk",
                    credentials=mock_cred,
                    api_mtls_endpoint="mtls.squid.clam.whelk",
                    client_cert_source=None,
                )

            grpc_create_channel.assert_called_once_with(
                "mtls.squid.clam.whelk:443",
                credentials=mock_cred,
                credentials_file=None,
                scopes=(
                    'https://www.googleapis.com/auth/cloud-platform',
                ),
                ssl_credentials=mock_ssl_cred,
                quota_project_id=None,
                options=[
                    ("grpc.max_send_message_length", -1),
                    ("grpc.max_receive_message_length", -1),
                ],
            )
            assert transport.grpc_channel == mock_grpc_channel


def test_guest_policy_path():
    project = "squid"
    guest_policy = "clam"

    expected = "projects/{project}/guestPolicies/{guest_policy}".format(project=project, guest_policy=guest_policy, )
    actual = OsConfigServiceClient.guest_policy_path(project, guest_policy)
    assert expected == actual


def test_parse_guest_policy_path():
    expected = {
    "project": "whelk",
    "guest_policy": "octopus",

    }
    path = OsConfigServiceClient.guest_policy_path(**expected)

    # Check that the path construction is reversible.
    actual = OsConfigServiceClient.parse_guest_policy_path(path)
    assert expected == actual

def test_common_billing_account_path():
    billing_account = "oyster"

    expected = "billingAccounts/{billing_account}".format(billing_account=billing_account, )
    actual = OsConfigServiceClient.common_billing_account_path(billing_account)
    assert expected == actual


def test_parse_common_billing_account_path():
    expected = {
    "billing_account": "nudibranch",

    }
    path = OsConfigServiceClient.common_billing_account_path(**expected)

    # Check that the path construction is reversible.
    actual = OsConfigServiceClient.parse_common_billing_account_path(path)
    assert expected == actual

def test_common_folder_path():
    folder = "cuttlefish"

    expected = "folders/{folder}".format(folder=folder, )
    actual = OsConfigServiceClient.common_folder_path(folder)
    assert expected == actual


def test_parse_common_folder_path():
    expected = {
    "folder": "mussel",

    }
    path = OsConfigServiceClient.common_folder_path(**expected)

    # Check that the path construction is reversible.
    actual = OsConfigServiceClient.parse_common_folder_path(path)
    assert expected == actual

def test_common_organization_path():
    organization = "winkle"

    expected = "organizations/{organization}".format(organization=organization, )
    actual = OsConfigServiceClient.common_organization_path(organization)
    assert expected == actual


def test_parse_common_organization_path():
    expected = {
    "organization": "nautilus",

    }
    path = OsConfigServiceClient.common_organization_path(**expected)

    # Check that the path construction is reversible.
    actual = OsConfigServiceClient.parse_common_organization_path(path)
    assert expected == actual

def test_common_project_path():
    project = "scallop"

    expected = "projects/{project}".format(project=project, )
    actual = OsConfigServiceClient.common_project_path(project)
    assert expected == actual


def test_parse_common_project_path():
    expected = {
    "project": "abalone",

    }
    path = OsConfigServiceClient.common_project_path(**expected)

    # Check that the path construction is reversible.
    actual = OsConfigServiceClient.parse_common_project_path(path)
    assert expected == actual

def test_common_location_path():
    project = "squid"
    location = "clam"

    expected = "projects/{project}/locations/{location}".format(project=project, location=location, )
    actual = OsConfigServiceClient.common_location_path(project, location)
    assert expected == actual


def test_parse_common_location_path():
    expected = {
    "project": "whelk",
    "location": "octopus",

    }
    path = OsConfigServiceClient.common_location_path(**expected)

    # Check that the path construction is reversible.
    actual = OsConfigServiceClient.parse_common_location_path(path)
    assert expected == actual


def test_client_withDEFAULT_CLIENT_INFO():
    client_info = gapic_v1.client_info.ClientInfo()

    with mock.patch.object(transports.OsConfigServiceTransport, '_prep_wrapped_messages') as prep:
        client = OsConfigServiceClient(
            credentials=credentials.AnonymousCredentials(),
            client_info=client_info,
        )
        prep.assert_called_once_with(client_info)

    with mock.patch.object(transports.OsConfigServiceTransport, '_prep_wrapped_messages') as prep:
        transport_class = OsConfigServiceClient.get_transport_class()
        transport = transport_class(
            credentials=credentials.AnonymousCredentials(),
            client_info=client_info,
        )
        prep.assert_called_once_with(client_info)