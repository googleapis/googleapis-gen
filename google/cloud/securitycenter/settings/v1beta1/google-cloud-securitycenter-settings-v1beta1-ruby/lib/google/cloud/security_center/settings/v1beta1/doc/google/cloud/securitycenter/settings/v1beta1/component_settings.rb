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
      module Settings
        module V1beta1
          # Component Settings for Security Command Center
          # @!attribute [rw] name
          #   @return [String]
          #     The relative resource name of the component settings.
          #     Formats:
          #     * `organizations/{organization}/components/{component}/settings`
          #       * `folders/{folder}/components/{component}/settings`
          #     * `projects/{project}/components/{component}/settings`
          #       * `projects/{project}/locations/{location}/clusters/{cluster}/components/{component}/settings`
          #     * `projects/{project}/regions/{region}/clusters/{cluster}/components/{component}/settings`
          #       * `projects/{project}/zones/{zone}/clusters/{cluster}/components/{component}/settings`
          # @!attribute [rw] state
          #   @return [Google::Cloud::Securitycenter::Settings::V1beta1::ComponentEnablementState]
          #     ENABLE to enable component, DISABLE to disable and INHERIT to inherit
          #     setting from ancestors.
          # @!attribute [rw] project_service_account
          #   @return [String]
          #     Output only. The service account to be used for security center component.
          #     The component must have permission to "act as" the service account.
          # @!attribute [rw] detector_settings
          #   @return [Hash{String => Google::Cloud::Securitycenter::Settings::V1beta1::ComponentSettings::DetectorSettings}]
          #     Settings for detectors.  Not all detectors must have settings present at
          #     each and every level in the hierarchy.  If it is not present the setting
          #     will be inherited from its ancestors folders, organizations or the
          #     defaults.
          # @!attribute [rw] etag
          #   @return [String]
          #     Output only. An fingerprint used for optimistic concurrency. If none is provided
          #     on updates then the existing metadata will be blindly overwritten.
          # @!attribute [rw] update_time
          #   @return [Google::Protobuf::Timestamp]
          #     Output only. The time these settings were last updated.
          # @!attribute [rw] container_threat_detection_settings
          #   @return [Google::Cloud::Securitycenter::Settings::V1beta1::ContainerThreatDetectionSettings]
          #     Container Threate Detection specific settings
          #     For component, expect CONTAINER_THREAT_DETECTION
          # @!attribute [rw] event_threat_detection_settings
          #   @return [Google::Cloud::Securitycenter::Settings::V1beta1::EventThreatDetectionSettings]
          #     Event Threat Detection specific settings
          #     For component, expect EVENT_THREAT_DETECTION
          # @!attribute [rw] security_health_analytics_settings
          #   @return [Google::Cloud::Securitycenter::Settings::V1beta1::SecurityHealthAnalyticsSettings]
          #     Security Health Analytics specific settings
          #     For component, expect SECURITY_HEALTH_ANALYTICS
          # @!attribute [rw] web_security_scanner_settings
          #   @return [Google::Cloud::Securitycenter::Settings::V1beta1::WebSecurityScanner]
          #     Web Security Scanner specific settings
          #     For component, expect WEB_SECURITY_SCANNER
          class ComponentSettings
            # Settings for each detector.
            # @!attribute [rw] state
            #   @return [Google::Cloud::Securitycenter::Settings::V1beta1::ComponentEnablementState]
            #     ENABLE to enable component, DISABLE to disable and INHERIT to inherit
            #     setting from ancestors.
            class DetectorSettings; end
          end

          # User specified settings for Web Security Scanner
          class WebSecurityScanner; end

          # User specified settings for KTD
          class ContainerThreatDetectionSettings; end

          # User specified settings for ETD
          class EventThreatDetectionSettings; end

          # User specified settings for Security Health Analytics
          # @!attribute [rw] non_org_iam_member_settings
          #   @return [Google::Cloud::Securitycenter::Settings::V1beta1::SecurityHealthAnalyticsSettings::NonOrgIamMemberSettings]
          #     Settings for "NON_ORG_IAM_MEMBER" scanner.
          # @!attribute [rw] admin_service_account_settings
          #   @return [Google::Cloud::Securitycenter::Settings::V1beta1::SecurityHealthAnalyticsSettings::AdminServiceAccountSettings]
          #     Settings for "ADMIN_SERVICE_ACCOUNT" scanner.
          class SecurityHealthAnalyticsSettings
            # Settings for "NON_ORG_IAM_MEMBER" scanner.
            # @!attribute [rw] approved_identities
            #   @return [Array<String>]
            #     User emails ending in the provided identities are allowed to have IAM
            #     permissions on a project or the organization. Otherwise a finding will
            #     be created.
            #     A valid identity can be:
            #     * a domain that starts with "@", e.g. "@yourdomain.com".
            #       * a fully specified email address that does not start with "@", e.g.
            #         "abc@gmail.com"
            #         Regular expressions are not supported.
            #         Service accounts are not examined by the scanner and will be omitted if
            #         added to the list.
            #         If not specified, only Gmail accounts will be considered as non-approved.
            class NonOrgIamMemberSettings; end

            # Settings for "ADMIN_SERVICE_ACCOUNT" scanner.
            # @!attribute [rw] approved_identities
            #   @return [Array<String>]
            #     User-created service accounts ending in the provided identities are
            #     allowed to have Admin, Owner or Editor roles granted to them. Otherwise
            #     a finding will be created.
            #     A valid identity can be:
            #     * a partilly specified service account that starts with "@", e.g.
            #       "@myproject.iam.gserviceaccount.com". This approves all the service
            #       accounts suffixed with the specified identity.
            #       * a fully specified service account that does not start with "@", e.g.
            #         "myadmin@myproject.iam.gserviceaccount.com".
            #         Google-created service accounts are all approved.
            class AdminServiceAccountSettings; end
          end

          # Valid states for a component
          module ComponentEnablementState
            # No state specified, equivalent of INHERIT
            COMPONENT_ENABLEMENT_STATE_UNSPECIFIED = 0

            # Disable the component
            DISABLE = 1

            # Enable the component
            ENABLE = 2

            # Inherit the state from resources parent folder or organization.
            INHERIT = 3
          end
        end
      end
    end
  end
end