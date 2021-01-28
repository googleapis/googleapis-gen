// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/gaming/v1beta/game_server_clusters.proto

package com.google.cloud.gaming.v1beta;

public interface PreviewUpdateGameServerClusterRequestOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.cloud.gaming.v1beta.PreviewUpdateGameServerClusterRequest)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * Required. The game server cluster to be updated.
   * Only fields specified in update_mask are updated.
   * </pre>
   *
   * <code>.google.cloud.gaming.v1beta.GameServerCluster game_server_cluster = 1 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return Whether the gameServerCluster field is set.
   */
  boolean hasGameServerCluster();
  /**
   * <pre>
   * Required. The game server cluster to be updated.
   * Only fields specified in update_mask are updated.
   * </pre>
   *
   * <code>.google.cloud.gaming.v1beta.GameServerCluster game_server_cluster = 1 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return The gameServerCluster.
   */
  com.google.cloud.gaming.v1beta.GameServerCluster getGameServerCluster();
  /**
   * <pre>
   * Required. The game server cluster to be updated.
   * Only fields specified in update_mask are updated.
   * </pre>
   *
   * <code>.google.cloud.gaming.v1beta.GameServerCluster game_server_cluster = 1 [(.google.api.field_behavior) = REQUIRED];</code>
   */
  com.google.cloud.gaming.v1beta.GameServerClusterOrBuilder getGameServerClusterOrBuilder();

  /**
   * <pre>
   * Required. Mask of fields to update. At least one path must be supplied in
   * this field. For the `FieldMask` definition, see
   * https:
   * //developers.google.com/protocol-buffers
   * // /docs/reference/google.protobuf#fieldmask
   * </pre>
   *
   * <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return Whether the updateMask field is set.
   */
  boolean hasUpdateMask();
  /**
   * <pre>
   * Required. Mask of fields to update. At least one path must be supplied in
   * this field. For the `FieldMask` definition, see
   * https:
   * //developers.google.com/protocol-buffers
   * // /docs/reference/google.protobuf#fieldmask
   * </pre>
   *
   * <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return The updateMask.
   */
  com.google.protobuf.FieldMask getUpdateMask();
  /**
   * <pre>
   * Required. Mask of fields to update. At least one path must be supplied in
   * this field. For the `FieldMask` definition, see
   * https:
   * //developers.google.com/protocol-buffers
   * // /docs/reference/google.protobuf#fieldmask
   * </pre>
   *
   * <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
   */
  com.google.protobuf.FieldMaskOrBuilder getUpdateMaskOrBuilder();

  /**
   * <pre>
   * Optional. The target timestamp to compute the preview.
   * </pre>
   *
   * <code>.google.protobuf.Timestamp preview_time = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
   * @return Whether the previewTime field is set.
   */
  boolean hasPreviewTime();
  /**
   * <pre>
   * Optional. The target timestamp to compute the preview.
   * </pre>
   *
   * <code>.google.protobuf.Timestamp preview_time = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
   * @return The previewTime.
   */
  com.google.protobuf.Timestamp getPreviewTime();
  /**
   * <pre>
   * Optional. The target timestamp to compute the preview.
   * </pre>
   *
   * <code>.google.protobuf.Timestamp preview_time = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
   */
  com.google.protobuf.TimestampOrBuilder getPreviewTimeOrBuilder();
}
