<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gaming/v1beta/realms.proto

namespace Google\Cloud\Gaming\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for RealmsService.ListRealms.
 *
 * Generated from protobuf message <code>google.cloud.gaming.v1beta.ListRealmsRequest</code>
 */
class ListRealmsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent resource name. Uses the form:
     * `projects/{project}/locations/{location}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Optional. The maximum number of items to return.  If unspecified, server
     * will pick an appropriate default. Server may return fewer items than
     * requested. A caller should only rely on response's
     * [next_page_token][google.cloud.gaming.v1beta.ListRealmsResponse.next_page_token] to
     * determine if there are more realms left to be queried.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_size = 0;
    /**
     * Optional. The next_page_token value returned from a previous List request,
     * if any.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_token = '';
    /**
     * Optional. The filter to apply to list results.
     *
     * Generated from protobuf field <code>string filter = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $filter = '';
    /**
     * Optional. Specifies the ordering of results following syntax at
     * https://cloud.google.com/apis/design/design_patterns#sorting_order.
     *
     * Generated from protobuf field <code>string order_by = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $order_by = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent resource name. Uses the form:
     *           `projects/{project}/locations/{location}`.
     *     @type int $page_size
     *           Optional. The maximum number of items to return.  If unspecified, server
     *           will pick an appropriate default. Server may return fewer items than
     *           requested. A caller should only rely on response's
     *           [next_page_token][google.cloud.gaming.v1beta.ListRealmsResponse.next_page_token] to
     *           determine if there are more realms left to be queried.
     *     @type string $page_token
     *           Optional. The next_page_token value returned from a previous List request,
     *           if any.
     *     @type string $filter
     *           Optional. The filter to apply to list results.
     *     @type string $order_by
     *           Optional. Specifies the ordering of results following syntax at
     *           https://cloud.google.com/apis/design/design_patterns#sorting_order.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gaming\V1Beta\Realms::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent resource name. Uses the form:
     * `projects/{project}/locations/{location}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent resource name. Uses the form:
     * `projects/{project}/locations/{location}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Optional. The maximum number of items to return.  If unspecified, server
     * will pick an appropriate default. Server may return fewer items than
     * requested. A caller should only rely on response's
     * [next_page_token][google.cloud.gaming.v1beta.ListRealmsResponse.next_page_token] to
     * determine if there are more realms left to be queried.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional. The maximum number of items to return.  If unspecified, server
     * will pick an appropriate default. Server may return fewer items than
     * requested. A caller should only rely on response's
     * [next_page_token][google.cloud.gaming.v1beta.ListRealmsResponse.next_page_token] to
     * determine if there are more realms left to be queried.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * Optional. The next_page_token value returned from a previous List request,
     * if any.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional. The next_page_token value returned from a previous List request,
     * if any.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * Optional. The filter to apply to list results.
     *
     * Generated from protobuf field <code>string filter = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Optional. The filter to apply to list results.
     *
     * Generated from protobuf field <code>string filter = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

    /**
     * Optional. Specifies the ordering of results following syntax at
     * https://cloud.google.com/apis/design/design_patterns#sorting_order.
     *
     * Generated from protobuf field <code>string order_by = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getOrderBy()
    {
        return $this->order_by;
    }

    /**
     * Optional. Specifies the ordering of results following syntax at
     * https://cloud.google.com/apis/design/design_patterns#sorting_order.
     *
     * Generated from protobuf field <code>string order_by = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setOrderBy($var)
    {
        GPBUtil::checkString($var, True);
        $this->order_by = $var;

        return $this;
    }

}

