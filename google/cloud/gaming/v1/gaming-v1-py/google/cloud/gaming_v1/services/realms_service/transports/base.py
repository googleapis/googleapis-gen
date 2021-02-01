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

import abc
import typing
import pkg_resources

from google import auth  # type: ignore
from google.api_core import exceptions  # type: ignore
from google.api_core import gapic_v1    # type: ignore
from google.api_core import retry as retries  # type: ignore
from google.api_core import operations_v1  # type: ignore
from google.auth import credentials  # type: ignore

from google.cloud.gaming_v1.types import realms
from google.longrunning import operations_pb2 as operations  # type: ignore


try:
    DEFAULT_CLIENT_INFO = gapic_v1.client_info.ClientInfo(
        gapic_version=pkg_resources.get_distribution(
            'google-cloud-gaming',
        ).version,
    )
except pkg_resources.DistributionNotFound:
    DEFAULT_CLIENT_INFO = gapic_v1.client_info.ClientInfo()

class RealmsServiceTransport(abc.ABC):
    """Abstract transport class for RealmsService."""

    AUTH_SCOPES = (
        'https://www.googleapis.com/auth/cloud-platform',
    )

    def __init__(
            self, *,
            host: str = 'gameservices.googleapis.com',
            credentials: credentials.Credentials = None,
            credentials_file: typing.Optional[str] = None,
            scopes: typing.Optional[typing.Sequence[str]] = AUTH_SCOPES,
            quota_project_id: typing.Optional[str] = None,
            client_info: gapic_v1.client_info.ClientInfo = DEFAULT_CLIENT_INFO,
            **kwargs,
            ) -> None:
        """Instantiate the transport.

        Args:
            host (Optional[str]): The hostname to connect to.
            credentials (Optional[google.auth.credentials.Credentials]): The
                authorization credentials to attach to requests. These
                credentials identify the application to the service; if none
                are specified, the client will attempt to ascertain the
                credentials from the environment.
            credentials_file (Optional[str]): A file with credentials that can
                be loaded with :func:`google.auth.load_credentials_from_file`.
                This argument is mutually exclusive with credentials.
            scope (Optional[Sequence[str]]): A list of scopes.
            quota_project_id (Optional[str]): An optional project to use for billing
                and quota.
            client_info (google.api_core.gapic_v1.client_info.ClientInfo):	
                The client info used to send a user-agent string along with	
                API requests. If ``None``, then default info will be used.	
                Generally, you only need to set this if you're developing	
                your own client library.
        """
        # Save the hostname. Default to port 443 (HTTPS) if none is specified.
        if ':' not in host:
            host += ':443'
        self._host = host

        # If no credentials are provided, then determine the appropriate
        # defaults.
        if credentials and credentials_file:
            raise exceptions.DuplicateCredentialArgs("'credentials_file' and 'credentials' are mutually exclusive")

        if credentials_file is not None:
            credentials, _ = auth.load_credentials_from_file(
                                credentials_file,
                                scopes=scopes,
                                quota_project_id=quota_project_id
                            )

        elif credentials is None:
            credentials, _ = auth.default(scopes=scopes, quota_project_id=quota_project_id)

        # Save the credentials.
        self._credentials = credentials

        # Lifted into its own function so it can be stubbed out during tests.
        self._prep_wrapped_messages(client_info)

    def _prep_wrapped_messages(self, client_info):
        # Precompute the wrapped methods.
        self._wrapped_methods = {
            self.list_realms: gapic_v1.method.wrap_method(
                self.list_realms,
                default_retry=retries.Retry(
                    initial=1.0,
                    maximum=10.0,
                    multiplier=1.3,
                    predicate=retries.if_exception_type(
                        exceptions.ServiceUnavailable,
                    ),
                ),
                default_timeout=60.0,
                client_info=client_info,
            ),
            self.get_realm: gapic_v1.method.wrap_method(
                self.get_realm,
                default_retry=retries.Retry(
                    initial=1.0,
                    maximum=10.0,
                    multiplier=1.3,
                    predicate=retries.if_exception_type(
                        exceptions.ServiceUnavailable,
                    ),
                ),
                default_timeout=60.0,
                client_info=client_info,
            ),
            self.create_realm: gapic_v1.method.wrap_method(
                self.create_realm,
                default_timeout=60.0,
                client_info=client_info,
            ),
            self.delete_realm: gapic_v1.method.wrap_method(
                self.delete_realm,
                default_timeout=60.0,
                client_info=client_info,
            ),
            self.update_realm: gapic_v1.method.wrap_method(
                self.update_realm,
                default_timeout=60.0,
                client_info=client_info,
            ),
            self.preview_realm_update: gapic_v1.method.wrap_method(
                self.preview_realm_update,
                default_retry=retries.Retry(
                    initial=1.0,
                    maximum=10.0,
                    multiplier=1.3,
                    predicate=retries.if_exception_type(
                        exceptions.ServiceUnavailable,
                    ),
                ),
                default_timeout=60.0,
                client_info=client_info,
            ),

        }

    @property
    def operations_client(self) -> operations_v1.OperationsClient:
        """Return the client designed to process long-running operations."""
        raise NotImplementedError()

    @property
    def list_realms(self) -> typing.Callable[
            [realms.ListRealmsRequest],
            typing.Union[
                realms.ListRealmsResponse,
                typing.Awaitable[realms.ListRealmsResponse]
            ]]:
        raise NotImplementedError()

    @property
    def get_realm(self) -> typing.Callable[
            [realms.GetRealmRequest],
            typing.Union[
                realms.Realm,
                typing.Awaitable[realms.Realm]
            ]]:
        raise NotImplementedError()

    @property
    def create_realm(self) -> typing.Callable[
            [realms.CreateRealmRequest],
            typing.Union[
                operations.Operation,
                typing.Awaitable[operations.Operation]
            ]]:
        raise NotImplementedError()

    @property
    def delete_realm(self) -> typing.Callable[
            [realms.DeleteRealmRequest],
            typing.Union[
                operations.Operation,
                typing.Awaitable[operations.Operation]
            ]]:
        raise NotImplementedError()

    @property
    def update_realm(self) -> typing.Callable[
            [realms.UpdateRealmRequest],
            typing.Union[
                operations.Operation,
                typing.Awaitable[operations.Operation]
            ]]:
        raise NotImplementedError()

    @property
    def preview_realm_update(self) -> typing.Callable[
            [realms.PreviewRealmUpdateRequest],
            typing.Union[
                realms.PreviewRealmUpdateResponse,
                typing.Awaitable[realms.PreviewRealmUpdateResponse]
            ]]:
        raise NotImplementedError()


__all__ = (
    'RealmsServiceTransport',
)
