<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/documentai/v1/document.proto

namespace Google\Cloud\DocumentAI\V1\Document\Page;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A detected token.
 *
 * Generated from protobuf message <code>google.cloud.documentai.v1.Document.Page.Token</code>
 */
class Token extends \Google\Protobuf\Internal\Message
{
    /**
     * [Layout][google.cloud.documentai.v1.Document.Page.Layout] for [Token][google.cloud.documentai.v1.Document.Page.Token].
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.Document.Page.Layout layout = 1;</code>
     */
    protected $layout = null;
    /**
     * Detected break at the end of a [Token][google.cloud.documentai.v1.Document.Page.Token].
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.Document.Page.Token.DetectedBreak detected_break = 2;</code>
     */
    protected $detected_break = null;
    /**
     * A list of detected languages together with confidence.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1.Document.Page.DetectedLanguage detected_languages = 3;</code>
     */
    private $detected_languages;
    /**
     * The  history of this annotation.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.Document.Provenance provenance = 4;</code>
     */
    protected $provenance = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\DocumentAI\V1\Document\Page\Layout $layout
     *           [Layout][google.cloud.documentai.v1.Document.Page.Layout] for [Token][google.cloud.documentai.v1.Document.Page.Token].
     *     @type \Google\Cloud\DocumentAI\V1\Document\Page\Token\DetectedBreak $detected_break
     *           Detected break at the end of a [Token][google.cloud.documentai.v1.Document.Page.Token].
     *     @type \Google\Cloud\DocumentAI\V1\Document\Page\DetectedLanguage[]|\Google\Protobuf\Internal\RepeatedField $detected_languages
     *           A list of detected languages together with confidence.
     *     @type \Google\Cloud\DocumentAI\V1\Document\Provenance $provenance
     *           The  history of this annotation.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Documentai\V1\Document::initOnce();
        parent::__construct($data);
    }

    /**
     * [Layout][google.cloud.documentai.v1.Document.Page.Layout] for [Token][google.cloud.documentai.v1.Document.Page.Token].
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
     * [Layout][google.cloud.documentai.v1.Document.Page.Layout] for [Token][google.cloud.documentai.v1.Document.Page.Token].
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
     * Detected break at the end of a [Token][google.cloud.documentai.v1.Document.Page.Token].
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.Document.Page.Token.DetectedBreak detected_break = 2;</code>
     * @return \Google\Cloud\DocumentAI\V1\Document\Page\Token\DetectedBreak|null
     */
    public function getDetectedBreak()
    {
        return isset($this->detected_break) ? $this->detected_break : null;
    }

    public function hasDetectedBreak()
    {
        return isset($this->detected_break);
    }

    public function clearDetectedBreak()
    {
        unset($this->detected_break);
    }

    /**
     * Detected break at the end of a [Token][google.cloud.documentai.v1.Document.Page.Token].
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.Document.Page.Token.DetectedBreak detected_break = 2;</code>
     * @param \Google\Cloud\DocumentAI\V1\Document\Page\Token\DetectedBreak $var
     * @return $this
     */
    public function setDetectedBreak($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DocumentAI\V1\Document\Page\Token\DetectedBreak::class);
        $this->detected_break = $var;

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

    /**
     * The  history of this annotation.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.Document.Provenance provenance = 4;</code>
     * @return \Google\Cloud\DocumentAI\V1\Document\Provenance|null
     */
    public function getProvenance()
    {
        return isset($this->provenance) ? $this->provenance : null;
    }

    public function hasProvenance()
    {
        return isset($this->provenance);
    }

    public function clearProvenance()
    {
        unset($this->provenance);
    }

    /**
     * The  history of this annotation.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.Document.Provenance provenance = 4;</code>
     * @param \Google\Cloud\DocumentAI\V1\Document\Provenance $var
     * @return $this
     */
    public function setProvenance($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DocumentAI\V1\Document\Provenance::class);
        $this->provenance = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Token::class, \Google\Cloud\DocumentAI\V1\Document_Page_Token::class);

