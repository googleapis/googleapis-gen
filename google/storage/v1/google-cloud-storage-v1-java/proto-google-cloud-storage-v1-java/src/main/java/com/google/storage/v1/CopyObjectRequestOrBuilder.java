// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/storage/v1/storage.proto

package com.google.storage.v1;

public interface CopyObjectRequestOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.storage.v1.CopyObjectRequest)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * Required. Name of the bucket in which to store the new object. Overrides the provided
   * object
   * metadata's `bucket` value, if any.
   * </pre>
   *
   * <code>string destination_bucket = 1 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return The destinationBucket.
   */
  java.lang.String getDestinationBucket();
  /**
   * <pre>
   * Required. Name of the bucket in which to store the new object. Overrides the provided
   * object
   * metadata's `bucket` value, if any.
   * </pre>
   *
   * <code>string destination_bucket = 1 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return The bytes for destinationBucket.
   */
  com.google.protobuf.ByteString
      getDestinationBucketBytes();

  /**
   * <pre>
   * Required. Name of the new object.
   * Required when the object metadata is not otherwise provided. Overrides the
   * object metadata's `name` value, if any.
   * </pre>
   *
   * <code>string destination_object = 2 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return The destinationObject.
   */
  java.lang.String getDestinationObject();
  /**
   * <pre>
   * Required. Name of the new object.
   * Required when the object metadata is not otherwise provided. Overrides the
   * object metadata's `name` value, if any.
   * </pre>
   *
   * <code>string destination_object = 2 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return The bytes for destinationObject.
   */
  com.google.protobuf.ByteString
      getDestinationObjectBytes();

  /**
   * <pre>
   * Apply a predefined set of access controls to the destination object.
   * </pre>
   *
   * <code>.google.storage.v1.CommonEnums.PredefinedObjectAcl destination_predefined_acl = 3;</code>
   * @return The enum numeric value on the wire for destinationPredefinedAcl.
   */
  int getDestinationPredefinedAclValue();
  /**
   * <pre>
   * Apply a predefined set of access controls to the destination object.
   * </pre>
   *
   * <code>.google.storage.v1.CommonEnums.PredefinedObjectAcl destination_predefined_acl = 3;</code>
   * @return The destinationPredefinedAcl.
   */
  com.google.storage.v1.CommonEnums.PredefinedObjectAcl getDestinationPredefinedAcl();

  /**
   * <pre>
   * Makes the operation conditional on whether the destination object's current
   * generation matches the given value. Setting to 0 makes the operation
   * succeed only if there are no live versions of the object.
   * </pre>
   *
   * <code>.google.protobuf.Int64Value if_generation_match = 4;</code>
   * @return Whether the ifGenerationMatch field is set.
   */
  boolean hasIfGenerationMatch();
  /**
   * <pre>
   * Makes the operation conditional on whether the destination object's current
   * generation matches the given value. Setting to 0 makes the operation
   * succeed only if there are no live versions of the object.
   * </pre>
   *
   * <code>.google.protobuf.Int64Value if_generation_match = 4;</code>
   * @return The ifGenerationMatch.
   */
  com.google.protobuf.Int64Value getIfGenerationMatch();
  /**
   * <pre>
   * Makes the operation conditional on whether the destination object's current
   * generation matches the given value. Setting to 0 makes the operation
   * succeed only if there are no live versions of the object.
   * </pre>
   *
   * <code>.google.protobuf.Int64Value if_generation_match = 4;</code>
   */
  com.google.protobuf.Int64ValueOrBuilder getIfGenerationMatchOrBuilder();

  /**
   * <pre>
   * Makes the operation conditional on whether the destination object's current
   * generation does not match the given value. If no live object exists, the
   * precondition fails. Setting to 0 makes the operation succeed only if there
   * is a live version of the object.
   * </pre>
   *
   * <code>.google.protobuf.Int64Value if_generation_not_match = 5;</code>
   * @return Whether the ifGenerationNotMatch field is set.
   */
  boolean hasIfGenerationNotMatch();
  /**
   * <pre>
   * Makes the operation conditional on whether the destination object's current
   * generation does not match the given value. If no live object exists, the
   * precondition fails. Setting to 0 makes the operation succeed only if there
   * is a live version of the object.
   * </pre>
   *
   * <code>.google.protobuf.Int64Value if_generation_not_match = 5;</code>
   * @return The ifGenerationNotMatch.
   */
  com.google.protobuf.Int64Value getIfGenerationNotMatch();
  /**
   * <pre>
   * Makes the operation conditional on whether the destination object's current
   * generation does not match the given value. If no live object exists, the
   * precondition fails. Setting to 0 makes the operation succeed only if there
   * is a live version of the object.
   * </pre>
   *
   * <code>.google.protobuf.Int64Value if_generation_not_match = 5;</code>
   */
  com.google.protobuf.Int64ValueOrBuilder getIfGenerationNotMatchOrBuilder();

  /**
   * <pre>
   * Makes the operation conditional on whether the destination object's current
   * metageneration matches the given value.
   * </pre>
   *
   * <code>.google.protobuf.Int64Value if_metageneration_match = 6;</code>
   * @return Whether the ifMetagenerationMatch field is set.
   */
  boolean hasIfMetagenerationMatch();
  /**
   * <pre>
   * Makes the operation conditional on whether the destination object's current
   * metageneration matches the given value.
   * </pre>
   *
   * <code>.google.protobuf.Int64Value if_metageneration_match = 6;</code>
   * @return The ifMetagenerationMatch.
   */
  com.google.protobuf.Int64Value getIfMetagenerationMatch();
  /**
   * <pre>
   * Makes the operation conditional on whether the destination object's current
   * metageneration matches the given value.
   * </pre>
   *
   * <code>.google.protobuf.Int64Value if_metageneration_match = 6;</code>
   */
  com.google.protobuf.Int64ValueOrBuilder getIfMetagenerationMatchOrBuilder();

  /**
   * <pre>
   * Makes the operation conditional on whether the destination object's current
   * metageneration does not match the given value.
   * </pre>
   *
   * <code>.google.protobuf.Int64Value if_metageneration_not_match = 7;</code>
   * @return Whether the ifMetagenerationNotMatch field is set.
   */
  boolean hasIfMetagenerationNotMatch();
  /**
   * <pre>
   * Makes the operation conditional on whether the destination object's current
   * metageneration does not match the given value.
   * </pre>
   *
   * <code>.google.protobuf.Int64Value if_metageneration_not_match = 7;</code>
   * @return The ifMetagenerationNotMatch.
   */
  com.google.protobuf.Int64Value getIfMetagenerationNotMatch();
  /**
   * <pre>
   * Makes the operation conditional on whether the destination object's current
   * metageneration does not match the given value.
   * </pre>
   *
   * <code>.google.protobuf.Int64Value if_metageneration_not_match = 7;</code>
   */
  com.google.protobuf.Int64ValueOrBuilder getIfMetagenerationNotMatchOrBuilder();

  /**
   * <pre>
   * Makes the operation conditional on whether the source object's current
   * generation matches the given value.
   * </pre>
   *
   * <code>.google.protobuf.Int64Value if_source_generation_match = 8;</code>
   * @return Whether the ifSourceGenerationMatch field is set.
   */
  boolean hasIfSourceGenerationMatch();
  /**
   * <pre>
   * Makes the operation conditional on whether the source object's current
   * generation matches the given value.
   * </pre>
   *
   * <code>.google.protobuf.Int64Value if_source_generation_match = 8;</code>
   * @return The ifSourceGenerationMatch.
   */
  com.google.protobuf.Int64Value getIfSourceGenerationMatch();
  /**
   * <pre>
   * Makes the operation conditional on whether the source object's current
   * generation matches the given value.
   * </pre>
   *
   * <code>.google.protobuf.Int64Value if_source_generation_match = 8;</code>
   */
  com.google.protobuf.Int64ValueOrBuilder getIfSourceGenerationMatchOrBuilder();

  /**
   * <pre>
   * Makes the operation conditional on whether the source object's current
   * generation does not match the given value.
   * </pre>
   *
   * <code>.google.protobuf.Int64Value if_source_generation_not_match = 9;</code>
   * @return Whether the ifSourceGenerationNotMatch field is set.
   */
  boolean hasIfSourceGenerationNotMatch();
  /**
   * <pre>
   * Makes the operation conditional on whether the source object's current
   * generation does not match the given value.
   * </pre>
   *
   * <code>.google.protobuf.Int64Value if_source_generation_not_match = 9;</code>
   * @return The ifSourceGenerationNotMatch.
   */
  com.google.protobuf.Int64Value getIfSourceGenerationNotMatch();
  /**
   * <pre>
   * Makes the operation conditional on whether the source object's current
   * generation does not match the given value.
   * </pre>
   *
   * <code>.google.protobuf.Int64Value if_source_generation_not_match = 9;</code>
   */
  com.google.protobuf.Int64ValueOrBuilder getIfSourceGenerationNotMatchOrBuilder();

  /**
   * <pre>
   * Makes the operation conditional on whether the source object's current
   * metageneration matches the given value.
   * </pre>
   *
   * <code>.google.protobuf.Int64Value if_source_metageneration_match = 10;</code>
   * @return Whether the ifSourceMetagenerationMatch field is set.
   */
  boolean hasIfSourceMetagenerationMatch();
  /**
   * <pre>
   * Makes the operation conditional on whether the source object's current
   * metageneration matches the given value.
   * </pre>
   *
   * <code>.google.protobuf.Int64Value if_source_metageneration_match = 10;</code>
   * @return The ifSourceMetagenerationMatch.
   */
  com.google.protobuf.Int64Value getIfSourceMetagenerationMatch();
  /**
   * <pre>
   * Makes the operation conditional on whether the source object's current
   * metageneration matches the given value.
   * </pre>
   *
   * <code>.google.protobuf.Int64Value if_source_metageneration_match = 10;</code>
   */
  com.google.protobuf.Int64ValueOrBuilder getIfSourceMetagenerationMatchOrBuilder();

  /**
   * <pre>
   * Makes the operation conditional on whether the source object's current
   * metageneration does not match the given value.
   * </pre>
   *
   * <code>.google.protobuf.Int64Value if_source_metageneration_not_match = 11;</code>
   * @return Whether the ifSourceMetagenerationNotMatch field is set.
   */
  boolean hasIfSourceMetagenerationNotMatch();
  /**
   * <pre>
   * Makes the operation conditional on whether the source object's current
   * metageneration does not match the given value.
   * </pre>
   *
   * <code>.google.protobuf.Int64Value if_source_metageneration_not_match = 11;</code>
   * @return The ifSourceMetagenerationNotMatch.
   */
  com.google.protobuf.Int64Value getIfSourceMetagenerationNotMatch();
  /**
   * <pre>
   * Makes the operation conditional on whether the source object's current
   * metageneration does not match the given value.
   * </pre>
   *
   * <code>.google.protobuf.Int64Value if_source_metageneration_not_match = 11;</code>
   */
  com.google.protobuf.Int64ValueOrBuilder getIfSourceMetagenerationNotMatchOrBuilder();

  /**
   * <pre>
   * Set of properties to return. Defaults to `NO_ACL`, unless the
   * object resource specifies the `acl` property, when it defaults
   * to `full`.
   * </pre>
   *
   * <code>.google.storage.v1.CommonEnums.Projection projection = 12;</code>
   * @return The enum numeric value on the wire for projection.
   */
  int getProjectionValue();
  /**
   * <pre>
   * Set of properties to return. Defaults to `NO_ACL`, unless the
   * object resource specifies the `acl` property, when it defaults
   * to `full`.
   * </pre>
   *
   * <code>.google.storage.v1.CommonEnums.Projection projection = 12;</code>
   * @return The projection.
   */
  com.google.storage.v1.CommonEnums.Projection getProjection();

  /**
   * <pre>
   * Required. Name of the bucket in which to find the source object.
   * </pre>
   *
   * <code>string source_bucket = 13 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return The sourceBucket.
   */
  java.lang.String getSourceBucket();
  /**
   * <pre>
   * Required. Name of the bucket in which to find the source object.
   * </pre>
   *
   * <code>string source_bucket = 13 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return The bytes for sourceBucket.
   */
  com.google.protobuf.ByteString
      getSourceBucketBytes();

  /**
   * <pre>
   * Required. Name of the source object.
   * </pre>
   *
   * <code>string source_object = 14 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return The sourceObject.
   */
  java.lang.String getSourceObject();
  /**
   * <pre>
   * Required. Name of the source object.
   * </pre>
   *
   * <code>string source_object = 14 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return The bytes for sourceObject.
   */
  com.google.protobuf.ByteString
      getSourceObjectBytes();

  /**
   * <pre>
   * If present, selects a specific revision of the source object (as opposed to
   * the latest version, the default).
   * </pre>
   *
   * <code>int64 source_generation = 15;</code>
   * @return The sourceGeneration.
   */
  long getSourceGeneration();

  /**
   * <pre>
   * Properties of the resulting object. If not set, duplicate properties of
   * source object.
   * </pre>
   *
   * <code>.google.storage.v1.Object destination = 17;</code>
   * @return Whether the destination field is set.
   */
  boolean hasDestination();
  /**
   * <pre>
   * Properties of the resulting object. If not set, duplicate properties of
   * source object.
   * </pre>
   *
   * <code>.google.storage.v1.Object destination = 17;</code>
   * @return The destination.
   */
  com.google.storage.v1.Object getDestination();
  /**
   * <pre>
   * Properties of the resulting object. If not set, duplicate properties of
   * source object.
   * </pre>
   *
   * <code>.google.storage.v1.Object destination = 17;</code>
   */
  com.google.storage.v1.ObjectOrBuilder getDestinationOrBuilder();

  /**
   * <pre>
   * Resource name of the Cloud KMS key, of the form
   * `projects/my-project/locations/my-location/keyRings/my-kr/cryptoKeys/my-key`,
   * that will be used to encrypt the object. Overrides the object
   * metadata's `kms_key_name` value, if any.
   * </pre>
   *
   * <code>string destination_kms_key_name = 20;</code>
   * @return The destinationKmsKeyName.
   */
  java.lang.String getDestinationKmsKeyName();
  /**
   * <pre>
   * Resource name of the Cloud KMS key, of the form
   * `projects/my-project/locations/my-location/keyRings/my-kr/cryptoKeys/my-key`,
   * that will be used to encrypt the object. Overrides the object
   * metadata's `kms_key_name` value, if any.
   * </pre>
   *
   * <code>string destination_kms_key_name = 20;</code>
   * @return The bytes for destinationKmsKeyName.
   */
  com.google.protobuf.ByteString
      getDestinationKmsKeyNameBytes();

  /**
   * <pre>
   * A set of parameters common to Storage API requests concerning an object.
   * </pre>
   *
   * <code>.google.storage.v1.CommonObjectRequestParams common_object_request_params = 18;</code>
   * @return Whether the commonObjectRequestParams field is set.
   */
  boolean hasCommonObjectRequestParams();
  /**
   * <pre>
   * A set of parameters common to Storage API requests concerning an object.
   * </pre>
   *
   * <code>.google.storage.v1.CommonObjectRequestParams common_object_request_params = 18;</code>
   * @return The commonObjectRequestParams.
   */
  com.google.storage.v1.CommonObjectRequestParams getCommonObjectRequestParams();
  /**
   * <pre>
   * A set of parameters common to Storage API requests concerning an object.
   * </pre>
   *
   * <code>.google.storage.v1.CommonObjectRequestParams common_object_request_params = 18;</code>
   */
  com.google.storage.v1.CommonObjectRequestParamsOrBuilder getCommonObjectRequestParamsOrBuilder();

  /**
   * <pre>
   * A set of parameters common to all Storage API requests.
   * </pre>
   *
   * <code>.google.storage.v1.CommonRequestParams common_request_params = 19;</code>
   * @return Whether the commonRequestParams field is set.
   */
  boolean hasCommonRequestParams();
  /**
   * <pre>
   * A set of parameters common to all Storage API requests.
   * </pre>
   *
   * <code>.google.storage.v1.CommonRequestParams common_request_params = 19;</code>
   * @return The commonRequestParams.
   */
  com.google.storage.v1.CommonRequestParams getCommonRequestParams();
  /**
   * <pre>
   * A set of parameters common to all Storage API requests.
   * </pre>
   *
   * <code>.google.storage.v1.CommonRequestParams common_request_params = 19;</code>
   */
  com.google.storage.v1.CommonRequestParamsOrBuilder getCommonRequestParamsOrBuilder();
}
