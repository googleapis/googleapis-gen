// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/container/v1/cluster_service.proto

package com.google.container.v1;

public interface CreateNodePoolRequestOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.container.v1.CreateNodePoolRequest)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * Deprecated. The Google Developers Console [project ID or project
   * number](https://developers.google.com/console/help/new/#projectnumber).
   * This field has been deprecated and replaced by the parent field.
   * </pre>
   *
   * <code>string project_id = 1 [deprecated = true];</code>
   * @return The projectId.
   */
  @java.lang.Deprecated java.lang.String getProjectId();
  /**
   * <pre>
   * Deprecated. The Google Developers Console [project ID or project
   * number](https://developers.google.com/console/help/new/#projectnumber).
   * This field has been deprecated and replaced by the parent field.
   * </pre>
   *
   * <code>string project_id = 1 [deprecated = true];</code>
   * @return The bytes for projectId.
   */
  @java.lang.Deprecated com.google.protobuf.ByteString
      getProjectIdBytes();

  /**
   * <pre>
   * Deprecated. The name of the Google Compute Engine
   * [zone](https://cloud.google.com/compute/docs/zones#available) in which the
   * cluster resides. This field has been deprecated and replaced by the parent
   * field.
   * </pre>
   *
   * <code>string zone = 2 [deprecated = true];</code>
   * @return The zone.
   */
  @java.lang.Deprecated java.lang.String getZone();
  /**
   * <pre>
   * Deprecated. The name of the Google Compute Engine
   * [zone](https://cloud.google.com/compute/docs/zones#available) in which the
   * cluster resides. This field has been deprecated and replaced by the parent
   * field.
   * </pre>
   *
   * <code>string zone = 2 [deprecated = true];</code>
   * @return The bytes for zone.
   */
  @java.lang.Deprecated com.google.protobuf.ByteString
      getZoneBytes();

  /**
   * <pre>
   * Deprecated. The name of the cluster.
   * This field has been deprecated and replaced by the parent field.
   * </pre>
   *
   * <code>string cluster_id = 3 [deprecated = true];</code>
   * @return The clusterId.
   */
  @java.lang.Deprecated java.lang.String getClusterId();
  /**
   * <pre>
   * Deprecated. The name of the cluster.
   * This field has been deprecated and replaced by the parent field.
   * </pre>
   *
   * <code>string cluster_id = 3 [deprecated = true];</code>
   * @return The bytes for clusterId.
   */
  @java.lang.Deprecated com.google.protobuf.ByteString
      getClusterIdBytes();

  /**
   * <pre>
   * Required. The node pool to create.
   * </pre>
   *
   * <code>.google.container.v1.NodePool node_pool = 4 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return Whether the nodePool field is set.
   */
  boolean hasNodePool();
  /**
   * <pre>
   * Required. The node pool to create.
   * </pre>
   *
   * <code>.google.container.v1.NodePool node_pool = 4 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return The nodePool.
   */
  com.google.container.v1.NodePool getNodePool();
  /**
   * <pre>
   * Required. The node pool to create.
   * </pre>
   *
   * <code>.google.container.v1.NodePool node_pool = 4 [(.google.api.field_behavior) = REQUIRED];</code>
   */
  com.google.container.v1.NodePoolOrBuilder getNodePoolOrBuilder();

  /**
   * <pre>
   * The parent (project, location, cluster id) where the node pool will be
   * created. Specified in the format
   * `projects/&#42;&#47;locations/&#42;&#47;clusters/&#42;`.
   * </pre>
   *
   * <code>string parent = 6;</code>
   * @return The parent.
   */
  java.lang.String getParent();
  /**
   * <pre>
   * The parent (project, location, cluster id) where the node pool will be
   * created. Specified in the format
   * `projects/&#42;&#47;locations/&#42;&#47;clusters/&#42;`.
   * </pre>
   *
   * <code>string parent = 6;</code>
   * @return The bytes for parent.
   */
  com.google.protobuf.ByteString
      getParentBytes();
}
