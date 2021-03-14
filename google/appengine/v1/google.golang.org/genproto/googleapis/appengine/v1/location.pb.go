// Copyright 2021 Google LLC
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
// 	protoc        v3.15.3
// source: google/appengine/v1/location.proto

package appengine

import (
	proto "github.com/golang/protobuf/proto"
	_ "google.golang.org/genproto/googleapis/api/annotations"
	protoreflect "google.golang.org/protobuf/reflect/protoreflect"
	protoimpl "google.golang.org/protobuf/runtime/protoimpl"
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

// Metadata for the given [google.cloud.location.Location][google.cloud.location.Location].
type LocationMetadata struct {
	state         protoimpl.MessageState
	sizeCache     protoimpl.SizeCache
	unknownFields protoimpl.UnknownFields

	// App Engine standard environment is available in the given location.
	//
	// @OutputOnly
	StandardEnvironmentAvailable bool `protobuf:"varint,2,opt,name=standard_environment_available,json=standardEnvironmentAvailable,proto3" json:"standard_environment_available,omitempty"`
	// App Engine flexible environment is available in the given location.
	//
	// @OutputOnly
	FlexibleEnvironmentAvailable bool `protobuf:"varint,4,opt,name=flexible_environment_available,json=flexibleEnvironmentAvailable,proto3" json:"flexible_environment_available,omitempty"`
	// Output only. [Search API](https://cloud.google.com/appengine/docs/standard/python/search)
	// is available in the given location.
	SearchApiAvailable bool `protobuf:"varint,6,opt,name=search_api_available,json=searchApiAvailable,proto3" json:"search_api_available,omitempty"`
}

func (x *LocationMetadata) Reset() {
	*x = LocationMetadata{}
	if protoimpl.UnsafeEnabled {
		mi := &file_google_appengine_v1_location_proto_msgTypes[0]
		ms := protoimpl.X.MessageStateOf(protoimpl.Pointer(x))
		ms.StoreMessageInfo(mi)
	}
}

func (x *LocationMetadata) String() string {
	return protoimpl.X.MessageStringOf(x)
}

func (*LocationMetadata) ProtoMessage() {}

func (x *LocationMetadata) ProtoReflect() protoreflect.Message {
	mi := &file_google_appengine_v1_location_proto_msgTypes[0]
	if protoimpl.UnsafeEnabled && x != nil {
		ms := protoimpl.X.MessageStateOf(protoimpl.Pointer(x))
		if ms.LoadMessageInfo() == nil {
			ms.StoreMessageInfo(mi)
		}
		return ms
	}
	return mi.MessageOf(x)
}

// Deprecated: Use LocationMetadata.ProtoReflect.Descriptor instead.
func (*LocationMetadata) Descriptor() ([]byte, []int) {
	return file_google_appengine_v1_location_proto_rawDescGZIP(), []int{0}
}

func (x *LocationMetadata) GetStandardEnvironmentAvailable() bool {
	if x != nil {
		return x.StandardEnvironmentAvailable
	}
	return false
}

func (x *LocationMetadata) GetFlexibleEnvironmentAvailable() bool {
	if x != nil {
		return x.FlexibleEnvironmentAvailable
	}
	return false
}

func (x *LocationMetadata) GetSearchApiAvailable() bool {
	if x != nil {
		return x.SearchApiAvailable
	}
	return false
}

var File_google_appengine_v1_location_proto protoreflect.FileDescriptor

var file_google_appengine_v1_location_proto_rawDesc = []byte{
	0x0a, 0x22, 0x67, 0x6f, 0x6f, 0x67, 0x6c, 0x65, 0x2f, 0x61, 0x70, 0x70, 0x65, 0x6e, 0x67, 0x69,
	0x6e, 0x65, 0x2f, 0x76, 0x31, 0x2f, 0x6c, 0x6f, 0x63, 0x61, 0x74, 0x69, 0x6f, 0x6e, 0x2e, 0x70,
	0x72, 0x6f, 0x74, 0x6f, 0x12, 0x13, 0x67, 0x6f, 0x6f, 0x67, 0x6c, 0x65, 0x2e, 0x61, 0x70, 0x70,
	0x65, 0x6e, 0x67, 0x69, 0x6e, 0x65, 0x2e, 0x76, 0x31, 0x1a, 0x1f, 0x67, 0x6f, 0x6f, 0x67, 0x6c,
	0x65, 0x2f, 0x61, 0x70, 0x69, 0x2f, 0x66, 0x69, 0x65, 0x6c, 0x64, 0x5f, 0x62, 0x65, 0x68, 0x61,
	0x76, 0x69, 0x6f, 0x72, 0x2e, 0x70, 0x72, 0x6f, 0x74, 0x6f, 0x1a, 0x1c, 0x67, 0x6f, 0x6f, 0x67,
	0x6c, 0x65, 0x2f, 0x61, 0x70, 0x69, 0x2f, 0x61, 0x6e, 0x6e, 0x6f, 0x74, 0x61, 0x74, 0x69, 0x6f,
	0x6e, 0x73, 0x2e, 0x70, 0x72, 0x6f, 0x74, 0x6f, 0x22, 0xd5, 0x01, 0x0a, 0x10, 0x4c, 0x6f, 0x63,
	0x61, 0x74, 0x69, 0x6f, 0x6e, 0x4d, 0x65, 0x74, 0x61, 0x64, 0x61, 0x74, 0x61, 0x12, 0x44, 0x0a,
	0x1e, 0x73, 0x74, 0x61, 0x6e, 0x64, 0x61, 0x72, 0x64, 0x5f, 0x65, 0x6e, 0x76, 0x69, 0x72, 0x6f,
	0x6e, 0x6d, 0x65, 0x6e, 0x74, 0x5f, 0x61, 0x76, 0x61, 0x69, 0x6c, 0x61, 0x62, 0x6c, 0x65, 0x18,
	0x02, 0x20, 0x01, 0x28, 0x08, 0x52, 0x1c, 0x73, 0x74, 0x61, 0x6e, 0x64, 0x61, 0x72, 0x64, 0x45,
	0x6e, 0x76, 0x69, 0x72, 0x6f, 0x6e, 0x6d, 0x65, 0x6e, 0x74, 0x41, 0x76, 0x61, 0x69, 0x6c, 0x61,
	0x62, 0x6c, 0x65, 0x12, 0x44, 0x0a, 0x1e, 0x66, 0x6c, 0x65, 0x78, 0x69, 0x62, 0x6c, 0x65, 0x5f,
	0x65, 0x6e, 0x76, 0x69, 0x72, 0x6f, 0x6e, 0x6d, 0x65, 0x6e, 0x74, 0x5f, 0x61, 0x76, 0x61, 0x69,
	0x6c, 0x61, 0x62, 0x6c, 0x65, 0x18, 0x04, 0x20, 0x01, 0x28, 0x08, 0x52, 0x1c, 0x66, 0x6c, 0x65,
	0x78, 0x69, 0x62, 0x6c, 0x65, 0x45, 0x6e, 0x76, 0x69, 0x72, 0x6f, 0x6e, 0x6d, 0x65, 0x6e, 0x74,
	0x41, 0x76, 0x61, 0x69, 0x6c, 0x61, 0x62, 0x6c, 0x65, 0x12, 0x35, 0x0a, 0x14, 0x73, 0x65, 0x61,
	0x72, 0x63, 0x68, 0x5f, 0x61, 0x70, 0x69, 0x5f, 0x61, 0x76, 0x61, 0x69, 0x6c, 0x61, 0x62, 0x6c,
	0x65, 0x18, 0x06, 0x20, 0x01, 0x28, 0x08, 0x42, 0x03, 0xe0, 0x41, 0x03, 0x52, 0x12, 0x73, 0x65,
	0x61, 0x72, 0x63, 0x68, 0x41, 0x70, 0x69, 0x41, 0x76, 0x61, 0x69, 0x6c, 0x61, 0x62, 0x6c, 0x65,
	0x42, 0xbf, 0x01, 0x0a, 0x17, 0x63, 0x6f, 0x6d, 0x2e, 0x67, 0x6f, 0x6f, 0x67, 0x6c, 0x65, 0x2e,
	0x61, 0x70, 0x70, 0x65, 0x6e, 0x67, 0x69, 0x6e, 0x65, 0x2e, 0x76, 0x31, 0x42, 0x0d, 0x4c, 0x6f,
	0x63, 0x61, 0x74, 0x69, 0x6f, 0x6e, 0x50, 0x72, 0x6f, 0x74, 0x6f, 0x50, 0x01, 0x5a, 0x3c, 0x67,
	0x6f, 0x6f, 0x67, 0x6c, 0x65, 0x2e, 0x67, 0x6f, 0x6c, 0x61, 0x6e, 0x67, 0x2e, 0x6f, 0x72, 0x67,
	0x2f, 0x67, 0x65, 0x6e, 0x70, 0x72, 0x6f, 0x74, 0x6f, 0x2f, 0x67, 0x6f, 0x6f, 0x67, 0x6c, 0x65,
	0x61, 0x70, 0x69, 0x73, 0x2f, 0x61, 0x70, 0x70, 0x65, 0x6e, 0x67, 0x69, 0x6e, 0x65, 0x2f, 0x76,
	0x31, 0x3b, 0x61, 0x70, 0x70, 0x65, 0x6e, 0x67, 0x69, 0x6e, 0x65, 0xaa, 0x02, 0x19, 0x47, 0x6f,
	0x6f, 0x67, 0x6c, 0x65, 0x2e, 0x43, 0x6c, 0x6f, 0x75, 0x64, 0x2e, 0x41, 0x70, 0x70, 0x45, 0x6e,
	0x67, 0x69, 0x6e, 0x65, 0x2e, 0x56, 0x31, 0xca, 0x02, 0x19, 0x47, 0x6f, 0x6f, 0x67, 0x6c, 0x65,
	0x5c, 0x43, 0x6c, 0x6f, 0x75, 0x64, 0x5c, 0x41, 0x70, 0x70, 0x45, 0x6e, 0x67, 0x69, 0x6e, 0x65,
	0x5c, 0x56, 0x31, 0xea, 0x02, 0x1c, 0x47, 0x6f, 0x6f, 0x67, 0x6c, 0x65, 0x3a, 0x3a, 0x43, 0x6c,
	0x6f, 0x75, 0x64, 0x3a, 0x3a, 0x41, 0x70, 0x70, 0x45, 0x6e, 0x67, 0x69, 0x6e, 0x65, 0x3a, 0x3a,
	0x56, 0x31, 0x62, 0x06, 0x70, 0x72, 0x6f, 0x74, 0x6f, 0x33,
}

var (
	file_google_appengine_v1_location_proto_rawDescOnce sync.Once
	file_google_appengine_v1_location_proto_rawDescData = file_google_appengine_v1_location_proto_rawDesc
)

func file_google_appengine_v1_location_proto_rawDescGZIP() []byte {
	file_google_appengine_v1_location_proto_rawDescOnce.Do(func() {
		file_google_appengine_v1_location_proto_rawDescData = protoimpl.X.CompressGZIP(file_google_appengine_v1_location_proto_rawDescData)
	})
	return file_google_appengine_v1_location_proto_rawDescData
}

var file_google_appengine_v1_location_proto_msgTypes = make([]protoimpl.MessageInfo, 1)
var file_google_appengine_v1_location_proto_goTypes = []interface{}{
	(*LocationMetadata)(nil), // 0: google.appengine.v1.LocationMetadata
}
var file_google_appengine_v1_location_proto_depIdxs = []int32{
	0, // [0:0] is the sub-list for method output_type
	0, // [0:0] is the sub-list for method input_type
	0, // [0:0] is the sub-list for extension type_name
	0, // [0:0] is the sub-list for extension extendee
	0, // [0:0] is the sub-list for field type_name
}

func init() { file_google_appengine_v1_location_proto_init() }
func file_google_appengine_v1_location_proto_init() {
	if File_google_appengine_v1_location_proto != nil {
		return
	}
	if !protoimpl.UnsafeEnabled {
		file_google_appengine_v1_location_proto_msgTypes[0].Exporter = func(v interface{}, i int) interface{} {
			switch v := v.(*LocationMetadata); i {
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
			RawDescriptor: file_google_appengine_v1_location_proto_rawDesc,
			NumEnums:      0,
			NumMessages:   1,
			NumExtensions: 0,
			NumServices:   0,
		},
		GoTypes:           file_google_appengine_v1_location_proto_goTypes,
		DependencyIndexes: file_google_appengine_v1_location_proto_depIdxs,
		MessageInfos:      file_google_appengine_v1_location_proto_msgTypes,
	}.Build()
	File_google_appengine_v1_location_proto = out.File
	file_google_appengine_v1_location_proto_rawDesc = nil
	file_google_appengine_v1_location_proto_goTypes = nil
	file_google_appengine_v1_location_proto_depIdxs = nil
}
