// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v4/services/shopping_performance_view_service.proto

package com.google.ads.googleads.v4.services;

public final class ShoppingPerformanceViewServiceProto {
  private ShoppingPerformanceViewServiceProto() {}
  public static void registerAllExtensions(
      com.google.protobuf.ExtensionRegistryLite registry) {
  }

  public static void registerAllExtensions(
      com.google.protobuf.ExtensionRegistry registry) {
    registerAllExtensions(
        (com.google.protobuf.ExtensionRegistryLite) registry);
  }
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_ads_googleads_v4_services_GetShoppingPerformanceViewRequest_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_ads_googleads_v4_services_GetShoppingPerformanceViewRequest_fieldAccessorTable;

  public static com.google.protobuf.Descriptors.FileDescriptor
      getDescriptor() {
    return descriptor;
  }
  private static  com.google.protobuf.Descriptors.FileDescriptor
      descriptor;
  static {
    java.lang.String[] descriptorData = {
      "\nHgoogle/ads/googleads/v4/services/shopp" +
      "ing_performance_view_service.proto\022 goog" +
      "le.ads.googleads.v4.services\032Agoogle/ads" +
      "/googleads/v4/resources/shopping_perform" +
      "ance_view.proto\032\034google/api/annotations." +
      "proto\032\027google/api/client.proto\032\037google/a" +
      "pi/field_behavior.proto\032\031google/api/reso" +
      "urce.proto\"t\n!GetShoppingPerformanceView" +
      "Request\022O\n\rresource_name\030\001 \001(\tB8\340A\002\372A2\n0" +
      "googleads.googleapis.com/ShoppingPerform" +
      "anceView2\330\002\n\036ShoppingPerformanceViewServ" +
      "ice\022\356\001\n\032GetShoppingPerformanceView\022C.goo" +
      "gle.ads.googleads.v4.services.GetShoppin" +
      "gPerformanceViewRequest\032:.google.ads.goo" +
      "gleads.v4.resources.ShoppingPerformanceV" +
      "iew\"O\202\323\344\223\0029\0227/v4/{resource_name=customer" +
      "s/*/shoppingPerformanceView}\332A\rresource_" +
      "name\032E\312A\030googleads.googleapis.com\322A\'http" +
      "s://www.googleapis.com/auth/adwordsB\212\002\n$" +
      "com.google.ads.googleads.v4.servicesB#Sh" +
      "oppingPerformanceViewServiceProtoP\001ZHgoo" +
      "gle.golang.org/genproto/googleapis/ads/g" +
      "oogleads/v4/services;services\242\002\003GAA\252\002 Go" +
      "ogle.Ads.GoogleAds.V4.Services\312\002 Google\\" +
      "Ads\\GoogleAds\\V4\\Services\352\002$Google::Ads:" +
      ":GoogleAds::V4::Servicesb\006proto3"
    };
    descriptor = com.google.protobuf.Descriptors.FileDescriptor
      .internalBuildGeneratedFileFrom(descriptorData,
        new com.google.protobuf.Descriptors.FileDescriptor[] {
          com.google.ads.googleads.v4.resources.ShoppingPerformanceViewProto.getDescriptor(),
          com.google.api.AnnotationsProto.getDescriptor(),
          com.google.api.ClientProto.getDescriptor(),
          com.google.api.FieldBehaviorProto.getDescriptor(),
          com.google.api.ResourceProto.getDescriptor(),
        });
    internal_static_google_ads_googleads_v4_services_GetShoppingPerformanceViewRequest_descriptor =
      getDescriptor().getMessageTypes().get(0);
    internal_static_google_ads_googleads_v4_services_GetShoppingPerformanceViewRequest_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_ads_googleads_v4_services_GetShoppingPerformanceViewRequest_descriptor,
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
    com.google.ads.googleads.v4.resources.ShoppingPerformanceViewProto.getDescriptor();
    com.google.api.AnnotationsProto.getDescriptor();
    com.google.api.ClientProto.getDescriptor();
    com.google.api.FieldBehaviorProto.getDescriptor();
    com.google.api.ResourceProto.getDescriptor();
  }

  // @@protoc_insertion_point(outer_class_scope)
}
