<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/dashboard/v1/text.proto

namespace Google\Monitoring\Dashboard\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A widget that displays textual content.
 *
 * Generated from protobuf message <code>google.monitoring.dashboard.v1.Text</code>
 */
class Text extends \Google\Protobuf\Internal\Message
{
    /**
     * The text content to be displayed.
     *
     * Generated from protobuf field <code>string content = 1;</code>
     */
    protected $content = '';
    /**
     * How the text content is formatted.
     *
     * Generated from protobuf field <code>.google.monitoring.dashboard.v1.Text.Format format = 2;</code>
     */
    protected $format = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $content
     *           The text content to be displayed.
     *     @type int $format
     *           How the text content is formatted.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Monitoring\Dashboard\V1\Text::initOnce();
        parent::__construct($data);
    }

    /**
     * The text content to be displayed.
     *
     * Generated from protobuf field <code>string content = 1;</code>
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * The text content to be displayed.
     *
     * Generated from protobuf field <code>string content = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setContent($var)
    {
        GPBUtil::checkString($var, True);
        $this->content = $var;

        return $this;
    }

    /**
     * How the text content is formatted.
     *
     * Generated from protobuf field <code>.google.monitoring.dashboard.v1.Text.Format format = 2;</code>
     * @return int
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * How the text content is formatted.
     *
     * Generated from protobuf field <code>.google.monitoring.dashboard.v1.Text.Format format = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setFormat($var)
    {
        GPBUtil::checkEnum($var, \Google\Monitoring\Dashboard\V1\Text\Format::class);
        $this->format = $var;

        return $this;
    }

}

