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
  module Analytics
    module Admin
      module V1alpha
        # A resource message representing a Google Analytics account.
        # @!attribute [rw] name
        #   @return [String]
        #     Output only. Resource name of this account.
        #     Format: accounts/{account}
        #     Example: "accounts/100"
        # @!attribute [rw] create_time
        #   @return [Google::Protobuf::Timestamp]
        #     Output only. Time when this account was originally created.
        # @!attribute [rw] update_time
        #   @return [Google::Protobuf::Timestamp]
        #     Output only. Time when account payload fields were last updated.
        # @!attribute [rw] display_name
        #   @return [String]
        #     Required. Human-readable display name for this account.
        # @!attribute [rw] region_code
        #   @return [String]
        #     Country of business. Must be a Unicode CLDR region code.
        # @!attribute [rw] deleted
        #   @return [true, false]
        #     Output only. Indicates whether this Account is soft-deleted or not. Deleted
        #     accounts are excluded from List results unless specifically requested.
        class Account; end

        # A resource message representing a Google Analytics GA4 property.
        # @!attribute [rw] name
        #   @return [String]
        #     Output only. Resource name of this property.
        #     Format: properties/{property_id}
        #     Example: "properties/1000"
        # @!attribute [rw] create_time
        #   @return [Google::Protobuf::Timestamp]
        #     Output only. Time when the entity was originally created.
        # @!attribute [rw] update_time
        #   @return [Google::Protobuf::Timestamp]
        #     Output only. Time when entity payload fields were last updated.
        # @!attribute [rw] parent
        #   @return [String]
        #     Immutable. Resource name of this property's logical parent.
        #
        #     Note: The Property-Moving UI can be used to change the parent.
        #     Format: accounts/{account}
        #     Example: "accounts/100"
        # @!attribute [rw] display_name
        #   @return [String]
        #     Required. Human-readable display name for this property.
        #
        #     The max allowed display name length is 100 UTF-16 code units.
        # @!attribute [rw] industry_category
        #   @return [Google::Analytics::Admin::V1alpha::IndustryCategory]
        #     Industry associated with this property
        #     Example: AUTOMOTIVE, FOOD_AND_DRINK
        # @!attribute [rw] time_zone
        #   @return [String]
        #     Reporting Time Zone, used as the day boundary for reports, regardless of
        #     where the data originates. If the time zone honors DST, Analytics will
        #     automatically adjust for the changes.
        #
        #     NOTE: Changing the time zone only affects data going forward, and is not
        #     applied retroactively.
        #
        #     Format: https://www.iana.org/time-zones
        #     Example: "America/Los_Angeles"
        # @!attribute [rw] currency_code
        #   @return [String]
        #     The currency type used in reports involving monetary values.
        #
        #
        #     Format: https://en.wikipedia.org/wiki/ISO_4217
        #     Examples: "USD", "EUR", "JPY"
        # @!attribute [rw] deleted
        #   @return [true, false]
        #     Output only. Indicates whether this Property is soft-deleted or not. Deleted properties
        #     are excluded from List results unless specifically requested.
        class Property; end

        # A resource message representing a Google Analytics Android app stream.
        # @!attribute [rw] name
        #   @return [String]
        #     Output only. Resource name of this Data Stream.
        #     Format: properties/{property_id}/androidAppDataStreams/{stream_id}
        #     Example: "properties/1000/androidAppDataStreams/2000"
        # @!attribute [rw] firebase_app_id
        #   @return [String]
        #     Output only. ID of the corresponding Android app in Firebase, if any.
        #     This ID can change if the Android app is deleted and recreated.
        # @!attribute [rw] create_time
        #   @return [Google::Protobuf::Timestamp]
        #     Output only. Time when this stream was originally created.
        # @!attribute [rw] update_time
        #   @return [Google::Protobuf::Timestamp]
        #     Output only. Time when stream payload fields were last updated.
        # @!attribute [rw] package_name
        #   @return [String]
        #     Immutable. The package name for the app being measured.
        #     Example: "com.example.myandroidapp"
        # @!attribute [rw] display_name
        #   @return [String]
        #     Human-readable display name for the Data Stream.
        #
        #     The max allowed display name length is 255 UTF-16 code units.
        class AndroidAppDataStream; end

        # A resource message representing a Google Analytics IOS app stream.
        # @!attribute [rw] name
        #   @return [String]
        #     Output only. Resource name of this Data Stream.
        #     Format: properties/{property_id}/iosAppDataStreams/{stream_id}
        #     Example: "properties/1000/iosAppDataStreams/2000"
        # @!attribute [rw] firebase_app_id
        #   @return [String]
        #     Output only. ID of the corresponding iOS app in Firebase, if any.
        #     This ID can change if the iOS app is deleted and recreated.
        # @!attribute [rw] create_time
        #   @return [Google::Protobuf::Timestamp]
        #     Output only. Time when this stream was originally created.
        # @!attribute [rw] update_time
        #   @return [Google::Protobuf::Timestamp]
        #     Output only. Time when stream payload fields were last updated.
        # @!attribute [rw] bundle_id
        #   @return [String]
        #     Required. Immutable. The Apple App Store Bundle ID for the app
        #     Example: "com.example.myiosapp"
        # @!attribute [rw] display_name
        #   @return [String]
        #     Human-readable display name for the Data Stream.
        #
        #     The max allowed display name length is 255 UTF-16 code units.
        class IosAppDataStream; end

        # A resource message representing a Google Analytics web stream.
        # @!attribute [rw] name
        #   @return [String]
        #     Output only. Resource name of this Data Stream.
        #     Format: properties/{property_id}/webDataStreams/{stream_id}
        #     Example: "properties/1000/webDataStreams/2000"
        # @!attribute [rw] measurement_id
        #   @return [String]
        #     Output only. Analytics "Measurement ID", without the "G-" prefix.
        #     Example: "G-1A2BCD345E" would just be "1A2BCD345E"
        # @!attribute [rw] firebase_app_id
        #   @return [String]
        #     Output only. ID of the corresponding web app in Firebase, if any.
        #     This ID can change if the web app is deleted and recreated.
        # @!attribute [rw] create_time
        #   @return [Google::Protobuf::Timestamp]
        #     Output only. Time when this stream was originally created.
        # @!attribute [rw] update_time
        #   @return [Google::Protobuf::Timestamp]
        #     Output only. Time when stream payload fields were last updated.
        # @!attribute [rw] default_uri
        #   @return [String]
        #     Immutable. Domain name of the web app being measured, or empty.
        #     Example: "http://www.google.com", "https://www.google.com"
        # @!attribute [rw] display_name
        #   @return [String]
        #     Required. Human-readable display name for the Data Stream.
        #
        #     The max allowed display name length is 100 UTF-16 code units.
        class WebDataStream; end

        # A resource message representing a user's permissions on an Account or
        # Property resource.
        # @!attribute [rw] name
        #   @return [String]
        #     Example format: properties/1234/userLinks/5678
        # @!attribute [rw] email_address
        #   @return [String]
        #     Email address of the user to link
        # @!attribute [rw] direct_roles
        #   @return [Array<String>]
        #     Roles directly assigned to this user for this account or property.
        #
        #     Valid values:
        #     predefinedRoles/read
        #     predefinedRoles/collaborate
        #     predefinedRoles/edit
        #     predefinedRoles/manage-users
        #
        #     Excludes roles that are inherited from a higher-level entity, group,
        #     or organization admin role.
        #
        #     A UserLink that is updated to have an empty list of direct_roles will be
        #     deleted.
        class UserLink; end

        # Read-only resource used to summarize a principal's effective roles.
        # @!attribute [rw] name
        #   @return [String]
        #     Example format: properties/1234/userLinks/5678
        # @!attribute [rw] email_address
        #   @return [String]
        #     Email address of the linked user
        # @!attribute [rw] direct_roles
        #   @return [Array<String>]
        #     Roles directly assigned to this user for this entity.
        #
        #     Format: predefinedRoles/read
        #
        #     Excludes roles that are inherited from an account (if this is for a
        #     property), group, or organization admin role.
        # @!attribute [rw] effective_roles
        #   @return [Array<String>]
        #     Union of all permissions a user has at this account or property (includes
        #     direct permissions, group-inherited permissions, etc.).
        #
        #     Format: predefinedRoles/read
        class AuditUserLink; end

        # Singleton resource under a WebDataStream, configuring measurement of
        # additional site interactions and content.
        # @!attribute [rw] name
        #   @return [String]
        #     Output only. Resource name of this Data Stream.
        #     Format:
        #     properties/{property_id}/webDataStreams/{stream_id}/enhancedMeasurementSettings
        #     Example: "properties/1000/webDataStreams/2000/enhancedMeasurementSettings"
        # @!attribute [rw] stream_enabled
        #   @return [true, false]
        #     Indicates whether Enhanced Measurement Settings will be used to
        #     automatically measure interactions and content on this web stream.
        #
        #     Changing this value does not affect the settings themselves, but determines
        #     whether they are respected.
        # @!attribute [rw] page_views_enabled
        #   @return [true, false]
        #     Output only. If enabled, capture a page view event each time a page loads or the
        #     website changes the browser history state.
        # @!attribute [rw] scrolls_enabled
        #   @return [true, false]
        #     If enabled, capture scroll events each time a visitor gets to the bottom of
        #     a page.
        # @!attribute [rw] outbound_clicks_enabled
        #   @return [true, false]
        #     If enabled, capture an outbound click event each time a visitor clicks a
        #     link that leads them away from your domain.
        # @!attribute [rw] site_search_enabled
        #   @return [true, false]
        #     If enabled, capture a view search results event each time a visitor
        #     performs a search on your site (based on a query parameter).
        # @!attribute [rw] video_engagement_enabled
        #   @return [true, false]
        #     If enabled, capture video play, progress, and complete events as visitors
        #     view embedded videos on your site.
        # @!attribute [rw] file_downloads_enabled
        #   @return [true, false]
        #     If enabled, capture a file download event each time a link is clicked with
        #     a common document, compressed file, application, video, or audio extension.
        # @!attribute [rw] page_loads_enabled
        #   @return [true, false]
        #     Output only. If enabled, capture a page view event each time a page loads.
        # @!attribute [rw] page_changes_enabled
        #   @return [true, false]
        #     If enabled, capture a page view event each time the website changes the
        #     browser history state.
        # @!attribute [rw] search_query_parameter
        #   @return [String]
        #     Required. URL query parameters to interpret as site search parameters.
        #     Max length is 1024 characters. Must not be empty.
        # @!attribute [rw] uri_query_parameter
        #   @return [String]
        #     Additional URL query parameters.
        #     Max length is 1024 characters.
        class EnhancedMeasurementSettings; end

        # A link between an GA4 property and a Firebase project.
        # @!attribute [rw] name
        #   @return [String]
        #     Output only. Example format: properties/1234/firebaseLinks/5678
        # @!attribute [rw] project
        #   @return [String]
        #     Immutable. Firebase project resource name. When creating a FirebaseLink, you may
        #     provide this resource name using either a project number or project ID.
        #     Once this resource has been created, returned FirebaseLinks will always
        #     have a project_name that contains a project number.
        #
        #     Format: 'projects/{project number}'
        #     Example: 'projects/1234'
        # @!attribute [rw] create_time
        #   @return [Google::Protobuf::Timestamp]
        #     Output only. Time when this FirebaseLink was originally created.
        # @!attribute [rw] maximum_user_access
        #   @return [Google::Analytics::Admin::V1alpha::MaximumUserAccess]
        #     Maximum user access to the GA4 property allowed to admins of
        #     the linked Firebase project.
        class FirebaseLink; end

        # Read-only resource with the tag for sending data from a website to a
        # WebDataStream.
        # @!attribute [rw] name
        #   @return [String]
        #     Output only. Resource name for this GlobalSiteTag resource.
        #     Format: properties/{propertyId}/globalSiteTag
        # @!attribute [rw] snippet
        #   @return [String]
        #     Immutable. JavaScript code snippet to be pasted as the first item into the head tag of
        #     every webpage to measure.
        class GlobalSiteTag; end

        # A link between an GA4 property and a Google Ads account.
        # @!attribute [rw] name
        #   @return [String]
        #     Output only. Format: properties/{propertyId}/googleAdsLinks/{googleAdsLinkId}
        #
        #     Note: googleAdsLinkId is not the Google Ads customer ID.
        # @!attribute [rw] customer_id
        #   @return [String]
        #     Immutable. Google Ads customer ID.
        # @!attribute [rw] can_manage_clients
        #   @return [true, false]
        #     Output only. If true, this link is for a Google Ads manager account.
        # @!attribute [rw] ads_personalization_enabled
        #   @return [Google::Protobuf::BoolValue]
        #     Enable personalized advertising features with this integration.
        #     Automatically publish my Google Analytics audience lists and Google
        #     Analytics remarketing events/parameters to the linked Google Ads account.
        #     If this field is not set on create/update it will be defaulted to true.
        # @!attribute [rw] email_address
        #   @return [String]
        #     Output only. Email address of the user that created the link.
        #     An empty string will be returned if the email address can't be retrieved.
        # @!attribute [rw] create_time
        #   @return [Google::Protobuf::Timestamp]
        #     Output only. Time when this link was originally created.
        # @!attribute [rw] update_time
        #   @return [Google::Protobuf::Timestamp]
        #     Output only. Time when this link was last updated.
        class GoogleAdsLink; end

        # A resource message representing data sharing settings of a Google Analytics
        # account.
        # @!attribute [rw] name
        #   @return [String]
        #     Output only. Resource name.
        #     Format: accounts/{account}/dataSharingSettings
        #     Example: "accounts/1000/dataSharingSettings"
        # @!attribute [rw] sharing_with_google_support_enabled
        #   @return [true, false]
        #     Allows Google support to access the data in order to help troubleshoot
        #     issues.
        # @!attribute [rw] sharing_with_google_assigned_sales_enabled
        #   @return [true, false]
        #     Allows Google sales teams that are assigned to the customer to access the
        #     data in order to suggest configuration changes to improve results.
        #     Sales team restrictions still apply when enabled.
        # @!attribute [rw] sharing_with_google_any_sales_enabled
        #   @return [true, false]
        #     Allows any of Google sales to access the data in order to suggest
        #     configuration changes to improve results.
        # @!attribute [rw] sharing_with_google_products_enabled
        #   @return [true, false]
        #     Allows Google to use the data to improve other Google products or services.
        # @!attribute [rw] sharing_with_others_enabled
        #   @return [true, false]
        #     Allows Google to share the data anonymously in aggregate form with others.
        class DataSharingSettings; end

        # A virtual resource representing an overview of an account and
        # all its child GA4 properties.
        # @!attribute [rw] name
        #   @return [String]
        #     Resource name for this account summary.
        #     Format: accountSummaries/{account_id}
        #     Example: "accountSummaries/1000"
        # @!attribute [rw] account
        #   @return [String]
        #     Resource name of account referred to by this account summary
        #     Format: accounts/{account_id}
        #     Example: "accounts/1000"
        # @!attribute [rw] display_name
        #   @return [String]
        #     Display name for the account referred to in this account summary.
        # @!attribute [rw] property_summaries
        #   @return [Array<Google::Analytics::Admin::V1alpha::PropertySummary>]
        #     List of summaries for child accounts of this account.
        class AccountSummary; end

        # A virtual resource representing metadata for an GA4 property.
        # @!attribute [rw] property
        #   @return [String]
        #     Resource name of property referred to by this property summary
        #     Format: properties/{property_id}
        #     Example: "properties/1000"
        # @!attribute [rw] display_name
        #   @return [String]
        #     Display name for the property referred to in this account summary.
        class PropertySummary; end

        # The category selected for this property, used for industry benchmarking.
        module IndustryCategory
          # Industry category unspecified
          INDUSTRY_CATEGORY_UNSPECIFIED = 0

          # Automotive
          AUTOMOTIVE = 1

          # Business and industrial markets
          BUSINESS_AND_INDUSTRIAL_MARKETS = 2

          # Finance
          FINANCE = 3

          # Healthcare
          HEALTHCARE = 4

          # Technology
          TECHNOLOGY = 5

          # Travel
          TRAVEL = 6

          # Other
          OTHER = 7

          # Arts and entertainment
          ARTS_AND_ENTERTAINMENT = 8

          # Beauty and fitness
          BEAUTY_AND_FITNESS = 9

          # Books and literature
          BOOKS_AND_LITERATURE = 10

          # Food and drink
          FOOD_AND_DRINK = 11

          # Games
          GAMES = 12

          # Hobbies and leisure
          HOBBIES_AND_LEISURE = 13

          # Home and garden
          HOME_AND_GARDEN = 14

          # Internet and telecom
          INTERNET_AND_TELECOM = 15

          # Law and government
          LAW_AND_GOVERNMENT = 16

          # News
          NEWS = 17

          # Online communities
          ONLINE_COMMUNITIES = 18

          # People and society
          PEOPLE_AND_SOCIETY = 19

          # Pets and animals
          PETS_AND_ANIMALS = 20

          # Real estate
          REAL_ESTATE = 21

          # Reference
          REFERENCE = 22

          # Science
          SCIENCE = 23

          # Sports
          SPORTS = 24

          # Jobs and education
          JOBS_AND_EDUCATION = 25

          # Shopping
          SHOPPING = 26
        end

        # Maximum access settings that Firebase user receive on the linked Analytics
        # property.
        module MaximumUserAccess
          # Unspecified maximum user access.
          MAXIMUM_USER_ACCESS_UNSPECIFIED = 0

          # Firebase users have no access to the Analytics property.
          NO_ACCESS = 1

          # Firebase users have Read & Analyze access to the Analytics property.
          READ_AND_ANALYZE = 2

          # Firebase users have edit access to the Analytics property, but may not
          # manage the Firebase link.
          EDITOR_WITHOUT_LINK_MANAGEMENT = 3

          # Firebase users have edit access to the Analytics property and may manage
          # the Firebase link.
          EDITOR_INCLUDING_LINK_MANAGEMENT = 4
        end
      end
    end
  end
end