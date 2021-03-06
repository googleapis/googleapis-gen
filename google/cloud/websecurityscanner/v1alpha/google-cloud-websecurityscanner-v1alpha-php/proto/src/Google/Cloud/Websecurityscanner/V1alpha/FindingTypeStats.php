<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/websecurityscanner/v1alpha/finding_type_stats.proto

namespace Google\Cloud\Websecurityscanner\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A FindingTypeStats resource represents stats regarding a specific FindingType
 * of Findings under a given ScanRun.
 *
 * Generated from protobuf message <code>google.cloud.websecurityscanner.v1alpha.FindingTypeStats</code>
 */
class FindingTypeStats extends \Google\Protobuf\Internal\Message
{
    /**
     * The finding type associated with the stats.
     *
     * Generated from protobuf field <code>.google.cloud.websecurityscanner.v1alpha.Finding.FindingType finding_type = 1;</code>
     */
    protected $finding_type = 0;
    /**
     * The count of findings belonging to this finding type.
     *
     * Generated from protobuf field <code>int32 finding_count = 2;</code>
     */
    protected $finding_count = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $finding_type
     *           The finding type associated with the stats.
     *     @type int $finding_count
     *           The count of findings belonging to this finding type.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Websecurityscanner\V1Alpha\FindingTypeStats::initOnce();
        parent::__construct($data);
    }

    /**
     * The finding type associated with the stats.
     *
     * Generated from protobuf field <code>.google.cloud.websecurityscanner.v1alpha.Finding.FindingType finding_type = 1;</code>
     * @return int
     */
    public function getFindingType()
    {
        return $this->finding_type;
    }

    /**
     * The finding type associated with the stats.
     *
     * Generated from protobuf field <code>.google.cloud.websecurityscanner.v1alpha.Finding.FindingType finding_type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setFindingType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Websecurityscanner\V1alpha\Finding\FindingType::class);
        $this->finding_type = $var;

        return $this;
    }

    /**
     * The count of findings belonging to this finding type.
     *
     * Generated from protobuf field <code>int32 finding_count = 2;</code>
     * @return int
     */
    public function getFindingCount()
    {
        return $this->finding_count;
    }

    /**
     * The count of findings belonging to this finding type.
     *
     * Generated from protobuf field <code>int32 finding_count = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setFindingCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->finding_count = $var;

        return $this;
    }

}

