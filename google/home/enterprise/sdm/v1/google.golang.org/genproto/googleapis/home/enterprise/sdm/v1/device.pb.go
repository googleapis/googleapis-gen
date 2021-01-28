// Copyright 2020 Google LLC
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//     http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.

// Code generated by protoc-gen-go. DO NOT EDIT.
// versions:
// 	protoc-gen-go v1.25.0
// 	protoc        v3.14.0
// source: google/home/enterprise/sdm/v1/device.proto

package sdm

import (
	proto "github.com/golang/protobuf/proto"
	_ "google.golang.org/genproto/googleapis/api/annotations"
	protoreflect "google.golang.org/protobuf/reflect/protoreflect"
	protoimpl "google.golang.org/protobuf/runtime/protoimpl"
	structpb "google.golang.org/protobuf/types/known/structpb"
	reflect "reflect"
	sync "sync"
)

const (
	// Verify that this generated code is sufficiently up-to-date.
	_ = protoimpl.EnforceVersion(20 - protoimpl.MinVersion)
	// Verify that runtime/protoimpl is sufficiently up-to-date.
	_ = protoimpl.EnforceVersion(protoimpl.MaxVersion - 20)
)

// This is a compile-time assertion that a sufficiently up-to-date version
// of the legacy proto package is being used.
const _ = proto.ProtoPackageIsVersion4

// Device resource represents an instance of enterprise managed device in the
// property.
type Device struct {
	state         protoimpl.MessageState
	sizeCache     protoimpl.SizeCache
	unknownFields protoimpl.UnknownFields

	// Required. The resource name of the device. For example:
	// "enterprises/XYZ/devices/123".
	Name string `protobuf:"bytes,1,opt,name=name,proto3" json:"name,omitempty"`
	// Output only. Type of the device for general display purposes.
	// For example: "THERMOSTAT". The device type should not be used to deduce or
	// infer functionality of the actual device it is assigned to. Instead, use
	// the returned traits for the device.
	Type string `protobuf:"bytes,2,opt,name=type,proto3" json:"type,omitempty"`
	// Output only. Device traits.
	Traits *structpb.Struct `protobuf:"bytes,4,opt,name=traits,proto3" json:"traits,omitempty"`
	// Assignee details of the device.
	ParentRelations []*ParentRelation `protobuf:"bytes,5,rep,name=parent_relations,json=parentRelations,proto3" json:"parent_relations,omitempty"`
}

func (x *Device) Reset() {
	*x = Device{}
	if protoimpl.UnsafeEnabled {
		mi := &file_google_home_enterprise_sdm_v1_device_proto_msgTypes[0]
		ms := protoimpl.X.MessageStateOf(protoimpl.Pointer(x))
		ms.StoreMessageInfo(mi)
	}
}

func (x *Device) String() string {
	return protoimpl.X.MessageStringOf(x)
}

func (*Device) ProtoMessage() {}

func (x *Device) ProtoReflect() protoreflect.Message {
	mi := &file_google_home_enterprise_sdm_v1_device_proto_msgTypes[0]
	if protoimpl.UnsafeEnabled && x != nil {
		ms := protoimpl.X.MessageStateOf(protoimpl.Pointer(x))
		if ms.LoadMessageInfo() == nil {
			ms.StoreMessageInfo(mi)
		}
		return ms
	}
	return mi.MessageOf(x)
}

// Deprecated: Use Device.ProtoReflect.Descriptor instead.
func (*Device) Descriptor() ([]byte, []int) {
	return file_google_home_enterprise_sdm_v1_device_proto_rawDescGZIP(), []int{0}
}

func (x *Device) GetName() string {
	if x != nil {
		return x.Name
	}
	return ""
}

func (x *Device) GetType() string {
	if x != nil {
		return x.Type
	}
	return ""
}

func (x *Device) GetTraits() *structpb.Struct {
	if x != nil {
		return x.Traits
	}
	return nil
}

func (x *Device) GetParentRelations() []*ParentRelation {
	if x != nil {
		return x.ParentRelations
	}
	return nil
}

// Represents device relationships, for instance, structure/room to which the
// device is assigned to. For now this is only filled in the enterprise flow.
type ParentRelation struct {
	state         protoimpl.MessageState
	sizeCache     protoimpl.SizeCache
	unknownFields protoimpl.UnknownFields

	// Output only. The name of the relation -- e.g., structure/room where the
	// device is assigned to. For example: "enterprises/XYZ/structures/ABC" or
	// "enterprises/XYZ/structures/ABC/rooms/123"
	Parent string `protobuf:"bytes,1,opt,name=parent,proto3" json:"parent,omitempty"`
	// Output only. The custom name of the relation -- e.g., structure/room where
	// the device is assigned to.
	DisplayName string `protobuf:"bytes,2,opt,name=display_name,json=displayName,proto3" json:"display_name,omitempty"`
}

func (x *ParentRelation) Reset() {
	*x = ParentRelation{}
	if protoimpl.UnsafeEnabled {
		mi := &file_google_home_enterprise_sdm_v1_device_proto_msgTypes[1]
		ms := protoimpl.X.MessageStateOf(protoimpl.Pointer(x))
		ms.StoreMessageInfo(mi)
	}
}

func (x *ParentRelation) String() string {
	return protoimpl.X.MessageStringOf(x)
}

func (*ParentRelation) ProtoMessage() {}

func (x *ParentRelation) ProtoReflect() protoreflect.Message {
	mi := &file_google_home_enterprise_sdm_v1_device_proto_msgTypes[1]
	if protoimpl.UnsafeEnabled && x != nil {
		ms := protoimpl.X.MessageStateOf(protoimpl.Pointer(x))
		if ms.LoadMessageInfo() == nil {
			ms.StoreMessageInfo(mi)
		}
		return ms
	}
	return mi.MessageOf(x)
}

// Deprecated: Use ParentRelation.ProtoReflect.Descriptor instead.
func (*ParentRelation) Descriptor() ([]byte, []int) {
	return file_google_home_enterprise_sdm_v1_device_proto_rawDescGZIP(), []int{1}
}

func (x *ParentRelation) GetParent() string {
	if x != nil {
		return x.Parent
	}
	return ""
}

func (x *ParentRelation) GetDisplayName() string {
	if x != nil {
		return x.DisplayName
	}
	return ""
}

var File_google_home_enterprise_sdm_v1_device_proto protoreflect.FileDescriptor

var file_google_home_enterprise_sdm_v1_device_proto_rawDesc = []byte{
	0x0a, 0x2a, 0x67, 0x6f, 0x6f, 0x67, 0x6c, 0x65, 0x2f, 0x68, 0x6f, 0x6d, 0x65, 0x2f, 0x65, 0x6e,
	0x74, 0x65, 0x72, 0x70, 0x72, 0x69, 0x73, 0x65, 0x2f, 0x73, 0x64, 0x6d, 0x2f, 0x76, 0x31, 0x2f,
	0x64, 0x65, 0x76, 0x69, 0x63, 0x65, 0x2e, 0x70, 0x72, 0x6f, 0x74, 0x6f, 0x12, 0x1d, 0x67, 0x6f,
	0x6f, 0x67, 0x6c, 0x65, 0x2e, 0x68, 0x6f, 0x6d, 0x65, 0x2e, 0x65, 0x6e, 0x74, 0x65, 0x72, 0x70,
	0x72, 0x69, 0x73, 0x65, 0x2e, 0x73, 0x64, 0x6d, 0x2e, 0x76, 0x31, 0x1a, 0x1f, 0x67, 0x6f, 0x6f,
	0x67, 0x6c, 0x65, 0x2f, 0x61, 0x70, 0x69, 0x2f, 0x66, 0x69, 0x65, 0x6c, 0x64, 0x5f, 0x62, 0x65,
	0x68, 0x61, 0x76, 0x69, 0x6f, 0x72, 0x2e, 0x70, 0x72, 0x6f, 0x74, 0x6f, 0x1a, 0x19, 0x67, 0x6f,
	0x6f, 0x67, 0x6c, 0x65, 0x2f, 0x61, 0x70, 0x69, 0x2f, 0x72, 0x65, 0x73, 0x6f, 0x75, 0x72, 0x63,
	0x65, 0x2e, 0x70, 0x72, 0x6f, 0x74, 0x6f, 0x1a, 0x1c, 0x67, 0x6f, 0x6f, 0x67, 0x6c, 0x65, 0x2f,
	0x70, 0x72, 0x6f, 0x74, 0x6f, 0x62, 0x75, 0x66, 0x2f, 0x73, 0x74, 0x72, 0x75, 0x63, 0x74, 0x2e,
	0x70, 0x72, 0x6f, 0x74, 0x6f, 0x22, 0xa2, 0x02, 0x0a, 0x06, 0x44, 0x65, 0x76, 0x69, 0x63, 0x65,
	0x12, 0x12, 0x0a, 0x04, 0x6e, 0x61, 0x6d, 0x65, 0x18, 0x01, 0x20, 0x01, 0x28, 0x09, 0x52, 0x04,
	0x6e, 0x61, 0x6d, 0x65, 0x12, 0x17, 0x0a, 0x04, 0x74, 0x79, 0x70, 0x65, 0x18, 0x02, 0x20, 0x01,
	0x28, 0x09, 0x42, 0x03, 0xe0, 0x41, 0x03, 0x52, 0x04, 0x74, 0x79, 0x70, 0x65, 0x12, 0x34, 0x0a,
	0x06, 0x74, 0x72, 0x61, 0x69, 0x74, 0x73, 0x18, 0x04, 0x20, 0x01, 0x28, 0x0b, 0x32, 0x17, 0x2e,
	0x67, 0x6f, 0x6f, 0x67, 0x6c, 0x65, 0x2e, 0x70, 0x72, 0x6f, 0x74, 0x6f, 0x62, 0x75, 0x66, 0x2e,
	0x53, 0x74, 0x72, 0x75, 0x63, 0x74, 0x42, 0x03, 0xe0, 0x41, 0x03, 0x52, 0x06, 0x74, 0x72, 0x61,
	0x69, 0x74, 0x73, 0x12, 0x58, 0x0a, 0x10, 0x70, 0x61, 0x72, 0x65, 0x6e, 0x74, 0x5f, 0x72, 0x65,
	0x6c, 0x61, 0x74, 0x69, 0x6f, 0x6e, 0x73, 0x18, 0x05, 0x20, 0x03, 0x28, 0x0b, 0x32, 0x2d, 0x2e,
	0x67, 0x6f, 0x6f, 0x67, 0x6c, 0x65, 0x2e, 0x68, 0x6f, 0x6d, 0x65, 0x2e, 0x65, 0x6e, 0x74, 0x65,
	0x72, 0x70, 0x72, 0x69, 0x73, 0x65, 0x2e, 0x73, 0x64, 0x6d, 0x2e, 0x76, 0x31, 0x2e, 0x50, 0x61,
	0x72, 0x65, 0x6e, 0x74, 0x52, 0x65, 0x6c, 0x61, 0x74, 0x69, 0x6f, 0x6e, 0x52, 0x0f, 0x70, 0x61,
	0x72, 0x65, 0x6e, 0x74, 0x52, 0x65, 0x6c, 0x61, 0x74, 0x69, 0x6f, 0x6e, 0x73, 0x3a, 0x5b, 0xea,
	0x41, 0x58, 0x0a, 0x2b, 0x73, 0x6d, 0x61, 0x72, 0x74, 0x64, 0x65, 0x76, 0x69, 0x63, 0x65, 0x6d,
	0x61, 0x6e, 0x61, 0x67, 0x65, 0x6d, 0x65, 0x6e, 0x74, 0x2e, 0x67, 0x6f, 0x6f, 0x67, 0x6c, 0x65,
	0x61, 0x70, 0x69, 0x73, 0x2e, 0x63, 0x6f, 0x6d, 0x2f, 0x44, 0x65, 0x76, 0x69, 0x63, 0x65, 0x12,
	0x29, 0x65, 0x6e, 0x74, 0x65, 0x72, 0x70, 0x72, 0x69, 0x73, 0x65, 0x73, 0x2f, 0x7b, 0x65, 0x6e,
	0x74, 0x65, 0x72, 0x70, 0x72, 0x69, 0x73, 0x65, 0x7d, 0x2f, 0x64, 0x65, 0x76, 0x69, 0x63, 0x65,
	0x73, 0x2f, 0x7b, 0x64, 0x65, 0x76, 0x69, 0x63, 0x65, 0x7d, 0x22, 0x55, 0x0a, 0x0e, 0x50, 0x61,
	0x72, 0x65, 0x6e, 0x74, 0x52, 0x65, 0x6c, 0x61, 0x74, 0x69, 0x6f, 0x6e, 0x12, 0x1b, 0x0a, 0x06,
	0x70, 0x61, 0x72, 0x65, 0x6e, 0x74, 0x18, 0x01, 0x20, 0x01, 0x28, 0x09, 0x42, 0x03, 0xe0, 0x41,
	0x03, 0x52, 0x06, 0x70, 0x61, 0x72, 0x65, 0x6e, 0x74, 0x12, 0x26, 0x0a, 0x0c, 0x64, 0x69, 0x73,
	0x70, 0x6c, 0x61, 0x79, 0x5f, 0x6e, 0x61, 0x6d, 0x65, 0x18, 0x02, 0x20, 0x01, 0x28, 0x09, 0x42,
	0x03, 0xe0, 0x41, 0x03, 0x52, 0x0b, 0x64, 0x69, 0x73, 0x70, 0x6c, 0x61, 0x79, 0x4e, 0x61, 0x6d,
	0x65, 0x42, 0xb2, 0x01, 0x0a, 0x21, 0x63, 0x6f, 0x6d, 0x2e, 0x67, 0x6f, 0x6f, 0x67, 0x6c, 0x65,
	0x2e, 0x68, 0x6f, 0x6d, 0x65, 0x2e, 0x65, 0x6e, 0x74, 0x65, 0x72, 0x70, 0x72, 0x69, 0x73, 0x65,
	0x2e, 0x73, 0x64, 0x6d, 0x2e, 0x76, 0x31, 0x50, 0x01, 0x5a, 0x40, 0x67, 0x6f, 0x6f, 0x67, 0x6c,
	0x65, 0x2e, 0x67, 0x6f, 0x6c, 0x61, 0x6e, 0x67, 0x2e, 0x6f, 0x72, 0x67, 0x2f, 0x67, 0x65, 0x6e,
	0x70, 0x72, 0x6f, 0x74, 0x6f, 0x2f, 0x67, 0x6f, 0x6f, 0x67, 0x6c, 0x65, 0x61, 0x70, 0x69, 0x73,
	0x2f, 0x68, 0x6f, 0x6d, 0x65, 0x2f, 0x65, 0x6e, 0x74, 0x65, 0x72, 0x70, 0x72, 0x69, 0x73, 0x65,
	0x2f, 0x73, 0x64, 0x6d, 0x2f, 0x76, 0x31, 0x3b, 0x73, 0x64, 0x6d, 0xa2, 0x02, 0x08, 0x47, 0x48,
	0x45, 0x4e, 0x54, 0x53, 0x44, 0x4d, 0xaa, 0x02, 0x1d, 0x47, 0x6f, 0x6f, 0x67, 0x6c, 0x65, 0x2e,
	0x48, 0x6f, 0x6d, 0x65, 0x2e, 0x45, 0x6e, 0x74, 0x65, 0x72, 0x70, 0x72, 0x69, 0x73, 0x65, 0x2e,
	0x53, 0x64, 0x6d, 0x2e, 0x56, 0x31, 0xca, 0x02, 0x1d, 0x47, 0x6f, 0x6f, 0x67, 0x6c, 0x65, 0x5c,
	0x48, 0x6f, 0x6d, 0x65, 0x5c, 0x45, 0x6e, 0x74, 0x65, 0x72, 0x70, 0x72, 0x69, 0x73, 0x65, 0x5c,
	0x53, 0x64, 0x6d, 0x5c, 0x56, 0x31, 0x62, 0x06, 0x70, 0x72, 0x6f, 0x74, 0x6f, 0x33,
}

var (
	file_google_home_enterprise_sdm_v1_device_proto_rawDescOnce sync.Once
	file_google_home_enterprise_sdm_v1_device_proto_rawDescData = file_google_home_enterprise_sdm_v1_device_proto_rawDesc
)

func file_google_home_enterprise_sdm_v1_device_proto_rawDescGZIP() []byte {
	file_google_home_enterprise_sdm_v1_device_proto_rawDescOnce.Do(func() {
		file_google_home_enterprise_sdm_v1_device_proto_rawDescData = protoimpl.X.CompressGZIP(file_google_home_enterprise_sdm_v1_device_proto_rawDescData)
	})
	return file_google_home_enterprise_sdm_v1_device_proto_rawDescData
}

var file_google_home_enterprise_sdm_v1_device_proto_msgTypes = make([]protoimpl.MessageInfo, 2)
var file_google_home_enterprise_sdm_v1_device_proto_goTypes = []interface{}{
	(*Device)(nil),          // 0: google.home.enterprise.sdm.v1.Device
	(*ParentRelation)(nil),  // 1: google.home.enterprise.sdm.v1.ParentRelation
	(*structpb.Struct)(nil), // 2: google.protobuf.Struct
}
var file_google_home_enterprise_sdm_v1_device_proto_depIdxs = []int32{
	2, // 0: google.home.enterprise.sdm.v1.Device.traits:type_name -> google.protobuf.Struct
	1, // 1: google.home.enterprise.sdm.v1.Device.parent_relations:type_name -> google.home.enterprise.sdm.v1.ParentRelation
	2, // [2:2] is the sub-list for method output_type
	2, // [2:2] is the sub-list for method input_type
	2, // [2:2] is the sub-list for extension type_name
	2, // [2:2] is the sub-list for extension extendee
	0, // [0:2] is the sub-list for field type_name
}

func init() { file_google_home_enterprise_sdm_v1_device_proto_init() }
func file_google_home_enterprise_sdm_v1_device_proto_init() {
	if File_google_home_enterprise_sdm_v1_device_proto != nil {
		return
	}
	if !protoimpl.UnsafeEnabled {
		file_google_home_enterprise_sdm_v1_device_proto_msgTypes[0].Exporter = func(v interface{}, i int) interface{} {
			switch v := v.(*Device); i {
			case 0:
				return &v.state
			case 1:
				return &v.sizeCache
			case 2:
				return &v.unknownFields
			default:
				return nil
			}
		}
		file_google_home_enterprise_sdm_v1_device_proto_msgTypes[1].Exporter = func(v interface{}, i int) interface{} {
			switch v := v.(*ParentRelation); i {
			case 0:
				return &v.state
			case 1:
				return &v.sizeCache
			case 2:
				return &v.unknownFields
			default:
				return nil
			}
		}
	}
	type x struct{}
	out := protoimpl.TypeBuilder{
		File: protoimpl.DescBuilder{
			GoPackagePath: reflect.TypeOf(x{}).PkgPath(),
			RawDescriptor: file_google_home_enterprise_sdm_v1_device_proto_rawDesc,
			NumEnums:      0,
			NumMessages:   2,
			NumExtensions: 0,
			NumServices:   0,
		},
		GoTypes:           file_google_home_enterprise_sdm_v1_device_proto_goTypes,
		DependencyIndexes: file_google_home_enterprise_sdm_v1_device_proto_depIdxs,
		MessageInfos:      file_google_home_enterprise_sdm_v1_device_proto_msgTypes,
	}.Build()
	File_google_home_enterprise_sdm_v1_device_proto = out.File
	file_google_home_enterprise_sdm_v1_device_proto_rawDesc = nil
	file_google_home_enterprise_sdm_v1_device_proto_goTypes = nil
	file_google_home_enterprise_sdm_v1_device_proto_depIdxs = nil
}
