<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/appengine/v1/version.proto

namespace Google\Cloud\AppEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * VPC access connector specification.
 *
 * Generated from protobuf message <code>google.appengine.v1.VpcAccessConnector</code>
 */
class VpcAccessConnector extends \Google\Protobuf\Internal\Message
{
    /**
     * Full Serverless VPC Access Connector name e.g.
     * /projects/my-project/locations/us-central1/connectors/c1.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Full Serverless VPC Access Connector name e.g.
     *           /projects/my-project/locations/us-central1/connectors/c1.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Appengine\V1\Version::initOnce();
        parent::__construct($data);
    }

    /**
     * Full Serverless VPC Access Connector name e.g.
     * /projects/my-project/locations/us-central1/connectors/c1.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Full Serverless VPC Access Connector name e.g.
     * /projects/my-project/locations/us-central1/connectors/c1.
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

}

