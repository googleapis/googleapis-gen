<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/dataset_service.proto

namespace GPBMetadata\Google\Cloud\Aiplatform\V1;

class DatasetService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Annotation::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1\AnnotationSpec::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1\DataItem::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Dataset::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Operation::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1\TrainingPipeline::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        $pool->internalAddGeneratedFile(
            '
�\'
0google/cloud/aiplatform/v1/dataset_service.protogoogle.cloud.aiplatform.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto+google/cloud/aiplatform/v1/annotation.proto0google/cloud/aiplatform/v1/annotation_spec.proto*google/cloud/aiplatform/v1/data_item.proto(google/cloud/aiplatform/v1/dataset.proto*google/cloud/aiplatform/v1/operation.proto2google/cloud/aiplatform/v1/training_pipeline.proto#google/longrunning/operations.proto google/protobuf/field_mask.proto"�
CreateDatasetRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location9
dataset (2#.google.cloud.aiplatform.v1.DatasetB�A"p
CreateDatasetOperationMetadataN
generic_metadata (24.google.cloud.aiplatform.v1.GenericOperationMetadata"{
GetDatasetRequest7
name (	B)�A�A#
!aiplatform.googleapis.com/Dataset-
	read_mask (2.google.protobuf.FieldMask"�
UpdateDatasetRequest9
dataset (2#.google.cloud.aiplatform.v1.DatasetB�A4
update_mask (2.google.protobuf.FieldMaskB�A"�
ListDatasetsRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location
filter (	
	page_size (

page_token (	-
	read_mask (2.google.protobuf.FieldMask
order_by (	"f
ListDatasetsResponse5
datasets (2#.google.cloud.aiplatform.v1.Dataset
next_page_token (	"O
DeleteDatasetRequest7
name (	B)�A�A#
!aiplatform.googleapis.com/Dataset"�
ImportDataRequest7
name (	B)�A�A#
!aiplatform.googleapis.com/DatasetI
import_configs (2,.google.cloud.aiplatform.v1.ImportDataConfigB�A"
ImportDataResponse"m
ImportDataOperationMetadataN
generic_metadata (24.google.cloud.aiplatform.v1.GenericOperationMetadata"�
ExportDataRequest7
name (	B)�A�A#
!aiplatform.googleapis.com/DatasetH
export_config (2,.google.cloud.aiplatform.v1.ExportDataConfigB�A",
ExportDataResponse
exported_files (	"�
ExportDataOperationMetadataN
generic_metadata (24.google.cloud.aiplatform.v1.GenericOperationMetadata
gcs_output_directory (	"�
ListDataItemsRequest9
parent (	B)�A�A#
!aiplatform.googleapis.com/Dataset
filter (	
	page_size (

page_token (	-
	read_mask (2.google.protobuf.FieldMask
order_by (	"j
ListDataItemsResponse8

data_items (2$.google.cloud.aiplatform.v1.DataItem
next_page_token (	"�
GetAnnotationSpecRequest>
name (	B0�A�A*
(aiplatform.googleapis.com/AnnotationSpec-
	read_mask (2.google.protobuf.FieldMask"�
ListAnnotationsRequest:
parent (	B*�A�A$
"aiplatform.googleapis.com/DataItem
filter (	
	page_size (

page_token (	-
	read_mask (2.google.protobuf.FieldMask
order_by (	"o
ListAnnotationsResponse;
annotations (2&.google.cloud.aiplatform.v1.Annotation
next_page_token (	2�
DatasetService�
CreateDataset0.google.cloud.aiplatform.v1.CreateDatasetRequest.google.longrunning.Operation"z���7",/v1/{parent=projects/*/locations/*}/datasets:dataset�Aparent,dataset�A)
DatasetCreateDatasetOperationMetadata�

GetDataset-.google.cloud.aiplatform.v1.GetDatasetRequest#.google.cloud.aiplatform.v1.Dataset";���.,/v1/{name=projects/*/locations/*/datasets/*}�Aname�
UpdateDataset0.google.cloud.aiplatform.v1.UpdateDatasetRequest#.google.cloud.aiplatform.v1.Dataset"[���?24/v1/{dataset.name=projects/*/locations/*/datasets/*}:dataset�Adataset,update_mask�
ListDatasets/.google.cloud.aiplatform.v1.ListDatasetsRequest0.google.cloud.aiplatform.v1.ListDatasetsResponse"=���.,/v1/{parent=projects/*/locations/*}/datasets�Aparent�
DeleteDataset0.google.cloud.aiplatform.v1.DeleteDatasetRequest.google.longrunning.Operation"n���.*,/v1/{name=projects/*/locations/*/datasets/*}�Aname�A0
google.protobuf.EmptyDeleteOperationMetadata�

ImportData-.google.cloud.aiplatform.v1.ImportDataRequest.google.longrunning.Operation"����8"3/v1/{name=projects/*/locations/*/datasets/*}:import:*�Aname,import_configs�A1
ImportDataResponseImportDataOperationMetadata�

ExportData-.google.cloud.aiplatform.v1.ExportDataRequest.google.longrunning.Operation"����8"3/v1/{name=projects/*/locations/*/datasets/*}:export:*�Aname,export_config�A1
ExportDataResponseExportDataOperationMetadata�
ListDataItems0.google.cloud.aiplatform.v1.ListDataItemsRequest1.google.cloud.aiplatform.v1.ListDataItemsResponse"I���:8/v1/{parent=projects/*/locations/*/datasets/*}/dataItems�Aparent�
GetAnnotationSpec4.google.cloud.aiplatform.v1.GetAnnotationSpecRequest*.google.cloud.aiplatform.v1.AnnotationSpec"M���@>/v1/{name=projects/*/locations/*/datasets/*/annotationSpecs/*}�Aname�
ListAnnotations2.google.cloud.aiplatform.v1.ListAnnotationsRequest3.google.cloud.aiplatform.v1.ListAnnotationsResponse"W���HF/v1/{parent=projects/*/locations/*/datasets/*/dataItems/*}/annotations�AparentM�Aaiplatform.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB}
com.google.cloud.aiplatform.v1BDatasetServiceProtoPZDgoogle.golang.org/genproto/googleapis/cloud/aiplatform/v1;aiplatformbproto3'
        , true);

        static::$is_initialized = true;
    }
}

