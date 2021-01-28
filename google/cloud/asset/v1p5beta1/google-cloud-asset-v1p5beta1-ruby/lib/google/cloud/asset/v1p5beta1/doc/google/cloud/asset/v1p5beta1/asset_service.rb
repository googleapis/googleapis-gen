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
      module V1p5beta1
        # ListAssets request.
        # @!attribute [rw] parent
        #   @return [String]
        #     Required. Name of the organization or project the assets belong to. Format:
        #     "organizations/[organization-number]" (such as "organizations/123"),
        #     "projects/[project-number]" (such as "projects/my-project-id"), or
        #     "projects/[project-id]" (such as "projects/12345").
        # @!attribute [rw] read_time
        #   @return [Google::Protobuf::Timestamp]
        #     Timestamp to take an asset snapshot. This can only be set to a timestamp
        #     between 2018-10-02 UTC (inclusive) and the current time. If not specified,
        #     the current time will be used. Due to delays in resource data collection
        #     and indexing, there is a volatile window during which running the same
        #     query may get different results.
        # @!attribute [rw] asset_types
        #   @return [Array<String>]
        #     A list of asset types of which to take a snapshot for. For  example:
        #     "compute.googleapis.com/Disk". If specified, only matching assets will be
        #     returned. See [Introduction to Cloud Asset
        #     Inventory](https://cloud.google.com/resource-manager/docs/cloud-asset-inventory/overview)
        #     for all supported asset types.
        # @!attribute [rw] content_type
        #   @return [Google::Cloud::Asset::V1p5beta1::ContentType]
        #     Asset content type. If not specified, no content but the asset name will
        #     be returned.
        # @!attribute [rw] page_size
        #   @return [Integer]
        #     The maximum number of assets to be returned in a single response. Default
        #     is 100, minimum is 1, and maximum is 1000.
        # @!attribute [rw] page_token
        #   @return [String]
        #     The `next_page_token` returned from the previous `ListAssetsResponse`, or
        #     unspecified for the first `ListAssetsRequest`. It is a continuation of a
        #     prior `ListAssets` call, and the API should return the next page of assets.
        class ListAssetsRequest; end

        # ListAssets response.
        # @!attribute [rw] read_time
        #   @return [Google::Protobuf::Timestamp]
        #     Time the snapshot was taken.
        # @!attribute [rw] assets
        #   @return [Array<Google::Cloud::Asset::V1p5beta1::Asset>]
        #     Assets.
        # @!attribute [rw] next_page_token
        #   @return [String]
        #     Token to retrieve the next page of results. Set to empty if there are no
        #     remaining results.
        class ListAssetsResponse; end

        # Asset content type.
        module ContentType
          # Unspecified content type.
          CONTENT_TYPE_UNSPECIFIED = 0

          # Resource metadata.
          RESOURCE = 1

          # The actual IAM policy set on a resource.
          IAM_POLICY = 2

          # The Cloud Organization Policy set on an asset.
          ORG_POLICY = 4

          # The Cloud Access context mananger Policy set on an asset.
          ACCESS_POLICY = 5
        end
      end
    end
  end
end