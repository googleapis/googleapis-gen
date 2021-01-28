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
    module Dataqna
      module V1alpha
        # Request for query suggestions.
        # @!attribute [rw] parent
        #   @return [String]
        #     Required. The parent of the suggestion query is the resource denoting the project and
        #     location.
        # @!attribute [rw] scopes
        #   @return [Array<String>]
        #     The scopes to which this search is restricted. The only supported scope
        #     pattern is
        #     `//bigquery.googleapis.com/projects/{GCP-PROJECT-ID}/datasets/{DATASET-ID}/tables/{TABLE-ID}`.
        # @!attribute [rw] query
        #   @return [String]
        #     User query for which to generate suggestions. If the query is empty, zero
        #     state suggestions are returned. This allows UIs to display suggestions
        #     right away, helping the user to get a sense of what a query might look
        #     like.
        # @!attribute [rw] suggestion_types
        #   @return [Array<Google::Cloud::Dataqna::V1alpha::SuggestionType>]
        #     The requested suggestion type. Multiple suggestion types can be
        #     requested, but there is no guarantee that the service will return
        #     suggestions for each type. Suggestions for a requested type might rank
        #     lower than suggestions for other types and the service may decide to cut
        #     these suggestions off.
        class SuggestQueriesRequest; end

        # A suggestion for a query with a ranking score.
        # @!attribute [rw] suggestion_info
        #   @return [Google::Cloud::Dataqna::V1alpha::SuggestionInfo]
        #     Detailed information about the suggestion.
        # @!attribute [rw] ranking_score
        #   @return [Float]
        #     The score of the suggestion. This can be used to define ordering in UI.
        #     The score represents confidence in the suggestion where higher is better.
        #     All score values must be in the range [0, 1).
        # @!attribute [rw] suggestion_type
        #   @return [Google::Cloud::Dataqna::V1alpha::SuggestionType]
        #     The type of the suggestion.
        class Suggestion; end

        # Detailed information about the suggestion.
        # @!attribute [rw] annotated_suggestion
        #   @return [Google::Cloud::Dataqna::V1alpha::AnnotatedString]
        #     Annotations for the suggestion. This provides information about which part
        #     of the suggestion corresponds to what semantic meaning (e.g. a metric).
        # @!attribute [rw] query_matches
        #   @return [Array<Google::Cloud::Dataqna::V1alpha::SuggestionInfo::MatchInfo>]
        #     Matches between user query and the annotated string.
        class SuggestionInfo
          # MatchInfo describes which part of suggestion matched with data in user
          # typed query. This can be used to highlight matching parts in the UI. This
          # is different from the annotations provided in annotated_suggestion. The
          # annotated_suggestion provides information about the semantic meaning, while
          # this provides information about how it relates to the input.
          #
          # Example:
          # user query: `top products`
          #
          # ```
          # annotated_suggestion {
          #  text_formatted = "top product_group"
          #  html_formatted = "top <b>product_group</b>"
          #  markups {
          #   {type: TEXT, start_char_index: 0, length: 3}
          #   {type: DIMENSION, start_char_index: 4, length: 13}
          #  }
          # }
          #
          # query_matches {
          #  { start_char_index: 0, length: 3 }
          #  { start_char_index: 4, length: 7}
          # }
          # ```
          # @!attribute [rw] start_char_index
          #   @return [Integer]
          #     Unicode character index of the string annotation.
          # @!attribute [rw] length
          #   @return [Integer]
          #     Count of unicode characters of this substring.
          class MatchInfo; end
        end

        # Response to SuggestQueries.
        # @!attribute [rw] suggestions
        #   @return [Array<Google::Cloud::Dataqna::V1alpha::Suggestion>]
        #     A list of suggestions.
        class SuggestQueriesResponse; end

        # The type of suggestion.
        module SuggestionType
          # No suggestiont type is specified.
          SUGGESTION_TYPE_UNSPECIFIED = 0

          # Entity suggestion type. Suggestions are for single entities.
          ENTITY = 1

          # Template suggestion type. Suggestions are for full sentences.
          TEMPLATE = 2
        end
      end
    end
  end
end