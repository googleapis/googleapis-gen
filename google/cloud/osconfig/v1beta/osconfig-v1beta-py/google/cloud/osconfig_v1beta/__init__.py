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

from .services.os_config_service import OsConfigServiceClient
from .services.os_config_service import OsConfigServiceAsyncClient

from .types.guest_policies import AptRepository
from .types.guest_policies import Assignment
from .types.guest_policies import CreateGuestPolicyRequest
from .types.guest_policies import DeleteGuestPolicyRequest
from .types.guest_policies import EffectiveGuestPolicy
from .types.guest_policies import GetGuestPolicyRequest
from .types.guest_policies import GooRepository
from .types.guest_policies import GuestPolicy
from .types.guest_policies import ListGuestPoliciesRequest
from .types.guest_policies import ListGuestPoliciesResponse
from .types.guest_policies import LookupEffectiveGuestPolicyRequest
from .types.guest_policies import Package
from .types.guest_policies import PackageRepository
from .types.guest_policies import SoftwareRecipe
from .types.guest_policies import UpdateGuestPolicyRequest
from .types.guest_policies import YumRepository
from .types.guest_policies import ZypperRepository
from .types.guest_policies import DesiredState
from .types.patch_deployments import CreatePatchDeploymentRequest
from .types.patch_deployments import DeletePatchDeploymentRequest
from .types.patch_deployments import GetPatchDeploymentRequest
from .types.patch_deployments import ListPatchDeploymentsRequest
from .types.patch_deployments import ListPatchDeploymentsResponse
from .types.patch_deployments import MonthlySchedule
from .types.patch_deployments import OneTimeSchedule
from .types.patch_deployments import PatchDeployment
from .types.patch_deployments import RecurringSchedule
from .types.patch_deployments import WeekDayOfMonth
from .types.patch_deployments import WeeklySchedule
from .types.patch_jobs import AptSettings
from .types.patch_jobs import CancelPatchJobRequest
from .types.patch_jobs import ExecStep
from .types.patch_jobs import ExecStepConfig
from .types.patch_jobs import ExecutePatchJobRequest
from .types.patch_jobs import GcsObject
from .types.patch_jobs import GetPatchJobRequest
from .types.patch_jobs import GooSettings
from .types.patch_jobs import Instance
from .types.patch_jobs import ListPatchJobInstanceDetailsRequest
from .types.patch_jobs import ListPatchJobInstanceDetailsResponse
from .types.patch_jobs import ListPatchJobsRequest
from .types.patch_jobs import ListPatchJobsResponse
from .types.patch_jobs import PatchConfig
from .types.patch_jobs import PatchInstanceFilter
from .types.patch_jobs import PatchJob
from .types.patch_jobs import PatchJobInstanceDetails
from .types.patch_jobs import WindowsUpdateSettings
from .types.patch_jobs import YumSettings
from .types.patch_jobs import ZypperSettings

__all__ = (
    'OsConfigServiceAsyncClient',
'AptRepository',
'AptSettings',
'Assignment',
'CancelPatchJobRequest',
'CreateGuestPolicyRequest',
'CreatePatchDeploymentRequest',
'DeleteGuestPolicyRequest',
'DeletePatchDeploymentRequest',
'DesiredState',
'EffectiveGuestPolicy',
'ExecStep',
'ExecStepConfig',
'ExecutePatchJobRequest',
'GcsObject',
'GetGuestPolicyRequest',
'GetPatchDeploymentRequest',
'GetPatchJobRequest',
'GooRepository',
'GooSettings',
'GuestPolicy',
'Instance',
'ListGuestPoliciesRequest',
'ListGuestPoliciesResponse',
'ListPatchDeploymentsRequest',
'ListPatchDeploymentsResponse',
'ListPatchJobInstanceDetailsRequest',
'ListPatchJobInstanceDetailsResponse',
'ListPatchJobsRequest',
'ListPatchJobsResponse',
'LookupEffectiveGuestPolicyRequest',
'MonthlySchedule',
'OneTimeSchedule',
'OsConfigServiceClient',
'Package',
'PackageRepository',
'PatchConfig',
'PatchDeployment',
'PatchInstanceFilter',
'PatchJob',
'PatchJobInstanceDetails',
'RecurringSchedule',
'SoftwareRecipe',
'UpdateGuestPolicyRequest',
'WeekDayOfMonth',
'WeeklySchedule',
'WindowsUpdateSettings',
'YumRepository',
'YumSettings',
'ZypperRepository',
'ZypperSettings',
)
