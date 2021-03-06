// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/apps/market/v2/resources.proto

package com.google.ccc.hosted.marketplace.v2;

public final class ResourcesProto {
  private ResourcesProto() {}
  public static void registerAllExtensions(
      com.google.protobuf.ExtensionRegistryLite registry) {
  }

  public static void registerAllExtensions(
      com.google.protobuf.ExtensionRegistry registry) {
    registerAllExtensions(
        (com.google.protobuf.ExtensionRegistryLite) registry);
  }
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_ccc_hosted_marketplace_v2_CustomerLicense_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_ccc_hosted_marketplace_v2_CustomerLicense_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_ccc_hosted_marketplace_v2_CustomerLicense_Editions_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_ccc_hosted_marketplace_v2_CustomerLicense_Editions_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_ccc_hosted_marketplace_v2_LicenseNotification_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_ccc_hosted_marketplace_v2_LicenseNotification_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_ccc_hosted_marketplace_v2_LicenseNotification_Deletes_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_ccc_hosted_marketplace_v2_LicenseNotification_Deletes_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_ccc_hosted_marketplace_v2_LicenseNotification_Expiries_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_ccc_hosted_marketplace_v2_LicenseNotification_Expiries_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_ccc_hosted_marketplace_v2_LicenseNotification_Provisions_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_ccc_hosted_marketplace_v2_LicenseNotification_Provisions_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_ccc_hosted_marketplace_v2_LicenseNotification_Reassignments_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_ccc_hosted_marketplace_v2_LicenseNotification_Reassignments_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_ccc_hosted_marketplace_v2_LicenseNotificationList_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_ccc_hosted_marketplace_v2_LicenseNotificationList_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_ccc_hosted_marketplace_v2_UserLicense_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_ccc_hosted_marketplace_v2_UserLicense_fieldAccessorTable;

  public static com.google.protobuf.Descriptors.FileDescriptor
      getDescriptor() {
    return descriptor;
  }
  private static  com.google.protobuf.Descriptors.FileDescriptor
      descriptor;
  static {
    java.lang.String[] descriptorData = {
      "\n%google/apps/market/v2/resources.proto\022" +
      "\031ccc.hosted.marketplace.v2\032\034google/api/a" +
      "nnotations.proto\"\215\002\n\017CustomerLicense\022\014\n\004" +
      "kind\030\001 \001(\t\022\r\n\005state\030\002 \001(\t\022\026\n\016application" +
      "_id\030\003 \001(\t\022I\n\010editions\030\004 \003(\01323.ccc.hosted" +
      ".marketplace.v2.CustomerLicense.Editions" +
      "B\002\030\001\022\n\n\002id\030e \001(\t\022\023\n\013customer_id\030f \001(\t\032Y\n" +
      "\010Editions\022\027\n\nedition_id\030\225\003 \001(\tB\002\030\001\022\027\n\nse" +
      "at_count\030\226\003 \001(\005B\002\030\001\022\033\n\016assigned_seats\030\231\003" +
      " \001(\005B\002\030\001\"\257\005\n\023LicenseNotification\022\n\n\002id\030\001" +
      " \001(\t\022\026\n\016application_id\030\002 \001(\t\022\021\n\ttimestam" +
      "p\030\003 \001(\003\022\023\n\013customer_id\030\004 \001(\t\022\014\n\004kind\030\005 \001" +
      "(\t\022M\n\nprovisions\030\006 \003(\01329.ccc.hosted.mark" +
      "etplace.v2.LicenseNotification.Provision" +
      "s\022I\n\010expiries\030\007 \003(\01327.ccc.hosted.marketp" +
      "lace.v2.LicenseNotification.Expiries\022S\n\r" +
      "reassignments\030\010 \003(\0132<.ccc.hosted.marketp" +
      "lace.v2.LicenseNotification.Reassignment" +
      "s\022G\n\007deletes\030\t \003(\01326.ccc.hosted.marketpl" +
      "ace.v2.LicenseNotification.Deletes\0320\n\007De" +
      "letes\022\014\n\004kind\030\001 \001(\t\022\027\n\nedition_id\030\205\007 \001(\t" +
      "B\002\030\001\0321\n\010Expiries\022\014\n\004kind\030\001 \001(\t\022\027\n\neditio" +
      "n_id\030\275\005 \001(\tB\002\030\001\032H\n\nProvisions\022\014\n\004kind\030\001 " +
      "\001(\t\022\027\n\nedition_id\030\331\004 \001(\tB\002\030\001\022\023\n\nseat_cou" +
      "nt\030\332\004 \001(\003\032W\n\rReassignments\022\014\n\004kind\030\001 \001(\t" +
      "\022\020\n\007user_id\030\241\006 \001(\t\022\r\n\004type\030\242\006 \001(\t\022\027\n\nedi" +
      "tion_id\030\243\006 \001(\tB\002\030\001\"\212\001\n\027LicenseNotificati" +
      "onList\022\014\n\004kind\030\001 \001(\t\022F\n\rnotifications\030\357\007" +
      " \003(\0132..ccc.hosted.marketplace.v2.License" +
      "Notification\022\031\n\017next_page_token\030\372\221\006 \001(\t\"" +
      "\235\001\n\013UserLicense\022\014\n\004kind\030\001 \001(\t\022\017\n\007enabled" +
      "\030\002 \001(\010\022\r\n\005state\030\003 \001(\t\022\026\n\nedition_id\030\004 \001(" +
      "\tB\002\030\001\022\023\n\013customer_id\030\005 \001(\t\022\026\n\016applicatio" +
      "n_id\030\006 \001(\t\022\n\n\002id\030e \001(\t\022\017\n\007user_id\030f \001(\tB" +
      "\235\001\n$com.google.ccc.hosted.marketplace.v2" +
      "B\016ResourcesProtoP\001ZKgoogle.golang.org/ge" +
      "nproto/googleapis/ccc/hosted/marketplace" +
      "/v2;marketplace\312\002\025Google\\Apps\\Market\\V2b" +
      "\006proto3"
    };
    descriptor = com.google.protobuf.Descriptors.FileDescriptor
      .internalBuildGeneratedFileFrom(descriptorData,
        new com.google.protobuf.Descriptors.FileDescriptor[] {
          com.google.api.AnnotationsProto.getDescriptor(),
        });
    internal_static_ccc_hosted_marketplace_v2_CustomerLicense_descriptor =
      getDescriptor().getMessageTypes().get(0);
    internal_static_ccc_hosted_marketplace_v2_CustomerLicense_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_ccc_hosted_marketplace_v2_CustomerLicense_descriptor,
        new java.lang.String[] { "Kind", "State", "ApplicationId", "Editions", "Id", "CustomerId", });
    internal_static_ccc_hosted_marketplace_v2_CustomerLicense_Editions_descriptor =
      internal_static_ccc_hosted_marketplace_v2_CustomerLicense_descriptor.getNestedTypes().get(0);
    internal_static_ccc_hosted_marketplace_v2_CustomerLicense_Editions_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_ccc_hosted_marketplace_v2_CustomerLicense_Editions_descriptor,
        new java.lang.String[] { "EditionId", "SeatCount", "AssignedSeats", });
    internal_static_ccc_hosted_marketplace_v2_LicenseNotification_descriptor =
      getDescriptor().getMessageTypes().get(1);
    internal_static_ccc_hosted_marketplace_v2_LicenseNotification_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_ccc_hosted_marketplace_v2_LicenseNotification_descriptor,
        new java.lang.String[] { "Id", "ApplicationId", "Timestamp", "CustomerId", "Kind", "Provisions", "Expiries", "Reassignments", "Deletes", });
    internal_static_ccc_hosted_marketplace_v2_LicenseNotification_Deletes_descriptor =
      internal_static_ccc_hosted_marketplace_v2_LicenseNotification_descriptor.getNestedTypes().get(0);
    internal_static_ccc_hosted_marketplace_v2_LicenseNotification_Deletes_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_ccc_hosted_marketplace_v2_LicenseNotification_Deletes_descriptor,
        new java.lang.String[] { "Kind", "EditionId", });
    internal_static_ccc_hosted_marketplace_v2_LicenseNotification_Expiries_descriptor =
      internal_static_ccc_hosted_marketplace_v2_LicenseNotification_descriptor.getNestedTypes().get(1);
    internal_static_ccc_hosted_marketplace_v2_LicenseNotification_Expiries_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_ccc_hosted_marketplace_v2_LicenseNotification_Expiries_descriptor,
        new java.lang.String[] { "Kind", "EditionId", });
    internal_static_ccc_hosted_marketplace_v2_LicenseNotification_Provisions_descriptor =
      internal_static_ccc_hosted_marketplace_v2_LicenseNotification_descriptor.getNestedTypes().get(2);
    internal_static_ccc_hosted_marketplace_v2_LicenseNotification_Provisions_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_ccc_hosted_marketplace_v2_LicenseNotification_Provisions_descriptor,
        new java.lang.String[] { "Kind", "EditionId", "SeatCount", });
    internal_static_ccc_hosted_marketplace_v2_LicenseNotification_Reassignments_descriptor =
      internal_static_ccc_hosted_marketplace_v2_LicenseNotification_descriptor.getNestedTypes().get(3);
    internal_static_ccc_hosted_marketplace_v2_LicenseNotification_Reassignments_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_ccc_hosted_marketplace_v2_LicenseNotification_Reassignments_descriptor,
        new java.lang.String[] { "Kind", "UserId", "Type", "EditionId", });
    internal_static_ccc_hosted_marketplace_v2_LicenseNotificationList_descriptor =
      getDescriptor().getMessageTypes().get(2);
    internal_static_ccc_hosted_marketplace_v2_LicenseNotificationList_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_ccc_hosted_marketplace_v2_LicenseNotificationList_descriptor,
        new java.lang.String[] { "Kind", "Notifications", "NextPageToken", });
    internal_static_ccc_hosted_marketplace_v2_UserLicense_descriptor =
      getDescriptor().getMessageTypes().get(3);
    internal_static_ccc_hosted_marketplace_v2_UserLicense_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_ccc_hosted_marketplace_v2_UserLicense_descriptor,
        new java.lang.String[] { "Kind", "Enabled", "State", "EditionId", "CustomerId", "ApplicationId", "Id", "UserId", });
    com.google.api.AnnotationsProto.getDescriptor();
  }

  // @@protoc_insertion_point(outer_class_scope)
}
