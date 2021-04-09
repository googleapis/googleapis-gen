<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v5/common/matching_function.proto

namespace Google\Ads\GoogleAds\V5\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An operand in a matching function.
 *
 * Generated from protobuf message <code>google.ads.googleads.v5.common.Operand</code>
 */
class Operand extends \Google\Protobuf\Internal\Message
{
    protected $function_argument_operand;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Ads\GoogleAds\V5\Common\Operand\ConstantOperand $constant_operand
     *           A constant operand in a matching function.
     *     @type \Google\Ads\GoogleAds\V5\Common\Operand\FeedAttributeOperand $feed_attribute_operand
     *           This operand specifies a feed attribute in feed.
     *     @type \Google\Ads\GoogleAds\V5\Common\Operand\FunctionOperand $function_operand
     *           A function operand in a matching function.
     *           Used to represent nested functions.
     *     @type \Google\Ads\GoogleAds\V5\Common\Operand\RequestContextOperand $request_context_operand
     *           An operand in a function referring to a value in the request context.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V5\Common\MatchingFunction::initOnce();
        parent::__construct($data);
    }

    /**
     * A constant operand in a matching function.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v5.common.Operand.ConstantOperand constant_operand = 1;</code>
     * @return \Google\Ads\GoogleAds\V5\Common\Operand\ConstantOperand|null
     */
    public function getConstantOperand()
    {
        return $this->readOneof(1);
    }

    public function hasConstantOperand()
    {
        return $this->hasOneof(1);
    }

    /**
     * A constant operand in a matching function.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v5.common.Operand.ConstantOperand constant_operand = 1;</code>
     * @param \Google\Ads\GoogleAds\V5\Common\Operand\ConstantOperand $var
     * @return $this
     */
    public function setConstantOperand($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V5\Common\Operand\ConstantOperand::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * This operand specifies a feed attribute in feed.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v5.common.Operand.FeedAttributeOperand feed_attribute_operand = 2;</code>
     * @return \Google\Ads\GoogleAds\V5\Common\Operand\FeedAttributeOperand|null
     */
    public function getFeedAttributeOperand()
    {
        return $this->readOneof(2);
    }

    public function hasFeedAttributeOperand()
    {
        return $this->hasOneof(2);
    }

    /**
     * This operand specifies a feed attribute in feed.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v5.common.Operand.FeedAttributeOperand feed_attribute_operand = 2;</code>
     * @param \Google\Ads\GoogleAds\V5\Common\Operand\FeedAttributeOperand $var
     * @return $this
     */
    public function setFeedAttributeOperand($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V5\Common\Operand\FeedAttributeOperand::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * A function operand in a matching function.
     * Used to represent nested functions.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v5.common.Operand.FunctionOperand function_operand = 3;</code>
     * @return \Google\Ads\GoogleAds\V5\Common\Operand\FunctionOperand|null
     */
    public function getFunctionOperand()
    {
        return $this->readOneof(3);
    }

    public function hasFunctionOperand()
    {
        return $this->hasOneof(3);
    }

    /**
     * A function operand in a matching function.
     * Used to represent nested functions.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v5.common.Operand.FunctionOperand function_operand = 3;</code>
     * @param \Google\Ads\GoogleAds\V5\Common\Operand\FunctionOperand $var
     * @return $this
     */
    public function setFunctionOperand($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V5\Common\Operand\FunctionOperand::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * An operand in a function referring to a value in the request context.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v5.common.Operand.RequestContextOperand request_context_operand = 4;</code>
     * @return \Google\Ads\GoogleAds\V5\Common\Operand\RequestContextOperand|null
     */
    public function getRequestContextOperand()
    {
        return $this->readOneof(4);
    }

    public function hasRequestContextOperand()
    {
        return $this->hasOneof(4);
    }

    /**
     * An operand in a function referring to a value in the request context.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v5.common.Operand.RequestContextOperand request_context_operand = 4;</code>
     * @param \Google\Ads\GoogleAds\V5\Common\Operand\RequestContextOperand $var
     * @return $this
     */
    public function setRequestContextOperand($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V5\Common\Operand\RequestContextOperand::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getFunctionArgumentOperand()
    {
        return $this->whichOneof("function_argument_operand");
    }

}

