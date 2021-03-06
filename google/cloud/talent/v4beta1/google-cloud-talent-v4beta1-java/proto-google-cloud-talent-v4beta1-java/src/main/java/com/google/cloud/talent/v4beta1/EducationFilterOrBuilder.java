// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/talent/v4beta1/filters.proto

package com.google.cloud.talent.v4beta1;

public interface EducationFilterOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.cloud.talent.v4beta1.EducationFilter)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * The school name. For example "MIT", "University of California, Berkeley".
   * </pre>
   *
   * <code>string school = 1;</code>
   * @return The school.
   */
  java.lang.String getSchool();
  /**
   * <pre>
   * The school name. For example "MIT", "University of California, Berkeley".
   * </pre>
   *
   * <code>string school = 1;</code>
   * @return The bytes for school.
   */
  com.google.protobuf.ByteString
      getSchoolBytes();

  /**
   * <pre>
   * The field of study. This is to search against value provided in
   * [Degree.fields_of_study][google.cloud.talent.v4beta1.Degree.fields_of_study].
   * For example "Computer Science", "Mathematics".
   * </pre>
   *
   * <code>string field_of_study = 2;</code>
   * @return The fieldOfStudy.
   */
  java.lang.String getFieldOfStudy();
  /**
   * <pre>
   * The field of study. This is to search against value provided in
   * [Degree.fields_of_study][google.cloud.talent.v4beta1.Degree.fields_of_study].
   * For example "Computer Science", "Mathematics".
   * </pre>
   *
   * <code>string field_of_study = 2;</code>
   * @return The bytes for fieldOfStudy.
   */
  com.google.protobuf.ByteString
      getFieldOfStudyBytes();

  /**
   * <pre>
   * Education degree in ISCED code. Each value in degree covers a specific
   * level of education, without any expansion to upper nor lower levels of
   * education degree.
   * </pre>
   *
   * <code>.google.cloud.talent.v4beta1.DegreeType degree_type = 3;</code>
   * @return The enum numeric value on the wire for degreeType.
   */
  int getDegreeTypeValue();
  /**
   * <pre>
   * Education degree in ISCED code. Each value in degree covers a specific
   * level of education, without any expansion to upper nor lower levels of
   * education degree.
   * </pre>
   *
   * <code>.google.cloud.talent.v4beta1.DegreeType degree_type = 3;</code>
   * @return The degreeType.
   */
  com.google.cloud.talent.v4beta1.DegreeType getDegreeType();

  /**
   * <pre>
   * Whether to apply negation to the filter so profiles matching the filter
   * is excluded.
   * </pre>
   *
   * <code>bool negated = 6;</code>
   * @return The negated.
   */
  boolean getNegated();
}
