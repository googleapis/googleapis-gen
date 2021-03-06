// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/video/transcoder/v1beta1/resources.proto

package com.google.cloud.video.transcoder.v1beta1;

public interface JobTemplateOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.cloud.video.transcoder.v1beta1.JobTemplate)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * The resource name of the job template.
   * Format:
   * `projects/{project}/locations/{location}/jobTemplates/{job_template}`
   * </pre>
   *
   * <code>string name = 1;</code>
   * @return The name.
   */
  java.lang.String getName();
  /**
   * <pre>
   * The resource name of the job template.
   * Format:
   * `projects/{project}/locations/{location}/jobTemplates/{job_template}`
   * </pre>
   *
   * <code>string name = 1;</code>
   * @return The bytes for name.
   */
  com.google.protobuf.ByteString
      getNameBytes();

  /**
   * <pre>
   * The configuration for this template.
   * </pre>
   *
   * <code>.google.cloud.video.transcoder.v1beta1.JobConfig config = 2;</code>
   * @return Whether the config field is set.
   */
  boolean hasConfig();
  /**
   * <pre>
   * The configuration for this template.
   * </pre>
   *
   * <code>.google.cloud.video.transcoder.v1beta1.JobConfig config = 2;</code>
   * @return The config.
   */
  com.google.cloud.video.transcoder.v1beta1.JobConfig getConfig();
  /**
   * <pre>
   * The configuration for this template.
   * </pre>
   *
   * <code>.google.cloud.video.transcoder.v1beta1.JobConfig config = 2;</code>
   */
  com.google.cloud.video.transcoder.v1beta1.JobConfigOrBuilder getConfigOrBuilder();
}
