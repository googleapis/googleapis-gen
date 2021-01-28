<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/admin/v2/table.proto

namespace Google\Cloud\Bigtable\Admin\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A collection of user data indexed by row, column, and timestamp.
 * Each table is served using the resources of its parent cluster.
 *
 * Generated from protobuf message <code>google.bigtable.admin.v2.Table</code>
 */
class Table extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The unique name of the table. Values are of the form
     * `projects/<project>/instances/<instance>/tables/[_a-zA-Z0-9][-_.a-zA-Z0-9]*`.
     * Views: `NAME_ONLY`, `SCHEMA_VIEW`, `REPLICATION_VIEW`, `FULL`
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * Output only. Map from cluster ID to per-cluster table state.
     * If it could not be determined whether or not the table has data in a
     * particular cluster (for example, if its zone is unavailable), then
     * there will be an entry for the cluster with UNKNOWN `replication_status`.
     * Views: `REPLICATION_VIEW`, `FULL`
     *
     * Generated from protobuf field <code>map<string, .google.bigtable.admin.v2.Table.ClusterState> cluster_states = 2;</code>
     */
    private $cluster_states;
    /**
     * (`CreationOnly`)
     * The column families configured for this table, mapped by column family ID.
     * Views: `SCHEMA_VIEW`, `FULL`
     *
     * Generated from protobuf field <code>map<string, .google.bigtable.admin.v2.ColumnFamily> column_families = 3;</code>
     */
    private $column_families;
    /**
     * (`CreationOnly`)
     * The granularity (i.e. `MILLIS`) at which timestamps are stored in
     * this table. Timestamps not matching the granularity will be rejected.
     * If unspecified at creation time, the value will be set to `MILLIS`.
     * Views: `SCHEMA_VIEW`, `FULL`.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.Table.TimestampGranularity granularity = 4;</code>
     */
    protected $granularity = 0;
    /**
     * Output only. If this table was restored from another data source (e.g. a
     * backup), this field will be populated with information about the restore.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.RestoreInfo restore_info = 6;</code>
     */
    protected $restore_info = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. The unique name of the table. Values are of the form
     *           `projects/<project>/instances/<instance>/tables/[_a-zA-Z0-9][-_.a-zA-Z0-9]*`.
     *           Views: `NAME_ONLY`, `SCHEMA_VIEW`, `REPLICATION_VIEW`, `FULL`
     *     @type array|\Google\Protobuf\Internal\MapField $cluster_states
     *           Output only. Map from cluster ID to per-cluster table state.
     *           If it could not be determined whether or not the table has data in a
     *           particular cluster (for example, if its zone is unavailable), then
     *           there will be an entry for the cluster with UNKNOWN `replication_status`.
     *           Views: `REPLICATION_VIEW`, `FULL`
     *     @type array|\Google\Protobuf\Internal\MapField $column_families
     *           (`CreationOnly`)
     *           The column families configured for this table, mapped by column family ID.
     *           Views: `SCHEMA_VIEW`, `FULL`
     *     @type int $granularity
     *           (`CreationOnly`)
     *           The granularity (i.e. `MILLIS`) at which timestamps are stored in
     *           this table. Timestamps not matching the granularity will be rejected.
     *           If unspecified at creation time, the value will be set to `MILLIS`.
     *           Views: `SCHEMA_VIEW`, `FULL`.
     *     @type \Google\Cloud\Bigtable\Admin\V2\RestoreInfo $restore_info
     *           Output only. If this table was restored from another data source (e.g. a
     *           backup), this field will be populated with information about the restore.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Bigtable\Admin\V2\Table::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The unique name of the table. Values are of the form
     * `projects/<project>/instances/<instance>/tables/[_a-zA-Z0-9][-_.a-zA-Z0-9]*`.
     * Views: `NAME_ONLY`, `SCHEMA_VIEW`, `REPLICATION_VIEW`, `FULL`
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The unique name of the table. Values are of the form
     * `projects/<project>/instances/<instance>/tables/[_a-zA-Z0-9][-_.a-zA-Z0-9]*`.
     * Views: `NAME_ONLY`, `SCHEMA_VIEW`, `REPLICATION_VIEW`, `FULL`
     *
     * Generated from protobuf field <code>string name = 1;</code>
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
     * Output only. Map from cluster ID to per-cluster table state.
     * If it could not be determined whether or not the table has data in a
     * particular cluster (for example, if its zone is unavailable), then
     * there will be an entry for the cluster with UNKNOWN `replication_status`.
     * Views: `REPLICATION_VIEW`, `FULL`
     *
     * Generated from protobuf field <code>map<string, .google.bigtable.admin.v2.Table.ClusterState> cluster_states = 2;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getClusterStates()
    {
        return $this->cluster_states;
    }

    /**
     * Output only. Map from cluster ID to per-cluster table state.
     * If it could not be determined whether or not the table has data in a
     * particular cluster (for example, if its zone is unavailable), then
     * there will be an entry for the cluster with UNKNOWN `replication_status`.
     * Views: `REPLICATION_VIEW`, `FULL`
     *
     * Generated from protobuf field <code>map<string, .google.bigtable.admin.v2.Table.ClusterState> cluster_states = 2;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setClusterStates($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Bigtable\Admin\V2\Table\ClusterState::class);
        $this->cluster_states = $arr;

        return $this;
    }

    /**
     * (`CreationOnly`)
     * The column families configured for this table, mapped by column family ID.
     * Views: `SCHEMA_VIEW`, `FULL`
     *
     * Generated from protobuf field <code>map<string, .google.bigtable.admin.v2.ColumnFamily> column_families = 3;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getColumnFamilies()
    {
        return $this->column_families;
    }

    /**
     * (`CreationOnly`)
     * The column families configured for this table, mapped by column family ID.
     * Views: `SCHEMA_VIEW`, `FULL`
     *
     * Generated from protobuf field <code>map<string, .google.bigtable.admin.v2.ColumnFamily> column_families = 3;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setColumnFamilies($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Bigtable\Admin\V2\ColumnFamily::class);
        $this->column_families = $arr;

        return $this;
    }

    /**
     * (`CreationOnly`)
     * The granularity (i.e. `MILLIS`) at which timestamps are stored in
     * this table. Timestamps not matching the granularity will be rejected.
     * If unspecified at creation time, the value will be set to `MILLIS`.
     * Views: `SCHEMA_VIEW`, `FULL`.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.Table.TimestampGranularity granularity = 4;</code>
     * @return int
     */
    public function getGranularity()
    {
        return $this->granularity;
    }

    /**
     * (`CreationOnly`)
     * The granularity (i.e. `MILLIS`) at which timestamps are stored in
     * this table. Timestamps not matching the granularity will be rejected.
     * If unspecified at creation time, the value will be set to `MILLIS`.
     * Views: `SCHEMA_VIEW`, `FULL`.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.Table.TimestampGranularity granularity = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setGranularity($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Bigtable\Admin\V2\Table\TimestampGranularity::class);
        $this->granularity = $var;

        return $this;
    }

    /**
     * Output only. If this table was restored from another data source (e.g. a
     * backup), this field will be populated with information about the restore.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.RestoreInfo restore_info = 6;</code>
     * @return \Google\Cloud\Bigtable\Admin\V2\RestoreInfo
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
     * Output only. If this table was restored from another data source (e.g. a
     * backup), this field will be populated with information about the restore.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.RestoreInfo restore_info = 6;</code>
     * @param \Google\Cloud\Bigtable\Admin\V2\RestoreInfo $var
     * @return $this
     */
    public function setRestoreInfo($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Bigtable\Admin\V2\RestoreInfo::class);
        $this->restore_info = $var;

        return $this;
    }

}

