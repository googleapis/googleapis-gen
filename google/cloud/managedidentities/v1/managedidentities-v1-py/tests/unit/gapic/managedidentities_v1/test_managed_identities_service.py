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
from google.api_core import future
from google.api_core import gapic_v1
from google.api_core import grpc_helpers
from google.api_core import grpc_helpers_async
from google.api_core import operation_async  # type: ignore
from google.api_core import operations_v1
from google.auth import credentials
from google.auth.exceptions import MutualTLSChannelError
from google.cloud.managedidentities_v1.services.managed_identities_service import ManagedIdentitiesServiceAsyncClient
from google.cloud.managedidentities_v1.services.managed_identities_service import ManagedIdentitiesServiceClient
from google.cloud.managedidentities_v1.services.managed_identities_service import pagers
from google.cloud.managedidentities_v1.services.managed_identities_service import transports
from google.cloud.managedidentities_v1.types import managed_identities_service
from google.cloud.managedidentities_v1.types import resource
from google.longrunning import operations_pb2
from google.oauth2 import service_account
from google.protobuf import field_mask_pb2 as field_mask  # type: ignore
from google.protobuf import timestamp_pb2 as timestamp  # type: ignore


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

    assert ManagedIdentitiesServiceClient._get_default_mtls_endpoint(None) is None
    assert ManagedIdentitiesServiceClient._get_default_mtls_endpoint(api_endpoint) == api_mtls_endpoint
    assert ManagedIdentitiesServiceClient._get_default_mtls_endpoint(api_mtls_endpoint) == api_mtls_endpoint
    assert ManagedIdentitiesServiceClient._get_default_mtls_endpoint(sandbox_endpoint) == sandbox_mtls_endpoint
    assert ManagedIdentitiesServiceClient._get_default_mtls_endpoint(sandbox_mtls_endpoint) == sandbox_mtls_endpoint
    assert ManagedIdentitiesServiceClient._get_default_mtls_endpoint(non_googleapi) == non_googleapi


def test_managed_identities_service_client_from_service_account_info():
    creds = credentials.AnonymousCredentials()
    with mock.patch.object(service_account.Credentials, 'from_service_account_info') as factory:
        factory.return_value = creds
        info = {"valid": True}
        client = ManagedIdentitiesServiceClient.from_service_account_info(info)
        assert client.transport._credentials == creds

        assert client.transport._host == 'managedidentities.googleapis.com:443'


@pytest.mark.parametrize("client_class", [
    ManagedIdentitiesServiceClient,
    ManagedIdentitiesServiceAsyncClient,
])
def test_managed_identities_service_client_from_service_account_file(client_class):
    creds = credentials.AnonymousCredentials()
    with mock.patch.object(service_account.Credentials, 'from_service_account_file') as factory:
        factory.return_value = creds
        client = client_class.from_service_account_file("dummy/file/path.json")
        assert client.transport._credentials == creds

        client = client_class.from_service_account_json("dummy/file/path.json")
        assert client.transport._credentials == creds

        assert client.transport._host == 'managedidentities.googleapis.com:443'


def test_managed_identities_service_client_get_transport_class():
    transport = ManagedIdentitiesServiceClient.get_transport_class()
    available_transports = [
        transports.ManagedIdentitiesServiceGrpcTransport,
    ]
    assert transport in available_transports

    transport = ManagedIdentitiesServiceClient.get_transport_class("grpc")
    assert transport == transports.ManagedIdentitiesServiceGrpcTransport


@pytest.mark.parametrize("client_class,transport_class,transport_name", [
    (ManagedIdentitiesServiceClient, transports.ManagedIdentitiesServiceGrpcTransport, "grpc"),
    (ManagedIdentitiesServiceAsyncClient, transports.ManagedIdentitiesServiceGrpcAsyncIOTransport, "grpc_asyncio"),
])
@mock.patch.object(ManagedIdentitiesServiceClient, "DEFAULT_ENDPOINT", modify_default_endpoint(ManagedIdentitiesServiceClient))
@mock.patch.object(ManagedIdentitiesServiceAsyncClient, "DEFAULT_ENDPOINT", modify_default_endpoint(ManagedIdentitiesServiceAsyncClient))
def test_managed_identities_service_client_client_options(client_class, transport_class, transport_name):
    # Check that if channel is provided we won't create a new one.
    with mock.patch.object(ManagedIdentitiesServiceClient, 'get_transport_class') as gtc:
        transport = transport_class(
            credentials=credentials.AnonymousCredentials()
        )
        client = client_class(transport=transport)
        gtc.assert_not_called()

    # Check that if channel is provided via str we will create a new one.
    with mock.patch.object(ManagedIdentitiesServiceClient, 'get_transport_class') as gtc:
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

    (ManagedIdentitiesServiceClient, transports.ManagedIdentitiesServiceGrpcTransport, "grpc", "true"),
    (ManagedIdentitiesServiceAsyncClient, transports.ManagedIdentitiesServiceGrpcAsyncIOTransport, "grpc_asyncio", "true"),
    (ManagedIdentitiesServiceClient, transports.ManagedIdentitiesServiceGrpcTransport, "grpc", "false"),
    (ManagedIdentitiesServiceAsyncClient, transports.ManagedIdentitiesServiceGrpcAsyncIOTransport, "grpc_asyncio", "false"),

])
@mock.patch.object(ManagedIdentitiesServiceClient, "DEFAULT_ENDPOINT", modify_default_endpoint(ManagedIdentitiesServiceClient))
@mock.patch.object(ManagedIdentitiesServiceAsyncClient, "DEFAULT_ENDPOINT", modify_default_endpoint(ManagedIdentitiesServiceAsyncClient))
@mock.patch.dict(os.environ, {"GOOGLE_API_USE_MTLS_ENDPOINT": "auto"})
def test_managed_identities_service_client_mtls_env_auto(client_class, transport_class, transport_name, use_client_cert_env):
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
    (ManagedIdentitiesServiceClient, transports.ManagedIdentitiesServiceGrpcTransport, "grpc"),
    (ManagedIdentitiesServiceAsyncClient, transports.ManagedIdentitiesServiceGrpcAsyncIOTransport, "grpc_asyncio"),
])
def test_managed_identities_service_client_client_options_scopes(client_class, transport_class, transport_name):
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
    (ManagedIdentitiesServiceClient, transports.ManagedIdentitiesServiceGrpcTransport, "grpc"),
    (ManagedIdentitiesServiceAsyncClient, transports.ManagedIdentitiesServiceGrpcAsyncIOTransport, "grpc_asyncio"),
])
def test_managed_identities_service_client_client_options_credentials_file(client_class, transport_class, transport_name):
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


def test_managed_identities_service_client_client_options_from_dict():
    with mock.patch('google.cloud.managedidentities_v1.services.managed_identities_service.transports.ManagedIdentitiesServiceGrpcTransport.__init__') as grpc_transport:
        grpc_transport.return_value = None
        client = ManagedIdentitiesServiceClient(
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


def test_create_microsoft_ad_domain(transport: str = 'grpc', request_type=managed_identities_service.CreateMicrosoftAdDomainRequest):
    client = ManagedIdentitiesServiceClient(
        credentials=credentials.AnonymousCredentials(),
        transport=transport,
    )

    # Everything is optional in proto3 as far as the runtime is concerned,
    # and we are mocking out the actual API, so just send an empty request.
    request = request_type()

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.create_microsoft_ad_domain),
            '__call__') as call:
        # Designate an appropriate return value for the call.
        call.return_value = operations_pb2.Operation(name='operations/spam')

        response = client.create_microsoft_ad_domain(request)

        # Establish that the underlying gRPC stub method was called.
        assert len(call.mock_calls) == 1
        _, args, _ = call.mock_calls[0]

        assert args[0] == managed_identities_service.CreateMicrosoftAdDomainRequest()

    # Establish that the response is the type that we expect.
    assert isinstance(response, future.Future)


def test_create_microsoft_ad_domain_from_dict():
    test_create_microsoft_ad_domain(request_type=dict)


@pytest.mark.asyncio
async def test_create_microsoft_ad_domain_async(transport: str = 'grpc_asyncio', request_type=managed_identities_service.CreateMicrosoftAdDomainRequest):
    client = ManagedIdentitiesServiceAsyncClient(
        credentials=credentials.AnonymousCredentials(),
        transport=transport,
    )

    # Everything is optional in proto3 as far as the runtime is concerned,
    # and we are mocking out the actual API, so just send an empty request.
    request = request_type()

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.create_microsoft_ad_domain),
            '__call__') as call:
        # Designate an appropriate return value for the call.
        call.return_value = grpc_helpers_async.FakeUnaryUnaryCall(
            operations_pb2.Operation(name='operations/spam')
        )

        response = await client.create_microsoft_ad_domain(request)

        # Establish that the underlying gRPC stub method was called.
        assert len(call.mock_calls)
        _, args, _ = call.mock_calls[0]

        assert args[0] == managed_identities_service.CreateMicrosoftAdDomainRequest()

    # Establish that the response is the type that we expect.
    assert isinstance(response, future.Future)


@pytest.mark.asyncio
async def test_create_microsoft_ad_domain_async_from_dict():
    await test_create_microsoft_ad_domain_async(request_type=dict)


def test_create_microsoft_ad_domain_field_headers():
    client = ManagedIdentitiesServiceClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Any value that is part of the HTTP/1.1 URI should be sent as
    # a field header. Set these to a non-empty value.
    request = managed_identities_service.CreateMicrosoftAdDomainRequest()
    request.parent = 'parent/value'

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.create_microsoft_ad_domain),
            '__call__') as call:
        call.return_value = operations_pb2.Operation(name='operations/op')

        client.create_microsoft_ad_domain(request)

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
async def test_create_microsoft_ad_domain_field_headers_async():
    client = ManagedIdentitiesServiceAsyncClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Any value that is part of the HTTP/1.1 URI should be sent as
    # a field header. Set these to a non-empty value.
    request = managed_identities_service.CreateMicrosoftAdDomainRequest()
    request.parent = 'parent/value'

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.create_microsoft_ad_domain),
            '__call__') as call:
        call.return_value = grpc_helpers_async.FakeUnaryUnaryCall(operations_pb2.Operation(name='operations/op'))

        await client.create_microsoft_ad_domain(request)

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


def test_create_microsoft_ad_domain_flattened():
    client = ManagedIdentitiesServiceClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.create_microsoft_ad_domain),
            '__call__') as call:
        # Designate an appropriate return value for the call.
        call.return_value = operations_pb2.Operation(name='operations/op')

        # Call the method with a truthy value for each flattened field,
        # using the keyword arguments to the method.
        client.create_microsoft_ad_domain(
            parent='parent_value',
            domain_name='domain_name_value',
            domain=resource.Domain(name='name_value'),
        )

        # Establish that the underlying call was made with the expected
        # request object values.
        assert len(call.mock_calls) == 1
        _, args, _ = call.mock_calls[0]

        assert args[0].parent == 'parent_value'

        assert args[0].domain_name == 'domain_name_value'

        assert args[0].domain == resource.Domain(name='name_value')


def test_create_microsoft_ad_domain_flattened_error():
    client = ManagedIdentitiesServiceClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Attempting to call a method with both a request object and flattened
    # fields is an error.
    with pytest.raises(ValueError):
        client.create_microsoft_ad_domain(
            managed_identities_service.CreateMicrosoftAdDomainRequest(),
            parent='parent_value',
            domain_name='domain_name_value',
            domain=resource.Domain(name='name_value'),
        )


@pytest.mark.asyncio
async def test_create_microsoft_ad_domain_flattened_async():
    client = ManagedIdentitiesServiceAsyncClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.create_microsoft_ad_domain),
            '__call__') as call:
        # Designate an appropriate return value for the call.
        call.return_value = operations_pb2.Operation(name='operations/op')

        call.return_value = grpc_helpers_async.FakeUnaryUnaryCall(
            operations_pb2.Operation(name='operations/spam')
        )
        # Call the method with a truthy value for each flattened field,
        # using the keyword arguments to the method.
        response = await client.create_microsoft_ad_domain(
            parent='parent_value',
            domain_name='domain_name_value',
            domain=resource.Domain(name='name_value'),
        )

        # Establish that the underlying call was made with the expected
        # request object values.
        assert len(call.mock_calls)
        _, args, _ = call.mock_calls[0]

        assert args[0].parent == 'parent_value'

        assert args[0].domain_name == 'domain_name_value'

        assert args[0].domain == resource.Domain(name='name_value')


@pytest.mark.asyncio
async def test_create_microsoft_ad_domain_flattened_error_async():
    client = ManagedIdentitiesServiceAsyncClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Attempting to call a method with both a request object and flattened
    # fields is an error.
    with pytest.raises(ValueError):
        await client.create_microsoft_ad_domain(
            managed_identities_service.CreateMicrosoftAdDomainRequest(),
            parent='parent_value',
            domain_name='domain_name_value',
            domain=resource.Domain(name='name_value'),
        )


def test_reset_admin_password(transport: str = 'grpc', request_type=managed_identities_service.ResetAdminPasswordRequest):
    client = ManagedIdentitiesServiceClient(
        credentials=credentials.AnonymousCredentials(),
        transport=transport,
    )

    # Everything is optional in proto3 as far as the runtime is concerned,
    # and we are mocking out the actual API, so just send an empty request.
    request = request_type()

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.reset_admin_password),
            '__call__') as call:
        # Designate an appropriate return value for the call.
        call.return_value = managed_identities_service.ResetAdminPasswordResponse(
            password='password_value',

        )

        response = client.reset_admin_password(request)

        # Establish that the underlying gRPC stub method was called.
        assert len(call.mock_calls) == 1
        _, args, _ = call.mock_calls[0]

        assert args[0] == managed_identities_service.ResetAdminPasswordRequest()

    # Establish that the response is the type that we expect.

    assert isinstance(response, managed_identities_service.ResetAdminPasswordResponse)

    assert response.password == 'password_value'


def test_reset_admin_password_from_dict():
    test_reset_admin_password(request_type=dict)


@pytest.mark.asyncio
async def test_reset_admin_password_async(transport: str = 'grpc_asyncio', request_type=managed_identities_service.ResetAdminPasswordRequest):
    client = ManagedIdentitiesServiceAsyncClient(
        credentials=credentials.AnonymousCredentials(),
        transport=transport,
    )

    # Everything is optional in proto3 as far as the runtime is concerned,
    # and we are mocking out the actual API, so just send an empty request.
    request = request_type()

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.reset_admin_password),
            '__call__') as call:
        # Designate an appropriate return value for the call.
        call.return_value = grpc_helpers_async.FakeUnaryUnaryCall(managed_identities_service.ResetAdminPasswordResponse(
            password='password_value',
        ))

        response = await client.reset_admin_password(request)

        # Establish that the underlying gRPC stub method was called.
        assert len(call.mock_calls)
        _, args, _ = call.mock_calls[0]

        assert args[0] == managed_identities_service.ResetAdminPasswordRequest()

    # Establish that the response is the type that we expect.
    assert isinstance(response, managed_identities_service.ResetAdminPasswordResponse)

    assert response.password == 'password_value'


@pytest.mark.asyncio
async def test_reset_admin_password_async_from_dict():
    await test_reset_admin_password_async(request_type=dict)


def test_reset_admin_password_field_headers():
    client = ManagedIdentitiesServiceClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Any value that is part of the HTTP/1.1 URI should be sent as
    # a field header. Set these to a non-empty value.
    request = managed_identities_service.ResetAdminPasswordRequest()
    request.name = 'name/value'

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.reset_admin_password),
            '__call__') as call:
        call.return_value = managed_identities_service.ResetAdminPasswordResponse()

        client.reset_admin_password(request)

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
async def test_reset_admin_password_field_headers_async():
    client = ManagedIdentitiesServiceAsyncClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Any value that is part of the HTTP/1.1 URI should be sent as
    # a field header. Set these to a non-empty value.
    request = managed_identities_service.ResetAdminPasswordRequest()
    request.name = 'name/value'

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.reset_admin_password),
            '__call__') as call:
        call.return_value = grpc_helpers_async.FakeUnaryUnaryCall(managed_identities_service.ResetAdminPasswordResponse())

        await client.reset_admin_password(request)

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


def test_reset_admin_password_flattened():
    client = ManagedIdentitiesServiceClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.reset_admin_password),
            '__call__') as call:
        # Designate an appropriate return value for the call.
        call.return_value = managed_identities_service.ResetAdminPasswordResponse()

        # Call the method with a truthy value for each flattened field,
        # using the keyword arguments to the method.
        client.reset_admin_password(
            name='name_value',
        )

        # Establish that the underlying call was made with the expected
        # request object values.
        assert len(call.mock_calls) == 1
        _, args, _ = call.mock_calls[0]

        assert args[0].name == 'name_value'


def test_reset_admin_password_flattened_error():
    client = ManagedIdentitiesServiceClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Attempting to call a method with both a request object and flattened
    # fields is an error.
    with pytest.raises(ValueError):
        client.reset_admin_password(
            managed_identities_service.ResetAdminPasswordRequest(),
            name='name_value',
        )


@pytest.mark.asyncio
async def test_reset_admin_password_flattened_async():
    client = ManagedIdentitiesServiceAsyncClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.reset_admin_password),
            '__call__') as call:
        # Designate an appropriate return value for the call.
        call.return_value = managed_identities_service.ResetAdminPasswordResponse()

        call.return_value = grpc_helpers_async.FakeUnaryUnaryCall(managed_identities_service.ResetAdminPasswordResponse())
        # Call the method with a truthy value for each flattened field,
        # using the keyword arguments to the method.
        response = await client.reset_admin_password(
            name='name_value',
        )

        # Establish that the underlying call was made with the expected
        # request object values.
        assert len(call.mock_calls)
        _, args, _ = call.mock_calls[0]

        assert args[0].name == 'name_value'


@pytest.mark.asyncio
async def test_reset_admin_password_flattened_error_async():
    client = ManagedIdentitiesServiceAsyncClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Attempting to call a method with both a request object and flattened
    # fields is an error.
    with pytest.raises(ValueError):
        await client.reset_admin_password(
            managed_identities_service.ResetAdminPasswordRequest(),
            name='name_value',
        )


def test_list_domains(transport: str = 'grpc', request_type=managed_identities_service.ListDomainsRequest):
    client = ManagedIdentitiesServiceClient(
        credentials=credentials.AnonymousCredentials(),
        transport=transport,
    )

    # Everything is optional in proto3 as far as the runtime is concerned,
    # and we are mocking out the actual API, so just send an empty request.
    request = request_type()

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.list_domains),
            '__call__') as call:
        # Designate an appropriate return value for the call.
        call.return_value = managed_identities_service.ListDomainsResponse(
            next_page_token='next_page_token_value',

            unreachable=['unreachable_value'],

        )

        response = client.list_domains(request)

        # Establish that the underlying gRPC stub method was called.
        assert len(call.mock_calls) == 1
        _, args, _ = call.mock_calls[0]

        assert args[0] == managed_identities_service.ListDomainsRequest()

    # Establish that the response is the type that we expect.

    assert isinstance(response, pagers.ListDomainsPager)

    assert response.next_page_token == 'next_page_token_value'

    assert response.unreachable == ['unreachable_value']


def test_list_domains_from_dict():
    test_list_domains(request_type=dict)


@pytest.mark.asyncio
async def test_list_domains_async(transport: str = 'grpc_asyncio', request_type=managed_identities_service.ListDomainsRequest):
    client = ManagedIdentitiesServiceAsyncClient(
        credentials=credentials.AnonymousCredentials(),
        transport=transport,
    )

    # Everything is optional in proto3 as far as the runtime is concerned,
    # and we are mocking out the actual API, so just send an empty request.
    request = request_type()

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.list_domains),
            '__call__') as call:
        # Designate an appropriate return value for the call.
        call.return_value = grpc_helpers_async.FakeUnaryUnaryCall(managed_identities_service.ListDomainsResponse(
            next_page_token='next_page_token_value',
            unreachable=['unreachable_value'],
        ))

        response = await client.list_domains(request)

        # Establish that the underlying gRPC stub method was called.
        assert len(call.mock_calls)
        _, args, _ = call.mock_calls[0]

        assert args[0] == managed_identities_service.ListDomainsRequest()

    # Establish that the response is the type that we expect.
    assert isinstance(response, pagers.ListDomainsAsyncPager)

    assert response.next_page_token == 'next_page_token_value'

    assert response.unreachable == ['unreachable_value']


@pytest.mark.asyncio
async def test_list_domains_async_from_dict():
    await test_list_domains_async(request_type=dict)


def test_list_domains_field_headers():
    client = ManagedIdentitiesServiceClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Any value that is part of the HTTP/1.1 URI should be sent as
    # a field header. Set these to a non-empty value.
    request = managed_identities_service.ListDomainsRequest()
    request.parent = 'parent/value'

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.list_domains),
            '__call__') as call:
        call.return_value = managed_identities_service.ListDomainsResponse()

        client.list_domains(request)

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
async def test_list_domains_field_headers_async():
    client = ManagedIdentitiesServiceAsyncClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Any value that is part of the HTTP/1.1 URI should be sent as
    # a field header. Set these to a non-empty value.
    request = managed_identities_service.ListDomainsRequest()
    request.parent = 'parent/value'

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.list_domains),
            '__call__') as call:
        call.return_value = grpc_helpers_async.FakeUnaryUnaryCall(managed_identities_service.ListDomainsResponse())

        await client.list_domains(request)

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


def test_list_domains_flattened():
    client = ManagedIdentitiesServiceClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.list_domains),
            '__call__') as call:
        # Designate an appropriate return value for the call.
        call.return_value = managed_identities_service.ListDomainsResponse()

        # Call the method with a truthy value for each flattened field,
        # using the keyword arguments to the method.
        client.list_domains(
            parent='parent_value',
        )

        # Establish that the underlying call was made with the expected
        # request object values.
        assert len(call.mock_calls) == 1
        _, args, _ = call.mock_calls[0]

        assert args[0].parent == 'parent_value'


def test_list_domains_flattened_error():
    client = ManagedIdentitiesServiceClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Attempting to call a method with both a request object and flattened
    # fields is an error.
    with pytest.raises(ValueError):
        client.list_domains(
            managed_identities_service.ListDomainsRequest(),
            parent='parent_value',
        )


@pytest.mark.asyncio
async def test_list_domains_flattened_async():
    client = ManagedIdentitiesServiceAsyncClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.list_domains),
            '__call__') as call:
        # Designate an appropriate return value for the call.
        call.return_value = managed_identities_service.ListDomainsResponse()

        call.return_value = grpc_helpers_async.FakeUnaryUnaryCall(managed_identities_service.ListDomainsResponse())
        # Call the method with a truthy value for each flattened field,
        # using the keyword arguments to the method.
        response = await client.list_domains(
            parent='parent_value',
        )

        # Establish that the underlying call was made with the expected
        # request object values.
        assert len(call.mock_calls)
        _, args, _ = call.mock_calls[0]

        assert args[0].parent == 'parent_value'


@pytest.mark.asyncio
async def test_list_domains_flattened_error_async():
    client = ManagedIdentitiesServiceAsyncClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Attempting to call a method with both a request object and flattened
    # fields is an error.
    with pytest.raises(ValueError):
        await client.list_domains(
            managed_identities_service.ListDomainsRequest(),
            parent='parent_value',
        )


def test_list_domains_pager():
    client = ManagedIdentitiesServiceClient(
        credentials=credentials.AnonymousCredentials,
    )

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.list_domains),
            '__call__') as call:
        # Set the response to a series of pages.
        call.side_effect = (
            managed_identities_service.ListDomainsResponse(
                domains=[
                    resource.Domain(),
                    resource.Domain(),
                    resource.Domain(),
                ],
                next_page_token='abc',
            ),
            managed_identities_service.ListDomainsResponse(
                domains=[],
                next_page_token='def',
            ),
            managed_identities_service.ListDomainsResponse(
                domains=[
                    resource.Domain(),
                ],
                next_page_token='ghi',
            ),
            managed_identities_service.ListDomainsResponse(
                domains=[
                    resource.Domain(),
                    resource.Domain(),
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
        pager = client.list_domains(request={})

        assert pager._metadata == metadata

        results = [i for i in pager]
        assert len(results) == 6
        assert all(isinstance(i, resource.Domain)
                   for i in results)

def test_list_domains_pages():
    client = ManagedIdentitiesServiceClient(
        credentials=credentials.AnonymousCredentials,
    )

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.list_domains),
            '__call__') as call:
        # Set the response to a series of pages.
        call.side_effect = (
            managed_identities_service.ListDomainsResponse(
                domains=[
                    resource.Domain(),
                    resource.Domain(),
                    resource.Domain(),
                ],
                next_page_token='abc',
            ),
            managed_identities_service.ListDomainsResponse(
                domains=[],
                next_page_token='def',
            ),
            managed_identities_service.ListDomainsResponse(
                domains=[
                    resource.Domain(),
                ],
                next_page_token='ghi',
            ),
            managed_identities_service.ListDomainsResponse(
                domains=[
                    resource.Domain(),
                    resource.Domain(),
                ],
            ),
            RuntimeError,
        )
        pages = list(client.list_domains(request={}).pages)
        for page_, token in zip(pages, ['abc','def','ghi', '']):
            assert page_.raw_page.next_page_token == token

@pytest.mark.asyncio
async def test_list_domains_async_pager():
    client = ManagedIdentitiesServiceAsyncClient(
        credentials=credentials.AnonymousCredentials,
    )

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.list_domains),
            '__call__', new_callable=mock.AsyncMock) as call:
        # Set the response to a series of pages.
        call.side_effect = (
            managed_identities_service.ListDomainsResponse(
                domains=[
                    resource.Domain(),
                    resource.Domain(),
                    resource.Domain(),
                ],
                next_page_token='abc',
            ),
            managed_identities_service.ListDomainsResponse(
                domains=[],
                next_page_token='def',
            ),
            managed_identities_service.ListDomainsResponse(
                domains=[
                    resource.Domain(),
                ],
                next_page_token='ghi',
            ),
            managed_identities_service.ListDomainsResponse(
                domains=[
                    resource.Domain(),
                    resource.Domain(),
                ],
            ),
            RuntimeError,
        )
        async_pager = await client.list_domains(request={},)
        assert async_pager.next_page_token == 'abc'
        responses = []
        async for response in async_pager:
            responses.append(response)

        assert len(responses) == 6
        assert all(isinstance(i, resource.Domain)
                   for i in responses)

@pytest.mark.asyncio
async def test_list_domains_async_pages():
    client = ManagedIdentitiesServiceAsyncClient(
        credentials=credentials.AnonymousCredentials,
    )

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.list_domains),
            '__call__', new_callable=mock.AsyncMock) as call:
        # Set the response to a series of pages.
        call.side_effect = (
            managed_identities_service.ListDomainsResponse(
                domains=[
                    resource.Domain(),
                    resource.Domain(),
                    resource.Domain(),
                ],
                next_page_token='abc',
            ),
            managed_identities_service.ListDomainsResponse(
                domains=[],
                next_page_token='def',
            ),
            managed_identities_service.ListDomainsResponse(
                domains=[
                    resource.Domain(),
                ],
                next_page_token='ghi',
            ),
            managed_identities_service.ListDomainsResponse(
                domains=[
                    resource.Domain(),
                    resource.Domain(),
                ],
            ),
            RuntimeError,
        )
        pages = []
        async for page_ in (await client.list_domains(request={})).pages:
            pages.append(page_)
        for page_, token in zip(pages, ['abc','def','ghi', '']):
            assert page_.raw_page.next_page_token == token


def test_get_domain(transport: str = 'grpc', request_type=managed_identities_service.GetDomainRequest):
    client = ManagedIdentitiesServiceClient(
        credentials=credentials.AnonymousCredentials(),
        transport=transport,
    )

    # Everything is optional in proto3 as far as the runtime is concerned,
    # and we are mocking out the actual API, so just send an empty request.
    request = request_type()

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.get_domain),
            '__call__') as call:
        # Designate an appropriate return value for the call.
        call.return_value = resource.Domain(
            name='name_value',

            authorized_networks=['authorized_networks_value'],

            reserved_ip_range='reserved_ip_range_value',

            locations=['locations_value'],

            admin='admin_value',

            fqdn='fqdn_value',

            state=resource.Domain.State.CREATING,

            status_message='status_message_value',

        )

        response = client.get_domain(request)

        # Establish that the underlying gRPC stub method was called.
        assert len(call.mock_calls) == 1
        _, args, _ = call.mock_calls[0]

        assert args[0] == managed_identities_service.GetDomainRequest()

    # Establish that the response is the type that we expect.

    assert isinstance(response, resource.Domain)

    assert response.name == 'name_value'

    assert response.authorized_networks == ['authorized_networks_value']

    assert response.reserved_ip_range == 'reserved_ip_range_value'

    assert response.locations == ['locations_value']

    assert response.admin == 'admin_value'

    assert response.fqdn == 'fqdn_value'

    assert response.state == resource.Domain.State.CREATING

    assert response.status_message == 'status_message_value'


def test_get_domain_from_dict():
    test_get_domain(request_type=dict)


@pytest.mark.asyncio
async def test_get_domain_async(transport: str = 'grpc_asyncio', request_type=managed_identities_service.GetDomainRequest):
    client = ManagedIdentitiesServiceAsyncClient(
        credentials=credentials.AnonymousCredentials(),
        transport=transport,
    )

    # Everything is optional in proto3 as far as the runtime is concerned,
    # and we are mocking out the actual API, so just send an empty request.
    request = request_type()

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.get_domain),
            '__call__') as call:
        # Designate an appropriate return value for the call.
        call.return_value = grpc_helpers_async.FakeUnaryUnaryCall(resource.Domain(
            name='name_value',
            authorized_networks=['authorized_networks_value'],
            reserved_ip_range='reserved_ip_range_value',
            locations=['locations_value'],
            admin='admin_value',
            fqdn='fqdn_value',
            state=resource.Domain.State.CREATING,
            status_message='status_message_value',
        ))

        response = await client.get_domain(request)

        # Establish that the underlying gRPC stub method was called.
        assert len(call.mock_calls)
        _, args, _ = call.mock_calls[0]

        assert args[0] == managed_identities_service.GetDomainRequest()

    # Establish that the response is the type that we expect.
    assert isinstance(response, resource.Domain)

    assert response.name == 'name_value'

    assert response.authorized_networks == ['authorized_networks_value']

    assert response.reserved_ip_range == 'reserved_ip_range_value'

    assert response.locations == ['locations_value']

    assert response.admin == 'admin_value'

    assert response.fqdn == 'fqdn_value'

    assert response.state == resource.Domain.State.CREATING

    assert response.status_message == 'status_message_value'


@pytest.mark.asyncio
async def test_get_domain_async_from_dict():
    await test_get_domain_async(request_type=dict)


def test_get_domain_field_headers():
    client = ManagedIdentitiesServiceClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Any value that is part of the HTTP/1.1 URI should be sent as
    # a field header. Set these to a non-empty value.
    request = managed_identities_service.GetDomainRequest()
    request.name = 'name/value'

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.get_domain),
            '__call__') as call:
        call.return_value = resource.Domain()

        client.get_domain(request)

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
async def test_get_domain_field_headers_async():
    client = ManagedIdentitiesServiceAsyncClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Any value that is part of the HTTP/1.1 URI should be sent as
    # a field header. Set these to a non-empty value.
    request = managed_identities_service.GetDomainRequest()
    request.name = 'name/value'

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.get_domain),
            '__call__') as call:
        call.return_value = grpc_helpers_async.FakeUnaryUnaryCall(resource.Domain())

        await client.get_domain(request)

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


def test_get_domain_flattened():
    client = ManagedIdentitiesServiceClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.get_domain),
            '__call__') as call:
        # Designate an appropriate return value for the call.
        call.return_value = resource.Domain()

        # Call the method with a truthy value for each flattened field,
        # using the keyword arguments to the method.
        client.get_domain(
            name='name_value',
        )

        # Establish that the underlying call was made with the expected
        # request object values.
        assert len(call.mock_calls) == 1
        _, args, _ = call.mock_calls[0]

        assert args[0].name == 'name_value'


def test_get_domain_flattened_error():
    client = ManagedIdentitiesServiceClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Attempting to call a method with both a request object and flattened
    # fields is an error.
    with pytest.raises(ValueError):
        client.get_domain(
            managed_identities_service.GetDomainRequest(),
            name='name_value',
        )


@pytest.mark.asyncio
async def test_get_domain_flattened_async():
    client = ManagedIdentitiesServiceAsyncClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.get_domain),
            '__call__') as call:
        # Designate an appropriate return value for the call.
        call.return_value = resource.Domain()

        call.return_value = grpc_helpers_async.FakeUnaryUnaryCall(resource.Domain())
        # Call the method with a truthy value for each flattened field,
        # using the keyword arguments to the method.
        response = await client.get_domain(
            name='name_value',
        )

        # Establish that the underlying call was made with the expected
        # request object values.
        assert len(call.mock_calls)
        _, args, _ = call.mock_calls[0]

        assert args[0].name == 'name_value'


@pytest.mark.asyncio
async def test_get_domain_flattened_error_async():
    client = ManagedIdentitiesServiceAsyncClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Attempting to call a method with both a request object and flattened
    # fields is an error.
    with pytest.raises(ValueError):
        await client.get_domain(
            managed_identities_service.GetDomainRequest(),
            name='name_value',
        )


def test_update_domain(transport: str = 'grpc', request_type=managed_identities_service.UpdateDomainRequest):
    client = ManagedIdentitiesServiceClient(
        credentials=credentials.AnonymousCredentials(),
        transport=transport,
    )

    # Everything is optional in proto3 as far as the runtime is concerned,
    # and we are mocking out the actual API, so just send an empty request.
    request = request_type()

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.update_domain),
            '__call__') as call:
        # Designate an appropriate return value for the call.
        call.return_value = operations_pb2.Operation(name='operations/spam')

        response = client.update_domain(request)

        # Establish that the underlying gRPC stub method was called.
        assert len(call.mock_calls) == 1
        _, args, _ = call.mock_calls[0]

        assert args[0] == managed_identities_service.UpdateDomainRequest()

    # Establish that the response is the type that we expect.
    assert isinstance(response, future.Future)


def test_update_domain_from_dict():
    test_update_domain(request_type=dict)


@pytest.mark.asyncio
async def test_update_domain_async(transport: str = 'grpc_asyncio', request_type=managed_identities_service.UpdateDomainRequest):
    client = ManagedIdentitiesServiceAsyncClient(
        credentials=credentials.AnonymousCredentials(),
        transport=transport,
    )

    # Everything is optional in proto3 as far as the runtime is concerned,
    # and we are mocking out the actual API, so just send an empty request.
    request = request_type()

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.update_domain),
            '__call__') as call:
        # Designate an appropriate return value for the call.
        call.return_value = grpc_helpers_async.FakeUnaryUnaryCall(
            operations_pb2.Operation(name='operations/spam')
        )

        response = await client.update_domain(request)

        # Establish that the underlying gRPC stub method was called.
        assert len(call.mock_calls)
        _, args, _ = call.mock_calls[0]

        assert args[0] == managed_identities_service.UpdateDomainRequest()

    # Establish that the response is the type that we expect.
    assert isinstance(response, future.Future)


@pytest.mark.asyncio
async def test_update_domain_async_from_dict():
    await test_update_domain_async(request_type=dict)


def test_update_domain_field_headers():
    client = ManagedIdentitiesServiceClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Any value that is part of the HTTP/1.1 URI should be sent as
    # a field header. Set these to a non-empty value.
    request = managed_identities_service.UpdateDomainRequest()
    request.domain.name = 'domain.name/value'

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.update_domain),
            '__call__') as call:
        call.return_value = operations_pb2.Operation(name='operations/op')

        client.update_domain(request)

        # Establish that the underlying gRPC stub method was called.
        assert len(call.mock_calls) == 1
        _, args, _ = call.mock_calls[0]
        assert args[0] == request

    # Establish that the field header was sent.
    _, _, kw = call.mock_calls[0]
    assert (
        'x-goog-request-params',
        'domain.name=domain.name/value',
    ) in kw['metadata']


@pytest.mark.asyncio
async def test_update_domain_field_headers_async():
    client = ManagedIdentitiesServiceAsyncClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Any value that is part of the HTTP/1.1 URI should be sent as
    # a field header. Set these to a non-empty value.
    request = managed_identities_service.UpdateDomainRequest()
    request.domain.name = 'domain.name/value'

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.update_domain),
            '__call__') as call:
        call.return_value = grpc_helpers_async.FakeUnaryUnaryCall(operations_pb2.Operation(name='operations/op'))

        await client.update_domain(request)

        # Establish that the underlying gRPC stub method was called.
        assert len(call.mock_calls)
        _, args, _ = call.mock_calls[0]
        assert args[0] == request

    # Establish that the field header was sent.
    _, _, kw = call.mock_calls[0]
    assert (
        'x-goog-request-params',
        'domain.name=domain.name/value',
    ) in kw['metadata']


def test_update_domain_flattened():
    client = ManagedIdentitiesServiceClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.update_domain),
            '__call__') as call:
        # Designate an appropriate return value for the call.
        call.return_value = operations_pb2.Operation(name='operations/op')

        # Call the method with a truthy value for each flattened field,
        # using the keyword arguments to the method.
        client.update_domain(
            domain=resource.Domain(name='name_value'),
            update_mask=field_mask.FieldMask(paths=['paths_value']),
        )

        # Establish that the underlying call was made with the expected
        # request object values.
        assert len(call.mock_calls) == 1
        _, args, _ = call.mock_calls[0]

        assert args[0].domain == resource.Domain(name='name_value')

        assert args[0].update_mask == field_mask.FieldMask(paths=['paths_value'])


def test_update_domain_flattened_error():
    client = ManagedIdentitiesServiceClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Attempting to call a method with both a request object and flattened
    # fields is an error.
    with pytest.raises(ValueError):
        client.update_domain(
            managed_identities_service.UpdateDomainRequest(),
            domain=resource.Domain(name='name_value'),
            update_mask=field_mask.FieldMask(paths=['paths_value']),
        )


@pytest.mark.asyncio
async def test_update_domain_flattened_async():
    client = ManagedIdentitiesServiceAsyncClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.update_domain),
            '__call__') as call:
        # Designate an appropriate return value for the call.
        call.return_value = operations_pb2.Operation(name='operations/op')

        call.return_value = grpc_helpers_async.FakeUnaryUnaryCall(
            operations_pb2.Operation(name='operations/spam')
        )
        # Call the method with a truthy value for each flattened field,
        # using the keyword arguments to the method.
        response = await client.update_domain(
            domain=resource.Domain(name='name_value'),
            update_mask=field_mask.FieldMask(paths=['paths_value']),
        )

        # Establish that the underlying call was made with the expected
        # request object values.
        assert len(call.mock_calls)
        _, args, _ = call.mock_calls[0]

        assert args[0].domain == resource.Domain(name='name_value')

        assert args[0].update_mask == field_mask.FieldMask(paths=['paths_value'])


@pytest.mark.asyncio
async def test_update_domain_flattened_error_async():
    client = ManagedIdentitiesServiceAsyncClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Attempting to call a method with both a request object and flattened
    # fields is an error.
    with pytest.raises(ValueError):
        await client.update_domain(
            managed_identities_service.UpdateDomainRequest(),
            domain=resource.Domain(name='name_value'),
            update_mask=field_mask.FieldMask(paths=['paths_value']),
        )


def test_delete_domain(transport: str = 'grpc', request_type=managed_identities_service.DeleteDomainRequest):
    client = ManagedIdentitiesServiceClient(
        credentials=credentials.AnonymousCredentials(),
        transport=transport,
    )

    # Everything is optional in proto3 as far as the runtime is concerned,
    # and we are mocking out the actual API, so just send an empty request.
    request = request_type()

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.delete_domain),
            '__call__') as call:
        # Designate an appropriate return value for the call.
        call.return_value = operations_pb2.Operation(name='operations/spam')

        response = client.delete_domain(request)

        # Establish that the underlying gRPC stub method was called.
        assert len(call.mock_calls) == 1
        _, args, _ = call.mock_calls[0]

        assert args[0] == managed_identities_service.DeleteDomainRequest()

    # Establish that the response is the type that we expect.
    assert isinstance(response, future.Future)


def test_delete_domain_from_dict():
    test_delete_domain(request_type=dict)


@pytest.mark.asyncio
async def test_delete_domain_async(transport: str = 'grpc_asyncio', request_type=managed_identities_service.DeleteDomainRequest):
    client = ManagedIdentitiesServiceAsyncClient(
        credentials=credentials.AnonymousCredentials(),
        transport=transport,
    )

    # Everything is optional in proto3 as far as the runtime is concerned,
    # and we are mocking out the actual API, so just send an empty request.
    request = request_type()

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.delete_domain),
            '__call__') as call:
        # Designate an appropriate return value for the call.
        call.return_value = grpc_helpers_async.FakeUnaryUnaryCall(
            operations_pb2.Operation(name='operations/spam')
        )

        response = await client.delete_domain(request)

        # Establish that the underlying gRPC stub method was called.
        assert len(call.mock_calls)
        _, args, _ = call.mock_calls[0]

        assert args[0] == managed_identities_service.DeleteDomainRequest()

    # Establish that the response is the type that we expect.
    assert isinstance(response, future.Future)


@pytest.mark.asyncio
async def test_delete_domain_async_from_dict():
    await test_delete_domain_async(request_type=dict)


def test_delete_domain_field_headers():
    client = ManagedIdentitiesServiceClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Any value that is part of the HTTP/1.1 URI should be sent as
    # a field header. Set these to a non-empty value.
    request = managed_identities_service.DeleteDomainRequest()
    request.name = 'name/value'

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.delete_domain),
            '__call__') as call:
        call.return_value = operations_pb2.Operation(name='operations/op')

        client.delete_domain(request)

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
async def test_delete_domain_field_headers_async():
    client = ManagedIdentitiesServiceAsyncClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Any value that is part of the HTTP/1.1 URI should be sent as
    # a field header. Set these to a non-empty value.
    request = managed_identities_service.DeleteDomainRequest()
    request.name = 'name/value'

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.delete_domain),
            '__call__') as call:
        call.return_value = grpc_helpers_async.FakeUnaryUnaryCall(operations_pb2.Operation(name='operations/op'))

        await client.delete_domain(request)

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


def test_delete_domain_flattened():
    client = ManagedIdentitiesServiceClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.delete_domain),
            '__call__') as call:
        # Designate an appropriate return value for the call.
        call.return_value = operations_pb2.Operation(name='operations/op')

        # Call the method with a truthy value for each flattened field,
        # using the keyword arguments to the method.
        client.delete_domain(
            name='name_value',
        )

        # Establish that the underlying call was made with the expected
        # request object values.
        assert len(call.mock_calls) == 1
        _, args, _ = call.mock_calls[0]

        assert args[0].name == 'name_value'


def test_delete_domain_flattened_error():
    client = ManagedIdentitiesServiceClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Attempting to call a method with both a request object and flattened
    # fields is an error.
    with pytest.raises(ValueError):
        client.delete_domain(
            managed_identities_service.DeleteDomainRequest(),
            name='name_value',
        )


@pytest.mark.asyncio
async def test_delete_domain_flattened_async():
    client = ManagedIdentitiesServiceAsyncClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.delete_domain),
            '__call__') as call:
        # Designate an appropriate return value for the call.
        call.return_value = operations_pb2.Operation(name='operations/op')

        call.return_value = grpc_helpers_async.FakeUnaryUnaryCall(
            operations_pb2.Operation(name='operations/spam')
        )
        # Call the method with a truthy value for each flattened field,
        # using the keyword arguments to the method.
        response = await client.delete_domain(
            name='name_value',
        )

        # Establish that the underlying call was made with the expected
        # request object values.
        assert len(call.mock_calls)
        _, args, _ = call.mock_calls[0]

        assert args[0].name == 'name_value'


@pytest.mark.asyncio
async def test_delete_domain_flattened_error_async():
    client = ManagedIdentitiesServiceAsyncClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Attempting to call a method with both a request object and flattened
    # fields is an error.
    with pytest.raises(ValueError):
        await client.delete_domain(
            managed_identities_service.DeleteDomainRequest(),
            name='name_value',
        )


def test_attach_trust(transport: str = 'grpc', request_type=managed_identities_service.AttachTrustRequest):
    client = ManagedIdentitiesServiceClient(
        credentials=credentials.AnonymousCredentials(),
        transport=transport,
    )

    # Everything is optional in proto3 as far as the runtime is concerned,
    # and we are mocking out the actual API, so just send an empty request.
    request = request_type()

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.attach_trust),
            '__call__') as call:
        # Designate an appropriate return value for the call.
        call.return_value = operations_pb2.Operation(name='operations/spam')

        response = client.attach_trust(request)

        # Establish that the underlying gRPC stub method was called.
        assert len(call.mock_calls) == 1
        _, args, _ = call.mock_calls[0]

        assert args[0] == managed_identities_service.AttachTrustRequest()

    # Establish that the response is the type that we expect.
    assert isinstance(response, future.Future)


def test_attach_trust_from_dict():
    test_attach_trust(request_type=dict)


@pytest.mark.asyncio
async def test_attach_trust_async(transport: str = 'grpc_asyncio', request_type=managed_identities_service.AttachTrustRequest):
    client = ManagedIdentitiesServiceAsyncClient(
        credentials=credentials.AnonymousCredentials(),
        transport=transport,
    )

    # Everything is optional in proto3 as far as the runtime is concerned,
    # and we are mocking out the actual API, so just send an empty request.
    request = request_type()

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.attach_trust),
            '__call__') as call:
        # Designate an appropriate return value for the call.
        call.return_value = grpc_helpers_async.FakeUnaryUnaryCall(
            operations_pb2.Operation(name='operations/spam')
        )

        response = await client.attach_trust(request)

        # Establish that the underlying gRPC stub method was called.
        assert len(call.mock_calls)
        _, args, _ = call.mock_calls[0]

        assert args[0] == managed_identities_service.AttachTrustRequest()

    # Establish that the response is the type that we expect.
    assert isinstance(response, future.Future)


@pytest.mark.asyncio
async def test_attach_trust_async_from_dict():
    await test_attach_trust_async(request_type=dict)


def test_attach_trust_field_headers():
    client = ManagedIdentitiesServiceClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Any value that is part of the HTTP/1.1 URI should be sent as
    # a field header. Set these to a non-empty value.
    request = managed_identities_service.AttachTrustRequest()
    request.name = 'name/value'

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.attach_trust),
            '__call__') as call:
        call.return_value = operations_pb2.Operation(name='operations/op')

        client.attach_trust(request)

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
async def test_attach_trust_field_headers_async():
    client = ManagedIdentitiesServiceAsyncClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Any value that is part of the HTTP/1.1 URI should be sent as
    # a field header. Set these to a non-empty value.
    request = managed_identities_service.AttachTrustRequest()
    request.name = 'name/value'

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.attach_trust),
            '__call__') as call:
        call.return_value = grpc_helpers_async.FakeUnaryUnaryCall(operations_pb2.Operation(name='operations/op'))

        await client.attach_trust(request)

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


def test_attach_trust_flattened():
    client = ManagedIdentitiesServiceClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.attach_trust),
            '__call__') as call:
        # Designate an appropriate return value for the call.
        call.return_value = operations_pb2.Operation(name='operations/op')

        # Call the method with a truthy value for each flattened field,
        # using the keyword arguments to the method.
        client.attach_trust(
            name='name_value',
            trust=resource.Trust(target_domain_name='target_domain_name_value'),
        )

        # Establish that the underlying call was made with the expected
        # request object values.
        assert len(call.mock_calls) == 1
        _, args, _ = call.mock_calls[0]

        assert args[0].name == 'name_value'

        assert args[0].trust == resource.Trust(target_domain_name='target_domain_name_value')


def test_attach_trust_flattened_error():
    client = ManagedIdentitiesServiceClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Attempting to call a method with both a request object and flattened
    # fields is an error.
    with pytest.raises(ValueError):
        client.attach_trust(
            managed_identities_service.AttachTrustRequest(),
            name='name_value',
            trust=resource.Trust(target_domain_name='target_domain_name_value'),
        )


@pytest.mark.asyncio
async def test_attach_trust_flattened_async():
    client = ManagedIdentitiesServiceAsyncClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.attach_trust),
            '__call__') as call:
        # Designate an appropriate return value for the call.
        call.return_value = operations_pb2.Operation(name='operations/op')

        call.return_value = grpc_helpers_async.FakeUnaryUnaryCall(
            operations_pb2.Operation(name='operations/spam')
        )
        # Call the method with a truthy value for each flattened field,
        # using the keyword arguments to the method.
        response = await client.attach_trust(
            name='name_value',
            trust=resource.Trust(target_domain_name='target_domain_name_value'),
        )

        # Establish that the underlying call was made with the expected
        # request object values.
        assert len(call.mock_calls)
        _, args, _ = call.mock_calls[0]

        assert args[0].name == 'name_value'

        assert args[0].trust == resource.Trust(target_domain_name='target_domain_name_value')


@pytest.mark.asyncio
async def test_attach_trust_flattened_error_async():
    client = ManagedIdentitiesServiceAsyncClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Attempting to call a method with both a request object and flattened
    # fields is an error.
    with pytest.raises(ValueError):
        await client.attach_trust(
            managed_identities_service.AttachTrustRequest(),
            name='name_value',
            trust=resource.Trust(target_domain_name='target_domain_name_value'),
        )


def test_reconfigure_trust(transport: str = 'grpc', request_type=managed_identities_service.ReconfigureTrustRequest):
    client = ManagedIdentitiesServiceClient(
        credentials=credentials.AnonymousCredentials(),
        transport=transport,
    )

    # Everything is optional in proto3 as far as the runtime is concerned,
    # and we are mocking out the actual API, so just send an empty request.
    request = request_type()

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.reconfigure_trust),
            '__call__') as call:
        # Designate an appropriate return value for the call.
        call.return_value = operations_pb2.Operation(name='operations/spam')

        response = client.reconfigure_trust(request)

        # Establish that the underlying gRPC stub method was called.
        assert len(call.mock_calls) == 1
        _, args, _ = call.mock_calls[0]

        assert args[0] == managed_identities_service.ReconfigureTrustRequest()

    # Establish that the response is the type that we expect.
    assert isinstance(response, future.Future)


def test_reconfigure_trust_from_dict():
    test_reconfigure_trust(request_type=dict)


@pytest.mark.asyncio
async def test_reconfigure_trust_async(transport: str = 'grpc_asyncio', request_type=managed_identities_service.ReconfigureTrustRequest):
    client = ManagedIdentitiesServiceAsyncClient(
        credentials=credentials.AnonymousCredentials(),
        transport=transport,
    )

    # Everything is optional in proto3 as far as the runtime is concerned,
    # and we are mocking out the actual API, so just send an empty request.
    request = request_type()

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.reconfigure_trust),
            '__call__') as call:
        # Designate an appropriate return value for the call.
        call.return_value = grpc_helpers_async.FakeUnaryUnaryCall(
            operations_pb2.Operation(name='operations/spam')
        )

        response = await client.reconfigure_trust(request)

        # Establish that the underlying gRPC stub method was called.
        assert len(call.mock_calls)
        _, args, _ = call.mock_calls[0]

        assert args[0] == managed_identities_service.ReconfigureTrustRequest()

    # Establish that the response is the type that we expect.
    assert isinstance(response, future.Future)


@pytest.mark.asyncio
async def test_reconfigure_trust_async_from_dict():
    await test_reconfigure_trust_async(request_type=dict)


def test_reconfigure_trust_field_headers():
    client = ManagedIdentitiesServiceClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Any value that is part of the HTTP/1.1 URI should be sent as
    # a field header. Set these to a non-empty value.
    request = managed_identities_service.ReconfigureTrustRequest()
    request.name = 'name/value'

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.reconfigure_trust),
            '__call__') as call:
        call.return_value = operations_pb2.Operation(name='operations/op')

        client.reconfigure_trust(request)

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
async def test_reconfigure_trust_field_headers_async():
    client = ManagedIdentitiesServiceAsyncClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Any value that is part of the HTTP/1.1 URI should be sent as
    # a field header. Set these to a non-empty value.
    request = managed_identities_service.ReconfigureTrustRequest()
    request.name = 'name/value'

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.reconfigure_trust),
            '__call__') as call:
        call.return_value = grpc_helpers_async.FakeUnaryUnaryCall(operations_pb2.Operation(name='operations/op'))

        await client.reconfigure_trust(request)

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


def test_reconfigure_trust_flattened():
    client = ManagedIdentitiesServiceClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.reconfigure_trust),
            '__call__') as call:
        # Designate an appropriate return value for the call.
        call.return_value = operations_pb2.Operation(name='operations/op')

        # Call the method with a truthy value for each flattened field,
        # using the keyword arguments to the method.
        client.reconfigure_trust(
            name='name_value',
            target_domain_name='target_domain_name_value',
            target_dns_ip_addresses=['target_dns_ip_addresses_value'],
        )

        # Establish that the underlying call was made with the expected
        # request object values.
        assert len(call.mock_calls) == 1
        _, args, _ = call.mock_calls[0]

        assert args[0].name == 'name_value'

        assert args[0].target_domain_name == 'target_domain_name_value'

        assert args[0].target_dns_ip_addresses == ['target_dns_ip_addresses_value']


def test_reconfigure_trust_flattened_error():
    client = ManagedIdentitiesServiceClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Attempting to call a method with both a request object and flattened
    # fields is an error.
    with pytest.raises(ValueError):
        client.reconfigure_trust(
            managed_identities_service.ReconfigureTrustRequest(),
            name='name_value',
            target_domain_name='target_domain_name_value',
            target_dns_ip_addresses=['target_dns_ip_addresses_value'],
        )


@pytest.mark.asyncio
async def test_reconfigure_trust_flattened_async():
    client = ManagedIdentitiesServiceAsyncClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.reconfigure_trust),
            '__call__') as call:
        # Designate an appropriate return value for the call.
        call.return_value = operations_pb2.Operation(name='operations/op')

        call.return_value = grpc_helpers_async.FakeUnaryUnaryCall(
            operations_pb2.Operation(name='operations/spam')
        )
        # Call the method with a truthy value for each flattened field,
        # using the keyword arguments to the method.
        response = await client.reconfigure_trust(
            name='name_value',
            target_domain_name='target_domain_name_value',
            target_dns_ip_addresses=['target_dns_ip_addresses_value'],
        )

        # Establish that the underlying call was made with the expected
        # request object values.
        assert len(call.mock_calls)
        _, args, _ = call.mock_calls[0]

        assert args[0].name == 'name_value'

        assert args[0].target_domain_name == 'target_domain_name_value'

        assert args[0].target_dns_ip_addresses == ['target_dns_ip_addresses_value']


@pytest.mark.asyncio
async def test_reconfigure_trust_flattened_error_async():
    client = ManagedIdentitiesServiceAsyncClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Attempting to call a method with both a request object and flattened
    # fields is an error.
    with pytest.raises(ValueError):
        await client.reconfigure_trust(
            managed_identities_service.ReconfigureTrustRequest(),
            name='name_value',
            target_domain_name='target_domain_name_value',
            target_dns_ip_addresses=['target_dns_ip_addresses_value'],
        )


def test_detach_trust(transport: str = 'grpc', request_type=managed_identities_service.DetachTrustRequest):
    client = ManagedIdentitiesServiceClient(
        credentials=credentials.AnonymousCredentials(),
        transport=transport,
    )

    # Everything is optional in proto3 as far as the runtime is concerned,
    # and we are mocking out the actual API, so just send an empty request.
    request = request_type()

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.detach_trust),
            '__call__') as call:
        # Designate an appropriate return value for the call.
        call.return_value = operations_pb2.Operation(name='operations/spam')

        response = client.detach_trust(request)

        # Establish that the underlying gRPC stub method was called.
        assert len(call.mock_calls) == 1
        _, args, _ = call.mock_calls[0]

        assert args[0] == managed_identities_service.DetachTrustRequest()

    # Establish that the response is the type that we expect.
    assert isinstance(response, future.Future)


def test_detach_trust_from_dict():
    test_detach_trust(request_type=dict)


@pytest.mark.asyncio
async def test_detach_trust_async(transport: str = 'grpc_asyncio', request_type=managed_identities_service.DetachTrustRequest):
    client = ManagedIdentitiesServiceAsyncClient(
        credentials=credentials.AnonymousCredentials(),
        transport=transport,
    )

    # Everything is optional in proto3 as far as the runtime is concerned,
    # and we are mocking out the actual API, so just send an empty request.
    request = request_type()

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.detach_trust),
            '__call__') as call:
        # Designate an appropriate return value for the call.
        call.return_value = grpc_helpers_async.FakeUnaryUnaryCall(
            operations_pb2.Operation(name='operations/spam')
        )

        response = await client.detach_trust(request)

        # Establish that the underlying gRPC stub method was called.
        assert len(call.mock_calls)
        _, args, _ = call.mock_calls[0]

        assert args[0] == managed_identities_service.DetachTrustRequest()

    # Establish that the response is the type that we expect.
    assert isinstance(response, future.Future)


@pytest.mark.asyncio
async def test_detach_trust_async_from_dict():
    await test_detach_trust_async(request_type=dict)


def test_detach_trust_field_headers():
    client = ManagedIdentitiesServiceClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Any value that is part of the HTTP/1.1 URI should be sent as
    # a field header. Set these to a non-empty value.
    request = managed_identities_service.DetachTrustRequest()
    request.name = 'name/value'

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.detach_trust),
            '__call__') as call:
        call.return_value = operations_pb2.Operation(name='operations/op')

        client.detach_trust(request)

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
async def test_detach_trust_field_headers_async():
    client = ManagedIdentitiesServiceAsyncClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Any value that is part of the HTTP/1.1 URI should be sent as
    # a field header. Set these to a non-empty value.
    request = managed_identities_service.DetachTrustRequest()
    request.name = 'name/value'

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.detach_trust),
            '__call__') as call:
        call.return_value = grpc_helpers_async.FakeUnaryUnaryCall(operations_pb2.Operation(name='operations/op'))

        await client.detach_trust(request)

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


def test_detach_trust_flattened():
    client = ManagedIdentitiesServiceClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.detach_trust),
            '__call__') as call:
        # Designate an appropriate return value for the call.
        call.return_value = operations_pb2.Operation(name='operations/op')

        # Call the method with a truthy value for each flattened field,
        # using the keyword arguments to the method.
        client.detach_trust(
            name='name_value',
            trust=resource.Trust(target_domain_name='target_domain_name_value'),
        )

        # Establish that the underlying call was made with the expected
        # request object values.
        assert len(call.mock_calls) == 1
        _, args, _ = call.mock_calls[0]

        assert args[0].name == 'name_value'

        assert args[0].trust == resource.Trust(target_domain_name='target_domain_name_value')


def test_detach_trust_flattened_error():
    client = ManagedIdentitiesServiceClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Attempting to call a method with both a request object and flattened
    # fields is an error.
    with pytest.raises(ValueError):
        client.detach_trust(
            managed_identities_service.DetachTrustRequest(),
            name='name_value',
            trust=resource.Trust(target_domain_name='target_domain_name_value'),
        )


@pytest.mark.asyncio
async def test_detach_trust_flattened_async():
    client = ManagedIdentitiesServiceAsyncClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.detach_trust),
            '__call__') as call:
        # Designate an appropriate return value for the call.
        call.return_value = operations_pb2.Operation(name='operations/op')

        call.return_value = grpc_helpers_async.FakeUnaryUnaryCall(
            operations_pb2.Operation(name='operations/spam')
        )
        # Call the method with a truthy value for each flattened field,
        # using the keyword arguments to the method.
        response = await client.detach_trust(
            name='name_value',
            trust=resource.Trust(target_domain_name='target_domain_name_value'),
        )

        # Establish that the underlying call was made with the expected
        # request object values.
        assert len(call.mock_calls)
        _, args, _ = call.mock_calls[0]

        assert args[0].name == 'name_value'

        assert args[0].trust == resource.Trust(target_domain_name='target_domain_name_value')


@pytest.mark.asyncio
async def test_detach_trust_flattened_error_async():
    client = ManagedIdentitiesServiceAsyncClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Attempting to call a method with both a request object and flattened
    # fields is an error.
    with pytest.raises(ValueError):
        await client.detach_trust(
            managed_identities_service.DetachTrustRequest(),
            name='name_value',
            trust=resource.Trust(target_domain_name='target_domain_name_value'),
        )


def test_validate_trust(transport: str = 'grpc', request_type=managed_identities_service.ValidateTrustRequest):
    client = ManagedIdentitiesServiceClient(
        credentials=credentials.AnonymousCredentials(),
        transport=transport,
    )

    # Everything is optional in proto3 as far as the runtime is concerned,
    # and we are mocking out the actual API, so just send an empty request.
    request = request_type()

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.validate_trust),
            '__call__') as call:
        # Designate an appropriate return value for the call.
        call.return_value = operations_pb2.Operation(name='operations/spam')

        response = client.validate_trust(request)

        # Establish that the underlying gRPC stub method was called.
        assert len(call.mock_calls) == 1
        _, args, _ = call.mock_calls[0]

        assert args[0] == managed_identities_service.ValidateTrustRequest()

    # Establish that the response is the type that we expect.
    assert isinstance(response, future.Future)


def test_validate_trust_from_dict():
    test_validate_trust(request_type=dict)


@pytest.mark.asyncio
async def test_validate_trust_async(transport: str = 'grpc_asyncio', request_type=managed_identities_service.ValidateTrustRequest):
    client = ManagedIdentitiesServiceAsyncClient(
        credentials=credentials.AnonymousCredentials(),
        transport=transport,
    )

    # Everything is optional in proto3 as far as the runtime is concerned,
    # and we are mocking out the actual API, so just send an empty request.
    request = request_type()

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.validate_trust),
            '__call__') as call:
        # Designate an appropriate return value for the call.
        call.return_value = grpc_helpers_async.FakeUnaryUnaryCall(
            operations_pb2.Operation(name='operations/spam')
        )

        response = await client.validate_trust(request)

        # Establish that the underlying gRPC stub method was called.
        assert len(call.mock_calls)
        _, args, _ = call.mock_calls[0]

        assert args[0] == managed_identities_service.ValidateTrustRequest()

    # Establish that the response is the type that we expect.
    assert isinstance(response, future.Future)


@pytest.mark.asyncio
async def test_validate_trust_async_from_dict():
    await test_validate_trust_async(request_type=dict)


def test_validate_trust_field_headers():
    client = ManagedIdentitiesServiceClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Any value that is part of the HTTP/1.1 URI should be sent as
    # a field header. Set these to a non-empty value.
    request = managed_identities_service.ValidateTrustRequest()
    request.name = 'name/value'

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.validate_trust),
            '__call__') as call:
        call.return_value = operations_pb2.Operation(name='operations/op')

        client.validate_trust(request)

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
async def test_validate_trust_field_headers_async():
    client = ManagedIdentitiesServiceAsyncClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Any value that is part of the HTTP/1.1 URI should be sent as
    # a field header. Set these to a non-empty value.
    request = managed_identities_service.ValidateTrustRequest()
    request.name = 'name/value'

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.validate_trust),
            '__call__') as call:
        call.return_value = grpc_helpers_async.FakeUnaryUnaryCall(operations_pb2.Operation(name='operations/op'))

        await client.validate_trust(request)

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


def test_validate_trust_flattened():
    client = ManagedIdentitiesServiceClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.validate_trust),
            '__call__') as call:
        # Designate an appropriate return value for the call.
        call.return_value = operations_pb2.Operation(name='operations/op')

        # Call the method with a truthy value for each flattened field,
        # using the keyword arguments to the method.
        client.validate_trust(
            name='name_value',
            trust=resource.Trust(target_domain_name='target_domain_name_value'),
        )

        # Establish that the underlying call was made with the expected
        # request object values.
        assert len(call.mock_calls) == 1
        _, args, _ = call.mock_calls[0]

        assert args[0].name == 'name_value'

        assert args[0].trust == resource.Trust(target_domain_name='target_domain_name_value')


def test_validate_trust_flattened_error():
    client = ManagedIdentitiesServiceClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Attempting to call a method with both a request object and flattened
    # fields is an error.
    with pytest.raises(ValueError):
        client.validate_trust(
            managed_identities_service.ValidateTrustRequest(),
            name='name_value',
            trust=resource.Trust(target_domain_name='target_domain_name_value'),
        )


@pytest.mark.asyncio
async def test_validate_trust_flattened_async():
    client = ManagedIdentitiesServiceAsyncClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Mock the actual call within the gRPC stub, and fake the request.
    with mock.patch.object(
            type(client.transport.validate_trust),
            '__call__') as call:
        # Designate an appropriate return value for the call.
        call.return_value = operations_pb2.Operation(name='operations/op')

        call.return_value = grpc_helpers_async.FakeUnaryUnaryCall(
            operations_pb2.Operation(name='operations/spam')
        )
        # Call the method with a truthy value for each flattened field,
        # using the keyword arguments to the method.
        response = await client.validate_trust(
            name='name_value',
            trust=resource.Trust(target_domain_name='target_domain_name_value'),
        )

        # Establish that the underlying call was made with the expected
        # request object values.
        assert len(call.mock_calls)
        _, args, _ = call.mock_calls[0]

        assert args[0].name == 'name_value'

        assert args[0].trust == resource.Trust(target_domain_name='target_domain_name_value')


@pytest.mark.asyncio
async def test_validate_trust_flattened_error_async():
    client = ManagedIdentitiesServiceAsyncClient(
        credentials=credentials.AnonymousCredentials(),
    )

    # Attempting to call a method with both a request object and flattened
    # fields is an error.
    with pytest.raises(ValueError):
        await client.validate_trust(
            managed_identities_service.ValidateTrustRequest(),
            name='name_value',
            trust=resource.Trust(target_domain_name='target_domain_name_value'),
        )


def test_credentials_transport_error():
    # It is an error to provide credentials and a transport instance.
    transport = transports.ManagedIdentitiesServiceGrpcTransport(
        credentials=credentials.AnonymousCredentials(),
    )
    with pytest.raises(ValueError):
        client = ManagedIdentitiesServiceClient(
            credentials=credentials.AnonymousCredentials(),
            transport=transport,
        )

    # It is an error to provide a credentials file and a transport instance.
    transport = transports.ManagedIdentitiesServiceGrpcTransport(
        credentials=credentials.AnonymousCredentials(),
    )
    with pytest.raises(ValueError):
        client = ManagedIdentitiesServiceClient(
            client_options={"credentials_file": "credentials.json"},
            transport=transport,
        )

    # It is an error to provide scopes and a transport instance.
    transport = transports.ManagedIdentitiesServiceGrpcTransport(
        credentials=credentials.AnonymousCredentials(),
    )
    with pytest.raises(ValueError):
        client = ManagedIdentitiesServiceClient(
            client_options={"scopes": ["1", "2"]},
            transport=transport,
        )


def test_transport_instance():
    # A client may be instantiated with a custom transport instance.
    transport = transports.ManagedIdentitiesServiceGrpcTransport(
        credentials=credentials.AnonymousCredentials(),
    )
    client = ManagedIdentitiesServiceClient(transport=transport)
    assert client.transport is transport


def test_transport_get_channel():
    # A client may be instantiated with a custom transport instance.
    transport = transports.ManagedIdentitiesServiceGrpcTransport(
        credentials=credentials.AnonymousCredentials(),
    )
    channel = transport.grpc_channel
    assert channel

    transport = transports.ManagedIdentitiesServiceGrpcAsyncIOTransport(
        credentials=credentials.AnonymousCredentials(),
    )
    channel = transport.grpc_channel
    assert channel


@pytest.mark.parametrize("transport_class", [
    transports.ManagedIdentitiesServiceGrpcTransport,
    transports.ManagedIdentitiesServiceGrpcAsyncIOTransport,
])
def test_transport_adc(transport_class):
    # Test default credentials are used if not provided.
    with mock.patch.object(auth, 'default') as adc:
        adc.return_value = (credentials.AnonymousCredentials(), None)
        transport_class()
        adc.assert_called_once()


def test_transport_grpc_default():
    # A client should use the gRPC transport by default.
    client = ManagedIdentitiesServiceClient(
        credentials=credentials.AnonymousCredentials(),
    )
    assert isinstance(
        client.transport,
        transports.ManagedIdentitiesServiceGrpcTransport,
    )


def test_managed_identities_service_base_transport_error():
    # Passing both a credentials object and credentials_file should raise an error
    with pytest.raises(exceptions.DuplicateCredentialArgs):
        transport = transports.ManagedIdentitiesServiceTransport(
            credentials=credentials.AnonymousCredentials(),
            credentials_file="credentials.json"
        )


def test_managed_identities_service_base_transport():
    # Instantiate the base transport.
    with mock.patch('google.cloud.managedidentities_v1.services.managed_identities_service.transports.ManagedIdentitiesServiceTransport.__init__') as Transport:
        Transport.return_value = None
        transport = transports.ManagedIdentitiesServiceTransport(
            credentials=credentials.AnonymousCredentials(),
        )

    # Every method on the transport should just blindly
    # raise NotImplementedError.
    methods = (
        'create_microsoft_ad_domain',
        'reset_admin_password',
        'list_domains',
        'get_domain',
        'update_domain',
        'delete_domain',
        'attach_trust',
        'reconfigure_trust',
        'detach_trust',
        'validate_trust',
        )
    for method in methods:
        with pytest.raises(NotImplementedError):
            getattr(transport, method)(request=object())

    # Additionally, the LRO client (a property) should
    # also raise NotImplementedError
    with pytest.raises(NotImplementedError):
        transport.operations_client


def test_managed_identities_service_base_transport_with_credentials_file():
    # Instantiate the base transport with a credentials file
    with mock.patch.object(auth, 'load_credentials_from_file') as load_creds, mock.patch('google.cloud.managedidentities_v1.services.managed_identities_service.transports.ManagedIdentitiesServiceTransport._prep_wrapped_messages') as Transport:
        Transport.return_value = None
        load_creds.return_value = (credentials.AnonymousCredentials(), None)
        transport = transports.ManagedIdentitiesServiceTransport(
            credentials_file="credentials.json",
            quota_project_id="octopus",
        )
        load_creds.assert_called_once_with("credentials.json", scopes=(
            'https://www.googleapis.com/auth/cloud-platform',
            ),
            quota_project_id="octopus",
        )


def test_managed_identities_service_base_transport_with_adc():
    # Test the default credentials are used if credentials and credentials_file are None.
    with mock.patch.object(auth, 'default') as adc, mock.patch('google.cloud.managedidentities_v1.services.managed_identities_service.transports.ManagedIdentitiesServiceTransport._prep_wrapped_messages') as Transport:
        Transport.return_value = None
        adc.return_value = (credentials.AnonymousCredentials(), None)
        transport = transports.ManagedIdentitiesServiceTransport()
        adc.assert_called_once()


def test_managed_identities_service_auth_adc():
    # If no credentials are provided, we should use ADC credentials.
    with mock.patch.object(auth, 'default') as adc:
        adc.return_value = (credentials.AnonymousCredentials(), None)
        ManagedIdentitiesServiceClient()
        adc.assert_called_once_with(scopes=(
            'https://www.googleapis.com/auth/cloud-platform',),
            quota_project_id=None,
        )


def test_managed_identities_service_transport_auth_adc():
    # If credentials and host are not provided, the transport class should use
    # ADC credentials.
    with mock.patch.object(auth, 'default') as adc:
        adc.return_value = (credentials.AnonymousCredentials(), None)
        transports.ManagedIdentitiesServiceGrpcTransport(host="squid.clam.whelk", quota_project_id="octopus")
        adc.assert_called_once_with(scopes=(
            'https://www.googleapis.com/auth/cloud-platform',),
            quota_project_id="octopus",
        )


@pytest.mark.parametrize("transport_class", [transports.ManagedIdentitiesServiceGrpcTransport, transports.ManagedIdentitiesServiceGrpcAsyncIOTransport])
def test_managed_identities_service_grpc_transport_client_cert_source_for_mtls(
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


def test_managed_identities_service_host_no_port():
    client = ManagedIdentitiesServiceClient(
        credentials=credentials.AnonymousCredentials(),
        client_options=client_options.ClientOptions(api_endpoint='managedidentities.googleapis.com'),
    )
    assert client.transport._host == 'managedidentities.googleapis.com:443'


def test_managed_identities_service_host_with_port():
    client = ManagedIdentitiesServiceClient(
        credentials=credentials.AnonymousCredentials(),
        client_options=client_options.ClientOptions(api_endpoint='managedidentities.googleapis.com:8000'),
    )
    assert client.transport._host == 'managedidentities.googleapis.com:8000'


def test_managed_identities_service_grpc_transport_channel():
    channel = grpc.secure_channel('http://localhost/', grpc.local_channel_credentials())

    # Check that channel is used if provided.
    transport = transports.ManagedIdentitiesServiceGrpcTransport(
        host="squid.clam.whelk",
        channel=channel,
    )
    assert transport.grpc_channel == channel
    assert transport._host == "squid.clam.whelk:443"
    assert transport._ssl_channel_credentials == None


def test_managed_identities_service_grpc_asyncio_transport_channel():
    channel = aio.secure_channel('http://localhost/', grpc.local_channel_credentials())

    # Check that channel is used if provided.
    transport = transports.ManagedIdentitiesServiceGrpcAsyncIOTransport(
        host="squid.clam.whelk",
        channel=channel,
    )
    assert transport.grpc_channel == channel
    assert transport._host == "squid.clam.whelk:443"
    assert transport._ssl_channel_credentials == None


# Remove this test when deprecated arguments (api_mtls_endpoint, client_cert_source) are
# removed from grpc/grpc_asyncio transport constructor.
@pytest.mark.parametrize("transport_class", [transports.ManagedIdentitiesServiceGrpcTransport, transports.ManagedIdentitiesServiceGrpcAsyncIOTransport])
def test_managed_identities_service_transport_channel_mtls_with_client_cert_source(
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
@pytest.mark.parametrize("transport_class", [transports.ManagedIdentitiesServiceGrpcTransport, transports.ManagedIdentitiesServiceGrpcAsyncIOTransport])
def test_managed_identities_service_transport_channel_mtls_with_adc(
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


def test_managed_identities_service_grpc_lro_client():
    client = ManagedIdentitiesServiceClient(
        credentials=credentials.AnonymousCredentials(),
        transport='grpc',
    )
    transport = client.transport

    # Ensure that we have a api-core operations client.
    assert isinstance(
        transport.operations_client,
        operations_v1.OperationsClient,
    )

    # Ensure that subsequent calls to the property send the exact same object.
    assert transport.operations_client is transport.operations_client


def test_managed_identities_service_grpc_lro_async_client():
    client = ManagedIdentitiesServiceAsyncClient(
        credentials=credentials.AnonymousCredentials(),
        transport='grpc_asyncio',
    )
    transport = client.transport

    # Ensure that we have a api-core operations client.
    assert isinstance(
        transport.operations_client,
        operations_v1.OperationsAsyncClient,
    )

    # Ensure that subsequent calls to the property send the exact same object.
    assert transport.operations_client is transport.operations_client


def test_domain_path():
    project = "squid"
    location = "clam"
    domain = "whelk"

    expected = "projects/{project}/locations/{location}/domains/{domain}".format(project=project, location=location, domain=domain, )
    actual = ManagedIdentitiesServiceClient.domain_path(project, location, domain)
    assert expected == actual


def test_parse_domain_path():
    expected = {
    "project": "octopus",
    "location": "oyster",
    "domain": "nudibranch",

    }
    path = ManagedIdentitiesServiceClient.domain_path(**expected)

    # Check that the path construction is reversible.
    actual = ManagedIdentitiesServiceClient.parse_domain_path(path)
    assert expected == actual

def test_common_billing_account_path():
    billing_account = "cuttlefish"

    expected = "billingAccounts/{billing_account}".format(billing_account=billing_account, )
    actual = ManagedIdentitiesServiceClient.common_billing_account_path(billing_account)
    assert expected == actual


def test_parse_common_billing_account_path():
    expected = {
    "billing_account": "mussel",

    }
    path = ManagedIdentitiesServiceClient.common_billing_account_path(**expected)

    # Check that the path construction is reversible.
    actual = ManagedIdentitiesServiceClient.parse_common_billing_account_path(path)
    assert expected == actual

def test_common_folder_path():
    folder = "winkle"

    expected = "folders/{folder}".format(folder=folder, )
    actual = ManagedIdentitiesServiceClient.common_folder_path(folder)
    assert expected == actual


def test_parse_common_folder_path():
    expected = {
    "folder": "nautilus",

    }
    path = ManagedIdentitiesServiceClient.common_folder_path(**expected)

    # Check that the path construction is reversible.
    actual = ManagedIdentitiesServiceClient.parse_common_folder_path(path)
    assert expected == actual

def test_common_organization_path():
    organization = "scallop"

    expected = "organizations/{organization}".format(organization=organization, )
    actual = ManagedIdentitiesServiceClient.common_organization_path(organization)
    assert expected == actual


def test_parse_common_organization_path():
    expected = {
    "organization": "abalone",

    }
    path = ManagedIdentitiesServiceClient.common_organization_path(**expected)

    # Check that the path construction is reversible.
    actual = ManagedIdentitiesServiceClient.parse_common_organization_path(path)
    assert expected == actual

def test_common_project_path():
    project = "squid"

    expected = "projects/{project}".format(project=project, )
    actual = ManagedIdentitiesServiceClient.common_project_path(project)
    assert expected == actual


def test_parse_common_project_path():
    expected = {
    "project": "clam",

    }
    path = ManagedIdentitiesServiceClient.common_project_path(**expected)

    # Check that the path construction is reversible.
    actual = ManagedIdentitiesServiceClient.parse_common_project_path(path)
    assert expected == actual

def test_common_location_path():
    project = "whelk"
    location = "octopus"

    expected = "projects/{project}/locations/{location}".format(project=project, location=location, )
    actual = ManagedIdentitiesServiceClient.common_location_path(project, location)
    assert expected == actual


def test_parse_common_location_path():
    expected = {
    "project": "oyster",
    "location": "nudibranch",

    }
    path = ManagedIdentitiesServiceClient.common_location_path(**expected)

    # Check that the path construction is reversible.
    actual = ManagedIdentitiesServiceClient.parse_common_location_path(path)
    assert expected == actual


def test_client_withDEFAULT_CLIENT_INFO():
    client_info = gapic_v1.client_info.ClientInfo()

    with mock.patch.object(transports.ManagedIdentitiesServiceTransport, '_prep_wrapped_messages') as prep:
        client = ManagedIdentitiesServiceClient(
            credentials=credentials.AnonymousCredentials(),
            client_info=client_info,
        )
        prep.assert_called_once_with(client_info)

    with mock.patch.object(transports.ManagedIdentitiesServiceTransport, '_prep_wrapped_messages') as prep:
        transport_class = ManagedIdentitiesServiceClient.get_transport_class()
        transport = transport_class(
            credentials=credentials.AnonymousCredentials(),
            client_info=client_info,
        )
        prep.assert_called_once_with(client_info)
