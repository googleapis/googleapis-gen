<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v5/services/customer_manager_link_service.proto

namespace GPBMetadata\Google\Ads\Googleads\V5\Services;

class CustomerManagerLinkService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
7google/ads/googleads/v5/enums/manager_link_status.protogoogle.ads.googleads.v5.enums"�
ManagerLinkStatusEnum"s
ManagerLinkStatus
UNSPECIFIED 
UNKNOWN

ACTIVE
INACTIVE
PENDING
REFUSED
CANCELEDB�
!com.google.ads.googleads.v5.enumsBManagerLinkStatusProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v5/enums;enums�GAA�Google.Ads.GoogleAds.V5.Enums�Google\\Ads\\GoogleAds\\V5\\Enums�!Google::Ads::GoogleAds::V5::Enumsbproto3
�
=google/ads/googleads/v5/resources/customer_manager_link.proto!google.ads.googleads.v5.resourcesgoogle/api/field_behavior.protogoogle/api/resource.protogoogle/protobuf/wrappers.protogoogle/api/annotations.proto"�
CustomerManagerLinkK
resource_name (	B4�A�A.
,googleads.googleapis.com/CustomerManagerLinka
manager_customer (2.google.protobuf.StringValueB)�A�A#
!googleads.googleapis.com/Customer9
manager_link_id (2.google.protobuf.Int64ValueB�AV
status (2F.google.ads.googleads.v5.enums.ManagerLinkStatusEnum.ManagerLinkStatus:t�Aq
,googleads.googleapis.com/CustomerManagerLinkAcustomers/{customer}/customerManagerLinks/{customer_manager_link}B�
%com.google.ads.googleads.v5.resourcesBCustomerManagerLinkProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v5/resources;resources�GAA�!Google.Ads.GoogleAds.V5.Resources�!Google\\Ads\\GoogleAds\\V5\\Resources�%Google::Ads::GoogleAds::V5::Resourcesbproto3
�
Dgoogle/ads/googleads/v5/services/customer_manager_link_service.proto google.ads.googleads.v5.servicesgoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto google/protobuf/field_mask.proto"l
GetCustomerManagerLinkRequestK
resource_name (	B4�A�A.
,googleads.googleapis.com/CustomerManagerLink"�
 MutateCustomerManagerLinkRequest
customer_id (	B�AW

operations (2>.google.ads.googleads.v5.services.CustomerManagerLinkOperationB�A"y
MoveManagerLinkRequest
customer_id (	B�A+
previous_customer_manager_link (	B�A
new_manager (	B�A"�
CustomerManagerLinkOperation/
update_mask (2.google.protobuf.FieldMaskH
update (26.google.ads.googleads.v5.resources.CustomerManagerLinkH B
	operation"w
!MutateCustomerManagerLinkResponseR
results (2A.google.ads.googleads.v5.services.MutateCustomerManagerLinkResult"0
MoveManagerLinkResponse
resource_name (	"8
MutateCustomerManagerLinkResult
resource_name (	2�
CustomerManagerLinkService�
GetCustomerManagerLink?.google.ads.googleads.v5.services.GetCustomerManagerLinkRequest6.google.ads.googleads.v5.resources.CustomerManagerLink"N���86/v5/{resource_name=customers/*/customerManagerLinks/*}�Aresource_name�
MutateCustomerManagerLinkB.google.ads.googleads.v5.services.MutateCustomerManagerLinkRequestC.google.ads.googleads.v5.services.MutateCustomerManagerLinkResponse"]���>"9/v5/customers/{customer_id=*}/customerManagerLinks:mutate:*�Acustomer_id,operations�
MoveManagerLink8.google.ads.googleads.v5.services.MoveManagerLinkRequest9.google.ads.googleads.v5.services.MoveManagerLinkResponse"����G"B/v5/customers/{customer_id=*}/customerManagerLinks:moveManagerLink:*�A6customer_id,previous_customer_manager_link,new_managerE�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
$com.google.ads.googleads.v5.servicesBCustomerManagerLinkServiceProtoPZHgoogle.golang.org/genproto/googleapis/ads/googleads/v5/services;services�GAA� Google.Ads.GoogleAds.V5.Services� Google\\Ads\\GoogleAds\\V5\\Services�$Google::Ads::GoogleAds::V5::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

