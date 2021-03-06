// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/gaming/v1beta/common.proto

package com.google.cloud.gaming.v1beta;

public interface RealmSelectorOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.cloud.gaming.v1beta.RealmSelector)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * List of realms to match.
   * </pre>
   *
   * <code>repeated string realms = 1;</code>
   * @return A list containing the realms.
   */
  java.util.List<java.lang.String>
      getRealmsList();
  /**
   * <pre>
   * List of realms to match.
   * </pre>
   *
   * <code>repeated string realms = 1;</code>
   * @return The count of realms.
   */
  int getRealmsCount();
  /**
   * <pre>
   * List of realms to match.
   * </pre>
   *
   * <code>repeated string realms = 1;</code>
   * @param index The index of the element to return.
   * @return The realms at the given index.
   */
  java.lang.String getRealms(int index);
  /**
   * <pre>
   * List of realms to match.
   * </pre>
   *
   * <code>repeated string realms = 1;</code>
   * @param index The index of the value to return.
   * @return The bytes of the realms at the given index.
   */
  com.google.protobuf.ByteString
      getRealmsBytes(int index);
}
