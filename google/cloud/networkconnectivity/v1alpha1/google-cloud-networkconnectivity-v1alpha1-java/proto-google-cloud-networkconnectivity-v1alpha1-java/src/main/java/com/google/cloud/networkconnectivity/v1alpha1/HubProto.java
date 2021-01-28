// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/networkconnectivity/v1alpha1/hub.proto

package com.google.cloud.networkconnectivity.v1alpha1;

public final class HubProto {
  private HubProto() {}
  public static void registerAllExtensions(
      com.google.protobuf.ExtensionRegistryLite registry) {
  }

  public static void registerAllExtensions(
      com.google.protobuf.ExtensionRegistry registry) {
    registerAllExtensions(
        (com.google.protobuf.ExtensionRegistryLite) registry);
  }
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_networkconnectivity_v1alpha1_Hub_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_networkconnectivity_v1alpha1_Hub_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_networkconnectivity_v1alpha1_Hub_LabelsEntry_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_networkconnectivity_v1alpha1_Hub_LabelsEntry_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_networkconnectivity_v1alpha1_Spoke_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_networkconnectivity_v1alpha1_Spoke_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_networkconnectivity_v1alpha1_Spoke_LabelsEntry_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_networkconnectivity_v1alpha1_Spoke_LabelsEntry_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_networkconnectivity_v1alpha1_ListHubsRequest_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_networkconnectivity_v1alpha1_ListHubsRequest_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_networkconnectivity_v1alpha1_ListHubsResponse_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_networkconnectivity_v1alpha1_ListHubsResponse_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_networkconnectivity_v1alpha1_GetHubRequest_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_networkconnectivity_v1alpha1_GetHubRequest_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_networkconnectivity_v1alpha1_CreateHubRequest_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_networkconnectivity_v1alpha1_CreateHubRequest_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_networkconnectivity_v1alpha1_UpdateHubRequest_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_networkconnectivity_v1alpha1_UpdateHubRequest_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_networkconnectivity_v1alpha1_DeleteHubRequest_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_networkconnectivity_v1alpha1_DeleteHubRequest_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_networkconnectivity_v1alpha1_ListSpokesRequest_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_networkconnectivity_v1alpha1_ListSpokesRequest_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_networkconnectivity_v1alpha1_ListSpokesResponse_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_networkconnectivity_v1alpha1_ListSpokesResponse_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_networkconnectivity_v1alpha1_GetSpokeRequest_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_networkconnectivity_v1alpha1_GetSpokeRequest_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_networkconnectivity_v1alpha1_CreateSpokeRequest_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_networkconnectivity_v1alpha1_CreateSpokeRequest_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_networkconnectivity_v1alpha1_UpdateSpokeRequest_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_networkconnectivity_v1alpha1_UpdateSpokeRequest_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_networkconnectivity_v1alpha1_DeleteSpokeRequest_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_networkconnectivity_v1alpha1_DeleteSpokeRequest_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_networkconnectivity_v1alpha1_RouterApplianceInstance_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_networkconnectivity_v1alpha1_RouterApplianceInstance_fieldAccessorTable;

  public static com.google.protobuf.Descriptors.FileDescriptor
      getDescriptor() {
    return descriptor;
  }
  private static  com.google.protobuf.Descriptors.FileDescriptor
      descriptor;
  static {
    java.lang.String[] descriptorData = {
      "\n3google/cloud/networkconnectivity/v1alp" +
      "ha1/hub.proto\022)google.cloud.networkconne" +
      "ctivity.v1alpha1\032\034google/api/annotations" +
      ".proto\032\027google/api/client.proto\032\037google/" +
      "api/field_behavior.proto\032\031google/api/res" +
      "ource.proto\032#google/longrunning/operatio" +
      "ns.proto\032 google/protobuf/field_mask.pro" +
      "to\032\037google/protobuf/timestamp.proto\"\301\003\n\003" +
      "Hub\022\021\n\004name\030\001 \001(\tB\003\340A\005\022/\n\013create_time\030\002 " +
      "\001(\0132\032.google.protobuf.Timestamp\022/\n\013updat" +
      "e_time\030\003 \001(\0132\032.google.protobuf.Timestamp" +
      "\022J\n\006labels\030\004 \003(\0132:.google.cloud.networkc" +
      "onnectivity.v1alpha1.Hub.LabelsEntry\022\023\n\013" +
      "description\030\005 \001(\t\022@\n\006spokes\030\006 \003(\tB0\340A\003\372A" +
      "*\n(networkconnectivity.googleapis.com/Sp" +
      "oke\022\026\n\tunique_id\030\010 \001(\tB\003\340A\003\032-\n\013LabelsEnt" +
      "ry\022\013\n\003key\030\001 \001(\t\022\r\n\005value\030\002 \001(\t:\0028\001:[\352AX\n" +
      "&networkconnectivity.googleapis.com/Hub\022" +
      ".projects/{project}/locations/global/hub" +
      "s/{hub}\"\326\005\n\005Spoke\022\021\n\004name\030\001 \001(\tB\003\340A\005\022/\n\013" +
      "create_time\030\002 \001(\0132\032.google.protobuf.Time" +
      "stamp\022/\n\013update_time\030\003 \001(\0132\032.google.prot" +
      "obuf.Timestamp\022L\n\006labels\030\004 \003(\0132<.google." +
      "cloud.networkconnectivity.v1alpha1.Spoke" +
      ".LabelsEntry\022\023\n\013description\030\005 \001(\t\0228\n\003hub" +
      "\030\006 \001(\tB+\372A(\n&networkconnectivity.googlea" +
      "pis.com/Hub\022A\n\022linked_vpn_tunnels\030\014 \003(\tB" +
      "%\372A\"\n compute.googleapis.com/VpnTunnel\022[" +
      "\n\037linked_interconnect_attachments\030\r \003(\tB" +
      "2\372A/\n-compute.googleapis.com/Interconnec" +
      "tAttachment\022m\n!linked_router_appliance_i" +
      "nstances\030\016 \003(\0132B.google.cloud.networkcon" +
      "nectivity.v1alpha1.RouterApplianceInstan" +
      "ce\022\026\n\tunique_id\030\013 \001(\tB\003\340A\003\032-\n\013LabelsEntr" +
      "y\022\013\n\003key\030\001 \001(\t\022\r\n\005value\030\002 \001(\t:\0028\001:e\352Ab\n(" +
      "networkconnectivity.googleapis.com/Spoke" +
      "\0226projects/{project}/locations/{location" +
      "}/spokes/{spoke}\"\225\001\n\017ListHubsRequest\0229\n\006" +
      "parent\030\001 \001(\tB)\340A\002\372A#\n!locations.googleap" +
      "is.com/Location\022\021\n\tpage_size\030\002 \001(\005\022\022\n\npa" +
      "ge_token\030\003 \001(\t\022\016\n\006filter\030\004 \001(\t\022\020\n\010order_" +
      "by\030\005 \001(\t\"~\n\020ListHubsResponse\022<\n\004hubs\030\001 \003" +
      "(\0132..google.cloud.networkconnectivity.v1" +
      "alpha1.Hub\022\027\n\017next_page_token\030\002 \001(\t\022\023\n\013u" +
      "nreachable\030\003 \003(\t\"M\n\rGetHubRequest\022<\n\004nam" +
      "e\030\001 \001(\tB.\340A\002\372A(\n&networkconnectivity.goo" +
      "gleapis.com/Hub\"\275\001\n\020CreateHubRequest\0229\n\006" +
      "parent\030\001 \001(\tB)\340A\002\372A#\n!locations.googleap" +
      "is.com/Location\022\023\n\006hub_id\030\002 \001(\tB\003\340A\001\022@\n\003" +
      "hub\030\003 \001(\0132..google.cloud.networkconnecti" +
      "vity.v1alpha1.HubB\003\340A\002\022\027\n\nrequest_id\030\004 \001" +
      "(\tB\003\340A\001\"\243\001\n\020UpdateHubRequest\0224\n\013update_m" +
      "ask\030\001 \001(\0132\032.google.protobuf.FieldMaskB\003\340" +
      "A\001\022@\n\003hub\030\002 \001(\0132..google.cloud.networkco" +
      "nnectivity.v1alpha1.HubB\003\340A\002\022\027\n\nrequest_" +
      "id\030\003 \001(\tB\003\340A\001\"i\n\020DeleteHubRequest\022<\n\004nam" +
      "e\030\001 \001(\tB.\340A\002\372A(\n&networkconnectivity.goo" +
      "gleapis.com/Hub\022\027\n\nrequest_id\030\002 \001(\tB\003\340A\001" +
      "\"\227\001\n\021ListSpokesRequest\0229\n\006parent\030\001 \001(\tB)" +
      "\340A\002\372A#\n!locations.googleapis.com/Locatio" +
      "n\022\021\n\tpage_size\030\002 \001(\005\022\022\n\npage_token\030\003 \001(\t" +
      "\022\016\n\006filter\030\004 \001(\t\022\020\n\010order_by\030\005 \001(\t\"\204\001\n\022L" +
      "istSpokesResponse\022@\n\006spokes\030\001 \003(\01320.goog" +
      "le.cloud.networkconnectivity.v1alpha1.Sp" +
      "oke\022\027\n\017next_page_token\030\002 \001(\t\022\023\n\013unreacha" +
      "ble\030\003 \003(\t\"Q\n\017GetSpokeRequest\022>\n\004name\030\001 \001" +
      "(\tB0\340A\002\372A*\n(networkconnectivity.googleap" +
      "is.com/Spoke\"\305\001\n\022CreateSpokeRequest\0229\n\006p" +
      "arent\030\001 \001(\tB)\340A\002\372A#\n!locations.googleapi" +
      "s.com/Location\022\025\n\010spoke_id\030\002 \001(\tB\003\340A\001\022D\n" +
      "\005spoke\030\003 \001(\01320.google.cloud.networkconne" +
      "ctivity.v1alpha1.SpokeB\003\340A\002\022\027\n\nrequest_i" +
      "d\030\004 \001(\tB\003\340A\001\"\251\001\n\022UpdateSpokeRequest\0224\n\013u" +
      "pdate_mask\030\001 \001(\0132\032.google.protobuf.Field" +
      "MaskB\003\340A\001\022D\n\005spoke\030\002 \001(\01320.google.cloud." +
      "networkconnectivity.v1alpha1.SpokeB\003\340A\002\022" +
      "\027\n\nrequest_id\030\003 \001(\tB\003\340A\001\"m\n\022DeleteSpokeR" +
      "equest\022>\n\004name\030\001 \001(\tB0\340A\002\372A*\n(networkcon" +
      "nectivity.googleapis.com/Spoke\022\027\n\nreques" +
      "t_id\030\002 \001(\tB\003\340A\001\"\213\001\n\027RouterApplianceInsta" +
      "nce\022=\n\017virtual_machine\030\001 \001(\tB$\372A!\n\037compu" +
      "te.googleapis.com/Instance\022\022\n\nip_address" +
      "\030\003 \001(\t\022\035\n\021network_interface\030\002 \001(\tB\002\030\0012\255\021" +
      "\n\nHubService\022\311\001\n\010ListHubs\022:.google.cloud" +
      ".networkconnectivity.v1alpha1.ListHubsRe" +
      "quest\032;.google.cloud.networkconnectivity" +
      ".v1alpha1.ListHubsResponse\"D\202\323\344\223\0025\0223/v1a" +
      "lpha1/{parent=projects/*/locations/globa" +
      "l}/hubs\332A\006parent\022\266\001\n\006GetHub\0228.google.clo" +
      "ud.networkconnectivity.v1alpha1.GetHubRe" +
      "quest\032..google.cloud.networkconnectivity" +
      ".v1alpha1.Hub\"B\202\323\344\223\0025\0223/v1alpha1/{name=p" +
      "rojects/*/locations/global/hubs/*}\332A\004nam" +
      "e\022\330\001\n\tCreateHub\022;.google.cloud.networkco" +
      "nnectivity.v1alpha1.CreateHubRequest\032\035.g" +
      "oogle.longrunning.Operation\"o\202\323\344\223\002:\"3/v1" +
      "alpha1/{parent=projects/*/locations/glob" +
      "al}/hubs:\003hub\332A\021parent,hub,hub_id\312A\030\n\003Hu" +
      "b\022\021OperationMetadata\022\332\001\n\tUpdateHub\022;.goo" +
      "gle.cloud.networkconnectivity.v1alpha1.U" +
      "pdateHubRequest\032\035.google.longrunning.Ope" +
      "ration\"q\202\323\344\223\002>27/v1alpha1/{hub.name=proj" +
      "ects/*/locations/global/hubs/*}:\003hub\332A\017h" +
      "ub,update_mask\312A\030\n\003Hub\022\021OperationMetadat" +
      "a\022\330\001\n\tDeleteHub\022;.google.cloud.networkco" +
      "nnectivity.v1alpha1.DeleteHubRequest\032\035.g" +
      "oogle.longrunning.Operation\"o\202\323\344\223\0025*3/v1" +
      "alpha1/{name=projects/*/locations/global" +
      "/hubs/*}\332A\004name\312A*\n\025google.protobuf.Empt" +
      "y\022\021OperationMetadata\022\314\001\n\nListSpokes\022<.go" +
      "ogle.cloud.networkconnectivity.v1alpha1." +
      "ListSpokesRequest\032=.google.cloud.network" +
      "connectivity.v1alpha1.ListSpokesResponse" +
      "\"A\202\323\344\223\0022\0220/v1alpha1/{parent=projects/*/l" +
      "ocations/*}/spokes\332A\006parent\022\271\001\n\010GetSpoke" +
      "\022:.google.cloud.networkconnectivity.v1al" +
      "pha1.GetSpokeRequest\0320.google.cloud.netw" +
      "orkconnectivity.v1alpha1.Spoke\"?\202\323\344\223\0022\0220" +
      "/v1alpha1/{name=projects/*/locations/*/s" +
      "pokes/*}\332A\004name\022\341\001\n\013CreateSpoke\022=.google" +
      ".cloud.networkconnectivity.v1alpha1.Crea" +
      "teSpokeRequest\032\035.google.longrunning.Oper" +
      "ation\"t\202\323\344\223\0029\"0/v1alpha1/{parent=project" +
      "s/*/locations/*}/spokes:\005spoke\332A\025parent," +
      "spoke,spoke_id\312A\032\n\005Spoke\022\021OperationMetad" +
      "ata\022\343\001\n\013UpdateSpoke\022=.google.cloud.netwo" +
      "rkconnectivity.v1alpha1.UpdateSpokeReque" +
      "st\032\035.google.longrunning.Operation\"v\202\323\344\223\002" +
      "?26/v1alpha1/{spoke.name=projects/*/loca" +
      "tions/*/spokes/*}:\005spoke\332A\021spoke,update_" +
      "mask\312A\032\n\005Spoke\022\021OperationMetadata\022\331\001\n\013De" +
      "leteSpoke\022=.google.cloud.networkconnecti" +
      "vity.v1alpha1.DeleteSpokeRequest\032\035.googl" +
      "e.longrunning.Operation\"l\202\323\344\223\0022*0/v1alph" +
      "a1/{name=projects/*/locations/*/spokes/*" +
      "}\332A\004name\312A*\n\025google.protobuf.Empty\022\021Oper" +
      "ationMetadata\032V\312A\"networkconnectivity.go" +
      "ogleapis.com\322A.https://www.googleapis.co" +
      "m/auth/cloud-platformB\332\004\n-com.google.clo" +
      "ud.networkconnectivity.v1alpha1B\010HubProt" +
      "oP\001Z\\google.golang.org/genproto/googleap" +
      "is/cloud/networkconnectivity/v1alpha1;ne" +
      "tworkconnectivity\252\002)Google.Cloud.Network" +
      "Connectivity.V1Alpha1\312\002)Google\\Cloud\\Net" +
      "workConnectivity\\V1alpha1\352\002,Google::Clou" +
      "d::NetworkConnectivity::V1alpha1\352A`\n com" +
      "pute.googleapis.com/VpnTunnel\022<projects/" +
      "{project}/regions/{region}/vpnTunnels/{r" +
      "esource_id}\352Az\n-compute.googleapis.com/I" +
      "nterconnectAttachment\022Iprojects/{project" +
      "}/regions/{region}/interconnectAttachmen" +
      "ts/{resource_id}\352AW\n\037compute.googleapis." +
      "com/Instance\0224projects/{project}/zones/{" +
      "zone}/instances/{instance}b\006proto3"
    };
    descriptor = com.google.protobuf.Descriptors.FileDescriptor
      .internalBuildGeneratedFileFrom(descriptorData,
        new com.google.protobuf.Descriptors.FileDescriptor[] {
          com.google.api.AnnotationsProto.getDescriptor(),
          com.google.api.ClientProto.getDescriptor(),
          com.google.api.FieldBehaviorProto.getDescriptor(),
          com.google.api.ResourceProto.getDescriptor(),
          com.google.longrunning.OperationsProto.getDescriptor(),
          com.google.protobuf.FieldMaskProto.getDescriptor(),
          com.google.protobuf.TimestampProto.getDescriptor(),
        });
    internal_static_google_cloud_networkconnectivity_v1alpha1_Hub_descriptor =
      getDescriptor().getMessageTypes().get(0);
    internal_static_google_cloud_networkconnectivity_v1alpha1_Hub_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_networkconnectivity_v1alpha1_Hub_descriptor,
        new java.lang.String[] { "Name", "CreateTime", "UpdateTime", "Labels", "Description", "Spokes", "UniqueId", });
    internal_static_google_cloud_networkconnectivity_v1alpha1_Hub_LabelsEntry_descriptor =
      internal_static_google_cloud_networkconnectivity_v1alpha1_Hub_descriptor.getNestedTypes().get(0);
    internal_static_google_cloud_networkconnectivity_v1alpha1_Hub_LabelsEntry_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_networkconnectivity_v1alpha1_Hub_LabelsEntry_descriptor,
        new java.lang.String[] { "Key", "Value", });
    internal_static_google_cloud_networkconnectivity_v1alpha1_Spoke_descriptor =
      getDescriptor().getMessageTypes().get(1);
    internal_static_google_cloud_networkconnectivity_v1alpha1_Spoke_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_networkconnectivity_v1alpha1_Spoke_descriptor,
        new java.lang.String[] { "Name", "CreateTime", "UpdateTime", "Labels", "Description", "Hub", "LinkedVpnTunnels", "LinkedInterconnectAttachments", "LinkedRouterApplianceInstances", "UniqueId", });
    internal_static_google_cloud_networkconnectivity_v1alpha1_Spoke_LabelsEntry_descriptor =
      internal_static_google_cloud_networkconnectivity_v1alpha1_Spoke_descriptor.getNestedTypes().get(0);
    internal_static_google_cloud_networkconnectivity_v1alpha1_Spoke_LabelsEntry_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_networkconnectivity_v1alpha1_Spoke_LabelsEntry_descriptor,
        new java.lang.String[] { "Key", "Value", });
    internal_static_google_cloud_networkconnectivity_v1alpha1_ListHubsRequest_descriptor =
      getDescriptor().getMessageTypes().get(2);
    internal_static_google_cloud_networkconnectivity_v1alpha1_ListHubsRequest_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_networkconnectivity_v1alpha1_ListHubsRequest_descriptor,
        new java.lang.String[] { "Parent", "PageSize", "PageToken", "Filter", "OrderBy", });
    internal_static_google_cloud_networkconnectivity_v1alpha1_ListHubsResponse_descriptor =
      getDescriptor().getMessageTypes().get(3);
    internal_static_google_cloud_networkconnectivity_v1alpha1_ListHubsResponse_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_networkconnectivity_v1alpha1_ListHubsResponse_descriptor,
        new java.lang.String[] { "Hubs", "NextPageToken", "Unreachable", });
    internal_static_google_cloud_networkconnectivity_v1alpha1_GetHubRequest_descriptor =
      getDescriptor().getMessageTypes().get(4);
    internal_static_google_cloud_networkconnectivity_v1alpha1_GetHubRequest_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_networkconnectivity_v1alpha1_GetHubRequest_descriptor,
        new java.lang.String[] { "Name", });
    internal_static_google_cloud_networkconnectivity_v1alpha1_CreateHubRequest_descriptor =
      getDescriptor().getMessageTypes().get(5);
    internal_static_google_cloud_networkconnectivity_v1alpha1_CreateHubRequest_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_networkconnectivity_v1alpha1_CreateHubRequest_descriptor,
        new java.lang.String[] { "Parent", "HubId", "Hub", "RequestId", });
    internal_static_google_cloud_networkconnectivity_v1alpha1_UpdateHubRequest_descriptor =
      getDescriptor().getMessageTypes().get(6);
    internal_static_google_cloud_networkconnectivity_v1alpha1_UpdateHubRequest_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_networkconnectivity_v1alpha1_UpdateHubRequest_descriptor,
        new java.lang.String[] { "UpdateMask", "Hub", "RequestId", });
    internal_static_google_cloud_networkconnectivity_v1alpha1_DeleteHubRequest_descriptor =
      getDescriptor().getMessageTypes().get(7);
    internal_static_google_cloud_networkconnectivity_v1alpha1_DeleteHubRequest_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_networkconnectivity_v1alpha1_DeleteHubRequest_descriptor,
        new java.lang.String[] { "Name", "RequestId", });
    internal_static_google_cloud_networkconnectivity_v1alpha1_ListSpokesRequest_descriptor =
      getDescriptor().getMessageTypes().get(8);
    internal_static_google_cloud_networkconnectivity_v1alpha1_ListSpokesRequest_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_networkconnectivity_v1alpha1_ListSpokesRequest_descriptor,
        new java.lang.String[] { "Parent", "PageSize", "PageToken", "Filter", "OrderBy", });
    internal_static_google_cloud_networkconnectivity_v1alpha1_ListSpokesResponse_descriptor =
      getDescriptor().getMessageTypes().get(9);
    internal_static_google_cloud_networkconnectivity_v1alpha1_ListSpokesResponse_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_networkconnectivity_v1alpha1_ListSpokesResponse_descriptor,
        new java.lang.String[] { "Spokes", "NextPageToken", "Unreachable", });
    internal_static_google_cloud_networkconnectivity_v1alpha1_GetSpokeRequest_descriptor =
      getDescriptor().getMessageTypes().get(10);
    internal_static_google_cloud_networkconnectivity_v1alpha1_GetSpokeRequest_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_networkconnectivity_v1alpha1_GetSpokeRequest_descriptor,
        new java.lang.String[] { "Name", });
    internal_static_google_cloud_networkconnectivity_v1alpha1_CreateSpokeRequest_descriptor =
      getDescriptor().getMessageTypes().get(11);
    internal_static_google_cloud_networkconnectivity_v1alpha1_CreateSpokeRequest_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_networkconnectivity_v1alpha1_CreateSpokeRequest_descriptor,
        new java.lang.String[] { "Parent", "SpokeId", "Spoke", "RequestId", });
    internal_static_google_cloud_networkconnectivity_v1alpha1_UpdateSpokeRequest_descriptor =
      getDescriptor().getMessageTypes().get(12);
    internal_static_google_cloud_networkconnectivity_v1alpha1_UpdateSpokeRequest_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_networkconnectivity_v1alpha1_UpdateSpokeRequest_descriptor,
        new java.lang.String[] { "UpdateMask", "Spoke", "RequestId", });
    internal_static_google_cloud_networkconnectivity_v1alpha1_DeleteSpokeRequest_descriptor =
      getDescriptor().getMessageTypes().get(13);
    internal_static_google_cloud_networkconnectivity_v1alpha1_DeleteSpokeRequest_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_networkconnectivity_v1alpha1_DeleteSpokeRequest_descriptor,
        new java.lang.String[] { "Name", "RequestId", });
    internal_static_google_cloud_networkconnectivity_v1alpha1_RouterApplianceInstance_descriptor =
      getDescriptor().getMessageTypes().get(14);
    internal_static_google_cloud_networkconnectivity_v1alpha1_RouterApplianceInstance_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_networkconnectivity_v1alpha1_RouterApplianceInstance_descriptor,
        new java.lang.String[] { "VirtualMachine", "IpAddress", "NetworkInterface", });
    com.google.protobuf.ExtensionRegistry registry =
        com.google.protobuf.ExtensionRegistry.newInstance();
    registry.add(com.google.api.ClientProto.defaultHost);
    registry.add(com.google.api.FieldBehaviorProto.fieldBehavior);
    registry.add(com.google.api.AnnotationsProto.http);
    registry.add(com.google.api.ClientProto.methodSignature);
    registry.add(com.google.api.ClientProto.oauthScopes);
    registry.add(com.google.api.ResourceProto.resource);
    registry.add(com.google.api.ResourceProto.resourceDefinition);
    registry.add(com.google.api.ResourceProto.resourceReference);
    registry.add(com.google.longrunning.OperationsProto.operationInfo);
    com.google.protobuf.Descriptors.FileDescriptor
        .internalUpdateFileDescriptor(descriptor, registry);
    com.google.api.AnnotationsProto.getDescriptor();
    com.google.api.ClientProto.getDescriptor();
    com.google.api.FieldBehaviorProto.getDescriptor();
    com.google.api.ResourceProto.getDescriptor();
    com.google.longrunning.OperationsProto.getDescriptor();
    com.google.protobuf.FieldMaskProto.getDescriptor();
    com.google.protobuf.TimestampProto.getDescriptor();
  }

  // @@protoc_insertion_point(outer_class_scope)
}
