// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/devtools/cloudbuild/v1/cloudbuild.proto

package com.google.cloudbuild.v1;

public interface SecretOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.devtools.cloudbuild.v1.Secret)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * Cloud KMS key name to use to decrypt these envs.
   * </pre>
   *
   * <code>string kms_key_name = 1;</code>
   * @return The kmsKeyName.
   */
  java.lang.String getKmsKeyName();
  /**
   * <pre>
   * Cloud KMS key name to use to decrypt these envs.
   * </pre>
   *
   * <code>string kms_key_name = 1;</code>
   * @return The bytes for kmsKeyName.
   */
  com.google.protobuf.ByteString
      getKmsKeyNameBytes();

  /**
   * <pre>
   * Map of environment variable name to its encrypted value.
   * Secret environment variables must be unique across all of a build's
   * secrets, and must be used by at least one build step. Values can be at most
   * 64 KB in size. There can be at most 100 secret values across all of a
   * build's secrets.
   * </pre>
   *
   * <code>map&lt;string, bytes&gt; secret_env = 3;</code>
   */
  int getSecretEnvCount();
  /**
   * <pre>
   * Map of environment variable name to its encrypted value.
   * Secret environment variables must be unique across all of a build's
   * secrets, and must be used by at least one build step. Values can be at most
   * 64 KB in size. There can be at most 100 secret values across all of a
   * build's secrets.
   * </pre>
   *
   * <code>map&lt;string, bytes&gt; secret_env = 3;</code>
   */
  boolean containsSecretEnv(
      java.lang.String key);
  /**
   * Use {@link #getSecretEnvMap()} instead.
   */
  @java.lang.Deprecated
  java.util.Map<java.lang.String, com.google.protobuf.ByteString>
  getSecretEnv();
  /**
   * <pre>
   * Map of environment variable name to its encrypted value.
   * Secret environment variables must be unique across all of a build's
   * secrets, and must be used by at least one build step. Values can be at most
   * 64 KB in size. There can be at most 100 secret values across all of a
   * build's secrets.
   * </pre>
   *
   * <code>map&lt;string, bytes&gt; secret_env = 3;</code>
   */
  java.util.Map<java.lang.String, com.google.protobuf.ByteString>
  getSecretEnvMap();
  /**
   * <pre>
   * Map of environment variable name to its encrypted value.
   * Secret environment variables must be unique across all of a build's
   * secrets, and must be used by at least one build step. Values can be at most
   * 64 KB in size. There can be at most 100 secret values across all of a
   * build's secrets.
   * </pre>
   *
   * <code>map&lt;string, bytes&gt; secret_env = 3;</code>
   */

  com.google.protobuf.ByteString getSecretEnvOrDefault(
      java.lang.String key,
      com.google.protobuf.ByteString defaultValue);
  /**
   * <pre>
   * Map of environment variable name to its encrypted value.
   * Secret environment variables must be unique across all of a build's
   * secrets, and must be used by at least one build step. Values can be at most
   * 64 KB in size. There can be at most 100 secret values across all of a
   * build's secrets.
   * </pre>
   *
   * <code>map&lt;string, bytes&gt; secret_env = 3;</code>
   */

  com.google.protobuf.ByteString getSecretEnvOrThrow(
      java.lang.String key);
}
