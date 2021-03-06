<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/serviceusage/v1beta1/resources.proto

namespace Google\Api\ServiceUsage\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Service identity for a service. This is the identity that service producer
 * should use to access consumer resources.
 *
 * Generated from protobuf message <code>google.api.serviceusage.v1beta1.ServiceIdentity</code>
 */
class ServiceIdentity extends \Google\Protobuf\Internal\Message
{
    /**
     * The email address of the service account that a service producer would use
     * to access consumer resources.
     *
     * Generated from protobuf field <code>string email = 1;</code>
     */
    protected $email = '';
    /**
     * The unique and stable id of the service account.
     * https://cloud.google.com/iam/reference/rest/v1/projects.serviceAccounts#ServiceAccount
     *
     * Generated from protobuf field <code>string unique_id = 2;</code>
     */
    protected $unique_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $email
     *           The email address of the service account that a service producer would use
     *           to access consumer resources.
     *     @type string $unique_id
     *           The unique and stable id of the service account.
     *           https://cloud.google.com/iam/reference/rest/v1/projects.serviceAccounts#ServiceAccount
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Api\Serviceusage\V1Beta1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * The email address of the service account that a service producer would use
     * to access consumer resources.
     *
     * Generated from protobuf field <code>string email = 1;</code>
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * The email address of the service account that a service producer would use
     * to access consumer resources.
     *
     * Generated from protobuf field <code>string email = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setEmail($var)
    {
        GPBUtil::checkString($var, True);
        $this->email = $var;

        return $this;
    }

    /**
     * The unique and stable id of the service account.
     * https://cloud.google.com/iam/reference/rest/v1/projects.serviceAccounts#ServiceAccount
     *
     * Generated from protobuf field <code>string unique_id = 2;</code>
     * @return string
     */
    public function getUniqueId()
    {
        return $this->unique_id;
    }

    /**
     * The unique and stable id of the service account.
     * https://cloud.google.com/iam/reference/rest/v1/projects.serviceAccounts#ServiceAccount
     *
     * Generated from protobuf field <code>string unique_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setUniqueId($var)
    {
        GPBUtil::checkString($var, True);
        $this->unique_id = $var;

        return $this;
    }

}

