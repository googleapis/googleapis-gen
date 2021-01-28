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
        # The Google Cloud Storage location for the input content.
        # @!attribute [rw] uris
        #   @return [Array<String>]
        #     Required. Google Cloud Storage URI(-s) to the input file(s). May contain
        #     wildcards. For more information on wildcards, see
        #     https://cloud.google.com/storage/docs/gsutil/addlhelp/WildcardNames.
        class GcsSource; end

        # The Google Cloud Storage location where the output is to be written to.
        # @!attribute [rw] output_uri_prefix
        #   @return [String]
        #     Required. Google Cloud Storage URI to output directory. If the uri doesn't end with
        #     '/', a '/' will be automatically appended. The directory is created if it
        #     doesn't exist.
        class GcsDestination; end

        # The BigQuery location for the input content.
        # @!attribute [rw] input_uri
        #   @return [String]
        #     Required. BigQuery URI to a table, up to 2000 characters long.
        #     Accepted forms:
        #
        #     * BigQuery path. For example: `bq://projectId.bqDatasetId.bqTableId`.
        class BigQuerySource; end

        # The BigQuery location for the output content.
        # @!attribute [rw] output_uri
        #   @return [String]
        #     Required. BigQuery URI to a project, up to 2000 characters long.
        #     Accepted forms:
        #
        #     * BigQuery path. For example: `bq://projectId`.
        class BigQueryDestination; end

        # The Container Regsitry location for the container image.
        # @!attribute [rw] output_uri
        #   @return [String]
        #     Required. Container Registry URI of a container image.
        #     Only Google Container Registry and Artifact Registry are supported now.
        #     Accepted forms:
        #
        #     * Google Container Registry path. For example:
        #       `gcr.io/projectId/imageName:tag`.
        #
        #     * Artifact Registry path. For example:
        #       `us-central1-docker.pkg.dev/projectId/repoName/imageName:tag`.
        #
        #     If a tag is not specified, "latest" will be used as the default tag.
        class ContainerRegistryDestination; end
      end
    end
  end
end