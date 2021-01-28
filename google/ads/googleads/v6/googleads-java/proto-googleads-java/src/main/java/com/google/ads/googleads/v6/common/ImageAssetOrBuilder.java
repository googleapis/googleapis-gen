// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v6/common/asset_types.proto

package com.google.ads.googleads.v6.common;

public interface ImageAssetOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.ads.googleads.v6.common.ImageAsset)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * The raw bytes data of an image. This field is mutate only.
   * </pre>
   *
   * <code>bytes data = 5;</code>
   * @return Whether the data field is set.
   */
  boolean hasData();
  /**
   * <pre>
   * The raw bytes data of an image. This field is mutate only.
   * </pre>
   *
   * <code>bytes data = 5;</code>
   * @return The data.
   */
  com.google.protobuf.ByteString getData();

  /**
   * <pre>
   * File size of the image asset in bytes.
   * </pre>
   *
   * <code>int64 file_size = 6;</code>
   * @return Whether the fileSize field is set.
   */
  boolean hasFileSize();
  /**
   * <pre>
   * File size of the image asset in bytes.
   * </pre>
   *
   * <code>int64 file_size = 6;</code>
   * @return The fileSize.
   */
  long getFileSize();

  /**
   * <pre>
   * MIME type of the image asset.
   * </pre>
   *
   * <code>.google.ads.googleads.v6.enums.MimeTypeEnum.MimeType mime_type = 3;</code>
   * @return The enum numeric value on the wire for mimeType.
   */
  int getMimeTypeValue();
  /**
   * <pre>
   * MIME type of the image asset.
   * </pre>
   *
   * <code>.google.ads.googleads.v6.enums.MimeTypeEnum.MimeType mime_type = 3;</code>
   * @return The mimeType.
   */
  com.google.ads.googleads.v6.enums.MimeTypeEnum.MimeType getMimeType();

  /**
   * <pre>
   * Metadata for this image at its original size.
   * </pre>
   *
   * <code>.google.ads.googleads.v6.common.ImageDimension full_size = 4;</code>
   * @return Whether the fullSize field is set.
   */
  boolean hasFullSize();
  /**
   * <pre>
   * Metadata for this image at its original size.
   * </pre>
   *
   * <code>.google.ads.googleads.v6.common.ImageDimension full_size = 4;</code>
   * @return The fullSize.
   */
  com.google.ads.googleads.v6.common.ImageDimension getFullSize();
  /**
   * <pre>
   * Metadata for this image at its original size.
   * </pre>
   *
   * <code>.google.ads.googleads.v6.common.ImageDimension full_size = 4;</code>
   */
  com.google.ads.googleads.v6.common.ImageDimensionOrBuilder getFullSizeOrBuilder();
}
