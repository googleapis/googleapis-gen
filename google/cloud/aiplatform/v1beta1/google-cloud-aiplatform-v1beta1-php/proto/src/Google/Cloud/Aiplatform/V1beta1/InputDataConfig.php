<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1beta1/training_pipeline.proto

namespace Google\Cloud\Aiplatform\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Specifies AI Platform owned input data to be used for training, and
 * possibly evaluating, the Model.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1beta1.InputDataConfig</code>
 */
class InputDataConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The ID of the Dataset in the same Project and Location which data will be
     * used to train the Model. The Dataset must use schema compatible with
     * Model being trained, and what is compatible should be described in the
     * used TrainingPipeline's [training_task_definition]
     * [google.cloud.aiplatform.v1beta1.TrainingPipeline.training_task_definition].
     * For tabular Datasets, all their data is exported to training, to pick
     * and choose from.
     *
     * Generated from protobuf field <code>string dataset_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $dataset_id = '';
    /**
     * Applicable only to Datasets that have DataItems and Annotations.
     * A filter on Annotations of the Dataset. Only Annotations that both
     * match this filter and belong to DataItems not ignored by the split method
     * are used in respectively training, validation or test role, depending on
     * the role of the DataItem they are on (for the auto-assigned that role is
     * decided by AI Platform). A filter with same syntax as the one used in
     * [ListAnnotations][google.cloud.aiplatform.v1beta1.DatasetService.ListAnnotations] may be used, but note
     * here it filters across all Annotations of the Dataset, and not just within
     * a single DataItem.
     *
     * Generated from protobuf field <code>string annotations_filter = 6;</code>
     */
    protected $annotations_filter = '';
    /**
     * Applicable only to custom training with Datasets that have DataItems and
     * Annotations.
     * Cloud Storage URI that points to a YAML file describing the annotation
     * schema. The schema is defined as an OpenAPI 3.0.2
     * [Schema Object](https://tinyurl.com/y538mdwt#schema-object).
     * The schema files that can be used here are found in
     * gs://google-cloud-aiplatform/schema/dataset/annotation/ , note that the
     * chosen schema must be consistent with
     * [metadata][google.cloud.aiplatform.v1beta1.Dataset.metadata_schema_uri] of the Dataset specified by
     * [dataset_id][google.cloud.aiplatform.v1beta1.InputDataConfig.dataset_id].
     * Only Annotations that both match this schema and belong to DataItems not
     * ignored by the split method are used in respectively training, validation
     * or test role, depending on the role of the DataItem they are on.
     * When used in conjunction with [annotations_filter][google.cloud.aiplatform.v1beta1.InputDataConfig.annotations_filter], the Annotations used
     * for training are filtered by both [annotations_filter][google.cloud.aiplatform.v1beta1.InputDataConfig.annotations_filter] and
     * [annotation_schema_uri][google.cloud.aiplatform.v1beta1.InputDataConfig.annotation_schema_uri].
     *
     * Generated from protobuf field <code>string annotation_schema_uri = 9;</code>
     */
    protected $annotation_schema_uri = '';
    protected $split;
    protected $destination;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Aiplatform\V1beta1\FractionSplit $fraction_split
     *           Split based on fractions defining the size of each set.
     *     @type \Google\Cloud\Aiplatform\V1beta1\FilterSplit $filter_split
     *           Split based on the provided filters for each set.
     *     @type \Google\Cloud\Aiplatform\V1beta1\PredefinedSplit $predefined_split
     *           Supported only for tabular Datasets.
     *           Split based on a predefined key.
     *     @type \Google\Cloud\Aiplatform\V1beta1\TimestampSplit $timestamp_split
     *           Supported only for tabular Datasets.
     *           Split based on the timestamp of the input data pieces.
     *     @type \Google\Cloud\Aiplatform\V1beta1\GcsDestination $gcs_destination
     *           The Cloud Storage location where the training data is to be
     *           written to. In the given directory a new directory is created with
     *           name:
     *           `dataset-<dataset-id>-<annotation-type>-<timestamp-of-training-call>`
     *           where timestamp is in YYYY-MM-DDThh:mm:ss.sssZ ISO-8601 format.
     *           All training input data is written into that directory.
     *           The AI Platform environment variables representing Cloud Storage
     *           data URIs are represented in the Cloud Storage wildcard
     *           format to support sharded data. e.g.: "gs://.../training-*.jsonl"
     *           * AIP_DATA_FORMAT = "jsonl" for non-tabular data, "csv" for tabular data
     *           * AIP_TRAINING_DATA_URI =
     *           "gcs_destination/dataset-<dataset-id>-<annotation-type>-<time>/training-*.${AIP_DATA_FORMAT}"
     *           * AIP_VALIDATION_DATA_URI =
     *           "gcs_destination/dataset-<dataset-id>-<annotation-type>-<time>/validation-*.${AIP_DATA_FORMAT}"
     *           * AIP_TEST_DATA_URI =
     *           "gcs_destination/dataset-<dataset-id>-<annotation-type>-<time>/test-*.${AIP_DATA_FORMAT}"
     *     @type \Google\Cloud\Aiplatform\V1beta1\BigQueryDestination $bigquery_destination
     *           Only applicable to custom training with tabular Dataset with BigQuery
     *           source.
     *           The BigQuery project location where the training data is to be written
     *           to. In the given project a new dataset is created with name
     *           `dataset_<dataset-id>_<annotation-type>_<timestamp-of-training-call>`
     *           where timestamp is in YYYY_MM_DDThh_mm_ss_sssZ format. All training
     *           input data is written into that dataset. In the dataset three
     *           tables are created, `training`, `validation` and `test`.
     *           * AIP_DATA_FORMAT = "bigquery".
     *           * AIP_TRAINING_DATA_URI  =
     *           "bigquery_destination.dataset_<dataset-id>_<annotation-type>_<time>.training"
     *           * AIP_VALIDATION_DATA_URI =
     *           "bigquery_destination.dataset_<dataset-id>_<annotation-type>_<time>.validation"
     *           * AIP_TEST_DATA_URI =
     *           "bigquery_destination.dataset_<dataset-id>_<annotation-type>_<time>.test"
     *     @type string $dataset_id
     *           Required. The ID of the Dataset in the same Project and Location which data will be
     *           used to train the Model. The Dataset must use schema compatible with
     *           Model being trained, and what is compatible should be described in the
     *           used TrainingPipeline's [training_task_definition]
     *           [google.cloud.aiplatform.v1beta1.TrainingPipeline.training_task_definition].
     *           For tabular Datasets, all their data is exported to training, to pick
     *           and choose from.
     *     @type string $annotations_filter
     *           Applicable only to Datasets that have DataItems and Annotations.
     *           A filter on Annotations of the Dataset. Only Annotations that both
     *           match this filter and belong to DataItems not ignored by the split method
     *           are used in respectively training, validation or test role, depending on
     *           the role of the DataItem they are on (for the auto-assigned that role is
     *           decided by AI Platform). A filter with same syntax as the one used in
     *           [ListAnnotations][google.cloud.aiplatform.v1beta1.DatasetService.ListAnnotations] may be used, but note
     *           here it filters across all Annotations of the Dataset, and not just within
     *           a single DataItem.
     *     @type string $annotation_schema_uri
     *           Applicable only to custom training with Datasets that have DataItems and
     *           Annotations.
     *           Cloud Storage URI that points to a YAML file describing the annotation
     *           schema. The schema is defined as an OpenAPI 3.0.2
     *           [Schema Object](https://tinyurl.com/y538mdwt#schema-object).
     *           The schema files that can be used here are found in
     *           gs://google-cloud-aiplatform/schema/dataset/annotation/ , note that the
     *           chosen schema must be consistent with
     *           [metadata][google.cloud.aiplatform.v1beta1.Dataset.metadata_schema_uri] of the Dataset specified by
     *           [dataset_id][google.cloud.aiplatform.v1beta1.InputDataConfig.dataset_id].
     *           Only Annotations that both match this schema and belong to DataItems not
     *           ignored by the split method are used in respectively training, validation
     *           or test role, depending on the role of the DataItem they are on.
     *           When used in conjunction with [annotations_filter][google.cloud.aiplatform.v1beta1.InputDataConfig.annotations_filter], the Annotations used
     *           for training are filtered by both [annotations_filter][google.cloud.aiplatform.v1beta1.InputDataConfig.annotations_filter] and
     *           [annotation_schema_uri][google.cloud.aiplatform.v1beta1.InputDataConfig.annotation_schema_uri].
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1Beta1\TrainingPipeline::initOnce();
        parent::__construct($data);
    }

    /**
     * Split based on fractions defining the size of each set.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1beta1.FractionSplit fraction_split = 2;</code>
     * @return \Google\Cloud\Aiplatform\V1beta1\FractionSplit
     */
    public function getFractionSplit()
    {
        return $this->readOneof(2);
    }

    public function hasFractionSplit()
    {
        return $this->hasOneof(2);
    }

    /**
     * Split based on fractions defining the size of each set.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1beta1.FractionSplit fraction_split = 2;</code>
     * @param \Google\Cloud\Aiplatform\V1beta1\FractionSplit $var
     * @return $this
     */
    public function setFractionSplit($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Aiplatform\V1beta1\FractionSplit::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Split based on the provided filters for each set.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1beta1.FilterSplit filter_split = 3;</code>
     * @return \Google\Cloud\Aiplatform\V1beta1\FilterSplit
     */
    public function getFilterSplit()
    {
        return $this->readOneof(3);
    }

    public function hasFilterSplit()
    {
        return $this->hasOneof(3);
    }

    /**
     * Split based on the provided filters for each set.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1beta1.FilterSplit filter_split = 3;</code>
     * @param \Google\Cloud\Aiplatform\V1beta1\FilterSplit $var
     * @return $this
     */
    public function setFilterSplit($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Aiplatform\V1beta1\FilterSplit::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Supported only for tabular Datasets.
     * Split based on a predefined key.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1beta1.PredefinedSplit predefined_split = 4;</code>
     * @return \Google\Cloud\Aiplatform\V1beta1\PredefinedSplit
     */
    public function getPredefinedSplit()
    {
        return $this->readOneof(4);
    }

    public function hasPredefinedSplit()
    {
        return $this->hasOneof(4);
    }

    /**
     * Supported only for tabular Datasets.
     * Split based on a predefined key.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1beta1.PredefinedSplit predefined_split = 4;</code>
     * @param \Google\Cloud\Aiplatform\V1beta1\PredefinedSplit $var
     * @return $this
     */
    public function setPredefinedSplit($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Aiplatform\V1beta1\PredefinedSplit::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Supported only for tabular Datasets.
     * Split based on the timestamp of the input data pieces.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1beta1.TimestampSplit timestamp_split = 5;</code>
     * @return \Google\Cloud\Aiplatform\V1beta1\TimestampSplit
     */
    public function getTimestampSplit()
    {
        return $this->readOneof(5);
    }

    public function hasTimestampSplit()
    {
        return $this->hasOneof(5);
    }

    /**
     * Supported only for tabular Datasets.
     * Split based on the timestamp of the input data pieces.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1beta1.TimestampSplit timestamp_split = 5;</code>
     * @param \Google\Cloud\Aiplatform\V1beta1\TimestampSplit $var
     * @return $this
     */
    public function setTimestampSplit($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Aiplatform\V1beta1\TimestampSplit::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * The Cloud Storage location where the training data is to be
     * written to. In the given directory a new directory is created with
     * name:
     * `dataset-<dataset-id>-<annotation-type>-<timestamp-of-training-call>`
     * where timestamp is in YYYY-MM-DDThh:mm:ss.sssZ ISO-8601 format.
     * All training input data is written into that directory.
     * The AI Platform environment variables representing Cloud Storage
     * data URIs are represented in the Cloud Storage wildcard
     * format to support sharded data. e.g.: "gs://.../training-*.jsonl"
     * * AIP_DATA_FORMAT = "jsonl" for non-tabular data, "csv" for tabular data
     * * AIP_TRAINING_DATA_URI =
     * "gcs_destination/dataset-<dataset-id>-<annotation-type>-<time>/training-*.${AIP_DATA_FORMAT}"
     * * AIP_VALIDATION_DATA_URI =
     * "gcs_destination/dataset-<dataset-id>-<annotation-type>-<time>/validation-*.${AIP_DATA_FORMAT}"
     * * AIP_TEST_DATA_URI =
     * "gcs_destination/dataset-<dataset-id>-<annotation-type>-<time>/test-*.${AIP_DATA_FORMAT}"
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1beta1.GcsDestination gcs_destination = 8;</code>
     * @return \Google\Cloud\Aiplatform\V1beta1\GcsDestination
     */
    public function getGcsDestination()
    {
        return $this->readOneof(8);
    }

    public function hasGcsDestination()
    {
        return $this->hasOneof(8);
    }

    /**
     * The Cloud Storage location where the training data is to be
     * written to. In the given directory a new directory is created with
     * name:
     * `dataset-<dataset-id>-<annotation-type>-<timestamp-of-training-call>`
     * where timestamp is in YYYY-MM-DDThh:mm:ss.sssZ ISO-8601 format.
     * All training input data is written into that directory.
     * The AI Platform environment variables representing Cloud Storage
     * data URIs are represented in the Cloud Storage wildcard
     * format to support sharded data. e.g.: "gs://.../training-*.jsonl"
     * * AIP_DATA_FORMAT = "jsonl" for non-tabular data, "csv" for tabular data
     * * AIP_TRAINING_DATA_URI =
     * "gcs_destination/dataset-<dataset-id>-<annotation-type>-<time>/training-*.${AIP_DATA_FORMAT}"
     * * AIP_VALIDATION_DATA_URI =
     * "gcs_destination/dataset-<dataset-id>-<annotation-type>-<time>/validation-*.${AIP_DATA_FORMAT}"
     * * AIP_TEST_DATA_URI =
     * "gcs_destination/dataset-<dataset-id>-<annotation-type>-<time>/test-*.${AIP_DATA_FORMAT}"
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1beta1.GcsDestination gcs_destination = 8;</code>
     * @param \Google\Cloud\Aiplatform\V1beta1\GcsDestination $var
     * @return $this
     */
    public function setGcsDestination($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Aiplatform\V1beta1\GcsDestination::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * Only applicable to custom training with tabular Dataset with BigQuery
     * source.
     * The BigQuery project location where the training data is to be written
     * to. In the given project a new dataset is created with name
     * `dataset_<dataset-id>_<annotation-type>_<timestamp-of-training-call>`
     * where timestamp is in YYYY_MM_DDThh_mm_ss_sssZ format. All training
     * input data is written into that dataset. In the dataset three
     * tables are created, `training`, `validation` and `test`.
     * * AIP_DATA_FORMAT = "bigquery".
     * * AIP_TRAINING_DATA_URI  =
     * "bigquery_destination.dataset_<dataset-id>_<annotation-type>_<time>.training"
     * * AIP_VALIDATION_DATA_URI =
     * "bigquery_destination.dataset_<dataset-id>_<annotation-type>_<time>.validation"
     * * AIP_TEST_DATA_URI =
     * "bigquery_destination.dataset_<dataset-id>_<annotation-type>_<time>.test"
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1beta1.BigQueryDestination bigquery_destination = 10;</code>
     * @return \Google\Cloud\Aiplatform\V1beta1\BigQueryDestination
     */
    public function getBigqueryDestination()
    {
        return $this->readOneof(10);
    }

    public function hasBigqueryDestination()
    {
        return $this->hasOneof(10);
    }

    /**
     * Only applicable to custom training with tabular Dataset with BigQuery
     * source.
     * The BigQuery project location where the training data is to be written
     * to. In the given project a new dataset is created with name
     * `dataset_<dataset-id>_<annotation-type>_<timestamp-of-training-call>`
     * where timestamp is in YYYY_MM_DDThh_mm_ss_sssZ format. All training
     * input data is written into that dataset. In the dataset three
     * tables are created, `training`, `validation` and `test`.
     * * AIP_DATA_FORMAT = "bigquery".
     * * AIP_TRAINING_DATA_URI  =
     * "bigquery_destination.dataset_<dataset-id>_<annotation-type>_<time>.training"
     * * AIP_VALIDATION_DATA_URI =
     * "bigquery_destination.dataset_<dataset-id>_<annotation-type>_<time>.validation"
     * * AIP_TEST_DATA_URI =
     * "bigquery_destination.dataset_<dataset-id>_<annotation-type>_<time>.test"
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1beta1.BigQueryDestination bigquery_destination = 10;</code>
     * @param \Google\Cloud\Aiplatform\V1beta1\BigQueryDestination $var
     * @return $this
     */
    public function setBigqueryDestination($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Aiplatform\V1beta1\BigQueryDestination::class);
        $this->writeOneof(10, $var);

        return $this;
    }

    /**
     * Required. The ID of the Dataset in the same Project and Location which data will be
     * used to train the Model. The Dataset must use schema compatible with
     * Model being trained, and what is compatible should be described in the
     * used TrainingPipeline's [training_task_definition]
     * [google.cloud.aiplatform.v1beta1.TrainingPipeline.training_task_definition].
     * For tabular Datasets, all their data is exported to training, to pick
     * and choose from.
     *
     * Generated from protobuf field <code>string dataset_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDatasetId()
    {
        return $this->dataset_id;
    }

    /**
     * Required. The ID of the Dataset in the same Project and Location which data will be
     * used to train the Model. The Dataset must use schema compatible with
     * Model being trained, and what is compatible should be described in the
     * used TrainingPipeline's [training_task_definition]
     * [google.cloud.aiplatform.v1beta1.TrainingPipeline.training_task_definition].
     * For tabular Datasets, all their data is exported to training, to pick
     * and choose from.
     *
     * Generated from protobuf field <code>string dataset_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setDatasetId($var)
    {
        GPBUtil::checkString($var, True);
        $this->dataset_id = $var;

        return $this;
    }

    /**
     * Applicable only to Datasets that have DataItems and Annotations.
     * A filter on Annotations of the Dataset. Only Annotations that both
     * match this filter and belong to DataItems not ignored by the split method
     * are used in respectively training, validation or test role, depending on
     * the role of the DataItem they are on (for the auto-assigned that role is
     * decided by AI Platform). A filter with same syntax as the one used in
     * [ListAnnotations][google.cloud.aiplatform.v1beta1.DatasetService.ListAnnotations] may be used, but note
     * here it filters across all Annotations of the Dataset, and not just within
     * a single DataItem.
     *
     * Generated from protobuf field <code>string annotations_filter = 6;</code>
     * @return string
     */
    public function getAnnotationsFilter()
    {
        return $this->annotations_filter;
    }

    /**
     * Applicable only to Datasets that have DataItems and Annotations.
     * A filter on Annotations of the Dataset. Only Annotations that both
     * match this filter and belong to DataItems not ignored by the split method
     * are used in respectively training, validation or test role, depending on
     * the role of the DataItem they are on (for the auto-assigned that role is
     * decided by AI Platform). A filter with same syntax as the one used in
     * [ListAnnotations][google.cloud.aiplatform.v1beta1.DatasetService.ListAnnotations] may be used, but note
     * here it filters across all Annotations of the Dataset, and not just within
     * a single DataItem.
     *
     * Generated from protobuf field <code>string annotations_filter = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setAnnotationsFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->annotations_filter = $var;

        return $this;
    }

    /**
     * Applicable only to custom training with Datasets that have DataItems and
     * Annotations.
     * Cloud Storage URI that points to a YAML file describing the annotation
     * schema. The schema is defined as an OpenAPI 3.0.2
     * [Schema Object](https://tinyurl.com/y538mdwt#schema-object).
     * The schema files that can be used here are found in
     * gs://google-cloud-aiplatform/schema/dataset/annotation/ , note that the
     * chosen schema must be consistent with
     * [metadata][google.cloud.aiplatform.v1beta1.Dataset.metadata_schema_uri] of the Dataset specified by
     * [dataset_id][google.cloud.aiplatform.v1beta1.InputDataConfig.dataset_id].
     * Only Annotations that both match this schema and belong to DataItems not
     * ignored by the split method are used in respectively training, validation
     * or test role, depending on the role of the DataItem they are on.
     * When used in conjunction with [annotations_filter][google.cloud.aiplatform.v1beta1.InputDataConfig.annotations_filter], the Annotations used
     * for training are filtered by both [annotations_filter][google.cloud.aiplatform.v1beta1.InputDataConfig.annotations_filter] and
     * [annotation_schema_uri][google.cloud.aiplatform.v1beta1.InputDataConfig.annotation_schema_uri].
     *
     * Generated from protobuf field <code>string annotation_schema_uri = 9;</code>
     * @return string
     */
    public function getAnnotationSchemaUri()
    {
        return $this->annotation_schema_uri;
    }

    /**
     * Applicable only to custom training with Datasets that have DataItems and
     * Annotations.
     * Cloud Storage URI that points to a YAML file describing the annotation
     * schema. The schema is defined as an OpenAPI 3.0.2
     * [Schema Object](https://tinyurl.com/y538mdwt#schema-object).
     * The schema files that can be used here are found in
     * gs://google-cloud-aiplatform/schema/dataset/annotation/ , note that the
     * chosen schema must be consistent with
     * [metadata][google.cloud.aiplatform.v1beta1.Dataset.metadata_schema_uri] of the Dataset specified by
     * [dataset_id][google.cloud.aiplatform.v1beta1.InputDataConfig.dataset_id].
     * Only Annotations that both match this schema and belong to DataItems not
     * ignored by the split method are used in respectively training, validation
     * or test role, depending on the role of the DataItem they are on.
     * When used in conjunction with [annotations_filter][google.cloud.aiplatform.v1beta1.InputDataConfig.annotations_filter], the Annotations used
     * for training are filtered by both [annotations_filter][google.cloud.aiplatform.v1beta1.InputDataConfig.annotations_filter] and
     * [annotation_schema_uri][google.cloud.aiplatform.v1beta1.InputDataConfig.annotation_schema_uri].
     *
     * Generated from protobuf field <code>string annotation_schema_uri = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setAnnotationSchemaUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->annotation_schema_uri = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getSplit()
    {
        return $this->whichOneof("split");
    }

    /**
     * @return string
     */
    public function getDestination()
    {
        return $this->whichOneof("destination");
    }

}

