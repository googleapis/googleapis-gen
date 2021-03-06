// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/analytics/data/v1beta/analytics_data_api.proto

package com.google.analytics.data.v1beta;

public interface BatchRunPivotReportsResponseOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.analytics.data.v1beta.BatchRunPivotReportsResponse)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * Individual responses. Each response has a separate pivot report request.
   * </pre>
   *
   * <code>repeated .google.analytics.data.v1beta.RunPivotReportResponse pivot_reports = 1;</code>
   */
  java.util.List<com.google.analytics.data.v1beta.RunPivotReportResponse> 
      getPivotReportsList();
  /**
   * <pre>
   * Individual responses. Each response has a separate pivot report request.
   * </pre>
   *
   * <code>repeated .google.analytics.data.v1beta.RunPivotReportResponse pivot_reports = 1;</code>
   */
  com.google.analytics.data.v1beta.RunPivotReportResponse getPivotReports(int index);
  /**
   * <pre>
   * Individual responses. Each response has a separate pivot report request.
   * </pre>
   *
   * <code>repeated .google.analytics.data.v1beta.RunPivotReportResponse pivot_reports = 1;</code>
   */
  int getPivotReportsCount();
  /**
   * <pre>
   * Individual responses. Each response has a separate pivot report request.
   * </pre>
   *
   * <code>repeated .google.analytics.data.v1beta.RunPivotReportResponse pivot_reports = 1;</code>
   */
  java.util.List<? extends com.google.analytics.data.v1beta.RunPivotReportResponseOrBuilder> 
      getPivotReportsOrBuilderList();
  /**
   * <pre>
   * Individual responses. Each response has a separate pivot report request.
   * </pre>
   *
   * <code>repeated .google.analytics.data.v1beta.RunPivotReportResponse pivot_reports = 1;</code>
   */
  com.google.analytics.data.v1beta.RunPivotReportResponseOrBuilder getPivotReportsOrBuilder(
      int index);

  /**
   * <pre>
   * Identifies what kind of resource this message is. This `kind` is always the
   * fixed string "analyticsData#batchRunPivotReports". Useful to distinguish
   * between response types in JSON.
   * </pre>
   *
   * <code>string kind = 2;</code>
   * @return The kind.
   */
  java.lang.String getKind();
  /**
   * <pre>
   * Identifies what kind of resource this message is. This `kind` is always the
   * fixed string "analyticsData#batchRunPivotReports". Useful to distinguish
   * between response types in JSON.
   * </pre>
   *
   * <code>string kind = 2;</code>
   * @return The bytes for kind.
   */
  com.google.protobuf.ByteString
      getKindBytes();
}
