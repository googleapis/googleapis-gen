<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/enums/invoice_type.proto

namespace GPBMetadata\Google\Ads\Googleads\V4\Enums;

class InvoiceType
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
0google/ads/googleads/v4/enums/invoice_type.protogoogle.ads.googleads.v4.enums"\\
InvoiceTypeEnum"I
InvoiceType
UNSPECIFIED 
UNKNOWN
CREDIT_MEMO
INVOICEB�
!com.google.ads.googleads.v4.enumsBInvoiceTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v4/enums;enums�GAA�Google.Ads.GoogleAds.V4.Enums�Google\\Ads\\GoogleAds\\V4\\Enums�!Google::Ads::GoogleAds::V4::Enumsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

