// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/devtools/cloudbuild/v1/cloudbuild.proto

package com.google.cloudbuild.v1;

public interface SecretManagerSecretOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.devtools.cloudbuild.v1.SecretManagerSecret)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * Resource name of the SecretVersion. In format:
   * projects/&#42;&#47;secrets/&#42;&#47;versions/&#42;
   * </pre>
   *
   * <code>string version_name = 1 [(.google.api.resource_reference) = { ... }</code>
   * @return The versionName.
   */
  java.lang.String getVersionName();
  /**
   * <pre>
   * Resource name of the SecretVersion. In format:
   * projects/&#42;&#47;secrets/&#42;&#47;versions/&#42;
   * </pre>
   *
   * <code>string version_name = 1 [(.google.api.resource_reference) = { ... }</code>
   * @return The bytes for versionName.
   */
  com.google.protobuf.ByteString
      getVersionNameBytes();

  /**
   * <pre>
   * Environment variable name to associate with the secret.
   * Secret environment variables must be unique across all of a build's
   * secrets, and must be used by at least one build step.
   * </pre>
   *
   * <code>string env = 2;</code>
   * @return The env.
   */
  java.lang.String getEnv();
  /**
   * <pre>
   * Environment variable name to associate with the secret.
   * Secret environment variables must be unique across all of a build's
   * secrets, and must be used by at least one build step.
   * </pre>
   *
   * <code>string env = 2;</code>
   * @return The bytes for env.
   */
  com.google.protobuf.ByteString
      getEnvBytes();
}
