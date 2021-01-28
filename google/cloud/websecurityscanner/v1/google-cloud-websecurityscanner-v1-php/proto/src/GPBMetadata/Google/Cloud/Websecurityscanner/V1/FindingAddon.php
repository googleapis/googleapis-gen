<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/websecurityscanner/v1/finding_addon.proto

namespace GPBMetadata\Google\Cloud\Websecurityscanner\V1;

class FindingAddon
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�

6google/cloud/websecurityscanner/v1/finding_addon.proto"google.cloud.websecurityscanner.v1"*
Form

action_uri (	
fields (	"Q
OutdatedLibrary
library_name (	
version (	
learn_more_urls (	"?
ViolatingResource
content_type (	
resource_url (	"/
VulnerableParameters
parameter_names (	"�
VulnerableHeadersM
headers (2<.google.cloud.websecurityscanner.v1.VulnerableHeaders.HeaderU
missing_headers (2<.google.cloud.websecurityscanner.v1.VulnerableHeaders.Header%
Header
name (	
value (	"�
Xss
stack_traces (	
error_message (	K
attack_vector (24.google.cloud.websecurityscanner.v1.Xss.AttackVector
stored_xss_seeding_url (	"�
AttackVector
ATTACK_VECTOR_UNSPECIFIED 
LOCAL_STORAGE
SESSION_STORAGE
WINDOW_NAME
REFERRER

FORM_INPUT

COOKIE
POST_MESSAGE
GET_PARAMETERS
URL_FRAGMENT	
HTML_COMMENT

POST_PARAMETERS
PROTOCOL

STORED_XSS
SAME_ORIGIN
USER_CONTROLLABLE_URLB�
&com.google.cloud.websecurityscanner.v1BFindingAddonProtoPZTgoogle.golang.org/genproto/googleapis/cloud/websecurityscanner/v1;websecurityscanner�"Google.Cloud.WebSecurityScanner.V1�"Google\\Cloud\\WebSecurityScanner\\V1�%Google::Cloud::WebSecurityScanner::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

