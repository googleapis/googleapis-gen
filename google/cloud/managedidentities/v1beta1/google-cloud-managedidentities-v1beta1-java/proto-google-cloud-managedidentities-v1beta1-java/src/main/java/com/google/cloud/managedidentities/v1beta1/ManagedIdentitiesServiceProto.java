// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/managedidentities/v1beta1/managed_identities_service.proto

package com.google.cloud.managedidentities.v1beta1;

public final class ManagedIdentitiesServiceProto {
  private ManagedIdentitiesServiceProto() {}
  public static void registerAllExtensions(
      com.google.protobuf.ExtensionRegistryLite registry) {
  }

  public static void registerAllExtensions(
      com.google.protobuf.ExtensionRegistry registry) {
    registerAllExtensions(
        (com.google.protobuf.ExtensionRegistryLite) registry);
  }
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_managedidentities_v1beta1_OpMetadata_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_managedidentities_v1beta1_OpMetadata_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_managedidentities_v1beta1_CreateMicrosoftAdDomainRequest_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_managedidentities_v1beta1_CreateMicrosoftAdDomainRequest_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_managedidentities_v1beta1_ResetAdminPasswordRequest_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_managedidentities_v1beta1_ResetAdminPasswordRequest_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_managedidentities_v1beta1_ResetAdminPasswordResponse_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_managedidentities_v1beta1_ResetAdminPasswordResponse_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_managedidentities_v1beta1_ListDomainsRequest_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_managedidentities_v1beta1_ListDomainsRequest_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_managedidentities_v1beta1_ListDomainsResponse_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_managedidentities_v1beta1_ListDomainsResponse_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_managedidentities_v1beta1_GetDomainRequest_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_managedidentities_v1beta1_GetDomainRequest_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_managedidentities_v1beta1_UpdateDomainRequest_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_managedidentities_v1beta1_UpdateDomainRequest_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_managedidentities_v1beta1_DeleteDomainRequest_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_managedidentities_v1beta1_DeleteDomainRequest_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_managedidentities_v1beta1_AttachTrustRequest_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_managedidentities_v1beta1_AttachTrustRequest_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_managedidentities_v1beta1_ReconfigureTrustRequest_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_managedidentities_v1beta1_ReconfigureTrustRequest_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_managedidentities_v1beta1_DetachTrustRequest_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_managedidentities_v1beta1_DetachTrustRequest_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_managedidentities_v1beta1_ValidateTrustRequest_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_managedidentities_v1beta1_ValidateTrustRequest_fieldAccessorTable;

  public static com.google.protobuf.Descriptors.FileDescriptor
      getDescriptor() {
    return descriptor;
  }
  private static  com.google.protobuf.Descriptors.FileDescriptor
      descriptor;
  static {
    java.lang.String[] descriptorData = {
      "\nGgoogle/cloud/managedidentities/v1beta1" +
      "/managed_identities_service.proto\022&googl" +
      "e.cloud.managedidentities.v1beta1\032\034googl" +
      "e/api/annotations.proto\032\037google/api/fiel" +
      "d_behavior.proto\0325google/cloud/managedid" +
      "entities/v1beta1/resource.proto\032#google/" +
      "longrunning/operations.proto\032 google/pro" +
      "tobuf/field_mask.proto\032\037google/protobuf/" +
      "timestamp.proto\032\027google/api/client.proto" +
      "\"\334\001\n\nOpMetadata\0224\n\013create_time\030\001 \001(\0132\032.g" +
      "oogle.protobuf.TimestampB\003\340A\003\0221\n\010end_tim" +
      "e\030\002 \001(\0132\032.google.protobuf.TimestampB\003\340A\003" +
      "\022\023\n\006target\030\003 \001(\tB\003\340A\003\022\021\n\004verb\030\004 \001(\tB\003\340A\003" +
      "\022#\n\026requested_cancellation\030\005 \001(\010B\003\340A\003\022\030\n" +
      "\013api_version\030\006 \001(\tB\003\340A\003\"\205\001\n\036CreateMicros" +
      "oftAdDomainRequest\022\016\n\006parent\030\001 \001(\t\022\023\n\013do" +
      "main_name\030\002 \001(\t\022>\n\006domain\030\003 \001(\0132..google" +
      ".cloud.managedidentities.v1beta1.Domain\"" +
      ")\n\031ResetAdminPasswordRequest\022\014\n\004name\030\001 \001" +
      "(\t\".\n\032ResetAdminPasswordResponse\022\020\n\010pass" +
      "word\030\001 \001(\t\"m\n\022ListDomainsRequest\022\016\n\006pare" +
      "nt\030\001 \001(\t\022\021\n\tpage_size\030\002 \001(\005\022\022\n\npage_toke" +
      "n\030\003 \001(\t\022\016\n\006filter\030\004 \001(\t\022\020\n\010order_by\030\005 \001(" +
      "\t\"\204\001\n\023ListDomainsResponse\022?\n\007domains\030\001 \003" +
      "(\0132..google.cloud.managedidentities.v1be" +
      "ta1.Domain\022\027\n\017next_page_token\030\002 \001(\t\022\023\n\013u" +
      "nreachable\030\003 \003(\t\" \n\020GetDomainRequest\022\014\n\004" +
      "name\030\001 \001(\t\"\206\001\n\023UpdateDomainRequest\022/\n\013up" +
      "date_mask\030\001 \001(\0132\032.google.protobuf.FieldM" +
      "ask\022>\n\006domain\030\002 \001(\0132..google.cloud.manag" +
      "edidentities.v1beta1.Domain\"#\n\023DeleteDom" +
      "ainRequest\022\014\n\004name\030\001 \001(\t\"`\n\022AttachTrustR" +
      "equest\022\014\n\004name\030\001 \001(\t\022<\n\005trust\030\002 \001(\0132-.go" +
      "ogle.cloud.managedidentities.v1beta1.Tru" +
      "st\"d\n\027ReconfigureTrustRequest\022\014\n\004name\030\001 " +
      "\001(\t\022\032\n\022target_domain_name\030\002 \001(\t\022\037\n\027targe" +
      "t_dns_ip_addresses\030\003 \003(\t\"`\n\022DetachTrustR" +
      "equest\022\014\n\004name\030\001 \001(\t\022<\n\005trust\030\002 \001(\0132-.go" +
      "ogle.cloud.managedidentities.v1beta1.Tru" +
      "st\"b\n\024ValidateTrustRequest\022\014\n\004name\030\001 \001(\t" +
      "\022<\n\005trust\030\002 \001(\0132-.google.cloud.managedid" +
      "entities.v1beta1.Trust2\274\021\n\030ManagedIdenti" +
      "tiesService\022\336\001\n\027CreateMicrosoftAdDomain\022" +
      "F.google.cloud.managedidentities.v1beta1" +
      ".CreateMicrosoftAdDomainRequest\032\035.google" +
      ".longrunning.Operation\"\\\202\323\344\223\002?\"5/v1beta1" +
      "/{parent=projects/*/locations/global}/do" +
      "mains:\006domain\312A\024\n\006Domain\022\nOpMetadata\022\360\001\n" +
      "\022ResetAdminPassword\022A.google.cloud.manag" +
      "edidentities.v1beta1.ResetAdminPasswordR" +
      "equest\032B.google.cloud.managedidentities." +
      "v1beta1.ResetAdminPasswordResponse\"S\202\323\344\223" +
      "\002M\"H/v1beta1/{name=projects/*/locations/" +
      "global/domains/*}:resetAdminPassword:\001*\022" +
      "\305\001\n\013ListDomains\022:.google.cloud.managedid" +
      "entities.v1beta1.ListDomainsRequest\032;.go" +
      "ogle.cloud.managedidentities.v1beta1.Lis" +
      "tDomainsResponse\"=\202\323\344\223\0027\0225/v1beta1/{pare" +
      "nt=projects/*/locations/global}/domains\022" +
      "\264\001\n\tGetDomain\0228.google.cloud.managediden" +
      "tities.v1beta1.GetDomainRequest\032..google" +
      ".cloud.managedidentities.v1beta1.Domain\"" +
      "=\202\323\344\223\0027\0225/v1beta1/{name=projects/*/locat" +
      "ions/global/domains/*}\022\317\001\n\014UpdateDomain\022" +
      ";.google.cloud.managedidentities.v1beta1" +
      ".UpdateDomainRequest\032\035.google.longrunnin" +
      "g.Operation\"c\202\323\344\223\002F2</v1beta1/{domain.na" +
      "me=projects/*/locations/global/domains/*" +
      "}:\006domain\312A\024\n\006Domain\022\nOpMetadata\022\317\001\n\014Del" +
      "eteDomain\022;.google.cloud.managedidentiti" +
      "es.v1beta1.DeleteDomainRequest\032\035.google." +
      "longrunning.Operation\"c\202\323\344\223\0027*5/v1beta1/" +
      "{name=projects/*/locations/global/domain" +
      "s/*}\312A#\n\025google.protobuf.Empty\022\nOpMetada" +
      "ta\022\315\001\n\013AttachTrust\022:.google.cloud.manage" +
      "didentities.v1beta1.AttachTrustRequest\032\035" +
      ".google.longrunning.Operation\"c\202\323\344\223\002F\"A/" +
      "v1beta1/{name=projects/*/locations/globa" +
      "l/domains/*}:attachTrust:\001*\312A\024\n\006Domain\022\n" +
      "OpMetadata\022\334\001\n\020ReconfigureTrust\022?.google" +
      ".cloud.managedidentities.v1beta1.Reconfi" +
      "gureTrustRequest\032\035.google.longrunning.Op" +
      "eration\"h\202\323\344\223\002K\"F/v1beta1/{name=projects" +
      "/*/locations/global/domains/*}:reconfigu" +
      "reTrust:\001*\312A\024\n\006Domain\022\nOpMetadata\022\315\001\n\013De" +
      "tachTrust\022:.google.cloud.managedidentiti" +
      "es.v1beta1.DetachTrustRequest\032\035.google.l" +
      "ongrunning.Operation\"c\202\323\344\223\002F\"A/v1beta1/{" +
      "name=projects/*/locations/global/domains" +
      "/*}:detachTrust:\001*\312A\024\n\006Domain\022\nOpMetadat" +
      "a\022\323\001\n\rValidateTrust\022<.google.cloud.manag" +
      "edidentities.v1beta1.ValidateTrustReques" +
      "t\032\035.google.longrunning.Operation\"e\202\323\344\223\002H" +
      "\"C/v1beta1/{name=projects/*/locations/gl" +
      "obal/domains/*}:validateTrust:\001*\312A\024\n\006Dom" +
      "ain\022\nOpMetadata\032T\312A managedidentities.go" +
      "ogleapis.com\322A.https://www.googleapis.co" +
      "m/auth/cloud-platformB\253\002\n*com.google.clo" +
      "ud.managedidentities.v1beta1B\035ManagedIde" +
      "ntitiesServiceProtoP\001ZWgoogle.golang.org" +
      "/genproto/googleapis/cloud/managedidenti" +
      "ties/v1beta1;managedidentities\242\002\004GCMI\252\002&" +
      "Google.Cloud.ManagedIdentities.V1Beta1\312\002" +
      "&Google\\Cloud\\ManagedIdentities\\V1beta1\352" +
      "\002)Google::Cloud::ManagedIdentities::V1be" +
      "ta1b\006proto3"
    };
    descriptor = com.google.protobuf.Descriptors.FileDescriptor
      .internalBuildGeneratedFileFrom(descriptorData,
        new com.google.protobuf.Descriptors.FileDescriptor[] {
          com.google.api.AnnotationsProto.getDescriptor(),
          com.google.api.FieldBehaviorProto.getDescriptor(),
          com.google.cloud.managedidentities.v1beta1.ResourceProto.getDescriptor(),
          com.google.longrunning.OperationsProto.getDescriptor(),
          com.google.protobuf.FieldMaskProto.getDescriptor(),
          com.google.protobuf.TimestampProto.getDescriptor(),
          com.google.api.ClientProto.getDescriptor(),
        });
    internal_static_google_cloud_managedidentities_v1beta1_OpMetadata_descriptor =
      getDescriptor().getMessageTypes().get(0);
    internal_static_google_cloud_managedidentities_v1beta1_OpMetadata_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_managedidentities_v1beta1_OpMetadata_descriptor,
        new java.lang.String[] { "CreateTime", "EndTime", "Target", "Verb", "RequestedCancellation", "ApiVersion", });
    internal_static_google_cloud_managedidentities_v1beta1_CreateMicrosoftAdDomainRequest_descriptor =
      getDescriptor().getMessageTypes().get(1);
    internal_static_google_cloud_managedidentities_v1beta1_CreateMicrosoftAdDomainRequest_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_managedidentities_v1beta1_CreateMicrosoftAdDomainRequest_descriptor,
        new java.lang.String[] { "Parent", "DomainName", "Domain", });
    internal_static_google_cloud_managedidentities_v1beta1_ResetAdminPasswordRequest_descriptor =
      getDescriptor().getMessageTypes().get(2);
    internal_static_google_cloud_managedidentities_v1beta1_ResetAdminPasswordRequest_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_managedidentities_v1beta1_ResetAdminPasswordRequest_descriptor,
        new java.lang.String[] { "Name", });
    internal_static_google_cloud_managedidentities_v1beta1_ResetAdminPasswordResponse_descriptor =
      getDescriptor().getMessageTypes().get(3);
    internal_static_google_cloud_managedidentities_v1beta1_ResetAdminPasswordResponse_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_managedidentities_v1beta1_ResetAdminPasswordResponse_descriptor,
        new java.lang.String[] { "Password", });
    internal_static_google_cloud_managedidentities_v1beta1_ListDomainsRequest_descriptor =
      getDescriptor().getMessageTypes().get(4);
    internal_static_google_cloud_managedidentities_v1beta1_ListDomainsRequest_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_managedidentities_v1beta1_ListDomainsRequest_descriptor,
        new java.lang.String[] { "Parent", "PageSize", "PageToken", "Filter", "OrderBy", });
    internal_static_google_cloud_managedidentities_v1beta1_ListDomainsResponse_descriptor =
      getDescriptor().getMessageTypes().get(5);
    internal_static_google_cloud_managedidentities_v1beta1_ListDomainsResponse_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_managedidentities_v1beta1_ListDomainsResponse_descriptor,
        new java.lang.String[] { "Domains", "NextPageToken", "Unreachable", });
    internal_static_google_cloud_managedidentities_v1beta1_GetDomainRequest_descriptor =
      getDescriptor().getMessageTypes().get(6);
    internal_static_google_cloud_managedidentities_v1beta1_GetDomainRequest_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_managedidentities_v1beta1_GetDomainRequest_descriptor,
        new java.lang.String[] { "Name", });
    internal_static_google_cloud_managedidentities_v1beta1_UpdateDomainRequest_descriptor =
      getDescriptor().getMessageTypes().get(7);
    internal_static_google_cloud_managedidentities_v1beta1_UpdateDomainRequest_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_managedidentities_v1beta1_UpdateDomainRequest_descriptor,
        new java.lang.String[] { "UpdateMask", "Domain", });
    internal_static_google_cloud_managedidentities_v1beta1_DeleteDomainRequest_descriptor =
      getDescriptor().getMessageTypes().get(8);
    internal_static_google_cloud_managedidentities_v1beta1_DeleteDomainRequest_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_managedidentities_v1beta1_DeleteDomainRequest_descriptor,
        new java.lang.String[] { "Name", });
    internal_static_google_cloud_managedidentities_v1beta1_AttachTrustRequest_descriptor =
      getDescriptor().getMessageTypes().get(9);
    internal_static_google_cloud_managedidentities_v1beta1_AttachTrustRequest_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_managedidentities_v1beta1_AttachTrustRequest_descriptor,
        new java.lang.String[] { "Name", "Trust", });
    internal_static_google_cloud_managedidentities_v1beta1_ReconfigureTrustRequest_descriptor =
      getDescriptor().getMessageTypes().get(10);
    internal_static_google_cloud_managedidentities_v1beta1_ReconfigureTrustRequest_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_managedidentities_v1beta1_ReconfigureTrustRequest_descriptor,
        new java.lang.String[] { "Name", "TargetDomainName", "TargetDnsIpAddresses", });
    internal_static_google_cloud_managedidentities_v1beta1_DetachTrustRequest_descriptor =
      getDescriptor().getMessageTypes().get(11);
    internal_static_google_cloud_managedidentities_v1beta1_DetachTrustRequest_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_managedidentities_v1beta1_DetachTrustRequest_descriptor,
        new java.lang.String[] { "Name", "Trust", });
    internal_static_google_cloud_managedidentities_v1beta1_ValidateTrustRequest_descriptor =
      getDescriptor().getMessageTypes().get(12);
    internal_static_google_cloud_managedidentities_v1beta1_ValidateTrustRequest_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_managedidentities_v1beta1_ValidateTrustRequest_descriptor,
        new java.lang.String[] { "Name", "Trust", });
    com.google.protobuf.ExtensionRegistry registry =
        com.google.protobuf.ExtensionRegistry.newInstance();
    registry.add(com.google.api.ClientProto.defaultHost);
    registry.add(com.google.api.FieldBehaviorProto.fieldBehavior);
    registry.add(com.google.api.AnnotationsProto.http);
    registry.add(com.google.api.ClientProto.oauthScopes);
    registry.add(com.google.longrunning.OperationsProto.operationInfo);
    com.google.protobuf.Descriptors.FileDescriptor
        .internalUpdateFileDescriptor(descriptor, registry);
    com.google.api.AnnotationsProto.getDescriptor();
    com.google.api.FieldBehaviorProto.getDescriptor();
    com.google.cloud.managedidentities.v1beta1.ResourceProto.getDescriptor();
    com.google.longrunning.OperationsProto.getDescriptor();
    com.google.protobuf.FieldMaskProto.getDescriptor();
    com.google.protobuf.TimestampProto.getDescriptor();
    com.google.api.ClientProto.getDescriptor();
  }

  // @@protoc_insertion_point(outer_class_scope)
}
