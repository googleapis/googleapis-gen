// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/retail/v2/product_service.proto

package com.google.cloud.retail.v2;

public final class ProductServiceProto {
  private ProductServiceProto() {}
  public static void registerAllExtensions(
      com.google.protobuf.ExtensionRegistryLite registry) {
  }

  public static void registerAllExtensions(
      com.google.protobuf.ExtensionRegistry registry) {
    registerAllExtensions(
        (com.google.protobuf.ExtensionRegistryLite) registry);
  }
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_retail_v2_CreateProductRequest_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_retail_v2_CreateProductRequest_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_retail_v2_GetProductRequest_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_retail_v2_GetProductRequest_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_retail_v2_UpdateProductRequest_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_retail_v2_UpdateProductRequest_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_retail_v2_DeleteProductRequest_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_retail_v2_DeleteProductRequest_fieldAccessorTable;

  public static com.google.protobuf.Descriptors.FileDescriptor
      getDescriptor() {
    return descriptor;
  }
  private static  com.google.protobuf.Descriptors.FileDescriptor
      descriptor;
  static {
    java.lang.String[] descriptorData = {
      "\n,google/cloud/retail/v2/product_service" +
      ".proto\022\026google.cloud.retail.v2\032\034google/a" +
      "pi/annotations.proto\032\027google/api/client." +
      "proto\032\037google/api/field_behavior.proto\032\031" +
      "google/api/resource.proto\032*google/cloud/" +
      "retail/v2/import_config.proto\032$google/cl" +
      "oud/retail/v2/product.proto\032)google/clou" +
      "d/retail/v2/purge_config.proto\032#google/l" +
      "ongrunning/operations.proto\032\033google/prot" +
      "obuf/empty.proto\032 google/protobuf/field_" +
      "mask.proto\"\234\001\n\024CreateProductRequest\0224\n\006p" +
      "arent\030\001 \001(\tB$\340A\002\372A\036\n\034retail.googleapis.c" +
      "om/Branch\0225\n\007product\030\002 \001(\0132\037.google.clou" +
      "d.retail.v2.ProductB\003\340A\002\022\027\n\nproduct_id\030\003" +
      " \001(\tB\003\340A\002\"H\n\021GetProductRequest\0223\n\004name\030\001" +
      " \001(\tB%\340A\002\372A\037\n\035retail.googleapis.com/Prod" +
      "uct\"~\n\024UpdateProductRequest\0225\n\007product\030\001" +
      " \001(\0132\037.google.cloud.retail.v2.ProductB\003\340" +
      "A\002\022/\n\013update_mask\030\002 \001(\0132\032.google.protobu" +
      "f.FieldMask\"K\n\024DeleteProductRequest\0223\n\004n" +
      "ame\030\001 \001(\tB%\340A\002\372A\037\n\035retail.googleapis.com" +
      "/Product2\356\010\n\016ProductService\022\317\001\n\rCreatePr" +
      "oduct\022,.google.cloud.retail.v2.CreatePro" +
      "ductRequest\032\037.google.cloud.retail.v2.Pro" +
      "duct\"o\202\323\344\223\002M\"B/v2/{parent=projects/*/loc" +
      "ations/*/catalogs/*/branches/*}/products" +
      ":\007product\332A\031parent,product,product_id\022\254\001" +
      "\n\nGetProduct\022).google.cloud.retail.v2.Ge" +
      "tProductRequest\032\037.google.cloud.retail.v2" +
      ".Product\"R\202\323\344\223\002E\022C/v2/{name=projects/*/l" +
      "ocations/*/catalogs/*/branches/*/product" +
      "s/**}\332A\004name\022\322\001\n\rUpdateProduct\022,.google." +
      "cloud.retail.v2.UpdateProductRequest\032\037.g" +
      "oogle.cloud.retail.v2.Product\"r\202\323\344\223\002V2K/" +
      "v2/{product.name=projects/*/locations/*/" +
      "catalogs/*/branches/*/products/**}:\007prod" +
      "uct\332A\023product,update_mask\022\251\001\n\rDeleteProd" +
      "uct\022,.google.cloud.retail.v2.DeleteProdu" +
      "ctRequest\032\026.google.protobuf.Empty\"R\202\323\344\223\002" +
      "E*C/v2/{name=projects/*/locations/*/cata" +
      "logs/*/branches/*/products/**}\332A\004name\022\216\002" +
      "\n\016ImportProducts\022-.google.cloud.retail.v" +
      "2.ImportProductsRequest\032\035.google.longrun" +
      "ning.Operation\"\255\001\202\323\344\223\002N\"I/v2/{parent=pro" +
      "jects/*/locations/*/catalogs/*/branches/" +
      "*}/products:import:\001*\312AV\n-google.cloud.r" +
      "etail.v2.ImportProductsResponse\022%google." +
      "cloud.retail.v2.ImportMetadata\032I\312A\025retai" +
      "l.googleapis.com\322A.https://www.googleapi" +
      "s.com/auth/cloud-platformB\310\001\n\032com.google" +
      ".cloud.retail.v2B\023ProductServiceProtoP\001Z" +
      "<google.golang.org/genproto/googleapis/c" +
      "loud/retail/v2;retail\242\002\006RETAIL\252\002\026Google." +
      "Cloud.Retail.V2\312\002\026Google\\Cloud\\Retail\\V2" +
      "\352\002\031Google::Cloud::Retail::V2b\006proto3"
    };
    descriptor = com.google.protobuf.Descriptors.FileDescriptor
      .internalBuildGeneratedFileFrom(descriptorData,
        new com.google.protobuf.Descriptors.FileDescriptor[] {
          com.google.api.AnnotationsProto.getDescriptor(),
          com.google.api.ClientProto.getDescriptor(),
          com.google.api.FieldBehaviorProto.getDescriptor(),
          com.google.api.ResourceProto.getDescriptor(),
          com.google.cloud.retail.v2.ImportConfigProto.getDescriptor(),
          com.google.cloud.retail.v2.ProductProto.getDescriptor(),
          com.google.cloud.retail.v2.PurgeConfigProto.getDescriptor(),
          com.google.longrunning.OperationsProto.getDescriptor(),
          com.google.protobuf.EmptyProto.getDescriptor(),
          com.google.protobuf.FieldMaskProto.getDescriptor(),
        });
    internal_static_google_cloud_retail_v2_CreateProductRequest_descriptor =
      getDescriptor().getMessageTypes().get(0);
    internal_static_google_cloud_retail_v2_CreateProductRequest_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_retail_v2_CreateProductRequest_descriptor,
        new java.lang.String[] { "Parent", "Product", "ProductId", });
    internal_static_google_cloud_retail_v2_GetProductRequest_descriptor =
      getDescriptor().getMessageTypes().get(1);
    internal_static_google_cloud_retail_v2_GetProductRequest_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_retail_v2_GetProductRequest_descriptor,
        new java.lang.String[] { "Name", });
    internal_static_google_cloud_retail_v2_UpdateProductRequest_descriptor =
      getDescriptor().getMessageTypes().get(2);
    internal_static_google_cloud_retail_v2_UpdateProductRequest_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_retail_v2_UpdateProductRequest_descriptor,
        new java.lang.String[] { "Product", "UpdateMask", });
    internal_static_google_cloud_retail_v2_DeleteProductRequest_descriptor =
      getDescriptor().getMessageTypes().get(3);
    internal_static_google_cloud_retail_v2_DeleteProductRequest_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_retail_v2_DeleteProductRequest_descriptor,
        new java.lang.String[] { "Name", });
    com.google.protobuf.ExtensionRegistry registry =
        com.google.protobuf.ExtensionRegistry.newInstance();
    registry.add(com.google.api.ClientProto.defaultHost);
    registry.add(com.google.api.FieldBehaviorProto.fieldBehavior);
    registry.add(com.google.api.AnnotationsProto.http);
    registry.add(com.google.api.ClientProto.methodSignature);
    registry.add(com.google.api.ClientProto.oauthScopes);
    registry.add(com.google.api.ResourceProto.resourceReference);
    registry.add(com.google.longrunning.OperationsProto.operationInfo);
    com.google.protobuf.Descriptors.FileDescriptor
        .internalUpdateFileDescriptor(descriptor, registry);
    com.google.api.AnnotationsProto.getDescriptor();
    com.google.api.ClientProto.getDescriptor();
    com.google.api.FieldBehaviorProto.getDescriptor();
    com.google.api.ResourceProto.getDescriptor();
    com.google.cloud.retail.v2.ImportConfigProto.getDescriptor();
    com.google.cloud.retail.v2.ProductProto.getDescriptor();
    com.google.cloud.retail.v2.PurgeConfigProto.getDescriptor();
    com.google.longrunning.OperationsProto.getDescriptor();
    com.google.protobuf.EmptyProto.getDescriptor();
    com.google.protobuf.FieldMaskProto.getDescriptor();
  }

  // @@protoc_insertion_point(outer_class_scope)
}
