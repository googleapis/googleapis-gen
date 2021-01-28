// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/gkehub/v1beta1/membership.proto

package com.google.cloud.gkehub.v1beta1;

public interface ResourceOptionsOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.cloud.gkehub.v1beta1.ResourceOptions)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * Optional. The Connect agent version to use for connect_resources. Defaults to the
   * latest GKE Connect version. The version must be a currently supported
   * version, obsolete versions will be rejected.
   * </pre>
   *
   * <code>string connect_version = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
   * @return The connectVersion.
   */
  java.lang.String getConnectVersion();
  /**
   * <pre>
   * Optional. The Connect agent version to use for connect_resources. Defaults to the
   * latest GKE Connect version. The version must be a currently supported
   * version, obsolete versions will be rejected.
   * </pre>
   *
   * <code>string connect_version = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
   * @return The bytes for connectVersion.
   */
  com.google.protobuf.ByteString
      getConnectVersionBytes();

  /**
   * <pre>
   * Optional. Use `apiextensions/v1beta1` instead of `apiextensions/v1` for
   * CustomResourceDefinition resources.
   * This option should be set for clusters with Kubernetes apiserver versions
   * &lt;1.16.
   * </pre>
   *
   * <code>bool v1beta1_crd = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
   * @return The v1beta1Crd.
   */
  boolean getV1Beta1Crd();
}
