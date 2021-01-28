<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v3/services/customer_service.proto

namespace Google\Ads\GoogleAds\V3\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [CustomerService.CreateCustomerClient][google.ads.googleads.v3.services.CustomerService.CreateCustomerClient].
 *
 * Generated from protobuf message <code>google.ads.googleads.v3.services.CreateCustomerClientRequest</code>
 */
class CreateCustomerClientRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The ID of the Manager under whom client customer is being created.
     *
     * Generated from protobuf field <code>string customer_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $customer_id = '';
    /**
     * Required. The new client customer to create. The resource name on this customer
     * will be ignored.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.resources.Customer customer_client = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $customer_client = null;
    /**
     * Email address of the user who should be invited on the created client
     * customer. Accessible only to customers on the allow-list.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue email_address = 3;</code>
     */
    protected $email_address = null;
    /**
     * The proposed role of user on the created client customer.
     * Accessible only to customers on the allow-list.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.enums.AccessRoleEnum.AccessRole access_role = 4;</code>
     */
    protected $access_role = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $customer_id
     *           Required. The ID of the Manager under whom client customer is being created.
     *     @type \Google\Ads\GoogleAds\V3\Resources\Customer $customer_client
     *           Required. The new client customer to create. The resource name on this customer
     *           will be ignored.
     *     @type \Google\Protobuf\StringValue $email_address
     *           Email address of the user who should be invited on the created client
     *           customer. Accessible only to customers on the allow-list.
     *     @type int $access_role
     *           The proposed role of user on the created client customer.
     *           Accessible only to customers on the allow-list.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V3\Services\CustomerService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The ID of the Manager under whom client customer is being created.
     *
     * Generated from protobuf field <code>string customer_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getCustomerId()
    {
        return $this->customer_id;
    }

    /**
     * Required. The ID of the Manager under whom client customer is being created.
     *
     * Generated from protobuf field <code>string customer_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Required. The new client customer to create. The resource name on this customer
     * will be ignored.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.resources.Customer customer_client = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Ads\GoogleAds\V3\Resources\Customer
     */
    public function getCustomerClient()
    {
        return isset($this->customer_client) ? $this->customer_client : null;
    }

    public function hasCustomerClient()
    {
        return isset($this->customer_client);
    }

    public function clearCustomerClient()
    {
        unset($this->customer_client);
    }

    /**
     * Required. The new client customer to create. The resource name on this customer
     * will be ignored.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.resources.Customer customer_client = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Ads\GoogleAds\V3\Resources\Customer $var
     * @return $this
     */
    public function setCustomerClient($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V3\Resources\Customer::class);
        $this->customer_client = $var;

        return $this;
    }

    /**
     * Email address of the user who should be invited on the created client
     * customer. Accessible only to customers on the allow-list.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue email_address = 3;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getEmailAddress()
    {
        return isset($this->email_address) ? $this->email_address : null;
    }

    public function hasEmailAddress()
    {
        return isset($this->email_address);
    }

    public function clearEmailAddress()
    {
        unset($this->email_address);
    }

    /**
     * Returns the unboxed value from <code>getEmailAddress()</code>

     * Email address of the user who should be invited on the created client
     * customer. Accessible only to customers on the allow-list.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue email_address = 3;</code>
     * @return string|null
     */
    public function getEmailAddressUnwrapped()
    {
        return $this->readWrapperValue("email_address");
    }

    /**
     * Email address of the user who should be invited on the created client
     * customer. Accessible only to customers on the allow-list.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue email_address = 3;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setEmailAddress($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->email_address = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Email address of the user who should be invited on the created client
     * customer. Accessible only to customers on the allow-list.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue email_address = 3;</code>
     * @param string|null $var
     * @return $this
     */
    public function setEmailAddressUnwrapped($var)
    {
        $this->writeWrapperValue("email_address", $var);
        return $this;}

    /**
     * The proposed role of user on the created client customer.
     * Accessible only to customers on the allow-list.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.enums.AccessRoleEnum.AccessRole access_role = 4;</code>
     * @return int
     */
    public function getAccessRole()
    {
        return $this->access_role;
    }

    /**
     * The proposed role of user on the created client customer.
     * Accessible only to customers on the allow-list.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.enums.AccessRoleEnum.AccessRole access_role = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setAccessRole($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V3\Enums\AccessRoleEnum\AccessRole::class);
        $this->access_role = $var;

        return $this;
    }

}

