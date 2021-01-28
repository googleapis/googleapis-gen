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
    module Playablelocations
      module V3
        module Sample
          # A geographical point suitable for placing game objects in location-based
          # games.
          # @!attribute [rw] name
          #   @return [String]
          #     Required. The name of this playable location.
          # @!attribute [rw] place_id
          #   @return [String]
          #     A [place ID] (https://developers.google.com/places/place-id)
          # @!attribute [rw] plus_code
          #   @return [String]
          #     A [plus code] (http://openlocationcode.com)
          # @!attribute [rw] types
          #   @return [Array<String>]
          #     A collection of [Playable Location Types](https://cloud.google.com/maps/tt/games/types) for this
          #     playable location. The first type in the collection is the primary type.
          #
          #     Type information might not be available for all playable locations.
          # @!attribute [rw] center_point
          #   @return [Google::Type::LatLng]
          #     Required. The latitude and longitude associated with the center of the
          #     playable location.
          #
          #     By default, the set of playable locations returned from
          #     {Google::Maps::Playablelocations::V3::PlayableLocations::SamplePlayableLocations SamplePlayableLocations}
          #     use center-point coordinates.
          # @!attribute [rw] snapped_point
          #   @return [Google::Type::LatLng]
          #     The playable location's coordinates, snapped to the sidewalk of the
          #     nearest road, if a nearby road exists.
          class PlayableLocation; end

          # A set of options that specifies the separation between playable locations.
          # @!attribute [rw] min_spacing_meters
          #   @return [Float]
          #     Required. The minimum spacing between any two playable locations, measured
          #     in meters. The minimum value is 30. The maximum value is 1000.
          #
          #     Inputs will be rounded up to the next 10 meter interval.
          #
          #     The default value is 200m.
          #
          #     Set this field to remove tight clusters of playable locations.
          #
          #     Note:
          #
          #     The spacing is a greedy algorithm. It optimizes for selecting the highest
          #     ranking locations first, not to maximize the number of locations selected.
          #     Consider the following scenario:
          #
          #     * Rank: A: 2, B: 1, C: 3.
          #       * Distance: A--200m--B--200m--C
          #
          #       If spacing=250, it will pick the highest ranked location [B], not [A, C].
          #
          #
          #     Note:
          #
          #     Spacing works within the game object type itself, as well as the previous
          #     ones.
          #     Suppose three game object types, each with the following spacing:
          #
          #     * X: 400m, Y: undefined, Z: 200m.
          #
          #     1. Add locations for X, within 400m of each other.
          #     2. Add locations for Y, without any spacing.
          #     3. Finally, add locations for Z within 200m of each other as well X and Y.
          #
          #     The distance diagram between those locations end up as:
          #
          #     * From->To.
          #       * X->X: 400m
          #       * Y->X, Y->Y: unspecified.
          #       * Z->X, Z->Y, Z->Z: 200m.
          # @!attribute [rw] point_type
          #   @return [Google::Maps::Playablelocations::V3::Sample::SpacingOptions::PointType]
          #     Specifies whether the minimum spacing constraint applies to the
          #     center-point or to the snapped point of playable locations. The default
          #     value is `CENTER_POINT`.
          #
          #     If a snapped point is not available for a playable location, its
          #     center-point is used instead.
          #
          #     Set this to the point type used in your game.
          class SpacingOptions
            # Specifies whether the playable location's geographic coordinates (latitude
            # and longitude) correspond to its center-point, or to its location snapped
            # to the sidewalk of the nearest road.
            module PointType
              # Unspecified point type. Do not use this value.
              POINT_TYPE_UNSPECIFIED = 0

              # The geographic coordinates correspond to the center of the location.
              CENTER_POINT = 1

              # The geographic coordinates correspond to the location snapped to the
              # sidewalk of the nearest road (when a nearby road exists).
              SNAPPED_POINT = 2
            end
          end

          # Specifies the filters to use when searching for playable locations.
          # @!attribute [rw] max_location_count
          #   @return [Integer]
          #     Specifies the maximum number of playable locations to return. This value
          #     must not be greater than 1000. The default value is 100.
          #
          #     Only the top-ranking playable locations are returned.
          # @!attribute [rw] spacing
          #   @return [Google::Maps::Playablelocations::V3::Sample::SpacingOptions]
          #     A set of options that control the spacing between playable locations. By
          #     default the minimum distance between locations is 200m.
          # @!attribute [rw] included_types
          #   @return [Array<String>]
          #     Restricts the set of playable locations to just the
          #     [types](https://cloud.google.com/maps/tt/games/types) that you want.
          class Filter; end

          # Encapsulates a filter criterion for searching for a set of playable
          # locations.
          # @!attribute [rw] game_object_type
          #   @return [Integer]
          #     Required. An arbitrary, developer-defined identifier of the type of game
          #     object that the playable location is used for. This field allows you to
          #     specify criteria per game object type when searching for playable
          #     locations.
          #
          #     You should assign a unique `game_object_type` ID across all
          #     `request_criteria` to represent a distinct type of game object. For
          #     example, 1=monster location, 2=powerup location.
          #
          #     The response contains a map<game_object_type, Response>.
          # @!attribute [rw] filter
          #   @return [Google::Maps::Playablelocations::V3::Sample::Filter]
          #     Specifies filtering options, and specifies what will be included in the
          #     result set.
          # @!attribute [rw] fields_to_return
          #   @return [Google::Protobuf::FieldMask]
          #     Specifies which `PlayableLocation` fields are returned.
          #
          #     `name` (which is used for logging impressions), `center_point` and
          #     `place_id` (or `plus_code`) are always returned.
          #
          #     The following fields are omitted unless you specify them here:
          #
          #     * snapped_point
          #       * types
          #
          #       Note: The more fields you include, the more expensive in terms of data and
          #       associated latency your query will be.
          class Criterion; end

          # Specifies the area to search for playable locations.
          # @!attribute [rw] s2_cell_id
          #   @return [Integer]
          #     Required. The S2 cell ID of the area you want. This must be between cell
          #     level 11 and 14 (inclusive).
          #
          #     S2 cells are 64-bit integers that identify areas on the Earth. They are
          #     hierarchical, and can therefore be used for spatial indexing.
          #
          #     The S2 geometry library is available in a number of languages:
          #
          #     * [C++](https://github.com/google/s2geometry)
          #       * [Java](https://github.com/google/s2-geometry-library-java)
          #       * [Go](https://github.com/golang/geo)
          #       * [Python](https://github.com/google/s2geometry/tree/master/src/python)
          class AreaFilter; end

          # A list of PlayableLocation objects that satisfies a single Criterion.
          # @!attribute [rw] locations
          #   @return [Array<Google::Maps::Playablelocations::V3::Sample::PlayableLocation>]
          #     A list of playable locations for this game object type.
          class PlayableLocationList; end
        end
      end
    end
  end
end