<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/reservation/v1beta1/reservation.proto

namespace Google\Cloud\BigQuery\Reservation\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A Assignment allows a project to submit jobs
 * of a certain type using slots from the specified reservation.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.reservation.v1beta1.Assignment</code>
 */
class Assignment extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Name of the resource. E.g.:
     * `projects/myproject/locations/US/reservations/team1-prod/assignments/123`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $name = '';
    /**
     * The resource which will use the reservation. E.g.
     * `projects/myproject`, `folders/123`, or `organizations/456`.
     *
     * Generated from protobuf field <code>string assignee = 4;</code>
     */
    protected $assignee = '';
    /**
     * Which type of jobs will use the reservation.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.reservation.v1beta1.Assignment.JobType job_type = 3;</code>
     */
    protected $job_type = 0;
    /**
     * Output only. State of the assignment.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.reservation.v1beta1.Assignment.State state = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $state = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. Name of the resource. E.g.:
     *           `projects/myproject/locations/US/reservations/team1-prod/assignments/123`.
     *     @type string $assignee
     *           The resource which will use the reservation. E.g.
     *           `projects/myproject`, `folders/123`, or `organizations/456`.
     *     @type int $job_type
     *           Which type of jobs will use the reservation.
     *     @type int $state
     *           Output only. State of the assignment.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Reservation\V1Beta1\Reservation::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Name of the resource. E.g.:
     * `projects/myproject/locations/US/reservations/team1-prod/assignments/123`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. Name of the resource. E.g.:
     * `projects/myproject/locations/US/reservations/team1-prod/assignments/123`.
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
     * The resource which will use the reservation. E.g.
     * `projects/myproject`, `folders/123`, or `organizations/456`.
     *
     * Generated from protobuf field <code>string assignee = 4;</code>
     * @return string
     */
    public function getAssignee()
    {
        return $this->assignee;
    }

    /**
     * The resource which will use the reservation. E.g.
     * `projects/myproject`, `folders/123`, or `organizations/456`.
     *
     * Generated from protobuf field <code>string assignee = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setAssignee($var)
    {
        GPBUtil::checkString($var, True);
        $this->assignee = $var;

        return $this;
    }

    /**
     * Which type of jobs will use the reservation.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.reservation.v1beta1.Assignment.JobType job_type = 3;</code>
     * @return int
     */
    public function getJobType()
    {
        return $this->job_type;
    }

    /**
     * Which type of jobs will use the reservation.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.reservation.v1beta1.Assignment.JobType job_type = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setJobType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\BigQuery\Reservation\V1beta1\Assignment\JobType::class);
        $this->job_type = $var;

        return $this;
    }

    /**
     * Output only. State of the assignment.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.reservation.v1beta1.Assignment.State state = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. State of the assignment.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.reservation.v1beta1.Assignment.State state = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\BigQuery\Reservation\V1beta1\Assignment\State::class);
        $this->state = $var;

        return $this;
    }

}

