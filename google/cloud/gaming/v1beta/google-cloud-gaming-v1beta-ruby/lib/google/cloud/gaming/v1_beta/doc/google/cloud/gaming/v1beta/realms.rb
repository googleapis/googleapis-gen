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
    module Gaming
      module V1beta
        # Request message for RealmsService.ListRealms.
        # @!attribute [rw] parent
        #   @return [String]
        #     Required. The parent resource name. Uses the form:
        #     `projects/{project}/locations/{location}`.
        # @!attribute [rw] page_size
        #   @return [Integer]
        #     Optional. The maximum number of items to return.  If unspecified, server
        #     will pick an appropriate default. Server may return fewer items than
        #     requested. A caller should only rely on response's
        #     {Google::Cloud::Gaming::V1beta::ListRealmsResponse#next_page_token next_page_token} to
        #     determine if there are more realms left to be queried.
        # @!attribute [rw] page_token
        #   @return [String]
        #     Optional. The next_page_token value returned from a previous List request,
        #     if any.
        # @!attribute [rw] filter
        #   @return [String]
        #     Optional. The filter to apply to list results.
        # @!attribute [rw] order_by
        #   @return [String]
        #     Optional. Specifies the ordering of results following syntax at
        #     https://cloud.google.com/apis/design/design_patterns#sorting_order.
        class ListRealmsRequest; end

        # Response message for RealmsService.ListRealms.
        # @!attribute [rw] realms
        #   @return [Array<Google::Cloud::Gaming::V1beta::Realm>]
        #     The list of realms.
        # @!attribute [rw] next_page_token
        #   @return [String]
        #     Token to retrieve the next page of results, or empty if there are no more
        #     results in the list.
        # @!attribute [rw] unreachable
        #   @return [Array<String>]
        #     List of locations that could not be reached.
        class ListRealmsResponse; end

        # Request message for RealmsService.GetRealm.
        # @!attribute [rw] name
        #   @return [String]
        #     Required. The name of the realm to retrieve. Uses the form:
        #     `projects/{project}/locations/{location}/realms/{realm}`.
        class GetRealmRequest; end

        # Request message for RealmsService.CreateRealm.
        # @!attribute [rw] parent
        #   @return [String]
        #     Required. The parent resource name. Uses the form:
        #     `projects/{project}/locations/{location}`.
        # @!attribute [rw] realm_id
        #   @return [String]
        #     Required. The ID of the realm resource to be created.
        # @!attribute [rw] realm
        #   @return [Google::Cloud::Gaming::V1beta::Realm]
        #     Required. The realm resource to be created.
        class CreateRealmRequest; end

        # Request message for RealmsService.DeleteRealm.
        # @!attribute [rw] name
        #   @return [String]
        #     Required. The name of the realm to delete. Uses the form:
        #     `projects/{project}/locations/{location}/realms/{realm}`.
        class DeleteRealmRequest; end

        # Request message for RealmsService.UpdateRealm.
        # @!attribute [rw] realm
        #   @return [Google::Cloud::Gaming::V1beta::Realm]
        #     Required. The realm to be updated.
        #     Only fields specified in update_mask are updated.
        # @!attribute [rw] update_mask
        #   @return [Google::Protobuf::FieldMask]
        #     Required. The update mask applies to the resource. For the `FieldMask`
        #     definition, see
        #
        #     https:
        #     //developers.google.com/protocol-buffers
        #     // /docs/reference/google.protobuf#fieldmask
        class UpdateRealmRequest; end

        # Request message for RealmsService.PreviewRealmUpdate.
        # @!attribute [rw] realm
        #   @return [Google::Cloud::Gaming::V1beta::Realm]
        #     Required. The realm to be updated.
        #     Only fields specified in update_mask are updated.
        # @!attribute [rw] update_mask
        #   @return [Google::Protobuf::FieldMask]
        #     Required. The update mask applies to the resource. For the `FieldMask`
        #     definition, see
        #
        #     https:
        #     //developers.google.com/protocol-buffers
        #     // /docs/reference/google.protobuf#fieldmask
        # @!attribute [rw] preview_time
        #   @return [Google::Protobuf::Timestamp]
        #     Optional. The target timestamp to compute the preview.
        class PreviewRealmUpdateRequest; end

        # Response message for RealmsService.PreviewRealmUpdate.
        # @!attribute [rw] etag
        #   @return [String]
        #     ETag of the realm.
        # @!attribute [rw] target_state
        #   @return [Google::Cloud::Gaming::V1beta::TargetState]
        #     The target state.
        class PreviewRealmUpdateResponse; end

        # A realm resource.
        # @!attribute [rw] name
        #   @return [String]
        #     The resource name of the realm. Uses the form:
        #     `projects/{project}/locations/{location}/realms/{realm}`. For
        #     example, `projects/my-project/locations/{location}/realms/my-realm`.
        # @!attribute [rw] create_time
        #   @return [Google::Protobuf::Timestamp]
        #     Output only. The creation time.
        # @!attribute [rw] update_time
        #   @return [Google::Protobuf::Timestamp]
        #     Output only. The last-modified time.
        # @!attribute [rw] labels
        #   @return [Hash{String => String}]
        #     The labels associated with this realm. Each label is a key-value pair.
        # @!attribute [rw] time_zone
        #   @return [String]
        #     Required. Time zone where all policies targeting this realm are evaluated. The value
        #     of this field must be from the IANA time zone database:
        #     https://www.iana.org/time-zones.
        # @!attribute [rw] etag
        #   @return [String]
        #     ETag of the resource.
        # @!attribute [rw] description
        #   @return [String]
        #     Human readable description of the realm.
        class Realm; end
      end
    end
  end
end