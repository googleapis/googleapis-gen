// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/retail/v2beta/common.proto

package com.google.cloud.retail.v2beta;

public interface ImageOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.cloud.retail.v2beta.Image)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * Required. URI of the image.
   * This field must be a valid UTF-8 encoded URI with a length limit of 5,000
   * characters. Otherwise, an INVALID_ARGUMENT error is returned.
   * Google Merchant Center property
   * [image_link](https://support.google.com/merchants/answer/6324350).
   * Schema.org property [Product.image](https://schema.org/image).
   * </pre>
   *
   * <code>string uri = 1 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return The uri.
   */
  java.lang.String getUri();
  /**
   * <pre>
   * Required. URI of the image.
   * This field must be a valid UTF-8 encoded URI with a length limit of 5,000
   * characters. Otherwise, an INVALID_ARGUMENT error is returned.
   * Google Merchant Center property
   * [image_link](https://support.google.com/merchants/answer/6324350).
   * Schema.org property [Product.image](https://schema.org/image).
   * </pre>
   *
   * <code>string uri = 1 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return The bytes for uri.
   */
  com.google.protobuf.ByteString
      getUriBytes();

  /**
   * <pre>
   * Height of the image in number of pixels.
   * This field must be nonnegative. Otherwise, an INVALID_ARGUMENT error is
   * returned.
   * </pre>
   *
   * <code>int32 height = 2;</code>
   * @return The height.
   */
  int getHeight();

  /**
   * <pre>
   * Width of the image in number of pixels.
   * This field must be nonnegative. Otherwise, an INVALID_ARGUMENT error is
   * returned.
   * </pre>
   *
   * <code>int32 width = 3;</code>
   * @return The width.
   */
  int getWidth();
}
