<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/services/invoice_service.proto

namespace GPBMetadata\Google\Ads\Googleads\V4\Services;

class InvoiceService
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
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
*google/ads/googleads/v4/common/dates.protogoogle.ads.googleads.v4.commongoogle/api/annotations.proto"m
	DateRange0

start_date (2.google.protobuf.StringValue.
end_date (2.google.protobuf.StringValueB�
"com.google.ads.googleads.v4.commonB
DatesProtoPZDgoogle.golang.org/genproto/googleapis/ads/googleads/v4/common;common�GAA�Google.Ads.GoogleAds.V4.Common�Google\\Ads\\GoogleAds\\V4\\Common�"Google::Ads::GoogleAds::V4::Commonbproto3
�
1google/ads/googleads/v4/enums/month_of_year.protogoogle.ads.googleads.v4.enums"�
MonthOfYearEnum"�
MonthOfYear
UNSPECIFIED 
UNKNOWN
JANUARY
FEBRUARY	
MARCH	
APRIL
MAY
JUNE
JULY

AUGUST	
	SEPTEMBER

OCTOBER
NOVEMBER
DECEMBERB�
!com.google.ads.googleads.v4.enumsBMonthOfYearProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v4/enums;enums�GAA�Google.Ads.GoogleAds.V4.Enums�Google\\Ads\\GoogleAds\\V4\\Enums�!Google::Ads::GoogleAds::V4::Enumsbproto3
�
0google/ads/googleads/v4/enums/invoice_type.protogoogle.ads.googleads.v4.enums"\\
InvoiceTypeEnum"I
InvoiceType
UNSPECIFIED 
UNKNOWN
CREDIT_MEMO
INVOICEB�
!com.google.ads.googleads.v4.enumsBInvoiceTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v4/enums;enums�GAA�Google.Ads.GoogleAds.V4.Enums�Google\\Ads\\GoogleAds\\V4\\Enums�!Google::Ads::GoogleAds::V4::Enumsbproto3
�
/google/ads/googleads/v4/resources/invoice.proto!google.ads.googleads.v4.resources0google/ads/googleads/v4/enums/invoice_type.protogoogle/api/field_behavior.protogoogle/api/resource.protogoogle/protobuf/wrappers.protogoogle/api/annotations.proto"�
Invoice?
resource_name (	B(�A�A"
 googleads.googleapis.com/Invoice-
id (2.google.protobuf.StringValueB�AM
type (2:.google.ads.googleads.v4.enums.InvoiceTypeEnum.InvoiceTypeB�A8
billing_setup (2.google.protobuf.StringValueB�A>
payments_account_id (2.google.protobuf.StringValueB�A>
payments_profile_id (2.google.protobuf.StringValueB�A5

issue_date (2.google.protobuf.StringValueB�A3
due_date (2.google.protobuf.StringValueB�AJ
service_date_range	 (2).google.ads.googleads.v4.common.DateRangeB�A8
currency_code
 (2.google.protobuf.StringValueB�AJ
 invoice_level_adjustments_micros (2.google.protobuf.Int64ValueB�A@
subtotal_amount_micros (2.google.protobuf.Int64ValueB�A;
tax_amount_micros (2.google.protobuf.Int64ValueB�A=
total_amount_micros (2.google.protobuf.Int64ValueB�A<
corrected_invoice (2.google.protobuf.StringValueB�A<
replaced_invoices (2.google.protobuf.StringValueB�A2
pdf_url (2.google.protobuf.StringValueB�Af
account_budget_summaries (2?.google.ads.googleads.v4.resources.Invoice.AccountBudgetSummaryB�A�
AccountBudgetSummary3
customer (2.google.protobuf.StringValueB�AD
customer_descriptive_name (2.google.protobuf.StringValueB�A9
account_budget (2.google.protobuf.StringValueB�A>
account_budget_name (2.google.protobuf.StringValueB�A@
purchase_order_number (2.google.protobuf.StringValueB�A@
subtotal_amount_micros (2.google.protobuf.Int64ValueB�A;
tax_amount_micros (2.google.protobuf.Int64ValueB�A=
total_amount_micros (2.google.protobuf.Int64ValueB�AT
billable_activity_date_range	 (2).google.ads.googleads.v4.common.DateRangeB�A:N�AK
 googleads.googleapis.com/Invoice\'customers/{customer}/invoices/{invoice}B�
%com.google.ads.googleads.v4.resourcesBInvoiceProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v4/resources;resources�GAA�!Google.Ads.GoogleAds.V4.Resources�!Google\\Ads\\GoogleAds\\V4\\Resources�%Google::Ads::GoogleAds::V4::Resourcesbproto3
�
6google/ads/googleads/v4/services/invoice_service.proto google.ads.googleads.v4.services/google/ads/googleads/v4/resources/invoice.protogoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.proto"�
ListInvoicesRequest
customer_id (	B�A
billing_setup (	B�A

issue_year (	B�AT
issue_month (2:.google.ads.googleads.v4.enums.MonthOfYearEnum.MonthOfYearB�A"T
ListInvoicesResponse<
invoices (2*.google.ads.googleads.v4.resources.Invoice2�
InvoiceService�
ListInvoices5.google.ads.googleads.v4.services.ListInvoicesRequest6.google.ads.googleads.v4.services.ListInvoicesResponse"a���(&/v4/customers/{customer_id=*}/invoices�A0customer_id,billing_setup,issue_year,issue_monthE�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
$com.google.ads.googleads.v4.servicesBInvoiceServiceProtoPZHgoogle.golang.org/genproto/googleapis/ads/googleads/v4/services;services�GAA� Google.Ads.GoogleAds.V4.Services� Google\\Ads\\GoogleAds\\V4\\Services�$Google::Ads::GoogleAds::V4::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

