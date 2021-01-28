/*
 * Copyright 2020 Google LLC
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
public class BuildName implements ResourceName {
  private static final PathTemplate BUILD_TARGET_MODEL_BUILD =
      PathTemplate.createWithoutUrlEncoding(
          "buildTargets/{build_target}/models/{model}/builds/{build}");
  private volatile Map<String, String> fieldValuesMap;
  private final String buildTarget;
  private final String model;
  private final String build;

  @Deprecated
  protected BuildName() {
    buildTarget = null;
    model = null;
    build = null;
  }

  private BuildName(Builder builder) {
    buildTarget = Preconditions.checkNotNull(builder.getBuildTarget());
    model = Preconditions.checkNotNull(builder.getModel());
    build = Preconditions.checkNotNull(builder.getBuild());
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

  public static Builder newBuilder() {
    return new Builder();
  }

  public Builder toBuilder() {
    return new Builder(this);
  }

  public static BuildName of(String buildTarget, String model, String build) {
    return newBuilder().setBuildTarget(buildTarget).setModel(model).setBuild(build).build();
  }

  public static String format(String buildTarget, String model, String build) {
    return newBuilder()
        .setBuildTarget(buildTarget)
        .setModel(model)
        .setBuild(build)
        .build()
        .toString();
  }

  public static BuildName parse(String formattedString) {
    if (formattedString.isEmpty()) {
      return null;
    }
    Map<String, String> matchMap =
        BUILD_TARGET_MODEL_BUILD.validatedMatch(
            formattedString, "BuildName.parse: formattedString not in valid format");
    return of(matchMap.get("build_target"), matchMap.get("model"), matchMap.get("build"));
  }

  public static List<BuildName> parseList(List<String> formattedStrings) {
    List<BuildName> list = new ArrayList<>(formattedStrings.size());
    for (String formattedString : formattedStrings) {
      list.add(parse(formattedString));
    }
    return list;
  }

  public static List<String> toStringList(List<BuildName> values) {
    List<String> list = new ArrayList<>(values.size());
    for (BuildName value : values) {
      if (value == null) {
        list.add("");
      } else {
        list.add(value.toString());
      }
    }
    return list;
  }

  public static boolean isParsableFrom(String formattedString) {
    return BUILD_TARGET_MODEL_BUILD.matches(formattedString);
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
    return BUILD_TARGET_MODEL_BUILD.instantiate(
        "build_target", buildTarget, "model", model, "build", build);
  }

  @Override
  public boolean equals(Object o) {
    if (o == this) {
      return true;
    }
    if (o != null || getClass() == o.getClass()) {
      BuildName that = ((BuildName) o);
      return Objects.equals(this.buildTarget, that.buildTarget)
          && Objects.equals(this.model, that.model)
          && Objects.equals(this.build, that.build);
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
    return h;
  }

  /** Builder for buildTargets/{build_target}/models/{model}/builds/{build}. */
  public static class Builder {
    private String buildTarget;
    private String model;
    private String build;

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

    private Builder(BuildName buildName) {
      buildTarget = buildName.buildTarget;
      model = buildName.model;
      build = buildName.build;
    }

    public BuildName build() {
      return new BuildName(this);
    }
  }
}
