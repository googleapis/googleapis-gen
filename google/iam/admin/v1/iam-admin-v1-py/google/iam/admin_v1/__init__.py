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

from .services.iam import IAMClient
from .types.audit_data import AuditData
from .types.iam import CreateRoleRequest
from .types.iam import CreateServiceAccountKeyRequest
from .types.iam import CreateServiceAccountRequest
from .types.iam import DeleteRoleRequest
from .types.iam import DeleteServiceAccountKeyRequest
from .types.iam import DeleteServiceAccountRequest
from .types.iam import GetRoleRequest
from .types.iam import GetServiceAccountKeyRequest
from .types.iam import GetServiceAccountRequest
from .types.iam import ListRolesRequest
from .types.iam import ListRolesResponse
from .types.iam import ListServiceAccountKeysRequest
from .types.iam import ListServiceAccountKeysResponse
from .types.iam import ListServiceAccountsRequest
from .types.iam import ListServiceAccountsResponse
from .types.iam import Permission
from .types.iam import QueryGrantableRolesRequest
from .types.iam import QueryGrantableRolesResponse
from .types.iam import QueryTestablePermissionsRequest
from .types.iam import QueryTestablePermissionsResponse
from .types.iam import Role
from .types.iam import RoleView
from .types.iam import ServiceAccount
from .types.iam import ServiceAccountKey
from .types.iam import ServiceAccountKeyAlgorithm
from .types.iam import ServiceAccountPrivateKeyType
from .types.iam import ServiceAccountPublicKeyType
from .types.iam import SignBlobRequest
from .types.iam import SignBlobResponse
from .types.iam import SignJwtRequest
from .types.iam import SignJwtResponse
from .types.iam import UndeleteRoleRequest
from .types.iam import UpdateRoleRequest


__all__ = (
    'AuditData',
    'CreateRoleRequest',
    'CreateServiceAccountKeyRequest',
    'CreateServiceAccountRequest',
    'DeleteRoleRequest',
    'DeleteServiceAccountKeyRequest',
    'DeleteServiceAccountRequest',
    'GetRoleRequest',
    'GetServiceAccountKeyRequest',
    'GetServiceAccountRequest',
    'ListRolesRequest',
    'ListRolesResponse',
    'ListServiceAccountKeysRequest',
    'ListServiceAccountKeysResponse',
    'ListServiceAccountsRequest',
    'ListServiceAccountsResponse',
    'Permission',
    'QueryGrantableRolesRequest',
    'QueryGrantableRolesResponse',
    'QueryTestablePermissionsRequest',
    'QueryTestablePermissionsResponse',
    'Role',
    'RoleView',
    'ServiceAccount',
    'ServiceAccountKey',
    'ServiceAccountKeyAlgorithm',
    'ServiceAccountPrivateKeyType',
    'ServiceAccountPublicKeyType',
    'SignBlobRequest',
    'SignBlobResponse',
    'SignJwtRequest',
    'SignJwtResponse',
    'UndeleteRoleRequest',
    'UpdateRoleRequest',
'IAMClient',
)
