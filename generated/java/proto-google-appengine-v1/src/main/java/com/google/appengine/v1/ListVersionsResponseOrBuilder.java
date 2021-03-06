// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/appengine/v1/appengine.proto

package com.google.appengine.v1;

public interface ListVersionsResponseOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.appengine.v1.ListVersionsResponse)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * The versions belonging to the requested service.
   * </pre>
   *
   * <code>repeated .google.appengine.v1.Version versions = 1;</code>
   */
  java.util.List<com.google.appengine.v1.Version> 
      getVersionsList();
  /**
   * <pre>
   * The versions belonging to the requested service.
   * </pre>
   *
   * <code>repeated .google.appengine.v1.Version versions = 1;</code>
   */
  com.google.appengine.v1.Version getVersions(int index);
  /**
   * <pre>
   * The versions belonging to the requested service.
   * </pre>
   *
   * <code>repeated .google.appengine.v1.Version versions = 1;</code>
   */
  int getVersionsCount();
  /**
   * <pre>
   * The versions belonging to the requested service.
   * </pre>
   *
   * <code>repeated .google.appengine.v1.Version versions = 1;</code>
   */
  java.util.List<? extends com.google.appengine.v1.VersionOrBuilder> 
      getVersionsOrBuilderList();
  /**
   * <pre>
   * The versions belonging to the requested service.
   * </pre>
   *
   * <code>repeated .google.appengine.v1.Version versions = 1;</code>
   */
  com.google.appengine.v1.VersionOrBuilder getVersionsOrBuilder(
      int index);

  /**
   * <pre>
   * Continuation token for fetching the next page of results.
   * </pre>
   *
   * <code>string next_page_token = 2;</code>
   */
  java.lang.String getNextPageToken();
  /**
   * <pre>
   * Continuation token for fetching the next page of results.
   * </pre>
   *
   * <code>string next_page_token = 2;</code>
   */
  com.google.protobuf.ByteString
      getNextPageTokenBytes();
}
