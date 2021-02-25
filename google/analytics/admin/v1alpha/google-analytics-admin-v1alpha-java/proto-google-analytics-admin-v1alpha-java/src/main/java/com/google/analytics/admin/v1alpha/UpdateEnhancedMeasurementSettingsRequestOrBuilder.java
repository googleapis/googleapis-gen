// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/analytics/admin/v1alpha/analytics_admin.proto

package com.google.analytics.admin.v1alpha;

public interface UpdateEnhancedMeasurementSettingsRequestOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.analytics.admin.v1alpha.UpdateEnhancedMeasurementSettingsRequest)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * Required. The settings to update.
   * The `name` field is used to identify the settings to be updated.
   * </pre>
   *
   * <code>.google.analytics.admin.v1alpha.EnhancedMeasurementSettings enhanced_measurement_settings = 1 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return Whether the enhancedMeasurementSettings field is set.
   */
  boolean hasEnhancedMeasurementSettings();
  /**
   * <pre>
   * Required. The settings to update.
   * The `name` field is used to identify the settings to be updated.
   * </pre>
   *
   * <code>.google.analytics.admin.v1alpha.EnhancedMeasurementSettings enhanced_measurement_settings = 1 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return The enhancedMeasurementSettings.
   */
  com.google.analytics.admin.v1alpha.EnhancedMeasurementSettings getEnhancedMeasurementSettings();
  /**
   * <pre>
   * Required. The settings to update.
   * The `name` field is used to identify the settings to be updated.
   * </pre>
   *
   * <code>.google.analytics.admin.v1alpha.EnhancedMeasurementSettings enhanced_measurement_settings = 1 [(.google.api.field_behavior) = REQUIRED];</code>
   */
  com.google.analytics.admin.v1alpha.EnhancedMeasurementSettingsOrBuilder getEnhancedMeasurementSettingsOrBuilder();

  /**
   * <pre>
   * Required. The list of fields to be updated. Field names must be in snake case
   * (e.g., "field_to_update"). Omitted fields will not be updated. To replace
   * the entire entity, use one path with the string "*" to match all fields.
   * </pre>
   *
   * <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return Whether the updateMask field is set.
   */
  boolean hasUpdateMask();
  /**
   * <pre>
   * Required. The list of fields to be updated. Field names must be in snake case
   * (e.g., "field_to_update"). Omitted fields will not be updated. To replace
   * the entire entity, use one path with the string "*" to match all fields.
   * </pre>
   *
   * <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return The updateMask.
   */
  com.google.protobuf.FieldMask getUpdateMask();
  /**
   * <pre>
   * Required. The list of fields to be updated. Field names must be in snake case
   * (e.g., "field_to_update"). Omitted fields will not be updated. To replace
   * the entire entity, use one path with the string "*" to match all fields.
   * </pre>
   *
   * <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
   */
  com.google.protobuf.FieldMaskOrBuilder getUpdateMaskOrBuilder();
}
