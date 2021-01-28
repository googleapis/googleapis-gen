<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/websecurityscanner/v1beta/scan_config.proto

namespace Google\Cloud\WebSecurityScanner\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A ScanConfig resource contains the configurations to launch a scan.
 *
 * Generated from protobuf message <code>google.cloud.websecurityscanner.v1beta.ScanConfig</code>
 */
class ScanConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the ScanConfig. The name follows the format of
     * 'projects/{projectId}/scanConfigs/{scanConfigId}'. The ScanConfig IDs are
     * generated by the system.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * Required. The user provided display name of the ScanConfig.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $display_name = '';
    /**
     * The maximum QPS during scanning. A valid value ranges from 5 to 20
     * inclusively. If the field is unspecified or its value is set 0, server will
     * default to 15. Other values outside of [5, 20] range will be rejected with
     * INVALID_ARGUMENT error.
     *
     * Generated from protobuf field <code>int32 max_qps = 3;</code>
     */
    protected $max_qps = 0;
    /**
     * Required. The starting URLs from which the scanner finds site pages.
     *
     * Generated from protobuf field <code>repeated string starting_urls = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $starting_urls;
    /**
     * The authentication configuration. If specified, service will use the
     * authentication configuration during scanning.
     *
     * Generated from protobuf field <code>.google.cloud.websecurityscanner.v1beta.ScanConfig.Authentication authentication = 5;</code>
     */
    protected $authentication = null;
    /**
     * The user agent used during scanning.
     *
     * Generated from protobuf field <code>.google.cloud.websecurityscanner.v1beta.ScanConfig.UserAgent user_agent = 6;</code>
     */
    protected $user_agent = 0;
    /**
     * The blacklist URL patterns as described in
     * https://cloud.google.com/security-scanner/docs/excluded-urls
     *
     * Generated from protobuf field <code>repeated string blacklist_patterns = 7;</code>
     */
    private $blacklist_patterns;
    /**
     * The schedule of the ScanConfig.
     *
     * Generated from protobuf field <code>.google.cloud.websecurityscanner.v1beta.ScanConfig.Schedule schedule = 8;</code>
     */
    protected $schedule = null;
    /**
     * Set of Cloud Platforms targeted by the scan. If empty, APP_ENGINE will be
     * used as a default.
     *
     * Generated from protobuf field <code>repeated .google.cloud.websecurityscanner.v1beta.ScanConfig.TargetPlatform target_platforms = 9;</code>
     */
    private $target_platforms;
    /**
     * Controls export of scan configurations and results to Cloud Security
     * Command Center.
     *
     * Generated from protobuf field <code>.google.cloud.websecurityscanner.v1beta.ScanConfig.ExportToSecurityCommandCenter export_to_security_command_center = 10;</code>
     */
    protected $export_to_security_command_center = 0;
    /**
     * Latest ScanRun if available.
     *
     * Generated from protobuf field <code>.google.cloud.websecurityscanner.v1beta.ScanRun latest_run = 11;</code>
     */
    protected $latest_run = null;
    /**
     * The risk level selected for the scan
     *
     * Generated from protobuf field <code>.google.cloud.websecurityscanner.v1beta.ScanConfig.RiskLevel risk_level = 12;</code>
     */
    protected $risk_level = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The resource name of the ScanConfig. The name follows the format of
     *           'projects/{projectId}/scanConfigs/{scanConfigId}'. The ScanConfig IDs are
     *           generated by the system.
     *     @type string $display_name
     *           Required. The user provided display name of the ScanConfig.
     *     @type int $max_qps
     *           The maximum QPS during scanning. A valid value ranges from 5 to 20
     *           inclusively. If the field is unspecified or its value is set 0, server will
     *           default to 15. Other values outside of [5, 20] range will be rejected with
     *           INVALID_ARGUMENT error.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $starting_urls
     *           Required. The starting URLs from which the scanner finds site pages.
     *     @type \Google\Cloud\WebSecurityScanner\V1beta\ScanConfig\Authentication $authentication
     *           The authentication configuration. If specified, service will use the
     *           authentication configuration during scanning.
     *     @type int $user_agent
     *           The user agent used during scanning.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $blacklist_patterns
     *           The blacklist URL patterns as described in
     *           https://cloud.google.com/security-scanner/docs/excluded-urls
     *     @type \Google\Cloud\WebSecurityScanner\V1beta\ScanConfig\Schedule $schedule
     *           The schedule of the ScanConfig.
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $target_platforms
     *           Set of Cloud Platforms targeted by the scan. If empty, APP_ENGINE will be
     *           used as a default.
     *     @type int $export_to_security_command_center
     *           Controls export of scan configurations and results to Cloud Security
     *           Command Center.
     *     @type \Google\Cloud\WebSecurityScanner\V1beta\ScanRun $latest_run
     *           Latest ScanRun if available.
     *     @type int $risk_level
     *           The risk level selected for the scan
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Websecurityscanner\V1Beta\ScanConfig::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the ScanConfig. The name follows the format of
     * 'projects/{projectId}/scanConfigs/{scanConfigId}'. The ScanConfig IDs are
     * generated by the system.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The resource name of the ScanConfig. The name follows the format of
     * 'projects/{projectId}/scanConfigs/{scanConfigId}'. The ScanConfig IDs are
     * generated by the system.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Required. The user provided display name of the ScanConfig.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Required. The user provided display name of the ScanConfig.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * The maximum QPS during scanning. A valid value ranges from 5 to 20
     * inclusively. If the field is unspecified or its value is set 0, server will
     * default to 15. Other values outside of [5, 20] range will be rejected with
     * INVALID_ARGUMENT error.
     *
     * Generated from protobuf field <code>int32 max_qps = 3;</code>
     * @return int
     */
    public function getMaxQps()
    {
        return $this->max_qps;
    }

    /**
     * The maximum QPS during scanning. A valid value ranges from 5 to 20
     * inclusively. If the field is unspecified or its value is set 0, server will
     * default to 15. Other values outside of [5, 20] range will be rejected with
     * INVALID_ARGUMENT error.
     *
     * Generated from protobuf field <code>int32 max_qps = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxQps($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_qps = $var;

        return $this;
    }

    /**
     * Required. The starting URLs from which the scanner finds site pages.
     *
     * Generated from protobuf field <code>repeated string starting_urls = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getStartingUrls()
    {
        return $this->starting_urls;
    }

    /**
     * Required. The starting URLs from which the scanner finds site pages.
     *
     * Generated from protobuf field <code>repeated string starting_urls = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setStartingUrls($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->starting_urls = $arr;

        return $this;
    }

    /**
     * The authentication configuration. If specified, service will use the
     * authentication configuration during scanning.
     *
     * Generated from protobuf field <code>.google.cloud.websecurityscanner.v1beta.ScanConfig.Authentication authentication = 5;</code>
     * @return \Google\Cloud\WebSecurityScanner\V1beta\ScanConfig\Authentication
     */
    public function getAuthentication()
    {
        return isset($this->authentication) ? $this->authentication : null;
    }

    public function hasAuthentication()
    {
        return isset($this->authentication);
    }

    public function clearAuthentication()
    {
        unset($this->authentication);
    }

    /**
     * The authentication configuration. If specified, service will use the
     * authentication configuration during scanning.
     *
     * Generated from protobuf field <code>.google.cloud.websecurityscanner.v1beta.ScanConfig.Authentication authentication = 5;</code>
     * @param \Google\Cloud\WebSecurityScanner\V1beta\ScanConfig\Authentication $var
     * @return $this
     */
    public function setAuthentication($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\WebSecurityScanner\V1beta\ScanConfig\Authentication::class);
        $this->authentication = $var;

        return $this;
    }

    /**
     * The user agent used during scanning.
     *
     * Generated from protobuf field <code>.google.cloud.websecurityscanner.v1beta.ScanConfig.UserAgent user_agent = 6;</code>
     * @return int
     */
    public function getUserAgent()
    {
        return $this->user_agent;
    }

    /**
     * The user agent used during scanning.
     *
     * Generated from protobuf field <code>.google.cloud.websecurityscanner.v1beta.ScanConfig.UserAgent user_agent = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setUserAgent($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\WebSecurityScanner\V1beta\ScanConfig\UserAgent::class);
        $this->user_agent = $var;

        return $this;
    }

    /**
     * The blacklist URL patterns as described in
     * https://cloud.google.com/security-scanner/docs/excluded-urls
     *
     * Generated from protobuf field <code>repeated string blacklist_patterns = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBlacklistPatterns()
    {
        return $this->blacklist_patterns;
    }

    /**
     * The blacklist URL patterns as described in
     * https://cloud.google.com/security-scanner/docs/excluded-urls
     *
     * Generated from protobuf field <code>repeated string blacklist_patterns = 7;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBlacklistPatterns($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->blacklist_patterns = $arr;

        return $this;
    }

    /**
     * The schedule of the ScanConfig.
     *
     * Generated from protobuf field <code>.google.cloud.websecurityscanner.v1beta.ScanConfig.Schedule schedule = 8;</code>
     * @return \Google\Cloud\WebSecurityScanner\V1beta\ScanConfig\Schedule
     */
    public function getSchedule()
    {
        return isset($this->schedule) ? $this->schedule : null;
    }

    public function hasSchedule()
    {
        return isset($this->schedule);
    }

    public function clearSchedule()
    {
        unset($this->schedule);
    }

    /**
     * The schedule of the ScanConfig.
     *
     * Generated from protobuf field <code>.google.cloud.websecurityscanner.v1beta.ScanConfig.Schedule schedule = 8;</code>
     * @param \Google\Cloud\WebSecurityScanner\V1beta\ScanConfig\Schedule $var
     * @return $this
     */
    public function setSchedule($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\WebSecurityScanner\V1beta\ScanConfig\Schedule::class);
        $this->schedule = $var;

        return $this;
    }

    /**
     * Set of Cloud Platforms targeted by the scan. If empty, APP_ENGINE will be
     * used as a default.
     *
     * Generated from protobuf field <code>repeated .google.cloud.websecurityscanner.v1beta.ScanConfig.TargetPlatform target_platforms = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTargetPlatforms()
    {
        return $this->target_platforms;
    }

    /**
     * Set of Cloud Platforms targeted by the scan. If empty, APP_ENGINE will be
     * used as a default.
     *
     * Generated from protobuf field <code>repeated .google.cloud.websecurityscanner.v1beta.ScanConfig.TargetPlatform target_platforms = 9;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTargetPlatforms($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Cloud\WebSecurityScanner\V1beta\ScanConfig\TargetPlatform::class);
        $this->target_platforms = $arr;

        return $this;
    }

    /**
     * Controls export of scan configurations and results to Cloud Security
     * Command Center.
     *
     * Generated from protobuf field <code>.google.cloud.websecurityscanner.v1beta.ScanConfig.ExportToSecurityCommandCenter export_to_security_command_center = 10;</code>
     * @return int
     */
    public function getExportToSecurityCommandCenter()
    {
        return $this->export_to_security_command_center;
    }

    /**
     * Controls export of scan configurations and results to Cloud Security
     * Command Center.
     *
     * Generated from protobuf field <code>.google.cloud.websecurityscanner.v1beta.ScanConfig.ExportToSecurityCommandCenter export_to_security_command_center = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setExportToSecurityCommandCenter($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\WebSecurityScanner\V1beta\ScanConfig\ExportToSecurityCommandCenter::class);
        $this->export_to_security_command_center = $var;

        return $this;
    }

    /**
     * Latest ScanRun if available.
     *
     * Generated from protobuf field <code>.google.cloud.websecurityscanner.v1beta.ScanRun latest_run = 11;</code>
     * @return \Google\Cloud\WebSecurityScanner\V1beta\ScanRun
     */
    public function getLatestRun()
    {
        return isset($this->latest_run) ? $this->latest_run : null;
    }

    public function hasLatestRun()
    {
        return isset($this->latest_run);
    }

    public function clearLatestRun()
    {
        unset($this->latest_run);
    }

    /**
     * Latest ScanRun if available.
     *
     * Generated from protobuf field <code>.google.cloud.websecurityscanner.v1beta.ScanRun latest_run = 11;</code>
     * @param \Google\Cloud\WebSecurityScanner\V1beta\ScanRun $var
     * @return $this
     */
    public function setLatestRun($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\WebSecurityScanner\V1beta\ScanRun::class);
        $this->latest_run = $var;

        return $this;
    }

    /**
     * The risk level selected for the scan
     *
     * Generated from protobuf field <code>.google.cloud.websecurityscanner.v1beta.ScanConfig.RiskLevel risk_level = 12;</code>
     * @return int
     */
    public function getRiskLevel()
    {
        return $this->risk_level;
    }

    /**
     * The risk level selected for the scan
     *
     * Generated from protobuf field <code>.google.cloud.websecurityscanner.v1beta.ScanConfig.RiskLevel risk_level = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setRiskLevel($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\WebSecurityScanner\V1beta\ScanConfig\RiskLevel::class);
        $this->risk_level = $var;

        return $this;
    }

}

