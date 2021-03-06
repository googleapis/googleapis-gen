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

from google.cloud.bigquery.connection_v1beta1.services.connection_service.client import ConnectionServiceClient
from google.cloud.bigquery.connection_v1beta1.services.connection_service.async_client import ConnectionServiceAsyncClient

from google.cloud.bigquery.connection_v1beta1.types.connection import CloudSqlCredential
from google.cloud.bigquery.connection_v1beta1.types.connection import CloudSqlProperties
from google.cloud.bigquery.connection_v1beta1.types.connection import Connection
from google.cloud.bigquery.connection_v1beta1.types.connection import ConnectionCredential
from google.cloud.bigquery.connection_v1beta1.types.connection import CreateConnectionRequest
from google.cloud.bigquery.connection_v1beta1.types.connection import DeleteConnectionRequest
from google.cloud.bigquery.connection_v1beta1.types.connection import GetConnectionRequest
from google.cloud.bigquery.connection_v1beta1.types.connection import ListConnectionsRequest
from google.cloud.bigquery.connection_v1beta1.types.connection import ListConnectionsResponse
from google.cloud.bigquery.connection_v1beta1.types.connection import UpdateConnectionCredentialRequest
from google.cloud.bigquery.connection_v1beta1.types.connection import UpdateConnectionRequest

__all__ = ('ConnectionServiceClient',
    'ConnectionServiceAsyncClient',
    'CloudSqlCredential',
    'CloudSqlProperties',
    'Connection',
    'ConnectionCredential',
    'CreateConnectionRequest',
    'DeleteConnectionRequest',
    'GetConnectionRequest',
    'ListConnectionsRequest',
    'ListConnectionsResponse',
    'UpdateConnectionCredentialRequest',
    'UpdateConnectionRequest',
)
