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
    module Asset
      module V1p1beta1
        # The standard metadata of a cloud resource.
        # @!attribute [rw] name
        #   @return [String]
        #     The full resource name. For example:
        #     `//compute.googleapis.com/projects/my_project_123/zones/zone1/instances/instance1`.
        #     See [Resource
        #     Names](https://cloud.google.com/apis/design/resource_names#full_resource_name)
        #     for more information.
        # @!attribute [rw] asset_type
        #   @return [String]
        #     The type of this resource.
        #     For example: "compute.googleapis.com/Disk".
        # @!attribute [rw] project
        #   @return [String]
        #     The project that this resource belongs to, in the form of
        #     `projects/{project_number}`.
        # @!attribute [rw] display_name
        #   @return [String]
        #     The display name of this resource.
        # @!attribute [rw] description
        #   @return [String]
        #     One or more paragraphs of text description of this resource. Maximum length
        #     could be up to 1M bytes.
        # @!attribute [rw] additional_attributes
        #   @return [Array<String>]
        #     Additional searchable attributes of this resource.
        #     Informational only. The exact set of attributes is subject to change.
        #     For example: project id, DNS name etc.
        # @!attribute [rw] location
        #   @return [String]
        #     Location can be "global", regional like "us-east1", or zonal like
        #     "us-west1-b".
        # @!attribute [rw] labels
        #   @return [Hash{String => String}]
        #     Labels associated with this resource. See [Labelling and grouping GCP
        #     resources](https://cloud.google.com/blog/products/gcp/labelling-and-grouping-your-google-cloud-platform-resources)
        #     for more information.
        # @!attribute [rw] network_tags
        #   @return [Array<String>]
        #     Network tags associated with this resource. Like labels, network tags are a
        #     type of annotations used to group GCP resources. See [Labelling GCP
        #     resources](lhttps://cloud.google.com/blog/products/gcp/labelling-and-grouping-your-google-cloud-platform-resources)
        #     for more information.
        class StandardResourceMetadata; end

        # The result for a IAM Policy search.
        # @!attribute [rw] resource
        #   @return [String]
        #     The [full resource
        #     name](https://cloud.google.com/apis/design/resource_names#full_resource_name)
        #     of the resource associated with this IAM policy.
        # @!attribute [rw] project
        #   @return [String]
        #     The project that the associated GCP resource belongs to, in the form of
        #     `projects/{project_number}`. If an IAM policy is set on a resource (like VM
        #     instance, Cloud Storage bucket), the project field will indicate the
        #     project that contains the resource. If an IAM policy is set on a folder or
        #     orgnization, the project field will be empty.
        # @!attribute [rw] policy
        #   @return [Google::Iam::V1::Policy]
        #     The IAM policy directly set on the given resource. Note that the original
        #     IAM policy can contain multiple bindings. This only contains the bindings
        #     that match the given query. For queries that don't contain a constrain on
        #     policies (e.g. an empty query), this contains all the bindings.
        # @!attribute [rw] explanation
        #   @return [Google::Cloud::Asset::V1p1beta1::IamPolicySearchResult::Explanation]
        #     Explanation about the IAM policy search result. It contains additional
        #     information to explain why the search result matches the query.
        class IamPolicySearchResult
          # Explanation about the IAM policy search result.
          # @!attribute [rw] matched_permissions
          #   @return [Hash{String => Google::Cloud::Asset::V1p1beta1::Permissions}]
          #     The map from roles to their included permission matching the permission
          #     query (e.g. containing `policy.role.permissions:`). A sample role string:
          #     "roles/compute.instanceAdmin". The roles can also be found in the
          #     returned `policy` bindings. Note that the map is populated only if
          #     requesting with a permission query.
          class Explanation; end
        end

        # IAM permissions
        # @!attribute [rw] permissions
        #   @return [Array<String>]
        #     A list of permissions. A sample permission string: "compute.disk.get".
        class Permissions; end
      end
    end
  end
end