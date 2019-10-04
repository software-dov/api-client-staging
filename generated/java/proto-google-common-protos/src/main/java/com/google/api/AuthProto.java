// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/api/auth.proto

package com.google.api;

public final class AuthProto {
  private AuthProto() {}
  public static void registerAllExtensions(
      com.google.protobuf.ExtensionRegistryLite registry) {
  }

  public static void registerAllExtensions(
      com.google.protobuf.ExtensionRegistry registry) {
    registerAllExtensions(
        (com.google.protobuf.ExtensionRegistryLite) registry);
  }
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_api_Authentication_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_api_Authentication_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_api_AuthenticationRule_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_api_AuthenticationRule_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_api_AuthProvider_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_api_AuthProvider_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_api_OAuthRequirements_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_api_OAuthRequirements_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_api_AuthRequirement_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_api_AuthRequirement_fieldAccessorTable;

  public static com.google.protobuf.Descriptors.FileDescriptor
      getDescriptor() {
    return descriptor;
  }
  private static  com.google.protobuf.Descriptors.FileDescriptor
      descriptor;
  static {
    String[] descriptorData = {
      "\n\025google/api/auth.proto\022\ngoogle.api\"l\n\016A" +
      "uthentication\022-\n\005rules\030\003 \003(\0132\036.google.ap" +
      "i.AuthenticationRule\022+\n\tproviders\030\004 \003(\0132" +
      "\030.google.api.AuthProvider\"\251\001\n\022Authentica" +
      "tionRule\022\020\n\010selector\030\001 \001(\t\022,\n\005oauth\030\002 \001(" +
      "\0132\035.google.api.OAuthRequirements\022 \n\030allo" +
      "w_without_credential\030\005 \001(\010\0221\n\014requiremen" +
      "ts\030\007 \003(\0132\033.google.api.AuthRequirement\"j\n" +
      "\014AuthProvider\022\n\n\002id\030\001 \001(\t\022\016\n\006issuer\030\002 \001(" +
      "\t\022\020\n\010jwks_uri\030\003 \001(\t\022\021\n\taudiences\030\004 \001(\t\022\031" +
      "\n\021authorization_url\030\005 \001(\t\"-\n\021OAuthRequir" +
      "ements\022\030\n\020canonical_scopes\030\001 \001(\t\"9\n\017Auth" +
      "Requirement\022\023\n\013provider_id\030\001 \001(\t\022\021\n\taudi" +
      "ences\030\002 \001(\tBk\n\016com.google.apiB\tAuthProto" +
      "P\001ZEgoogle.golang.org/genproto/googleapi" +
      "s/api/serviceconfig;serviceconfig\242\002\004GAPI" +
      "b\006proto3"
    };
    com.google.protobuf.Descriptors.FileDescriptor.InternalDescriptorAssigner assigner =
        new com.google.protobuf.Descriptors.FileDescriptor.    InternalDescriptorAssigner() {
          public com.google.protobuf.ExtensionRegistry assignDescriptors(
              com.google.protobuf.Descriptors.FileDescriptor root) {
            descriptor = root;
            return null;
          }
        };
    com.google.protobuf.Descriptors.FileDescriptor
      .internalBuildGeneratedFileFrom(descriptorData,
        new com.google.protobuf.Descriptors.FileDescriptor[] {
        }, assigner);
    internal_static_google_api_Authentication_descriptor =
      getDescriptor().getMessageTypes().get(0);
    internal_static_google_api_Authentication_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_api_Authentication_descriptor,
        new String[] { "Rules", "Providers", });
    internal_static_google_api_AuthenticationRule_descriptor =
      getDescriptor().getMessageTypes().get(1);
    internal_static_google_api_AuthenticationRule_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_api_AuthenticationRule_descriptor,
        new String[] { "Selector", "Oauth", "AllowWithoutCredential", "Requirements", });
    internal_static_google_api_AuthProvider_descriptor =
      getDescriptor().getMessageTypes().get(2);
    internal_static_google_api_AuthProvider_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_api_AuthProvider_descriptor,
        new String[] { "Id", "Issuer", "JwksUri", "Audiences", "AuthorizationUrl", });
    internal_static_google_api_OAuthRequirements_descriptor =
      getDescriptor().getMessageTypes().get(3);
    internal_static_google_api_OAuthRequirements_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_api_OAuthRequirements_descriptor,
        new String[] { "CanonicalScopes", });
    internal_static_google_api_AuthRequirement_descriptor =
      getDescriptor().getMessageTypes().get(4);
    internal_static_google_api_AuthRequirement_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_api_AuthRequirement_descriptor,
        new String[] { "ProviderId", "Audiences", });
  }

  // @@protoc_insertion_point(outer_class_scope)
}
