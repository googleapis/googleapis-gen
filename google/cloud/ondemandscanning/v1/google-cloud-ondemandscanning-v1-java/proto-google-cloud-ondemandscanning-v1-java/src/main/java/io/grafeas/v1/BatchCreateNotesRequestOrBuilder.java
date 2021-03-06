// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: grafeas/v1/grafeas.proto

package io.grafeas.v1;

public interface BatchCreateNotesRequestOrBuilder extends
    // @@protoc_insertion_point(interface_extends:grafeas.v1.BatchCreateNotesRequest)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * The name of the project in the form of `projects/[PROJECT_ID]`, under which
   * the notes are to be created.
   * </pre>
   *
   * <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
   * @return The parent.
   */
  java.lang.String getParent();
  /**
   * <pre>
   * The name of the project in the form of `projects/[PROJECT_ID]`, under which
   * the notes are to be created.
   * </pre>
   *
   * <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
   * @return The bytes for parent.
   */
  com.google.protobuf.ByteString
      getParentBytes();

  /**
   * <pre>
   * The notes to create. Max allowed length is 1000.
   * </pre>
   *
   * <code>map&lt;string, .grafeas.v1.Note&gt; notes = 2 [(.google.api.field_behavior) = REQUIRED];</code>
   */
  int getNotesCount();
  /**
   * <pre>
   * The notes to create. Max allowed length is 1000.
   * </pre>
   *
   * <code>map&lt;string, .grafeas.v1.Note&gt; notes = 2 [(.google.api.field_behavior) = REQUIRED];</code>
   */
  boolean containsNotes(
      java.lang.String key);
  /**
   * Use {@link #getNotesMap()} instead.
   */
  @java.lang.Deprecated
  java.util.Map<java.lang.String, io.grafeas.v1.Note>
  getNotes();
  /**
   * <pre>
   * The notes to create. Max allowed length is 1000.
   * </pre>
   *
   * <code>map&lt;string, .grafeas.v1.Note&gt; notes = 2 [(.google.api.field_behavior) = REQUIRED];</code>
   */
  java.util.Map<java.lang.String, io.grafeas.v1.Note>
  getNotesMap();
  /**
   * <pre>
   * The notes to create. Max allowed length is 1000.
   * </pre>
   *
   * <code>map&lt;string, .grafeas.v1.Note&gt; notes = 2 [(.google.api.field_behavior) = REQUIRED];</code>
   */

  io.grafeas.v1.Note getNotesOrDefault(
      java.lang.String key,
      io.grafeas.v1.Note defaultValue);
  /**
   * <pre>
   * The notes to create. Max allowed length is 1000.
   * </pre>
   *
   * <code>map&lt;string, .grafeas.v1.Note&gt; notes = 2 [(.google.api.field_behavior) = REQUIRED];</code>
   */

  io.grafeas.v1.Note getNotesOrThrow(
      java.lang.String key);
}
