// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/automl/v1beta1/detection.proto

package com.google.cloud.automl.v1beta1;

public interface VideoObjectTrackingEvaluationMetricsOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.cloud.automl.v1beta1.VideoObjectTrackingEvaluationMetrics)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * Output only. The number of video frames used to create this evaluation.
   * </pre>
   *
   * <code>int32 evaluated_frame_count = 1;</code>
   * @return The evaluatedFrameCount.
   */
  int getEvaluatedFrameCount();

  /**
   * <pre>
   * Output only. The total number of bounding boxes (i.e. summed over all
   * frames) the ground truth used to create this evaluation had.
   * </pre>
   *
   * <code>int32 evaluated_bounding_box_count = 2;</code>
   * @return The evaluatedBoundingBoxCount.
   */
  int getEvaluatedBoundingBoxCount();

  /**
   * <pre>
   * Output only. The bounding boxes match metrics for each
   * Intersection-over-union threshold 0.05,0.10,...,0.95,0.96,0.97,0.98,0.99
   * and each label confidence threshold 0.05,0.10,...,0.95,0.96,0.97,0.98,0.99
   * pair.
   * </pre>
   *
   * <code>repeated .google.cloud.automl.v1beta1.BoundingBoxMetricsEntry bounding_box_metrics_entries = 4;</code>
   */
  java.util.List<com.google.cloud.automl.v1beta1.BoundingBoxMetricsEntry> 
      getBoundingBoxMetricsEntriesList();
  /**
   * <pre>
   * Output only. The bounding boxes match metrics for each
   * Intersection-over-union threshold 0.05,0.10,...,0.95,0.96,0.97,0.98,0.99
   * and each label confidence threshold 0.05,0.10,...,0.95,0.96,0.97,0.98,0.99
   * pair.
   * </pre>
   *
   * <code>repeated .google.cloud.automl.v1beta1.BoundingBoxMetricsEntry bounding_box_metrics_entries = 4;</code>
   */
  com.google.cloud.automl.v1beta1.BoundingBoxMetricsEntry getBoundingBoxMetricsEntries(int index);
  /**
   * <pre>
   * Output only. The bounding boxes match metrics for each
   * Intersection-over-union threshold 0.05,0.10,...,0.95,0.96,0.97,0.98,0.99
   * and each label confidence threshold 0.05,0.10,...,0.95,0.96,0.97,0.98,0.99
   * pair.
   * </pre>
   *
   * <code>repeated .google.cloud.automl.v1beta1.BoundingBoxMetricsEntry bounding_box_metrics_entries = 4;</code>
   */
  int getBoundingBoxMetricsEntriesCount();
  /**
   * <pre>
   * Output only. The bounding boxes match metrics for each
   * Intersection-over-union threshold 0.05,0.10,...,0.95,0.96,0.97,0.98,0.99
   * and each label confidence threshold 0.05,0.10,...,0.95,0.96,0.97,0.98,0.99
   * pair.
   * </pre>
   *
   * <code>repeated .google.cloud.automl.v1beta1.BoundingBoxMetricsEntry bounding_box_metrics_entries = 4;</code>
   */
  java.util.List<? extends com.google.cloud.automl.v1beta1.BoundingBoxMetricsEntryOrBuilder> 
      getBoundingBoxMetricsEntriesOrBuilderList();
  /**
   * <pre>
   * Output only. The bounding boxes match metrics for each
   * Intersection-over-union threshold 0.05,0.10,...,0.95,0.96,0.97,0.98,0.99
   * and each label confidence threshold 0.05,0.10,...,0.95,0.96,0.97,0.98,0.99
   * pair.
   * </pre>
   *
   * <code>repeated .google.cloud.automl.v1beta1.BoundingBoxMetricsEntry bounding_box_metrics_entries = 4;</code>
   */
  com.google.cloud.automl.v1beta1.BoundingBoxMetricsEntryOrBuilder getBoundingBoxMetricsEntriesOrBuilder(
      int index);

  /**
   * <pre>
   * Output only. The single metric for bounding boxes evaluation:
   * the mean_average_precision averaged over all bounding_box_metrics_entries.
   * </pre>
   *
   * <code>float bounding_box_mean_average_precision = 6;</code>
   * @return The boundingBoxMeanAveragePrecision.
   */
  float getBoundingBoxMeanAveragePrecision();
}
