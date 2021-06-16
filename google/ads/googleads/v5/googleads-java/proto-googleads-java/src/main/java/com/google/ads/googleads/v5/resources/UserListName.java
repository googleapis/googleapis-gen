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

package com.google.ads.googleads.v5.resources;

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
public class UserListName implements ResourceName {
  private static final PathTemplate CUSTOMER_USER_LIST =
      PathTemplate.createWithoutUrlEncoding("customers/{customer}/userLists/{user_list}");
  private volatile Map<String, String> fieldValuesMap;
  private final String customer;
  private final String userList;

  @Deprecated
  protected UserListName() {
    customer = null;
    userList = null;
  }

  private UserListName(Builder builder) {
    customer = Preconditions.checkNotNull(builder.getCustomer());
    userList = Preconditions.checkNotNull(builder.getUserList());
  }

  public String getCustomer() {
    return customer;
  }

  public String getUserList() {
    return userList;
  }

  public static Builder newBuilder() {
    return new Builder();
  }

  public Builder toBuilder() {
    return new Builder(this);
  }

  public static UserListName of(String customer, String userList) {
    return newBuilder().setCustomer(customer).setUserList(userList).build();
  }

  public static String format(String customer, String userList) {
    return newBuilder().setCustomer(customer).setUserList(userList).build().toString();
  }

  public static UserListName parse(String formattedString) {
    if (formattedString.isEmpty()) {
      return null;
    }
    Map<String, String> matchMap =
        CUSTOMER_USER_LIST.validatedMatch(
            formattedString, "UserListName.parse: formattedString not in valid format");
    return of(matchMap.get("customer"), matchMap.get("user_list"));
  }

  public static List<UserListName> parseList(List<String> formattedStrings) {
    List<UserListName> list = new ArrayList<>(formattedStrings.size());
    for (String formattedString : formattedStrings) {
      list.add(parse(formattedString));
    }
    return list;
  }

  public static List<String> toStringList(List<UserListName> values) {
    List<String> list = new ArrayList<>(values.size());
    for (UserListName value : values) {
      if (value == null) {
        list.add("");
      } else {
        list.add(value.toString());
      }
    }
    return list;
  }

  public static boolean isParsableFrom(String formattedString) {
    return CUSTOMER_USER_LIST.matches(formattedString);
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
          if (userList != null) {
            fieldMapBuilder.put("user_list", userList);
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
    return CUSTOMER_USER_LIST.instantiate("customer", customer, "user_list", userList);
  }

  @Override
  public boolean equals(Object o) {
    if (o == this) {
      return true;
    }
    if (o != null || getClass() == o.getClass()) {
      UserListName that = ((UserListName) o);
      return Objects.equals(this.customer, that.customer)
          && Objects.equals(this.userList, that.userList);
    }
    return false;
  }

  @Override
  public int hashCode() {
    int h = 1;
    h *= 1000003;
    h ^= Objects.hashCode(customer);
    h *= 1000003;
    h ^= Objects.hashCode(userList);
    return h;
  }

  /** Builder for customers/{customer}/userLists/{user_list}. */
  public static class Builder {
    private String customer;
    private String userList;

    protected Builder() {}

    public String getCustomer() {
      return customer;
    }

    public String getUserList() {
      return userList;
    }

    public Builder setCustomer(String customer) {
      this.customer = customer;
      return this;
    }

    public Builder setUserList(String userList) {
      this.userList = userList;
      return this;
    }

    private Builder(UserListName userListName) {
      this.customer = userListName.customer;
      this.userList = userListName.userList;
    }

    public UserListName build() {
      return new UserListName(this);
    }
  }
}
