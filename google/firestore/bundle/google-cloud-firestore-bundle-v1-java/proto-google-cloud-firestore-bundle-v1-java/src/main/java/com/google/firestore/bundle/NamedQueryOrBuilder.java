// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/firestore/bundle/bundle.proto

package com.google.firestore.bundle;

public interface NamedQueryOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.firestore.bundle.NamedQuery)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * Name of the query, such that client can use the name to load this query
   * from bundle, and resume from when the query results are materialized
   * into this bundle.
   * </pre>
   *
   * <code>string name = 1;</code>
   * @return The name.
   */
  java.lang.String getName();
  /**
   * <pre>
   * Name of the query, such that client can use the name to load this query
   * from bundle, and resume from when the query results are materialized
   * into this bundle.
   * </pre>
   *
   * <code>string name = 1;</code>
   * @return The bytes for name.
   */
  com.google.protobuf.ByteString
      getNameBytes();

  /**
   * <pre>
   * The query saved in the bundle.
   * </pre>
   *
   * <code>.google.firestore.bundle.BundledQuery bundled_query = 2;</code>
   * @return Whether the bundledQuery field is set.
   */
  boolean hasBundledQuery();
  /**
   * <pre>
   * The query saved in the bundle.
   * </pre>
   *
   * <code>.google.firestore.bundle.BundledQuery bundled_query = 2;</code>
   * @return The bundledQuery.
   */
  com.google.firestore.bundle.BundledQuery getBundledQuery();
  /**
   * <pre>
   * The query saved in the bundle.
   * </pre>
   *
   * <code>.google.firestore.bundle.BundledQuery bundled_query = 2;</code>
   */
  com.google.firestore.bundle.BundledQueryOrBuilder getBundledQueryOrBuilder();

  /**
   * <pre>
   * The read time of the query, when it is used to build the bundle. This is useful to
   * resume the query from the bundle, once it is loaded by client SDKs.
   * </pre>
   *
   * <code>.google.protobuf.Timestamp read_time = 3;</code>
   * @return Whether the readTime field is set.
   */
  boolean hasReadTime();
  /**
   * <pre>
   * The read time of the query, when it is used to build the bundle. This is useful to
   * resume the query from the bundle, once it is loaded by client SDKs.
   * </pre>
   *
   * <code>.google.protobuf.Timestamp read_time = 3;</code>
   * @return The readTime.
   */
  com.google.protobuf.Timestamp getReadTime();
  /**
   * <pre>
   * The read time of the query, when it is used to build the bundle. This is useful to
   * resume the query from the bundle, once it is loaded by client SDKs.
   * </pre>
   *
   * <code>.google.protobuf.Timestamp read_time = 3;</code>
   */
  com.google.protobuf.TimestampOrBuilder getReadTimeOrBuilder();
}
