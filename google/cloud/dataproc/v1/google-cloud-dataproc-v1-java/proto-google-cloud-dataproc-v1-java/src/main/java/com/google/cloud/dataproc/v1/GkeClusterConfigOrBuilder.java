// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/dataproc/v1/clusters.proto

package com.google.cloud.dataproc.v1;

public interface GkeClusterConfigOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.cloud.dataproc.v1.GkeClusterConfig)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * Optional. A target for the deployment.
   * </pre>
   *
   * <code>.google.cloud.dataproc.v1.GkeClusterConfig.NamespacedGkeDeploymentTarget namespaced_gke_deployment_target = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
   * @return Whether the namespacedGkeDeploymentTarget field is set.
   */
  boolean hasNamespacedGkeDeploymentTarget();
  /**
   * <pre>
   * Optional. A target for the deployment.
   * </pre>
   *
   * <code>.google.cloud.dataproc.v1.GkeClusterConfig.NamespacedGkeDeploymentTarget namespaced_gke_deployment_target = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
   * @return The namespacedGkeDeploymentTarget.
   */
  com.google.cloud.dataproc.v1.GkeClusterConfig.NamespacedGkeDeploymentTarget getNamespacedGkeDeploymentTarget();
  /**
   * <pre>
   * Optional. A target for the deployment.
   * </pre>
   *
   * <code>.google.cloud.dataproc.v1.GkeClusterConfig.NamespacedGkeDeploymentTarget namespaced_gke_deployment_target = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
   */
  com.google.cloud.dataproc.v1.GkeClusterConfig.NamespacedGkeDeploymentTargetOrBuilder getNamespacedGkeDeploymentTargetOrBuilder();
}
