<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/admob/v1/admob_api.proto

namespace GPBMetadata\Google\Ads\Admob\V1;

class AdmobApi
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Ads\Admob\V1\AdmobResources::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
#google/ads/admob/v1/admob_api.protogoogle.ads.admob.v1google/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto"*
GetPublisherAccountRequest
name (	"E
ListPublisherAccountsRequest
	page_size (

page_token (	"p
ListPublisherAccountsResponse6
account (2%.google.ads.admob.v1.PublisherAccount
next_page_token (	"o
GenerateMediationReportRequest
parent (	=
report_spec (2(.google.ads.admob.v1.MediationReportSpec"�
GenerateMediationReportResponse3
header (2!.google.ads.admob.v1.ReportHeaderH -
row (2.google.ads.admob.v1.ReportRowH 3
footer (2!.google.ads.admob.v1.ReportFooterH B	
payload"k
GenerateNetworkReportRequest
parent (	;
report_spec (2&.google.ads.admob.v1.NetworkReportSpec"�
GenerateNetworkReportResponse3
header (2!.google.ads.admob.v1.ReportHeaderH -
row (2.google.ads.admob.v1.ReportRowH 3
footer (2!.google.ads.admob.v1.ReportFooterH B	
payload2�
AdMobApi�
GetPublisherAccount/.google.ads.admob.v1.GetPublisherAccountRequest%.google.ads.admob.v1.PublisherAccount"$���/v1/{name=accounts/*}�Aname�
ListPublisherAccounts1.google.ads.admob.v1.ListPublisherAccountsRequest2.google.ads.admob.v1.ListPublisherAccountsResponse"���/v1/accounts�
GenerateNetworkReport1.google.ads.admob.v1.GenerateNetworkReportRequest2.google.ads.admob.v1.GenerateNetworkReportResponse"9���3"./v1/{parent=accounts/*}/networkReport:generate:*0�
GenerateMediationReport3.google.ads.admob.v1.GenerateMediationReportRequest4.google.ads.admob.v1.GenerateMediationReportResponse";���5"0/v1/{parent=accounts/*}/mediationReport:generate:*0F�Aadmob.googleapis.com�A,https://www.googleapis.com/auth/admob.reportBb
com.google.ads.admob.v1BAdMobApiProtoZ8google.golang.org/genproto/googleapis/ads/admob/v1;admobbproto3'
        , true);

        static::$is_initialized = true;
    }
}

