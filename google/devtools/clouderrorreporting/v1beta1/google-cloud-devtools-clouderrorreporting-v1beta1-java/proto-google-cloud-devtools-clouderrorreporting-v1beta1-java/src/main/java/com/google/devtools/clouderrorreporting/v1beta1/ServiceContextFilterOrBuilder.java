// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/devtools/clouderrorreporting/v1beta1/error_stats_service.proto

package com.google.devtools.clouderrorreporting.v1beta1;

public interface ServiceContextFilterOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.devtools.clouderrorreporting.v1beta1.ServiceContextFilter)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * Optional. The exact value to match against
   * [`ServiceContext.service`](/error-reporting/reference/rest/v1beta1/ServiceContext#FIELDS.service).
   * </pre>
   *
   * <code>string service = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
   * @return The service.
   */
  java.lang.String getService();
  /**
   * <pre>
   * Optional. The exact value to match against
   * [`ServiceContext.service`](/error-reporting/reference/rest/v1beta1/ServiceContext#FIELDS.service).
   * </pre>
   *
   * <code>string service = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
   * @return The bytes for service.
   */
  com.google.protobuf.ByteString
      getServiceBytes();

  /**
   * <pre>
   * Optional. The exact value to match against
   * [`ServiceContext.version`](/error-reporting/reference/rest/v1beta1/ServiceContext#FIELDS.version).
   * </pre>
   *
   * <code>string version = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
   * @return The version.
   */
  java.lang.String getVersion();
  /**
   * <pre>
   * Optional. The exact value to match against
   * [`ServiceContext.version`](/error-reporting/reference/rest/v1beta1/ServiceContext#FIELDS.version).
   * </pre>
   *
   * <code>string version = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
   * @return The bytes for version.
   */
  com.google.protobuf.ByteString
      getVersionBytes();

  /**
   * <pre>
   * Optional. The exact value to match against
   * [`ServiceContext.resource_type`](/error-reporting/reference/rest/v1beta1/ServiceContext#FIELDS.resource_type).
   * </pre>
   *
   * <code>string resource_type = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
   * @return The resourceType.
   */
  java.lang.String getResourceType();
  /**
   * <pre>
   * Optional. The exact value to match against
   * [`ServiceContext.resource_type`](/error-reporting/reference/rest/v1beta1/ServiceContext#FIELDS.resource_type).
   * </pre>
   *
   * <code>string resource_type = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
   * @return The bytes for resourceType.
   */
  com.google.protobuf.ByteString
      getResourceTypeBytes();
}
