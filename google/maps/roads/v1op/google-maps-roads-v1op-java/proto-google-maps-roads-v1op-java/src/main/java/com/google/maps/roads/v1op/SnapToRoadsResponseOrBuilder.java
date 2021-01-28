// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/maps/roads/v1op/roads.proto

package com.google.maps.roads.v1op;

public interface SnapToRoadsResponseOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.maps.roads.v1op.SnapToRoadsResponse)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * A list of snapped points.
   * </pre>
   *
   * <code>repeated .google.maps.roads.v1op.SnappedPoint snapped_points = 1;</code>
   */
  java.util.List<com.google.maps.roads.v1op.SnappedPoint> 
      getSnappedPointsList();
  /**
   * <pre>
   * A list of snapped points.
   * </pre>
   *
   * <code>repeated .google.maps.roads.v1op.SnappedPoint snapped_points = 1;</code>
   */
  com.google.maps.roads.v1op.SnappedPoint getSnappedPoints(int index);
  /**
   * <pre>
   * A list of snapped points.
   * </pre>
   *
   * <code>repeated .google.maps.roads.v1op.SnappedPoint snapped_points = 1;</code>
   */
  int getSnappedPointsCount();
  /**
   * <pre>
   * A list of snapped points.
   * </pre>
   *
   * <code>repeated .google.maps.roads.v1op.SnappedPoint snapped_points = 1;</code>
   */
  java.util.List<? extends com.google.maps.roads.v1op.SnappedPointOrBuilder> 
      getSnappedPointsOrBuilderList();
  /**
   * <pre>
   * A list of snapped points.
   * </pre>
   *
   * <code>repeated .google.maps.roads.v1op.SnappedPoint snapped_points = 1;</code>
   */
  com.google.maps.roads.v1op.SnappedPointOrBuilder getSnappedPointsOrBuilder(
      int index);

  /**
   * <pre>
   * User-visible warning message, if any, which can be shown alongside a valid
   * result.
   * </pre>
   *
   * <code>string warning_message = 2;</code>
   * @return The warningMessage.
   */
  java.lang.String getWarningMessage();
  /**
   * <pre>
   * User-visible warning message, if any, which can be shown alongside a valid
   * result.
   * </pre>
   *
   * <code>string warning_message = 2;</code>
   * @return The bytes for warningMessage.
   */
  com.google.protobuf.ByteString
      getWarningMessageBytes();
}
