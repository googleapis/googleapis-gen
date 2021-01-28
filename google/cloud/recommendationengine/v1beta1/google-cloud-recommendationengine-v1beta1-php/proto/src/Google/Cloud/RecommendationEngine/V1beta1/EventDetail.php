<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/recommendationengine/v1beta1/user_event.proto

namespace Google\Cloud\RecommendationEngine\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * User event details shared by all recommendation types.
 *
 * Generated from protobuf message <code>google.cloud.recommendationengine.v1beta1.EventDetail</code>
 */
class EventDetail extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Complete url (window.location.href) of the user's current page.
     * When using the JavaScript pixel, this value is filled in automatically.
     * Maximum length 5KB.
     *
     * Generated from protobuf field <code>string uri = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $uri = '';
    /**
     * Optional. The referrer url of the current page. When using
     * the JavaScript pixel, this value is filled in automatically.
     *
     * Generated from protobuf field <code>string referrer_uri = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $referrer_uri = '';
    /**
     * Optional. A unique id of a web page view.
     * This should be kept the same for all user events triggered from the same
     * pageview. For example, an item detail page view could trigger multiple
     * events as the user is browsing the page.
     * The `pageViewId` property should be kept the same for all these events so
     * that they can be grouped together properly. This `pageViewId` will be
     * automatically generated if using the JavaScript pixel.
     *
     * Generated from protobuf field <code>string page_view_id = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_view_id = '';
    /**
     * Optional. A list of identifiers for the independent experiment groups
     * this user event belongs to. This is used to distinguish between user events
     * associated with different experiment setups (e.g. using Recommendation
     * Engine system, using different recommendation models).
     *
     * Generated from protobuf field <code>repeated string experiment_ids = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $experiment_ids;
    /**
     * Optional. Recommendation token included in the recommendation prediction
     * response.
     * This field enables accurate attribution of recommendation model
     * performance.
     * This token enables us to accurately attribute page view or purchase back to
     * the event and the particular predict response containing this
     * clicked/purchased item. If user clicks on product K in the recommendation
     * results, pass the `PredictResponse.recommendationToken` property as a url
     * parameter to product K's page. When recording events on product K's page,
     * log the PredictResponse.recommendation_token to this field.
     * Optional, but highly encouraged for user events that are the result of a
     * recommendation prediction query.
     *
     * Generated from protobuf field <code>string recommendation_token = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $recommendation_token = '';
    /**
     * Optional. Extra user event features to include in the recommendation
     * model.
     * For product recommendation, an example of extra user information is
     * traffic_channel, i.e. how user arrives at the site. Users can arrive
     * at the site by coming to the site directly, or coming through Google
     * search, and etc.
     *
     * Generated from protobuf field <code>.google.cloud.recommendationengine.v1beta1.FeatureMap event_attributes = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $event_attributes = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $uri
     *           Optional. Complete url (window.location.href) of the user's current page.
     *           When using the JavaScript pixel, this value is filled in automatically.
     *           Maximum length 5KB.
     *     @type string $referrer_uri
     *           Optional. The referrer url of the current page. When using
     *           the JavaScript pixel, this value is filled in automatically.
     *     @type string $page_view_id
     *           Optional. A unique id of a web page view.
     *           This should be kept the same for all user events triggered from the same
     *           pageview. For example, an item detail page view could trigger multiple
     *           events as the user is browsing the page.
     *           The `pageViewId` property should be kept the same for all these events so
     *           that they can be grouped together properly. This `pageViewId` will be
     *           automatically generated if using the JavaScript pixel.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $experiment_ids
     *           Optional. A list of identifiers for the independent experiment groups
     *           this user event belongs to. This is used to distinguish between user events
     *           associated with different experiment setups (e.g. using Recommendation
     *           Engine system, using different recommendation models).
     *     @type string $recommendation_token
     *           Optional. Recommendation token included in the recommendation prediction
     *           response.
     *           This field enables accurate attribution of recommendation model
     *           performance.
     *           This token enables us to accurately attribute page view or purchase back to
     *           the event and the particular predict response containing this
     *           clicked/purchased item. If user clicks on product K in the recommendation
     *           results, pass the `PredictResponse.recommendationToken` property as a url
     *           parameter to product K's page. When recording events on product K's page,
     *           log the PredictResponse.recommendation_token to this field.
     *           Optional, but highly encouraged for user events that are the result of a
     *           recommendation prediction query.
     *     @type \Google\Cloud\RecommendationEngine\V1beta1\FeatureMap $event_attributes
     *           Optional. Extra user event features to include in the recommendation
     *           model.
     *           For product recommendation, an example of extra user information is
     *           traffic_channel, i.e. how user arrives at the site. Users can arrive
     *           at the site by coming to the site directly, or coming through Google
     *           search, and etc.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Recommendationengine\V1Beta1\UserEvent::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Complete url (window.location.href) of the user's current page.
     * When using the JavaScript pixel, this value is filled in automatically.
     * Maximum length 5KB.
     *
     * Generated from protobuf field <code>string uri = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * Optional. Complete url (window.location.href) of the user's current page.
     * When using the JavaScript pixel, this value is filled in automatically.
     * Maximum length 5KB.
     *
     * Generated from protobuf field <code>string uri = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->uri = $var;

        return $this;
    }

    /**
     * Optional. The referrer url of the current page. When using
     * the JavaScript pixel, this value is filled in automatically.
     *
     * Generated from protobuf field <code>string referrer_uri = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getReferrerUri()
    {
        return $this->referrer_uri;
    }

    /**
     * Optional. The referrer url of the current page. When using
     * the JavaScript pixel, this value is filled in automatically.
     *
     * Generated from protobuf field <code>string referrer_uri = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setReferrerUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->referrer_uri = $var;

        return $this;
    }

    /**
     * Optional. A unique id of a web page view.
     * This should be kept the same for all user events triggered from the same
     * pageview. For example, an item detail page view could trigger multiple
     * events as the user is browsing the page.
     * The `pageViewId` property should be kept the same for all these events so
     * that they can be grouped together properly. This `pageViewId` will be
     * automatically generated if using the JavaScript pixel.
     *
     * Generated from protobuf field <code>string page_view_id = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPageViewId()
    {
        return $this->page_view_id;
    }

    /**
     * Optional. A unique id of a web page view.
     * This should be kept the same for all user events triggered from the same
     * pageview. For example, an item detail page view could trigger multiple
     * events as the user is browsing the page.
     * The `pageViewId` property should be kept the same for all these events so
     * that they can be grouped together properly. This `pageViewId` will be
     * automatically generated if using the JavaScript pixel.
     *
     * Generated from protobuf field <code>string page_view_id = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setPageViewId($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_view_id = $var;

        return $this;
    }

    /**
     * Optional. A list of identifiers for the independent experiment groups
     * this user event belongs to. This is used to distinguish between user events
     * associated with different experiment setups (e.g. using Recommendation
     * Engine system, using different recommendation models).
     *
     * Generated from protobuf field <code>repeated string experiment_ids = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getExperimentIds()
    {
        return $this->experiment_ids;
    }

    /**
     * Optional. A list of identifiers for the independent experiment groups
     * this user event belongs to. This is used to distinguish between user events
     * associated with different experiment setups (e.g. using Recommendation
     * Engine system, using different recommendation models).
     *
     * Generated from protobuf field <code>repeated string experiment_ids = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setExperimentIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->experiment_ids = $arr;

        return $this;
    }

    /**
     * Optional. Recommendation token included in the recommendation prediction
     * response.
     * This field enables accurate attribution of recommendation model
     * performance.
     * This token enables us to accurately attribute page view or purchase back to
     * the event and the particular predict response containing this
     * clicked/purchased item. If user clicks on product K in the recommendation
     * results, pass the `PredictResponse.recommendationToken` property as a url
     * parameter to product K's page. When recording events on product K's page,
     * log the PredictResponse.recommendation_token to this field.
     * Optional, but highly encouraged for user events that are the result of a
     * recommendation prediction query.
     *
     * Generated from protobuf field <code>string recommendation_token = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getRecommendationToken()
    {
        return $this->recommendation_token;
    }

    /**
     * Optional. Recommendation token included in the recommendation prediction
     * response.
     * This field enables accurate attribution of recommendation model
     * performance.
     * This token enables us to accurately attribute page view or purchase back to
     * the event and the particular predict response containing this
     * clicked/purchased item. If user clicks on product K in the recommendation
     * results, pass the `PredictResponse.recommendationToken` property as a url
     * parameter to product K's page. When recording events on product K's page,
     * log the PredictResponse.recommendation_token to this field.
     * Optional, but highly encouraged for user events that are the result of a
     * recommendation prediction query.
     *
     * Generated from protobuf field <code>string recommendation_token = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setRecommendationToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->recommendation_token = $var;

        return $this;
    }

    /**
     * Optional. Extra user event features to include in the recommendation
     * model.
     * For product recommendation, an example of extra user information is
     * traffic_channel, i.e. how user arrives at the site. Users can arrive
     * at the site by coming to the site directly, or coming through Google
     * search, and etc.
     *
     * Generated from protobuf field <code>.google.cloud.recommendationengine.v1beta1.FeatureMap event_attributes = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\RecommendationEngine\V1beta1\FeatureMap
     */
    public function getEventAttributes()
    {
        return isset($this->event_attributes) ? $this->event_attributes : null;
    }

    public function hasEventAttributes()
    {
        return isset($this->event_attributes);
    }

    public function clearEventAttributes()
    {
        unset($this->event_attributes);
    }

    /**
     * Optional. Extra user event features to include in the recommendation
     * model.
     * For product recommendation, an example of extra user information is
     * traffic_channel, i.e. how user arrives at the site. Users can arrive
     * at the site by coming to the site directly, or coming through Google
     * search, and etc.
     *
     * Generated from protobuf field <code>.google.cloud.recommendationengine.v1beta1.FeatureMap event_attributes = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\RecommendationEngine\V1beta1\FeatureMap $var
     * @return $this
     */
    public function setEventAttributes($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\RecommendationEngine\V1beta1\FeatureMap::class);
        $this->event_attributes = $var;

        return $this;
    }

}

