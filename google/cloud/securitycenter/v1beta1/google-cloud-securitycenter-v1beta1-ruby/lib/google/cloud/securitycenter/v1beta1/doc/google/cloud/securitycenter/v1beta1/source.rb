# Copyright 2020 Google LLC
#
# Licensed under the Apache License, Version 2.0 (the "License");
# you may not use this file except in compliance with the License.
# You may obtain a copy of the License at
#
#     https://www.apache.org/licenses/LICENSE-2.0
#
# Unless required by applicable law or agreed to in writing, software
# distributed under the License is distributed on an "AS IS" BASIS,
# WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
# See the License for the specific language governing permissions and
# limitations under the License.

module Google
  module Cloud
    module Securitycenter
      module V1beta1
        # Security Command Center finding source. A finding source
        # is an entity or a mechanism that can produce a finding. A source is like a
        # container of findings that come from the same scanner, logger, monitor, etc.
        # @!attribute [rw] name
        #   @return [String]
        #     The relative resource name of this source. See:
        #     https://cloud.google.com/apis/design/resource_names#relative_resource_name
        #     Example:
        #     "organizations/{organization_id}/sources/{source_id}"
        # @!attribute [rw] display_name
        #   @return [String]
        #     The source's display name.
        #     A source's display name must be unique amongst its siblings, for example,
        #     two sources with the same parent can't share the same display name.
        #     The display name must have a length between 1 and 64 characters
        #     (inclusive).
        # @!attribute [rw] description
        #   @return [String]
        #     The description of the source (max of 1024 characters).
        #     Example:
        #     "Web Security Scanner is a web security scanner for common
        #     vulnerabilities in App Engine applications. It can automatically
        #     scan and detect four common vulnerabilities, including cross-site-scripting
        #     (XSS), Flash injection, mixed content (HTTP in HTTPS), and
        #     outdated/insecure libraries."
        class Source; end
      end
    end
  end
end