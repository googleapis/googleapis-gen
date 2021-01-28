<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/recaptchaenterprise/v1/recaptchaenterprise.proto

namespace Google\Cloud\RecaptchaEnterprise\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.recaptchaenterprise.v1.Event</code>
 */
class Event extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. The user response token provided by the reCAPTCHA client-side integration
     * on your site.
     *
     * Generated from protobuf field <code>string token = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $token = '';
    /**
     * Optional. The site key that was used to invoke reCAPTCHA on your site and generate
     * the token.
     *
     * Generated from protobuf field <code>string site_key = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $site_key = '';
    /**
     * Optional. The user agent present in the request from the user's device related to
     * this event.
     *
     * Generated from protobuf field <code>string user_agent = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $user_agent = '';
    /**
     * Optional. The IP address in the request from the user's device related to this event.
     *
     * Generated from protobuf field <code>string user_ip_address = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $user_ip_address = '';
    /**
     * Optional. The expected action for this type of event. This should be the same action
     * provided at token generation time on client-side platforms already
     * integrated with recaptcha enterprise.
     *
     * Generated from protobuf field <code>string expected_action = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $expected_action = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $token
     *           Optional. The user response token provided by the reCAPTCHA client-side integration
     *           on your site.
     *     @type string $site_key
     *           Optional. The site key that was used to invoke reCAPTCHA on your site and generate
     *           the token.
     *     @type string $user_agent
     *           Optional. The user agent present in the request from the user's device related to
     *           this event.
     *     @type string $user_ip_address
     *           Optional. The IP address in the request from the user's device related to this event.
     *     @type string $expected_action
     *           Optional. The expected action for this type of event. This should be the same action
     *           provided at token generation time on client-side platforms already
     *           integrated with recaptcha enterprise.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Recaptchaenterprise\V1\Recaptchaenterprise::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. The user response token provided by the reCAPTCHA client-side integration
     * on your site.
     *
     * Generated from protobuf field <code>string token = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Optional. The user response token provided by the reCAPTCHA client-side integration
     * on your site.
     *
     * Generated from protobuf field <code>string token = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->token = $var;

        return $this;
    }

    /**
     * Optional. The site key that was used to invoke reCAPTCHA on your site and generate
     * the token.
     *
     * Generated from protobuf field <code>string site_key = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getSiteKey()
    {
        return $this->site_key;
    }

    /**
     * Optional. The site key that was used to invoke reCAPTCHA on your site and generate
     * the token.
     *
     * Generated from protobuf field <code>string site_key = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setSiteKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->site_key = $var;

        return $this;
    }

    /**
     * Optional. The user agent present in the request from the user's device related to
     * this event.
     *
     * Generated from protobuf field <code>string user_agent = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getUserAgent()
    {
        return $this->user_agent;
    }

    /**
     * Optional. The user agent present in the request from the user's device related to
     * this event.
     *
     * Generated from protobuf field <code>string user_agent = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setUserAgent($var)
    {
        GPBUtil::checkString($var, True);
        $this->user_agent = $var;

        return $this;
    }

    /**
     * Optional. The IP address in the request from the user's device related to this event.
     *
     * Generated from protobuf field <code>string user_ip_address = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getUserIpAddress()
    {
        return $this->user_ip_address;
    }

    /**
     * Optional. The IP address in the request from the user's device related to this event.
     *
     * Generated from protobuf field <code>string user_ip_address = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setUserIpAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->user_ip_address = $var;

        return $this;
    }

    /**
     * Optional. The expected action for this type of event. This should be the same action
     * provided at token generation time on client-side platforms already
     * integrated with recaptcha enterprise.
     *
     * Generated from protobuf field <code>string expected_action = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getExpectedAction()
    {
        return $this->expected_action;
    }

    /**
     * Optional. The expected action for this type of event. This should be the same action
     * provided at token generation time on client-side platforms already
     * integrated with recaptcha enterprise.
     *
     * Generated from protobuf field <code>string expected_action = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setExpectedAction($var)
    {
        GPBUtil::checkString($var, True);
        $this->expected_action = $var;

        return $this;
    }

}

