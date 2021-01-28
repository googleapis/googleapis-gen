// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/bigquery/storage/v1beta2/storage.proto

package com.google.cloud.bigquery.storage.v1beta2;

public interface AppendRowsRequestOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.cloud.bigquery.storage.v1beta2.AppendRowsRequest)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * Required. The stream that is the target of the append operation. This value
   * must be specified for the initial request. If subsequent requests specify
   * the stream name, it must equal to the value provided in the first request.
   * To write to the _default stream, populate this field with a string in the
   * format `projects/{project}/datasets/{dataset}/tables/{table}/_default`.
   * </pre>
   *
   * <code>string write_stream = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
   * @return The writeStream.
   */
  java.lang.String getWriteStream();
  /**
   * <pre>
   * Required. The stream that is the target of the append operation. This value
   * must be specified for the initial request. If subsequent requests specify
   * the stream name, it must equal to the value provided in the first request.
   * To write to the _default stream, populate this field with a string in the
   * format `projects/{project}/datasets/{dataset}/tables/{table}/_default`.
   * </pre>
   *
   * <code>string write_stream = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
   * @return The bytes for writeStream.
   */
  com.google.protobuf.ByteString
      getWriteStreamBytes();

  /**
   * <pre>
   * If present, the write is only performed if the next append offset is same
   * as the provided value. If not present, the write is performed at the
   * current end of stream. Specifying a value for this field is not allowed
   * when calling AppendRows for the '_default' stream.
   * </pre>
   *
   * <code>.google.protobuf.Int64Value offset = 2;</code>
   * @return Whether the offset field is set.
   */
  boolean hasOffset();
  /**
   * <pre>
   * If present, the write is only performed if the next append offset is same
   * as the provided value. If not present, the write is performed at the
   * current end of stream. Specifying a value for this field is not allowed
   * when calling AppendRows for the '_default' stream.
   * </pre>
   *
   * <code>.google.protobuf.Int64Value offset = 2;</code>
   * @return The offset.
   */
  com.google.protobuf.Int64Value getOffset();
  /**
   * <pre>
   * If present, the write is only performed if the next append offset is same
   * as the provided value. If not present, the write is performed at the
   * current end of stream. Specifying a value for this field is not allowed
   * when calling AppendRows for the '_default' stream.
   * </pre>
   *
   * <code>.google.protobuf.Int64Value offset = 2;</code>
   */
  com.google.protobuf.Int64ValueOrBuilder getOffsetOrBuilder();

  /**
   * <pre>
   * Rows in proto format.
   * </pre>
   *
   * <code>.google.cloud.bigquery.storage.v1beta2.AppendRowsRequest.ProtoData proto_rows = 4;</code>
   * @return Whether the protoRows field is set.
   */
  boolean hasProtoRows();
  /**
   * <pre>
   * Rows in proto format.
   * </pre>
   *
   * <code>.google.cloud.bigquery.storage.v1beta2.AppendRowsRequest.ProtoData proto_rows = 4;</code>
   * @return The protoRows.
   */
  com.google.cloud.bigquery.storage.v1beta2.AppendRowsRequest.ProtoData getProtoRows();
  /**
   * <pre>
   * Rows in proto format.
   * </pre>
   *
   * <code>.google.cloud.bigquery.storage.v1beta2.AppendRowsRequest.ProtoData proto_rows = 4;</code>
   */
  com.google.cloud.bigquery.storage.v1beta2.AppendRowsRequest.ProtoDataOrBuilder getProtoRowsOrBuilder();

  /**
   * <pre>
   * Id set by client to annotate its identity. Only initial request setting is
   * respected.
   * </pre>
   *
   * <code>string trace_id = 6;</code>
   * @return The traceId.
   */
  java.lang.String getTraceId();
  /**
   * <pre>
   * Id set by client to annotate its identity. Only initial request setting is
   * respected.
   * </pre>
   *
   * <code>string trace_id = 6;</code>
   * @return The bytes for traceId.
   */
  com.google.protobuf.ByteString
      getTraceIdBytes();

  public com.google.cloud.bigquery.storage.v1beta2.AppendRowsRequest.RowsCase getRowsCase();
}
