// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/devtools/remoteworkers/v1test2/bots.proto

package com.google.devtools.remoteworkers.v1test2;

public interface UpdateBotSessionRequestOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.devtools.remoteworkers.v1test2.UpdateBotSessionRequest)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * Required. The bot session name. Must match bot_session.name.
   * </pre>
   *
   * <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
   * @return The name.
   */
  java.lang.String getName();
  /**
   * <pre>
   * Required. The bot session name. Must match bot_session.name.
   * </pre>
   *
   * <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
   * @return The bytes for name.
   */
  com.google.protobuf.ByteString
      getNameBytes();

  /**
   * <pre>
   * Required. The bot session resource to update.
   * </pre>
   *
   * <code>.google.devtools.remoteworkers.v1test2.BotSession bot_session = 2 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return Whether the botSession field is set.
   */
  boolean hasBotSession();
  /**
   * <pre>
   * Required. The bot session resource to update.
   * </pre>
   *
   * <code>.google.devtools.remoteworkers.v1test2.BotSession bot_session = 2 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return The botSession.
   */
  com.google.devtools.remoteworkers.v1test2.BotSession getBotSession();
  /**
   * <pre>
   * Required. The bot session resource to update.
   * </pre>
   *
   * <code>.google.devtools.remoteworkers.v1test2.BotSession bot_session = 2 [(.google.api.field_behavior) = REQUIRED];</code>
   */
  com.google.devtools.remoteworkers.v1test2.BotSessionOrBuilder getBotSessionOrBuilder();

  /**
   * <pre>
   * Required. The fields on the bot that should be updated. See the BotSession resource
   * for which fields are updatable by which caller.
   * </pre>
   *
   * <code>.google.protobuf.FieldMask update_mask = 3 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return Whether the updateMask field is set.
   */
  boolean hasUpdateMask();
  /**
   * <pre>
   * Required. The fields on the bot that should be updated. See the BotSession resource
   * for which fields are updatable by which caller.
   * </pre>
   *
   * <code>.google.protobuf.FieldMask update_mask = 3 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return The updateMask.
   */
  com.google.protobuf.FieldMask getUpdateMask();
  /**
   * <pre>
   * Required. The fields on the bot that should be updated. See the BotSession resource
   * for which fields are updatable by which caller.
   * </pre>
   *
   * <code>.google.protobuf.FieldMask update_mask = 3 [(.google.api.field_behavior) = REQUIRED];</code>
   */
  com.google.protobuf.FieldMaskOrBuilder getUpdateMaskOrBuilder();
}
