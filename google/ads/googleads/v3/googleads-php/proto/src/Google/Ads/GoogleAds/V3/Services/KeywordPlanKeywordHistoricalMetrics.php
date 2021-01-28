<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v3/services/keyword_plan_service.proto

namespace Google\Ads\GoogleAds\V3\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A keyword historical metrics.
 *
 * Generated from protobuf message <code>google.ads.googleads.v3.services.KeywordPlanKeywordHistoricalMetrics</code>
 */
class KeywordPlanKeywordHistoricalMetrics extends \Google\Protobuf\Internal\Message
{
    /**
     * The text of the query associated with one or more ad_group_keywords in the
     * plan.
     * Note that we de-dupe your keywords list, eliminating close variants before
     * returning the plan's keywords as text. For example, if your plan originally
     * contained the keywords 'car' and 'cars', the returned search query will
     * only contain 'cars'.
     * Starting V5, the list of de-duped queries will be included in
     * close_variants field.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue search_query = 1;</code>
     */
    protected $search_query = null;
    /**
     * The historical metrics for the query associated with one or more
     * ad_group_keywords in the plan.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.common.KeywordPlanHistoricalMetrics keyword_metrics = 2;</code>
     */
    protected $keyword_metrics = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $search_query
     *           The text of the query associated with one or more ad_group_keywords in the
     *           plan.
     *           Note that we de-dupe your keywords list, eliminating close variants before
     *           returning the plan's keywords as text. For example, if your plan originally
     *           contained the keywords 'car' and 'cars', the returned search query will
     *           only contain 'cars'.
     *           Starting V5, the list of de-duped queries will be included in
     *           close_variants field.
     *     @type \Google\Ads\GoogleAds\V3\Common\KeywordPlanHistoricalMetrics $keyword_metrics
     *           The historical metrics for the query associated with one or more
     *           ad_group_keywords in the plan.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V3\Services\KeywordPlanService::initOnce();
        parent::__construct($data);
    }

    /**
     * The text of the query associated with one or more ad_group_keywords in the
     * plan.
     * Note that we de-dupe your keywords list, eliminating close variants before
     * returning the plan's keywords as text. For example, if your plan originally
     * contained the keywords 'car' and 'cars', the returned search query will
     * only contain 'cars'.
     * Starting V5, the list of de-duped queries will be included in
     * close_variants field.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue search_query = 1;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getSearchQuery()
    {
        return isset($this->search_query) ? $this->search_query : null;
    }

    public function hasSearchQuery()
    {
        return isset($this->search_query);
    }

    public function clearSearchQuery()
    {
        unset($this->search_query);
    }

    /**
     * Returns the unboxed value from <code>getSearchQuery()</code>

     * The text of the query associated with one or more ad_group_keywords in the
     * plan.
     * Note that we de-dupe your keywords list, eliminating close variants before
     * returning the plan's keywords as text. For example, if your plan originally
     * contained the keywords 'car' and 'cars', the returned search query will
     * only contain 'cars'.
     * Starting V5, the list of de-duped queries will be included in
     * close_variants field.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue search_query = 1;</code>
     * @return string|null
     */
    public function getSearchQueryUnwrapped()
    {
        return $this->readWrapperValue("search_query");
    }

    /**
     * The text of the query associated with one or more ad_group_keywords in the
     * plan.
     * Note that we de-dupe your keywords list, eliminating close variants before
     * returning the plan's keywords as text. For example, if your plan originally
     * contained the keywords 'car' and 'cars', the returned search query will
     * only contain 'cars'.
     * Starting V5, the list of de-duped queries will be included in
     * close_variants field.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue search_query = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setSearchQuery($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->search_query = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The text of the query associated with one or more ad_group_keywords in the
     * plan.
     * Note that we de-dupe your keywords list, eliminating close variants before
     * returning the plan's keywords as text. For example, if your plan originally
     * contained the keywords 'car' and 'cars', the returned search query will
     * only contain 'cars'.
     * Starting V5, the list of de-duped queries will be included in
     * close_variants field.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue search_query = 1;</code>
     * @param string|null $var
     * @return $this
     */
    public function setSearchQueryUnwrapped($var)
    {
        $this->writeWrapperValue("search_query", $var);
        return $this;}

    /**
     * The historical metrics for the query associated with one or more
     * ad_group_keywords in the plan.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.common.KeywordPlanHistoricalMetrics keyword_metrics = 2;</code>
     * @return \Google\Ads\GoogleAds\V3\Common\KeywordPlanHistoricalMetrics
     */
    public function getKeywordMetrics()
    {
        return isset($this->keyword_metrics) ? $this->keyword_metrics : null;
    }

    public function hasKeywordMetrics()
    {
        return isset($this->keyword_metrics);
    }

    public function clearKeywordMetrics()
    {
        unset($this->keyword_metrics);
    }

    /**
     * The historical metrics for the query associated with one or more
     * ad_group_keywords in the plan.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.common.KeywordPlanHistoricalMetrics keyword_metrics = 2;</code>
     * @param \Google\Ads\GoogleAds\V3\Common\KeywordPlanHistoricalMetrics $var
     * @return $this
     */
    public function setKeywordMetrics($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V3\Common\KeywordPlanHistoricalMetrics::class);
        $this->keyword_metrics = $var;

        return $this;
    }

}

