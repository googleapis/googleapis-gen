<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/resources/feed.proto

namespace Google\Ads\GoogleAds\V4\Resources\Feed;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Data used to configure an affiliate location feed populated with the
 * specified chains.
 *
 * Generated from protobuf message <code>google.ads.googleads.v4.resources.Feed.AffiliateLocationFeedData</code>
 */
class AffiliateLocationFeedData extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of chains that the affiliate location feed will sync the
     * locations from.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Int64Value chain_ids = 1;</code>
     */
    private $chain_ids;
    /**
     * The relationship the chains have with the advertiser.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.AffiliateLocationFeedRelationshipTypeEnum.AffiliateLocationFeedRelationshipType relationship_type = 2;</code>
     */
    protected $relationship_type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Int64Value[]|\Google\Protobuf\Internal\RepeatedField $chain_ids
     *           The list of chains that the affiliate location feed will sync the
     *           locations from.
     *     @type int $relationship_type
     *           The relationship the chains have with the advertiser.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V4\Resources\Feed::initOnce();
        parent::__construct($data);
    }

    /**
     * The list of chains that the affiliate location feed will sync the
     * locations from.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Int64Value chain_ids = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getChainIds()
    {
        return $this->chain_ids;
    }

    /**
     * The list of chains that the affiliate location feed will sync the
     * locations from.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Int64Value chain_ids = 1;</code>
     * @param \Google\Protobuf\Int64Value[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setChainIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\Int64Value::class);
        $this->chain_ids = $arr;

        return $this;
    }

    /**
     * The relationship the chains have with the advertiser.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.AffiliateLocationFeedRelationshipTypeEnum.AffiliateLocationFeedRelationshipType relationship_type = 2;</code>
     * @return int
     */
    public function getRelationshipType()
    {
        return $this->relationship_type;
    }

    /**
     * The relationship the chains have with the advertiser.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.AffiliateLocationFeedRelationshipTypeEnum.AffiliateLocationFeedRelationshipType relationship_type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setRelationshipType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V4\Enums\AffiliateLocationFeedRelationshipTypeEnum\AffiliateLocationFeedRelationshipType::class);
        $this->relationship_type = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AffiliateLocationFeedData::class, \Google\Ads\GoogleAds\V4\Resources\Feed_AffiliateLocationFeedData::class);

