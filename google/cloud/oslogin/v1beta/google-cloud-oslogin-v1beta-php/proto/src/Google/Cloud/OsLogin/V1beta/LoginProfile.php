<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/oslogin/v1beta/oslogin.proto

namespace Google\Cloud\OsLogin\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The user profile information used for logging in to a virtual machine on
 * Google Compute Engine.
 *
 * Generated from protobuf message <code>google.cloud.oslogin.v1beta.LoginProfile</code>
 */
class LoginProfile extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. A unique user ID.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $name = '';
    /**
     * The list of POSIX accounts associated with the user.
     *
     * Generated from protobuf field <code>repeated .google.cloud.oslogin.common.PosixAccount posix_accounts = 2;</code>
     */
    private $posix_accounts;
    /**
     * A map from SSH public key fingerprint to the associated key object.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.oslogin.common.SshPublicKey> ssh_public_keys = 3;</code>
     */
    private $ssh_public_keys;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. A unique user ID.
     *     @type \Google\Cloud\OsLogin\Common\PosixAccount[]|\Google\Protobuf\Internal\RepeatedField $posix_accounts
     *           The list of POSIX accounts associated with the user.
     *     @type array|\Google\Protobuf\Internal\MapField $ssh_public_keys
     *           A map from SSH public key fingerprint to the associated key object.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Oslogin\V1Beta\Oslogin::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. A unique user ID.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. A unique user ID.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * The list of POSIX accounts associated with the user.
     *
     * Generated from protobuf field <code>repeated .google.cloud.oslogin.common.PosixAccount posix_accounts = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPosixAccounts()
    {
        return $this->posix_accounts;
    }

    /**
     * The list of POSIX accounts associated with the user.
     *
     * Generated from protobuf field <code>repeated .google.cloud.oslogin.common.PosixAccount posix_accounts = 2;</code>
     * @param \Google\Cloud\OsLogin\Common\PosixAccount[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPosixAccounts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\OsLogin\Common\PosixAccount::class);
        $this->posix_accounts = $arr;

        return $this;
    }

    /**
     * A map from SSH public key fingerprint to the associated key object.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.oslogin.common.SshPublicKey> ssh_public_keys = 3;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getSshPublicKeys()
    {
        return $this->ssh_public_keys;
    }

    /**
     * A map from SSH public key fingerprint to the associated key object.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.oslogin.common.SshPublicKey> ssh_public_keys = 3;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setSshPublicKeys($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\OsLogin\Common\SshPublicKey::class);
        $this->ssh_public_keys = $arr;

        return $this;
    }

}

