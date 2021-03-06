// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/dataflow/v1beta3/jobs.proto

package com.google.dataflow.v1beta3;

public interface UpdateJobRequestOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.dataflow.v1beta3.UpdateJobRequest)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * The ID of the Cloud Platform project that the job belongs to.
   * </pre>
   *
   * <code>string project_id = 1;</code>
   * @return The projectId.
   */
  java.lang.String getProjectId();
  /**
   * <pre>
   * The ID of the Cloud Platform project that the job belongs to.
   * </pre>
   *
   * <code>string project_id = 1;</code>
   * @return The bytes for projectId.
   */
  com.google.protobuf.ByteString
      getProjectIdBytes();

  /**
   * <pre>
   * The job ID.
   * </pre>
   *
   * <code>string job_id = 2;</code>
   * @return The jobId.
   */
  java.lang.String getJobId();
  /**
   * <pre>
   * The job ID.
   * </pre>
   *
   * <code>string job_id = 2;</code>
   * @return The bytes for jobId.
   */
  com.google.protobuf.ByteString
      getJobIdBytes();

  /**
   * <pre>
   * The updated job.
   * Only the job state is updatable; other fields will be ignored.
   * </pre>
   *
   * <code>.google.dataflow.v1beta3.Job job = 3;</code>
   * @return Whether the job field is set.
   */
  boolean hasJob();
  /**
   * <pre>
   * The updated job.
   * Only the job state is updatable; other fields will be ignored.
   * </pre>
   *
   * <code>.google.dataflow.v1beta3.Job job = 3;</code>
   * @return The job.
   */
  com.google.dataflow.v1beta3.Job getJob();
  /**
   * <pre>
   * The updated job.
   * Only the job state is updatable; other fields will be ignored.
   * </pre>
   *
   * <code>.google.dataflow.v1beta3.Job job = 3;</code>
   */
  com.google.dataflow.v1beta3.JobOrBuilder getJobOrBuilder();

  /**
   * <pre>
   * The [regional endpoint]
   * (https://cloud.google.com/dataflow/docs/concepts/regional-endpoints) that
   * contains this job.
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
   * contains this job.
   * </pre>
   *
   * <code>string location = 4;</code>
   * @return The bytes for location.
   */
  com.google.protobuf.ByteString
      getLocationBytes();
}
