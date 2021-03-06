// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/monitoring/dashboard/v1/metrics.proto

package com.google.monitoring.dashboard.v1;

public interface ThresholdOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.monitoring.dashboard.v1.Threshold)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * A label for the threshold.
   * </pre>
   *
   * <code>string label = 1;</code>
   * @return The label.
   */
  java.lang.String getLabel();
  /**
   * <pre>
   * A label for the threshold.
   * </pre>
   *
   * <code>string label = 1;</code>
   * @return The bytes for label.
   */
  com.google.protobuf.ByteString
      getLabelBytes();

  /**
   * <pre>
   * The value of the threshold. The value should be defined in the native scale
   * of the metric.
   * </pre>
   *
   * <code>double value = 2;</code>
   * @return The value.
   */
  double getValue();

  /**
   * <pre>
   * The state color for this threshold. Color is not allowed in a XyChart.
   * </pre>
   *
   * <code>.google.monitoring.dashboard.v1.Threshold.Color color = 3;</code>
   * @return The enum numeric value on the wire for color.
   */
  int getColorValue();
  /**
   * <pre>
   * The state color for this threshold. Color is not allowed in a XyChart.
   * </pre>
   *
   * <code>.google.monitoring.dashboard.v1.Threshold.Color color = 3;</code>
   * @return The color.
   */
  com.google.monitoring.dashboard.v1.Threshold.Color getColor();

  /**
   * <pre>
   * The direction for the current threshold. Direction is not allowed in a
   * XyChart.
   * </pre>
   *
   * <code>.google.monitoring.dashboard.v1.Threshold.Direction direction = 4;</code>
   * @return The enum numeric value on the wire for direction.
   */
  int getDirectionValue();
  /**
   * <pre>
   * The direction for the current threshold. Direction is not allowed in a
   * XyChart.
   * </pre>
   *
   * <code>.google.monitoring.dashboard.v1.Threshold.Direction direction = 4;</code>
   * @return The direction.
   */
  com.google.monitoring.dashboard.v1.Threshold.Direction getDirection();
}
