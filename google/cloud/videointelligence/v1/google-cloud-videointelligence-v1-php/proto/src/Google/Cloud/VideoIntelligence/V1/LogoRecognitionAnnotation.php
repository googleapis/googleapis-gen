<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/videointelligence/v1/video_intelligence.proto

namespace Google\Cloud\VideoIntelligence\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Annotation corresponding to one detected, tracked and recognized logo class.
 *
 * Generated from protobuf message <code>google.cloud.videointelligence.v1.LogoRecognitionAnnotation</code>
 */
class LogoRecognitionAnnotation extends \Google\Protobuf\Internal\Message
{
    /**
     * Entity category information to specify the logo class that all the logo
     * tracks within this LogoRecognitionAnnotation are recognized as.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1.Entity entity = 1;</code>
     */
    protected $entity = null;
    /**
     * All logo tracks where the recognized logo appears. Each track corresponds
     * to one logo instance appearing in consecutive frames.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1.Track tracks = 2;</code>
     */
    private $tracks;
    /**
     * All video segments where the recognized logo appears. There might be
     * multiple instances of the same logo class appearing in one VideoSegment.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1.VideoSegment segments = 3;</code>
     */
    private $segments;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\VideoIntelligence\V1\Entity $entity
     *           Entity category information to specify the logo class that all the logo
     *           tracks within this LogoRecognitionAnnotation are recognized as.
     *     @type \Google\Cloud\VideoIntelligence\V1\Track[]|\Google\Protobuf\Internal\RepeatedField $tracks
     *           All logo tracks where the recognized logo appears. Each track corresponds
     *           to one logo instance appearing in consecutive frames.
     *     @type \Google\Cloud\VideoIntelligence\V1\VideoSegment[]|\Google\Protobuf\Internal\RepeatedField $segments
     *           All video segments where the recognized logo appears. There might be
     *           multiple instances of the same logo class appearing in one VideoSegment.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Videointelligence\V1\VideoIntelligence::initOnce();
        parent::__construct($data);
    }

    /**
     * Entity category information to specify the logo class that all the logo
     * tracks within this LogoRecognitionAnnotation are recognized as.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1.Entity entity = 1;</code>
     * @return \Google\Cloud\VideoIntelligence\V1\Entity
     */
    public function getEntity()
    {
        return isset($this->entity) ? $this->entity : null;
    }

    public function hasEntity()
    {
        return isset($this->entity);
    }

    public function clearEntity()
    {
        unset($this->entity);
    }

    /**
     * Entity category information to specify the logo class that all the logo
     * tracks within this LogoRecognitionAnnotation are recognized as.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1.Entity entity = 1;</code>
     * @param \Google\Cloud\VideoIntelligence\V1\Entity $var
     * @return $this
     */
    public function setEntity($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\VideoIntelligence\V1\Entity::class);
        $this->entity = $var;

        return $this;
    }

    /**
     * All logo tracks where the recognized logo appears. Each track corresponds
     * to one logo instance appearing in consecutive frames.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1.Track tracks = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTracks()
    {
        return $this->tracks;
    }

    /**
     * All logo tracks where the recognized logo appears. Each track corresponds
     * to one logo instance appearing in consecutive frames.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1.Track tracks = 2;</code>
     * @param \Google\Cloud\VideoIntelligence\V1\Track[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTracks($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\VideoIntelligence\V1\Track::class);
        $this->tracks = $arr;

        return $this;
    }

    /**
     * All video segments where the recognized logo appears. There might be
     * multiple instances of the same logo class appearing in one VideoSegment.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1.VideoSegment segments = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSegments()
    {
        return $this->segments;
    }

    /**
     * All video segments where the recognized logo appears. There might be
     * multiple instances of the same logo class appearing in one VideoSegment.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1.VideoSegment segments = 3;</code>
     * @param \Google\Cloud\VideoIntelligence\V1\VideoSegment[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSegments($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\VideoIntelligence\V1\VideoSegment::class);
        $this->segments = $arr;

        return $this;
    }

}

