// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/dataqna/v1alpha/auto_suggestion_service.proto

package com.google.cloud.dataqna.v1alpha;

public interface SuggestQueriesRequestOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.cloud.dataqna.v1alpha.SuggestQueriesRequest)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * Required. The parent of the suggestion query is the resource denoting the project and
   * location.
   * </pre>
   *
   * <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
   * @return The parent.
   */
  java.lang.String getParent();
  /**
   * <pre>
   * Required. The parent of the suggestion query is the resource denoting the project and
   * location.
   * </pre>
   *
   * <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
   * @return The bytes for parent.
   */
  com.google.protobuf.ByteString
      getParentBytes();

  /**
   * <pre>
   * The scopes to which this search is restricted. The only supported scope
   * pattern is
   * `//bigquery.googleapis.com/projects/{GCP-PROJECT-ID}/datasets/{DATASET-ID}/tables/{TABLE-ID}`.
   * </pre>
   *
   * <code>repeated string scopes = 2;</code>
   * @return A list containing the scopes.
   */
  java.util.List<java.lang.String>
      getScopesList();
  /**
   * <pre>
   * The scopes to which this search is restricted. The only supported scope
   * pattern is
   * `//bigquery.googleapis.com/projects/{GCP-PROJECT-ID}/datasets/{DATASET-ID}/tables/{TABLE-ID}`.
   * </pre>
   *
   * <code>repeated string scopes = 2;</code>
   * @return The count of scopes.
   */
  int getScopesCount();
  /**
   * <pre>
   * The scopes to which this search is restricted. The only supported scope
   * pattern is
   * `//bigquery.googleapis.com/projects/{GCP-PROJECT-ID}/datasets/{DATASET-ID}/tables/{TABLE-ID}`.
   * </pre>
   *
   * <code>repeated string scopes = 2;</code>
   * @param index The index of the element to return.
   * @return The scopes at the given index.
   */
  java.lang.String getScopes(int index);
  /**
   * <pre>
   * The scopes to which this search is restricted. The only supported scope
   * pattern is
   * `//bigquery.googleapis.com/projects/{GCP-PROJECT-ID}/datasets/{DATASET-ID}/tables/{TABLE-ID}`.
   * </pre>
   *
   * <code>repeated string scopes = 2;</code>
   * @param index The index of the value to return.
   * @return The bytes of the scopes at the given index.
   */
  com.google.protobuf.ByteString
      getScopesBytes(int index);

  /**
   * <pre>
   * User query for which to generate suggestions. If the query is empty, zero
   * state suggestions are returned. This allows UIs to display suggestions
   * right away, helping the user to get a sense of what a query might look
   * like.
   * </pre>
   *
   * <code>string query = 3;</code>
   * @return The query.
   */
  java.lang.String getQuery();
  /**
   * <pre>
   * User query for which to generate suggestions. If the query is empty, zero
   * state suggestions are returned. This allows UIs to display suggestions
   * right away, helping the user to get a sense of what a query might look
   * like.
   * </pre>
   *
   * <code>string query = 3;</code>
   * @return The bytes for query.
   */
  com.google.protobuf.ByteString
      getQueryBytes();

  /**
   * <pre>
   * The requested suggestion type. Multiple suggestion types can be
   * requested, but there is no guarantee that the service will return
   * suggestions for each type. Suggestions for a requested type might rank
   * lower than suggestions for other types and the service may decide to cut
   * these suggestions off.
   * </pre>
   *
   * <code>repeated .google.cloud.dataqna.v1alpha.SuggestionType suggestion_types = 4;</code>
   * @return A list containing the suggestionTypes.
   */
  java.util.List<com.google.cloud.dataqna.v1alpha.SuggestionType> getSuggestionTypesList();
  /**
   * <pre>
   * The requested suggestion type. Multiple suggestion types can be
   * requested, but there is no guarantee that the service will return
   * suggestions for each type. Suggestions for a requested type might rank
   * lower than suggestions for other types and the service may decide to cut
   * these suggestions off.
   * </pre>
   *
   * <code>repeated .google.cloud.dataqna.v1alpha.SuggestionType suggestion_types = 4;</code>
   * @return The count of suggestionTypes.
   */
  int getSuggestionTypesCount();
  /**
   * <pre>
   * The requested suggestion type. Multiple suggestion types can be
   * requested, but there is no guarantee that the service will return
   * suggestions for each type. Suggestions for a requested type might rank
   * lower than suggestions for other types and the service may decide to cut
   * these suggestions off.
   * </pre>
   *
   * <code>repeated .google.cloud.dataqna.v1alpha.SuggestionType suggestion_types = 4;</code>
   * @param index The index of the element to return.
   * @return The suggestionTypes at the given index.
   */
  com.google.cloud.dataqna.v1alpha.SuggestionType getSuggestionTypes(int index);
  /**
   * <pre>
   * The requested suggestion type. Multiple suggestion types can be
   * requested, but there is no guarantee that the service will return
   * suggestions for each type. Suggestions for a requested type might rank
   * lower than suggestions for other types and the service may decide to cut
   * these suggestions off.
   * </pre>
   *
   * <code>repeated .google.cloud.dataqna.v1alpha.SuggestionType suggestion_types = 4;</code>
   * @return A list containing the enum numeric values on the wire for suggestionTypes.
   */
  java.util.List<java.lang.Integer>
  getSuggestionTypesValueList();
  /**
   * <pre>
   * The requested suggestion type. Multiple suggestion types can be
   * requested, but there is no guarantee that the service will return
   * suggestions for each type. Suggestions for a requested type might rank
   * lower than suggestions for other types and the service may decide to cut
   * these suggestions off.
   * </pre>
   *
   * <code>repeated .google.cloud.dataqna.v1alpha.SuggestionType suggestion_types = 4;</code>
   * @param index The index of the value to return.
   * @return The enum numeric value on the wire of suggestionTypes at the given index.
   */
  int getSuggestionTypesValue(int index);
}
