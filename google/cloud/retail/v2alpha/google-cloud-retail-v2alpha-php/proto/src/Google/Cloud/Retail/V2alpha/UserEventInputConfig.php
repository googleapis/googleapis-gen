<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/retail/v2alpha/import_config.proto

namespace Google\Cloud\Retail\V2alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The input config source for user events.
 *
 * Generated from protobuf message <code>google.cloud.retail.v2alpha.UserEventInputConfig</code>
 */
class UserEventInputConfig extends \Google\Protobuf\Internal\Message
{
    protected $source;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Retail\V2alpha\UserEventInlineSource $user_event_inline_source
     *           Required. The Inline source for the input content for UserEvents.
     *     @type \Google\Cloud\Retail\V2alpha\GcsSource $gcs_source
     *           Required. Google Cloud Storage location for the input content.
     *     @type \Google\Cloud\Retail\V2alpha\BigQuerySource $big_query_source
     *           Required. BigQuery input source.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Retail\V2Alpha\ImportConfig::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The Inline source for the input content for UserEvents.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2alpha.UserEventInlineSource user_event_inline_source = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Retail\V2alpha\UserEventInlineSource
     */
    public function getUserEventInlineSource()
    {
        return $this->readOneof(1);
    }

    public function hasUserEventInlineSource()
    {
        return $this->hasOneof(1);
    }

    /**
     * Required. The Inline source for the input content for UserEvents.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2alpha.UserEventInlineSource user_event_inline_source = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Retail\V2alpha\UserEventInlineSource $var
     * @return $this
     */
    public function setUserEventInlineSource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Retail\V2alpha\UserEventInlineSource::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Required. Google Cloud Storage location for the input content.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2alpha.GcsSource gcs_source = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Retail\V2alpha\GcsSource
     */
    public function getGcsSource()
    {
        return $this->readOneof(2);
    }

    public function hasGcsSource()
    {
        return $this->hasOneof(2);
    }

    /**
     * Required. Google Cloud Storage location for the input content.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2alpha.GcsSource gcs_source = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Retail\V2alpha\GcsSource $var
     * @return $this
     */
    public function setGcsSource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Retail\V2alpha\GcsSource::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Required. BigQuery input source.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2alpha.BigQuerySource big_query_source = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Retail\V2alpha\BigQuerySource
     */
    public function getBigQuerySource()
    {
        return $this->readOneof(3);
    }

    public function hasBigQuerySource()
    {
        return $this->hasOneof(3);
    }

    /**
     * Required. BigQuery input source.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2alpha.BigQuerySource big_query_source = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Retail\V2alpha\BigQuerySource $var
     * @return $this
     */
    public function setBigQuerySource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Retail\V2alpha\BigQuerySource::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getSource()
    {
        return $this->whichOneof("source");
    }

}

