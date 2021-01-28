// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v5/services/user_data_service.proto

package com.google.ads.googleads.v5.services;

public final class UserDataServiceProto {
  private UserDataServiceProto() {}
  public static void registerAllExtensions(
      com.google.protobuf.ExtensionRegistryLite registry) {
  }

  public static void registerAllExtensions(
      com.google.protobuf.ExtensionRegistry registry) {
    registerAllExtensions(
        (com.google.protobuf.ExtensionRegistryLite) registry);
  }
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_ads_googleads_v5_services_UploadUserDataRequest_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_ads_googleads_v5_services_UploadUserDataRequest_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_ads_googleads_v5_services_UserDataOperation_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_ads_googleads_v5_services_UserDataOperation_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_ads_googleads_v5_services_UploadUserDataResponse_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_ads_googleads_v5_services_UploadUserDataResponse_fieldAccessorTable;

  public static com.google.protobuf.Descriptors.FileDescriptor
      getDescriptor() {
    return descriptor;
  }
  private static  com.google.protobuf.Descriptors.FileDescriptor
      descriptor;
  static {
    java.lang.String[] descriptorData = {
      "\n8google/ads/googleads/v5/services/user_" +
      "data_service.proto\022 google.ads.googleads" +
      ".v5.services\0326google/ads/googleads/v5/co" +
      "mmon/offline_user_data.proto\032\034google/api" +
      "/annotations.proto\032\037google/api/field_beh" +
      "avior.proto\032\036google/protobuf/wrappers.pr" +
      "oto\032\027google/api/client.proto\"\367\001\n\025UploadU" +
      "serDataRequest\022\030\n\013customer_id\030\001 \001(\tB\003\340A\002" +
      "\022L\n\noperations\030\003 \003(\01323.google.ads.google" +
      "ads.v5.services.UserDataOperationB\003\340A\002\022j" +
      "\n!customer_match_user_list_metadata\030\002 \001(" +
      "\0132=.google.ads.googleads.v5.common.Custo" +
      "merMatchUserListMetadataH\000B\n\n\010metadata\"\230" +
      "\001\n\021UserDataOperation\022:\n\006create\030\001 \001(\0132(.g" +
      "oogle.ads.googleads.v5.common.UserDataH\000" +
      "\022:\n\006remove\030\002 \001(\0132(.google.ads.googleads." +
      "v5.common.UserDataH\000B\013\n\toperation\"\220\001\n\026Up" +
      "loadUserDataResponse\0226\n\020upload_date_time" +
      "\030\001 \001(\0132\034.google.protobuf.StringValue\022>\n\031" +
      "received_operations_count\030\002 \001(\0132\033.google" +
      ".protobuf.Int32Value2\227\002\n\017UserDataService" +
      "\022\274\001\n\016UploadUserData\0227.google.ads.googlea" +
      "ds.v5.services.UploadUserDataRequest\0328.g" +
      "oogle.ads.googleads.v5.services.UploadUs" +
      "erDataResponse\"7\202\323\344\223\0021\",/v5/customers/{c" +
      "ustomer_id=*}:uploadUserData:\001*\032E\312A\030goog" +
      "leads.googleapis.com\322A\'https://www.googl" +
      "eapis.com/auth/adwordsB\373\001\n$com.google.ad" +
      "s.googleads.v5.servicesB\024UserDataService" +
      "ProtoP\001ZHgoogle.golang.org/genproto/goog" +
      "leapis/ads/googleads/v5/services;service" +
      "s\242\002\003GAA\252\002 Google.Ads.GoogleAds.V5.Servic" +
      "es\312\002 Google\\Ads\\GoogleAds\\V5\\Services\352\002$" +
      "Google::Ads::GoogleAds::V5::Servicesb\006pr" +
      "oto3"
    };
    descriptor = com.google.protobuf.Descriptors.FileDescriptor
      .internalBuildGeneratedFileFrom(descriptorData,
        new com.google.protobuf.Descriptors.FileDescriptor[] {
          com.google.ads.googleads.v5.common.OfflineUserDataProto.getDescriptor(),
          com.google.api.AnnotationsProto.getDescriptor(),
          com.google.api.FieldBehaviorProto.getDescriptor(),
          com.google.protobuf.WrappersProto.getDescriptor(),
          com.google.api.ClientProto.getDescriptor(),
        });
    internal_static_google_ads_googleads_v5_services_UploadUserDataRequest_descriptor =
      getDescriptor().getMessageTypes().get(0);
    internal_static_google_ads_googleads_v5_services_UploadUserDataRequest_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_ads_googleads_v5_services_UploadUserDataRequest_descriptor,
        new java.lang.String[] { "CustomerId", "Operations", "CustomerMatchUserListMetadata", "Metadata", });
    internal_static_google_ads_googleads_v5_services_UserDataOperation_descriptor =
      getDescriptor().getMessageTypes().get(1);
    internal_static_google_ads_googleads_v5_services_UserDataOperation_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_ads_googleads_v5_services_UserDataOperation_descriptor,
        new java.lang.String[] { "Create", "Remove", "Operation", });
    internal_static_google_ads_googleads_v5_services_UploadUserDataResponse_descriptor =
      getDescriptor().getMessageTypes().get(2);
    internal_static_google_ads_googleads_v5_services_UploadUserDataResponse_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_ads_googleads_v5_services_UploadUserDataResponse_descriptor,
        new java.lang.String[] { "UploadDateTime", "ReceivedOperationsCount", });
    com.google.protobuf.ExtensionRegistry registry =
        com.google.protobuf.ExtensionRegistry.newInstance();
    registry.add(com.google.api.ClientProto.defaultHost);
    registry.add(com.google.api.FieldBehaviorProto.fieldBehavior);
    registry.add(com.google.api.AnnotationsProto.http);
    registry.add(com.google.api.ClientProto.oauthScopes);
    com.google.protobuf.Descriptors.FileDescriptor
        .internalUpdateFileDescriptor(descriptor, registry);
    com.google.ads.googleads.v5.common.OfflineUserDataProto.getDescriptor();
    com.google.api.AnnotationsProto.getDescriptor();
    com.google.api.FieldBehaviorProto.getDescriptor();
    com.google.protobuf.WrappersProto.getDescriptor();
    com.google.api.ClientProto.getDescriptor();
  }

  // @@protoc_insertion_point(outer_class_scope)
}
