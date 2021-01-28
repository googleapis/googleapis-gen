// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/bigquery/storage/v1beta2/storage.proto

package com.google.cloud.bigquery.storage.v1beta2;

public interface StreamStatsOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.cloud.bigquery.storage.v1beta2.StreamStats)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * Represents the progress of the current stream.
   * </pre>
   *
   * <code>.google.cloud.bigquery.storage.v1beta2.StreamStats.Progress progress = 2;</code>
   * @return Whether the progress field is set.
   */
  boolean hasProgress();
  /**
   * <pre>
   * Represents the progress of the current stream.
   * </pre>
   *
   * <code>.google.cloud.bigquery.storage.v1beta2.StreamStats.Progress progress = 2;</code>
   * @return The progress.
   */
  com.google.cloud.bigquery.storage.v1beta2.StreamStats.Progress getProgress();
  /**
   * <pre>
   * Represents the progress of the current stream.
   * </pre>
   *
   * <code>.google.cloud.bigquery.storage.v1beta2.StreamStats.Progress progress = 2;</code>
   */
  com.google.cloud.bigquery.storage.v1beta2.StreamStats.ProgressOrBuilder getProgressOrBuilder();
}
