// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/dataproc/v1beta2/clusters.proto

package com.google.cloud.dataproc.v1beta2;

public interface ListClustersResponseOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.cloud.dataproc.v1beta2.ListClustersResponse)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * Output only. The clusters in the project.
   * </pre>
   *
   * <code>repeated .google.cloud.dataproc.v1beta2.Cluster clusters = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
   */
  java.util.List<com.google.cloud.dataproc.v1beta2.Cluster> 
      getClustersList();
  /**
   * <pre>
   * Output only. The clusters in the project.
   * </pre>
   *
   * <code>repeated .google.cloud.dataproc.v1beta2.Cluster clusters = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
   */
  com.google.cloud.dataproc.v1beta2.Cluster getClusters(int index);
  /**
   * <pre>
   * Output only. The clusters in the project.
   * </pre>
   *
   * <code>repeated .google.cloud.dataproc.v1beta2.Cluster clusters = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
   */
  int getClustersCount();
  /**
   * <pre>
   * Output only. The clusters in the project.
   * </pre>
   *
   * <code>repeated .google.cloud.dataproc.v1beta2.Cluster clusters = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
   */
  java.util.List<? extends com.google.cloud.dataproc.v1beta2.ClusterOrBuilder> 
      getClustersOrBuilderList();
  /**
   * <pre>
   * Output only. The clusters in the project.
   * </pre>
   *
   * <code>repeated .google.cloud.dataproc.v1beta2.Cluster clusters = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
   */
  com.google.cloud.dataproc.v1beta2.ClusterOrBuilder getClustersOrBuilder(
      int index);

  /**
   * <pre>
   * Output only. This token is included in the response if there are more
   * results to fetch. To fetch additional results, provide this value as the
   * `page_token` in a subsequent &lt;code&gt;ListClustersRequest&lt;/code&gt;.
   * </pre>
   *
   * <code>string next_page_token = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
   * @return The nextPageToken.
   */
  java.lang.String getNextPageToken();
  /**
   * <pre>
   * Output only. This token is included in the response if there are more
   * results to fetch. To fetch additional results, provide this value as the
   * `page_token` in a subsequent &lt;code&gt;ListClustersRequest&lt;/code&gt;.
   * </pre>
   *
   * <code>string next_page_token = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
   * @return The bytes for nextPageToken.
   */
  com.google.protobuf.ByteString
      getNextPageTokenBytes();
}
