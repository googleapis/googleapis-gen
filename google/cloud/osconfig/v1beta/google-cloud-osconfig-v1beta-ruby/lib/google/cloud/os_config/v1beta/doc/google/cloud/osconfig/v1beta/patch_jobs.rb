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
      module V1beta
        # A request message to initiate patching across Google Compute Engine
        # instances.
        # @!attribute [rw] parent
        #   @return [String]
        #     Required. The project in which to run this patch in the form `projects/*`
        # @!attribute [rw] description
        #   @return [String]
        #     Description of the patch job. Length of the description is limited
        #     to 1024 characters.
        # @!attribute [rw] instance_filter
        #   @return [Google::Cloud::Osconfig::V1beta::PatchInstanceFilter]
        #     Required. Instances to patch, either explicitly or filtered by some criteria such
        #     as zone or labels.
        # @!attribute [rw] patch_config
        #   @return [Google::Cloud::Osconfig::V1beta::PatchConfig]
        #     Patch configuration being applied. If omitted, instances are
        #     patched using the default configurations.
        # @!attribute [rw] duration
        #   @return [Google::Protobuf::Duration]
        #     Duration of the patch job. After the duration ends, the patch job
        #     times out.
        # @!attribute [rw] dry_run
        #   @return [true, false]
        #     If this patch is a dry-run only, instances are contacted but
        #     will do nothing.
        # @!attribute [rw] display_name
        #   @return [String]
        #     Display name for this patch job. This does not have to be unique.
        class ExecutePatchJobRequest; end

        # Request to get an active or completed patch job.
        # @!attribute [rw] name
        #   @return [String]
        #     Required. Name of the patch in the form `projects/*/patchJobs/*`
        class GetPatchJobRequest; end

        # Request to list details for all instances that are part of a patch job.
        # @!attribute [rw] parent
        #   @return [String]
        #     Required. The parent for the instances are in the form of `projects/*/patchJobs/*`.
        # @!attribute [rw] page_size
        #   @return [Integer]
        #     The maximum number of instance details records to return.  Default is 100.
        # @!attribute [rw] page_token
        #   @return [String]
        #     A pagination token returned from a previous call
        #     that indicates where this listing should continue from.
        # @!attribute [rw] filter
        #   @return [String]
        #     A filter expression that filters results listed in the response. This
        #     field supports filtering results by instance zone, name, state, or
        #     `failure_reason`.
        class ListPatchJobInstanceDetailsRequest; end

        # A response message for listing the instances details for a patch job.
        # @!attribute [rw] patch_job_instance_details
        #   @return [Array<Google::Cloud::Osconfig::V1beta::PatchJobInstanceDetails>]
        #     A list of instance status.
        # @!attribute [rw] next_page_token
        #   @return [String]
        #     A pagination token that can be used to get the next page of results.
        class ListPatchJobInstanceDetailsResponse; end

        # Patch details for a VM instance. For more information about reviewing VM
        # instance details, see
        # [Listing all VM instance details for a specific patch
        # job](/compute/docs/os-patch-management/manage-patch-jobs#list-instance-details).
        # @!attribute [rw] name
        #   @return [String]
        #     The instance name in the form `projects/*/zones/*/instances/*`
        # @!attribute [rw] instance_system_id
        #   @return [String]
        #     The unique identifier for the instance. This identifier is
        #     defined by the server.
        # @!attribute [rw] state
        #   @return [Google::Cloud::Osconfig::V1beta::Instance::PatchState]
        #     Current state of instance patch.
        # @!attribute [rw] failure_reason
        #   @return [String]
        #     If the patch fails, this field provides the reason.
        # @!attribute [rw] attempt_count
        #   @return [Integer]
        #     The number of times the agent that the agent attempts to apply the patch.
        class PatchJobInstanceDetails; end

        # A request message for listing patch jobs.
        # @!attribute [rw] parent
        #   @return [String]
        #     Required. In the form of `projects/*`
        # @!attribute [rw] page_size
        #   @return [Integer]
        #     The maximum number of instance status to return.
        # @!attribute [rw] page_token
        #   @return [String]
        #     A pagination token returned from a previous call
        #     that indicates where this listing should continue from.
        # @!attribute [rw] filter
        #   @return [String]
        #     If provided, this field specifies the criteria that must be met by patch
        #     jobs to be included in the response.
        #     Currently, filtering is only available on the patch_deployment field.
        class ListPatchJobsRequest; end

        # A response message for listing patch jobs.
        # @!attribute [rw] patch_jobs
        #   @return [Array<Google::Cloud::Osconfig::V1beta::PatchJob>]
        #     The list of patch jobs.
        # @!attribute [rw] next_page_token
        #   @return [String]
        #     A pagination token that can be used to get the next page of results.
        class ListPatchJobsResponse; end

        # A high level representation of a patch job that is either in progress
        # or has completed.
        #
        # Instances details are not included in the job. To paginate through instance
        # details, use ListPatchJobInstanceDetails.
        #
        # For more information about patch jobs, see
        # [Creating patch jobs](https://cloud.google.com/compute/docs/os-patch-management/create-patch-job).
        # @!attribute [rw] name
        #   @return [String]
        #     Unique identifier for this patch job in the form
        #     `projects/*/patchJobs/*`
        # @!attribute [rw] display_name
        #   @return [String]
        #     Display name for this patch job. This is not a unique identifier.
        # @!attribute [rw] description
        #   @return [String]
        #     Description of the patch job. Length of the description is limited
        #     to 1024 characters.
        # @!attribute [rw] create_time
        #   @return [Google::Protobuf::Timestamp]
        #     Time this patch job was created.
        # @!attribute [rw] update_time
        #   @return [Google::Protobuf::Timestamp]
        #     Last time this patch job was updated.
        # @!attribute [rw] state
        #   @return [Google::Cloud::Osconfig::V1beta::PatchJob::State]
        #     The current state of the PatchJob .
        # @!attribute [rw] instance_filter
        #   @return [Google::Cloud::Osconfig::V1beta::PatchInstanceFilter]
        #     Instances to patch.
        # @!attribute [rw] patch_config
        #   @return [Google::Cloud::Osconfig::V1beta::PatchConfig]
        #     Patch configuration being applied.
        # @!attribute [rw] duration
        #   @return [Google::Protobuf::Duration]
        #     Duration of the patch job. After the duration ends, the
        #     patch job times out.
        # @!attribute [rw] instance_details_summary
        #   @return [Google::Cloud::Osconfig::V1beta::PatchJob::InstanceDetailsSummary]
        #     Summary of instance details.
        # @!attribute [rw] dry_run
        #   @return [true, false]
        #     If this patch job is a dry run, the agent reports that it has
        #     finished without running any updates on the VM instance.
        # @!attribute [rw] error_message
        #   @return [String]
        #     If this patch job failed, this message provides information about the
        #     failure.
        # @!attribute [rw] percent_complete
        #   @return [Float]
        #     Reflects the overall progress of the patch job in the range of
        #     0.0 being no progress to 100.0 being complete.
        # @!attribute [rw] patch_deployment
        #   @return [String]
        #     Output only. Name of the patch deployment that created this patch job.
        class PatchJob
          # A summary of the current patch state across all instances that this patch
          # job affects. Contains counts of instances in different states. These states
          # map to `InstancePatchState`. List patch job instance details to see the
          # specific states of each instance.
          # @!attribute [rw] pending_instance_count
          #   @return [Integer]
          #     Number of instances pending patch job.
          # @!attribute [rw] inactive_instance_count
          #   @return [Integer]
          #     Number of instances that are inactive.
          # @!attribute [rw] notified_instance_count
          #   @return [Integer]
          #     Number of instances notified about patch job.
          # @!attribute [rw] started_instance_count
          #   @return [Integer]
          #     Number of instances that have started.
          # @!attribute [rw] downloading_patches_instance_count
          #   @return [Integer]
          #     Number of instances that are downloading patches.
          # @!attribute [rw] applying_patches_instance_count
          #   @return [Integer]
          #     Number of instances that are applying patches.
          # @!attribute [rw] rebooting_instance_count
          #   @return [Integer]
          #     Number of instances rebooting.
          # @!attribute [rw] succeeded_instance_count
          #   @return [Integer]
          #     Number of instances that have completed successfully.
          # @!attribute [rw] succeeded_reboot_required_instance_count
          #   @return [Integer]
          #     Number of instances that require reboot.
          # @!attribute [rw] failed_instance_count
          #   @return [Integer]
          #     Number of instances that failed.
          # @!attribute [rw] acked_instance_count
          #   @return [Integer]
          #     Number of instances that have acked and will start shortly.
          # @!attribute [rw] timed_out_instance_count
          #   @return [Integer]
          #     Number of instances that exceeded the time out while applying the patch.
          # @!attribute [rw] pre_patch_step_instance_count
          #   @return [Integer]
          #     Number of instances that are running the pre-patch step.
          # @!attribute [rw] post_patch_step_instance_count
          #   @return [Integer]
          #     Number of instances that are running the post-patch step.
          # @!attribute [rw] no_agent_detected_instance_count
          #   @return [Integer]
          #     Number of instances that do not appear to be running the agent. Check to
          #     ensure that the agent is installed, running, and able to communicate with
          #     the service.
          class InstanceDetailsSummary; end

          # Enumeration of the various states a patch job passes through as it
          # executes.
          module State
            # State must be specified.
            STATE_UNSPECIFIED = 0

            # The patch job was successfully initiated.
            STARTED = 1

            # The patch job is looking up instances to run the patch on.
            INSTANCE_LOOKUP = 2

            # Instances are being patched.
            PATCHING = 3

            # Patch job completed successfully.
            SUCCEEDED = 4

            # Patch job completed but there were errors.
            COMPLETED_WITH_ERRORS = 5

            # The patch job was canceled.
            CANCELED = 6

            # The patch job timed out.
            TIMED_OUT = 7
          end
        end

        # Patch configuration specifications. Contains details on how to apply the
        # patch(es) to a VM instance.
        # @!attribute [rw] reboot_config
        #   @return [Google::Cloud::Osconfig::V1beta::PatchConfig::RebootConfig]
        #     Post-patch reboot settings.
        # @!attribute [rw] apt
        #   @return [Google::Cloud::Osconfig::V1beta::AptSettings]
        #     Apt update settings. Use this setting to override the default `apt` patch
        #     rules.
        # @!attribute [rw] yum
        #   @return [Google::Cloud::Osconfig::V1beta::YumSettings]
        #     Yum update settings. Use this setting to override the default `yum` patch
        #     rules.
        # @!attribute [rw] goo
        #   @return [Google::Cloud::Osconfig::V1beta::GooSettings]
        #     Goo update settings. Use this setting to override the default `goo` patch
        #     rules.
        # @!attribute [rw] zypper
        #   @return [Google::Cloud::Osconfig::V1beta::ZypperSettings]
        #     Zypper update settings. Use this setting to override the default `zypper`
        #     patch rules.
        # @!attribute [rw] windows_update
        #   @return [Google::Cloud::Osconfig::V1beta::WindowsUpdateSettings]
        #     Windows update settings. Use this override the default windows patch rules.
        # @!attribute [rw] pre_step
        #   @return [Google::Cloud::Osconfig::V1beta::ExecStep]
        #     The `ExecStep` to run before the patch update.
        # @!attribute [rw] post_step
        #   @return [Google::Cloud::Osconfig::V1beta::ExecStep]
        #     The `ExecStep` to run after the patch update.
        class PatchConfig
          # Post-patch reboot settings.
          module RebootConfig
            # The default behavior is DEFAULT.
            REBOOT_CONFIG_UNSPECIFIED = 0

            # The agent decides if a reboot is necessary by checking signals such as
            # registry keys on Windows or `/var/run/reboot-required` on APT based
            # systems. On RPM based systems, a set of core system package install times
            # are compared with system boot time.
            DEFAULT = 1

            # Always reboot the machine after the update completes.
            ALWAYS = 2

            # Never reboot the machine after the update completes.
            NEVER = 3
          end
        end

        # Namespace for instance state enums.
        class Instance
          # Patch state of an instance.
          module PatchState
            # Unspecified.
            PATCH_STATE_UNSPECIFIED = 0

            # The instance is not yet notified.
            PENDING = 1

            # Instance is inactive and cannot be patched.
            INACTIVE = 2

            # The instance is notified that it should be patched.
            NOTIFIED = 3

            # The instance has started the patching process.
            STARTED = 4

            # The instance is downloading patches.
            DOWNLOADING_PATCHES = 5

            # The instance is applying patches.
            APPLYING_PATCHES = 6

            # The instance is rebooting.
            REBOOTING = 7

            # The instance has completed applying patches.
            SUCCEEDED = 8

            # The instance has completed applying patches but a reboot is required.
            SUCCEEDED_REBOOT_REQUIRED = 9

            # The instance has failed to apply the patch.
            FAILED = 10

            # The instance acked the notification and will start shortly.
            ACKED = 11

            # The instance exceeded the time out while applying the patch.
            TIMED_OUT = 12

            # The instance is running the pre-patch step.
            RUNNING_PRE_PATCH_STEP = 13

            # The instance is running the post-patch step.
            RUNNING_POST_PATCH_STEP = 14

            # The service could not detect the presence of the agent. Check to ensure
            # that the agent is installed, running, and able to communicate with the
            # service.
            NO_AGENT_DETECTED = 15
          end
        end

        # Message for canceling a patch job.
        # @!attribute [rw] name
        #   @return [String]
        #     Required. Name of the patch in the form `projects/*/patchJobs/*`
        class CancelPatchJobRequest; end

        # Apt patching is completed by executing `apt-get update && apt-get
        # upgrade`. Additional options can be set to control how this is executed.
        # @!attribute [rw] type
        #   @return [Google::Cloud::Osconfig::V1beta::AptSettings::Type]
        #     By changing the type to DIST, the patching is performed
        #     using `apt-get dist-upgrade` instead.
        # @!attribute [rw] excludes
        #   @return [Array<String>]
        #     List of packages to exclude from update. These packages will be excluded
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

        # Yum patching is performed by executing `yum update`. Additional options
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
        #     List of packages to exclude from update. These packages are excluded by
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
        #   @return [Array<Google::Cloud::Osconfig::V1beta::WindowsUpdateSettings::Classification>]
        #     Only apply updates of these windows update classifications. If empty, all
        #     updates are applied.
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
            # to a product's definition database. Definition databases are often used
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

        # A step that runs an executable for a PatchJob.
        # @!attribute [rw] linux_exec_step_config
        #   @return [Google::Cloud::Osconfig::V1beta::ExecStepConfig]
        #     The ExecStepConfig for all Linux VMs targeted by the PatchJob.
        # @!attribute [rw] windows_exec_step_config
        #   @return [Google::Cloud::Osconfig::V1beta::ExecStepConfig]
        #     The ExecStepConfig for all Windows VMs targeted by the PatchJob.
        class ExecStep; end

        # Common configurations for an ExecStep.
        # @!attribute [rw] local_path
        #   @return [String]
        #     An absolute path to the executable on the VM.
        # @!attribute [rw] gcs_object
        #   @return [Google::Cloud::Osconfig::V1beta::GcsObject]
        #     A Google Cloud Storage object containing the executable.
        # @!attribute [rw] allowed_success_codes
        #   @return [Array<Integer>]
        #     Defaults to [0]. A list of possible return values that the
        #     execution can return to indicate a success.
        # @!attribute [rw] interpreter
        #   @return [Google::Cloud::Osconfig::V1beta::ExecStepConfig::Interpreter]
        #     The script interpreter to use to run the script. If no interpreter is
        #     specified the script will be executed directly, which will likely
        #     only succeed for scripts with [shebang lines]
        #     (https://en.wikipedia.org/wiki/Shebang_\(Unix\)).
        class ExecStepConfig
          # The interpreter used to execute the a file.
          module Interpreter
            # Invalid for a Windows ExecStepConfig. For a Linux ExecStepConfig, the
            # interpreter will be parsed from the shebang line of the script if
            # unspecified.
            INTERPRETER_UNSPECIFIED = 0

            # Indicates that the script is run with `/bin/sh` on Linux and `cmd`
            # on Windows.
            SHELL = 1

            # Indicates that the file is run with PowerShell flags
            # `-NonInteractive`, `-NoProfile`, and `-ExecutionPolicy Bypass`.
            POWERSHELL = 2
          end
        end

        # Google Cloud Storage object representation.
        # @!attribute [rw] bucket
        #   @return [String]
        #     Required. Bucket of the Google Cloud Storage object.
        # @!attribute [rw] object
        #   @return [String]
        #     Required. Name of the Google Cloud Storage object.
        # @!attribute [rw] generation_number
        #   @return [Integer]
        #     Required. Generation number of the Google Cloud Storage object. This is used to
        #     ensure that the ExecStep specified by this PatchJob does not change.
        class GcsObject; end

        # A filter to target VM instances for patching. The targeted
        # VMs must meet all criteria specified. So if both labels and zones are
        # specified, the patch job targets only VMs with those labels and in those
        # zones.
        # @!attribute [rw] all
        #   @return [true, false]
        #     Target all VM instances in the project. If true, no other criteria is
        #     permitted.
        # @!attribute [rw] group_labels
        #   @return [Array<Google::Cloud::Osconfig::V1beta::PatchInstanceFilter::GroupLabel>]
        #     Targets VM instances matching at least one of these label sets. This allows
        #     targeting of disparate groups, for example "env=prod or env=staging".
        # @!attribute [rw] zones
        #   @return [Array<String>]
        #     Targets VM instances in ANY of these zones. Leave empty to target VM
        #     instances in any zone.
        # @!attribute [rw] instances
        #   @return [Array<String>]
        #     Targets any of the VM instances specified. Instances are specified by their
        #     URI in the form `zones/[ZONE]/instances/[INSTANCE_NAME]`,
        #     `projects/[PROJECT_ID]/zones/[ZONE]/instances/[INSTANCE_NAME]`, or
        #     `https://www.googleapis.com/compute/v1/projects/[PROJECT_ID]/zones/[ZONE]/instances/[INSTANCE_NAME]`
        # @!attribute [rw] instance_name_prefixes
        #   @return [Array<String>]
        #     Targets VMs whose name starts with one of these prefixes. Similar to
        #     labels, this is another way to group VMs when targeting configs, for
        #     example prefix="prod-".
        class PatchInstanceFilter
          # Represents a group of VMs that can be identified as having all these
          # labels, for example "env=prod and app=web".
          # @!attribute [rw] labels
          #   @return [Hash{String => String}]
          #     Google Compute Engine instance labels that must be present for a VM
          #     instance to be targeted by this filter.
          class GroupLabel; end
        end
      end
    end
  end
end