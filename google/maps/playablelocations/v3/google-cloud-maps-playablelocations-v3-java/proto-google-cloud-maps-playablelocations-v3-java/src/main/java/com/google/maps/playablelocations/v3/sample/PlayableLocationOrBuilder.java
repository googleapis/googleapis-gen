// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/maps/playablelocations/v3/sample/resources.proto

package com.google.maps.playablelocations.v3.sample;

public interface PlayableLocationOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.maps.playablelocations.v3.sample.PlayableLocation)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * Required. The name of this playable location.
   * </pre>
   *
   * <code>string name = 1;</code>
   * @return The name.
   */
  java.lang.String getName();
  /**
   * <pre>
   * Required. The name of this playable location.
   * </pre>
   *
   * <code>string name = 1;</code>
   * @return The bytes for name.
   */
  com.google.protobuf.ByteString
      getNameBytes();

  /**
   * <pre>
   * A [place ID] (https://developers.google.com/places/place-id)
   * </pre>
   *
   * <code>string place_id = 2;</code>
   * @return The placeId.
   */
  java.lang.String getPlaceId();
  /**
   * <pre>
   * A [place ID] (https://developers.google.com/places/place-id)
   * </pre>
   *
   * <code>string place_id = 2;</code>
   * @return The bytes for placeId.
   */
  com.google.protobuf.ByteString
      getPlaceIdBytes();

  /**
   * <pre>
   * A [plus code] (http://openlocationcode.com)
   * </pre>
   *
   * <code>string plus_code = 3;</code>
   * @return The plusCode.
   */
  java.lang.String getPlusCode();
  /**
   * <pre>
   * A [plus code] (http://openlocationcode.com)
   * </pre>
   *
   * <code>string plus_code = 3;</code>
   * @return The bytes for plusCode.
   */
  com.google.protobuf.ByteString
      getPlusCodeBytes();

  /**
   * <pre>
   * A collection of [Playable Location Types](/maps/tt/games/types) for this
   * playable location. The first type in the collection is the primary type.
   * Type information might not be available for all playable locations.
   * </pre>
   *
   * <code>repeated string types = 4;</code>
   * @return A list containing the types.
   */
  java.util.List<java.lang.String>
      getTypesList();
  /**
   * <pre>
   * A collection of [Playable Location Types](/maps/tt/games/types) for this
   * playable location. The first type in the collection is the primary type.
   * Type information might not be available for all playable locations.
   * </pre>
   *
   * <code>repeated string types = 4;</code>
   * @return The count of types.
   */
  int getTypesCount();
  /**
   * <pre>
   * A collection of [Playable Location Types](/maps/tt/games/types) for this
   * playable location. The first type in the collection is the primary type.
   * Type information might not be available for all playable locations.
   * </pre>
   *
   * <code>repeated string types = 4;</code>
   * @param index The index of the element to return.
   * @return The types at the given index.
   */
  java.lang.String getTypes(int index);
  /**
   * <pre>
   * A collection of [Playable Location Types](/maps/tt/games/types) for this
   * playable location. The first type in the collection is the primary type.
   * Type information might not be available for all playable locations.
   * </pre>
   *
   * <code>repeated string types = 4;</code>
   * @param index The index of the value to return.
   * @return The bytes of the types at the given index.
   */
  com.google.protobuf.ByteString
      getTypesBytes(int index);

  /**
   * <pre>
   * Required. The latitude and longitude associated with the center of the
   * playable location.
   * By default, the set of playable locations returned from
   * [SamplePlayableLocations][google.maps.playablelocations.v3.PlayableLocations.SamplePlayableLocations]
   * use center-point coordinates.
   * </pre>
   *
   * <code>.google.type.LatLng center_point = 5;</code>
   * @return Whether the centerPoint field is set.
   */
  boolean hasCenterPoint();
  /**
   * <pre>
   * Required. The latitude and longitude associated with the center of the
   * playable location.
   * By default, the set of playable locations returned from
   * [SamplePlayableLocations][google.maps.playablelocations.v3.PlayableLocations.SamplePlayableLocations]
   * use center-point coordinates.
   * </pre>
   *
   * <code>.google.type.LatLng center_point = 5;</code>
   * @return The centerPoint.
   */
  com.google.type.LatLng getCenterPoint();
  /**
   * <pre>
   * Required. The latitude and longitude associated with the center of the
   * playable location.
   * By default, the set of playable locations returned from
   * [SamplePlayableLocations][google.maps.playablelocations.v3.PlayableLocations.SamplePlayableLocations]
   * use center-point coordinates.
   * </pre>
   *
   * <code>.google.type.LatLng center_point = 5;</code>
   */
  com.google.type.LatLngOrBuilder getCenterPointOrBuilder();

  /**
   * <pre>
   * The playable location's coordinates, snapped to the sidewalk of the
   * nearest road, if a nearby road exists.
   * </pre>
   *
   * <code>.google.type.LatLng snapped_point = 6;</code>
   * @return Whether the snappedPoint field is set.
   */
  boolean hasSnappedPoint();
  /**
   * <pre>
   * The playable location's coordinates, snapped to the sidewalk of the
   * nearest road, if a nearby road exists.
   * </pre>
   *
   * <code>.google.type.LatLng snapped_point = 6;</code>
   * @return The snappedPoint.
   */
  com.google.type.LatLng getSnappedPoint();
  /**
   * <pre>
   * The playable location's coordinates, snapped to the sidewalk of the
   * nearest road, if a nearby road exists.
   * </pre>
   *
   * <code>.google.type.LatLng snapped_point = 6;</code>
   */
  com.google.type.LatLngOrBuilder getSnappedPointOrBuilder();

  public com.google.maps.playablelocations.v3.sample.PlayableLocation.LocationIdCase getLocationIdCase();
}
