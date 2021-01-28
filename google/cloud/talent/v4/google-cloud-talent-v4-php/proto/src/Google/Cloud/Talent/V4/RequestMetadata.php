<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4/common.proto

namespace Google\Cloud\Talent\V4;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Meta information related to the job searcher or entity
 * conducting the job search. This information is used to improve the
 * performance of the service.
 *
 * Generated from protobuf message <code>google.cloud.talent.v4.RequestMetadata</code>
 */
class RequestMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * Required if [allow_missing_ids][google.cloud.talent.v4.RequestMetadata.allow_missing_ids] is unset or `false`.
     * The client-defined scope or source of the service call, which typically
     * is the domain on
     * which the service has been implemented and is currently being run.
     * For example, if the service is being run by client <em>Foo, Inc.</em>, on
     * job board www.foo.com and career site www.bar.com, then this field is
     * set to "foo.com" for use on the job board, and "bar.com" for use on the
     * career site.
     * Note that any improvements to the model for a particular tenant site rely
     * on this field being set correctly to a unique domain.
     * The maximum number of allowed characters is 255.
     *
     * Generated from protobuf field <code>string domain = 1;</code>
     */
    protected $domain = '';
    /**
     * Required if [allow_missing_ids][google.cloud.talent.v4.RequestMetadata.allow_missing_ids] is unset or `false`.
     * A unique session identification string. A session is defined as the
     * duration of an end user's interaction with the service over a certain
     * period.
     * Obfuscate this field for privacy concerns before
     * providing it to the service.
     * Note that any improvements to the model for a particular tenant site rely
     * on this field being set correctly to a unique session ID.
     * The maximum number of allowed characters is 255.
     *
     * Generated from protobuf field <code>string session_id = 2;</code>
     */
    protected $session_id = '';
    /**
     * Required if [allow_missing_ids][google.cloud.talent.v4.RequestMetadata.allow_missing_ids] is unset or `false`.
     * A unique user identification string, as determined by the client.
     * To have the strongest positive impact on search quality
     * make sure the client-level is unique.
     * Obfuscate this field for privacy concerns before
     * providing it to the service.
     * Note that any improvements to the model for a particular tenant site rely
     * on this field being set correctly to a unique user ID.
     * The maximum number of allowed characters is 255.
     *
     * Generated from protobuf field <code>string user_id = 3;</code>
     */
    protected $user_id = '';
    /**
     * Only set when any of [domain][google.cloud.talent.v4.RequestMetadata.domain], [session_id][google.cloud.talent.v4.RequestMetadata.session_id] and [user_id][google.cloud.talent.v4.RequestMetadata.user_id] isn't
     * available for some reason. It is highly recommended not to set this field
     * and provide accurate [domain][google.cloud.talent.v4.RequestMetadata.domain], [session_id][google.cloud.talent.v4.RequestMetadata.session_id] and [user_id][google.cloud.talent.v4.RequestMetadata.user_id] for the
     * best service experience.
     *
     * Generated from protobuf field <code>bool allow_missing_ids = 4;</code>
     */
    protected $allow_missing_ids = false;
    /**
     * The type of device used by the job seeker at the time of the call to the
     * service.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4.DeviceInfo device_info = 5;</code>
     */
    protected $device_info = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $domain
     *           Required if [allow_missing_ids][google.cloud.talent.v4.RequestMetadata.allow_missing_ids] is unset or `false`.
     *           The client-defined scope or source of the service call, which typically
     *           is the domain on
     *           which the service has been implemented and is currently being run.
     *           For example, if the service is being run by client <em>Foo, Inc.</em>, on
     *           job board www.foo.com and career site www.bar.com, then this field is
     *           set to "foo.com" for use on the job board, and "bar.com" for use on the
     *           career site.
     *           Note that any improvements to the model for a particular tenant site rely
     *           on this field being set correctly to a unique domain.
     *           The maximum number of allowed characters is 255.
     *     @type string $session_id
     *           Required if [allow_missing_ids][google.cloud.talent.v4.RequestMetadata.allow_missing_ids] is unset or `false`.
     *           A unique session identification string. A session is defined as the
     *           duration of an end user's interaction with the service over a certain
     *           period.
     *           Obfuscate this field for privacy concerns before
     *           providing it to the service.
     *           Note that any improvements to the model for a particular tenant site rely
     *           on this field being set correctly to a unique session ID.
     *           The maximum number of allowed characters is 255.
     *     @type string $user_id
     *           Required if [allow_missing_ids][google.cloud.talent.v4.RequestMetadata.allow_missing_ids] is unset or `false`.
     *           A unique user identification string, as determined by the client.
     *           To have the strongest positive impact on search quality
     *           make sure the client-level is unique.
     *           Obfuscate this field for privacy concerns before
     *           providing it to the service.
     *           Note that any improvements to the model for a particular tenant site rely
     *           on this field being set correctly to a unique user ID.
     *           The maximum number of allowed characters is 255.
     *     @type bool $allow_missing_ids
     *           Only set when any of [domain][google.cloud.talent.v4.RequestMetadata.domain], [session_id][google.cloud.talent.v4.RequestMetadata.session_id] and [user_id][google.cloud.talent.v4.RequestMetadata.user_id] isn't
     *           available for some reason. It is highly recommended not to set this field
     *           and provide accurate [domain][google.cloud.talent.v4.RequestMetadata.domain], [session_id][google.cloud.talent.v4.RequestMetadata.session_id] and [user_id][google.cloud.talent.v4.RequestMetadata.user_id] for the
     *           best service experience.
     *     @type \Google\Cloud\Talent\V4\DeviceInfo $device_info
     *           The type of device used by the job seeker at the time of the call to the
     *           service.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Talent\V4\Common::initOnce();
        parent::__construct($data);
    }

    /**
     * Required if [allow_missing_ids][google.cloud.talent.v4.RequestMetadata.allow_missing_ids] is unset or `false`.
     * The client-defined scope or source of the service call, which typically
     * is the domain on
     * which the service has been implemented and is currently being run.
     * For example, if the service is being run by client <em>Foo, Inc.</em>, on
     * job board www.foo.com and career site www.bar.com, then this field is
     * set to "foo.com" for use on the job board, and "bar.com" for use on the
     * career site.
     * Note that any improvements to the model for a particular tenant site rely
     * on this field being set correctly to a unique domain.
     * The maximum number of allowed characters is 255.
     *
     * Generated from protobuf field <code>string domain = 1;</code>
     * @return string
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * Required if [allow_missing_ids][google.cloud.talent.v4.RequestMetadata.allow_missing_ids] is unset or `false`.
     * The client-defined scope or source of the service call, which typically
     * is the domain on
     * which the service has been implemented and is currently being run.
     * For example, if the service is being run by client <em>Foo, Inc.</em>, on
     * job board www.foo.com and career site www.bar.com, then this field is
     * set to "foo.com" for use on the job board, and "bar.com" for use on the
     * career site.
     * Note that any improvements to the model for a particular tenant site rely
     * on this field being set correctly to a unique domain.
     * The maximum number of allowed characters is 255.
     *
     * Generated from protobuf field <code>string domain = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDomain($var)
    {
        GPBUtil::checkString($var, True);
        $this->domain = $var;

        return $this;
    }

    /**
     * Required if [allow_missing_ids][google.cloud.talent.v4.RequestMetadata.allow_missing_ids] is unset or `false`.
     * A unique session identification string. A session is defined as the
     * duration of an end user's interaction with the service over a certain
     * period.
     * Obfuscate this field for privacy concerns before
     * providing it to the service.
     * Note that any improvements to the model for a particular tenant site rely
     * on this field being set correctly to a unique session ID.
     * The maximum number of allowed characters is 255.
     *
     * Generated from protobuf field <code>string session_id = 2;</code>
     * @return string
     */
    public function getSessionId()
    {
        return $this->session_id;
    }

    /**
     * Required if [allow_missing_ids][google.cloud.talent.v4.RequestMetadata.allow_missing_ids] is unset or `false`.
     * A unique session identification string. A session is defined as the
     * duration of an end user's interaction with the service over a certain
     * period.
     * Obfuscate this field for privacy concerns before
     * providing it to the service.
     * Note that any improvements to the model for a particular tenant site rely
     * on this field being set correctly to a unique session ID.
     * The maximum number of allowed characters is 255.
     *
     * Generated from protobuf field <code>string session_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSessionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->session_id = $var;

        return $this;
    }

    /**
     * Required if [allow_missing_ids][google.cloud.talent.v4.RequestMetadata.allow_missing_ids] is unset or `false`.
     * A unique user identification string, as determined by the client.
     * To have the strongest positive impact on search quality
     * make sure the client-level is unique.
     * Obfuscate this field for privacy concerns before
     * providing it to the service.
     * Note that any improvements to the model for a particular tenant site rely
     * on this field being set correctly to a unique user ID.
     * The maximum number of allowed characters is 255.
     *
     * Generated from protobuf field <code>string user_id = 3;</code>
     * @return string
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Required if [allow_missing_ids][google.cloud.talent.v4.RequestMetadata.allow_missing_ids] is unset or `false`.
     * A unique user identification string, as determined by the client.
     * To have the strongest positive impact on search quality
     * make sure the client-level is unique.
     * Obfuscate this field for privacy concerns before
     * providing it to the service.
     * Note that any improvements to the model for a particular tenant site rely
     * on this field being set correctly to a unique user ID.
     * The maximum number of allowed characters is 255.
     *
     * Generated from protobuf field <code>string user_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setUserId($var)
    {
        GPBUtil::checkString($var, True);
        $this->user_id = $var;

        return $this;
    }

    /**
     * Only set when any of [domain][google.cloud.talent.v4.RequestMetadata.domain], [session_id][google.cloud.talent.v4.RequestMetadata.session_id] and [user_id][google.cloud.talent.v4.RequestMetadata.user_id] isn't
     * available for some reason. It is highly recommended not to set this field
     * and provide accurate [domain][google.cloud.talent.v4.RequestMetadata.domain], [session_id][google.cloud.talent.v4.RequestMetadata.session_id] and [user_id][google.cloud.talent.v4.RequestMetadata.user_id] for the
     * best service experience.
     *
     * Generated from protobuf field <code>bool allow_missing_ids = 4;</code>
     * @return bool
     */
    public function getAllowMissingIds()
    {
        return $this->allow_missing_ids;
    }

    /**
     * Only set when any of [domain][google.cloud.talent.v4.RequestMetadata.domain], [session_id][google.cloud.talent.v4.RequestMetadata.session_id] and [user_id][google.cloud.talent.v4.RequestMetadata.user_id] isn't
     * available for some reason. It is highly recommended not to set this field
     * and provide accurate [domain][google.cloud.talent.v4.RequestMetadata.domain], [session_id][google.cloud.talent.v4.RequestMetadata.session_id] and [user_id][google.cloud.talent.v4.RequestMetadata.user_id] for the
     * best service experience.
     *
     * Generated from protobuf field <code>bool allow_missing_ids = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setAllowMissingIds($var)
    {
        GPBUtil::checkBool($var);
        $this->allow_missing_ids = $var;

        return $this;
    }

    /**
     * The type of device used by the job seeker at the time of the call to the
     * service.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4.DeviceInfo device_info = 5;</code>
     * @return \Google\Cloud\Talent\V4\DeviceInfo
     */
    public function getDeviceInfo()
    {
        return isset($this->device_info) ? $this->device_info : null;
    }

    public function hasDeviceInfo()
    {
        return isset($this->device_info);
    }

    public function clearDeviceInfo()
    {
        unset($this->device_info);
    }

    /**
     * The type of device used by the job seeker at the time of the call to the
     * service.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4.DeviceInfo device_info = 5;</code>
     * @param \Google\Cloud\Talent\V4\DeviceInfo $var
     * @return $this
     */
    public function setDeviceInfo($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Talent\V4\DeviceInfo::class);
        $this->device_info = $var;

        return $this;
    }

}

