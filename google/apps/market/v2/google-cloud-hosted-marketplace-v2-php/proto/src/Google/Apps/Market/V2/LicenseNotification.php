<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/apps/market/v2/resources.proto

namespace Google\Apps\Market\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>ccc.hosted.marketplace.v2.LicenseNotification</code>
 */
class LicenseNotification extends \Google\Protobuf\Internal\Message
{
    /**
     * The ID of the license notification.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * The ID of the application according to this notification.
     *
     * Generated from protobuf field <code>string application_id = 2;</code>
     */
    protected $application_id = '';
    /**
     * The time the event occurred, measuring in milliseconds since the UNIX
     * epoch.
     *
     * Generated from protobuf field <code>int64 timestamp = 3;</code>
     */
    protected $timestamp = 0;
    /**
     * The domain name of the customer corresponding to this notification.
     *
     * Generated from protobuf field <code>string customer_id = 4;</code>
     */
    protected $customer_id = '';
    /**
     * The type of API resource. This is always appsmarket#licenseNotification.
     *
     * Generated from protobuf field <code>string kind = 5;</code>
     */
    protected $kind = '';
    /**
     * The list of provisioning notifications.
     *
     * Generated from protobuf field <code>repeated .ccc.hosted.marketplace.v2.LicenseNotification.Provisions provisions = 6;</code>
     */
    private $provisions;
    /**
     * The list of expiry notifications.
     *
     * Generated from protobuf field <code>repeated .ccc.hosted.marketplace.v2.LicenseNotification.Expiries expiries = 7;</code>
     */
    private $expiries;
    /**
     * The list of reassignment notifications.
     *
     * Generated from protobuf field <code>repeated .ccc.hosted.marketplace.v2.LicenseNotification.Reassignments reassignments = 8;</code>
     */
    private $reassignments;
    /**
     * The list of deletion notifications.
     *
     * Generated from protobuf field <code>repeated .ccc.hosted.marketplace.v2.LicenseNotification.Deletes deletes = 9;</code>
     */
    private $deletes;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           The ID of the license notification.
     *     @type string $application_id
     *           The ID of the application according to this notification.
     *     @type int|string $timestamp
     *           The time the event occurred, measuring in milliseconds since the UNIX
     *           epoch.
     *     @type string $customer_id
     *           The domain name of the customer corresponding to this notification.
     *     @type string $kind
     *           The type of API resource. This is always appsmarket#licenseNotification.
     *     @type \Google\Apps\Market\V2\LicenseNotification\Provisions[]|\Google\Protobuf\Internal\RepeatedField $provisions
     *           The list of provisioning notifications.
     *     @type \Google\Apps\Market\V2\LicenseNotification\Expiries[]|\Google\Protobuf\Internal\RepeatedField $expiries
     *           The list of expiry notifications.
     *     @type \Google\Apps\Market\V2\LicenseNotification\Reassignments[]|\Google\Protobuf\Internal\RepeatedField $reassignments
     *           The list of reassignment notifications.
     *     @type \Google\Apps\Market\V2\LicenseNotification\Deletes[]|\Google\Protobuf\Internal\RepeatedField $deletes
     *           The list of deletion notifications.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Apps\Market\V2\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * The ID of the license notification.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * The ID of the license notification.
     *
     * Generated from protobuf field <code>string id = 1;</code>
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
     * The ID of the application according to this notification.
     *
     * Generated from protobuf field <code>string application_id = 2;</code>
     * @return string
     */
    public function getApplicationId()
    {
        return $this->application_id;
    }

    /**
     * The ID of the application according to this notification.
     *
     * Generated from protobuf field <code>string application_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setApplicationId($var)
    {
        GPBUtil::checkString($var, True);
        $this->application_id = $var;

        return $this;
    }

    /**
     * The time the event occurred, measuring in milliseconds since the UNIX
     * epoch.
     *
     * Generated from protobuf field <code>int64 timestamp = 3;</code>
     * @return int|string
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * The time the event occurred, measuring in milliseconds since the UNIX
     * epoch.
     *
     * Generated from protobuf field <code>int64 timestamp = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTimestamp($var)
    {
        GPBUtil::checkInt64($var);
        $this->timestamp = $var;

        return $this;
    }

    /**
     * The domain name of the customer corresponding to this notification.
     *
     * Generated from protobuf field <code>string customer_id = 4;</code>
     * @return string
     */
    public function getCustomerId()
    {
        return $this->customer_id;
    }

    /**
     * The domain name of the customer corresponding to this notification.
     *
     * Generated from protobuf field <code>string customer_id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setCustomerId($var)
    {
        GPBUtil::checkString($var, True);
        $this->customer_id = $var;

        return $this;
    }

    /**
     * The type of API resource. This is always appsmarket#licenseNotification.
     *
     * Generated from protobuf field <code>string kind = 5;</code>
     * @return string
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * The type of API resource. This is always appsmarket#licenseNotification.
     *
     * Generated from protobuf field <code>string kind = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkString($var, True);
        $this->kind = $var;

        return $this;
    }

    /**
     * The list of provisioning notifications.
     *
     * Generated from protobuf field <code>repeated .ccc.hosted.marketplace.v2.LicenseNotification.Provisions provisions = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getProvisions()
    {
        return $this->provisions;
    }

    /**
     * The list of provisioning notifications.
     *
     * Generated from protobuf field <code>repeated .ccc.hosted.marketplace.v2.LicenseNotification.Provisions provisions = 6;</code>
     * @param \Google\Apps\Market\V2\LicenseNotification\Provisions[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setProvisions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Apps\Market\V2\LicenseNotification\Provisions::class);
        $this->provisions = $arr;

        return $this;
    }

    /**
     * The list of expiry notifications.
     *
     * Generated from protobuf field <code>repeated .ccc.hosted.marketplace.v2.LicenseNotification.Expiries expiries = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getExpiries()
    {
        return $this->expiries;
    }

    /**
     * The list of expiry notifications.
     *
     * Generated from protobuf field <code>repeated .ccc.hosted.marketplace.v2.LicenseNotification.Expiries expiries = 7;</code>
     * @param \Google\Apps\Market\V2\LicenseNotification\Expiries[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setExpiries($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Apps\Market\V2\LicenseNotification\Expiries::class);
        $this->expiries = $arr;

        return $this;
    }

    /**
     * The list of reassignment notifications.
     *
     * Generated from protobuf field <code>repeated .ccc.hosted.marketplace.v2.LicenseNotification.Reassignments reassignments = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getReassignments()
    {
        return $this->reassignments;
    }

    /**
     * The list of reassignment notifications.
     *
     * Generated from protobuf field <code>repeated .ccc.hosted.marketplace.v2.LicenseNotification.Reassignments reassignments = 8;</code>
     * @param \Google\Apps\Market\V2\LicenseNotification\Reassignments[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setReassignments($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Apps\Market\V2\LicenseNotification\Reassignments::class);
        $this->reassignments = $arr;

        return $this;
    }

    /**
     * The list of deletion notifications.
     *
     * Generated from protobuf field <code>repeated .ccc.hosted.marketplace.v2.LicenseNotification.Deletes deletes = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDeletes()
    {
        return $this->deletes;
    }

    /**
     * The list of deletion notifications.
     *
     * Generated from protobuf field <code>repeated .ccc.hosted.marketplace.v2.LicenseNotification.Deletes deletes = 9;</code>
     * @param \Google\Apps\Market\V2\LicenseNotification\Deletes[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDeletes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Apps\Market\V2\LicenseNotification\Deletes::class);
        $this->deletes = $arr;

        return $this;
    }

}

