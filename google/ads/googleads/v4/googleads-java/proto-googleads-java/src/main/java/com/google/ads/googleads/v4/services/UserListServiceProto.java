// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v4/services/user_list_service.proto

package com.google.ads.googleads.v4.services;

public final class UserListServiceProto {
  private UserListServiceProto() {}
  public static void registerAllExtensions(
      com.google.protobuf.ExtensionRegistryLite registry) {
  }

  public static void registerAllExtensions(
      com.google.protobuf.ExtensionRegistry registry) {
    registerAllExtensions(
        (com.google.protobuf.ExtensionRegistryLite) registry);
  }
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_ads_googleads_v4_services_GetUserListRequest_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_ads_googleads_v4_services_GetUserListRequest_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_ads_googleads_v4_services_MutateUserListsRequest_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_ads_googleads_v4_services_MutateUserListsRequest_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_ads_googleads_v4_services_UserListOperation_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_ads_googleads_v4_services_UserListOperation_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_ads_googleads_v4_services_MutateUserListsResponse_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_ads_googleads_v4_services_MutateUserListsResponse_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_ads_googleads_v4_services_MutateUserListResult_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_ads_googleads_v4_services_MutateUserListResult_fieldAccessorTable;

  public static com.google.protobuf.Descriptors.FileDescriptor
      getDescriptor() {
    return descriptor;
  }
  private static  com.google.protobuf.Descriptors.FileDescriptor
      descriptor;
  static {
    java.lang.String[] descriptorData = {
      "\n8google/ads/googleads/v4/services/user_" +
      "list_service.proto\022 google.ads.googleads" +
      ".v4.services\0321google/ads/googleads/v4/re" +
      "sources/user_list.proto\032\034google/api/anno" +
      "tations.proto\032\027google/api/client.proto\032\037" +
      "google/api/field_behavior.proto\032\031google/" +
      "api/resource.proto\032 google/protobuf/fiel" +
      "d_mask.proto\032\027google/rpc/status.proto\"V\n" +
      "\022GetUserListRequest\022@\n\rresource_name\030\001 \001" +
      "(\tB)\340A\002\372A#\n!googleads.googleapis.com/Use" +
      "rList\"\260\001\n\026MutateUserListsRequest\022\030\n\013cust" +
      "omer_id\030\001 \001(\tB\003\340A\002\022L\n\noperations\030\002 \003(\01323" +
      ".google.ads.googleads.v4.services.UserLi" +
      "stOperationB\003\340A\002\022\027\n\017partial_failure\030\003 \001(" +
      "\010\022\025\n\rvalidate_only\030\004 \001(\010\"\341\001\n\021UserListOpe" +
      "ration\022/\n\013update_mask\030\004 \001(\0132\032.google.pro" +
      "tobuf.FieldMask\022=\n\006create\030\001 \001(\0132+.google" +
      ".ads.googleads.v4.resources.UserListH\000\022=" +
      "\n\006update\030\002 \001(\0132+.google.ads.googleads.v4" +
      ".resources.UserListH\000\022\020\n\006remove\030\003 \001(\tH\000B" +
      "\013\n\toperation\"\225\001\n\027MutateUserListsResponse" +
      "\0221\n\025partial_failure_error\030\003 \001(\0132\022.google" +
      ".rpc.Status\022G\n\007results\030\002 \003(\01326.google.ad" +
      "s.googleads.v4.services.MutateUserListRe" +
      "sult\"-\n\024MutateUserListResult\022\025\n\rresource" +
      "_name\030\001 \001(\t2\355\003\n\017UserListService\022\265\001\n\013GetU" +
      "serList\0224.google.ads.googleads.v4.servic" +
      "es.GetUserListRequest\032+.google.ads.googl" +
      "eads.v4.resources.UserList\"C\202\323\344\223\002-\022+/v4/" +
      "{resource_name=customers/*/userLists/*}\332" +
      "A\rresource_name\022\332\001\n\017MutateUserLists\0228.go" +
      "ogle.ads.googleads.v4.services.MutateUse" +
      "rListsRequest\0329.google.ads.googleads.v4." +
      "services.MutateUserListsResponse\"R\202\323\344\223\0023" +
      "\"./v4/customers/{customer_id=*}/userList" +
      "s:mutate:\001*\332A\026customer_id,operations\032E\312A" +
      "\030googleads.googleapis.com\322A\'https://www." +
      "googleapis.com/auth/adwordsB\373\001\n$com.goog" +
      "le.ads.googleads.v4.servicesB\024UserListSe" +
      "rviceProtoP\001ZHgoogle.golang.org/genproto" +
      "/googleapis/ads/googleads/v4/services;se" +
      "rvices\242\002\003GAA\252\002 Google.Ads.GoogleAds.V4.S" +
      "ervices\312\002 Google\\Ads\\GoogleAds\\V4\\Servic" +
      "es\352\002$Google::Ads::GoogleAds::V4::Service" +
      "sb\006proto3"
    };
    descriptor = com.google.protobuf.Descriptors.FileDescriptor
      .internalBuildGeneratedFileFrom(descriptorData,
        new com.google.protobuf.Descriptors.FileDescriptor[] {
          com.google.ads.googleads.v4.resources.UserListProto.getDescriptor(),
          com.google.api.AnnotationsProto.getDescriptor(),
          com.google.api.ClientProto.getDescriptor(),
          com.google.api.FieldBehaviorProto.getDescriptor(),
          com.google.api.ResourceProto.getDescriptor(),
          com.google.protobuf.FieldMaskProto.getDescriptor(),
          com.google.rpc.StatusProto.getDescriptor(),
        });
    internal_static_google_ads_googleads_v4_services_GetUserListRequest_descriptor =
      getDescriptor().getMessageTypes().get(0);
    internal_static_google_ads_googleads_v4_services_GetUserListRequest_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_ads_googleads_v4_services_GetUserListRequest_descriptor,
        new java.lang.String[] { "ResourceName", });
    internal_static_google_ads_googleads_v4_services_MutateUserListsRequest_descriptor =
      getDescriptor().getMessageTypes().get(1);
    internal_static_google_ads_googleads_v4_services_MutateUserListsRequest_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_ads_googleads_v4_services_MutateUserListsRequest_descriptor,
        new java.lang.String[] { "CustomerId", "Operations", "PartialFailure", "ValidateOnly", });
    internal_static_google_ads_googleads_v4_services_UserListOperation_descriptor =
      getDescriptor().getMessageTypes().get(2);
    internal_static_google_ads_googleads_v4_services_UserListOperation_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_ads_googleads_v4_services_UserListOperation_descriptor,
        new java.lang.String[] { "UpdateMask", "Create", "Update", "Remove", "Operation", });
    internal_static_google_ads_googleads_v4_services_MutateUserListsResponse_descriptor =
      getDescriptor().getMessageTypes().get(3);
    internal_static_google_ads_googleads_v4_services_MutateUserListsResponse_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_ads_googleads_v4_services_MutateUserListsResponse_descriptor,
        new java.lang.String[] { "PartialFailureError", "Results", });
    internal_static_google_ads_googleads_v4_services_MutateUserListResult_descriptor =
      getDescriptor().getMessageTypes().get(4);
    internal_static_google_ads_googleads_v4_services_MutateUserListResult_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_ads_googleads_v4_services_MutateUserListResult_descriptor,
        new java.lang.String[] { "ResourceName", });
    com.google.protobuf.ExtensionRegistry registry =
        com.google.protobuf.ExtensionRegistry.newInstance();
    registry.add(com.google.api.ClientProto.defaultHost);
    registry.add(com.google.api.FieldBehaviorProto.fieldBehavior);
    registry.add(com.google.api.AnnotationsProto.http);
    registry.add(com.google.api.ClientProto.methodSignature);
    registry.add(com.google.api.ClientProto.oauthScopes);
    registry.add(com.google.api.ResourceProto.resourceReference);
    com.google.protobuf.Descriptors.FileDescriptor
        .internalUpdateFileDescriptor(descriptor, registry);
    com.google.ads.googleads.v4.resources.UserListProto.getDescriptor();
    com.google.api.AnnotationsProto.getDescriptor();
    com.google.api.ClientProto.getDescriptor();
    com.google.api.FieldBehaviorProto.getDescriptor();
    com.google.api.ResourceProto.getDescriptor();
    com.google.protobuf.FieldMaskProto.getDescriptor();
    com.google.rpc.StatusProto.getDescriptor();
  }

  // @@protoc_insertion_point(outer_class_scope)
}
