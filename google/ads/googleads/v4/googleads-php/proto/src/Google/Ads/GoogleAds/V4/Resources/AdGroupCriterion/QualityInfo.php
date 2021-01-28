<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/resources/ad_group_criterion.proto

namespace Google\Ads\GoogleAds\V4\Resources\AdGroupCriterion;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A container for ad group criterion quality information.
 *
 * Generated from protobuf message <code>google.ads.googleads.v4.resources.AdGroupCriterion.QualityInfo</code>
 */
class QualityInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The quality score.
     * This field may not be populated if Google does not have enough
     * information to determine a value.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value quality_score = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $quality_score = null;
    /**
     * Output only. The performance of the ad compared to other advertisers.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.QualityScoreBucketEnum.QualityScoreBucket creative_quality_score = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $creative_quality_score = 0;
    /**
     * Output only. The quality score of the landing page.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.QualityScoreBucketEnum.QualityScoreBucket post_click_quality_score = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $post_click_quality_score = 0;
    /**
     * Output only. The click-through rate compared to that of other advertisers.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.QualityScoreBucketEnum.QualityScoreBucket search_predicted_ctr = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $search_predicted_ctr = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Int32Value $quality_score
     *           Output only. The quality score.
     *           This field may not be populated if Google does not have enough
     *           information to determine a value.
     *     @type int $creative_quality_score
     *           Output only. The performance of the ad compared to other advertisers.
     *     @type int $post_click_quality_score
     *           Output only. The quality score of the landing page.
     *     @type int $search_predicted_ctr
     *           Output only. The click-through rate compared to that of other advertisers.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V4\Resources\AdGroupCriterion::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The quality score.
     * This field may not be populated if Google does not have enough
     * information to determine a value.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value quality_score = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Int32Value
     */
    public function getQualityScore()
    {
        return isset($this->quality_score) ? $this->quality_score : null;
    }

    public function hasQualityScore()
    {
        return isset($this->quality_score);
    }

    public function clearQualityScore()
    {
        unset($this->quality_score);
    }

    /**
     * Returns the unboxed value from <code>getQualityScore()</code>

     * Output only. The quality score.
     * This field may not be populated if Google does not have enough
     * information to determine a value.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value quality_score = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|null
     */
    public function getQualityScoreUnwrapped()
    {
        return $this->readWrapperValue("quality_score");
    }

    /**
     * Output only. The quality score.
     * This field may not be populated if Google does not have enough
     * information to determine a value.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value quality_score = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Int32Value $var
     * @return $this
     */
    public function setQualityScore($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int32Value::class);
        $this->quality_score = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int32Value object.

     * Output only. The quality score.
     * This field may not be populated if Google does not have enough
     * information to determine a value.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value quality_score = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|null $var
     * @return $this
     */
    public function setQualityScoreUnwrapped($var)
    {
        $this->writeWrapperValue("quality_score", $var);
        return $this;}

    /**
     * Output only. The performance of the ad compared to other advertisers.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.QualityScoreBucketEnum.QualityScoreBucket creative_quality_score = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getCreativeQualityScore()
    {
        return $this->creative_quality_score;
    }

    /**
     * Output only. The performance of the ad compared to other advertisers.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.QualityScoreBucketEnum.QualityScoreBucket creative_quality_score = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setCreativeQualityScore($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V4\Enums\QualityScoreBucketEnum\QualityScoreBucket::class);
        $this->creative_quality_score = $var;

        return $this;
    }

    /**
     * Output only. The quality score of the landing page.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.QualityScoreBucketEnum.QualityScoreBucket post_click_quality_score = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getPostClickQualityScore()
    {
        return $this->post_click_quality_score;
    }

    /**
     * Output only. The quality score of the landing page.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.QualityScoreBucketEnum.QualityScoreBucket post_click_quality_score = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setPostClickQualityScore($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V4\Enums\QualityScoreBucketEnum\QualityScoreBucket::class);
        $this->post_click_quality_score = $var;

        return $this;
    }

    /**
     * Output only. The click-through rate compared to that of other advertisers.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.QualityScoreBucketEnum.QualityScoreBucket search_predicted_ctr = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getSearchPredictedCtr()
    {
        return $this->search_predicted_ctr;
    }

    /**
     * Output only. The click-through rate compared to that of other advertisers.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.QualityScoreBucketEnum.QualityScoreBucket search_predicted_ctr = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setSearchPredictedCtr($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V4\Enums\QualityScoreBucketEnum\QualityScoreBucket::class);
        $this->search_predicted_ctr = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(QualityInfo::class, \Google\Ads\GoogleAds\V4\Resources\AdGroupCriterion_QualityInfo::class);

