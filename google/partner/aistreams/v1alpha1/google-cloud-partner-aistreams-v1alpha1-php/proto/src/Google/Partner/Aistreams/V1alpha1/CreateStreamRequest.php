<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/partner/aistreams/v1alpha1/aistreams.proto

namespace Google\Partner\Aistreams\V1alpha1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for 'CreateStream'.
 *
 * Generated from protobuf message <code>google.partner.aistreams.v1alpha1.CreateStreamRequest</code>
 */
class CreateStreamRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent that owns the collection of streams.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The stream identifier.
     *
     * Generated from protobuf field <code>string stream_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $stream_id = '';
    /**
     * Required. The stream to create.
     *
     * Generated from protobuf field <code>.google.partner.aistreams.v1alpha1.Stream stream = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $stream = null;
    /**
     * Optional. An optional request ID to identify requests. Specify a unique request ID
     * so that if you must retry your request, the server will know to ignore
     * the request if it has already been completed. The server will guarantee
     * that for at least 60 minutes since the first request.
     * For example, consider a situation where you make an initial request and t
     * he request times out. If you make the request again with the same request
     * ID, the server can check if original operation with the same request ID
     * was received, and if so, will ignore the second request. This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $request_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent that owns the collection of streams.
     *     @type string $stream_id
     *           Required. The stream identifier.
     *     @type \Google\Partner\Aistreams\V1alpha1\Stream $stream
     *           Required. The stream to create.
     *     @type string $request_id
     *           Optional. An optional request ID to identify requests. Specify a unique request ID
     *           so that if you must retry your request, the server will know to ignore
     *           the request if it has already been completed. The server will guarantee
     *           that for at least 60 minutes since the first request.
     *           For example, consider a situation where you make an initial request and t
     *           he request times out. If you make the request again with the same request
     *           ID, the server can check if original operation with the same request ID
     *           was received, and if so, will ignore the second request. This prevents
     *           clients from accidentally creating duplicate commitments.
     *           The request ID must be a valid UUID with the exception that zero UUID is
     *           not supported (00000000-0000-0000-0000-000000000000).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Partner\Aistreams\V1Alpha1\Aistreams::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent that owns the collection of streams.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent that owns the collection of streams.
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
     * Required. The stream identifier.
     *
     * Generated from protobuf field <code>string stream_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getStreamId()
    {
        return $this->stream_id;
    }

    /**
     * Required. The stream identifier.
     *
     * Generated from protobuf field <code>string stream_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setStreamId($var)
    {
        GPBUtil::checkString($var, True);
        $this->stream_id = $var;

        return $this;
    }

    /**
     * Required. The stream to create.
     *
     * Generated from protobuf field <code>.google.partner.aistreams.v1alpha1.Stream stream = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Partner\Aistreams\V1alpha1\Stream
     */
    public function getStream()
    {
        return isset($this->stream) ? $this->stream : null;
    }

    public function hasStream()
    {
        return isset($this->stream);
    }

    public function clearStream()
    {
        unset($this->stream);
    }

    /**
     * Required. The stream to create.
     *
     * Generated from protobuf field <code>.google.partner.aistreams.v1alpha1.Stream stream = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Partner\Aistreams\V1alpha1\Stream $var
     * @return $this
     */
    public function setStream($var)
    {
        GPBUtil::checkMessage($var, \Google\Partner\Aistreams\V1alpha1\Stream::class);
        $this->stream = $var;

        return $this;
    }

    /**
     * Optional. An optional request ID to identify requests. Specify a unique request ID
     * so that if you must retry your request, the server will know to ignore
     * the request if it has already been completed. The server will guarantee
     * that for at least 60 minutes since the first request.
     * For example, consider a situation where you make an initial request and t
     * he request times out. If you make the request again with the same request
     * ID, the server can check if original operation with the same request ID
     * was received, and if so, will ignore the second request. This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * Optional. An optional request ID to identify requests. Specify a unique request ID
     * so that if you must retry your request, the server will know to ignore
     * the request if it has already been completed. The server will guarantee
     * that for at least 60 minutes since the first request.
     * For example, consider a situation where you make an initial request and t
     * he request times out. If you make the request again with the same request
     * ID, the server can check if original operation with the same request ID
     * was received, and if so, will ignore the second request. This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

}

