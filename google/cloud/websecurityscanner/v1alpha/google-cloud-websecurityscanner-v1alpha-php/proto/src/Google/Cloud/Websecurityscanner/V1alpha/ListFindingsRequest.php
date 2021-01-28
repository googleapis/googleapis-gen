<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/websecurityscanner/v1alpha/web_security_scanner.proto

namespace Google\Cloud\Websecurityscanner\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for the `ListFindings` method.
 *
 * Generated from protobuf message <code>google.cloud.websecurityscanner.v1alpha.ListFindingsRequest</code>
 */
class ListFindingsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent resource name, which should be a scan run resource name in the
     * format
     * 'projects/{projectId}/scanConfigs/{scanConfigId}/scanRuns/{scanRunId}'.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The filter expression. The expression must be in the format: <field>
     * <operator> <value>.
     * Supported field: 'finding_type'.
     * Supported operator: '='.
     *
     * Generated from protobuf field <code>string filter = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $filter = '';
    /**
     * A token identifying a page of results to be returned. This should be a
     * `next_page_token` value returned from a previous List request.
     * If unspecified, the first page of results is returned.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     */
    protected $page_token = '';
    /**
     * The maximum number of Findings to return, can be limited by server.
     * If not specified or not positive, the implementation will select a
     * reasonable value.
     *
     * Generated from protobuf field <code>int32 page_size = 4;</code>
     */
    protected $page_size = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent resource name, which should be a scan run resource name in the
     *           format
     *           'projects/{projectId}/scanConfigs/{scanConfigId}/scanRuns/{scanRunId}'.
     *     @type string $filter
     *           Required. The filter expression. The expression must be in the format: <field>
     *           <operator> <value>.
     *           Supported field: 'finding_type'.
     *           Supported operator: '='.
     *     @type string $page_token
     *           A token identifying a page of results to be returned. This should be a
     *           `next_page_token` value returned from a previous List request.
     *           If unspecified, the first page of results is returned.
     *     @type int $page_size
     *           The maximum number of Findings to return, can be limited by server.
     *           If not specified or not positive, the implementation will select a
     *           reasonable value.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Websecurityscanner\V1Alpha\WebSecurityScanner::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent resource name, which should be a scan run resource name in the
     * format
     * 'projects/{projectId}/scanConfigs/{scanConfigId}/scanRuns/{scanRunId}'.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent resource name, which should be a scan run resource name in the
     * format
     * 'projects/{projectId}/scanConfigs/{scanConfigId}/scanRuns/{scanRunId}'.
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
     * Required. The filter expression. The expression must be in the format: <field>
     * <operator> <value>.
     * Supported field: 'finding_type'.
     * Supported operator: '='.
     *
     * Generated from protobuf field <code>string filter = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Required. The filter expression. The expression must be in the format: <field>
     * <operator> <value>.
     * Supported field: 'finding_type'.
     * Supported operator: '='.
     *
     * Generated from protobuf field <code>string filter = 2 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * A token identifying a page of results to be returned. This should be a
     * `next_page_token` value returned from a previous List request.
     * If unspecified, the first page of results is returned.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * A token identifying a page of results to be returned. This should be a
     * `next_page_token` value returned from a previous List request.
     * If unspecified, the first page of results is returned.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
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
     * The maximum number of Findings to return, can be limited by server.
     * If not specified or not positive, the implementation will select a
     * reasonable value.
     *
     * Generated from protobuf field <code>int32 page_size = 4;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * The maximum number of Findings to return, can be limited by server.
     * If not specified or not positive, the implementation will select a
     * reasonable value.
     *
     * Generated from protobuf field <code>int32 page_size = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

}

