// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/chromeos/moblab/v1beta1/build_service.proto

package com.google.chromeos.moblab.v1beta1;

public interface CheckBuildStageStatusResponseOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.chromeos.moblab.v1beta1.CheckBuildStageStatusResponse)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * The status to represent if the build is staged or not.
   * </pre>
   *
   * <code>bool is_build_staged = 1;</code>
   * @return The isBuildStaged.
   */
  boolean getIsBuildStaged();

  /**
   * <pre>
   * The staged build artifact in the destination bucket.
   * </pre>
   *
   * <code>.google.chromeos.moblab.v1beta1.BuildArtifact staged_build_artifact = 2;</code>
   * @return Whether the stagedBuildArtifact field is set.
   */
  boolean hasStagedBuildArtifact();
  /**
   * <pre>
   * The staged build artifact in the destination bucket.
   * </pre>
   *
   * <code>.google.chromeos.moblab.v1beta1.BuildArtifact staged_build_artifact = 2;</code>
   * @return The stagedBuildArtifact.
   */
  com.google.chromeos.moblab.v1beta1.BuildArtifact getStagedBuildArtifact();
  /**
   * <pre>
   * The staged build artifact in the destination bucket.
   * </pre>
   *
   * <code>.google.chromeos.moblab.v1beta1.BuildArtifact staged_build_artifact = 2;</code>
   */
  com.google.chromeos.moblab.v1beta1.BuildArtifactOrBuilder getStagedBuildArtifactOrBuilder();

  /**
   * <pre>
   * The source build artifact in the source bucket.
   * </pre>
   *
   * <code>.google.chromeos.moblab.v1beta1.BuildArtifact source_build_artifact = 3;</code>
   * @return Whether the sourceBuildArtifact field is set.
   */
  boolean hasSourceBuildArtifact();
  /**
   * <pre>
   * The source build artifact in the source bucket.
   * </pre>
   *
   * <code>.google.chromeos.moblab.v1beta1.BuildArtifact source_build_artifact = 3;</code>
   * @return The sourceBuildArtifact.
   */
  com.google.chromeos.moblab.v1beta1.BuildArtifact getSourceBuildArtifact();
  /**
   * <pre>
   * The source build artifact in the source bucket.
   * </pre>
   *
   * <code>.google.chromeos.moblab.v1beta1.BuildArtifact source_build_artifact = 3;</code>
   */
  com.google.chromeos.moblab.v1beta1.BuildArtifactOrBuilder getSourceBuildArtifactOrBuilder();
}
