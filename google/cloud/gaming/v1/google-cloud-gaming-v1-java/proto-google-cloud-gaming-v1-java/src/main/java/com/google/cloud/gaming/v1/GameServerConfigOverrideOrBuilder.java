// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/gaming/v1/game_server_deployments.proto

package com.google.cloud.gaming.v1;

public interface GameServerConfigOverrideOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.cloud.gaming.v1.GameServerConfigOverride)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * Selector for choosing applicable realms.
   * </pre>
   *
   * <code>.google.cloud.gaming.v1.RealmSelector realms_selector = 1;</code>
   * @return Whether the realmsSelector field is set.
   */
  boolean hasRealmsSelector();
  /**
   * <pre>
   * Selector for choosing applicable realms.
   * </pre>
   *
   * <code>.google.cloud.gaming.v1.RealmSelector realms_selector = 1;</code>
   * @return The realmsSelector.
   */
  com.google.cloud.gaming.v1.RealmSelector getRealmsSelector();
  /**
   * <pre>
   * Selector for choosing applicable realms.
   * </pre>
   *
   * <code>.google.cloud.gaming.v1.RealmSelector realms_selector = 1;</code>
   */
  com.google.cloud.gaming.v1.RealmSelectorOrBuilder getRealmsSelectorOrBuilder();

  /**
   * <pre>
   * The game server config for this override.
   * </pre>
   *
   * <code>string config_version = 100;</code>
   * @return The configVersion.
   */
  java.lang.String getConfigVersion();
  /**
   * <pre>
   * The game server config for this override.
   * </pre>
   *
   * <code>string config_version = 100;</code>
   * @return The bytes for configVersion.
   */
  com.google.protobuf.ByteString
      getConfigVersionBytes();

  public com.google.cloud.gaming.v1.GameServerConfigOverride.SelectorCase getSelectorCase();

  public com.google.cloud.gaming.v1.GameServerConfigOverride.ChangeCase getChangeCase();
}
