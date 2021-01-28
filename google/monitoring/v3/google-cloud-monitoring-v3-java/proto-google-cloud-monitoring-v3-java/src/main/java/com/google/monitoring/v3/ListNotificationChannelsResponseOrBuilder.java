// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/monitoring/v3/notification_service.proto

package com.google.monitoring.v3;

public interface ListNotificationChannelsResponseOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.monitoring.v3.ListNotificationChannelsResponse)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * The notification channels defined for the specified project.
   * </pre>
   *
   * <code>repeated .google.monitoring.v3.NotificationChannel notification_channels = 3;</code>
   */
  java.util.List<com.google.monitoring.v3.NotificationChannel> 
      getNotificationChannelsList();
  /**
   * <pre>
   * The notification channels defined for the specified project.
   * </pre>
   *
   * <code>repeated .google.monitoring.v3.NotificationChannel notification_channels = 3;</code>
   */
  com.google.monitoring.v3.NotificationChannel getNotificationChannels(int index);
  /**
   * <pre>
   * The notification channels defined for the specified project.
   * </pre>
   *
   * <code>repeated .google.monitoring.v3.NotificationChannel notification_channels = 3;</code>
   */
  int getNotificationChannelsCount();
  /**
   * <pre>
   * The notification channels defined for the specified project.
   * </pre>
   *
   * <code>repeated .google.monitoring.v3.NotificationChannel notification_channels = 3;</code>
   */
  java.util.List<? extends com.google.monitoring.v3.NotificationChannelOrBuilder> 
      getNotificationChannelsOrBuilderList();
  /**
   * <pre>
   * The notification channels defined for the specified project.
   * </pre>
   *
   * <code>repeated .google.monitoring.v3.NotificationChannel notification_channels = 3;</code>
   */
  com.google.monitoring.v3.NotificationChannelOrBuilder getNotificationChannelsOrBuilder(
      int index);

  /**
   * <pre>
   * If not empty, indicates that there may be more results that match
   * the request. Use the value in the `page_token` field in a
   * subsequent request to fetch the next set of results. If empty,
   * all results have been returned.
   * </pre>
   *
   * <code>string next_page_token = 2;</code>
   * @return The nextPageToken.
   */
  java.lang.String getNextPageToken();
  /**
   * <pre>
   * If not empty, indicates that there may be more results that match
   * the request. Use the value in the `page_token` field in a
   * subsequent request to fetch the next set of results. If empty,
   * all results have been returned.
   * </pre>
   *
   * <code>string next_page_token = 2;</code>
   * @return The bytes for nextPageToken.
   */
  com.google.protobuf.ByteString
      getNextPageTokenBytes();
}
