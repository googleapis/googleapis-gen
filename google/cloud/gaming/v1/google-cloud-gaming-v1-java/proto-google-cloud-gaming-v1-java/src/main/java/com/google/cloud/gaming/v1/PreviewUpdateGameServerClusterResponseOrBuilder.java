// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/gaming/v1/game_server_clusters.proto

package com.google.cloud.gaming.v1;

public interface PreviewUpdateGameServerClusterResponseOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.cloud.gaming.v1.PreviewUpdateGameServerClusterResponse)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * The ETag of the game server cluster.
   * </pre>
   *
   * <code>string etag = 2;</code>
   * @return The etag.
   */
  java.lang.String getEtag();
  /**
   * <pre>
   * The ETag of the game server cluster.
   * </pre>
   *
   * <code>string etag = 2;</code>
   * @return The bytes for etag.
   */
  com.google.protobuf.ByteString
      getEtagBytes();

  /**
   * <pre>
   * The target state.
   * </pre>
   *
   * <code>.google.cloud.gaming.v1.TargetState target_state = 3;</code>
   * @return Whether the targetState field is set.
   */
  boolean hasTargetState();
  /**
   * <pre>
   * The target state.
   * </pre>
   *
   * <code>.google.cloud.gaming.v1.TargetState target_state = 3;</code>
   * @return The targetState.
   */
  com.google.cloud.gaming.v1.TargetState getTargetState();
  /**
   * <pre>
   * The target state.
   * </pre>
   *
   * <code>.google.cloud.gaming.v1.TargetState target_state = 3;</code>
   */
  com.google.cloud.gaming.v1.TargetStateOrBuilder getTargetStateOrBuilder();
}
