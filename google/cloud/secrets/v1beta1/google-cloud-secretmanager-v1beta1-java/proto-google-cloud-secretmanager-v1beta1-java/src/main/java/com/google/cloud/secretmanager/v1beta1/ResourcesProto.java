// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/secrets/v1beta1/resources.proto

package com.google.cloud.secretmanager.v1beta1;

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
    internal_static_google_cloud_secrets_v1beta1_Secret_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_secrets_v1beta1_Secret_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_secrets_v1beta1_Secret_LabelsEntry_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_secrets_v1beta1_Secret_LabelsEntry_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_secrets_v1beta1_SecretVersion_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_secrets_v1beta1_SecretVersion_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_secrets_v1beta1_Replication_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_secrets_v1beta1_Replication_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_secrets_v1beta1_Replication_Automatic_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_secrets_v1beta1_Replication_Automatic_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_secrets_v1beta1_Replication_UserManaged_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_secrets_v1beta1_Replication_UserManaged_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_secrets_v1beta1_Replication_UserManaged_Replica_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_secrets_v1beta1_Replication_UserManaged_Replica_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_secrets_v1beta1_SecretPayload_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_secrets_v1beta1_SecretPayload_fieldAccessorTable;

  public static com.google.protobuf.Descriptors.FileDescriptor
      getDescriptor() {
    return descriptor;
  }
  private static  com.google.protobuf.Descriptors.FileDescriptor
      descriptor;
  static {
    java.lang.String[] descriptorData = {
      "\n,google/cloud/secrets/v1beta1/resources" +
      ".proto\022\034google.cloud.secrets.v1beta1\032\037go" +
      "ogle/api/field_behavior.proto\032\031google/ap" +
      "i/resource.proto\032\037google/protobuf/timest" +
      "amp.proto\032\034google/api/annotations.proto\"" +
      "\331\002\n\006Secret\022\021\n\004name\030\001 \001(\tB\003\340A\003\022F\n\013replica" +
      "tion\030\002 \001(\0132).google.cloud.secrets.v1beta" +
      "1.ReplicationB\006\340A\005\340A\002\0224\n\013create_time\030\003 \001" +
      "(\0132\032.google.protobuf.TimestampB\003\340A\003\022@\n\006l" +
      "abels\030\004 \003(\01320.google.cloud.secrets.v1bet" +
      "a1.Secret.LabelsEntry\032-\n\013LabelsEntry\022\013\n\003" +
      "key\030\001 \001(\t\022\r\n\005value\030\002 \001(\t:\0028\001:M\352AJ\n#secre" +
      "tmanager.googleapis.com/Secret\022#projects" +
      "/{project}/secrets/{secret}\"\220\003\n\rSecretVe" +
      "rsion\022\021\n\004name\030\001 \001(\tB\003\340A\003\0224\n\013create_time\030" +
      "\002 \001(\0132\032.google.protobuf.TimestampB\003\340A\003\0225" +
      "\n\014destroy_time\030\003 \001(\0132\032.google.protobuf.T" +
      "imestampB\003\340A\003\022E\n\005state\030\004 \001(\01621.google.cl" +
      "oud.secrets.v1beta1.SecretVersion.StateB" +
      "\003\340A\003\"H\n\005State\022\025\n\021STATE_UNSPECIFIED\020\000\022\013\n\007" +
      "ENABLED\020\001\022\014\n\010DISABLED\020\002\022\r\n\tDESTROYED\020\003:n" +
      "\352Ak\n*secretmanager.googleapis.com/Secret" +
      "Version\022=projects/{project}/secrets/{sec" +
      "ret}/versions/{secret_version}\"\305\002\n\013Repli" +
      "cation\022H\n\tautomatic\030\001 \001(\01323.google.cloud" +
      ".secrets.v1beta1.Replication.AutomaticH\000" +
      "\022M\n\014user_managed\030\002 \001(\01325.google.cloud.se" +
      "crets.v1beta1.Replication.UserManagedH\000\032" +
      "\013\n\tAutomatic\032\200\001\n\013UserManaged\022T\n\010replicas" +
      "\030\001 \003(\0132=.google.cloud.secrets.v1beta1.Re" +
      "plication.UserManaged.ReplicaB\003\340A\002\032\033\n\007Re" +
      "plica\022\020\n\010location\030\001 \001(\tB\r\n\013replication\"\035" +
      "\n\rSecretPayload\022\014\n\004data\030\001 \001(\014B\206\002\n&com.go" +
      "ogle.cloud.secretmanager.v1beta1B\016Resour" +
      "cesProtoP\001ZOgoogle.golang.org/genproto/g" +
      "oogleapis/cloud/secretmanager/v1beta1;se" +
      "cretmanager\370\001\001\242\002\003GSM\252\002\"Google.Cloud.Secr" +
      "etManager.V1Beta1\312\002\"Google\\Cloud\\SecretM" +
      "anager\\V1beta1\352\002%Google::Cloud::SecretMa" +
      "nager::V1beta1b\006proto3"
    };
    descriptor = com.google.protobuf.Descriptors.FileDescriptor
      .internalBuildGeneratedFileFrom(descriptorData,
        new com.google.protobuf.Descriptors.FileDescriptor[] {
          com.google.api.FieldBehaviorProto.getDescriptor(),
          com.google.api.ResourceProto.getDescriptor(),
          com.google.protobuf.TimestampProto.getDescriptor(),
          com.google.api.AnnotationsProto.getDescriptor(),
        });
    internal_static_google_cloud_secrets_v1beta1_Secret_descriptor =
      getDescriptor().getMessageTypes().get(0);
    internal_static_google_cloud_secrets_v1beta1_Secret_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_secrets_v1beta1_Secret_descriptor,
        new java.lang.String[] { "Name", "Replication", "CreateTime", "Labels", });
    internal_static_google_cloud_secrets_v1beta1_Secret_LabelsEntry_descriptor =
      internal_static_google_cloud_secrets_v1beta1_Secret_descriptor.getNestedTypes().get(0);
    internal_static_google_cloud_secrets_v1beta1_Secret_LabelsEntry_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_secrets_v1beta1_Secret_LabelsEntry_descriptor,
        new java.lang.String[] { "Key", "Value", });
    internal_static_google_cloud_secrets_v1beta1_SecretVersion_descriptor =
      getDescriptor().getMessageTypes().get(1);
    internal_static_google_cloud_secrets_v1beta1_SecretVersion_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_secrets_v1beta1_SecretVersion_descriptor,
        new java.lang.String[] { "Name", "CreateTime", "DestroyTime", "State", });
    internal_static_google_cloud_secrets_v1beta1_Replication_descriptor =
      getDescriptor().getMessageTypes().get(2);
    internal_static_google_cloud_secrets_v1beta1_Replication_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_secrets_v1beta1_Replication_descriptor,
        new java.lang.String[] { "Automatic", "UserManaged", "Replication", });
    internal_static_google_cloud_secrets_v1beta1_Replication_Automatic_descriptor =
      internal_static_google_cloud_secrets_v1beta1_Replication_descriptor.getNestedTypes().get(0);
    internal_static_google_cloud_secrets_v1beta1_Replication_Automatic_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_secrets_v1beta1_Replication_Automatic_descriptor,
        new java.lang.String[] { });
    internal_static_google_cloud_secrets_v1beta1_Replication_UserManaged_descriptor =
      internal_static_google_cloud_secrets_v1beta1_Replication_descriptor.getNestedTypes().get(1);
    internal_static_google_cloud_secrets_v1beta1_Replication_UserManaged_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_secrets_v1beta1_Replication_UserManaged_descriptor,
        new java.lang.String[] { "Replicas", });
    internal_static_google_cloud_secrets_v1beta1_Replication_UserManaged_Replica_descriptor =
      internal_static_google_cloud_secrets_v1beta1_Replication_UserManaged_descriptor.getNestedTypes().get(0);
    internal_static_google_cloud_secrets_v1beta1_Replication_UserManaged_Replica_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_secrets_v1beta1_Replication_UserManaged_Replica_descriptor,
        new java.lang.String[] { "Location", });
    internal_static_google_cloud_secrets_v1beta1_SecretPayload_descriptor =
      getDescriptor().getMessageTypes().get(3);
    internal_static_google_cloud_secrets_v1beta1_SecretPayload_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_secrets_v1beta1_SecretPayload_descriptor,
        new java.lang.String[] { "Data", });
    com.google.protobuf.ExtensionRegistry registry =
        com.google.protobuf.ExtensionRegistry.newInstance();
    registry.add(com.google.api.FieldBehaviorProto.fieldBehavior);
    registry.add(com.google.api.ResourceProto.resource);
    com.google.protobuf.Descriptors.FileDescriptor
        .internalUpdateFileDescriptor(descriptor, registry);
    com.google.api.FieldBehaviorProto.getDescriptor();
    com.google.api.ResourceProto.getDescriptor();
    com.google.protobuf.TimestampProto.getDescriptor();
    com.google.api.AnnotationsProto.getDescriptor();
  }

  // @@protoc_insertion_point(outer_class_scope)
}
