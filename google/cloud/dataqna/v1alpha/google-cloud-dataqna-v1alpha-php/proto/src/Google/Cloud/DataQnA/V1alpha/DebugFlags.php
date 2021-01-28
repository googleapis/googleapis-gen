<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataqna/v1alpha/question.proto

namespace Google\Cloud\DataQnA\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuriation of debug flags.
 *
 * Generated from protobuf message <code>google.cloud.dataqna.v1alpha.DebugFlags</code>
 */
class DebugFlags extends \Google\Protobuf\Internal\Message
{
    /**
     * Whether to include the original VAQuery.
     *
     * Generated from protobuf field <code>bool include_va_query = 1;</code>
     */
    protected $include_va_query = false;
    /**
     * Whether to include the original nested VAQuery.
     *
     * Generated from protobuf field <code>bool include_nested_va_query = 2;</code>
     */
    protected $include_nested_va_query = false;
    /**
     * Whether to include the original human interpretation strings generated
     * by Analyza.
     *
     * Generated from protobuf field <code>bool include_human_interpretation = 3;</code>
     */
    protected $include_human_interpretation = false;
    /**
     * Whether to include the Aqua debug response.
     *
     * Generated from protobuf field <code>bool include_aqua_debug_response = 4;</code>
     */
    protected $include_aqua_debug_response = false;
    /**
     * The time in milliseconds from Unix epoch to be used
     * to process the query. This is useful for testing
     * the queries at different time period.
     * If not set or time_override <= 0, then the current
     * time is used.
     *
     * Generated from protobuf field <code>int64 time_override = 5;</code>
     */
    protected $time_override = 0;
    /**
     * Set to true if request is initiated by an internal Google user.
     *
     * Generated from protobuf field <code>bool is_internal_google_user = 6;</code>
     */
    protected $is_internal_google_user = false;
    /**
     * Determines whether cache needs to be ignored. If set to
     * true, cache won't be queried and updated.
     *
     * Generated from protobuf field <code>bool ignore_cache = 7;</code>
     */
    protected $ignore_cache = false;
    /**
     * Whether to include the request/response pair from the call to the
     * EntityIndex for SearchEntities.
     *
     * Generated from protobuf field <code>bool include_search_entities_rpc = 8;</code>
     */
    protected $include_search_entities_rpc = false;
    /**
     * Whether to include the request/response pair from the call to the
     * Annotations service for ListColumnAnnotations.
     *
     * Generated from protobuf field <code>bool include_list_column_annotations_rpc = 9;</code>
     */
    protected $include_list_column_annotations_rpc = false;
    /**
     * Whether to include the entity list passed to Analyza.
     *
     * Generated from protobuf field <code>bool include_virtual_analyst_entities = 10;</code>
     */
    protected $include_virtual_analyst_entities = false;
    /**
     * Whether to include the table list.
     *
     * Generated from protobuf field <code>bool include_table_list = 11;</code>
     */
    protected $include_table_list = false;
    /**
     * Whether to include the domain list.
     *
     * Generated from protobuf field <code>bool include_domain_list = 12;</code>
     */
    protected $include_domain_list = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $include_va_query
     *           Whether to include the original VAQuery.
     *     @type bool $include_nested_va_query
     *           Whether to include the original nested VAQuery.
     *     @type bool $include_human_interpretation
     *           Whether to include the original human interpretation strings generated
     *           by Analyza.
     *     @type bool $include_aqua_debug_response
     *           Whether to include the Aqua debug response.
     *     @type int|string $time_override
     *           The time in milliseconds from Unix epoch to be used
     *           to process the query. This is useful for testing
     *           the queries at different time period.
     *           If not set or time_override <= 0, then the current
     *           time is used.
     *     @type bool $is_internal_google_user
     *           Set to true if request is initiated by an internal Google user.
     *     @type bool $ignore_cache
     *           Determines whether cache needs to be ignored. If set to
     *           true, cache won't be queried and updated.
     *     @type bool $include_search_entities_rpc
     *           Whether to include the request/response pair from the call to the
     *           EntityIndex for SearchEntities.
     *     @type bool $include_list_column_annotations_rpc
     *           Whether to include the request/response pair from the call to the
     *           Annotations service for ListColumnAnnotations.
     *     @type bool $include_virtual_analyst_entities
     *           Whether to include the entity list passed to Analyza.
     *     @type bool $include_table_list
     *           Whether to include the table list.
     *     @type bool $include_domain_list
     *           Whether to include the domain list.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataqna\V1Alpha\Question::initOnce();
        parent::__construct($data);
    }

    /**
     * Whether to include the original VAQuery.
     *
     * Generated from protobuf field <code>bool include_va_query = 1;</code>
     * @return bool
     */
    public function getIncludeVaQuery()
    {
        return $this->include_va_query;
    }

    /**
     * Whether to include the original VAQuery.
     *
     * Generated from protobuf field <code>bool include_va_query = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setIncludeVaQuery($var)
    {
        GPBUtil::checkBool($var);
        $this->include_va_query = $var;

        return $this;
    }

    /**
     * Whether to include the original nested VAQuery.
     *
     * Generated from protobuf field <code>bool include_nested_va_query = 2;</code>
     * @return bool
     */
    public function getIncludeNestedVaQuery()
    {
        return $this->include_nested_va_query;
    }

    /**
     * Whether to include the original nested VAQuery.
     *
     * Generated from protobuf field <code>bool include_nested_va_query = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setIncludeNestedVaQuery($var)
    {
        GPBUtil::checkBool($var);
        $this->include_nested_va_query = $var;

        return $this;
    }

    /**
     * Whether to include the original human interpretation strings generated
     * by Analyza.
     *
     * Generated from protobuf field <code>bool include_human_interpretation = 3;</code>
     * @return bool
     */
    public function getIncludeHumanInterpretation()
    {
        return $this->include_human_interpretation;
    }

    /**
     * Whether to include the original human interpretation strings generated
     * by Analyza.
     *
     * Generated from protobuf field <code>bool include_human_interpretation = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setIncludeHumanInterpretation($var)
    {
        GPBUtil::checkBool($var);
        $this->include_human_interpretation = $var;

        return $this;
    }

    /**
     * Whether to include the Aqua debug response.
     *
     * Generated from protobuf field <code>bool include_aqua_debug_response = 4;</code>
     * @return bool
     */
    public function getIncludeAquaDebugResponse()
    {
        return $this->include_aqua_debug_response;
    }

    /**
     * Whether to include the Aqua debug response.
     *
     * Generated from protobuf field <code>bool include_aqua_debug_response = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setIncludeAquaDebugResponse($var)
    {
        GPBUtil::checkBool($var);
        $this->include_aqua_debug_response = $var;

        return $this;
    }

    /**
     * The time in milliseconds from Unix epoch to be used
     * to process the query. This is useful for testing
     * the queries at different time period.
     * If not set or time_override <= 0, then the current
     * time is used.
     *
     * Generated from protobuf field <code>int64 time_override = 5;</code>
     * @return int|string
     */
    public function getTimeOverride()
    {
        return $this->time_override;
    }

    /**
     * The time in milliseconds from Unix epoch to be used
     * to process the query. This is useful for testing
     * the queries at different time period.
     * If not set or time_override <= 0, then the current
     * time is used.
     *
     * Generated from protobuf field <code>int64 time_override = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTimeOverride($var)
    {
        GPBUtil::checkInt64($var);
        $this->time_override = $var;

        return $this;
    }

    /**
     * Set to true if request is initiated by an internal Google user.
     *
     * Generated from protobuf field <code>bool is_internal_google_user = 6;</code>
     * @return bool
     */
    public function getIsInternalGoogleUser()
    {
        return $this->is_internal_google_user;
    }

    /**
     * Set to true if request is initiated by an internal Google user.
     *
     * Generated from protobuf field <code>bool is_internal_google_user = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsInternalGoogleUser($var)
    {
        GPBUtil::checkBool($var);
        $this->is_internal_google_user = $var;

        return $this;
    }

    /**
     * Determines whether cache needs to be ignored. If set to
     * true, cache won't be queried and updated.
     *
     * Generated from protobuf field <code>bool ignore_cache = 7;</code>
     * @return bool
     */
    public function getIgnoreCache()
    {
        return $this->ignore_cache;
    }

    /**
     * Determines whether cache needs to be ignored. If set to
     * true, cache won't be queried and updated.
     *
     * Generated from protobuf field <code>bool ignore_cache = 7;</code>
     * @param bool $var
     * @return $this
     */
    public function setIgnoreCache($var)
    {
        GPBUtil::checkBool($var);
        $this->ignore_cache = $var;

        return $this;
    }

    /**
     * Whether to include the request/response pair from the call to the
     * EntityIndex for SearchEntities.
     *
     * Generated from protobuf field <code>bool include_search_entities_rpc = 8;</code>
     * @return bool
     */
    public function getIncludeSearchEntitiesRpc()
    {
        return $this->include_search_entities_rpc;
    }

    /**
     * Whether to include the request/response pair from the call to the
     * EntityIndex for SearchEntities.
     *
     * Generated from protobuf field <code>bool include_search_entities_rpc = 8;</code>
     * @param bool $var
     * @return $this
     */
    public function setIncludeSearchEntitiesRpc($var)
    {
        GPBUtil::checkBool($var);
        $this->include_search_entities_rpc = $var;

        return $this;
    }

    /**
     * Whether to include the request/response pair from the call to the
     * Annotations service for ListColumnAnnotations.
     *
     * Generated from protobuf field <code>bool include_list_column_annotations_rpc = 9;</code>
     * @return bool
     */
    public function getIncludeListColumnAnnotationsRpc()
    {
        return $this->include_list_column_annotations_rpc;
    }

    /**
     * Whether to include the request/response pair from the call to the
     * Annotations service for ListColumnAnnotations.
     *
     * Generated from protobuf field <code>bool include_list_column_annotations_rpc = 9;</code>
     * @param bool $var
     * @return $this
     */
    public function setIncludeListColumnAnnotationsRpc($var)
    {
        GPBUtil::checkBool($var);
        $this->include_list_column_annotations_rpc = $var;

        return $this;
    }

    /**
     * Whether to include the entity list passed to Analyza.
     *
     * Generated from protobuf field <code>bool include_virtual_analyst_entities = 10;</code>
     * @return bool
     */
    public function getIncludeVirtualAnalystEntities()
    {
        return $this->include_virtual_analyst_entities;
    }

    /**
     * Whether to include the entity list passed to Analyza.
     *
     * Generated from protobuf field <code>bool include_virtual_analyst_entities = 10;</code>
     * @param bool $var
     * @return $this
     */
    public function setIncludeVirtualAnalystEntities($var)
    {
        GPBUtil::checkBool($var);
        $this->include_virtual_analyst_entities = $var;

        return $this;
    }

    /**
     * Whether to include the table list.
     *
     * Generated from protobuf field <code>bool include_table_list = 11;</code>
     * @return bool
     */
    public function getIncludeTableList()
    {
        return $this->include_table_list;
    }

    /**
     * Whether to include the table list.
     *
     * Generated from protobuf field <code>bool include_table_list = 11;</code>
     * @param bool $var
     * @return $this
     */
    public function setIncludeTableList($var)
    {
        GPBUtil::checkBool($var);
        $this->include_table_list = $var;

        return $this;
    }

    /**
     * Whether to include the domain list.
     *
     * Generated from protobuf field <code>bool include_domain_list = 12;</code>
     * @return bool
     */
    public function getIncludeDomainList()
    {
        return $this->include_domain_list;
    }

    /**
     * Whether to include the domain list.
     *
     * Generated from protobuf field <code>bool include_domain_list = 12;</code>
     * @param bool $var
     * @return $this
     */
    public function setIncludeDomainList($var)
    {
        GPBUtil::checkBool($var);
        $this->include_domain_list = $var;

        return $this;
    }

}

