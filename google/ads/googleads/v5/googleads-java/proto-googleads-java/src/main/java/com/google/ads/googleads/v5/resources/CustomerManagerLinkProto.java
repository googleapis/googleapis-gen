// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v5/resources/customer_manager_link.proto

package com.google.ads.googleads.v5.resources;

public final class CustomerManagerLinkProto {
  private CustomerManagerLinkProto() {}
  public static void registerAllExtensions(
      com.google.protobuf.ExtensionRegistryLite registry) {
  }

  public static void registerAllExtensions(
      com.google.protobuf.ExtensionRegistry registry) {
    registerAllExtensions(
        (com.google.protobuf.ExtensionRegistryLite) registry);
  }
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_ads_googleads_v5_resources_CustomerManagerLink_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_ads_googleads_v5_resources_CustomerManagerLink_fieldAccessorTable;

  public static com.google.protobuf.Descriptors.FileDescriptor
      getDescriptor() {
    return descriptor;
  }
  private static  com.google.protobuf.Descriptors.FileDescriptor
      descriptor;
  static {
    java.lang.String[] descriptorData = {
      "\n=google/ads/googleads/v5/resources/cust" +
      "omer_manager_link.proto\022!google.ads.goog" +
      "leads.v5.resources\0327google/ads/googleads" +
      "/v5/enums/manager_link_status.proto\032\037goo" +
      "gle/api/field_behavior.proto\032\031google/api" +
      "/resource.proto\032\036google/protobuf/wrapper" +
      "s.proto\032\034google/api/annotations.proto\"\316\003" +
      "\n\023CustomerManagerLink\022K\n\rresource_name\030\001" +
      " \001(\tB4\340A\005\372A.\n,googleads.googleapis.com/C" +
      "ustomerManagerLink\022a\n\020manager_customer\030\003" +
      " \001(\0132\034.google.protobuf.StringValueB)\340A\003\372" +
      "A#\n!googleads.googleapis.com/Customer\0229\n" +
      "\017manager_link_id\030\004 \001(\0132\033.google.protobuf" +
      ".Int64ValueB\003\340A\003\022V\n\006status\030\005 \001(\0162F.googl" +
      "e.ads.googleads.v5.enums.ManagerLinkStat" +
      "usEnum.ManagerLinkStatus:t\352Aq\n,googleads" +
      ".googleapis.com/CustomerManagerLink\022Acus" +
      "tomers/{customer}/customerManagerLinks/{" +
      "customer_manager_link}B\205\002\n%com.google.ad" +
      "s.googleads.v5.resourcesB\030CustomerManage" +
      "rLinkProtoP\001ZJgoogle.golang.org/genproto" +
      "/googleapis/ads/googleads/v5/resources;r" +
      "esources\242\002\003GAA\252\002!Google.Ads.GoogleAds.V5" +
      ".Resources\312\002!Google\\Ads\\GoogleAds\\V5\\Res" +
      "ources\352\002%Google::Ads::GoogleAds::V5::Res" +
      "ourcesb\006proto3"
    };
    descriptor = com.google.protobuf.Descriptors.FileDescriptor
      .internalBuildGeneratedFileFrom(descriptorData,
        new com.google.protobuf.Descriptors.FileDescriptor[] {
          com.google.ads.googleads.v5.enums.ManagerLinkStatusProto.getDescriptor(),
          com.google.api.FieldBehaviorProto.getDescriptor(),
          com.google.api.ResourceProto.getDescriptor(),
          com.google.protobuf.WrappersProto.getDescriptor(),
          com.google.api.AnnotationsProto.getDescriptor(),
        });
    internal_static_google_ads_googleads_v5_resources_CustomerManagerLink_descriptor =
      getDescriptor().getMessageTypes().get(0);
    internal_static_google_ads_googleads_v5_resources_CustomerManagerLink_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_ads_googleads_v5_resources_CustomerManagerLink_descriptor,
        new java.lang.String[] { "ResourceName", "ManagerCustomer", "ManagerLinkId", "Status", });
    com.google.protobuf.ExtensionRegistry registry =
        com.google.protobuf.ExtensionRegistry.newInstance();
    registry.add(com.google.api.FieldBehaviorProto.fieldBehavior);
    registry.add(com.google.api.ResourceProto.resource);
    registry.add(com.google.api.ResourceProto.resourceReference);
    com.google.protobuf.Descriptors.FileDescriptor
        .internalUpdateFileDescriptor(descriptor, registry);
    com.google.ads.googleads.v5.enums.ManagerLinkStatusProto.getDescriptor();
    com.google.api.FieldBehaviorProto.getDescriptor();
    com.google.api.ResourceProto.getDescriptor();
    com.google.protobuf.WrappersProto.getDescriptor();
    com.google.api.AnnotationsProto.getDescriptor();
  }

  // @@protoc_insertion_point(outer_class_scope)
}
