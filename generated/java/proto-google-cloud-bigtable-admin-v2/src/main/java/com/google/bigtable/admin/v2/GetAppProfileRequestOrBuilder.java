// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/bigtable/admin/v2/bigtable_instance_admin.proto

package com.google.bigtable.admin.v2;

public interface GetAppProfileRequestOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.bigtable.admin.v2.GetAppProfileRequest)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * The unique name of the requested app profile. Values are of the form
   * `projects/&lt;project&gt;/instances/&lt;instance&gt;/appProfiles/&lt;app_profile&gt;`.
   * </pre>
   *
   * <code>string name = 1;</code>
   */
  java.lang.String getName();
  /**
   * <pre>
   * The unique name of the requested app profile. Values are of the form
   * `projects/&lt;project&gt;/instances/&lt;instance&gt;/appProfiles/&lt;app_profile&gt;`.
   * </pre>
   *
   * <code>string name = 1;</code>
   */
  com.google.protobuf.ByteString
      getNameBytes();
}