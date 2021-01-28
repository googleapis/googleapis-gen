// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/talent/v4/job_service.proto

package com.google.cloud.talent.v4;

public final class JobServiceProto {
  private JobServiceProto() {}
  public static void registerAllExtensions(
      com.google.protobuf.ExtensionRegistryLite registry) {
  }

  public static void registerAllExtensions(
      com.google.protobuf.ExtensionRegistry registry) {
    registerAllExtensions(
        (com.google.protobuf.ExtensionRegistryLite) registry);
  }
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_talent_v4_CreateJobRequest_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_talent_v4_CreateJobRequest_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_talent_v4_GetJobRequest_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_talent_v4_GetJobRequest_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_talent_v4_UpdateJobRequest_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_talent_v4_UpdateJobRequest_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_talent_v4_DeleteJobRequest_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_talent_v4_DeleteJobRequest_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_talent_v4_ListJobsRequest_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_talent_v4_ListJobsRequest_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_talent_v4_ListJobsResponse_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_talent_v4_ListJobsResponse_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_talent_v4_SearchJobsRequest_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_talent_v4_SearchJobsRequest_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_talent_v4_SearchJobsRequest_CustomRankingInfo_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_talent_v4_SearchJobsRequest_CustomRankingInfo_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_talent_v4_SearchJobsResponse_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_talent_v4_SearchJobsResponse_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_talent_v4_SearchJobsResponse_MatchingJob_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_talent_v4_SearchJobsResponse_MatchingJob_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_talent_v4_SearchJobsResponse_CommuteInfo_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_talent_v4_SearchJobsResponse_CommuteInfo_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_talent_v4_BatchCreateJobsRequest_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_talent_v4_BatchCreateJobsRequest_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_talent_v4_BatchUpdateJobsRequest_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_talent_v4_BatchUpdateJobsRequest_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_talent_v4_BatchDeleteJobsRequest_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_talent_v4_BatchDeleteJobsRequest_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_talent_v4_JobResult_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_talent_v4_JobResult_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_talent_v4_BatchCreateJobsResponse_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_talent_v4_BatchCreateJobsResponse_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_talent_v4_BatchUpdateJobsResponse_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_talent_v4_BatchUpdateJobsResponse_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_talent_v4_BatchDeleteJobsResponse_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_talent_v4_BatchDeleteJobsResponse_fieldAccessorTable;

  public static com.google.protobuf.Descriptors.FileDescriptor
      getDescriptor() {
    return descriptor;
  }
  private static  com.google.protobuf.Descriptors.FileDescriptor
      descriptor;
  static {
    java.lang.String[] descriptorData = {
      "\n(google/cloud/talent/v4/job_service.pro" +
      "to\022\026google.cloud.talent.v4\032\034google/api/a" +
      "nnotations.proto\032\027google/api/client.prot" +
      "o\032\037google/api/field_behavior.proto\032\031goog" +
      "le/api/resource.proto\032#google/cloud/tale" +
      "nt/v4/common.proto\032$google/cloud/talent/" +
      "v4/filters.proto\032&google/cloud/talent/v4" +
      "/histogram.proto\032 google/cloud/talent/v4" +
      "/job.proto\032#google/longrunning/operation" +
      "s.proto\032\031google/protobuf/any.proto\032\036goog" +
      "le/protobuf/duration.proto\032\033google/proto" +
      "buf/empty.proto\032 google/protobuf/field_m" +
      "ask.proto\032\027google/rpc/status.proto\"r\n\020Cr" +
      "eateJobRequest\022/\n\006parent\030\001 \001(\tB\037\340A\002\372A\031\022\027" +
      "jobs.googleapis.com/Job\022-\n\003job\030\002 \001(\0132\033.g" +
      "oogle.cloud.talent.v4.JobB\003\340A\002\">\n\rGetJob" +
      "Request\022-\n\004name\030\001 \001(\tB\037\340A\002\372A\031\n\027jobs.goog" +
      "leapis.com/Job\"r\n\020UpdateJobRequest\022-\n\003jo" +
      "b\030\001 \001(\0132\033.google.cloud.talent.v4.JobB\003\340A" +
      "\002\022/\n\013update_mask\030\002 \001(\0132\032.google.protobuf" +
      ".FieldMask\"A\n\020DeleteJobRequest\022-\n\004name\030\001" +
      " \001(\tB\037\340A\002\372A\031\n\027jobs.googleapis.com/Job\"\261\001" +
      "\n\017ListJobsRequest\022/\n\006parent\030\001 \001(\tB\037\340A\002\372A" +
      "\031\022\027jobs.googleapis.com/Job\022\023\n\006filter\030\002 \001" +
      "(\tB\003\340A\002\022\022\n\npage_token\030\003 \001(\t\022\021\n\tpage_size" +
      "\030\004 \001(\005\0221\n\010job_view\030\005 \001(\0162\037.google.cloud." +
      "talent.v4.JobView\"\222\001\n\020ListJobsResponse\022)" +
      "\n\004jobs\030\001 \003(\0132\033.google.cloud.talent.v4.Jo" +
      "b\022\027\n\017next_page_token\030\002 \001(\t\022:\n\010metadata\030\003" +
      " \001(\0132(.google.cloud.talent.v4.ResponseMe" +
      "tadata\"\207\t\n\021SearchJobsRequest\022/\n\006parent\030\001" +
      " \001(\tB\037\340A\002\372A\031\022\027jobs.googleapis.com/Job\022I\n" +
      "\013search_mode\030\002 \001(\01624.google.cloud.talent" +
      ".v4.SearchJobsRequest.SearchMode\022F\n\020requ" +
      "est_metadata\030\003 \001(\0132\'.google.cloud.talent" +
      ".v4.RequestMetadataB\003\340A\002\0223\n\tjob_query\030\004 " +
      "\001(\0132 .google.cloud.talent.v4.JobQuery\022\031\n" +
      "\021enable_broadening\030\005 \001(\010\022A\n\021histogram_qu" +
      "eries\030\007 \003(\0132&.google.cloud.talent.v4.His" +
      "togramQuery\0221\n\010job_view\030\010 \001(\0162\037.google.c" +
      "loud.talent.v4.JobView\022\016\n\006offset\030\t \001(\005\022\025" +
      "\n\rmax_page_size\030\n \001(\005\022\022\n\npage_token\030\013 \001(" +
      "\t\022\020\n\010order_by\030\014 \001(\t\022]\n\025diversification_l" +
      "evel\030\r \001(\0162>.google.cloud.talent.v4.Sear" +
      "chJobsRequest.DiversificationLevel\022X\n\023cu" +
      "stom_ranking_info\030\016 \001(\0132;.google.cloud.t" +
      "alent.v4.SearchJobsRequest.CustomRanking" +
      "Info\022\035\n\025disable_keyword_match\030\020 \001(\010\032\225\002\n\021" +
      "CustomRankingInfo\022j\n\020importance_level\030\001 " +
      "\001(\0162K.google.cloud.talent.v4.SearchJobsR" +
      "equest.CustomRankingInfo.ImportanceLevel" +
      "B\003\340A\002\022\037\n\022ranking_expression\030\002 \001(\tB\003\340A\002\"s" +
      "\n\017ImportanceLevel\022 \n\034IMPORTANCE_LEVEL_UN" +
      "SPECIFIED\020\000\022\010\n\004NONE\020\001\022\007\n\003LOW\020\002\022\010\n\004MILD\020\003" +
      "\022\n\n\006MEDIUM\020\004\022\010\n\004HIGH\020\005\022\013\n\007EXTREME\020\006\"R\n\nS" +
      "earchMode\022\033\n\027SEARCH_MODE_UNSPECIFIED\020\000\022\016" +
      "\n\nJOB_SEARCH\020\001\022\027\n\023FEATURED_JOB_SEARCH\020\002\"" +
      "W\n\024DiversificationLevel\022%\n!DIVERSIFICATI" +
      "ON_LEVEL_UNSPECIFIED\020\000\022\014\n\010DISABLED\020\001\022\n\n\006" +
      "SIMPLE\020\002\"\221\006\n\022SearchJobsResponse\022M\n\rmatch" +
      "ing_jobs\030\001 \003(\01326.google.cloud.talent.v4." +
      "SearchJobsResponse.MatchingJob\022M\n\027histog" +
      "ram_query_results\030\002 \003(\0132,.google.cloud.t" +
      "alent.v4.HistogramQueryResult\022\027\n\017next_pa" +
      "ge_token\030\003 \001(\t\022:\n\020location_filters\030\004 \003(\013" +
      "2 .google.cloud.talent.v4.Location\022\022\n\nto" +
      "tal_size\030\006 \001(\005\022:\n\010metadata\030\007 \001(\0132(.googl" +
      "e.cloud.talent.v4.ResponseMetadata\022\"\n\032br" +
      "oadened_query_jobs_count\030\010 \001(\005\022D\n\020spell_" +
      "correction\030\t \001(\0132*.google.cloud.talent.v" +
      "4.SpellingCorrection\032\322\001\n\013MatchingJob\022(\n\003" +
      "job\030\001 \001(\0132\033.google.cloud.talent.v4.Job\022\023" +
      "\n\013job_summary\030\002 \001(\t\022\031\n\021job_title_snippet" +
      "\030\003 \001(\t\022\033\n\023search_text_snippet\030\004 \001(\t\022L\n\014c" +
      "ommute_info\030\005 \001(\01326.google.cloud.talent." +
      "v4.SearchJobsResponse.CommuteInfo\032y\n\013Com" +
      "muteInfo\0226\n\014job_location\030\001 \001(\0132 .google." +
      "cloud.talent.v4.Location\0222\n\017travel_durat" +
      "ion\030\002 \001(\0132\031.google.protobuf.Duration\"y\n\026" +
      "BatchCreateJobsRequest\022/\n\006parent\030\001 \001(\tB\037" +
      "\340A\002\372A\031\022\027jobs.googleapis.com/Job\022.\n\004jobs\030" +
      "\002 \003(\0132\033.google.cloud.talent.v4.JobB\003\340A\002\"" +
      "\252\001\n\026BatchUpdateJobsRequest\022/\n\006parent\030\001 \001" +
      "(\tB\037\340A\002\372A\031\022\027jobs.googleapis.com/Job\022.\n\004j" +
      "obs\030\002 \003(\0132\033.google.cloud.talent.v4.JobB\003" +
      "\340A\002\022/\n\013update_mask\030\003 \001(\0132\032.google.protob" +
      "uf.FieldMask\"y\n\026BatchDeleteJobsRequest\0222" +
      "\n\006parent\030\001 \001(\tB\"\340A\002\372A\034\n\032jobs.googleapis." +
      "com/Tenant\022+\n\005names\030\002 \003(\tB\034\372A\031\n\027jobs.goo" +
      "gleapis.com/Job\"Y\n\tJobResult\022(\n\003job\030\001 \001(" +
      "\0132\033.google.cloud.talent.v4.Job\022\"\n\006status" +
      "\030\002 \001(\0132\022.google.rpc.Status\"Q\n\027BatchCreat" +
      "eJobsResponse\0226\n\013job_results\030\001 \003(\0132!.goo" +
      "gle.cloud.talent.v4.JobResult\"Q\n\027BatchUp" +
      "dateJobsResponse\0226\n\013job_results\030\001 \003(\0132!." +
      "google.cloud.talent.v4.JobResult\"Q\n\027Batc" +
      "hDeleteJobsResponse\0226\n\013job_results\030\001 \003(\013" +
      "2!.google.cloud.talent.v4.JobResult*v\n\007J" +
      "obView\022\030\n\024JOB_VIEW_UNSPECIFIED\020\000\022\024\n\020JOB_" +
      "VIEW_ID_ONLY\020\001\022\024\n\020JOB_VIEW_MINIMAL\020\002\022\022\n\016" +
      "JOB_VIEW_SMALL\020\003\022\021\n\rJOB_VIEW_FULL\020\0042\334\016\n\n" +
      "JobService\022\224\001\n\tCreateJob\022(.google.cloud." +
      "talent.v4.CreateJobRequest\032\033.google.clou" +
      "d.talent.v4.Job\"@\202\323\344\223\002-\"&/v4/{parent=pro" +
      "jects/*/tenants/*}/jobs:\003job\332A\nparent,jo" +
      "b\022\341\001\n\017BatchCreateJobs\022..google.cloud.tal" +
      "ent.v4.BatchCreateJobsRequest\032\035.google.l" +
      "ongrunning.Operation\"\177\202\323\344\223\0027\"2/v4/{paren" +
      "t=projects/*/tenants/*}/jobs:batchCreate" +
      ":\001*\332A\013parent,jobs\312A1\n\027BatchCreateJobsRes" +
      "ponse\022\026BatchOperationMetadata\022\203\001\n\006GetJob" +
      "\022%.google.cloud.talent.v4.GetJobRequest\032" +
      "\033.google.cloud.talent.v4.Job\"5\202\323\344\223\002(\022&/v" +
      "4/{name=projects/*/tenants/*/jobs/*}\332A\004n" +
      "ame\022\235\001\n\tUpdateJob\022(.google.cloud.talent." +
      "v4.UpdateJobRequest\032\033.google.cloud.talen" +
      "t.v4.Job\"I\202\323\344\223\00212*/v4/{job.name=projects" +
      "/*/tenants/*/jobs/*}:\003job\332A\017job,update_m" +
      "ask\022\341\001\n\017BatchUpdateJobs\022..google.cloud.t" +
      "alent.v4.BatchUpdateJobsRequest\032\035.google" +
      ".longrunning.Operation\"\177\202\323\344\223\0027\"2/v4/{par" +
      "ent=projects/*/tenants/*}/jobs:batchUpda" +
      "te:\001*\332A\013parent,jobs\312A1\n\027BatchUpdateJobsR" +
      "esponse\022\026BatchOperationMetadata\022\204\001\n\tDele" +
      "teJob\022(.google.cloud.talent.v4.DeleteJob" +
      "Request\032\026.google.protobuf.Empty\"5\202\323\344\223\002(*" +
      "&/v4/{name=projects/*/tenants/*/jobs/*}\332" +
      "A\004name\022\343\001\n\017BatchDeleteJobs\022..google.clou" +
      "d.talent.v4.BatchDeleteJobsRequest\032\035.goo" +
      "gle.longrunning.Operation\"\200\001\202\323\344\223\0027\"2/v4/" +
      "{parent=projects/*/tenants/*}/jobs:batch" +
      "Delete:\001*\332A\014parent,names\312A1\n\027BatchDelete" +
      "JobsResponse\022\026BatchOperationMetadata\022\235\001\n" +
      "\010ListJobs\022\'.google.cloud.talent.v4.ListJ" +
      "obsRequest\032(.google.cloud.talent.v4.List" +
      "JobsResponse\">\202\323\344\223\002(\022&/v4/{parent=projec" +
      "ts/*/tenants/*}/jobs\332A\rparent,filter\022\235\001\n" +
      "\nSearchJobs\022).google.cloud.talent.v4.Sea" +
      "rchJobsRequest\032*.google.cloud.talent.v4." +
      "SearchJobsResponse\"8\202\323\344\223\0022\"-/v4/{parent=" +
      "projects/*/tenants/*}/jobs:search:\001*\022\255\001\n" +
      "\022SearchJobsForAlert\022).google.cloud.talen" +
      "t.v4.SearchJobsRequest\032*.google.cloud.ta" +
      "lent.v4.SearchJobsResponse\"@\202\323\344\223\002:\"5/v4/" +
      "{parent=projects/*/tenants/*}/jobs:searc" +
      "hForAlert:\001*\032l\312A\023jobs.googleapis.com\322ASh" +
      "ttps://www.googleapis.com/auth/cloud-pla" +
      "tform,https://www.googleapis.com/auth/jo" +
      "bsBs\n\032com.google.cloud.talent.v4B\017JobSer" +
      "viceProtoP\001Z<google.golang.org/genproto/" +
      "googleapis/cloud/talent/v4;talent\242\002\003CTSb" +
      "\006proto3"
    };
    descriptor = com.google.protobuf.Descriptors.FileDescriptor
      .internalBuildGeneratedFileFrom(descriptorData,
        new com.google.protobuf.Descriptors.FileDescriptor[] {
          com.google.api.AnnotationsProto.getDescriptor(),
          com.google.api.ClientProto.getDescriptor(),
          com.google.api.FieldBehaviorProto.getDescriptor(),
          com.google.api.ResourceProto.getDescriptor(),
          com.google.cloud.talent.v4.CommonProto.getDescriptor(),
          com.google.cloud.talent.v4.FiltersProto.getDescriptor(),
          com.google.cloud.talent.v4.HistogramProto.getDescriptor(),
          com.google.cloud.talent.v4.JobProto.getDescriptor(),
          com.google.longrunning.OperationsProto.getDescriptor(),
          com.google.protobuf.AnyProto.getDescriptor(),
          com.google.protobuf.DurationProto.getDescriptor(),
          com.google.protobuf.EmptyProto.getDescriptor(),
          com.google.protobuf.FieldMaskProto.getDescriptor(),
          com.google.rpc.StatusProto.getDescriptor(),
        });
    internal_static_google_cloud_talent_v4_CreateJobRequest_descriptor =
      getDescriptor().getMessageTypes().get(0);
    internal_static_google_cloud_talent_v4_CreateJobRequest_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_talent_v4_CreateJobRequest_descriptor,
        new java.lang.String[] { "Parent", "Job", });
    internal_static_google_cloud_talent_v4_GetJobRequest_descriptor =
      getDescriptor().getMessageTypes().get(1);
    internal_static_google_cloud_talent_v4_GetJobRequest_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_talent_v4_GetJobRequest_descriptor,
        new java.lang.String[] { "Name", });
    internal_static_google_cloud_talent_v4_UpdateJobRequest_descriptor =
      getDescriptor().getMessageTypes().get(2);
    internal_static_google_cloud_talent_v4_UpdateJobRequest_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_talent_v4_UpdateJobRequest_descriptor,
        new java.lang.String[] { "Job", "UpdateMask", });
    internal_static_google_cloud_talent_v4_DeleteJobRequest_descriptor =
      getDescriptor().getMessageTypes().get(3);
    internal_static_google_cloud_talent_v4_DeleteJobRequest_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_talent_v4_DeleteJobRequest_descriptor,
        new java.lang.String[] { "Name", });
    internal_static_google_cloud_talent_v4_ListJobsRequest_descriptor =
      getDescriptor().getMessageTypes().get(4);
    internal_static_google_cloud_talent_v4_ListJobsRequest_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_talent_v4_ListJobsRequest_descriptor,
        new java.lang.String[] { "Parent", "Filter", "PageToken", "PageSize", "JobView", });
    internal_static_google_cloud_talent_v4_ListJobsResponse_descriptor =
      getDescriptor().getMessageTypes().get(5);
    internal_static_google_cloud_talent_v4_ListJobsResponse_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_talent_v4_ListJobsResponse_descriptor,
        new java.lang.String[] { "Jobs", "NextPageToken", "Metadata", });
    internal_static_google_cloud_talent_v4_SearchJobsRequest_descriptor =
      getDescriptor().getMessageTypes().get(6);
    internal_static_google_cloud_talent_v4_SearchJobsRequest_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_talent_v4_SearchJobsRequest_descriptor,
        new java.lang.String[] { "Parent", "SearchMode", "RequestMetadata", "JobQuery", "EnableBroadening", "HistogramQueries", "JobView", "Offset", "MaxPageSize", "PageToken", "OrderBy", "DiversificationLevel", "CustomRankingInfo", "DisableKeywordMatch", });
    internal_static_google_cloud_talent_v4_SearchJobsRequest_CustomRankingInfo_descriptor =
      internal_static_google_cloud_talent_v4_SearchJobsRequest_descriptor.getNestedTypes().get(0);
    internal_static_google_cloud_talent_v4_SearchJobsRequest_CustomRankingInfo_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_talent_v4_SearchJobsRequest_CustomRankingInfo_descriptor,
        new java.lang.String[] { "ImportanceLevel", "RankingExpression", });
    internal_static_google_cloud_talent_v4_SearchJobsResponse_descriptor =
      getDescriptor().getMessageTypes().get(7);
    internal_static_google_cloud_talent_v4_SearchJobsResponse_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_talent_v4_SearchJobsResponse_descriptor,
        new java.lang.String[] { "MatchingJobs", "HistogramQueryResults", "NextPageToken", "LocationFilters", "TotalSize", "Metadata", "BroadenedQueryJobsCount", "SpellCorrection", });
    internal_static_google_cloud_talent_v4_SearchJobsResponse_MatchingJob_descriptor =
      internal_static_google_cloud_talent_v4_SearchJobsResponse_descriptor.getNestedTypes().get(0);
    internal_static_google_cloud_talent_v4_SearchJobsResponse_MatchingJob_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_talent_v4_SearchJobsResponse_MatchingJob_descriptor,
        new java.lang.String[] { "Job", "JobSummary", "JobTitleSnippet", "SearchTextSnippet", "CommuteInfo", });
    internal_static_google_cloud_talent_v4_SearchJobsResponse_CommuteInfo_descriptor =
      internal_static_google_cloud_talent_v4_SearchJobsResponse_descriptor.getNestedTypes().get(1);
    internal_static_google_cloud_talent_v4_SearchJobsResponse_CommuteInfo_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_talent_v4_SearchJobsResponse_CommuteInfo_descriptor,
        new java.lang.String[] { "JobLocation", "TravelDuration", });
    internal_static_google_cloud_talent_v4_BatchCreateJobsRequest_descriptor =
      getDescriptor().getMessageTypes().get(8);
    internal_static_google_cloud_talent_v4_BatchCreateJobsRequest_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_talent_v4_BatchCreateJobsRequest_descriptor,
        new java.lang.String[] { "Parent", "Jobs", });
    internal_static_google_cloud_talent_v4_BatchUpdateJobsRequest_descriptor =
      getDescriptor().getMessageTypes().get(9);
    internal_static_google_cloud_talent_v4_BatchUpdateJobsRequest_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_talent_v4_BatchUpdateJobsRequest_descriptor,
        new java.lang.String[] { "Parent", "Jobs", "UpdateMask", });
    internal_static_google_cloud_talent_v4_BatchDeleteJobsRequest_descriptor =
      getDescriptor().getMessageTypes().get(10);
    internal_static_google_cloud_talent_v4_BatchDeleteJobsRequest_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_talent_v4_BatchDeleteJobsRequest_descriptor,
        new java.lang.String[] { "Parent", "Names", });
    internal_static_google_cloud_talent_v4_JobResult_descriptor =
      getDescriptor().getMessageTypes().get(11);
    internal_static_google_cloud_talent_v4_JobResult_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_talent_v4_JobResult_descriptor,
        new java.lang.String[] { "Job", "Status", });
    internal_static_google_cloud_talent_v4_BatchCreateJobsResponse_descriptor =
      getDescriptor().getMessageTypes().get(12);
    internal_static_google_cloud_talent_v4_BatchCreateJobsResponse_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_talent_v4_BatchCreateJobsResponse_descriptor,
        new java.lang.String[] { "JobResults", });
    internal_static_google_cloud_talent_v4_BatchUpdateJobsResponse_descriptor =
      getDescriptor().getMessageTypes().get(13);
    internal_static_google_cloud_talent_v4_BatchUpdateJobsResponse_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_talent_v4_BatchUpdateJobsResponse_descriptor,
        new java.lang.String[] { "JobResults", });
    internal_static_google_cloud_talent_v4_BatchDeleteJobsResponse_descriptor =
      getDescriptor().getMessageTypes().get(14);
    internal_static_google_cloud_talent_v4_BatchDeleteJobsResponse_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_talent_v4_BatchDeleteJobsResponse_descriptor,
        new java.lang.String[] { "JobResults", });
    com.google.protobuf.ExtensionRegistry registry =
        com.google.protobuf.ExtensionRegistry.newInstance();
    registry.add(com.google.api.ClientProto.defaultHost);
    registry.add(com.google.api.FieldBehaviorProto.fieldBehavior);
    registry.add(com.google.api.AnnotationsProto.http);
    registry.add(com.google.api.ClientProto.methodSignature);
    registry.add(com.google.api.ClientProto.oauthScopes);
    registry.add(com.google.api.ResourceProto.resourceReference);
    registry.add(com.google.longrunning.OperationsProto.operationInfo);
    com.google.protobuf.Descriptors.FileDescriptor
        .internalUpdateFileDescriptor(descriptor, registry);
    com.google.api.AnnotationsProto.getDescriptor();
    com.google.api.ClientProto.getDescriptor();
    com.google.api.FieldBehaviorProto.getDescriptor();
    com.google.api.ResourceProto.getDescriptor();
    com.google.cloud.talent.v4.CommonProto.getDescriptor();
    com.google.cloud.talent.v4.FiltersProto.getDescriptor();
    com.google.cloud.talent.v4.HistogramProto.getDescriptor();
    com.google.cloud.talent.v4.JobProto.getDescriptor();
    com.google.longrunning.OperationsProto.getDescriptor();
    com.google.protobuf.AnyProto.getDescriptor();
    com.google.protobuf.DurationProto.getDescriptor();
    com.google.protobuf.EmptyProto.getDescriptor();
    com.google.protobuf.FieldMaskProto.getDescriptor();
    com.google.rpc.StatusProto.getDescriptor();
  }

  // @@protoc_insertion_point(outer_class_scope)
}
