<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2\PrivacyMetric\KMapEstimationConfig;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A column with a semantic tag attached.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.PrivacyMetric.KMapEstimationConfig.TaggedField</code>
 */
class TaggedField extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Identifies the column.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.FieldId field = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $field = null;
    protected $tag;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dlp\V2\FieldId $field
     *           Required. Identifies the column.
     *     @type \Google\Cloud\Dlp\V2\InfoType $info_type
     *           A column can be tagged with a InfoType to use the relevant public
     *           dataset as a statistical model of population, if available. We
     *           currently support US ZIP codes, region codes, ages and genders.
     *           To programmatically obtain the list of supported InfoTypes, use
     *           ListInfoTypes with the supported_by=RISK_ANALYSIS filter.
     *     @type string $custom_tag
     *           A column can be tagged with a custom tag. In this case, the user must
     *           indicate an auxiliary table that contains statistical information on
     *           the possible values of this column (below).
     *     @type \Google\Protobuf\GPBEmpty $inferred
     *           If no semantic tag is indicated, we infer the statistical model from
     *           the distribution of values in the input data
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Identifies the column.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.FieldId field = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Dlp\V2\FieldId
     */
    public function getField()
    {
        return isset($this->field) ? $this->field : null;
    }

    public function hasField()
    {
        return isset($this->field);
    }

    public function clearField()
    {
        unset($this->field);
    }

    /**
     * Required. Identifies the column.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.FieldId field = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Dlp\V2\FieldId $var
     * @return $this
     */
    public function setField($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\FieldId::class);
        $this->field = $var;

        return $this;
    }

    /**
     * A column can be tagged with a InfoType to use the relevant public
     * dataset as a statistical model of population, if available. We
     * currently support US ZIP codes, region codes, ages and genders.
     * To programmatically obtain the list of supported InfoTypes, use
     * ListInfoTypes with the supported_by=RISK_ANALYSIS filter.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.InfoType info_type = 2;</code>
     * @return \Google\Cloud\Dlp\V2\InfoType
     */
    public function getInfoType()
    {
        return $this->readOneof(2);
    }

    public function hasInfoType()
    {
        return $this->hasOneof(2);
    }

    /**
     * A column can be tagged with a InfoType to use the relevant public
     * dataset as a statistical model of population, if available. We
     * currently support US ZIP codes, region codes, ages and genders.
     * To programmatically obtain the list of supported InfoTypes, use
     * ListInfoTypes with the supported_by=RISK_ANALYSIS filter.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.InfoType info_type = 2;</code>
     * @param \Google\Cloud\Dlp\V2\InfoType $var
     * @return $this
     */
    public function setInfoType($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\InfoType::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * A column can be tagged with a custom tag. In this case, the user must
     * indicate an auxiliary table that contains statistical information on
     * the possible values of this column (below).
     *
     * Generated from protobuf field <code>string custom_tag = 3;</code>
     * @return string
     */
    public function getCustomTag()
    {
        return $this->readOneof(3);
    }

    public function hasCustomTag()
    {
        return $this->hasOneof(3);
    }

    /**
     * A column can be tagged with a custom tag. In this case, the user must
     * indicate an auxiliary table that contains statistical information on
     * the possible values of this column (below).
     *
     * Generated from protobuf field <code>string custom_tag = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setCustomTag($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * If no semantic tag is indicated, we infer the statistical model from
     * the distribution of values in the input data
     *
     * Generated from protobuf field <code>.google.protobuf.Empty inferred = 4;</code>
     * @return \Google\Protobuf\GPBEmpty
     */
    public function getInferred()
    {
        return $this->readOneof(4);
    }

    public function hasInferred()
    {
        return $this->hasOneof(4);
    }

    /**
     * If no semantic tag is indicated, we infer the statistical model from
     * the distribution of values in the input data
     *
     * Generated from protobuf field <code>.google.protobuf.Empty inferred = 4;</code>
     * @param \Google\Protobuf\GPBEmpty $var
     * @return $this
     */
    public function setInferred($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\GPBEmpty::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getTag()
    {
        return $this->whichOneof("tag");
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TaggedField::class, \Google\Cloud\Dlp\V2\PrivacyMetric_KMapEstimationConfig_TaggedField::class);

