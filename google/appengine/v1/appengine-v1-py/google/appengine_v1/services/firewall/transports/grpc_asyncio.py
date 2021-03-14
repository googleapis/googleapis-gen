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
from typing import Awaitable, Callable, Dict, Optional, Sequence, Tuple

from google.api_core import gapic_v1                   # type: ignore
from google.api_core import grpc_helpers_async         # type: ignore
from google import auth                                # type: ignore
from google.auth import credentials                    # type: ignore
from google.auth.transport.grpc import SslCredentials  # type: ignore

import grpc                        # type: ignore
from grpc.experimental import aio  # type: ignore

from google.appengine_v1.types import appengine
from google.appengine_v1.types import firewall
from google.protobuf import empty_pb2 as empty  # type: ignore

from .base import FirewallTransport, DEFAULT_CLIENT_INFO
from .grpc import FirewallGrpcTransport


class FirewallGrpcAsyncIOTransport(FirewallTransport):
    """gRPC AsyncIO backend transport for Firewall.

    Firewall resources are used to define a collection of access
    control rules for an Application. Each rule is defined with a
    position which specifies the rule's order in the sequence of
    rules, an IP range to be matched against requests, and an action
    to take upon matching requests.
    Every request is evaluated against the Firewall rules in
    priority order. Processesing stops at the first rule which
    matches the request's IP address. A final rule always specifies
    an action that applies to all remaining IP addresses. The
    default final rule for a newly-created application will be set
    to "allow" if not otherwise specified by the user.

    This class defines the same methods as the primary client, so the
    primary client can load the underlying transport implementation
    and call it.

    It sends protocol buffers over the wire using gRPC (which is built on
    top of HTTP/2); the ``grpcio`` package must be installed.
    """

    _grpc_channel: aio.Channel
    _stubs: Dict[str, Callable] = {}

    @classmethod
    def create_channel(cls,
                       host: str = 'appengine.googleapis.com',
                       credentials: credentials.Credentials = None,
                       credentials_file: Optional[str] = None,
                       scopes: Optional[Sequence[str]] = None,
                       quota_project_id: Optional[str] = None,
                       **kwargs) -> aio.Channel:
        """Create and return a gRPC AsyncIO channel object.
        Args:
            address (Optional[str]): The host for the channel to use.
            credentials (Optional[~.Credentials]): The
                authorization credentials to attach to requests. These
                credentials identify this application to the service. If
                none are specified, the client will attempt to ascertain
                the credentials from the environment.
            credentials_file (Optional[str]): A file with credentials that can
                be loaded with :func:`google.auth.load_credentials_from_file`.
                This argument is ignored if ``channel`` is provided.
            scopes (Optional[Sequence[str]]): A optional list of scopes needed for this
                service. These are only used when credentials are not specified and
                are passed to :func:`google.auth.default`.
            quota_project_id (Optional[str]): An optional project to use for billing
                and quota.
            kwargs (Optional[dict]): Keyword arguments, which are passed to the
                channel creation.
        Returns:
            aio.Channel: A gRPC AsyncIO channel object.
        """
        scopes = scopes or cls.AUTH_SCOPES
        return grpc_helpers_async.create_channel(
            host,
            credentials=credentials,
            credentials_file=credentials_file,
            scopes=scopes,
            quota_project_id=quota_project_id,
            **kwargs
        )

    def __init__(self, *,
            host: str = 'appengine.googleapis.com',
            credentials: credentials.Credentials = None,
            credentials_file: Optional[str] = None,
            scopes: Optional[Sequence[str]] = None,
            channel: aio.Channel = None,
            api_mtls_endpoint: str = None,
            client_cert_source: Callable[[], Tuple[bytes, bytes]] = None,
            ssl_channel_credentials: grpc.ChannelCredentials = None,
            client_cert_source_for_mtls: Callable[[], Tuple[bytes, bytes]] = None,
            quota_project_id=None,
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
            scopes (Optional[Sequence[str]]): A optional list of scopes needed for this
                service. These are only used when credentials are not specified and
                are passed to :func:`google.auth.default`.
            channel (Optional[aio.Channel]): A ``Channel`` instance through
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
            google.auth.exceptions.MutualTlsChannelError: If mutual TLS transport
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

        # Run the base constructor.
        super().__init__(
            host=host,
            credentials=credentials,
            credentials_file=credentials_file,
            scopes=scopes or self.AUTH_SCOPES,
            quota_project_id=quota_project_id,
            client_info=client_info,
        )

        self._stubs = {}

    @property
    def grpc_channel(self) -> aio.Channel:
        """Create the channel designed to connect to this service.

        This property caches on the instance; repeated calls return
        the same channel.
        """
        # Return the channel from cache.
        return self._grpc_channel

    @property
    def list_ingress_rules(self) -> Callable[
            [appengine.ListIngressRulesRequest],
            Awaitable[appengine.ListIngressRulesResponse]]:
        r"""Return a callable for the list ingress rules method over gRPC.

        Lists the firewall rules of an application.

        Returns:
            Callable[[~.ListIngressRulesRequest],
                    Awaitable[~.ListIngressRulesResponse]]:
                A function that, when called, will call the underlying RPC
                on the server.
        """
        # Generate a "stub function" on-the-fly which will actually make
        # the request.
        # gRPC handles serialization and deserialization, so we just need
        # to pass in the functions for each.
        if 'list_ingress_rules' not in self._stubs:
            self._stubs['list_ingress_rules'] = self.grpc_channel.unary_unary(
                '/google.appengine.v1.Firewall/ListIngressRules',
                request_serializer=appengine.ListIngressRulesRequest.serialize,
                response_deserializer=appengine.ListIngressRulesResponse.deserialize,
            )
        return self._stubs['list_ingress_rules']

    @property
    def batch_update_ingress_rules(self) -> Callable[
            [appengine.BatchUpdateIngressRulesRequest],
            Awaitable[appengine.BatchUpdateIngressRulesResponse]]:
        r"""Return a callable for the batch update ingress rules method over gRPC.

        Replaces the entire firewall ruleset in one bulk operation. This
        overrides and replaces the rules of an existing firewall with
        the new rules.

        If the final rule does not match traffic with the '*' wildcard
        IP range, then an "allow all" rule is explicitly added to the
        end of the list.

        Returns:
            Callable[[~.BatchUpdateIngressRulesRequest],
                    Awaitable[~.BatchUpdateIngressRulesResponse]]:
                A function that, when called, will call the underlying RPC
                on the server.
        """
        # Generate a "stub function" on-the-fly which will actually make
        # the request.
        # gRPC handles serialization and deserialization, so we just need
        # to pass in the functions for each.
        if 'batch_update_ingress_rules' not in self._stubs:
            self._stubs['batch_update_ingress_rules'] = self.grpc_channel.unary_unary(
                '/google.appengine.v1.Firewall/BatchUpdateIngressRules',
                request_serializer=appengine.BatchUpdateIngressRulesRequest.serialize,
                response_deserializer=appengine.BatchUpdateIngressRulesResponse.deserialize,
            )
        return self._stubs['batch_update_ingress_rules']

    @property
    def create_ingress_rule(self) -> Callable[
            [appengine.CreateIngressRuleRequest],
            Awaitable[firewall.FirewallRule]]:
        r"""Return a callable for the create ingress rule method over gRPC.

        Creates a firewall rule for the application.

        Returns:
            Callable[[~.CreateIngressRuleRequest],
                    Awaitable[~.FirewallRule]]:
                A function that, when called, will call the underlying RPC
                on the server.
        """
        # Generate a "stub function" on-the-fly which will actually make
        # the request.
        # gRPC handles serialization and deserialization, so we just need
        # to pass in the functions for each.
        if 'create_ingress_rule' not in self._stubs:
            self._stubs['create_ingress_rule'] = self.grpc_channel.unary_unary(
                '/google.appengine.v1.Firewall/CreateIngressRule',
                request_serializer=appengine.CreateIngressRuleRequest.serialize,
                response_deserializer=firewall.FirewallRule.deserialize,
            )
        return self._stubs['create_ingress_rule']

    @property
    def get_ingress_rule(self) -> Callable[
            [appengine.GetIngressRuleRequest],
            Awaitable[firewall.FirewallRule]]:
        r"""Return a callable for the get ingress rule method over gRPC.

        Gets the specified firewall rule.

        Returns:
            Callable[[~.GetIngressRuleRequest],
                    Awaitable[~.FirewallRule]]:
                A function that, when called, will call the underlying RPC
                on the server.
        """
        # Generate a "stub function" on-the-fly which will actually make
        # the request.
        # gRPC handles serialization and deserialization, so we just need
        # to pass in the functions for each.
        if 'get_ingress_rule' not in self._stubs:
            self._stubs['get_ingress_rule'] = self.grpc_channel.unary_unary(
                '/google.appengine.v1.Firewall/GetIngressRule',
                request_serializer=appengine.GetIngressRuleRequest.serialize,
                response_deserializer=firewall.FirewallRule.deserialize,
            )
        return self._stubs['get_ingress_rule']

    @property
    def update_ingress_rule(self) -> Callable[
            [appengine.UpdateIngressRuleRequest],
            Awaitable[firewall.FirewallRule]]:
        r"""Return a callable for the update ingress rule method over gRPC.

        Updates the specified firewall rule.

        Returns:
            Callable[[~.UpdateIngressRuleRequest],
                    Awaitable[~.FirewallRule]]:
                A function that, when called, will call the underlying RPC
                on the server.
        """
        # Generate a "stub function" on-the-fly which will actually make
        # the request.
        # gRPC handles serialization and deserialization, so we just need
        # to pass in the functions for each.
        if 'update_ingress_rule' not in self._stubs:
            self._stubs['update_ingress_rule'] = self.grpc_channel.unary_unary(
                '/google.appengine.v1.Firewall/UpdateIngressRule',
                request_serializer=appengine.UpdateIngressRuleRequest.serialize,
                response_deserializer=firewall.FirewallRule.deserialize,
            )
        return self._stubs['update_ingress_rule']

    @property
    def delete_ingress_rule(self) -> Callable[
            [appengine.DeleteIngressRuleRequest],
            Awaitable[empty.Empty]]:
        r"""Return a callable for the delete ingress rule method over gRPC.

        Deletes the specified firewall rule.

        Returns:
            Callable[[~.DeleteIngressRuleRequest],
                    Awaitable[~.Empty]]:
                A function that, when called, will call the underlying RPC
                on the server.
        """
        # Generate a "stub function" on-the-fly which will actually make
        # the request.
        # gRPC handles serialization and deserialization, so we just need
        # to pass in the functions for each.
        if 'delete_ingress_rule' not in self._stubs:
            self._stubs['delete_ingress_rule'] = self.grpc_channel.unary_unary(
                '/google.appengine.v1.Firewall/DeleteIngressRule',
                request_serializer=appengine.DeleteIngressRuleRequest.serialize,
                response_deserializer=empty.Empty.FromString,
            )
        return self._stubs['delete_ingress_rule']


__all__ = (
    'FirewallGrpcAsyncIOTransport',
)
