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
// source: google/cloud/aiplatform/v1beta1/hyperparameter_tuning_job.proto

package aiplatform

import (
	proto "github.com/golang/protobuf/proto"
	_ "google.golang.org/genproto/googleapis/api/annotations"
	status "google.golang.org/genproto/googleapis/rpc/status"
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

// Represents a HyperparameterTuningJob. A HyperparameterTuningJob
// has a Study specification and multiple CustomJobs with identical
// CustomJob specification.
type HyperparameterTuningJob struct {
	state         protoimpl.MessageState
	sizeCache     protoimpl.SizeCache
	unknownFields protoimpl.UnknownFields

	// Output only. Resource name of the HyperparameterTuningJob.
	Name string `protobuf:"bytes,1,opt,name=name,proto3" json:"name,omitempty"`
	// Required. The display name of the HyperparameterTuningJob.
	// The name can be up to 128 characters long and can be consist of any UTF-8
	// characters.
	DisplayName string `protobuf:"bytes,2,opt,name=display_name,json=displayName,proto3" json:"display_name,omitempty"`
	// Required. Study configuration of the HyperparameterTuningJob.
	StudySpec *StudySpec `protobuf:"bytes,4,opt,name=study_spec,json=studySpec,proto3" json:"study_spec,omitempty"`
	// Required. The desired total number of Trials.
	MaxTrialCount int32 `protobuf:"varint,5,opt,name=max_trial_count,json=maxTrialCount,proto3" json:"max_trial_count,omitempty"`
	// Required. The desired number of Trials to run in parallel.
	ParallelTrialCount int32 `protobuf:"varint,6,opt,name=parallel_trial_count,json=parallelTrialCount,proto3" json:"parallel_trial_count,omitempty"`
	// The number of failed Trials that need to be seen before failing
	// the HyperparameterTuningJob.
	//
	// If set to 0, AI Platform decides how many Trials must fail
	// before the whole job fails.
	MaxFailedTrialCount int32 `protobuf:"varint,7,opt,name=max_failed_trial_count,json=maxFailedTrialCount,proto3" json:"max_failed_trial_count,omitempty"`
	// Required. The spec of a trial job. The same spec applies to the CustomJobs created
	// in all the trials.
	TrialJobSpec *CustomJobSpec `protobuf:"bytes,8,opt,name=trial_job_spec,json=trialJobSpec,proto3" json:"trial_job_spec,omitempty"`
	// Output only. Trials of the HyperparameterTuningJob.
	Trials []*Trial `protobuf:"bytes,9,rep,name=trials,proto3" json:"trials,omitempty"`
	// Output only. The detailed state of the job.
	State JobState `protobuf:"varint,10,opt,name=state,proto3,enum=google.cloud.aiplatform.v1beta1.JobState" json:"state,omitempty"`
	// Output only. Time when the HyperparameterTuningJob was created.
	CreateTime *timestamppb.Timestamp `protobuf:"bytes,11,opt,name=create_time,json=createTime,proto3" json:"create_time,omitempty"`
	// Output only. Time when the HyperparameterTuningJob for the first time entered the
	// `JOB_STATE_RUNNING` state.
	StartTime *timestamppb.Timestamp `protobuf:"bytes,12,opt,name=start_time,json=startTime,proto3" json:"start_time,omitempty"`
	// Output only. Time when the HyperparameterTuningJob entered any of the following states:
	// `JOB_STATE_SUCCEEDED`, `JOB_STATE_FAILED`, `JOB_STATE_CANCELLED`.
	EndTime *timestamppb.Timestamp `protobuf:"bytes,13,opt,name=end_time,json=endTime,proto3" json:"end_time,omitempty"`
	// Output only. Time when the HyperparameterTuningJob was most recently updated.
	UpdateTime *timestamppb.Timestamp `protobuf:"bytes,14,opt,name=update_time,json=updateTime,proto3" json:"update_time,omitempty"`
	// Output only. Only populated when job's state is JOB_STATE_FAILED or
	// JOB_STATE_CANCELLED.
	Error *status.Status `protobuf:"bytes,15,opt,name=error,proto3" json:"error,omitempty"`
	// The labels with user-defined metadata to organize HyperparameterTuningJobs.
	//
	// Label keys and values can be no longer than 64 characters
	// (Unicode codepoints), can only contain lowercase letters, numeric
	// characters, underscores and dashes. International characters are allowed.
	//
	// See https://goo.gl/xmQnxf for more information and examples of labels.
	Labels map[string]string `protobuf:"bytes,16,rep,name=labels,proto3" json:"labels,omitempty" protobuf_key:"bytes,1,opt,name=key,proto3" protobuf_val:"bytes,2,opt,name=value,proto3"`
	// Customer-managed encryption key options for a HyperparameterTuningJob.
	// If this is set, then all resources created by the HyperparameterTuningJob
	// will be encrypted with the provided encryption key.
	EncryptionSpec *EncryptionSpec `protobuf:"bytes,17,opt,name=encryption_spec,json=encryptionSpec,proto3" json:"encryption_spec,omitempty"`
}

func (x *HyperparameterTuningJob) Reset() {
	*x = HyperparameterTuningJob{}
	if protoimpl.UnsafeEnabled {
		mi := &file_google_cloud_aiplatform_v1beta1_hyperparameter_tuning_job_proto_msgTypes[0]
		ms := protoimpl.X.MessageStateOf(protoimpl.Pointer(x))
		ms.StoreMessageInfo(mi)
	}
}

func (x *HyperparameterTuningJob) String() string {
	return protoimpl.X.MessageStringOf(x)
}

func (*HyperparameterTuningJob) ProtoMessage() {}

func (x *HyperparameterTuningJob) ProtoReflect() protoreflect.Message {
	mi := &file_google_cloud_aiplatform_v1beta1_hyperparameter_tuning_job_proto_msgTypes[0]
	if protoimpl.UnsafeEnabled && x != nil {
		ms := protoimpl.X.MessageStateOf(protoimpl.Pointer(x))
		if ms.LoadMessageInfo() == nil {
			ms.StoreMessageInfo(mi)
		}
		return ms
	}
	return mi.MessageOf(x)
}

// Deprecated: Use HyperparameterTuningJob.ProtoReflect.Descriptor instead.
func (*HyperparameterTuningJob) Descriptor() ([]byte, []int) {
	return file_google_cloud_aiplatform_v1beta1_hyperparameter_tuning_job_proto_rawDescGZIP(), []int{0}
}

func (x *HyperparameterTuningJob) GetName() string {
	if x != nil {
		return x.Name
	}
	return ""
}

func (x *HyperparameterTuningJob) GetDisplayName() string {
	if x != nil {
		return x.DisplayName
	}
	return ""
}

func (x *HyperparameterTuningJob) GetStudySpec() *StudySpec {
	if x != nil {
		return x.StudySpec
	}
	return nil
}

func (x *HyperparameterTuningJob) GetMaxTrialCount() int32 {
	if x != nil {
		return x.MaxTrialCount
	}
	return 0
}

func (x *HyperparameterTuningJob) GetParallelTrialCount() int32 {
	if x != nil {
		return x.ParallelTrialCount
	}
	return 0
}

func (x *HyperparameterTuningJob) GetMaxFailedTrialCount() int32 {
	if x != nil {
		return x.MaxFailedTrialCount
	}
	return 0
}

func (x *HyperparameterTuningJob) GetTrialJobSpec() *CustomJobSpec {
	if x != nil {
		return x.TrialJobSpec
	}
	return nil
}

func (x *HyperparameterTuningJob) GetTrials() []*Trial {
	if x != nil {
		return x.Trials
	}
	return nil
}

func (x *HyperparameterTuningJob) GetState() JobState {
	if x != nil {
		return x.State
	}
	return JobState_JOB_STATE_UNSPECIFIED
}

func (x *HyperparameterTuningJob) GetCreateTime() *timestamppb.Timestamp {
	if x != nil {
		return x.CreateTime
	}
	return nil
}

func (x *HyperparameterTuningJob) GetStartTime() *timestamppb.Timestamp {
	if x != nil {
		return x.StartTime
	}
	return nil
}

func (x *HyperparameterTuningJob) GetEndTime() *timestamppb.Timestamp {
	if x != nil {
		return x.EndTime
	}
	return nil
}

func (x *HyperparameterTuningJob) GetUpdateTime() *timestamppb.Timestamp {
	if x != nil {
		return x.UpdateTime
	}
	return nil
}

func (x *HyperparameterTuningJob) GetError() *status.Status {
	if x != nil {
		return x.Error
	}
	return nil
}

func (x *HyperparameterTuningJob) GetLabels() map[string]string {
	if x != nil {
		return x.Labels
	}
	return nil
}

func (x *HyperparameterTuningJob) GetEncryptionSpec() *EncryptionSpec {
	if x != nil {
		return x.EncryptionSpec
	}
	return nil
}

var File_google_cloud_aiplatform_v1beta1_hyperparameter_tuning_job_proto protoreflect.FileDescriptor

var file_google_cloud_aiplatform_v1beta1_hyperparameter_tuning_job_proto_rawDesc = []byte{
	0x0a, 0x3f, 0x67, 0x6f, 0x6f, 0x67, 0x6c, 0x65, 0x2f, 0x63, 0x6c, 0x6f, 0x75, 0x64, 0x2f, 0x61,
	0x69, 0x70, 0x6c, 0x61, 0x74, 0x66, 0x6f, 0x72, 0x6d, 0x2f, 0x76, 0x31, 0x62, 0x65, 0x74, 0x61,
	0x31, 0x2f, 0x68, 0x79, 0x70, 0x65, 0x72, 0x70, 0x61, 0x72, 0x61, 0x6d, 0x65, 0x74, 0x65, 0x72,
	0x5f, 0x74, 0x75, 0x6e, 0x69, 0x6e, 0x67, 0x5f, 0x6a, 0x6f, 0x62, 0x2e, 0x70, 0x72, 0x6f, 0x74,
	0x6f, 0x12, 0x1f, 0x67, 0x6f, 0x6f, 0x67, 0x6c, 0x65, 0x2e, 0x63, 0x6c, 0x6f, 0x75, 0x64, 0x2e,
	0x61, 0x69, 0x70, 0x6c, 0x61, 0x74, 0x66, 0x6f, 0x72, 0x6d, 0x2e, 0x76, 0x31, 0x62, 0x65, 0x74,
	0x61, 0x31, 0x1a, 0x1f, 0x67, 0x6f, 0x6f, 0x67, 0x6c, 0x65, 0x2f, 0x61, 0x70, 0x69, 0x2f, 0x66,
	0x69, 0x65, 0x6c, 0x64, 0x5f, 0x62, 0x65, 0x68, 0x61, 0x76, 0x69, 0x6f, 0x72, 0x2e, 0x70, 0x72,
	0x6f, 0x74, 0x6f, 0x1a, 0x19, 0x67, 0x6f, 0x6f, 0x67, 0x6c, 0x65, 0x2f, 0x61, 0x70, 0x69, 0x2f,
	0x72, 0x65, 0x73, 0x6f, 0x75, 0x72, 0x63, 0x65, 0x2e, 0x70, 0x72, 0x6f, 0x74, 0x6f, 0x1a, 0x30,
	0x67, 0x6f, 0x6f, 0x67, 0x6c, 0x65, 0x2f, 0x63, 0x6c, 0x6f, 0x75, 0x64, 0x2f, 0x61, 0x69, 0x70,
	0x6c, 0x61, 0x74, 0x66, 0x6f, 0x72, 0x6d, 0x2f, 0x76, 0x31, 0x62, 0x65, 0x74, 0x61, 0x31, 0x2f,
	0x63, 0x75, 0x73, 0x74, 0x6f, 0x6d, 0x5f, 0x6a, 0x6f, 0x62, 0x2e, 0x70, 0x72, 0x6f, 0x74, 0x6f,
	0x1a, 0x35, 0x67, 0x6f, 0x6f, 0x67, 0x6c, 0x65, 0x2f, 0x63, 0x6c, 0x6f, 0x75, 0x64, 0x2f, 0x61,
	0x69, 0x70, 0x6c, 0x61, 0x74, 0x66, 0x6f, 0x72, 0x6d, 0x2f, 0x76, 0x31, 0x62, 0x65, 0x74, 0x61,
	0x31, 0x2f, 0x65, 0x6e, 0x63, 0x72, 0x79, 0x70, 0x74, 0x69, 0x6f, 0x6e, 0x5f, 0x73, 0x70, 0x65,
	0x63, 0x2e, 0x70, 0x72, 0x6f, 0x74, 0x6f, 0x1a, 0x2f, 0x67, 0x6f, 0x6f, 0x67, 0x6c, 0x65, 0x2f,
	0x63, 0x6c, 0x6f, 0x75, 0x64, 0x2f, 0x61, 0x69, 0x70, 0x6c, 0x61, 0x74, 0x66, 0x6f, 0x72, 0x6d,
	0x2f, 0x76, 0x31, 0x62, 0x65, 0x74, 0x61, 0x31, 0x2f, 0x6a, 0x6f, 0x62, 0x5f, 0x73, 0x74, 0x61,
	0x74, 0x65, 0x2e, 0x70, 0x72, 0x6f, 0x74, 0x6f, 0x1a, 0x2b, 0x67, 0x6f, 0x6f, 0x67, 0x6c, 0x65,
	0x2f, 0x63, 0x6c, 0x6f, 0x75, 0x64, 0x2f, 0x61, 0x69, 0x70, 0x6c, 0x61, 0x74, 0x66, 0x6f, 0x72,
	0x6d, 0x2f, 0x76, 0x31, 0x62, 0x65, 0x74, 0x61, 0x31, 0x2f, 0x73, 0x74, 0x75, 0x64, 0x79, 0x2e,
	0x70, 0x72, 0x6f, 0x74, 0x6f, 0x1a, 0x1f, 0x67, 0x6f, 0x6f, 0x67, 0x6c, 0x65, 0x2f, 0x70, 0x72,
	0x6f, 0x74, 0x6f, 0x62, 0x75, 0x66, 0x2f, 0x74, 0x69, 0x6d, 0x65, 0x73, 0x74, 0x61, 0x6d, 0x70,
	0x2e, 0x70, 0x72, 0x6f, 0x74, 0x6f, 0x1a, 0x17, 0x67, 0x6f, 0x6f, 0x67, 0x6c, 0x65, 0x2f, 0x72,
	0x70, 0x63, 0x2f, 0x73, 0x74, 0x61, 0x74, 0x75, 0x73, 0x2e, 0x70, 0x72, 0x6f, 0x74, 0x6f, 0x1a,
	0x1c, 0x67, 0x6f, 0x6f, 0x67, 0x6c, 0x65, 0x2f, 0x61, 0x70, 0x69, 0x2f, 0x61, 0x6e, 0x6e, 0x6f,
	0x74, 0x61, 0x74, 0x69, 0x6f, 0x6e, 0x73, 0x2e, 0x70, 0x72, 0x6f, 0x74, 0x6f, 0x22, 0xe3, 0x09,
	0x0a, 0x17, 0x48, 0x79, 0x70, 0x65, 0x72, 0x70, 0x61, 0x72, 0x61, 0x6d, 0x65, 0x74, 0x65, 0x72,
	0x54, 0x75, 0x6e, 0x69, 0x6e, 0x67, 0x4a, 0x6f, 0x62, 0x12, 0x17, 0x0a, 0x04, 0x6e, 0x61, 0x6d,
	0x65, 0x18, 0x01, 0x20, 0x01, 0x28, 0x09, 0x42, 0x03, 0xe0, 0x41, 0x03, 0x52, 0x04, 0x6e, 0x61,
	0x6d, 0x65, 0x12, 0x26, 0x0a, 0x0c, 0x64, 0x69, 0x73, 0x70, 0x6c, 0x61, 0x79, 0x5f, 0x6e, 0x61,
	0x6d, 0x65, 0x18, 0x02, 0x20, 0x01, 0x28, 0x09, 0x42, 0x03, 0xe0, 0x41, 0x02, 0x52, 0x0b, 0x64,
	0x69, 0x73, 0x70, 0x6c, 0x61, 0x79, 0x4e, 0x61, 0x6d, 0x65, 0x12, 0x4e, 0x0a, 0x0a, 0x73, 0x74,
	0x75, 0x64, 0x79, 0x5f, 0x73, 0x70, 0x65, 0x63, 0x18, 0x04, 0x20, 0x01, 0x28, 0x0b, 0x32, 0x2a,
	0x2e, 0x67, 0x6f, 0x6f, 0x67, 0x6c, 0x65, 0x2e, 0x63, 0x6c, 0x6f, 0x75, 0x64, 0x2e, 0x61, 0x69,
	0x70, 0x6c, 0x61, 0x74, 0x66, 0x6f, 0x72, 0x6d, 0x2e, 0x76, 0x31, 0x62, 0x65, 0x74, 0x61, 0x31,
	0x2e, 0x53, 0x74, 0x75, 0x64, 0x79, 0x53, 0x70, 0x65, 0x63, 0x42, 0x03, 0xe0, 0x41, 0x02, 0x52,
	0x09, 0x73, 0x74, 0x75, 0x64, 0x79, 0x53, 0x70, 0x65, 0x63, 0x12, 0x2b, 0x0a, 0x0f, 0x6d, 0x61,
	0x78, 0x5f, 0x74, 0x72, 0x69, 0x61, 0x6c, 0x5f, 0x63, 0x6f, 0x75, 0x6e, 0x74, 0x18, 0x05, 0x20,
	0x01, 0x28, 0x05, 0x42, 0x03, 0xe0, 0x41, 0x02, 0x52, 0x0d, 0x6d, 0x61, 0x78, 0x54, 0x72, 0x69,
	0x61, 0x6c, 0x43, 0x6f, 0x75, 0x6e, 0x74, 0x12, 0x35, 0x0a, 0x14, 0x70, 0x61, 0x72, 0x61, 0x6c,
	0x6c, 0x65, 0x6c, 0x5f, 0x74, 0x72, 0x69, 0x61, 0x6c, 0x5f, 0x63, 0x6f, 0x75, 0x6e, 0x74, 0x18,
	0x06, 0x20, 0x01, 0x28, 0x05, 0x42, 0x03, 0xe0, 0x41, 0x02, 0x52, 0x12, 0x70, 0x61, 0x72, 0x61,
	0x6c, 0x6c, 0x65, 0x6c, 0x54, 0x72, 0x69, 0x61, 0x6c, 0x43, 0x6f, 0x75, 0x6e, 0x74, 0x12, 0x33,
	0x0a, 0x16, 0x6d, 0x61, 0x78, 0x5f, 0x66, 0x61, 0x69, 0x6c, 0x65, 0x64, 0x5f, 0x74, 0x72, 0x69,
	0x61, 0x6c, 0x5f, 0x63, 0x6f, 0x75, 0x6e, 0x74, 0x18, 0x07, 0x20, 0x01, 0x28, 0x05, 0x52, 0x13,
	0x6d, 0x61, 0x78, 0x46, 0x61, 0x69, 0x6c, 0x65, 0x64, 0x54, 0x72, 0x69, 0x61, 0x6c, 0x43, 0x6f,
	0x75, 0x6e, 0x74, 0x12, 0x59, 0x0a, 0x0e, 0x74, 0x72, 0x69, 0x61, 0x6c, 0x5f, 0x6a, 0x6f, 0x62,
	0x5f, 0x73, 0x70, 0x65, 0x63, 0x18, 0x08, 0x20, 0x01, 0x28, 0x0b, 0x32, 0x2e, 0x2e, 0x67, 0x6f,
	0x6f, 0x67, 0x6c, 0x65, 0x2e, 0x63, 0x6c, 0x6f, 0x75, 0x64, 0x2e, 0x61, 0x69, 0x70, 0x6c, 0x61,
	0x74, 0x66, 0x6f, 0x72, 0x6d, 0x2e, 0x76, 0x31, 0x62, 0x65, 0x74, 0x61, 0x31, 0x2e, 0x43, 0x75,
	0x73, 0x74, 0x6f, 0x6d, 0x4a, 0x6f, 0x62, 0x53, 0x70, 0x65, 0x63, 0x42, 0x03, 0xe0, 0x41, 0x02,
	0x52, 0x0c, 0x74, 0x72, 0x69, 0x61, 0x6c, 0x4a, 0x6f, 0x62, 0x53, 0x70, 0x65, 0x63, 0x12, 0x43,
	0x0a, 0x06, 0x74, 0x72, 0x69, 0x61, 0x6c, 0x73, 0x18, 0x09, 0x20, 0x03, 0x28, 0x0b, 0x32, 0x26,
	0x2e, 0x67, 0x6f, 0x6f, 0x67, 0x6c, 0x65, 0x2e, 0x63, 0x6c, 0x6f, 0x75, 0x64, 0x2e, 0x61, 0x69,
	0x70, 0x6c, 0x61, 0x74, 0x66, 0x6f, 0x72, 0x6d, 0x2e, 0x76, 0x31, 0x62, 0x65, 0x74, 0x61, 0x31,
	0x2e, 0x54, 0x72, 0x69, 0x61, 0x6c, 0x42, 0x03, 0xe0, 0x41, 0x03, 0x52, 0x06, 0x74, 0x72, 0x69,
	0x61, 0x6c, 0x73, 0x12, 0x44, 0x0a, 0x05, 0x73, 0x74, 0x61, 0x74, 0x65, 0x18, 0x0a, 0x20, 0x01,
	0x28, 0x0e, 0x32, 0x29, 0x2e, 0x67, 0x6f, 0x6f, 0x67, 0x6c, 0x65, 0x2e, 0x63, 0x6c, 0x6f, 0x75,
	0x64, 0x2e, 0x61, 0x69, 0x70, 0x6c, 0x61, 0x74, 0x66, 0x6f, 0x72, 0x6d, 0x2e, 0x76, 0x31, 0x62,
	0x65, 0x74, 0x61, 0x31, 0x2e, 0x4a, 0x6f, 0x62, 0x53, 0x74, 0x61, 0x74, 0x65, 0x42, 0x03, 0xe0,
	0x41, 0x03, 0x52, 0x05, 0x73, 0x74, 0x61, 0x74, 0x65, 0x12, 0x40, 0x0a, 0x0b, 0x63, 0x72, 0x65,
	0x61, 0x74, 0x65, 0x5f, 0x74, 0x69, 0x6d, 0x65, 0x18, 0x0b, 0x20, 0x01, 0x28, 0x0b, 0x32, 0x1a,
	0x2e, 0x67, 0x6f, 0x6f, 0x67, 0x6c, 0x65, 0x2e, 0x70, 0x72, 0x6f, 0x74, 0x6f, 0x62, 0x75, 0x66,
	0x2e, 0x54, 0x69, 0x6d, 0x65, 0x73, 0x74, 0x61, 0x6d, 0x70, 0x42, 0x03, 0xe0, 0x41, 0x03, 0x52,
	0x0a, 0x63, 0x72, 0x65, 0x61, 0x74, 0x65, 0x54, 0x69, 0x6d, 0x65, 0x12, 0x3e, 0x0a, 0x0a, 0x73,
	0x74, 0x61, 0x72, 0x74, 0x5f, 0x74, 0x69, 0x6d, 0x65, 0x18, 0x0c, 0x20, 0x01, 0x28, 0x0b, 0x32,
	0x1a, 0x2e, 0x67, 0x6f, 0x6f, 0x67, 0x6c, 0x65, 0x2e, 0x70, 0x72, 0x6f, 0x74, 0x6f, 0x62, 0x75,
	0x66, 0x2e, 0x54, 0x69, 0x6d, 0x65, 0x73, 0x74, 0x61, 0x6d, 0x70, 0x42, 0x03, 0xe0, 0x41, 0x03,
	0x52, 0x09, 0x73, 0x74, 0x61, 0x72, 0x74, 0x54, 0x69, 0x6d, 0x65, 0x12, 0x3a, 0x0a, 0x08, 0x65,
	0x6e, 0x64, 0x5f, 0x74, 0x69, 0x6d, 0x65, 0x18, 0x0d, 0x20, 0x01, 0x28, 0x0b, 0x32, 0x1a, 0x2e,
	0x67, 0x6f, 0x6f, 0x67, 0x6c, 0x65, 0x2e, 0x70, 0x72, 0x6f, 0x74, 0x6f, 0x62, 0x75, 0x66, 0x2e,
	0x54, 0x69, 0x6d, 0x65, 0x73, 0x74, 0x61, 0x6d, 0x70, 0x42, 0x03, 0xe0, 0x41, 0x03, 0x52, 0x07,
	0x65, 0x6e, 0x64, 0x54, 0x69, 0x6d, 0x65, 0x12, 0x40, 0x0a, 0x0b, 0x75, 0x70, 0x64, 0x61, 0x74,
	0x65, 0x5f, 0x74, 0x69, 0x6d, 0x65, 0x18, 0x0e, 0x20, 0x01, 0x28, 0x0b, 0x32, 0x1a, 0x2e, 0x67,
	0x6f, 0x6f, 0x67, 0x6c, 0x65, 0x2e, 0x70, 0x72, 0x6f, 0x74, 0x6f, 0x62, 0x75, 0x66, 0x2e, 0x54,
	0x69, 0x6d, 0x65, 0x73, 0x74, 0x61, 0x6d, 0x70, 0x42, 0x03, 0xe0, 0x41, 0x03, 0x52, 0x0a, 0x75,
	0x70, 0x64, 0x61, 0x74, 0x65, 0x54, 0x69, 0x6d, 0x65, 0x12, 0x2d, 0x0a, 0x05, 0x65, 0x72, 0x72,
	0x6f, 0x72, 0x18, 0x0f, 0x20, 0x01, 0x28, 0x0b, 0x32, 0x12, 0x2e, 0x67, 0x6f, 0x6f, 0x67, 0x6c,
	0x65, 0x2e, 0x72, 0x70, 0x63, 0x2e, 0x53, 0x74, 0x61, 0x74, 0x75, 0x73, 0x42, 0x03, 0xe0, 0x41,
	0x03, 0x52, 0x05, 0x65, 0x72, 0x72, 0x6f, 0x72, 0x12, 0x5c, 0x0a, 0x06, 0x6c, 0x61, 0x62, 0x65,
	0x6c, 0x73, 0x18, 0x10, 0x20, 0x03, 0x28, 0x0b, 0x32, 0x44, 0x2e, 0x67, 0x6f, 0x6f, 0x67, 0x6c,
	0x65, 0x2e, 0x63, 0x6c, 0x6f, 0x75, 0x64, 0x2e, 0x61, 0x69, 0x70, 0x6c, 0x61, 0x74, 0x66, 0x6f,
	0x72, 0x6d, 0x2e, 0x76, 0x31, 0x62, 0x65, 0x74, 0x61, 0x31, 0x2e, 0x48, 0x79, 0x70, 0x65, 0x72,
	0x70, 0x61, 0x72, 0x61, 0x6d, 0x65, 0x74, 0x65, 0x72, 0x54, 0x75, 0x6e, 0x69, 0x6e, 0x67, 0x4a,
	0x6f, 0x62, 0x2e, 0x4c, 0x61, 0x62, 0x65, 0x6c, 0x73, 0x45, 0x6e, 0x74, 0x72, 0x79, 0x52, 0x06,
	0x6c, 0x61, 0x62, 0x65, 0x6c, 0x73, 0x12, 0x58, 0x0a, 0x0f, 0x65, 0x6e, 0x63, 0x72, 0x79, 0x70,
	0x74, 0x69, 0x6f, 0x6e, 0x5f, 0x73, 0x70, 0x65, 0x63, 0x18, 0x11, 0x20, 0x01, 0x28, 0x0b, 0x32,
	0x2f, 0x2e, 0x67, 0x6f, 0x6f, 0x67, 0x6c, 0x65, 0x2e, 0x63, 0x6c, 0x6f, 0x75, 0x64, 0x2e, 0x61,
	0x69, 0x70, 0x6c, 0x61, 0x74, 0x66, 0x6f, 0x72, 0x6d, 0x2e, 0x76, 0x31, 0x62, 0x65, 0x74, 0x61,
	0x31, 0x2e, 0x45, 0x6e, 0x63, 0x72, 0x79, 0x70, 0x74, 0x69, 0x6f, 0x6e, 0x53, 0x70, 0x65, 0x63,
	0x52, 0x0e, 0x65, 0x6e, 0x63, 0x72, 0x79, 0x70, 0x74, 0x69, 0x6f, 0x6e, 0x53, 0x70, 0x65, 0x63,
	0x1a, 0x39, 0x0a, 0x0b, 0x4c, 0x61, 0x62, 0x65, 0x6c, 0x73, 0x45, 0x6e, 0x74, 0x72, 0x79, 0x12,
	0x10, 0x0a, 0x03, 0x6b, 0x65, 0x79, 0x18, 0x01, 0x20, 0x01, 0x28, 0x09, 0x52, 0x03, 0x6b, 0x65,
	0x79, 0x12, 0x14, 0x0a, 0x05, 0x76, 0x61, 0x6c, 0x75, 0x65, 0x18, 0x02, 0x20, 0x01, 0x28, 0x09,
	0x52, 0x05, 0x76, 0x61, 0x6c, 0x75, 0x65, 0x3a, 0x02, 0x38, 0x01, 0x3a, 0x95, 0x01, 0xea, 0x41,
	0x91, 0x01, 0x0a, 0x31, 0x61, 0x69, 0x70, 0x6c, 0x61, 0x74, 0x66, 0x6f, 0x72, 0x6d, 0x2e, 0x67,
	0x6f, 0x6f, 0x67, 0x6c, 0x65, 0x61, 0x70, 0x69, 0x73, 0x2e, 0x63, 0x6f, 0x6d, 0x2f, 0x48, 0x79,
	0x70, 0x65, 0x72, 0x70, 0x61, 0x72, 0x61, 0x6d, 0x65, 0x74, 0x65, 0x72, 0x54, 0x75, 0x6e, 0x69,
	0x6e, 0x67, 0x4a, 0x6f, 0x62, 0x12, 0x5c, 0x70, 0x72, 0x6f, 0x6a, 0x65, 0x63, 0x74, 0x73, 0x2f,
	0x7b, 0x70, 0x72, 0x6f, 0x6a, 0x65, 0x63, 0x74, 0x7d, 0x2f, 0x6c, 0x6f, 0x63, 0x61, 0x74, 0x69,
	0x6f, 0x6e, 0x73, 0x2f, 0x7b, 0x6c, 0x6f, 0x63, 0x61, 0x74, 0x69, 0x6f, 0x6e, 0x7d, 0x2f, 0x68,
	0x79, 0x70, 0x65, 0x72, 0x70, 0x61, 0x72, 0x61, 0x6d, 0x65, 0x74, 0x65, 0x72, 0x54, 0x75, 0x6e,
	0x69, 0x6e, 0x67, 0x4a, 0x6f, 0x62, 0x73, 0x2f, 0x7b, 0x68, 0x79, 0x70, 0x65, 0x72, 0x70, 0x61,
	0x72, 0x61, 0x6d, 0x65, 0x74, 0x65, 0x72, 0x5f, 0x74, 0x75, 0x6e, 0x69, 0x6e, 0x67, 0x5f, 0x6a,
	0x6f, 0x62, 0x7d, 0x42, 0x90, 0x01, 0x0a, 0x23, 0x63, 0x6f, 0x6d, 0x2e, 0x67, 0x6f, 0x6f, 0x67,
	0x6c, 0x65, 0x2e, 0x63, 0x6c, 0x6f, 0x75, 0x64, 0x2e, 0x61, 0x69, 0x70, 0x6c, 0x61, 0x74, 0x66,
	0x6f, 0x72, 0x6d, 0x2e, 0x76, 0x31, 0x62, 0x65, 0x74, 0x61, 0x31, 0x42, 0x1c, 0x48, 0x79, 0x70,
	0x65, 0x72, 0x70, 0x61, 0x72, 0x61, 0x6d, 0x65, 0x74, 0x65, 0x72, 0x54, 0x75, 0x6e, 0x69, 0x6e,
	0x67, 0x4a, 0x6f, 0x62, 0x50, 0x72, 0x6f, 0x74, 0x6f, 0x50, 0x01, 0x5a, 0x49, 0x67, 0x6f, 0x6f,
	0x67, 0x6c, 0x65, 0x2e, 0x67, 0x6f, 0x6c, 0x61, 0x6e, 0x67, 0x2e, 0x6f, 0x72, 0x67, 0x2f, 0x67,
	0x65, 0x6e, 0x70, 0x72, 0x6f, 0x74, 0x6f, 0x2f, 0x67, 0x6f, 0x6f, 0x67, 0x6c, 0x65, 0x61, 0x70,
	0x69, 0x73, 0x2f, 0x63, 0x6c, 0x6f, 0x75, 0x64, 0x2f, 0x61, 0x69, 0x70, 0x6c, 0x61, 0x74, 0x66,
	0x6f, 0x72, 0x6d, 0x2f, 0x76, 0x31, 0x62, 0x65, 0x74, 0x61, 0x31, 0x3b, 0x61, 0x69, 0x70, 0x6c,
	0x61, 0x74, 0x66, 0x6f, 0x72, 0x6d, 0x62, 0x06, 0x70, 0x72, 0x6f, 0x74, 0x6f, 0x33,
}

var (
	file_google_cloud_aiplatform_v1beta1_hyperparameter_tuning_job_proto_rawDescOnce sync.Once
	file_google_cloud_aiplatform_v1beta1_hyperparameter_tuning_job_proto_rawDescData = file_google_cloud_aiplatform_v1beta1_hyperparameter_tuning_job_proto_rawDesc
)

func file_google_cloud_aiplatform_v1beta1_hyperparameter_tuning_job_proto_rawDescGZIP() []byte {
	file_google_cloud_aiplatform_v1beta1_hyperparameter_tuning_job_proto_rawDescOnce.Do(func() {
		file_google_cloud_aiplatform_v1beta1_hyperparameter_tuning_job_proto_rawDescData = protoimpl.X.CompressGZIP(file_google_cloud_aiplatform_v1beta1_hyperparameter_tuning_job_proto_rawDescData)
	})
	return file_google_cloud_aiplatform_v1beta1_hyperparameter_tuning_job_proto_rawDescData
}

var file_google_cloud_aiplatform_v1beta1_hyperparameter_tuning_job_proto_msgTypes = make([]protoimpl.MessageInfo, 2)
var file_google_cloud_aiplatform_v1beta1_hyperparameter_tuning_job_proto_goTypes = []interface{}{
	(*HyperparameterTuningJob)(nil), // 0: google.cloud.aiplatform.v1beta1.HyperparameterTuningJob
	nil,                             // 1: google.cloud.aiplatform.v1beta1.HyperparameterTuningJob.LabelsEntry
	(*StudySpec)(nil),               // 2: google.cloud.aiplatform.v1beta1.StudySpec
	(*CustomJobSpec)(nil),           // 3: google.cloud.aiplatform.v1beta1.CustomJobSpec
	(*Trial)(nil),                   // 4: google.cloud.aiplatform.v1beta1.Trial
	(JobState)(0),                   // 5: google.cloud.aiplatform.v1beta1.JobState
	(*timestamppb.Timestamp)(nil),   // 6: google.protobuf.Timestamp
	(*status.Status)(nil),           // 7: google.rpc.Status
	(*EncryptionSpec)(nil),          // 8: google.cloud.aiplatform.v1beta1.EncryptionSpec
}
var file_google_cloud_aiplatform_v1beta1_hyperparameter_tuning_job_proto_depIdxs = []int32{
	2,  // 0: google.cloud.aiplatform.v1beta1.HyperparameterTuningJob.study_spec:type_name -> google.cloud.aiplatform.v1beta1.StudySpec
	3,  // 1: google.cloud.aiplatform.v1beta1.HyperparameterTuningJob.trial_job_spec:type_name -> google.cloud.aiplatform.v1beta1.CustomJobSpec
	4,  // 2: google.cloud.aiplatform.v1beta1.HyperparameterTuningJob.trials:type_name -> google.cloud.aiplatform.v1beta1.Trial
	5,  // 3: google.cloud.aiplatform.v1beta1.HyperparameterTuningJob.state:type_name -> google.cloud.aiplatform.v1beta1.JobState
	6,  // 4: google.cloud.aiplatform.v1beta1.HyperparameterTuningJob.create_time:type_name -> google.protobuf.Timestamp
	6,  // 5: google.cloud.aiplatform.v1beta1.HyperparameterTuningJob.start_time:type_name -> google.protobuf.Timestamp
	6,  // 6: google.cloud.aiplatform.v1beta1.HyperparameterTuningJob.end_time:type_name -> google.protobuf.Timestamp
	6,  // 7: google.cloud.aiplatform.v1beta1.HyperparameterTuningJob.update_time:type_name -> google.protobuf.Timestamp
	7,  // 8: google.cloud.aiplatform.v1beta1.HyperparameterTuningJob.error:type_name -> google.rpc.Status
	1,  // 9: google.cloud.aiplatform.v1beta1.HyperparameterTuningJob.labels:type_name -> google.cloud.aiplatform.v1beta1.HyperparameterTuningJob.LabelsEntry
	8,  // 10: google.cloud.aiplatform.v1beta1.HyperparameterTuningJob.encryption_spec:type_name -> google.cloud.aiplatform.v1beta1.EncryptionSpec
	11, // [11:11] is the sub-list for method output_type
	11, // [11:11] is the sub-list for method input_type
	11, // [11:11] is the sub-list for extension type_name
	11, // [11:11] is the sub-list for extension extendee
	0,  // [0:11] is the sub-list for field type_name
}

func init() { file_google_cloud_aiplatform_v1beta1_hyperparameter_tuning_job_proto_init() }
func file_google_cloud_aiplatform_v1beta1_hyperparameter_tuning_job_proto_init() {
	if File_google_cloud_aiplatform_v1beta1_hyperparameter_tuning_job_proto != nil {
		return
	}
	file_google_cloud_aiplatform_v1beta1_custom_job_proto_init()
	file_google_cloud_aiplatform_v1beta1_encryption_spec_proto_init()
	file_google_cloud_aiplatform_v1beta1_job_state_proto_init()
	file_google_cloud_aiplatform_v1beta1_study_proto_init()
	if !protoimpl.UnsafeEnabled {
		file_google_cloud_aiplatform_v1beta1_hyperparameter_tuning_job_proto_msgTypes[0].Exporter = func(v interface{}, i int) interface{} {
			switch v := v.(*HyperparameterTuningJob); i {
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
			RawDescriptor: file_google_cloud_aiplatform_v1beta1_hyperparameter_tuning_job_proto_rawDesc,
			NumEnums:      0,
			NumMessages:   2,
			NumExtensions: 0,
			NumServices:   0,
		},
		GoTypes:           file_google_cloud_aiplatform_v1beta1_hyperparameter_tuning_job_proto_goTypes,
		DependencyIndexes: file_google_cloud_aiplatform_v1beta1_hyperparameter_tuning_job_proto_depIdxs,
		MessageInfos:      file_google_cloud_aiplatform_v1beta1_hyperparameter_tuning_job_proto_msgTypes,
	}.Build()
	File_google_cloud_aiplatform_v1beta1_hyperparameter_tuning_job_proto = out.File
	file_google_cloud_aiplatform_v1beta1_hyperparameter_tuning_job_proto_rawDesc = nil
	file_google_cloud_aiplatform_v1beta1_hyperparameter_tuning_job_proto_goTypes = nil
	file_google_cloud_aiplatform_v1beta1_hyperparameter_tuning_job_proto_depIdxs = nil
}
