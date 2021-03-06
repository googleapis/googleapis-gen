// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/example/library/v1/library.proto

package com.google.example.library.v1;

public interface CreateBookRequestOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.example.library.v1.CreateBookRequest)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * The name of the shelf in which the book is created.
   * </pre>
   *
   * <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
   * @return The parent.
   */
  java.lang.String getParent();
  /**
   * <pre>
   * The name of the shelf in which the book is created.
   * </pre>
   *
   * <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
   * @return The bytes for parent.
   */
  com.google.protobuf.ByteString
      getParentBytes();

  /**
   * <pre>
   * The book to create.
   * </pre>
   *
   * <code>.google.example.library.v1.Book book = 2 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return Whether the book field is set.
   */
  boolean hasBook();
  /**
   * <pre>
   * The book to create.
   * </pre>
   *
   * <code>.google.example.library.v1.Book book = 2 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return The book.
   */
  com.google.example.library.v1.Book getBook();
  /**
   * <pre>
   * The book to create.
   * </pre>
   *
   * <code>.google.example.library.v1.Book book = 2 [(.google.api.field_behavior) = REQUIRED];</code>
   */
  com.google.example.library.v1.BookOrBuilder getBookOrBuilder();
}
