// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/resourcesettings/v1/resource_settings.proto

package com.google.cloud.resourcesettings.v1;

public interface ListSettingsResponseOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.cloud.resourcesettings.v1.ListSettingsResponse)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * A list of settings that are available at the specified Cloud resource.
   * </pre>
   *
   * <code>repeated .google.cloud.resourcesettings.v1.Setting settings = 1;</code>
   */
  java.util.List<com.google.cloud.resourcesettings.v1.Setting> 
      getSettingsList();
  /**
   * <pre>
   * A list of settings that are available at the specified Cloud resource.
   * </pre>
   *
   * <code>repeated .google.cloud.resourcesettings.v1.Setting settings = 1;</code>
   */
  com.google.cloud.resourcesettings.v1.Setting getSettings(int index);
  /**
   * <pre>
   * A list of settings that are available at the specified Cloud resource.
   * </pre>
   *
   * <code>repeated .google.cloud.resourcesettings.v1.Setting settings = 1;</code>
   */
  int getSettingsCount();
  /**
   * <pre>
   * A list of settings that are available at the specified Cloud resource.
   * </pre>
   *
   * <code>repeated .google.cloud.resourcesettings.v1.Setting settings = 1;</code>
   */
  java.util.List<? extends com.google.cloud.resourcesettings.v1.SettingOrBuilder> 
      getSettingsOrBuilderList();
  /**
   * <pre>
   * A list of settings that are available at the specified Cloud resource.
   * </pre>
   *
   * <code>repeated .google.cloud.resourcesettings.v1.Setting settings = 1;</code>
   */
  com.google.cloud.resourcesettings.v1.SettingOrBuilder getSettingsOrBuilder(
      int index);

  /**
   * <pre>
   * Unused. A page token used to retrieve the next page.
   * </pre>
   *
   * <code>string next_page_token = 2;</code>
   * @return The nextPageToken.
   */
  java.lang.String getNextPageToken();
  /**
   * <pre>
   * Unused. A page token used to retrieve the next page.
   * </pre>
   *
   * <code>string next_page_token = 2;</code>
   * @return The bytes for nextPageToken.
   */
  com.google.protobuf.ByteString
      getNextPageTokenBytes();
}
