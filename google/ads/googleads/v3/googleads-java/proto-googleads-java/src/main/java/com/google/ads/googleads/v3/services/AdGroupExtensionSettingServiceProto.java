// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v3/services/ad_group_extension_setting_service.proto

package com.google.ads.googleads.v3.services;

public final class AdGroupExtensionSettingServiceProto {
  private AdGroupExtensionSettingServiceProto() {}
  public static void registerAllExtensions(
      com.google.protobuf.ExtensionRegistryLite registry) {
  }

  public static void registerAllExtensions(
      com.google.protobuf.ExtensionRegistry registry) {
    registerAllExtensions(
        (com.google.protobuf.ExtensionRegistryLite) registry);
  }
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_ads_googleads_v3_services_GetAdGroupExtensionSettingRequest_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_ads_googleads_v3_services_GetAdGroupExtensionSettingRequest_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_ads_googleads_v3_services_MutateAdGroupExtensionSettingsRequest_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_ads_googleads_v3_services_MutateAdGroupExtensionSettingsRequest_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_ads_googleads_v3_services_AdGroupExtensionSettingOperation_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_ads_googleads_v3_services_AdGroupExtensionSettingOperation_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_ads_googleads_v3_services_MutateAdGroupExtensionSettingsResponse_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_ads_googleads_v3_services_MutateAdGroupExtensionSettingsResponse_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_ads_googleads_v3_services_MutateAdGroupExtensionSettingResult_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_ads_googleads_v3_services_MutateAdGroupExtensionSettingResult_fieldAccessorTable;

  public static com.google.protobuf.Descriptors.FileDescriptor
      getDescriptor() {
    return descriptor;
  }
  private static  com.google.protobuf.Descriptors.FileDescriptor
      descriptor;
  static {
    java.lang.String[] descriptorData = {
      "\nIgoogle/ads/googleads/v3/services/ad_gr" +
      "oup_extension_setting_service.proto\022 goo" +
      "gle.ads.googleads.v3.services\032Bgoogle/ad" +
      "s/googleads/v3/resources/ad_group_extens" +
      "ion_setting.proto\032\034google/api/annotation" +
      "s.proto\032\027google/api/client.proto\032\037google" +
      "/api/field_behavior.proto\032\031google/api/re" +
      "source.proto\032 google/protobuf/field_mask" +
      ".proto\032\027google/rpc/status.proto\"t\n!GetAd" +
      "GroupExtensionSettingRequest\022O\n\rresource" +
      "_name\030\001 \001(\tB8\340A\002\372A2\n0googleads.googleapi" +
      "s.com/AdGroupExtensionSetting\"\316\001\n%Mutate" +
      "AdGroupExtensionSettingsRequest\022\030\n\013custo" +
      "mer_id\030\001 \001(\tB\003\340A\002\022[\n\noperations\030\002 \003(\0132B." +
      "google.ads.googleads.v3.services.AdGroup" +
      "ExtensionSettingOperationB\003\340A\002\022\027\n\017partia" +
      "l_failure\030\003 \001(\010\022\025\n\rvalidate_only\030\004 \001(\010\"\216" +
      "\002\n AdGroupExtensionSettingOperation\022/\n\013u" +
      "pdate_mask\030\004 \001(\0132\032.google.protobuf.Field" +
      "Mask\022L\n\006create\030\001 \001(\0132:.google.ads.google" +
      "ads.v3.resources.AdGroupExtensionSetting" +
      "H\000\022L\n\006update\030\002 \001(\0132:.google.ads.googlead" +
      "s.v3.resources.AdGroupExtensionSettingH\000" +
      "\022\020\n\006remove\030\003 \001(\tH\000B\013\n\toperation\"\263\001\n&Muta" +
      "teAdGroupExtensionSettingsResponse\0221\n\025pa" +
      "rtial_failure_error\030\003 \001(\0132\022.google.rpc.S" +
      "tatus\022V\n\007results\030\002 \003(\0132E.google.ads.goog" +
      "leads.v3.services.MutateAdGroupExtension" +
      "SettingResult\"<\n#MutateAdGroupExtensionS" +
      "ettingResult\022\025\n\rresource_name\030\001 \001(\t2\364\004\n\036" +
      "AdGroupExtensionSettingService\022\361\001\n\032GetAd" +
      "GroupExtensionSetting\022C.google.ads.googl" +
      "eads.v3.services.GetAdGroupExtensionSett" +
      "ingRequest\032:.google.ads.googleads.v3.res" +
      "ources.AdGroupExtensionSetting\"R\202\323\344\223\002<\022:" +
      "/v3/{resource_name=customers/*/adGroupEx" +
      "tensionSettings/*}\332A\rresource_name\022\226\002\n\036M" +
      "utateAdGroupExtensionSettings\022G.google.a" +
      "ds.googleads.v3.services.MutateAdGroupEx" +
      "tensionSettingsRequest\032H.google.ads.goog" +
      "leads.v3.services.MutateAdGroupExtension" +
      "SettingsResponse\"a\202\323\344\223\002B\"=/v3/customers/" +
      "{customer_id=*}/adGroupExtensionSettings" +
      ":mutate:\001*\332A\026customer_id,operations\032E\312A\030" +
      "googleads.googleapis.com\322A\'https://www.g" +
      "oogleapis.com/auth/adwordsB\212\002\n$com.googl" +
      "e.ads.googleads.v3.servicesB#AdGroupExte" +
      "nsionSettingServiceProtoP\001ZHgoogle.golan" +
      "g.org/genproto/googleapis/ads/googleads/" +
      "v3/services;services\242\002\003GAA\252\002 Google.Ads." +
      "GoogleAds.V3.Services\312\002 Google\\Ads\\Googl" +
      "eAds\\V3\\Services\352\002$Google::Ads::GoogleAd" +
      "s::V3::Servicesb\006proto3"
    };
    descriptor = com.google.protobuf.Descriptors.FileDescriptor
      .internalBuildGeneratedFileFrom(descriptorData,
        new com.google.protobuf.Descriptors.FileDescriptor[] {
          com.google.ads.googleads.v3.resources.AdGroupExtensionSettingProto.getDescriptor(),
          com.google.api.AnnotationsProto.getDescriptor(),
          com.google.api.ClientProto.getDescriptor(),
          com.google.api.FieldBehaviorProto.getDescriptor(),
          com.google.api.ResourceProto.getDescriptor(),
          com.google.protobuf.FieldMaskProto.getDescriptor(),
          com.google.rpc.StatusProto.getDescriptor(),
        });
    internal_static_google_ads_googleads_v3_services_GetAdGroupExtensionSettingRequest_descriptor =
      getDescriptor().getMessageTypes().get(0);
    internal_static_google_ads_googleads_v3_services_GetAdGroupExtensionSettingRequest_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_ads_googleads_v3_services_GetAdGroupExtensionSettingRequest_descriptor,
        new java.lang.String[] { "ResourceName", });
    internal_static_google_ads_googleads_v3_services_MutateAdGroupExtensionSettingsRequest_descriptor =
      getDescriptor().getMessageTypes().get(1);
    internal_static_google_ads_googleads_v3_services_MutateAdGroupExtensionSettingsRequest_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_ads_googleads_v3_services_MutateAdGroupExtensionSettingsRequest_descriptor,
        new java.lang.String[] { "CustomerId", "Operations", "PartialFailure", "ValidateOnly", });
    internal_static_google_ads_googleads_v3_services_AdGroupExtensionSettingOperation_descriptor =
      getDescriptor().getMessageTypes().get(2);
    internal_static_google_ads_googleads_v3_services_AdGroupExtensionSettingOperation_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_ads_googleads_v3_services_AdGroupExtensionSettingOperation_descriptor,
        new java.lang.String[] { "UpdateMask", "Create", "Update", "Remove", "Operation", });
    internal_static_google_ads_googleads_v3_services_MutateAdGroupExtensionSettingsResponse_descriptor =
      getDescriptor().getMessageTypes().get(3);
    internal_static_google_ads_googleads_v3_services_MutateAdGroupExtensionSettingsResponse_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_ads_googleads_v3_services_MutateAdGroupExtensionSettingsResponse_descriptor,
        new java.lang.String[] { "PartialFailureError", "Results", });
    internal_static_google_ads_googleads_v3_services_MutateAdGroupExtensionSettingResult_descriptor =
      getDescriptor().getMessageTypes().get(4);
    internal_static_google_ads_googleads_v3_services_MutateAdGroupExtensionSettingResult_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_ads_googleads_v3_services_MutateAdGroupExtensionSettingResult_descriptor,
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
    com.google.ads.googleads.v3.resources.AdGroupExtensionSettingProto.getDescriptor();
    com.google.api.AnnotationsProto.getDescriptor();
    com.google.api.ClientProto.getDescriptor();
    com.google.api.FieldBehaviorProto.getDescriptor();
    com.google.api.ResourceProto.getDescriptor();
    com.google.protobuf.FieldMaskProto.getDescriptor();
    com.google.rpc.StatusProto.getDescriptor();
  }

  // @@protoc_insertion_point(outer_class_scope)
}
