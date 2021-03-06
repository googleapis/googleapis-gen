// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/maps/playablelocations/v3/playablelocations.proto

package com.google.maps.playablelocations.v3;

public interface SamplePlayableLocationsResponseOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.maps.playablelocations.v3.SamplePlayableLocationsResponse)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * Each PlayableLocation object corresponds to a game_object_type specified
   * in the request.
   * </pre>
   *
   * <code>map&lt;int32, .google.maps.playablelocations.v3.sample.PlayableLocationList&gt; locations_per_game_object_type = 1;</code>
   */
  int getLocationsPerGameObjectTypeCount();
  /**
   * <pre>
   * Each PlayableLocation object corresponds to a game_object_type specified
   * in the request.
   * </pre>
   *
   * <code>map&lt;int32, .google.maps.playablelocations.v3.sample.PlayableLocationList&gt; locations_per_game_object_type = 1;</code>
   */
  boolean containsLocationsPerGameObjectType(
      int key);
  /**
   * Use {@link #getLocationsPerGameObjectTypeMap()} instead.
   */
  @java.lang.Deprecated
  java.util.Map<java.lang.Integer, com.google.maps.playablelocations.v3.sample.PlayableLocationList>
  getLocationsPerGameObjectType();
  /**
   * <pre>
   * Each PlayableLocation object corresponds to a game_object_type specified
   * in the request.
   * </pre>
   *
   * <code>map&lt;int32, .google.maps.playablelocations.v3.sample.PlayableLocationList&gt; locations_per_game_object_type = 1;</code>
   */
  java.util.Map<java.lang.Integer, com.google.maps.playablelocations.v3.sample.PlayableLocationList>
  getLocationsPerGameObjectTypeMap();
  /**
   * <pre>
   * Each PlayableLocation object corresponds to a game_object_type specified
   * in the request.
   * </pre>
   *
   * <code>map&lt;int32, .google.maps.playablelocations.v3.sample.PlayableLocationList&gt; locations_per_game_object_type = 1;</code>
   */

  com.google.maps.playablelocations.v3.sample.PlayableLocationList getLocationsPerGameObjectTypeOrDefault(
      int key,
      com.google.maps.playablelocations.v3.sample.PlayableLocationList defaultValue);
  /**
   * <pre>
   * Each PlayableLocation object corresponds to a game_object_type specified
   * in the request.
   * </pre>
   *
   * <code>map&lt;int32, .google.maps.playablelocations.v3.sample.PlayableLocationList&gt; locations_per_game_object_type = 1;</code>
   */

  com.google.maps.playablelocations.v3.sample.PlayableLocationList getLocationsPerGameObjectTypeOrThrow(
      int key);

  /**
   * <pre>
   * Required. Specifies the "time-to-live" for the set of playable locations.
   * You can use this value to determine how long to cache the set of playable
   * locations. After this length of time, your back-end game server should
   * issue a new
   * [SamplePlayableLocations][google.maps.playablelocations.v3.PlayableLocations.SamplePlayableLocations]
   * request to get a fresh set of playable locations (because for example, they
   * might have been removed, a park might have closed for the day, a
   * business might have closed permanently).
   * </pre>
   *
   * <code>.google.protobuf.Duration ttl = 9;</code>
   * @return Whether the ttl field is set.
   */
  boolean hasTtl();
  /**
   * <pre>
   * Required. Specifies the "time-to-live" for the set of playable locations.
   * You can use this value to determine how long to cache the set of playable
   * locations. After this length of time, your back-end game server should
   * issue a new
   * [SamplePlayableLocations][google.maps.playablelocations.v3.PlayableLocations.SamplePlayableLocations]
   * request to get a fresh set of playable locations (because for example, they
   * might have been removed, a park might have closed for the day, a
   * business might have closed permanently).
   * </pre>
   *
   * <code>.google.protobuf.Duration ttl = 9;</code>
   * @return The ttl.
   */
  com.google.protobuf.Duration getTtl();
  /**
   * <pre>
   * Required. Specifies the "time-to-live" for the set of playable locations.
   * You can use this value to determine how long to cache the set of playable
   * locations. After this length of time, your back-end game server should
   * issue a new
   * [SamplePlayableLocations][google.maps.playablelocations.v3.PlayableLocations.SamplePlayableLocations]
   * request to get a fresh set of playable locations (because for example, they
   * might have been removed, a park might have closed for the day, a
   * business might have closed permanently).
   * </pre>
   *
   * <code>.google.protobuf.Duration ttl = 9;</code>
   */
  com.google.protobuf.DurationOrBuilder getTtlOrBuilder();
}
