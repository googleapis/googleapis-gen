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

package com.google.ads.googleads.v3.resources;

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
public class KeywordViewName implements ResourceName {
  private static final PathTemplate CUSTOMER_KEYWORD_VIEW =
      PathTemplate.createWithoutUrlEncoding("customers/{customer}/keywordViews/{keyword_view}");
  private volatile Map<String, String> fieldValuesMap;
  private final String customer;
  private final String keywordView;

  @Deprecated
  protected KeywordViewName() {
    customer = null;
    keywordView = null;
  }

  private KeywordViewName(Builder builder) {
    customer = Preconditions.checkNotNull(builder.getCustomer());
    keywordView = Preconditions.checkNotNull(builder.getKeywordView());
  }

  public String getCustomer() {
    return customer;
  }

  public String getKeywordView() {
    return keywordView;
  }

  public static Builder newBuilder() {
    return new Builder();
  }

  public Builder toBuilder() {
    return new Builder(this);
  }

  public static KeywordViewName of(String customer, String keywordView) {
    return newBuilder().setCustomer(customer).setKeywordView(keywordView).build();
  }

  public static String format(String customer, String keywordView) {
    return newBuilder().setCustomer(customer).setKeywordView(keywordView).build().toString();
  }

  public static KeywordViewName parse(String formattedString) {
    if (formattedString.isEmpty()) {
      return null;
    }
    Map<String, String> matchMap =
        CUSTOMER_KEYWORD_VIEW.validatedMatch(
            formattedString, "KeywordViewName.parse: formattedString not in valid format");
    return of(matchMap.get("customer"), matchMap.get("keyword_view"));
  }

  public static List<KeywordViewName> parseList(List<String> formattedStrings) {
    List<KeywordViewName> list = new ArrayList<>(formattedStrings.size());
    for (String formattedString : formattedStrings) {
      list.add(parse(formattedString));
    }
    return list;
  }

  public static List<String> toStringList(List<KeywordViewName> values) {
    List<String> list = new ArrayList<>(values.size());
    for (KeywordViewName value : values) {
      if (value == null) {
        list.add("");
      } else {
        list.add(value.toString());
      }
    }
    return list;
  }

  public static boolean isParsableFrom(String formattedString) {
    return CUSTOMER_KEYWORD_VIEW.matches(formattedString);
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
          if (keywordView != null) {
            fieldMapBuilder.put("keyword_view", keywordView);
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
    return CUSTOMER_KEYWORD_VIEW.instantiate("customer", customer, "keyword_view", keywordView);
  }

  @Override
  public boolean equals(Object o) {
    if (o == this) {
      return true;
    }
    if (o != null || getClass() == o.getClass()) {
      KeywordViewName that = ((KeywordViewName) o);
      return Objects.equals(this.customer, that.customer)
          && Objects.equals(this.keywordView, that.keywordView);
    }
    return false;
  }

  @Override
  public int hashCode() {
    int h = 1;
    h *= 1000003;
    h ^= Objects.hashCode(customer);
    h *= 1000003;
    h ^= Objects.hashCode(keywordView);
    return h;
  }

  /** Builder for customers/{customer}/keywordViews/{keyword_view}. */
  public static class Builder {
    private String customer;
    private String keywordView;

    protected Builder() {}

    public String getCustomer() {
      return customer;
    }

    public String getKeywordView() {
      return keywordView;
    }

    public Builder setCustomer(String customer) {
      this.customer = customer;
      return this;
    }

    public Builder setKeywordView(String keywordView) {
      this.keywordView = keywordView;
      return this;
    }

    private Builder(KeywordViewName keywordViewName) {
      customer = keywordViewName.customer;
      keywordView = keywordViewName.keywordView;
    }

    public KeywordViewName build() {
      return new KeywordViewName(this);
    }
  }
}
