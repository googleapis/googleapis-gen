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
public class CampaignDraftName implements ResourceName {
  private static final PathTemplate CUSTOMER_CAMPAIGN_DRAFT =
      PathTemplate.createWithoutUrlEncoding("customers/{customer}/campaignDrafts/{campaign_draft}");
  private volatile Map<String, String> fieldValuesMap;
  private final String customer;
  private final String campaignDraft;

  @Deprecated
  protected CampaignDraftName() {
    customer = null;
    campaignDraft = null;
  }

  private CampaignDraftName(Builder builder) {
    customer = Preconditions.checkNotNull(builder.getCustomer());
    campaignDraft = Preconditions.checkNotNull(builder.getCampaignDraft());
  }

  public String getCustomer() {
    return customer;
  }

  public String getCampaignDraft() {
    return campaignDraft;
  }

  public static Builder newBuilder() {
    return new Builder();
  }

  public Builder toBuilder() {
    return new Builder(this);
  }

  public static CampaignDraftName of(String customer, String campaignDraft) {
    return newBuilder().setCustomer(customer).setCampaignDraft(campaignDraft).build();
  }

  public static String format(String customer, String campaignDraft) {
    return newBuilder().setCustomer(customer).setCampaignDraft(campaignDraft).build().toString();
  }

  public static CampaignDraftName parse(String formattedString) {
    if (formattedString.isEmpty()) {
      return null;
    }
    Map<String, String> matchMap =
        CUSTOMER_CAMPAIGN_DRAFT.validatedMatch(
            formattedString, "CampaignDraftName.parse: formattedString not in valid format");
    return of(matchMap.get("customer"), matchMap.get("campaign_draft"));
  }

  public static List<CampaignDraftName> parseList(List<String> formattedStrings) {
    List<CampaignDraftName> list = new ArrayList<>(formattedStrings.size());
    for (String formattedString : formattedStrings) {
      list.add(parse(formattedString));
    }
    return list;
  }

  public static List<String> toStringList(List<CampaignDraftName> values) {
    List<String> list = new ArrayList<>(values.size());
    for (CampaignDraftName value : values) {
      if (value == null) {
        list.add("");
      } else {
        list.add(value.toString());
      }
    }
    return list;
  }

  public static boolean isParsableFrom(String formattedString) {
    return CUSTOMER_CAMPAIGN_DRAFT.matches(formattedString);
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
          if (campaignDraft != null) {
            fieldMapBuilder.put("campaign_draft", campaignDraft);
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
    return CUSTOMER_CAMPAIGN_DRAFT.instantiate(
        "customer", customer, "campaign_draft", campaignDraft);
  }

  @Override
  public boolean equals(Object o) {
    if (o == this) {
      return true;
    }
    if (o != null || getClass() == o.getClass()) {
      CampaignDraftName that = ((CampaignDraftName) o);
      return Objects.equals(this.customer, that.customer)
          && Objects.equals(this.campaignDraft, that.campaignDraft);
    }
    return false;
  }

  @Override
  public int hashCode() {
    int h = 1;
    h *= 1000003;
    h ^= Objects.hashCode(customer);
    h *= 1000003;
    h ^= Objects.hashCode(campaignDraft);
    return h;
  }

  /** Builder for customers/{customer}/campaignDrafts/{campaign_draft}. */
  public static class Builder {
    private String customer;
    private String campaignDraft;

    protected Builder() {}

    public String getCustomer() {
      return customer;
    }

    public String getCampaignDraft() {
      return campaignDraft;
    }

    public Builder setCustomer(String customer) {
      this.customer = customer;
      return this;
    }

    public Builder setCampaignDraft(String campaignDraft) {
      this.campaignDraft = campaignDraft;
      return this;
    }

    private Builder(CampaignDraftName campaignDraftName) {
      customer = campaignDraftName.customer;
      campaignDraft = campaignDraftName.campaignDraft;
    }

    public CampaignDraftName build() {
      return new CampaignDraftName(this);
    }
  }
}
