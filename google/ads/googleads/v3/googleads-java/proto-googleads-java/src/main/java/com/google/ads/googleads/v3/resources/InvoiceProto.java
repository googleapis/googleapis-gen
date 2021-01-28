// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v3/resources/invoice.proto

package com.google.ads.googleads.v3.resources;

public final class InvoiceProto {
  private InvoiceProto() {}
  public static void registerAllExtensions(
      com.google.protobuf.ExtensionRegistryLite registry) {
  }

  public static void registerAllExtensions(
      com.google.protobuf.ExtensionRegistry registry) {
    registerAllExtensions(
        (com.google.protobuf.ExtensionRegistryLite) registry);
  }
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_ads_googleads_v3_resources_Invoice_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_ads_googleads_v3_resources_Invoice_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_ads_googleads_v3_resources_Invoice_AccountBudgetSummary_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_ads_googleads_v3_resources_Invoice_AccountBudgetSummary_fieldAccessorTable;

  public static com.google.protobuf.Descriptors.FileDescriptor
      getDescriptor() {
    return descriptor;
  }
  private static  com.google.protobuf.Descriptors.FileDescriptor
      descriptor;
  static {
    java.lang.String[] descriptorData = {
      "\n/google/ads/googleads/v3/resources/invo" +
      "ice.proto\022!google.ads.googleads.v3.resou" +
      "rces\032*google/ads/googleads/v3/common/dat" +
      "es.proto\0320google/ads/googleads/v3/enums/" +
      "invoice_type.proto\032\037google/api/field_beh" +
      "avior.proto\032\031google/api/resource.proto\032\036" +
      "google/protobuf/wrappers.proto\032\034google/a" +
      "pi/annotations.proto\"\313\016\n\007Invoice\022?\n\rreso" +
      "urce_name\030\001 \001(\tB(\340A\003\372A\"\n googleads.googl" +
      "eapis.com/Invoice\022-\n\002id\030\002 \001(\0132\034.google.p" +
      "rotobuf.StringValueB\003\340A\003\022M\n\004type\030\003 \001(\0162:" +
      ".google.ads.googleads.v3.enums.InvoiceTy" +
      "peEnum.InvoiceTypeB\003\340A\003\0228\n\rbilling_setup" +
      "\030\004 \001(\0132\034.google.protobuf.StringValueB\003\340A" +
      "\003\022>\n\023payments_account_id\030\005 \001(\0132\034.google." +
      "protobuf.StringValueB\003\340A\003\022>\n\023payments_pr" +
      "ofile_id\030\006 \001(\0132\034.google.protobuf.StringV" +
      "alueB\003\340A\003\0225\n\nissue_date\030\007 \001(\0132\034.google.p" +
      "rotobuf.StringValueB\003\340A\003\0223\n\010due_date\030\010 \001" +
      "(\0132\034.google.protobuf.StringValueB\003\340A\003\022J\n" +
      "\022service_date_range\030\t \001(\0132).google.ads.g" +
      "oogleads.v3.common.DateRangeB\003\340A\003\0228\n\rcur" +
      "rency_code\030\n \001(\0132\034.google.protobuf.Strin" +
      "gValueB\003\340A\003\022J\n invoice_level_adjustments" +
      "_micros\030\013 \001(\0132\033.google.protobuf.Int64Val" +
      "ueB\003\340A\003\022@\n\026subtotal_amount_micros\030\014 \001(\0132" +
      "\033.google.protobuf.Int64ValueB\003\340A\003\022;\n\021tax" +
      "_amount_micros\030\r \001(\0132\033.google.protobuf.I" +
      "nt64ValueB\003\340A\003\022=\n\023total_amount_micros\030\016 " +
      "\001(\0132\033.google.protobuf.Int64ValueB\003\340A\003\022<\n" +
      "\021corrected_invoice\030\017 \001(\0132\034.google.protob" +
      "uf.StringValueB\003\340A\003\022<\n\021replaced_invoices" +
      "\030\020 \003(\0132\034.google.protobuf.StringValueB\003\340A" +
      "\003\0222\n\007pdf_url\030\021 \001(\0132\034.google.protobuf.Str" +
      "ingValueB\003\340A\003\022f\n\030account_budget_summarie" +
      "s\030\022 \003(\0132?.google.ads.googleads.v3.resour" +
      "ces.Invoice.AccountBudgetSummaryB\003\340A\003\032\342\004" +
      "\n\024AccountBudgetSummary\0223\n\010customer\030\001 \001(\013" +
      "2\034.google.protobuf.StringValueB\003\340A\003\022D\n\031c" +
      "ustomer_descriptive_name\030\002 \001(\0132\034.google." +
      "protobuf.StringValueB\003\340A\003\0229\n\016account_bud" +
      "get\030\003 \001(\0132\034.google.protobuf.StringValueB" +
      "\003\340A\003\022>\n\023account_budget_name\030\004 \001(\0132\034.goog" +
      "le.protobuf.StringValueB\003\340A\003\022@\n\025purchase" +
      "_order_number\030\005 \001(\0132\034.google.protobuf.St" +
      "ringValueB\003\340A\003\022@\n\026subtotal_amount_micros" +
      "\030\006 \001(\0132\033.google.protobuf.Int64ValueB\003\340A\003" +
      "\022;\n\021tax_amount_micros\030\007 \001(\0132\033.google.pro" +
      "tobuf.Int64ValueB\003\340A\003\022=\n\023total_amount_mi" +
      "cros\030\010 \001(\0132\033.google.protobuf.Int64ValueB" +
      "\003\340A\003\022T\n\034billable_activity_date_range\030\t \001" +
      "(\0132).google.ads.googleads.v3.common.Date" +
      "RangeB\003\340A\003:N\352AK\n googleads.googleapis.co" +
      "m/Invoice\022\'customers/{customer}/invoices" +
      "/{invoice}B\371\001\n%com.google.ads.googleads." +
      "v3.resourcesB\014InvoiceProtoP\001ZJgoogle.gol" +
      "ang.org/genproto/googleapis/ads/googlead" +
      "s/v3/resources;resources\242\002\003GAA\252\002!Google." +
      "Ads.GoogleAds.V3.Resources\312\002!Google\\Ads\\" +
      "GoogleAds\\V3\\Resources\352\002%Google::Ads::Go" +
      "ogleAds::V3::Resourcesb\006proto3"
    };
    descriptor = com.google.protobuf.Descriptors.FileDescriptor
      .internalBuildGeneratedFileFrom(descriptorData,
        new com.google.protobuf.Descriptors.FileDescriptor[] {
          com.google.ads.googleads.v3.common.DatesProto.getDescriptor(),
          com.google.ads.googleads.v3.enums.InvoiceTypeProto.getDescriptor(),
          com.google.api.FieldBehaviorProto.getDescriptor(),
          com.google.api.ResourceProto.getDescriptor(),
          com.google.protobuf.WrappersProto.getDescriptor(),
          com.google.api.AnnotationsProto.getDescriptor(),
        });
    internal_static_google_ads_googleads_v3_resources_Invoice_descriptor =
      getDescriptor().getMessageTypes().get(0);
    internal_static_google_ads_googleads_v3_resources_Invoice_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_ads_googleads_v3_resources_Invoice_descriptor,
        new java.lang.String[] { "ResourceName", "Id", "Type", "BillingSetup", "PaymentsAccountId", "PaymentsProfileId", "IssueDate", "DueDate", "ServiceDateRange", "CurrencyCode", "InvoiceLevelAdjustmentsMicros", "SubtotalAmountMicros", "TaxAmountMicros", "TotalAmountMicros", "CorrectedInvoice", "ReplacedInvoices", "PdfUrl", "AccountBudgetSummaries", });
    internal_static_google_ads_googleads_v3_resources_Invoice_AccountBudgetSummary_descriptor =
      internal_static_google_ads_googleads_v3_resources_Invoice_descriptor.getNestedTypes().get(0);
    internal_static_google_ads_googleads_v3_resources_Invoice_AccountBudgetSummary_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_ads_googleads_v3_resources_Invoice_AccountBudgetSummary_descriptor,
        new java.lang.String[] { "Customer", "CustomerDescriptiveName", "AccountBudget", "AccountBudgetName", "PurchaseOrderNumber", "SubtotalAmountMicros", "TaxAmountMicros", "TotalAmountMicros", "BillableActivityDateRange", });
    com.google.protobuf.ExtensionRegistry registry =
        com.google.protobuf.ExtensionRegistry.newInstance();
    registry.add(com.google.api.FieldBehaviorProto.fieldBehavior);
    registry.add(com.google.api.ResourceProto.resource);
    registry.add(com.google.api.ResourceProto.resourceReference);
    com.google.protobuf.Descriptors.FileDescriptor
        .internalUpdateFileDescriptor(descriptor, registry);
    com.google.ads.googleads.v3.common.DatesProto.getDescriptor();
    com.google.ads.googleads.v3.enums.InvoiceTypeProto.getDescriptor();
    com.google.api.FieldBehaviorProto.getDescriptor();
    com.google.api.ResourceProto.getDescriptor();
    com.google.protobuf.WrappersProto.getDescriptor();
    com.google.api.AnnotationsProto.getDescriptor();
  }

  // @@protoc_insertion_point(outer_class_scope)
}
