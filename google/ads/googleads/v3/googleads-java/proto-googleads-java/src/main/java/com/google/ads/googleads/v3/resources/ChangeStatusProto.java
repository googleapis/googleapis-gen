// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v3/resources/change_status.proto

package com.google.ads.googleads.v3.resources;

public final class ChangeStatusProto {
  private ChangeStatusProto() {}
  public static void registerAllExtensions(
      com.google.protobuf.ExtensionRegistryLite registry) {
  }

  public static void registerAllExtensions(
      com.google.protobuf.ExtensionRegistry registry) {
    registerAllExtensions(
        (com.google.protobuf.ExtensionRegistryLite) registry);
  }
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_ads_googleads_v3_resources_ChangeStatus_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_ads_googleads_v3_resources_ChangeStatus_fieldAccessorTable;

  public static com.google.protobuf.Descriptors.FileDescriptor
      getDescriptor() {
    return descriptor;
  }
  private static  com.google.protobuf.Descriptors.FileDescriptor
      descriptor;
  static {
    java.lang.String[] descriptorData = {
      "\n5google/ads/googleads/v3/resources/chan" +
      "ge_status.proto\022!google.ads.googleads.v3" +
      ".resources\032;google/ads/googleads/v3/enum" +
      "s/change_status_operation.proto\032?google/" +
      "ads/googleads/v3/enums/change_status_res" +
      "ource_type.proto\032\037google/api/field_behav" +
      "ior.proto\032\031google/api/resource.proto\032\036go" +
      "ogle/protobuf/wrappers.proto\032\034google/api" +
      "/annotations.proto\"\254\013\n\014ChangeStatus\022D\n\rr" +
      "esource_name\030\001 \001(\tB-\340A\003\372A\'\n%googleads.go" +
      "ogleapis.com/ChangeStatus\022@\n\025last_change" +
      "_date_time\030\003 \001(\0132\034.google.protobuf.Strin" +
      "gValueB\003\340A\003\022p\n\rresource_type\030\004 \001(\0162T.goo" +
      "gle.ads.googleads.v3.enums.ChangeStatusR" +
      "esourceTypeEnum.ChangeStatusResourceType" +
      "B\003\340A\003\022Y\n\010campaign\030\005 \001(\0132\034.google.protobu" +
      "f.StringValueB)\340A\003\372A#\n!googleads.googlea" +
      "pis.com/Campaign\022X\n\010ad_group\030\006 \001(\0132\034.goo" +
      "gle.protobuf.StringValueB(\340A\003\372A\"\n google" +
      "ads.googleapis.com/AdGroup\022l\n\017resource_s" +
      "tatus\030\010 \001(\0162N.google.ads.googleads.v3.en" +
      "ums.ChangeStatusOperationEnum.ChangeStat" +
      "usOperationB\003\340A\003\022]\n\013ad_group_ad\030\t \001(\0132\034." +
      "google.protobuf.StringValueB*\340A\003\372A$\n\"goo" +
      "gleads.googleapis.com/AdGroupAd\022k\n\022ad_gr" +
      "oup_criterion\030\n \001(\0132\034.google.protobuf.St" +
      "ringValueB1\340A\003\372A+\n)googleads.googleapis." +
      "com/AdGroupCriterion\022l\n\022campaign_criteri" +
      "on\030\013 \001(\0132\034.google.protobuf.StringValueB2" +
      "\340A\003\372A,\n*googleads.googleapis.com/Campaig" +
      "nCriterion\022Q\n\004feed\030\014 \001(\0132\034.google.protob" +
      "uf.StringValueB%\340A\003\372A\037\n\035googleads.google" +
      "apis.com/Feed\022Z\n\tfeed_item\030\r \001(\0132\034.googl" +
      "e.protobuf.StringValueB)\340A\003\372A#\n!googlead" +
      "s.googleapis.com/FeedItem\022a\n\rad_group_fe" +
      "ed\030\016 \001(\0132\034.google.protobuf.StringValueB," +
      "\340A\003\372A&\n$googleads.googleapis.com/AdGroup" +
      "Feed\022b\n\rcampaign_feed\030\017 \001(\0132\034.google.pro" +
      "tobuf.StringValueB-\340A\003\372A\'\n%googleads.goo" +
      "gleapis.com/CampaignFeed\022p\n\025ad_group_bid" +
      "_modifier\030\020 \001(\0132\034.google.protobuf.String" +
      "ValueB3\340A\003\372A-\n+googleads.googleapis.com/" +
      "AdGroupBidModifier:]\352AZ\n%googleads.googl" +
      "eapis.com/ChangeStatus\0221customers/{custo" +
      "mer}/changeStatus/{change_status}B\376\001\n%co" +
      "m.google.ads.googleads.v3.resourcesB\021Cha" +
      "ngeStatusProtoP\001ZJgoogle.golang.org/genp" +
      "roto/googleapis/ads/googleads/v3/resourc" +
      "es;resources\242\002\003GAA\252\002!Google.Ads.GoogleAd" +
      "s.V3.Resources\312\002!Google\\Ads\\GoogleAds\\V3" +
      "\\Resources\352\002%Google::Ads::GoogleAds::V3:" +
      ":Resourcesb\006proto3"
    };
    descriptor = com.google.protobuf.Descriptors.FileDescriptor
      .internalBuildGeneratedFileFrom(descriptorData,
        new com.google.protobuf.Descriptors.FileDescriptor[] {
          com.google.ads.googleads.v3.enums.ChangeStatusOperationProto.getDescriptor(),
          com.google.ads.googleads.v3.enums.ChangeStatusResourceTypeProto.getDescriptor(),
          com.google.api.FieldBehaviorProto.getDescriptor(),
          com.google.api.ResourceProto.getDescriptor(),
          com.google.protobuf.WrappersProto.getDescriptor(),
          com.google.api.AnnotationsProto.getDescriptor(),
        });
    internal_static_google_ads_googleads_v3_resources_ChangeStatus_descriptor =
      getDescriptor().getMessageTypes().get(0);
    internal_static_google_ads_googleads_v3_resources_ChangeStatus_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_ads_googleads_v3_resources_ChangeStatus_descriptor,
        new java.lang.String[] { "ResourceName", "LastChangeDateTime", "ResourceType", "Campaign", "AdGroup", "ResourceStatus", "AdGroupAd", "AdGroupCriterion", "CampaignCriterion", "Feed", "FeedItem", "AdGroupFeed", "CampaignFeed", "AdGroupBidModifier", });
    com.google.protobuf.ExtensionRegistry registry =
        com.google.protobuf.ExtensionRegistry.newInstance();
    registry.add(com.google.api.FieldBehaviorProto.fieldBehavior);
    registry.add(com.google.api.ResourceProto.resource);
    registry.add(com.google.api.ResourceProto.resourceReference);
    com.google.protobuf.Descriptors.FileDescriptor
        .internalUpdateFileDescriptor(descriptor, registry);
    com.google.ads.googleads.v3.enums.ChangeStatusOperationProto.getDescriptor();
    com.google.ads.googleads.v3.enums.ChangeStatusResourceTypeProto.getDescriptor();
    com.google.api.FieldBehaviorProto.getDescriptor();
    com.google.api.ResourceProto.getDescriptor();
    com.google.protobuf.WrappersProto.getDescriptor();
    com.google.api.AnnotationsProto.getDescriptor();
  }

  // @@protoc_insertion_point(outer_class_scope)
}
