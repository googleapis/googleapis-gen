// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v5/services/campaign_budget_service.proto

package com.google.ads.googleads.v5.services;

public final class CampaignBudgetServiceProto {
  private CampaignBudgetServiceProto() {}
  public static void registerAllExtensions(
      com.google.protobuf.ExtensionRegistryLite registry) {
  }

  public static void registerAllExtensions(
      com.google.protobuf.ExtensionRegistry registry) {
    registerAllExtensions(
        (com.google.protobuf.ExtensionRegistryLite) registry);
  }
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_ads_googleads_v5_services_GetCampaignBudgetRequest_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_ads_googleads_v5_services_GetCampaignBudgetRequest_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_ads_googleads_v5_services_MutateCampaignBudgetsRequest_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_ads_googleads_v5_services_MutateCampaignBudgetsRequest_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_ads_googleads_v5_services_CampaignBudgetOperation_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_ads_googleads_v5_services_CampaignBudgetOperation_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_ads_googleads_v5_services_MutateCampaignBudgetsResponse_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_ads_googleads_v5_services_MutateCampaignBudgetsResponse_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_ads_googleads_v5_services_MutateCampaignBudgetResult_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_ads_googleads_v5_services_MutateCampaignBudgetResult_fieldAccessorTable;

  public static com.google.protobuf.Descriptors.FileDescriptor
      getDescriptor() {
    return descriptor;
  }
  private static  com.google.protobuf.Descriptors.FileDescriptor
      descriptor;
  static {
    java.lang.String[] descriptorData = {
      "\n>google/ads/googleads/v5/services/campa" +
      "ign_budget_service.proto\022 google.ads.goo" +
      "gleads.v5.services\0329google/ads/googleads" +
      "/v5/enums/response_content_type.proto\0327g" +
      "oogle/ads/googleads/v5/resources/campaig" +
      "n_budget.proto\032\034google/api/annotations.p" +
      "roto\032\027google/api/client.proto\032\037google/ap" +
      "i/field_behavior.proto\032\031google/api/resou" +
      "rce.proto\032 google/protobuf/field_mask.pr" +
      "oto\032\027google/rpc/status.proto\"b\n\030GetCampa" +
      "ignBudgetRequest\022F\n\rresource_name\030\001 \001(\tB" +
      "/\340A\002\372A)\n\'googleads.googleapis.com/Campai" +
      "gnBudget\"\247\002\n\034MutateCampaignBudgetsReques" +
      "t\022\030\n\013customer_id\030\001 \001(\tB\003\340A\002\022R\n\noperation" +
      "s\030\002 \003(\01329.google.ads.googleads.v5.servic" +
      "es.CampaignBudgetOperationB\003\340A\002\022\027\n\017parti" +
      "al_failure\030\003 \001(\010\022\025\n\rvalidate_only\030\004 \001(\010\022" +
      "i\n\025response_content_type\030\005 \001(\0162J.google." +
      "ads.googleads.v5.enums.ResponseContentTy" +
      "peEnum.ResponseContentType\"\363\001\n\027CampaignB" +
      "udgetOperation\022/\n\013update_mask\030\004 \001(\0132\032.go" +
      "ogle.protobuf.FieldMask\022C\n\006create\030\001 \001(\0132" +
      "1.google.ads.googleads.v5.resources.Camp" +
      "aignBudgetH\000\022C\n\006update\030\002 \001(\01321.google.ad" +
      "s.googleads.v5.resources.CampaignBudgetH" +
      "\000\022\020\n\006remove\030\003 \001(\tH\000B\013\n\toperation\"\241\001\n\035Mut" +
      "ateCampaignBudgetsResponse\0221\n\025partial_fa" +
      "ilure_error\030\003 \001(\0132\022.google.rpc.Status\022M\n" +
      "\007results\030\002 \003(\0132<.google.ads.googleads.v5" +
      ".services.MutateCampaignBudgetResult\"\177\n\032" +
      "MutateCampaignBudgetResult\022\025\n\rresource_n" +
      "ame\030\001 \001(\t\022J\n\017campaign_budget\030\002 \001(\01321.goo" +
      "gle.ads.googleads.v5.resources.CampaignB" +
      "udget2\243\004\n\025CampaignBudgetService\022\315\001\n\021GetC" +
      "ampaignBudget\022:.google.ads.googleads.v5." +
      "services.GetCampaignBudgetRequest\0321.goog" +
      "le.ads.googleads.v5.resources.CampaignBu" +
      "dget\"I\202\323\344\223\0023\0221/v5/{resource_name=custome" +
      "rs/*/campaignBudgets/*}\332A\rresource_name\022" +
      "\362\001\n\025MutateCampaignBudgets\022>.google.ads.g" +
      "oogleads.v5.services.MutateCampaignBudge" +
      "tsRequest\032?.google.ads.googleads.v5.serv" +
      "ices.MutateCampaignBudgetsResponse\"X\202\323\344\223" +
      "\0029\"4/v5/customers/{customer_id=*}/campai" +
      "gnBudgets:mutate:\001*\332A\026customer_id,operat" +
      "ions\032E\312A\030googleads.googleapis.com\322A\'http" +
      "s://www.googleapis.com/auth/adwordsB\201\002\n$" +
      "com.google.ads.googleads.v5.servicesB\032Ca" +
      "mpaignBudgetServiceProtoP\001ZHgoogle.golan" +
      "g.org/genproto/googleapis/ads/googleads/" +
      "v5/services;services\242\002\003GAA\252\002 Google.Ads." +
      "GoogleAds.V5.Services\312\002 Google\\Ads\\Googl" +
      "eAds\\V5\\Services\352\002$Google::Ads::GoogleAd" +
      "s::V5::Servicesb\006proto3"
    };
    descriptor = com.google.protobuf.Descriptors.FileDescriptor
      .internalBuildGeneratedFileFrom(descriptorData,
        new com.google.protobuf.Descriptors.FileDescriptor[] {
          com.google.ads.googleads.v5.enums.ResponseContentTypeProto.getDescriptor(),
          com.google.ads.googleads.v5.resources.CampaignBudgetProto.getDescriptor(),
          com.google.api.AnnotationsProto.getDescriptor(),
          com.google.api.ClientProto.getDescriptor(),
          com.google.api.FieldBehaviorProto.getDescriptor(),
          com.google.api.ResourceProto.getDescriptor(),
          com.google.protobuf.FieldMaskProto.getDescriptor(),
          com.google.rpc.StatusProto.getDescriptor(),
        });
    internal_static_google_ads_googleads_v5_services_GetCampaignBudgetRequest_descriptor =
      getDescriptor().getMessageTypes().get(0);
    internal_static_google_ads_googleads_v5_services_GetCampaignBudgetRequest_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_ads_googleads_v5_services_GetCampaignBudgetRequest_descriptor,
        new java.lang.String[] { "ResourceName", });
    internal_static_google_ads_googleads_v5_services_MutateCampaignBudgetsRequest_descriptor =
      getDescriptor().getMessageTypes().get(1);
    internal_static_google_ads_googleads_v5_services_MutateCampaignBudgetsRequest_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_ads_googleads_v5_services_MutateCampaignBudgetsRequest_descriptor,
        new java.lang.String[] { "CustomerId", "Operations", "PartialFailure", "ValidateOnly", "ResponseContentType", });
    internal_static_google_ads_googleads_v5_services_CampaignBudgetOperation_descriptor =
      getDescriptor().getMessageTypes().get(2);
    internal_static_google_ads_googleads_v5_services_CampaignBudgetOperation_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_ads_googleads_v5_services_CampaignBudgetOperation_descriptor,
        new java.lang.String[] { "UpdateMask", "Create", "Update", "Remove", "Operation", });
    internal_static_google_ads_googleads_v5_services_MutateCampaignBudgetsResponse_descriptor =
      getDescriptor().getMessageTypes().get(3);
    internal_static_google_ads_googleads_v5_services_MutateCampaignBudgetsResponse_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_ads_googleads_v5_services_MutateCampaignBudgetsResponse_descriptor,
        new java.lang.String[] { "PartialFailureError", "Results", });
    internal_static_google_ads_googleads_v5_services_MutateCampaignBudgetResult_descriptor =
      getDescriptor().getMessageTypes().get(4);
    internal_static_google_ads_googleads_v5_services_MutateCampaignBudgetResult_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_ads_googleads_v5_services_MutateCampaignBudgetResult_descriptor,
        new java.lang.String[] { "ResourceName", "CampaignBudget", });
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
    com.google.ads.googleads.v5.enums.ResponseContentTypeProto.getDescriptor();
    com.google.ads.googleads.v5.resources.CampaignBudgetProto.getDescriptor();
    com.google.api.AnnotationsProto.getDescriptor();
    com.google.api.ClientProto.getDescriptor();
    com.google.api.FieldBehaviorProto.getDescriptor();
    com.google.api.ResourceProto.getDescriptor();
    com.google.protobuf.FieldMaskProto.getDescriptor();
    com.google.rpc.StatusProto.getDescriptor();
  }

  // @@protoc_insertion_point(outer_class_scope)
}
