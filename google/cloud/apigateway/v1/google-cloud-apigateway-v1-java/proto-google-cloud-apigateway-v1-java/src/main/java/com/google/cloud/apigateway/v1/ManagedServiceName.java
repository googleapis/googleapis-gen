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

package com.google.cloud.apigateway.v1;

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
public class ManagedServiceName implements ResourceName {
  private static final PathTemplate SERVICE =
      PathTemplate.createWithoutUrlEncoding("services/{service}");
  private volatile Map<String, String> fieldValuesMap;
  private final String service;

  @Deprecated
  protected ManagedServiceName() {
    service = null;
  }

  private ManagedServiceName(Builder builder) {
    service = Preconditions.checkNotNull(builder.getService());
  }

  public String getService() {
    return service;
  }

  public static Builder newBuilder() {
    return new Builder();
  }

  public Builder toBuilder() {
    return new Builder(this);
  }

  public static ManagedServiceName of(String service) {
    return newBuilder().setService(service).build();
  }

  public static String format(String service) {
    return newBuilder().setService(service).build().toString();
  }

  public static ManagedServiceName parse(String formattedString) {
    if (formattedString.isEmpty()) {
      return null;
    }
    Map<String, String> matchMap =
        SERVICE.validatedMatch(
            formattedString, "ManagedServiceName.parse: formattedString not in valid format");
    return of(matchMap.get("service"));
  }

  public static List<ManagedServiceName> parseList(List<String> formattedStrings) {
    List<ManagedServiceName> list = new ArrayList<>(formattedStrings.size());
    for (String formattedString : formattedStrings) {
      list.add(parse(formattedString));
    }
    return list;
  }

  public static List<String> toStringList(List<ManagedServiceName> values) {
    List<String> list = new ArrayList<>(values.size());
    for (ManagedServiceName value : values) {
      if (value == null) {
        list.add("");
      } else {
        list.add(value.toString());
      }
    }
    return list;
  }

  public static boolean isParsableFrom(String formattedString) {
    return SERVICE.matches(formattedString);
  }

  @Override
  public Map<String, String> getFieldValuesMap() {
    if (fieldValuesMap == null) {
      synchronized (this) {
        if (fieldValuesMap == null) {
          ImmutableMap.Builder<String, String> fieldMapBuilder = ImmutableMap.builder();
          if (service != null) {
            fieldMapBuilder.put("service", service);
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
    return SERVICE.instantiate("service", service);
  }

  @Override
  public boolean equals(Object o) {
    if (o == this) {
      return true;
    }
    if (o != null || getClass() == o.getClass()) {
      ManagedServiceName that = ((ManagedServiceName) o);
      return Objects.equals(this.service, that.service);
    }
    return false;
  }

  @Override
  public int hashCode() {
    int h = 1;
    h *= 1000003;
    h ^= Objects.hashCode(service);
    return h;
  }

  /** Builder for services/{service}. */
  public static class Builder {
    private String service;

    protected Builder() {}

    public String getService() {
      return service;
    }

    public Builder setService(String service) {
      this.service = service;
      return this;
    }

    private Builder(ManagedServiceName managedServiceName) {
      this.service = managedServiceName.service;
    }

    public ManagedServiceName build() {
      return new ManagedServiceName(this);
    }
  }
}
