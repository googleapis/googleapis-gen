<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v3/services/customer_service.proto

namespace GPBMetadata\Google\Ads\Googleads\V3\Services;

class CustomerService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
/google/ads/googleads/v3/enums/access_role.protogoogle.ads.googleads.v3.enums"t
AccessRoleEnum"b

AccessRole
UNSPECIFIED 
UNKNOWN	
ADMIN
STANDARD
	READ_ONLY

EMAIL_ONLYB�
!com.google.ads.googleads.v3.enumsBAccessRoleProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v3/enums;enums�GAA�Google.Ads.GoogleAds.V3.Enums�Google\\Ads\\GoogleAds\\V3\\Enums�!Google::Ads::GoogleAds::V3::Enumsbproto3
�
Zgoogle/ads/googleads/v3/enums/customer_pay_per_conversion_eligibility_failure_reason.protogoogle.ads.googleads.v3.enums"�
4CustomerPayPerConversionEligibilityFailureReasonEnum"�
0CustomerPayPerConversionEligibilityFailureReason
UNSPECIFIED 
UNKNOWN
NOT_ENOUGH_CONVERSIONS
CONVERSION_LAG_TOO_HIGH#
HAS_CAMPAIGN_WITH_SHARED_BUDGET 
HAS_UPLOAD_CLICKS_CONVERSION 
AVERAGE_DAILY_SPEND_TOO_HIGH
ANALYSIS_NOT_COMPLETE	
OTHERB�
!com.google.ads.googleads.v3.enumsB5CustomerPayPerConversionEligibilityFailureReasonProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v3/enums;enums�GAA�Google.Ads.GoogleAds.V3.Enums�Google\\Ads\\GoogleAds\\V3\\Enums�!Google::Ads::GoogleAds::V3::Enumsbproto3
�
0google/ads/googleads/v3/resources/customer.proto!google.ads.googleads.v3.resourcesgoogle/api/field_behavior.protogoogle/api/resource.protogoogle/protobuf/wrappers.protogoogle/api/annotations.proto"�	
Customer@
resource_name (	B)�A�A#
!googleads.googleapis.com/Customer,
id (2.google.protobuf.Int64ValueB�A6
descriptive_name (2.google.protobuf.StringValue8
currency_code (2.google.protobuf.StringValueB�A4
	time_zone (2.google.protobuf.StringValueB�A;
tracking_url_template (2.google.protobuf.StringValue6
final_url_suffix (2.google.protobuf.StringValue8
auto_tagging_enabled (2.google.protobuf.BoolValue;
has_partners_badge	 (2.google.protobuf.BoolValueB�A0
manager (2.google.protobuf.BoolValueB�A5
test_account (2.google.protobuf.BoolValueB�AW
call_reporting_setting
 (27.google.ads.googleads.v3.resources.CallReportingSettingf
conversion_tracking_setting (2<.google.ads.googleads.v3.resources.ConversionTrackingSettingB�AW
remarketing_setting (25.google.ads.googleads.v3.resources.RemarketingSettingB�A�
.pay_per_conversion_eligibility_failure_reasons (2�.google.ads.googleads.v3.enums.CustomerPayPerConversionEligibilityFailureReasonEnum.CustomerPayPerConversionEligibilityFailureReasonB�A:<�A9
!googleads.googleapis.com/Customercustomers/{customer}"�
CallReportingSetting:
call_reporting_enabled (2.google.protobuf.BoolValueE
!call_conversion_reporting_enabled (2.google.protobuf.BoolValuel
call_conversion_action	 (2.google.protobuf.StringValueB.�A+
)googleads.googleapis.com/ConversionAction"�
ConversionTrackingSetting@
conversion_tracking_id (2.google.protobuf.Int64ValueB�AN
$cross_account_conversion_tracking_id (2.google.protobuf.Int64ValueB�A"W
RemarketingSettingA
google_global_site_tag (2.google.protobuf.StringValueB�AB�
%com.google.ads.googleads.v3.resourcesBCustomerProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v3/resources;resources�GAA�!Google.Ads.GoogleAds.V3.Resources�!Google\\Ads\\GoogleAds\\V3\\Resources�%Google::Ads::GoogleAds::V3::Resourcesbproto3
�
7google/ads/googleads/v3/services/customer_service.proto google.ads.googleads.v3.services0google/ads/googleads/v3/resources/customer.protogoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto google/protobuf/field_mask.protogoogle/protobuf/wrappers.proto"V
GetCustomerRequest@
resource_name (	B)�A�A#
!googleads.googleapis.com/Customer"�
MutateCustomerRequest
customer_id (	B�AK
	operation (23.google.ads.googleads.v3.services.CustomerOperationB�A
validate_only ("�
CreateCustomerClientRequest
customer_id (	B�AI
customer_client (2+.google.ads.googleads.v3.resources.CustomerB�A3
email_address (2.google.protobuf.StringValueM
access_role (28.google.ads.googleads.v3.enums.AccessRoleEnum.AccessRole"�
CustomerOperation;
update (2+.google.ads.googleads.v3.resources.Customer/
update_mask (2.google.protobuf.FieldMask"5
CreateCustomerClientResponse
resource_name (	"`
MutateCustomerResponseF
result (26.google.ads.googleads.v3.services.MutateCustomerResult"-
MutateCustomerResult
resource_name (	" 
ListAccessibleCustomersRequest"9
ListAccessibleCustomersResponse
resource_names (	2�
CustomerService�
GetCustomer4.google.ads.googleads.v3.services.GetCustomerRequest+.google.ads.googleads.v3.resources.Customer"7���!/v3/{resource_name=customers/*}�Aresource_name�
MutateCustomer7.google.ads.googleads.v3.services.MutateCustomerRequest8.google.ads.googleads.v3.services.MutateCustomerResponse"G���)"$/v3/customers/{customer_id=*}:mutate:*�Acustomer_id,operation�
ListAccessibleCustomers@.google.ads.googleads.v3.services.ListAccessibleCustomersRequestA.google.ads.googleads.v3.services.ListAccessibleCustomersResponse"-���\'%/v3/customers:listAccessibleCustomers�
CreateCustomerClient=.google.ads.googleads.v3.services.CreateCustomerClientRequest>.google.ads.googleads.v3.services.CreateCustomerClientResponse"[���7"2/v3/customers/{customer_id=*}:createCustomerClient:*�Acustomer_id,customer_clientE�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
$com.google.ads.googleads.v3.servicesBCustomerServiceProtoPZHgoogle.golang.org/genproto/googleapis/ads/googleads/v3/services;services�GAA� Google.Ads.GoogleAds.V3.Services� Google\\Ads\\GoogleAds\\V3\\Services�$Google::Ads::GoogleAds::V3::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

