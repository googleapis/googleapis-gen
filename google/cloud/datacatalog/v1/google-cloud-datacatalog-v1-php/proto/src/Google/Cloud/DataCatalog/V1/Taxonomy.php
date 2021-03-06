<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/v1/policytagmanager.proto

namespace Google\Cloud\DataCatalog\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A taxonomy is a collection of hierarchical policy tags that classify data
 * along a common axis. For instance a "data sensitivity" taxonomy could contain
 * the following policy tags:
 * ```
 * + PII
 *   + Account number
 *   + Age
 *   + SSN
 *   + Zipcode
 * + Financials
 *   + Revenue
 * ```
 * A "data origin" taxonomy could contain the following policy tags:
 * ```
 * + User data
 * + Employee data
 * + Partner data
 * + Public data
 * ```
 *
 * Generated from protobuf message <code>google.cloud.datacatalog.v1.Taxonomy</code>
 */
class Taxonomy extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Resource name of this taxonomy in format:
     * "projects/{project_number}/locations/{location_id}/taxonomies/{taxonomy_id}".
     * Note that taxonomy_id's are unique and generated by Policy Tag Manager.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $name = '';
    /**
     * Required. User-defined name of this taxonomy. It must: contain only unicode letters,
     * numbers, underscores, dashes and spaces; not start or end with spaces; and
     * be at most 200 bytes long when encoded in UTF-8.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $display_name = '';
    /**
     * Optional. Description of this taxonomy. It must: contain only unicode characters,
     * tabs, newlines, carriage returns and page breaks; and be at most 2000 bytes
     * long when encoded in UTF-8. If not set, defaults to an empty description.
     *
     * Generated from protobuf field <code>string description = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $description = '';
    /**
     * Output only. Number of policy tags contained in this taxonomy.
     *
     * Generated from protobuf field <code>int32 policy_tag_count = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $policy_tag_count = 0;
    /**
     * Output only. Timestamps about this taxonomy. Only create_time and update_time are used.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.SystemTimestamps taxonomy_timestamps = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $taxonomy_timestamps = null;
    /**
     * Optional. A list of policy types that are activated for this taxonomy. If not set,
     * defaults to an empty list.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datacatalog.v1.Taxonomy.PolicyType activated_policy_types = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $activated_policy_types;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. Resource name of this taxonomy in format:
     *           "projects/{project_number}/locations/{location_id}/taxonomies/{taxonomy_id}".
     *           Note that taxonomy_id's are unique and generated by Policy Tag Manager.
     *     @type string $display_name
     *           Required. User-defined name of this taxonomy. It must: contain only unicode letters,
     *           numbers, underscores, dashes and spaces; not start or end with spaces; and
     *           be at most 200 bytes long when encoded in UTF-8.
     *     @type string $description
     *           Optional. Description of this taxonomy. It must: contain only unicode characters,
     *           tabs, newlines, carriage returns and page breaks; and be at most 2000 bytes
     *           long when encoded in UTF-8. If not set, defaults to an empty description.
     *     @type int $policy_tag_count
     *           Output only. Number of policy tags contained in this taxonomy.
     *     @type \Google\Cloud\DataCatalog\V1\SystemTimestamps $taxonomy_timestamps
     *           Output only. Timestamps about this taxonomy. Only create_time and update_time are used.
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $activated_policy_types
     *           Optional. A list of policy types that are activated for this taxonomy. If not set,
     *           defaults to an empty list.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datacatalog\V1\Policytagmanager::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Resource name of this taxonomy in format:
     * "projects/{project_number}/locations/{location_id}/taxonomies/{taxonomy_id}".
     * Note that taxonomy_id's are unique and generated by Policy Tag Manager.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. Resource name of this taxonomy in format:
     * "projects/{project_number}/locations/{location_id}/taxonomies/{taxonomy_id}".
     * Note that taxonomy_id's are unique and generated by Policy Tag Manager.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Required. User-defined name of this taxonomy. It must: contain only unicode letters,
     * numbers, underscores, dashes and spaces; not start or end with spaces; and
     * be at most 200 bytes long when encoded in UTF-8.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Required. User-defined name of this taxonomy. It must: contain only unicode letters,
     * numbers, underscores, dashes and spaces; not start or end with spaces; and
     * be at most 200 bytes long when encoded in UTF-8.
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
     * Optional. Description of this taxonomy. It must: contain only unicode characters,
     * tabs, newlines, carriage returns and page breaks; and be at most 2000 bytes
     * long when encoded in UTF-8. If not set, defaults to an empty description.
     *
     * Generated from protobuf field <code>string description = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Optional. Description of this taxonomy. It must: contain only unicode characters,
     * tabs, newlines, carriage returns and page breaks; and be at most 2000 bytes
     * long when encoded in UTF-8. If not set, defaults to an empty description.
     *
     * Generated from protobuf field <code>string description = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Output only. Number of policy tags contained in this taxonomy.
     *
     * Generated from protobuf field <code>int32 policy_tag_count = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getPolicyTagCount()
    {
        return $this->policy_tag_count;
    }

    /**
     * Output only. Number of policy tags contained in this taxonomy.
     *
     * Generated from protobuf field <code>int32 policy_tag_count = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setPolicyTagCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->policy_tag_count = $var;

        return $this;
    }

    /**
     * Output only. Timestamps about this taxonomy. Only create_time and update_time are used.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.SystemTimestamps taxonomy_timestamps = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\DataCatalog\V1\SystemTimestamps|null
     */
    public function getTaxonomyTimestamps()
    {
        return isset($this->taxonomy_timestamps) ? $this->taxonomy_timestamps : null;
    }

    public function hasTaxonomyTimestamps()
    {
        return isset($this->taxonomy_timestamps);
    }

    public function clearTaxonomyTimestamps()
    {
        unset($this->taxonomy_timestamps);
    }

    /**
     * Output only. Timestamps about this taxonomy. Only create_time and update_time are used.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.SystemTimestamps taxonomy_timestamps = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\DataCatalog\V1\SystemTimestamps $var
     * @return $this
     */
    public function setTaxonomyTimestamps($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DataCatalog\V1\SystemTimestamps::class);
        $this->taxonomy_timestamps = $var;

        return $this;
    }

    /**
     * Optional. A list of policy types that are activated for this taxonomy. If not set,
     * defaults to an empty list.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datacatalog.v1.Taxonomy.PolicyType activated_policy_types = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getActivatedPolicyTypes()
    {
        return $this->activated_policy_types;
    }

    /**
     * Optional. A list of policy types that are activated for this taxonomy. If not set,
     * defaults to an empty list.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datacatalog.v1.Taxonomy.PolicyType activated_policy_types = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setActivatedPolicyTypes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Cloud\DataCatalog\V1\Taxonomy\PolicyType::class);
        $this->activated_policy_types = $arr;

        return $this;
    }

}

