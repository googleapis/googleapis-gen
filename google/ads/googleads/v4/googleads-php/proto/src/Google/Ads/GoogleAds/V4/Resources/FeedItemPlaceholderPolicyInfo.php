<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/resources/feed_item.proto

namespace Google\Ads\GoogleAds\V4\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Policy, validation, and quality approval info for a feed item for the
 * specified placeholder type.
 *
 * Generated from protobuf message <code>google.ads.googleads.v4.resources.FeedItemPlaceholderPolicyInfo</code>
 */
class FeedItemPlaceholderPolicyInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The placeholder type.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.PlaceholderTypeEnum.PlaceholderType placeholder_type_enum = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $placeholder_type_enum = 0;
    /**
     * Output only. The FeedMapping that contains the placeholder type.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue feed_mapping_resource_name = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $feed_mapping_resource_name = null;
    /**
     * Output only. Where the placeholder type is in the review process.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.PolicyReviewStatusEnum.PolicyReviewStatus review_status = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $review_status = 0;
    /**
     * Output only. The overall approval status of the placeholder type, calculated based on
     * the status of its individual policy topic entries.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.PolicyApprovalStatusEnum.PolicyApprovalStatus approval_status = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $approval_status = 0;
    /**
     * Output only. The list of policy findings for the placeholder type.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v4.common.PolicyTopicEntry policy_topic_entries = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $policy_topic_entries;
    /**
     * Output only. The validation status of the palceholder type.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.FeedItemValidationStatusEnum.FeedItemValidationStatus validation_status = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $validation_status = 0;
    /**
     * Output only. List of placeholder type validation errors.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v4.resources.FeedItemValidationError validation_errors = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $validation_errors;
    /**
     * Output only. Placeholder type quality evaluation approval status.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.FeedItemQualityApprovalStatusEnum.FeedItemQualityApprovalStatus quality_approval_status = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $quality_approval_status = 0;
    /**
     * Output only. List of placeholder type quality evaluation disapproval reasons.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v4.enums.FeedItemQualityDisapprovalReasonEnum.FeedItemQualityDisapprovalReason quality_disapproval_reasons = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $quality_disapproval_reasons;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $placeholder_type_enum
     *           Output only. The placeholder type.
     *     @type \Google\Protobuf\StringValue $feed_mapping_resource_name
     *           Output only. The FeedMapping that contains the placeholder type.
     *     @type int $review_status
     *           Output only. Where the placeholder type is in the review process.
     *     @type int $approval_status
     *           Output only. The overall approval status of the placeholder type, calculated based on
     *           the status of its individual policy topic entries.
     *     @type \Google\Ads\GoogleAds\V4\Common\PolicyTopicEntry[]|\Google\Protobuf\Internal\RepeatedField $policy_topic_entries
     *           Output only. The list of policy findings for the placeholder type.
     *     @type int $validation_status
     *           Output only. The validation status of the palceholder type.
     *     @type \Google\Ads\GoogleAds\V4\Resources\FeedItemValidationError[]|\Google\Protobuf\Internal\RepeatedField $validation_errors
     *           Output only. List of placeholder type validation errors.
     *     @type int $quality_approval_status
     *           Output only. Placeholder type quality evaluation approval status.
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $quality_disapproval_reasons
     *           Output only. List of placeholder type quality evaluation disapproval reasons.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V4\Resources\FeedItem::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The placeholder type.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.PlaceholderTypeEnum.PlaceholderType placeholder_type_enum = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getPlaceholderTypeEnum()
    {
        return $this->placeholder_type_enum;
    }

    /**
     * Output only. The placeholder type.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.PlaceholderTypeEnum.PlaceholderType placeholder_type_enum = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setPlaceholderTypeEnum($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V4\Enums\PlaceholderTypeEnum\PlaceholderType::class);
        $this->placeholder_type_enum = $var;

        return $this;
    }

    /**
     * Output only. The FeedMapping that contains the placeholder type.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue feed_mapping_resource_name = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getFeedMappingResourceName()
    {
        return isset($this->feed_mapping_resource_name) ? $this->feed_mapping_resource_name : null;
    }

    public function hasFeedMappingResourceName()
    {
        return isset($this->feed_mapping_resource_name);
    }

    public function clearFeedMappingResourceName()
    {
        unset($this->feed_mapping_resource_name);
    }

    /**
     * Returns the unboxed value from <code>getFeedMappingResourceName()</code>

     * Output only. The FeedMapping that contains the placeholder type.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue feed_mapping_resource_name = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string|null
     */
    public function getFeedMappingResourceNameUnwrapped()
    {
        return $this->readWrapperValue("feed_mapping_resource_name");
    }

    /**
     * Output only. The FeedMapping that contains the placeholder type.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue feed_mapping_resource_name = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setFeedMappingResourceName($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->feed_mapping_resource_name = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Output only. The FeedMapping that contains the placeholder type.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue feed_mapping_resource_name = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string|null $var
     * @return $this
     */
    public function setFeedMappingResourceNameUnwrapped($var)
    {
        $this->writeWrapperValue("feed_mapping_resource_name", $var);
        return $this;}

    /**
     * Output only. Where the placeholder type is in the review process.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.PolicyReviewStatusEnum.PolicyReviewStatus review_status = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getReviewStatus()
    {
        return $this->review_status;
    }

    /**
     * Output only. Where the placeholder type is in the review process.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.PolicyReviewStatusEnum.PolicyReviewStatus review_status = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setReviewStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V4\Enums\PolicyReviewStatusEnum\PolicyReviewStatus::class);
        $this->review_status = $var;

        return $this;
    }

    /**
     * Output only. The overall approval status of the placeholder type, calculated based on
     * the status of its individual policy topic entries.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.PolicyApprovalStatusEnum.PolicyApprovalStatus approval_status = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getApprovalStatus()
    {
        return $this->approval_status;
    }

    /**
     * Output only. The overall approval status of the placeholder type, calculated based on
     * the status of its individual policy topic entries.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.PolicyApprovalStatusEnum.PolicyApprovalStatus approval_status = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setApprovalStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V4\Enums\PolicyApprovalStatusEnum\PolicyApprovalStatus::class);
        $this->approval_status = $var;

        return $this;
    }

    /**
     * Output only. The list of policy findings for the placeholder type.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v4.common.PolicyTopicEntry policy_topic_entries = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPolicyTopicEntries()
    {
        return $this->policy_topic_entries;
    }

    /**
     * Output only. The list of policy findings for the placeholder type.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v4.common.PolicyTopicEntry policy_topic_entries = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V4\Common\PolicyTopicEntry[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPolicyTopicEntries($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V4\Common\PolicyTopicEntry::class);
        $this->policy_topic_entries = $arr;

        return $this;
    }

    /**
     * Output only. The validation status of the palceholder type.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.FeedItemValidationStatusEnum.FeedItemValidationStatus validation_status = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getValidationStatus()
    {
        return $this->validation_status;
    }

    /**
     * Output only. The validation status of the palceholder type.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.FeedItemValidationStatusEnum.FeedItemValidationStatus validation_status = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setValidationStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V4\Enums\FeedItemValidationStatusEnum\FeedItemValidationStatus::class);
        $this->validation_status = $var;

        return $this;
    }

    /**
     * Output only. List of placeholder type validation errors.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v4.resources.FeedItemValidationError validation_errors = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getValidationErrors()
    {
        return $this->validation_errors;
    }

    /**
     * Output only. List of placeholder type validation errors.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v4.resources.FeedItemValidationError validation_errors = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V4\Resources\FeedItemValidationError[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setValidationErrors($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V4\Resources\FeedItemValidationError::class);
        $this->validation_errors = $arr;

        return $this;
    }

    /**
     * Output only. Placeholder type quality evaluation approval status.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.FeedItemQualityApprovalStatusEnum.FeedItemQualityApprovalStatus quality_approval_status = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getQualityApprovalStatus()
    {
        return $this->quality_approval_status;
    }

    /**
     * Output only. Placeholder type quality evaluation approval status.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.FeedItemQualityApprovalStatusEnum.FeedItemQualityApprovalStatus quality_approval_status = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setQualityApprovalStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V4\Enums\FeedItemQualityApprovalStatusEnum\FeedItemQualityApprovalStatus::class);
        $this->quality_approval_status = $var;

        return $this;
    }

    /**
     * Output only. List of placeholder type quality evaluation disapproval reasons.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v4.enums.FeedItemQualityDisapprovalReasonEnum.FeedItemQualityDisapprovalReason quality_disapproval_reasons = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getQualityDisapprovalReasons()
    {
        return $this->quality_disapproval_reasons;
    }

    /**
     * Output only. List of placeholder type quality evaluation disapproval reasons.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v4.enums.FeedItemQualityDisapprovalReasonEnum.FeedItemQualityDisapprovalReason quality_disapproval_reasons = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setQualityDisapprovalReasons($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Ads\GoogleAds\V4\Enums\FeedItemQualityDisapprovalReasonEnum\FeedItemQualityDisapprovalReason::class);
        $this->quality_disapproval_reasons = $arr;

        return $this;
    }

}

