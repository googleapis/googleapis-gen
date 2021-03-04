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

package com.google.ads.googleads.v4.resources;

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
public class OfflineUserDataJobName implements ResourceName {
  private static final PathTemplate CUSTOMER_OFFLINE_USER_DATA_JOB =
      PathTemplate.createWithoutUrlEncoding(
          "customers/{customer}/offlineUserDataJobs/{offline_user_data_job}");
  private volatile Map<String, String> fieldValuesMap;
  private final String customer;
  private final String offlineUserDataJob;

  @Deprecated
  protected OfflineUserDataJobName() {
    customer = null;
    offlineUserDataJob = null;
  }

  private OfflineUserDataJobName(Builder builder) {
    customer = Preconditions.checkNotNull(builder.getCustomer());
    offlineUserDataJob = Preconditions.checkNotNull(builder.getOfflineUserDataJob());
  }

  public String getCustomer() {
    return customer;
  }

  public String getOfflineUserDataJob() {
    return offlineUserDataJob;
  }

  public static Builder newBuilder() {
    return new Builder();
  }

  public Builder toBuilder() {
    return new Builder(this);
  }

  public static OfflineUserDataJobName of(String customer, String offlineUserDataJob) {
    return newBuilder().setCustomer(customer).setOfflineUserDataJob(offlineUserDataJob).build();
  }

  public static String format(String customer, String offlineUserDataJob) {
    return newBuilder()
        .setCustomer(customer)
        .setOfflineUserDataJob(offlineUserDataJob)
        .build()
        .toString();
  }

  public static OfflineUserDataJobName parse(String formattedString) {
    if (formattedString.isEmpty()) {
      return null;
    }
    Map<String, String> matchMap =
        CUSTOMER_OFFLINE_USER_DATA_JOB.validatedMatch(
            formattedString, "OfflineUserDataJobName.parse: formattedString not in valid format");
    return of(matchMap.get("customer"), matchMap.get("offline_user_data_job"));
  }

  public static List<OfflineUserDataJobName> parseList(List<String> formattedStrings) {
    List<OfflineUserDataJobName> list = new ArrayList<>(formattedStrings.size());
    for (String formattedString : formattedStrings) {
      list.add(parse(formattedString));
    }
    return list;
  }

  public static List<String> toStringList(List<OfflineUserDataJobName> values) {
    List<String> list = new ArrayList<>(values.size());
    for (OfflineUserDataJobName value : values) {
      if (value == null) {
        list.add("");
      } else {
        list.add(value.toString());
      }
    }
    return list;
  }

  public static boolean isParsableFrom(String formattedString) {
    return CUSTOMER_OFFLINE_USER_DATA_JOB.matches(formattedString);
  }

  @Override
  public Map<String, String> getFieldValuesMap() {
    if (fieldValuesMap == null) {
      synchronized (this) {
        if (fieldValuesMap == null) {
          ImmutableMap.Builder<String, String> fieldMapBuilder = ImmutableMap.builder();
          if (customer != null) {
            fieldMapBuilder.put("customer", customer);
          }
          if (offlineUserDataJob != null) {
            fieldMapBuilder.put("offline_user_data_job", offlineUserDataJob);
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
    return CUSTOMER_OFFLINE_USER_DATA_JOB.instantiate(
        "customer", customer, "offline_user_data_job", offlineUserDataJob);
  }

  @Override
  public boolean equals(Object o) {
    if (o == this) {
      return true;
    }
    if (o != null || getClass() == o.getClass()) {
      OfflineUserDataJobName that = ((OfflineUserDataJobName) o);
      return Objects.equals(this.customer, that.customer)
          && Objects.equals(this.offlineUserDataJob, that.offlineUserDataJob);
    }
    return false;
  }

  @Override
  public int hashCode() {
    int h = 1;
    h *= 1000003;
    h ^= Objects.hashCode(customer);
    h *= 1000003;
    h ^= Objects.hashCode(offlineUserDataJob);
    return h;
  }

  /** Builder for customers/{customer}/offlineUserDataJobs/{offline_user_data_job}. */
  public static class Builder {
    private String customer;
    private String offlineUserDataJob;

    protected Builder() {}

    public String getCustomer() {
      return customer;
    }

    public String getOfflineUserDataJob() {
      return offlineUserDataJob;
    }

    public Builder setCustomer(String customer) {
      this.customer = customer;
      return this;
    }

    public Builder setOfflineUserDataJob(String offlineUserDataJob) {
      this.offlineUserDataJob = offlineUserDataJob;
      return this;
    }

    private Builder(OfflineUserDataJobName offlineUserDataJobName) {
      customer = offlineUserDataJobName.customer;
      offlineUserDataJob = offlineUserDataJobName.offlineUserDataJob;
    }

    public OfflineUserDataJobName build() {
      return new OfflineUserDataJobName(this);
    }
  }
}
