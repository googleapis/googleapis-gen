// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/bigtable/admin/v2/bigtable_table_admin.proto

package com.google.bigtable.admin.v2;

public interface ListSnapshotsResponseOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.bigtable.admin.v2.ListSnapshotsResponse)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * The snapshots present in the requested cluster.
   * </pre>
   *
   * <code>repeated .google.bigtable.admin.v2.Snapshot snapshots = 1;</code>
   */
  java.util.List<com.google.bigtable.admin.v2.Snapshot> 
      getSnapshotsList();
  /**
   * <pre>
   * The snapshots present in the requested cluster.
   * </pre>
   *
   * <code>repeated .google.bigtable.admin.v2.Snapshot snapshots = 1;</code>
   */
  com.google.bigtable.admin.v2.Snapshot getSnapshots(int index);
  /**
   * <pre>
   * The snapshots present in the requested cluster.
   * </pre>
   *
   * <code>repeated .google.bigtable.admin.v2.Snapshot snapshots = 1;</code>
   */
  int getSnapshotsCount();
  /**
   * <pre>
   * The snapshots present in the requested cluster.
   * </pre>
   *
   * <code>repeated .google.bigtable.admin.v2.Snapshot snapshots = 1;</code>
   */
  java.util.List<? extends com.google.bigtable.admin.v2.SnapshotOrBuilder> 
      getSnapshotsOrBuilderList();
  /**
   * <pre>
   * The snapshots present in the requested cluster.
   * </pre>
   *
   * <code>repeated .google.bigtable.admin.v2.Snapshot snapshots = 1;</code>
   */
  com.google.bigtable.admin.v2.SnapshotOrBuilder getSnapshotsOrBuilder(
      int index);

  /**
   * <pre>
   * Set if not all snapshots could be returned in a single response.
   * Pass this value to `page_token` in another request to get the next
   * page of results.
   * </pre>
   *
   * <code>string next_page_token = 2;</code>
   * @return The nextPageToken.
   */
  java.lang.String getNextPageToken();
  /**
   * <pre>
   * Set if not all snapshots could be returned in a single response.
   * Pass this value to `page_token` in another request to get the next
   * page of results.
   * </pre>
   *
   * <code>string next_page_token = 2;</code>
   * @return The bytes for nextPageToken.
   */
  com.google.protobuf.ByteString
      getNextPageTokenBytes();
}
