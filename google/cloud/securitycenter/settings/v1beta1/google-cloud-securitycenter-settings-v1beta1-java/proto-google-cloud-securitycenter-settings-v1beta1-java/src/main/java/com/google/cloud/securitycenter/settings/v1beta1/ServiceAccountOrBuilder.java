// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/securitycenter/settings/v1beta1/securitycenter_settings_service.proto

package com.google.cloud.securitycenter.settings.v1beta1;

public interface ServiceAccountOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.cloud.securitycenter.settings.v1beta1.ServiceAccount)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * The relative resource name of the service account resource.
   * Format:
   *  * `organizations/{organization}/serviceAccount`
   * </pre>
   *
   * <code>string name = 1;</code>
   * @return The name.
   */
  java.lang.String getName();
  /**
   * <pre>
   * The relative resource name of the service account resource.
   * Format:
   *  * `organizations/{organization}/serviceAccount`
   * </pre>
   *
   * <code>string name = 1;</code>
   * @return The bytes for name.
   */
  com.google.protobuf.ByteString
      getNameBytes();

  /**
   * <pre>
   * Security Center managed service account for the organization
   * example service-org-1234&#64;scc.iam.gserviceaccount.com
   * This service_account will be stored in the ComponentSettings field for the
   * SCC, SHA, and Infra Automation components.
   * </pre>
   *
   * <code>string service_account = 2;</code>
   * @return The serviceAccount.
   */
  java.lang.String getServiceAccount();
  /**
   * <pre>
   * Security Center managed service account for the organization
   * example service-org-1234&#64;scc.iam.gserviceaccount.com
   * This service_account will be stored in the ComponentSettings field for the
   * SCC, SHA, and Infra Automation components.
   * </pre>
   *
   * <code>string service_account = 2;</code>
   * @return The bytes for serviceAccount.
   */
  com.google.protobuf.ByteString
      getServiceAccountBytes();
}
