<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/dashboard/v1/metrics.proto

namespace Google\Monitoring\Dashboard\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * TimeSeriesQuery collects the set of supported methods for querying time
 * series data from the Stackdriver metrics API.
 *
 * Generated from protobuf message <code>google.monitoring.dashboard.v1.TimeSeriesQuery</code>
 */
class TimeSeriesQuery extends \Google\Protobuf\Internal\Message
{
    /**
     * The unit of data contained in fetched time series. If non-empty, this
     * unit will override any unit that accompanies fetched data. The format is
     * the same as the
     * [`unit`](https://cloud.google.com/monitoring/api/ref_v3/rest/v3/projects.metricDescriptors)
     * field in `MetricDescriptor`.
     *
     * Generated from protobuf field <code>string unit_override = 5;</code>
     */
    protected $unit_override = '';
    protected $source;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Monitoring\Dashboard\V1\TimeSeriesFilter $time_series_filter
     *           Filter parameters to fetch time series.
     *     @type \Google\Monitoring\Dashboard\V1\TimeSeriesFilterRatio $time_series_filter_ratio
     *           Parameters to fetch a ratio between two time series filters.
     *     @type string $time_series_query_language
     *           A query used to fetch time series.
     *     @type string $unit_override
     *           The unit of data contained in fetched time series. If non-empty, this
     *           unit will override any unit that accompanies fetched data. The format is
     *           the same as the
     *           [`unit`](https://cloud.google.com/monitoring/api/ref_v3/rest/v3/projects.metricDescriptors)
     *           field in `MetricDescriptor`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Monitoring\Dashboard\V1\Metrics::initOnce();
        parent::__construct($data);
    }

    /**
     * Filter parameters to fetch time series.
     *
     * Generated from protobuf field <code>.google.monitoring.dashboard.v1.TimeSeriesFilter time_series_filter = 1;</code>
     * @return \Google\Monitoring\Dashboard\V1\TimeSeriesFilter
     */
    public function getTimeSeriesFilter()
    {
        return $this->readOneof(1);
    }

    public function hasTimeSeriesFilter()
    {
        return $this->hasOneof(1);
    }

    /**
     * Filter parameters to fetch time series.
     *
     * Generated from protobuf field <code>.google.monitoring.dashboard.v1.TimeSeriesFilter time_series_filter = 1;</code>
     * @param \Google\Monitoring\Dashboard\V1\TimeSeriesFilter $var
     * @return $this
     */
    public function setTimeSeriesFilter($var)
    {
        GPBUtil::checkMessage($var, \Google\Monitoring\Dashboard\V1\TimeSeriesFilter::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Parameters to fetch a ratio between two time series filters.
     *
     * Generated from protobuf field <code>.google.monitoring.dashboard.v1.TimeSeriesFilterRatio time_series_filter_ratio = 2;</code>
     * @return \Google\Monitoring\Dashboard\V1\TimeSeriesFilterRatio
     */
    public function getTimeSeriesFilterRatio()
    {
        return $this->readOneof(2);
    }

    public function hasTimeSeriesFilterRatio()
    {
        return $this->hasOneof(2);
    }

    /**
     * Parameters to fetch a ratio between two time series filters.
     *
     * Generated from protobuf field <code>.google.monitoring.dashboard.v1.TimeSeriesFilterRatio time_series_filter_ratio = 2;</code>
     * @param \Google\Monitoring\Dashboard\V1\TimeSeriesFilterRatio $var
     * @return $this
     */
    public function setTimeSeriesFilterRatio($var)
    {
        GPBUtil::checkMessage($var, \Google\Monitoring\Dashboard\V1\TimeSeriesFilterRatio::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * A query used to fetch time series.
     *
     * Generated from protobuf field <code>string time_series_query_language = 3;</code>
     * @return string
     */
    public function getTimeSeriesQueryLanguage()
    {
        return $this->readOneof(3);
    }

    public function hasTimeSeriesQueryLanguage()
    {
        return $this->hasOneof(3);
    }

    /**
     * A query used to fetch time series.
     *
     * Generated from protobuf field <code>string time_series_query_language = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setTimeSeriesQueryLanguage($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * The unit of data contained in fetched time series. If non-empty, this
     * unit will override any unit that accompanies fetched data. The format is
     * the same as the
     * [`unit`](https://cloud.google.com/monitoring/api/ref_v3/rest/v3/projects.metricDescriptors)
     * field in `MetricDescriptor`.
     *
     * Generated from protobuf field <code>string unit_override = 5;</code>
     * @return string
     */
    public function getUnitOverride()
    {
        return $this->unit_override;
    }

    /**
     * The unit of data contained in fetched time series. If non-empty, this
     * unit will override any unit that accompanies fetched data. The format is
     * the same as the
     * [`unit`](https://cloud.google.com/monitoring/api/ref_v3/rest/v3/projects.metricDescriptors)
     * field in `MetricDescriptor`.
     *
     * Generated from protobuf field <code>string unit_override = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setUnitOverride($var)
    {
        GPBUtil::checkString($var, True);
        $this->unit_override = $var;

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

