// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/datastream/v1alpha1/datastream_resources.proto

package com.google.cloud.datastream.v1alpha1;

public interface MysqlRdbmsOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.cloud.datastream.v1alpha1.MysqlRdbms)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * Mysql databases on the server
   * </pre>
   *
   * <code>repeated .google.cloud.datastream.v1alpha1.MysqlDatabase mysql_databases = 1;</code>
   */
  java.util.List<com.google.cloud.datastream.v1alpha1.MysqlDatabase> 
      getMysqlDatabasesList();
  /**
   * <pre>
   * Mysql databases on the server
   * </pre>
   *
   * <code>repeated .google.cloud.datastream.v1alpha1.MysqlDatabase mysql_databases = 1;</code>
   */
  com.google.cloud.datastream.v1alpha1.MysqlDatabase getMysqlDatabases(int index);
  /**
   * <pre>
   * Mysql databases on the server
   * </pre>
   *
   * <code>repeated .google.cloud.datastream.v1alpha1.MysqlDatabase mysql_databases = 1;</code>
   */
  int getMysqlDatabasesCount();
  /**
   * <pre>
   * Mysql databases on the server
   * </pre>
   *
   * <code>repeated .google.cloud.datastream.v1alpha1.MysqlDatabase mysql_databases = 1;</code>
   */
  java.util.List<? extends com.google.cloud.datastream.v1alpha1.MysqlDatabaseOrBuilder> 
      getMysqlDatabasesOrBuilderList();
  /**
   * <pre>
   * Mysql databases on the server
   * </pre>
   *
   * <code>repeated .google.cloud.datastream.v1alpha1.MysqlDatabase mysql_databases = 1;</code>
   */
  com.google.cloud.datastream.v1alpha1.MysqlDatabaseOrBuilder getMysqlDatabasesOrBuilder(
      int index);
}
