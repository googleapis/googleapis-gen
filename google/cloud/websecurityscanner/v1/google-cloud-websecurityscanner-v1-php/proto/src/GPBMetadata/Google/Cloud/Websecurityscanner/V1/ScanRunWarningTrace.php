<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/websecurityscanner/v1/scan_run_warning_trace.proto

namespace GPBMetadata\Google\Cloud\Websecurityscanner\V1;

class ScanRunWarningTrace
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
?google/cloud/websecurityscanner/v1/scan_run_warning_trace.proto"google.cloud.websecurityscanner.v1"�
ScanRunWarningTraceJ
code (2<.google.cloud.websecurityscanner.v1.ScanRunWarningTrace.Code"�
Code
CODE_UNSPECIFIED 
INSUFFICIENT_CRAWL_RESULTS
TOO_MANY_CRAWL_RESULTS
TOO_MANY_FUZZ_TASKS
BLOCKED_BY_IAPB�
&com.google.cloud.websecurityscanner.v1BScanRunWarningTraceProtoPZTgoogle.golang.org/genproto/googleapis/cloud/websecurityscanner/v1;websecurityscanner�"Google.Cloud.WebSecurityScanner.V1�"Google\\Cloud\\WebSecurityScanner\\V1�%Google::Cloud::WebSecurityScanner::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

