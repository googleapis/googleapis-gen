<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/documentai/v1beta2/document.proto

namespace Google\Cloud\DocumentAI\V1beta2\Document\Style;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Font size with unit.
 *
 * Generated from protobuf message <code>google.cloud.documentai.v1beta2.Document.Style.FontSize</code>
 */
class FontSize extends \Google\Protobuf\Internal\Message
{
    /**
     * Font size for the text.
     *
     * Generated from protobuf field <code>float size = 1;</code>
     */
    protected $size = 0.0;
    /**
     * Unit for the font size. Follows CSS naming (in, px, pt, etc.).
     *
     * Generated from protobuf field <code>string unit = 2;</code>
     */
    protected $unit = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $size
     *           Font size for the text.
     *     @type string $unit
     *           Unit for the font size. Follows CSS naming (in, px, pt, etc.).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Documentai\V1Beta2\Document::initOnce();
        parent::__construct($data);
    }

    /**
     * Font size for the text.
     *
     * Generated from protobuf field <code>float size = 1;</code>
     * @return float
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Font size for the text.
     *
     * Generated from protobuf field <code>float size = 1;</code>
     * @param float $var
     * @return $this
     */
    public function setSize($var)
    {
        GPBUtil::checkFloat($var);
        $this->size = $var;

        return $this;
    }

    /**
     * Unit for the font size. Follows CSS naming (in, px, pt, etc.).
     *
     * Generated from protobuf field <code>string unit = 2;</code>
     * @return string
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * Unit for the font size. Follows CSS naming (in, px, pt, etc.).
     *
     * Generated from protobuf field <code>string unit = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setUnit($var)
    {
        GPBUtil::checkString($var, True);
        $this->unit = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(FontSize::class, \Google\Cloud\DocumentAI\V1beta2\Document_Style_FontSize::class);

