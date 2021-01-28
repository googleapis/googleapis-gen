// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/workflows/executions/v1/executions.proto

package com.google.cloud.workflows.executions.v1;

public final class ExecutionsProto {
  private ExecutionsProto() {}
  public static void registerAllExtensions(
      com.google.protobuf.ExtensionRegistryLite registry) {
  }

  public static void registerAllExtensions(
      com.google.protobuf.ExtensionRegistry registry) {
    registerAllExtensions(
        (com.google.protobuf.ExtensionRegistryLite) registry);
  }
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_workflows_executions_v1_Execution_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_workflows_executions_v1_Execution_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_workflows_executions_v1_Execution_Error_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_workflows_executions_v1_Execution_Error_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_workflows_executions_v1_ListExecutionsRequest_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_workflows_executions_v1_ListExecutionsRequest_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_workflows_executions_v1_ListExecutionsResponse_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_workflows_executions_v1_ListExecutionsResponse_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_workflows_executions_v1_CreateExecutionRequest_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_workflows_executions_v1_CreateExecutionRequest_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_workflows_executions_v1_GetExecutionRequest_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_workflows_executions_v1_GetExecutionRequest_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_workflows_executions_v1_CancelExecutionRequest_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_workflows_executions_v1_CancelExecutionRequest_fieldAccessorTable;

  public static com.google.protobuf.Descriptors.FileDescriptor
      getDescriptor() {
    return descriptor;
  }
  private static  com.google.protobuf.Descriptors.FileDescriptor
      descriptor;
  static {
    java.lang.String[] descriptorData = {
      "\n5google/cloud/workflows/executions/v1/e" +
      "xecutions.proto\022$google.cloud.workflows." +
      "executions.v1\032\034google/api/annotations.pr" +
      "oto\032\027google/api/client.proto\032\037google/api" +
      "/field_behavior.proto\032\031google/api/resour" +
      "ce.proto\032\037google/protobuf/timestamp.prot" +
      "o\"\360\004\n\tExecution\022\021\n\004name\030\001 \001(\tB\003\340A\003\0223\n\nst" +
      "art_time\030\002 \001(\0132\032.google.protobuf.Timesta" +
      "mpB\003\340A\003\0221\n\010end_time\030\003 \001(\0132\032.google.proto" +
      "buf.TimestampB\003\340A\003\022I\n\005state\030\004 \001(\01625.goog" +
      "le.cloud.workflows.executions.v1.Executi" +
      "on.StateB\003\340A\003\022\020\n\010argument\030\005 \001(\t\022\023\n\006resul" +
      "t\030\006 \001(\tB\003\340A\003\022I\n\005error\030\007 \001(\01325.google.clo" +
      "ud.workflows.executions.v1.Execution.Err" +
      "orB\003\340A\003\022!\n\024workflow_revision_id\030\010 \001(\tB\003\340" +
      "A\003\032)\n\005Error\022\017\n\007payload\030\001 \001(\t\022\017\n\007context\030" +
      "\002 \001(\t\"T\n\005State\022\025\n\021STATE_UNSPECIFIED\020\000\022\n\n" +
      "\006ACTIVE\020\001\022\r\n\tSUCCEEDED\020\002\022\n\n\006FAILED\020\003\022\r\n\t" +
      "CANCELLED\020\004:\206\001\352A\202\001\n+workflowexecutions.g" +
      "oogleapis.com/Execution\022Sprojects/{proje" +
      "ct}/locations/{location}/workflows/{work" +
      "flow}/executions/{execution}\"\301\001\n\025ListExe" +
      "cutionsRequest\0229\n\006parent\030\001 \001(\tB)\340A\002\372A#\n!" +
      "workflows.googleapis.com/Workflow\022\021\n\tpag" +
      "e_size\030\002 \001(\005\022\022\n\npage_token\030\003 \001(\t\022F\n\004view" +
      "\030\004 \001(\01623.google.cloud.workflows.executio" +
      "ns.v1.ExecutionViewB\003\340A\001\"v\n\026ListExecutio" +
      "nsResponse\022C\n\nexecutions\030\001 \003(\0132/.google." +
      "cloud.workflows.executions.v1.Execution\022" +
      "\027\n\017next_page_token\030\002 \001(\t\"\234\001\n\026CreateExecu" +
      "tionRequest\0229\n\006parent\030\001 \001(\tB)\340A\002\372A#\n!wor" +
      "kflows.googleapis.com/Workflow\022G\n\texecut" +
      "ion\030\002 \001(\0132/.google.cloud.workflows.execu" +
      "tions.v1.ExecutionB\003\340A\002\"\240\001\n\023GetExecution" +
      "Request\022A\n\004name\030\001 \001(\tB3\340A\002\372A-\n+workflowe" +
      "xecutions.googleapis.com/Execution\022F\n\004vi" +
      "ew\030\002 \001(\01623.google.cloud.workflows.execut" +
      "ions.v1.ExecutionViewB\003\340A\001\"[\n\026CancelExec" +
      "utionRequest\022A\n\004name\030\001 \001(\tB3\340A\002\372A-\n+work" +
      "flowexecutions.googleapis.com/Execution*" +
      "D\n\rExecutionView\022\036\n\032EXECUTION_VIEW_UNSPE" +
      "CIFIED\020\000\022\t\n\005BASIC\020\001\022\010\n\004FULL\020\0022\303\007\n\nExecut" +
      "ions\022\330\001\n\016ListExecutions\022;.google.cloud.w" +
      "orkflows.executions.v1.ListExecutionsReq" +
      "uest\032<.google.cloud.workflows.executions" +
      ".v1.ListExecutionsResponse\"K\202\323\344\223\002<\022:/v1/" +
      "{parent=projects/*/locations/*/workflows" +
      "/*}/executions\332A\006parent\022\342\001\n\017CreateExecut" +
      "ion\022<.google.cloud.workflows.executions." +
      "v1.CreateExecutionRequest\032/.google.cloud" +
      ".workflows.executions.v1.Execution\"`\202\323\344\223" +
      "\002G\":/v1/{parent=projects/*/locations/*/w" +
      "orkflows/*}/executions:\texecution\332A\020pare" +
      "nt,execution\022\305\001\n\014GetExecution\0229.google.c" +
      "loud.workflows.executions.v1.GetExecutio" +
      "nRequest\032/.google.cloud.workflows.execut" +
      "ions.v1.Execution\"I\202\323\344\223\002<\022:/v1/{name=pro" +
      "jects/*/locations/*/workflows/*/executio" +
      "ns/*}\332A\004name\022\325\001\n\017CancelExecution\022<.googl" +
      "e.cloud.workflows.executions.v1.CancelEx" +
      "ecutionRequest\032/.google.cloud.workflows." +
      "executions.v1.Execution\"S\202\323\344\223\002F\"A/v1/{na" +
      "me=projects/*/locations/*/workflows/*/ex" +
      "ecutions/*}:cancel:\001*\332A\004name\032U\312A!workflo" +
      "wexecutions.googleapis.com\322A.https://www" +
      ".googleapis.com/auth/cloud-platformB\361\001\n(" +
      "com.google.cloud.workflows.executions.v1" +
      "B\017ExecutionsProtoP\001ZNgoogle.golang.org/g" +
      "enproto/googleapis/cloud/workflows/execu" +
      "tions/v1;executions\352Aa\n!workflows.google" +
      "apis.com/Workflow\022<projects/{project}/lo" +
      "cations/{location}/workflows/{workflow}b" +
      "\006proto3"
    };
    descriptor = com.google.protobuf.Descriptors.FileDescriptor
      .internalBuildGeneratedFileFrom(descriptorData,
        new com.google.protobuf.Descriptors.FileDescriptor[] {
          com.google.api.AnnotationsProto.getDescriptor(),
          com.google.api.ClientProto.getDescriptor(),
          com.google.api.FieldBehaviorProto.getDescriptor(),
          com.google.api.ResourceProto.getDescriptor(),
          com.google.protobuf.TimestampProto.getDescriptor(),
        });
    internal_static_google_cloud_workflows_executions_v1_Execution_descriptor =
      getDescriptor().getMessageTypes().get(0);
    internal_static_google_cloud_workflows_executions_v1_Execution_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_workflows_executions_v1_Execution_descriptor,
        new java.lang.String[] { "Name", "StartTime", "EndTime", "State", "Argument", "Result", "Error", "WorkflowRevisionId", });
    internal_static_google_cloud_workflows_executions_v1_Execution_Error_descriptor =
      internal_static_google_cloud_workflows_executions_v1_Execution_descriptor.getNestedTypes().get(0);
    internal_static_google_cloud_workflows_executions_v1_Execution_Error_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_workflows_executions_v1_Execution_Error_descriptor,
        new java.lang.String[] { "Payload", "Context", });
    internal_static_google_cloud_workflows_executions_v1_ListExecutionsRequest_descriptor =
      getDescriptor().getMessageTypes().get(1);
    internal_static_google_cloud_workflows_executions_v1_ListExecutionsRequest_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_workflows_executions_v1_ListExecutionsRequest_descriptor,
        new java.lang.String[] { "Parent", "PageSize", "PageToken", "View", });
    internal_static_google_cloud_workflows_executions_v1_ListExecutionsResponse_descriptor =
      getDescriptor().getMessageTypes().get(2);
    internal_static_google_cloud_workflows_executions_v1_ListExecutionsResponse_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_workflows_executions_v1_ListExecutionsResponse_descriptor,
        new java.lang.String[] { "Executions", "NextPageToken", });
    internal_static_google_cloud_workflows_executions_v1_CreateExecutionRequest_descriptor =
      getDescriptor().getMessageTypes().get(3);
    internal_static_google_cloud_workflows_executions_v1_CreateExecutionRequest_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_workflows_executions_v1_CreateExecutionRequest_descriptor,
        new java.lang.String[] { "Parent", "Execution", });
    internal_static_google_cloud_workflows_executions_v1_GetExecutionRequest_descriptor =
      getDescriptor().getMessageTypes().get(4);
    internal_static_google_cloud_workflows_executions_v1_GetExecutionRequest_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_workflows_executions_v1_GetExecutionRequest_descriptor,
        new java.lang.String[] { "Name", "View", });
    internal_static_google_cloud_workflows_executions_v1_CancelExecutionRequest_descriptor =
      getDescriptor().getMessageTypes().get(5);
    internal_static_google_cloud_workflows_executions_v1_CancelExecutionRequest_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_workflows_executions_v1_CancelExecutionRequest_descriptor,
        new java.lang.String[] { "Name", });
    com.google.protobuf.ExtensionRegistry registry =
        com.google.protobuf.ExtensionRegistry.newInstance();
    registry.add(com.google.api.ClientProto.defaultHost);
    registry.add(com.google.api.FieldBehaviorProto.fieldBehavior);
    registry.add(com.google.api.AnnotationsProto.http);
    registry.add(com.google.api.ClientProto.methodSignature);
    registry.add(com.google.api.ClientProto.oauthScopes);
    registry.add(com.google.api.ResourceProto.resource);
    registry.add(com.google.api.ResourceProto.resourceDefinition);
    registry.add(com.google.api.ResourceProto.resourceReference);
    com.google.protobuf.Descriptors.FileDescriptor
        .internalUpdateFileDescriptor(descriptor, registry);
    com.google.api.AnnotationsProto.getDescriptor();
    com.google.api.ClientProto.getDescriptor();
    com.google.api.FieldBehaviorProto.getDescriptor();
    com.google.api.ResourceProto.getDescriptor();
    com.google.protobuf.TimestampProto.getDescriptor();
  }

  // @@protoc_insertion_point(outer_class_scope)
}
