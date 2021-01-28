<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/area120/tables/v1alpha1/tables.proto

namespace Google\Area120\Tables\V1alpha1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for TablesService.BatchCreateRows.
 *
 * Generated from protobuf message <code>google.area120.tables.v1alpha1.BatchCreateRowsRequest</code>
 */
class BatchCreateRowsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent table where the rows will be created.
     * Format: tables/{table}
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $parent = '';
    /**
     * Required. The request message specifying the rows to create.
     * A maximum of 500 rows can be created in a single batch.
     *
     * Generated from protobuf field <code>repeated .google.area120.tables.v1alpha1.CreateRowRequest requests = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $requests;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent table where the rows will be created.
     *           Format: tables/{table}
     *     @type \Google\Area120\Tables\V1alpha1\CreateRowRequest[]|\Google\Protobuf\Internal\RepeatedField $requests
     *           Required. The request message specifying the rows to create.
     *           A maximum of 500 rows can be created in a single batch.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Area120\Tables\V1Alpha1\Tables::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent table where the rows will be created.
     * Format: tables/{table}
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent table where the rows will be created.
     * Format: tables/{table}
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Required. The request message specifying the rows to create.
     * A maximum of 500 rows can be created in a single batch.
     *
     * Generated from protobuf field <code>repeated .google.area120.tables.v1alpha1.CreateRowRequest requests = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRequests()
    {
        return $this->requests;
    }

    /**
     * Required. The request message specifying the rows to create.
     * A maximum of 500 rows can be created in a single batch.
     *
     * Generated from protobuf field <code>repeated .google.area120.tables.v1alpha1.CreateRowRequest requests = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Area120\Tables\V1alpha1\CreateRowRequest[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRequests($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Area120\Tables\V1alpha1\CreateRowRequest::class);
        $this->requests = $arr;

        return $this;
    }

}

