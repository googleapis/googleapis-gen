# Copyright 2020 Google LLC
#
# Licensed under the Apache License, Version 2.0 (the "License");
# you may not use this file except in compliance with the License.
# You may obtain a copy of the License at
#
#     https://www.apache.org/licenses/LICENSE-2.0
#
# Unless required by applicable law or agreed to in writing, software
# distributed under the License is distributed on an "AS IS" BASIS,
# WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
# See the License for the specific language governing permissions and
# limitations under the License.

module Google
  module Cloud
    module Aiplatform
      module V1beta1
        # The TrainingPipeline orchestrates tasks associated with training a Model. It
        # always executes the training task, and optionally may also
        # export data from AI Platform's Dataset which becomes the training input,
        # {Google::Cloud::Aiplatform::V1beta1::ModelService::UploadModel upload} the Model to AI Platform, and evaluate the
        # Model.
        # @!attribute [rw] name
        #   @return [String]
        #     Output only. Resource name of the TrainingPipeline.
        # @!attribute [rw] display_name
        #   @return [String]
        #     Required. The user-defined name of this TrainingPipeline.
        # @!attribute [rw] input_data_config
        #   @return [Google::Cloud::Aiplatform::V1beta1::InputDataConfig]
        #     Specifies AI Platform owned input data that may be used for training the
        #     Model. The TrainingPipeline's {Google::Cloud::Aiplatform::V1beta1::TrainingPipeline#training_task_definition training_task_definition} should make
        #     clear whether this config is used and if there are any special requirements
        #     on how it should be filled. If nothing about this config is mentioned in
        #     the {Google::Cloud::Aiplatform::V1beta1::TrainingPipeline#training_task_definition training_task_definition}, then it should be assumed that the
        #     TrainingPipeline does not depend on this configuration.
        # @!attribute [rw] training_task_definition
        #   @return [String]
        #     Required. A Google Cloud Storage path to the YAML file that defines the training task
        #     which is responsible for producing the model artifact, and may also include
        #     additional auxiliary work.
        #     The definition files that can be used here are found in
        #     gs://google-cloud-aiplatform/schema/trainingjob/definition/.
        #     Note: The URI given on output will be immutable and probably different,
        #     including the URI scheme, than the one given on input. The output URI will
        #     point to a location where the user only has a read access.
        # @!attribute [rw] training_task_inputs
        #   @return [Google::Protobuf::Value]
        #     Required. The training task's parameter(s), as specified in the
        #     {Google::Cloud::Aiplatform::V1beta1::TrainingPipeline#training_task_definition training_task_definition}'s `inputs`.
        # @!attribute [rw] training_task_metadata
        #   @return [Google::Protobuf::Value]
        #     Output only. The metadata information as specified in the {Google::Cloud::Aiplatform::V1beta1::TrainingPipeline#training_task_definition training_task_definition}'s
        #     `metadata`. This metadata is an auxiliary runtime and final information
        #     about the training task. While the pipeline is running this information is
        #     populated only at a best effort basis. Only present if the
        #     pipeline's {Google::Cloud::Aiplatform::V1beta1::TrainingPipeline#training_task_definition training_task_definition} contains `metadata` object.
        # @!attribute [rw] model_to_upload
        #   @return [Google::Cloud::Aiplatform::V1beta1::Model]
        #     Describes the Model that may be uploaded (via {Google::Cloud::Aiplatform::V1beta1::ModelService::UploadModel ModelService::UploadModel})
        #     by this TrainingPipeline. The TrainingPipeline's
        #     {Google::Cloud::Aiplatform::V1beta1::TrainingPipeline#training_task_definition training_task_definition} should make clear whether this Model
        #     description should be populated, and if there are any special requirements
        #     regarding how it should be filled. If nothing is mentioned in the
        #     {Google::Cloud::Aiplatform::V1beta1::TrainingPipeline#training_task_definition training_task_definition}, then it should be assumed that this field
        #     should not be filled and the training task either uploads the Model without
        #     a need of this information, or that training task does not support
        #     uploading a Model as part of the pipeline.
        #     When the Pipeline's state becomes `PIPELINE_STATE_SUCCEEDED` and
        #     the trained Model had been uploaded into AI Platform, then the
        #     model_to_upload's resource {Google::Cloud::Aiplatform::V1beta1::Model#name name} is populated. The Model
        #     is always uploaded into the Project and Location in which this pipeline
        #     is.
        # @!attribute [rw] state
        #   @return [Google::Cloud::Aiplatform::V1beta1::PipelineState]
        #     Output only. The detailed state of the pipeline.
        # @!attribute [rw] error
        #   @return [Google::Rpc::Status]
        #     Output only. Only populated when the pipeline's state is `PIPELINE_STATE_FAILED` or
        #     `PIPELINE_STATE_CANCELLED`.
        # @!attribute [rw] create_time
        #   @return [Google::Protobuf::Timestamp]
        #     Output only. Time when the TrainingPipeline was created.
        # @!attribute [rw] start_time
        #   @return [Google::Protobuf::Timestamp]
        #     Output only. Time when the TrainingPipeline for the first time entered the
        #     `PIPELINE_STATE_RUNNING` state.
        # @!attribute [rw] end_time
        #   @return [Google::Protobuf::Timestamp]
        #     Output only. Time when the TrainingPipeline entered any of the following states:
        #     `PIPELINE_STATE_SUCCEEDED`, `PIPELINE_STATE_FAILED`,
        #     `PIPELINE_STATE_CANCELLED`.
        # @!attribute [rw] update_time
        #   @return [Google::Protobuf::Timestamp]
        #     Output only. Time when the TrainingPipeline was most recently updated.
        # @!attribute [rw] labels
        #   @return [Hash{String => String}]
        #     The labels with user-defined metadata to organize TrainingPipelines.
        #
        #     Label keys and values can be no longer than 64 characters
        #     (Unicode codepoints), can only contain lowercase letters, numeric
        #     characters, underscores and dashes. International characters are allowed.
        #
        #     See https://goo.gl/xmQnxf for more information and examples of labels.
        # @!attribute [rw] encryption_spec
        #   @return [Google::Cloud::Aiplatform::V1beta1::EncryptionSpec]
        #     Customer-managed encryption key spec for a TrainingPipeline. If set, this
        #     TrainingPipeline will be secured by this key.
        #
        #     Note: Model trained by this TrainingPipeline is also secured by this key if
        #     {Google::Cloud::Aiplatform::V1beta1::TrainingPipeline#encryption_spec model_to_upload} is not set separately.
        class TrainingPipeline; end

        # Specifies AI Platform owned input data to be used for training, and
        # possibly evaluating, the Model.
        # @!attribute [rw] fraction_split
        #   @return [Google::Cloud::Aiplatform::V1beta1::FractionSplit]
        #     Split based on fractions defining the size of each set.
        # @!attribute [rw] filter_split
        #   @return [Google::Cloud::Aiplatform::V1beta1::FilterSplit]
        #     Split based on the provided filters for each set.
        # @!attribute [rw] predefined_split
        #   @return [Google::Cloud::Aiplatform::V1beta1::PredefinedSplit]
        #     Supported only for tabular Datasets.
        #
        #     Split based on a predefined key.
        # @!attribute [rw] timestamp_split
        #   @return [Google::Cloud::Aiplatform::V1beta1::TimestampSplit]
        #     Supported only for tabular Datasets.
        #
        #     Split based on the timestamp of the input data pieces.
        # @!attribute [rw] gcs_destination
        #   @return [Google::Cloud::Aiplatform::V1beta1::GcsDestination]
        #     The Cloud Storage location where the training data is to be
        #     written to. In the given directory a new directory is created with
        #     name:
        #     `dataset-<dataset-id>-<annotation-type>-<timestamp-of-training-call>`
        #     where timestamp is in YYYY-MM-DDThh:mm:ss.sssZ ISO-8601 format.
        #     All training input data is written into that directory.
        #
        #     The AI Platform environment variables representing Cloud Storage
        #     data URIs are represented in the Cloud Storage wildcard
        #     format to support sharded data. e.g.: "gs://.../training-*.jsonl"
        #
        #     * AIP_DATA_FORMAT = "jsonl" for non-tabular data, "csv" for tabular data
        #     * AIP_TRAINING_DATA_URI =
        #
        #     "gcs_destination/dataset-<dataset-id>-<annotation-type>-<time>/training-*.${AIP_DATA_FORMAT}"
        #
        #     * AIP_VALIDATION_DATA_URI =
        #
        #     "gcs_destination/dataset-<dataset-id>-<annotation-type>-<time>/validation-*.${AIP_DATA_FORMAT}"
        #
        #     * AIP_TEST_DATA_URI =
        #
        #     "gcs_destination/dataset-<dataset-id>-<annotation-type>-<time>/test-*.${AIP_DATA_FORMAT}"
        # @!attribute [rw] bigquery_destination
        #   @return [Google::Cloud::Aiplatform::V1beta1::BigQueryDestination]
        #     Only applicable to custom training with tabular Dataset with BigQuery
        #     source.
        #
        #     The BigQuery project location where the training data is to be written
        #     to. In the given project a new dataset is created with name
        #     `dataset_<dataset-id>_<annotation-type>_<timestamp-of-training-call>`
        #     where timestamp is in YYYY_MM_DDThh_mm_ss_sssZ format. All training
        #     input data is written into that dataset. In the dataset three
        #     tables are created, `training`, `validation` and `test`.
        #
        #     * AIP_DATA_FORMAT = "bigquery".
        #     * AIP_TRAINING_DATA_URI  =
        #
        #     "bigquery_destination.dataset_<dataset-id>_<annotation-type>_<time>.training"
        #
        #     * AIP_VALIDATION_DATA_URI =
        #
        #     "bigquery_destination.dataset_<dataset-id>_<annotation-type>_<time>.validation"
        #
        #     * AIP_TEST_DATA_URI =
        #       "bigquery_destination.dataset_<dataset-id>_<annotation-type>_<time>.test"
        # @!attribute [rw] dataset_id
        #   @return [String]
        #     Required. The ID of the Dataset in the same Project and Location which data will be
        #     used to train the Model. The Dataset must use schema compatible with
        #     Model being trained, and what is compatible should be described in the
        #     used TrainingPipeline's [training_task_definition]
        #     [google.cloud.aiplatform.v1beta1.TrainingPipeline.training_task_definition].
        #     For tabular Datasets, all their data is exported to training, to pick
        #     and choose from.
        # @!attribute [rw] annotations_filter
        #   @return [String]
        #     Applicable only to Datasets that have DataItems and Annotations.
        #
        #     A filter on Annotations of the Dataset. Only Annotations that both
        #     match this filter and belong to DataItems not ignored by the split method
        #     are used in respectively training, validation or test role, depending on
        #     the role of the DataItem they are on (for the auto-assigned that role is
        #     decided by AI Platform). A filter with same syntax as the one used in
        #     {Google::Cloud::Aiplatform::V1beta1::DatasetService::ListAnnotations ListAnnotations} may be used, but note
        #     here it filters across all Annotations of the Dataset, and not just within
        #     a single DataItem.
        # @!attribute [rw] annotation_schema_uri
        #   @return [String]
        #     Applicable only to custom training with Datasets that have DataItems and
        #     Annotations.
        #
        #     Cloud Storage URI that points to a YAML file describing the annotation
        #     schema. The schema is defined as an OpenAPI 3.0.2
        #     [Schema Object](https://tinyurl.com/y538mdwt#schema-object).
        #     The schema files that can be used here are found in
        #     gs://google-cloud-aiplatform/schema/dataset/annotation/ , note that the
        #     chosen schema must be consistent with
        #     {Google::Cloud::Aiplatform::V1beta1::Dataset#metadata_schema_uri metadata} of the Dataset specified by
        #     {Google::Cloud::Aiplatform::V1beta1::InputDataConfig#dataset_id dataset_id}.
        #
        #     Only Annotations that both match this schema and belong to DataItems not
        #     ignored by the split method are used in respectively training, validation
        #     or test role, depending on the role of the DataItem they are on.
        #
        #     When used in conjunction with {Google::Cloud::Aiplatform::V1beta1::InputDataConfig#annotations_filter annotations_filter}, the Annotations used
        #     for training are filtered by both {Google::Cloud::Aiplatform::V1beta1::InputDataConfig#annotations_filter annotations_filter} and
        #     {Google::Cloud::Aiplatform::V1beta1::InputDataConfig#annotation_schema_uri annotation_schema_uri}.
        class InputDataConfig; end

        # Assigns the input data to training, validation, and test sets as per the
        # given fractions. Any of `training_fraction`, `validation_fraction` and
        # `test_fraction` may optionally be provided, they must sum to up to 1. If the
        # provided ones sum to less than 1, the remainder is assigned to sets as
        # decided by AI Platform. If none of the fractions are set, by default roughly
        # 80% of data is used for training, 10% for validation, and 10% for test.
        # @!attribute [rw] training_fraction
        #   @return [Float]
        #     The fraction of the input data that is to be used to train the Model.
        # @!attribute [rw] validation_fraction
        #   @return [Float]
        #     The fraction of the input data that is to be used to validate the Model.
        # @!attribute [rw] test_fraction
        #   @return [Float]
        #     The fraction of the input data that is to be used to evaluate the Model.
        class FractionSplit; end

        # Assigns input data to training, validation, and test sets based on the given
        # filters, data pieces not matched by any filter are ignored. Currently only
        # supported for Datasets containing DataItems.
        # If any of the filters in this message are to match nothing, then they can be
        # set as '-' (the minus sign).
        #
        # Supported only for unstructured Datasets.
        # @!attribute [rw] training_filter
        #   @return [String]
        #     Required. A filter on DataItems of the Dataset. DataItems that match
        #     this filter are used to train the Model. A filter with same syntax
        #     as the one used in {Google::Cloud::Aiplatform::V1beta1::DatasetService::ListDataItems DatasetService::ListDataItems} may be used. If a
        #     single DataItem is matched by more than one of the FilterSplit filters,
        #     then it is assigned to the first set that applies to it in the
        #     training, validation, test order.
        # @!attribute [rw] validation_filter
        #   @return [String]
        #     Required. A filter on DataItems of the Dataset. DataItems that match
        #     this filter are used to validate the Model. A filter with same syntax
        #     as the one used in {Google::Cloud::Aiplatform::V1beta1::DatasetService::ListDataItems DatasetService::ListDataItems} may be used. If a
        #     single DataItem is matched by more than one of the FilterSplit filters,
        #     then it is assigned to the first set that applies to it in the
        #     training, validation, test order.
        # @!attribute [rw] test_filter
        #   @return [String]
        #     Required. A filter on DataItems of the Dataset. DataItems that match
        #     this filter are used to test the Model. A filter with same syntax
        #     as the one used in {Google::Cloud::Aiplatform::V1beta1::DatasetService::ListDataItems DatasetService::ListDataItems} may be used. If a
        #     single DataItem is matched by more than one of the FilterSplit filters,
        #     then it is assigned to the first set that applies to it in the
        #     training, validation, test order.
        class FilterSplit; end

        # Assigns input data to training, validation, and test sets based on the
        # value of a provided key.
        #
        # Supported only for tabular Datasets.
        # @!attribute [rw] key
        #   @return [String]
        #     Required. The key is a name of one of the Dataset's data columns.
        #     The value of the key (either the label's value or value in the column)
        #     must be one of {`training`, `validation`, `test`}, and it defines to which
        #     set the given piece of data is assigned. If for a piece of data the key
        #     is not present or has an invalid value, that piece is ignored by the
        #     pipeline.
        class PredefinedSplit; end

        # Assigns input data to training, validation, and test sets based on a
        # provided timestamps. The youngest data pieces are assigned to training set,
        # next to validation set, and the oldest to the test set.
        #
        # Supported only for tabular Datasets.
        # @!attribute [rw] training_fraction
        #   @return [Float]
        #     The fraction of the input data that is to be used to train the Model.
        # @!attribute [rw] validation_fraction
        #   @return [Float]
        #     The fraction of the input data that is to be used to validate the Model.
        # @!attribute [rw] test_fraction
        #   @return [Float]
        #     The fraction of the input data that is to be used to evaluate the Model.
        # @!attribute [rw] key
        #   @return [String]
        #     Required. The key is a name of one of the Dataset's data columns.
        #     The values of the key (the values in the column) must be in RFC 3339
        #     `date-time` format, where `time-offset` = `"Z"`
        #     (e.g. 1985-04-12T23:20:50.52Z). If for a piece of data the key is not
        #     present or has an invalid value, that piece is ignored by the pipeline.
        class TimestampSplit; end
      end
    end
  end
end