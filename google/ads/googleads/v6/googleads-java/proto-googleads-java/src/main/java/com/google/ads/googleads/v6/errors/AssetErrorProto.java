// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v6/errors/asset_error.proto

package com.google.ads.googleads.v6.errors;

public final class AssetErrorProto {
  private AssetErrorProto() {}
  public static void registerAllExtensions(
      com.google.protobuf.ExtensionRegistryLite registry) {
  }

  public static void registerAllExtensions(
      com.google.protobuf.ExtensionRegistry registry) {
    registerAllExtensions(
        (com.google.protobuf.ExtensionRegistryLite) registry);
  }
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_ads_googleads_v6_errors_AssetErrorEnum_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_ads_googleads_v6_errors_AssetErrorEnum_fieldAccessorTable;

  public static com.google.protobuf.Descriptors.FileDescriptor
      getDescriptor() {
    return descriptor;
  }
  private static  com.google.protobuf.Descriptors.FileDescriptor
      descriptor;
  static {
    java.lang.String[] descriptorData = {
      "\n0google/ads/googleads/v6/errors/asset_e" +
      "rror.proto\022\036google.ads.googleads.v6.erro" +
      "rs\032\034google/api/annotations.proto\"\256\003\n\016Ass" +
      "etErrorEnum\"\233\003\n\nAssetError\022\017\n\013UNSPECIFIE" +
      "D\020\000\022\013\n\007UNKNOWN\020\001\022,\n(CUSTOMER_NOT_ON_ALLO" +
      "WLIST_FOR_ASSET_TYPE\020\r\022\023\n\017DUPLICATE_ASSE" +
      "T\020\003\022\030\n\024DUPLICATE_ASSET_NAME\020\004\022\031\n\025ASSET_D" +
      "ATA_IS_MISSING\020\005\022\034\n\030CANNOT_MODIFY_ASSET_" +
      "NAME\020\006\022&\n\"FIELD_INCOMPATIBLE_WITH_ASSET_" +
      "TYPE\020\007\022\037\n\033INVALID_CALL_TO_ACTION_TEXT\020\010\022" +
      "(\n$LEAD_FORM_INVALID_FIELDS_COMBINATION\020" +
      "\t\022\037\n\033LEAD_FORM_MISSING_AGREEMENT\020\n\022\030\n\024IN" +
      "VALID_ASSET_STATUS\020\013\022+\n\'FIELD_CANNOT_BE_" +
      "MODIFIED_FOR_ASSET_TYPE\020\014B\352\001\n\"com.google" +
      ".ads.googleads.v6.errorsB\017AssetErrorProt" +
      "oP\001ZDgoogle.golang.org/genproto/googleap" +
      "is/ads/googleads/v6/errors;errors\242\002\003GAA\252" +
      "\002\036Google.Ads.GoogleAds.V6.Errors\312\002\036Googl" +
      "e\\Ads\\GoogleAds\\V6\\Errors\352\002\"Google::Ads:" +
      ":GoogleAds::V6::Errorsb\006proto3"
    };
    descriptor = com.google.protobuf.Descriptors.FileDescriptor
      .internalBuildGeneratedFileFrom(descriptorData,
        new com.google.protobuf.Descriptors.FileDescriptor[] {
          com.google.api.AnnotationsProto.getDescriptor(),
        });
    internal_static_google_ads_googleads_v6_errors_AssetErrorEnum_descriptor =
      getDescriptor().getMessageTypes().get(0);
    internal_static_google_ads_googleads_v6_errors_AssetErrorEnum_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_ads_googleads_v6_errors_AssetErrorEnum_descriptor,
        new java.lang.String[] { });
    com.google.api.AnnotationsProto.getDescriptor();
  }

  // @@protoc_insertion_point(outer_class_scope)
}
