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
        # Explanation of a prediction (provided in {Google::Cloud::Aiplatform::V1beta1::PredictResponse#predictions PredictResponse#predictions})
        # produced by the Model on a given {Google::Cloud::Aiplatform::V1beta1::ExplainRequest#instances instance}.
        # @!attribute [rw] attributions
        #   @return [Array<Google::Cloud::Aiplatform::V1beta1::Attribution>]
        #     Output only. Feature attributions grouped by predicted outputs.
        #
        #     For Models that predict only one output, such as regression Models that
        #     predict only one score, there is only one attibution that explains the
        #     predicted output. For Models that predict multiple outputs, such as
        #     multiclass Models that predict multiple classes, each element explains one
        #     specific item. {Google::Cloud::Aiplatform::V1beta1::Attribution#output_index Attribution#output_index} can be used to identify which
        #     output this attribution is explaining.
        #
        #     If users set {Google::Cloud::Aiplatform::V1beta1::ExplanationParameters#top_k ExplanationParameters#top_k}, the attributions are sorted
        #     by {Attributions#instance_output_value instance_output_value} in
        #     descending order. If {Google::Cloud::Aiplatform::V1beta1::ExplanationParameters#output_indices ExplanationParameters#output_indices} is specified,
        #     the attributions are stored by {Google::Cloud::Aiplatform::V1beta1::Attribution#output_index Attribution#output_index} in the same
        #     order as they appear in the output_indices.
        class Explanation; end

        # Aggregated explanation metrics for a Model over a set of instances.
        # @!attribute [rw] mean_attributions
        #   @return [Array<Google::Cloud::Aiplatform::V1beta1::Attribution>]
        #     Output only. Aggregated attributions explaning the Model's prediction outputs over the
        #     set of instances. The attributions are grouped by outputs.
        #
        #     For Models that predict only one output, such as regression Models that
        #     predict only one score, there is only one attibution that explains the
        #     predicted output. For Models that predict multiple outputs, such as
        #     multiclass Models that predict multiple classes, each element explains one
        #     specific item. {Google::Cloud::Aiplatform::V1beta1::Attribution#output_index Attribution#output_index} can be used to identify which
        #     output this attribution is explaining.
        #
        #     The {Google::Cloud::Aiplatform::V1beta1::Attribution#baseline_output_value baselineOutputValue},
        #     {Google::Cloud::Aiplatform::V1beta1::Attribution#instance_output_value instanceOutputValue} and
        #     {Google::Cloud::Aiplatform::V1beta1::Attribution#feature_attributions featureAttributions} fields are
        #     averaged over the test data.
        #
        #     NOTE: Currently AutoML tabular classification Models produce only one
        #     attribution, which averages attributions over all the classes it predicts.
        #     {Google::Cloud::Aiplatform::V1beta1::Attribution#approximation_error Attribution#approximation_error} is not populated.
        class ModelExplanation; end

        # Attribution that explains a particular prediction output.
        # @!attribute [rw] baseline_output_value
        #   @return [Float]
        #     Output only. Model predicted output if the input instance is constructed from the
        #     baselines of all the features defined in {Google::Cloud::Aiplatform::V1beta1::ExplanationMetadata#inputs ExplanationMetadata#inputs}.
        #     The field name of the output is determined by the key in
        #     {Google::Cloud::Aiplatform::V1beta1::ExplanationMetadata#outputs ExplanationMetadata#outputs}.
        #
        #     If the Model's predicted output has multiple dimensions (rank > 1), this is
        #     the value in the output located by {Google::Cloud::Aiplatform::V1beta1::Attribution#output_index output_index}.
        #
        #     If there are multiple baselines, their output values are averaged.
        # @!attribute [rw] instance_output_value
        #   @return [Float]
        #     Output only. Model predicted output on the corresponding [explanation
        #     instance][ExplainRequest.instances]. The field name of the output is
        #     determined by the key in {Google::Cloud::Aiplatform::V1beta1::ExplanationMetadata#outputs ExplanationMetadata#outputs}.
        #
        #     If the Model predicted output has multiple dimensions, this is the value in
        #     the output located by {Google::Cloud::Aiplatform::V1beta1::Attribution#output_index output_index}.
        # @!attribute [rw] feature_attributions
        #   @return [Google::Protobuf::Value]
        #     Output only. Attributions of each explained feature. Features are extracted from
        #     the {Google::Cloud::Aiplatform::V1beta1::ExplainRequest#instances prediction instances} according to
        #     {Google::Cloud::Aiplatform::V1beta1::ExplanationMetadata#inputs explanation metadata for inputs}.
        #
        #     The value is a struct, whose keys are the name of the feature. The values
        #     are how much the feature in the {Google::Cloud::Aiplatform::V1beta1::ExplainRequest#instances instance}
        #     contributed to the predicted result.
        #
        #     The format of the value is determined by the feature's input format:
        #
        #     * If the feature is a scalar value, the attribution value is a
        #       {Google::Protobuf::Value#number_value floating number}.
        #
        #       * If the feature is an array of scalar values, the attribution value is
        #         an {Google::Protobuf::Value#list_value array}.
        #
        #       * If the feature is a struct, the attribution value is a
        #         {Google::Protobuf::Value#struct_value struct}. The keys in the
        #         attribution value struct are the same as the keys in the feature
        #         struct. The formats of the values in the attribution struct are
        #         determined by the formats of the values in the feature struct.
        #
        #       The {Google::Cloud::Aiplatform::V1beta1::ExplanationMetadata#feature_attributions_schema_uri ExplanationMetadata#feature_attributions_schema_uri} field,
        #       pointed to by the {Google::Cloud::Aiplatform::V1beta1::ExplanationSpec ExplanationSpec} field of the
        #       {Google::Cloud::Aiplatform::V1beta1::Endpoint#deployed_models Endpoint#deployed_models} object, points to the schema file that
        #       describes the features and their attribution values (if it is populated).
        # @!attribute [rw] output_index
        #   @return [Array<Integer>]
        #     Output only. The index that locates the explained prediction output.
        #
        #     If the prediction output is a scalar value, output_index is not populated.
        #     If the prediction output has multiple dimensions, the length of the
        #     output_index list is the same as the number of dimensions of the output.
        #     The i-th element in output_index is the element index of the i-th dimension
        #     of the output vector. Indices start from 0.
        # @!attribute [rw] output_display_name
        #   @return [String]
        #     Output only. The display name of the output identified by {Google::Cloud::Aiplatform::V1beta1::Attribution#output_index output_index}, e.g. the
        #     predicted class name by a multi-classification Model.
        #
        #     This field is only populated iff the Model predicts display names as a
        #     separate field along with the explained output. The predicted display name
        #     must has the same shape of the explained output, and can be located using
        #     output_index.
        # @!attribute [rw] approximation_error
        #   @return [Float]
        #     Output only. Error of {Google::Cloud::Aiplatform::V1beta1::Attribution#feature_attributions feature_attributions} caused by approximation used in the
        #     explanation method. Lower value means more precise attributions.
        #
        #     * For [Sampled Shapley
        #       attribution][ExplanationParameters.sampled_shapley_attribution], increasing
        #       {Google::Cloud::Aiplatform::V1beta1::SampledShapleyAttribution#path_count path_count} may reduce the error.
        #     * For [Integrated Gradients
        #       attribution][ExplanationParameters.integrated_gradients_attribution],
        #       increasing {Google::Cloud::Aiplatform::V1beta1::IntegratedGradientsAttribution#step_count step_count} may
        #       reduce the error.
        #     * For [XRAI
        #       attribution][ExplanationParameters.xrai_attribution], increasing
        #       {Google::Cloud::Aiplatform::V1beta1::XraiAttribution#step_count step_count} may reduce the error.
        #
        #     Refer to  AI Explanations Whitepaper for more details:
        #
        #     https:
        #     //storage.googleapis.com/cloud-ai-whitep
        #     // apers/AI%20Explainability%20Whitepaper.pdf
        # @!attribute [rw] output_name
        #   @return [String]
        #     Output only. Name of the explain output. Specified as the key in
        #     {Google::Cloud::Aiplatform::V1beta1::ExplanationMetadata#outputs ExplanationMetadata#outputs}.
        class Attribution; end

        # Specification of Model explanation.
        # @!attribute [rw] parameters
        #   @return [Google::Cloud::Aiplatform::V1beta1::ExplanationParameters]
        #     Required. Parameters that configure explaining of the Model's predictions.
        # @!attribute [rw] metadata
        #   @return [Google::Cloud::Aiplatform::V1beta1::ExplanationMetadata]
        #     Required. Metadata describing the Model's input and output for explanation.
        class ExplanationSpec; end

        # Parameters to configure explaining for Model's predictions.
        # @!attribute [rw] sampled_shapley_attribution
        #   @return [Google::Cloud::Aiplatform::V1beta1::SampledShapleyAttribution]
        #     An attribution method that approximates Shapley values for features that
        #     contribute to the label being predicted. A sampling strategy is used to
        #     approximate the value rather than considering all subsets of features.
        #     Refer to this paper for model details: https://arxiv.org/abs/1306.4265.
        # @!attribute [rw] integrated_gradients_attribution
        #   @return [Google::Cloud::Aiplatform::V1beta1::IntegratedGradientsAttribution]
        #     An attribution method that computes Aumann-Shapley values taking
        #     advantage of the model's fully differentiable structure. Refer to this
        #     paper for more details: https://arxiv.org/abs/1703.01365
        # @!attribute [rw] xrai_attribution
        #   @return [Google::Cloud::Aiplatform::V1beta1::XraiAttribution]
        #     An attribution method that redistributes Integrated Gradients
        #     attribution to segmented regions, taking advantage of the model's fully
        #     differentiable structure. Refer to this paper for
        #     more details: https://arxiv.org/abs/1906.02825
        #
        #     XRAI currently performs better on natural images, like a picture of a
        #     house or an animal. If the images are taken in artificial environments,
        #     like a lab or manufacturing line, or from diagnostic equipment, like
        #     x-rays or quality-control cameras, use Integrated Gradients instead.
        # @!attribute [rw] top_k
        #   @return [Integer]
        #     If populated, returns attributions for top K indices of outputs
        #     (defaults to 1). Only applies to Models that predicts more than one outputs
        #     (e,g, multi-class Models). When set to -1, returns explanations for all
        #     outputs.
        # @!attribute [rw] output_indices
        #   @return [Google::Protobuf::ListValue]
        #     If populated, only returns attributions that have
        #     {Attributions#output_index output_index} contained in output_indices. It
        #     must be an ndarray of integers, with the same shape of the output it's
        #     explaining.
        #
        #     If not populated, returns attributions for {Google::Cloud::Aiplatform::V1beta1::ExplanationParameters#top_k top_k} indices of outputs.
        #     If neither top_k nor output_indeices is populated, returns the argmax
        #     index of the outputs.
        #
        #     Only applicable to Models that predict multiple outputs (e,g, multi-class
        #     Models that predict multiple classes).
        class ExplanationParameters; end

        # An attribution method that approximates Shapley values for features that
        # contribute to the label being predicted. A sampling strategy is used to
        # approximate the value rather than considering all subsets of features.
        # @!attribute [rw] path_count
        #   @return [Integer]
        #     Required. The number of feature permutations to consider when approximating the
        #     Shapley values.
        #
        #     Valid range of its value is [1, 50], inclusively.
        class SampledShapleyAttribution; end

        # An attribution method that computes the Aumann-Shapley value taking advantage
        # of the model's fully differentiable structure. Refer to this paper for
        # more details: https://arxiv.org/abs/1703.01365
        # @!attribute [rw] step_count
        #   @return [Integer]
        #     Required. The number of steps for approximating the path integral.
        #     A good value to start is 50 and gradually increase until the
        #     sum to diff property is within the desired error range.
        #
        #     Valid range of its value is [1, 100], inclusively.
        # @!attribute [rw] smooth_grad_config
        #   @return [Google::Cloud::Aiplatform::V1beta1::SmoothGradConfig]
        #     Config for SmoothGrad approximation of gradients.
        #
        #     When enabled, the gradients are approximated by averaging the gradients
        #     from noisy samples in the vicinity of the inputs. Adding
        #     noise can help improve the computed gradients. Refer to this paper for more
        #     details: https://arxiv.org/pdf/1706.03825.pdf
        class IntegratedGradientsAttribution; end

        # An explanation method that redistributes Integrated Gradients
        # attributions to segmented regions, taking advantage of the model's fully
        # differentiable structure. Refer to this paper for more details:
        # https://arxiv.org/abs/1906.02825
        #
        # Only supports image Models ({InputMetadata#modality modality} is IMAGE).
        # @!attribute [rw] step_count
        #   @return [Integer]
        #     Required. The number of steps for approximating the path integral.
        #     A good value to start is 50 and gradually increase until the
        #     sum to diff property is met within the desired error range.
        #
        #     Valid range of its value is [1, 100], inclusively.
        # @!attribute [rw] smooth_grad_config
        #   @return [Google::Cloud::Aiplatform::V1beta1::SmoothGradConfig]
        #     Config for SmoothGrad approximation of gradients.
        #
        #     When enabled, the gradients are approximated by averaging the gradients
        #     from noisy samples in the vicinity of the inputs. Adding
        #     noise can help improve the computed gradients. Refer to this paper for more
        #     details: https://arxiv.org/pdf/1706.03825.pdf
        class XraiAttribution; end

        # Config for SmoothGrad approximation of gradients.
        #
        # When enabled, the gradients are approximated by averaging the gradients from
        # noisy samples in the vicinity of the inputs. Adding noise can help improve
        # the computed gradients. Refer to this paper for more details:
        # https://arxiv.org/pdf/1706.03825.pdf
        # @!attribute [rw] noise_sigma
        #   @return [Float]
        #     This is a single float value and will be used to add noise to all the
        #     features. Use this field when all features are normalized to have the
        #     same distribution: scale to range [0, 1], [-1, 1] or z-scoring, where
        #     features are normalized to have 0-mean and 1-variance. Refer to
        #     this doc for more details about normalization:
        #
        #     https:
        #     //developers.google.com/machine-learning
        #     // /data-prep/transform/normalization.
        #
        #     For best results the recommended value is about 10% - 20% of the standard
        #     deviation of the input feature. Refer to section 3.2 of the SmoothGrad
        #     paper: https://arxiv.org/pdf/1706.03825.pdf. Defaults to 0.1.
        #
        #     If the distribution is different per feature, set
        #     {Google::Cloud::Aiplatform::V1beta1::SmoothGradConfig#feature_noise_sigma feature_noise_sigma} instead
        #     for each feature.
        # @!attribute [rw] feature_noise_sigma
        #   @return [Google::Cloud::Aiplatform::V1beta1::FeatureNoiseSigma]
        #     This is similar to {Google::Cloud::Aiplatform::V1beta1::SmoothGradConfig#noise_sigma noise_sigma}, but
        #     provides additional flexibility. A separate noise sigma can be provided
        #     for each feature, which is useful if their distributions are different.
        #     No noise is added to features that are not set. If this field is unset,
        #     {Google::Cloud::Aiplatform::V1beta1::SmoothGradConfig#noise_sigma noise_sigma} will be used for all
        #     features.
        # @!attribute [rw] noisy_sample_count
        #   @return [Integer]
        #     The number of gradient samples to use for
        #     approximation. The higher this number, the more accurate the gradient
        #     is, but the runtime complexity increases by this factor as well.
        #     Valid range of its value is [1, 50]. Defaults to 3.
        class SmoothGradConfig; end

        # Noise sigma by features. Noise sigma represents the standard deviation of the
        # gaussian kernel that will be used to add noise to interpolated inputs prior
        # to computing gradients.
        # @!attribute [rw] noise_sigma
        #   @return [Array<Google::Cloud::Aiplatform::V1beta1::FeatureNoiseSigma::NoiseSigmaForFeature>]
        #     Noise sigma per feature. No noise is added to features that are not set.
        class FeatureNoiseSigma
          # Noise sigma for a single feature.
          # @!attribute [rw] name
          #   @return [String]
          #     The name of the input feature for which noise sigma is provided. The
          #     features are defined in
          #     {Google::Cloud::Aiplatform::V1beta1::ExplanationMetadata#inputs explanation metadata inputs}.
          # @!attribute [rw] sigma
          #   @return [Float]
          #     This represents the standard deviation of the Gaussian kernel that will
          #     be used to add noise to the feature prior to computing gradients. Similar
          #     to {Google::Cloud::Aiplatform::V1beta1::SmoothGradConfig#noise_sigma noise_sigma} but represents the
          #     noise added to the current feature. Defaults to 0.1.
          class NoiseSigmaForFeature; end
        end
      end
    end
  end
end