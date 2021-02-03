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

from collections import OrderedDict
from distutils import util
import os
import re
from typing import Callable, Dict, Optional, Sequence, Tuple, Type, Union
import pkg_resources

from google.api_core import client_options as client_options_lib  # type: ignore
from google.api_core import exceptions                            # type: ignore
from google.api_core import gapic_v1                              # type: ignore
from google.api_core import retry as retries                      # type: ignore
from google.auth import credentials                               # type: ignore
from google.auth.transport import mtls                            # type: ignore
from google.auth.transport.grpc import SslCredentials             # type: ignore
from google.auth.exceptions import MutualTLSChannelError          # type: ignore
from google.oauth2 import service_account                         # type: ignore

from google.iam.admin_v1.services.iam import pagers
from google.iam.admin_v1.types import iam
from google.iam.v1 import iam_policy_pb2 as iam_policy  # type: ignore
from google.iam.v1 import policy_pb2 as policy  # type: ignore
from google.protobuf import timestamp_pb2 as timestamp  # type: ignore

from .transports.base import IAMTransport, DEFAULT_CLIENT_INFO
from .transports.grpc import IAMGrpcTransport
from .transports.grpc_asyncio import IAMGrpcAsyncIOTransport


class IAMClientMeta(type):
    """Metaclass for the IAM client.

    This provides class-level methods for building and retrieving
    support objects (e.g. transport) without polluting the client instance
    objects.
    """
    _transport_registry = OrderedDict()  # type: Dict[str, Type[IAMTransport]]
    _transport_registry['grpc'] = IAMGrpcTransport
    _transport_registry['grpc_asyncio'] = IAMGrpcAsyncIOTransport

    def get_transport_class(cls,
            label: str = None,
        ) -> Type[IAMTransport]:
        """Return an appropriate transport class.

        Args:
            label: The name of the desired transport. If none is
                provided, then the first transport in the registry is used.

        Returns:
            The transport class to use.
        """
        # If a specific transport is requested, return that one.
        if label:
            return cls._transport_registry[label]

        # No transport is requested; return the default (that is, the first one
        # in the dictionary).
        return next(iter(cls._transport_registry.values()))


class IAMClient(metaclass=IAMClientMeta):
    """Creates and manages service account objects.

    Service account is an account that belongs to your project instead
    of to an individual end user. It is used to authenticate calls to a
    Google API.

    To create a service account, specify the ``project_id`` and
    ``account_id`` for the account. The ``account_id`` is unique within
    the project, and used to generate the service account email address
    and a stable ``unique_id``.

    All other methods can identify accounts using the format
    ``projects/{PROJECT_ID}/serviceAccounts/{ACCOUNT}``. Using ``-`` as
    a wildcard for the ``PROJECT_ID`` will infer the project from the
    account. The ``ACCOUNT`` value can be the ``email`` address or the
    ``unique_id`` of the service account.
    """

    @staticmethod
    def _get_default_mtls_endpoint(api_endpoint):
        """Convert api endpoint to mTLS endpoint.
        Convert "*.sandbox.googleapis.com" and "*.googleapis.com" to
        "*.mtls.sandbox.googleapis.com" and "*.mtls.googleapis.com" respectively.
        Args:
            api_endpoint (Optional[str]): the api endpoint to convert.
        Returns:
            str: converted mTLS api endpoint.
        """
        if not api_endpoint:
            return api_endpoint

        mtls_endpoint_re = re.compile(
            r"(?P<name>[^.]+)(?P<mtls>\.mtls)?(?P<sandbox>\.sandbox)?(?P<googledomain>\.googleapis\.com)?"
        )

        m = mtls_endpoint_re.match(api_endpoint)
        name, mtls, sandbox, googledomain = m.groups()
        if mtls or not googledomain:
            return api_endpoint

        if sandbox:
            return api_endpoint.replace(
                "sandbox.googleapis.com", "mtls.sandbox.googleapis.com"
            )

        return api_endpoint.replace(".googleapis.com", ".mtls.googleapis.com")

    DEFAULT_ENDPOINT = 'iam.googleapis.com'
    DEFAULT_MTLS_ENDPOINT = _get_default_mtls_endpoint.__func__(  # type: ignore
        DEFAULT_ENDPOINT
    )

    @classmethod
    def from_service_account_info(cls, info: dict, *args, **kwargs):
        """Creates an instance of this client using the provided credentials info.

        Args:
            info (dict): The service account private key info.
            args: Additional arguments to pass to the constructor.
            kwargs: Additional arguments to pass to the constructor.

        Returns:
            IAMClient: The constructed client.
        """
        credentials = service_account.Credentials.from_service_account_info(info)
        kwargs["credentials"] = credentials
        return cls(*args, **kwargs)

    @classmethod
    def from_service_account_file(cls, filename: str, *args, **kwargs):
        """Creates an instance of this client using the provided credentials
        file.

        Args:
            filename (str): The path to the service account private key json
                file.
            args: Additional arguments to pass to the constructor.
            kwargs: Additional arguments to pass to the constructor.

        Returns:
            IAMClient: The constructed client.
        """
        credentials = service_account.Credentials.from_service_account_file(
            filename)
        kwargs['credentials'] = credentials
        return cls(*args, **kwargs)

    from_service_account_json = from_service_account_file

    @property
    def transport(self) -> IAMTransport:
        """Return the transport used by the client instance.

        Returns:
            IAMTransport: The transport used by the client instance.
        """
        return self._transport

    @staticmethod
    def key_path(project: str,service_account: str,key: str,) -> str:
        """Return a fully-qualified key string."""
        return "projects/{project}/serviceAccounts/{service_account}/keys/{key}".format(project=project, service_account=service_account, key=key, )

    @staticmethod
    def parse_key_path(path: str) -> Dict[str,str]:
        """Parse a key path into its component segments."""
        m = re.match(r"^projects/(?P<project>.+?)/serviceAccounts/(?P<service_account>.+?)/keys/(?P<key>.+?)$", path)
        return m.groupdict() if m else {}

    @staticmethod
    def service_account_path(project: str,service_account: str,) -> str:
        """Return a fully-qualified service_account string."""
        return "projects/{project}/serviceAccounts/{service_account}".format(project=project, service_account=service_account, )

    @staticmethod
    def parse_service_account_path(path: str) -> Dict[str,str]:
        """Parse a service_account path into its component segments."""
        m = re.match(r"^projects/(?P<project>.+?)/serviceAccounts/(?P<service_account>.+?)$", path)
        return m.groupdict() if m else {}

    @staticmethod
    def common_billing_account_path(billing_account: str, ) -> str:
        """Return a fully-qualified billing_account string."""
        return "billingAccounts/{billing_account}".format(billing_account=billing_account, )

    @staticmethod
    def parse_common_billing_account_path(path: str) -> Dict[str,str]:
        """Parse a billing_account path into its component segments."""
        m = re.match(r"^billingAccounts/(?P<billing_account>.+?)$", path)
        return m.groupdict() if m else {}

    @staticmethod
    def common_folder_path(folder: str, ) -> str:
        """Return a fully-qualified folder string."""
        return "folders/{folder}".format(folder=folder, )

    @staticmethod
    def parse_common_folder_path(path: str) -> Dict[str,str]:
        """Parse a folder path into its component segments."""
        m = re.match(r"^folders/(?P<folder>.+?)$", path)
        return m.groupdict() if m else {}

    @staticmethod
    def common_organization_path(organization: str, ) -> str:
        """Return a fully-qualified organization string."""
        return "organizations/{organization}".format(organization=organization, )

    @staticmethod
    def parse_common_organization_path(path: str) -> Dict[str,str]:
        """Parse a organization path into its component segments."""
        m = re.match(r"^organizations/(?P<organization>.+?)$", path)
        return m.groupdict() if m else {}

    @staticmethod
    def common_project_path(project: str, ) -> str:
        """Return a fully-qualified project string."""
        return "projects/{project}".format(project=project, )

    @staticmethod
    def parse_common_project_path(path: str) -> Dict[str,str]:
        """Parse a project path into its component segments."""
        m = re.match(r"^projects/(?P<project>.+?)$", path)
        return m.groupdict() if m else {}

    @staticmethod
    def common_location_path(project: str, location: str, ) -> str:
        """Return a fully-qualified location string."""
        return "projects/{project}/locations/{location}".format(project=project, location=location, )

    @staticmethod
    def parse_common_location_path(path: str) -> Dict[str,str]:
        """Parse a location path into its component segments."""
        m = re.match(r"^projects/(?P<project>.+?)/locations/(?P<location>.+?)$", path)
        return m.groupdict() if m else {}

    def __init__(self, *,
            credentials: Optional[credentials.Credentials] = None,
            transport: Union[str, IAMTransport, None] = None,
            client_options: Optional[client_options_lib.ClientOptions] = None,
            client_info: gapic_v1.client_info.ClientInfo = DEFAULT_CLIENT_INFO,
            ) -> None:
        """Instantiate the iam client.

        Args:
            credentials (Optional[google.auth.credentials.Credentials]): The
                authorization credentials to attach to requests. These
                credentials identify the application to the service; if none
                are specified, the client will attempt to ascertain the
                credentials from the environment.
            transport (Union[str, IAMTransport]): The
                transport to use. If set to None, a transport is chosen
                automatically.
            client_options (google.api_core.client_options.ClientOptions): Custom options for the
                client. It won't take effect if a ``transport`` instance is provided.
                (1) The ``api_endpoint`` property can be used to override the
                default endpoint provided by the client. GOOGLE_API_USE_MTLS_ENDPOINT
                environment variable can also be used to override the endpoint:
                "always" (always use the default mTLS endpoint), "never" (always
                use the default regular endpoint) and "auto" (auto switch to the
                default mTLS endpoint if client certificate is present, this is
                the default value). However, the ``api_endpoint`` property takes
                precedence if provided.
                (2) If GOOGLE_API_USE_CLIENT_CERTIFICATE environment variable
                is "true", then the ``client_cert_source`` property can be used
                to provide client certificate for mutual TLS transport. If
                not provided, the default SSL client certificate will be used if
                present. If GOOGLE_API_USE_CLIENT_CERTIFICATE is "false" or not
                set, no client certificate will be used.
            client_info (google.api_core.gapic_v1.client_info.ClientInfo):
                The client info used to send a user-agent string along with
                API requests. If ``None``, then default info will be used.
                Generally, you only need to set this if you're developing
                your own client library.

        Raises:
            google.auth.exceptions.MutualTLSChannelError: If mutual TLS transport
                creation failed for any reason.
        """
        if isinstance(client_options, dict):
            client_options = client_options_lib.from_dict(client_options)
        if client_options is None:
            client_options = client_options_lib.ClientOptions()

        # Create SSL credentials for mutual TLS if needed.
        use_client_cert = bool(util.strtobool(os.getenv("GOOGLE_API_USE_CLIENT_CERTIFICATE", "false")))

        client_cert_source_func = None
        is_mtls = False
        if use_client_cert:
            if client_options.client_cert_source:
                is_mtls = True
                client_cert_source_func = client_options.client_cert_source
            else:
                is_mtls = mtls.has_default_client_cert_source()
                client_cert_source_func = mtls.default_client_cert_source() if is_mtls else None

        # Figure out which api endpoint to use.
        if client_options.api_endpoint is not None:
            api_endpoint = client_options.api_endpoint
        else:
            use_mtls_env = os.getenv("GOOGLE_API_USE_MTLS_ENDPOINT", "auto")
            if use_mtls_env == "never":
                api_endpoint = self.DEFAULT_ENDPOINT
            elif use_mtls_env == "always":
                api_endpoint = self.DEFAULT_MTLS_ENDPOINT
            elif use_mtls_env == "auto":
                api_endpoint = self.DEFAULT_MTLS_ENDPOINT if is_mtls else self.DEFAULT_ENDPOINT
            else:
                raise MutualTLSChannelError(
                    "Unsupported GOOGLE_API_USE_MTLS_ENDPOINT value. Accepted values: never, auto, always"
                )

        # Save or instantiate the transport.
        # Ordinarily, we provide the transport, but allowing a custom transport
        # instance provides an extensibility point for unusual situations.
        if isinstance(transport, IAMTransport):
            # transport is a IAMTransport instance.
            if credentials or client_options.credentials_file:
                raise ValueError('When providing a transport instance, '
                                 'provide its credentials directly.')
            if client_options.scopes:
                raise ValueError(
                    "When providing a transport instance, "
                    "provide its scopes directly."
                )
            self._transport = transport
        else:
            Transport = type(self).get_transport_class(transport)
            self._transport = Transport(
                credentials=credentials,
                credentials_file=client_options.credentials_file,
                host=api_endpoint,
                scopes=client_options.scopes,
                client_cert_source_for_mtls=client_cert_source_func,
                quota_project_id=client_options.quota_project_id,
                client_info=client_info,
            )

    def list_service_accounts(self,
            request: iam.ListServiceAccountsRequest = None,
            *,
            name: str = None,
            retry: retries.Retry = gapic_v1.method.DEFAULT,
            timeout: float = None,
            metadata: Sequence[Tuple[str, str]] = (),
            ) -> pagers.ListServiceAccountsPager:
        r"""Lists [ServiceAccounts][google.iam.admin.v1.ServiceAccount] for
        a project.

        Args:
            request (google.iam.admin_v1.types.ListServiceAccountsRequest):
                The request object. The service account list request.
            name (str):
                Required. The resource name of the project associated
                with the service accounts, such as
                ``projects/my-project-123``.

                This corresponds to the ``name`` field
                on the ``request`` instance; if ``request`` is provided, this
                should not be set.

            retry (google.api_core.retry.Retry): Designation of what errors, if any,
                should be retried.
            timeout (float): The timeout for this request.
            metadata (Sequence[Tuple[str, str]]): Strings which should be
                sent along with the request as metadata.

        Returns:
            google.iam.admin_v1.services.iam.pagers.ListServiceAccountsPager:
                The service account list response.
                Iterating over this object will yield
                results and resolve additional pages
                automatically.

        """
        # Create or coerce a protobuf request object.
        # Sanity check: If we got a request object, we should *not* have
        # gotten any keyword arguments that map to the request.
        has_flattened_params = any([name])
        if request is not None and has_flattened_params:
            raise ValueError('If the `request` argument is set, then none of '
                             'the individual field arguments should be set.')

        # Minor optimization to avoid making a copy if the user passes
        # in a iam.ListServiceAccountsRequest.
        # There's no risk of modifying the input as we've already verified
        # there are no flattened fields.
        if not isinstance(request, iam.ListServiceAccountsRequest):
            request = iam.ListServiceAccountsRequest(request)

            # If we have keyword arguments corresponding to fields on the
            # request, apply these.

            if name is not None:
                request.name = name

        # Wrap the RPC method; this adds retry and timeout information,
        # and friendly error handling.
        rpc = self._transport._wrapped_methods[self._transport.list_service_accounts]

        # Certain fields should be provided within the metadata header;
        # add these here.
        metadata = tuple(metadata) + (
            gapic_v1.routing_header.to_grpc_metadata((
                ('name', request.name),
            )),
        )

        # Send the request.
        response = rpc(
            request,
            retry=retry,
            timeout=timeout,
            metadata=metadata,
        )

        # This method is paged; wrap the response in a pager, which provides
        # an `__iter__` convenience method.
        response = pagers.ListServiceAccountsPager(
            method=rpc,
            request=request,
            response=response,
            metadata=metadata,
        )

        # Done; return the response.
        return response

    def get_service_account(self,
            request: iam.GetServiceAccountRequest = None,
            *,
            name: str = None,
            retry: retries.Retry = gapic_v1.method.DEFAULT,
            timeout: float = None,
            metadata: Sequence[Tuple[str, str]] = (),
            ) -> iam.ServiceAccount:
        r"""Gets a [ServiceAccount][google.iam.admin.v1.ServiceAccount].

        Args:
            request (google.iam.admin_v1.types.GetServiceAccountRequest):
                The request object. The service account get request.
            name (str):
                Required. The resource name of the service account in
                the following format:
                ``projects/{PROJECT_ID}/serviceAccounts/{ACCOUNT}``.
                Using ``-`` as a wildcard for the ``PROJECT_ID`` will
                infer the project from the account. The ``ACCOUNT``
                value can be the ``email`` address or the ``unique_id``
                of the service account.

                This corresponds to the ``name`` field
                on the ``request`` instance; if ``request`` is provided, this
                should not be set.

            retry (google.api_core.retry.Retry): Designation of what errors, if any,
                should be retried.
            timeout (float): The timeout for this request.
            metadata (Sequence[Tuple[str, str]]): Strings which should be
                sent along with the request as metadata.

        Returns:
            google.iam.admin_v1.types.ServiceAccount:
                A service account in the Identity and Access Management
                API.

                   To create a service account, specify the project_id
                   and the account_id for the account. The account_id is
                   unique within the project, and is used to generate
                   the service account email address and a stable
                   unique_id.

                   If the account already exists, the account's resource
                   name is returned in the format of
                   projects/{PROJECT_ID}/serviceAccounts/{ACCOUNT}. The
                   caller can use the name in other methods to access
                   the account.

                   All other methods can identify the service account
                   using the format
                   projects/{PROJECT_ID}/serviceAccounts/{ACCOUNT}.
                   Using - as a wildcard for the PROJECT_ID will infer
                   the project from the account. The ACCOUNT value can
                   be the email address or the unique_id of the service
                   account.

        """
        # Create or coerce a protobuf request object.
        # Sanity check: If we got a request object, we should *not* have
        # gotten any keyword arguments that map to the request.
        has_flattened_params = any([name])
        if request is not None and has_flattened_params:
            raise ValueError('If the `request` argument is set, then none of '
                             'the individual field arguments should be set.')

        # Minor optimization to avoid making a copy if the user passes
        # in a iam.GetServiceAccountRequest.
        # There's no risk of modifying the input as we've already verified
        # there are no flattened fields.
        if not isinstance(request, iam.GetServiceAccountRequest):
            request = iam.GetServiceAccountRequest(request)

            # If we have keyword arguments corresponding to fields on the
            # request, apply these.

            if name is not None:
                request.name = name

        # Wrap the RPC method; this adds retry and timeout information,
        # and friendly error handling.
        rpc = self._transport._wrapped_methods[self._transport.get_service_account]

        # Certain fields should be provided within the metadata header;
        # add these here.
        metadata = tuple(metadata) + (
            gapic_v1.routing_header.to_grpc_metadata((
                ('name', request.name),
            )),
        )

        # Send the request.
        response = rpc(
            request,
            retry=retry,
            timeout=timeout,
            metadata=metadata,
        )

        # Done; return the response.
        return response

    def create_service_account(self,
            request: iam.CreateServiceAccountRequest = None,
            *,
            name: str = None,
            account_id: str = None,
            service_account: iam.ServiceAccount = None,
            retry: retries.Retry = gapic_v1.method.DEFAULT,
            timeout: float = None,
            metadata: Sequence[Tuple[str, str]] = (),
            ) -> iam.ServiceAccount:
        r"""Creates a [ServiceAccount][google.iam.admin.v1.ServiceAccount]
        and returns it.

        Args:
            request (google.iam.admin_v1.types.CreateServiceAccountRequest):
                The request object. The service account create request.
            name (str):
                Required. The resource name of the project associated
                with the service accounts, such as
                ``projects/my-project-123``.

                This corresponds to the ``name`` field
                on the ``request`` instance; if ``request`` is provided, this
                should not be set.
            account_id (str):
                Required. The account id that is used to generate the
                service account email address and a stable unique id. It
                is unique within a project, must be 6-30 characters
                long, and match the regular expression
                ``[a-z]([-a-z0-9]*[a-z0-9])`` to comply with RFC1035.

                This corresponds to the ``account_id`` field
                on the ``request`` instance; if ``request`` is provided, this
                should not be set.
            service_account (google.iam.admin_v1.types.ServiceAccount):
                The [ServiceAccount][google.iam.admin.v1.ServiceAccount]
                resource to create. Currently, only the following values
                are user assignable: ``display_name`` and
                ``description``.

                This corresponds to the ``service_account`` field
                on the ``request`` instance; if ``request`` is provided, this
                should not be set.

            retry (google.api_core.retry.Retry): Designation of what errors, if any,
                should be retried.
            timeout (float): The timeout for this request.
            metadata (Sequence[Tuple[str, str]]): Strings which should be
                sent along with the request as metadata.

        Returns:
            google.iam.admin_v1.types.ServiceAccount:
                A service account in the Identity and Access Management
                API.

                   To create a service account, specify the project_id
                   and the account_id for the account. The account_id is
                   unique within the project, and is used to generate
                   the service account email address and a stable
                   unique_id.

                   If the account already exists, the account's resource
                   name is returned in the format of
                   projects/{PROJECT_ID}/serviceAccounts/{ACCOUNT}. The
                   caller can use the name in other methods to access
                   the account.

                   All other methods can identify the service account
                   using the format
                   projects/{PROJECT_ID}/serviceAccounts/{ACCOUNT}.
                   Using - as a wildcard for the PROJECT_ID will infer
                   the project from the account. The ACCOUNT value can
                   be the email address or the unique_id of the service
                   account.

        """
        # Create or coerce a protobuf request object.
        # Sanity check: If we got a request object, we should *not* have
        # gotten any keyword arguments that map to the request.
        has_flattened_params = any([name, account_id, service_account])
        if request is not None and has_flattened_params:
            raise ValueError('If the `request` argument is set, then none of '
                             'the individual field arguments should be set.')

        # Minor optimization to avoid making a copy if the user passes
        # in a iam.CreateServiceAccountRequest.
        # There's no risk of modifying the input as we've already verified
        # there are no flattened fields.
        if not isinstance(request, iam.CreateServiceAccountRequest):
            request = iam.CreateServiceAccountRequest(request)

            # If we have keyword arguments corresponding to fields on the
            # request, apply these.

            if name is not None:
                request.name = name
            if account_id is not None:
                request.account_id = account_id
            if service_account is not None:
                request.service_account = service_account

        # Wrap the RPC method; this adds retry and timeout information,
        # and friendly error handling.
        rpc = self._transport._wrapped_methods[self._transport.create_service_account]

        # Certain fields should be provided within the metadata header;
        # add these here.
        metadata = tuple(metadata) + (
            gapic_v1.routing_header.to_grpc_metadata((
                ('name', request.name),
            )),
        )

        # Send the request.
        response = rpc(
            request,
            retry=retry,
            timeout=timeout,
            metadata=metadata,
        )

        # Done; return the response.
        return response

    def update_service_account(self,
            request: iam.ServiceAccount = None,
            *,
            retry: retries.Retry = gapic_v1.method.DEFAULT,
            timeout: float = None,
            metadata: Sequence[Tuple[str, str]] = (),
            ) -> iam.ServiceAccount:
        r"""Updates a [ServiceAccount][google.iam.admin.v1.ServiceAccount].

        Currently, only the following fields are updatable:
        ``display_name`` and ``description``.

        Args:
            request (google.iam.admin_v1.types.ServiceAccount):
                The request object. A service account in the Identity
                and Access Management API.
                To create a service account, specify the `project_id`
                and the `account_id` for the account.  The `account_id`
                is unique within the project, and is used to generate
                the service account email address and a stable
                `unique_id`.

                If the account already exists, the account's resource
                name is returned in the format of
                projects/{PROJECT_ID}/serviceAccounts/{ACCOUNT}. The
                caller can use the name in other methods to access the
                account.
                All other methods can identify the service account using
                the format
                `projects/{PROJECT_ID}/serviceAccounts/{ACCOUNT}`.
                Using `-` as a wildcard for the `PROJECT_ID` will infer
                the project from the account. The `ACCOUNT` value can be
                the `email` address or the `unique_id` of the service
                account.

            retry (google.api_core.retry.Retry): Designation of what errors, if any,
                should be retried.
            timeout (float): The timeout for this request.
            metadata (Sequence[Tuple[str, str]]): Strings which should be
                sent along with the request as metadata.

        Returns:
            google.iam.admin_v1.types.ServiceAccount:
                A service account in the Identity and Access Management
                API.

                   To create a service account, specify the project_id
                   and the account_id for the account. The account_id is
                   unique within the project, and is used to generate
                   the service account email address and a stable
                   unique_id.

                   If the account already exists, the account's resource
                   name is returned in the format of
                   projects/{PROJECT_ID}/serviceAccounts/{ACCOUNT}. The
                   caller can use the name in other methods to access
                   the account.

                   All other methods can identify the service account
                   using the format
                   projects/{PROJECT_ID}/serviceAccounts/{ACCOUNT}.
                   Using - as a wildcard for the PROJECT_ID will infer
                   the project from the account. The ACCOUNT value can
                   be the email address or the unique_id of the service
                   account.

        """
        # Create or coerce a protobuf request object.

        # Minor optimization to avoid making a copy if the user passes
        # in a iam.ServiceAccount.
        # There's no risk of modifying the input as we've already verified
        # there are no flattened fields.
        if not isinstance(request, iam.ServiceAccount):
            request = iam.ServiceAccount(request)

        # Wrap the RPC method; this adds retry and timeout information,
        # and friendly error handling.
        rpc = self._transport._wrapped_methods[self._transport.update_service_account]

        # Certain fields should be provided within the metadata header;
        # add these here.
        metadata = tuple(metadata) + (
            gapic_v1.routing_header.to_grpc_metadata((
                ('name', request.name),
            )),
        )

        # Send the request.
        response = rpc(
            request,
            retry=retry,
            timeout=timeout,
            metadata=metadata,
        )

        # Done; return the response.
        return response

    def delete_service_account(self,
            request: iam.DeleteServiceAccountRequest = None,
            *,
            name: str = None,
            retry: retries.Retry = gapic_v1.method.DEFAULT,
            timeout: float = None,
            metadata: Sequence[Tuple[str, str]] = (),
            ) -> None:
        r"""Deletes a [ServiceAccount][google.iam.admin.v1.ServiceAccount].

        Args:
            request (google.iam.admin_v1.types.DeleteServiceAccountRequest):
                The request object. The service account delete request.
            name (str):
                Required. The resource name of the service account in
                the following format:
                ``projects/{PROJECT_ID}/serviceAccounts/{ACCOUNT}``.
                Using ``-`` as a wildcard for the ``PROJECT_ID`` will
                infer the project from the account. The ``ACCOUNT``
                value can be the ``email`` address or the ``unique_id``
                of the service account.

                This corresponds to the ``name`` field
                on the ``request`` instance; if ``request`` is provided, this
                should not be set.

            retry (google.api_core.retry.Retry): Designation of what errors, if any,
                should be retried.
            timeout (float): The timeout for this request.
            metadata (Sequence[Tuple[str, str]]): Strings which should be
                sent along with the request as metadata.
        """
        # Create or coerce a protobuf request object.
        # Sanity check: If we got a request object, we should *not* have
        # gotten any keyword arguments that map to the request.
        has_flattened_params = any([name])
        if request is not None and has_flattened_params:
            raise ValueError('If the `request` argument is set, then none of '
                             'the individual field arguments should be set.')

        # Minor optimization to avoid making a copy if the user passes
        # in a iam.DeleteServiceAccountRequest.
        # There's no risk of modifying the input as we've already verified
        # there are no flattened fields.
        if not isinstance(request, iam.DeleteServiceAccountRequest):
            request = iam.DeleteServiceAccountRequest(request)

            # If we have keyword arguments corresponding to fields on the
            # request, apply these.

            if name is not None:
                request.name = name

        # Wrap the RPC method; this adds retry and timeout information,
        # and friendly error handling.
        rpc = self._transport._wrapped_methods[self._transport.delete_service_account]

        # Certain fields should be provided within the metadata header;
        # add these here.
        metadata = tuple(metadata) + (
            gapic_v1.routing_header.to_grpc_metadata((
                ('name', request.name),
            )),
        )

        # Send the request.
        rpc(
            request,
            retry=retry,
            timeout=timeout,
            metadata=metadata,
        )

    def list_service_account_keys(self,
            request: iam.ListServiceAccountKeysRequest = None,
            *,
            name: str = None,
            key_types: Sequence[iam.ListServiceAccountKeysRequest.KeyType] = None,
            retry: retries.Retry = gapic_v1.method.DEFAULT,
            timeout: float = None,
            metadata: Sequence[Tuple[str, str]] = (),
            ) -> iam.ListServiceAccountKeysResponse:
        r"""Lists
        [ServiceAccountKeys][google.iam.admin.v1.ServiceAccountKey].

        Args:
            request (google.iam.admin_v1.types.ListServiceAccountKeysRequest):
                The request object. The service account keys list
                request.
            name (str):
                Required. The resource name of the service account in
                the following format:
                ``projects/{PROJECT_ID}/serviceAccounts/{ACCOUNT}``.

                Using ``-`` as a wildcard for the ``PROJECT_ID``, will
                infer the project from the account. The ``ACCOUNT``
                value can be the ``email`` address or the ``unique_id``
                of the service account.

                This corresponds to the ``name`` field
                on the ``request`` instance; if ``request`` is provided, this
                should not be set.
            key_types (Sequence[google.iam.admin_v1.types.ListServiceAccountKeysRequest.KeyType]):
                Filters the types of keys the user
                wants to include in the list response.
                Duplicate key types are not allowed. If
                no key type is provided, all keys are
                returned.

                This corresponds to the ``key_types`` field
                on the ``request`` instance; if ``request`` is provided, this
                should not be set.

            retry (google.api_core.retry.Retry): Designation of what errors, if any,
                should be retried.
            timeout (float): The timeout for this request.
            metadata (Sequence[Tuple[str, str]]): Strings which should be
                sent along with the request as metadata.

        Returns:
            google.iam.admin_v1.types.ListServiceAccountKeysResponse:
                The service account keys list
                response.

        """
        # Create or coerce a protobuf request object.
        # Sanity check: If we got a request object, we should *not* have
        # gotten any keyword arguments that map to the request.
        has_flattened_params = any([name, key_types])
        if request is not None and has_flattened_params:
            raise ValueError('If the `request` argument is set, then none of '
                             'the individual field arguments should be set.')

        # Minor optimization to avoid making a copy if the user passes
        # in a iam.ListServiceAccountKeysRequest.
        # There's no risk of modifying the input as we've already verified
        # there are no flattened fields.
        if not isinstance(request, iam.ListServiceAccountKeysRequest):
            request = iam.ListServiceAccountKeysRequest(request)

            # If we have keyword arguments corresponding to fields on the
            # request, apply these.

            if name is not None:
                request.name = name

            if key_types:
                request.key_types.extend(key_types)

        # Wrap the RPC method; this adds retry and timeout information,
        # and friendly error handling.
        rpc = self._transport._wrapped_methods[self._transport.list_service_account_keys]

        # Certain fields should be provided within the metadata header;
        # add these here.
        metadata = tuple(metadata) + (
            gapic_v1.routing_header.to_grpc_metadata((
                ('name', request.name),
            )),
        )

        # Send the request.
        response = rpc(
            request,
            retry=retry,
            timeout=timeout,
            metadata=metadata,
        )

        # Done; return the response.
        return response

    def get_service_account_key(self,
            request: iam.GetServiceAccountKeyRequest = None,
            *,
            name: str = None,
            public_key_type: iam.ServiceAccountPublicKeyType = None,
            retry: retries.Retry = gapic_v1.method.DEFAULT,
            timeout: float = None,
            metadata: Sequence[Tuple[str, str]] = (),
            ) -> iam.ServiceAccountKey:
        r"""Gets the
        [ServiceAccountKey][google.iam.admin.v1.ServiceAccountKey] by
        key id.

        Args:
            request (google.iam.admin_v1.types.GetServiceAccountKeyRequest):
                The request object. The service account key get by id
                request.
            name (str):
                Required. The resource name of the service account key
                in the following format:
                ``projects/{PROJECT_ID}/serviceAccounts/{ACCOUNT}/keys/{key}``.

                Using ``-`` as a wildcard for the ``PROJECT_ID`` will
                infer the project from the account. The ``ACCOUNT``
                value can be the ``email`` address or the ``unique_id``
                of the service account.

                This corresponds to the ``name`` field
                on the ``request`` instance; if ``request`` is provided, this
                should not be set.
            public_key_type (google.iam.admin_v1.types.ServiceAccountPublicKeyType):
                The output format of the public key requested. X509_PEM
                is the default output format.

                This corresponds to the ``public_key_type`` field
                on the ``request`` instance; if ``request`` is provided, this
                should not be set.

            retry (google.api_core.retry.Retry): Designation of what errors, if any,
                should be retried.
            timeout (float): The timeout for this request.
            metadata (Sequence[Tuple[str, str]]): Strings which should be
                sent along with the request as metadata.

        Returns:
            google.iam.admin_v1.types.ServiceAccountKey:
                Represents a service account key.
                A service account has two sets of key-
                pairs: user-managed, and system-managed.

                User-managed key-pairs can be created
                and deleted by users.  Users are
                responsible for rotating these keys
                periodically to ensure security of their
                service accounts.  Users retain the
                private key of these key-pairs, and
                Google retains ONLY the public key.

                System-managed keys are automatically
                rotated by Google, and are used for
                signing for a maximum of two weeks. The
                rotation process is probabilistic, and
                usage of the new key will gradually ramp
                up and down over the key's lifetime. We
                recommend caching the public key set for
                a service account for no more than 24
                hours to ensure you have access to the
                latest keys.
                Public keys for all service accounts are
                also published at the OAuth2 Service
                Account API.

        """
        # Create or coerce a protobuf request object.
        # Sanity check: If we got a request object, we should *not* have
        # gotten any keyword arguments that map to the request.
        has_flattened_params = any([name, public_key_type])
        if request is not None and has_flattened_params:
            raise ValueError('If the `request` argument is set, then none of '
                             'the individual field arguments should be set.')

        # Minor optimization to avoid making a copy if the user passes
        # in a iam.GetServiceAccountKeyRequest.
        # There's no risk of modifying the input as we've already verified
        # there are no flattened fields.
        if not isinstance(request, iam.GetServiceAccountKeyRequest):
            request = iam.GetServiceAccountKeyRequest(request)

            # If we have keyword arguments corresponding to fields on the
            # request, apply these.

            if name is not None:
                request.name = name
            if public_key_type is not None:
                request.public_key_type = public_key_type

        # Wrap the RPC method; this adds retry and timeout information,
        # and friendly error handling.
        rpc = self._transport._wrapped_methods[self._transport.get_service_account_key]

        # Certain fields should be provided within the metadata header;
        # add these here.
        metadata = tuple(metadata) + (
            gapic_v1.routing_header.to_grpc_metadata((
                ('name', request.name),
            )),
        )

        # Send the request.
        response = rpc(
            request,
            retry=retry,
            timeout=timeout,
            metadata=metadata,
        )

        # Done; return the response.
        return response

    def create_service_account_key(self,
            request: iam.CreateServiceAccountKeyRequest = None,
            *,
            name: str = None,
            private_key_type: iam.ServiceAccountPrivateKeyType = None,
            key_algorithm: iam.ServiceAccountKeyAlgorithm = None,
            retry: retries.Retry = gapic_v1.method.DEFAULT,
            timeout: float = None,
            metadata: Sequence[Tuple[str, str]] = (),
            ) -> iam.ServiceAccountKey:
        r"""Creates a
        [ServiceAccountKey][google.iam.admin.v1.ServiceAccountKey] and
        returns it.

        Args:
            request (google.iam.admin_v1.types.CreateServiceAccountKeyRequest):
                The request object. The service account key create
                request.
            name (str):
                Required. The resource name of the service account in
                the following format:
                ``projects/{PROJECT_ID}/serviceAccounts/{ACCOUNT}``.
                Using ``-`` as a wildcard for the ``PROJECT_ID`` will
                infer the project from the account. The ``ACCOUNT``
                value can be the ``email`` address or the ``unique_id``
                of the service account.

                This corresponds to the ``name`` field
                on the ``request`` instance; if ``request`` is provided, this
                should not be set.
            private_key_type (google.iam.admin_v1.types.ServiceAccountPrivateKeyType):
                The output format of the private key. The default value
                is ``TYPE_GOOGLE_CREDENTIALS_FILE``, which is the Google
                Credentials File format.

                This corresponds to the ``private_key_type`` field
                on the ``request`` instance; if ``request`` is provided, this
                should not be set.
            key_algorithm (google.iam.admin_v1.types.ServiceAccountKeyAlgorithm):
                Which type of key and algorithm to
                use for the key. The default is
                currently a 2K RSA key.  However this
                may change in the future.

                This corresponds to the ``key_algorithm`` field
                on the ``request`` instance; if ``request`` is provided, this
                should not be set.

            retry (google.api_core.retry.Retry): Designation of what errors, if any,
                should be retried.
            timeout (float): The timeout for this request.
            metadata (Sequence[Tuple[str, str]]): Strings which should be
                sent along with the request as metadata.

        Returns:
            google.iam.admin_v1.types.ServiceAccountKey:
                Represents a service account key.
                A service account has two sets of key-
                pairs: user-managed, and system-managed.

                User-managed key-pairs can be created
                and deleted by users.  Users are
                responsible for rotating these keys
                periodically to ensure security of their
                service accounts.  Users retain the
                private key of these key-pairs, and
                Google retains ONLY the public key.

                System-managed keys are automatically
                rotated by Google, and are used for
                signing for a maximum of two weeks. The
                rotation process is probabilistic, and
                usage of the new key will gradually ramp
                up and down over the key's lifetime. We
                recommend caching the public key set for
                a service account for no more than 24
                hours to ensure you have access to the
                latest keys.
                Public keys for all service accounts are
                also published at the OAuth2 Service
                Account API.

        """
        # Create or coerce a protobuf request object.
        # Sanity check: If we got a request object, we should *not* have
        # gotten any keyword arguments that map to the request.
        has_flattened_params = any([name, private_key_type, key_algorithm])
        if request is not None and has_flattened_params:
            raise ValueError('If the `request` argument is set, then none of '
                             'the individual field arguments should be set.')

        # Minor optimization to avoid making a copy if the user passes
        # in a iam.CreateServiceAccountKeyRequest.
        # There's no risk of modifying the input as we've already verified
        # there are no flattened fields.
        if not isinstance(request, iam.CreateServiceAccountKeyRequest):
            request = iam.CreateServiceAccountKeyRequest(request)

            # If we have keyword arguments corresponding to fields on the
            # request, apply these.

            if name is not None:
                request.name = name
            if private_key_type is not None:
                request.private_key_type = private_key_type
            if key_algorithm is not None:
                request.key_algorithm = key_algorithm

        # Wrap the RPC method; this adds retry and timeout information,
        # and friendly error handling.
        rpc = self._transport._wrapped_methods[self._transport.create_service_account_key]

        # Certain fields should be provided within the metadata header;
        # add these here.
        metadata = tuple(metadata) + (
            gapic_v1.routing_header.to_grpc_metadata((
                ('name', request.name),
            )),
        )

        # Send the request.
        response = rpc(
            request,
            retry=retry,
            timeout=timeout,
            metadata=metadata,
        )

        # Done; return the response.
        return response

    def delete_service_account_key(self,
            request: iam.DeleteServiceAccountKeyRequest = None,
            *,
            name: str = None,
            retry: retries.Retry = gapic_v1.method.DEFAULT,
            timeout: float = None,
            metadata: Sequence[Tuple[str, str]] = (),
            ) -> None:
        r"""Deletes a
        [ServiceAccountKey][google.iam.admin.v1.ServiceAccountKey].

        Args:
            request (google.iam.admin_v1.types.DeleteServiceAccountKeyRequest):
                The request object. The service account key delete
                request.
            name (str):
                Required. The resource name of the service account key
                in the following format:
                ``projects/{PROJECT_ID}/serviceAccounts/{ACCOUNT}/keys/{key}``.
                Using ``-`` as a wildcard for the ``PROJECT_ID`` will
                infer the project from the account. The ``ACCOUNT``
                value can be the ``email`` address or the ``unique_id``
                of the service account.

                This corresponds to the ``name`` field
                on the ``request`` instance; if ``request`` is provided, this
                should not be set.

            retry (google.api_core.retry.Retry): Designation of what errors, if any,
                should be retried.
            timeout (float): The timeout for this request.
            metadata (Sequence[Tuple[str, str]]): Strings which should be
                sent along with the request as metadata.
        """
        # Create or coerce a protobuf request object.
        # Sanity check: If we got a request object, we should *not* have
        # gotten any keyword arguments that map to the request.
        has_flattened_params = any([name])
        if request is not None and has_flattened_params:
            raise ValueError('If the `request` argument is set, then none of '
                             'the individual field arguments should be set.')

        # Minor optimization to avoid making a copy if the user passes
        # in a iam.DeleteServiceAccountKeyRequest.
        # There's no risk of modifying the input as we've already verified
        # there are no flattened fields.
        if not isinstance(request, iam.DeleteServiceAccountKeyRequest):
            request = iam.DeleteServiceAccountKeyRequest(request)

            # If we have keyword arguments corresponding to fields on the
            # request, apply these.

            if name is not None:
                request.name = name

        # Wrap the RPC method; this adds retry and timeout information,
        # and friendly error handling.
        rpc = self._transport._wrapped_methods[self._transport.delete_service_account_key]

        # Certain fields should be provided within the metadata header;
        # add these here.
        metadata = tuple(metadata) + (
            gapic_v1.routing_header.to_grpc_metadata((
                ('name', request.name),
            )),
        )

        # Send the request.
        rpc(
            request,
            retry=retry,
            timeout=timeout,
            metadata=metadata,
        )

    def sign_blob(self,
            request: iam.SignBlobRequest = None,
            *,
            name: str = None,
            bytes_to_sign: bytes = None,
            retry: retries.Retry = gapic_v1.method.DEFAULT,
            timeout: float = None,
            metadata: Sequence[Tuple[str, str]] = (),
            ) -> iam.SignBlobResponse:
        r"""Signs a blob using a service account's system-managed
        private key.

        Args:
            request (google.iam.admin_v1.types.SignBlobRequest):
                The request object. The service account sign blob
                request.
            name (str):
                Required. The resource name of the service account in
                the following format:
                ``projects/{PROJECT_ID}/serviceAccounts/{ACCOUNT}``.
                Using ``-`` as a wildcard for the ``PROJECT_ID`` will
                infer the project from the account. The ``ACCOUNT``
                value can be the ``email`` address or the ``unique_id``
                of the service account.

                This corresponds to the ``name`` field
                on the ``request`` instance; if ``request`` is provided, this
                should not be set.
            bytes_to_sign (bytes):
                Required. The bytes to sign.
                This corresponds to the ``bytes_to_sign`` field
                on the ``request`` instance; if ``request`` is provided, this
                should not be set.

            retry (google.api_core.retry.Retry): Designation of what errors, if any,
                should be retried.
            timeout (float): The timeout for this request.
            metadata (Sequence[Tuple[str, str]]): Strings which should be
                sent along with the request as metadata.

        Returns:
            google.iam.admin_v1.types.SignBlobResponse:
                The service account sign blob
                response.

        """
        # Create or coerce a protobuf request object.
        # Sanity check: If we got a request object, we should *not* have
        # gotten any keyword arguments that map to the request.
        has_flattened_params = any([name, bytes_to_sign])
        if request is not None and has_flattened_params:
            raise ValueError('If the `request` argument is set, then none of '
                             'the individual field arguments should be set.')

        # Minor optimization to avoid making a copy if the user passes
        # in a iam.SignBlobRequest.
        # There's no risk of modifying the input as we've already verified
        # there are no flattened fields.
        if not isinstance(request, iam.SignBlobRequest):
            request = iam.SignBlobRequest(request)

            # If we have keyword arguments corresponding to fields on the
            # request, apply these.

            if name is not None:
                request.name = name
            if bytes_to_sign is not None:
                request.bytes_to_sign = bytes_to_sign

        # Wrap the RPC method; this adds retry and timeout information,
        # and friendly error handling.
        rpc = self._transport._wrapped_methods[self._transport.sign_blob]

        # Certain fields should be provided within the metadata header;
        # add these here.
        metadata = tuple(metadata) + (
            gapic_v1.routing_header.to_grpc_metadata((
                ('name', request.name),
            )),
        )

        # Send the request.
        response = rpc(
            request,
            retry=retry,
            timeout=timeout,
            metadata=metadata,
        )

        # Done; return the response.
        return response

    def sign_jwt(self,
            request: iam.SignJwtRequest = None,
            *,
            name: str = None,
            payload: str = None,
            retry: retries.Retry = gapic_v1.method.DEFAULT,
            timeout: float = None,
            metadata: Sequence[Tuple[str, str]] = (),
            ) -> iam.SignJwtResponse:
        r"""Signs a JWT using a service account's system-managed private
        key.

        If no expiry time (``exp``) is provided in the
        ``SignJwtRequest``, IAM sets an an expiry time of one hour by
        default. If you request an expiry time of more than one hour,
        the request will fail.

        Args:
            request (google.iam.admin_v1.types.SignJwtRequest):
                The request object. The service account sign JWT
                request.
            name (str):
                Required. The resource name of the service account in
                the following format:
                ``projects/{PROJECT_ID}/serviceAccounts/{ACCOUNT}``.
                Using ``-`` as a wildcard for the ``PROJECT_ID`` will
                infer the project from the account. The ``ACCOUNT``
                value can be the ``email`` address or the ``unique_id``
                of the service account.

                This corresponds to the ``name`` field
                on the ``request`` instance; if ``request`` is provided, this
                should not be set.
            payload (str):
                Required. The JWT payload to sign, a
                JSON JWT Claim set.

                This corresponds to the ``payload`` field
                on the ``request`` instance; if ``request`` is provided, this
                should not be set.

            retry (google.api_core.retry.Retry): Designation of what errors, if any,
                should be retried.
            timeout (float): The timeout for this request.
            metadata (Sequence[Tuple[str, str]]): Strings which should be
                sent along with the request as metadata.

        Returns:
            google.iam.admin_v1.types.SignJwtResponse:
                The service account sign JWT
                response.

        """
        # Create or coerce a protobuf request object.
        # Sanity check: If we got a request object, we should *not* have
        # gotten any keyword arguments that map to the request.
        has_flattened_params = any([name, payload])
        if request is not None and has_flattened_params:
            raise ValueError('If the `request` argument is set, then none of '
                             'the individual field arguments should be set.')

        # Minor optimization to avoid making a copy if the user passes
        # in a iam.SignJwtRequest.
        # There's no risk of modifying the input as we've already verified
        # there are no flattened fields.
        if not isinstance(request, iam.SignJwtRequest):
            request = iam.SignJwtRequest(request)

            # If we have keyword arguments corresponding to fields on the
            # request, apply these.

            if name is not None:
                request.name = name
            if payload is not None:
                request.payload = payload

        # Wrap the RPC method; this adds retry and timeout information,
        # and friendly error handling.
        rpc = self._transport._wrapped_methods[self._transport.sign_jwt]

        # Certain fields should be provided within the metadata header;
        # add these here.
        metadata = tuple(metadata) + (
            gapic_v1.routing_header.to_grpc_metadata((
                ('name', request.name),
            )),
        )

        # Send the request.
        response = rpc(
            request,
            retry=retry,
            timeout=timeout,
            metadata=metadata,
        )

        # Done; return the response.
        return response

    def get_iam_policy(self,
            request: iam_policy.GetIamPolicyRequest = None,
            *,
            resource: str = None,
            retry: retries.Retry = gapic_v1.method.DEFAULT,
            timeout: float = None,
            metadata: Sequence[Tuple[str, str]] = (),
            ) -> policy.Policy:
        r"""Returns the Cloud IAM access control policy for a
        [ServiceAccount][google.iam.admin.v1.ServiceAccount].

        Note: Service accounts are both `resources and
        identities </iam/docs/service-accounts#service_account_permissions>`__.
        This method treats the service account as a resource. It returns
        the Cloud IAM policy that reflects what members have access to
        the service account.

        This method does not return what resources the service account
        has access to. To see if a service account has access to a
        resource, call the ``getIamPolicy`` method on the target
        resource. For example, to view grants for a project, call the
        `projects.getIamPolicy </resource-manager/reference/rest/v1/projects/getIamPolicy>`__
        method.

        Args:
            request (google.iam.v1.iam_policy_pb2.GetIamPolicyRequest):
                The request object. Request message for `GetIamPolicy`
                method.
            resource (str):
                REQUIRED: The resource for which the
                policy is being requested. See the
                operation documentation for the
                appropriate value for this field.

                This corresponds to the ``resource`` field
                on the ``request`` instance; if ``request`` is provided, this
                should not be set.

            retry (google.api_core.retry.Retry): Designation of what errors, if any,
                should be retried.
            timeout (float): The timeout for this request.
            metadata (Sequence[Tuple[str, str]]): Strings which should be
                sent along with the request as metadata.

        Returns:
            google.iam.v1.policy_pb2.Policy:
                Defines an Identity and Access Management (IAM) policy. It is used to
                   specify access control policies for Cloud Platform
                   resources.

                   A Policy is a collection of bindings. A binding binds
                   one or more members to a single role. Members can be
                   user accounts, service accounts, Google groups, and
                   domains (such as G Suite). A role is a named list of
                   permissions (defined by IAM or configured by users).
                   A binding can optionally specify a condition, which
                   is a logic expression that further constrains the
                   role binding based on attributes about the request
                   and/or target resource.

                   **JSON Example**

                      {
                         "bindings": [
                            {
                               "role":
                               "roles/resourcemanager.organizationAdmin",
                               "members": [ "user:mike@example.com",
                               "group:admins@example.com",
                               "domain:google.com",
                               "serviceAccount:my-project-id@appspot.gserviceaccount.com"
                               ]

                            }, { "role":
                            "roles/resourcemanager.organizationViewer",
                            "members": ["user:eve@example.com"],
                            "condition": { "title": "expirable access",
                            "description": "Does not grant access after
                            Sep 2020", "expression": "request.time <
                            timestamp('2020-10-01T00:00:00.000Z')", } }

                         ]

                      }

                   **YAML Example**

                      bindings: - members: - user:\ mike@example.com -
                      group:\ admins@example.com - domain:google.com -
                      serviceAccount:\ my-project-id@appspot.gserviceaccount.com
                      role: roles/resourcemanager.organizationAdmin -
                      members: - user:\ eve@example.com role:
                      roles/resourcemanager.organizationViewer
                      condition: title: expirable access description:
                      Does not grant access after Sep 2020 expression:
                      request.time <
                      timestamp('2020-10-01T00:00:00.000Z')

                   For a description of IAM and its features, see the
                   [IAM developer's
                   guide](\ https://cloud.google.com/iam/docs).

        """
        # Create or coerce a protobuf request object.
        # Sanity check: If we got a request object, we should *not* have
        # gotten any keyword arguments that map to the request.
        has_flattened_params = any([resource])
        if request is not None and has_flattened_params:
            raise ValueError('If the `request` argument is set, then none of '
                             'the individual field arguments should be set.')

        # The request isn't a proto-plus wrapped type,
        # so it must be constructed via keyword expansion.
        if isinstance(request, dict):
            request = iam_policy.GetIamPolicyRequest(**request)

        elif not request:
            request = iam_policy.GetIamPolicyRequest(resource=resource, )

        # Wrap the RPC method; this adds retry and timeout information,
        # and friendly error handling.
        rpc = self._transport._wrapped_methods[self._transport.get_iam_policy]

        # Certain fields should be provided within the metadata header;
        # add these here.
        metadata = tuple(metadata) + (
            gapic_v1.routing_header.to_grpc_metadata((
                ('resource', request.resource),
            )),
        )

        # Send the request.
        response = rpc(
            request,
            retry=retry,
            timeout=timeout,
            metadata=metadata,
        )

        # Done; return the response.
        return response

    def set_iam_policy(self,
            request: iam_policy.SetIamPolicyRequest = None,
            *,
            resource: str = None,
            retry: retries.Retry = gapic_v1.method.DEFAULT,
            timeout: float = None,
            metadata: Sequence[Tuple[str, str]] = (),
            ) -> policy.Policy:
        r"""Sets the Cloud IAM access control policy for a
        [ServiceAccount][google.iam.admin.v1.ServiceAccount].

        Note: Service accounts are both `resources and
        identities </iam/docs/service-accounts#service_account_permissions>`__.
        This method treats the service account as a resource. Use it to
        grant members access to the service account, such as when they
        need to impersonate it.

        This method does not grant the service account access to other
        resources, such as projects. To grant a service account access
        to resources, include the service account in the Cloud IAM
        policy for the desired resource, then call the appropriate
        ``setIamPolicy`` method on the target resource. For example, to
        grant a service account access to a project, call the
        `projects.setIamPolicy </resource-manager/reference/rest/v1/projects/setIamPolicy>`__
        method.

        Args:
            request (google.iam.v1.iam_policy_pb2.SetIamPolicyRequest):
                The request object. Request message for `SetIamPolicy`
                method.
            resource (str):
                REQUIRED: The resource for which the
                policy is being specified. See the
                operation documentation for the
                appropriate value for this field.

                This corresponds to the ``resource`` field
                on the ``request`` instance; if ``request`` is provided, this
                should not be set.

            retry (google.api_core.retry.Retry): Designation of what errors, if any,
                should be retried.
            timeout (float): The timeout for this request.
            metadata (Sequence[Tuple[str, str]]): Strings which should be
                sent along with the request as metadata.

        Returns:
            google.iam.v1.policy_pb2.Policy:
                Defines an Identity and Access Management (IAM) policy. It is used to
                   specify access control policies for Cloud Platform
                   resources.

                   A Policy is a collection of bindings. A binding binds
                   one or more members to a single role. Members can be
                   user accounts, service accounts, Google groups, and
                   domains (such as G Suite). A role is a named list of
                   permissions (defined by IAM or configured by users).
                   A binding can optionally specify a condition, which
                   is a logic expression that further constrains the
                   role binding based on attributes about the request
                   and/or target resource.

                   **JSON Example**

                      {
                         "bindings": [
                            {
                               "role":
                               "roles/resourcemanager.organizationAdmin",
                               "members": [ "user:mike@example.com",
                               "group:admins@example.com",
                               "domain:google.com",
                               "serviceAccount:my-project-id@appspot.gserviceaccount.com"
                               ]

                            }, { "role":
                            "roles/resourcemanager.organizationViewer",
                            "members": ["user:eve@example.com"],
                            "condition": { "title": "expirable access",
                            "description": "Does not grant access after
                            Sep 2020", "expression": "request.time <
                            timestamp('2020-10-01T00:00:00.000Z')", } }

                         ]

                      }

                   **YAML Example**

                      bindings: - members: - user:\ mike@example.com -
                      group:\ admins@example.com - domain:google.com -
                      serviceAccount:\ my-project-id@appspot.gserviceaccount.com
                      role: roles/resourcemanager.organizationAdmin -
                      members: - user:\ eve@example.com role:
                      roles/resourcemanager.organizationViewer
                      condition: title: expirable access description:
                      Does not grant access after Sep 2020 expression:
                      request.time <
                      timestamp('2020-10-01T00:00:00.000Z')

                   For a description of IAM and its features, see the
                   [IAM developer's
                   guide](\ https://cloud.google.com/iam/docs).

        """
        # Create or coerce a protobuf request object.
        # Sanity check: If we got a request object, we should *not* have
        # gotten any keyword arguments that map to the request.
        has_flattened_params = any([resource])
        if request is not None and has_flattened_params:
            raise ValueError('If the `request` argument is set, then none of '
                             'the individual field arguments should be set.')

        # The request isn't a proto-plus wrapped type,
        # so it must be constructed via keyword expansion.
        if isinstance(request, dict):
            request = iam_policy.SetIamPolicyRequest(**request)

        elif not request:
            request = iam_policy.SetIamPolicyRequest(resource=resource, )

        # Wrap the RPC method; this adds retry and timeout information,
        # and friendly error handling.
        rpc = self._transport._wrapped_methods[self._transport.set_iam_policy]

        # Certain fields should be provided within the metadata header;
        # add these here.
        metadata = tuple(metadata) + (
            gapic_v1.routing_header.to_grpc_metadata((
                ('resource', request.resource),
            )),
        )

        # Send the request.
        response = rpc(
            request,
            retry=retry,
            timeout=timeout,
            metadata=metadata,
        )

        # Done; return the response.
        return response

    def test_iam_permissions(self,
            request: iam_policy.TestIamPermissionsRequest = None,
            *,
            resource: str = None,
            permissions: Sequence[str] = None,
            retry: retries.Retry = gapic_v1.method.DEFAULT,
            timeout: float = None,
            metadata: Sequence[Tuple[str, str]] = (),
            ) -> iam_policy.TestIamPermissionsResponse:
        r"""Tests the specified permissions against the IAM access control
        policy for a
        [ServiceAccount][google.iam.admin.v1.ServiceAccount].

        Args:
            request (google.iam.v1.iam_policy_pb2.TestIamPermissionsRequest):
                The request object. Request message for
                `TestIamPermissions` method.
            resource (str):
                REQUIRED: The resource for which the
                policy detail is being requested. See
                the operation documentation for the
                appropriate value for this field.

                This corresponds to the ``resource`` field
                on the ``request`` instance; if ``request`` is provided, this
                should not be set.
            permissions (Sequence[str]):
                The set of permissions to check for the ``resource``.
                Permissions with wildcards (such as '*' or 'storage.*')
                are not allowed. For more information see `IAM
                Overview <https://cloud.google.com/iam/docs/overview#permissions>`__.

                This corresponds to the ``permissions`` field
                on the ``request`` instance; if ``request`` is provided, this
                should not be set.

            retry (google.api_core.retry.Retry): Designation of what errors, if any,
                should be retried.
            timeout (float): The timeout for this request.
            metadata (Sequence[Tuple[str, str]]): Strings which should be
                sent along with the request as metadata.

        Returns:
            google.iam.v1.iam_policy_pb2.TestIamPermissionsResponse:
                Response message for TestIamPermissions method.
        """
        # Create or coerce a protobuf request object.
        # Sanity check: If we got a request object, we should *not* have
        # gotten any keyword arguments that map to the request.
        has_flattened_params = any([resource, permissions])
        if request is not None and has_flattened_params:
            raise ValueError('If the `request` argument is set, then none of '
                             'the individual field arguments should be set.')

        # The request isn't a proto-plus wrapped type,
        # so it must be constructed via keyword expansion.
        if isinstance(request, dict):
            request = iam_policy.TestIamPermissionsRequest(**request)

        elif not request:
            request = iam_policy.TestIamPermissionsRequest(resource=resource, permissions=permissions, )

        # Wrap the RPC method; this adds retry and timeout information,
        # and friendly error handling.
        rpc = self._transport._wrapped_methods[self._transport.test_iam_permissions]

        # Certain fields should be provided within the metadata header;
        # add these here.
        metadata = tuple(metadata) + (
            gapic_v1.routing_header.to_grpc_metadata((
                ('resource', request.resource),
            )),
        )

        # Send the request.
        response = rpc(
            request,
            retry=retry,
            timeout=timeout,
            metadata=metadata,
        )

        # Done; return the response.
        return response

    def query_grantable_roles(self,
            request: iam.QueryGrantableRolesRequest = None,
            *,
            full_resource_name: str = None,
            retry: retries.Retry = gapic_v1.method.DEFAULT,
            timeout: float = None,
            metadata: Sequence[Tuple[str, str]] = (),
            ) -> pagers.QueryGrantableRolesPager:
        r"""Queries roles that can be granted on a particular
        resource. A role is grantable if it can be used as the
        role in a binding for a policy for that resource.

        Args:
            request (google.iam.admin_v1.types.QueryGrantableRolesRequest):
                The request object. The grantable role query request.
            full_resource_name (str):
                Required. The full resource name to query from the list
                of grantable roles.

                The name follows the Google Cloud Platform resource
                format. For example, a Cloud Platform project with id
                ``my-project`` will be named
                ``//cloudresourcemanager.googleapis.com/projects/my-project``.

                This corresponds to the ``full_resource_name`` field
                on the ``request`` instance; if ``request`` is provided, this
                should not be set.

            retry (google.api_core.retry.Retry): Designation of what errors, if any,
                should be retried.
            timeout (float): The timeout for this request.
            metadata (Sequence[Tuple[str, str]]): Strings which should be
                sent along with the request as metadata.

        Returns:
            google.iam.admin_v1.services.iam.pagers.QueryGrantableRolesPager:
                The grantable role query response.
                Iterating over this object will yield
                results and resolve additional pages
                automatically.

        """
        # Create or coerce a protobuf request object.
        # Sanity check: If we got a request object, we should *not* have
        # gotten any keyword arguments that map to the request.
        has_flattened_params = any([full_resource_name])
        if request is not None and has_flattened_params:
            raise ValueError('If the `request` argument is set, then none of '
                             'the individual field arguments should be set.')

        # Minor optimization to avoid making a copy if the user passes
        # in a iam.QueryGrantableRolesRequest.
        # There's no risk of modifying the input as we've already verified
        # there are no flattened fields.
        if not isinstance(request, iam.QueryGrantableRolesRequest):
            request = iam.QueryGrantableRolesRequest(request)

            # If we have keyword arguments corresponding to fields on the
            # request, apply these.

            if full_resource_name is not None:
                request.full_resource_name = full_resource_name

        # Wrap the RPC method; this adds retry and timeout information,
        # and friendly error handling.
        rpc = self._transport._wrapped_methods[self._transport.query_grantable_roles]

        # Send the request.
        response = rpc(
            request,
            retry=retry,
            timeout=timeout,
            metadata=metadata,
        )

        # This method is paged; wrap the response in a pager, which provides
        # an `__iter__` convenience method.
        response = pagers.QueryGrantableRolesPager(
            method=rpc,
            request=request,
            response=response,
            metadata=metadata,
        )

        # Done; return the response.
        return response

    def list_roles(self,
            request: iam.ListRolesRequest = None,
            *,
            retry: retries.Retry = gapic_v1.method.DEFAULT,
            timeout: float = None,
            metadata: Sequence[Tuple[str, str]] = (),
            ) -> pagers.ListRolesPager:
        r"""Lists the Roles defined on a resource.

        Args:
            request (google.iam.admin_v1.types.ListRolesRequest):
                The request object. The request to get all roles defined
                under a resource.

            retry (google.api_core.retry.Retry): Designation of what errors, if any,
                should be retried.
            timeout (float): The timeout for this request.
            metadata (Sequence[Tuple[str, str]]): Strings which should be
                sent along with the request as metadata.

        Returns:
            google.iam.admin_v1.services.iam.pagers.ListRolesPager:
                The response containing the roles
                defined under a resource.
                Iterating over this object will yield
                results and resolve additional pages
                automatically.

        """
        # Create or coerce a protobuf request object.

        # Minor optimization to avoid making a copy if the user passes
        # in a iam.ListRolesRequest.
        # There's no risk of modifying the input as we've already verified
        # there are no flattened fields.
        if not isinstance(request, iam.ListRolesRequest):
            request = iam.ListRolesRequest(request)

        # Wrap the RPC method; this adds retry and timeout information,
        # and friendly error handling.
        rpc = self._transport._wrapped_methods[self._transport.list_roles]

        # Send the request.
        response = rpc(
            request,
            retry=retry,
            timeout=timeout,
            metadata=metadata,
        )

        # This method is paged; wrap the response in a pager, which provides
        # an `__iter__` convenience method.
        response = pagers.ListRolesPager(
            method=rpc,
            request=request,
            response=response,
            metadata=metadata,
        )

        # Done; return the response.
        return response

    def get_role(self,
            request: iam.GetRoleRequest = None,
            *,
            retry: retries.Retry = gapic_v1.method.DEFAULT,
            timeout: float = None,
            metadata: Sequence[Tuple[str, str]] = (),
            ) -> iam.Role:
        r"""Gets a Role definition.

        Args:
            request (google.iam.admin_v1.types.GetRoleRequest):
                The request object. The request to get the definition of
                an existing role.

            retry (google.api_core.retry.Retry): Designation of what errors, if any,
                should be retried.
            timeout (float): The timeout for this request.
            metadata (Sequence[Tuple[str, str]]): Strings which should be
                sent along with the request as metadata.

        Returns:
            google.iam.admin_v1.types.Role:
                A role in the Identity and Access
                Management API.

        """
        # Create or coerce a protobuf request object.

        # Minor optimization to avoid making a copy if the user passes
        # in a iam.GetRoleRequest.
        # There's no risk of modifying the input as we've already verified
        # there are no flattened fields.
        if not isinstance(request, iam.GetRoleRequest):
            request = iam.GetRoleRequest(request)

        # Wrap the RPC method; this adds retry and timeout information,
        # and friendly error handling.
        rpc = self._transport._wrapped_methods[self._transport.get_role]

        # Certain fields should be provided within the metadata header;
        # add these here.
        metadata = tuple(metadata) + (
            gapic_v1.routing_header.to_grpc_metadata((
                ('name', request.name),
            )),
        )

        # Send the request.
        response = rpc(
            request,
            retry=retry,
            timeout=timeout,
            metadata=metadata,
        )

        # Done; return the response.
        return response

    def create_role(self,
            request: iam.CreateRoleRequest = None,
            *,
            retry: retries.Retry = gapic_v1.method.DEFAULT,
            timeout: float = None,
            metadata: Sequence[Tuple[str, str]] = (),
            ) -> iam.Role:
        r"""Creates a new Role.

        Args:
            request (google.iam.admin_v1.types.CreateRoleRequest):
                The request object. The request to create a new role.

            retry (google.api_core.retry.Retry): Designation of what errors, if any,
                should be retried.
            timeout (float): The timeout for this request.
            metadata (Sequence[Tuple[str, str]]): Strings which should be
                sent along with the request as metadata.

        Returns:
            google.iam.admin_v1.types.Role:
                A role in the Identity and Access
                Management API.

        """
        # Create or coerce a protobuf request object.

        # Minor optimization to avoid making a copy if the user passes
        # in a iam.CreateRoleRequest.
        # There's no risk of modifying the input as we've already verified
        # there are no flattened fields.
        if not isinstance(request, iam.CreateRoleRequest):
            request = iam.CreateRoleRequest(request)

        # Wrap the RPC method; this adds retry and timeout information,
        # and friendly error handling.
        rpc = self._transport._wrapped_methods[self._transport.create_role]

        # Certain fields should be provided within the metadata header;
        # add these here.
        metadata = tuple(metadata) + (
            gapic_v1.routing_header.to_grpc_metadata((
                ('parent', request.parent),
            )),
        )

        # Send the request.
        response = rpc(
            request,
            retry=retry,
            timeout=timeout,
            metadata=metadata,
        )

        # Done; return the response.
        return response

    def update_role(self,
            request: iam.UpdateRoleRequest = None,
            *,
            retry: retries.Retry = gapic_v1.method.DEFAULT,
            timeout: float = None,
            metadata: Sequence[Tuple[str, str]] = (),
            ) -> iam.Role:
        r"""Updates a Role definition.

        Args:
            request (google.iam.admin_v1.types.UpdateRoleRequest):
                The request object. The request to update a role.

            retry (google.api_core.retry.Retry): Designation of what errors, if any,
                should be retried.
            timeout (float): The timeout for this request.
            metadata (Sequence[Tuple[str, str]]): Strings which should be
                sent along with the request as metadata.

        Returns:
            google.iam.admin_v1.types.Role:
                A role in the Identity and Access
                Management API.

        """
        # Create or coerce a protobuf request object.

        # Minor optimization to avoid making a copy if the user passes
        # in a iam.UpdateRoleRequest.
        # There's no risk of modifying the input as we've already verified
        # there are no flattened fields.
        if not isinstance(request, iam.UpdateRoleRequest):
            request = iam.UpdateRoleRequest(request)

        # Wrap the RPC method; this adds retry and timeout information,
        # and friendly error handling.
        rpc = self._transport._wrapped_methods[self._transport.update_role]

        # Certain fields should be provided within the metadata header;
        # add these here.
        metadata = tuple(metadata) + (
            gapic_v1.routing_header.to_grpc_metadata((
                ('name', request.name),
            )),
        )

        # Send the request.
        response = rpc(
            request,
            retry=retry,
            timeout=timeout,
            metadata=metadata,
        )

        # Done; return the response.
        return response

    def delete_role(self,
            request: iam.DeleteRoleRequest = None,
            *,
            retry: retries.Retry = gapic_v1.method.DEFAULT,
            timeout: float = None,
            metadata: Sequence[Tuple[str, str]] = (),
            ) -> iam.Role:
        r"""Soft deletes a role. The role is suspended and cannot be used to
        create new IAM Policy Bindings. The Role will not be included in
        ``ListRoles()`` unless ``show_deleted`` is set in the
        ``ListRolesRequest``. The Role contains the deleted boolean set.
        Existing Bindings remains, but are inactive. The Role can be
        undeleted within 7 days. After 7 days the Role is deleted and
        all Bindings associated with the role are removed.

        Args:
            request (google.iam.admin_v1.types.DeleteRoleRequest):
                The request object. The request to delete an existing
                role.

            retry (google.api_core.retry.Retry): Designation of what errors, if any,
                should be retried.
            timeout (float): The timeout for this request.
            metadata (Sequence[Tuple[str, str]]): Strings which should be
                sent along with the request as metadata.

        Returns:
            google.iam.admin_v1.types.Role:
                A role in the Identity and Access
                Management API.

        """
        # Create or coerce a protobuf request object.

        # Minor optimization to avoid making a copy if the user passes
        # in a iam.DeleteRoleRequest.
        # There's no risk of modifying the input as we've already verified
        # there are no flattened fields.
        if not isinstance(request, iam.DeleteRoleRequest):
            request = iam.DeleteRoleRequest(request)

        # Wrap the RPC method; this adds retry and timeout information,
        # and friendly error handling.
        rpc = self._transport._wrapped_methods[self._transport.delete_role]

        # Certain fields should be provided within the metadata header;
        # add these here.
        metadata = tuple(metadata) + (
            gapic_v1.routing_header.to_grpc_metadata((
                ('name', request.name),
            )),
        )

        # Send the request.
        response = rpc(
            request,
            retry=retry,
            timeout=timeout,
            metadata=metadata,
        )

        # Done; return the response.
        return response

    def undelete_role(self,
            request: iam.UndeleteRoleRequest = None,
            *,
            retry: retries.Retry = gapic_v1.method.DEFAULT,
            timeout: float = None,
            metadata: Sequence[Tuple[str, str]] = (),
            ) -> iam.Role:
        r"""Undelete a Role, bringing it back in its previous
        state.

        Args:
            request (google.iam.admin_v1.types.UndeleteRoleRequest):
                The request object. The request to undelete an existing
                role.

            retry (google.api_core.retry.Retry): Designation of what errors, if any,
                should be retried.
            timeout (float): The timeout for this request.
            metadata (Sequence[Tuple[str, str]]): Strings which should be
                sent along with the request as metadata.

        Returns:
            google.iam.admin_v1.types.Role:
                A role in the Identity and Access
                Management API.

        """
        # Create or coerce a protobuf request object.

        # Minor optimization to avoid making a copy if the user passes
        # in a iam.UndeleteRoleRequest.
        # There's no risk of modifying the input as we've already verified
        # there are no flattened fields.
        if not isinstance(request, iam.UndeleteRoleRequest):
            request = iam.UndeleteRoleRequest(request)

        # Wrap the RPC method; this adds retry and timeout information,
        # and friendly error handling.
        rpc = self._transport._wrapped_methods[self._transport.undelete_role]

        # Certain fields should be provided within the metadata header;
        # add these here.
        metadata = tuple(metadata) + (
            gapic_v1.routing_header.to_grpc_metadata((
                ('name', request.name),
            )),
        )

        # Send the request.
        response = rpc(
            request,
            retry=retry,
            timeout=timeout,
            metadata=metadata,
        )

        # Done; return the response.
        return response

    def query_testable_permissions(self,
            request: iam.QueryTestablePermissionsRequest = None,
            *,
            retry: retries.Retry = gapic_v1.method.DEFAULT,
            timeout: float = None,
            metadata: Sequence[Tuple[str, str]] = (),
            ) -> pagers.QueryTestablePermissionsPager:
        r"""Lists the permissions testable on a resource.
        A permission is testable if it can be tested for an
        identity on a resource.

        Args:
            request (google.iam.admin_v1.types.QueryTestablePermissionsRequest):
                The request object. A request to get permissions which
                can be tested on a resource.

            retry (google.api_core.retry.Retry): Designation of what errors, if any,
                should be retried.
            timeout (float): The timeout for this request.
            metadata (Sequence[Tuple[str, str]]): Strings which should be
                sent along with the request as metadata.

        Returns:
            google.iam.admin_v1.services.iam.pagers.QueryTestablePermissionsPager:
                The response containing permissions
                which can be tested on a resource.
                Iterating over this object will yield
                results and resolve additional pages
                automatically.

        """
        # Create or coerce a protobuf request object.

        # Minor optimization to avoid making a copy if the user passes
        # in a iam.QueryTestablePermissionsRequest.
        # There's no risk of modifying the input as we've already verified
        # there are no flattened fields.
        if not isinstance(request, iam.QueryTestablePermissionsRequest):
            request = iam.QueryTestablePermissionsRequest(request)

        # Wrap the RPC method; this adds retry and timeout information,
        # and friendly error handling.
        rpc = self._transport._wrapped_methods[self._transport.query_testable_permissions]

        # Send the request.
        response = rpc(
            request,
            retry=retry,
            timeout=timeout,
            metadata=metadata,
        )

        # This method is paged; wrap the response in a pager, which provides
        # an `__iter__` convenience method.
        response = pagers.QueryTestablePermissionsPager(
            method=rpc,
            request=request,
            response=response,
            metadata=metadata,
        )

        # Done; return the response.
        return response







try:
    DEFAULT_CLIENT_INFO = gapic_v1.client_info.ClientInfo(
        gapic_version=pkg_resources.get_distribution(
            'google-iam-admin',
        ).version,
    )
except pkg_resources.DistributionNotFound:
    DEFAULT_CLIENT_INFO = gapic_v1.client_info.ClientInfo()


__all__ = (
    'IAMClient',
)