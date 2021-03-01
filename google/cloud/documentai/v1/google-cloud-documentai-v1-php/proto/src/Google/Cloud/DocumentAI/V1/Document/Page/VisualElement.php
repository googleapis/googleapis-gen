<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/documentai/v1/document.proto

namespace Google\Cloud\DocumentAI\V1\Document\Page;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Detected non-text visual elements e.g. checkbox, signature etc. on the
 * page.
 *
 * Generated from protobuf message <code>google.cloud.documentai.v1.Document.Page.VisualElement</code>
 */
class VisualElement extends \Google\Protobuf\Internal\Message
{
    /**
     * [Layout][google.cloud.documentai.v1.Document.Page.Layout] for [VisualElement][google.cloud.documentai.v1.Document.Page.VisualElement].
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.Document.Page.Layout layout = 1;</code>
     */
    protected $layout = null;
    /**
     * Type of the [VisualElement][google.cloud.documentai.v1.Document.Page.VisualElement].
     *
     * Generated from protobuf field <code>string type = 2;</code>
     */
    protected $type = '';
    /**
     * A list of detected languages together with confidence.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1.Document.Page.DetectedLanguage detected_languages = 3;</code>
     */
    private $detected_languages;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\DocumentAI\V1\Document\Page\Layout $layout
     *           [Layout][google.cloud.documentai.v1.Document.Page.Layout] for [VisualElement][google.cloud.documentai.v1.Document.Page.VisualElement].
     *     @type string $type
     *           Type of the [VisualElement][google.cloud.documentai.v1.Document.Page.VisualElement].
     *     @type \Google\Cloud\DocumentAI\V1\Document\Page\DetectedLanguage[]|\Google\Protobuf\Internal\RepeatedField $detected_languages
     *           A list of detected languages together with confidence.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Documentai\V1\Document::initOnce();
        parent::__construct($data);
    }

    /**
     * [Layout][google.cloud.documentai.v1.Document.Page.Layout] for [VisualElement][google.cloud.documentai.v1.Document.Page.VisualElement].
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.Document.Page.Layout layout = 1;</code>
     * @return \Google\Cloud\DocumentAI\V1\Document\Page\Layout|null
     */
    public function getLayout()
    {
        return isset($this->layout) ? $this->layout : null;
    }

    public function hasLayout()
    {
        return isset($this->layout);
    }

    public function clearLayout()
    {
        unset($this->layout);
    }

    /**
     * [Layout][google.cloud.documentai.v1.Document.Page.Layout] for [VisualElement][google.cloud.documentai.v1.Document.Page.VisualElement].
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.Document.Page.Layout layout = 1;</code>
     * @param \Google\Cloud\DocumentAI\V1\Document\Page\Layout $var
     * @return $this
     */
    public function setLayout($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DocumentAI\V1\Document\Page\Layout::class);
        $this->layout = $var;

        return $this;
    }

    /**
     * Type of the [VisualElement][google.cloud.documentai.v1.Document.Page.VisualElement].
     *
     * Generated from protobuf field <code>string type = 2;</code>
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Type of the [VisualElement][google.cloud.documentai.v1.Document.Page.VisualElement].
     *
     * Generated from protobuf field <code>string type = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->type = $var;

        return $this;
    }

    /**
     * A list of detected languages together with confidence.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1.Document.Page.DetectedLanguage detected_languages = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDetectedLanguages()
    {
        return $this->detected_languages;
    }

    /**
     * A list of detected languages together with confidence.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1.Document.Page.DetectedLanguage detected_languages = 3;</code>
     * @param \Google\Cloud\DocumentAI\V1\Document\Page\DetectedLanguage[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDetectedLanguages($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DocumentAI\V1\Document\Page\DetectedLanguage::class);
        $this->detected_languages = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(VisualElement::class, \Google\Cloud\DocumentAI\V1\Document_Page_VisualElement::class);

