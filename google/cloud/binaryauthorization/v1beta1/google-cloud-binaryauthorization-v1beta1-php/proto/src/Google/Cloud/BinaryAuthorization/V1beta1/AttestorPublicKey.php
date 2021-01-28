<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/binaryauthorization/v1beta1/resources.proto

namespace Google\Cloud\BinaryAuthorization\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An [attestor public key][google.cloud.binaryauthorization.v1beta1.AttestorPublicKey] that will be used to verify
 * attestations signed by this attestor.
 *
 * Generated from protobuf message <code>google.cloud.binaryauthorization.v1beta1.AttestorPublicKey</code>
 */
class AttestorPublicKey extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. A descriptive comment. This field may be updated.
     *
     * Generated from protobuf field <code>string comment = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $comment = '';
    /**
     * The ID of this public key.
     * Signatures verified by BinAuthz must include the ID of the public key that
     * can be used to verify them, and that ID must match the contents of this
     * field exactly.
     * Additional restrictions on this field can be imposed based on which public
     * key type is encapsulated. See the documentation on `public_key` cases below
     * for details.
     *
     * Generated from protobuf field <code>string id = 2;</code>
     */
    protected $id = '';
    protected $public_key;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $comment
     *           Optional. A descriptive comment. This field may be updated.
     *     @type string $id
     *           The ID of this public key.
     *           Signatures verified by BinAuthz must include the ID of the public key that
     *           can be used to verify them, and that ID must match the contents of this
     *           field exactly.
     *           Additional restrictions on this field can be imposed based on which public
     *           key type is encapsulated. See the documentation on `public_key` cases below
     *           for details.
     *     @type string $ascii_armored_pgp_public_key
     *           ASCII-armored representation of a PGP public key, as the entire output by
     *           the command `gpg --export --armor foo&#64;example.com` (either LF or CRLF
     *           line endings).
     *           When using this field, `id` should be left blank.  The BinAuthz API
     *           handlers will calculate the ID and fill it in automatically.  BinAuthz
     *           computes this ID as the OpenPGP RFC4880 V4 fingerprint, represented as
     *           upper-case hex.  If `id` is provided by the caller, it will be
     *           overwritten by the API-calculated ID.
     *     @type \Google\Cloud\BinaryAuthorization\V1beta1\PkixPublicKey $pkix_public_key
     *           A raw PKIX SubjectPublicKeyInfo format public key.
     *           NOTE: `id` may be explicitly provided by the caller when using this
     *           type of public key, but it MUST be a valid RFC3986 URI. If `id` is left
     *           blank, a default one will be computed based on the digest of the DER
     *           encoding of the public key.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Binaryauthorization\V1Beta1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. A descriptive comment. This field may be updated.
     *
     * Generated from protobuf field <code>string comment = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Optional. A descriptive comment. This field may be updated.
     *
     * Generated from protobuf field <code>string comment = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setComment($var)
    {
        GPBUtil::checkString($var, True);
        $this->comment = $var;

        return $this;
    }

    /**
     * The ID of this public key.
     * Signatures verified by BinAuthz must include the ID of the public key that
     * can be used to verify them, and that ID must match the contents of this
     * field exactly.
     * Additional restrictions on this field can be imposed based on which public
     * key type is encapsulated. See the documentation on `public_key` cases below
     * for details.
     *
     * Generated from protobuf field <code>string id = 2;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * The ID of this public key.
     * Signatures verified by BinAuthz must include the ID of the public key that
     * can be used to verify them, and that ID must match the contents of this
     * field exactly.
     * Additional restrictions on this field can be imposed based on which public
     * key type is encapsulated. See the documentation on `public_key` cases below
     * for details.
     *
     * Generated from protobuf field <code>string id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * ASCII-armored representation of a PGP public key, as the entire output by
     * the command `gpg --export --armor foo&#64;example.com` (either LF or CRLF
     * line endings).
     * When using this field, `id` should be left blank.  The BinAuthz API
     * handlers will calculate the ID and fill it in automatically.  BinAuthz
     * computes this ID as the OpenPGP RFC4880 V4 fingerprint, represented as
     * upper-case hex.  If `id` is provided by the caller, it will be
     * overwritten by the API-calculated ID.
     *
     * Generated from protobuf field <code>string ascii_armored_pgp_public_key = 3;</code>
     * @return string
     */
    public function getAsciiArmoredPgpPublicKey()
    {
        return $this->readOneof(3);
    }

    public function hasAsciiArmoredPgpPublicKey()
    {
        return $this->hasOneof(3);
    }

    /**
     * ASCII-armored representation of a PGP public key, as the entire output by
     * the command `gpg --export --armor foo&#64;example.com` (either LF or CRLF
     * line endings).
     * When using this field, `id` should be left blank.  The BinAuthz API
     * handlers will calculate the ID and fill it in automatically.  BinAuthz
     * computes this ID as the OpenPGP RFC4880 V4 fingerprint, represented as
     * upper-case hex.  If `id` is provided by the caller, it will be
     * overwritten by the API-calculated ID.
     *
     * Generated from protobuf field <code>string ascii_armored_pgp_public_key = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setAsciiArmoredPgpPublicKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * A raw PKIX SubjectPublicKeyInfo format public key.
     * NOTE: `id` may be explicitly provided by the caller when using this
     * type of public key, but it MUST be a valid RFC3986 URI. If `id` is left
     * blank, a default one will be computed based on the digest of the DER
     * encoding of the public key.
     *
     * Generated from protobuf field <code>.google.cloud.binaryauthorization.v1beta1.PkixPublicKey pkix_public_key = 5;</code>
     * @return \Google\Cloud\BinaryAuthorization\V1beta1\PkixPublicKey
     */
    public function getPkixPublicKey()
    {
        return $this->readOneof(5);
    }

    public function hasPkixPublicKey()
    {
        return $this->hasOneof(5);
    }

    /**
     * A raw PKIX SubjectPublicKeyInfo format public key.
     * NOTE: `id` may be explicitly provided by the caller when using this
     * type of public key, but it MUST be a valid RFC3986 URI. If `id` is left
     * blank, a default one will be computed based on the digest of the DER
     * encoding of the public key.
     *
     * Generated from protobuf field <code>.google.cloud.binaryauthorization.v1beta1.PkixPublicKey pkix_public_key = 5;</code>
     * @param \Google\Cloud\BinaryAuthorization\V1beta1\PkixPublicKey $var
     * @return $this
     */
    public function setPkixPublicKey($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BinaryAuthorization\V1beta1\PkixPublicKey::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getPublicKey()
    {
        return $this->whichOneof("public_key");
    }

}

