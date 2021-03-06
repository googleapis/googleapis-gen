// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/firestore/v1/common.proto

package com.google.firestore.v1;

public interface DocumentMaskOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.firestore.v1.DocumentMask)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * The list of field paths in the mask. See [Document.fields][google.firestore.v1.Document.fields] for a field
   * path syntax reference.
   * </pre>
   *
   * <code>repeated string field_paths = 1;</code>
   * @return A list containing the fieldPaths.
   */
  java.util.List<java.lang.String>
      getFieldPathsList();
  /**
   * <pre>
   * The list of field paths in the mask. See [Document.fields][google.firestore.v1.Document.fields] for a field
   * path syntax reference.
   * </pre>
   *
   * <code>repeated string field_paths = 1;</code>
   * @return The count of fieldPaths.
   */
  int getFieldPathsCount();
  /**
   * <pre>
   * The list of field paths in the mask. See [Document.fields][google.firestore.v1.Document.fields] for a field
   * path syntax reference.
   * </pre>
   *
   * <code>repeated string field_paths = 1;</code>
   * @param index The index of the element to return.
   * @return The fieldPaths at the given index.
   */
  java.lang.String getFieldPaths(int index);
  /**
   * <pre>
   * The list of field paths in the mask. See [Document.fields][google.firestore.v1.Document.fields] for a field
   * path syntax reference.
   * </pre>
   *
   * <code>repeated string field_paths = 1;</code>
   * @param index The index of the value to return.
   * @return The bytes of the fieldPaths at the given index.
   */
  com.google.protobuf.ByteString
      getFieldPathsBytes(int index);
}
