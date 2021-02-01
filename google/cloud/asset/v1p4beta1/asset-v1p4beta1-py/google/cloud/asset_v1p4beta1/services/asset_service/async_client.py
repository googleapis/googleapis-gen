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
import functools
import re
from typing import Dict, Sequence, Tuple, Type, Union
import pkg_resources

import google.api_core.client_options as ClientOptions # type: ignore
from google.api_core import exceptions                 # type: ignore
from google.api_core import gapic_v1                   # type: ignore
from google.api_core import retry as retries           # type: ignore
from google.auth import credentials                    # type: ignore
from google.oauth2 import service_account              # type: ignore

from google.api_core import operation  # type: ignore
from google.api_core import operation_async  # type: ignore
from google.cloud.asset_v1p4beta1.types import asset_service
from google.cloud.asset_v1p4beta1.types import assets

from .transports.base import AssetServiceTransport, DEFAULT_CLIENT_INFO
from .transports.grpc_asyncio import AssetServiceGrpcAsyncIOTransport
from .client import AssetServiceClient


class AssetServiceAsyncClient:
    """Asset service definition."""

    _client: AssetServiceClient

    DEFAULT_ENDPOINT = AssetServiceClient.DEFAULT_ENDPOINT
    DEFAULT_MTLS_ENDPOINT = AssetServiceClient.DEFAULT_MTLS_ENDPOINT

    common_billing_account_path = staticmethod(AssetServiceClient.common_billing_account_path)
    parse_common_billing_account_path = staticmethod(AssetServiceClient.parse_common_billing_account_path)

    common_folder_path = staticmethod(AssetServiceClient.common_folder_path)
    parse_common_folder_path = staticmethod(AssetServiceClient.parse_common_folder_path)

    common_organization_path = staticmethod(AssetServiceClient.common_organization_path)
    parse_common_organization_path = staticmethod(AssetServiceClient.parse_common_organization_path)

    common_project_path = staticmethod(AssetServiceClient.common_project_path)
    parse_common_project_path = staticmethod(AssetServiceClient.parse_common_project_path)

    common_location_path = staticmethod(AssetServiceClient.common_location_path)
    parse_common_location_path = staticmethod(AssetServiceClient.parse_common_location_path)

    from_service_account_info = AssetServiceClient.from_service_account_info
    from_service_account_file = AssetServiceClient.from_service_account_file
    from_service_account_json = from_service_account_file

    @property
    def transport(self) -> AssetServiceTransport:
        """Return the transport used by the client instance.

        Returns:
            AssetServiceTransport: The transport used by the client instance.
        """
        return self._client.transport

    get_transport_class = functools.partial(type(AssetServiceClient).get_transport_class, type(AssetServiceClient))

    def __init__(self, *,
            credentials: credentials.Credentials = None,
            transport: Union[str, AssetServiceTransport] = 'grpc_asyncio',
            client_options: ClientOptions = None,
            client_info: gapic_v1.client_info.ClientInfo = DEFAULT_CLIENT_INFO,
            ) -> None:
        """Instantiate the asset service client.

        Args:
            credentials (Optional[google.auth.credentials.Credentials]): The
                authorization credentials to attach to requests. These
                credentials identify the application to the service; if none
                are specified, the client will attempt to ascertain the
                credentials from the environment.
            transport (Union[str, ~.AssetServiceTransport]): The
                transport to use. If set to None, a transport is chosen
                automatically.
            client_options (ClientOptions): Custom options for the client. It
                won't take effect if a ``transport`` instance is provided.
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

        Raises:
            google.auth.exceptions.MutualTlsChannelError: If mutual TLS transport
                creation failed for any reason.
        """

        self._client = AssetServiceClient(
            credentials=credentials,
            transport=transport,
            client_options=client_options,
            client_info=client_info,

        )

    async def analyze_iam_policy(self,
            request: asset_service.AnalyzeIamPolicyRequest = None,
            *,
            retry: retries.Retry = gapic_v1.method.DEFAULT,
            timeout: float = None,
            metadata: Sequence[Tuple[str, str]] = (),
            ) -> asset_service.AnalyzeIamPolicyResponse:
        r"""Analyzes IAM policies based on the specified request. Returns a
        list of
        [IamPolicyAnalysisResult][google.cloud.asset.v1p4beta1.IamPolicyAnalysisResult]
        matching the request.

        Args:
            request (:class:`google.cloud.asset_v1p4beta1.types.AnalyzeIamPolicyRequest`):
                The request object. A request message for
                [AssetService.AnalyzeIamPolicy][google.cloud.asset.v1p4beta1.AssetService.AnalyzeIamPolicy].

            retry (google.api_core.retry.Retry): Designation of what errors, if any,
                should be retried.
            timeout (float): The timeout for this request.
            metadata (Sequence[Tuple[str, str]]): Strings which should be
                sent along with the request as metadata.

        Returns:
            google.cloud.asset_v1p4beta1.types.AnalyzeIamPolicyResponse:
                A response message for
                [AssetService.AnalyzeIamPolicy][google.cloud.asset.v1p4beta1.AssetService.AnalyzeIamPolicy].

        """
        # Create or coerce a protobuf request object.

        request = asset_service.AnalyzeIamPolicyRequest(request)

        # Wrap the RPC method; this adds retry and timeout information,
        # and friendly error handling.
        rpc = gapic_v1.method_async.wrap_method(
            self._client._transport.analyze_iam_policy,
            default_retry=retries.Retry(
                initial=0.1,
                maximum=60.0,
                multiplier=1.3,
                predicate=retries.if_exception_type(
                    exceptions.ServiceUnavailable,
                ),
            ),
            default_timeout=300.0,
            client_info=DEFAULT_CLIENT_INFO,
        )

        # Certain fields should be provided within the metadata header;
        # add these here.
        metadata = tuple(metadata) + (
            gapic_v1.routing_header.to_grpc_metadata((
                ('analysis_query.parent', request.analysis_query.parent),
            )),
        )

        # Send the request.
        response = await rpc(
            request,
            retry=retry,
            timeout=timeout,
            metadata=metadata,
        )

        # Done; return the response.
        return response

    async def export_iam_policy_analysis(self,
            request: asset_service.ExportIamPolicyAnalysisRequest = None,
            *,
            retry: retries.Retry = gapic_v1.method.DEFAULT,
            timeout: float = None,
            metadata: Sequence[Tuple[str, str]] = (),
            ) -> operation_async.AsyncOperation:
        r"""Exports IAM policy analysis based on the specified request. This
        API implements the
        [google.longrunning.Operation][google.longrunning.Operation] API
        allowing you to keep track of the export. The metadata contains
        the request to help callers to map responses to requests.

        Args:
            request (:class:`google.cloud.asset_v1p4beta1.types.ExportIamPolicyAnalysisRequest`):
                The request object. A request message for
                [AssetService.ExportIamPolicyAnalysis][google.cloud.asset.v1p4beta1.AssetService.ExportIamPolicyAnalysis].

            retry (google.api_core.retry.Retry): Designation of what errors, if any,
                should be retried.
            timeout (float): The timeout for this request.
            metadata (Sequence[Tuple[str, str]]): Strings which should be
                sent along with the request as metadata.

        Returns:
            google.api_core.operation_async.AsyncOperation:
                An object representing a long-running operation.

                The result type for the operation will be :class:`google.cloud.asset_v1p4beta1.types.ExportIamPolicyAnalysisResponse` The export IAM policy analysis response. This message is returned by the
                   [google.longrunning.Operations.GetOperation][] method
                   in the returned
                   [google.longrunning.Operation.response][] field.

        """
        # Create or coerce a protobuf request object.

        request = asset_service.ExportIamPolicyAnalysisRequest(request)

        # Wrap the RPC method; this adds retry and timeout information,
        # and friendly error handling.
        rpc = gapic_v1.method_async.wrap_method(
            self._client._transport.export_iam_policy_analysis,
            default_timeout=60.0,
            client_info=DEFAULT_CLIENT_INFO,
        )

        # Certain fields should be provided within the metadata header;
        # add these here.
        metadata = tuple(metadata) + (
            gapic_v1.routing_header.to_grpc_metadata((
                ('analysis_query.parent', request.analysis_query.parent),
            )),
        )

        # Send the request.
        response = await rpc(
            request,
            retry=retry,
            timeout=timeout,
            metadata=metadata,
        )

        # Wrap the response in an operation future.
        response = operation_async.from_gapic(
            response,
            self._client._transport.operations_client,
            asset_service.ExportIamPolicyAnalysisResponse,
            metadata_type=asset_service.ExportIamPolicyAnalysisRequest,
        )

        # Done; return the response.
        return response







try:
    DEFAULT_CLIENT_INFO = gapic_v1.client_info.ClientInfo(
        gapic_version=pkg_resources.get_distribution(
            'google-cloud-asset',
        ).version,
    )
except pkg_resources.DistributionNotFound:
    DEFAULT_CLIENT_INFO = gapic_v1.client_info.ClientInfo()


__all__ = (
    'AssetServiceAsyncClient',
)
