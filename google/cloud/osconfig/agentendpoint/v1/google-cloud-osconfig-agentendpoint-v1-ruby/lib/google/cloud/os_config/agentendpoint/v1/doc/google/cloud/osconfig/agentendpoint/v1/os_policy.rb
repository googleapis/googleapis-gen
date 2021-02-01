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
        module V1
          # An OS policy defines the desired state configuration for an instance.
          class OSPolicy
            # An OS policy resource is used to define the desired state configuration
            # and provides a specific functionality like installing/removing packages,
            # executing a script etc.
            #
            # The system ensures that resources are always in their desired state by
            # taking necessary actions if they have drifted from their desired state.
            # @!attribute [rw] id
            #   @return [String]
            #     Required. The id of the resource with the following restrictions:
            #
            #     * Must contain only lowercase letters, numbers, and hyphens.
            #     * Must start with a letter.
            #     * Must be between 1-63 characters.
            #     * Must end with a number or a letter.
            #     * Must be unique within the OS policy.
            # @!attribute [rw] pkg
            #   @return [Google::Cloud::Osconfig::Agentendpoint::V1::OSPolicy::Resource::PackageResource]
            #     Package resource
            # @!attribute [rw] repository
            #   @return [Google::Cloud::Osconfig::Agentendpoint::V1::OSPolicy::Resource::RepositoryResource]
            #     Package repository resource
            # @!attribute [rw] exec
            #   @return [Google::Cloud::Osconfig::Agentendpoint::V1::OSPolicy::Resource::ExecResource]
            #     Exec resource
            # @!attribute [rw] file
            #   @return [Google::Cloud::Osconfig::Agentendpoint::V1::OSPolicy::Resource::FileResource]
            #     File resource
            class Resource
              # A remote or local file.
              # @!attribute [rw] remote
              #   @return [Google::Cloud::Osconfig::Agentendpoint::V1::OSPolicy::Resource::File::Remote]
              #     A generic remote file.
              # @!attribute [rw] gcs
              #   @return [Google::Cloud::Osconfig::Agentendpoint::V1::OSPolicy::Resource::File::Gcs]
              #     A Cloud Storage object.
              # @!attribute [rw] local_path
              #   @return [String]
              #     A local path to use.
              # @!attribute [rw] allow_insecure
              #   @return [true, false]
              #     Defaults to false. When false, files are subject to validations
              #     based on the file type:
              #
              #     Remote: A checksum must be specified.
              #     Cloud Storage: An object generation number must be specified.
              class File
                # Specifies a file available via some URI.
                # @!attribute [rw] uri
                #   @return [String]
                #     Required. URI from which to fetch the object. It should contain both the
                #     protocol and path following the format `{protocol}://{location}`.
                # @!attribute [rw] sha256_checksum
                #   @return [String]
                #     SHA256 checksum of the remote file.
                class Remote; end

                # Specifies a file available as a Cloud Storage Object.
                # @!attribute [rw] bucket
                #   @return [String]
                #     Required. Bucket of the Cloud Storage object.
                # @!attribute [rw] object
                #   @return [String]
                #     Required. Name of the Cloud Storage object.
                # @!attribute [rw] generation
                #   @return [Integer]
                #     Generation number of the Cloud Storage object.
                class Gcs; end
              end

              # A resource that manages a system package.
              # @!attribute [rw] desired_state
              #   @return [Google::Cloud::Osconfig::Agentendpoint::V1::OSPolicy::Resource::PackageResource::DesiredState]
              #     Required. The desired state the agent should maintain for this package. The
              #     default is to ensure the package is installed.
              # @!attribute [rw] apt
              #   @return [Google::Cloud::Osconfig::Agentendpoint::V1::OSPolicy::Resource::PackageResource::APT]
              #     A package managed by Apt.
              # @!attribute [rw] deb
              #   @return [Google::Cloud::Osconfig::Agentendpoint::V1::OSPolicy::Resource::PackageResource::Deb]
              #     A deb package file.
              # @!attribute [rw] yum
              #   @return [Google::Cloud::Osconfig::Agentendpoint::V1::OSPolicy::Resource::PackageResource::YUM]
              #     A package managed by YUM.
              # @!attribute [rw] zypper
              #   @return [Google::Cloud::Osconfig::Agentendpoint::V1::OSPolicy::Resource::PackageResource::Zypper]
              #     A package managed by Zypper.
              # @!attribute [rw] rpm
              #   @return [Google::Cloud::Osconfig::Agentendpoint::V1::OSPolicy::Resource::PackageResource::RPM]
              #     An rpm package file.
              # @!attribute [rw] googet
              #   @return [Google::Cloud::Osconfig::Agentendpoint::V1::OSPolicy::Resource::PackageResource::GooGet]
              #     A package managed by GooGet.
              # @!attribute [rw] msi
              #   @return [Google::Cloud::Osconfig::Agentendpoint::V1::OSPolicy::Resource::PackageResource::MSI]
              #     An MSI package.
              class PackageResource
                # A deb package file. dpkg packages only support INSTALLED state.
                # @!attribute [rw] source
                #   @return [Google::Cloud::Osconfig::Agentendpoint::V1::OSPolicy::Resource::File]
                #     Required. A deb package.
                # @!attribute [rw] pull_deps
                #   @return [true, false]
                #     Whether dependencies should also be installed.
                #     install when false: `dpkg -i package`
                #     install when true: `apt-get update && apt-get -y install
                #     package.deb`
                class Deb; end

                # A package managed by APT.
                # install: `apt-get update && apt-get -y install [name]`
                # remove: `apt-get -y remove [name]`
                # @!attribute [rw] name
                #   @return [String]
                #     Required. Package name.
                class APT; end

                # An RPM package file. RPM packages only support INSTALLED state.
                # @!attribute [rw] source
                #   @return [Google::Cloud::Osconfig::Agentendpoint::V1::OSPolicy::Resource::File]
                #     Required. An rpm package.
                # @!attribute [rw] pull_deps
                #   @return [true, false]
                #     Whether dependencies should also be installed.
                #     install when false: `rpm --upgrade --replacepkgs package.rpm`
                #     install when true: `yum -y install package.rpm` or
                #     `zypper -y install package.rpm`
                class RPM; end

                # A package managed by YUM.
                # install: `yum -y install package`
                # remove: `yum -y remove package`
                # @!attribute [rw] name
                #   @return [String]
                #     Required. Package name.
                class YUM; end

                # A package managed by Zypper.
                # install: `zypper -y install package`
                # remove: `zypper -y rm package`
                # @!attribute [rw] name
                #   @return [String]
                #     Required. Package name.
                class Zypper; end

                # A package managed by GooGet.
                # install: `googet -noconfirm install package`
                # remove: `googet -noconfirm remove package`
                # @!attribute [rw] name
                #   @return [String]
                #     Required. Package name.
                class GooGet; end

                # An MSI package. MSI packages only support INSTALLED state.
                # @!attribute [rw] source
                #   @return [Google::Cloud::Osconfig::Agentendpoint::V1::OSPolicy::Resource::File]
                #     Required. The MSI package.
                # @!attribute [rw] properties
                #   @return [Array<String>]
                #     Additional properties to use during installation.
                #     This should be in the format of Property=Setting.
                #     Appended to the defaults of "ACTION=INSTALL
                #     REBOOT=ReallySuppress".
                class MSI; end

                # The desired state that the OS Config agent maintains on the VM.
                module DesiredState
                  # Unspecified is invalid.
                  DESIRED_STATE_UNSPECIFIED = 0

                  # Ensure that the package is installed.
                  INSTALLED = 1

                  # The agent ensures that the package is not installed and
                  # uninstalls it if detected.
                  REMOVED = 2
                end
              end

              # A resource that manages a package repository.
              # @!attribute [rw] apt
              #   @return [Google::Cloud::Osconfig::Agentendpoint::V1::OSPolicy::Resource::RepositoryResource::AptRepository]
              #     An Apt Repository.
              # @!attribute [rw] yum
              #   @return [Google::Cloud::Osconfig::Agentendpoint::V1::OSPolicy::Resource::RepositoryResource::YumRepository]
              #     A Yum Repository.
              # @!attribute [rw] zypper
              #   @return [Google::Cloud::Osconfig::Agentendpoint::V1::OSPolicy::Resource::RepositoryResource::ZypperRepository]
              #     A Zypper Repository.
              # @!attribute [rw] goo
              #   @return [Google::Cloud::Osconfig::Agentendpoint::V1::OSPolicy::Resource::RepositoryResource::GooRepository]
              #     A Goo Repository.
              class RepositoryResource
                # Represents a single apt package repository. These will be added to
                # a repo file that will be managed at
                # /etc/apt/sources.list.d/google_osconfig.list.
                # @!attribute [rw] archive_type
                #   @return [Google::Cloud::Osconfig::Agentendpoint::V1::OSPolicy::Resource::RepositoryResource::AptRepository::ArchiveType]
                #     Required. Type of archive files in this repository. The default behavior is
                #     DEB.
                # @!attribute [rw] uri
                #   @return [String]
                #     Required. URI for this repository.
                # @!attribute [rw] distribution
                #   @return [String]
                #     Required. Distribution of this repository.
                # @!attribute [rw] components
                #   @return [Array<String>]
                #     Required. List of components for this repository. Must contain at least one
                #     item.
                # @!attribute [rw] gpg_key
                #   @return [String]
                #     URI of the key file for this repository. The agent maintains a
                #     keyring at /etc/apt/trusted.gpg.d/osconfig_agent_managed.gpg.
                class AptRepository
                  # Type of archive.
                  module ArchiveType
                    # Unspecified is invalid.
                    ARCHIVE_TYPE_UNSPECIFIED = 0

                    # Deb indicates that the archive contains binary files.
                    DEB = 1

                    # Deb-src indicates that the archive contains source files.
                    DEB_SRC = 2
                  end
                end

                # Represents a single yum package repository. These are added to a
                # repo file that is managed at
                # `/etc/yum.repos.d/google_osconfig.repo`.
                # @!attribute [rw] id
                #   @return [String]
                #     Required. A one word, unique name for this repository. This is  the `repo
                #     id` in the yum config file and also the `display_name` if
                #     `display_name` is omitted. This id is also used as the unique
                #     identifier when checking for resource conflicts.
                # @!attribute [rw] display_name
                #   @return [String]
                #     The display name of the repository.
                # @!attribute [rw] base_url
                #   @return [String]
                #     Required. The location of the repository directory.
                # @!attribute [rw] gpg_keys
                #   @return [Array<String>]
                #     URIs of GPG keys.
                class YumRepository; end

                # Represents a single zypper package repository. These are added to a
                # repo file that is managed at
                # `/etc/zypp/repos.d/google_osconfig.repo`.
                # @!attribute [rw] id
                #   @return [String]
                #     Required. A one word, unique name for this repository. This is the `repo
                #     id` in the zypper config file and also the `display_name` if
                #     `display_name` is omitted. This id is also used as the unique
                #     identifier when checking for GuestPolicy conflicts.
                # @!attribute [rw] display_name
                #   @return [String]
                #     The display name of the repository.
                # @!attribute [rw] base_url
                #   @return [String]
                #     Required. The location of the repository directory.
                # @!attribute [rw] gpg_keys
                #   @return [Array<String>]
                #     URIs of GPG keys.
                class ZypperRepository; end

                # Represents a Goo package repository. These are added to a repo file
                # that is managed at
                # `C:/ProgramData/GooGet/repos/google_osconfig.repo`.
                # @!attribute [rw] name
                #   @return [String]
                #     Required. The name of the repository.
                # @!attribute [rw] url
                #   @return [String]
                #     Required. The url of the repository.
                class GooRepository; end
              end

              # A resource that contains custom validation and enforcement steps.
              # @!attribute [rw] validate
              #   @return [Google::Cloud::Osconfig::Agentendpoint::V1::OSPolicy::Resource::ExecResource::Exec]
              #     Required. What to run to validate this resource is in the desired state.
              #     An exit code of 100 indicates "in desired state", and exit code of 101
              #     indicates "not in desired state". Any other exit code indicates a
              #     failure running validate.
              # @!attribute [rw] enforce
              #   @return [Google::Cloud::Osconfig::Agentendpoint::V1::OSPolicy::Resource::ExecResource::Exec]
              #     What to run to bring this resource into the desired state.
              #     A exit code of 100 indicates "success", any other exit code idicates a
              #     failure running enforce.
              class ExecResource
                # A file or script to execute.
                # @!attribute [rw] file
                #   @return [Google::Cloud::Osconfig::Agentendpoint::V1::OSPolicy::Resource::File]
                #     A remote or local file.
                # @!attribute [rw] script
                #   @return [String]
                #     An inline script.
                # @!attribute [rw] args
                #   @return [Array<String>]
                #     Optional arguments to pass to the source during execution.
                # @!attribute [rw] interpreter
                #   @return [Google::Cloud::Osconfig::Agentendpoint::V1::OSPolicy::Resource::ExecResource::Exec::Interpreter]
                #     Required. The script interpreter to use.
                class Exec
                  # The interpreter to use.
                  module Interpreter
                    # Defaults to NONE.
                    INTERPRETER_UNSPECIFIED = 0

                    # If no interpreter is specified the
                    # source will be executed directly, which will likely only
                    # succeed for executables and scripts with shebang lines.
                    # [Wikipedia
                    # shebang](https://en.wikipedia.org/wiki/Shebang_(Unix)).
                    NONE = 1

                    # Indicates that the script will be run with /bin/sh on Linux and
                    # cmd.exe on windows.
                    SHELL = 2

                    # Indicates that the script will be run with powershell.
                    POWERSHELL = 3
                  end
                end
              end

              # A resource that manages the state of a file.
              # @!attribute [rw] file
              #   @return [Google::Cloud::Osconfig::Agentendpoint::V1::OSPolicy::Resource::File]
              #     A remote or local source.
              # @!attribute [rw] content
              #   @return [String]
              #     A a file with this content.
              # @!attribute [rw] path
              #   @return [String]
              #     Required. The absolute path of the file.
              # @!attribute [rw] state
              #   @return [Google::Cloud::Osconfig::Agentendpoint::V1::OSPolicy::Resource::FileResource::DesiredState]
              #     Required. Desired state of the file.
              # @!attribute [rw] permissions
              #   @return [String]
              #     Consists of three octal digits which represent, in
              #     order, the permissions of the owner, group, and other users for the
              #     file (similarly to the numeric mode used in the linux chmod
              #     utility). Each digit represents a three bit number with the 4 bit
              #     corresponding to the read permissions, the 2 bit corresponds to the
              #     write bit, and the one bit corresponds to the execute permission.
              #     Default behavior is 755.
              #
              #     Below are some examples of permissions and their associated values:
              #     read, write, and execute: 7
              #     read and execute: 5
              #     read and write: 6
              #     read only: 4
              class FileResource
                # Desired state of the file.
                module DesiredState
                  # Unspecified is invalid.
                  DESIRED_STATE_UNSPECIFIED = 0

                  # Ensure file at path is present.
                  PRESENT = 1

                  # Ensure file at path is absent.
                  ABSENT = 2

                  # Ensure the contents of the file at path matches. If the file does
                  # not exist it will be created.
                  CONTENTS_MATCH = 3
                end
              end
            end

            # Policy mode
            module Mode
              # Invalid mode
              MODE_UNSPECIFIED = 0

              # This mode checks if the configuration resources in the policy are in
              # their desired state. No actions are performed if they are not in the
              # desired state. This mode is used for reporting purposes.
              VALIDATION = 1

              # This mode checks if the configuration resources in the policy are in
              # their desired state, and if not, enforces the desired state.
              ENFORCEMENT = 2
            end
          end
        end
      end
    end
  end
end