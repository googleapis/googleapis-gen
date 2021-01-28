<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/videointelligence/v1p1beta1/video_intelligence.proto

namespace Google\Cloud\VideoIntelligence\V1p1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Video segment.
 *
 * Generated from protobuf message <code>google.cloud.videointelligence.v1p1beta1.VideoSegment</code>
 */
class VideoSegment extends \Google\Protobuf\Internal\Message
{
    /**
     * Time-offset, relative to the beginning of the video,
     * corresponding to the start of the segment (inclusive).
     *
     * Generated from protobuf field <code>.google.protobuf.Duration start_time_offset = 1;</code>
     */
    protected $start_time_offset = null;
    /**
     * Time-offset, relative to the beginning of the video,
     * corresponding to the end of the segment (inclusive).
     *
     * Generated from protobuf field <code>.google.protobuf.Duration end_time_offset = 2;</code>
     */
    protected $end_time_offset = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Duration $start_time_offset
     *           Time-offset, relative to the beginning of the video,
     *           corresponding to the start of the segment (inclusive).
     *     @type \Google\Protobuf\Duration $end_time_offset
     *           Time-offset, relative to the beginning of the video,
     *           corresponding to the end of the segment (inclusive).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Videointelligence\V1P1Beta1\VideoIntelligence::initOnce();
        parent::__construct($data);
    }

    /**
     * Time-offset, relative to the beginning of the video,
     * corresponding to the start of the segment (inclusive).
     *
     * Generated from protobuf field <code>.google.protobuf.Duration start_time_offset = 1;</code>
     * @return \Google\Protobuf\Duration
     */
    public function getStartTimeOffset()
    {
        return isset($this->start_time_offset) ? $this->start_time_offset : null;
    }

    public function hasStartTimeOffset()
    {
        return isset($this->start_time_offset);
    }

    public function clearStartTimeOffset()
    {
        unset($this->start_time_offset);
    }

    /**
     * Time-offset, relative to the beginning of the video,
     * corresponding to the start of the segment (inclusive).
     *
     * Generated from protobuf field <code>.google.protobuf.Duration start_time_offset = 1;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setStartTimeOffset($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->start_time_offset = $var;

        return $this;
    }

    /**
     * Time-offset, relative to the beginning of the video,
     * corresponding to the end of the segment (inclusive).
     *
     * Generated from protobuf field <code>.google.protobuf.Duration end_time_offset = 2;</code>
     * @return \Google\Protobuf\Duration
     */
    public function getEndTimeOffset()
    {
        return isset($this->end_time_offset) ? $this->end_time_offset : null;
    }

    public function hasEndTimeOffset()
    {
        return isset($this->end_time_offset);
    }

    public function clearEndTimeOffset()
    {
        unset($this->end_time_offset);
    }

    /**
     * Time-offset, relative to the beginning of the video,
     * corresponding to the end of the segment (inclusive).
     *
     * Generated from protobuf field <code>.google.protobuf.Duration end_time_offset = 2;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setEndTimeOffset($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->end_time_offset = $var;

        return $this;
    }

}

