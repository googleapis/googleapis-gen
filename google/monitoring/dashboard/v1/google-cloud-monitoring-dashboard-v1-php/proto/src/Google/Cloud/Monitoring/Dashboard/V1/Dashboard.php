<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/dashboard/v1/dashboard.proto

namespace Google\Cloud\Monitoring\Dashboard\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A Google Stackdriver dashboard. Dashboards define the content and layout
 * of pages in the Stackdriver web application.
 *
 * Generated from protobuf message <code>google.monitoring.dashboard.v1.Dashboard</code>
 */
class Dashboard extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. The resource name of the dashboard.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $name = '';
    /**
     * Required. The mutable, human-readable name.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $display_name = '';
    /**
     * `etag` is used for optimistic concurrency control as a way to help
     * prevent simultaneous updates of a policy from overwriting each other.
     * An `etag` is returned in the response to `GetDashboard`, and
     * users are expected to put that etag in the request to `UpdateDashboard` to
     * ensure that their change will be applied to the same version of the
     * Dashboard configuration. The field should not be passed during
     * dashboard creation.
     *
     * Generated from protobuf field <code>string etag = 4;</code>
     */
    protected $etag = '';
    protected $layout;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Immutable. The resource name of the dashboard.
     *     @type string $display_name
     *           Required. The mutable, human-readable name.
     *     @type string $etag
     *           `etag` is used for optimistic concurrency control as a way to help
     *           prevent simultaneous updates of a policy from overwriting each other.
     *           An `etag` is returned in the response to `GetDashboard`, and
     *           users are expected to put that etag in the request to `UpdateDashboard` to
     *           ensure that their change will be applied to the same version of the
     *           Dashboard configuration. The field should not be passed during
     *           dashboard creation.
     *     @type \Google\Cloud\Monitoring\Dashboard\V1\GridLayout $grid_layout
     *           Content is arranged with a basic layout that re-flows a simple list of
     *           informational elements like widgets or tiles.
     *     @type \Google\Cloud\Monitoring\Dashboard\V1\MosaicLayout $mosaic_layout
     *           The content is arranged as a grid of tiles, with each content widget
     *           occupying one or more grid blocks.
     *     @type \Google\Cloud\Monitoring\Dashboard\V1\RowLayout $row_layout
     *           The content is divided into equally spaced rows and the widgets are
     *           arranged horizontally.
     *     @type \Google\Cloud\Monitoring\Dashboard\V1\ColumnLayout $column_layout
     *           The content is divided into equally spaced columns and the widgets are
     *           arranged vertically.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Monitoring\Dashboard\V1\Dashboard::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. The resource name of the dashboard.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Immutable. The resource name of the dashboard.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
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
     * Required. The mutable, human-readable name.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Required. The mutable, human-readable name.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * `etag` is used for optimistic concurrency control as a way to help
     * prevent simultaneous updates of a policy from overwriting each other.
     * An `etag` is returned in the response to `GetDashboard`, and
     * users are expected to put that etag in the request to `UpdateDashboard` to
     * ensure that their change will be applied to the same version of the
     * Dashboard configuration. The field should not be passed during
     * dashboard creation.
     *
     * Generated from protobuf field <code>string etag = 4;</code>
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * `etag` is used for optimistic concurrency control as a way to help
     * prevent simultaneous updates of a policy from overwriting each other.
     * An `etag` is returned in the response to `GetDashboard`, and
     * users are expected to put that etag in the request to `UpdateDashboard` to
     * ensure that their change will be applied to the same version of the
     * Dashboard configuration. The field should not be passed during
     * dashboard creation.
     *
     * Generated from protobuf field <code>string etag = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setEtag($var)
    {
        GPBUtil::checkString($var, True);
        $this->etag = $var;

        return $this;
    }

    /**
     * Content is arranged with a basic layout that re-flows a simple list of
     * informational elements like widgets or tiles.
     *
     * Generated from protobuf field <code>.google.monitoring.dashboard.v1.GridLayout grid_layout = 5;</code>
     * @return \Google\Cloud\Monitoring\Dashboard\V1\GridLayout|null
     */
    public function getGridLayout()
    {
        return $this->readOneof(5);
    }

    public function hasGridLayout()
    {
        return $this->hasOneof(5);
    }

    /**
     * Content is arranged with a basic layout that re-flows a simple list of
     * informational elements like widgets or tiles.
     *
     * Generated from protobuf field <code>.google.monitoring.dashboard.v1.GridLayout grid_layout = 5;</code>
     * @param \Google\Cloud\Monitoring\Dashboard\V1\GridLayout $var
     * @return $this
     */
    public function setGridLayout($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Monitoring\Dashboard\V1\GridLayout::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * The content is arranged as a grid of tiles, with each content widget
     * occupying one or more grid blocks.
     *
     * Generated from protobuf field <code>.google.monitoring.dashboard.v1.MosaicLayout mosaic_layout = 6;</code>
     * @return \Google\Cloud\Monitoring\Dashboard\V1\MosaicLayout|null
     */
    public function getMosaicLayout()
    {
        return $this->readOneof(6);
    }

    public function hasMosaicLayout()
    {
        return $this->hasOneof(6);
    }

    /**
     * The content is arranged as a grid of tiles, with each content widget
     * occupying one or more grid blocks.
     *
     * Generated from protobuf field <code>.google.monitoring.dashboard.v1.MosaicLayout mosaic_layout = 6;</code>
     * @param \Google\Cloud\Monitoring\Dashboard\V1\MosaicLayout $var
     * @return $this
     */
    public function setMosaicLayout($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Monitoring\Dashboard\V1\MosaicLayout::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * The content is divided into equally spaced rows and the widgets are
     * arranged horizontally.
     *
     * Generated from protobuf field <code>.google.monitoring.dashboard.v1.RowLayout row_layout = 8;</code>
     * @return \Google\Cloud\Monitoring\Dashboard\V1\RowLayout|null
     */
    public function getRowLayout()
    {
        return $this->readOneof(8);
    }

    public function hasRowLayout()
    {
        return $this->hasOneof(8);
    }

    /**
     * The content is divided into equally spaced rows and the widgets are
     * arranged horizontally.
     *
     * Generated from protobuf field <code>.google.monitoring.dashboard.v1.RowLayout row_layout = 8;</code>
     * @param \Google\Cloud\Monitoring\Dashboard\V1\RowLayout $var
     * @return $this
     */
    public function setRowLayout($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Monitoring\Dashboard\V1\RowLayout::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * The content is divided into equally spaced columns and the widgets are
     * arranged vertically.
     *
     * Generated from protobuf field <code>.google.monitoring.dashboard.v1.ColumnLayout column_layout = 9;</code>
     * @return \Google\Cloud\Monitoring\Dashboard\V1\ColumnLayout|null
     */
    public function getColumnLayout()
    {
        return $this->readOneof(9);
    }

    public function hasColumnLayout()
    {
        return $this->hasOneof(9);
    }

    /**
     * The content is divided into equally spaced columns and the widgets are
     * arranged vertically.
     *
     * Generated from protobuf field <code>.google.monitoring.dashboard.v1.ColumnLayout column_layout = 9;</code>
     * @param \Google\Cloud\Monitoring\Dashboard\V1\ColumnLayout $var
     * @return $this
     */
    public function setColumnLayout($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Monitoring\Dashboard\V1\ColumnLayout::class);
        $this->writeOneof(9, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getLayout()
    {
        return $this->whichOneof("layout");
    }

}

