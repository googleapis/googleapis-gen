// Copyright 2021 Google LLC
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//     https://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.
//
// ** This file is automatically generated by gapic-generator-typescript. **
// ** https://github.com/googleapis/gapic-generator-typescript **
// ** All changes to this file may be overwritten. **

import {ConfigServiceV2Client, LoggingServiceV2Client, MetricsServiceV2Client} from '@google-cloud/logging';

// check that the client class type name can be used
function doStuffWithConfigServiceV2Client(client: ConfigServiceV2Client) {
  client.close();
}
function doStuffWithLoggingServiceV2Client(client: LoggingServiceV2Client) {
  client.close();
}
function doStuffWithMetricsServiceV2Client(client: MetricsServiceV2Client) {
  client.close();
}

function main() {
  // check that the client instance can be created
  const configServiceV2Client = new ConfigServiceV2Client();
  doStuffWithConfigServiceV2Client(configServiceV2Client);
  // check that the client instance can be created
  const loggingServiceV2Client = new LoggingServiceV2Client();
  doStuffWithLoggingServiceV2Client(loggingServiceV2Client);
  // check that the client instance can be created
  const metricsServiceV2Client = new MetricsServiceV2Client();
  doStuffWithMetricsServiceV2Client(metricsServiceV2Client);
}

main();
