// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/retail/v2/import_config.proto

package com.google.cloud.retail.v2;

public interface UserEventInlineSourceOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.cloud.retail.v2.UserEventInlineSource)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * Required. A list of user events to import. Recommended max of 10k items.
   * </pre>
   *
   * <code>repeated .google.cloud.retail.v2.UserEvent user_events = 1 [(.google.api.field_behavior) = REQUIRED];</code>
   */
  java.util.List<com.google.cloud.retail.v2.UserEvent> 
      getUserEventsList();
  /**
   * <pre>
   * Required. A list of user events to import. Recommended max of 10k items.
   * </pre>
   *
   * <code>repeated .google.cloud.retail.v2.UserEvent user_events = 1 [(.google.api.field_behavior) = REQUIRED];</code>
   */
  com.google.cloud.retail.v2.UserEvent getUserEvents(int index);
  /**
   * <pre>
   * Required. A list of user events to import. Recommended max of 10k items.
   * </pre>
   *
   * <code>repeated .google.cloud.retail.v2.UserEvent user_events = 1 [(.google.api.field_behavior) = REQUIRED];</code>
   */
  int getUserEventsCount();
  /**
   * <pre>
   * Required. A list of user events to import. Recommended max of 10k items.
   * </pre>
   *
   * <code>repeated .google.cloud.retail.v2.UserEvent user_events = 1 [(.google.api.field_behavior) = REQUIRED];</code>
   */
  java.util.List<? extends com.google.cloud.retail.v2.UserEventOrBuilder> 
      getUserEventsOrBuilderList();
  /**
   * <pre>
   * Required. A list of user events to import. Recommended max of 10k items.
   * </pre>
   *
   * <code>repeated .google.cloud.retail.v2.UserEvent user_events = 1 [(.google.api.field_behavior) = REQUIRED];</code>
   */
  com.google.cloud.retail.v2.UserEventOrBuilder getUserEventsOrBuilder(
      int index);
}
