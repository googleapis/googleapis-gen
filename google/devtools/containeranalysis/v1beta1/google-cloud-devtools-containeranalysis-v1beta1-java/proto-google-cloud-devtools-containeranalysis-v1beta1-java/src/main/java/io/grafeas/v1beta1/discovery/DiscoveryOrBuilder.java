// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/devtools/containeranalysis/v1beta1/discovery/discovery.proto

package io.grafeas.v1beta1.discovery;

public interface DiscoveryOrBuilder extends
    // @@protoc_insertion_point(interface_extends:grafeas.v1beta1.discovery.Discovery)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * Required. Immutable. The kind of analysis that is handled by this
   * discovery.
   * </pre>
   *
   * <code>.grafeas.v1beta1.NoteKind analysis_kind = 1;</code>
   * @return The enum numeric value on the wire for analysisKind.
   */
  int getAnalysisKindValue();
  /**
   * <pre>
   * Required. Immutable. The kind of analysis that is handled by this
   * discovery.
   * </pre>
   *
   * <code>.grafeas.v1beta1.NoteKind analysis_kind = 1;</code>
   * @return The analysisKind.
   */
  io.grafeas.v1beta1.common.NoteKind getAnalysisKind();
}
