<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/admin/database/v1/spanner_database_admin.proto

namespace Google\Cloud\Spanner\Admin\Database\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A Cloud Spanner database.
 *
 * Generated from protobuf message <code>google.spanner.admin.database.v1.Database</code>
 */
class Database extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the database. Values are of the form
     * `projects/<project>/instances/<instance>/databases/<database>`,
     * where `<database>` is as specified in the `CREATE DATABASE`
     * statement. This name can be passed to other API methods to
     * identify the database.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $name = '';
    /**
     * Output only. The current database state.
     *
     * Generated from protobuf field <code>.google.spanner.admin.database.v1.Database.State state = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $state = 0;
    /**
     * Output only. If exists, the time at which the database creation started.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. Applicable only for restored databases. Contains information
     * about the restore source.
     *
     * Generated from protobuf field <code>.google.spanner.admin.database.v1.RestoreInfo restore_info = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $restore_info = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the database. Values are of the form
     *           `projects/<project>/instances/<instance>/databases/<database>`,
     *           where `<database>` is as specified in the `CREATE DATABASE`
     *           statement. This name can be passed to other API methods to
     *           identify the database.
     *     @type int $state
     *           Output only. The current database state.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. If exists, the time at which the database creation started.
     *     @type \Google\Cloud\Spanner\Admin\Database\V1\RestoreInfo $restore_info
     *           Output only. Applicable only for restored databases. Contains information
     *           about the restore source.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Spanner\Admin\Database\V1\SpannerDatabaseAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the database. Values are of the form
     * `projects/<project>/instances/<instance>/databases/<database>`,
     * where `<database>` is as specified in the `CREATE DATABASE`
     * statement. This name can be passed to other API methods to
     * identify the database.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the database. Values are of the form
     * `projects/<project>/instances/<instance>/databases/<database>`,
     * where `<database>` is as specified in the `CREATE DATABASE`
     * statement. This name can be passed to other API methods to
     * identify the database.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Output only. The current database state.
     *
     * Generated from protobuf field <code>.google.spanner.admin.database.v1.Database.State state = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. The current database state.
     *
     * Generated from protobuf field <code>.google.spanner.admin.database.v1.Database.State state = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Spanner\Admin\Database\V1\Database\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Output only. If exists, the time at which the database creation started.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getCreateTime()
    {
        return isset($this->create_time) ? $this->create_time : null;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. If exists, the time at which the database creation started.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. Applicable only for restored databases. Contains information
     * about the restore source.
     *
     * Generated from protobuf field <code>.google.spanner.admin.database.v1.RestoreInfo restore_info = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Spanner\Admin\Database\V1\RestoreInfo
     */
    public function getRestoreInfo()
    {
        return isset($this->restore_info) ? $this->restore_info : null;
    }

    public function hasRestoreInfo()
    {
        return isset($this->restore_info);
    }

    public function clearRestoreInfo()
    {
        unset($this->restore_info);
    }

    /**
     * Output only. Applicable only for restored databases. Contains information
     * about the restore source.
     *
     * Generated from protobuf field <code>.google.spanner.admin.database.v1.RestoreInfo restore_info = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Spanner\Admin\Database\V1\RestoreInfo $var
     * @return $this
     */
    public function setRestoreInfo($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Spanner\Admin\Database\V1\RestoreInfo::class);
        $this->restore_info = $var;

        return $this;
    }

}

