// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v5/services/account_budget_proposal_service.proto

package com.google.ads.googleads.v5.services;

public final class AccountBudgetProposalServiceProto {
  private AccountBudgetProposalServiceProto() {}
  public static void registerAllExtensions(
      com.google.protobuf.ExtensionRegistryLite registry) {
  }

  public static void registerAllExtensions(
      com.google.protobuf.ExtensionRegistry registry) {
    registerAllExtensions(
        (com.google.protobuf.ExtensionRegistryLite) registry);
  }
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_ads_googleads_v5_services_GetAccountBudgetProposalRequest_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_ads_googleads_v5_services_GetAccountBudgetProposalRequest_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_ads_googleads_v5_services_MutateAccountBudgetProposalRequest_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_ads_googleads_v5_services_MutateAccountBudgetProposalRequest_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_ads_googleads_v5_services_AccountBudgetProposalOperation_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_ads_googleads_v5_services_AccountBudgetProposalOperation_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_ads_googleads_v5_services_MutateAccountBudgetProposalResponse_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_ads_googleads_v5_services_MutateAccountBudgetProposalResponse_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_ads_googleads_v5_services_MutateAccountBudgetProposalResult_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_ads_googleads_v5_services_MutateAccountBudgetProposalResult_fieldAccessorTable;

  public static com.google.protobuf.Descriptors.FileDescriptor
      getDescriptor() {
    return descriptor;
  }
  private static  com.google.protobuf.Descriptors.FileDescriptor
      descriptor;
  static {
    java.lang.String[] descriptorData = {
      "\nFgoogle/ads/googleads/v5/services/accou" +
      "nt_budget_proposal_service.proto\022 google" +
      ".ads.googleads.v5.services\032?google/ads/g" +
      "oogleads/v5/resources/account_budget_pro" +
      "posal.proto\032\034google/api/annotations.prot" +
      "o\032\027google/api/client.proto\032\037google/api/f" +
      "ield_behavior.proto\032\031google/api/resource" +
      ".proto\032 google/protobuf/field_mask.proto" +
      "\"p\n\037GetAccountBudgetProposalRequest\022M\n\rr" +
      "esource_name\030\001 \001(\tB6\340A\002\372A0\n.googleads.go" +
      "ogleapis.com/AccountBudgetProposal\"\257\001\n\"M" +
      "utateAccountBudgetProposalRequest\022\030\n\013cus" +
      "tomer_id\030\001 \001(\tB\003\340A\002\022X\n\toperation\030\002 \001(\0132@" +
      ".google.ads.googleads.v5.services.Accoun" +
      "tBudgetProposalOperationB\003\340A\002\022\025\n\rvalidat" +
      "e_only\030\003 \001(\010\"\274\001\n\036AccountBudgetProposalOp" +
      "eration\022/\n\013update_mask\030\003 \001(\0132\032.google.pr" +
      "otobuf.FieldMask\022J\n\006create\030\002 \001(\01328.googl" +
      "e.ads.googleads.v5.resources.AccountBudg" +
      "etProposalH\000\022\020\n\006remove\030\001 \001(\tH\000B\013\n\toperat" +
      "ion\"z\n#MutateAccountBudgetProposalRespon" +
      "se\022S\n\006result\030\002 \001(\0132C.google.ads.googlead" +
      "s.v5.services.MutateAccountBudgetProposa" +
      "lResult\":\n!MutateAccountBudgetProposalRe" +
      "sult\022\025\n\rresource_name\030\001 \001(\t2\336\004\n\034AccountB" +
      "udgetProposalService\022\351\001\n\030GetAccountBudge" +
      "tProposal\022A.google.ads.googleads.v5.serv" +
      "ices.GetAccountBudgetProposalRequest\0328.g" +
      "oogle.ads.googleads.v5.resources.Account" +
      "BudgetProposal\"P\202\323\344\223\002:\0228/v5/{resource_na" +
      "me=customers/*/accountBudgetProposals/*}" +
      "\332A\rresource_name\022\212\002\n\033MutateAccountBudget" +
      "Proposal\022D.google.ads.googleads.v5.servi" +
      "ces.MutateAccountBudgetProposalRequest\032E" +
      ".google.ads.googleads.v5.services.Mutate" +
      "AccountBudgetProposalResponse\"^\202\323\344\223\002@\";/" +
      "v5/customers/{customer_id=*}/accountBudg" +
      "etProposals:mutate:\001*\332A\025customer_id,oper" +
      "ation\032E\312A\030googleads.googleapis.com\322A\'htt" +
      "ps://www.googleapis.com/auth/adwordsB\210\002\n" +
      "$com.google.ads.googleads.v5.servicesB!A" +
      "ccountBudgetProposalServiceProtoP\001ZHgoog" +
      "le.golang.org/genproto/googleapis/ads/go" +
      "ogleads/v5/services;services\242\002\003GAA\252\002 Goo" +
      "gle.Ads.GoogleAds.V5.Services\312\002 Google\\A" +
      "ds\\GoogleAds\\V5\\Services\352\002$Google::Ads::" +
      "GoogleAds::V5::Servicesb\006proto3"
    };
    descriptor = com.google.protobuf.Descriptors.FileDescriptor
      .internalBuildGeneratedFileFrom(descriptorData,
        new com.google.protobuf.Descriptors.FileDescriptor[] {
          com.google.ads.googleads.v5.resources.AccountBudgetProposalProto.getDescriptor(),
          com.google.api.AnnotationsProto.getDescriptor(),
          com.google.api.ClientProto.getDescriptor(),
          com.google.api.FieldBehaviorProto.getDescriptor(),
          com.google.api.ResourceProto.getDescriptor(),
          com.google.protobuf.FieldMaskProto.getDescriptor(),
        });
    internal_static_google_ads_googleads_v5_services_GetAccountBudgetProposalRequest_descriptor =
      getDescriptor().getMessageTypes().get(0);
    internal_static_google_ads_googleads_v5_services_GetAccountBudgetProposalRequest_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_ads_googleads_v5_services_GetAccountBudgetProposalRequest_descriptor,
        new java.lang.String[] { "ResourceName", });
    internal_static_google_ads_googleads_v5_services_MutateAccountBudgetProposalRequest_descriptor =
      getDescriptor().getMessageTypes().get(1);
    internal_static_google_ads_googleads_v5_services_MutateAccountBudgetProposalRequest_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_ads_googleads_v5_services_MutateAccountBudgetProposalRequest_descriptor,
        new java.lang.String[] { "CustomerId", "Operation", "ValidateOnly", });
    internal_static_google_ads_googleads_v5_services_AccountBudgetProposalOperation_descriptor =
      getDescriptor().getMessageTypes().get(2);
    internal_static_google_ads_googleads_v5_services_AccountBudgetProposalOperation_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_ads_googleads_v5_services_AccountBudgetProposalOperation_descriptor,
        new java.lang.String[] { "UpdateMask", "Create", "Remove", "Operation", });
    internal_static_google_ads_googleads_v5_services_MutateAccountBudgetProposalResponse_descriptor =
      getDescriptor().getMessageTypes().get(3);
    internal_static_google_ads_googleads_v5_services_MutateAccountBudgetProposalResponse_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_ads_googleads_v5_services_MutateAccountBudgetProposalResponse_descriptor,
        new java.lang.String[] { "Result", });
    internal_static_google_ads_googleads_v5_services_MutateAccountBudgetProposalResult_descriptor =
      getDescriptor().getMessageTypes().get(4);
    internal_static_google_ads_googleads_v5_services_MutateAccountBudgetProposalResult_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_ads_googleads_v5_services_MutateAccountBudgetProposalResult_descriptor,
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
    com.google.ads.googleads.v5.resources.AccountBudgetProposalProto.getDescriptor();
    com.google.api.AnnotationsProto.getDescriptor();
    com.google.api.ClientProto.getDescriptor();
    com.google.api.FieldBehaviorProto.getDescriptor();
    com.google.api.ResourceProto.getDescriptor();
    com.google.protobuf.FieldMaskProto.getDescriptor();
  }

  // @@protoc_insertion_point(outer_class_scope)
}
