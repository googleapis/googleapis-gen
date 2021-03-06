// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/talent/v4beta1/profile_service.proto

package com.google.cloud.talent.v4beta1;

public interface UpdateProfileRequestOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.cloud.talent.v4beta1.UpdateProfileRequest)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * Required. Profile to be updated.
   * </pre>
   *
   * <code>.google.cloud.talent.v4beta1.Profile profile = 1 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return Whether the profile field is set.
   */
  boolean hasProfile();
  /**
   * <pre>
   * Required. Profile to be updated.
   * </pre>
   *
   * <code>.google.cloud.talent.v4beta1.Profile profile = 1 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return The profile.
   */
  com.google.cloud.talent.v4beta1.Profile getProfile();
  /**
   * <pre>
   * Required. Profile to be updated.
   * </pre>
   *
   * <code>.google.cloud.talent.v4beta1.Profile profile = 1 [(.google.api.field_behavior) = REQUIRED];</code>
   */
  com.google.cloud.talent.v4beta1.ProfileOrBuilder getProfileOrBuilder();

  /**
   * <pre>
   * A field mask to specify the profile fields to update.
   * A full update is performed if it is unset.
   * </pre>
   *
   * <code>.google.protobuf.FieldMask update_mask = 2;</code>
   * @return Whether the updateMask field is set.
   */
  boolean hasUpdateMask();
  /**
   * <pre>
   * A field mask to specify the profile fields to update.
   * A full update is performed if it is unset.
   * </pre>
   *
   * <code>.google.protobuf.FieldMask update_mask = 2;</code>
   * @return The updateMask.
   */
  com.google.protobuf.FieldMask getUpdateMask();
  /**
   * <pre>
   * A field mask to specify the profile fields to update.
   * A full update is performed if it is unset.
   * </pre>
   *
   * <code>.google.protobuf.FieldMask update_mask = 2;</code>
   */
  com.google.protobuf.FieldMaskOrBuilder getUpdateMaskOrBuilder();
}
