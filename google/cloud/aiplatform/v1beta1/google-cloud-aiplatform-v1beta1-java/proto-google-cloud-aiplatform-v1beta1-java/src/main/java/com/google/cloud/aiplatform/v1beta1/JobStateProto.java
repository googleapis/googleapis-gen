// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/aiplatform/v1beta1/job_state.proto

package com.google.cloud.aiplatform.v1beta1;

public final class JobStateProto {
  private JobStateProto() {}
  public static void registerAllExtensions(
      com.google.protobuf.ExtensionRegistryLite registry) {
  }

  public static void registerAllExtensions(
      com.google.protobuf.ExtensionRegistry registry) {
    registerAllExtensions(
        (com.google.protobuf.ExtensionRegistryLite) registry);
  }

  public static com.google.protobuf.Descriptors.FileDescriptor
      getDescriptor() {
    return descriptor;
  }
  private static  com.google.protobuf.Descriptors.FileDescriptor
      descriptor;
  static {
    java.lang.String[] descriptorData = {
      "\n/google/cloud/aiplatform/v1beta1/job_st" +
      "ate.proto\022\037google.cloud.aiplatform.v1bet" +
      "a1\032\034google/api/annotations.proto*\370\001\n\010Job" +
      "State\022\031\n\025JOB_STATE_UNSPECIFIED\020\000\022\024\n\020JOB_" +
      "STATE_QUEUED\020\001\022\025\n\021JOB_STATE_PENDING\020\002\022\025\n" +
      "\021JOB_STATE_RUNNING\020\003\022\027\n\023JOB_STATE_SUCCEE" +
      "DED\020\004\022\024\n\020JOB_STATE_FAILED\020\005\022\030\n\024JOB_STATE" +
      "_CANCELLING\020\006\022\027\n\023JOB_STATE_CANCELLED\020\007\022\024" +
      "\n\020JOB_STATE_PAUSED\020\010\022\025\n\021JOB_STATE_EXPIRE" +
      "D\020\tB\201\001\n#com.google.cloud.aiplatform.v1be" +
      "ta1B\rJobStateProtoP\001ZIgoogle.golang.org/" +
      "genproto/googleapis/cloud/aiplatform/v1b" +
      "eta1;aiplatformb\006proto3"
    };
    descriptor = com.google.protobuf.Descriptors.FileDescriptor
      .internalBuildGeneratedFileFrom(descriptorData,
        new com.google.protobuf.Descriptors.FileDescriptor[] {
          com.google.api.AnnotationsProto.getDescriptor(),
        });
    com.google.api.AnnotationsProto.getDescriptor();
  }

  // @@protoc_insertion_point(outer_class_scope)
}
