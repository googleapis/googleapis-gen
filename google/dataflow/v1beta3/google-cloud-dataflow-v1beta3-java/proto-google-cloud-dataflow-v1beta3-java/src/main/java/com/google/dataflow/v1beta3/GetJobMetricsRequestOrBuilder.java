// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/dataflow/v1beta3/metrics.proto

package com.google.dataflow.v1beta3;

public interface GetJobMetricsRequestOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.dataflow.v1beta3.GetJobMetricsRequest)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * A project id.
   * </pre>
   *
   * <code>string project_id = 1;</code>
   * @return The projectId.
   */
  java.lang.String getProjectId();
  /**
   * <pre>
   * A project id.
   * </pre>
   *
   * <code>string project_id = 1;</code>
   * @return The bytes for projectId.
   */
  com.google.protobuf.ByteString
      getProjectIdBytes();

  /**
   * <pre>
   * The job to get metrics for.
   * </pre>
   *
   * <code>string job_id = 2;</code>
   * @return The jobId.
   */
  java.lang.String getJobId();
  /**
   * <pre>
   * The job to get metrics for.
   * </pre>
   *
   * <code>string job_id = 2;</code>
   * @return The bytes for jobId.
   */
  com.google.protobuf.ByteString
      getJobIdBytes();

  /**
   * <pre>
   * Return only metric data that has changed since this time.
   * Default is to return all information about all metrics for the job.
   * </pre>
   *
   * <code>.google.protobuf.Timestamp start_time = 3;</code>
   * @return Whether the startTime field is set.
   */
  boolean hasStartTime();
  /**
   * <pre>
   * Return only metric data that has changed since this time.
   * Default is to return all information about all metrics for the job.
   * </pre>
   *
   * <code>.google.protobuf.Timestamp start_time = 3;</code>
   * @return The startTime.
   */
  com.google.protobuf.Timestamp getStartTime();
  /**
   * <pre>
   * Return only metric data that has changed since this time.
   * Default is to return all information about all metrics for the job.
   * </pre>
   *
   * <code>.google.protobuf.Timestamp start_time = 3;</code>
   */
  com.google.protobuf.TimestampOrBuilder getStartTimeOrBuilder();

  /**
   * <pre>
   * The [regional endpoint]
   * (https://cloud.google.com/dataflow/docs/concepts/regional-endpoints) that
   * contains the job specified by job_id.
   * </pre>
   *
   * <code>string location = 4;</code>
   * @return The location.
   */
  java.lang.String getLocation();
  /**
   * <pre>
   * The [regional endpoint]
   * (https://cloud.google.com/dataflow/docs/concepts/regional-endpoints) that
   * contains the job specified by job_id.
   * </pre>
   *
   * <code>string location = 4;</code>
   * @return The bytes for location.
   */
  com.google.protobuf.ByteString
      getLocationBytes();
}
