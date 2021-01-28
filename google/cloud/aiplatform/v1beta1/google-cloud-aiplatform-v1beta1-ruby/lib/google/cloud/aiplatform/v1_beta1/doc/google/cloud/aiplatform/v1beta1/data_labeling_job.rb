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
        # DataLabelingJob is used to trigger a human labeling job on unlabeled data
        # from the following Dataset:
        # @!attribute [rw] name
        #   @return [String]
        #     Output only. Resource name of the DataLabelingJob.
        # @!attribute [rw] display_name
        #   @return [String]
        #     Required. The user-defined name of the DataLabelingJob.
        #     The name can be up to 128 characters long and can be consist of any UTF-8
        #     characters.
        #     Display name of a DataLabelingJob.
        # @!attribute [rw] datasets
        #   @return [Array<String>]
        #     Required. Dataset resource names. Right now we only support labeling from a single
        #     Dataset.
        #     Format:
        #     `projects/{project}/locations/{location}/datasets/{dataset}`
        # @!attribute [rw] annotation_labels
        #   @return [Hash{String => String}]
        #     Labels to assign to annotations generated by this DataLabelingJob.
        #
        #     Label keys and values can be no longer than 64 characters
        #     (Unicode codepoints), can only contain lowercase letters, numeric
        #     characters, underscores and dashes. International characters are allowed.
        #     See https://goo.gl/xmQnxf for more information and examples of labels.
        #     System reserved label keys are prefixed with "aiplatform.googleapis.com/"
        #     and are immutable.
        # @!attribute [rw] labeler_count
        #   @return [Integer]
        #     Required. Number of labelers to work on each DataItem.
        # @!attribute [rw] instruction_uri
        #   @return [String]
        #     Required. The Google Cloud Storage location of the instruction pdf. This pdf is
        #     shared with labelers, and provides detailed description on how to label
        #     DataItems in Datasets.
        # @!attribute [rw] inputs_schema_uri
        #   @return [String]
        #     Required. Points to a YAML file stored on Google Cloud Storage describing the
        #     config for a specific type of DataLabelingJob.
        #     The schema files that can be used here are found in the
        #     https://storage.googleapis.com/google-cloud-aiplatform bucket in the
        #     /schema/datalabelingjob/inputs/ folder.
        # @!attribute [rw] inputs
        #   @return [Google::Protobuf::Value]
        #     Required. Input config parameters for the DataLabelingJob.
        # @!attribute [rw] state
        #   @return [Google::Cloud::Aiplatform::V1beta1::JobState]
        #     Output only. The detailed state of the job.
        # @!attribute [rw] labeling_progress
        #   @return [Integer]
        #     Output only. Current labeling job progress percentage scaled in interval [0, 100],
        #     indicating the percentage of DataItems that has been finished.
        # @!attribute [rw] current_spend
        #   @return [Google::Type::Money]
        #     Output only. Estimated cost(in US dollars) that the DataLabelingJob has incurred to
        #     date.
        # @!attribute [rw] create_time
        #   @return [Google::Protobuf::Timestamp]
        #     Output only. Timestamp when this DataLabelingJob was created.
        # @!attribute [rw] update_time
        #   @return [Google::Protobuf::Timestamp]
        #     Output only. Timestamp when this DataLabelingJob was updated most recently.
        # @!attribute [rw] error
        #   @return [Google::Rpc::Status]
        #     Output only. DataLabelingJob errors. It is only populated when job's state is
        #     `JOB_STATE_FAILED` or `JOB_STATE_CANCELLED`.
        # @!attribute [rw] labels
        #   @return [Hash{String => String}]
        #     The labels with user-defined metadata to organize your DataLabelingJobs.
        #
        #     Label keys and values can be no longer than 64 characters
        #     (Unicode codepoints), can only contain lowercase letters, numeric
        #     characters, underscores and dashes. International characters are allowed.
        #
        #     See https://goo.gl/xmQnxf for more information and examples of labels.
        #     System reserved label keys are prefixed with "aiplatform.googleapis.com/"
        #     and are immutable. Following system labels exist for each DataLabelingJob:
        #
        #     * "aiplatform.googleapis.com/schema": output only, its value is the
        #       {Google::Cloud::Aiplatform::V1beta1::DataLabelingJob#inputs_schema_uri inputs_schema}'s title.
        # @!attribute [rw] specialist_pools
        #   @return [Array<String>]
        #     The SpecialistPools' resource names associated with this job.
        # @!attribute [rw] active_learning_config
        #   @return [Google::Cloud::Aiplatform::V1beta1::ActiveLearningConfig]
        #     Paramaters that configure active learning pipeline. Active learning will
        #     label the data incrementally via several iterations. For every iteration,
        #     it will select a batch of data based on the sampling strategy.
        class DataLabelingJob; end

        # Paramaters that configure active learning pipeline. Active learning will
        #  label the data incrementally by several iterations. For every iteration, it
        #  will select a batch of data based on the sampling strategy.
        # @!attribute [rw] max_data_item_count
        #   @return [Integer]
        #     Max number of human labeled DataItems.
        # @!attribute [rw] max_data_item_percentage
        #   @return [Integer]
        #     Max percent of total DataItems for human labeling.
        # @!attribute [rw] sample_config
        #   @return [Google::Cloud::Aiplatform::V1beta1::SampleConfig]
        #     Active learning data sampling config. For every active learning labeling
        #     iteration, it will select a batch of data based on the sampling strategy.
        # @!attribute [rw] training_config
        #   @return [Google::Cloud::Aiplatform::V1beta1::TrainingConfig]
        #     CMLE training config. For every active learning labeling iteration, system
        #     will train a machine learning model on CMLE. The trained model will be used
        #     by data sampling algorithm to select DataItems.
        class ActiveLearningConfig; end

        # Active learning data sampling config. For every active learning labeling
        # iteration, it will select a batch of data based on the sampling strategy.
        # @!attribute [rw] initial_batch_sample_percentage
        #   @return [Integer]
        #     The percentage of data needed to be labeled in the first batch.
        # @!attribute [rw] following_batch_sample_percentage
        #   @return [Integer]
        #     The percentage of data needed to be labeled in each following batch
        #     (except the first batch).
        # @!attribute [rw] sample_strategy
        #   @return [Google::Cloud::Aiplatform::V1beta1::SampleConfig::SampleStrategy]
        #     Field to chose sampling strategy. Sampling strategy will decide which data
        #     should be selected for human labeling in every batch.
        class SampleConfig
          # Sample strategy decides which subset of DataItems should be selected for
          # human labeling in every batch.
          module SampleStrategy
            # Default will be treated as UNCERTAINTY.
            SAMPLE_STRATEGY_UNSPECIFIED = 0

            # Sample the most uncertain data to label.
            UNCERTAINTY = 1
          end
        end

        # CMLE training config. For every active learning labeling iteration, system
        # will train a machine learning model on CMLE. The trained model will be used
        # by data sampling algorithm to select DataItems.
        # @!attribute [rw] timeout_training_milli_hours
        #   @return [Integer]
        #     The timeout hours for the CMLE training job, expressed in milli hours
        #     i.e. 1,000 value in this field means 1 hour.
        class TrainingConfig; end
      end
    end
  end
end