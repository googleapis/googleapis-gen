// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/aiplatform/v1beta1/schema/predict/params/video_object_tracking.proto

package com.google.cloud.aiplatform.v1beta1.schema.predict.params;

public interface VideoObjectTrackingPredictionParamsOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.cloud.aiplatform.v1beta1.schema.predict.params.VideoObjectTrackingPredictionParams)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * The Model only returns predictions with at least this confidence score.
   * Default value is 0.0
   * </pre>
   *
   * <code>float confidence_threshold = 1;</code>
   * @return The confidenceThreshold.
   */
  float getConfidenceThreshold();

  /**
   * <pre>
   * The model only returns up to that many top, by confidence score,
   * predictions per frame of the video. If this number is very high, the
   * Model may return fewer predictions per frame. Default value is 50.
   * </pre>
   *
   * <code>int32 max_predictions = 2;</code>
   * @return The maxPredictions.
   */
  int getMaxPredictions();

  /**
   * <pre>
   * Only bounding boxes with shortest edge at least that long as a relative
   * value of video frame size are returned. Default value is 0.0.
   * </pre>
   *
   * <code>float min_bounding_box_size = 3;</code>
   * @return The minBoundingBoxSize.
   */
  float getMinBoundingBoxSize();
}
