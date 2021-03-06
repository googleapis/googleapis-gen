// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/devtools/testing/v1/test_execution.proto

package com.google.devtools.testing.v1;

public interface CreateTestMatrixRequestOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.devtools.testing.v1.CreateTestMatrixRequest)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * The GCE project under which this job will run.
   * </pre>
   *
   * <code>string project_id = 1;</code>
   * @return The projectId.
   */
  java.lang.String getProjectId();
  /**
   * <pre>
   * The GCE project under which this job will run.
   * </pre>
   *
   * <code>string project_id = 1;</code>
   * @return The bytes for projectId.
   */
  com.google.protobuf.ByteString
      getProjectIdBytes();

  /**
   * <pre>
   * The matrix of tests that the user wants to run.
   * </pre>
   *
   * <code>.google.devtools.testing.v1.TestMatrix test_matrix = 2;</code>
   * @return Whether the testMatrix field is set.
   */
  boolean hasTestMatrix();
  /**
   * <pre>
   * The matrix of tests that the user wants to run.
   * </pre>
   *
   * <code>.google.devtools.testing.v1.TestMatrix test_matrix = 2;</code>
   * @return The testMatrix.
   */
  com.google.devtools.testing.v1.TestMatrix getTestMatrix();
  /**
   * <pre>
   * The matrix of tests that the user wants to run.
   * </pre>
   *
   * <code>.google.devtools.testing.v1.TestMatrix test_matrix = 2;</code>
   */
  com.google.devtools.testing.v1.TestMatrixOrBuilder getTestMatrixOrBuilder();

  /**
   * <pre>
   * A string id used to detect duplicated requests.
   * Ids are automatically scoped to a project, so
   * users should ensure the ID is unique per-project.
   * A UUID is recommended.
   * Optional, but strongly recommended.
   * </pre>
   *
   * <code>string request_id = 3;</code>
   * @return The requestId.
   */
  java.lang.String getRequestId();
  /**
   * <pre>
   * A string id used to detect duplicated requests.
   * Ids are automatically scoped to a project, so
   * users should ensure the ID is unique per-project.
   * A UUID is recommended.
   * Optional, but strongly recommended.
   * </pre>
   *
   * <code>string request_id = 3;</code>
   * @return The bytes for requestId.
   */
  com.google.protobuf.ByteString
      getRequestIdBytes();
}
