// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/metastore/v1alpha/metastore.proto

package com.google.cloud.metastore.v1alpha;

public interface HiveMetastoreConfigOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.cloud.metastore.v1alpha.HiveMetastoreConfig)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * Immutable. The Hive metastore schema version.
   * </pre>
   *
   * <code>string version = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
   * @return The version.
   */
  java.lang.String getVersion();
  /**
   * <pre>
   * Immutable. The Hive metastore schema version.
   * </pre>
   *
   * <code>string version = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
   * @return The bytes for version.
   */
  com.google.protobuf.ByteString
      getVersionBytes();

  /**
   * <pre>
   * A mapping of Hive metastore configuration key-value pairs to apply to the
   * Hive metastore (configured in `hive-site.xml`). The mappings
   * override system defaults (some keys cannot be overridden).
   * </pre>
   *
   * <code>map&lt;string, string&gt; config_overrides = 2;</code>
   */
  int getConfigOverridesCount();
  /**
   * <pre>
   * A mapping of Hive metastore configuration key-value pairs to apply to the
   * Hive metastore (configured in `hive-site.xml`). The mappings
   * override system defaults (some keys cannot be overridden).
   * </pre>
   *
   * <code>map&lt;string, string&gt; config_overrides = 2;</code>
   */
  boolean containsConfigOverrides(
      java.lang.String key);
  /**
   * Use {@link #getConfigOverridesMap()} instead.
   */
  @java.lang.Deprecated
  java.util.Map<java.lang.String, java.lang.String>
  getConfigOverrides();
  /**
   * <pre>
   * A mapping of Hive metastore configuration key-value pairs to apply to the
   * Hive metastore (configured in `hive-site.xml`). The mappings
   * override system defaults (some keys cannot be overridden).
   * </pre>
   *
   * <code>map&lt;string, string&gt; config_overrides = 2;</code>
   */
  java.util.Map<java.lang.String, java.lang.String>
  getConfigOverridesMap();
  /**
   * <pre>
   * A mapping of Hive metastore configuration key-value pairs to apply to the
   * Hive metastore (configured in `hive-site.xml`). The mappings
   * override system defaults (some keys cannot be overridden).
   * </pre>
   *
   * <code>map&lt;string, string&gt; config_overrides = 2;</code>
   */

  java.lang.String getConfigOverridesOrDefault(
      java.lang.String key,
      java.lang.String defaultValue);
  /**
   * <pre>
   * A mapping of Hive metastore configuration key-value pairs to apply to the
   * Hive metastore (configured in `hive-site.xml`). The mappings
   * override system defaults (some keys cannot be overridden).
   * </pre>
   *
   * <code>map&lt;string, string&gt; config_overrides = 2;</code>
   */

  java.lang.String getConfigOverridesOrThrow(
      java.lang.String key);

  /**
   * <pre>
   * Information used to configure the Hive metastore service as a service
   * principal in a Kerberos realm.
   * </pre>
   *
   * <code>.google.cloud.metastore.v1alpha.KerberosConfig kerberos_config = 3;</code>
   * @return Whether the kerberosConfig field is set.
   */
  boolean hasKerberosConfig();
  /**
   * <pre>
   * Information used to configure the Hive metastore service as a service
   * principal in a Kerberos realm.
   * </pre>
   *
   * <code>.google.cloud.metastore.v1alpha.KerberosConfig kerberos_config = 3;</code>
   * @return The kerberosConfig.
   */
  com.google.cloud.metastore.v1alpha.KerberosConfig getKerberosConfig();
  /**
   * <pre>
   * Information used to configure the Hive metastore service as a service
   * principal in a Kerberos realm.
   * </pre>
   *
   * <code>.google.cloud.metastore.v1alpha.KerberosConfig kerberos_config = 3;</code>
   */
  com.google.cloud.metastore.v1alpha.KerberosConfigOrBuilder getKerberosConfigOrBuilder();
}
