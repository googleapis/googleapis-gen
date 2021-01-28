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
    module Osconfig
      module Agentendpoint
        module V1beta
          # Patch configuration specifications. Contains details on how to
          # apply patches to a VM instance.
          # @!attribute [rw] reboot_config
          #   @return [Google::Cloud::Osconfig::Agentendpoint::V1beta::PatchConfig::RebootConfig]
          #     Post-patch reboot settings.
          # @!attribute [rw] retry_strategy
          #   @return [Google::Cloud::Osconfig::Agentendpoint::V1beta::RetryStrategy]
          #     Retry strategy can be defined to have the agent retry patching
          #     during the window if patching fails. If omitted, the agent will use its
          #     default retry strategy.
          # @!attribute [rw] apt
          #   @return [Google::Cloud::Osconfig::Agentendpoint::V1beta::AptSettings]
          #     Apt update settings. Use this override the default apt patch rules.
          # @!attribute [rw] yum
          #   @return [Google::Cloud::Osconfig::Agentendpoint::V1beta::YumSettings]
          #     Yum update settings. Use this override the default yum patch rules.
          # @!attribute [rw] goo
          #   @return [Google::Cloud::Osconfig::Agentendpoint::V1beta::GooSettings]
          #     Goo update settings. Use this override the default goo patch rules.
          # @!attribute [rw] zypper
          #   @return [Google::Cloud::Osconfig::Agentendpoint::V1beta::ZypperSettings]
          #     Zypper update settings. Use this override the default zypper patch rules.
          # @!attribute [rw] windows_update
          #   @return [Google::Cloud::Osconfig::Agentendpoint::V1beta::WindowsUpdateSettings]
          #     Windows update settings. Use this override the default windows patch rules.
          # @!attribute [rw] pre_step
          #   @return [Google::Cloud::Osconfig::Agentendpoint::V1beta::ExecStep]
          #     The ExecStep to run before the patch update.
          # @!attribute [rw] post_step
          #   @return [Google::Cloud::Osconfig::Agentendpoint::V1beta::ExecStep]
          #     The ExecStep to run after the patch update.
          class PatchConfig
            # Post-patch reboot settings.
            module RebootConfig
              # The default behavior is DEFAULT.
              REBOOT_CONFIG_UNSPECIFIED = 0

              # The agent decides if a reboot is necessary by checking
              # signals such as registry keys on Windows or `/var/run/reboot-required` on
              # APT based systems. On RPM based systems, a set of core system package
              # install times are compared with system boot time.
              DEFAULT = 1

              # Always reboot the machine after the update completes.
              ALWAYS = 2

              # Never reboot the machine after the update completes.
              NEVER = 3
            end
          end

          # Apt patching will be performed by executing `apt-get update && apt-get
          # upgrade`. Additional options can be set to control how this is executed.
          # @!attribute [rw] type
          #   @return [Google::Cloud::Osconfig::Agentendpoint::V1beta::AptSettings::Type]
          #     By changing the type to DIST, the patching will be performed
          #     using `apt-get dist-upgrade` instead.
          # @!attribute [rw] excludes
          #   @return [Array<String>]
          #     List of packages to exclude from update.
          # @!attribute [rw] exclusive_packages
          #   @return [Array<String>]
          #     An exclusive list of packages to be updated. These are the only packages
          #     that will be updated. If these packages are not installed, they will be
          #     ignored. This field cannot be specified with any other patch configuration
          #     fields.
          class AptSettings
            # Apt patch type.
            module Type
              # By default, upgrade will be performed.
              TYPE_UNSPECIFIED = 0

              # Runs `apt-get dist-upgrade`.
              DIST = 1

              # Runs `apt-get upgrade`.
              UPGRADE = 2
            end
          end

          # Yum patching will be performed by executing `yum update`. Additional options
          # can be set to control how this is executed.
          #
          # Note that not all settings are supported on all platforms.
          # @!attribute [rw] security
          #   @return [true, false]
          #     Adds the `--security` flag to `yum update`. Not supported on
          #     all platforms.
          # @!attribute [rw] minimal
          #   @return [true, false]
          #     Will cause patch to run `yum update-minimal` instead.
          # @!attribute [rw] excludes
          #   @return [Array<String>]
          #     List of packages to exclude from update. These packages will be excluded by
          #     using the yum `--exclude` flag.
          # @!attribute [rw] exclusive_packages
          #   @return [Array<String>]
          #     An exclusive list of packages to be updated. These are the only packages
          #     that will be updated. If these packages are not installed, they will be
          #     ignored. This field must not be specified with any other patch
          #     configuration fields.
          class YumSettings; end

          # Googet patching is performed by running `googet update`.
          class GooSettings; end

          # Zypper patching is performed by running `zypper patch`.
          # See also https://en.opensuse.org/SDB:Zypper_manual.
          # @!attribute [rw] with_optional
          #   @return [true, false]
          #     Adds the `--with-optional` flag to `zypper patch`.
          # @!attribute [rw] with_update
          #   @return [true, false]
          #     Adds the `--with-update` flag, to `zypper patch`.
          # @!attribute [rw] categories
          #   @return [Array<String>]
          #     Install only patches with these categories.
          #     Common categories include security, recommended, and feature.
          # @!attribute [rw] severities
          #   @return [Array<String>]
          #     Install only patches with these severities.
          #     Common severities include critical, important, moderate, and low.
          # @!attribute [rw] excludes
          #   @return [Array<String>]
          #     List of patches to exclude from update.
          # @!attribute [rw] exclusive_patches
          #   @return [Array<String>]
          #     An exclusive list of patches to be updated. These are the only patches
          #     that will be installed using 'zypper patch patch:<patch_name>' command.
          #     This field must not be used with any other patch configuration fields.
          class ZypperSettings; end

          # Windows patching is performed using the Windows Update Agent.
          # @!attribute [rw] classifications
          #   @return [Array<Google::Cloud::Osconfig::Agentendpoint::V1beta::WindowsUpdateSettings::Classification>]
          #     Only apply updates of these windows update classifications. If empty, all
          #     updates will be applied.
          # @!attribute [rw] excludes
          #   @return [Array<String>]
          #     List of KBs to exclude from update.
          # @!attribute [rw] exclusive_patches
          #   @return [Array<String>]
          #     An exclusive list of kbs to be updated. These are the only patches
          #     that will be updated. This field must not be used with other
          #     patch configurations.
          class WindowsUpdateSettings
            # Microsoft Windows update classifications as defined in
            # [1]
            # https://support.microsoft.com/en-us/help/824684/description-of-the-standard-terminology-that-is-used-to-describe-micro
            module Classification
              # Invalid. If classifications are included, they must be specified.
              CLASSIFICATION_UNSPECIFIED = 0

              # "A widely released fix for a specific problem that addresses a critical,
              # non-security-related bug." [1]
              CRITICAL = 1

              # "A widely released fix for a product-specific, security-related
              # vulnerability. Security vulnerabilities are rated by their severity. The
              # severity rating is indicated in the Microsoft security bulletin as
              # critical, important, moderate, or low." [1]
              SECURITY = 2

              # "A widely released and frequent software update that contains additions
              # to a product’s definition database. Definition databases are often used
              # to detect objects that have specific attributes, such as malicious code,
              # phishing websites, or junk mail." [1]
              DEFINITION = 3

              # "Software that controls the input and output of a device." [1]
              DRIVER = 4

              # "New product functionality that is first distributed outside the context
              # of a product release and that is typically included in the next full
              # product release." [1]
              FEATURE_PACK = 5

              # "A tested, cumulative set of all hotfixes, security updates, critical
              # updates, and updates. Additionally, service packs may contain additional
              # fixes for problems that are found internally since the release of the
              # product. Service packs my also contain a limited number of
              # customer-requested design changes or features." [1]
              SERVICE_PACK = 6

              # "A utility or feature that helps complete a task or set of tasks." [1]
              TOOL = 7

              # "A tested, cumulative set of hotfixes, security updates, critical
              # updates, and updates that are packaged together for easy deployment. A
              # rollup generally targets a specific area, such as security, or a
              # component of a product, such as Internet Information Services (IIS)." [1]
              UPDATE_ROLLUP = 8

              # "A widely released fix for a specific problem. An update addresses a
              # noncritical, non-security-related bug." [1]
              UPDATE = 9
            end
          end

          # The strategy for retrying failed patches during the patch window.
          # @!attribute [rw] enabled
          #   @return [true, false]
          #     If true, the agent will continue to try and patch until the window has
          #     ended.
          class RetryStrategy; end

          # A step that runs an executable for a PatchJob.
          # @!attribute [rw] linux_exec_step_config
          #   @return [Google::Cloud::Osconfig::Agentendpoint::V1beta::ExecStepConfig]
          #     The ExecStepConfig for all Linux VMs targeted by the PatchJob.
          # @!attribute [rw] windows_exec_step_config
          #   @return [Google::Cloud::Osconfig::Agentendpoint::V1beta::ExecStepConfig]
          #     The ExecStepConfig for all Windows VMs targeted by the PatchJob.
          class ExecStep; end

          # Common configurations for an ExecStep.
          # @!attribute [rw] local_path
          #   @return [String]
          #     An absolute path to the executable on the VM.
          # @!attribute [rw] gcs_object
          #   @return [Google::Cloud::Osconfig::Agentendpoint::V1beta::GcsObject]
          #     A GCS object containing the executable.
          # @!attribute [rw] allowed_success_codes
          #   @return [Array<Integer>]
          #     Defaults to [0]. A list of possible return values that the
          #     execution can return to indicate a success.
          # @!attribute [rw] interpreter
          #   @return [Google::Cloud::Osconfig::Agentendpoint::V1beta::ExecStepConfig::Interpreter]
          #     The script interpreter to use to run the script. If no interpreter is
          #     specified the script will be executed directly, which will likely
          #     only succeed for scripts with shebang lines.
          #     [Wikipedia shebang](https://en.wikipedia.org/wiki/Shebang_(Unix)).
          class ExecStepConfig
            # The interpreter used to execute the a file.
            module Interpreter
              # Invalid for a Windows ExecStepConfig. For a Linux ExecStepConfig, the
              # interpreter will be parsed from the shebang line of the script if
              # unspecified.
              INTERPRETER_UNSPECIFIED = 0

              # Indicates that the script will be run with /bin/sh on Linux and cmd
              # on windows.
              SHELL = 1

              # Indicates that the file will be run with PowerShell.
              POWERSHELL = 2
            end
          end

          # GCS object representation.
          # @!attribute [rw] bucket
          #   @return [String]
          #     Bucket of the GCS object.
          # @!attribute [rw] object
          #   @return [String]
          #     Name of the GCS object.
          # @!attribute [rw] generation_number
          #   @return [Integer]
          #     Generation number of the GCS object. This is used to ensure that the
          #     ExecStep specified by this PatchJob does not change.
          class GcsObject; end
        end
      end
    end
  end
end