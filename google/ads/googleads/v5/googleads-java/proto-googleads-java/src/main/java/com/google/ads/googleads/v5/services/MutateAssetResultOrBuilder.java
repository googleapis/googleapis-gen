// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v5/services/asset_service.proto

package com.google.ads.googleads.v5.services;

public interface MutateAssetResultOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.ads.googleads.v5.services.MutateAssetResult)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * The resource name returned for successful operations.
   * </pre>
   *
   * <code>string resource_name = 1;</code>
   * @return The resourceName.
   */
  java.lang.String getResourceName();
  /**
   * <pre>
   * The resource name returned for successful operations.
   * </pre>
   *
   * <code>string resource_name = 1;</code>
   * @return The bytes for resourceName.
   */
  com.google.protobuf.ByteString
      getResourceNameBytes();

  /**
   * <pre>
   * The mutated asset with only mutable fields after mutate. The field will
   * only be returned when response_content_type is set to "MUTABLE_RESOURCE".
   * </pre>
   *
   * <code>.google.ads.googleads.v5.resources.Asset asset = 2;</code>
   * @return Whether the asset field is set.
   */
  boolean hasAsset();
  /**
   * <pre>
   * The mutated asset with only mutable fields after mutate. The field will
   * only be returned when response_content_type is set to "MUTABLE_RESOURCE".
   * </pre>
   *
   * <code>.google.ads.googleads.v5.resources.Asset asset = 2;</code>
   * @return The asset.
   */
  com.google.ads.googleads.v5.resources.Asset getAsset();
  /**
   * <pre>
   * The mutated asset with only mutable fields after mutate. The field will
   * only be returned when response_content_type is set to "MUTABLE_RESOURCE".
   * </pre>
   *
   * <code>.google.ads.googleads.v5.resources.Asset asset = 2;</code>
   */
  com.google.ads.googleads.v5.resources.AssetOrBuilder getAssetOrBuilder();
}
