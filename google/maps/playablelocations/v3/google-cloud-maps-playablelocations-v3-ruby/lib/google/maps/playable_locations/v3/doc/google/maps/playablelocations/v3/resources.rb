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
        # A report submitted by a player about a playable location that is considered
        # inappropriate for use in the game.
        # @!attribute [rw] location_name
        #   @return [String]
        #     Required. The name of the playable location.
        # @!attribute [rw] reasons
        #   @return [Array<Google::Maps::Playablelocations::V3::PlayerReport::BadLocationReason>]
        #     Required. One or more reasons why this playable location is considered bad.
        # @!attribute [rw] reason_details
        #   @return [String]
        #     Required. A free-form description detailing why the playable location is
        #     considered bad.
        # @!attribute [rw] language_code
        #   @return [String]
        #     Language code (in BCP-47 format) indicating the language of the freeform
        #     description provided in `reason_details`. Examples are "en", "en-US" or
        #     "ja-Latn". For more information, see
        #     http://www.unicode.org/reports/tr35/#Unicode_locale_identifier.
        class PlayerReport
          # The reason why the playable location is considered bad.
          module BadLocationReason
            # Unspecified reason. Do not use.
            BAD_LOCATION_REASON_UNSPECIFIED = 0

            # The reason isn't one of the reasons in this enumeration.
            OTHER = 1

            # The playable location isn't accessible to pedestrians. For example, if
            # it's in the middle of a highway.
            NOT_PEDESTRIAN_ACCESSIBLE = 2

            # The playable location isn't open to the public. For example, a private
            # office building.
            NOT_OPEN_TO_PUBLIC = 4

            # The playable location is permanently closed. For example, when a business
            # has been shut down.
            PERMANENTLY_CLOSED = 5

            # The playable location is temporarily inaccessible. For example, when a
            # business has closed for renovations.
            TEMPORARILY_INACCESSIBLE = 6
          end
        end

        # Encapsulates impression event details.
        # @!attribute [rw] location_name
        #   @return [String]
        #     Required. The name of the playable location.
        # @!attribute [rw] impression_type
        #   @return [Google::Maps::Playablelocations::V3::Impression::ImpressionType]
        #     Required. The type of impression event.
        # @!attribute [rw] game_object_type
        #   @return [Integer]
        #     An arbitrary, developer-defined type identifier for each type of game
        #     object used in your game.
        #
        #     Since players interact with differ types of game objects in different ways,
        #     this field allows you to segregate impression data by type for analysis.
        #
        #     You should assign a unique `game_object_type` ID to represent a distinct
        #     type of game object in your game.
        #
        #     For example, 1=monster location, 2=powerup location.
        class Impression
          # The type of impression event.
          module ImpressionType
            # Unspecified type. Do not use.
            IMPRESSION_TYPE_UNSPECIFIED = 0

            # The playable location was presented to a player.
            PRESENTED = 1

            # A player interacted with the playable location.
            INTERACTED = 2
          end
        end
      end
    end
  end
end