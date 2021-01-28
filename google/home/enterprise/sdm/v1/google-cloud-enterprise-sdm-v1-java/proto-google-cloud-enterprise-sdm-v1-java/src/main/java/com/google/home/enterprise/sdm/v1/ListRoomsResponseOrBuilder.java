// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/home/enterprise/sdm/v1/smart_device_management_service.proto

package com.google.home.enterprise.sdm.v1;

public interface ListRoomsResponseOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.home.enterprise.sdm.v1.ListRoomsResponse)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * The list of rooms.
   * </pre>
   *
   * <code>repeated .google.home.enterprise.sdm.v1.Room rooms = 1;</code>
   */
  java.util.List<com.google.home.enterprise.sdm.v1.Room> 
      getRoomsList();
  /**
   * <pre>
   * The list of rooms.
   * </pre>
   *
   * <code>repeated .google.home.enterprise.sdm.v1.Room rooms = 1;</code>
   */
  com.google.home.enterprise.sdm.v1.Room getRooms(int index);
  /**
   * <pre>
   * The list of rooms.
   * </pre>
   *
   * <code>repeated .google.home.enterprise.sdm.v1.Room rooms = 1;</code>
   */
  int getRoomsCount();
  /**
   * <pre>
   * The list of rooms.
   * </pre>
   *
   * <code>repeated .google.home.enterprise.sdm.v1.Room rooms = 1;</code>
   */
  java.util.List<? extends com.google.home.enterprise.sdm.v1.RoomOrBuilder> 
      getRoomsOrBuilderList();
  /**
   * <pre>
   * The list of rooms.
   * </pre>
   *
   * <code>repeated .google.home.enterprise.sdm.v1.Room rooms = 1;</code>
   */
  com.google.home.enterprise.sdm.v1.RoomOrBuilder getRoomsOrBuilder(
      int index);

  /**
   * <pre>
   * The pagination token to retrieve the next page of results.
   * If this field is omitted, there are no subsequent pages.
   * </pre>
   *
   * <code>string next_page_token = 2;</code>
   * @return The nextPageToken.
   */
  java.lang.String getNextPageToken();
  /**
   * <pre>
   * The pagination token to retrieve the next page of results.
   * If this field is omitted, there are no subsequent pages.
   * </pre>
   *
   * <code>string next_page_token = 2;</code>
   * @return The bytes for nextPageToken.
   */
  com.google.protobuf.ByteString
      getNextPageTokenBytes();
}
