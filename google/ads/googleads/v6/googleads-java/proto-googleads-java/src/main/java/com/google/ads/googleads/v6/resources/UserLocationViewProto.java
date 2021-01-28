// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v6/resources/user_location_view.proto

package com.google.ads.googleads.v6.resources;

public final class UserLocationViewProto {
  private UserLocationViewProto() {}
  public static void registerAllExtensions(
      com.google.protobuf.ExtensionRegistryLite registry) {
  }

  public static void registerAllExtensions(
      com.google.protobuf.ExtensionRegistry registry) {
    registerAllExtensions(
        (com.google.protobuf.ExtensionRegistryLite) registry);
  }
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_ads_googleads_v6_resources_UserLocationView_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_ads_googleads_v6_resources_UserLocationView_fieldAccessorTable;

  public static com.google.protobuf.Descriptors.FileDescriptor
      getDescriptor() {
    return descriptor;
  }
  private static  com.google.protobuf.Descriptors.FileDescriptor
      descriptor;
  static {
    java.lang.String[] descriptorData = {
      "\n:google/ads/googleads/v6/resources/user" +
      "_location_view.proto\022!google.ads.googlea" +
      "ds.v6.resources\032\037google/api/field_behavi" +
      "or.proto\032\031google/api/resource.proto\032\034goo" +
      "gle/api/annotations.proto\"\346\002\n\020UserLocati" +
      "onView\022H\n\rresource_name\030\001 \001(\tB1\340A\003\372A+\n)g" +
      "oogleads.googleapis.com/UserLocationView" +
      "\022&\n\024country_criterion_id\030\004 \001(\003B\003\340A\003H\000\210\001\001" +
      "\022$\n\022targeting_location\030\005 \001(\010B\003\340A\003H\001\210\001\001:\211" +
      "\001\352A\205\001\n)googleads.googleapis.com/UserLoca" +
      "tionView\022Xcustomers/{customer_id}/userLo" +
      "cationViews/{country_criterion_id}~{is_t" +
      "argeting_location}B\027\n\025_country_criterion" +
      "_idB\025\n\023_targeting_locationB\202\002\n%com.googl" +
      "e.ads.googleads.v6.resourcesB\025UserLocati" +
      "onViewProtoP\001ZJgoogle.golang.org/genprot" +
      "o/googleapis/ads/googleads/v6/resources;" +
      "resources\242\002\003GAA\252\002!Google.Ads.GoogleAds.V" +
      "6.Resources\312\002!Google\\Ads\\GoogleAds\\V6\\Re" +
      "sources\352\002%Google::Ads::GoogleAds::V6::Re" +
      "sourcesb\006proto3"
    };
    descriptor = com.google.protobuf.Descriptors.FileDescriptor
      .internalBuildGeneratedFileFrom(descriptorData,
        new com.google.protobuf.Descriptors.FileDescriptor[] {
          com.google.api.FieldBehaviorProto.getDescriptor(),
          com.google.api.ResourceProto.getDescriptor(),
          com.google.api.AnnotationsProto.getDescriptor(),
        });
    internal_static_google_ads_googleads_v6_resources_UserLocationView_descriptor =
      getDescriptor().getMessageTypes().get(0);
    internal_static_google_ads_googleads_v6_resources_UserLocationView_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_ads_googleads_v6_resources_UserLocationView_descriptor,
        new java.lang.String[] { "ResourceName", "CountryCriterionId", "TargetingLocation", "CountryCriterionId", "TargetingLocation", });
    com.google.protobuf.ExtensionRegistry registry =
        com.google.protobuf.ExtensionRegistry.newInstance();
    registry.add(com.google.api.FieldBehaviorProto.fieldBehavior);
    registry.add(com.google.api.ResourceProto.resource);
    registry.add(com.google.api.ResourceProto.resourceReference);
    com.google.protobuf.Descriptors.FileDescriptor
        .internalUpdateFileDescriptor(descriptor, registry);
    com.google.api.FieldBehaviorProto.getDescriptor();
    com.google.api.ResourceProto.getDescriptor();
    com.google.api.AnnotationsProto.getDescriptor();
  }

  // @@protoc_insertion_point(outer_class_scope)
}
