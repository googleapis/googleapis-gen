// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/recommendationengine/v1beta1/catalog.proto

package com.google.cloud.recommendationengine.v1beta1;

public interface ImageOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.cloud.recommendationengine.v1beta1.Image)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * Required. URL of the image with a length limit of 5 KiB.
   * </pre>
   *
   * <code>string uri = 1 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return The uri.
   */
  java.lang.String getUri();
  /**
   * <pre>
   * Required. URL of the image with a length limit of 5 KiB.
   * </pre>
   *
   * <code>string uri = 1 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return The bytes for uri.
   */
  com.google.protobuf.ByteString
      getUriBytes();

  /**
   * <pre>
   * Optional. Height of the image in number of pixels.
   * </pre>
   *
   * <code>int32 height = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
   * @return The height.
   */
  int getHeight();

  /**
   * <pre>
   * Optional. Width of the image in number of pixels.
   * </pre>
   *
   * <code>int32 width = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
   * @return The width.
   */
  int getWidth();
}
