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
        # Used to assign specific AnnotationSpec to a particular area of a DataItem or
        # the whole part of the DataItem.
        # @!attribute [rw] name
        #   @return [String]
        #     Output only. Resource name of the Annotation.
        # @!attribute [rw] payload_schema_uri
        #   @return [String]
        #     Required. Google Cloud Storage URI points to a YAML file describing {Google::Cloud::Aiplatform::V1::Annotation#payload payload}. The
        #     schema is defined as an
        #     [OpenAPI 3.0.2 Schema Object](https://tinyurl.com/y538mdwt).
        #     The schema files that can be used here are found in
        #     gs://google-cloud-aiplatform/schema/dataset/annotation/, note that the
        #     chosen schema must be consistent with the parent Dataset's
        #     {Google::Cloud::Aiplatform::V1::Dataset#metadata_schema_uri metadata}.
        # @!attribute [rw] payload
        #   @return [Google::Protobuf::Value]
        #     Required. The schema of the payload can be found in
        #     {Google::Cloud::Aiplatform::V1::Annotation#payload_schema_uri payload_schema}.
        # @!attribute [rw] create_time
        #   @return [Google::Protobuf::Timestamp]
        #     Output only. Timestamp when this Annotation was created.
        # @!attribute [rw] update_time
        #   @return [Google::Protobuf::Timestamp]
        #     Output only. Timestamp when this Annotation was last updated.
        # @!attribute [rw] etag
        #   @return [String]
        #     Optional. Used to perform consistent read-modify-write updates. If not set, a blind
        #     "overwrite" update happens.
        # @!attribute [rw] annotation_source
        #   @return [Google::Cloud::Aiplatform::V1::UserActionReference]
        #     Output only. The source of the Annotation.
        # @!attribute [rw] labels
        #   @return [Hash{String => String}]
        #     Optional. The labels with user-defined metadata to organize your Annotations.
        #
        #     Label keys and values can be no longer than 64 characters
        #     (Unicode codepoints), can only contain lowercase letters, numeric
        #     characters, underscores and dashes. International characters are allowed.
        #     No more than 64 user labels can be associated with one Annotation(System
        #     labels are excluded).
        #
        #     See https://goo.gl/xmQnxf for more information and examples of labels.
        #     System reserved label keys are prefixed with "aiplatform.googleapis.com/"
        #     and are immutable. Following system labels exist for each Annotation:
        #
        #     * "aiplatform.googleapis.com/annotation_set_name":
        #       optional, name of the UI's annotation set this Annotation belongs to.
        #       If not set, the Annotation is not visible in the UI.
        #
        #     * "aiplatform.googleapis.com/payload_schema":
        #       output only, its value is the {Google::Cloud::Aiplatform::V1::Annotation#payload_schema_uri payload_schema's}
        #       title.
        class Annotation; end
      end
    end
  end
end