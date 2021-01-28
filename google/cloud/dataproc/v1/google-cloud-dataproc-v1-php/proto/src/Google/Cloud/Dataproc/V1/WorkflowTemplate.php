<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/workflow_templates.proto

namespace Google\Cloud\Dataproc\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A Dataproc workflow template resource.
 *
 * Generated from protobuf message <code>google.cloud.dataproc.v1.WorkflowTemplate</code>
 */
class WorkflowTemplate extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $id = '';
    /**
     * Output only. The resource name of the workflow template, as described
     * in https://cloud.google.com/apis/design/resource_names.
     * * For `projects.regions.workflowTemplates`, the resource name of the
     *   template has the following format:
     *   `projects/{project_id}/regions/{region}/workflowTemplates/{template_id}`
     * * For `projects.locations.workflowTemplates`, the resource name of the
     *   template has the following format:
     *   `projects/{project_id}/locations/{location}/workflowTemplates/{template_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $name = '';
    /**
     * Optional. Used to perform a consistent read-modify-write.
     * This field should be left blank for a `CreateWorkflowTemplate` request. It
     * is required for an `UpdateWorkflowTemplate` request, and must match the
     * current server version. A typical update template flow would fetch the
     * current template with a `GetWorkflowTemplate` request, which will return
     * the current template with the `version` field filled in with the
     * current server version. The user updates other fields in the template,
     * then returns it as part of the `UpdateWorkflowTemplate` request.
     *
     * Generated from protobuf field <code>int32 version = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $version = 0;
    /**
     * Output only. The time template was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. The time template was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $update_time = null;
    /**
     * Optional. The labels to associate with this template. These labels
     * will be propagated to all jobs and clusters created by the workflow
     * instance.
     * Label **keys** must contain 1 to 63 characters, and must conform to
     * [RFC 1035](https://www.ietf.org/rfc/rfc1035.txt).
     * Label **values** may be empty, but, if present, must contain 1 to 63
     * characters, and must conform to
     * [RFC 1035](https://www.ietf.org/rfc/rfc1035.txt).
     * No more than 32 labels can be associated with a template.
     *
     * Generated from protobuf field <code>map<string, string> labels = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $labels;
    /**
     * Required. WorkflowTemplate scheduling information.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.WorkflowTemplatePlacement placement = 7 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $placement = null;
    /**
     * Required. The Directed Acyclic Graph of Jobs to submit.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataproc.v1.OrderedJob jobs = 8 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $jobs;
    /**
     * Optional. Template parameters whose values are substituted into the
     * template. Values for parameters must be provided when the template is
     * instantiated.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataproc.v1.TemplateParameter parameters = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $parameters;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type string $name
     *           Output only. The resource name of the workflow template, as described
     *           in https://cloud.google.com/apis/design/resource_names.
     *           * For `projects.regions.workflowTemplates`, the resource name of the
     *             template has the following format:
     *             `projects/{project_id}/regions/{region}/workflowTemplates/{template_id}`
     *           * For `projects.locations.workflowTemplates`, the resource name of the
     *             template has the following format:
     *             `projects/{project_id}/locations/{location}/workflowTemplates/{template_id}`
     *     @type int $version
     *           Optional. Used to perform a consistent read-modify-write.
     *           This field should be left blank for a `CreateWorkflowTemplate` request. It
     *           is required for an `UpdateWorkflowTemplate` request, and must match the
     *           current server version. A typical update template flow would fetch the
     *           current template with a `GetWorkflowTemplate` request, which will return
     *           the current template with the `version` field filled in with the
     *           current server version. The user updates other fields in the template,
     *           then returns it as part of the `UpdateWorkflowTemplate` request.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The time template was created.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. The time template was last updated.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Optional. The labels to associate with this template. These labels
     *           will be propagated to all jobs and clusters created by the workflow
     *           instance.
     *           Label **keys** must contain 1 to 63 characters, and must conform to
     *           [RFC 1035](https://www.ietf.org/rfc/rfc1035.txt).
     *           Label **values** may be empty, but, if present, must contain 1 to 63
     *           characters, and must conform to
     *           [RFC 1035](https://www.ietf.org/rfc/rfc1035.txt).
     *           No more than 32 labels can be associated with a template.
     *     @type \Google\Cloud\Dataproc\V1\WorkflowTemplatePlacement $placement
     *           Required. WorkflowTemplate scheduling information.
     *     @type \Google\Cloud\Dataproc\V1\OrderedJob[]|\Google\Protobuf\Internal\RepeatedField $jobs
     *           Required. The Directed Acyclic Graph of Jobs to submit.
     *     @type \Google\Cloud\Dataproc\V1\TemplateParameter[]|\Google\Protobuf\Internal\RepeatedField $parameters
     *           Optional. Template parameters whose values are substituted into the
     *           template. Values for parameters must be provided when the template is
     *           instantiated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataproc\V1\WorkflowTemplates::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>string id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * Output only. The resource name of the workflow template, as described
     * in https://cloud.google.com/apis/design/resource_names.
     * * For `projects.regions.workflowTemplates`, the resource name of the
     *   template has the following format:
     *   `projects/{project_id}/regions/{region}/workflowTemplates/{template_id}`
     * * For `projects.locations.workflowTemplates`, the resource name of the
     *   template has the following format:
     *   `projects/{project_id}/locations/{location}/workflowTemplates/{template_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The resource name of the workflow template, as described
     * in https://cloud.google.com/apis/design/resource_names.
     * * For `projects.regions.workflowTemplates`, the resource name of the
     *   template has the following format:
     *   `projects/{project_id}/regions/{region}/workflowTemplates/{template_id}`
     * * For `projects.locations.workflowTemplates`, the resource name of the
     *   template has the following format:
     *   `projects/{project_id}/locations/{location}/workflowTemplates/{template_id}`
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
     * Optional. Used to perform a consistent read-modify-write.
     * This field should be left blank for a `CreateWorkflowTemplate` request. It
     * is required for an `UpdateWorkflowTemplate` request, and must match the
     * current server version. A typical update template flow would fetch the
     * current template with a `GetWorkflowTemplate` request, which will return
     * the current template with the `version` field filled in with the
     * current server version. The user updates other fields in the template,
     * then returns it as part of the `UpdateWorkflowTemplate` request.
     *
     * Generated from protobuf field <code>int32 version = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Optional. Used to perform a consistent read-modify-write.
     * This field should be left blank for a `CreateWorkflowTemplate` request. It
     * is required for an `UpdateWorkflowTemplate` request, and must match the
     * current server version. A typical update template flow would fetch the
     * current template with a `GetWorkflowTemplate` request, which will return
     * the current template with the `version` field filled in with the
     * current server version. The user updates other fields in the template,
     * then returns it as part of the `UpdateWorkflowTemplate` request.
     *
     * Generated from protobuf field <code>int32 version = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkInt32($var);
        $this->version = $var;

        return $this;
    }

    /**
     * Output only. The time template was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. The time template was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. The time template was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getUpdateTime()
    {
        return isset($this->update_time) ? $this->update_time : null;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. The time template was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Optional. The labels to associate with this template. These labels
     * will be propagated to all jobs and clusters created by the workflow
     * instance.
     * Label **keys** must contain 1 to 63 characters, and must conform to
     * [RFC 1035](https://www.ietf.org/rfc/rfc1035.txt).
     * Label **values** may be empty, but, if present, must contain 1 to 63
     * characters, and must conform to
     * [RFC 1035](https://www.ietf.org/rfc/rfc1035.txt).
     * No more than 32 labels can be associated with a template.
     *
     * Generated from protobuf field <code>map<string, string> labels = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Optional. The labels to associate with this template. These labels
     * will be propagated to all jobs and clusters created by the workflow
     * instance.
     * Label **keys** must contain 1 to 63 characters, and must conform to
     * [RFC 1035](https://www.ietf.org/rfc/rfc1035.txt).
     * Label **values** may be empty, but, if present, must contain 1 to 63
     * characters, and must conform to
     * [RFC 1035](https://www.ietf.org/rfc/rfc1035.txt).
     * No more than 32 labels can be associated with a template.
     *
     * Generated from protobuf field <code>map<string, string> labels = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

    /**
     * Required. WorkflowTemplate scheduling information.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.WorkflowTemplatePlacement placement = 7 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Dataproc\V1\WorkflowTemplatePlacement
     */
    public function getPlacement()
    {
        return isset($this->placement) ? $this->placement : null;
    }

    public function hasPlacement()
    {
        return isset($this->placement);
    }

    public function clearPlacement()
    {
        unset($this->placement);
    }

    /**
     * Required. WorkflowTemplate scheduling information.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.WorkflowTemplatePlacement placement = 7 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Dataproc\V1\WorkflowTemplatePlacement $var
     * @return $this
     */
    public function setPlacement($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1\WorkflowTemplatePlacement::class);
        $this->placement = $var;

        return $this;
    }

    /**
     * Required. The Directed Acyclic Graph of Jobs to submit.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataproc.v1.OrderedJob jobs = 8 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getJobs()
    {
        return $this->jobs;
    }

    /**
     * Required. The Directed Acyclic Graph of Jobs to submit.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataproc.v1.OrderedJob jobs = 8 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Dataproc\V1\OrderedJob[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setJobs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dataproc\V1\OrderedJob::class);
        $this->jobs = $arr;

        return $this;
    }

    /**
     * Optional. Template parameters whose values are substituted into the
     * template. Values for parameters must be provided when the template is
     * instantiated.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataproc.v1.TemplateParameter parameters = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Optional. Template parameters whose values are substituted into the
     * template. Values for parameters must be provided when the template is
     * instantiated.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataproc.v1.TemplateParameter parameters = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dataproc\V1\TemplateParameter[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setParameters($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dataproc\V1\TemplateParameter::class);
        $this->parameters = $arr;

        return $this;
    }

}

