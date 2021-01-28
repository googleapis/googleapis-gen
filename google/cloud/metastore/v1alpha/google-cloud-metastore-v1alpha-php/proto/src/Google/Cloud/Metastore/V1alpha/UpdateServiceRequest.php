<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/metastore/v1alpha/metastore.proto

namespace Google\Cloud\Metastore\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [DataprocMetastore.UpdateService][google.cloud.metastore.v1alpha.DataprocMetastore.UpdateService].
 *
 * Generated from protobuf message <code>google.cloud.metastore.v1alpha.UpdateServiceRequest</code>
 */
class UpdateServiceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. A field mask used to specify the fields to be overwritten in the
     * metastore service resource by the update.
     * Fields specified in the `update_mask` are relative to the resource (not
     * to the full request). A field is overwritten if it is in the mask.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $update_mask = null;
    /**
     * Required. The metastore service to update. The server only merges fields
     * in the service if they are specified in `update_mask`.
     * The metastore service's `name` field is used to identify the metastore
     * service to be updated.
     *
     * Generated from protobuf field <code>.google.cloud.metastore.v1alpha.Service service = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $service = null;
    /**
     * Optional. A request ID. Specify a unique request ID to allow the server to ignore the
     * request if it has completed. The server will ignore subsequent requests
     * that provide a duplicate request ID for at least 60 minutes after the first
     * request.
     * For example, if an initial request times out, followed by another request
     * with the same request ID, the server ignores the second request to prevent
     * the creation of duplicate commitments.
     * The request ID must be a valid
     * [UUID](https://en.wikipedia.org/wiki/Universally_unique_identifier#Format)
     * A zero UUID (00000000-0000-0000-0000-000000000000) is not supported.
     *
     * Generated from protobuf field <code>string request_id = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $request_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Required. A field mask used to specify the fields to be overwritten in the
     *           metastore service resource by the update.
     *           Fields specified in the `update_mask` are relative to the resource (not
     *           to the full request). A field is overwritten if it is in the mask.
     *     @type \Google\Cloud\Metastore\V1alpha\Service $service
     *           Required. The metastore service to update. The server only merges fields
     *           in the service if they are specified in `update_mask`.
     *           The metastore service's `name` field is used to identify the metastore
     *           service to be updated.
     *     @type string $request_id
     *           Optional. A request ID. Specify a unique request ID to allow the server to ignore the
     *           request if it has completed. The server will ignore subsequent requests
     *           that provide a duplicate request ID for at least 60 minutes after the first
     *           request.
     *           For example, if an initial request times out, followed by another request
     *           with the same request ID, the server ignores the second request to prevent
     *           the creation of duplicate commitments.
     *           The request ID must be a valid
     *           [UUID](https://en.wikipedia.org/wiki/Universally_unique_identifier#Format)
     *           A zero UUID (00000000-0000-0000-0000-000000000000) is not supported.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Metastore\V1Alpha\Metastore::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. A field mask used to specify the fields to be overwritten in the
     * metastore service resource by the update.
     * Fields specified in the `update_mask` are relative to the resource (not
     * to the full request). A field is overwritten if it is in the mask.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\FieldMask
     */
    public function getUpdateMask()
    {
        return isset($this->update_mask) ? $this->update_mask : null;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Required. A field mask used to specify the fields to be overwritten in the
     * metastore service resource by the update.
     * Fields specified in the `update_mask` are relative to the resource (not
     * to the full request). A field is overwritten if it is in the mask.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

    /**
     * Required. The metastore service to update. The server only merges fields
     * in the service if they are specified in `update_mask`.
     * The metastore service's `name` field is used to identify the metastore
     * service to be updated.
     *
     * Generated from protobuf field <code>.google.cloud.metastore.v1alpha.Service service = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Metastore\V1alpha\Service
     */
    public function getService()
    {
        return isset($this->service) ? $this->service : null;
    }

    public function hasService()
    {
        return isset($this->service);
    }

    public function clearService()
    {
        unset($this->service);
    }

    /**
     * Required. The metastore service to update. The server only merges fields
     * in the service if they are specified in `update_mask`.
     * The metastore service's `name` field is used to identify the metastore
     * service to be updated.
     *
     * Generated from protobuf field <code>.google.cloud.metastore.v1alpha.Service service = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Metastore\V1alpha\Service $var
     * @return $this
     */
    public function setService($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Metastore\V1alpha\Service::class);
        $this->service = $var;

        return $this;
    }

    /**
     * Optional. A request ID. Specify a unique request ID to allow the server to ignore the
     * request if it has completed. The server will ignore subsequent requests
     * that provide a duplicate request ID for at least 60 minutes after the first
     * request.
     * For example, if an initial request times out, followed by another request
     * with the same request ID, the server ignores the second request to prevent
     * the creation of duplicate commitments.
     * The request ID must be a valid
     * [UUID](https://en.wikipedia.org/wiki/Universally_unique_identifier#Format)
     * A zero UUID (00000000-0000-0000-0000-000000000000) is not supported.
     *
     * Generated from protobuf field <code>string request_id = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * Optional. A request ID. Specify a unique request ID to allow the server to ignore the
     * request if it has completed. The server will ignore subsequent requests
     * that provide a duplicate request ID for at least 60 minutes after the first
     * request.
     * For example, if an initial request times out, followed by another request
     * with the same request ID, the server ignores the second request to prevent
     * the creation of duplicate commitments.
     * The request ID must be a valid
     * [UUID](https://en.wikipedia.org/wiki/Universally_unique_identifier#Format)
     * A zero UUID (00000000-0000-0000-0000-000000000000) is not supported.
     *
     * Generated from protobuf field <code>string request_id = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
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

