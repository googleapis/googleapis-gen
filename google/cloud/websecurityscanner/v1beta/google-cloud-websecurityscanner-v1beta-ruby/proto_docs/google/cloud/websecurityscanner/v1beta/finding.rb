# frozen_string_literal: true

# Copyright 2021 Google LLC
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

# Auto-generated by gapic-generator-ruby. DO NOT EDIT!


module Google
  module Cloud
    module WebSecurityScanner
      module V1beta
        # A Finding resource represents a vulnerability instance identified during a
        # ScanRun.
        # @!attribute [rw] name
        #   @return [::String]
        #     The resource name of the Finding. The name follows the format of
        #     'projects/\\{projectId}/scanConfigs/\\{scanConfigId}/scanruns/\\{scanRunId}/findings/\\{findingId}'.
        #     The finding IDs are generated by the system.
        # @!attribute [rw] finding_type
        #   @return [::String]
        #     The type of the Finding.
        #     Detailed and up-to-date information on findings can be found here:
        #     https://cloud.google.com/security-scanner/docs/scan-result-details
        # @!attribute [rw] http_method
        #   @return [::String]
        #     The http method of the request that triggered the vulnerability, in
        #     uppercase.
        # @!attribute [rw] fuzzed_url
        #   @return [::String]
        #     The URL produced by the server-side fuzzer and used in the request that
        #     triggered the vulnerability.
        # @!attribute [rw] body
        #   @return [::String]
        #     The body of the request that triggered the vulnerability.
        # @!attribute [rw] description
        #   @return [::String]
        #     The description of the vulnerability.
        # @!attribute [rw] reproduction_url
        #   @return [::String]
        #     The URL containing human-readable payload that user can leverage to
        #     reproduce the vulnerability.
        # @!attribute [rw] frame_url
        #   @return [::String]
        #     If the vulnerability was originated from nested IFrame, the immediate
        #     parent IFrame is reported.
        # @!attribute [rw] final_url
        #   @return [::String]
        #     The URL where the browser lands when the vulnerability is detected.
        # @!attribute [rw] tracking_id
        #   @return [::String]
        #     The tracking ID uniquely identifies a vulnerability instance across
        #     multiple ScanRuns.
        # @!attribute [rw] form
        #   @return [::Google::Cloud::WebSecurityScanner::V1beta::Form]
        #     An addon containing information reported for a vulnerability with an HTML
        #     form, if any.
        # @!attribute [rw] outdated_library
        #   @return [::Google::Cloud::WebSecurityScanner::V1beta::OutdatedLibrary]
        #     An addon containing information about outdated libraries.
        # @!attribute [rw] violating_resource
        #   @return [::Google::Cloud::WebSecurityScanner::V1beta::ViolatingResource]
        #     An addon containing detailed information regarding any resource causing the
        #     vulnerability such as JavaScript sources, image, audio files, etc.
        # @!attribute [rw] vulnerable_headers
        #   @return [::Google::Cloud::WebSecurityScanner::V1beta::VulnerableHeaders]
        #     An addon containing information about vulnerable or missing HTTP headers.
        # @!attribute [rw] vulnerable_parameters
        #   @return [::Google::Cloud::WebSecurityScanner::V1beta::VulnerableParameters]
        #     An addon containing information about request parameters which were found
        #     to be vulnerable.
        # @!attribute [rw] xss
        #   @return [::Google::Cloud::WebSecurityScanner::V1beta::Xss]
        #     An addon containing information reported for an XSS, if any.
        class Finding
          include ::Google::Protobuf::MessageExts
          extend ::Google::Protobuf::MessageExts::ClassMethods
        end
      end
    end
  end
end
