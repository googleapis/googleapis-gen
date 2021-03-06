// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: grafeas/v1/provenance.proto

package io.grafeas.v1;

public interface ProjectRepoIdOrBuilder extends
    // @@protoc_insertion_point(interface_extends:grafeas.v1.ProjectRepoId)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * The ID of the project.
   * </pre>
   *
   * <code>string project_id = 1;</code>
   * @return The projectId.
   */
  java.lang.String getProjectId();
  /**
   * <pre>
   * The ID of the project.
   * </pre>
   *
   * <code>string project_id = 1;</code>
   * @return The bytes for projectId.
   */
  com.google.protobuf.ByteString
      getProjectIdBytes();

  /**
   * <pre>
   * The name of the repo. Leave empty for the default repo.
   * </pre>
   *
   * <code>string repo_name = 2;</code>
   * @return The repoName.
   */
  java.lang.String getRepoName();
  /**
   * <pre>
   * The name of the repo. Leave empty for the default repo.
   * </pre>
   *
   * <code>string repo_name = 2;</code>
   * @return The bytes for repoName.
   */
  com.google.protobuf.ByteString
      getRepoNameBytes();
}
