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

from google.cloud.asset_v1p4beta1.services.asset_service.client import AssetServiceClient
from google.cloud.asset_v1p4beta1.services.asset_service.async_client import AssetServiceAsyncClient

from google.cloud.asset_v1p4beta1.types.asset_service import AnalyzeIamPolicyRequest
from google.cloud.asset_v1p4beta1.types.asset_service import AnalyzeIamPolicyResponse
from google.cloud.asset_v1p4beta1.types.asset_service import ExportIamPolicyAnalysisRequest
from google.cloud.asset_v1p4beta1.types.asset_service import ExportIamPolicyAnalysisResponse
from google.cloud.asset_v1p4beta1.types.asset_service import IamPolicyAnalysisOutputConfig
from google.cloud.asset_v1p4beta1.types.asset_service import IamPolicyAnalysisQuery
from google.cloud.asset_v1p4beta1.types.assets import IamPolicyAnalysisResult

__all__ = ('AssetServiceClient',
    'AssetServiceAsyncClient',
    'AnalyzeIamPolicyRequest',
    'AnalyzeIamPolicyResponse',
    'ExportIamPolicyAnalysisRequest',
    'ExportIamPolicyAnalysisResponse',
    'IamPolicyAnalysisOutputConfig',
    'IamPolicyAnalysisQuery',
    'IamPolicyAnalysisResult',
)
