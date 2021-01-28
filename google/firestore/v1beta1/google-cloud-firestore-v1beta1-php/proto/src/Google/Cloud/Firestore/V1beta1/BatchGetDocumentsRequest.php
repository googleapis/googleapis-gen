<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/v1beta1/firestore.proto

namespace Google\Cloud\Firestore\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request for [Firestore.BatchGetDocuments][google.firestore.v1beta1.Firestore.BatchGetDocuments].
 *
 * Generated from protobuf message <code>google.firestore.v1beta1.BatchGetDocumentsRequest</code>
 */
class BatchGetDocumentsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The database name. In the format:
     * `projects/{project_id}/databases/{database_id}`.
     *
     * Generated from protobuf field <code>string database = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $database = '';
    /**
     * The names of the documents to retrieve. In the format:
     * `projects/{project_id}/databases/{database_id}/documents/{document_path}`.
     * The request will fail if any of the document is not a child resource of the
     * given `database`. Duplicate names will be elided.
     *
     * Generated from protobuf field <code>repeated string documents = 2;</code>
     */
    private $documents;
    /**
     * The fields to return. If not set, returns all fields.
     * If a document has a field that is not present in this mask, that field will
     * not be returned in the response.
     *
     * Generated from protobuf field <code>.google.firestore.v1beta1.DocumentMask mask = 3;</code>
     */
    protected $mask = null;
    protected $consistency_selector;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $database
     *           Required. The database name. In the format:
     *           `projects/{project_id}/databases/{database_id}`.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $documents
     *           The names of the documents to retrieve. In the format:
     *           `projects/{project_id}/databases/{database_id}/documents/{document_path}`.
     *           The request will fail if any of the document is not a child resource of the
     *           given `database`. Duplicate names will be elided.
     *     @type \Google\Cloud\Firestore\V1beta1\DocumentMask $mask
     *           The fields to return. If not set, returns all fields.
     *           If a document has a field that is not present in this mask, that field will
     *           not be returned in the response.
     *     @type string $transaction
     *           Reads documents in a transaction.
     *     @type \Google\Cloud\Firestore\V1beta1\TransactionOptions $new_transaction
     *           Starts a new transaction and reads the documents.
     *           Defaults to a read-only transaction.
     *           The new transaction ID will be returned as the first response in the
     *           stream.
     *     @type \Google\Protobuf\Timestamp $read_time
     *           Reads documents as they were at the given time.
     *           This may not be older than 60 seconds.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Firestore\V1Beta1\Firestore::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The database name. In the format:
     * `projects/{project_id}/databases/{database_id}`.
     *
     * Generated from protobuf field <code>string database = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDatabase()
    {
        return $this->database;
    }

    /**
     * Required. The database name. In the format:
     * `projects/{project_id}/databases/{database_id}`.
     *
     * Generated from protobuf field <code>string database = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setDatabase($var)
    {
        GPBUtil::checkString($var, True);
        $this->database = $var;

        return $this;
    }

    /**
     * The names of the documents to retrieve. In the format:
     * `projects/{project_id}/databases/{database_id}/documents/{document_path}`.
     * The request will fail if any of the document is not a child resource of the
     * given `database`. Duplicate names will be elided.
     *
     * Generated from protobuf field <code>repeated string documents = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDocuments()
    {
        return $this->documents;
    }

    /**
     * The names of the documents to retrieve. In the format:
     * `projects/{project_id}/databases/{database_id}/documents/{document_path}`.
     * The request will fail if any of the document is not a child resource of the
     * given `database`. Duplicate names will be elided.
     *
     * Generated from protobuf field <code>repeated string documents = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDocuments($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->documents = $arr;

        return $this;
    }

    /**
     * The fields to return. If not set, returns all fields.
     * If a document has a field that is not present in this mask, that field will
     * not be returned in the response.
     *
     * Generated from protobuf field <code>.google.firestore.v1beta1.DocumentMask mask = 3;</code>
     * @return \Google\Cloud\Firestore\V1beta1\DocumentMask
     */
    public function getMask()
    {
        return isset($this->mask) ? $this->mask : null;
    }

    public function hasMask()
    {
        return isset($this->mask);
    }

    public function clearMask()
    {
        unset($this->mask);
    }

    /**
     * The fields to return. If not set, returns all fields.
     * If a document has a field that is not present in this mask, that field will
     * not be returned in the response.
     *
     * Generated from protobuf field <code>.google.firestore.v1beta1.DocumentMask mask = 3;</code>
     * @param \Google\Cloud\Firestore\V1beta1\DocumentMask $var
     * @return $this
     */
    public function setMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Firestore\V1beta1\DocumentMask::class);
        $this->mask = $var;

        return $this;
    }

    /**
     * Reads documents in a transaction.
     *
     * Generated from protobuf field <code>bytes transaction = 4;</code>
     * @return string
     */
    public function getTransaction()
    {
        return $this->readOneof(4);
    }

    public function hasTransaction()
    {
        return $this->hasOneof(4);
    }

    /**
     * Reads documents in a transaction.
     *
     * Generated from protobuf field <code>bytes transaction = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setTransaction($var)
    {
        GPBUtil::checkString($var, False);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Starts a new transaction and reads the documents.
     * Defaults to a read-only transaction.
     * The new transaction ID will be returned as the first response in the
     * stream.
     *
     * Generated from protobuf field <code>.google.firestore.v1beta1.TransactionOptions new_transaction = 5;</code>
     * @return \Google\Cloud\Firestore\V1beta1\TransactionOptions
     */
    public function getNewTransaction()
    {
        return $this->readOneof(5);
    }

    public function hasNewTransaction()
    {
        return $this->hasOneof(5);
    }

    /**
     * Starts a new transaction and reads the documents.
     * Defaults to a read-only transaction.
     * The new transaction ID will be returned as the first response in the
     * stream.
     *
     * Generated from protobuf field <code>.google.firestore.v1beta1.TransactionOptions new_transaction = 5;</code>
     * @param \Google\Cloud\Firestore\V1beta1\TransactionOptions $var
     * @return $this
     */
    public function setNewTransaction($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Firestore\V1beta1\TransactionOptions::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Reads documents as they were at the given time.
     * This may not be older than 60 seconds.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp read_time = 7;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getReadTime()
    {
        return $this->readOneof(7);
    }

    public function hasReadTime()
    {
        return $this->hasOneof(7);
    }

    /**
     * Reads documents as they were at the given time.
     * This may not be older than 60 seconds.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp read_time = 7;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setReadTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getConsistencySelector()
    {
        return $this->whichOneof("consistency_selector");
    }

}

