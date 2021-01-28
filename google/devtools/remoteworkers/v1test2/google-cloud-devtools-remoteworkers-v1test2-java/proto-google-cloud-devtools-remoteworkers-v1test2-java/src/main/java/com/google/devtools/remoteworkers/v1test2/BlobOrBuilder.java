// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/devtools/remoteworkers/v1test2/command.proto

package com.google.devtools.remoteworkers.v1test2;

public interface BlobOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.devtools.remoteworkers.v1test2.Blob)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * The digest of the blob. This should be verified by the receiver.
   * </pre>
   *
   * <code>.google.devtools.remoteworkers.v1test2.Digest digest = 1;</code>
   * @return Whether the digest field is set.
   */
  boolean hasDigest();
  /**
   * <pre>
   * The digest of the blob. This should be verified by the receiver.
   * </pre>
   *
   * <code>.google.devtools.remoteworkers.v1test2.Digest digest = 1;</code>
   * @return The digest.
   */
  com.google.devtools.remoteworkers.v1test2.Digest getDigest();
  /**
   * <pre>
   * The digest of the blob. This should be verified by the receiver.
   * </pre>
   *
   * <code>.google.devtools.remoteworkers.v1test2.Digest digest = 1;</code>
   */
  com.google.devtools.remoteworkers.v1test2.DigestOrBuilder getDigestOrBuilder();

  /**
   * <pre>
   * The contents of the blob.
   * </pre>
   *
   * <code>bytes contents = 2;</code>
   * @return The contents.
   */
  com.google.protobuf.ByteString getContents();
}
