// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/aiplatform/v1beta1/schema/predict/prediction/tabular_regression.proto

package com.google.cloud.aiplatform.v1beta1.schema.predict.prediction;

public interface TabularRegressionPredictionResultOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.cloud.aiplatform.v1beta1.schema.predict.prediction.TabularRegressionPredictionResult)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * The regression value.
   * </pre>
   *
   * <code>float value = 1;</code>
   * @return The value.
   */
  float getValue();

  /**
   * <pre>
   * The lower bound of the prediction interval.
   * </pre>
   *
   * <code>float lower_bound = 2;</code>
   * @return The lowerBound.
   */
  float getLowerBound();

  /**
   * <pre>
   * The upper bound of the prediction interval.
   * </pre>
   *
   * <code>float upper_bound = 3;</code>
   * @return The upperBound.
   */
  float getUpperBound();
}
