<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/security/privateca/v1/service.proto

namespace Google\Cloud\Security\PrivateCA\v1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [CertificateAuthorityService.GetCertificate][google.cloud.security.privateca.v1.CertificateAuthorityService.GetCertificate].
 *
 * Generated from protobuf message <code>google.cloud.security.privateca.v1.GetCertificateRequest</code>
 */
class GetCertificateRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The [name][google.cloud.security.privateca.v1.Certificate.name]
     * of the [Certificate][google.cloud.security.privateca.v1.Certificate] to
     * get.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The [name][google.cloud.security.privateca.v1.Certificate.name]
     *           of the [Certificate][google.cloud.security.privateca.v1.Certificate] to
     *           get.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Security\Privateca\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The [name][google.cloud.security.privateca.v1.Certificate.name]
     * of the [Certificate][google.cloud.security.privateca.v1.Certificate] to
     * get.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The [name][google.cloud.security.privateca.v1.Certificate.name]
     * of the [Certificate][google.cloud.security.privateca.v1.Certificate] to
     * get.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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

