// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/retail/v2/product.proto

package com.google.cloud.retail.v2;

public final class ProductProto {
  private ProductProto() {}
  public static void registerAllExtensions(
      com.google.protobuf.ExtensionRegistryLite registry) {
  }

  public static void registerAllExtensions(
      com.google.protobuf.ExtensionRegistry registry) {
    registerAllExtensions(
        (com.google.protobuf.ExtensionRegistryLite) registry);
  }
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_retail_v2_Product_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_retail_v2_Product_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_retail_v2_Product_AttributesEntry_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_retail_v2_Product_AttributesEntry_fieldAccessorTable;

  public static com.google.protobuf.Descriptors.FileDescriptor
      getDescriptor() {
    return descriptor;
  }
  private static  com.google.protobuf.Descriptors.FileDescriptor
      descriptor;
  static {
    java.lang.String[] descriptorData = {
      "\n$google/cloud/retail/v2/product.proto\022\026" +
      "google.cloud.retail.v2\032\034google/api/annot" +
      "ations.proto\032\037google/api/field_behavior." +
      "proto\032\031google/api/resource.proto\032#google" +
      "/cloud/retail/v2/common.proto\032 google/pr" +
      "otobuf/field_mask.proto\032\037google/protobuf" +
      "/timestamp.proto\032\036google/protobuf/wrappe" +
      "rs.proto\"\314\007\n\007Product\022\021\n\004name\030\001 \001(\tB\003\340A\005\022" +
      "\017\n\002id\030\002 \001(\tB\003\340A\005\0227\n\004type\030\003 \001(\0162$.google." +
      "cloud.retail.v2.Product.TypeB\003\340A\005\022\032\n\022pri" +
      "mary_product_id\030\004 \001(\t\022\022\n\ncategories\030\007 \003(" +
      "\t\022\022\n\005title\030\010 \001(\tB\003\340A\002\022\023\n\013description\030\n \001" +
      "(\t\022C\n\nattributes\030\014 \003(\0132/.google.cloud.re" +
      "tail.v2.Product.AttributesEntry\022\014\n\004tags\030" +
      "\r \003(\t\0225\n\nprice_info\030\016 \001(\0132!.google.cloud" +
      ".retail.v2.PriceInfo\0222\n\016available_time\030\022" +
      " \001(\0132\032.google.protobuf.Timestamp\022B\n\014avai" +
      "lability\030\023 \001(\0162,.google.cloud.retail.v2." +
      "Product.Availability\0227\n\022available_quanti" +
      "ty\030\024 \001(\0132\033.google.protobuf.Int32Value\022\013\n" +
      "\003uri\030\026 \001(\t\022-\n\006images\030\027 \003(\0132\035.google.clou" +
      "d.retail.v2.Image\032Z\n\017AttributesEntry\022\013\n\003" +
      "key\030\001 \001(\t\0226\n\005value\030\002 \001(\0132\'.google.cloud." +
      "retail.v2.CustomAttribute:\0028\001\"F\n\004Type\022\024\n" +
      "\020TYPE_UNSPECIFIED\020\000\022\013\n\007PRIMARY\020\001\022\013\n\007VARI" +
      "ANT\020\002\022\016\n\nCOLLECTION\020\003\"i\n\014Availability\022\034\n" +
      "\030AVAILABILITY_UNSPECIFIED\020\000\022\014\n\010IN_STOCK\020" +
      "\001\022\020\n\014OUT_OF_STOCK\020\002\022\014\n\010PREORDER\020\003\022\r\n\tBAC" +
      "KORDER\020\004:\204\001\352A\200\001\n\035retail.googleapis.com/P" +
      "roduct\022_projects/{project}/locations/{lo" +
      "cation}/catalogs/{catalog}/branches/{bra" +
      "nch}/products/{product}B\260\002\n\032com.google.c" +
      "loud.retail.v2B\014ProductProtoP\001Z<google.g" +
      "olang.org/genproto/googleapis/cloud/reta" +
      "il/v2;retail\242\002\006RETAIL\252\002\026Google.Cloud.Ret" +
      "ail.V2\312\002\026Google\\Cloud\\Retail\\V2\352\002\031Google" +
      "::Cloud::Retail::V2\352Al\n\034retail.googleapi" +
      "s.com/Branch\022Lprojects/{project}/locatio" +
      "ns/{location}/catalogs/{catalog}/branche" +
      "s/{branch}b\006proto3"
    };
    descriptor = com.google.protobuf.Descriptors.FileDescriptor
      .internalBuildGeneratedFileFrom(descriptorData,
        new com.google.protobuf.Descriptors.FileDescriptor[] {
          com.google.api.AnnotationsProto.getDescriptor(),
          com.google.api.FieldBehaviorProto.getDescriptor(),
          com.google.api.ResourceProto.getDescriptor(),
          com.google.cloud.retail.v2.CommonProto.getDescriptor(),
          com.google.protobuf.FieldMaskProto.getDescriptor(),
          com.google.protobuf.TimestampProto.getDescriptor(),
          com.google.protobuf.WrappersProto.getDescriptor(),
        });
    internal_static_google_cloud_retail_v2_Product_descriptor =
      getDescriptor().getMessageTypes().get(0);
    internal_static_google_cloud_retail_v2_Product_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_retail_v2_Product_descriptor,
        new java.lang.String[] { "Name", "Id", "Type", "PrimaryProductId", "Categories", "Title", "Description", "Attributes", "Tags", "PriceInfo", "AvailableTime", "Availability", "AvailableQuantity", "Uri", "Images", });
    internal_static_google_cloud_retail_v2_Product_AttributesEntry_descriptor =
      internal_static_google_cloud_retail_v2_Product_descriptor.getNestedTypes().get(0);
    internal_static_google_cloud_retail_v2_Product_AttributesEntry_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_retail_v2_Product_AttributesEntry_descriptor,
        new java.lang.String[] { "Key", "Value", });
    com.google.protobuf.ExtensionRegistry registry =
        com.google.protobuf.ExtensionRegistry.newInstance();
    registry.add(com.google.api.FieldBehaviorProto.fieldBehavior);
    registry.add(com.google.api.ResourceProto.resource);
    registry.add(com.google.api.ResourceProto.resourceDefinition);
    com.google.protobuf.Descriptors.FileDescriptor
        .internalUpdateFileDescriptor(descriptor, registry);
    com.google.api.AnnotationsProto.getDescriptor();
    com.google.api.FieldBehaviorProto.getDescriptor();
    com.google.api.ResourceProto.getDescriptor();
    com.google.cloud.retail.v2.CommonProto.getDescriptor();
    com.google.protobuf.FieldMaskProto.getDescriptor();
    com.google.protobuf.TimestampProto.getDescriptor();
    com.google.protobuf.WrappersProto.getDescriptor();
  }

  // @@protoc_insertion_point(outer_class_scope)
}
