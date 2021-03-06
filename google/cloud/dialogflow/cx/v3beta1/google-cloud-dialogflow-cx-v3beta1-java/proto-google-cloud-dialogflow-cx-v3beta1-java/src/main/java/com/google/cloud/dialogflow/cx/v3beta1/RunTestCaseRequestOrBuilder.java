// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/dialogflow/cx/v3beta1/test_case.proto

package com.google.cloud.dialogflow.cx.v3beta1;

public interface RunTestCaseRequestOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.cloud.dialogflow.cx.v3beta1.RunTestCaseRequest)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * Required. Format of test case name to run: `projects/&lt;Project ID&gt;/locations/
   * &lt;Location ID&gt;/agents/&lt;AgentID&gt;/testCases/&lt;TestCase ID&gt;`.
   * </pre>
   *
   * <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
   * @return The name.
   */
  java.lang.String getName();
  /**
   * <pre>
   * Required. Format of test case name to run: `projects/&lt;Project ID&gt;/locations/
   * &lt;Location ID&gt;/agents/&lt;AgentID&gt;/testCases/&lt;TestCase ID&gt;`.
   * </pre>
   *
   * <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
   * @return The bytes for name.
   */
  com.google.protobuf.ByteString
      getNameBytes();

  /**
   * <pre>
   * Optional. Environment name. If not set, draft environment is assumed.
   * Format: `projects/&lt;Project ID&gt;/locations/&lt;Location ID&gt;/agents/&lt;Agent
   * ID&gt;/environments/&lt;Environment ID&gt;`.
   * </pre>
   *
   * <code>string environment = 2 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = { ... }</code>
   * @return The environment.
   */
  java.lang.String getEnvironment();
  /**
   * <pre>
   * Optional. Environment name. If not set, draft environment is assumed.
   * Format: `projects/&lt;Project ID&gt;/locations/&lt;Location ID&gt;/agents/&lt;Agent
   * ID&gt;/environments/&lt;Environment ID&gt;`.
   * </pre>
   *
   * <code>string environment = 2 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = { ... }</code>
   * @return The bytes for environment.
   */
  com.google.protobuf.ByteString
      getEnvironmentBytes();
}
