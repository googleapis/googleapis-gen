<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v5/resources/user_list.proto

namespace GPBMetadata\Google\Ads\Googleads\V5\Resources;

class UserList
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
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
1google/ads/googleads/v5/enums/access_reason.protogoogle.ads.googleads.v5.enums"�
AccessReasonEnum"q
AccessReason
UNSPECIFIED 
UNKNOWN	
OWNED

SHARED
LICENSED

SUBSCRIBED

AFFILIATEDB�
!com.google.ads.googleads.v5.enumsBAccessReasonProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v5/enums;enums�GAA�Google.Ads.GoogleAds.V5.Enums�Google\\Ads\\GoogleAds\\V5\\Enums�!Google::Ads::GoogleAds::V5::Enumsbproto3
�
Bgoogle/ads/googleads/v5/enums/customer_match_upload_key_type.protogoogle.ads.googleads.v5.enums"�
CustomerMatchUploadKeyTypeEnum"s
CustomerMatchUploadKeyType
UNSPECIFIED 
UNKNOWN
CONTACT_INFO

CRM_ID
MOBILE_ADVERTISING_IDB�
!com.google.ads.googleads.v5.enumsBCustomerMatchUploadKeyTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v5/enums;enums�GAA�Google.Ads.GoogleAds.V5.Enums�Google\\Ads\\GoogleAds\\V5\\Enums�!Google::Ads::GoogleAds::V5::Enumsbproto3
�
Dgoogle/ads/googleads/v5/enums/user_list_combined_rule_operator.protogoogle.ads.googleads.v5.enums"v
 UserListCombinedRuleOperatorEnum"R
UserListCombinedRuleOperator
UNSPECIFIED 
UNKNOWN
AND
AND_NOTB�
!com.google.ads.googleads.v5.enumsB!UserListCombinedRuleOperatorProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v5/enums;enums�GAA�Google.Ads.GoogleAds.V5.Enums�Google\\Ads\\GoogleAds\\V5\\Enums�!Google::Ads::GoogleAds::V5::Enumsbproto3
�
Bgoogle/ads/googleads/v5/enums/user_list_crm_data_source_type.protogoogle.ads.googleads.v5.enums"�
UserListCrmDataSourceTypeEnum"�
UserListCrmDataSourceType
UNSPECIFIED 
UNKNOWN
FIRST_PARTY
THIRD_PARTY_CREDIT_BUREAU
THIRD_PARTY_VOTER_FILEB�
!com.google.ads.googleads.v5.enumsBUserListCrmDataSourceTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v5/enums;enums�GAA�Google.Ads.GoogleAds.V5.Enums�Google\\Ads\\GoogleAds\\V5\\Enums�!Google::Ads::GoogleAds::V5::Enumsbproto3
�
Egoogle/ads/googleads/v5/enums/user_list_date_rule_item_operator.protogoogle.ads.googleads.v5.enums"�
 UserListDateRuleItemOperatorEnum"o
UserListDateRuleItemOperator
UNSPECIFIED 
UNKNOWN

EQUALS

NOT_EQUALS

BEFORE	
AFTERB�
!com.google.ads.googleads.v5.enumsB!UserListDateRuleItemOperatorProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v5/enums;enums�GAA�Google.Ads.GoogleAds.V5.Enums�Google\\Ads\\GoogleAds\\V5\\Enums�!Google::Ads::GoogleAds::V5::Enumsbproto3
�
Cgoogle/ads/googleads/v5/enums/user_list_logical_rule_operator.protogoogle.ads.googleads.v5.enums"z
UserListLogicalRuleOperatorEnum"W
UserListLogicalRuleOperator
UNSPECIFIED 
UNKNOWN
ALL
ANY
NONEB�
!com.google.ads.googleads.v5.enumsB UserListLogicalRuleOperatorProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v5/enums;enums�GAA�Google.Ads.GoogleAds.V5.Enums�Google\\Ads\\GoogleAds\\V5\\Enums�!Google::Ads::GoogleAds::V5::Enumsbproto3
�
Ggoogle/ads/googleads/v5/enums/user_list_number_rule_item_operator.protogoogle.ads.googleads.v5.enums"�
"UserListNumberRuleItemOperatorEnum"�
UserListNumberRuleItemOperator
UNSPECIFIED 
UNKNOWN
GREATER_THAN
GREATER_THAN_OR_EQUAL

EQUALS

NOT_EQUALS
	LESS_THAN
LESS_THAN_OR_EQUALB�
!com.google.ads.googleads.v5.enumsB#UserListNumberRuleItemOperatorProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v5/enums;enums�GAA�Google.Ads.GoogleAds.V5.Enums�Google\\Ads\\GoogleAds\\V5\\Enums�!Google::Ads::GoogleAds::V5::Enumsbproto3
�
Bgoogle/ads/googleads/v5/enums/user_list_prepopulation_status.protogoogle.ads.googleads.v5.enums"�
UserListPrepopulationStatusEnum"d
UserListPrepopulationStatus
UNSPECIFIED 
UNKNOWN
	REQUESTED
FINISHED

FAILEDB�
!com.google.ads.googleads.v5.enumsB UserListPrepopulationStatusProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v5/enums;enums�GAA�Google.Ads.GoogleAds.V5.Enums�Google\\Ads\\GoogleAds\\V5\\Enums�!Google::Ads::GoogleAds::V5::Enumsbproto3
�
7google/ads/googleads/v5/enums/user_list_rule_type.protogoogle.ads.googleads.v5.enums"h
UserListRuleTypeEnum"P
UserListRuleType
UNSPECIFIED 
UNKNOWN

AND_OF_ORS

OR_OF_ANDSB�
!com.google.ads.googleads.v5.enumsBUserListRuleTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v5/enums;enums�GAA�Google.Ads.GoogleAds.V5.Enums�Google\\Ads\\GoogleAds\\V5\\Enums�!Google::Ads::GoogleAds::V5::Enumsbproto3
�
Ggoogle/ads/googleads/v5/enums/user_list_string_rule_item_operator.protogoogle.ads.googleads.v5.enums"�
"UserListStringRuleItemOperatorEnum"�
UserListStringRuleItemOperator
UNSPECIFIED 
UNKNOWN
CONTAINS

EQUALS
STARTS_WITH
	ENDS_WITH

NOT_EQUALS
NOT_CONTAINS
NOT_STARTS_WITH
NOT_ENDS_WITH	B�
!com.google.ads.googleads.v5.enumsB#UserListStringRuleItemOperatorProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v5/enums;enums�GAA�Google.Ads.GoogleAds.V5.Enums�Google\\Ads\\GoogleAds\\V5\\Enums�!Google::Ads::GoogleAds::V5::Enumsbproto3
�!
/google/ads/googleads/v5/common/user_lists.protogoogle.ads.googleads.v5.commonDgoogle/ads/googleads/v5/enums/user_list_combined_rule_operator.protoBgoogle/ads/googleads/v5/enums/user_list_crm_data_source_type.protoEgoogle/ads/googleads/v5/enums/user_list_date_rule_item_operator.protoCgoogle/ads/googleads/v5/enums/user_list_logical_rule_operator.protoGgoogle/ads/googleads/v5/enums/user_list_number_rule_item_operator.protoBgoogle/ads/googleads/v5/enums/user_list_prepopulation_status.proto7google/ads/googleads/v5/enums/user_list_rule_type.protoGgoogle/ads/googleads/v5/enums/user_list_string_rule_item_operator.protogoogle/protobuf/wrappers.protogoogle/api/annotations.proto"K
SimilarUserListInfo4
seed_user_list (2.google.protobuf.StringValue"�
CrmBasedUserListInfo,
app_id (2.google.protobuf.StringValueq
upload_key_type (2X.google.ads.googleads.v5.enums.CustomerMatchUploadKeyTypeEnum.CustomerMatchUploadKeyTypep
data_source_type (2V.google.ads.googleads.v5.enums.UserListCrmDataSourceTypeEnum.UserListCrmDataSourceType"�
UserListRuleInfoW
	rule_type (2D.google.ads.googleads.v5.enums.UserListRuleTypeEnum.UserListRuleTypeS
rule_item_groups (29.google.ads.googleads.v5.common.UserListRuleItemGroupInfo"e
UserListRuleItemGroupInfoH

rule_items (24.google.ads.googleads.v5.common.UserListRuleItemInfo"�
UserListRuleItemInfo*
name (2.google.protobuf.StringValueV
number_rule_item (2:.google.ads.googleads.v5.common.UserListNumberRuleItemInfoH V
string_rule_item (2:.google.ads.googleads.v5.common.UserListStringRuleItemInfoH R
date_rule_item (28.google.ads.googleads.v5.common.UserListDateRuleItemInfoH B
	rule_item"�
UserListDateRuleItemInfon
operator (2\\.google.ads.googleads.v5.enums.UserListDateRuleItemOperatorEnum.UserListDateRuleItemOperator+
value (2.google.protobuf.StringValue3
offset_in_days (2.google.protobuf.Int64Value"�
UserListNumberRuleItemInfor
operator (2`.google.ads.googleads.v5.enums.UserListNumberRuleItemOperatorEnum.UserListNumberRuleItemOperator+
value (2.google.protobuf.DoubleValue"�
UserListStringRuleItemInfor
operator (2`.google.ads.googleads.v5.enums.UserListStringRuleItemOperatorEnum.UserListStringRuleItemOperator+
value (2.google.protobuf.StringValue"�
CombinedRuleUserListInfoF
left_operand (20.google.ads.googleads.v5.common.UserListRuleInfoG
right_operand (20.google.ads.googleads.v5.common.UserListRuleInfos
rule_operator (2\\.google.ads.googleads.v5.enums.UserListCombinedRuleOperatorEnum.UserListCombinedRuleOperator"�
DateSpecificRuleUserListInfo>
rule (20.google.ads.googleads.v5.common.UserListRuleInfo0

start_date (2.google.protobuf.StringValue.
end_date (2.google.protobuf.StringValue"\\
ExpressionRuleUserListInfo>
rule (20.google.ads.googleads.v5.common.UserListRuleInfo"�
RuleBasedUserListInfox
prepopulation_status (2Z.google.ads.googleads.v5.enums.UserListPrepopulationStatusEnum.UserListPrepopulationStatus[
combined_rule_user_list (28.google.ads.googleads.v5.common.CombinedRuleUserListInfoH d
date_specific_rule_user_list (2<.google.ads.googleads.v5.common.DateSpecificRuleUserListInfoH _
expression_rule_user_list (2:.google.ads.googleads.v5.common.ExpressionRuleUserListInfoH B
rule_based_user_list"]
LogicalUserListInfoF
rules (27.google.ads.googleads.v5.common.UserListLogicalRuleInfo"�
UserListLogicalRuleInfol
operator (2Z.google.ads.googleads.v5.enums.UserListLogicalRuleOperatorEnum.UserListLogicalRuleOperatorQ
rule_operands (2:.google.ads.googleads.v5.common.LogicalUserListOperandInfo"M
LogicalUserListOperandInfo/
	user_list (2.google.protobuf.StringValue"X
BasicUserListInfoC
actions (22.google.ads.googleads.v5.common.UserListActionInfo"�
UserListActionInfo9
conversion_action (2.google.protobuf.StringValueH :
remarketing_action (2.google.protobuf.StringValueH B
user_list_actionB�
"com.google.ads.googleads.v5.commonBUserListsProtoPZDgoogle.golang.org/genproto/googleapis/ads/googleads/v5/common;common�GAA�Google.Ads.GoogleAds.V5.Common�Google\\Ads\\GoogleAds\\V5\\Common�"Google::Ads::GoogleAds::V5::Commonbproto3
�
2google/ads/googleads/v5/enums/user_list_type.protogoogle.ads.googleads.v5.enums"�
UserListTypeEnum"�
UserListType
UNSPECIFIED 
UNKNOWN
REMARKETING
LOGICAL
EXTERNAL_REMARKETING

RULE_BASED
SIMILAR
	CRM_BASEDB�
!com.google.ads.googleads.v5.enumsBUserListTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v5/enums;enums�GAA�Google.Ads.GoogleAds.V5.Enums�Google\\Ads\\GoogleAds\\V5\\Enums�!Google::Ads::GoogleAds::V5::Enumsbproto3
�
;google/ads/googleads/v5/enums/user_list_access_status.protogoogle.ads.googleads.v5.enums"k
UserListAccessStatusEnum"O
UserListAccessStatus
UNSPECIFIED 
UNKNOWN
ENABLED
DISABLEDB�
!com.google.ads.googleads.v5.enumsBUserListAccessStatusProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v5/enums;enums�GAA�Google.Ads.GoogleAds.V5.Enums�Google\\Ads\\GoogleAds\\V5\\Enums�!Google::Ads::GoogleAds::V5::Enumsbproto3
�
<google/ads/googleads/v5/enums/user_list_closing_reason.protogoogle.ads.googleads.v5.enums"^
UserListClosingReasonEnum"A
UserListClosingReason
UNSPECIFIED 
UNKNOWN

UNUSEDB�
!com.google.ads.googleads.v5.enumsBUserListClosingReasonProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v5/enums;enums�GAA�Google.Ads.GoogleAds.V5.Enums�Google\\Ads\\GoogleAds\\V5\\Enums�!Google::Ads::GoogleAds::V5::Enumsbproto3
�
?google/ads/googleads/v5/enums/user_list_membership_status.protogoogle.ads.googleads.v5.enums"n
UserListMembershipStatusEnum"N
UserListMembershipStatus
UNSPECIFIED 
UNKNOWN
OPEN

CLOSEDB�
!com.google.ads.googleads.v5.enumsBUserListMembershipStatusProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v5/enums;enums�GAA�Google.Ads.GoogleAds.V5.Enums�Google\\Ads\\GoogleAds\\V5\\Enums�!Google::Ads::GoogleAds::V5::Enumsbproto3
�
8google/ads/googleads/v5/enums/user_list_size_range.protogoogle.ads.googleads.v5.enums"�
UserListSizeRangeEnum"�
UserListSizeRange
UNSPECIFIED 
UNKNOWN
LESS_THAN_FIVE_HUNDRED
LESS_THAN_ONE_THOUSAND 
ONE_THOUSAND_TO_TEN_THOUSAND"
TEN_THOUSAND_TO_FIFTY_THOUSAND*
&FIFTY_THOUSAND_TO_ONE_HUNDRED_THOUSAND2
.ONE_HUNDRED_THOUSAND_TO_THREE_HUNDRED_THOUSAND3
/THREE_HUNDRED_THOUSAND_TO_FIVE_HUNDRED_THOUSAND(
$FIVE_HUNDRED_THOUSAND_TO_ONE_MILLION	
ONE_MILLION_TO_TWO_MILLION
 
TWO_MILLION_TO_THREE_MILLION!
THREE_MILLION_TO_FIVE_MILLION
FIVE_MILLION_TO_TEN_MILLION!
TEN_MILLION_TO_TWENTY_MILLION$
 TWENTY_MILLION_TO_THIRTY_MILLION#
THIRTY_MILLION_TO_FIFTY_MILLION
OVER_FIFTY_MILLIONB�
!com.google.ads.googleads.v5.enumsBUserListSizeRangeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v5/enums;enums�GAA�Google.Ads.GoogleAds.V5.Enums�Google\\Ads\\GoogleAds\\V5\\Enums�!Google::Ads::GoogleAds::V5::Enumsbproto3
�
1google/ads/googleads/v5/resources/user_list.proto!google.ads.googleads.v5.resources1google/ads/googleads/v5/enums/access_reason.proto;google/ads/googleads/v5/enums/user_list_access_status.proto<google/ads/googleads/v5/enums/user_list_closing_reason.proto?google/ads/googleads/v5/enums/user_list_membership_status.proto8google/ads/googleads/v5/enums/user_list_size_range.proto2google/ads/googleads/v5/enums/user_list_type.protogoogle/api/field_behavior.protogoogle/api/resource.protogoogle/protobuf/wrappers.protogoogle/api/annotations.proto"�
UserList@
resource_name (	B)�A�A#
!googleads.googleapis.com/UserList,
id (2.google.protobuf.Int64ValueB�A2
	read_only (2.google.protobuf.BoolValueB�A*
name (2.google.protobuf.StringValue1
description (2.google.protobuf.StringValueo
membership_status (2T.google.ads.googleads.v5.enums.UserListMembershipStatusEnum.UserListMembershipStatus6
integration_code (2.google.protobuf.StringValue9
membership_life_span (2.google.protobuf.Int64Value:
size_for_display	 (2.google.protobuf.Int64ValueB�Ak
size_range_for_display
 (2F.google.ads.googleads.v5.enums.UserListSizeRangeEnum.UserListSizeRangeB�A9
size_for_search (2.google.protobuf.Int64ValueB�Aj
size_range_for_search (2F.google.ads.googleads.v5.enums.UserListSizeRangeEnum.UserListSizeRangeB�AO
type (2<.google.ads.googleads.v5.enums.UserListTypeEnum.UserListTypeB�Af
closing_reason (2N.google.ads.googleads.v5.enums.UserListClosingReasonEnum.UserListClosingReasonX
access_reason (2<.google.ads.googleads.v5.enums.AccessReasonEnum.AccessReasonB�An
account_user_list_status (2L.google.ads.googleads.v5.enums.UserListAccessStatusEnum.UserListAccessStatus7
eligible_for_search (2.google.protobuf.BoolValue=
eligible_for_display (2.google.protobuf.BoolValueB�AS
crm_based_user_list (24.google.ads.googleads.v5.common.CrmBasedUserListInfoH U
similar_user_list (23.google.ads.googleads.v5.common.SimilarUserListInfoB�AH U
rule_based_user_list (25.google.ads.googleads.v5.common.RuleBasedUserListInfoH P
logical_user_list (23.google.ads.googleads.v5.common.LogicalUserListInfoH L
basic_user_list (21.google.ads.googleads.v5.common.BasicUserListInfoH :R�AO
!googleads.googleapis.com/UserList*customers/{customer}/userLists/{user_list}B
	user_listB�
%com.google.ads.googleads.v5.resourcesBUserListProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v5/resources;resources�GAA�!Google.Ads.GoogleAds.V5.Resources�!Google\\Ads\\GoogleAds\\V5\\Resources�%Google::Ads::GoogleAds::V5::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

