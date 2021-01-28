<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/phishingprotection/v1beta1/phishingprotection.proto

namespace Google\Cloud\PhishingProtection\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The ReportPhishing request message.
 *
 * Generated from protobuf message <code>google.cloud.phishingprotection.v1beta1.ReportPhishingRequest</code>
 */
class ReportPhishingRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the project for which the report will be created,
     * in the format "projects/{project_number}".
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The URI that is being reported for phishing content to be analyzed.
     *
     * Generated from protobuf field <code>string uri = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $uri = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The name of the project for which the report will be created,
     *           in the format "projects/{project_number}".
     *     @type string $uri
     *           Required. The URI that is being reported for phishing content to be analyzed.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Phishingprotection\V1Beta1\Phishingprotection::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the project for which the report will be created,
     * in the format "projects/{project_number}".
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The name of the project for which the report will be created,
     * in the format "projects/{project_number}".
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. The URI that is being reported for phishing content to be analyzed.
     *
     * Generated from protobuf field <code>string uri = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * Required. The URI that is being reported for phishing content to be analyzed.
     *
     * Generated from protobuf field <code>string uri = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->uri = $var;

        return $this;
    }

}

