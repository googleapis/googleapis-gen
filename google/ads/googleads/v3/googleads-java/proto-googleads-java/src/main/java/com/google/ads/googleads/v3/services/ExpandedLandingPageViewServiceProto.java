// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v3/services/expanded_landing_page_view_service.proto

package com.google.ads.googleads.v3.services;

public final class ExpandedLandingPageViewServiceProto {
  private ExpandedLandingPageViewServiceProto() {}
  public static void registerAllExtensions(
      com.google.protobuf.ExtensionRegistryLite registry) {
  }

  public static void registerAllExtensions(
      com.google.protobuf.ExtensionRegistry registry) {
    registerAllExtensions(
        (com.google.protobuf.ExtensionRegistryLite) registry);
  }
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_ads_googleads_v3_services_GetExpandedLandingPageViewRequest_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_ads_googleads_v3_services_GetExpandedLandingPageViewRequest_fieldAccessorTable;

  public static com.google.protobuf.Descriptors.FileDescriptor
      getDescriptor() {
    return descriptor;
  }
  private static  com.google.protobuf.Descriptors.FileDescriptor
      descriptor;
  static {
    java.lang.String[] descriptorData = {
      "\nIgoogle/ads/googleads/v3/services/expan" +
      "ded_landing_page_view_service.proto\022 goo" +
      "gle.ads.googleads.v3.services\032Bgoogle/ad" +
      "s/googleads/v3/resources/expanded_landin" +
      "g_page_view.proto\032\034google/api/annotation" +
      "s.proto\032\027google/api/client.proto\032\037google" +
      "/api/field_behavior.proto\032\031google/api/re" +
      "source.proto\"t\n!GetExpandedLandingPageVi" +
      "ewRequest\022O\n\rresource_name\030\001 \001(\tB8\340A\002\372A2" +
      "\n0googleads.googleapis.com/ExpandedLandi" +
      "ngPageView2\333\002\n\036ExpandedLandingPageViewSe" +
      "rvice\022\361\001\n\032GetExpandedLandingPageView\022C.g" +
      "oogle.ads.googleads.v3.services.GetExpan" +
      "dedLandingPageViewRequest\032:.google.ads.g" +
      "oogleads.v3.resources.ExpandedLandingPag" +
      "eView\"R\202\323\344\223\002<\022:/v3/{resource_name=custom" +
      "ers/*/expandedLandingPageViews/*}\332A\rreso" +
      "urce_name\032E\312A\030googleads.googleapis.com\322A" +
      "\'https://www.googleapis.com/auth/adwords" +
      "B\212\002\n$com.google.ads.googleads.v3.service" +
      "sB#ExpandedLandingPageViewServiceProtoP\001" +
      "ZHgoogle.golang.org/genproto/googleapis/" +
      "ads/googleads/v3/services;services\242\002\003GAA" +
      "\252\002 Google.Ads.GoogleAds.V3.Services\312\002 Go" +
      "ogle\\Ads\\GoogleAds\\V3\\Services\352\002$Google:" +
      ":Ads::GoogleAds::V3::Servicesb\006proto3"
    };
    descriptor = com.google.protobuf.Descriptors.FileDescriptor
      .internalBuildGeneratedFileFrom(descriptorData,
        new com.google.protobuf.Descriptors.FileDescriptor[] {
          com.google.ads.googleads.v3.resources.ExpandedLandingPageViewProto.getDescriptor(),
          com.google.api.AnnotationsProto.getDescriptor(),
          com.google.api.ClientProto.getDescriptor(),
          com.google.api.FieldBehaviorProto.getDescriptor(),
          com.google.api.ResourceProto.getDescriptor(),
        });
    internal_static_google_ads_googleads_v3_services_GetExpandedLandingPageViewRequest_descriptor =
      getDescriptor().getMessageTypes().get(0);
    internal_static_google_ads_googleads_v3_services_GetExpandedLandingPageViewRequest_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_ads_googleads_v3_services_GetExpandedLandingPageViewRequest_descriptor,
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
    com.google.ads.googleads.v3.resources.ExpandedLandingPageViewProto.getDescriptor();
    com.google.api.AnnotationsProto.getDescriptor();
    com.google.api.ClientProto.getDescriptor();
    com.google.api.FieldBehaviorProto.getDescriptor();
    com.google.api.ResourceProto.getDescriptor();
  }

  // @@protoc_insertion_point(outer_class_scope)
}
