// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v3/services/ad_group_simulation_service.proto

package com.google.ads.googleads.v3.services;

public final class AdGroupSimulationServiceProto {
  private AdGroupSimulationServiceProto() {}
  public static void registerAllExtensions(
      com.google.protobuf.ExtensionRegistryLite registry) {
  }

  public static void registerAllExtensions(
      com.google.protobuf.ExtensionRegistry registry) {
    registerAllExtensions(
        (com.google.protobuf.ExtensionRegistryLite) registry);
  }
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_ads_googleads_v3_services_GetAdGroupSimulationRequest_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_ads_googleads_v3_services_GetAdGroupSimulationRequest_fieldAccessorTable;

  public static com.google.protobuf.Descriptors.FileDescriptor
      getDescriptor() {
    return descriptor;
  }
  private static  com.google.protobuf.Descriptors.FileDescriptor
      descriptor;
  static {
    java.lang.String[] descriptorData = {
      "\nBgoogle/ads/googleads/v3/services/ad_gr" +
      "oup_simulation_service.proto\022 google.ads" +
      ".googleads.v3.services\032;google/ads/googl" +
      "eads/v3/resources/ad_group_simulation.pr" +
      "oto\032\034google/api/annotations.proto\032\027googl" +
      "e/api/client.proto\032\037google/api/field_beh" +
      "avior.proto\032\031google/api/resource.proto\"h" +
      "\n\033GetAdGroupSimulationRequest\022I\n\rresourc" +
      "e_name\030\001 \001(\tB2\340A\002\372A,\n*googleads.googleap" +
      "is.com/AdGroupSimulation2\275\002\n\030AdGroupSimu" +
      "lationService\022\331\001\n\024GetAdGroupSimulation\022=" +
      ".google.ads.googleads.v3.services.GetAdG" +
      "roupSimulationRequest\0324.google.ads.googl" +
      "eads.v3.resources.AdGroupSimulation\"L\202\323\344" +
      "\223\0026\0224/v3/{resource_name=customers/*/adGr" +
      "oupSimulations/*}\332A\rresource_name\032E\312A\030go" +
      "ogleads.googleapis.com\322A\'https://www.goo" +
      "gleapis.com/auth/adwordsB\204\002\n$com.google." +
      "ads.googleads.v3.servicesB\035AdGroupSimula" +
      "tionServiceProtoP\001ZHgoogle.golang.org/ge" +
      "nproto/googleapis/ads/googleads/v3/servi" +
      "ces;services\242\002\003GAA\252\002 Google.Ads.GoogleAd" +
      "s.V3.Services\312\002 Google\\Ads\\GoogleAds\\V3\\" +
      "Services\352\002$Google::Ads::GoogleAds::V3::S" +
      "ervicesb\006proto3"
    };
    descriptor = com.google.protobuf.Descriptors.FileDescriptor
      .internalBuildGeneratedFileFrom(descriptorData,
        new com.google.protobuf.Descriptors.FileDescriptor[] {
          com.google.ads.googleads.v3.resources.AdGroupSimulationProto.getDescriptor(),
          com.google.api.AnnotationsProto.getDescriptor(),
          com.google.api.ClientProto.getDescriptor(),
          com.google.api.FieldBehaviorProto.getDescriptor(),
          com.google.api.ResourceProto.getDescriptor(),
        });
    internal_static_google_ads_googleads_v3_services_GetAdGroupSimulationRequest_descriptor =
      getDescriptor().getMessageTypes().get(0);
    internal_static_google_ads_googleads_v3_services_GetAdGroupSimulationRequest_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_ads_googleads_v3_services_GetAdGroupSimulationRequest_descriptor,
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
    com.google.ads.googleads.v3.resources.AdGroupSimulationProto.getDescriptor();
    com.google.api.AnnotationsProto.getDescriptor();
    com.google.api.ClientProto.getDescriptor();
    com.google.api.FieldBehaviorProto.getDescriptor();
    com.google.api.ResourceProto.getDescriptor();
  }

  // @@protoc_insertion_point(outer_class_scope)
}
