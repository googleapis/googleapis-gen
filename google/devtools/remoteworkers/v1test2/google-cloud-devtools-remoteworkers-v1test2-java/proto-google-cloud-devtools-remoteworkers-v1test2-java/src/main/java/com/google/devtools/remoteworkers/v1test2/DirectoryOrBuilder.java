// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/devtools/remoteworkers/v1test2/command.proto

package com.google.devtools.remoteworkers.v1test2;

public interface DirectoryOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.devtools.remoteworkers.v1test2.Directory)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * The files in this directory
   * </pre>
   *
   * <code>repeated .google.devtools.remoteworkers.v1test2.FileMetadata files = 1;</code>
   */
  java.util.List<com.google.devtools.remoteworkers.v1test2.FileMetadata> 
      getFilesList();
  /**
   * <pre>
   * The files in this directory
   * </pre>
   *
   * <code>repeated .google.devtools.remoteworkers.v1test2.FileMetadata files = 1;</code>
   */
  com.google.devtools.remoteworkers.v1test2.FileMetadata getFiles(int index);
  /**
   * <pre>
   * The files in this directory
   * </pre>
   *
   * <code>repeated .google.devtools.remoteworkers.v1test2.FileMetadata files = 1;</code>
   */
  int getFilesCount();
  /**
   * <pre>
   * The files in this directory
   * </pre>
   *
   * <code>repeated .google.devtools.remoteworkers.v1test2.FileMetadata files = 1;</code>
   */
  java.util.List<? extends com.google.devtools.remoteworkers.v1test2.FileMetadataOrBuilder> 
      getFilesOrBuilderList();
  /**
   * <pre>
   * The files in this directory
   * </pre>
   *
   * <code>repeated .google.devtools.remoteworkers.v1test2.FileMetadata files = 1;</code>
   */
  com.google.devtools.remoteworkers.v1test2.FileMetadataOrBuilder getFilesOrBuilder(
      int index);

  /**
   * <pre>
   * Any subdirectories
   * </pre>
   *
   * <code>repeated .google.devtools.remoteworkers.v1test2.DirectoryMetadata directories = 2;</code>
   */
  java.util.List<com.google.devtools.remoteworkers.v1test2.DirectoryMetadata> 
      getDirectoriesList();
  /**
   * <pre>
   * Any subdirectories
   * </pre>
   *
   * <code>repeated .google.devtools.remoteworkers.v1test2.DirectoryMetadata directories = 2;</code>
   */
  com.google.devtools.remoteworkers.v1test2.DirectoryMetadata getDirectories(int index);
  /**
   * <pre>
   * Any subdirectories
   * </pre>
   *
   * <code>repeated .google.devtools.remoteworkers.v1test2.DirectoryMetadata directories = 2;</code>
   */
  int getDirectoriesCount();
  /**
   * <pre>
   * Any subdirectories
   * </pre>
   *
   * <code>repeated .google.devtools.remoteworkers.v1test2.DirectoryMetadata directories = 2;</code>
   */
  java.util.List<? extends com.google.devtools.remoteworkers.v1test2.DirectoryMetadataOrBuilder> 
      getDirectoriesOrBuilderList();
  /**
   * <pre>
   * Any subdirectories
   * </pre>
   *
   * <code>repeated .google.devtools.remoteworkers.v1test2.DirectoryMetadata directories = 2;</code>
   */
  com.google.devtools.remoteworkers.v1test2.DirectoryMetadataOrBuilder getDirectoriesOrBuilder(
      int index);
}
