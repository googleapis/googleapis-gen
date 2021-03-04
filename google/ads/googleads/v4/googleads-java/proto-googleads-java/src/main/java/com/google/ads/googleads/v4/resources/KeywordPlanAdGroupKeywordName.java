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
public class KeywordPlanAdGroupKeywordName implements ResourceName {
  private static final PathTemplate CUSTOMER_KEYWORD_PLAN_AD_GROUP_KEYWORD =
      PathTemplate.createWithoutUrlEncoding(
          "customers/{customer}/keywordPlanAdGroupKeywords/{keyword_plan_ad_group_keyword}");
  private volatile Map<String, String> fieldValuesMap;
  private final String customer;
  private final String keywordPlanAdGroupKeyword;

  @Deprecated
  protected KeywordPlanAdGroupKeywordName() {
    customer = null;
    keywordPlanAdGroupKeyword = null;
  }

  private KeywordPlanAdGroupKeywordName(Builder builder) {
    customer = Preconditions.checkNotNull(builder.getCustomer());
    keywordPlanAdGroupKeyword = Preconditions.checkNotNull(builder.getKeywordPlanAdGroupKeyword());
  }

  public String getCustomer() {
    return customer;
  }

  public String getKeywordPlanAdGroupKeyword() {
    return keywordPlanAdGroupKeyword;
  }

  public static Builder newBuilder() {
    return new Builder();
  }

  public Builder toBuilder() {
    return new Builder(this);
  }

  public static KeywordPlanAdGroupKeywordName of(
      String customer, String keywordPlanAdGroupKeyword) {
    return newBuilder()
        .setCustomer(customer)
        .setKeywordPlanAdGroupKeyword(keywordPlanAdGroupKeyword)
        .build();
  }

  public static String format(String customer, String keywordPlanAdGroupKeyword) {
    return newBuilder()
        .setCustomer(customer)
        .setKeywordPlanAdGroupKeyword(keywordPlanAdGroupKeyword)
        .build()
        .toString();
  }

  public static KeywordPlanAdGroupKeywordName parse(String formattedString) {
    if (formattedString.isEmpty()) {
      return null;
    }
    Map<String, String> matchMap =
        CUSTOMER_KEYWORD_PLAN_AD_GROUP_KEYWORD.validatedMatch(
            formattedString,
            "KeywordPlanAdGroupKeywordName.parse: formattedString not in valid format");
    return of(matchMap.get("customer"), matchMap.get("keyword_plan_ad_group_keyword"));
  }

  public static List<KeywordPlanAdGroupKeywordName> parseList(List<String> formattedStrings) {
    List<KeywordPlanAdGroupKeywordName> list = new ArrayList<>(formattedStrings.size());
    for (String formattedString : formattedStrings) {
      list.add(parse(formattedString));
    }
    return list;
  }

  public static List<String> toStringList(List<KeywordPlanAdGroupKeywordName> values) {
    List<String> list = new ArrayList<>(values.size());
    for (KeywordPlanAdGroupKeywordName value : values) {
      if (value == null) {
        list.add("");
      } else {
        list.add(value.toString());
      }
    }
    return list;
  }

  public static boolean isParsableFrom(String formattedString) {
    return CUSTOMER_KEYWORD_PLAN_AD_GROUP_KEYWORD.matches(formattedString);
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
          if (keywordPlanAdGroupKeyword != null) {
            fieldMapBuilder.put("keyword_plan_ad_group_keyword", keywordPlanAdGroupKeyword);
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
    return CUSTOMER_KEYWORD_PLAN_AD_GROUP_KEYWORD.instantiate(
        "customer", customer, "keyword_plan_ad_group_keyword", keywordPlanAdGroupKeyword);
  }

  @Override
  public boolean equals(Object o) {
    if (o == this) {
      return true;
    }
    if (o != null || getClass() == o.getClass()) {
      KeywordPlanAdGroupKeywordName that = ((KeywordPlanAdGroupKeywordName) o);
      return Objects.equals(this.customer, that.customer)
          && Objects.equals(this.keywordPlanAdGroupKeyword, that.keywordPlanAdGroupKeyword);
    }
    return false;
  }

  @Override
  public int hashCode() {
    int h = 1;
    h *= 1000003;
    h ^= Objects.hashCode(customer);
    h *= 1000003;
    h ^= Objects.hashCode(keywordPlanAdGroupKeyword);
    return h;
  }

  /**
   * Builder for customers/{customer}/keywordPlanAdGroupKeywords/{keyword_plan_ad_group_keyword}.
   */
  public static class Builder {
    private String customer;
    private String keywordPlanAdGroupKeyword;

    protected Builder() {}

    public String getCustomer() {
      return customer;
    }

    public String getKeywordPlanAdGroupKeyword() {
      return keywordPlanAdGroupKeyword;
    }

    public Builder setCustomer(String customer) {
      this.customer = customer;
      return this;
    }

    public Builder setKeywordPlanAdGroupKeyword(String keywordPlanAdGroupKeyword) {
      this.keywordPlanAdGroupKeyword = keywordPlanAdGroupKeyword;
      return this;
    }

    private Builder(KeywordPlanAdGroupKeywordName keywordPlanAdGroupKeywordName) {
      customer = keywordPlanAdGroupKeywordName.customer;
      keywordPlanAdGroupKeyword = keywordPlanAdGroupKeywordName.keywordPlanAdGroupKeyword;
    }

    public KeywordPlanAdGroupKeywordName build() {
      return new KeywordPlanAdGroupKeywordName(this);
    }
  }
}
