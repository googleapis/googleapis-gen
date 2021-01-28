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
    module Bigquery
      module V2
        # @!attribute [rw] etag
        #   @return [String]
        #     Output only. A hash of this resource.
        # @!attribute [rw] model_reference
        #   @return [Google::Cloud::Bigquery::V2::ModelReference]
        #     Required. Unique identifier for this model.
        # @!attribute [rw] creation_time
        #   @return [Integer]
        #     Output only. The time when this model was created, in millisecs since the epoch.
        # @!attribute [rw] last_modified_time
        #   @return [Integer]
        #     Output only. The time when this model was last modified, in millisecs since the epoch.
        # @!attribute [rw] description
        #   @return [String]
        #     Optional. A user-friendly description of this model.
        # @!attribute [rw] friendly_name
        #   @return [String]
        #     Optional. A descriptive name for this model.
        # @!attribute [rw] labels
        #   @return [Hash{String => String}]
        #     The labels associated with this model. You can use these to organize
        #     and group your models. Label keys and values can be no longer
        #     than 63 characters, can only contain lowercase letters, numeric
        #     characters, underscores and dashes. International characters are allowed.
        #     Label values are optional. Label keys must start with a letter and each
        #     label in the list must have a different key.
        # @!attribute [rw] expiration_time
        #   @return [Integer]
        #     Optional. The time when this model expires, in milliseconds since the epoch.
        #     If not present, the model will persist indefinitely. Expired models
        #     will be deleted and their storage reclaimed.  The defaultTableExpirationMs
        #     property of the encapsulating dataset can be used to set a default
        #     expirationTime on newly created models.
        # @!attribute [rw] location
        #   @return [String]
        #     Output only. The geographic location where the model resides. This value
        #     is inherited from the dataset.
        # @!attribute [rw] encryption_configuration
        #   @return [Google::Cloud::Bigquery::V2::EncryptionConfiguration]
        #     Custom encryption configuration (e.g., Cloud KMS keys). This shows the
        #     encryption configuration of the model data while stored in BigQuery
        #     storage. This field can be used with PatchModel to update encryption key
        #     for an already encrypted model.
        # @!attribute [rw] model_type
        #   @return [Google::Cloud::Bigquery::V2::Model::ModelType]
        #     Output only. Type of the model resource.
        # @!attribute [rw] training_runs
        #   @return [Array<Google::Cloud::Bigquery::V2::Model::TrainingRun>]
        #     Output only. Information for all training runs in increasing order of start_time.
        # @!attribute [rw] feature_columns
        #   @return [Array<Google::Cloud::Bigquery::V2::StandardSqlField>]
        #     Output only. Input feature columns that were used to train this model.
        # @!attribute [rw] label_columns
        #   @return [Array<Google::Cloud::Bigquery::V2::StandardSqlField>]
        #     Output only. Label columns that were used to train this model.
        #     The output of the model will have a "predicted_" prefix to these columns.
        class Model
          class SeasonalPeriod
            module SeasonalPeriodType
              SEASONAL_PERIOD_TYPE_UNSPECIFIED = 0

              # No seasonality
              NO_SEASONALITY = 1

              # Daily period, 24 hours.
              DAILY = 2

              # Weekly period, 7 days.
              WEEKLY = 3

              # Monthly period, 30 days or irregular.
              MONTHLY = 4

              # Quarterly period, 90 days or irregular.
              QUARTERLY = 5

              # Yearly period, 365 days or irregular.
              YEARLY = 6
            end
          end

          class KmeansEnums
            # Indicates the method used to initialize the centroids for KMeans
            # clustering algorithm.
            module KmeansInitializationMethod
              KMEANS_INITIALIZATION_METHOD_UNSPECIFIED = 0

              # Initializes the centroids randomly.
              RANDOM = 1

              # Initializes the centroids using data specified in
              # kmeans_initialization_column.
              CUSTOM = 2

              # Initializes with kmeans++.
              KMEANS_PLUS_PLUS = 3
            end
          end

          # Evaluation metrics for regression and explicit feedback type matrix
          # factorization models.
          # @!attribute [rw] mean_absolute_error
          #   @return [Google::Protobuf::DoubleValue]
          #     Mean absolute error.
          # @!attribute [rw] mean_squared_error
          #   @return [Google::Protobuf::DoubleValue]
          #     Mean squared error.
          # @!attribute [rw] mean_squared_log_error
          #   @return [Google::Protobuf::DoubleValue]
          #     Mean squared log error.
          # @!attribute [rw] median_absolute_error
          #   @return [Google::Protobuf::DoubleValue]
          #     Median absolute error.
          # @!attribute [rw] r_squared
          #   @return [Google::Protobuf::DoubleValue]
          #     R^2 score.
          class RegressionMetrics; end

          # Aggregate metrics for classification/classifier models. For multi-class
          # models, the metrics are either macro-averaged or micro-averaged. When
          # macro-averaged, the metrics are calculated for each label and then an
          # unweighted average is taken of those values. When micro-averaged, the
          # metric is calculated globally by counting the total number of correctly
          # predicted rows.
          # @!attribute [rw] precision
          #   @return [Google::Protobuf::DoubleValue]
          #     Precision is the fraction of actual positive predictions that had
          #     positive actual labels. For multiclass this is a macro-averaged
          #     metric treating each class as a binary classifier.
          # @!attribute [rw] recall
          #   @return [Google::Protobuf::DoubleValue]
          #     Recall is the fraction of actual positive labels that were given a
          #     positive prediction. For multiclass this is a macro-averaged metric.
          # @!attribute [rw] accuracy
          #   @return [Google::Protobuf::DoubleValue]
          #     Accuracy is the fraction of predictions given the correct label. For
          #     multiclass this is a micro-averaged metric.
          # @!attribute [rw] threshold
          #   @return [Google::Protobuf::DoubleValue]
          #     Threshold at which the metrics are computed. For binary
          #     classification models this is the positive class threshold.
          #     For multi-class classfication models this is the confidence
          #     threshold.
          # @!attribute [rw] f1_score
          #   @return [Google::Protobuf::DoubleValue]
          #     The F1 score is an average of recall and precision. For multiclass
          #     this is a macro-averaged metric.
          # @!attribute [rw] log_loss
          #   @return [Google::Protobuf::DoubleValue]
          #     Logarithmic Loss. For multiclass this is a macro-averaged metric.
          # @!attribute [rw] roc_auc
          #   @return [Google::Protobuf::DoubleValue]
          #     Area Under a ROC Curve. For multiclass this is a macro-averaged
          #     metric.
          class AggregateClassificationMetrics; end

          # Evaluation metrics for binary classification/classifier models.
          # @!attribute [rw] aggregate_classification_metrics
          #   @return [Google::Cloud::Bigquery::V2::Model::AggregateClassificationMetrics]
          #     Aggregate classification metrics.
          # @!attribute [rw] binary_confusion_matrix_list
          #   @return [Array<Google::Cloud::Bigquery::V2::Model::BinaryClassificationMetrics::BinaryConfusionMatrix>]
          #     Binary confusion matrix at multiple thresholds.
          # @!attribute [rw] positive_label
          #   @return [String]
          #     Label representing the positive class.
          # @!attribute [rw] negative_label
          #   @return [String]
          #     Label representing the negative class.
          class BinaryClassificationMetrics
            # Confusion matrix for binary classification models.
            # @!attribute [rw] positive_class_threshold
            #   @return [Google::Protobuf::DoubleValue]
            #     Threshold value used when computing each of the following metric.
            # @!attribute [rw] true_positives
            #   @return [Google::Protobuf::Int64Value]
            #     Number of true samples predicted as true.
            # @!attribute [rw] false_positives
            #   @return [Google::Protobuf::Int64Value]
            #     Number of false samples predicted as true.
            # @!attribute [rw] true_negatives
            #   @return [Google::Protobuf::Int64Value]
            #     Number of true samples predicted as false.
            # @!attribute [rw] false_negatives
            #   @return [Google::Protobuf::Int64Value]
            #     Number of false samples predicted as false.
            # @!attribute [rw] precision
            #   @return [Google::Protobuf::DoubleValue]
            #     The fraction of actual positive predictions that had positive actual
            #     labels.
            # @!attribute [rw] recall
            #   @return [Google::Protobuf::DoubleValue]
            #     The fraction of actual positive labels that were given a positive
            #     prediction.
            # @!attribute [rw] f1_score
            #   @return [Google::Protobuf::DoubleValue]
            #     The equally weighted average of recall and precision.
            # @!attribute [rw] accuracy
            #   @return [Google::Protobuf::DoubleValue]
            #     The fraction of predictions given the correct label.
            class BinaryConfusionMatrix; end
          end

          # Evaluation metrics for multi-class classification/classifier models.
          # @!attribute [rw] aggregate_classification_metrics
          #   @return [Google::Cloud::Bigquery::V2::Model::AggregateClassificationMetrics]
          #     Aggregate classification metrics.
          # @!attribute [rw] confusion_matrix_list
          #   @return [Array<Google::Cloud::Bigquery::V2::Model::MultiClassClassificationMetrics::ConfusionMatrix>]
          #     Confusion matrix at different thresholds.
          class MultiClassClassificationMetrics
            # Confusion matrix for multi-class classification models.
            # @!attribute [rw] confidence_threshold
            #   @return [Google::Protobuf::DoubleValue]
            #     Confidence threshold used when computing the entries of the
            #     confusion matrix.
            # @!attribute [rw] rows
            #   @return [Array<Google::Cloud::Bigquery::V2::Model::MultiClassClassificationMetrics::ConfusionMatrix::Row>]
            #     One row per actual label.
            class ConfusionMatrix
              # A single entry in the confusion matrix.
              # @!attribute [rw] predicted_label
              #   @return [String]
              #     The predicted label. For confidence_threshold > 0, we will
              #     also add an entry indicating the number of items under the
              #     confidence threshold.
              # @!attribute [rw] item_count
              #   @return [Google::Protobuf::Int64Value]
              #     Number of items being predicted as this label.
              class Entry; end

              # A single row in the confusion matrix.
              # @!attribute [rw] actual_label
              #   @return [String]
              #     The original label of this row.
              # @!attribute [rw] entries
              #   @return [Array<Google::Cloud::Bigquery::V2::Model::MultiClassClassificationMetrics::ConfusionMatrix::Entry>]
              #     Info describing predicted label distribution.
              class Row; end
            end
          end

          # Evaluation metrics for clustering models.
          # @!attribute [rw] davies_bouldin_index
          #   @return [Google::Protobuf::DoubleValue]
          #     Davies-Bouldin index.
          # @!attribute [rw] mean_squared_distance
          #   @return [Google::Protobuf::DoubleValue]
          #     Mean of squared distances between each sample to its cluster centroid.
          # @!attribute [rw] clusters
          #   @return [Array<Google::Cloud::Bigquery::V2::Model::ClusteringMetrics::Cluster>]
          #     [Beta] Information for all clusters.
          class ClusteringMetrics
            # Message containing the information about one cluster.
            # @!attribute [rw] centroid_id
            #   @return [Integer]
            #     Centroid id.
            # @!attribute [rw] feature_values
            #   @return [Array<Google::Cloud::Bigquery::V2::Model::ClusteringMetrics::Cluster::FeatureValue>]
            #     Values of highly variant features for this cluster.
            # @!attribute [rw] count
            #   @return [Google::Protobuf::Int64Value]
            #     Count of training data rows that were assigned to this cluster.
            class Cluster
              # Representative value of a single feature within the cluster.
              # @!attribute [rw] feature_column
              #   @return [String]
              #     The feature column name.
              # @!attribute [rw] numerical_value
              #   @return [Google::Protobuf::DoubleValue]
              #     The numerical feature value. This is the centroid value for this
              #     feature.
              # @!attribute [rw] categorical_value
              #   @return [Google::Cloud::Bigquery::V2::Model::ClusteringMetrics::Cluster::FeatureValue::CategoricalValue]
              #     The categorical feature value.
              class FeatureValue
                # Representative value of a categorical feature.
                # @!attribute [rw] category_counts
                #   @return [Array<Google::Cloud::Bigquery::V2::Model::ClusteringMetrics::Cluster::FeatureValue::CategoricalValue::CategoryCount>]
                #     Counts of all categories for the categorical feature. If there are
                #     more than ten categories, we return top ten (by count) and return
                #     one more CategoryCount with category "_OTHER_" and count as
                #     aggregate counts of remaining categories.
                class CategoricalValue
                  # Represents the count of a single category within the cluster.
                  # @!attribute [rw] category
                  #   @return [String]
                  #     The name of category.
                  # @!attribute [rw] count
                  #   @return [Google::Protobuf::Int64Value]
                  #     The count of training samples matching the category within the
                  #     cluster.
                  class CategoryCount; end
                end
              end
            end
          end

          # Evaluation metrics used by weighted-ALS models specified by
          # feedback_type=implicit.
          # @!attribute [rw] mean_average_precision
          #   @return [Google::Protobuf::DoubleValue]
          #     Calculates a precision per user for all the items by ranking them and
          #     then averages all the precisions across all the users.
          # @!attribute [rw] mean_squared_error
          #   @return [Google::Protobuf::DoubleValue]
          #     Similar to the mean squared error computed in regression and explicit
          #     recommendation models except instead of computing the rating directly,
          #     the output from evaluate is computed against a preference which is 1 or 0
          #     depending on if the rating exists or not.
          # @!attribute [rw] normalized_discounted_cumulative_gain
          #   @return [Google::Protobuf::DoubleValue]
          #     A metric to determine the goodness of a ranking calculated from the
          #     predicted confidence by comparing it to an ideal rank measured by the
          #     original ratings.
          # @!attribute [rw] average_rank
          #   @return [Google::Protobuf::DoubleValue]
          #     Determines the goodness of a ranking by computing the percentile rank
          #     from the predicted confidence and dividing it by the original rank.
          class RankingMetrics; end

          # Model evaluation metrics for ARIMA forecasting models.
          # @!attribute [rw] non_seasonal_order
          #   @return [Array<Google::Cloud::Bigquery::V2::Model::ArimaOrder>]
          #     Non-seasonal order.
          # @!attribute [rw] arima_fitting_metrics
          #   @return [Array<Google::Cloud::Bigquery::V2::Model::ArimaFittingMetrics>]
          #     Arima model fitting metrics.
          # @!attribute [rw] seasonal_periods
          #   @return [Array<Google::Cloud::Bigquery::V2::Model::SeasonalPeriod::SeasonalPeriodType>]
          #     Seasonal periods. Repeated because multiple periods are supported for one
          #     time series.
          # @!attribute [rw] has_drift
          #   @return [Array<true, false>]
          #     Whether Arima model fitted with drift or not. It is always false when d
          #     is not 1.
          # @!attribute [rw] time_series_id
          #   @return [Array<String>]
          #     Id to differentiate different time series for the large-scale case.
          # @!attribute [rw] arima_single_model_forecasting_metrics
          #   @return [Array<Google::Cloud::Bigquery::V2::Model::ArimaForecastingMetrics::ArimaSingleModelForecastingMetrics>]
          #     Repeated as there can be many metric sets (one for each model) in
          #     auto-arima and the large-scale case.
          class ArimaForecastingMetrics
            # Model evaluation metrics for a single ARIMA forecasting model.
            # @!attribute [rw] non_seasonal_order
            #   @return [Google::Cloud::Bigquery::V2::Model::ArimaOrder]
            #     Non-seasonal order.
            # @!attribute [rw] arima_fitting_metrics
            #   @return [Google::Cloud::Bigquery::V2::Model::ArimaFittingMetrics]
            #     Arima fitting metrics.
            # @!attribute [rw] has_drift
            #   @return [true, false]
            #     Is arima model fitted with drift or not. It is always false when d
            #     is not 1.
            # @!attribute [rw] time_series_id
            #   @return [String]
            #     The id to indicate different time series.
            # @!attribute [rw] seasonal_periods
            #   @return [Array<Google::Cloud::Bigquery::V2::Model::SeasonalPeriod::SeasonalPeriodType>]
            #     Seasonal periods. Repeated because multiple periods are supported
            #     for one time series.
            class ArimaSingleModelForecastingMetrics; end
          end

          # Evaluation metrics of a model. These are either computed on all training
          # data or just the eval data based on whether eval data was used during
          # training. These are not present for imported models.
          # @!attribute [rw] regression_metrics
          #   @return [Google::Cloud::Bigquery::V2::Model::RegressionMetrics]
          #     Populated for regression models and explicit feedback type matrix
          #     factorization models.
          # @!attribute [rw] binary_classification_metrics
          #   @return [Google::Cloud::Bigquery::V2::Model::BinaryClassificationMetrics]
          #     Populated for binary classification/classifier models.
          # @!attribute [rw] multi_class_classification_metrics
          #   @return [Google::Cloud::Bigquery::V2::Model::MultiClassClassificationMetrics]
          #     Populated for multi-class classification/classifier models.
          # @!attribute [rw] clustering_metrics
          #   @return [Google::Cloud::Bigquery::V2::Model::ClusteringMetrics]
          #     Populated for clustering models.
          # @!attribute [rw] ranking_metrics
          #   @return [Google::Cloud::Bigquery::V2::Model::RankingMetrics]
          #     Populated for implicit feedback type matrix factorization models.
          # @!attribute [rw] arima_forecasting_metrics
          #   @return [Google::Cloud::Bigquery::V2::Model::ArimaForecastingMetrics]
          #     Populated for ARIMA models.
          class EvaluationMetrics; end

          # Data split result. This contains references to the training and evaluation
          # data tables that were used to train the model.
          # @!attribute [rw] training_table
          #   @return [Google::Cloud::Bigquery::V2::TableReference]
          #     Table reference of the training data after split.
          # @!attribute [rw] evaluation_table
          #   @return [Google::Cloud::Bigquery::V2::TableReference]
          #     Table reference of the evaluation data after split.
          class DataSplitResult; end

          # Arima order, can be used for both non-seasonal and seasonal parts.
          # @!attribute [rw] p
          #   @return [Integer]
          #     Order of the autoregressive part.
          # @!attribute [rw] d
          #   @return [Integer]
          #     Order of the differencing part.
          # @!attribute [rw] q
          #   @return [Integer]
          #     Order of the moving-average part.
          class ArimaOrder; end

          # ARIMA model fitting metrics.
          # @!attribute [rw] log_likelihood
          #   @return [Float]
          #     Log-likelihood.
          # @!attribute [rw] aic
          #   @return [Float]
          #     AIC.
          # @!attribute [rw] variance
          #   @return [Float]
          #     Variance.
          class ArimaFittingMetrics; end

          # Global explanations containing the top most important features
          # after training.
          # @!attribute [rw] explanations
          #   @return [Array<Google::Cloud::Bigquery::V2::Model::GlobalExplanation::Explanation>]
          #     A list of the top global explanations. Sorted by absolute value of
          #     attribution in descending order.
          # @!attribute [rw] class_label
          #   @return [String]
          #     Class label for this set of global explanations. Will be empty/null for
          #     binary logistic and linear regression models. Sorted alphabetically in
          #     descending order.
          class GlobalExplanation
            # Explanation for a single feature.
            # @!attribute [rw] feature_name
            #   @return [String]
            #     Full name of the feature. For non-numerical features, will be
            #     formatted like <column_name>.<encoded_feature_name>. Overall size of
            #     feature name will always be truncated to first 120 characters.
            # @!attribute [rw] attribution
            #   @return [Google::Protobuf::DoubleValue]
            #     Attribution of feature.
            class Explanation; end
          end

          # Information about a single training query run for the model.
          # @!attribute [rw] training_options
          #   @return [Google::Cloud::Bigquery::V2::Model::TrainingRun::TrainingOptions]
          #     Options that were used for this training run, includes
          #     user specified and default options that were used.
          # @!attribute [rw] start_time
          #   @return [Google::Protobuf::Timestamp]
          #     The start time of this training run.
          # @!attribute [rw] results
          #   @return [Array<Google::Cloud::Bigquery::V2::Model::TrainingRun::IterationResult>]
          #     Output of each iteration run, results.size() <= max_iterations.
          # @!attribute [rw] evaluation_metrics
          #   @return [Google::Cloud::Bigquery::V2::Model::EvaluationMetrics]
          #     The evaluation metrics over training/eval data that were computed at the
          #     end of training.
          # @!attribute [rw] data_split_result
          #   @return [Google::Cloud::Bigquery::V2::Model::DataSplitResult]
          #     Data split result of the training run. Only set when the input data is
          #     actually split.
          # @!attribute [rw] global_explanations
          #   @return [Array<Google::Cloud::Bigquery::V2::Model::GlobalExplanation>]
          #     Global explanations for important features of the model. For multi-class
          #     models, there is one entry for each label class. For other models, there
          #     is only one entry in the list.
          class TrainingRun
            # @!attribute [rw] max_iterations
            #   @return [Integer]
            #     The maximum number of iterations in training. Used only for iterative
            #     training algorithms.
            # @!attribute [rw] loss_type
            #   @return [Google::Cloud::Bigquery::V2::Model::LossType]
            #     Type of loss function used during training run.
            # @!attribute [rw] learn_rate
            #   @return [Float]
            #     Learning rate in training. Used only for iterative training algorithms.
            # @!attribute [rw] l1_regularization
            #   @return [Google::Protobuf::DoubleValue]
            #     L1 regularization coefficient.
            # @!attribute [rw] l2_regularization
            #   @return [Google::Protobuf::DoubleValue]
            #     L2 regularization coefficient.
            # @!attribute [rw] min_relative_progress
            #   @return [Google::Protobuf::DoubleValue]
            #     When early_stop is true, stops training when accuracy improvement is
            #     less than 'min_relative_progress'. Used only for iterative training
            #     algorithms.
            # @!attribute [rw] warm_start
            #   @return [Google::Protobuf::BoolValue]
            #     Whether to train a model from the last checkpoint.
            # @!attribute [rw] early_stop
            #   @return [Google::Protobuf::BoolValue]
            #     Whether to stop early when the loss doesn't improve significantly
            #     any more (compared to min_relative_progress). Used only for iterative
            #     training algorithms.
            # @!attribute [rw] input_label_columns
            #   @return [Array<String>]
            #     Name of input label columns in training data.
            # @!attribute [rw] data_split_method
            #   @return [Google::Cloud::Bigquery::V2::Model::DataSplitMethod]
            #     The data split type for training and evaluation, e.g. RANDOM.
            # @!attribute [rw] data_split_eval_fraction
            #   @return [Float]
            #     The fraction of evaluation data over the whole input data. The rest
            #     of data will be used as training data. The format should be double.
            #     Accurate to two decimal places.
            #     Default value is 0.2.
            # @!attribute [rw] data_split_column
            #   @return [String]
            #     The column to split data with. This column won't be used as a
            #     feature.
            #     1. When data_split_method is CUSTOM, the corresponding column should
            #     be boolean. The rows with true value tag are eval data, and the false
            #     are training data.
            #     2. When data_split_method is SEQ, the first DATA_SPLIT_EVAL_FRACTION
            #     rows (from smallest to largest) in the corresponding column are used
            #     as training data, and the rest are eval data. It respects the order
            #     in Orderable data types:
            #     https://cloud.google.com/bigquery/docs/reference/standard-sql/data-types#data-type-properties
            # @!attribute [rw] learn_rate_strategy
            #   @return [Google::Cloud::Bigquery::V2::Model::LearnRateStrategy]
            #     The strategy to determine learn rate for the current iteration.
            # @!attribute [rw] initial_learn_rate
            #   @return [Float]
            #     Specifies the initial learning rate for the line search learn rate
            #     strategy.
            # @!attribute [rw] label_class_weights
            #   @return [Hash{String => Float}]
            #     Weights associated with each label class, for rebalancing the
            #     training data. Only applicable for classification models.
            # @!attribute [rw] user_column
            #   @return [String]
            #     User column specified for matrix factorization models.
            # @!attribute [rw] item_column
            #   @return [String]
            #     Item column specified for matrix factorization models.
            # @!attribute [rw] distance_type
            #   @return [Google::Cloud::Bigquery::V2::Model::DistanceType]
            #     Distance type for clustering models.
            # @!attribute [rw] num_clusters
            #   @return [Integer]
            #     Number of clusters for clustering models.
            # @!attribute [rw] model_uri
            #   @return [String]
            #     [Beta] Google Cloud Storage URI from which the model was imported. Only
            #     applicable for imported models.
            # @!attribute [rw] optimization_strategy
            #   @return [Google::Cloud::Bigquery::V2::Model::OptimizationStrategy]
            #     Optimization strategy for training linear regression models.
            # @!attribute [rw] hidden_units
            #   @return [Array<Integer>]
            #     Hidden units for dnn models.
            # @!attribute [rw] batch_size
            #   @return [Integer]
            #     Batch size for dnn models.
            # @!attribute [rw] dropout
            #   @return [Google::Protobuf::DoubleValue]
            #     Dropout probability for dnn models.
            # @!attribute [rw] max_tree_depth
            #   @return [Integer]
            #     Maximum depth of a tree for boosted tree models.
            # @!attribute [rw] subsample
            #   @return [Float]
            #     Subsample fraction of the training data to grow tree to prevent
            #     overfitting for boosted tree models.
            # @!attribute [rw] min_split_loss
            #   @return [Google::Protobuf::DoubleValue]
            #     Minimum split loss for boosted tree models.
            # @!attribute [rw] num_factors
            #   @return [Integer]
            #     Num factors specified for matrix factorization models.
            # @!attribute [rw] feedback_type
            #   @return [Google::Cloud::Bigquery::V2::Model::FeedbackType]
            #     Feedback type that specifies which algorithm to run for matrix
            #     factorization.
            # @!attribute [rw] wals_alpha
            #   @return [Google::Protobuf::DoubleValue]
            #     Hyperparameter for matrix factoration when implicit feedback type is
            #     specified.
            # @!attribute [rw] kmeans_initialization_method
            #   @return [Google::Cloud::Bigquery::V2::Model::KmeansEnums::KmeansInitializationMethod]
            #     The method used to initialize the centroids for kmeans algorithm.
            # @!attribute [rw] kmeans_initialization_column
            #   @return [String]
            #     The column used to provide the initial centroids for kmeans algorithm
            #     when kmeans_initialization_method is CUSTOM.
            # @!attribute [rw] time_series_timestamp_column
            #   @return [String]
            #     Column to be designated as time series timestamp for ARIMA model.
            # @!attribute [rw] time_series_data_column
            #   @return [String]
            #     Column to be designated as time series data for ARIMA model.
            # @!attribute [rw] auto_arima
            #   @return [true, false]
            #     Whether to enable auto ARIMA or not.
            # @!attribute [rw] non_seasonal_order
            #   @return [Google::Cloud::Bigquery::V2::Model::ArimaOrder]
            #     A specification of the non-seasonal part of the ARIMA model: the three
            #     components (p, d, q) are the AR order, the degree of differencing, and
            #     the MA order.
            # @!attribute [rw] data_frequency
            #   @return [Google::Cloud::Bigquery::V2::Model::DataFrequency]
            #     The data frequency of a time series.
            # @!attribute [rw] include_drift
            #   @return [true, false]
            #     Include drift when fitting an ARIMA model.
            # @!attribute [rw] holiday_region
            #   @return [Google::Cloud::Bigquery::V2::Model::HolidayRegion]
            #     The geographical region based on which the holidays are considered in
            #     time series modeling. If a valid value is specified, then holiday
            #     effects modeling is enabled.
            # @!attribute [rw] time_series_id_column
            #   @return [String]
            #     The id column that will be used to indicate different time series to
            #     forecast in parallel.
            # @!attribute [rw] horizon
            #   @return [Integer]
            #     The number of periods ahead that need to be forecasted.
            # @!attribute [rw] preserve_input_structs
            #   @return [true, false]
            #     Whether to preserve the input structs in output feature names.
            #     Suppose there is a struct A with field b.
            #     When false (default), the output feature name is A_b.
            #     When true, the output feature name is A.b.
            # @!attribute [rw] auto_arima_max_order
            #   @return [Integer]
            #     The max value of non-seasonal p and q.
            class TrainingOptions; end

            # Information about a single iteration of the training run.
            # @!attribute [rw] index
            #   @return [Google::Protobuf::Int32Value]
            #     Index of the iteration, 0 based.
            # @!attribute [rw] duration_ms
            #   @return [Google::Protobuf::Int64Value]
            #     Time taken to run the iteration in milliseconds.
            # @!attribute [rw] training_loss
            #   @return [Google::Protobuf::DoubleValue]
            #     Loss computed on the training data at the end of iteration.
            # @!attribute [rw] eval_loss
            #   @return [Google::Protobuf::DoubleValue]
            #     Loss computed on the eval data at the end of iteration.
            # @!attribute [rw] learn_rate
            #   @return [Float]
            #     Learn rate used for this iteration.
            # @!attribute [rw] cluster_infos
            #   @return [Array<Google::Cloud::Bigquery::V2::Model::TrainingRun::IterationResult::ClusterInfo>]
            #     Information about top clusters for clustering models.
            # @!attribute [rw] arima_result
            #   @return [Google::Cloud::Bigquery::V2::Model::TrainingRun::IterationResult::ArimaResult]
            class IterationResult
              # Information about a single cluster for clustering model.
              # @!attribute [rw] centroid_id
              #   @return [Integer]
              #     Centroid id.
              # @!attribute [rw] cluster_radius
              #   @return [Google::Protobuf::DoubleValue]
              #     Cluster radius, the average distance from centroid
              #     to each point assigned to the cluster.
              # @!attribute [rw] cluster_size
              #   @return [Google::Protobuf::Int64Value]
              #     Cluster size, the total number of points assigned to the cluster.
              class ClusterInfo; end

              # (Auto-)arima fitting result. Wrap everything in ArimaResult for easier
              # refactoring if we want to use model-specific iteration results.
              # @!attribute [rw] arima_model_info
              #   @return [Array<Google::Cloud::Bigquery::V2::Model::TrainingRun::IterationResult::ArimaResult::ArimaModelInfo>]
              #     This message is repeated because there are multiple arima models
              #     fitted in auto-arima. For non-auto-arima model, its size is one.
              # @!attribute [rw] seasonal_periods
              #   @return [Array<Google::Cloud::Bigquery::V2::Model::SeasonalPeriod::SeasonalPeriodType>]
              #     Seasonal periods. Repeated because multiple periods are supported for
              #     one time series.
              class ArimaResult
                # Arima coefficients.
                # @!attribute [rw] auto_regressive_coefficients
                #   @return [Array<Float>]
                #     Auto-regressive coefficients, an array of double.
                # @!attribute [rw] moving_average_coefficients
                #   @return [Array<Float>]
                #     Moving-average coefficients, an array of double.
                # @!attribute [rw] intercept_coefficient
                #   @return [Float]
                #     Intercept coefficient, just a double not an array.
                class ArimaCoefficients; end

                # Arima model information.
                # @!attribute [rw] non_seasonal_order
                #   @return [Google::Cloud::Bigquery::V2::Model::ArimaOrder]
                #     Non-seasonal order.
                # @!attribute [rw] arima_coefficients
                #   @return [Google::Cloud::Bigquery::V2::Model::TrainingRun::IterationResult::ArimaResult::ArimaCoefficients]
                #     Arima coefficients.
                # @!attribute [rw] arima_fitting_metrics
                #   @return [Google::Cloud::Bigquery::V2::Model::ArimaFittingMetrics]
                #     Arima fitting metrics.
                # @!attribute [rw] has_drift
                #   @return [true, false]
                #     Whether Arima model fitted with drift or not. It is always false
                #     when d is not 1.
                # @!attribute [rw] time_series_id
                #   @return [String]
                #     The id to indicate different time series.
                # @!attribute [rw] seasonal_periods
                #   @return [Array<Google::Cloud::Bigquery::V2::Model::SeasonalPeriod::SeasonalPeriodType>]
                #     Seasonal periods. Repeated because multiple periods are supported
                #     for one time series.
                class ArimaModelInfo; end
              end
            end
          end

          # Type of supported data frequency for time series forecasting models.
          module DataFrequency
            DATA_FREQUENCY_UNSPECIFIED = 0

            # Automatically inferred from timestamps.
            AUTO_FREQUENCY = 1

            # Yearly data.
            YEARLY = 2

            # Quarterly data.
            QUARTERLY = 3

            # Monthly data.
            MONTHLY = 4

            # Weekly data.
            WEEKLY = 5

            # Daily data.
            DAILY = 6

            # Hourly data.
            HOURLY = 7
          end

          # Indicates the method to split input data into multiple tables.
          module DataSplitMethod
            DATA_SPLIT_METHOD_UNSPECIFIED = 0

            # Splits data randomly.
            RANDOM = 1

            # Splits data with the user provided tags.
            CUSTOM = 2

            # Splits data sequentially.
            SEQUENTIAL = 3

            # Data split will be skipped.
            NO_SPLIT = 4

            # Splits data automatically: Uses NO_SPLIT if the data size is small.
            # Otherwise uses RANDOM.
            AUTO_SPLIT = 5
          end

          # Distance metric used to compute the distance between two points.
          module DistanceType
            DISTANCE_TYPE_UNSPECIFIED = 0

            # Eculidean distance.
            EUCLIDEAN = 1

            # Cosine distance.
            COSINE = 2
          end

          # Indicates the training algorithm to use for matrix factorization models.
          module FeedbackType
            FEEDBACK_TYPE_UNSPECIFIED = 0

            # Use weighted-als for implicit feedback problems.
            IMPLICIT = 1

            # Use nonweighted-als for explicit feedback problems.
            EXPLICIT = 2
          end

          # Type of supported holiday regions for time series forecasting models.
          module HolidayRegion
            # Holiday region unspecified.
            HOLIDAY_REGION_UNSPECIFIED = 0

            # Global.
            GLOBAL = 1

            # North America.
            NA = 2

            # Japan and Asia Pacific: Korea, Greater China, India, Australia, and New
            # Zealand.
            JAPAC = 3

            # Europe, the Middle East and Africa.
            EMEA = 4

            # Latin America and the Caribbean.
            LAC = 5

            # United Arab Emirates
            AE = 6

            # Argentina
            AR = 7

            # Austria
            AT = 8

            # Australia
            AU = 9

            # Belgium
            BE = 10

            # Brazil
            BR = 11

            # Canada
            CA = 12

            # Switzerland
            CH = 13

            # Chile
            CL = 14

            # China
            CN = 15

            # Colombia
            CO = 16

            # Czechoslovakia
            CS = 17

            # Czech Republic
            CZ = 18

            # Germany
            DE = 19

            # Denmark
            DK = 20

            # Algeria
            DZ = 21

            # Ecuador
            EC = 22

            # Estonia
            EE = 23

            # Egypt
            EG = 24

            # Spain
            ES = 25

            # Finland
            FI = 26

            # France
            FR = 27

            # Great Britain (United Kingdom)
            GB = 28

            # Greece
            GR = 29

            # Hong Kong
            HK = 30

            # Hungary
            HU = 31

            # Indonesia
            ID = 32

            # Ireland
            IE = 33

            # Israel
            IL = 34

            # India
            IN = 35

            # Iran
            IR = 36

            # Italy
            IT = 37

            # Japan
            JP = 38

            # Korea (South)
            KR = 39

            # Latvia
            LV = 40

            # Morocco
            MA = 41

            # Mexico
            MX = 42

            # Malaysia
            MY = 43

            # Nigeria
            NG = 44

            # Netherlands
            NL = 45

            # Norway
            NO = 46

            # New Zealand
            NZ = 47

            # Peru
            PE = 48

            # Philippines
            PH = 49

            # Pakistan
            PK = 50

            # Poland
            PL = 51

            # Portugal
            PT = 52

            # Romania
            RO = 53

            # Serbia
            RS = 54

            # Russian Federation
            RU = 55

            # Saudi Arabia
            SA = 56

            # Sweden
            SE = 57

            # Singapore
            SG = 58

            # Slovenia
            SI = 59

            # Slovakia
            SK = 60

            # Thailand
            TH = 61

            # Turkey
            TR = 62

            # Taiwan
            TW = 63

            # Ukraine
            UA = 64

            # United States
            US = 65

            # Venezuela
            VE = 66

            # Viet Nam
            VN = 67

            # South Africa
            ZA = 68
          end

          # Indicates the learning rate optimization strategy to use.
          module LearnRateStrategy
            LEARN_RATE_STRATEGY_UNSPECIFIED = 0

            # Use line search to determine learning rate.
            LINE_SEARCH = 1

            # Use a constant learning rate.
            CONSTANT = 2
          end

          # Loss metric to evaluate model training performance.
          module LossType
            LOSS_TYPE_UNSPECIFIED = 0

            # Mean squared loss, used for linear regression.
            MEAN_SQUARED_LOSS = 1

            # Mean log loss, used for logistic regression.
            MEAN_LOG_LOSS = 2
          end

          # Indicates the type of the Model.
          module ModelType
            MODEL_TYPE_UNSPECIFIED = 0

            # Linear regression model.
            LINEAR_REGRESSION = 1

            # Logistic regression based classification model.
            LOGISTIC_REGRESSION = 2

            # K-means clustering model.
            KMEANS = 3

            # Matrix factorization model.
            MATRIX_FACTORIZATION = 4

            # [Beta] DNN classifier model.
            DNN_CLASSIFIER = 5

            # [Beta] An imported TensorFlow model.
            TENSORFLOW = 6

            # [Beta] DNN regressor model.
            DNN_REGRESSOR = 7

            # [Beta] Boosted tree regressor model.
            BOOSTED_TREE_REGRESSOR = 9

            # [Beta] Boosted tree classifier model.
            BOOSTED_TREE_CLASSIFIER = 10

            # [Beta] ARIMA model.
            ARIMA = 11

            # [Beta] AutoML Tables regression model.
            AUTOML_REGRESSOR = 12

            # [Beta] AutoML Tables classification model.
            AUTOML_CLASSIFIER = 13
          end

          # Indicates the optimization strategy used for training.
          module OptimizationStrategy
            OPTIMIZATION_STRATEGY_UNSPECIFIED = 0

            # Uses an iterative batch gradient descent algorithm.
            BATCH_GRADIENT_DESCENT = 1

            # Uses a normal equation to solve linear regression problem.
            NORMAL_EQUATION = 2
          end
        end

        # @!attribute [rw] project_id
        #   @return [String]
        #     Required. Project ID of the requested model.
        # @!attribute [rw] dataset_id
        #   @return [String]
        #     Required. Dataset ID of the requested model.
        # @!attribute [rw] model_id
        #   @return [String]
        #     Required. Model ID of the requested model.
        class GetModelRequest; end

        # @!attribute [rw] project_id
        #   @return [String]
        #     Required. Project ID of the model to patch.
        # @!attribute [rw] dataset_id
        #   @return [String]
        #     Required. Dataset ID of the model to patch.
        # @!attribute [rw] model_id
        #   @return [String]
        #     Required. Model ID of the model to patch.
        # @!attribute [rw] model
        #   @return [Google::Cloud::Bigquery::V2::Model]
        #     Required. Patched model.
        #     Follows RFC5789 patch semantics. Missing fields are not updated.
        #     To clear a field, explicitly set to default value.
        class PatchModelRequest; end

        # @!attribute [rw] project_id
        #   @return [String]
        #     Required. Project ID of the model to delete.
        # @!attribute [rw] dataset_id
        #   @return [String]
        #     Required. Dataset ID of the model to delete.
        # @!attribute [rw] model_id
        #   @return [String]
        #     Required. Model ID of the model to delete.
        class DeleteModelRequest; end

        # @!attribute [rw] project_id
        #   @return [String]
        #     Required. Project ID of the models to list.
        # @!attribute [rw] dataset_id
        #   @return [String]
        #     Required. Dataset ID of the models to list.
        # @!attribute [rw] max_results
        #   @return [Google::Protobuf::UInt32Value]
        #     The maximum number of results to return in a single response page.
        #     Leverage the page tokens to iterate through the entire collection.
        # @!attribute [rw] page_token
        #   @return [String]
        #     Page token, returned by a previous call to request the next page of
        #     results
        class ListModelsRequest; end

        # @!attribute [rw] models
        #   @return [Array<Google::Cloud::Bigquery::V2::Model>]
        #     Models in the requested dataset. Only the following fields are populated:
        #     model_reference, model_type, creation_time, last_modified_time and
        #     labels.
        # @!attribute [rw] next_page_token
        #   @return [String]
        #     A token to request the next page of results.
        class ListModelsResponse; end
      end
    end
  end
end