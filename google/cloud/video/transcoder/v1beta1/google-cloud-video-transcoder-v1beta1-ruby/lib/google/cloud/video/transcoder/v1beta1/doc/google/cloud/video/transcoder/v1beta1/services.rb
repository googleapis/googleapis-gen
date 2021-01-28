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
    module Video
      module Transcoder
        module V1beta1
          # Request message for `TranscoderService.CreateJob`.
          # @!attribute [rw] parent
          #   @return [String]
          #     Required. The parent location to create and process this job.
          #     Format: `projects/{project}/locations/{location}`
          # @!attribute [rw] job
          #   @return [Google::Cloud::Video::Transcoder::V1beta1::Job]
          #     Required. Parameters for creating transcoding job.
          class CreateJobRequest; end

          # Request message for `TranscoderService.ListJobs`.
          # The parent location from which to retrieve the collection of jobs.
          # @!attribute [rw] parent
          #   @return [String]
          #     Required. Format: `projects/{project}/locations/{location}`
          # @!attribute [rw] page_size
          #   @return [Integer]
          #     The maximum number of items to return.
          # @!attribute [rw] page_token
          #   @return [String]
          #     The `next_page_token` value returned from a previous List request, if
          #     any.
          class ListJobsRequest; end

          # Request message for `TranscoderService.GetJob`.
          # @!attribute [rw] name
          #   @return [String]
          #     Required. The name of the job to retrieve.
          #     Format: `projects/{project}/locations/{location}/jobs/{job}`
          class GetJobRequest; end

          # Request message for `TranscoderService.DeleteJob`.
          # @!attribute [rw] name
          #   @return [String]
          #     Required. The name of the job to delete.
          #     Format: `projects/{project}/locations/{location}/jobs/{job}`
          class DeleteJobRequest; end

          # Response message for `TranscoderService.ListJobs`.
          # @!attribute [rw] jobs
          #   @return [Array<Google::Cloud::Video::Transcoder::V1beta1::Job>]
          #     List of jobs in the specified region.
          # @!attribute [rw] next_page_token
          #   @return [String]
          #     The pagination token.
          class ListJobsResponse; end

          # Request message for `TranscoderService.CreateJobTemplate`.
          # @!attribute [rw] parent
          #   @return [String]
          #     Required. The parent location to create this job template.
          #     Format: `projects/{project}/locations/{location}`
          # @!attribute [rw] job_template
          #   @return [Google::Cloud::Video::Transcoder::V1beta1::JobTemplate]
          #     Required. Parameters for creating job template.
          # @!attribute [rw] job_template_id
          #   @return [String]
          #     Required. The ID to use for the job template, which will become the final component
          #     of the job template's resource name.
          #
          #     This value should be 4-63 characters, and valid characters must match the
          #     regular expression `[a-zA-Z][a-zA-Z0-9_-]*`.
          class CreateJobTemplateRequest; end

          # Request message for `TranscoderService.ListJobTemplates`.
          # @!attribute [rw] parent
          #   @return [String]
          #     Required. The parent location from which to retrieve the collection of job templates.
          #     Format: `projects/{project}/locations/{location}`
          # @!attribute [rw] page_size
          #   @return [Integer]
          #     The maximum number of items to return.
          # @!attribute [rw] page_token
          #   @return [String]
          #     The `next_page_token` value returned from a previous List request, if
          #     any.
          class ListJobTemplatesRequest; end

          # Request message for `TranscoderService.GetJobTemplate`.
          # @!attribute [rw] name
          #   @return [String]
          #     Required. The name of the job template to retrieve.
          #     Format:
          #     `projects/{project}/locations/{location}/jobTemplates/{job_template}`
          class GetJobTemplateRequest; end

          # Request message for `TranscoderService.DeleteJobTemplate`.
          # @!attribute [rw] name
          #   @return [String]
          #     Required. The name of the job template to delete.
          #     `projects/{project}/locations/{location}/jobTemplates/{job_template}`
          class DeleteJobTemplateRequest; end

          # Response message for `TranscoderService.ListJobTemplates`.
          # @!attribute [rw] job_templates
          #   @return [Array<Google::Cloud::Video::Transcoder::V1beta1::JobTemplate>]
          #     List of job templates in the specified region.
          # @!attribute [rw] next_page_token
          #   @return [String]
          #     The pagination token.
          class ListJobTemplatesResponse; end
        end
      end
    end
  end
end