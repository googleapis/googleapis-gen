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
// source: google/cloud/aiplatform/v1beta1/endpoint.proto

package aiplatform

import (
	proto "github.com/golang/protobuf/proto"
	_ "google.golang.org/genproto/googleapis/api/annotations"
	protoreflect "google.golang.org/protobuf/reflect/protoreflect"
	protoimpl "google.golang.org/protobuf/runtime/protoimpl"
	timestamppb "google.golang.org/protobuf/types/known/timestamppb"
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

// Models are deployed into it, and afterwards Endpoint is called to obtain
// predictions and explanations.
type Endpoint struct {
	state         protoimpl.MessageState
	sizeCache     protoimpl.SizeCache
	unknownFields protoimpl.UnknownFields

	// Output only. The resource name of the Endpoint.
	Name string `protobuf:"bytes,1,opt,name=name,proto3" json:"name,omitempty"`
	// Required. The display name of the Endpoint.
	// The name can be up to 128 characters long and can be consist of any UTF-8
	// characters.
	DisplayName string `protobuf:"bytes,2,opt,name=display_name,json=displayName,proto3" json:"display_name,omitempty"`
	// The description of the Endpoint.
	Description string `protobuf:"bytes,3,opt,name=description,proto3" json:"description,omitempty"`
	// Output only. The models deployed in this Endpoint.
	// To add or remove DeployedModels use [EndpointService.DeployModel][google.cloud.aiplatform.v1beta1.EndpointService.DeployModel] and
	// [EndpointService.UndeployModel][google.cloud.aiplatform.v1beta1.EndpointService.UndeployModel] respectively.
	DeployedModels []*DeployedModel `protobuf:"bytes,4,rep,name=deployed_models,json=deployedModels,proto3" json:"deployed_models,omitempty"`
	// A map from a DeployedModel's ID to the percentage of this Endpoint's
	// traffic that should be forwarded to that DeployedModel.
	//
	// If a DeployedModel's ID is not listed in this map, then it receives no
	// traffic.
	//
	// The traffic percentage values must add up to 100, or map must be empty if
	// the Endpoint is to not accept any traffic at a moment.
	TrafficSplit map[string]int32 `protobuf:"bytes,5,rep,name=traffic_split,json=trafficSplit,proto3" json:"traffic_split,omitempty" protobuf_key:"bytes,1,opt,name=key,proto3" protobuf_val:"varint,2,opt,name=value,proto3"`
	// Used to perform consistent read-modify-write updates. If not set, a blind
	// "overwrite" update happens.
	Etag string `protobuf:"bytes,6,opt,name=etag,proto3" json:"etag,omitempty"`
	// The labels with user-defined metadata to organize your Endpoints.
	//
	// Label keys and values can be no longer than 64 characters
	// (Unicode codepoints), can only contain lowercase letters, numeric
	// characters, underscores and dashes. International characters are allowed.
	//
	// See https://goo.gl/xmQnxf for more information and examples of labels.
	Labels map[string]string `protobuf:"bytes,7,rep,name=labels,proto3" json:"labels,omitempty" protobuf_key:"bytes,1,opt,name=key,proto3" protobuf_val:"bytes,2,opt,name=value,proto3"`
	// Output only. Timestamp when this Endpoint was created.
	CreateTime *timestamppb.Timestamp `protobuf:"bytes,8,opt,name=create_time,json=createTime,proto3" json:"create_time,omitempty"`
	// Output only. Timestamp when this Endpoint was last updated.
	UpdateTime *timestamppb.Timestamp `protobuf:"bytes,9,opt,name=update_time,json=updateTime,proto3" json:"update_time,omitempty"`
	// Customer-managed encryption key spec for an Endpoint. If set, this
	// Endpoint and all sub-resources of this Endpoint will be secured by
	// this key.
	EncryptionSpec *EncryptionSpec `protobuf:"bytes,10,opt,name=encryption_spec,json=encryptionSpec,proto3" json:"encryption_spec,omitempty"`
}

func (x *Endpoint) Reset() {
	*x = Endpoint{}
	if protoimpl.UnsafeEnabled {
		mi := &file_google_cloud_aiplatform_v1beta1_endpoint_proto_msgTypes[0]
		ms := protoimpl.X.MessageStateOf(protoimpl.Pointer(x))
		ms.StoreMessageInfo(mi)
	}
}

func (x *Endpoint) String() string {
	return protoimpl.X.MessageStringOf(x)
}

func (*Endpoint) ProtoMessage() {}

func (x *Endpoint) ProtoReflect() protoreflect.Message {
	mi := &file_google_cloud_aiplatform_v1beta1_endpoint_proto_msgTypes[0]
	if protoimpl.UnsafeEnabled && x != nil {
		ms := protoimpl.X.MessageStateOf(protoimpl.Pointer(x))
		if ms.LoadMessageInfo() == nil {
			ms.StoreMessageInfo(mi)
		}
		return ms
	}
	return mi.MessageOf(x)
}

// Deprecated: Use Endpoint.ProtoReflect.Descriptor instead.
func (*Endpoint) Descriptor() ([]byte, []int) {
	return file_google_cloud_aiplatform_v1beta1_endpoint_proto_rawDescGZIP(), []int{0}
}

func (x *Endpoint) GetName() string {
	if x != nil {
		return x.Name
	}
	return ""
}

func (x *Endpoint) GetDisplayName() string {
	if x != nil {
		return x.DisplayName
	}
	return ""
}

func (x *Endpoint) GetDescription() string {
	if x != nil {
		return x.Description
	}
	return ""
}

func (x *Endpoint) GetDeployedModels() []*DeployedModel {
	if x != nil {
		return x.DeployedModels
	}
	return nil
}

func (x *Endpoint) GetTrafficSplit() map[string]int32 {
	if x != nil {
		return x.TrafficSplit
	}
	return nil
}

func (x *Endpoint) GetEtag() string {
	if x != nil {
		return x.Etag
	}
	return ""
}

func (x *Endpoint) GetLabels() map[string]string {
	if x != nil {
		return x.Labels
	}
	return nil
}

func (x *Endpoint) GetCreateTime() *timestamppb.Timestamp {
	if x != nil {
		return x.CreateTime
	}
	return nil
}

func (x *Endpoint) GetUpdateTime() *timestamppb.Timestamp {
	if x != nil {
		return x.UpdateTime
	}
	return nil
}

func (x *Endpoint) GetEncryptionSpec() *EncryptionSpec {
	if x != nil {
		return x.EncryptionSpec
	}
	return nil
}

// A deployment of a Model. Endpoints contain one or more DeployedModels.
type DeployedModel struct {
	state         protoimpl.MessageState
	sizeCache     protoimpl.SizeCache
	unknownFields protoimpl.UnknownFields

	// The prediction (for example, the machine) resources that the DeployedModel
	// uses. The user is billed for the resources (at least their minimal amount)
	// even if the DeployedModel receives no traffic.
	// Not all Models support all resources types. See
	// [Model.supported_deployment_resources_types][google.cloud.aiplatform.v1beta1.Model.supported_deployment_resources_types].
	//
	// Types that are assignable to PredictionResources:
	//	*DeployedModel_DedicatedResources
	//	*DeployedModel_AutomaticResources
	PredictionResources isDeployedModel_PredictionResources `protobuf_oneof:"prediction_resources"`
	// Output only. The ID of the DeployedModel.
	Id string `protobuf:"bytes,1,opt,name=id,proto3" json:"id,omitempty"`
	// Required. The name of the Model this is the deployment of. Note that the Model
	// may be in a different location than the DeployedModel's Endpoint.
	Model string `protobuf:"bytes,2,opt,name=model,proto3" json:"model,omitempty"`
	// The display name of the DeployedModel. If not provided upon creation,
	// the Model's display_name is used.
	DisplayName string `protobuf:"bytes,3,opt,name=display_name,json=displayName,proto3" json:"display_name,omitempty"`
	// Output only. Timestamp when the DeployedModel was created.
	CreateTime *timestamppb.Timestamp `protobuf:"bytes,6,opt,name=create_time,json=createTime,proto3" json:"create_time,omitempty"`
	// Explanation configuration for this DeployedModel.
	//
	// When deploying a Model using [EndpointService.DeployModel][google.cloud.aiplatform.v1beta1.EndpointService.DeployModel], this value
	// overrides the value of [Model.explanation_spec][google.cloud.aiplatform.v1beta1.Model.explanation_spec]. All fields of
	// [explanation_spec][google.cloud.aiplatform.v1beta1.DeployedModel.explanation_spec] are optional in the request. If a field of
	// [explanation_spec][google.cloud.aiplatform.v1beta1.DeployedModel.explanation_spec] is not populated, the value of the same field of
	// [Model.explanation_spec][google.cloud.aiplatform.v1beta1.Model.explanation_spec] is inherited. The corresponding
	// [Model.explanation_spec][google.cloud.aiplatform.v1beta1.Model.explanation_spec] must be populated, otherwise explanation for
	// this Model is not allowed.
	ExplanationSpec *ExplanationSpec `protobuf:"bytes,9,opt,name=explanation_spec,json=explanationSpec,proto3" json:"explanation_spec,omitempty"`
	// The service account that the DeployedModel's container runs as. Specify the
	// email address of the service account. If this service account is not
	// specified, the container runs as a service account that doesn't have access
	// to the resource project.
	//
	// Users deploying the Model must have the `iam.serviceAccounts.actAs`
	// permission on this service account.
	ServiceAccount string `protobuf:"bytes,11,opt,name=service_account,json=serviceAccount,proto3" json:"service_account,omitempty"`
	// If true, the container of the DeployedModel instances will send `stderr`
	// and `stdout` streams to Stackdriver Logging.
	//
	// Only supported for custom-trained Models and AutoML Tabular Models.
	EnableContainerLogging bool `protobuf:"varint,12,opt,name=enable_container_logging,json=enableContainerLogging,proto3" json:"enable_container_logging,omitempty"`
	// These logs are like standard server access logs, containing
	// information like timestamp and latency for each prediction request.
	//
	// Note that Stackdriver logs may incur a cost, especially if your project
	// receives prediction requests at a high queries per second rate (QPS).
	// Estimate your costs before enabling this option.
	EnableAccessLogging bool `protobuf:"varint,13,opt,name=enable_access_logging,json=enableAccessLogging,proto3" json:"enable_access_logging,omitempty"`
}

func (x *DeployedModel) Reset() {
	*x = DeployedModel{}
	if protoimpl.UnsafeEnabled {
		mi := &file_google_cloud_aiplatform_v1beta1_endpoint_proto_msgTypes[1]
		ms := protoimpl.X.MessageStateOf(protoimpl.Pointer(x))
		ms.StoreMessageInfo(mi)
	}
}

func (x *DeployedModel) String() string {
	return protoimpl.X.MessageStringOf(x)
}

func (*DeployedModel) ProtoMessage() {}

func (x *DeployedModel) ProtoReflect() protoreflect.Message {
	mi := &file_google_cloud_aiplatform_v1beta1_endpoint_proto_msgTypes[1]
	if protoimpl.UnsafeEnabled && x != nil {
		ms := protoimpl.X.MessageStateOf(protoimpl.Pointer(x))
		if ms.LoadMessageInfo() == nil {
			ms.StoreMessageInfo(mi)
		}
		return ms
	}
	return mi.MessageOf(x)
}

// Deprecated: Use DeployedModel.ProtoReflect.Descriptor instead.
func (*DeployedModel) Descriptor() ([]byte, []int) {
	return file_google_cloud_aiplatform_v1beta1_endpoint_proto_rawDescGZIP(), []int{1}
}

func (m *DeployedModel) GetPredictionResources() isDeployedModel_PredictionResources {
	if m != nil {
		return m.PredictionResources
	}
	return nil
}

func (x *DeployedModel) GetDedicatedResources() *DedicatedResources {
	if x, ok := x.GetPredictionResources().(*DeployedModel_DedicatedResources); ok {
		return x.DedicatedResources
	}
	return nil
}

func (x *DeployedModel) GetAutomaticResources() *AutomaticResources {
	if x, ok := x.GetPredictionResources().(*DeployedModel_AutomaticResources); ok {
		return x.AutomaticResources
	}
	return nil
}

func (x *DeployedModel) GetId() string {
	if x != nil {
		return x.Id
	}
	return ""
}

func (x *DeployedModel) GetModel() string {
	if x != nil {
		return x.Model
	}
	return ""
}

func (x *DeployedModel) GetDisplayName() string {
	if x != nil {
		return x.DisplayName
	}
	return ""
}

func (x *DeployedModel) GetCreateTime() *timestamppb.Timestamp {
	if x != nil {
		return x.CreateTime
	}
	return nil
}

func (x *DeployedModel) GetExplanationSpec() *ExplanationSpec {
	if x != nil {
		return x.ExplanationSpec
	}
	return nil
}

func (x *DeployedModel) GetServiceAccount() string {
	if x != nil {
		return x.ServiceAccount
	}
	return ""
}

func (x *DeployedModel) GetEnableContainerLogging() bool {
	if x != nil {
		return x.EnableContainerLogging
	}
	return false
}

func (x *DeployedModel) GetEnableAccessLogging() bool {
	if x != nil {
		return x.EnableAccessLogging
	}
	return false
}

type isDeployedModel_PredictionResources interface {
	isDeployedModel_PredictionResources()
}

type DeployedModel_DedicatedResources struct {
	// A description of resources that are dedicated to the DeployedModel, and
	// that need a higher degree of manual configuration.
	DedicatedResources *DedicatedResources `protobuf:"bytes,7,opt,name=dedicated_resources,json=dedicatedResources,proto3,oneof"`
}

type DeployedModel_AutomaticResources struct {
	// A description of resources that to large degree are decided by AI
	// Platform, and require only a modest additional configuration.
	AutomaticResources *AutomaticResources `protobuf:"bytes,8,opt,name=automatic_resources,json=automaticResources,proto3,oneof"`
}

func (*DeployedModel_DedicatedResources) isDeployedModel_PredictionResources() {}

func (*DeployedModel_AutomaticResources) isDeployedModel_PredictionResources() {}

var File_google_cloud_aiplatform_v1beta1_endpoint_proto protoreflect.FileDescriptor

var file_google_cloud_aiplatform_v1beta1_endpoint_proto_rawDesc = []byte{
	0x0a, 0x2e, 0x67, 0x6f, 0x6f, 0x67, 0x6c, 0x65, 0x2f, 0x63, 0x6c, 0x6f, 0x75, 0x64, 0x2f, 0x61,
	0x69, 0x70, 0x6c, 0x61, 0x74, 0x66, 0x6f, 0x72, 0x6d, 0x2f, 0x76, 0x31, 0x62, 0x65, 0x74, 0x61,
	0x31, 0x2f, 0x65, 0x6e, 0x64, 0x70, 0x6f, 0x69, 0x6e, 0x74, 0x2e, 0x70, 0x72, 0x6f, 0x74, 0x6f,
	0x12, 0x1f, 0x67, 0x6f, 0x6f, 0x67, 0x6c, 0x65, 0x2e, 0x63, 0x6c, 0x6f, 0x75, 0x64, 0x2e, 0x61,
	0x69, 0x70, 0x6c, 0x61, 0x74, 0x66, 0x6f, 0x72, 0x6d, 0x2e, 0x76, 0x31, 0x62, 0x65, 0x74, 0x61,
	0x31, 0x1a, 0x1f, 0x67, 0x6f, 0x6f, 0x67, 0x6c, 0x65, 0x2f, 0x61, 0x70, 0x69, 0x2f, 0x66, 0x69,
	0x65, 0x6c, 0x64, 0x5f, 0x62, 0x65, 0x68, 0x61, 0x76, 0x69, 0x6f, 0x72, 0x2e, 0x70, 0x72, 0x6f,
	0x74, 0x6f, 0x1a, 0x19, 0x67, 0x6f, 0x6f, 0x67, 0x6c, 0x65, 0x2f, 0x61, 0x70, 0x69, 0x2f, 0x72,
	0x65, 0x73, 0x6f, 0x75, 0x72, 0x63, 0x65, 0x2e, 0x70, 0x72, 0x6f, 0x74, 0x6f, 0x1a, 0x35, 0x67,
	0x6f, 0x6f, 0x67, 0x6c, 0x65, 0x2f, 0x63, 0x6c, 0x6f, 0x75, 0x64, 0x2f, 0x61, 0x69, 0x70, 0x6c,
	0x61, 0x74, 0x66, 0x6f, 0x72, 0x6d, 0x2f, 0x76, 0x31, 0x62, 0x65, 0x74, 0x61, 0x31, 0x2f, 0x65,
	0x6e, 0x63, 0x72, 0x79, 0x70, 0x74, 0x69, 0x6f, 0x6e, 0x5f, 0x73, 0x70, 0x65, 0x63, 0x2e, 0x70,
	0x72, 0x6f, 0x74, 0x6f, 0x1a, 0x31, 0x67, 0x6f, 0x6f, 0x67, 0x6c, 0x65, 0x2f, 0x63, 0x6c, 0x6f,
	0x75, 0x64, 0x2f, 0x61, 0x69, 0x70, 0x6c, 0x61, 0x74, 0x66, 0x6f, 0x72, 0x6d, 0x2f, 0x76, 0x31,
	0x62, 0x65, 0x74, 0x61, 0x31, 0x2f, 0x65, 0x78, 0x70, 0x6c, 0x61, 0x6e, 0x61, 0x74, 0x69, 0x6f,
	0x6e, 0x2e, 0x70, 0x72, 0x6f, 0x74, 0x6f, 0x1a, 0x37, 0x67, 0x6f, 0x6f, 0x67, 0x6c, 0x65, 0x2f,
	0x63, 0x6c, 0x6f, 0x75, 0x64, 0x2f, 0x61, 0x69, 0x70, 0x6c, 0x61, 0x74, 0x66, 0x6f, 0x72, 0x6d,
	0x2f, 0x76, 0x31, 0x62, 0x65, 0x74, 0x61, 0x31, 0x2f, 0x6d, 0x61, 0x63, 0x68, 0x69, 0x6e, 0x65,
	0x5f, 0x72, 0x65, 0x73, 0x6f, 0x75, 0x72, 0x63, 0x65, 0x73, 0x2e, 0x70, 0x72, 0x6f, 0x74, 0x6f,
	0x1a, 0x1f, 0x67, 0x6f, 0x6f, 0x67, 0x6c, 0x65, 0x2f, 0x70, 0x72, 0x6f, 0x74, 0x6f, 0x62, 0x75,
	0x66, 0x2f, 0x74, 0x69, 0x6d, 0x65, 0x73, 0x74, 0x61, 0x6d, 0x70, 0x2e, 0x70, 0x72, 0x6f, 0x74,
	0x6f, 0x1a, 0x1c, 0x67, 0x6f, 0x6f, 0x67, 0x6c, 0x65, 0x2f, 0x61, 0x70, 0x69, 0x2f, 0x61, 0x6e,
	0x6e, 0x6f, 0x74, 0x61, 0x74, 0x69, 0x6f, 0x6e, 0x73, 0x2e, 0x70, 0x72, 0x6f, 0x74, 0x6f, 0x22,
	0xd1, 0x06, 0x0a, 0x08, 0x45, 0x6e, 0x64, 0x70, 0x6f, 0x69, 0x6e, 0x74, 0x12, 0x17, 0x0a, 0x04,
	0x6e, 0x61, 0x6d, 0x65, 0x18, 0x01, 0x20, 0x01, 0x28, 0x09, 0x42, 0x03, 0xe0, 0x41, 0x03, 0x52,
	0x04, 0x6e, 0x61, 0x6d, 0x65, 0x12, 0x26, 0x0a, 0x0c, 0x64, 0x69, 0x73, 0x70, 0x6c, 0x61, 0x79,
	0x5f, 0x6e, 0x61, 0x6d, 0x65, 0x18, 0x02, 0x20, 0x01, 0x28, 0x09, 0x42, 0x03, 0xe0, 0x41, 0x02,
	0x52, 0x0b, 0x64, 0x69, 0x73, 0x70, 0x6c, 0x61, 0x79, 0x4e, 0x61, 0x6d, 0x65, 0x12, 0x20, 0x0a,
	0x0b, 0x64, 0x65, 0x73, 0x63, 0x72, 0x69, 0x70, 0x74, 0x69, 0x6f, 0x6e, 0x18, 0x03, 0x20, 0x01,
	0x28, 0x09, 0x52, 0x0b, 0x64, 0x65, 0x73, 0x63, 0x72, 0x69, 0x70, 0x74, 0x69, 0x6f, 0x6e, 0x12,
	0x5c, 0x0a, 0x0f, 0x64, 0x65, 0x70, 0x6c, 0x6f, 0x79, 0x65, 0x64, 0x5f, 0x6d, 0x6f, 0x64, 0x65,
	0x6c, 0x73, 0x18, 0x04, 0x20, 0x03, 0x28, 0x0b, 0x32, 0x2e, 0x2e, 0x67, 0x6f, 0x6f, 0x67, 0x6c,
	0x65, 0x2e, 0x63, 0x6c, 0x6f, 0x75, 0x64, 0x2e, 0x61, 0x69, 0x70, 0x6c, 0x61, 0x74, 0x66, 0x6f,
	0x72, 0x6d, 0x2e, 0x76, 0x31, 0x62, 0x65, 0x74, 0x61, 0x31, 0x2e, 0x44, 0x65, 0x70, 0x6c, 0x6f,
	0x79, 0x65, 0x64, 0x4d, 0x6f, 0x64, 0x65, 0x6c, 0x42, 0x03, 0xe0, 0x41, 0x03, 0x52, 0x0e, 0x64,
	0x65, 0x70, 0x6c, 0x6f, 0x79, 0x65, 0x64, 0x4d, 0x6f, 0x64, 0x65, 0x6c, 0x73, 0x12, 0x60, 0x0a,
	0x0d, 0x74, 0x72, 0x61, 0x66, 0x66, 0x69, 0x63, 0x5f, 0x73, 0x70, 0x6c, 0x69, 0x74, 0x18, 0x05,
	0x20, 0x03, 0x28, 0x0b, 0x32, 0x3b, 0x2e, 0x67, 0x6f, 0x6f, 0x67, 0x6c, 0x65, 0x2e, 0x63, 0x6c,
	0x6f, 0x75, 0x64, 0x2e, 0x61, 0x69, 0x70, 0x6c, 0x61, 0x74, 0x66, 0x6f, 0x72, 0x6d, 0x2e, 0x76,
	0x31, 0x62, 0x65, 0x74, 0x61, 0x31, 0x2e, 0x45, 0x6e, 0x64, 0x70, 0x6f, 0x69, 0x6e, 0x74, 0x2e,
	0x54, 0x72, 0x61, 0x66, 0x66, 0x69, 0x63, 0x53, 0x70, 0x6c, 0x69, 0x74, 0x45, 0x6e, 0x74, 0x72,
	0x79, 0x52, 0x0c, 0x74, 0x72, 0x61, 0x66, 0x66, 0x69, 0x63, 0x53, 0x70, 0x6c, 0x69, 0x74, 0x12,
	0x12, 0x0a, 0x04, 0x65, 0x74, 0x61, 0x67, 0x18, 0x06, 0x20, 0x01, 0x28, 0x09, 0x52, 0x04, 0x65,
	0x74, 0x61, 0x67, 0x12, 0x4d, 0x0a, 0x06, 0x6c, 0x61, 0x62, 0x65, 0x6c, 0x73, 0x18, 0x07, 0x20,
	0x03, 0x28, 0x0b, 0x32, 0x35, 0x2e, 0x67, 0x6f, 0x6f, 0x67, 0x6c, 0x65, 0x2e, 0x63, 0x6c, 0x6f,
	0x75, 0x64, 0x2e, 0x61, 0x69, 0x70, 0x6c, 0x61, 0x74, 0x66, 0x6f, 0x72, 0x6d, 0x2e, 0x76, 0x31,
	0x62, 0x65, 0x74, 0x61, 0x31, 0x2e, 0x45, 0x6e, 0x64, 0x70, 0x6f, 0x69, 0x6e, 0x74, 0x2e, 0x4c,
	0x61, 0x62, 0x65, 0x6c, 0x73, 0x45, 0x6e, 0x74, 0x72, 0x79, 0x52, 0x06, 0x6c, 0x61, 0x62, 0x65,
	0x6c, 0x73, 0x12, 0x40, 0x0a, 0x0b, 0x63, 0x72, 0x65, 0x61, 0x74, 0x65, 0x5f, 0x74, 0x69, 0x6d,
	0x65, 0x18, 0x08, 0x20, 0x01, 0x28, 0x0b, 0x32, 0x1a, 0x2e, 0x67, 0x6f, 0x6f, 0x67, 0x6c, 0x65,
	0x2e, 0x70, 0x72, 0x6f, 0x74, 0x6f, 0x62, 0x75, 0x66, 0x2e, 0x54, 0x69, 0x6d, 0x65, 0x73, 0x74,
	0x61, 0x6d, 0x70, 0x42, 0x03, 0xe0, 0x41, 0x03, 0x52, 0x0a, 0x63, 0x72, 0x65, 0x61, 0x74, 0x65,
	0x54, 0x69, 0x6d, 0x65, 0x12, 0x40, 0x0a, 0x0b, 0x75, 0x70, 0x64, 0x61, 0x74, 0x65, 0x5f, 0x74,
	0x69, 0x6d, 0x65, 0x18, 0x09, 0x20, 0x01, 0x28, 0x0b, 0x32, 0x1a, 0x2e, 0x67, 0x6f, 0x6f, 0x67,
	0x6c, 0x65, 0x2e, 0x70, 0x72, 0x6f, 0x74, 0x6f, 0x62, 0x75, 0x66, 0x2e, 0x54, 0x69, 0x6d, 0x65,
	0x73, 0x74, 0x61, 0x6d, 0x70, 0x42, 0x03, 0xe0, 0x41, 0x03, 0x52, 0x0a, 0x75, 0x70, 0x64, 0x61,
	0x74, 0x65, 0x54, 0x69, 0x6d, 0x65, 0x12, 0x58, 0x0a, 0x0f, 0x65, 0x6e, 0x63, 0x72, 0x79, 0x70,
	0x74, 0x69, 0x6f, 0x6e, 0x5f, 0x73, 0x70, 0x65, 0x63, 0x18, 0x0a, 0x20, 0x01, 0x28, 0x0b, 0x32,
	0x2f, 0x2e, 0x67, 0x6f, 0x6f, 0x67, 0x6c, 0x65, 0x2e, 0x63, 0x6c, 0x6f, 0x75, 0x64, 0x2e, 0x61,
	0x69, 0x70, 0x6c, 0x61, 0x74, 0x66, 0x6f, 0x72, 0x6d, 0x2e, 0x76, 0x31, 0x62, 0x65, 0x74, 0x61,
	0x31, 0x2e, 0x45, 0x6e, 0x63, 0x72, 0x79, 0x70, 0x74, 0x69, 0x6f, 0x6e, 0x53, 0x70, 0x65, 0x63,
	0x52, 0x0e, 0x65, 0x6e, 0x63, 0x72, 0x79, 0x70, 0x74, 0x69, 0x6f, 0x6e, 0x53, 0x70, 0x65, 0x63,
	0x1a, 0x3f, 0x0a, 0x11, 0x54, 0x72, 0x61, 0x66, 0x66, 0x69, 0x63, 0x53, 0x70, 0x6c, 0x69, 0x74,
	0x45, 0x6e, 0x74, 0x72, 0x79, 0x12, 0x10, 0x0a, 0x03, 0x6b, 0x65, 0x79, 0x18, 0x01, 0x20, 0x01,
	0x28, 0x09, 0x52, 0x03, 0x6b, 0x65, 0x79, 0x12, 0x14, 0x0a, 0x05, 0x76, 0x61, 0x6c, 0x75, 0x65,
	0x18, 0x02, 0x20, 0x01, 0x28, 0x05, 0x52, 0x05, 0x76, 0x61, 0x6c, 0x75, 0x65, 0x3a, 0x02, 0x38,
	0x01, 0x1a, 0x39, 0x0a, 0x0b, 0x4c, 0x61, 0x62, 0x65, 0x6c, 0x73, 0x45, 0x6e, 0x74, 0x72, 0x79,
	0x12, 0x10, 0x0a, 0x03, 0x6b, 0x65, 0x79, 0x18, 0x01, 0x20, 0x01, 0x28, 0x09, 0x52, 0x03, 0x6b,
	0x65, 0x79, 0x12, 0x14, 0x0a, 0x05, 0x76, 0x61, 0x6c, 0x75, 0x65, 0x18, 0x02, 0x20, 0x01, 0x28,
	0x09, 0x52, 0x05, 0x76, 0x61, 0x6c, 0x75, 0x65, 0x3a, 0x02, 0x38, 0x01, 0x3a, 0x65, 0xea, 0x41,
	0x62, 0x0a, 0x22, 0x61, 0x69, 0x70, 0x6c, 0x61, 0x74, 0x66, 0x6f, 0x72, 0x6d, 0x2e, 0x67, 0x6f,
	0x6f, 0x67, 0x6c, 0x65, 0x61, 0x70, 0x69, 0x73, 0x2e, 0x63, 0x6f, 0x6d, 0x2f, 0x45, 0x6e, 0x64,
	0x70, 0x6f, 0x69, 0x6e, 0x74, 0x12, 0x3c, 0x70, 0x72, 0x6f, 0x6a, 0x65, 0x63, 0x74, 0x73, 0x2f,
	0x7b, 0x70, 0x72, 0x6f, 0x6a, 0x65, 0x63, 0x74, 0x7d, 0x2f, 0x6c, 0x6f, 0x63, 0x61, 0x74, 0x69,
	0x6f, 0x6e, 0x73, 0x2f, 0x7b, 0x6c, 0x6f, 0x63, 0x61, 0x74, 0x69, 0x6f, 0x6e, 0x7d, 0x2f, 0x65,
	0x6e, 0x64, 0x70, 0x6f, 0x69, 0x6e, 0x74, 0x73, 0x2f, 0x7b, 0x65, 0x6e, 0x64, 0x70, 0x6f, 0x69,
	0x6e, 0x74, 0x7d, 0x22, 0xa4, 0x05, 0x0a, 0x0d, 0x44, 0x65, 0x70, 0x6c, 0x6f, 0x79, 0x65, 0x64,
	0x4d, 0x6f, 0x64, 0x65, 0x6c, 0x12, 0x66, 0x0a, 0x13, 0x64, 0x65, 0x64, 0x69, 0x63, 0x61, 0x74,
	0x65, 0x64, 0x5f, 0x72, 0x65, 0x73, 0x6f, 0x75, 0x72, 0x63, 0x65, 0x73, 0x18, 0x07, 0x20, 0x01,
	0x28, 0x0b, 0x32, 0x33, 0x2e, 0x67, 0x6f, 0x6f, 0x67, 0x6c, 0x65, 0x2e, 0x63, 0x6c, 0x6f, 0x75,
	0x64, 0x2e, 0x61, 0x69, 0x70, 0x6c, 0x61, 0x74, 0x66, 0x6f, 0x72, 0x6d, 0x2e, 0x76, 0x31, 0x62,
	0x65, 0x74, 0x61, 0x31, 0x2e, 0x44, 0x65, 0x64, 0x69, 0x63, 0x61, 0x74, 0x65, 0x64, 0x52, 0x65,
	0x73, 0x6f, 0x75, 0x72, 0x63, 0x65, 0x73, 0x48, 0x00, 0x52, 0x12, 0x64, 0x65, 0x64, 0x69, 0x63,
	0x61, 0x74, 0x65, 0x64, 0x52, 0x65, 0x73, 0x6f, 0x75, 0x72, 0x63, 0x65, 0x73, 0x12, 0x66, 0x0a,
	0x13, 0x61, 0x75, 0x74, 0x6f, 0x6d, 0x61, 0x74, 0x69, 0x63, 0x5f, 0x72, 0x65, 0x73, 0x6f, 0x75,
	0x72, 0x63, 0x65, 0x73, 0x18, 0x08, 0x20, 0x01, 0x28, 0x0b, 0x32, 0x33, 0x2e, 0x67, 0x6f, 0x6f,
	0x67, 0x6c, 0x65, 0x2e, 0x63, 0x6c, 0x6f, 0x75, 0x64, 0x2e, 0x61, 0x69, 0x70, 0x6c, 0x61, 0x74,
	0x66, 0x6f, 0x72, 0x6d, 0x2e, 0x76, 0x31, 0x62, 0x65, 0x74, 0x61, 0x31, 0x2e, 0x41, 0x75, 0x74,
	0x6f, 0x6d, 0x61, 0x74, 0x69, 0x63, 0x52, 0x65, 0x73, 0x6f, 0x75, 0x72, 0x63, 0x65, 0x73, 0x48,
	0x00, 0x52, 0x12, 0x61, 0x75, 0x74, 0x6f, 0x6d, 0x61, 0x74, 0x69, 0x63, 0x52, 0x65, 0x73, 0x6f,
	0x75, 0x72, 0x63, 0x65, 0x73, 0x12, 0x13, 0x0a, 0x02, 0x69, 0x64, 0x18, 0x01, 0x20, 0x01, 0x28,
	0x09, 0x42, 0x03, 0xe0, 0x41, 0x03, 0x52, 0x02, 0x69, 0x64, 0x12, 0x3d, 0x0a, 0x05, 0x6d, 0x6f,
	0x64, 0x65, 0x6c, 0x18, 0x02, 0x20, 0x01, 0x28, 0x09, 0x42, 0x27, 0xe0, 0x41, 0x02, 0xfa, 0x41,
	0x21, 0x0a, 0x1f, 0x61, 0x69, 0x70, 0x6c, 0x61, 0x74, 0x66, 0x6f, 0x72, 0x6d, 0x2e, 0x67, 0x6f,
	0x6f, 0x67, 0x6c, 0x65, 0x61, 0x70, 0x69, 0x73, 0x2e, 0x63, 0x6f, 0x6d, 0x2f, 0x4d, 0x6f, 0x64,
	0x65, 0x6c, 0x52, 0x05, 0x6d, 0x6f, 0x64, 0x65, 0x6c, 0x12, 0x21, 0x0a, 0x0c, 0x64, 0x69, 0x73,
	0x70, 0x6c, 0x61, 0x79, 0x5f, 0x6e, 0x61, 0x6d, 0x65, 0x18, 0x03, 0x20, 0x01, 0x28, 0x09, 0x52,
	0x0b, 0x64, 0x69, 0x73, 0x70, 0x6c, 0x61, 0x79, 0x4e, 0x61, 0x6d, 0x65, 0x12, 0x40, 0x0a, 0x0b,
	0x63, 0x72, 0x65, 0x61, 0x74, 0x65, 0x5f, 0x74, 0x69, 0x6d, 0x65, 0x18, 0x06, 0x20, 0x01, 0x28,
	0x0b, 0x32, 0x1a, 0x2e, 0x67, 0x6f, 0x6f, 0x67, 0x6c, 0x65, 0x2e, 0x70, 0x72, 0x6f, 0x74, 0x6f,
	0x62, 0x75, 0x66, 0x2e, 0x54, 0x69, 0x6d, 0x65, 0x73, 0x74, 0x61, 0x6d, 0x70, 0x42, 0x03, 0xe0,
	0x41, 0x03, 0x52, 0x0a, 0x63, 0x72, 0x65, 0x61, 0x74, 0x65, 0x54, 0x69, 0x6d, 0x65, 0x12, 0x5b,
	0x0a, 0x10, 0x65, 0x78, 0x70, 0x6c, 0x61, 0x6e, 0x61, 0x74, 0x69, 0x6f, 0x6e, 0x5f, 0x73, 0x70,
	0x65, 0x63, 0x18, 0x09, 0x20, 0x01, 0x28, 0x0b, 0x32, 0x30, 0x2e, 0x67, 0x6f, 0x6f, 0x67, 0x6c,
	0x65, 0x2e, 0x63, 0x6c, 0x6f, 0x75, 0x64, 0x2e, 0x61, 0x69, 0x70, 0x6c, 0x61, 0x74, 0x66, 0x6f,
	0x72, 0x6d, 0x2e, 0x76, 0x31, 0x62, 0x65, 0x74, 0x61, 0x31, 0x2e, 0x45, 0x78, 0x70, 0x6c, 0x61,
	0x6e, 0x61, 0x74, 0x69, 0x6f, 0x6e, 0x53, 0x70, 0x65, 0x63, 0x52, 0x0f, 0x65, 0x78, 0x70, 0x6c,
	0x61, 0x6e, 0x61, 0x74, 0x69, 0x6f, 0x6e, 0x53, 0x70, 0x65, 0x63, 0x12, 0x27, 0x0a, 0x0f, 0x73,
	0x65, 0x72, 0x76, 0x69, 0x63, 0x65, 0x5f, 0x61, 0x63, 0x63, 0x6f, 0x75, 0x6e, 0x74, 0x18, 0x0b,
	0x20, 0x01, 0x28, 0x09, 0x52, 0x0e, 0x73, 0x65, 0x72, 0x76, 0x69, 0x63, 0x65, 0x41, 0x63, 0x63,
	0x6f, 0x75, 0x6e, 0x74, 0x12, 0x38, 0x0a, 0x18, 0x65, 0x6e, 0x61, 0x62, 0x6c, 0x65, 0x5f, 0x63,
	0x6f, 0x6e, 0x74, 0x61, 0x69, 0x6e, 0x65, 0x72, 0x5f, 0x6c, 0x6f, 0x67, 0x67, 0x69, 0x6e, 0x67,
	0x18, 0x0c, 0x20, 0x01, 0x28, 0x08, 0x52, 0x16, 0x65, 0x6e, 0x61, 0x62, 0x6c, 0x65, 0x43, 0x6f,
	0x6e, 0x74, 0x61, 0x69, 0x6e, 0x65, 0x72, 0x4c, 0x6f, 0x67, 0x67, 0x69, 0x6e, 0x67, 0x12, 0x32,
	0x0a, 0x15, 0x65, 0x6e, 0x61, 0x62, 0x6c, 0x65, 0x5f, 0x61, 0x63, 0x63, 0x65, 0x73, 0x73, 0x5f,
	0x6c, 0x6f, 0x67, 0x67, 0x69, 0x6e, 0x67, 0x18, 0x0d, 0x20, 0x01, 0x28, 0x08, 0x52, 0x13, 0x65,
	0x6e, 0x61, 0x62, 0x6c, 0x65, 0x41, 0x63, 0x63, 0x65, 0x73, 0x73, 0x4c, 0x6f, 0x67, 0x67, 0x69,
	0x6e, 0x67, 0x42, 0x16, 0x0a, 0x14, 0x70, 0x72, 0x65, 0x64, 0x69, 0x63, 0x74, 0x69, 0x6f, 0x6e,
	0x5f, 0x72, 0x65, 0x73, 0x6f, 0x75, 0x72, 0x63, 0x65, 0x73, 0x42, 0x81, 0x01, 0x0a, 0x23, 0x63,
	0x6f, 0x6d, 0x2e, 0x67, 0x6f, 0x6f, 0x67, 0x6c, 0x65, 0x2e, 0x63, 0x6c, 0x6f, 0x75, 0x64, 0x2e,
	0x61, 0x69, 0x70, 0x6c, 0x61, 0x74, 0x66, 0x6f, 0x72, 0x6d, 0x2e, 0x76, 0x31, 0x62, 0x65, 0x74,
	0x61, 0x31, 0x42, 0x0d, 0x45, 0x6e, 0x64, 0x70, 0x6f, 0x69, 0x6e, 0x74, 0x50, 0x72, 0x6f, 0x74,
	0x6f, 0x50, 0x01, 0x5a, 0x49, 0x67, 0x6f, 0x6f, 0x67, 0x6c, 0x65, 0x2e, 0x67, 0x6f, 0x6c, 0x61,
	0x6e, 0x67, 0x2e, 0x6f, 0x72, 0x67, 0x2f, 0x67, 0x65, 0x6e, 0x70, 0x72, 0x6f, 0x74, 0x6f, 0x2f,
	0x67, 0x6f, 0x6f, 0x67, 0x6c, 0x65, 0x61, 0x70, 0x69, 0x73, 0x2f, 0x63, 0x6c, 0x6f, 0x75, 0x64,
	0x2f, 0x61, 0x69, 0x70, 0x6c, 0x61, 0x74, 0x66, 0x6f, 0x72, 0x6d, 0x2f, 0x76, 0x31, 0x62, 0x65,
	0x74, 0x61, 0x31, 0x3b, 0x61, 0x69, 0x70, 0x6c, 0x61, 0x74, 0x66, 0x6f, 0x72, 0x6d, 0x62, 0x06,
	0x70, 0x72, 0x6f, 0x74, 0x6f, 0x33,
}

var (
	file_google_cloud_aiplatform_v1beta1_endpoint_proto_rawDescOnce sync.Once
	file_google_cloud_aiplatform_v1beta1_endpoint_proto_rawDescData = file_google_cloud_aiplatform_v1beta1_endpoint_proto_rawDesc
)

func file_google_cloud_aiplatform_v1beta1_endpoint_proto_rawDescGZIP() []byte {
	file_google_cloud_aiplatform_v1beta1_endpoint_proto_rawDescOnce.Do(func() {
		file_google_cloud_aiplatform_v1beta1_endpoint_proto_rawDescData = protoimpl.X.CompressGZIP(file_google_cloud_aiplatform_v1beta1_endpoint_proto_rawDescData)
	})
	return file_google_cloud_aiplatform_v1beta1_endpoint_proto_rawDescData
}

var file_google_cloud_aiplatform_v1beta1_endpoint_proto_msgTypes = make([]protoimpl.MessageInfo, 4)
var file_google_cloud_aiplatform_v1beta1_endpoint_proto_goTypes = []interface{}{
	(*Endpoint)(nil),              // 0: google.cloud.aiplatform.v1beta1.Endpoint
	(*DeployedModel)(nil),         // 1: google.cloud.aiplatform.v1beta1.DeployedModel
	nil,                           // 2: google.cloud.aiplatform.v1beta1.Endpoint.TrafficSplitEntry
	nil,                           // 3: google.cloud.aiplatform.v1beta1.Endpoint.LabelsEntry
	(*timestamppb.Timestamp)(nil), // 4: google.protobuf.Timestamp
	(*EncryptionSpec)(nil),        // 5: google.cloud.aiplatform.v1beta1.EncryptionSpec
	(*DedicatedResources)(nil),    // 6: google.cloud.aiplatform.v1beta1.DedicatedResources
	(*AutomaticResources)(nil),    // 7: google.cloud.aiplatform.v1beta1.AutomaticResources
	(*ExplanationSpec)(nil),       // 8: google.cloud.aiplatform.v1beta1.ExplanationSpec
}
var file_google_cloud_aiplatform_v1beta1_endpoint_proto_depIdxs = []int32{
	1,  // 0: google.cloud.aiplatform.v1beta1.Endpoint.deployed_models:type_name -> google.cloud.aiplatform.v1beta1.DeployedModel
	2,  // 1: google.cloud.aiplatform.v1beta1.Endpoint.traffic_split:type_name -> google.cloud.aiplatform.v1beta1.Endpoint.TrafficSplitEntry
	3,  // 2: google.cloud.aiplatform.v1beta1.Endpoint.labels:type_name -> google.cloud.aiplatform.v1beta1.Endpoint.LabelsEntry
	4,  // 3: google.cloud.aiplatform.v1beta1.Endpoint.create_time:type_name -> google.protobuf.Timestamp
	4,  // 4: google.cloud.aiplatform.v1beta1.Endpoint.update_time:type_name -> google.protobuf.Timestamp
	5,  // 5: google.cloud.aiplatform.v1beta1.Endpoint.encryption_spec:type_name -> google.cloud.aiplatform.v1beta1.EncryptionSpec
	6,  // 6: google.cloud.aiplatform.v1beta1.DeployedModel.dedicated_resources:type_name -> google.cloud.aiplatform.v1beta1.DedicatedResources
	7,  // 7: google.cloud.aiplatform.v1beta1.DeployedModel.automatic_resources:type_name -> google.cloud.aiplatform.v1beta1.AutomaticResources
	4,  // 8: google.cloud.aiplatform.v1beta1.DeployedModel.create_time:type_name -> google.protobuf.Timestamp
	8,  // 9: google.cloud.aiplatform.v1beta1.DeployedModel.explanation_spec:type_name -> google.cloud.aiplatform.v1beta1.ExplanationSpec
	10, // [10:10] is the sub-list for method output_type
	10, // [10:10] is the sub-list for method input_type
	10, // [10:10] is the sub-list for extension type_name
	10, // [10:10] is the sub-list for extension extendee
	0,  // [0:10] is the sub-list for field type_name
}

func init() { file_google_cloud_aiplatform_v1beta1_endpoint_proto_init() }
func file_google_cloud_aiplatform_v1beta1_endpoint_proto_init() {
	if File_google_cloud_aiplatform_v1beta1_endpoint_proto != nil {
		return
	}
	file_google_cloud_aiplatform_v1beta1_encryption_spec_proto_init()
	file_google_cloud_aiplatform_v1beta1_explanation_proto_init()
	file_google_cloud_aiplatform_v1beta1_machine_resources_proto_init()
	if !protoimpl.UnsafeEnabled {
		file_google_cloud_aiplatform_v1beta1_endpoint_proto_msgTypes[0].Exporter = func(v interface{}, i int) interface{} {
			switch v := v.(*Endpoint); i {
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
		file_google_cloud_aiplatform_v1beta1_endpoint_proto_msgTypes[1].Exporter = func(v interface{}, i int) interface{} {
			switch v := v.(*DeployedModel); i {
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
	file_google_cloud_aiplatform_v1beta1_endpoint_proto_msgTypes[1].OneofWrappers = []interface{}{
		(*DeployedModel_DedicatedResources)(nil),
		(*DeployedModel_AutomaticResources)(nil),
	}
	type x struct{}
	out := protoimpl.TypeBuilder{
		File: protoimpl.DescBuilder{
			GoPackagePath: reflect.TypeOf(x{}).PkgPath(),
			RawDescriptor: file_google_cloud_aiplatform_v1beta1_endpoint_proto_rawDesc,
			NumEnums:      0,
			NumMessages:   4,
			NumExtensions: 0,
			NumServices:   0,
		},
		GoTypes:           file_google_cloud_aiplatform_v1beta1_endpoint_proto_goTypes,
		DependencyIndexes: file_google_cloud_aiplatform_v1beta1_endpoint_proto_depIdxs,
		MessageInfos:      file_google_cloud_aiplatform_v1beta1_endpoint_proto_msgTypes,
	}.Build()
	File_google_cloud_aiplatform_v1beta1_endpoint_proto = out.File
	file_google_cloud_aiplatform_v1beta1_endpoint_proto_rawDesc = nil
	file_google_cloud_aiplatform_v1beta1_endpoint_proto_goTypes = nil
	file_google_cloud_aiplatform_v1beta1_endpoint_proto_depIdxs = nil
}
