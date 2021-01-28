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
  module Maps
    module Roads
      module V1op
        # A request to the SnapToRoads method, requesting that a sequence of points be
        # snapped to road segments.
        # @!attribute [rw] path
        #   @return [String]
        #     The path to be snapped as a series of lat, lng points. Specified as
        #     a string of the format: lat,lng|lat,lng|...
        # @!attribute [rw] interpolate
        #   @return [true, false]
        #     Whether to interpolate the points to return full road geometry.
        # @!attribute [rw] asset_id
        #   @return [String]
        #     The asset ID of the asset to which this path relates. This is used for
        #     abuse detection purposes for clients with asset-based SKUs.
        # @!attribute [rw] travel_mode
        #   @return [Google::Maps::Roads::V1op::TravelMode]
        #     The type of travel being tracked. This will constrain the paths we snap to.
        class SnapToRoadsRequest; end

        # A snapped point object, representing the result of snapping.
        # @!attribute [rw] location
        #   @return [Google::Type::LatLng]
        #     The lat,lng of the snapped location.
        # @!attribute [rw] original_index
        #   @return [Google::Protobuf::UInt32Value]
        #     The index into the original path of the equivalent pre-snapped point.
        #     This allows for identification of points which have been interpolated if
        #     this index is missing.
        # @!attribute [rw] place_id
        #   @return [String]
        #     The place ID for this snapped location (road segment). These are the same
        #     as are currently used by the Places API.
        class SnappedPoint; end

        # The response from the SnapToRoads method, returning a sequence of snapped
        # points.
        # @!attribute [rw] snapped_points
        #   @return [Array<Google::Maps::Roads::V1op::SnappedPoint>]
        #     A list of snapped points.
        # @!attribute [rw] warning_message
        #   @return [String]
        #     User-visible warning message, if any, which can be shown alongside a valid
        #     result.
        class SnapToRoadsResponse; end

        # A request to the ListNearestRoads method, requesting that a sequence of
        # points be snapped individually to the road segment that each is closest to.
        # @!attribute [rw] points
        #   @return [String]
        #     The points to be snapped as a series of lat, lng points. Specified as
        #     a string of the format: lat,lng|lat,lng|...
        # @!attribute [rw] travel_mode
        #   @return [Google::Maps::Roads::V1op::TravelMode]
        #     The type of travel being tracked. This will constrain the roads we snap to.
        class ListNearestRoadsRequest; end

        # The response from the ListNearestRoads method, returning a list of snapped
        # points.
        # @!attribute [rw] snapped_points
        #   @return [Array<Google::Maps::Roads::V1op::SnappedPoint>]
        #     A list of snapped points.
        class ListNearestRoadsResponse; end

        # An enum representing the mode of travel used for snapping.
        module TravelMode
          TRAVEL_MODE_UNSPECIFIED = 0

          DRIVING = 1

          CYCLING = 2

          WALKING = 3
        end
      end
    end
  end
end