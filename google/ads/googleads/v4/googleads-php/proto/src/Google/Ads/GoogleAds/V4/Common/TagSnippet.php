<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/common/tag_snippet.proto

namespace Google\Ads\GoogleAds\V4\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The site tag and event snippet pair for a TrackingCodeType.
 *
 * Generated from protobuf message <code>google.ads.googleads.v4.common.TagSnippet</code>
 */
class TagSnippet extends \Google\Protobuf\Internal\Message
{
    /**
     * The type of the generated tag snippets for tracking conversions.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.TrackingCodeTypeEnum.TrackingCodeType type = 1;</code>
     */
    protected $type = 0;
    /**
     * The format of the web page where the tracking tag and snippet will be
     * installed, e.g. HTML.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.TrackingCodePageFormatEnum.TrackingCodePageFormat page_format = 2;</code>
     */
    protected $page_format = 0;
    /**
     * The site tag that adds visitors to your basic remarketing lists and sets
     * new cookies on your domain.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue global_site_tag = 3;</code>
     */
    protected $global_site_tag = null;
    /**
     * The event snippet that works with the site tag to track actions that
     * should be counted as conversions.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue event_snippet = 4;</code>
     */
    protected $event_snippet = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $type
     *           The type of the generated tag snippets for tracking conversions.
     *     @type int $page_format
     *           The format of the web page where the tracking tag and snippet will be
     *           installed, e.g. HTML.
     *     @type \Google\Protobuf\StringValue $global_site_tag
     *           The site tag that adds visitors to your basic remarketing lists and sets
     *           new cookies on your domain.
     *     @type \Google\Protobuf\StringValue $event_snippet
     *           The event snippet that works with the site tag to track actions that
     *           should be counted as conversions.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V4\Common\TagSnippet::initOnce();
        parent::__construct($data);
    }

    /**
     * The type of the generated tag snippets for tracking conversions.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.TrackingCodeTypeEnum.TrackingCodeType type = 1;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The type of the generated tag snippets for tracking conversions.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.TrackingCodeTypeEnum.TrackingCodeType type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V4\Enums\TrackingCodeTypeEnum\TrackingCodeType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * The format of the web page where the tracking tag and snippet will be
     * installed, e.g. HTML.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.TrackingCodePageFormatEnum.TrackingCodePageFormat page_format = 2;</code>
     * @return int
     */
    public function getPageFormat()
    {
        return $this->page_format;
    }

    /**
     * The format of the web page where the tracking tag and snippet will be
     * installed, e.g. HTML.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.TrackingCodePageFormatEnum.TrackingCodePageFormat page_format = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPageFormat($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V4\Enums\TrackingCodePageFormatEnum\TrackingCodePageFormat::class);
        $this->page_format = $var;

        return $this;
    }

    /**
     * The site tag that adds visitors to your basic remarketing lists and sets
     * new cookies on your domain.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue global_site_tag = 3;</code>
     * @return \Google\Protobuf\StringValue|null
     */
    public function getGlobalSiteTag()
    {
        return isset($this->global_site_tag) ? $this->global_site_tag : null;
    }

    public function hasGlobalSiteTag()
    {
        return isset($this->global_site_tag);
    }

    public function clearGlobalSiteTag()
    {
        unset($this->global_site_tag);
    }

    /**
     * Returns the unboxed value from <code>getGlobalSiteTag()</code>

     * The site tag that adds visitors to your basic remarketing lists and sets
     * new cookies on your domain.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue global_site_tag = 3;</code>
     * @return string|null
     */
    public function getGlobalSiteTagUnwrapped()
    {
        return $this->readWrapperValue("global_site_tag");
    }

    /**
     * The site tag that adds visitors to your basic remarketing lists and sets
     * new cookies on your domain.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue global_site_tag = 3;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setGlobalSiteTag($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->global_site_tag = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The site tag that adds visitors to your basic remarketing lists and sets
     * new cookies on your domain.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue global_site_tag = 3;</code>
     * @param string|null $var
     * @return $this
     */
    public function setGlobalSiteTagUnwrapped($var)
    {
        $this->writeWrapperValue("global_site_tag", $var);
        return $this;}

    /**
     * The event snippet that works with the site tag to track actions that
     * should be counted as conversions.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue event_snippet = 4;</code>
     * @return \Google\Protobuf\StringValue|null
     */
    public function getEventSnippet()
    {
        return isset($this->event_snippet) ? $this->event_snippet : null;
    }

    public function hasEventSnippet()
    {
        return isset($this->event_snippet);
    }

    public function clearEventSnippet()
    {
        unset($this->event_snippet);
    }

    /**
     * Returns the unboxed value from <code>getEventSnippet()</code>

     * The event snippet that works with the site tag to track actions that
     * should be counted as conversions.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue event_snippet = 4;</code>
     * @return string|null
     */
    public function getEventSnippetUnwrapped()
    {
        return $this->readWrapperValue("event_snippet");
    }

    /**
     * The event snippet that works with the site tag to track actions that
     * should be counted as conversions.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue event_snippet = 4;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setEventSnippet($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->event_snippet = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The event snippet that works with the site tag to track actions that
     * should be counted as conversions.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue event_snippet = 4;</code>
     * @param string|null $var
     * @return $this
     */
    public function setEventSnippetUnwrapped($var)
    {
        $this->writeWrapperValue("event_snippet", $var);
        return $this;}

}

