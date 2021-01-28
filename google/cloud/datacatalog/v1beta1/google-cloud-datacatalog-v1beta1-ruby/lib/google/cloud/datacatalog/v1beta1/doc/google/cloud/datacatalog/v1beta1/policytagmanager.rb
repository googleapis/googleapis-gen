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
    module Datacatalog
      module V1beta1
        # A taxonomy is a collection of policy tags that classify data along a common
        # axis. For instance a data *sensitivity* taxonomy could contain policy tags
        # denoting PII such as age, zipcode, and SSN. A data *origin* taxonomy could
        # contain policy tags to distinguish user data, employee data, partner data,
        # public data.
        # @!attribute [rw] name
        #   @return [String]
        #     Output only. Resource name of this taxonomy, whose format is:
        #     "projects/{project_number}/locations/{location_id}/taxonomies/{id}".
        # @!attribute [rw] display_name
        #   @return [String]
        #     Required. User defined name of this taxonomy. It must: contain only unicode letters,
        #     numbers, underscores, dashes and spaces; not start or end with spaces; and
        #     be at most 200 bytes long when encoded in UTF-8.
        # @!attribute [rw] description
        #   @return [String]
        #     Optional. Description of this taxonomy. It must: contain only unicode characters,
        #     tabs, newlines, carriage returns and page breaks; and be at most 2000 bytes
        #     long when encoded in UTF-8. If not set, defaults to an empty description.
        # @!attribute [rw] activated_policy_types
        #   @return [Array<Google::Cloud::Datacatalog::V1beta1::Taxonomy::PolicyType>]
        #     Optional. A list of policy types that are activated for this taxonomy. If not set,
        #     defaults to an empty list.
        class Taxonomy
          # Defines policy types where policy tag can be used for.
          module PolicyType
            # Unspecified policy type.
            POLICY_TYPE_UNSPECIFIED = 0

            # Fine grained access control policy, which enables access control on
            # tagged resources.
            FINE_GRAINED_ACCESS_CONTROL = 1
          end
        end

        # Denotes one policy tag in a taxonomy (e.g. ssn). Policy Tags can be defined
        # in a hierarchy. For example, consider the following hierarchy:
        # Geolocation -&gt; (LatLong, City, ZipCode). PolicyTag "Geolocation"
        # contains three child policy tags: "LatLong", "City", and "ZipCode".
        # @!attribute [rw] name
        #   @return [String]
        #     Output only. Resource name of this policy tag, whose format is:
        #     "projects/{project_number}/locations/{location_id}/taxonomies/{taxonomy_id}/policyTags/{id}".
        # @!attribute [rw] display_name
        #   @return [String]
        #     Required. User defined name of this policy tag. It must: be unique within the parent
        #     taxonomy; contain only unicode letters, numbers, underscores, dashes and
        #     spaces; not start or end with spaces; and be at most 200 bytes long when
        #     encoded in UTF-8.
        # @!attribute [rw] description
        #   @return [String]
        #     Description of this policy tag. It must: contain only unicode characters,
        #     tabs, newlines, carriage returns and page breaks; and be at most 2000 bytes
        #     long when encoded in UTF-8. If not set, defaults to an empty description.
        #     If not set, defaults to an empty description.
        # @!attribute [rw] parent_policy_tag
        #   @return [String]
        #     Resource name of this policy tag's parent policy tag (e.g. for the
        #     "LatLong" policy tag in the example above, this field contains the
        #     resource name of the "Geolocation" policy tag). If empty, it means this
        #     policy tag is a top level policy tag (e.g. this field is empty for the
        #     "Geolocation" policy tag in the example above). If not set, defaults to an
        #     empty string.
        # @!attribute [rw] child_policy_tags
        #   @return [Array<String>]
        #     Output only. Resource names of child policy tags of this policy tag.
        class PolicyTag; end

        # Request message for
        # {Google::Cloud::Datacatalog::V1beta1::PolicyTagManager::CreateTaxonomy CreateTaxonomy}.
        # @!attribute [rw] parent
        #   @return [String]
        #     Required. Resource name of the project that the taxonomy will belong to.
        # @!attribute [rw] taxonomy
        #   @return [Google::Cloud::Datacatalog::V1beta1::Taxonomy]
        #     The taxonomy to be created.
        class CreateTaxonomyRequest; end

        # Request message for
        # {Google::Cloud::Datacatalog::V1beta1::PolicyTagManager::DeleteTaxonomy DeleteTaxonomy}.
        # @!attribute [rw] name
        #   @return [String]
        #     Required. Resource name of the taxonomy to be deleted. All policy tags in
        #     this taxonomy will also be deleted.
        class DeleteTaxonomyRequest; end

        # Request message for
        # {Google::Cloud::Datacatalog::V1beta1::PolicyTagManager::UpdateTaxonomy UpdateTaxonomy}.
        # @!attribute [rw] taxonomy
        #   @return [Google::Cloud::Datacatalog::V1beta1::Taxonomy]
        #     The taxonomy to update. Only description, display_name, and activated
        #     policy types can be updated.
        # @!attribute [rw] update_mask
        #   @return [Google::Protobuf::FieldMask]
        #     The update mask applies to the resource. For the `FieldMask` definition,
        #     see
        #     https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#fieldmask
        #     If not set, defaults to all of the fields that are allowed to update.
        class UpdateTaxonomyRequest; end

        # Request message for
        # {Google::Cloud::Datacatalog::V1beta1::PolicyTagManager::ListTaxonomies ListTaxonomies}.
        # @!attribute [rw] parent
        #   @return [String]
        #     Required. Resource name of the project to list the taxonomies of.
        # @!attribute [rw] page_size
        #   @return [Integer]
        #     The maximum number of items to return. Must be a value between 1 and 1000.
        #     If not set, defaults to 50.
        # @!attribute [rw] page_token
        #   @return [String]
        #     The next_page_token value returned from a previous list request, if any. If
        #     not set, defaults to an empty string.
        class ListTaxonomiesRequest; end

        # Response message for
        # {Google::Cloud::Datacatalog::V1beta1::PolicyTagManager::ListTaxonomies ListTaxonomies}.
        # @!attribute [rw] taxonomies
        #   @return [Array<Google::Cloud::Datacatalog::V1beta1::Taxonomy>]
        #     Taxonomies that the project contains.
        # @!attribute [rw] next_page_token
        #   @return [String]
        #     Token used to retrieve the next page of results, or empty if there are no
        #     more results in the list.
        class ListTaxonomiesResponse; end

        # Request message for
        # {Google::Cloud::Datacatalog::V1beta1::PolicyTagManager::GetTaxonomy GetTaxonomy}.
        # @!attribute [rw] name
        #   @return [String]
        #     Required. Resource name of the requested taxonomy.
        class GetTaxonomyRequest; end

        # Request message for
        # {Google::Cloud::Datacatalog::V1beta1::PolicyTagManager::CreatePolicyTag CreatePolicyTag}.
        # @!attribute [rw] parent
        #   @return [String]
        #     Required. Resource name of the taxonomy that the policy tag will belong to.
        # @!attribute [rw] policy_tag
        #   @return [Google::Cloud::Datacatalog::V1beta1::PolicyTag]
        #     The policy tag to be created.
        class CreatePolicyTagRequest; end

        # Request message for
        # {Google::Cloud::Datacatalog::V1beta1::PolicyTagManager::DeletePolicyTag DeletePolicyTag}.
        # @!attribute [rw] name
        #   @return [String]
        #     Required. Resource name of the policy tag to be deleted. All of its descendant
        #     policy tags will also be deleted.
        class DeletePolicyTagRequest; end

        # Request message for
        # {Google::Cloud::Datacatalog::V1beta1::PolicyTagManager::UpdatePolicyTag UpdatePolicyTag}.
        # @!attribute [rw] policy_tag
        #   @return [Google::Cloud::Datacatalog::V1beta1::PolicyTag]
        #     The policy tag to update. Only the description, display_name, and
        #     parent_policy_tag fields can be updated.
        # @!attribute [rw] update_mask
        #   @return [Google::Protobuf::FieldMask]
        #     The update mask applies to the resource. Only display_name, description and
        #     parent_policy_tag can be updated and thus can be listed in the mask. If
        #     update_mask is not provided, all allowed fields (i.e. display_name,
        #     description and parent) will be updated. For more information including the
        #     `FieldMask` definition, see
        #     https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#fieldmask
        #     If not set, defaults to all of the fields that are allowed to update.
        class UpdatePolicyTagRequest; end

        # Request message for
        # {Google::Cloud::Datacatalog::V1beta1::PolicyTagManager::ListPolicyTags ListPolicyTags}.
        # @!attribute [rw] parent
        #   @return [String]
        #     Required. Resource name of the taxonomy to list the policy tags of.
        # @!attribute [rw] page_size
        #   @return [Integer]
        #     The maximum number of items to return. Must be a value between 1 and 1000.
        #     If not set, defaults to 50.
        # @!attribute [rw] page_token
        #   @return [String]
        #     The next_page_token value returned from a previous List request, if any. If
        #     not set, defaults to an empty string.
        class ListPolicyTagsRequest; end

        # Response message for
        # {Google::Cloud::Datacatalog::V1beta1::PolicyTagManager::ListPolicyTags ListPolicyTags}.
        # @!attribute [rw] policy_tags
        #   @return [Array<Google::Cloud::Datacatalog::V1beta1::PolicyTag>]
        #     The policy tags that are in the requested taxonomy.
        # @!attribute [rw] next_page_token
        #   @return [String]
        #     Token used to retrieve the next page of results, or empty if there are no
        #     more results in the list.
        class ListPolicyTagsResponse; end

        # Request message for
        # {Google::Cloud::Datacatalog::V1beta1::PolicyTagManager::GetPolicyTag GetPolicyTag}.
        # @!attribute [rw] name
        #   @return [String]
        #     Required. Resource name of the requested policy tag.
        class GetPolicyTagRequest; end
      end
    end
  end
end