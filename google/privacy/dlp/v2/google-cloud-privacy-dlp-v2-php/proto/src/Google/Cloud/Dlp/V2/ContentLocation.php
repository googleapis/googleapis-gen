<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Precise location of the finding within a document, record, image, or metadata
 * container.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.ContentLocation</code>
 */
class ContentLocation extends \Google\Protobuf\Internal\Message
{
    /**
     * Name of the container where the finding is located.
     * The top level name is the source file name or table name. Names of some
     * common storage containers are formatted as follows:
     * * BigQuery tables:  `{project_id}:{dataset_id}.{table_id}`
     * * Cloud Storage files: `gs://{bucket}/{path}`
     * * Datastore namespace: {namespace}
     * Nested names could be absent if the embedded object has no string
     * identifier (for an example an image contained within a document).
     *
     * Generated from protobuf field <code>string container_name = 1;</code>
     */
    protected $container_name = '';
    /**
     * Findings container modification timestamp, if applicable.
     * For Google Cloud Storage contains last file modification timestamp.
     * For BigQuery table contains last_modified_time property.
     * For Datastore - not populated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp container_timestamp = 6;</code>
     */
    protected $container_timestamp = null;
    /**
     * Findings container version, if available
     * ("generation" for Google Cloud Storage).
     *
     * Generated from protobuf field <code>string container_version = 7;</code>
     */
    protected $container_version = '';
    protected $location;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $container_name
     *           Name of the container where the finding is located.
     *           The top level name is the source file name or table name. Names of some
     *           common storage containers are formatted as follows:
     *           * BigQuery tables:  `{project_id}:{dataset_id}.{table_id}`
     *           * Cloud Storage files: `gs://{bucket}/{path}`
     *           * Datastore namespace: {namespace}
     *           Nested names could be absent if the embedded object has no string
     *           identifier (for an example an image contained within a document).
     *     @type \Google\Cloud\Dlp\V2\RecordLocation $record_location
     *           Location within a row or record of a database table.
     *     @type \Google\Cloud\Dlp\V2\ImageLocation $image_location
     *           Location within an image's pixels.
     *     @type \Google\Cloud\Dlp\V2\DocumentLocation $document_location
     *           Location data for document files.
     *     @type \Google\Cloud\Dlp\V2\MetadataLocation $metadata_location
     *           Location within the metadata for inspected content.
     *     @type \Google\Protobuf\Timestamp $container_timestamp
     *           Findings container modification timestamp, if applicable.
     *           For Google Cloud Storage contains last file modification timestamp.
     *           For BigQuery table contains last_modified_time property.
     *           For Datastore - not populated.
     *     @type string $container_version
     *           Findings container version, if available
     *           ("generation" for Google Cloud Storage).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * Name of the container where the finding is located.
     * The top level name is the source file name or table name. Names of some
     * common storage containers are formatted as follows:
     * * BigQuery tables:  `{project_id}:{dataset_id}.{table_id}`
     * * Cloud Storage files: `gs://{bucket}/{path}`
     * * Datastore namespace: {namespace}
     * Nested names could be absent if the embedded object has no string
     * identifier (for an example an image contained within a document).
     *
     * Generated from protobuf field <code>string container_name = 1;</code>
     * @return string
     */
    public function getContainerName()
    {
        return $this->container_name;
    }

    /**
     * Name of the container where the finding is located.
     * The top level name is the source file name or table name. Names of some
     * common storage containers are formatted as follows:
     * * BigQuery tables:  `{project_id}:{dataset_id}.{table_id}`
     * * Cloud Storage files: `gs://{bucket}/{path}`
     * * Datastore namespace: {namespace}
     * Nested names could be absent if the embedded object has no string
     * identifier (for an example an image contained within a document).
     *
     * Generated from protobuf field <code>string container_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setContainerName($var)
    {
        GPBUtil::checkString($var, True);
        $this->container_name = $var;

        return $this;
    }

    /**
     * Location within a row or record of a database table.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.RecordLocation record_location = 2;</code>
     * @return \Google\Cloud\Dlp\V2\RecordLocation
     */
    public function getRecordLocation()
    {
        return $this->readOneof(2);
    }

    public function hasRecordLocation()
    {
        return $this->hasOneof(2);
    }

    /**
     * Location within a row or record of a database table.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.RecordLocation record_location = 2;</code>
     * @param \Google\Cloud\Dlp\V2\RecordLocation $var
     * @return $this
     */
    public function setRecordLocation($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\RecordLocation::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Location within an image's pixels.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.ImageLocation image_location = 3;</code>
     * @return \Google\Cloud\Dlp\V2\ImageLocation
     */
    public function getImageLocation()
    {
        return $this->readOneof(3);
    }

    public function hasImageLocation()
    {
        return $this->hasOneof(3);
    }

    /**
     * Location within an image's pixels.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.ImageLocation image_location = 3;</code>
     * @param \Google\Cloud\Dlp\V2\ImageLocation $var
     * @return $this
     */
    public function setImageLocation($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\ImageLocation::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Location data for document files.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DocumentLocation document_location = 5;</code>
     * @return \Google\Cloud\Dlp\V2\DocumentLocation
     */
    public function getDocumentLocation()
    {
        return $this->readOneof(5);
    }

    public function hasDocumentLocation()
    {
        return $this->hasOneof(5);
    }

    /**
     * Location data for document files.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DocumentLocation document_location = 5;</code>
     * @param \Google\Cloud\Dlp\V2\DocumentLocation $var
     * @return $this
     */
    public function setDocumentLocation($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\DocumentLocation::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Location within the metadata for inspected content.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.MetadataLocation metadata_location = 8;</code>
     * @return \Google\Cloud\Dlp\V2\MetadataLocation
     */
    public function getMetadataLocation()
    {
        return $this->readOneof(8);
    }

    public function hasMetadataLocation()
    {
        return $this->hasOneof(8);
    }

    /**
     * Location within the metadata for inspected content.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.MetadataLocation metadata_location = 8;</code>
     * @param \Google\Cloud\Dlp\V2\MetadataLocation $var
     * @return $this
     */
    public function setMetadataLocation($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\MetadataLocation::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * Findings container modification timestamp, if applicable.
     * For Google Cloud Storage contains last file modification timestamp.
     * For BigQuery table contains last_modified_time property.
     * For Datastore - not populated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp container_timestamp = 6;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getContainerTimestamp()
    {
        return isset($this->container_timestamp) ? $this->container_timestamp : null;
    }

    public function hasContainerTimestamp()
    {
        return isset($this->container_timestamp);
    }

    public function clearContainerTimestamp()
    {
        unset($this->container_timestamp);
    }

    /**
     * Findings container modification timestamp, if applicable.
     * For Google Cloud Storage contains last file modification timestamp.
     * For BigQuery table contains last_modified_time property.
     * For Datastore - not populated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp container_timestamp = 6;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setContainerTimestamp($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->container_timestamp = $var;

        return $this;
    }

    /**
     * Findings container version, if available
     * ("generation" for Google Cloud Storage).
     *
     * Generated from protobuf field <code>string container_version = 7;</code>
     * @return string
     */
    public function getContainerVersion()
    {
        return $this->container_version;
    }

    /**
     * Findings container version, if available
     * ("generation" for Google Cloud Storage).
     *
     * Generated from protobuf field <code>string container_version = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setContainerVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->container_version = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getLocation()
    {
        return $this->whichOneof("location");
    }

}

