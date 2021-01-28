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
        # Represents a customer-managed encryption key spec that can be applied to
        # a top-level resource.
        # @!attribute [rw] kms_key_name
        #   @return [String]
        #     Required. The Cloud KMS resource identifier of the customer managed encryption key
        #     used to protect a resource. Has the form:
        #     `projects/my-project/locations/my-region/keyRings/my-kr/cryptoKeys/my-key`.
        #     The key needs to be in the same region as where the compute resource is
        #     created.
        class EncryptionSpec; end
      end
    end
  end
end