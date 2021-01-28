<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4beta1/profile.proto

namespace Google\Cloud\Talent\V4beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Resource that represents a degree pursuing or acquired by a candidate.
 *
 * Generated from protobuf message <code>google.cloud.talent.v4beta1.Degree</code>
 */
class Degree extends \Google\Protobuf\Internal\Message
{
    /**
     * ISCED degree type.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.DegreeType degree_type = 1;</code>
     */
    protected $degree_type = 0;
    /**
     * Full Degree name.
     * For example, "B.S.", "Master of Arts", and so on.
     * Number of characters allowed is 100.
     *
     * Generated from protobuf field <code>string degree_name = 2;</code>
     */
    protected $degree_name = '';
    /**
     * Fields of study for the degree.
     * For example, "Computer science", "engineering".
     * Number of characters allowed is 100.
     *
     * Generated from protobuf field <code>repeated string fields_of_study = 3;</code>
     */
    private $fields_of_study;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $degree_type
     *           ISCED degree type.
     *     @type string $degree_name
     *           Full Degree name.
     *           For example, "B.S.", "Master of Arts", and so on.
     *           Number of characters allowed is 100.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $fields_of_study
     *           Fields of study for the degree.
     *           For example, "Computer science", "engineering".
     *           Number of characters allowed is 100.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Talent\V4Beta1\Profile::initOnce();
        parent::__construct($data);
    }

    /**
     * ISCED degree type.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.DegreeType degree_type = 1;</code>
     * @return int
     */
    public function getDegreeType()
    {
        return $this->degree_type;
    }

    /**
     * ISCED degree type.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.DegreeType degree_type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setDegreeType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Talent\V4beta1\DegreeType::class);
        $this->degree_type = $var;

        return $this;
    }

    /**
     * Full Degree name.
     * For example, "B.S.", "Master of Arts", and so on.
     * Number of characters allowed is 100.
     *
     * Generated from protobuf field <code>string degree_name = 2;</code>
     * @return string
     */
    public function getDegreeName()
    {
        return $this->degree_name;
    }

    /**
     * Full Degree name.
     * For example, "B.S.", "Master of Arts", and so on.
     * Number of characters allowed is 100.
     *
     * Generated from protobuf field <code>string degree_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDegreeName($var)
    {
        GPBUtil::checkString($var, True);
        $this->degree_name = $var;

        return $this;
    }

    /**
     * Fields of study for the degree.
     * For example, "Computer science", "engineering".
     * Number of characters allowed is 100.
     *
     * Generated from protobuf field <code>repeated string fields_of_study = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFieldsOfStudy()
    {
        return $this->fields_of_study;
    }

    /**
     * Fields of study for the degree.
     * For example, "Computer science", "engineering".
     * Number of characters allowed is 100.
     *
     * Generated from protobuf field <code>repeated string fields_of_study = 3;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFieldsOfStudy($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->fields_of_study = $arr;

        return $this;
    }

}

