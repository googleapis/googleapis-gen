// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/resourcemanager/v3/projects.proto

package com.google.cloud.resourcemanager.v3;

public interface CreateProjectMetadataOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.cloud.resourcemanager.v3.CreateProjectMetadata)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * Creation time of the project creation workflow.
   * </pre>
   *
   * <code>.google.protobuf.Timestamp create_time = 1;</code>
   * @return Whether the createTime field is set.
   */
  boolean hasCreateTime();
  /**
   * <pre>
   * Creation time of the project creation workflow.
   * </pre>
   *
   * <code>.google.protobuf.Timestamp create_time = 1;</code>
   * @return The createTime.
   */
  com.google.protobuf.Timestamp getCreateTime();
  /**
   * <pre>
   * Creation time of the project creation workflow.
   * </pre>
   *
   * <code>.google.protobuf.Timestamp create_time = 1;</code>
   */
  com.google.protobuf.TimestampOrBuilder getCreateTimeOrBuilder();

  /**
   * <pre>
   * True if the project can be retrieved using `GetProject`. No other
   * operations on the project are guaranteed to work until the project creation
   * is complete.
   * </pre>
   *
   * <code>bool gettable = 2;</code>
   * @return The gettable.
   */
  boolean getGettable();

  /**
   * <pre>
   * True if the project creation process is complete.
   * </pre>
   *
   * <code>bool ready = 3;</code>
   * @return The ready.
   */
  boolean getReady();
}
