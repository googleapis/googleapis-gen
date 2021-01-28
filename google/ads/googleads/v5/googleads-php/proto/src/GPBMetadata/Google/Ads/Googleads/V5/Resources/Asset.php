<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v5/resources/asset.proto

namespace GPBMetadata\Google\Ads\Googleads\V5\Resources;

class Asset
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
-google/ads/googleads/v5/enums/mime_type.protogoogle.ads.googleads.v5.enums"�
MimeTypeEnum"�
MimeType
UNSPECIFIED 
UNKNOWN

IMAGE_JPEG
	IMAGE_GIF
	IMAGE_PNG	
FLASH
	TEXT_HTML
PDF

MSWORD
MSEXCEL	
RTF

	AUDIO_WAV
	AUDIO_MP3
HTML5_AD_ZIPB�
!com.google.ads.googleads.v5.enumsBMimeTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v5/enums;enums�GAA�Google.Ads.GoogleAds.V5.Enums�Google\\Ads\\GoogleAds\\V5\\Enums�!Google::Ads::GoogleAds::V5::Enumsbproto3
�
0google/ads/googleads/v5/common/asset_types.protogoogle.ads.googleads.v5.commongoogle/api/annotations.proto"G
YoutubeVideoAsset
youtube_video_id (	H �B
_youtube_video_id".
MediaBundleAsset
data (H �B
_data"�

ImageAsset
data (H �
	file_size (H�G
	mime_type (24.google.ads.googleads.v5.enums.MimeTypeEnum.MimeTypeA
	full_size (2..google.ads.googleads.v5.common.ImageDimensionB
_dataB

_file_size"�
ImageDimension
height_pixels (H �
width_pixels (H�
url (	H�B
_height_pixelsB
_width_pixelsB
_url"\'
	TextAsset
text (	H �B
_text"
BookOnGoogleAssetB�
"com.google.ads.googleads.v5.commonBAssetTypesProtoPZDgoogle.golang.org/genproto/googleapis/ads/googleads/v5/common;common�GAA�Google.Ads.GoogleAds.V5.Common�Google\\Ads\\GoogleAds\\V5\\Common�"Google::Ads::GoogleAds::V5::Commonbproto3
�
.google/ads/googleads/v5/enums/asset_type.protogoogle.ads.googleads.v5.enums"�
AssetTypeEnum"w
	AssetType
UNSPECIFIED 
UNKNOWN
YOUTUBE_VIDEO
MEDIA_BUNDLE	
IMAGE
TEXT
BOOK_ON_GOOGLEB�
!com.google.ads.googleads.v5.enumsBAssetTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v5/enums;enums�GAA�Google.Ads.GoogleAds.V5.Enums�Google\\Ads\\GoogleAds\\V5\\Enums�!Google::Ads::GoogleAds::V5::Enumsbproto3
�	
-google/ads/googleads/v5/resources/asset.proto!google.ads.googleads.v5.resources.google/ads/googleads/v5/enums/asset_type.protogoogle/api/field_behavior.protogoogle/api/resource.protogoogle/api/annotations.proto"�
Asset=
resource_name (	B&�A�A 
googleads.googleapis.com/Asset
id (B�AH�
name (	H�I
type (26.google.ads.googleads.v5.enums.AssetTypeEnum.AssetTypeB�AU
youtube_video_asset (21.google.ads.googleads.v5.common.YoutubeVideoAssetB�AH S
media_bundle_asset (20.google.ads.googleads.v5.common.MediaBundleAssetB�AH F
image_asset (2*.google.ads.googleads.v5.common.ImageAssetB�AH D

text_asset (2).google.ads.googleads.v5.common.TextAssetB�AH Q
book_on_google_asset
 (21.google.ads.googleads.v5.common.BookOnGoogleAssetH :H�AE
googleads.googleapis.com/Asset#customers/{customer}/assets/{asset}B

asset_dataB
_idB
_nameB�
%com.google.ads.googleads.v5.resourcesB
AssetProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v5/resources;resources�GAA�!Google.Ads.GoogleAds.V5.Resources�!Google\\Ads\\GoogleAds\\V5\\Resources�%Google::Ads::GoogleAds::V5::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

