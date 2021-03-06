/*
 * Copyright 2021 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

package com.google.chromeos.moblab.v1beta1;

import com.google.api.pathtemplate.PathTemplate;
import com.google.api.resourcenames.ResourceName;
import com.google.common.base.Preconditions;
import com.google.common.collect.ImmutableMap;
import java.util.ArrayList;
import java.util.List;
import java.util.Map;
import java.util.Objects;
import javax.annotation.Generated;

// AUTO-GENERATED DOCUMENTATION AND CLASS.
@Generated("by gapic-generator-java")
public class BuildArtifactName implements ResourceName {
  private static final PathTemplate BUILD_TARGET_MODEL_BUILD_ARTIFACT =
      PathTemplate.createWithoutUrlEncoding(
          "buildTargets/{build_target}/models/{model}/builds/{build}/artifacts/{artifact}");
  private volatile Map<String, String> fieldValuesMap;
  private final String buildTarget;
  private final String model;
  private final String build;
  private final String artifact;

  @Deprecated
  protected BuildArtifactName() {
    buildTarget = null;
    model = null;
    build = null;
    artifact = null;
  }

  private BuildArtifactName(Builder builder) {
    buildTarget = Preconditions.checkNotNull(builder.getBuildTarget());
    model = Preconditions.checkNotNull(builder.getModel());
    build = Preconditions.checkNotNull(builder.getBuild());
    artifact = Preconditions.checkNotNull(builder.getArtifact());
  }

  public String getBuildTarget() {
    return buildTarget;
  }

  public String getModel() {
    return model;
  }

  public String getBuild() {
    return build;
  }

  public String getArtifact() {
    return artifact;
  }

  public static Builder newBuilder() {
    return new Builder();
  }

  public Builder toBuilder() {
    return new Builder(this);
  }

  public static BuildArtifactName of(
      String buildTarget, String model, String build, String artifact) {
    return newBuilder()
        .setBuildTarget(buildTarget)
        .setModel(model)
        .setBuild(build)
        .setArtifact(artifact)
        .build();
  }

  public static String format(String buildTarget, String model, String build, String artifact) {
    return newBuilder()
        .setBuildTarget(buildTarget)
        .setModel(model)
        .setBuild(build)
        .setArtifact(artifact)
        .build()
        .toString();
  }

  public static BuildArtifactName parse(String formattedString) {
    if (formattedString.isEmpty()) {
      return null;
    }
    Map<String, String> matchMap =
        BUILD_TARGET_MODEL_BUILD_ARTIFACT.validatedMatch(
            formattedString, "BuildArtifactName.parse: formattedString not in valid format");
    return of(
        matchMap.get("build_target"),
        matchMap.get("model"),
        matchMap.get("build"),
        matchMap.get("artifact"));
  }

  public static List<BuildArtifactName> parseList(List<String> formattedStrings) {
    List<BuildArtifactName> list = new ArrayList<>(formattedStrings.size());
    for (String formattedString : formattedStrings) {
      list.add(parse(formattedString));
    }
    return list;
  }

  public static List<String> toStringList(List<BuildArtifactName> values) {
    List<String> list = new ArrayList<>(values.size());
    for (BuildArtifactName value : values) {
      if (value == null) {
        list.add("");
      } else {
        list.add(value.toString());
      }
    }
    return list;
  }

  public static boolean isParsableFrom(String formattedString) {
    return BUILD_TARGET_MODEL_BUILD_ARTIFACT.matches(formattedString);
  }

  @Override
  public Map<String, String> getFieldValuesMap() {
    if (fieldValuesMap == null) {
      synchronized (this) {
        if (fieldValuesMap == null) {
          ImmutableMap.Builder<String, String> fieldMapBuilder = ImmutableMap.builder();
          if (buildTarget != null) {
            fieldMapBuilder.put("build_target", buildTarget);
          }
          if (model != null) {
            fieldMapBuilder.put("model", model);
          }
          if (build != null) {
            fieldMapBuilder.put("build", build);
          }
          if (artifact != null) {
            fieldMapBuilder.put("artifact", artifact);
          }
          fieldValuesMap = fieldMapBuilder.build();
        }
      }
    }
    return fieldValuesMap;
  }

  public String getFieldValue(String fieldName) {
    return getFieldValuesMap().get(fieldName);
  }

  @Override
  public String toString() {
    return BUILD_TARGET_MODEL_BUILD_ARTIFACT.instantiate(
        "build_target", buildTarget, "model", model, "build", build, "artifact", artifact);
  }

  @Override
  public boolean equals(Object o) {
    if (o == this) {
      return true;
    }
    if (o != null || getClass() == o.getClass()) {
      BuildArtifactName that = ((BuildArtifactName) o);
      return Objects.equals(this.buildTarget, that.buildTarget)
          && Objects.equals(this.model, that.model)
          && Objects.equals(this.build, that.build)
          && Objects.equals(this.artifact, that.artifact);
    }
    return false;
  }

  @Override
  public int hashCode() {
    int h = 1;
    h *= 1000003;
    h ^= Objects.hashCode(buildTarget);
    h *= 1000003;
    h ^= Objects.hashCode(model);
    h *= 1000003;
    h ^= Objects.hashCode(build);
    h *= 1000003;
    h ^= Objects.hashCode(artifact);
    return h;
  }

  /** Builder for buildTargets/{build_target}/models/{model}/builds/{build}/artifacts/{artifact}. */
  public static class Builder {
    private String buildTarget;
    private String model;
    private String build;
    private String artifact;

    protected Builder() {}

    public String getBuildTarget() {
      return buildTarget;
    }

    public String getModel() {
      return model;
    }

    public String getBuild() {
      return build;
    }

    public String getArtifact() {
      return artifact;
    }

    public Builder setBuildTarget(String buildTarget) {
      this.buildTarget = buildTarget;
      return this;
    }

    public Builder setModel(String model) {
      this.model = model;
      return this;
    }

    public Builder setBuild(String build) {
      this.build = build;
      return this;
    }

    public Builder setArtifact(String artifact) {
      this.artifact = artifact;
      return this;
    }

    private Builder(BuildArtifactName buildArtifactName) {
      this.buildTarget = buildArtifactName.buildTarget;
      this.model = buildArtifactName.model;
      this.build = buildArtifactName.build;
      this.artifact = buildArtifactName.artifact;
    }

    public BuildArtifactName build() {
      return new BuildArtifactName(this);
    }
  }
}
