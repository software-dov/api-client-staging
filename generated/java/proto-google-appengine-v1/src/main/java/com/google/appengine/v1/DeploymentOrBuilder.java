// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/appengine/v1/deploy.proto

package com.google.appengine.v1;

public interface DeploymentOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.appengine.v1.Deployment)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * Manifest of the files stored in Google Cloud Storage that are included
   * as part of this version. All files must be readable using the
   * credentials supplied with this call.
   * </pre>
   *
   * <code>map&lt;string, .google.appengine.v1.FileInfo&gt; files = 1;</code>
   */
  int getFilesCount();
  /**
   * <pre>
   * Manifest of the files stored in Google Cloud Storage that are included
   * as part of this version. All files must be readable using the
   * credentials supplied with this call.
   * </pre>
   *
   * <code>map&lt;string, .google.appengine.v1.FileInfo&gt; files = 1;</code>
   */
  boolean containsFiles(
      java.lang.String key);
  /**
   * Use {@link #getFilesMap()} instead.
   */
  @java.lang.Deprecated
  java.util.Map<java.lang.String, com.google.appengine.v1.FileInfo>
  getFiles();
  /**
   * <pre>
   * Manifest of the files stored in Google Cloud Storage that are included
   * as part of this version. All files must be readable using the
   * credentials supplied with this call.
   * </pre>
   *
   * <code>map&lt;string, .google.appengine.v1.FileInfo&gt; files = 1;</code>
   */
  java.util.Map<java.lang.String, com.google.appengine.v1.FileInfo>
  getFilesMap();
  /**
   * <pre>
   * Manifest of the files stored in Google Cloud Storage that are included
   * as part of this version. All files must be readable using the
   * credentials supplied with this call.
   * </pre>
   *
   * <code>map&lt;string, .google.appengine.v1.FileInfo&gt; files = 1;</code>
   */

  com.google.appengine.v1.FileInfo getFilesOrDefault(
      java.lang.String key,
      com.google.appengine.v1.FileInfo defaultValue);
  /**
   * <pre>
   * Manifest of the files stored in Google Cloud Storage that are included
   * as part of this version. All files must be readable using the
   * credentials supplied with this call.
   * </pre>
   *
   * <code>map&lt;string, .google.appengine.v1.FileInfo&gt; files = 1;</code>
   */

  com.google.appengine.v1.FileInfo getFilesOrThrow(
      java.lang.String key);

  /**
   * <pre>
   * A Docker image that App Engine uses to run the version.
   * Only applicable for instances in App Engine flexible environment.
   * </pre>
   *
   * <code>.google.appengine.v1.ContainerInfo container = 2;</code>
   */
  boolean hasContainer();
  /**
   * <pre>
   * A Docker image that App Engine uses to run the version.
   * Only applicable for instances in App Engine flexible environment.
   * </pre>
   *
   * <code>.google.appengine.v1.ContainerInfo container = 2;</code>
   */
  com.google.appengine.v1.ContainerInfo getContainer();
  /**
   * <pre>
   * A Docker image that App Engine uses to run the version.
   * Only applicable for instances in App Engine flexible environment.
   * </pre>
   *
   * <code>.google.appengine.v1.ContainerInfo container = 2;</code>
   */
  com.google.appengine.v1.ContainerInfoOrBuilder getContainerOrBuilder();

  /**
   * <pre>
   * The zip file for this deployment, if this is a zip deployment.
   * </pre>
   *
   * <code>.google.appengine.v1.ZipInfo zip = 3;</code>
   */
  boolean hasZip();
  /**
   * <pre>
   * The zip file for this deployment, if this is a zip deployment.
   * </pre>
   *
   * <code>.google.appengine.v1.ZipInfo zip = 3;</code>
   */
  com.google.appengine.v1.ZipInfo getZip();
  /**
   * <pre>
   * The zip file for this deployment, if this is a zip deployment.
   * </pre>
   *
   * <code>.google.appengine.v1.ZipInfo zip = 3;</code>
   */
  com.google.appengine.v1.ZipInfoOrBuilder getZipOrBuilder();
}
