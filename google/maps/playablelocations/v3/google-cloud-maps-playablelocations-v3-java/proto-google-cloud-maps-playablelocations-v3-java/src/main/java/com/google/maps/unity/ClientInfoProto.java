// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/maps/unity/clientinfo.proto

package com.google.maps.unity;

public final class ClientInfoProto {
  private ClientInfoProto() {}
  public static void registerAllExtensions(
      com.google.protobuf.ExtensionRegistryLite registry) {
  }

  public static void registerAllExtensions(
      com.google.protobuf.ExtensionRegistry registry) {
    registerAllExtensions(
        (com.google.protobuf.ExtensionRegistryLite) registry);
  }
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_maps_unity_ClientInfo_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_maps_unity_ClientInfo_fieldAccessorTable;

  public static com.google.protobuf.Descriptors.FileDescriptor
      getDescriptor() {
    return descriptor;
  }
  private static  com.google.protobuf.Descriptors.FileDescriptor
      descriptor;
  static {
    java.lang.String[] descriptorData = {
      "\n\"google/maps/unity/clientinfo.proto\022\021go" +
      "ogle.maps.unity\"\356\002\n\nClientInfo\022\026\n\016applic" +
      "ation_id\030\001 \001(\t\022\033\n\023application_version\030\002 " +
      "\001(\t\0228\n\010platform\030\003 \001(\0162&.google.maps.unit" +
      "y.ClientInfo.Platform\022\030\n\020operating_syste" +
      "m\030\004 \001(\t\022\022\n\napi_client\030\005 \001(\t\022\024\n\014device_mo" +
      "del\030\006 \001(\t\022\025\n\rlanguage_code\030\007 \001(\t\022\036\n\026oper" +
      "ating_system_build\030\010 \001(\t\"v\n\010Platform\022\030\n\024" +
      "PLATFORM_UNSPECIFIED\020\000\022\n\n\006EDITOR\020\001\022\n\n\006MA" +
      "C_OS\020\002\022\013\n\007WINDOWS\020\003\022\t\n\005LINUX\020\004\022\013\n\007ANDROI" +
      "D\020\005\022\007\n\003IOS\020\006\022\n\n\006WEB_GL\020\007B|\n\025com.google.m" +
      "aps.unityB\017ClientInfoProtoP\001Z6google.gol" +
      "ang.org/genproto/googleapis/maps/unity;u" +
      "nity\242\002\003GMU\252\002\021Google.Maps.Unityb\006proto3"
    };
    descriptor = com.google.protobuf.Descriptors.FileDescriptor
      .internalBuildGeneratedFileFrom(descriptorData,
        new com.google.protobuf.Descriptors.FileDescriptor[] {
        });
    internal_static_google_maps_unity_ClientInfo_descriptor =
      getDescriptor().getMessageTypes().get(0);
    internal_static_google_maps_unity_ClientInfo_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_maps_unity_ClientInfo_descriptor,
        new java.lang.String[] { "ApplicationId", "ApplicationVersion", "Platform", "OperatingSystem", "ApiClient", "DeviceModel", "LanguageCode", "OperatingSystemBuild", });
  }

  // @@protoc_insertion_point(outer_class_scope)
}
