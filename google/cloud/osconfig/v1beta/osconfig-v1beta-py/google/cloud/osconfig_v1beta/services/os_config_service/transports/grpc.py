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

import warnings
from typing import Callable, Dict, Optional, Sequence, Tuple

from google.api_core import grpc_helpers   # type: ignore
from google.api_core import gapic_v1       # type: ignore
from google import auth                    # type: ignore
from google.auth import credentials        # type: ignore
from google.auth.transport.grpc import SslCredentials  # type: ignore

import grpc  # type: ignore

from google.cloud.osconfig_v1beta.types import guest_policies
from google.cloud.osconfig_v1beta.types import patch_deployments
from google.cloud.osconfig_v1beta.types import patch_jobs
from google.protobuf import empty_pb2 as empty  # type: ignore

from .base import OsConfigServiceTransport, DEFAULT_CLIENT_INFO


class OsConfigServiceGrpcTransport(OsConfigServiceTransport):
    """gRPC backend transport for OsConfigService.

    OS Config API
    The OS Config service is a server-side component that you can
    use to manage package installations and patch jobs for virtual
    machine instances.

    This class defines the same methods as the primary client, so the
    primary client can load the underlying transport implementation
    and call it.

    It sends protocol buffers over the wire using gRPC (which is built on
    top of HTTP/2); the ``grpcio`` package must be installed.
    """
    _stubs: Dict[str, Callable]

    def __init__(self, *,
            host: str = 'osconfig.googleapis.com',
            credentials: credentials.Credentials = None,
            credentials_file: str = None,
            scopes: Sequence[str] = None,
            channel: grpc.Channel = None,
            api_mtls_endpoint: str = None,
            client_cert_source: Callable[[], Tuple[bytes, bytes]] = None,
            ssl_channel_credentials: grpc.ChannelCredentials = None,
            client_cert_source_for_mtls: Callable[[], Tuple[bytes, bytes]] = None,
            quota_project_id: Optional[str] = None,
            client_info: gapic_v1.client_info.ClientInfo = DEFAULT_CLIENT_INFO,
            ) -> None:
        """Instantiate the transport.

        Args:
            host (Optional[str]): The hostname to connect to.
            credentials (Optional[google.auth.credentials.Credentials]): The
                authorization credentials to attach to requests. These
                credentials identify the application to the service; if none
                are specified, the client will attempt to ascertain the
                credentials from the environment.
                This argument is ignored if ``channel`` is provided.
            credentials_file (Optional[str]): A file with credentials that can
                be loaded with :func:`google.auth.load_credentials_from_file`.
                This argument is ignored if ``channel`` is provided.
            scopes (Optional(Sequence[str])): A list of scopes. This argument is
                ignored if ``channel`` is provided.
            channel (Optional[grpc.Channel]): A ``Channel`` instance through
                which to make calls.
            api_mtls_endpoint (Optional[str]): Deprecated. The mutual TLS endpoint.
                If provided, it overrides the ``host`` argument and tries to create
                a mutual TLS channel with client SSL credentials from
                ``client_cert_source`` or applicatin default SSL credentials.
            client_cert_source (Optional[Callable[[], Tuple[bytes, bytes]]]):
                Deprecated. A callback to provide client SSL certificate bytes and
                private key bytes, both in PEM format. It is ignored if
                ``api_mtls_endpoint`` is None.
            ssl_channel_credentials (grpc.ChannelCredentials): SSL credentials
                for grpc channel. It is ignored if ``channel`` is provided.
            client_cert_source_for_mtls (Optional[Callable[[], Tuple[bytes, bytes]]]):
                A callback to provide client certificate bytes and private key bytes,
                both in PEM format. It is used to configure mutual TLS channel. It is
                ignored if ``channel`` or ``ssl_channel_credentials`` is provided.
            quota_project_id (Optional[str]): An optional project to use for billing
                and quota.
            client_info (google.api_core.gapic_v1.client_info.ClientInfo):
                The client info used to send a user-agent string along with
                API requests. If ``None``, then default info will be used.
                Generally, you only need to set this if you're developing
                your own client library.

        Raises:
          google.auth.exceptions.MutualTLSChannelError: If mutual TLS transport
              creation failed for any reason.
          google.api_core.exceptions.DuplicateCredentialArgs: If both ``credentials``
              and ``credentials_file`` are passed.
        """
        self._ssl_channel_credentials = ssl_channel_credentials

        if api_mtls_endpoint:
            warnings.warn("api_mtls_endpoint is deprecated", DeprecationWarning)
        if client_cert_source:
            warnings.warn("client_cert_source is deprecated", DeprecationWarning)

        if channel:
            # Sanity check: Ensure that channel and credentials are not both
            # provided.
            credentials = False

            # If a channel was explicitly provided, set it.
            self._grpc_channel = channel
            self._ssl_channel_credentials = None
        elif api_mtls_endpoint:
            host = api_mtls_endpoint if ":" in api_mtls_endpoint else api_mtls_endpoint + ":443"

            if credentials is None:
                credentials, _ = auth.default(scopes=self.AUTH_SCOPES, quota_project_id=quota_project_id)

            # Create SSL credentials with client_cert_source or application
            # default SSL credentials.
            if client_cert_source:
                cert, key = client_cert_source()
                ssl_credentials = grpc.ssl_channel_credentials(
                    certificate_chain=cert, private_key=key
                )
            else:
                ssl_credentials = SslCredentials().ssl_credentials

            # create a new channel. The provided one is ignored.
            self._grpc_channel = type(self).create_channel(
                host,
                credentials=credentials,
                credentials_file=credentials_file,
                ssl_credentials=ssl_credentials,
                scopes=scopes or self.AUTH_SCOPES,
                quota_project_id=quota_project_id,
                options=[
                    ("grpc.max_send_message_length", -1),
                    ("grpc.max_receive_message_length", -1),
                ],
            )
            self._ssl_channel_credentials = ssl_credentials
        else:
            host = host if ":" in host else host + ":443"

            if credentials is None:
                credentials, _ = auth.default(scopes=self.AUTH_SCOPES, quota_project_id=quota_project_id)

            if client_cert_source_for_mtls and not ssl_channel_credentials:
                cert, key = client_cert_source_for_mtls()
                self._ssl_channel_credentials = grpc.ssl_channel_credentials(
                    certificate_chain=cert, private_key=key
                )

            # create a new channel. The provided one is ignored.
            self._grpc_channel = type(self).create_channel(
                host,
                credentials=credentials,
                credentials_file=credentials_file,
                ssl_credentials=self._ssl_channel_credentials,
                scopes=scopes or self.AUTH_SCOPES,
                quota_project_id=quota_project_id,
                options=[
                    ("grpc.max_send_message_length", -1),
                    ("grpc.max_receive_message_length", -1),
                ],
            )

        self._stubs = {}  # type: Dict[str, Callable]

        # Run the base constructor.
        super().__init__(
            host=host,
            credentials=credentials,
            credentials_file=credentials_file,
            scopes=scopes or self.AUTH_SCOPES,
            quota_project_id=quota_project_id,
            client_info=client_info,
        )

    @classmethod
    def create_channel(cls,
                       host: str = 'osconfig.googleapis.com',
                       credentials: credentials.Credentials = None,
                       credentials_file: str = None,
                       scopes: Optional[Sequence[str]] = None,
                       quota_project_id: Optional[str] = None,
                       **kwargs) -> grpc.Channel:
        """Create and return a gRPC channel object.
        Args:
            address (Optional[str]): The host for the channel to use.
            credentials (Optional[~.Credentials]): The
                authorization credentials to attach to requests. These
                credentials identify this application to the service. If
                none are specified, the client will attempt to ascertain
                the credentials from the environment.
            credentials_file (Optional[str]): A file with credentials that can
                be loaded with :func:`google.auth.load_credentials_from_file`.
                This argument is mutually exclusive with credentials.
            scopes (Optional[Sequence[str]]): A optional list of scopes needed for this
                service. These are only used when credentials are not specified and
                are passed to :func:`google.auth.default`.
            quota_project_id (Optional[str]): An optional project to use for billing
                and quota.
            kwargs (Optional[dict]): Keyword arguments, which are passed to the
                channel creation.
        Returns:
            grpc.Channel: A gRPC channel object.

        Raises:
            google.api_core.exceptions.DuplicateCredentialArgs: If both ``credentials``
              and ``credentials_file`` are passed.
        """
        scopes = scopes or cls.AUTH_SCOPES
        return grpc_helpers.create_channel(
            host,
            credentials=credentials,
            credentials_file=credentials_file,
            scopes=scopes,
            quota_project_id=quota_project_id,
            **kwargs
        )

    @property
    def grpc_channel(self) -> grpc.Channel:
        """Return the channel designed to connect to this service.
        """
        return self._grpc_channel

    @property
    def execute_patch_job(self) -> Callable[
            [patch_jobs.ExecutePatchJobRequest],
            patch_jobs.PatchJob]:
        r"""Return a callable for the execute patch job method over gRPC.

        Patch VM instances by creating and running a patch
        job.

        Returns:
            Callable[[~.ExecutePatchJobRequest],
                    ~.PatchJob]:
                A function that, when called, will call the underlying RPC
                on the server.
        """
        # Generate a "stub function" on-the-fly which will actually make
        # the request.
        # gRPC handles serialization and deserialization, so we just need
        # to pass in the functions for each.
        if 'execute_patch_job' not in self._stubs:
            self._stubs['execute_patch_job'] = self.grpc_channel.unary_unary(
                '/google.cloud.osconfig.v1beta.OsConfigService/ExecutePatchJob',
                request_serializer=patch_jobs.ExecutePatchJobRequest.serialize,
                response_deserializer=patch_jobs.PatchJob.deserialize,
            )
        return self._stubs['execute_patch_job']

    @property
    def get_patch_job(self) -> Callable[
            [patch_jobs.GetPatchJobRequest],
            patch_jobs.PatchJob]:
        r"""Return a callable for the get patch job method over gRPC.

        Get the patch job. This can be used to track the
        progress of an ongoing patch job or review the details
        of completed jobs.

        Returns:
            Callable[[~.GetPatchJobRequest],
                    ~.PatchJob]:
                A function that, when called, will call the underlying RPC
                on the server.
        """
        # Generate a "stub function" on-the-fly which will actually make
        # the request.
        # gRPC handles serialization and deserialization, so we just need
        # to pass in the functions for each.
        if 'get_patch_job' not in self._stubs:
            self._stubs['get_patch_job'] = self.grpc_channel.unary_unary(
                '/google.cloud.osconfig.v1beta.OsConfigService/GetPatchJob',
                request_serializer=patch_jobs.GetPatchJobRequest.serialize,
                response_deserializer=patch_jobs.PatchJob.deserialize,
            )
        return self._stubs['get_patch_job']

    @property
    def cancel_patch_job(self) -> Callable[
            [patch_jobs.CancelPatchJobRequest],
            patch_jobs.PatchJob]:
        r"""Return a callable for the cancel patch job method over gRPC.

        Cancel a patch job. The patch job must be active.
        Canceled patch jobs cannot be restarted.

        Returns:
            Callable[[~.CancelPatchJobRequest],
                    ~.PatchJob]:
                A function that, when called, will call the underlying RPC
                on the server.
        """
        # Generate a "stub function" on-the-fly which will actually make
        # the request.
        # gRPC handles serialization and deserialization, so we just need
        # to pass in the functions for each.
        if 'cancel_patch_job' not in self._stubs:
            self._stubs['cancel_patch_job'] = self.grpc_channel.unary_unary(
                '/google.cloud.osconfig.v1beta.OsConfigService/CancelPatchJob',
                request_serializer=patch_jobs.CancelPatchJobRequest.serialize,
                response_deserializer=patch_jobs.PatchJob.deserialize,
            )
        return self._stubs['cancel_patch_job']

    @property
    def list_patch_jobs(self) -> Callable[
            [patch_jobs.ListPatchJobsRequest],
            patch_jobs.ListPatchJobsResponse]:
        r"""Return a callable for the list patch jobs method over gRPC.

        Get a list of patch jobs.

        Returns:
            Callable[[~.ListPatchJobsRequest],
                    ~.ListPatchJobsResponse]:
                A function that, when called, will call the underlying RPC
                on the server.
        """
        # Generate a "stub function" on-the-fly which will actually make
        # the request.
        # gRPC handles serialization and deserialization, so we just need
        # to pass in the functions for each.
        if 'list_patch_jobs' not in self._stubs:
            self._stubs['list_patch_jobs'] = self.grpc_channel.unary_unary(
                '/google.cloud.osconfig.v1beta.OsConfigService/ListPatchJobs',
                request_serializer=patch_jobs.ListPatchJobsRequest.serialize,
                response_deserializer=patch_jobs.ListPatchJobsResponse.deserialize,
            )
        return self._stubs['list_patch_jobs']

    @property
    def list_patch_job_instance_details(self) -> Callable[
            [patch_jobs.ListPatchJobInstanceDetailsRequest],
            patch_jobs.ListPatchJobInstanceDetailsResponse]:
        r"""Return a callable for the list patch job instance
        details method over gRPC.

        Get a list of instance details for a given patch job.

        Returns:
            Callable[[~.ListPatchJobInstanceDetailsRequest],
                    ~.ListPatchJobInstanceDetailsResponse]:
                A function that, when called, will call the underlying RPC
                on the server.
        """
        # Generate a "stub function" on-the-fly which will actually make
        # the request.
        # gRPC handles serialization and deserialization, so we just need
        # to pass in the functions for each.
        if 'list_patch_job_instance_details' not in self._stubs:
            self._stubs['list_patch_job_instance_details'] = self.grpc_channel.unary_unary(
                '/google.cloud.osconfig.v1beta.OsConfigService/ListPatchJobInstanceDetails',
                request_serializer=patch_jobs.ListPatchJobInstanceDetailsRequest.serialize,
                response_deserializer=patch_jobs.ListPatchJobInstanceDetailsResponse.deserialize,
            )
        return self._stubs['list_patch_job_instance_details']

    @property
    def create_patch_deployment(self) -> Callable[
            [patch_deployments.CreatePatchDeploymentRequest],
            patch_deployments.PatchDeployment]:
        r"""Return a callable for the create patch deployment method over gRPC.

        Create an OS Config patch deployment.

        Returns:
            Callable[[~.CreatePatchDeploymentRequest],
                    ~.PatchDeployment]:
                A function that, when called, will call the underlying RPC
                on the server.
        """
        # Generate a "stub function" on-the-fly which will actually make
        # the request.
        # gRPC handles serialization and deserialization, so we just need
        # to pass in the functions for each.
        if 'create_patch_deployment' not in self._stubs:
            self._stubs['create_patch_deployment'] = self.grpc_channel.unary_unary(
                '/google.cloud.osconfig.v1beta.OsConfigService/CreatePatchDeployment',
                request_serializer=patch_deployments.CreatePatchDeploymentRequest.serialize,
                response_deserializer=patch_deployments.PatchDeployment.deserialize,
            )
        return self._stubs['create_patch_deployment']

    @property
    def get_patch_deployment(self) -> Callable[
            [patch_deployments.GetPatchDeploymentRequest],
            patch_deployments.PatchDeployment]:
        r"""Return a callable for the get patch deployment method over gRPC.

        Get an OS Config patch deployment.

        Returns:
            Callable[[~.GetPatchDeploymentRequest],
                    ~.PatchDeployment]:
                A function that, when called, will call the underlying RPC
                on the server.
        """
        # Generate a "stub function" on-the-fly which will actually make
        # the request.
        # gRPC handles serialization and deserialization, so we just need
        # to pass in the functions for each.
        if 'get_patch_deployment' not in self._stubs:
            self._stubs['get_patch_deployment'] = self.grpc_channel.unary_unary(
                '/google.cloud.osconfig.v1beta.OsConfigService/GetPatchDeployment',
                request_serializer=patch_deployments.GetPatchDeploymentRequest.serialize,
                response_deserializer=patch_deployments.PatchDeployment.deserialize,
            )
        return self._stubs['get_patch_deployment']

    @property
    def list_patch_deployments(self) -> Callable[
            [patch_deployments.ListPatchDeploymentsRequest],
            patch_deployments.ListPatchDeploymentsResponse]:
        r"""Return a callable for the list patch deployments method over gRPC.

        Get a page of OS Config patch deployments.

        Returns:
            Callable[[~.ListPatchDeploymentsRequest],
                    ~.ListPatchDeploymentsResponse]:
                A function that, when called, will call the underlying RPC
                on the server.
        """
        # Generate a "stub function" on-the-fly which will actually make
        # the request.
        # gRPC handles serialization and deserialization, so we just need
        # to pass in the functions for each.
        if 'list_patch_deployments' not in self._stubs:
            self._stubs['list_patch_deployments'] = self.grpc_channel.unary_unary(
                '/google.cloud.osconfig.v1beta.OsConfigService/ListPatchDeployments',
                request_serializer=patch_deployments.ListPatchDeploymentsRequest.serialize,
                response_deserializer=patch_deployments.ListPatchDeploymentsResponse.deserialize,
            )
        return self._stubs['list_patch_deployments']

    @property
    def delete_patch_deployment(self) -> Callable[
            [patch_deployments.DeletePatchDeploymentRequest],
            empty.Empty]:
        r"""Return a callable for the delete patch deployment method over gRPC.

        Delete an OS Config patch deployment.

        Returns:
            Callable[[~.DeletePatchDeploymentRequest],
                    ~.Empty]:
                A function that, when called, will call the underlying RPC
                on the server.
        """
        # Generate a "stub function" on-the-fly which will actually make
        # the request.
        # gRPC handles serialization and deserialization, so we just need
        # to pass in the functions for each.
        if 'delete_patch_deployment' not in self._stubs:
            self._stubs['delete_patch_deployment'] = self.grpc_channel.unary_unary(
                '/google.cloud.osconfig.v1beta.OsConfigService/DeletePatchDeployment',
                request_serializer=patch_deployments.DeletePatchDeploymentRequest.serialize,
                response_deserializer=empty.Empty.FromString,
            )
        return self._stubs['delete_patch_deployment']

    @property
    def create_guest_policy(self) -> Callable[
            [guest_policies.CreateGuestPolicyRequest],
            guest_policies.GuestPolicy]:
        r"""Return a callable for the create guest policy method over gRPC.

        Create an OS Config guest policy.

        Returns:
            Callable[[~.CreateGuestPolicyRequest],
                    ~.GuestPolicy]:
                A function that, when called, will call the underlying RPC
                on the server.
        """
        # Generate a "stub function" on-the-fly which will actually make
        # the request.
        # gRPC handles serialization and deserialization, so we just need
        # to pass in the functions for each.
        if 'create_guest_policy' not in self._stubs:
            self._stubs['create_guest_policy'] = self.grpc_channel.unary_unary(
                '/google.cloud.osconfig.v1beta.OsConfigService/CreateGuestPolicy',
                request_serializer=guest_policies.CreateGuestPolicyRequest.serialize,
                response_deserializer=guest_policies.GuestPolicy.deserialize,
            )
        return self._stubs['create_guest_policy']

    @property
    def get_guest_policy(self) -> Callable[
            [guest_policies.GetGuestPolicyRequest],
            guest_policies.GuestPolicy]:
        r"""Return a callable for the get guest policy method over gRPC.

        Get an OS Config guest policy.

        Returns:
            Callable[[~.GetGuestPolicyRequest],
                    ~.GuestPolicy]:
                A function that, when called, will call the underlying RPC
                on the server.
        """
        # Generate a "stub function" on-the-fly which will actually make
        # the request.
        # gRPC handles serialization and deserialization, so we just need
        # to pass in the functions for each.
        if 'get_guest_policy' not in self._stubs:
            self._stubs['get_guest_policy'] = self.grpc_channel.unary_unary(
                '/google.cloud.osconfig.v1beta.OsConfigService/GetGuestPolicy',
                request_serializer=guest_policies.GetGuestPolicyRequest.serialize,
                response_deserializer=guest_policies.GuestPolicy.deserialize,
            )
        return self._stubs['get_guest_policy']

    @property
    def list_guest_policies(self) -> Callable[
            [guest_policies.ListGuestPoliciesRequest],
            guest_policies.ListGuestPoliciesResponse]:
        r"""Return a callable for the list guest policies method over gRPC.

        Get a page of OS Config guest policies.

        Returns:
            Callable[[~.ListGuestPoliciesRequest],
                    ~.ListGuestPoliciesResponse]:
                A function that, when called, will call the underlying RPC
                on the server.
        """
        # Generate a "stub function" on-the-fly which will actually make
        # the request.
        # gRPC handles serialization and deserialization, so we just need
        # to pass in the functions for each.
        if 'list_guest_policies' not in self._stubs:
            self._stubs['list_guest_policies'] = self.grpc_channel.unary_unary(
                '/google.cloud.osconfig.v1beta.OsConfigService/ListGuestPolicies',
                request_serializer=guest_policies.ListGuestPoliciesRequest.serialize,
                response_deserializer=guest_policies.ListGuestPoliciesResponse.deserialize,
            )
        return self._stubs['list_guest_policies']

    @property
    def update_guest_policy(self) -> Callable[
            [guest_policies.UpdateGuestPolicyRequest],
            guest_policies.GuestPolicy]:
        r"""Return a callable for the update guest policy method over gRPC.

        Update an OS Config guest policy.

        Returns:
            Callable[[~.UpdateGuestPolicyRequest],
                    ~.GuestPolicy]:
                A function that, when called, will call the underlying RPC
                on the server.
        """
        # Generate a "stub function" on-the-fly which will actually make
        # the request.
        # gRPC handles serialization and deserialization, so we just need
        # to pass in the functions for each.
        if 'update_guest_policy' not in self._stubs:
            self._stubs['update_guest_policy'] = self.grpc_channel.unary_unary(
                '/google.cloud.osconfig.v1beta.OsConfigService/UpdateGuestPolicy',
                request_serializer=guest_policies.UpdateGuestPolicyRequest.serialize,
                response_deserializer=guest_policies.GuestPolicy.deserialize,
            )
        return self._stubs['update_guest_policy']

    @property
    def delete_guest_policy(self) -> Callable[
            [guest_policies.DeleteGuestPolicyRequest],
            empty.Empty]:
        r"""Return a callable for the delete guest policy method over gRPC.

        Delete an OS Config guest policy.

        Returns:
            Callable[[~.DeleteGuestPolicyRequest],
                    ~.Empty]:
                A function that, when called, will call the underlying RPC
                on the server.
        """
        # Generate a "stub function" on-the-fly which will actually make
        # the request.
        # gRPC handles serialization and deserialization, so we just need
        # to pass in the functions for each.
        if 'delete_guest_policy' not in self._stubs:
            self._stubs['delete_guest_policy'] = self.grpc_channel.unary_unary(
                '/google.cloud.osconfig.v1beta.OsConfigService/DeleteGuestPolicy',
                request_serializer=guest_policies.DeleteGuestPolicyRequest.serialize,
                response_deserializer=empty.Empty.FromString,
            )
        return self._stubs['delete_guest_policy']

    @property
    def lookup_effective_guest_policy(self) -> Callable[
            [guest_policies.LookupEffectiveGuestPolicyRequest],
            guest_policies.EffectiveGuestPolicy]:
        r"""Return a callable for the lookup effective guest policy method over gRPC.

        Lookup the effective guest policy that applies to a
        VM instance. This lookup merges all policies that are
        assigned to the instance ancestry.

        Returns:
            Callable[[~.LookupEffectiveGuestPolicyRequest],
                    ~.EffectiveGuestPolicy]:
                A function that, when called, will call the underlying RPC
                on the server.
        """
        # Generate a "stub function" on-the-fly which will actually make
        # the request.
        # gRPC handles serialization and deserialization, so we just need
        # to pass in the functions for each.
        if 'lookup_effective_guest_policy' not in self._stubs:
            self._stubs['lookup_effective_guest_policy'] = self.grpc_channel.unary_unary(
                '/google.cloud.osconfig.v1beta.OsConfigService/LookupEffectiveGuestPolicy',
                request_serializer=guest_policies.LookupEffectiveGuestPolicyRequest.serialize,
                response_deserializer=guest_policies.EffectiveGuestPolicy.deserialize,
            )
        return self._stubs['lookup_effective_guest_policy']


__all__ = (
    'OsConfigServiceGrpcTransport',
)
