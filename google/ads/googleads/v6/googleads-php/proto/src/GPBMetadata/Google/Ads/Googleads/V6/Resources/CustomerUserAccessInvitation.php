<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/resources/customer_user_access_invitation.proto

namespace GPBMetadata\Google\Ads\Googleads\V6\Resources;

class CustomerUserAccessInvitation
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
<google/ads/googleads/v6/enums/access_invitation_status.protogoogle.ads.googleads.v6.enums"|
AccessInvitationStatusEnum"^
AccessInvitationStatus
UNSPECIFIED 
UNKNOWN
PENDING
DECLINED
EXPIREDB�
!com.google.ads.googleads.v6.enumsBAccessInvitationStatusProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v6/enums;enums�GAA�Google.Ads.GoogleAds.V6.Enums�Google\\Ads\\GoogleAds\\V6\\Enums�!Google::Ads::GoogleAds::V6::Enumsbproto3
�
/google/ads/googleads/v6/enums/access_role.protogoogle.ads.googleads.v6.enums"t
AccessRoleEnum"b

AccessRole
UNSPECIFIED 
UNKNOWN	
ADMIN
STANDARD
	READ_ONLY

EMAIL_ONLYB�
!com.google.ads.googleads.v6.enumsBAccessRoleProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v6/enums;enums�GAA�Google.Ads.GoogleAds.V6.Enums�Google\\Ads\\GoogleAds\\V6\\Enums�!Google::Ads::GoogleAds::V6::Enumsbproto3
�
Ggoogle/ads/googleads/v6/resources/customer_user_access_invitation.proto!google.ads.googleads.v6.resources/google/ads/googleads/v6/enums/access_role.protogoogle/api/field_behavior.protogoogle/api/resource.protogoogle/api/annotations.proto"�
CustomerUserAccessInvitationT
resource_name (	B=�A�A7
5googleads.googleapis.com/CustomerUserAccessInvitation
invitation_id (B�AR
access_role (28.google.ads.googleads.v6.enums.AccessRoleEnum.AccessRoleB�A
email_address (	B�A
creation_date_time (	B�Ap
invitation_status (2P.google.ads.googleads.v6.enums.AccessInvitationStatusEnum.AccessInvitationStatusB�A:��A~
5googleads.googleapis.com/CustomerUserAccessInvitationEcustomers/{customer_id}/customerUserAccessInvitations/{invitation_id}B�
%com.google.ads.googleads.v6.resourcesB!CustomerUserAccessInvitationProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v6/resources;resources�GAA�!Google.Ads.GoogleAds.V6.Resources�!Google\\Ads\\GoogleAds\\V6\\Resources�%Google::Ads::GoogleAds::V6::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

