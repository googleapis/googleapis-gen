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
public class InvoiceName implements ResourceName {
  private static final PathTemplate CUSTOMER_INVOICE =
      PathTemplate.createWithoutUrlEncoding("customers/{customer}/invoices/{invoice}");
  private volatile Map<String, String> fieldValuesMap;
  private final String customer;
  private final String invoice;

  @Deprecated
  protected InvoiceName() {
    customer = null;
    invoice = null;
  }

  private InvoiceName(Builder builder) {
    customer = Preconditions.checkNotNull(builder.getCustomer());
    invoice = Preconditions.checkNotNull(builder.getInvoice());
  }

  public String getCustomer() {
    return customer;
  }

  public String getInvoice() {
    return invoice;
  }

  public static Builder newBuilder() {
    return new Builder();
  }

  public Builder toBuilder() {
    return new Builder(this);
  }

  public static InvoiceName of(String customer, String invoice) {
    return newBuilder().setCustomer(customer).setInvoice(invoice).build();
  }

  public static String format(String customer, String invoice) {
    return newBuilder().setCustomer(customer).setInvoice(invoice).build().toString();
  }

  public static InvoiceName parse(String formattedString) {
    if (formattedString.isEmpty()) {
      return null;
    }
    Map<String, String> matchMap =
        CUSTOMER_INVOICE.validatedMatch(
            formattedString, "InvoiceName.parse: formattedString not in valid format");
    return of(matchMap.get("customer"), matchMap.get("invoice"));
  }

  public static List<InvoiceName> parseList(List<String> formattedStrings) {
    List<InvoiceName> list = new ArrayList<>(formattedStrings.size());
    for (String formattedString : formattedStrings) {
      list.add(parse(formattedString));
    }
    return list;
  }

  public static List<String> toStringList(List<InvoiceName> values) {
    List<String> list = new ArrayList<>(values.size());
    for (InvoiceName value : values) {
      if (value == null) {
        list.add("");
      } else {
        list.add(value.toString());
      }
    }
    return list;
  }

  public static boolean isParsableFrom(String formattedString) {
    return CUSTOMER_INVOICE.matches(formattedString);
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
          if (invoice != null) {
            fieldMapBuilder.put("invoice", invoice);
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
    return CUSTOMER_INVOICE.instantiate("customer", customer, "invoice", invoice);
  }

  @Override
  public boolean equals(Object o) {
    if (o == this) {
      return true;
    }
    if (o != null || getClass() == o.getClass()) {
      InvoiceName that = ((InvoiceName) o);
      return Objects.equals(this.customer, that.customer)
          && Objects.equals(this.invoice, that.invoice);
    }
    return false;
  }

  @Override
  public int hashCode() {
    int h = 1;
    h *= 1000003;
    h ^= Objects.hashCode(customer);
    h *= 1000003;
    h ^= Objects.hashCode(invoice);
    return h;
  }

  /** Builder for customers/{customer}/invoices/{invoice}. */
  public static class Builder {
    private String customer;
    private String invoice;

    protected Builder() {}

    public String getCustomer() {
      return customer;
    }

    public String getInvoice() {
      return invoice;
    }

    public Builder setCustomer(String customer) {
      this.customer = customer;
      return this;
    }

    public Builder setInvoice(String invoice) {
      this.invoice = invoice;
      return this;
    }

    private Builder(InvoiceName invoiceName) {
      customer = invoiceName.customer;
      invoice = invoiceName.invoice;
    }

    public InvoiceName build() {
      return new InvoiceName(this);
    }
  }
}
