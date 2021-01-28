# frozen_string_literal: true

# Copyright 2021 Google LLC
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

# Auto-generated by gapic-generator-ruby. DO NOT EDIT!


module Google
  module Ads
    module GoogleAds
      module V6
        module Errors
          # Container for enum describing possible criterion errors.
          class CriterionErrorEnum
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods

            # Enum describing possible criterion errors.
            module CriterionError
              # Enum unspecified.
              UNSPECIFIED = 0

              # The received error code is not known in this version.
              UNKNOWN = 1

              # Concrete type of criterion is required for CREATE and UPDATE operations.
              CONCRETE_TYPE_REQUIRED = 2

              # The category requested for exclusion is invalid.
              INVALID_EXCLUDED_CATEGORY = 3

              # Invalid keyword criteria text.
              INVALID_KEYWORD_TEXT = 4

              # Keyword text should be less than 80 chars.
              KEYWORD_TEXT_TOO_LONG = 5

              # Keyword text has too many words.
              KEYWORD_HAS_TOO_MANY_WORDS = 6

              # Keyword text has invalid characters or symbols.
              KEYWORD_HAS_INVALID_CHARS = 7

              # Invalid placement URL.
              INVALID_PLACEMENT_URL = 8

              # Invalid user list criterion.
              INVALID_USER_LIST = 9

              # Invalid user interest criterion.
              INVALID_USER_INTEREST = 10

              # Placement URL has wrong format.
              INVALID_FORMAT_FOR_PLACEMENT_URL = 11

              # Placement URL is too long.
              PLACEMENT_URL_IS_TOO_LONG = 12

              # Indicates the URL contains an illegal character.
              PLACEMENT_URL_HAS_ILLEGAL_CHAR = 13

              # Indicates the URL contains multiple comma separated URLs.
              PLACEMENT_URL_HAS_MULTIPLE_SITES_IN_LINE = 14

              # Indicates the domain is blocked.
              PLACEMENT_IS_NOT_AVAILABLE_FOR_TARGETING_OR_EXCLUSION = 15

              # Invalid topic path.
              INVALID_TOPIC_PATH = 16

              # The YouTube Channel Id is invalid.
              INVALID_YOUTUBE_CHANNEL_ID = 17

              # The YouTube Video Id is invalid.
              INVALID_YOUTUBE_VIDEO_ID = 18

              # Indicates the placement is a YouTube vertical channel, which is no longer
              # supported.
              YOUTUBE_VERTICAL_CHANNEL_DEPRECATED = 19

              # Indicates the placement is a YouTube demographic channel, which is no
              # longer supported.
              YOUTUBE_DEMOGRAPHIC_CHANNEL_DEPRECATED = 20

              # YouTube urls are not supported in Placement criterion. Use YouTubeChannel
              # and YouTubeVideo criterion instead.
              YOUTUBE_URL_UNSUPPORTED = 21

              # Criteria type can not be excluded by the customer, like AOL account type
              # cannot target site type criteria.
              CANNOT_EXCLUDE_CRITERIA_TYPE = 22

              # Criteria type can not be targeted.
              CANNOT_ADD_CRITERIA_TYPE = 23

              # Not allowed to exclude similar user list.
              CANNOT_EXCLUDE_SIMILAR_USER_LIST = 26

              # Not allowed to target a closed user list.
              CANNOT_ADD_CLOSED_USER_LIST = 27

              # Not allowed to add display only UserLists to search only campaigns.
              CANNOT_ADD_DISPLAY_ONLY_LISTS_TO_SEARCH_ONLY_CAMPAIGNS = 28

              # Not allowed to add display only UserLists to search plus campaigns.
              CANNOT_ADD_DISPLAY_ONLY_LISTS_TO_SEARCH_CAMPAIGNS = 29

              # Not allowed to add display only UserLists to shopping campaigns.
              CANNOT_ADD_DISPLAY_ONLY_LISTS_TO_SHOPPING_CAMPAIGNS = 30

              # Not allowed to add User interests to search only campaigns.
              CANNOT_ADD_USER_INTERESTS_TO_SEARCH_CAMPAIGNS = 31

              # Not allowed to set bids for this criterion type in search campaigns
              CANNOT_SET_BIDS_ON_CRITERION_TYPE_IN_SEARCH_CAMPAIGNS = 32

              # Final URLs, URL Templates and CustomParameters cannot be set for the
              # criterion types of Gender, AgeRange, UserList, Placement, MobileApp, and
              # MobileAppCategory in search campaigns and shopping campaigns.
              CANNOT_ADD_URLS_TO_CRITERION_TYPE_FOR_CAMPAIGN_TYPE = 33

              # Invalid combined audience criterion.
              INVALID_COMBINED_AUDIENCE = 122

              # Invalid custom affinity criterion.
              INVALID_CUSTOM_AFFINITY = 96

              # Invalid custom intent criterion.
              INVALID_CUSTOM_INTENT = 97

              # Invalid custom audience criterion.
              INVALID_CUSTOM_AUDIENCE = 121

              # IP address is not valid.
              INVALID_IP_ADDRESS = 34

              # IP format is not valid.
              INVALID_IP_FORMAT = 35

              # Mobile application is not valid.
              INVALID_MOBILE_APP = 36

              # Mobile application category is not valid.
              INVALID_MOBILE_APP_CATEGORY = 37

              # The CriterionId does not exist or is of the incorrect type.
              INVALID_CRITERION_ID = 38

              # The Criterion is not allowed to be targeted.
              CANNOT_TARGET_CRITERION = 39

              # The criterion is not allowed to be targeted as it is deprecated.
              CANNOT_TARGET_OBSOLETE_CRITERION = 40

              # The CriterionId is not valid for the type.
              CRITERION_ID_AND_TYPE_MISMATCH = 41

              # Distance for the radius for the proximity criterion is invalid.
              INVALID_PROXIMITY_RADIUS = 42

              # Units for the distance for the radius for the proximity criterion is
              # invalid.
              INVALID_PROXIMITY_RADIUS_UNITS = 43

              # Street address in the address is not valid.
              INVALID_STREETADDRESS_LENGTH = 44

              # City name in the address is not valid.
              INVALID_CITYNAME_LENGTH = 45

              # Region code in the address is not valid.
              INVALID_REGIONCODE_LENGTH = 46

              # Region name in the address is not valid.
              INVALID_REGIONNAME_LENGTH = 47

              # Postal code in the address is not valid.
              INVALID_POSTALCODE_LENGTH = 48

              # Country code in the address is not valid.
              INVALID_COUNTRY_CODE = 49

              # Latitude for the GeoPoint is not valid.
              INVALID_LATITUDE = 50

              # Longitude for the GeoPoint is not valid.
              INVALID_LONGITUDE = 51

              # The Proximity input is not valid. Both address and geoPoint cannot be
              # null.
              PROXIMITY_GEOPOINT_AND_ADDRESS_BOTH_CANNOT_BE_NULL = 52

              # The Proximity address cannot be geocoded to a valid lat/long.
              INVALID_PROXIMITY_ADDRESS = 53

              # User domain name is not valid.
              INVALID_USER_DOMAIN_NAME = 54

              # Length of serialized criterion parameter exceeded size limit.
              CRITERION_PARAMETER_TOO_LONG = 55

              # Time interval in the AdSchedule overlaps with another AdSchedule.
              AD_SCHEDULE_TIME_INTERVALS_OVERLAP = 56

              # AdSchedule time interval cannot span multiple days.
              AD_SCHEDULE_INTERVAL_CANNOT_SPAN_MULTIPLE_DAYS = 57

              # AdSchedule time interval specified is invalid, endTime cannot be earlier
              # than startTime.
              AD_SCHEDULE_INVALID_TIME_INTERVAL = 58

              # The number of AdSchedule entries in a day exceeds the limit.
              AD_SCHEDULE_EXCEEDED_INTERVALS_PER_DAY_LIMIT = 59

              # CriteriaId does not match the interval of the AdSchedule specified.
              AD_SCHEDULE_CRITERION_ID_MISMATCHING_FIELDS = 60

              # Cannot set bid modifier for this criterion type.
              CANNOT_BID_MODIFY_CRITERION_TYPE = 61

              # Cannot bid modify criterion, since it is opted out of the campaign.
              CANNOT_BID_MODIFY_CRITERION_CAMPAIGN_OPTED_OUT = 62

              # Cannot set bid modifier for a negative criterion.
              CANNOT_BID_MODIFY_NEGATIVE_CRITERION = 63

              # Bid Modifier already exists. Use SET operation to update.
              BID_MODIFIER_ALREADY_EXISTS = 64

              # Feed Id is not allowed in these Location Groups.
              FEED_ID_NOT_ALLOWED = 65

              # The account may not use the requested criteria type. For example, some
              # accounts are restricted to keywords only.
              ACCOUNT_INELIGIBLE_FOR_CRITERIA_TYPE = 66

              # The requested criteria type cannot be used with campaign or ad group
              # bidding strategy.
              CRITERIA_TYPE_INVALID_FOR_BIDDING_STRATEGY = 67

              # The Criterion is not allowed to be excluded.
              CANNOT_EXCLUDE_CRITERION = 68

              # The criterion is not allowed to be removed. For example, we cannot remove
              # any of the device criterion.
              CANNOT_REMOVE_CRITERION = 69

              # Bidding categories do not form a valid path in the Shopping bidding
              # category taxonomy.
              INVALID_PRODUCT_BIDDING_CATEGORY = 76

              # ShoppingSetting must be added to the campaign before ProductScope
              # criteria can be added.
              MISSING_SHOPPING_SETTING = 77

              # Matching function is invalid.
              INVALID_MATCHING_FUNCTION = 78

              # Filter parameters not allowed for location groups targeting.
              LOCATION_FILTER_NOT_ALLOWED = 79

              # Feed not found, or the feed is not an enabled location feed.
              INVALID_FEED_FOR_LOCATION_FILTER = 98

              # Given location filter parameter is invalid for location groups targeting.
              LOCATION_FILTER_INVALID = 80

              # Cannot set geo target constants and feed item sets at the same time.
              CANNOT_SET_GEO_TARGET_CONSTANTS_WITH_FEED_ITEM_SETS = 123

              # The location group radius is in the range but not at the valid increment.
              INVALID_LOCATION_GROUP_RADIUS = 124

              # The location group radius unit is invalid.
              INVALID_LOCATION_GROUP_RADIUS_UNIT = 125

              # Criteria type cannot be associated with a campaign and its ad group(s)
              # simultaneously.
              CANNOT_ATTACH_CRITERIA_AT_CAMPAIGN_AND_ADGROUP = 81

              # Range represented by hotel length of stay's min nights and max nights
              # overlaps with an existing criterion.
              HOTEL_LENGTH_OF_STAY_OVERLAPS_WITH_EXISTING_CRITERION = 82

              # Range represented by hotel advance booking window's min days and max days
              # overlaps with an existing criterion.
              HOTEL_ADVANCE_BOOKING_WINDOW_OVERLAPS_WITH_EXISTING_CRITERION = 83

              # The field is not allowed to be set when the negative field is set to
              # true, e.g. we don't allow bids in negative ad group or campaign criteria.
              FIELD_INCOMPATIBLE_WITH_NEGATIVE_TARGETING = 84

              # The combination of operand and operator in webpage condition is invalid.
              INVALID_WEBPAGE_CONDITION = 85

              # The URL of webpage condition is invalid.
              INVALID_WEBPAGE_CONDITION_URL = 86

              # The URL of webpage condition cannot be empty or contain white space.
              WEBPAGE_CONDITION_URL_CANNOT_BE_EMPTY = 87

              # The URL of webpage condition contains an unsupported protocol.
              WEBPAGE_CONDITION_URL_UNSUPPORTED_PROTOCOL = 88

              # The URL of webpage condition cannot be an IP address.
              WEBPAGE_CONDITION_URL_CANNOT_BE_IP_ADDRESS = 89

              # The domain of the URL is not consistent with the domain in campaign
              # setting.
              WEBPAGE_CONDITION_URL_DOMAIN_NOT_CONSISTENT_WITH_CAMPAIGN_SETTING = 90

              # The URL of webpage condition cannot be a public suffix itself.
              WEBPAGE_CONDITION_URL_CANNOT_BE_PUBLIC_SUFFIX = 91

              # The URL of webpage condition has an invalid public suffix.
              WEBPAGE_CONDITION_URL_INVALID_PUBLIC_SUFFIX = 92

              # Value track parameter is not supported in webpage condition URL.
              WEBPAGE_CONDITION_URL_VALUE_TRACK_VALUE_NOT_SUPPORTED = 93

              # Only one URL-EQUALS webpage condition is allowed in a webpage
              # criterion and it cannot be combined with other conditions.
              WEBPAGE_CRITERION_URL_EQUALS_CAN_HAVE_ONLY_ONE_CONDITION = 94

              # A webpage criterion cannot be added to a non-DSA ad group.
              WEBPAGE_CRITERION_NOT_SUPPORTED_ON_NON_DSA_AD_GROUP = 95

              # Cannot add positive user list criteria in Smart Display campaigns.
              CANNOT_TARGET_USER_LIST_FOR_SMART_DISPLAY_CAMPAIGNS = 99

              # Cannot add positive placement criterion types in search campaigns.
              CANNOT_TARGET_PLACEMENTS_FOR_SEARCH_CAMPAIGNS = 126

              # Listing scope contains too many dimension types.
              LISTING_SCOPE_TOO_MANY_DIMENSION_TYPES = 100

              # Listing scope has too many IN operators.
              LISTING_SCOPE_TOO_MANY_IN_OPERATORS = 101

              # Listing scope contains IN operator on an unsupported dimension type.
              LISTING_SCOPE_IN_OPERATOR_NOT_SUPPORTED = 102

              # There are dimensions with duplicate dimension type.
              DUPLICATE_LISTING_DIMENSION_TYPE = 103

              # There are dimensions with duplicate dimension value.
              DUPLICATE_LISTING_DIMENSION_VALUE = 104

              # Listing group SUBDIVISION nodes cannot have bids.
              CANNOT_SET_BIDS_ON_LISTING_GROUP_SUBDIVISION = 105

              # Ad group is invalid due to the listing groups it contains.
              INVALID_LISTING_GROUP_HIERARCHY = 106

              # Listing group unit cannot have children.
              LISTING_GROUP_UNIT_CANNOT_HAVE_CHILDREN = 107

              # Subdivided listing groups must have an "others" case.
              LISTING_GROUP_SUBDIVISION_REQUIRES_OTHERS_CASE = 108

              # Dimension type of listing group must be the same as that of its siblings.
              LISTING_GROUP_REQUIRES_SAME_DIMENSION_TYPE_AS_SIBLINGS = 109

              # Listing group cannot be added to the ad group because it already exists.
              LISTING_GROUP_ALREADY_EXISTS = 110

              # Listing group referenced in the operation was not found in the ad group.
              LISTING_GROUP_DOES_NOT_EXIST = 111

              # Recursive removal failed because listing group subdivision is being
              # created or modified in this request.
              LISTING_GROUP_CANNOT_BE_REMOVED = 112

              # Listing group type is not allowed for specified ad group criterion type.
              INVALID_LISTING_GROUP_TYPE = 113

              # Listing group in an ADD operation specifies a non temporary criterion id.
              LISTING_GROUP_ADD_MAY_ONLY_USE_TEMP_ID = 114

              # The combined length of dimension values of the Listing scope criterion
              # is too long.
              LISTING_SCOPE_TOO_LONG = 115

              # Listing scope contains too many dimensions.
              LISTING_SCOPE_TOO_MANY_DIMENSIONS = 116

              # The combined length of dimension values of the Listing group criterion is
              # too long.
              LISTING_GROUP_TOO_LONG = 117

              # Listing group tree is too deep.
              LISTING_GROUP_TREE_TOO_DEEP = 118

              # Listing dimension is invalid (e.g. dimension contains illegal value,
              # dimension type is represented with wrong class, etc). Listing dimension
              # value can not contain "==" or "&+".
              INVALID_LISTING_DIMENSION = 119

              # Listing dimension type is either invalid for campaigns of this type or
              # cannot be used in the current context. BIDDING_CATEGORY_Lx and
              # PRODUCT_TYPE_Lx dimensions must be used in ascending order of their
              # levels: L1, L2, L3, L4, L5... The levels must be specified sequentially
              # and start from L1. Furthermore, an "others" Listing group cannot be
              # subdivided with a dimension of the same type but of a higher level
              # ("others" BIDDING_CATEGORY_L3 can be subdivided with BRAND but not with
              # BIDDING_CATEGORY_L4).
              INVALID_LISTING_DIMENSION_TYPE = 120

              # Customer is not on allowlist for composite audience in display campaigns.
              ADVERTISER_NOT_ON_ALLOWLIST_FOR_COMBINED_AUDIENCE_ON_DISPLAY = 127

              # Cannot target on a removed combined audience.
              CANNOT_TARGET_REMOVED_COMBINED_AUDIENCE = 128

              # Combined audience ID is invalid.
              INVALID_COMBINED_AUDIENCE_ID = 129

              # Can not target removed combined audience.
              CANNOT_TARGET_REMOVED_CUSTOM_AUDIENCE = 130
            end
          end
        end
      end
    end
  end
end
