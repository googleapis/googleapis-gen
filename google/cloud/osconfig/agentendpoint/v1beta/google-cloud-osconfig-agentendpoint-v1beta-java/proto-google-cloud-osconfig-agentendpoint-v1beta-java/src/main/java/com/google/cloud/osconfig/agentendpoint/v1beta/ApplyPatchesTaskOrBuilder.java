// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/osconfig/agentendpoint/v1beta/tasks.proto

package com.google.cloud.osconfig.agentendpoint.v1beta;

public interface ApplyPatchesTaskOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.cloud.osconfig.agentendpoint.v1beta.ApplyPatchesTask)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * Specific information about how patches should be applied.
   * </pre>
   *
   * <code>.google.cloud.osconfig.agentendpoint.v1beta.PatchConfig patch_config = 1;</code>
   * @return Whether the patchConfig field is set.
   */
  boolean hasPatchConfig();
  /**
   * <pre>
   * Specific information about how patches should be applied.
   * </pre>
   *
   * <code>.google.cloud.osconfig.agentendpoint.v1beta.PatchConfig patch_config = 1;</code>
   * @return The patchConfig.
   */
  com.google.cloud.osconfig.agentendpoint.v1beta.PatchJobs.PatchConfig getPatchConfig();
  /**
   * <pre>
   * Specific information about how patches should be applied.
   * </pre>
   *
   * <code>.google.cloud.osconfig.agentendpoint.v1beta.PatchConfig patch_config = 1;</code>
   */
  com.google.cloud.osconfig.agentendpoint.v1beta.PatchJobs.PatchConfigOrBuilder getPatchConfigOrBuilder();

  /**
   * <pre>
   * If true, the agent will report its status as it goes through the motions
   * but won't actually run any updates or perform any reboots.
   * </pre>
   *
   * <code>bool dry_run = 3;</code>
   * @return The dryRun.
   */
  boolean getDryRun();
}
