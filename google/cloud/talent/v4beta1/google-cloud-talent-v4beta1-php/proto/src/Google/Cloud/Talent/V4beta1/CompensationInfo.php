<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4beta1/common.proto

namespace Google\Cloud\Talent\V4beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Job compensation details.
 *
 * Generated from protobuf message <code>google.cloud.talent.v4beta1.CompensationInfo</code>
 */
class CompensationInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Job compensation information.
     * At most one entry can be of type
     * [CompensationInfo.CompensationType.BASE][google.cloud.talent.v4beta1.CompensationInfo.CompensationType.BASE], which is
     * referred as **base compensation entry** for the job.
     *
     * Generated from protobuf field <code>repeated .google.cloud.talent.v4beta1.CompensationInfo.CompensationEntry entries = 1;</code>
     */
    private $entries;
    /**
     * Output only. Annualized base compensation range. Computed as base compensation entry's
     * [CompensationEntry.amount][google.cloud.talent.v4beta1.CompensationInfo.CompensationEntry.amount] times
     * [CompensationEntry.expected_units_per_year][google.cloud.talent.v4beta1.CompensationInfo.CompensationEntry.expected_units_per_year].
     * See [CompensationEntry][google.cloud.talent.v4beta1.CompensationInfo.CompensationEntry] for explanation on compensation annualization.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.CompensationInfo.CompensationRange annualized_base_compensation_range = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $annualized_base_compensation_range = null;
    /**
     * Output only. Annualized total compensation range. Computed as all compensation entries'
     * [CompensationEntry.amount][google.cloud.talent.v4beta1.CompensationInfo.CompensationEntry.amount] times
     * [CompensationEntry.expected_units_per_year][google.cloud.talent.v4beta1.CompensationInfo.CompensationEntry.expected_units_per_year].
     * See [CompensationEntry][google.cloud.talent.v4beta1.CompensationInfo.CompensationEntry] for explanation on compensation annualization.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.CompensationInfo.CompensationRange annualized_total_compensation_range = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $annualized_total_compensation_range = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Talent\V4beta1\CompensationInfo\CompensationEntry[]|\Google\Protobuf\Internal\RepeatedField $entries
     *           Job compensation information.
     *           At most one entry can be of type
     *           [CompensationInfo.CompensationType.BASE][google.cloud.talent.v4beta1.CompensationInfo.CompensationType.BASE], which is
     *           referred as **base compensation entry** for the job.
     *     @type \Google\Cloud\Talent\V4beta1\CompensationInfo\CompensationRange $annualized_base_compensation_range
     *           Output only. Annualized base compensation range. Computed as base compensation entry's
     *           [CompensationEntry.amount][google.cloud.talent.v4beta1.CompensationInfo.CompensationEntry.amount] times
     *           [CompensationEntry.expected_units_per_year][google.cloud.talent.v4beta1.CompensationInfo.CompensationEntry.expected_units_per_year].
     *           See [CompensationEntry][google.cloud.talent.v4beta1.CompensationInfo.CompensationEntry] for explanation on compensation annualization.
     *     @type \Google\Cloud\Talent\V4beta1\CompensationInfo\CompensationRange $annualized_total_compensation_range
     *           Output only. Annualized total compensation range. Computed as all compensation entries'
     *           [CompensationEntry.amount][google.cloud.talent.v4beta1.CompensationInfo.CompensationEntry.amount] times
     *           [CompensationEntry.expected_units_per_year][google.cloud.talent.v4beta1.CompensationInfo.CompensationEntry.expected_units_per_year].
     *           See [CompensationEntry][google.cloud.talent.v4beta1.CompensationInfo.CompensationEntry] for explanation on compensation annualization.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Talent\V4Beta1\Common::initOnce();
        parent::__construct($data);
    }

    /**
     * Job compensation information.
     * At most one entry can be of type
     * [CompensationInfo.CompensationType.BASE][google.cloud.talent.v4beta1.CompensationInfo.CompensationType.BASE], which is
     * referred as **base compensation entry** for the job.
     *
     * Generated from protobuf field <code>repeated .google.cloud.talent.v4beta1.CompensationInfo.CompensationEntry entries = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEntries()
    {
        return $this->entries;
    }

    /**
     * Job compensation information.
     * At most one entry can be of type
     * [CompensationInfo.CompensationType.BASE][google.cloud.talent.v4beta1.CompensationInfo.CompensationType.BASE], which is
     * referred as **base compensation entry** for the job.
     *
     * Generated from protobuf field <code>repeated .google.cloud.talent.v4beta1.CompensationInfo.CompensationEntry entries = 1;</code>
     * @param \Google\Cloud\Talent\V4beta1\CompensationInfo\CompensationEntry[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEntries($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Talent\V4beta1\CompensationInfo\CompensationEntry::class);
        $this->entries = $arr;

        return $this;
    }

    /**
     * Output only. Annualized base compensation range. Computed as base compensation entry's
     * [CompensationEntry.amount][google.cloud.talent.v4beta1.CompensationInfo.CompensationEntry.amount] times
     * [CompensationEntry.expected_units_per_year][google.cloud.talent.v4beta1.CompensationInfo.CompensationEntry.expected_units_per_year].
     * See [CompensationEntry][google.cloud.talent.v4beta1.CompensationInfo.CompensationEntry] for explanation on compensation annualization.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.CompensationInfo.CompensationRange annualized_base_compensation_range = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Talent\V4beta1\CompensationInfo\CompensationRange
     */
    public function getAnnualizedBaseCompensationRange()
    {
        return isset($this->annualized_base_compensation_range) ? $this->annualized_base_compensation_range : null;
    }

    public function hasAnnualizedBaseCompensationRange()
    {
        return isset($this->annualized_base_compensation_range);
    }

    public function clearAnnualizedBaseCompensationRange()
    {
        unset($this->annualized_base_compensation_range);
    }

    /**
     * Output only. Annualized base compensation range. Computed as base compensation entry's
     * [CompensationEntry.amount][google.cloud.talent.v4beta1.CompensationInfo.CompensationEntry.amount] times
     * [CompensationEntry.expected_units_per_year][google.cloud.talent.v4beta1.CompensationInfo.CompensationEntry.expected_units_per_year].
     * See [CompensationEntry][google.cloud.talent.v4beta1.CompensationInfo.CompensationEntry] for explanation on compensation annualization.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.CompensationInfo.CompensationRange annualized_base_compensation_range = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Talent\V4beta1\CompensationInfo\CompensationRange $var
     * @return $this
     */
    public function setAnnualizedBaseCompensationRange($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Talent\V4beta1\CompensationInfo\CompensationRange::class);
        $this->annualized_base_compensation_range = $var;

        return $this;
    }

    /**
     * Output only. Annualized total compensation range. Computed as all compensation entries'
     * [CompensationEntry.amount][google.cloud.talent.v4beta1.CompensationInfo.CompensationEntry.amount] times
     * [CompensationEntry.expected_units_per_year][google.cloud.talent.v4beta1.CompensationInfo.CompensationEntry.expected_units_per_year].
     * See [CompensationEntry][google.cloud.talent.v4beta1.CompensationInfo.CompensationEntry] for explanation on compensation annualization.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.CompensationInfo.CompensationRange annualized_total_compensation_range = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Talent\V4beta1\CompensationInfo\CompensationRange
     */
    public function getAnnualizedTotalCompensationRange()
    {
        return isset($this->annualized_total_compensation_range) ? $this->annualized_total_compensation_range : null;
    }

    public function hasAnnualizedTotalCompensationRange()
    {
        return isset($this->annualized_total_compensation_range);
    }

    public function clearAnnualizedTotalCompensationRange()
    {
        unset($this->annualized_total_compensation_range);
    }

    /**
     * Output only. Annualized total compensation range. Computed as all compensation entries'
     * [CompensationEntry.amount][google.cloud.talent.v4beta1.CompensationInfo.CompensationEntry.amount] times
     * [CompensationEntry.expected_units_per_year][google.cloud.talent.v4beta1.CompensationInfo.CompensationEntry.expected_units_per_year].
     * See [CompensationEntry][google.cloud.talent.v4beta1.CompensationInfo.CompensationEntry] for explanation on compensation annualization.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.CompensationInfo.CompensationRange annualized_total_compensation_range = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Talent\V4beta1\CompensationInfo\CompensationRange $var
     * @return $this
     */
    public function setAnnualizedTotalCompensationRange($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Talent\V4beta1\CompensationInfo\CompensationRange::class);
        $this->annualized_total_compensation_range = $var;

        return $this;
    }

}

