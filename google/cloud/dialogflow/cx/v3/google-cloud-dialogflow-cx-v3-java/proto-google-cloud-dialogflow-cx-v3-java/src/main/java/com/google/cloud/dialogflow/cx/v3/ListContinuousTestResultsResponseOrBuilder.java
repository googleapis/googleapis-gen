// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/dialogflow/cx/v3/environment.proto

package com.google.cloud.dialogflow.cx.v3;

public interface ListContinuousTestResultsResponseOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.cloud.dialogflow.cx.v3.ListContinuousTestResultsResponse)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * The list of continuous test results.
   * </pre>
   *
   * <code>repeated .google.cloud.dialogflow.cx.v3.ContinuousTestResult continuous_test_results = 1;</code>
   */
  java.util.List<com.google.cloud.dialogflow.cx.v3.ContinuousTestResult> 
      getContinuousTestResultsList();
  /**
   * <pre>
   * The list of continuous test results.
   * </pre>
   *
   * <code>repeated .google.cloud.dialogflow.cx.v3.ContinuousTestResult continuous_test_results = 1;</code>
   */
  com.google.cloud.dialogflow.cx.v3.ContinuousTestResult getContinuousTestResults(int index);
  /**
   * <pre>
   * The list of continuous test results.
   * </pre>
   *
   * <code>repeated .google.cloud.dialogflow.cx.v3.ContinuousTestResult continuous_test_results = 1;</code>
   */
  int getContinuousTestResultsCount();
  /**
   * <pre>
   * The list of continuous test results.
   * </pre>
   *
   * <code>repeated .google.cloud.dialogflow.cx.v3.ContinuousTestResult continuous_test_results = 1;</code>
   */
  java.util.List<? extends com.google.cloud.dialogflow.cx.v3.ContinuousTestResultOrBuilder> 
      getContinuousTestResultsOrBuilderList();
  /**
   * <pre>
   * The list of continuous test results.
   * </pre>
   *
   * <code>repeated .google.cloud.dialogflow.cx.v3.ContinuousTestResult continuous_test_results = 1;</code>
   */
  com.google.cloud.dialogflow.cx.v3.ContinuousTestResultOrBuilder getContinuousTestResultsOrBuilder(
      int index);

  /**
   * <pre>
   * Token to retrieve the next page of results, or empty if there are no more
   * results in the list.
   * </pre>
   *
   * <code>string next_page_token = 2;</code>
   * @return The nextPageToken.
   */
  java.lang.String getNextPageToken();
  /**
   * <pre>
   * Token to retrieve the next page of results, or empty if there are no more
   * results in the list.
   * </pre>
   *
   * <code>string next_page_token = 2;</code>
   * @return The bytes for nextPageToken.
   */
  com.google.protobuf.ByteString
      getNextPageTokenBytes();
}
