// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/monitoring/dashboard/v1/dashboards_service.proto

package com.google.monitoring.dashboard.v1;

public interface ListDashboardsResponseOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.monitoring.dashboard.v1.ListDashboardsResponse)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * The list of requested dashboards.
   * </pre>
   *
   * <code>repeated .google.monitoring.dashboard.v1.Dashboard dashboards = 1;</code>
   */
  java.util.List<com.google.monitoring.dashboard.v1.Dashboard> 
      getDashboardsList();
  /**
   * <pre>
   * The list of requested dashboards.
   * </pre>
   *
   * <code>repeated .google.monitoring.dashboard.v1.Dashboard dashboards = 1;</code>
   */
  com.google.monitoring.dashboard.v1.Dashboard getDashboards(int index);
  /**
   * <pre>
   * The list of requested dashboards.
   * </pre>
   *
   * <code>repeated .google.monitoring.dashboard.v1.Dashboard dashboards = 1;</code>
   */
  int getDashboardsCount();
  /**
   * <pre>
   * The list of requested dashboards.
   * </pre>
   *
   * <code>repeated .google.monitoring.dashboard.v1.Dashboard dashboards = 1;</code>
   */
  java.util.List<? extends com.google.monitoring.dashboard.v1.DashboardOrBuilder> 
      getDashboardsOrBuilderList();
  /**
   * <pre>
   * The list of requested dashboards.
   * </pre>
   *
   * <code>repeated .google.monitoring.dashboard.v1.Dashboard dashboards = 1;</code>
   */
  com.google.monitoring.dashboard.v1.DashboardOrBuilder getDashboardsOrBuilder(
      int index);

  /**
   * <pre>
   * If there are more results than have been returned, then this field is set
   * to a non-empty value.  To see the additional results,
   * use that value as `page_token` in the next call to this method.
   * </pre>
   *
   * <code>string next_page_token = 2;</code>
   * @return The nextPageToken.
   */
  java.lang.String getNextPageToken();
  /**
   * <pre>
   * If there are more results than have been returned, then this field is set
   * to a non-empty value.  To see the additional results,
   * use that value as `page_token` in the next call to this method.
   * </pre>
   *
   * <code>string next_page_token = 2;</code>
   * @return The bytes for nextPageToken.
   */
  com.google.protobuf.ByteString
      getNextPageTokenBytes();
}
