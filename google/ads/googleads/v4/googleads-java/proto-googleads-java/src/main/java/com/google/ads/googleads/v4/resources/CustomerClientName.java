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
public class CustomerClientName implements ResourceName {
  private static final PathTemplate CUSTOMER_CUSTOMER_CLIENT =
      PathTemplate.createWithoutUrlEncoding(
          "customers/{customer}/customerClients/{customer_client}");
  private volatile Map<String, String> fieldValuesMap;
  private final String customer;
  private final String customerClient;

  @Deprecated
  protected CustomerClientName() {
    customer = null;
    customerClient = null;
  }

  private CustomerClientName(Builder builder) {
    customer = Preconditions.checkNotNull(builder.getCustomer());
    customerClient = Preconditions.checkNotNull(builder.getCustomerClient());
  }

  public String getCustomer() {
    return customer;
  }

  public String getCustomerClient() {
    return customerClient;
  }

  public static Builder newBuilder() {
    return new Builder();
  }

  public Builder toBuilder() {
    return new Builder(this);
  }

  public static CustomerClientName of(String customer, String customerClient) {
    return newBuilder().setCustomer(customer).setCustomerClient(customerClient).build();
  }

  public static String format(String customer, String customerClient) {
    return newBuilder().setCustomer(customer).setCustomerClient(customerClient).build().toString();
  }

  public static CustomerClientName parse(String formattedString) {
    if (formattedString.isEmpty()) {
      return null;
    }
    Map<String, String> matchMap =
        CUSTOMER_CUSTOMER_CLIENT.validatedMatch(
            formattedString, "CustomerClientName.parse: formattedString not in valid format");
    return of(matchMap.get("customer"), matchMap.get("customer_client"));
  }

  public static List<CustomerClientName> parseList(List<String> formattedStrings) {
    List<CustomerClientName> list = new ArrayList<>(formattedStrings.size());
    for (String formattedString : formattedStrings) {
      list.add(parse(formattedString));
    }
    return list;
  }

  public static List<String> toStringList(List<CustomerClientName> values) {
    List<String> list = new ArrayList<>(values.size());
    for (CustomerClientName value : values) {
      if (value == null) {
        list.add("");
      } else {
        list.add(value.toString());
      }
    }
    return list;
  }

  public static boolean isParsableFrom(String formattedString) {
    return CUSTOMER_CUSTOMER_CLIENT.matches(formattedString);
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
          if (customerClient != null) {
            fieldMapBuilder.put("customer_client", customerClient);
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
    return CUSTOMER_CUSTOMER_CLIENT.instantiate(
        "customer", customer, "customer_client", customerClient);
  }

  @Override
  public boolean equals(Object o) {
    if (o == this) {
      return true;
    }
    if (o != null || getClass() == o.getClass()) {
      CustomerClientName that = ((CustomerClientName) o);
      return Objects.equals(this.customer, that.customer)
          && Objects.equals(this.customerClient, that.customerClient);
    }
    return false;
  }

  @Override
  public int hashCode() {
    int h = 1;
    h *= 1000003;
    h ^= Objects.hashCode(customer);
    h *= 1000003;
    h ^= Objects.hashCode(customerClient);
    return h;
  }

  /** Builder for customers/{customer}/customerClients/{customer_client}. */
  public static class Builder {
    private String customer;
    private String customerClient;

    protected Builder() {}

    public String getCustomer() {
      return customer;
    }

    public String getCustomerClient() {
      return customerClient;
    }

    public Builder setCustomer(String customer) {
      this.customer = customer;
      return this;
    }

    public Builder setCustomerClient(String customerClient) {
      this.customerClient = customerClient;
      return this;
    }

    private Builder(CustomerClientName customerClientName) {
      customer = customerClientName.customer;
      customerClient = customerClientName.customerClient;
    }

    public CustomerClientName build() {
      return new CustomerClientName(this);
    }
  }
}
