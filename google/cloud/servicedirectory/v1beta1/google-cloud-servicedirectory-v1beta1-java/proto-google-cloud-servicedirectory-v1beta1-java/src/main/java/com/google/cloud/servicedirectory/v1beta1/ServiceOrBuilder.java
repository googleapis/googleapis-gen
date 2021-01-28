// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/servicedirectory/v1beta1/service.proto

package com.google.cloud.servicedirectory.v1beta1;

public interface ServiceOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.cloud.servicedirectory.v1beta1.Service)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * Immutable. The resource name for the service in the format
   * 'projects/&#42;&#47;locations/&#42;&#47;namespaces/&#42;&#47;services/&#42;'.
   * </pre>
   *
   * <code>string name = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
   * @return The name.
   */
  java.lang.String getName();
  /**
   * <pre>
   * Immutable. The resource name for the service in the format
   * 'projects/&#42;&#47;locations/&#42;&#47;namespaces/&#42;&#47;services/&#42;'.
   * </pre>
   *
   * <code>string name = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
   * @return The bytes for name.
   */
  com.google.protobuf.ByteString
      getNameBytes();

  /**
   * <pre>
   * Optional. Metadata for the service. This data can be consumed by service
   * clients.  The entire metadata dictionary may contain up to 2000 characters,
   * spread across all key-value pairs. Metadata that goes beyond any these
   * limits will be rejected.
   * </pre>
   *
   * <code>map&lt;string, string&gt; metadata = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
   */
  int getMetadataCount();
  /**
   * <pre>
   * Optional. Metadata for the service. This data can be consumed by service
   * clients.  The entire metadata dictionary may contain up to 2000 characters,
   * spread across all key-value pairs. Metadata that goes beyond any these
   * limits will be rejected.
   * </pre>
   *
   * <code>map&lt;string, string&gt; metadata = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
   */
  boolean containsMetadata(
      java.lang.String key);
  /**
   * Use {@link #getMetadataMap()} instead.
   */
  @java.lang.Deprecated
  java.util.Map<java.lang.String, java.lang.String>
  getMetadata();
  /**
   * <pre>
   * Optional. Metadata for the service. This data can be consumed by service
   * clients.  The entire metadata dictionary may contain up to 2000 characters,
   * spread across all key-value pairs. Metadata that goes beyond any these
   * limits will be rejected.
   * </pre>
   *
   * <code>map&lt;string, string&gt; metadata = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
   */
  java.util.Map<java.lang.String, java.lang.String>
  getMetadataMap();
  /**
   * <pre>
   * Optional. Metadata for the service. This data can be consumed by service
   * clients.  The entire metadata dictionary may contain up to 2000 characters,
   * spread across all key-value pairs. Metadata that goes beyond any these
   * limits will be rejected.
   * </pre>
   *
   * <code>map&lt;string, string&gt; metadata = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
   */

  java.lang.String getMetadataOrDefault(
      java.lang.String key,
      java.lang.String defaultValue);
  /**
   * <pre>
   * Optional. Metadata for the service. This data can be consumed by service
   * clients.  The entire metadata dictionary may contain up to 2000 characters,
   * spread across all key-value pairs. Metadata that goes beyond any these
   * limits will be rejected.
   * </pre>
   *
   * <code>map&lt;string, string&gt; metadata = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
   */

  java.lang.String getMetadataOrThrow(
      java.lang.String key);

  /**
   * <pre>
   * Output only. Endpoints associated with this service. Returned on LookupService.Resolve.
   * Control plane clients should use RegistrationService.ListEndpoints.
   * </pre>
   *
   * <code>repeated .google.cloud.servicedirectory.v1beta1.Endpoint endpoints = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
   */
  java.util.List<com.google.cloud.servicedirectory.v1beta1.Endpoint> 
      getEndpointsList();
  /**
   * <pre>
   * Output only. Endpoints associated with this service. Returned on LookupService.Resolve.
   * Control plane clients should use RegistrationService.ListEndpoints.
   * </pre>
   *
   * <code>repeated .google.cloud.servicedirectory.v1beta1.Endpoint endpoints = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
   */
  com.google.cloud.servicedirectory.v1beta1.Endpoint getEndpoints(int index);
  /**
   * <pre>
   * Output only. Endpoints associated with this service. Returned on LookupService.Resolve.
   * Control plane clients should use RegistrationService.ListEndpoints.
   * </pre>
   *
   * <code>repeated .google.cloud.servicedirectory.v1beta1.Endpoint endpoints = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
   */
  int getEndpointsCount();
  /**
   * <pre>
   * Output only. Endpoints associated with this service. Returned on LookupService.Resolve.
   * Control plane clients should use RegistrationService.ListEndpoints.
   * </pre>
   *
   * <code>repeated .google.cloud.servicedirectory.v1beta1.Endpoint endpoints = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
   */
  java.util.List<? extends com.google.cloud.servicedirectory.v1beta1.EndpointOrBuilder> 
      getEndpointsOrBuilderList();
  /**
   * <pre>
   * Output only. Endpoints associated with this service. Returned on LookupService.Resolve.
   * Control plane clients should use RegistrationService.ListEndpoints.
   * </pre>
   *
   * <code>repeated .google.cloud.servicedirectory.v1beta1.Endpoint endpoints = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
   */
  com.google.cloud.servicedirectory.v1beta1.EndpointOrBuilder getEndpointsOrBuilder(
      int index);
}
