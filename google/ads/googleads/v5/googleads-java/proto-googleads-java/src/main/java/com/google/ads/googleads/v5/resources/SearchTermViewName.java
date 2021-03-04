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
public class SearchTermViewName implements ResourceName {
  private static final PathTemplate CUSTOMER_SEARCH_TERM_VIEW =
      PathTemplate.createWithoutUrlEncoding(
          "customers/{customer}/searchTermViews/{search_term_view}");
  private volatile Map<String, String> fieldValuesMap;
  private final String customer;
  private final String searchTermView;

  @Deprecated
  protected SearchTermViewName() {
    customer = null;
    searchTermView = null;
  }

  private SearchTermViewName(Builder builder) {
    customer = Preconditions.checkNotNull(builder.getCustomer());
    searchTermView = Preconditions.checkNotNull(builder.getSearchTermView());
  }

  public String getCustomer() {
    return customer;
  }

  public String getSearchTermView() {
    return searchTermView;
  }

  public static Builder newBuilder() {
    return new Builder();
  }

  public Builder toBuilder() {
    return new Builder(this);
  }

  public static SearchTermViewName of(String customer, String searchTermView) {
    return newBuilder().setCustomer(customer).setSearchTermView(searchTermView).build();
  }

  public static String format(String customer, String searchTermView) {
    return newBuilder().setCustomer(customer).setSearchTermView(searchTermView).build().toString();
  }

  public static SearchTermViewName parse(String formattedString) {
    if (formattedString.isEmpty()) {
      return null;
    }
    Map<String, String> matchMap =
        CUSTOMER_SEARCH_TERM_VIEW.validatedMatch(
            formattedString, "SearchTermViewName.parse: formattedString not in valid format");
    return of(matchMap.get("customer"), matchMap.get("search_term_view"));
  }

  public static List<SearchTermViewName> parseList(List<String> formattedStrings) {
    List<SearchTermViewName> list = new ArrayList<>(formattedStrings.size());
    for (String formattedString : formattedStrings) {
      list.add(parse(formattedString));
    }
    return list;
  }

  public static List<String> toStringList(List<SearchTermViewName> values) {
    List<String> list = new ArrayList<>(values.size());
    for (SearchTermViewName value : values) {
      if (value == null) {
        list.add("");
      } else {
        list.add(value.toString());
      }
    }
    return list;
  }

  public static boolean isParsableFrom(String formattedString) {
    return CUSTOMER_SEARCH_TERM_VIEW.matches(formattedString);
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
          if (searchTermView != null) {
            fieldMapBuilder.put("search_term_view", searchTermView);
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
    return CUSTOMER_SEARCH_TERM_VIEW.instantiate(
        "customer", customer, "search_term_view", searchTermView);
  }

  @Override
  public boolean equals(Object o) {
    if (o == this) {
      return true;
    }
    if (o != null || getClass() == o.getClass()) {
      SearchTermViewName that = ((SearchTermViewName) o);
      return Objects.equals(this.customer, that.customer)
          && Objects.equals(this.searchTermView, that.searchTermView);
    }
    return false;
  }

  @Override
  public int hashCode() {
    int h = 1;
    h *= 1000003;
    h ^= Objects.hashCode(customer);
    h *= 1000003;
    h ^= Objects.hashCode(searchTermView);
    return h;
  }

  /** Builder for customers/{customer}/searchTermViews/{search_term_view}. */
  public static class Builder {
    private String customer;
    private String searchTermView;

    protected Builder() {}

    public String getCustomer() {
      return customer;
    }

    public String getSearchTermView() {
      return searchTermView;
    }

    public Builder setCustomer(String customer) {
      this.customer = customer;
      return this;
    }

    public Builder setSearchTermView(String searchTermView) {
      this.searchTermView = searchTermView;
      return this;
    }

    private Builder(SearchTermViewName searchTermViewName) {
      customer = searchTermViewName.customer;
      searchTermView = searchTermViewName.searchTermView;
    }

    public SearchTermViewName build() {
      return new SearchTermViewName(this);
    }
  }
}
