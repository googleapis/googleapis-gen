<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v5/common/criteria.proto

namespace Google\Ads\GoogleAds\V5\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents an AdSchedule criterion.
 * AdSchedule is specified as the day of the week and a time interval
 * within which ads will be shown.
 * No more than six AdSchedules can be added for the same day.
 *
 * Generated from protobuf message <code>google.ads.googleads.v5.common.AdScheduleInfo</code>
 */
class AdScheduleInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Minutes after the start hour at which this schedule starts.
     * This field is required for CREATE operations and is prohibited on UPDATE
     * operations.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v5.enums.MinuteOfHourEnum.MinuteOfHour start_minute = 1;</code>
     */
    protected $start_minute = 0;
    /**
     * Minutes after the end hour at which this schedule ends. The schedule is
     * exclusive of the end minute.
     * This field is required for CREATE operations and is prohibited on UPDATE
     * operations.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v5.enums.MinuteOfHourEnum.MinuteOfHour end_minute = 2;</code>
     */
    protected $end_minute = 0;
    /**
     * Starting hour in 24 hour time.
     * This field must be between 0 and 23, inclusive.
     * This field is required for CREATE operations and is prohibited on UPDATE
     * operations.
     *
     * Generated from protobuf field <code>int32 start_hour = 6;</code>
     */
    protected $start_hour = null;
    /**
     * Ending hour in 24 hour time; 24 signifies end of the day.
     * This field must be between 0 and 24, inclusive.
     * This field is required for CREATE operations and is prohibited on UPDATE
     * operations.
     *
     * Generated from protobuf field <code>int32 end_hour = 7;</code>
     */
    protected $end_hour = null;
    /**
     * Day of the week the schedule applies to.
     * This field is required for CREATE operations and is prohibited on UPDATE
     * operations.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v5.enums.DayOfWeekEnum.DayOfWeek day_of_week = 5;</code>
     */
    protected $day_of_week = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $start_minute
     *           Minutes after the start hour at which this schedule starts.
     *           This field is required for CREATE operations and is prohibited on UPDATE
     *           operations.
     *     @type int $end_minute
     *           Minutes after the end hour at which this schedule ends. The schedule is
     *           exclusive of the end minute.
     *           This field is required for CREATE operations and is prohibited on UPDATE
     *           operations.
     *     @type int $start_hour
     *           Starting hour in 24 hour time.
     *           This field must be between 0 and 23, inclusive.
     *           This field is required for CREATE operations and is prohibited on UPDATE
     *           operations.
     *     @type int $end_hour
     *           Ending hour in 24 hour time; 24 signifies end of the day.
     *           This field must be between 0 and 24, inclusive.
     *           This field is required for CREATE operations and is prohibited on UPDATE
     *           operations.
     *     @type int $day_of_week
     *           Day of the week the schedule applies to.
     *           This field is required for CREATE operations and is prohibited on UPDATE
     *           operations.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V5\Common\Criteria::initOnce();
        parent::__construct($data);
    }

    /**
     * Minutes after the start hour at which this schedule starts.
     * This field is required for CREATE operations and is prohibited on UPDATE
     * operations.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v5.enums.MinuteOfHourEnum.MinuteOfHour start_minute = 1;</code>
     * @return int
     */
    public function getStartMinute()
    {
        return $this->start_minute;
    }

    /**
     * Minutes after the start hour at which this schedule starts.
     * This field is required for CREATE operations and is prohibited on UPDATE
     * operations.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v5.enums.MinuteOfHourEnum.MinuteOfHour start_minute = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setStartMinute($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V5\Enums\MinuteOfHourEnum\MinuteOfHour::class);
        $this->start_minute = $var;

        return $this;
    }

    /**
     * Minutes after the end hour at which this schedule ends. The schedule is
     * exclusive of the end minute.
     * This field is required for CREATE operations and is prohibited on UPDATE
     * operations.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v5.enums.MinuteOfHourEnum.MinuteOfHour end_minute = 2;</code>
     * @return int
     */
    public function getEndMinute()
    {
        return $this->end_minute;
    }

    /**
     * Minutes after the end hour at which this schedule ends. The schedule is
     * exclusive of the end minute.
     * This field is required for CREATE operations and is prohibited on UPDATE
     * operations.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v5.enums.MinuteOfHourEnum.MinuteOfHour end_minute = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setEndMinute($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V5\Enums\MinuteOfHourEnum\MinuteOfHour::class);
        $this->end_minute = $var;

        return $this;
    }

    /**
     * Starting hour in 24 hour time.
     * This field must be between 0 and 23, inclusive.
     * This field is required for CREATE operations and is prohibited on UPDATE
     * operations.
     *
     * Generated from protobuf field <code>int32 start_hour = 6;</code>
     * @return int
     */
    public function getStartHour()
    {
        return isset($this->start_hour) ? $this->start_hour : 0;
    }

    public function hasStartHour()
    {
        return isset($this->start_hour);
    }

    public function clearStartHour()
    {
        unset($this->start_hour);
    }

    /**
     * Starting hour in 24 hour time.
     * This field must be between 0 and 23, inclusive.
     * This field is required for CREATE operations and is prohibited on UPDATE
     * operations.
     *
     * Generated from protobuf field <code>int32 start_hour = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setStartHour($var)
    {
        GPBUtil::checkInt32($var);
        $this->start_hour = $var;

        return $this;
    }

    /**
     * Ending hour in 24 hour time; 24 signifies end of the day.
     * This field must be between 0 and 24, inclusive.
     * This field is required for CREATE operations and is prohibited on UPDATE
     * operations.
     *
     * Generated from protobuf field <code>int32 end_hour = 7;</code>
     * @return int
     */
    public function getEndHour()
    {
        return isset($this->end_hour) ? $this->end_hour : 0;
    }

    public function hasEndHour()
    {
        return isset($this->end_hour);
    }

    public function clearEndHour()
    {
        unset($this->end_hour);
    }

    /**
     * Ending hour in 24 hour time; 24 signifies end of the day.
     * This field must be between 0 and 24, inclusive.
     * This field is required for CREATE operations and is prohibited on UPDATE
     * operations.
     *
     * Generated from protobuf field <code>int32 end_hour = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setEndHour($var)
    {
        GPBUtil::checkInt32($var);
        $this->end_hour = $var;

        return $this;
    }

    /**
     * Day of the week the schedule applies to.
     * This field is required for CREATE operations and is prohibited on UPDATE
     * operations.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v5.enums.DayOfWeekEnum.DayOfWeek day_of_week = 5;</code>
     * @return int
     */
    public function getDayOfWeek()
    {
        return $this->day_of_week;
    }

    /**
     * Day of the week the schedule applies to.
     * This field is required for CREATE operations and is prohibited on UPDATE
     * operations.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v5.enums.DayOfWeekEnum.DayOfWeek day_of_week = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setDayOfWeek($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V5\Enums\DayOfWeekEnum\DayOfWeek::class);
        $this->day_of_week = $var;

        return $this;
    }

}

