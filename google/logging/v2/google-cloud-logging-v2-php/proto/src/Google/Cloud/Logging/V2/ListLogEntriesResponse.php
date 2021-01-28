<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/logging/v2/logging.proto

namespace Google\Cloud\Logging\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Result returned from `ListLogEntries`.
 *
 * Generated from protobuf message <code>google.logging.v2.ListLogEntriesResponse</code>
 */
class ListLogEntriesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * A list of log entries.  If `entries` is empty, `nextPageToken` may still be
     * returned, indicating that more entries may exist.  See `nextPageToken` for
     * more information.
     *
     * Generated from protobuf field <code>repeated .google.logging.v2.LogEntry entries = 1;</code>
     */
    private $entries;
    /**
     * If there might be more results than those appearing in this response, then
     * `nextPageToken` is included.  To get the next set of results, call this
     * method again using the value of `nextPageToken` as `pageToken`.
     * If a value for `next_page_token` appears and the `entries` field is empty,
     * it means that the search found no log entries so far but it did not have
     * time to search all the possible log entries.  Retry the method with this
     * value for `page_token` to continue the search.  Alternatively, consider
     * speeding up the search by changing your filter to specify a single log name
     * or resource type, or to narrow the time range of the search.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Logging\V2\LogEntry[]|\Google\Protobuf\Internal\RepeatedField $entries
     *           A list of log entries.  If `entries` is empty, `nextPageToken` may still be
     *           returned, indicating that more entries may exist.  See `nextPageToken` for
     *           more information.
     *     @type string $next_page_token
     *           If there might be more results than those appearing in this response, then
     *           `nextPageToken` is included.  To get the next set of results, call this
     *           method again using the value of `nextPageToken` as `pageToken`.
     *           If a value for `next_page_token` appears and the `entries` field is empty,
     *           it means that the search found no log entries so far but it did not have
     *           time to search all the possible log entries.  Retry the method with this
     *           value for `page_token` to continue the search.  Alternatively, consider
     *           speeding up the search by changing your filter to specify a single log name
     *           or resource type, or to narrow the time range of the search.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Logging\V2\Logging::initOnce();
        parent::__construct($data);
    }

    /**
     * A list of log entries.  If `entries` is empty, `nextPageToken` may still be
     * returned, indicating that more entries may exist.  See `nextPageToken` for
     * more information.
     *
     * Generated from protobuf field <code>repeated .google.logging.v2.LogEntry entries = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEntries()
    {
        return $this->entries;
    }

    /**
     * A list of log entries.  If `entries` is empty, `nextPageToken` may still be
     * returned, indicating that more entries may exist.  See `nextPageToken` for
     * more information.
     *
     * Generated from protobuf field <code>repeated .google.logging.v2.LogEntry entries = 1;</code>
     * @param \Google\Cloud\Logging\V2\LogEntry[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEntries($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Logging\V2\LogEntry::class);
        $this->entries = $arr;

        return $this;
    }

    /**
     * If there might be more results than those appearing in this response, then
     * `nextPageToken` is included.  To get the next set of results, call this
     * method again using the value of `nextPageToken` as `pageToken`.
     * If a value for `next_page_token` appears and the `entries` field is empty,
     * it means that the search found no log entries so far but it did not have
     * time to search all the possible log entries.  Retry the method with this
     * value for `page_token` to continue the search.  Alternatively, consider
     * speeding up the search by changing your filter to specify a single log name
     * or resource type, or to narrow the time range of the search.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * If there might be more results than those appearing in this response, then
     * `nextPageToken` is included.  To get the next set of results, call this
     * method again using the value of `nextPageToken` as `pageToken`.
     * If a value for `next_page_token` appears and the `entries` field is empty,
     * it means that the search found no log entries so far but it did not have
     * time to search all the possible log entries.  Retry the method with this
     * value for `page_token` to continue the search.  Alternatively, consider
     * speeding up the search by changing your filter to specify a single log name
     * or resource type, or to narrow the time range of the search.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

