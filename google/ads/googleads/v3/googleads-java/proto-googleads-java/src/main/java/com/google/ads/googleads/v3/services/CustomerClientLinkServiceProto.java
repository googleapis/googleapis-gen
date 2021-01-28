// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v3/services/customer_client_link_service.proto

package com.google.ads.googleads.v3.services;

public final class CustomerClientLinkServiceProto {
  private CustomerClientLinkServiceProto() {}
  public static void registerAllExtensions(
      com.google.protobuf.ExtensionRegistryLite registry) {
  }

  public static void registerAllExtensions(
      com.google.protobuf.ExtensionRegistry registry) {
    registerAllExtensions(
        (com.google.protobuf.ExtensionRegistryLite) registry);
  }
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_ads_googleads_v3_services_GetCustomerClientLinkRequest_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_ads_googleads_v3_services_GetCustomerClientLinkRequest_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_ads_googleads_v3_services_MutateCustomerClientLinkRequest_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_ads_googleads_v3_services_MutateCustomerClientLinkRequest_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_ads_googleads_v3_services_CustomerClientLinkOperation_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_ads_googleads_v3_services_CustomerClientLinkOperation_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_ads_googleads_v3_services_MutateCustomerClientLinkResponse_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_ads_googleads_v3_services_MutateCustomerClientLinkResponse_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_ads_googleads_v3_services_MutateCustomerClientLinkResult_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_ads_googleads_v3_services_MutateCustomerClientLinkResult_fieldAccessorTable;

  public static com.google.protobuf.Descriptors.FileDescriptor
      getDescriptor() {
    return descriptor;
  }
  private static  com.google.protobuf.Descriptors.FileDescriptor
      descriptor;
  static {
    java.lang.String[] descriptorData = {
      "\nCgoogle/ads/googleads/v3/services/custo" +
      "mer_client_link_service.proto\022 google.ad" +
      "s.googleads.v3.services\032<google/ads/goog" +
      "leads/v3/resources/customer_client_link." +
      "proto\032\034google/api/annotations.proto\032\027goo" +
      "gle/api/client.proto\032\037google/api/field_b" +
      "ehavior.proto\032\031google/api/resource.proto" +
      "\032 google/protobuf/field_mask.proto\"j\n\034Ge" +
      "tCustomerClientLinkRequest\022J\n\rresource_n" +
      "ame\030\001 \001(\tB3\340A\002\372A-\n+googleads.googleapis." +
      "com/CustomerClientLink\"\222\001\n\037MutateCustome" +
      "rClientLinkRequest\022\030\n\013customer_id\030\001 \001(\tB" +
      "\003\340A\002\022U\n\toperation\030\002 \001(\0132=.google.ads.goo" +
      "gleads.v3.services.CustomerClientLinkOpe" +
      "rationB\003\340A\002\"\355\001\n\033CustomerClientLinkOperat" +
      "ion\022/\n\013update_mask\030\004 \001(\0132\032.google.protob" +
      "uf.FieldMask\022G\n\006create\030\001 \001(\01325.google.ad" +
      "s.googleads.v3.resources.CustomerClientL" +
      "inkH\000\022G\n\006update\030\002 \001(\01325.google.ads.googl" +
      "eads.v3.resources.CustomerClientLinkH\000B\013" +
      "\n\toperation\"t\n MutateCustomerClientLinkR" +
      "esponse\022P\n\006result\030\001 \001(\0132@.google.ads.goo" +
      "gleads.v3.services.MutateCustomerClientL" +
      "inkResult\"7\n\036MutateCustomerClientLinkRes" +
      "ult\022\025\n\rresource_name\030\001 \001(\t2\303\004\n\031CustomerC" +
      "lientLinkService\022\335\001\n\025GetCustomerClientLi" +
      "nk\022>.google.ads.googleads.v3.services.Ge" +
      "tCustomerClientLinkRequest\0325.google.ads." +
      "googleads.v3.resources.CustomerClientLin" +
      "k\"M\202\323\344\223\0027\0225/v3/{resource_name=customers/" +
      "*/customerClientLinks/*}\332A\rresource_name" +
      "\022\376\001\n\030MutateCustomerClientLink\022A.google.a" +
      "ds.googleads.v3.services.MutateCustomerC" +
      "lientLinkRequest\032B.google.ads.googleads." +
      "v3.services.MutateCustomerClientLinkResp" +
      "onse\"[\202\323\344\223\002=\"8/v3/customers/{customer_id" +
      "=*}/customerClientLinks:mutate:\001*\332A\025cust" +
      "omer_id,operation\032E\312A\030googleads.googleap" +
      "is.com\322A\'https://www.googleapis.com/auth" +
      "/adwordsB\205\002\n$com.google.ads.googleads.v3" +
      ".servicesB\036CustomerClientLinkServiceProt" +
      "oP\001ZHgoogle.golang.org/genproto/googleap" +
      "is/ads/googleads/v3/services;services\242\002\003" +
      "GAA\252\002 Google.Ads.GoogleAds.V3.Services\312\002" +
      " Google\\Ads\\GoogleAds\\V3\\Services\352\002$Goog" +
      "le::Ads::GoogleAds::V3::Servicesb\006proto3"
    };
    descriptor = com.google.protobuf.Descriptors.FileDescriptor
      .internalBuildGeneratedFileFrom(descriptorData,
        new com.google.protobuf.Descriptors.FileDescriptor[] {
          com.google.ads.googleads.v3.resources.CustomerClientLinkProto.getDescriptor(),
          com.google.api.AnnotationsProto.getDescriptor(),
          com.google.api.ClientProto.getDescriptor(),
          com.google.api.FieldBehaviorProto.getDescriptor(),
          com.google.api.ResourceProto.getDescriptor(),
          com.google.protobuf.FieldMaskProto.getDescriptor(),
        });
    internal_static_google_ads_googleads_v3_services_GetCustomerClientLinkRequest_descriptor =
      getDescriptor().getMessageTypes().get(0);
    internal_static_google_ads_googleads_v3_services_GetCustomerClientLinkRequest_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_ads_googleads_v3_services_GetCustomerClientLinkRequest_descriptor,
        new java.lang.String[] { "ResourceName", });
    internal_static_google_ads_googleads_v3_services_MutateCustomerClientLinkRequest_descriptor =
      getDescriptor().getMessageTypes().get(1);
    internal_static_google_ads_googleads_v3_services_MutateCustomerClientLinkRequest_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_ads_googleads_v3_services_MutateCustomerClientLinkRequest_descriptor,
        new java.lang.String[] { "CustomerId", "Operation", });
    internal_static_google_ads_googleads_v3_services_CustomerClientLinkOperation_descriptor =
      getDescriptor().getMessageTypes().get(2);
    internal_static_google_ads_googleads_v3_services_CustomerClientLinkOperation_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_ads_googleads_v3_services_CustomerClientLinkOperation_descriptor,
        new java.lang.String[] { "UpdateMask", "Create", "Update", "Operation", });
    internal_static_google_ads_googleads_v3_services_MutateCustomerClientLinkResponse_descriptor =
      getDescriptor().getMessageTypes().get(3);
    internal_static_google_ads_googleads_v3_services_MutateCustomerClientLinkResponse_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_ads_googleads_v3_services_MutateCustomerClientLinkResponse_descriptor,
        new java.lang.String[] { "Result", });
    internal_static_google_ads_googleads_v3_services_MutateCustomerClientLinkResult_descriptor =
      getDescriptor().getMessageTypes().get(4);
    internal_static_google_ads_googleads_v3_services_MutateCustomerClientLinkResult_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_ads_googleads_v3_services_MutateCustomerClientLinkResult_descriptor,
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
    com.google.ads.googleads.v3.resources.CustomerClientLinkProto.getDescriptor();
    com.google.api.AnnotationsProto.getDescriptor();
    com.google.api.ClientProto.getDescriptor();
    com.google.api.FieldBehaviorProto.getDescriptor();
    com.google.api.ResourceProto.getDescriptor();
    com.google.protobuf.FieldMaskProto.getDescriptor();
  }

  // @@protoc_insertion_point(outer_class_scope)
}
