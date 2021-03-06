// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/aiplatform/v1/schema/trainingjob/definition/automl_image_segmentation.proto

package com.google.cloud.aiplatform.v1.schema.trainingjob.definition;

public interface AutoMlImageSegmentationOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.cloud.aiplatform.v1.schema.trainingjob.definition.AutoMlImageSegmentation)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * The input parameters of this TrainingJob.
   * </pre>
   *
   * <code>.google.cloud.aiplatform.v1.schema.trainingjob.definition.AutoMlImageSegmentationInputs inputs = 1;</code>
   * @return Whether the inputs field is set.
   */
  boolean hasInputs();
  /**
   * <pre>
   * The input parameters of this TrainingJob.
   * </pre>
   *
   * <code>.google.cloud.aiplatform.v1.schema.trainingjob.definition.AutoMlImageSegmentationInputs inputs = 1;</code>
   * @return The inputs.
   */
  com.google.cloud.aiplatform.v1.schema.trainingjob.definition.AutoMlImageSegmentationInputs getInputs();
  /**
   * <pre>
   * The input parameters of this TrainingJob.
   * </pre>
   *
   * <code>.google.cloud.aiplatform.v1.schema.trainingjob.definition.AutoMlImageSegmentationInputs inputs = 1;</code>
   */
  com.google.cloud.aiplatform.v1.schema.trainingjob.definition.AutoMlImageSegmentationInputsOrBuilder getInputsOrBuilder();

  /**
   * <pre>
   * The metadata information.
   * </pre>
   *
   * <code>.google.cloud.aiplatform.v1.schema.trainingjob.definition.AutoMlImageSegmentationMetadata metadata = 2;</code>
   * @return Whether the metadata field is set.
   */
  boolean hasMetadata();
  /**
   * <pre>
   * The metadata information.
   * </pre>
   *
   * <code>.google.cloud.aiplatform.v1.schema.trainingjob.definition.AutoMlImageSegmentationMetadata metadata = 2;</code>
   * @return The metadata.
   */
  com.google.cloud.aiplatform.v1.schema.trainingjob.definition.AutoMlImageSegmentationMetadata getMetadata();
  /**
   * <pre>
   * The metadata information.
   * </pre>
   *
   * <code>.google.cloud.aiplatform.v1.schema.trainingjob.definition.AutoMlImageSegmentationMetadata metadata = 2;</code>
   */
  com.google.cloud.aiplatform.v1.schema.trainingjob.definition.AutoMlImageSegmentationMetadataOrBuilder getMetadataOrBuilder();
}
