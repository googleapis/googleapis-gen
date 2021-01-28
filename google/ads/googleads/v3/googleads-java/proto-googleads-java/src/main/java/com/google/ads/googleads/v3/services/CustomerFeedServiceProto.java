// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v3/services/customer_feed_service.proto

package com.google.ads.googleads.v3.services;

public final class CustomerFeedServiceProto {
  private CustomerFeedServiceProto() {}
  public static void registerAllExtensions(
      com.google.protobuf.ExtensionRegistryLite registry) {
  }

  public static void registerAllExtensions(
      com.google.protobuf.ExtensionRegistry registry) {
    registerAllExtensions(
        (com.google.protobuf.ExtensionRegistryLite) registry);
  }
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_ads_googleads_v3_services_GetCustomerFeedRequest_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_ads_googleads_v3_services_GetCustomerFeedRequest_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_ads_googleads_v3_services_MutateCustomerFeedsRequest_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_ads_googleads_v3_services_MutateCustomerFeedsRequest_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_ads_googleads_v3_services_CustomerFeedOperation_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_ads_googleads_v3_services_CustomerFeedOperation_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_ads_googleads_v3_services_MutateCustomerFeedsResponse_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_ads_googleads_v3_services_MutateCustomerFeedsResponse_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_ads_googleads_v3_services_MutateCustomerFeedResult_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_ads_googleads_v3_services_MutateCustomerFeedResult_fieldAccessorTable;

  public static com.google.protobuf.Descriptors.FileDescriptor
      getDescriptor() {
    return descriptor;
  }
  private static  com.google.protobuf.Descriptors.FileDescriptor
      descriptor;
  static {
    java.lang.String[] descriptorData = {
      "\n<google/ads/googleads/v3/services/custo" +
      "mer_feed_service.proto\022 google.ads.googl" +
      "eads.v3.services\0325google/ads/googleads/v" +
      "3/resources/customer_feed.proto\032\034google/" +
      "api/annotations.proto\032\027google/api/client" +
      ".proto\032\037google/api/field_behavior.proto\032" +
      "\031google/api/resource.proto\032 google/proto" +
      "buf/field_mask.proto\032\027google/rpc/status." +
      "proto\"^\n\026GetCustomerFeedRequest\022D\n\rresou" +
      "rce_name\030\001 \001(\tB-\340A\002\372A\'\n%googleads.google" +
      "apis.com/CustomerFeed\"\270\001\n\032MutateCustomer" +
      "FeedsRequest\022\030\n\013customer_id\030\001 \001(\tB\003\340A\002\022P" +
      "\n\noperations\030\002 \003(\01327.google.ads.googlead" +
      "s.v3.services.CustomerFeedOperationB\003\340A\002" +
      "\022\027\n\017partial_failure\030\003 \001(\010\022\025\n\rvalidate_on" +
      "ly\030\004 \001(\010\"\355\001\n\025CustomerFeedOperation\022/\n\013up" +
      "date_mask\030\004 \001(\0132\032.google.protobuf.FieldM" +
      "ask\022A\n\006create\030\001 \001(\0132/.google.ads.googlea" +
      "ds.v3.resources.CustomerFeedH\000\022A\n\006update" +
      "\030\002 \001(\0132/.google.ads.googleads.v3.resourc" +
      "es.CustomerFeedH\000\022\020\n\006remove\030\003 \001(\tH\000B\013\n\to" +
      "peration\"\235\001\n\033MutateCustomerFeedsResponse" +
      "\0221\n\025partial_failure_error\030\003 \001(\0132\022.google" +
      ".rpc.Status\022K\n\007results\030\002 \003(\0132:.google.ad" +
      "s.googleads.v3.services.MutateCustomerFe" +
      "edResult\"1\n\030MutateCustomerFeedResult\022\025\n\r" +
      "resource_name\030\001 \001(\t2\221\004\n\023CustomerFeedServ" +
      "ice\022\305\001\n\017GetCustomerFeed\0228.google.ads.goo" +
      "gleads.v3.services.GetCustomerFeedReques" +
      "t\032/.google.ads.googleads.v3.resources.Cu" +
      "stomerFeed\"G\202\323\344\223\0021\022//v3/{resource_name=c" +
      "ustomers/*/customerFeeds/*}\332A\rresource_n" +
      "ame\022\352\001\n\023MutateCustomerFeeds\022<.google.ads" +
      ".googleads.v3.services.MutateCustomerFee" +
      "dsRequest\032=.google.ads.googleads.v3.serv" +
      "ices.MutateCustomerFeedsResponse\"V\202\323\344\223\0027" +
      "\"2/v3/customers/{customer_id=*}/customer" +
      "Feeds:mutate:\001*\332A\026customer_id,operations" +
      "\032E\312A\030googleads.googleapis.com\322A\'https://" +
      "www.googleapis.com/auth/adwordsB\377\001\n$com." +
      "google.ads.googleads.v3.servicesB\030Custom" +
      "erFeedServiceProtoP\001ZHgoogle.golang.org/" +
      "genproto/googleapis/ads/googleads/v3/ser" +
      "vices;services\242\002\003GAA\252\002 Google.Ads.Google" +
      "Ads.V3.Services\312\002 Google\\Ads\\GoogleAds\\V" +
      "3\\Services\352\002$Google::Ads::GoogleAds::V3:" +
      ":Servicesb\006proto3"
    };
    descriptor = com.google.protobuf.Descriptors.FileDescriptor
      .internalBuildGeneratedFileFrom(descriptorData,
        new com.google.protobuf.Descriptors.FileDescriptor[] {
          com.google.ads.googleads.v3.resources.CustomerFeedProto.getDescriptor(),
          com.google.api.AnnotationsProto.getDescriptor(),
          com.google.api.ClientProto.getDescriptor(),
          com.google.api.FieldBehaviorProto.getDescriptor(),
          com.google.api.ResourceProto.getDescriptor(),
          com.google.protobuf.FieldMaskProto.getDescriptor(),
          com.google.rpc.StatusProto.getDescriptor(),
        });
    internal_static_google_ads_googleads_v3_services_GetCustomerFeedRequest_descriptor =
      getDescriptor().getMessageTypes().get(0);
    internal_static_google_ads_googleads_v3_services_GetCustomerFeedRequest_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_ads_googleads_v3_services_GetCustomerFeedRequest_descriptor,
        new java.lang.String[] { "ResourceName", });
    internal_static_google_ads_googleads_v3_services_MutateCustomerFeedsRequest_descriptor =
      getDescriptor().getMessageTypes().get(1);
    internal_static_google_ads_googleads_v3_services_MutateCustomerFeedsRequest_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_ads_googleads_v3_services_MutateCustomerFeedsRequest_descriptor,
        new java.lang.String[] { "CustomerId", "Operations", "PartialFailure", "ValidateOnly", });
    internal_static_google_ads_googleads_v3_services_CustomerFeedOperation_descriptor =
      getDescriptor().getMessageTypes().get(2);
    internal_static_google_ads_googleads_v3_services_CustomerFeedOperation_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_ads_googleads_v3_services_CustomerFeedOperation_descriptor,
        new java.lang.String[] { "UpdateMask", "Create", "Update", "Remove", "Operation", });
    internal_static_google_ads_googleads_v3_services_MutateCustomerFeedsResponse_descriptor =
      getDescriptor().getMessageTypes().get(3);
    internal_static_google_ads_googleads_v3_services_MutateCustomerFeedsResponse_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_ads_googleads_v3_services_MutateCustomerFeedsResponse_descriptor,
        new java.lang.String[] { "PartialFailureError", "Results", });
    internal_static_google_ads_googleads_v3_services_MutateCustomerFeedResult_descriptor =
      getDescriptor().getMessageTypes().get(4);
    internal_static_google_ads_googleads_v3_services_MutateCustomerFeedResult_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_ads_googleads_v3_services_MutateCustomerFeedResult_descriptor,
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
    com.google.ads.googleads.v3.resources.CustomerFeedProto.getDescriptor();
    com.google.api.AnnotationsProto.getDescriptor();
    com.google.api.ClientProto.getDescriptor();
    com.google.api.FieldBehaviorProto.getDescriptor();
    com.google.api.ResourceProto.getDescriptor();
    com.google.protobuf.FieldMaskProto.getDescriptor();
    com.google.rpc.StatusProto.getDescriptor();
  }

  // @@protoc_insertion_point(outer_class_scope)
}
