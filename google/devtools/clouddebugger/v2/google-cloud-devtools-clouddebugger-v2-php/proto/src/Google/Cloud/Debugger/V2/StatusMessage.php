<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/clouddebugger/v2/data.proto

namespace Google\Cloud\Debugger\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a contextual status message.
 * The message can indicate an error or informational status, and refer to
 * specific parts of the containing object.
 * For example, the `Breakpoint.status` field can indicate an error referring
 * to the `BREAKPOINT_SOURCE_LOCATION` with the message `Location not found`.
 *
 * Generated from protobuf message <code>google.devtools.clouddebugger.v2.StatusMessage</code>
 */
class StatusMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Distinguishes errors from informational messages.
     *
     * Generated from protobuf field <code>bool is_error = 1;</code>
     */
    protected $is_error = false;
    /**
     * Reference to which the message applies.
     *
     * Generated from protobuf field <code>.google.devtools.clouddebugger.v2.StatusMessage.Reference refers_to = 2;</code>
     */
    protected $refers_to = 0;
    /**
     * Status message text.
     *
     * Generated from protobuf field <code>.google.devtools.clouddebugger.v2.FormatMessage description = 3;</code>
     */
    protected $description = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $is_error
     *           Distinguishes errors from informational messages.
     *     @type int $refers_to
     *           Reference to which the message applies.
     *     @type \Google\Cloud\Debugger\V2\FormatMessage $description
     *           Status message text.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Clouddebugger\V2\Data::initOnce();
        parent::__construct($data);
    }

    /**
     * Distinguishes errors from informational messages.
     *
     * Generated from protobuf field <code>bool is_error = 1;</code>
     * @return bool
     */
    public function getIsError()
    {
        return $this->is_error;
    }

    /**
     * Distinguishes errors from informational messages.
     *
     * Generated from protobuf field <code>bool is_error = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsError($var)
    {
        GPBUtil::checkBool($var);
        $this->is_error = $var;

        return $this;
    }

    /**
     * Reference to which the message applies.
     *
     * Generated from protobuf field <code>.google.devtools.clouddebugger.v2.StatusMessage.Reference refers_to = 2;</code>
     * @return int
     */
    public function getRefersTo()
    {
        return $this->refers_to;
    }

    /**
     * Reference to which the message applies.
     *
     * Generated from protobuf field <code>.google.devtools.clouddebugger.v2.StatusMessage.Reference refers_to = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setRefersTo($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Debugger\V2\StatusMessage\Reference::class);
        $this->refers_to = $var;

        return $this;
    }

    /**
     * Status message text.
     *
     * Generated from protobuf field <code>.google.devtools.clouddebugger.v2.FormatMessage description = 3;</code>
     * @return \Google\Cloud\Debugger\V2\FormatMessage
     */
    public function getDescription()
    {
        return isset($this->description) ? $this->description : null;
    }

    public function hasDescription()
    {
        return isset($this->description);
    }

    public function clearDescription()
    {
        unset($this->description);
    }

    /**
     * Status message text.
     *
     * Generated from protobuf field <code>.google.devtools.clouddebugger.v2.FormatMessage description = 3;</code>
     * @param \Google\Cloud\Debugger\V2\FormatMessage $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Debugger\V2\FormatMessage::class);
        $this->description = $var;

        return $this;
    }

}

