<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/iam/admin/v1/iam.proto

namespace GPBMetadata\Google\Iam\Admin\V1;

class Iam
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Iam\V1\IamPolicy::initOnce();
        \GPBMetadata\Google\Iam\V1\Options::initOnce();
        \GPBMetadata\Google\Iam\V1\Policy::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Type\Expr::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�\\
google/iam/admin/v1/iam.protogoogle.iam.admin.v1google/api/field_behavior.protogoogle/api/resource.protogoogle/iam/v1/iam_policy.protogoogle/iam/v1/options.protogoogle/iam/v1/policy.protogoogle/protobuf/any.protogoogle/protobuf/empty.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.protogoogle/type/expr.protogoogle/api/annotations.proto"�
ServiceAccount
name (	

project_id (	B�A
	unique_id (	B�A
email (	B�A
display_name (	B�A
etag (B
description (	B�A
oauth2_client_id	 (	B�A
disabled (B�A:\\�AY
!iam.googleapis.com/ServiceAccount4projects/{project}/serviceAccounts/{service_account}"�
CreateServiceAccountRequestA
name (	B3�A�A-
+cloudresourcemanager.googleapis.com/Project

account_id (	B�A<
service_account (2#.google.iam.admin.v1.ServiceAccount"�
ListServiceAccountsRequestA
name (	B3�A�A-
+cloudresourcemanager.googleapis.com/Project
	page_size (

page_token (	"m
ListServiceAccountsResponse5
accounts (2#.google.iam.admin.v1.ServiceAccount
next_page_token (	"S
GetServiceAccountRequest7
name (	B)�A�A#
!iam.googleapis.com/ServiceAccount"V
DeleteServiceAccountRequest7
name (	B)�A�A#
!iam.googleapis.com/ServiceAccount"�
PatchServiceAccountRequest<
service_account (2#.google.iam.admin.v1.ServiceAccount/
update_mask (2.google.protobuf.FieldMask"-
UndeleteServiceAccountRequest
name (	"_
UndeleteServiceAccountResponse=
restored_account (2#.google.iam.admin.v1.ServiceAccount"+
EnableServiceAccountRequest
name (	",
DisableServiceAccountRequest
name (	"�
ListServiceAccountKeysRequest7
name (	B)�A�A#
!iam.googleapis.com/ServiceAccountM
	key_types (2:.google.iam.admin.v1.ListServiceAccountKeysRequest.KeyType"I
KeyType
KEY_TYPE_UNSPECIFIED 
USER_MANAGED
SYSTEM_MANAGED"V
ListServiceAccountKeysResponse4
keys (2&.google.iam.admin.v1.ServiceAccountKey"�
GetServiceAccountKeyRequest,
name (	B�A�A
iam.googleapis.com/KeyI
public_key_type (20.google.iam.admin.v1.ServiceAccountPublicKeyType"�
ServiceAccountKey
name (	K
private_key_type (21.google.iam.admin.v1.ServiceAccountPrivateKeyTypeF
key_algorithm (2/.google.iam.admin.v1.ServiceAccountKeyAlgorithm
private_key_data (
public_key_data (4
valid_after_time (2.google.protobuf.Timestamp5
valid_before_time (2.google.protobuf.Timestamp@

key_origin	 (2,.google.iam.admin.v1.ServiceAccountKeyOriginL
key_type
 (2:.google.iam.admin.v1.ListServiceAccountKeysRequest.KeyType:\\�AY
iam.googleapis.com/Key?projects/{project}/serviceAccounts/{service_account}/keys/{key}"�
CreateServiceAccountKeyRequest7
name (	B)�A�A#
!iam.googleapis.com/ServiceAccountK
private_key_type (21.google.iam.admin.v1.ServiceAccountPrivateKeyTypeF
key_algorithm (2/.google.iam.admin.v1.ServiceAccountKeyAlgorithm"G
UploadServiceAccountKeyRequest
name (	
public_key_data ("N
DeleteServiceAccountKeyRequest,
name (	B�A�A
iam.googleapis.com/Key"j
SignBlobRequest9
name (	B+�A�A#
!iam.googleapis.com/ServiceAccount
bytes_to_sign (B�A"=
SignBlobResponse
key_id (	B
	signature (B"c
SignJwtRequest9
name (	B+�A�A#
!iam.googleapis.com/ServiceAccount
payload (	B�A"=
SignJwtResponse
key_id (	B

signed_jwt (	B"�
Role
name (	
title (	
description (	
included_permissions (	8
stage (2).google.iam.admin.v1.Role.RoleLaunchStage
etag	 (
deleted ("U
RoleLaunchStage	
ALPHA 
BETA
GA

DEPRECATED
DISABLED
EAP"�
QueryGrantableRolesRequest
full_resource_name (	B�A+
view (2.google.iam.admin.v1.RoleView
	page_size (

page_token (	"`
QueryGrantableRolesResponse(
roles (2.google.iam.admin.v1.Role
next_page_token (	"�
ListRolesRequest
parent (	B�A
*
	page_size (

page_token (	+
view (2.google.iam.admin.v1.RoleView
show_deleted ("V
ListRolesResponse(
roles (2.google.iam.admin.v1.Role
next_page_token (	"&
GetRoleRequest
name (	B�A
*"e
CreateRoleRequest
parent (	B�A
*
role_id (	\'
role (2.google.iam.admin.v1.Role"�
UpdateRoleRequest
name (	B�A
*\'
role (2.google.iam.admin.v1.Role/
update_mask (2.google.protobuf.FieldMask"7
DeleteRoleRequest
name (	B�A
*
etag ("9
UndeleteRoleRequest
name (	B�A
*
etag ("�

Permission
name (	
title (	
description (	$
only_in_predefined_roles (BD
stage (25.google.iam.admin.v1.Permission.PermissionLaunchStage[
custom_roles_support_level (27.google.iam.admin.v1.Permission.CustomRolesSupportLevel
api_disabled (
primary_permission (	"D
PermissionLaunchStage	
ALPHA 
BETA
GA

DEPRECATED"H
CustomRolesSupportLevel
	SUPPORTED 
TESTING
NOT_SUPPORTED"d
QueryTestablePermissionsRequest
full_resource_name (	
	page_size (

page_token (	"q
 QueryTestablePermissionsResponse4
permissions (2.google.iam.admin.v1.Permission
next_page_token (	";
QueryAuditableServicesRequest
full_resource_name (	"�
QueryAuditableServicesResponseV
services (2D.google.iam.admin.v1.QueryAuditableServicesResponse.AuditableService 
AuditableService
name (	"f
LintPolicyRequest
full_resource_name (	&
	condition (2.google.type.ExprH B
lint_object"�

LintResult4
level (2%.google.iam.admin.v1.LintResult.Level
validation_unit_name (	:
severity (2(.google.iam.admin.v1.LintResult.Severity

field_name (	
location_offset (
debug_message (	"-
Level
LEVEL_UNSPECIFIED 
	CONDITION"b
Severity
SEVERITY_UNSPECIFIED 	
ERROR
WARNING

NOTICE
INFO

DEPRECATED"K
LintPolicyResponse5
lint_results (2.google.iam.admin.v1.LintResult*a
ServiceAccountKeyAlgorithm
KEY_ALG_UNSPECIFIED 
KEY_ALG_RSA_1024
KEY_ALG_RSA_2048*l
ServiceAccountPrivateKeyType
TYPE_UNSPECIFIED 
TYPE_PKCS12_FILE 
TYPE_GOOGLE_CREDENTIALS_FILE*]
ServiceAccountPublicKeyType
	TYPE_NONE 
TYPE_X509_PEM_FILE
TYPE_RAW_PUBLIC_KEY*Y
ServiceAccountKeyOrigin
ORIGIN_UNSPECIFIED 
USER_PROVIDED
GOOGLE_PROVIDED*
RoleView	
BASIC 
FULL2�(
IAM�
ListServiceAccounts/.google.iam.admin.v1.ListServiceAccountsRequest0.google.iam.admin.v1.ListServiceAccountsResponse"4���\'%/v1/{name=projects/*}/serviceAccounts�Aname�
GetServiceAccount-.google.iam.admin.v1.GetServiceAccountRequest#.google.iam.admin.v1.ServiceAccount"6���)\'/v1/{name=projects/*/serviceAccounts/*}�Aname�
CreateServiceAccount0.google.iam.admin.v1.CreateServiceAccountRequest#.google.iam.admin.v1.ServiceAccount"R���*"%/v1/{name=projects/*}/serviceAccounts:*�Aname,account_id,service_account�
UpdateServiceAccount#.google.iam.admin.v1.ServiceAccount#.google.iam.admin.v1.ServiceAccount"2���,\'/v1/{name=projects/*/serviceAccounts/*}:*�
PatchServiceAccount/.google.iam.admin.v1.PatchServiceAccountRequest#.google.iam.admin.v1.ServiceAccount"B���<27/v1/{service_account.name=projects/*/serviceAccounts/*}:*�
DeleteServiceAccount0.google.iam.admin.v1.DeleteServiceAccountRequest.google.protobuf.Empty"6���)*\'/v1/{name=projects/*/serviceAccounts/*}�Aname�
UndeleteServiceAccount2.google.iam.admin.v1.UndeleteServiceAccountRequest3.google.iam.admin.v1.UndeleteServiceAccountResponse";���5"0/v1/{name=projects/*/serviceAccounts/*}:undelete:*�
EnableServiceAccount0.google.iam.admin.v1.EnableServiceAccountRequest.google.protobuf.Empty"9���3"./v1/{name=projects/*/serviceAccounts/*}:enable:*�
DisableServiceAccount1.google.iam.admin.v1.DisableServiceAccountRequest.google.protobuf.Empty":���4"//v1/{name=projects/*/serviceAccounts/*}:disable:*�
ListServiceAccountKeys2.google.iam.admin.v1.ListServiceAccountKeysRequest3.google.iam.admin.v1.ListServiceAccountKeysResponse"E���.,/v1/{name=projects/*/serviceAccounts/*}/keys�Aname,key_types�
GetServiceAccountKey0.google.iam.admin.v1.GetServiceAccountKeyRequest&.google.iam.admin.v1.ServiceAccountKey"M���0./v1/{name=projects/*/serviceAccounts/*/keys/*}�Aname,public_key_type�
CreateServiceAccountKey3.google.iam.admin.v1.CreateServiceAccountKeyRequest&.google.iam.admin.v1.ServiceAccountKey"]���1",/v1/{name=projects/*/serviceAccounts/*}/keys:*�A#name,private_key_type,key_algorithm�
UploadServiceAccountKey3.google.iam.admin.v1.UploadServiceAccountKeyRequest&.google.iam.admin.v1.ServiceAccountKey">���8"3/v1/{name=projects/*/serviceAccounts/*}/keys:upload:*�
DeleteServiceAccountKey3.google.iam.admin.v1.DeleteServiceAccountKeyRequest.google.protobuf.Empty"=���0*./v1/{name=projects/*/serviceAccounts/*/keys/*}�Aname�
SignBlob$.google.iam.admin.v1.SignBlobRequest%.google.iam.admin.v1.SignBlobResponse"P���5"0/v1/{name=projects/*/serviceAccounts/*}:signBlob:*�Aname,bytes_to_sign�
SignJwt#.google.iam.admin.v1.SignJwtRequest$.google.iam.admin.v1.SignJwtResponse"I���4"//v1/{name=projects/*/serviceAccounts/*}:signJwt:*�Aname,payload�
GetIamPolicy".google.iam.v1.GetIamPolicyRequest.google.iam.v1.Policy"K���:"8/v1/{resource=projects/*/serviceAccounts/*}:getIamPolicy�Aresource�
SetIamPolicy".google.iam.v1.SetIamPolicyRequest.google.iam.v1.Policy"U���="8/v1/{resource=projects/*/serviceAccounts/*}:setIamPolicy:*�Aresource,policy�
TestIamPermissions(.google.iam.v1.TestIamPermissionsRequest).google.iam.v1.TestIamPermissionsResponse"`���C">/v1/{resource=projects/*/serviceAccounts/*}:testIamPermissions:*�Aresource,permissions�
QueryGrantableRoles/.google.iam.admin.v1.QueryGrantableRolesRequest0.google.iam.admin.v1.QueryGrantableRolesResponse"=���""/v1/roles:queryGrantableRoles:*�Afull_resource_name�
	ListRoles%.google.iam.admin.v1.ListRolesRequest&.google.iam.admin.v1.ListRolesResponse"X���R	/v1/rolesZ$"/v1/{parent=organizations/*}/rolesZ/v1/{parent=projects/*}/roles�
GetRole#.google.iam.admin.v1.GetRoleRequest.google.iam.admin.v1.Role"a���[/v1/{name=roles/*}Z$"/v1/{name=organizations/*/roles/*}Z/v1/{name=projects/*/roles/*}�

CreateRole&.google.iam.admin.v1.CreateRoleRequest.google.iam.admin.v1.Role"Q���K""/v1/{parent=organizations/*}/roles:*Z""/v1/{parent=projects/*}/roles:*�

UpdateRole&.google.iam.admin.v1.UpdateRoleRequest.google.iam.admin.v1.Role"W���Q2"/v1/{name=organizations/*/roles/*}:roleZ%2/v1/{name=projects/*/roles/*}:role�

DeleteRole&.google.iam.admin.v1.DeleteRoleRequest.google.iam.admin.v1.Role"K���E*"/v1/{name=organizations/*/roles/*}Z*/v1/{name=projects/*/roles/*}�
UndeleteRole(.google.iam.admin.v1.UndeleteRoleRequest.google.iam.admin.v1.Role"c���]"+/v1/{name=organizations/*/roles/*}:undelete:*Z+"&/v1/{name=projects/*/roles/*}:undelete:*�
QueryTestablePermissions4.google.iam.admin.v1.QueryTestablePermissionsRequest5.google.iam.admin.v1.QueryTestablePermissionsResponse"3���-"(/v1/permissions:queryTestablePermissions:*�
QueryAuditableServices2.google.iam.admin.v1.QueryAuditableServicesRequest3.google.iam.admin.v1.QueryAuditableServicesResponse"1���+"&/v1/iamPolicies:queryAuditableServices:*�

LintPolicy&.google.iam.admin.v1.LintPolicyRequest\'.google.iam.admin.v1.LintPolicyResponse"%���"/v1/iamPolicies:lintPolicy:*F�Aiam.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformBb
com.google.iam.admin.v1BIamProtoPZ8google.golang.org/genproto/googleapis/iam/admin/v1;admin�bproto3'
        , true);

        static::$is_initialized = true;
    }
}

