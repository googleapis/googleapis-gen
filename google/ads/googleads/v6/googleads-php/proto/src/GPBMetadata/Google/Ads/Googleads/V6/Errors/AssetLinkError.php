<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/errors/asset_link_error.proto

namespace GPBMetadata\Google\Ads\Googleads\V6\Errors;

class AssetLinkError
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
�
5google/ads/googleads/v6/errors/asset_link_error.protogoogle.ads.googleads.v6.errors"�
AssetLinkErrorEnum"�
AssetLinkError
UNSPECIFIED 
UNKNOWN
PINNING_UNSUPPORTED
UNSUPPORTED_FIELD_TYPE+
\'FIELD_TYPE_INCOMPATIBLE_WITH_ASSET_TYPE.
*FIELD_TYPE_INCOMPATIBLE_WITH_CAMPAIGN_TYPE)
%INCOMPATIBLE_ADVERTISING_CHANNEL_TYPE.
*IMAGE_NOT_WITHIN_SPECIFIED_DIMENSION_RANGE
INVALID_PINNED_FIELD*
&MEDIA_BUNDLE_ASSET_FILE_SIZE_TOO_LARGE	:
6NOT_ENOUGH_AVAILABLE_ASSET_LINKS_FOR_VALID_COMBINATION
2
.NOT_ENOUGH_AVAILABLE_ASSET_LINKS_WITH_FALLBACKH
DNOT_ENOUGH_AVAILABLE_ASSET_LINKS_WITH_FALLBACK_FOR_VALID_COMBINATION
YOUTUBE_VIDEO_REMOVED
YOUTUBE_VIDEO_TOO_LONG
YOUTUBE_VIDEO_TOO_SHORTB�
"com.google.ads.googleads.v6.errorsBAssetLinkErrorProtoPZDgoogle.golang.org/genproto/googleapis/ads/googleads/v6/errors;errors�GAA�Google.Ads.GoogleAds.V6.Errors�Google\\Ads\\GoogleAds\\V6\\Errors�"Google::Ads::GoogleAds::V6::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

