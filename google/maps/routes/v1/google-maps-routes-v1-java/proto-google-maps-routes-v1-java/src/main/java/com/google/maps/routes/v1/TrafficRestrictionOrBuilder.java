// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/maps/routes/v1/route.proto

package com.google.maps.routes.v1;

public interface TrafficRestrictionOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.maps.routes.v1.TrafficRestriction)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * The restriction based on the vehicle's license plate last character. If
   * this field does not exist, then no restriction on route.
   * </pre>
   *
   * <code>.google.maps.routes.v1.LicensePlateLastCharacterRestriction license_plate_last_character_restriction = 1;</code>
   * @return Whether the licensePlateLastCharacterRestriction field is set.
   */
  boolean hasLicensePlateLastCharacterRestriction();
  /**
   * <pre>
   * The restriction based on the vehicle's license plate last character. If
   * this field does not exist, then no restriction on route.
   * </pre>
   *
   * <code>.google.maps.routes.v1.LicensePlateLastCharacterRestriction license_plate_last_character_restriction = 1;</code>
   * @return The licensePlateLastCharacterRestriction.
   */
  com.google.maps.routes.v1.LicensePlateLastCharacterRestriction getLicensePlateLastCharacterRestriction();
  /**
   * <pre>
   * The restriction based on the vehicle's license plate last character. If
   * this field does not exist, then no restriction on route.
   * </pre>
   *
   * <code>.google.maps.routes.v1.LicensePlateLastCharacterRestriction license_plate_last_character_restriction = 1;</code>
   */
  com.google.maps.routes.v1.LicensePlateLastCharacterRestrictionOrBuilder getLicensePlateLastCharacterRestrictionOrBuilder();
}
