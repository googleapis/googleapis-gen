<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1p2beta1/web_detection.proto

namespace Google\Cloud\Vision\V1p2beta1\WebDetection;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metadata for web pages.
 *
 * Generated from protobuf message <code>google.cloud.vision.v1p2beta1.WebDetection.WebPage</code>
 */
class WebPage extends \Google\Protobuf\Internal\Message
{
    /**
     * The result web page URL.
     *
     * Generated from protobuf field <code>string url = 1;</code>
     */
    protected $url = '';
    /**
     * (Deprecated) Overall relevancy score for the web page.
     *
     * Generated from protobuf field <code>float score = 2;</code>
     */
    protected $score = 0.0;
    /**
     * Title for the web page, may contain HTML markups.
     *
     * Generated from protobuf field <code>string page_title = 3;</code>
     */
    protected $page_title = '';
    /**
     * Fully matching images on the page.
     * Can include resized copies of the query image.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1p2beta1.WebDetection.WebImage full_matching_images = 4;</code>
     */
    private $full_matching_images;
    /**
     * Partial matching images on the page.
     * Those images are similar enough to share some key-point features. For
     * example an original image will likely have partial matching for its
     * crops.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1p2beta1.WebDetection.WebImage partial_matching_images = 5;</code>
     */
    private $partial_matching_images;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $url
     *           The result web page URL.
     *     @type float $score
     *           (Deprecated) Overall relevancy score for the web page.
     *     @type string $page_title
     *           Title for the web page, may contain HTML markups.
     *     @type \Google\Cloud\Vision\V1p2beta1\WebDetection\WebImage[]|\Google\Protobuf\Internal\RepeatedField $full_matching_images
     *           Fully matching images on the page.
     *           Can include resized copies of the query image.
     *     @type \Google\Cloud\Vision\V1p2beta1\WebDetection\WebImage[]|\Google\Protobuf\Internal\RepeatedField $partial_matching_images
     *           Partial matching images on the page.
     *           Those images are similar enough to share some key-point features. For
     *           example an original image will likely have partial matching for its
     *           crops.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Vision\V1P2Beta1\WebDetection::initOnce();
        parent::__construct($data);
    }

    /**
     * The result web page URL.
     *
     * Generated from protobuf field <code>string url = 1;</code>
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * The result web page URL.
     *
     * Generated from protobuf field <code>string url = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->url = $var;

        return $this;
    }

    /**
     * (Deprecated) Overall relevancy score for the web page.
     *
     * Generated from protobuf field <code>float score = 2;</code>
     * @return float
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * (Deprecated) Overall relevancy score for the web page.
     *
     * Generated from protobuf field <code>float score = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setScore($var)
    {
        GPBUtil::checkFloat($var);
        $this->score = $var;

        return $this;
    }

    /**
     * Title for the web page, may contain HTML markups.
     *
     * Generated from protobuf field <code>string page_title = 3;</code>
     * @return string
     */
    public function getPageTitle()
    {
        return $this->page_title;
    }

    /**
     * Title for the web page, may contain HTML markups.
     *
     * Generated from protobuf field <code>string page_title = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPageTitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_title = $var;

        return $this;
    }

    /**
     * Fully matching images on the page.
     * Can include resized copies of the query image.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1p2beta1.WebDetection.WebImage full_matching_images = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFullMatchingImages()
    {
        return $this->full_matching_images;
    }

    /**
     * Fully matching images on the page.
     * Can include resized copies of the query image.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1p2beta1.WebDetection.WebImage full_matching_images = 4;</code>
     * @param \Google\Cloud\Vision\V1p2beta1\WebDetection\WebImage[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFullMatchingImages($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Vision\V1p2beta1\WebDetection\WebImage::class);
        $this->full_matching_images = $arr;

        return $this;
    }

    /**
     * Partial matching images on the page.
     * Those images are similar enough to share some key-point features. For
     * example an original image will likely have partial matching for its
     * crops.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1p2beta1.WebDetection.WebImage partial_matching_images = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPartialMatchingImages()
    {
        return $this->partial_matching_images;
    }

    /**
     * Partial matching images on the page.
     * Those images are similar enough to share some key-point features. For
     * example an original image will likely have partial matching for its
     * crops.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1p2beta1.WebDetection.WebImage partial_matching_images = 5;</code>
     * @param \Google\Cloud\Vision\V1p2beta1\WebDetection\WebImage[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPartialMatchingImages($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Vision\V1p2beta1\WebDetection\WebImage::class);
        $this->partial_matching_images = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(WebPage::class, \Google\Cloud\Vision\V1p2beta1\WebDetection_WebPage::class);

