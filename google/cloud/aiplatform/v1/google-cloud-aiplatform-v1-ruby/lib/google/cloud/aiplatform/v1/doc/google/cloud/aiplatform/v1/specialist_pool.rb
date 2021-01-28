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
      module V1
        # SpecialistPool represents customers' own workforce to work on their data
        # labeling jobs. It includes a group of specialist managers who are responsible
        # for managing the labelers in this pool as well as customers' data labeling
        # jobs associated with this pool.
        # Customers create specialist pool as well as start data labeling jobs on
        # Cloud, managers and labelers work with the jobs using CrowdCompute console.
        # @!attribute [rw] name
        #   @return [String]
        #     Required. The resource name of the SpecialistPool.
        # @!attribute [rw] display_name
        #   @return [String]
        #     Required. The user-defined name of the SpecialistPool.
        #     The name can be up to 128 characters long and can be consist of any UTF-8
        #     characters.
        #     This field should be unique on project-level.
        # @!attribute [rw] specialist_managers_count
        #   @return [Integer]
        #     Output only. The number of Specialists in this SpecialistPool.
        # @!attribute [rw] specialist_manager_emails
        #   @return [Array<String>]
        #     The email addresses of the specialists in the SpecialistPool.
        # @!attribute [rw] pending_data_labeling_jobs
        #   @return [Array<String>]
        #     Output only. The resource name of the pending data labeling jobs.
        class SpecialistPool; end
      end
    end
  end
end