// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/maps/playablelocations/v3/sample/resources.proto

package com.google.maps.playablelocations.v3.sample;

public interface AreaFilterOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.maps.playablelocations.v3.sample.AreaFilter)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * Required. The S2 cell ID of the area you want. This must be between cell
   * level 11 and 14 (inclusive).
   * S2 cells are 64-bit integers that identify areas on the Earth. They are
   * hierarchical, and can therefore be used for spatial indexing.
   * The S2 geometry library is available in a number of languages:
   *   * [C++](https://github.com/google/s2geometry)
   *   * [Java](https://github.com/google/s2-geometry-library-java)
   *   * [Go](https://github.com/golang/geo)
   *   * [Python](https://github.com/google/s2geometry/tree/master/src/python)
   * </pre>
   *
   * <code>fixed64 s2_cell_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return The s2CellId.
   */
  long getS2CellId();
}
