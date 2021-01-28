<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/resources.proto

namespace GPBMetadata\Google\Analytics\Admin\V1Alpha;

class Resources
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        $pool->internalAddGeneratedFile(
            '
�(
.google/analytics/admin/v1alpha/resources.protogoogle.analytics.admin.v1alphagoogle/api/resource.protogoogle/protobuf/timestamp.protogoogle/protobuf/wrappers.proto"�
Account
name (	B�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A
display_name (	B�A
region_code (	
deleted (B�A:>�A;
%analyticsadmin.googleapis.com/Accountaccounts/{account}"�
Property
name (	B�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A
parent (	B�A
display_name (	B�AK
industry_category (20.google.analytics.admin.v1alpha.IndustryCategory
	time_zone (	
currency_code (	
deleted	 (B�A:B�A?
&analyticsadmin.googleapis.com/Propertyproperties/{property}"�
AndroidAppDataStream
name (	B�A
firebase_app_id (	B�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A
package_name (	B�A
display_name (	:~�A{
2analyticsadmin.googleapis.com/AndroidAppDataStreamEproperties/{property}/androidAppDataStreams/{android_app_data_stream}"�
IosAppDataStream
name (	B�A
firebase_app_id (	B�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A
	bundle_id (	B�A�A
display_name (	:r�Ao
.analyticsadmin.googleapis.com/IosAppDataStream=properties/{property}/iosAppDataStreams/{ios_app_data_stream}"�
WebDataStream
name (	B�A
measurement_id (	B�A
firebase_app_id (	B�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A
default_uri (	B�A
display_name (	B�A:h�Ae
+analyticsadmin.googleapis.com/WebDataStream6properties/{property}/webDataStreams/{web_data_stream}"�
UserLink
name (	
email_address (	
direct_roles (	:��A
&analyticsadmin.googleapis.com/UserLink(accounts/{account}/userLinks/{user_link}+properties/{property}/userLinks/{user_link}"c
AuditUserLink
name (	
email_address (	
direct_roles (	
effective_roles (	"�
EnhancedMeasurementSettings
name (	B�A
stream_enabled (
page_views_enabled (B�A
scrolls_enabled (
outbound_clicks_enabled (
site_search_enabled ( 
video_engagement_enabled	 (
file_downloads_enabled
 (
page_loads_enabled (B�A
page_changes_enabled (#
search_query_parameter (	B�A
uri_query_parameter (	:��A�
9analyticsadmin.googleapis.com/EnhancedMeasurementSettingsRproperties/{property}/webDataStreams/{web_data_stream}/enhancedMeasurementSettings"�
FirebaseLink
name (	B�A
project (	B�A4
create_time (2.google.protobuf.TimestampB�AN
maximum_user_access (21.google.analytics.admin.v1alpha.MaximumUserAccess:d�Aa
*analyticsadmin.googleapis.com/FirebaseLink3properties/{property}/firebaseLinks/{firebase_link}"�
GlobalSiteTag
name (	B�A
snippet (	B�A:U�AR
+analyticsadmin.googleapis.com/GlobalSiteTag#properties/{property}/globalSiteTag"�
GoogleAdsLink
name (	B�A
customer_id (	B�A
can_manage_clients (B�A?
ads_personalization_enabled (2.google.protobuf.BoolValue
email_address (	B�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A:h�Ae
+analyticsadmin.googleapis.com/GoogleAdsLink6properties/{property}/googleAdsLinks/{google_ads_link}"�
DataSharingSettings
name (	B�A+
#sharing_with_google_support_enabled (2
*sharing_with_google_assigned_sales_enabled (-
%sharing_with_google_any_sales_enabled (,
$sharing_with_google_products_enabled (#
sharing_with_others_enabled (:^�A[
1analyticsadmin.googleapis.com/DataSharingSettings&accounts/{account}/dataSharingSettings"�
AccountSummary
name (	;
account (	B*�A\'
%analyticsadmin.googleapis.com/Account
display_name (	K
property_summaries (2/.google.analytics.admin.v1alpha.PropertySummary:U�AR
,analyticsadmin.googleapis.com/AccountSummary"accountSummaries/{account_summary}"f
PropertySummary=
property (	B+�A(
&analyticsadmin.googleapis.com/Property
display_name (	*�
MaximumUserAccess#
MAXIMUM_USER_ACCESS_UNSPECIFIED 
	NO_ACCESS
READ_AND_ANALYZE"
EDITOR_WITHOUT_LINK_MANAGEMENT$
 EDITOR_INCLUDING_LINK_MANAGEMENT*�
IndustryCategory!
INDUSTRY_CATEGORY_UNSPECIFIED 

AUTOMOTIVE#
BUSINESS_AND_INDUSTRIAL_MARKETS
FINANCE

HEALTHCARE

TECHNOLOGY

TRAVEL	
OTHER
ARTS_AND_ENTERTAINMENT
BEAUTY_AND_FITNESS	
BOOKS_AND_LITERATURE

FOOD_AND_DRINK	
GAMES
HOBBIES_AND_LEISURE
HOME_AND_GARDEN
INTERNET_AND_TELECOM
LAW_AND_GOVERNMENT
NEWS
ONLINE_COMMUNITIES
PEOPLE_AND_SOCIETY
PETS_AND_ANIMALS
REAL_ESTATE
	REFERENCE
SCIENCE

SPORTS
JOBS_AND_EDUCATION
SHOPPINGB{
"com.google.analytics.admin.v1alphaBResourcesProtoPZCgoogle.golang.org/genproto/googleapis/analytics/admin/v1alpha;adminbproto3'
        , true);

        static::$is_initialized = true;
    }
}

