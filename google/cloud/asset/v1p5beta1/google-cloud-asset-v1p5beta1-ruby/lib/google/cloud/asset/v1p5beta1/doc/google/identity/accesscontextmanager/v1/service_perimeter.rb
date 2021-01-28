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
  module Identity
    module Accesscontextmanager
      module V1
        # `ServicePerimeter` describes a set of Google Cloud resources which can freely
        # import and export data amongst themselves, but not export outside of the
        # `ServicePerimeter`. If a request with a source within this `ServicePerimeter`
        # has a target outside of the `ServicePerimeter`, the request will be blocked.
        # Otherwise the request is allowed. There are two types of Service Perimeter -
        # Regular and Bridge. Regular Service Perimeters cannot overlap, a single
        # Google Cloud project can only belong to a single regular Service Perimeter.
        # Service Perimeter Bridges can contain only Google Cloud projects as members,
        # a single Google Cloud project may belong to multiple Service Perimeter
        # Bridges.
        # @!attribute [rw] name
        #   @return [String]
        #     Required. Resource name for the ServicePerimeter.  The `short_name`
        #     component must begin with a letter and only include alphanumeric and '_'.
        #     Format: `accessPolicies/{policy_id}/servicePerimeters/{short_name}`
        # @!attribute [rw] title
        #   @return [String]
        #     Human readable title. Must be unique within the Policy.
        # @!attribute [rw] description
        #   @return [String]
        #     Description of the `ServicePerimeter` and its use. Does not affect
        #     behavior.
        # @!attribute [rw] create_time
        #   @return [Google::Protobuf::Timestamp]
        #     Output only. Time the `ServicePerimeter` was created in UTC.
        # @!attribute [rw] update_time
        #   @return [Google::Protobuf::Timestamp]
        #     Output only. Time the `ServicePerimeter` was updated in UTC.
        # @!attribute [rw] perimeter_type
        #   @return [Google::Identity::Accesscontextmanager::V1::ServicePerimeter::PerimeterType]
        #     Perimeter type indicator. A single project is
        #     allowed to be a member of single regular perimeter, but multiple service
        #     perimeter bridges. A project cannot be a included in a perimeter bridge
        #     without being included in regular perimeter. For perimeter bridges,
        #     the restricted service list as well as access level lists must be
        #     empty.
        # @!attribute [rw] status
        #   @return [Google::Identity::Accesscontextmanager::V1::ServicePerimeterConfig]
        #     Current ServicePerimeter configuration. Specifies sets of resources,
        #     restricted services and access levels that determine perimeter
        #     content and boundaries.
        # @!attribute [rw] spec
        #   @return [Google::Identity::Accesscontextmanager::V1::ServicePerimeterConfig]
        #     Proposed (or dry run) ServicePerimeter configuration. This configuration
        #     allows to specify and test ServicePerimeter configuration without enforcing
        #     actual access restrictions. Only allowed to be set when the
        #     "use_explicit_dry_run_spec" flag is set.
        # @!attribute [rw] use_explicit_dry_run_spec
        #   @return [true, false]
        #     Use explicit dry run spec flag. Ordinarily, a dry-run spec implicitly
        #     exists  for all Service Perimeters, and that spec is identical to the
        #     status for those Service Perimeters. When this flag is set, it inhibits the
        #     generation of the implicit spec, thereby allowing the user to explicitly
        #     provide a configuration ("spec") to use in a dry-run version of the Service
        #     Perimeter. This allows the user to test changes to the enforced config
        #     ("status") without actually enforcing them. This testing is done through
        #     analyzing the differences between currently enforced and suggested
        #     restrictions. use_explicit_dry_run_spec must bet set to True if any of the
        #     fields in the spec are set to non-default values.
        class ServicePerimeter
          # Specifies the type of the Perimeter. There are two types: regular and
          # bridge. Regular Service Perimeter contains resources, access levels, and
          # restricted services. Every resource can be in at most ONE
          # regular Service Perimeter.
          #
          # In addition to being in a regular service perimeter, a resource can also
          # be in zero or more perimeter bridges.  A perimeter bridge only contains
          # resources.  Cross project operations are permitted if all effected
          # resources share some perimeter (whether bridge or regular). Perimeter
          # Bridge does not contain access levels or services: those are governed
          # entirely by the regular perimeter that resource is in.
          #
          # Perimeter Bridges are typically useful when building more complex toplogies
          # with many independent perimeters that need to share some data with a common
          # perimeter, but should not be able to share data among themselves.
          module PerimeterType
            # Regular Perimeter.
            PERIMETER_TYPE_REGULAR = 0

            # Perimeter Bridge.
            PERIMETER_TYPE_BRIDGE = 1
          end
        end

        # `ServicePerimeterConfig` specifies a set of Google Cloud resources that
        # describe specific Service Perimeter configuration.
        # @!attribute [rw] resources
        #   @return [Array<String>]
        #     A list of Google Cloud resources that are inside of the service perimeter.
        #     Currently only projects are allowed. Format: `projects/{project_number}`
        # @!attribute [rw] access_levels
        #   @return [Array<String>]
        #     A list of `AccessLevel` resource names that allow resources within the
        #     `ServicePerimeter` to be accessed from the internet. `AccessLevels` listed
        #     must be in the same policy as this `ServicePerimeter`. Referencing a
        #     nonexistent `AccessLevel` is a syntax error. If no `AccessLevel` names are
        #     listed, resources within the perimeter can only be accessed via Google
        #     Cloud calls with request origins within the perimeter. Example:
        #     `"accessPolicies/MY_POLICY/accessLevels/MY_LEVEL"`.
        #     For Service Perimeter Bridge, must be empty.
        # @!attribute [rw] restricted_services
        #   @return [Array<String>]
        #     Google Cloud services that are subject to the Service Perimeter
        #     restrictions. For example, if `storage.googleapis.com` is specified, access
        #     to the storage buckets inside the perimeter must meet the perimeter's
        #     access restrictions.
        # @!attribute [rw] vpc_accessible_services
        #   @return [Google::Identity::Accesscontextmanager::V1::ServicePerimeterConfig::VpcAccessibleServices]
        #     Configuration for APIs allowed within Perimeter.
        class ServicePerimeterConfig
          # Specifies how APIs are allowed to communicate within the Service
          # Perimeter.
          # @!attribute [rw] enable_restriction
          #   @return [true, false]
          #     Whether to restrict API calls within the Service Perimeter to the list of
          #     APIs specified in 'allowed_services'.
          # @!attribute [rw] allowed_services
          #   @return [Array<String>]
          #     The list of APIs usable within the Service Perimeter. Must be empty
          #     unless 'enable_restriction' is True.
          class VpcAccessibleServices; end
        end
      end
    end
  end
end