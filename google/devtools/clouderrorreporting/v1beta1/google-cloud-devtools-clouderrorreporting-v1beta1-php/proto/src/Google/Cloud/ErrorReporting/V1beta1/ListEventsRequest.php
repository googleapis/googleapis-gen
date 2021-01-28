<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/clouderrorreporting/v1beta1/error_stats_service.proto

namespace Google\Cloud\ErrorReporting\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Specifies a set of error events to return.
 *
 * Generated from protobuf message <code>google.devtools.clouderrorreporting.v1beta1.ListEventsRequest</code>
 */
class ListEventsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the Google Cloud Platform project. Written
     * as `projects/` plus the
     * [Google Cloud Platform project
     * ID](https://support.google.com/cloud/answer/6158840).
     * Example: `projects/my-project-123`.
     *
     * Generated from protobuf field <code>string project_name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $project_name = '';
    /**
     * Required. The group for which events shall be returned.
     *
     * Generated from protobuf field <code>string group_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $group_id = '';
    /**
     * Optional. List only ErrorGroups which belong to a service context that
     * matches the filter.
     * Data for all service contexts is returned if this field is not specified.
     *
     * Generated from protobuf field <code>.google.devtools.clouderrorreporting.v1beta1.ServiceContextFilter service_filter = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $service_filter = null;
    /**
     * Optional. List only data for the given time range.
     * If not set a default time range is used. The field time_range_begin
     * in the response will specify the beginning of this time range.
     *
     * Generated from protobuf field <code>.google.devtools.clouderrorreporting.v1beta1.QueryTimeRange time_range = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $time_range = null;
    /**
     * Optional. The maximum number of results to return per response.
     *
     * Generated from protobuf field <code>int32 page_size = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_size = 0;
    /**
     * Optional. A `next_page_token` provided by a previous response.
     *
     * Generated from protobuf field <code>string page_token = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $project_name
     *           Required. The resource name of the Google Cloud Platform project. Written
     *           as `projects/` plus the
     *           [Google Cloud Platform project
     *           ID](https://support.google.com/cloud/answer/6158840).
     *           Example: `projects/my-project-123`.
     *     @type string $group_id
     *           Required. The group for which events shall be returned.
     *     @type \Google\Cloud\ErrorReporting\V1beta1\ServiceContextFilter $service_filter
     *           Optional. List only ErrorGroups which belong to a service context that
     *           matches the filter.
     *           Data for all service contexts is returned if this field is not specified.
     *     @type \Google\Cloud\ErrorReporting\V1beta1\QueryTimeRange $time_range
     *           Optional. List only data for the given time range.
     *           If not set a default time range is used. The field time_range_begin
     *           in the response will specify the beginning of this time range.
     *     @type int $page_size
     *           Optional. The maximum number of results to return per response.
     *     @type string $page_token
     *           Optional. A `next_page_token` provided by a previous response.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Clouderrorreporting\V1Beta1\ErrorStatsService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the Google Cloud Platform project. Written
     * as `projects/` plus the
     * [Google Cloud Platform project
     * ID](https://support.google.com/cloud/answer/6158840).
     * Example: `projects/my-project-123`.
     *
     * Generated from protobuf field <code>string project_name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getProjectName()
    {
        return $this->project_name;
    }

    /**
     * Required. The resource name of the Google Cloud Platform project. Written
     * as `projects/` plus the
     * [Google Cloud Platform project
     * ID](https://support.google.com/cloud/answer/6158840).
     * Example: `projects/my-project-123`.
     *
     * Generated from protobuf field <code>string project_name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setProjectName($var)
    {
        GPBUtil::checkString($var, True);
        $this->project_name = $var;

        return $this;
    }

    /**
     * Required. The group for which events shall be returned.
     *
     * Generated from protobuf field <code>string group_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getGroupId()
    {
        return $this->group_id;
    }

    /**
     * Required. The group for which events shall be returned.
     *
     * Generated from protobuf field <code>string group_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setGroupId($var)
    {
        GPBUtil::checkString($var, True);
        $this->group_id = $var;

        return $this;
    }

    /**
     * Optional. List only ErrorGroups which belong to a service context that
     * matches the filter.
     * Data for all service contexts is returned if this field is not specified.
     *
     * Generated from protobuf field <code>.google.devtools.clouderrorreporting.v1beta1.ServiceContextFilter service_filter = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\ErrorReporting\V1beta1\ServiceContextFilter
     */
    public function getServiceFilter()
    {
        return isset($this->service_filter) ? $this->service_filter : null;
    }

    public function hasServiceFilter()
    {
        return isset($this->service_filter);
    }

    public function clearServiceFilter()
    {
        unset($this->service_filter);
    }

    /**
     * Optional. List only ErrorGroups which belong to a service context that
     * matches the filter.
     * Data for all service contexts is returned if this field is not specified.
     *
     * Generated from protobuf field <code>.google.devtools.clouderrorreporting.v1beta1.ServiceContextFilter service_filter = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\ErrorReporting\V1beta1\ServiceContextFilter $var
     * @return $this
     */
    public function setServiceFilter($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ErrorReporting\V1beta1\ServiceContextFilter::class);
        $this->service_filter = $var;

        return $this;
    }

    /**
     * Optional. List only data for the given time range.
     * If not set a default time range is used. The field time_range_begin
     * in the response will specify the beginning of this time range.
     *
     * Generated from protobuf field <code>.google.devtools.clouderrorreporting.v1beta1.QueryTimeRange time_range = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\ErrorReporting\V1beta1\QueryTimeRange
     */
    public function getTimeRange()
    {
        return isset($this->time_range) ? $this->time_range : null;
    }

    public function hasTimeRange()
    {
        return isset($this->time_range);
    }

    public function clearTimeRange()
    {
        unset($this->time_range);
    }

    /**
     * Optional. List only data for the given time range.
     * If not set a default time range is used. The field time_range_begin
     * in the response will specify the beginning of this time range.
     *
     * Generated from protobuf field <code>.google.devtools.clouderrorreporting.v1beta1.QueryTimeRange time_range = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\ErrorReporting\V1beta1\QueryTimeRange $var
     * @return $this
     */
    public function setTimeRange($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ErrorReporting\V1beta1\QueryTimeRange::class);
        $this->time_range = $var;

        return $this;
    }

    /**
     * Optional. The maximum number of results to return per response.
     *
     * Generated from protobuf field <code>int32 page_size = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional. The maximum number of results to return per response.
     *
     * Generated from protobuf field <code>int32 page_size = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Optional. A `next_page_token` provided by a previous response.
     *
     * Generated from protobuf field <code>string page_token = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional. A `next_page_token` provided by a previous response.
     *
     * Generated from protobuf field <code>string page_token = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

}

