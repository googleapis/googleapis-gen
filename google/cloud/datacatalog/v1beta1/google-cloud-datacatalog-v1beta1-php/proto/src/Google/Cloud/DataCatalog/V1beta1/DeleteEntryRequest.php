<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/v1beta1/datacatalog.proto

namespace Google\Cloud\DataCatalog\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [DeleteEntry][google.cloud.datacatalog.v1beta1.DataCatalog.DeleteEntry].
 *
 * Generated from protobuf message <code>google.cloud.datacatalog.v1beta1.DeleteEntryRequest</code>
 */
class DeleteEntryRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the entry. Example:
     * * projects/{project_id}/locations/{location}/entryGroups/{entry_group_id}/entries/{entry_id}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the entry. Example:
     *           * projects/{project_id}/locations/{location}/entryGroups/{entry_group_id}/entries/{entry_id}
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datacatalog\V1Beta1\Datacatalog::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the entry. Example:
     * * projects/{project_id}/locations/{location}/entryGroups/{entry_group_id}/entries/{entry_id}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the entry. Example:
     * * projects/{project_id}/locations/{location}/entryGroups/{entry_group_id}/entries/{entry_id}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

