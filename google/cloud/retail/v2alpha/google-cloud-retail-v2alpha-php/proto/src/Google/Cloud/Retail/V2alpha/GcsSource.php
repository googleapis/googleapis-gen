<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/retail/v2alpha/import_config.proto

namespace Google\Cloud\Retail\V2alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Google Cloud Storage location for input content.
 * format.
 *
 * Generated from protobuf message <code>google.cloud.retail.v2alpha.GcsSource</code>
 */
class GcsSource extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Google Cloud Storage URIs to input files. URI can be up to
     * 2000 characters long. URIs can match the full object path (for example,
     * gs://bucket/directory/object.json) or a pattern matching one or more
     * files, such as gs://bucket/directory/&#42;.json. A request can
     * contain at most 100 files, and each file can be up to 2 GB. See
     * [Importing product information](/recommendations-ai/docs/upload-catalog)
     * for the expected file format and setup instructions.
     *
     * Generated from protobuf field <code>repeated string input_uris = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $input_uris;
    /**
     * The schema to use when parsing the data from the source.
     * Supported values for product imports:
     * * `product` (default): One JSON
     * [Product][google.cloud.retail.v2alpha.Product] per line. Each product must
     *   have a valid [Product.id][google.cloud.retail.v2alpha.Product.id].
     * * `product_merchant_center`: See [Importing catalog data from Merchant
     *   Center](/retail/recommendations-ai/docs/upload-catalog#mc).
     * Supported values for user events imports:
     * * `user_event` (default): One JSON
     * [UserEvent][google.cloud.retail.v2alpha.UserEvent] per line.
     * * `user_event_ga360`: Using
     *   https://support.google.com/analytics/answer/3437719?hl=en.
     *
     * Generated from protobuf field <code>string data_schema = 2;</code>
     */
    protected $data_schema = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $input_uris
     *           Required. Google Cloud Storage URIs to input files. URI can be up to
     *           2000 characters long. URIs can match the full object path (for example,
     *           gs://bucket/directory/object.json) or a pattern matching one or more
     *           files, such as gs://bucket/directory/&#42;.json. A request can
     *           contain at most 100 files, and each file can be up to 2 GB. See
     *           [Importing product information](/recommendations-ai/docs/upload-catalog)
     *           for the expected file format and setup instructions.
     *     @type string $data_schema
     *           The schema to use when parsing the data from the source.
     *           Supported values for product imports:
     *           * `product` (default): One JSON
     *           [Product][google.cloud.retail.v2alpha.Product] per line. Each product must
     *             have a valid [Product.id][google.cloud.retail.v2alpha.Product.id].
     *           * `product_merchant_center`: See [Importing catalog data from Merchant
     *             Center](/retail/recommendations-ai/docs/upload-catalog#mc).
     *           Supported values for user events imports:
     *           * `user_event` (default): One JSON
     *           [UserEvent][google.cloud.retail.v2alpha.UserEvent] per line.
     *           * `user_event_ga360`: Using
     *             https://support.google.com/analytics/answer/3437719?hl=en.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Retail\V2Alpha\ImportConfig::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Google Cloud Storage URIs to input files. URI can be up to
     * 2000 characters long. URIs can match the full object path (for example,
     * gs://bucket/directory/object.json) or a pattern matching one or more
     * files, such as gs://bucket/directory/&#42;.json. A request can
     * contain at most 100 files, and each file can be up to 2 GB. See
     * [Importing product information](/recommendations-ai/docs/upload-catalog)
     * for the expected file format and setup instructions.
     *
     * Generated from protobuf field <code>repeated string input_uris = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInputUris()
    {
        return $this->input_uris;
    }

    /**
     * Required. Google Cloud Storage URIs to input files. URI can be up to
     * 2000 characters long. URIs can match the full object path (for example,
     * gs://bucket/directory/object.json) or a pattern matching one or more
     * files, such as gs://bucket/directory/&#42;.json. A request can
     * contain at most 100 files, and each file can be up to 2 GB. See
     * [Importing product information](/recommendations-ai/docs/upload-catalog)
     * for the expected file format and setup instructions.
     *
     * Generated from protobuf field <code>repeated string input_uris = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInputUris($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->input_uris = $arr;

        return $this;
    }

    /**
     * The schema to use when parsing the data from the source.
     * Supported values for product imports:
     * * `product` (default): One JSON
     * [Product][google.cloud.retail.v2alpha.Product] per line. Each product must
     *   have a valid [Product.id][google.cloud.retail.v2alpha.Product.id].
     * * `product_merchant_center`: See [Importing catalog data from Merchant
     *   Center](/retail/recommendations-ai/docs/upload-catalog#mc).
     * Supported values for user events imports:
     * * `user_event` (default): One JSON
     * [UserEvent][google.cloud.retail.v2alpha.UserEvent] per line.
     * * `user_event_ga360`: Using
     *   https://support.google.com/analytics/answer/3437719?hl=en.
     *
     * Generated from protobuf field <code>string data_schema = 2;</code>
     * @return string
     */
    public function getDataSchema()
    {
        return $this->data_schema;
    }

    /**
     * The schema to use when parsing the data from the source.
     * Supported values for product imports:
     * * `product` (default): One JSON
     * [Product][google.cloud.retail.v2alpha.Product] per line. Each product must
     *   have a valid [Product.id][google.cloud.retail.v2alpha.Product.id].
     * * `product_merchant_center`: See [Importing catalog data from Merchant
     *   Center](/retail/recommendations-ai/docs/upload-catalog#mc).
     * Supported values for user events imports:
     * * `user_event` (default): One JSON
     * [UserEvent][google.cloud.retail.v2alpha.UserEvent] per line.
     * * `user_event_ga360`: Using
     *   https://support.google.com/analytics/answer/3437719?hl=en.
     *
     * Generated from protobuf field <code>string data_schema = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDataSchema($var)
    {
        GPBUtil::checkString($var, True);
        $this->data_schema = $var;

        return $this;
    }

}

