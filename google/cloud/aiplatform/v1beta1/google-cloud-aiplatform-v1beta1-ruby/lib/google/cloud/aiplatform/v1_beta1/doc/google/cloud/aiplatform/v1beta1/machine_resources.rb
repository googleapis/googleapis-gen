# Copyright 2020 Google LLC
#
# Licensed under the Apache License, Version 2.0 (the "License");
# you may not use this file except in compliance with the License.
# You may obtain a copy of the License at
#
#     https://www.apache.org/licenses/LICENSE-2.0
#
# Unless required by applicable law or agreed to in writing, software
# distributed under the License is distributed on an "AS IS" BASIS,
# WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
# See the License for the specific language governing permissions and
# limitations under the License.

module Google
  module Cloud
    module Aiplatform
      module V1beta1
        # Specification of a single machine.
        # @!attribute [rw] machine_type
        #   @return [String]
        #     Immutable. The type of the machine. For the machine types supported for prediction,
        #     see https://tinyurl.com/aip-docs/predictions/machine-types.
        #     For machine types supported for creating a custom training job, see
        #     https://tinyurl.com/aip-docs/training/configure-compute.
        #
        #     For {Google::Cloud::Aiplatform::V1beta1::DeployedModel DeployedModel} this field is optional, and the default
        #     value is `n1-standard-2`. For {Google::Cloud::Aiplatform::V1beta1::BatchPredictionJob BatchPredictionJob} or as part of
        #     {Google::Cloud::Aiplatform::V1beta1::WorkerPoolSpec WorkerPoolSpec} this field is required.
        # @!attribute [rw] accelerator_type
        #   @return [Google::Cloud::Aiplatform::V1beta1::AcceleratorType]
        #     Immutable. The type of accelerator(s) that may be attached to the machine as per
        #     {Google::Cloud::Aiplatform::V1beta1::MachineSpec#accelerator_count accelerator_count}.
        # @!attribute [rw] accelerator_count
        #   @return [Integer]
        #     The number of accelerators to attach to the machine.
        class MachineSpec; end

        # A description of resources that are dedicated to a DeployedModel, and
        # that need a higher degree of manual configuration.
        # @!attribute [rw] machine_spec
        #   @return [Google::Cloud::Aiplatform::V1beta1::MachineSpec]
        #     Required. Immutable. The specification of a single machine used by the prediction.
        # @!attribute [rw] min_replica_count
        #   @return [Integer]
        #     Required. Immutable. The minimum number of machine replicas this DeployedModel will be always
        #     deployed on. If traffic against it increases, it may dynamically be
        #     deployed onto more replicas, and as traffic decreases, some of these extra
        #     replicas may be freed.
        #     Note: if {Google::Cloud::Aiplatform::V1beta1::MachineSpec#accelerator_count machine_spec::accelerator_count} is
        #     above 0, currently the model will be always deployed precisely on
        #     {Google::Cloud::Aiplatform::V1beta1::DedicatedResources#min_replica_count min_replica_count}.
        # @!attribute [rw] max_replica_count
        #   @return [Integer]
        #     Immutable. The maximum number of replicas this DeployedModel may be deployed on when
        #     the traffic against it increases. If requested value is too large,
        #     the deployment will error, but if deployment succeeds then the ability
        #     to scale the model to that many replicas is guaranteed (barring service
        #     outages). If traffic against the DeployedModel increases beyond what its
        #     replicas at maximum may handle, a portion of the traffic will be dropped.
        #     If this value is not provided, will use {Google::Cloud::Aiplatform::V1beta1::DedicatedResources#min_replica_count min_replica_count} as the
        #     default value.
        class DedicatedResources; end

        # A description of resources that to large degree are decided by AI Platform,
        # and require only a modest additional configuration.
        # Each Model supporting these resources documents its specific guidelines.
        # @!attribute [rw] min_replica_count
        #   @return [Integer]
        #     Immutable. The minimum number of replicas this DeployedModel will be always deployed
        #     on. If traffic against it increases, it may dynamically be deployed onto
        #     more replicas up to {Google::Cloud::Aiplatform::V1beta1::AutomaticResources#max_replica_count max_replica_count}, and as traffic decreases, some
        #     of these extra replicas may be freed.
        #     If requested value is too large, the deployment will error.
        # @!attribute [rw] max_replica_count
        #   @return [Integer]
        #     Immutable. The maximum number of replicas this DeployedModel may be deployed on when
        #     the traffic against it increases. If requested value is too large,
        #     the deployment will error, but if deployment succeeds then the ability
        #     to scale the model to that many replicas is guaranteed (barring service
        #     outages). If traffic against the DeployedModel increases beyond what its
        #     replicas at maximum may handle, a portion of the traffic will be dropped.
        #     If this value is not provided, a no upper bound for scaling under heavy
        #     traffic will be assume, though AI Platform may be unable to scale beyond
        #     certain replica number.
        class AutomaticResources; end

        # A description of resources that are used for performing batch operations, are
        # dedicated to a Model, and need manual configuration.
        # @!attribute [rw] machine_spec
        #   @return [Google::Cloud::Aiplatform::V1beta1::MachineSpec]
        #     Required. Immutable. The specification of a single machine.
        # @!attribute [rw] starting_replica_count
        #   @return [Integer]
        #     Immutable. The number of machine replicas used at the start of the batch operation.
        #     If not set, AI Platform decides starting number, not greater than
        #     {Google::Cloud::Aiplatform::V1beta1::BatchDedicatedResources#max_replica_count max_replica_count}
        # @!attribute [rw] max_replica_count
        #   @return [Integer]
        #     Immutable. The maximum number of machine replicas the batch operation may be scaled
        #     to. The default value is 10.
        class BatchDedicatedResources; end

        # Statistics information about resource consumption.
        # @!attribute [rw] replica_hours
        #   @return [Float]
        #     Output only. The number of replica hours used. Note that many replicas may run in
        #     parallel, and additionally any given work may be queued for some time.
        #     Therefore this value is not strictly related to wall time.
        class ResourcesConsumed; end

        # Represents the spec of disk options.
        # @!attribute [rw] boot_disk_type
        #   @return [String]
        #     Type of the boot disk (default is "pd-ssd").
        #     Valid values: "pd-ssd" (Persistent Disk Solid State Drive) or
        #     "pd-standard" (Persistent Disk Hard Disk Drive).
        # @!attribute [rw] boot_disk_size_gb
        #   @return [Integer]
        #     Size in GB of the boot disk (default is 100GB).
        class DiskSpec; end
      end
    end
  end
end