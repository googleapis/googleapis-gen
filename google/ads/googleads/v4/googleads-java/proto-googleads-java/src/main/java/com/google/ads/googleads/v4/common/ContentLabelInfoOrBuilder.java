// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v4/common/criteria.proto

package com.google.ads.googleads.v4.common;

public interface ContentLabelInfoOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.ads.googleads.v4.common.ContentLabelInfo)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * Content label type, required for CREATE operations.
   * </pre>
   *
   * <code>.google.ads.googleads.v4.enums.ContentLabelTypeEnum.ContentLabelType type = 1;</code>
   * @return The enum numeric value on the wire for type.
   */
  int getTypeValue();
  /**
   * <pre>
   * Content label type, required for CREATE operations.
   * </pre>
   *
   * <code>.google.ads.googleads.v4.enums.ContentLabelTypeEnum.ContentLabelType type = 1;</code>
   * @return The type.
   */
  com.google.ads.googleads.v4.enums.ContentLabelTypeEnum.ContentLabelType getType();
}
