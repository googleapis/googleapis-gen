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
// source: google/cloud/datacatalog/v1/search.proto

package datacatalog

import (
	proto "github.com/golang/protobuf/proto"
	_ "google.golang.org/genproto/googleapis/api/annotations"
	protoreflect "google.golang.org/protobuf/reflect/protoreflect"
	protoimpl "google.golang.org/protobuf/runtime/protoimpl"
	_ "google.golang.org/protobuf/types/known/timestamppb"
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

// The different types of resources that can be returned in search.
type SearchResultType int32

const (
	// Default unknown type.
	SearchResultType_SEARCH_RESULT_TYPE_UNSPECIFIED SearchResultType = 0
	// An [Entry][google.cloud.datacatalog.v1.Entry].
	SearchResultType_ENTRY SearchResultType = 1
	// A [TagTemplate][google.cloud.datacatalog.v1.TagTemplate].
	SearchResultType_TAG_TEMPLATE SearchResultType = 2
	// An [EntryGroup][google.cloud.datacatalog.v1.EntryGroup].
	SearchResultType_ENTRY_GROUP SearchResultType = 3
)

// Enum value maps for SearchResultType.
var (
	SearchResultType_name = map[int32]string{
		0: "SEARCH_RESULT_TYPE_UNSPECIFIED",
		1: "ENTRY",
		2: "TAG_TEMPLATE",
		3: "ENTRY_GROUP",
	}
	SearchResultType_value = map[string]int32{
		"SEARCH_RESULT_TYPE_UNSPECIFIED": 0,
		"ENTRY":                          1,
		"TAG_TEMPLATE":                   2,
		"ENTRY_GROUP":                    3,
	}
)

func (x SearchResultType) Enum() *SearchResultType {
	p := new(SearchResultType)
	*p = x
	return p
}

func (x SearchResultType) String() string {
	return protoimpl.X.EnumStringOf(x.Descriptor(), protoreflect.EnumNumber(x))
}

func (SearchResultType) Descriptor() protoreflect.EnumDescriptor {
	return file_google_cloud_datacatalog_v1_search_proto_enumTypes[0].Descriptor()
}

func (SearchResultType) Type() protoreflect.EnumType {
	return &file_google_cloud_datacatalog_v1_search_proto_enumTypes[0]
}

func (x SearchResultType) Number() protoreflect.EnumNumber {
	return protoreflect.EnumNumber(x)
}

// Deprecated: Use SearchResultType.Descriptor instead.
func (SearchResultType) EnumDescriptor() ([]byte, []int) {
	return file_google_cloud_datacatalog_v1_search_proto_rawDescGZIP(), []int{0}
}

// A result that appears in the response of a search request. Each result
// captures details of one entry that matches the search.
type SearchCatalogResult struct {
	state         protoimpl.MessageState
	sizeCache     protoimpl.SizeCache
	unknownFields protoimpl.UnknownFields

	// Type of the search result. This field can be used to determine which Get
	// method to call to fetch the full resource.
	SearchResultType SearchResultType `protobuf:"varint,1,opt,name=search_result_type,json=searchResultType,proto3,enum=google.cloud.datacatalog.v1.SearchResultType" json:"search_result_type,omitempty"`
	// Sub-type of the search result. This is a dot-delimited description of the
	// resource's full type, and is the same as the value callers would provide in
	// the "type" search facet.  Examples: `entry.table`, `entry.dataStream`,
	// `tagTemplate`.
	SearchResultSubtype string `protobuf:"bytes,2,opt,name=search_result_subtype,json=searchResultSubtype,proto3" json:"search_result_subtype,omitempty"`
	// The relative resource name of the resource in URL format.
	// Examples:
	//
	//  * `projects/{project_id}/locations/{location_id}/entryGroups/{entry_group_id}/entries/{entry_id}`
	//  * `projects/{project_id}/tagTemplates/{tag_template_id}`
	RelativeResourceName string `protobuf:"bytes,3,opt,name=relative_resource_name,json=relativeResourceName,proto3" json:"relative_resource_name,omitempty"`
	// The full name of the cloud resource the entry belongs to. See:
	// https://cloud.google.com/apis/design/resource_names#full_resource_name.
	// Example:
	//
	//  * `//bigquery.googleapis.com/projects/projectId/datasets/datasetId/tables/tableId`
	LinkedResource string `protobuf:"bytes,4,opt,name=linked_resource,json=linkedResource,proto3" json:"linked_resource,omitempty"`
	// The source system of the entry. Only applicable when `search_result_type`
	// is ENTRY.
	//
	// Types that are assignable to System:
	//	*SearchCatalogResult_IntegratedSystem
	//	*SearchCatalogResult_UserSpecifiedSystem
	System isSearchCatalogResult_System `protobuf_oneof:"system"`
}

func (x *SearchCatalogResult) Reset() {
	*x = SearchCatalogResult{}
	if protoimpl.UnsafeEnabled {
		mi := &file_google_cloud_datacatalog_v1_search_proto_msgTypes[0]
		ms := protoimpl.X.MessageStateOf(protoimpl.Pointer(x))
		ms.StoreMessageInfo(mi)
	}
}

func (x *SearchCatalogResult) String() string {
	return protoimpl.X.MessageStringOf(x)
}

func (*SearchCatalogResult) ProtoMessage() {}

func (x *SearchCatalogResult) ProtoReflect() protoreflect.Message {
	mi := &file_google_cloud_datacatalog_v1_search_proto_msgTypes[0]
	if protoimpl.UnsafeEnabled && x != nil {
		ms := protoimpl.X.MessageStateOf(protoimpl.Pointer(x))
		if ms.LoadMessageInfo() == nil {
			ms.StoreMessageInfo(mi)
		}
		return ms
	}
	return mi.MessageOf(x)
}

// Deprecated: Use SearchCatalogResult.ProtoReflect.Descriptor instead.
func (*SearchCatalogResult) Descriptor() ([]byte, []int) {
	return file_google_cloud_datacatalog_v1_search_proto_rawDescGZIP(), []int{0}
}

func (x *SearchCatalogResult) GetSearchResultType() SearchResultType {
	if x != nil {
		return x.SearchResultType
	}
	return SearchResultType_SEARCH_RESULT_TYPE_UNSPECIFIED
}

func (x *SearchCatalogResult) GetSearchResultSubtype() string {
	if x != nil {
		return x.SearchResultSubtype
	}
	return ""
}

func (x *SearchCatalogResult) GetRelativeResourceName() string {
	if x != nil {
		return x.RelativeResourceName
	}
	return ""
}

func (x *SearchCatalogResult) GetLinkedResource() string {
	if x != nil {
		return x.LinkedResource
	}
	return ""
}

func (m *SearchCatalogResult) GetSystem() isSearchCatalogResult_System {
	if m != nil {
		return m.System
	}
	return nil
}

func (x *SearchCatalogResult) GetIntegratedSystem() IntegratedSystem {
	if x, ok := x.GetSystem().(*SearchCatalogResult_IntegratedSystem); ok {
		return x.IntegratedSystem
	}
	return IntegratedSystem_INTEGRATED_SYSTEM_UNSPECIFIED
}

func (x *SearchCatalogResult) GetUserSpecifiedSystem() string {
	if x, ok := x.GetSystem().(*SearchCatalogResult_UserSpecifiedSystem); ok {
		return x.UserSpecifiedSystem
	}
	return ""
}

type isSearchCatalogResult_System interface {
	isSearchCatalogResult_System()
}

type SearchCatalogResult_IntegratedSystem struct {
	// Output only. This field indicates the entry's source system that Data Catalog
	// integrates with, such as BigQuery or Cloud Pub/Sub.
	IntegratedSystem IntegratedSystem `protobuf:"varint,8,opt,name=integrated_system,json=integratedSystem,proto3,enum=google.cloud.datacatalog.v1.IntegratedSystem,oneof"`
}

type SearchCatalogResult_UserSpecifiedSystem struct {
	// This field indicates the entry's source system that Data Catalog does not
	// integrate with.
	UserSpecifiedSystem string `protobuf:"bytes,9,opt,name=user_specified_system,json=userSpecifiedSystem,proto3,oneof"`
}

func (*SearchCatalogResult_IntegratedSystem) isSearchCatalogResult_System() {}

func (*SearchCatalogResult_UserSpecifiedSystem) isSearchCatalogResult_System() {}

var File_google_cloud_datacatalog_v1_search_proto protoreflect.FileDescriptor

var file_google_cloud_datacatalog_v1_search_proto_rawDesc = []byte{
	0x0a, 0x28, 0x67, 0x6f, 0x6f, 0x67, 0x6c, 0x65, 0x2f, 0x63, 0x6c, 0x6f, 0x75, 0x64, 0x2f, 0x64,
	0x61, 0x74, 0x61, 0x63, 0x61, 0x74, 0x61, 0x6c, 0x6f, 0x67, 0x2f, 0x76, 0x31, 0x2f, 0x73, 0x65,
	0x61, 0x72, 0x63, 0x68, 0x2e, 0x70, 0x72, 0x6f, 0x74, 0x6f, 0x12, 0x1b, 0x67, 0x6f, 0x6f, 0x67,
	0x6c, 0x65, 0x2e, 0x63, 0x6c, 0x6f, 0x75, 0x64, 0x2e, 0x64, 0x61, 0x74, 0x61, 0x63, 0x61, 0x74,
	0x61, 0x6c, 0x6f, 0x67, 0x2e, 0x76, 0x31, 0x1a, 0x1f, 0x67, 0x6f, 0x6f, 0x67, 0x6c, 0x65, 0x2f,
	0x61, 0x70, 0x69, 0x2f, 0x66, 0x69, 0x65, 0x6c, 0x64, 0x5f, 0x62, 0x65, 0x68, 0x61, 0x76, 0x69,
	0x6f, 0x72, 0x2e, 0x70, 0x72, 0x6f, 0x74, 0x6f, 0x1a, 0x28, 0x67, 0x6f, 0x6f, 0x67, 0x6c, 0x65,
	0x2f, 0x63, 0x6c, 0x6f, 0x75, 0x64, 0x2f, 0x64, 0x61, 0x74, 0x61, 0x63, 0x61, 0x74, 0x61, 0x6c,
	0x6f, 0x67, 0x2f, 0x76, 0x31, 0x2f, 0x63, 0x6f, 0x6d, 0x6d, 0x6f, 0x6e, 0x2e, 0x70, 0x72, 0x6f,
	0x74, 0x6f, 0x1a, 0x1f, 0x67, 0x6f, 0x6f, 0x67, 0x6c, 0x65, 0x2f, 0x70, 0x72, 0x6f, 0x74, 0x6f,
	0x62, 0x75, 0x66, 0x2f, 0x74, 0x69, 0x6d, 0x65, 0x73, 0x74, 0x61, 0x6d, 0x70, 0x2e, 0x70, 0x72,
	0x6f, 0x74, 0x6f, 0x22, 0xa8, 0x03, 0x0a, 0x13, 0x53, 0x65, 0x61, 0x72, 0x63, 0x68, 0x43, 0x61,
	0x74, 0x61, 0x6c, 0x6f, 0x67, 0x52, 0x65, 0x73, 0x75, 0x6c, 0x74, 0x12, 0x5b, 0x0a, 0x12, 0x73,
	0x65, 0x61, 0x72, 0x63, 0x68, 0x5f, 0x72, 0x65, 0x73, 0x75, 0x6c, 0x74, 0x5f, 0x74, 0x79, 0x70,
	0x65, 0x18, 0x01, 0x20, 0x01, 0x28, 0x0e, 0x32, 0x2d, 0x2e, 0x67, 0x6f, 0x6f, 0x67, 0x6c, 0x65,
	0x2e, 0x63, 0x6c, 0x6f, 0x75, 0x64, 0x2e, 0x64, 0x61, 0x74, 0x61, 0x63, 0x61, 0x74, 0x61, 0x6c,
	0x6f, 0x67, 0x2e, 0x76, 0x31, 0x2e, 0x53, 0x65, 0x61, 0x72, 0x63, 0x68, 0x52, 0x65, 0x73, 0x75,
	0x6c, 0x74, 0x54, 0x79, 0x70, 0x65, 0x52, 0x10, 0x73, 0x65, 0x61, 0x72, 0x63, 0x68, 0x52, 0x65,
	0x73, 0x75, 0x6c, 0x74, 0x54, 0x79, 0x70, 0x65, 0x12, 0x32, 0x0a, 0x15, 0x73, 0x65, 0x61, 0x72,
	0x63, 0x68, 0x5f, 0x72, 0x65, 0x73, 0x75, 0x6c, 0x74, 0x5f, 0x73, 0x75, 0x62, 0x74, 0x79, 0x70,
	0x65, 0x18, 0x02, 0x20, 0x01, 0x28, 0x09, 0x52, 0x13, 0x73, 0x65, 0x61, 0x72, 0x63, 0x68, 0x52,
	0x65, 0x73, 0x75, 0x6c, 0x74, 0x53, 0x75, 0x62, 0x74, 0x79, 0x70, 0x65, 0x12, 0x34, 0x0a, 0x16,
	0x72, 0x65, 0x6c, 0x61, 0x74, 0x69, 0x76, 0x65, 0x5f, 0x72, 0x65, 0x73, 0x6f, 0x75, 0x72, 0x63,
	0x65, 0x5f, 0x6e, 0x61, 0x6d, 0x65, 0x18, 0x03, 0x20, 0x01, 0x28, 0x09, 0x52, 0x14, 0x72, 0x65,
	0x6c, 0x61, 0x74, 0x69, 0x76, 0x65, 0x52, 0x65, 0x73, 0x6f, 0x75, 0x72, 0x63, 0x65, 0x4e, 0x61,
	0x6d, 0x65, 0x12, 0x27, 0x0a, 0x0f, 0x6c, 0x69, 0x6e, 0x6b, 0x65, 0x64, 0x5f, 0x72, 0x65, 0x73,
	0x6f, 0x75, 0x72, 0x63, 0x65, 0x18, 0x04, 0x20, 0x01, 0x28, 0x09, 0x52, 0x0e, 0x6c, 0x69, 0x6e,
	0x6b, 0x65, 0x64, 0x52, 0x65, 0x73, 0x6f, 0x75, 0x72, 0x63, 0x65, 0x12, 0x61, 0x0a, 0x11, 0x69,
	0x6e, 0x74, 0x65, 0x67, 0x72, 0x61, 0x74, 0x65, 0x64, 0x5f, 0x73, 0x79, 0x73, 0x74, 0x65, 0x6d,
	0x18, 0x08, 0x20, 0x01, 0x28, 0x0e, 0x32, 0x2d, 0x2e, 0x67, 0x6f, 0x6f, 0x67, 0x6c, 0x65, 0x2e,
	0x63, 0x6c, 0x6f, 0x75, 0x64, 0x2e, 0x64, 0x61, 0x74, 0x61, 0x63, 0x61, 0x74, 0x61, 0x6c, 0x6f,
	0x67, 0x2e, 0x76, 0x31, 0x2e, 0x49, 0x6e, 0x74, 0x65, 0x67, 0x72, 0x61, 0x74, 0x65, 0x64, 0x53,
	0x79, 0x73, 0x74, 0x65, 0x6d, 0x42, 0x03, 0xe0, 0x41, 0x03, 0x48, 0x00, 0x52, 0x10, 0x69, 0x6e,
	0x74, 0x65, 0x67, 0x72, 0x61, 0x74, 0x65, 0x64, 0x53, 0x79, 0x73, 0x74, 0x65, 0x6d, 0x12, 0x34,
	0x0a, 0x15, 0x75, 0x73, 0x65, 0x72, 0x5f, 0x73, 0x70, 0x65, 0x63, 0x69, 0x66, 0x69, 0x65, 0x64,
	0x5f, 0x73, 0x79, 0x73, 0x74, 0x65, 0x6d, 0x18, 0x09, 0x20, 0x01, 0x28, 0x09, 0x48, 0x00, 0x52,
	0x13, 0x75, 0x73, 0x65, 0x72, 0x53, 0x70, 0x65, 0x63, 0x69, 0x66, 0x69, 0x65, 0x64, 0x53, 0x79,
	0x73, 0x74, 0x65, 0x6d, 0x42, 0x08, 0x0a, 0x06, 0x73, 0x79, 0x73, 0x74, 0x65, 0x6d, 0x2a, 0x64,
	0x0a, 0x10, 0x53, 0x65, 0x61, 0x72, 0x63, 0x68, 0x52, 0x65, 0x73, 0x75, 0x6c, 0x74, 0x54, 0x79,
	0x70, 0x65, 0x12, 0x22, 0x0a, 0x1e, 0x53, 0x45, 0x41, 0x52, 0x43, 0x48, 0x5f, 0x52, 0x45, 0x53,
	0x55, 0x4c, 0x54, 0x5f, 0x54, 0x59, 0x50, 0x45, 0x5f, 0x55, 0x4e, 0x53, 0x50, 0x45, 0x43, 0x49,
	0x46, 0x49, 0x45, 0x44, 0x10, 0x00, 0x12, 0x09, 0x0a, 0x05, 0x45, 0x4e, 0x54, 0x52, 0x59, 0x10,
	0x01, 0x12, 0x10, 0x0a, 0x0c, 0x54, 0x41, 0x47, 0x5f, 0x54, 0x45, 0x4d, 0x50, 0x4c, 0x41, 0x54,
	0x45, 0x10, 0x02, 0x12, 0x0f, 0x0a, 0x0b, 0x45, 0x4e, 0x54, 0x52, 0x59, 0x5f, 0x47, 0x52, 0x4f,
	0x55, 0x50, 0x10, 0x03, 0x42, 0xcb, 0x01, 0x0a, 0x1f, 0x63, 0x6f, 0x6d, 0x2e, 0x67, 0x6f, 0x6f,
	0x67, 0x6c, 0x65, 0x2e, 0x63, 0x6c, 0x6f, 0x75, 0x64, 0x2e, 0x64, 0x61, 0x74, 0x61, 0x63, 0x61,
	0x74, 0x61, 0x6c, 0x6f, 0x67, 0x2e, 0x76, 0x31, 0x50, 0x01, 0x5a, 0x46, 0x67, 0x6f, 0x6f, 0x67,
	0x6c, 0x65, 0x2e, 0x67, 0x6f, 0x6c, 0x61, 0x6e, 0x67, 0x2e, 0x6f, 0x72, 0x67, 0x2f, 0x67, 0x65,
	0x6e, 0x70, 0x72, 0x6f, 0x74, 0x6f, 0x2f, 0x67, 0x6f, 0x6f, 0x67, 0x6c, 0x65, 0x61, 0x70, 0x69,
	0x73, 0x2f, 0x63, 0x6c, 0x6f, 0x75, 0x64, 0x2f, 0x64, 0x61, 0x74, 0x61, 0x63, 0x61, 0x74, 0x61,
	0x6c, 0x6f, 0x67, 0x2f, 0x76, 0x31, 0x3b, 0x64, 0x61, 0x74, 0x61, 0x63, 0x61, 0x74, 0x61, 0x6c,
	0x6f, 0x67, 0xf8, 0x01, 0x01, 0xaa, 0x02, 0x1b, 0x47, 0x6f, 0x6f, 0x67, 0x6c, 0x65, 0x2e, 0x43,
	0x6c, 0x6f, 0x75, 0x64, 0x2e, 0x44, 0x61, 0x74, 0x61, 0x43, 0x61, 0x74, 0x61, 0x6c, 0x6f, 0x67,
	0x2e, 0x56, 0x31, 0xca, 0x02, 0x1b, 0x47, 0x6f, 0x6f, 0x67, 0x6c, 0x65, 0x5c, 0x43, 0x6c, 0x6f,
	0x75, 0x64, 0x5c, 0x44, 0x61, 0x74, 0x61, 0x43, 0x61, 0x74, 0x61, 0x6c, 0x6f, 0x67, 0x5c, 0x56,
	0x31, 0xea, 0x02, 0x1e, 0x47, 0x6f, 0x6f, 0x67, 0x6c, 0x65, 0x3a, 0x3a, 0x43, 0x6c, 0x6f, 0x75,
	0x64, 0x3a, 0x3a, 0x44, 0x61, 0x74, 0x61, 0x43, 0x61, 0x74, 0x61, 0x6c, 0x6f, 0x67, 0x3a, 0x3a,
	0x56, 0x31, 0x62, 0x06, 0x70, 0x72, 0x6f, 0x74, 0x6f, 0x33,
}

var (
	file_google_cloud_datacatalog_v1_search_proto_rawDescOnce sync.Once
	file_google_cloud_datacatalog_v1_search_proto_rawDescData = file_google_cloud_datacatalog_v1_search_proto_rawDesc
)

func file_google_cloud_datacatalog_v1_search_proto_rawDescGZIP() []byte {
	file_google_cloud_datacatalog_v1_search_proto_rawDescOnce.Do(func() {
		file_google_cloud_datacatalog_v1_search_proto_rawDescData = protoimpl.X.CompressGZIP(file_google_cloud_datacatalog_v1_search_proto_rawDescData)
	})
	return file_google_cloud_datacatalog_v1_search_proto_rawDescData
}

var file_google_cloud_datacatalog_v1_search_proto_enumTypes = make([]protoimpl.EnumInfo, 1)
var file_google_cloud_datacatalog_v1_search_proto_msgTypes = make([]protoimpl.MessageInfo, 1)
var file_google_cloud_datacatalog_v1_search_proto_goTypes = []interface{}{
	(SearchResultType)(0),       // 0: google.cloud.datacatalog.v1.SearchResultType
	(*SearchCatalogResult)(nil), // 1: google.cloud.datacatalog.v1.SearchCatalogResult
	(IntegratedSystem)(0),       // 2: google.cloud.datacatalog.v1.IntegratedSystem
}
var file_google_cloud_datacatalog_v1_search_proto_depIdxs = []int32{
	0, // 0: google.cloud.datacatalog.v1.SearchCatalogResult.search_result_type:type_name -> google.cloud.datacatalog.v1.SearchResultType
	2, // 1: google.cloud.datacatalog.v1.SearchCatalogResult.integrated_system:type_name -> google.cloud.datacatalog.v1.IntegratedSystem
	2, // [2:2] is the sub-list for method output_type
	2, // [2:2] is the sub-list for method input_type
	2, // [2:2] is the sub-list for extension type_name
	2, // [2:2] is the sub-list for extension extendee
	0, // [0:2] is the sub-list for field type_name
}

func init() { file_google_cloud_datacatalog_v1_search_proto_init() }
func file_google_cloud_datacatalog_v1_search_proto_init() {
	if File_google_cloud_datacatalog_v1_search_proto != nil {
		return
	}
	file_google_cloud_datacatalog_v1_common_proto_init()
	if !protoimpl.UnsafeEnabled {
		file_google_cloud_datacatalog_v1_search_proto_msgTypes[0].Exporter = func(v interface{}, i int) interface{} {
			switch v := v.(*SearchCatalogResult); i {
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
	file_google_cloud_datacatalog_v1_search_proto_msgTypes[0].OneofWrappers = []interface{}{
		(*SearchCatalogResult_IntegratedSystem)(nil),
		(*SearchCatalogResult_UserSpecifiedSystem)(nil),
	}
	type x struct{}
	out := protoimpl.TypeBuilder{
		File: protoimpl.DescBuilder{
			GoPackagePath: reflect.TypeOf(x{}).PkgPath(),
			RawDescriptor: file_google_cloud_datacatalog_v1_search_proto_rawDesc,
			NumEnums:      1,
			NumMessages:   1,
			NumExtensions: 0,
			NumServices:   0,
		},
		GoTypes:           file_google_cloud_datacatalog_v1_search_proto_goTypes,
		DependencyIndexes: file_google_cloud_datacatalog_v1_search_proto_depIdxs,
		EnumInfos:         file_google_cloud_datacatalog_v1_search_proto_enumTypes,
		MessageInfos:      file_google_cloud_datacatalog_v1_search_proto_msgTypes,
	}.Build()
	File_google_cloud_datacatalog_v1_search_proto = out.File
	file_google_cloud_datacatalog_v1_search_proto_rawDesc = nil
	file_google_cloud_datacatalog_v1_search_proto_goTypes = nil
	file_google_cloud_datacatalog_v1_search_proto_depIdxs = nil
}
