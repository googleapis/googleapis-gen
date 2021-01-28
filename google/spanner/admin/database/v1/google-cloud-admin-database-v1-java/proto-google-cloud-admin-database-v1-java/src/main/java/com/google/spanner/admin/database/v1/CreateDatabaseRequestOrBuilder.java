// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/spanner/admin/database/v1/spanner_database_admin.proto

package com.google.spanner.admin.database.v1;

public interface CreateDatabaseRequestOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.spanner.admin.database.v1.CreateDatabaseRequest)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * Required. The name of the instance that will serve the new database.
   * Values are of the form `projects/&lt;project&gt;/instances/&lt;instance&gt;`.
   * </pre>
   *
   * <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
   * @return The parent.
   */
  java.lang.String getParent();
  /**
   * <pre>
   * Required. The name of the instance that will serve the new database.
   * Values are of the form `projects/&lt;project&gt;/instances/&lt;instance&gt;`.
   * </pre>
   *
   * <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
   * @return The bytes for parent.
   */
  com.google.protobuf.ByteString
      getParentBytes();

  /**
   * <pre>
   * Required. A `CREATE DATABASE` statement, which specifies the ID of the
   * new database.  The database ID must conform to the regular expression
   * `[a-z][a-z0-9_&#92;-]*[a-z0-9]` and be between 2 and 30 characters in length.
   * If the database ID is a reserved word or if it contains a hyphen, the
   * database ID must be enclosed in backticks (`` ` ``).
   * </pre>
   *
   * <code>string create_statement = 2 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return The createStatement.
   */
  java.lang.String getCreateStatement();
  /**
   * <pre>
   * Required. A `CREATE DATABASE` statement, which specifies the ID of the
   * new database.  The database ID must conform to the regular expression
   * `[a-z][a-z0-9_&#92;-]*[a-z0-9]` and be between 2 and 30 characters in length.
   * If the database ID is a reserved word or if it contains a hyphen, the
   * database ID must be enclosed in backticks (`` ` ``).
   * </pre>
   *
   * <code>string create_statement = 2 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return The bytes for createStatement.
   */
  com.google.protobuf.ByteString
      getCreateStatementBytes();

  /**
   * <pre>
   * Optional. A list of DDL statements to run inside the newly created
   * database. Statements can create tables, indexes, etc. These
   * statements execute atomically with the creation of the database:
   * if there is an error in any statement, the database is not created.
   * </pre>
   *
   * <code>repeated string extra_statements = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
   * @return A list containing the extraStatements.
   */
  java.util.List<java.lang.String>
      getExtraStatementsList();
  /**
   * <pre>
   * Optional. A list of DDL statements to run inside the newly created
   * database. Statements can create tables, indexes, etc. These
   * statements execute atomically with the creation of the database:
   * if there is an error in any statement, the database is not created.
   * </pre>
   *
   * <code>repeated string extra_statements = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
   * @return The count of extraStatements.
   */
  int getExtraStatementsCount();
  /**
   * <pre>
   * Optional. A list of DDL statements to run inside the newly created
   * database. Statements can create tables, indexes, etc. These
   * statements execute atomically with the creation of the database:
   * if there is an error in any statement, the database is not created.
   * </pre>
   *
   * <code>repeated string extra_statements = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
   * @param index The index of the element to return.
   * @return The extraStatements at the given index.
   */
  java.lang.String getExtraStatements(int index);
  /**
   * <pre>
   * Optional. A list of DDL statements to run inside the newly created
   * database. Statements can create tables, indexes, etc. These
   * statements execute atomically with the creation of the database:
   * if there is an error in any statement, the database is not created.
   * </pre>
   *
   * <code>repeated string extra_statements = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
   * @param index The index of the value to return.
   * @return The bytes of the extraStatements at the given index.
   */
  com.google.protobuf.ByteString
      getExtraStatementsBytes(int index);
}
