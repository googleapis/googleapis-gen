// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v4/resources/invoice.proto

package com.google.ads.googleads.v4.resources;

public interface InvoiceOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.ads.googleads.v4.resources.Invoice)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * Output only. The resource name of the invoice. Multiple customers can share a given
   * invoice, so multiple resource names may point to the same invoice.
   * Invoice resource names have the form:
   * `customers/{customer_id}/invoices/{invoice_id}`
   * </pre>
   *
   * <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = { ... }</code>
   * @return The resourceName.
   */
  java.lang.String getResourceName();
  /**
   * <pre>
   * Output only. The resource name of the invoice. Multiple customers can share a given
   * invoice, so multiple resource names may point to the same invoice.
   * Invoice resource names have the form:
   * `customers/{customer_id}/invoices/{invoice_id}`
   * </pre>
   *
   * <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = { ... }</code>
   * @return The bytes for resourceName.
   */
  com.google.protobuf.ByteString
      getResourceNameBytes();

  /**
   * <pre>
   * Output only. The ID of the invoice. It appears on the invoice PDF as "Invoice number".
   * </pre>
   *
   * <code>.google.protobuf.StringValue id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
   * @return Whether the id field is set.
   */
  boolean hasId();
  /**
   * <pre>
   * Output only. The ID of the invoice. It appears on the invoice PDF as "Invoice number".
   * </pre>
   *
   * <code>.google.protobuf.StringValue id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
   * @return The id.
   */
  com.google.protobuf.StringValue getId();
  /**
   * <pre>
   * Output only. The ID of the invoice. It appears on the invoice PDF as "Invoice number".
   * </pre>
   *
   * <code>.google.protobuf.StringValue id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
   */
  com.google.protobuf.StringValueOrBuilder getIdOrBuilder();

  /**
   * <pre>
   * Output only. The type of invoice.
   * </pre>
   *
   * <code>.google.ads.googleads.v4.enums.InvoiceTypeEnum.InvoiceType type = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
   * @return The enum numeric value on the wire for type.
   */
  int getTypeValue();
  /**
   * <pre>
   * Output only. The type of invoice.
   * </pre>
   *
   * <code>.google.ads.googleads.v4.enums.InvoiceTypeEnum.InvoiceType type = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
   * @return The type.
   */
  com.google.ads.googleads.v4.enums.InvoiceTypeEnum.InvoiceType getType();

  /**
   * <pre>
   * Output only. The resource name of this invoice’s billing setup.
   * `customers/{customer_id}/billingSetups/{billing_setup_id}`
   * </pre>
   *
   * <code>.google.protobuf.StringValue billing_setup = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
   * @return Whether the billingSetup field is set.
   */
  boolean hasBillingSetup();
  /**
   * <pre>
   * Output only. The resource name of this invoice’s billing setup.
   * `customers/{customer_id}/billingSetups/{billing_setup_id}`
   * </pre>
   *
   * <code>.google.protobuf.StringValue billing_setup = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
   * @return The billingSetup.
   */
  com.google.protobuf.StringValue getBillingSetup();
  /**
   * <pre>
   * Output only. The resource name of this invoice’s billing setup.
   * `customers/{customer_id}/billingSetups/{billing_setup_id}`
   * </pre>
   *
   * <code>.google.protobuf.StringValue billing_setup = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
   */
  com.google.protobuf.StringValueOrBuilder getBillingSetupOrBuilder();

  /**
   * <pre>
   * Output only. A 16 digit ID used to identify the payments account associated with the
   * billing setup, e.g. "1234-5678-9012-3456". It appears on the invoice PDF as
   * "Billing Account Number".
   * </pre>
   *
   * <code>.google.protobuf.StringValue payments_account_id = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
   * @return Whether the paymentsAccountId field is set.
   */
  boolean hasPaymentsAccountId();
  /**
   * <pre>
   * Output only. A 16 digit ID used to identify the payments account associated with the
   * billing setup, e.g. "1234-5678-9012-3456". It appears on the invoice PDF as
   * "Billing Account Number".
   * </pre>
   *
   * <code>.google.protobuf.StringValue payments_account_id = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
   * @return The paymentsAccountId.
   */
  com.google.protobuf.StringValue getPaymentsAccountId();
  /**
   * <pre>
   * Output only. A 16 digit ID used to identify the payments account associated with the
   * billing setup, e.g. "1234-5678-9012-3456". It appears on the invoice PDF as
   * "Billing Account Number".
   * </pre>
   *
   * <code>.google.protobuf.StringValue payments_account_id = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
   */
  com.google.protobuf.StringValueOrBuilder getPaymentsAccountIdOrBuilder();

  /**
   * <pre>
   * Output only. A 12 digit ID used to identify the payments profile associated with the
   * billing setup, e.g. "1234-5678-9012". It appears on the invoice PDF as
   * "Billing ID".
   * </pre>
   *
   * <code>.google.protobuf.StringValue payments_profile_id = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
   * @return Whether the paymentsProfileId field is set.
   */
  boolean hasPaymentsProfileId();
  /**
   * <pre>
   * Output only. A 12 digit ID used to identify the payments profile associated with the
   * billing setup, e.g. "1234-5678-9012". It appears on the invoice PDF as
   * "Billing ID".
   * </pre>
   *
   * <code>.google.protobuf.StringValue payments_profile_id = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
   * @return The paymentsProfileId.
   */
  com.google.protobuf.StringValue getPaymentsProfileId();
  /**
   * <pre>
   * Output only. A 12 digit ID used to identify the payments profile associated with the
   * billing setup, e.g. "1234-5678-9012". It appears on the invoice PDF as
   * "Billing ID".
   * </pre>
   *
   * <code>.google.protobuf.StringValue payments_profile_id = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
   */
  com.google.protobuf.StringValueOrBuilder getPaymentsProfileIdOrBuilder();

  /**
   * <pre>
   * Output only. The issue date in yyyy-mm-dd format. It appears on the invoice PDF as
   * either "Issue date" or "Invoice date".
   * </pre>
   *
   * <code>.google.protobuf.StringValue issue_date = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
   * @return Whether the issueDate field is set.
   */
  boolean hasIssueDate();
  /**
   * <pre>
   * Output only. The issue date in yyyy-mm-dd format. It appears on the invoice PDF as
   * either "Issue date" or "Invoice date".
   * </pre>
   *
   * <code>.google.protobuf.StringValue issue_date = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
   * @return The issueDate.
   */
  com.google.protobuf.StringValue getIssueDate();
  /**
   * <pre>
   * Output only. The issue date in yyyy-mm-dd format. It appears on the invoice PDF as
   * either "Issue date" or "Invoice date".
   * </pre>
   *
   * <code>.google.protobuf.StringValue issue_date = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
   */
  com.google.protobuf.StringValueOrBuilder getIssueDateOrBuilder();

  /**
   * <pre>
   * Output only. The due date in yyyy-mm-dd format.
   * </pre>
   *
   * <code>.google.protobuf.StringValue due_date = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
   * @return Whether the dueDate field is set.
   */
  boolean hasDueDate();
  /**
   * <pre>
   * Output only. The due date in yyyy-mm-dd format.
   * </pre>
   *
   * <code>.google.protobuf.StringValue due_date = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
   * @return The dueDate.
   */
  com.google.protobuf.StringValue getDueDate();
  /**
   * <pre>
   * Output only. The due date in yyyy-mm-dd format.
   * </pre>
   *
   * <code>.google.protobuf.StringValue due_date = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
   */
  com.google.protobuf.StringValueOrBuilder getDueDateOrBuilder();

  /**
   * <pre>
   * Output only. The service period date range of this invoice. The end date is inclusive.
   * </pre>
   *
   * <code>.google.ads.googleads.v4.common.DateRange service_date_range = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
   * @return Whether the serviceDateRange field is set.
   */
  boolean hasServiceDateRange();
  /**
   * <pre>
   * Output only. The service period date range of this invoice. The end date is inclusive.
   * </pre>
   *
   * <code>.google.ads.googleads.v4.common.DateRange service_date_range = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
   * @return The serviceDateRange.
   */
  com.google.ads.googleads.v4.common.DateRange getServiceDateRange();
  /**
   * <pre>
   * Output only. The service period date range of this invoice. The end date is inclusive.
   * </pre>
   *
   * <code>.google.ads.googleads.v4.common.DateRange service_date_range = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
   */
  com.google.ads.googleads.v4.common.DateRangeOrBuilder getServiceDateRangeOrBuilder();

  /**
   * <pre>
   * Output only. The currency code. All costs are returned in this currency. A subset of the
   * currency codes derived from the ISO 4217 standard is supported.
   * </pre>
   *
   * <code>.google.protobuf.StringValue currency_code = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
   * @return Whether the currencyCode field is set.
   */
  boolean hasCurrencyCode();
  /**
   * <pre>
   * Output only. The currency code. All costs are returned in this currency. A subset of the
   * currency codes derived from the ISO 4217 standard is supported.
   * </pre>
   *
   * <code>.google.protobuf.StringValue currency_code = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
   * @return The currencyCode.
   */
  com.google.protobuf.StringValue getCurrencyCode();
  /**
   * <pre>
   * Output only. The currency code. All costs are returned in this currency. A subset of the
   * currency codes derived from the ISO 4217 standard is supported.
   * </pre>
   *
   * <code>.google.protobuf.StringValue currency_code = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
   */
  com.google.protobuf.StringValueOrBuilder getCurrencyCodeOrBuilder();

  /**
   * <pre>
   * Output only. The total amount of invoice level adjustments. These adjustments are made
   * on the invoice, not on a specific account budget.
   * </pre>
   *
   * <code>.google.protobuf.Int64Value invoice_level_adjustments_micros = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
   * @return Whether the invoiceLevelAdjustmentsMicros field is set.
   */
  boolean hasInvoiceLevelAdjustmentsMicros();
  /**
   * <pre>
   * Output only. The total amount of invoice level adjustments. These adjustments are made
   * on the invoice, not on a specific account budget.
   * </pre>
   *
   * <code>.google.protobuf.Int64Value invoice_level_adjustments_micros = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
   * @return The invoiceLevelAdjustmentsMicros.
   */
  com.google.protobuf.Int64Value getInvoiceLevelAdjustmentsMicros();
  /**
   * <pre>
   * Output only. The total amount of invoice level adjustments. These adjustments are made
   * on the invoice, not on a specific account budget.
   * </pre>
   *
   * <code>.google.protobuf.Int64Value invoice_level_adjustments_micros = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
   */
  com.google.protobuf.Int64ValueOrBuilder getInvoiceLevelAdjustmentsMicrosOrBuilder();

  /**
   * <pre>
   * Output only. The pretax subtotal amount, in micros. This equals the
   * sum of the AccountBudgetSummary subtotal amounts,
   * Invoice.adjustments_subtotal_amount_micros, and
   * Invoice.regulatory_costs_subtotal_amount_micros.
   * Starting with v6, the Invoice.regulatory_costs_subtotal_amount_micros is no
   * longer included.
   * </pre>
   *
   * <code>.google.protobuf.Int64Value subtotal_amount_micros = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
   * @return Whether the subtotalAmountMicros field is set.
   */
  boolean hasSubtotalAmountMicros();
  /**
   * <pre>
   * Output only. The pretax subtotal amount, in micros. This equals the
   * sum of the AccountBudgetSummary subtotal amounts,
   * Invoice.adjustments_subtotal_amount_micros, and
   * Invoice.regulatory_costs_subtotal_amount_micros.
   * Starting with v6, the Invoice.regulatory_costs_subtotal_amount_micros is no
   * longer included.
   * </pre>
   *
   * <code>.google.protobuf.Int64Value subtotal_amount_micros = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
   * @return The subtotalAmountMicros.
   */
  com.google.protobuf.Int64Value getSubtotalAmountMicros();
  /**
   * <pre>
   * Output only. The pretax subtotal amount, in micros. This equals the
   * sum of the AccountBudgetSummary subtotal amounts,
   * Invoice.adjustments_subtotal_amount_micros, and
   * Invoice.regulatory_costs_subtotal_amount_micros.
   * Starting with v6, the Invoice.regulatory_costs_subtotal_amount_micros is no
   * longer included.
   * </pre>
   *
   * <code>.google.protobuf.Int64Value subtotal_amount_micros = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
   */
  com.google.protobuf.Int64ValueOrBuilder getSubtotalAmountMicrosOrBuilder();

  /**
   * <pre>
   * Output only. The sum of all taxes on the invoice, in micros. This equals the sum of the
   * AccountBudgetSummary tax amounts, plus taxes not associated with a specific
   * account budget.
   * </pre>
   *
   * <code>.google.protobuf.Int64Value tax_amount_micros = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
   * @return Whether the taxAmountMicros field is set.
   */
  boolean hasTaxAmountMicros();
  /**
   * <pre>
   * Output only. The sum of all taxes on the invoice, in micros. This equals the sum of the
   * AccountBudgetSummary tax amounts, plus taxes not associated with a specific
   * account budget.
   * </pre>
   *
   * <code>.google.protobuf.Int64Value tax_amount_micros = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
   * @return The taxAmountMicros.
   */
  com.google.protobuf.Int64Value getTaxAmountMicros();
  /**
   * <pre>
   * Output only. The sum of all taxes on the invoice, in micros. This equals the sum of the
   * AccountBudgetSummary tax amounts, plus taxes not associated with a specific
   * account budget.
   * </pre>
   *
   * <code>.google.protobuf.Int64Value tax_amount_micros = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
   */
  com.google.protobuf.Int64ValueOrBuilder getTaxAmountMicrosOrBuilder();

  /**
   * <pre>
   * Output only. The total amount, in micros. This equals the sum of
   * Invoice.subtotal_amount_micros and Invoice.tax_amount_micros.
   * Starting with v6, Invoice.regulatory_costs_subtotal_amount_micros is
   * also added as it is no longer already included in
   * Invoice.tax_amount_micros.
   * </pre>
   *
   * <code>.google.protobuf.Int64Value total_amount_micros = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
   * @return Whether the totalAmountMicros field is set.
   */
  boolean hasTotalAmountMicros();
  /**
   * <pre>
   * Output only. The total amount, in micros. This equals the sum of
   * Invoice.subtotal_amount_micros and Invoice.tax_amount_micros.
   * Starting with v6, Invoice.regulatory_costs_subtotal_amount_micros is
   * also added as it is no longer already included in
   * Invoice.tax_amount_micros.
   * </pre>
   *
   * <code>.google.protobuf.Int64Value total_amount_micros = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
   * @return The totalAmountMicros.
   */
  com.google.protobuf.Int64Value getTotalAmountMicros();
  /**
   * <pre>
   * Output only. The total amount, in micros. This equals the sum of
   * Invoice.subtotal_amount_micros and Invoice.tax_amount_micros.
   * Starting with v6, Invoice.regulatory_costs_subtotal_amount_micros is
   * also added as it is no longer already included in
   * Invoice.tax_amount_micros.
   * </pre>
   *
   * <code>.google.protobuf.Int64Value total_amount_micros = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
   */
  com.google.protobuf.Int64ValueOrBuilder getTotalAmountMicrosOrBuilder();

  /**
   * <pre>
   * Output only. The resource name of the original invoice corrected, wrote off, or canceled
   * by this invoice, if applicable. If `corrected_invoice` is set,
   * `replaced_invoices` will not be set.
   * Invoice resource names have the form:
   * `customers/{customer_id}/invoices/{invoice_id}`
   * </pre>
   *
   * <code>.google.protobuf.StringValue corrected_invoice = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
   * @return Whether the correctedInvoice field is set.
   */
  boolean hasCorrectedInvoice();
  /**
   * <pre>
   * Output only. The resource name of the original invoice corrected, wrote off, or canceled
   * by this invoice, if applicable. If `corrected_invoice` is set,
   * `replaced_invoices` will not be set.
   * Invoice resource names have the form:
   * `customers/{customer_id}/invoices/{invoice_id}`
   * </pre>
   *
   * <code>.google.protobuf.StringValue corrected_invoice = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
   * @return The correctedInvoice.
   */
  com.google.protobuf.StringValue getCorrectedInvoice();
  /**
   * <pre>
   * Output only. The resource name of the original invoice corrected, wrote off, or canceled
   * by this invoice, if applicable. If `corrected_invoice` is set,
   * `replaced_invoices` will not be set.
   * Invoice resource names have the form:
   * `customers/{customer_id}/invoices/{invoice_id}`
   * </pre>
   *
   * <code>.google.protobuf.StringValue corrected_invoice = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
   */
  com.google.protobuf.StringValueOrBuilder getCorrectedInvoiceOrBuilder();

  /**
   * <pre>
   * Output only. The resource name of the original invoice(s) being rebilled or replaced by
   * this invoice, if applicable. There might be multiple replaced invoices due
   * to invoice consolidation. The replaced invoices may not belong to the same
   * payments account. If `replaced_invoices` is set, `corrected_invoice` will
   * not be set.
   * Invoice resource names have the form:
   * `customers/{customer_id}/invoices/{invoice_id}`
   * </pre>
   *
   * <code>repeated .google.protobuf.StringValue replaced_invoices = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
   */
  java.util.List<com.google.protobuf.StringValue> 
      getReplacedInvoicesList();
  /**
   * <pre>
   * Output only. The resource name of the original invoice(s) being rebilled or replaced by
   * this invoice, if applicable. There might be multiple replaced invoices due
   * to invoice consolidation. The replaced invoices may not belong to the same
   * payments account. If `replaced_invoices` is set, `corrected_invoice` will
   * not be set.
   * Invoice resource names have the form:
   * `customers/{customer_id}/invoices/{invoice_id}`
   * </pre>
   *
   * <code>repeated .google.protobuf.StringValue replaced_invoices = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
   */
  com.google.protobuf.StringValue getReplacedInvoices(int index);
  /**
   * <pre>
   * Output only. The resource name of the original invoice(s) being rebilled or replaced by
   * this invoice, if applicable. There might be multiple replaced invoices due
   * to invoice consolidation. The replaced invoices may not belong to the same
   * payments account. If `replaced_invoices` is set, `corrected_invoice` will
   * not be set.
   * Invoice resource names have the form:
   * `customers/{customer_id}/invoices/{invoice_id}`
   * </pre>
   *
   * <code>repeated .google.protobuf.StringValue replaced_invoices = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
   */
  int getReplacedInvoicesCount();
  /**
   * <pre>
   * Output only. The resource name of the original invoice(s) being rebilled or replaced by
   * this invoice, if applicable. There might be multiple replaced invoices due
   * to invoice consolidation. The replaced invoices may not belong to the same
   * payments account. If `replaced_invoices` is set, `corrected_invoice` will
   * not be set.
   * Invoice resource names have the form:
   * `customers/{customer_id}/invoices/{invoice_id}`
   * </pre>
   *
   * <code>repeated .google.protobuf.StringValue replaced_invoices = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
   */
  java.util.List<? extends com.google.protobuf.StringValueOrBuilder> 
      getReplacedInvoicesOrBuilderList();
  /**
   * <pre>
   * Output only. The resource name of the original invoice(s) being rebilled or replaced by
   * this invoice, if applicable. There might be multiple replaced invoices due
   * to invoice consolidation. The replaced invoices may not belong to the same
   * payments account. If `replaced_invoices` is set, `corrected_invoice` will
   * not be set.
   * Invoice resource names have the form:
   * `customers/{customer_id}/invoices/{invoice_id}`
   * </pre>
   *
   * <code>repeated .google.protobuf.StringValue replaced_invoices = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
   */
  com.google.protobuf.StringValueOrBuilder getReplacedInvoicesOrBuilder(
      int index);

  /**
   * <pre>
   * Output only. The URL to a PDF copy of the invoice. Users need to pass in their OAuth
   * token to request the PDF with this URL.
   * </pre>
   *
   * <code>.google.protobuf.StringValue pdf_url = 17 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
   * @return Whether the pdfUrl field is set.
   */
  boolean hasPdfUrl();
  /**
   * <pre>
   * Output only. The URL to a PDF copy of the invoice. Users need to pass in their OAuth
   * token to request the PDF with this URL.
   * </pre>
   *
   * <code>.google.protobuf.StringValue pdf_url = 17 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
   * @return The pdfUrl.
   */
  com.google.protobuf.StringValue getPdfUrl();
  /**
   * <pre>
   * Output only. The URL to a PDF copy of the invoice. Users need to pass in their OAuth
   * token to request the PDF with this URL.
   * </pre>
   *
   * <code>.google.protobuf.StringValue pdf_url = 17 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
   */
  com.google.protobuf.StringValueOrBuilder getPdfUrlOrBuilder();

  /**
   * <pre>
   * Output only. The list of summarized account budget information associated with this
   * invoice.
   * </pre>
   *
   * <code>repeated .google.ads.googleads.v4.resources.Invoice.AccountBudgetSummary account_budget_summaries = 18 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
   */
  java.util.List<com.google.ads.googleads.v4.resources.Invoice.AccountBudgetSummary> 
      getAccountBudgetSummariesList();
  /**
   * <pre>
   * Output only. The list of summarized account budget information associated with this
   * invoice.
   * </pre>
   *
   * <code>repeated .google.ads.googleads.v4.resources.Invoice.AccountBudgetSummary account_budget_summaries = 18 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
   */
  com.google.ads.googleads.v4.resources.Invoice.AccountBudgetSummary getAccountBudgetSummaries(int index);
  /**
   * <pre>
   * Output only. The list of summarized account budget information associated with this
   * invoice.
   * </pre>
   *
   * <code>repeated .google.ads.googleads.v4.resources.Invoice.AccountBudgetSummary account_budget_summaries = 18 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
   */
  int getAccountBudgetSummariesCount();
  /**
   * <pre>
   * Output only. The list of summarized account budget information associated with this
   * invoice.
   * </pre>
   *
   * <code>repeated .google.ads.googleads.v4.resources.Invoice.AccountBudgetSummary account_budget_summaries = 18 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
   */
  java.util.List<? extends com.google.ads.googleads.v4.resources.Invoice.AccountBudgetSummaryOrBuilder> 
      getAccountBudgetSummariesOrBuilderList();
  /**
   * <pre>
   * Output only. The list of summarized account budget information associated with this
   * invoice.
   * </pre>
   *
   * <code>repeated .google.ads.googleads.v4.resources.Invoice.AccountBudgetSummary account_budget_summaries = 18 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
   */
  com.google.ads.googleads.v4.resources.Invoice.AccountBudgetSummaryOrBuilder getAccountBudgetSummariesOrBuilder(
      int index);
}
