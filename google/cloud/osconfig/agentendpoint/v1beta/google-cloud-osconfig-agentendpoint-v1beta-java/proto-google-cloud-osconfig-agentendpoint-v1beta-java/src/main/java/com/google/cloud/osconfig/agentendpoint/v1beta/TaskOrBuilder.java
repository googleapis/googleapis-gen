// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/osconfig/agentendpoint/v1beta/tasks.proto

package com.google.cloud.osconfig.agentendpoint.v1beta;

public interface TaskOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.cloud.osconfig.agentendpoint.v1beta.Task)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * Unique task id.
   * </pre>
   *
   * <code>string task_id = 1;</code>
   * @return The taskId.
   */
  java.lang.String getTaskId();
  /**
   * <pre>
   * Unique task id.
   * </pre>
   *
   * <code>string task_id = 1;</code>
   * @return The bytes for taskId.
   */
  com.google.protobuf.ByteString
      getTaskIdBytes();

  /**
   * <pre>
   * The type of task to perform.
   * Task details must include the appropriate message based on this enum as
   * specified below:
   * APPLY_PATCHES = ApplyPatchesTask
   * EXEC_STEP = ExecStepTask;
   * </pre>
   *
   * <code>.google.cloud.osconfig.agentendpoint.v1beta.TaskType task_type = 2;</code>
   * @return The enum numeric value on the wire for taskType.
   */
  int getTaskTypeValue();
  /**
   * <pre>
   * The type of task to perform.
   * Task details must include the appropriate message based on this enum as
   * specified below:
   * APPLY_PATCHES = ApplyPatchesTask
   * EXEC_STEP = ExecStepTask;
   * </pre>
   *
   * <code>.google.cloud.osconfig.agentendpoint.v1beta.TaskType task_type = 2;</code>
   * @return The taskType.
   */
  com.google.cloud.osconfig.agentendpoint.v1beta.TaskType getTaskType();

  /**
   * <pre>
   * Current directive to the agent.
   * </pre>
   *
   * <code>.google.cloud.osconfig.agentendpoint.v1beta.TaskDirective task_directive = 3;</code>
   * @return The enum numeric value on the wire for taskDirective.
   */
  int getTaskDirectiveValue();
  /**
   * <pre>
   * Current directive to the agent.
   * </pre>
   *
   * <code>.google.cloud.osconfig.agentendpoint.v1beta.TaskDirective task_directive = 3;</code>
   * @return The taskDirective.
   */
  com.google.cloud.osconfig.agentendpoint.v1beta.TaskDirective getTaskDirective();

  /**
   * <pre>
   * Details about the apply patches task to perform.
   * </pre>
   *
   * <code>.google.cloud.osconfig.agentendpoint.v1beta.ApplyPatchesTask apply_patches_task = 4;</code>
   * @return Whether the applyPatchesTask field is set.
   */
  boolean hasApplyPatchesTask();
  /**
   * <pre>
   * Details about the apply patches task to perform.
   * </pre>
   *
   * <code>.google.cloud.osconfig.agentendpoint.v1beta.ApplyPatchesTask apply_patches_task = 4;</code>
   * @return The applyPatchesTask.
   */
  com.google.cloud.osconfig.agentendpoint.v1beta.ApplyPatchesTask getApplyPatchesTask();
  /**
   * <pre>
   * Details about the apply patches task to perform.
   * </pre>
   *
   * <code>.google.cloud.osconfig.agentendpoint.v1beta.ApplyPatchesTask apply_patches_task = 4;</code>
   */
  com.google.cloud.osconfig.agentendpoint.v1beta.ApplyPatchesTaskOrBuilder getApplyPatchesTaskOrBuilder();

  /**
   * <pre>
   * Details about the exec step task to perform.
   * </pre>
   *
   * <code>.google.cloud.osconfig.agentendpoint.v1beta.ExecStepTask exec_step_task = 5;</code>
   * @return Whether the execStepTask field is set.
   */
  boolean hasExecStepTask();
  /**
   * <pre>
   * Details about the exec step task to perform.
   * </pre>
   *
   * <code>.google.cloud.osconfig.agentendpoint.v1beta.ExecStepTask exec_step_task = 5;</code>
   * @return The execStepTask.
   */
  com.google.cloud.osconfig.agentendpoint.v1beta.ExecStepTask getExecStepTask();
  /**
   * <pre>
   * Details about the exec step task to perform.
   * </pre>
   *
   * <code>.google.cloud.osconfig.agentendpoint.v1beta.ExecStepTask exec_step_task = 5;</code>
   */
  com.google.cloud.osconfig.agentendpoint.v1beta.ExecStepTaskOrBuilder getExecStepTaskOrBuilder();

  /**
   * <pre>
   * Labels describing the task.  Used for logging by the agent.
   * </pre>
   *
   * <code>map&lt;string, string&gt; service_labels = 6;</code>
   */
  int getServiceLabelsCount();
  /**
   * <pre>
   * Labels describing the task.  Used for logging by the agent.
   * </pre>
   *
   * <code>map&lt;string, string&gt; service_labels = 6;</code>
   */
  boolean containsServiceLabels(
      java.lang.String key);
  /**
   * Use {@link #getServiceLabelsMap()} instead.
   */
  @java.lang.Deprecated
  java.util.Map<java.lang.String, java.lang.String>
  getServiceLabels();
  /**
   * <pre>
   * Labels describing the task.  Used for logging by the agent.
   * </pre>
   *
   * <code>map&lt;string, string&gt; service_labels = 6;</code>
   */
  java.util.Map<java.lang.String, java.lang.String>
  getServiceLabelsMap();
  /**
   * <pre>
   * Labels describing the task.  Used for logging by the agent.
   * </pre>
   *
   * <code>map&lt;string, string&gt; service_labels = 6;</code>
   */

  java.lang.String getServiceLabelsOrDefault(
      java.lang.String key,
      java.lang.String defaultValue);
  /**
   * <pre>
   * Labels describing the task.  Used for logging by the agent.
   * </pre>
   *
   * <code>map&lt;string, string&gt; service_labels = 6;</code>
   */

  java.lang.String getServiceLabelsOrThrow(
      java.lang.String key);

  public com.google.cloud.osconfig.agentendpoint.v1beta.Task.TaskDetailsCase getTaskDetailsCase();
}
