// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/asset/v1p4beta1/assets.proto

package com.google.cloud.asset.v1p4beta1;

public interface IamPolicyAnalysisResultOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.cloud.asset.v1p4beta1.IamPolicyAnalysisResult)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * The full name of the resource to which the [iam_binding][google.cloud.asset.v1p4beta1.IamPolicyAnalysisResult.iam_binding] policy attaches.
   * </pre>
   *
   * <code>string attached_resource_full_name = 1;</code>
   * @return The attachedResourceFullName.
   */
  java.lang.String getAttachedResourceFullName();
  /**
   * <pre>
   * The full name of the resource to which the [iam_binding][google.cloud.asset.v1p4beta1.IamPolicyAnalysisResult.iam_binding] policy attaches.
   * </pre>
   *
   * <code>string attached_resource_full_name = 1;</code>
   * @return The bytes for attachedResourceFullName.
   */
  com.google.protobuf.ByteString
      getAttachedResourceFullNameBytes();

  /**
   * <pre>
   * The Cloud IAM policy binding under analysis.
   * </pre>
   *
   * <code>.google.iam.v1.Binding iam_binding = 2;</code>
   * @return Whether the iamBinding field is set.
   */
  boolean hasIamBinding();
  /**
   * <pre>
   * The Cloud IAM policy binding under analysis.
   * </pre>
   *
   * <code>.google.iam.v1.Binding iam_binding = 2;</code>
   * @return The iamBinding.
   */
  com.google.iam.v1.Binding getIamBinding();
  /**
   * <pre>
   * The Cloud IAM policy binding under analysis.
   * </pre>
   *
   * <code>.google.iam.v1.Binding iam_binding = 2;</code>
   */
  com.google.iam.v1.BindingOrBuilder getIamBindingOrBuilder();

  /**
   * <pre>
   * The access control lists derived from the [iam_binding][google.cloud.asset.v1p4beta1.IamPolicyAnalysisResult.iam_binding] that match or
   * potentially match resource and access selectors specified in the request.
   * </pre>
   *
   * <code>repeated .google.cloud.asset.v1p4beta1.IamPolicyAnalysisResult.AccessControlList access_control_lists = 3;</code>
   */
  java.util.List<com.google.cloud.asset.v1p4beta1.IamPolicyAnalysisResult.AccessControlList> 
      getAccessControlListsList();
  /**
   * <pre>
   * The access control lists derived from the [iam_binding][google.cloud.asset.v1p4beta1.IamPolicyAnalysisResult.iam_binding] that match or
   * potentially match resource and access selectors specified in the request.
   * </pre>
   *
   * <code>repeated .google.cloud.asset.v1p4beta1.IamPolicyAnalysisResult.AccessControlList access_control_lists = 3;</code>
   */
  com.google.cloud.asset.v1p4beta1.IamPolicyAnalysisResult.AccessControlList getAccessControlLists(int index);
  /**
   * <pre>
   * The access control lists derived from the [iam_binding][google.cloud.asset.v1p4beta1.IamPolicyAnalysisResult.iam_binding] that match or
   * potentially match resource and access selectors specified in the request.
   * </pre>
   *
   * <code>repeated .google.cloud.asset.v1p4beta1.IamPolicyAnalysisResult.AccessControlList access_control_lists = 3;</code>
   */
  int getAccessControlListsCount();
  /**
   * <pre>
   * The access control lists derived from the [iam_binding][google.cloud.asset.v1p4beta1.IamPolicyAnalysisResult.iam_binding] that match or
   * potentially match resource and access selectors specified in the request.
   * </pre>
   *
   * <code>repeated .google.cloud.asset.v1p4beta1.IamPolicyAnalysisResult.AccessControlList access_control_lists = 3;</code>
   */
  java.util.List<? extends com.google.cloud.asset.v1p4beta1.IamPolicyAnalysisResult.AccessControlListOrBuilder> 
      getAccessControlListsOrBuilderList();
  /**
   * <pre>
   * The access control lists derived from the [iam_binding][google.cloud.asset.v1p4beta1.IamPolicyAnalysisResult.iam_binding] that match or
   * potentially match resource and access selectors specified in the request.
   * </pre>
   *
   * <code>repeated .google.cloud.asset.v1p4beta1.IamPolicyAnalysisResult.AccessControlList access_control_lists = 3;</code>
   */
  com.google.cloud.asset.v1p4beta1.IamPolicyAnalysisResult.AccessControlListOrBuilder getAccessControlListsOrBuilder(
      int index);

  /**
   * <pre>
   * The identity list derived from members of the [iam_binding][google.cloud.asset.v1p4beta1.IamPolicyAnalysisResult.iam_binding] that match or
   * potentially match identity selector specified in the request.
   * </pre>
   *
   * <code>.google.cloud.asset.v1p4beta1.IamPolicyAnalysisResult.IdentityList identity_list = 4;</code>
   * @return Whether the identityList field is set.
   */
  boolean hasIdentityList();
  /**
   * <pre>
   * The identity list derived from members of the [iam_binding][google.cloud.asset.v1p4beta1.IamPolicyAnalysisResult.iam_binding] that match or
   * potentially match identity selector specified in the request.
   * </pre>
   *
   * <code>.google.cloud.asset.v1p4beta1.IamPolicyAnalysisResult.IdentityList identity_list = 4;</code>
   * @return The identityList.
   */
  com.google.cloud.asset.v1p4beta1.IamPolicyAnalysisResult.IdentityList getIdentityList();
  /**
   * <pre>
   * The identity list derived from members of the [iam_binding][google.cloud.asset.v1p4beta1.IamPolicyAnalysisResult.iam_binding] that match or
   * potentially match identity selector specified in the request.
   * </pre>
   *
   * <code>.google.cloud.asset.v1p4beta1.IamPolicyAnalysisResult.IdentityList identity_list = 4;</code>
   */
  com.google.cloud.asset.v1p4beta1.IamPolicyAnalysisResult.IdentityListOrBuilder getIdentityListOrBuilder();

  /**
   * <pre>
   * Represents whether all nodes in the transitive closure of the
   * [iam_binding][google.cloud.asset.v1p4beta1.IamPolicyAnalysisResult.iam_binding] node have been explored.
   * </pre>
   *
   * <code>bool fully_explored = 5;</code>
   * @return The fullyExplored.
   */
  boolean getFullyExplored();
}
