# -*- coding: utf-8 -*-

# Copyright 2020 Google LLC
#
# Licensed under the Apache License, Version 2.0 (the "License");
# you may not use this file except in compliance with the License.
# You may obtain a copy of the License at
#
#     http://www.apache.org/licenses/LICENSE-2.0
#
# Unless required by applicable law or agreed to in writing, software
# distributed under the License is distributed on an "AS IS" BASIS,
# WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
# See the License for the specific language governing permissions and
# limitations under the License.
#

from .user_action_reference import (
    UserActionReference,
)
from .annotation import (
    Annotation,
)
from .annotation_spec import (
    AnnotationSpec,
)
from .completion_stats import (
    CompletionStats,
)
from .encryption_spec import (
    EncryptionSpec,
)
from .io import (
    GcsSource,
    GcsDestination,
    BigQuerySource,
    BigQueryDestination,
    ContainerRegistryDestination,
)
from .machine_resources import (
    MachineSpec,
    DedicatedResources,
    AutomaticResources,
    BatchDedicatedResources,
    ResourcesConsumed,
    DiskSpec,
)
from .manual_batch_tuning_parameters import (
    ManualBatchTuningParameters,
)
from .batch_prediction_job import (
    BatchPredictionJob,
)
from .env_var import (
    EnvVar,
)
from .custom_job import (
    CustomJob,
    CustomJobSpec,
    WorkerPoolSpec,
    ContainerSpec,
    PythonPackageSpec,
    Scheduling,
)
from .data_item import (
    DataItem,
)
from .specialist_pool import (
    SpecialistPool,
)
from .data_labeling_job import (
    DataLabelingJob,
    ActiveLearningConfig,
    SampleConfig,
    TrainingConfig,
)
from .dataset import (
    Dataset,
    ImportDataConfig,
    ExportDataConfig,
)
from .operation import (
    GenericOperationMetadata,
    DeleteOperationMetadata,
)
from .deployed_model_ref import (
    DeployedModelRef,
)
from .model import (
    Model,
    PredictSchemata,
    ModelContainerSpec,
    Port,
)
from .training_pipeline import (
    TrainingPipeline,
    InputDataConfig,
    FractionSplit,
    FilterSplit,
    PredefinedSplit,
    TimestampSplit,
)
from .dataset_service import (
    CreateDatasetRequest,
    CreateDatasetOperationMetadata,
    GetDatasetRequest,
    UpdateDatasetRequest,
    ListDatasetsRequest,
    ListDatasetsResponse,
    DeleteDatasetRequest,
    ImportDataRequest,
    ImportDataResponse,
    ImportDataOperationMetadata,
    ExportDataRequest,
    ExportDataResponse,
    ExportDataOperationMetadata,
    ListDataItemsRequest,
    ListDataItemsResponse,
    GetAnnotationSpecRequest,
    ListAnnotationsRequest,
    ListAnnotationsResponse,
)
from .endpoint import (
    Endpoint,
    DeployedModel,
)
from .endpoint_service import (
    CreateEndpointRequest,
    CreateEndpointOperationMetadata,
    GetEndpointRequest,
    ListEndpointsRequest,
    ListEndpointsResponse,
    UpdateEndpointRequest,
    DeleteEndpointRequest,
    DeployModelRequest,
    DeployModelResponse,
    DeployModelOperationMetadata,
    UndeployModelRequest,
    UndeployModelResponse,
    UndeployModelOperationMetadata,
)
from .study import (
    Trial,
    StudySpec,
    Measurement,
)
from .hyperparameter_tuning_job import (
    HyperparameterTuningJob,
)
from .job_service import (
    CreateCustomJobRequest,
    GetCustomJobRequest,
    ListCustomJobsRequest,
    ListCustomJobsResponse,
    DeleteCustomJobRequest,
    CancelCustomJobRequest,
    CreateDataLabelingJobRequest,
    GetDataLabelingJobRequest,
    ListDataLabelingJobsRequest,
    ListDataLabelingJobsResponse,
    DeleteDataLabelingJobRequest,
    CancelDataLabelingJobRequest,
    CreateHyperparameterTuningJobRequest,
    GetHyperparameterTuningJobRequest,
    ListHyperparameterTuningJobsRequest,
    ListHyperparameterTuningJobsResponse,
    DeleteHyperparameterTuningJobRequest,
    CancelHyperparameterTuningJobRequest,
    CreateBatchPredictionJobRequest,
    GetBatchPredictionJobRequest,
    ListBatchPredictionJobsRequest,
    ListBatchPredictionJobsResponse,
    DeleteBatchPredictionJobRequest,
    CancelBatchPredictionJobRequest,
)
from .migratable_resource import (
    MigratableResource,
)
from .migration_service import (
    SearchMigratableResourcesRequest,
    SearchMigratableResourcesResponse,
    BatchMigrateResourcesRequest,
    MigrateResourceRequest,
    BatchMigrateResourcesResponse,
    MigrateResourceResponse,
    BatchMigrateResourcesOperationMetadata,
)
from .model_evaluation import (
    ModelEvaluation,
)
from .model_evaluation_slice import (
    ModelEvaluationSlice,
)
from .model_service import (
    UploadModelRequest,
    UploadModelOperationMetadata,
    UploadModelResponse,
    GetModelRequest,
    ListModelsRequest,
    ListModelsResponse,
    UpdateModelRequest,
    DeleteModelRequest,
    ExportModelRequest,
    ExportModelOperationMetadata,
    ExportModelResponse,
    GetModelEvaluationRequest,
    ListModelEvaluationsRequest,
    ListModelEvaluationsResponse,
    GetModelEvaluationSliceRequest,
    ListModelEvaluationSlicesRequest,
    ListModelEvaluationSlicesResponse,
)
from .pipeline_service import (
    CreateTrainingPipelineRequest,
    GetTrainingPipelineRequest,
    ListTrainingPipelinesRequest,
    ListTrainingPipelinesResponse,
    DeleteTrainingPipelineRequest,
    CancelTrainingPipelineRequest,
)
from .prediction_service import (
    PredictRequest,
    PredictResponse,
)
from .specialist_pool_service import (
    CreateSpecialistPoolRequest,
    CreateSpecialistPoolOperationMetadata,
    GetSpecialistPoolRequest,
    ListSpecialistPoolsRequest,
    ListSpecialistPoolsResponse,
    DeleteSpecialistPoolRequest,
    UpdateSpecialistPoolRequest,
    UpdateSpecialistPoolOperationMetadata,
)

__all__ = (
    'AcceleratorType',
    'UserActionReference',
    'Annotation',
    'AnnotationSpec',
    'CompletionStats',
    'EncryptionSpec',
    'GcsSource',
    'GcsDestination',
    'BigQuerySource',
    'BigQueryDestination',
    'ContainerRegistryDestination',
    'JobState',
    'MachineSpec',
    'DedicatedResources',
    'AutomaticResources',
    'BatchDedicatedResources',
    'ResourcesConsumed',
    'DiskSpec',
    'ManualBatchTuningParameters',
    'BatchPredictionJob',
    'EnvVar',
    'CustomJob',
    'CustomJobSpec',
    'WorkerPoolSpec',
    'ContainerSpec',
    'PythonPackageSpec',
    'Scheduling',
    'DataItem',
    'SpecialistPool',
    'DataLabelingJob',
    'ActiveLearningConfig',
    'SampleConfig',
    'TrainingConfig',
    'Dataset',
    'ImportDataConfig',
    'ExportDataConfig',
    'GenericOperationMetadata',
    'DeleteOperationMetadata',
    'DeployedModelRef',
    'Model',
    'PredictSchemata',
    'ModelContainerSpec',
    'Port',
    'PipelineState',
    'TrainingPipeline',
    'InputDataConfig',
    'FractionSplit',
    'FilterSplit',
    'PredefinedSplit',
    'TimestampSplit',
    'CreateDatasetRequest',
    'CreateDatasetOperationMetadata',
    'GetDatasetRequest',
    'UpdateDatasetRequest',
    'ListDatasetsRequest',
    'ListDatasetsResponse',
    'DeleteDatasetRequest',
    'ImportDataRequest',
    'ImportDataResponse',
    'ImportDataOperationMetadata',
    'ExportDataRequest',
    'ExportDataResponse',
    'ExportDataOperationMetadata',
    'ListDataItemsRequest',
    'ListDataItemsResponse',
    'GetAnnotationSpecRequest',
    'ListAnnotationsRequest',
    'ListAnnotationsResponse',
    'Endpoint',
    'DeployedModel',
    'CreateEndpointRequest',
    'CreateEndpointOperationMetadata',
    'GetEndpointRequest',
    'ListEndpointsRequest',
    'ListEndpointsResponse',
    'UpdateEndpointRequest',
    'DeleteEndpointRequest',
    'DeployModelRequest',
    'DeployModelResponse',
    'DeployModelOperationMetadata',
    'UndeployModelRequest',
    'UndeployModelResponse',
    'UndeployModelOperationMetadata',
    'Trial',
    'StudySpec',
    'Measurement',
    'HyperparameterTuningJob',
    'CreateCustomJobRequest',
    'GetCustomJobRequest',
    'ListCustomJobsRequest',
    'ListCustomJobsResponse',
    'DeleteCustomJobRequest',
    'CancelCustomJobRequest',
    'CreateDataLabelingJobRequest',
    'GetDataLabelingJobRequest',
    'ListDataLabelingJobsRequest',
    'ListDataLabelingJobsResponse',
    'DeleteDataLabelingJobRequest',
    'CancelDataLabelingJobRequest',
    'CreateHyperparameterTuningJobRequest',
    'GetHyperparameterTuningJobRequest',
    'ListHyperparameterTuningJobsRequest',
    'ListHyperparameterTuningJobsResponse',
    'DeleteHyperparameterTuningJobRequest',
    'CancelHyperparameterTuningJobRequest',
    'CreateBatchPredictionJobRequest',
    'GetBatchPredictionJobRequest',
    'ListBatchPredictionJobsRequest',
    'ListBatchPredictionJobsResponse',
    'DeleteBatchPredictionJobRequest',
    'CancelBatchPredictionJobRequest',
    'MigratableResource',
    'SearchMigratableResourcesRequest',
    'SearchMigratableResourcesResponse',
    'BatchMigrateResourcesRequest',
    'MigrateResourceRequest',
    'BatchMigrateResourcesResponse',
    'MigrateResourceResponse',
    'BatchMigrateResourcesOperationMetadata',
    'ModelEvaluation',
    'ModelEvaluationSlice',
    'UploadModelRequest',
    'UploadModelOperationMetadata',
    'UploadModelResponse',
    'GetModelRequest',
    'ListModelsRequest',
    'ListModelsResponse',
    'UpdateModelRequest',
    'DeleteModelRequest',
    'ExportModelRequest',
    'ExportModelOperationMetadata',
    'ExportModelResponse',
    'GetModelEvaluationRequest',
    'ListModelEvaluationsRequest',
    'ListModelEvaluationsResponse',
    'GetModelEvaluationSliceRequest',
    'ListModelEvaluationSlicesRequest',
    'ListModelEvaluationSlicesResponse',
    'CreateTrainingPipelineRequest',
    'GetTrainingPipelineRequest',
    'ListTrainingPipelinesRequest',
    'ListTrainingPipelinesResponse',
    'DeleteTrainingPipelineRequest',
    'CancelTrainingPipelineRequest',
    'PredictRequest',
    'PredictResponse',
    'CreateSpecialistPoolRequest',
    'CreateSpecialistPoolOperationMetadata',
    'GetSpecialistPoolRequest',
    'ListSpecialistPoolsRequest',
    'ListSpecialistPoolsResponse',
    'DeleteSpecialistPoolRequest',
    'UpdateSpecialistPoolRequest',
    'UpdateSpecialistPoolOperationMetadata',
)
