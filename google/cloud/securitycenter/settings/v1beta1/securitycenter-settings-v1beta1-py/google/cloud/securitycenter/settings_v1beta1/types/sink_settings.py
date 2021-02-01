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

import proto  # type: ignore


__protobuf__ = proto.module(
    package='google.cloud.securitycenter.settings.v1beta1',
    manifest={
        'SinkSettings',
    },
)


class SinkSettings(proto.Message):
    r"""Sink Settings for Security Command Center

    Attributes:
        logging_sink_project (str):
            The resource name of the project to send logs to. This
            project must be part of the same organization where the
            Security Center API is enabled. The format is
            ``projects/{project}``. If it is empty, we do not output
            logs. If a project ID is provided it will be normalized to a
            project number.
    """

    logging_sink_project = proto.Field(proto.STRING, number=1)


__all__ = tuple(sorted(__protobuf__.manifest))
