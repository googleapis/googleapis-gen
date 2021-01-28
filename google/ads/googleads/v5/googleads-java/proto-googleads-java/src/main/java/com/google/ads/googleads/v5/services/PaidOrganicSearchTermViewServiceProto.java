// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v5/services/paid_organic_search_term_view_service.proto

package com.google.ads.googleads.v5.services;

public final class PaidOrganicSearchTermViewServiceProto {
  private PaidOrganicSearchTermViewServiceProto() {}
  public static void registerAllExtensions(
      com.google.protobuf.ExtensionRegistryLite registry) {
  }

  public static void registerAllExtensions(
      com.google.protobuf.ExtensionRegistry registry) {
    registerAllExtensions(
        (com.google.protobuf.ExtensionRegistryLite) registry);
  }
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_ads_googleads_v5_services_GetPaidOrganicSearchTermViewRequest_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_ads_googleads_v5_services_GetPaidOrganicSearchTermViewRequest_fieldAccessorTable;

  public static com.google.protobuf.Descriptors.FileDescriptor
      getDescriptor() {
    return descriptor;
  }
  private static  com.google.protobuf.Descriptors.FileDescriptor
      descriptor;
  static {
    java.lang.String[] descriptorData = {
      "\nLgoogle/ads/googleads/v5/services/paid_" +
      "organic_search_term_view_service.proto\022 " +
      "google.ads.googleads.v5.services\032Egoogle" +
      "/ads/googleads/v5/resources/paid_organic" +
      "_search_term_view.proto\032\034google/api/anno" +
      "tations.proto\032\027google/api/client.proto\032\037" +
      "google/api/field_behavior.proto\032\031google/" +
      "api/resource.proto\"x\n#GetPaidOrganicSear" +
      "chTermViewRequest\022Q\n\rresource_name\030\001 \001(\t" +
      "B:\340A\002\372A4\n2googleads.googleapis.com/PaidO" +
      "rganicSearchTermView2\345\002\n PaidOrganicSear" +
      "chTermViewService\022\371\001\n\034GetPaidOrganicSear" +
      "chTermView\022E.google.ads.googleads.v5.ser" +
      "vices.GetPaidOrganicSearchTermViewReques" +
      "t\032<.google.ads.googleads.v5.resources.Pa" +
      "idOrganicSearchTermView\"T\202\323\344\223\002>\022</v5/{re" +
      "source_name=customers/*/paidOrganicSearc" +
      "hTermViews/*}\332A\rresource_name\032E\312A\030google" +
      "ads.googleapis.com\322A\'https://www.googlea" +
      "pis.com/auth/adwordsB\214\002\n$com.google.ads." +
      "googleads.v5.servicesB%PaidOrganicSearch" +
      "TermViewServiceProtoP\001ZHgoogle.golang.or" +
      "g/genproto/googleapis/ads/googleads/v5/s" +
      "ervices;services\242\002\003GAA\252\002 Google.Ads.Goog" +
      "leAds.V5.Services\312\002 Google\\Ads\\GoogleAds" +
      "\\V5\\Services\352\002$Google::Ads::GoogleAds::V" +
      "5::Servicesb\006proto3"
    };
    descriptor = com.google.protobuf.Descriptors.FileDescriptor
      .internalBuildGeneratedFileFrom(descriptorData,
        new com.google.protobuf.Descriptors.FileDescriptor[] {
          com.google.ads.googleads.v5.resources.PaidOrganicSearchTermViewProto.getDescriptor(),
          com.google.api.AnnotationsProto.getDescriptor(),
          com.google.api.ClientProto.getDescriptor(),
          com.google.api.FieldBehaviorProto.getDescriptor(),
          com.google.api.ResourceProto.getDescriptor(),
        });
    internal_static_google_ads_googleads_v5_services_GetPaidOrganicSearchTermViewRequest_descriptor =
      getDescriptor().getMessageTypes().get(0);
    internal_static_google_ads_googleads_v5_services_GetPaidOrganicSearchTermViewRequest_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_ads_googleads_v5_services_GetPaidOrganicSearchTermViewRequest_descriptor,
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
    com.google.ads.googleads.v5.resources.PaidOrganicSearchTermViewProto.getDescriptor();
    com.google.api.AnnotationsProto.getDescriptor();
    com.google.api.ClientProto.getDescriptor();
    com.google.api.FieldBehaviorProto.getDescriptor();
    com.google.api.ResourceProto.getDescriptor();
  }

  // @@protoc_insertion_point(outer_class_scope)
}
