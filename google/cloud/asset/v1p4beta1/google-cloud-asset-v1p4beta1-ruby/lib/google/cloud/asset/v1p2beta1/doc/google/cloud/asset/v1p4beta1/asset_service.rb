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
    module Asset
      module V1p4beta1
        # IAM policy analysis query message.
        # @!attribute [rw] parent
        #   @return [String]
        #     Required. The relative name of the root asset. Only resources and IAM policies within
        #     the parent will be analyzed. This can only be an organization number (such
        #     as "organizations/123") or a folder number (such as "folders/123").
        # @!attribute [rw] resource_selector
        #   @return [Google::Cloud::Asset::V1p4beta1::IamPolicyAnalysisQuery::ResourceSelector]
        #     Optional. Specifies a resource for analysis. Leaving it empty means ANY.
        # @!attribute [rw] identity_selector
        #   @return [Google::Cloud::Asset::V1p4beta1::IamPolicyAnalysisQuery::IdentitySelector]
        #     Optional. Specifies an identity for analysis. Leaving it empty means ANY.
        # @!attribute [rw] access_selector
        #   @return [Google::Cloud::Asset::V1p4beta1::IamPolicyAnalysisQuery::AccessSelector]
        #     Optional. Specifies roles or permissions for analysis. Leaving it empty
        #     means ANY.
        class IamPolicyAnalysisQuery
          # Specifies the resource to analyze for access policies, which may be set
          # directly on the resource, or on ancestors such as organizations, folders or
          # projects. At least one of {Google::Cloud::Asset::V1p4beta1::IamPolicyAnalysisQuery::ResourceSelector ResourceSelector}, {Google::Cloud::Asset::V1p4beta1::IamPolicyAnalysisQuery::IdentitySelector IdentitySelector} or
          # {Google::Cloud::Asset::V1p4beta1::IamPolicyAnalysisQuery::AccessSelector AccessSelector} must be specified in a request.
          # @!attribute [rw] full_resource_name
          #   @return [String]
          #     Required. The [full resource
          #     name](https://cloud.google.com/apis/design/resource_names#full_resource_name)
          #     .
          class ResourceSelector; end

          # Specifies an identity for which to determine resource access, based on
          # roles assigned either directly to them or to the groups they belong to,
          # directly or indirectly.
          # @!attribute [rw] identity
          #   @return [String]
          #     Required. The identity appear in the form of members in
          #     [IAM policy
          #     binding](https://cloud.google.com/iam/reference/rest/v1/Binding).
          class IdentitySelector; end

          # Specifies roles and/or permissions to analyze, to determine both the
          # identities possessing them and the resources they control. If multiple
          # values are specified, results will include identities and resources
          # matching any of them.
          # @!attribute [rw] roles
          #   @return [Array<String>]
          #     Optional. The roles to appear in result.
          # @!attribute [rw] permissions
          #   @return [Array<String>]
          #     Optional. The permissions to appear in result.
          class AccessSelector; end
        end

        # A request message for {Google::Cloud::Asset::V1p4beta1::AssetService::AnalyzeIamPolicy AssetService::AnalyzeIamPolicy}.
        # @!attribute [rw] analysis_query
        #   @return [Google::Cloud::Asset::V1p4beta1::IamPolicyAnalysisQuery]
        #     Required. The request query.
        # @!attribute [rw] options
        #   @return [Google::Cloud::Asset::V1p4beta1::AnalyzeIamPolicyRequest::Options]
        #     Optional. The request options.
        class AnalyzeIamPolicyRequest
          # Contains request options.
          # @!attribute [rw] expand_groups
          #   @return [true, false]
          #     Optional. If true, the identities section of the result will expand any
          #     Google groups appearing in an IAM policy binding.
          #
          #     If {Identity_selector} is specified, the identity in the result will
          #     be determined by the selector, and this flag will have no effect.
          #
          #     Default is false.
          # @!attribute [rw] expand_roles
          #   @return [true, false]
          #     Optional. If true, the access section of result will expand any roles
          #     appearing in IAM policy bindings to include their permissions.
          #
          #     If {Access_selector} is specified, the access section of the result
          #     will be determined by the selector, and this flag will have no effect.
          #
          #     Default is false.
          # @!attribute [rw] expand_resources
          #   @return [true, false]
          #     Optional. If true, the resource section of the result will expand any
          #     resource attached to an IAM policy to include resources lower in the
          #     resource hierarchy.
          #
          #     For example, if the request analyzes for which resources user A has
          #     permission P, and the results include an IAM policy with P on a GCP
          #     folder, the results will also include resources in that folder with
          #     permission P.
          #
          #     If {Resource_selector} is specified, the resource section of the result
          #     will be determined by the selector, and this flag will have no effect.
          #     Default is false.
          # @!attribute [rw] output_resource_edges
          #   @return [true, false]
          #     Optional. If true, the result will output resource edges, starting
          #     from the policy attached resource, to any expanded resources.
          #     Default is false.
          # @!attribute [rw] output_group_edges
          #   @return [true, false]
          #     Optional. If true, the result will output group identity edges, starting
          #     from the binding's group members, to any expanded identities.
          #     Default is false.
          # @!attribute [rw] analyze_service_account_impersonation
          #   @return [true, false]
          #     Optional. If true, the response will include access analysis from identities to
          #     resources via service account impersonation. This is a very expensive
          #     operation, because many derived queries will be executed. We highly
          #     recommend you use ExportIamPolicyAnalysis rpc instead.
          #
          #     For example, if the request analyzes for which resources user A has
          #     permission P, and there's an IAM policy states user A has
          #     iam.serviceAccounts.getAccessToken permission to a service account SA,
          #     and there's another IAM policy states service account SA has permission P
          #     to a GCP folder F, then user A potentially has access to the GCP folder
          #     F. And those advanced analysis results will be included in
          #     {Google::Cloud::Asset::V1p4beta1::AnalyzeIamPolicyResponse#service_account_impersonation_analysis AnalyzeIamPolicyResponse#service_account_impersonation_analysis}.
          #
          #     Another example, if the request analyzes for who has
          #     permission P to a GCP folder F, and there's an IAM policy states user A
          #     has iam.serviceAccounts.actAs permission to a service account SA, and
          #     there's another IAM policy states service account SA has permission P to
          #     the GCP folder F, then user A potentially has access to the GCP folder
          #     F. And those advanced analysis results will be included in
          #     {Google::Cloud::Asset::V1p4beta1::AnalyzeIamPolicyResponse#service_account_impersonation_analysis AnalyzeIamPolicyResponse#service_account_impersonation_analysis}.
          #
          #     Default is false.
          # @!attribute [rw] execution_timeout
          #   @return [Google::Protobuf::Duration]
          #     Optional. Amount of time executable has to complete.  See JSON representation of
          #     [Duration](https://developers.google.com/protocol-buffers/docs/proto3#json).
          #
          #     If this field is set with a value less than the RPC deadline, and the
          #     execution of your query hasn't finished in the specified
          #     execution timeout,  you will get a response with partial result.
          #     Otherwise, your query's execution will continue until the RPC deadline.
          #     If it's not finished until then, you will get a  DEADLINE_EXCEEDED error.
          #
          #     Default is empty.
          class Options; end
        end

        # A response message for {Google::Cloud::Asset::V1p4beta1::AssetService::AnalyzeIamPolicy AssetService::AnalyzeIamPolicy}.
        # @!attribute [rw] main_analysis
        #   @return [Google::Cloud::Asset::V1p4beta1::AnalyzeIamPolicyResponse::IamPolicyAnalysis]
        #     The main analysis that matches the original request.
        # @!attribute [rw] service_account_impersonation_analysis
        #   @return [Array<Google::Cloud::Asset::V1p4beta1::AnalyzeIamPolicyResponse::IamPolicyAnalysis>]
        #     The service account impersonation analysis if
        #     {AnalyzeIamPolicyRequest#analyze_service_account_impersonation} is
        #     enabled.
        # @!attribute [rw] fully_explored
        #   @return [true, false]
        #     Represents whether all entries in the {Google::Cloud::Asset::V1p4beta1::AnalyzeIamPolicyResponse#main_analysis main_analysis} and
        #     {Google::Cloud::Asset::V1p4beta1::AnalyzeIamPolicyResponse#service_account_impersonation_analysis service_account_impersonation_analysis} have been fully explored to
        #     answer the query in the request.
        # @!attribute [rw] non_critical_errors
        #   @return [Array<Google::Cloud::Asset::V1p4beta1::IamPolicyAnalysisResult::AnalysisState>]
        #     A list of non-critical errors happened during the request handling to
        #     explain why `fully_explored` is false, or empty if no error happened.
        class AnalyzeIamPolicyResponse
          # An analysis message to group the query and results.
          # @!attribute [rw] analysis_query
          #   @return [Google::Cloud::Asset::V1p4beta1::IamPolicyAnalysisQuery]
          #     The analysis query.
          # @!attribute [rw] analysis_results
          #   @return [Array<Google::Cloud::Asset::V1p4beta1::IamPolicyAnalysisResult>]
          #     A list of {Google::Cloud::Asset::V1p4beta1::IamPolicyAnalysisResult IamPolicyAnalysisResult} that matches the analysis query, or
          #     empty if no result is found.
          # @!attribute [rw] fully_explored
          #   @return [true, false]
          #     Represents whether all entries in the {Google::Cloud::Asset::V1p4beta1::AnalyzeIamPolicyResponse::IamPolicyAnalysis#analysis_results analysis_results} have been
          #     fully explored to answer the query.
          class IamPolicyAnalysis; end
        end

        # Output configuration for export IAM policy analysis destination.
        # @!attribute [rw] gcs_destination
        #   @return [Google::Cloud::Asset::V1p4beta1::IamPolicyAnalysisOutputConfig::GcsDestination]
        #     Destination on Cloud Storage.
        class IamPolicyAnalysisOutputConfig
          # A Cloud Storage location.
          # @!attribute [rw] uri
          #   @return [String]
          #     Required. The uri of the Cloud Storage object. It's the same uri that is used by
          #     gsutil. For example: "gs://bucket_name/object_name". See [Viewing and
          #     Editing Object
          #     Metadata](https://cloud.google.com/storage/docs/viewing-editing-metadata)
          #     for more information.
          class GcsDestination; end
        end

        # A request message for {Google::Cloud::Asset::V1p4beta1::AssetService::ExportIamPolicyAnalysis AssetService::ExportIamPolicyAnalysis}.
        # @!attribute [rw] analysis_query
        #   @return [Google::Cloud::Asset::V1p4beta1::IamPolicyAnalysisQuery]
        #     Required. The request query.
        # @!attribute [rw] options
        #   @return [Google::Cloud::Asset::V1p4beta1::ExportIamPolicyAnalysisRequest::Options]
        #     Optional. The request options.
        # @!attribute [rw] output_config
        #   @return [Google::Cloud::Asset::V1p4beta1::IamPolicyAnalysisOutputConfig]
        #     Required. Output configuration indicating where the results will be output to.
        class ExportIamPolicyAnalysisRequest
          # Contains request options.
          # @!attribute [rw] expand_groups
          #   @return [true, false]
          #     Optional. If true, the identities section of the result will expand any
          #     Google groups appearing in an IAM policy binding.
          #
          #     If {Identity_selector} is specified, the identity in the result will
          #     be determined by the selector, and this flag will have no effect.
          #
          #     Default is false.
          # @!attribute [rw] expand_roles
          #   @return [true, false]
          #     Optional. If true, the access section of result will expand any roles
          #     appearing in IAM policy bindings to include their permissions.
          #
          #     If {Access_selector} is specified, the access section of the result
          #     will be determined by the selector, and this flag will have no effect.
          #
          #     Default is false.
          # @!attribute [rw] expand_resources
          #   @return [true, false]
          #     Optional. If true, the resource section of the result will expand any
          #     resource attached to an IAM policy to include resources lower in the
          #     resource hierarchy.
          #
          #     For example, if the request analyzes for which resources user A has
          #     permission P, and the results include an IAM policy with P on a GCP
          #     folder, the results will also include resources in that folder with
          #     permission P.
          #
          #     If {Resource_selector} is specified, the resource section of the result
          #     will be determined by the selector, and this flag will have no effect.
          #     Default is false.
          # @!attribute [rw] output_resource_edges
          #   @return [true, false]
          #     Optional. If true, the result will output resource edges, starting
          #     from the policy attached resource, to any expanded resources.
          #     Default is false.
          # @!attribute [rw] output_group_edges
          #   @return [true, false]
          #     Optional. If true, the result will output group identity edges, starting
          #     from the binding's group members, to any expanded identities.
          #     Default is false.
          # @!attribute [rw] analyze_service_account_impersonation
          #   @return [true, false]
          #     Optional. If true, the response will include access analysis from identities to
          #     resources via service account impersonation. This is a very expensive
          #     operation, because many derived queries will be executed.
          #
          #     For example, if the request analyzes for which resources user A has
          #     permission P, and there's an IAM policy states user A has
          #     iam.serviceAccounts.getAccessToken permission to a service account SA,
          #     and there's another IAM policy states service account SA has permission P
          #     to a GCP folder F, then user A potentially has access to the GCP folder
          #     F. And those advanced analysis results will be included in
          #     {Google::Cloud::Asset::V1p4beta1::AnalyzeIamPolicyResponse#service_account_impersonation_analysis AnalyzeIamPolicyResponse#service_account_impersonation_analysis}.
          #
          #     Another example, if the request analyzes for who has
          #     permission P to a GCP folder F, and there's an IAM policy states user A
          #     has iam.serviceAccounts.actAs permission to a service account SA, and
          #     there's another IAM policy states service account SA has permission P to
          #     the GCP folder F, then user A potentially has access to the GCP folder
          #     F. And those advanced analysis results will be included in
          #     {Google::Cloud::Asset::V1p4beta1::AnalyzeIamPolicyResponse#service_account_impersonation_analysis AnalyzeIamPolicyResponse#service_account_impersonation_analysis}.
          #
          #     Default is false.
          class Options; end
        end

        # The export IAM policy analysis response. This message is returned by the
        # {Google::Longrunning::Operations::GetOperation} method in the returned
        # {Google::Longrunning::Operation#response} field.
        # @!attribute [rw] output_config
        #   @return [Google::Cloud::Asset::V1p4beta1::IamPolicyAnalysisOutputConfig]
        #     Output configuration indicating where the results were output to.
        class ExportIamPolicyAnalysisResponse; end
      end
    end
  end
end