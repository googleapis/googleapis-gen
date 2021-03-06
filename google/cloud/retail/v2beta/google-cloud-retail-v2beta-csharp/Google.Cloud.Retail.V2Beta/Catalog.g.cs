// <auto-generated>
//     Generated by the protocol buffer compiler.  DO NOT EDIT!
//     source: google/cloud/retail/v2beta/catalog.proto
// </auto-generated>
#pragma warning disable 1591, 0612, 3021
#region Designer generated code

using pb = global::Google.Protobuf;
using pbc = global::Google.Protobuf.Collections;
using pbr = global::Google.Protobuf.Reflection;
using scg = global::System.Collections.Generic;
namespace Google.Cloud.Retail.V2Beta {

  /// <summary>Holder for reflection information generated from google/cloud/retail/v2beta/catalog.proto</summary>
  public static partial class CatalogReflection {

    #region Descriptor
    /// <summary>File descriptor for google/cloud/retail/v2beta/catalog.proto</summary>
    public static pbr::FileDescriptor Descriptor {
      get { return descriptor; }
    }
    private static pbr::FileDescriptor descriptor;

    static CatalogReflection() {
      byte[] descriptorData = global::System.Convert.FromBase64String(
          string.Concat(
            "Cihnb29nbGUvY2xvdWQvcmV0YWlsL3YyYmV0YS9jYXRhbG9nLnByb3RvEhpn",
            "b29nbGUuY2xvdWQucmV0YWlsLnYyYmV0YRocZ29vZ2xlL2FwaS9hbm5vdGF0",
            "aW9ucy5wcm90bxofZ29vZ2xlL2FwaS9maWVsZF9iZWhhdmlvci5wcm90bxoZ",
            "Z29vZ2xlL2FwaS9yZXNvdXJjZS5wcm90byJeChJQcm9kdWN0TGV2ZWxDb25m",
            "aWcSHgoWaW5nZXN0aW9uX3Byb2R1Y3RfdHlwZRgBIAEoCRIoCiBtZXJjaGFu",
            "dF9jZW50ZXJfcHJvZHVjdF9pZF9maWVsZBgCIAEoCSLwAQoHQ2F0YWxvZxIU",
            "CgRuYW1lGAEgASgJQgbgQQLgQQUSHAoMZGlzcGxheV9uYW1lGAIgASgJQgbg",
            "QQLgQQUSUQoUcHJvZHVjdF9sZXZlbF9jb25maWcYBCABKAsyLi5nb29nbGUu",
            "Y2xvdWQucmV0YWlsLnYyYmV0YS5Qcm9kdWN0TGV2ZWxDb25maWdCA+BBAjpe",
            "6kFbCh1yZXRhaWwuZ29vZ2xlYXBpcy5jb20vQ2F0YWxvZxI6cHJvamVjdHMv",
            "e3Byb2plY3R9L2xvY2F0aW9ucy97bG9jYXRpb259L2NhdGFsb2dzL3tjYXRh",
            "bG9nfULVAQoeY29tLmdvb2dsZS5jbG91ZC5yZXRhaWwudjJiZXRhQgxDYXRh",
            "bG9nUHJvdG9QAVpAZ29vZ2xlLmdvbGFuZy5vcmcvZ2VucHJvdG8vZ29vZ2xl",
            "YXBpcy9jbG91ZC9yZXRhaWwvdjJiZXRhO3JldGFpbKICBlJFVEFJTKoCGkdv",
            "b2dsZS5DbG91ZC5SZXRhaWwuVjJCZXRhygIaR29vZ2xlXENsb3VkXFJldGFp",
            "bFxWMmJldGHqAh1Hb29nbGU6OkNsb3VkOjpSZXRhaWw6OlYyYmV0YWIGcHJv",
            "dG8z"));
      descriptor = pbr::FileDescriptor.FromGeneratedCode(descriptorData,
          new pbr::FileDescriptor[] { global::Google.Api.AnnotationsReflection.Descriptor, global::Google.Api.FieldBehaviorReflection.Descriptor, global::Google.Api.ResourceReflection.Descriptor, },
          new pbr::GeneratedClrTypeInfo(null, null, new pbr::GeneratedClrTypeInfo[] {
            new pbr::GeneratedClrTypeInfo(typeof(global::Google.Cloud.Retail.V2Beta.ProductLevelConfig), global::Google.Cloud.Retail.V2Beta.ProductLevelConfig.Parser, new[]{ "IngestionProductType", "MerchantCenterProductIdField" }, null, null, null, null),
            new pbr::GeneratedClrTypeInfo(typeof(global::Google.Cloud.Retail.V2Beta.Catalog), global::Google.Cloud.Retail.V2Beta.Catalog.Parser, new[]{ "Name", "DisplayName", "ProductLevelConfig" }, null, null, null, null)
          }));
    }
    #endregion

  }
  #region Messages
  /// <summary>
  /// Configures what level the product should be uploaded with regards to
  /// how users will be send events and how predictions will be made.
  /// </summary>
  public sealed partial class ProductLevelConfig : pb::IMessage<ProductLevelConfig>
  #if !GOOGLE_PROTOBUF_REFSTRUCT_COMPATIBILITY_MODE
      , pb::IBufferMessage
  #endif
  {
    private static readonly pb::MessageParser<ProductLevelConfig> _parser = new pb::MessageParser<ProductLevelConfig>(() => new ProductLevelConfig());
    private pb::UnknownFieldSet _unknownFields;
    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public static pb::MessageParser<ProductLevelConfig> Parser { get { return _parser; } }

    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public static pbr::MessageDescriptor Descriptor {
      get { return global::Google.Cloud.Retail.V2Beta.CatalogReflection.Descriptor.MessageTypes[0]; }
    }

    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    pbr::MessageDescriptor pb::IMessage.Descriptor {
      get { return Descriptor; }
    }

    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public ProductLevelConfig() {
      OnConstruction();
    }

    partial void OnConstruction();

    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public ProductLevelConfig(ProductLevelConfig other) : this() {
      ingestionProductType_ = other.ingestionProductType_;
      merchantCenterProductIdField_ = other.merchantCenterProductIdField_;
      _unknownFields = pb::UnknownFieldSet.Clone(other._unknownFields);
    }

    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public ProductLevelConfig Clone() {
      return new ProductLevelConfig(this);
    }

    /// <summary>Field number for the "ingestion_product_type" field.</summary>
    public const int IngestionProductTypeFieldNumber = 1;
    private string ingestionProductType_ = "";
    /// <summary>
    /// The type of [Product][google.cloud.retail.v2beta.Product]s allowed to be
    /// ingested into the catalog. Acceptable values are:
    ///
    /// * `primary` (default): You can only ingest
    /// [Product.Type.PRIMARY][google.cloud.retail.v2beta.Product.Type.PRIMARY]
    ///   [Product][google.cloud.retail.v2beta.Product]s. This means
    ///   [Product.primary_product_id][google.cloud.retail.v2beta.Product.primary_product_id]
    ///   can only be empty or set to the same value as
    ///   [Product.id][google.cloud.retail.v2beta.Product.id].
    /// * `variant`: You can only ingest
    /// [Product.Type.VARIANT][google.cloud.retail.v2beta.Product.Type.VARIANT]
    /// [Product][google.cloud.retail.v2beta.Product]s.
    ///   This means
    ///   [Product.primary_product_id][google.cloud.retail.v2beta.Product.primary_product_id]
    ///   cannot be empty.
    ///
    /// If this field is set to an invalid value other than these, an
    /// INVALID_ARGUMENT error is returned.
    ///
    /// If this field is `variant` and
    /// [merchant_center_product_id_field][google.cloud.retail.v2beta.ProductLevelConfig.merchant_center_product_id_field]
    /// is `itemGroupId`, an INVALID_ARGUMENT error is returned.
    ///
    /// See [Using catalog
    /// levels](/retail/recommendations-ai/docs/catalog#catalog-levels) for more
    /// details.
    /// </summary>
    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public string IngestionProductType {
      get { return ingestionProductType_; }
      set {
        ingestionProductType_ = pb::ProtoPreconditions.CheckNotNull(value, "value");
      }
    }

    /// <summary>Field number for the "merchant_center_product_id_field" field.</summary>
    public const int MerchantCenterProductIdFieldFieldNumber = 2;
    private string merchantCenterProductIdField_ = "";
    /// <summary>
    /// Which field of [Merchant Center
    /// Product](/bigquery-transfer/docs/merchant-center-products-schema) should be
    /// imported as [Product.id][google.cloud.retail.v2beta.Product.id]. Acceptable
    /// values are:
    ///
    /// * `offerId` (default): Import `offerId` as the product ID.
    /// * `itemGroupId`: Import `itemGroupId` as the product ID. Notice that Retail
    ///   API will choose one item from the ones with the same `itemGroupId`, and
    ///   use it to represent the item group.
    ///
    /// If this field is set to an invalid value other than these, an
    /// INVALID_ARGUMENT error is returned.
    ///
    /// If this field is `itemGroupId` and
    /// [ingestion_product_type][google.cloud.retail.v2beta.ProductLevelConfig.ingestion_product_type]
    /// is `variant`, an INVALID_ARGUMENT error is returned.
    ///
    /// See [Using catalog
    /// levels](/retail/recommendations-ai/docs/catalog#catalog-levels) for more
    /// details.
    /// </summary>
    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public string MerchantCenterProductIdField {
      get { return merchantCenterProductIdField_; }
      set {
        merchantCenterProductIdField_ = pb::ProtoPreconditions.CheckNotNull(value, "value");
      }
    }

    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public override bool Equals(object other) {
      return Equals(other as ProductLevelConfig);
    }

    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public bool Equals(ProductLevelConfig other) {
      if (ReferenceEquals(other, null)) {
        return false;
      }
      if (ReferenceEquals(other, this)) {
        return true;
      }
      if (IngestionProductType != other.IngestionProductType) return false;
      if (MerchantCenterProductIdField != other.MerchantCenterProductIdField) return false;
      return Equals(_unknownFields, other._unknownFields);
    }

    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public override int GetHashCode() {
      int hash = 1;
      if (IngestionProductType.Length != 0) hash ^= IngestionProductType.GetHashCode();
      if (MerchantCenterProductIdField.Length != 0) hash ^= MerchantCenterProductIdField.GetHashCode();
      if (_unknownFields != null) {
        hash ^= _unknownFields.GetHashCode();
      }
      return hash;
    }

    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public override string ToString() {
      return pb::JsonFormatter.ToDiagnosticString(this);
    }

    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public void WriteTo(pb::CodedOutputStream output) {
    #if !GOOGLE_PROTOBUF_REFSTRUCT_COMPATIBILITY_MODE
      output.WriteRawMessage(this);
    #else
      if (IngestionProductType.Length != 0) {
        output.WriteRawTag(10);
        output.WriteString(IngestionProductType);
      }
      if (MerchantCenterProductIdField.Length != 0) {
        output.WriteRawTag(18);
        output.WriteString(MerchantCenterProductIdField);
      }
      if (_unknownFields != null) {
        _unknownFields.WriteTo(output);
      }
    #endif
    }

    #if !GOOGLE_PROTOBUF_REFSTRUCT_COMPATIBILITY_MODE
    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    void pb::IBufferMessage.InternalWriteTo(ref pb::WriteContext output) {
      if (IngestionProductType.Length != 0) {
        output.WriteRawTag(10);
        output.WriteString(IngestionProductType);
      }
      if (MerchantCenterProductIdField.Length != 0) {
        output.WriteRawTag(18);
        output.WriteString(MerchantCenterProductIdField);
      }
      if (_unknownFields != null) {
        _unknownFields.WriteTo(ref output);
      }
    }
    #endif

    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public int CalculateSize() {
      int size = 0;
      if (IngestionProductType.Length != 0) {
        size += 1 + pb::CodedOutputStream.ComputeStringSize(IngestionProductType);
      }
      if (MerchantCenterProductIdField.Length != 0) {
        size += 1 + pb::CodedOutputStream.ComputeStringSize(MerchantCenterProductIdField);
      }
      if (_unknownFields != null) {
        size += _unknownFields.CalculateSize();
      }
      return size;
    }

    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public void MergeFrom(ProductLevelConfig other) {
      if (other == null) {
        return;
      }
      if (other.IngestionProductType.Length != 0) {
        IngestionProductType = other.IngestionProductType;
      }
      if (other.MerchantCenterProductIdField.Length != 0) {
        MerchantCenterProductIdField = other.MerchantCenterProductIdField;
      }
      _unknownFields = pb::UnknownFieldSet.MergeFrom(_unknownFields, other._unknownFields);
    }

    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public void MergeFrom(pb::CodedInputStream input) {
    #if !GOOGLE_PROTOBUF_REFSTRUCT_COMPATIBILITY_MODE
      input.ReadRawMessage(this);
    #else
      uint tag;
      while ((tag = input.ReadTag()) != 0) {
        switch(tag) {
          default:
            _unknownFields = pb::UnknownFieldSet.MergeFieldFrom(_unknownFields, input);
            break;
          case 10: {
            IngestionProductType = input.ReadString();
            break;
          }
          case 18: {
            MerchantCenterProductIdField = input.ReadString();
            break;
          }
        }
      }
    #endif
    }

    #if !GOOGLE_PROTOBUF_REFSTRUCT_COMPATIBILITY_MODE
    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    void pb::IBufferMessage.InternalMergeFrom(ref pb::ParseContext input) {
      uint tag;
      while ((tag = input.ReadTag()) != 0) {
        switch(tag) {
          default:
            _unknownFields = pb::UnknownFieldSet.MergeFieldFrom(_unknownFields, ref input);
            break;
          case 10: {
            IngestionProductType = input.ReadString();
            break;
          }
          case 18: {
            MerchantCenterProductIdField = input.ReadString();
            break;
          }
        }
      }
    }
    #endif

  }

  /// <summary>
  /// The catalog configuration.
  /// </summary>
  public sealed partial class Catalog : pb::IMessage<Catalog>
  #if !GOOGLE_PROTOBUF_REFSTRUCT_COMPATIBILITY_MODE
      , pb::IBufferMessage
  #endif
  {
    private static readonly pb::MessageParser<Catalog> _parser = new pb::MessageParser<Catalog>(() => new Catalog());
    private pb::UnknownFieldSet _unknownFields;
    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public static pb::MessageParser<Catalog> Parser { get { return _parser; } }

    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public static pbr::MessageDescriptor Descriptor {
      get { return global::Google.Cloud.Retail.V2Beta.CatalogReflection.Descriptor.MessageTypes[1]; }
    }

    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    pbr::MessageDescriptor pb::IMessage.Descriptor {
      get { return Descriptor; }
    }

    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public Catalog() {
      OnConstruction();
    }

    partial void OnConstruction();

    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public Catalog(Catalog other) : this() {
      name_ = other.name_;
      displayName_ = other.displayName_;
      productLevelConfig_ = other.productLevelConfig_ != null ? other.productLevelConfig_.Clone() : null;
      _unknownFields = pb::UnknownFieldSet.Clone(other._unknownFields);
    }

    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public Catalog Clone() {
      return new Catalog(this);
    }

    /// <summary>Field number for the "name" field.</summary>
    public const int NameFieldNumber = 1;
    private string name_ = "";
    /// <summary>
    /// Required. Immutable. The fully qualified resource name of the catalog.
    /// </summary>
    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public string Name {
      get { return name_; }
      set {
        name_ = pb::ProtoPreconditions.CheckNotNull(value, "value");
      }
    }

    /// <summary>Field number for the "display_name" field.</summary>
    public const int DisplayNameFieldNumber = 2;
    private string displayName_ = "";
    /// <summary>
    /// Required. Immutable. The catalog display name.
    ///
    /// This field must be a UTF-8 encoded string with a length limit of 128
    /// characters. Otherwise, an INVALID_ARGUMENT error is returned.
    /// </summary>
    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public string DisplayName {
      get { return displayName_; }
      set {
        displayName_ = pb::ProtoPreconditions.CheckNotNull(value, "value");
      }
    }

    /// <summary>Field number for the "product_level_config" field.</summary>
    public const int ProductLevelConfigFieldNumber = 4;
    private global::Google.Cloud.Retail.V2Beta.ProductLevelConfig productLevelConfig_;
    /// <summary>
    /// Required. The product level configuration.
    /// </summary>
    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public global::Google.Cloud.Retail.V2Beta.ProductLevelConfig ProductLevelConfig {
      get { return productLevelConfig_; }
      set {
        productLevelConfig_ = value;
      }
    }

    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public override bool Equals(object other) {
      return Equals(other as Catalog);
    }

    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public bool Equals(Catalog other) {
      if (ReferenceEquals(other, null)) {
        return false;
      }
      if (ReferenceEquals(other, this)) {
        return true;
      }
      if (Name != other.Name) return false;
      if (DisplayName != other.DisplayName) return false;
      if (!object.Equals(ProductLevelConfig, other.ProductLevelConfig)) return false;
      return Equals(_unknownFields, other._unknownFields);
    }

    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public override int GetHashCode() {
      int hash = 1;
      if (Name.Length != 0) hash ^= Name.GetHashCode();
      if (DisplayName.Length != 0) hash ^= DisplayName.GetHashCode();
      if (productLevelConfig_ != null) hash ^= ProductLevelConfig.GetHashCode();
      if (_unknownFields != null) {
        hash ^= _unknownFields.GetHashCode();
      }
      return hash;
    }

    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public override string ToString() {
      return pb::JsonFormatter.ToDiagnosticString(this);
    }

    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public void WriteTo(pb::CodedOutputStream output) {
    #if !GOOGLE_PROTOBUF_REFSTRUCT_COMPATIBILITY_MODE
      output.WriteRawMessage(this);
    #else
      if (Name.Length != 0) {
        output.WriteRawTag(10);
        output.WriteString(Name);
      }
      if (DisplayName.Length != 0) {
        output.WriteRawTag(18);
        output.WriteString(DisplayName);
      }
      if (productLevelConfig_ != null) {
        output.WriteRawTag(34);
        output.WriteMessage(ProductLevelConfig);
      }
      if (_unknownFields != null) {
        _unknownFields.WriteTo(output);
      }
    #endif
    }

    #if !GOOGLE_PROTOBUF_REFSTRUCT_COMPATIBILITY_MODE
    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    void pb::IBufferMessage.InternalWriteTo(ref pb::WriteContext output) {
      if (Name.Length != 0) {
        output.WriteRawTag(10);
        output.WriteString(Name);
      }
      if (DisplayName.Length != 0) {
        output.WriteRawTag(18);
        output.WriteString(DisplayName);
      }
      if (productLevelConfig_ != null) {
        output.WriteRawTag(34);
        output.WriteMessage(ProductLevelConfig);
      }
      if (_unknownFields != null) {
        _unknownFields.WriteTo(ref output);
      }
    }
    #endif

    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public int CalculateSize() {
      int size = 0;
      if (Name.Length != 0) {
        size += 1 + pb::CodedOutputStream.ComputeStringSize(Name);
      }
      if (DisplayName.Length != 0) {
        size += 1 + pb::CodedOutputStream.ComputeStringSize(DisplayName);
      }
      if (productLevelConfig_ != null) {
        size += 1 + pb::CodedOutputStream.ComputeMessageSize(ProductLevelConfig);
      }
      if (_unknownFields != null) {
        size += _unknownFields.CalculateSize();
      }
      return size;
    }

    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public void MergeFrom(Catalog other) {
      if (other == null) {
        return;
      }
      if (other.Name.Length != 0) {
        Name = other.Name;
      }
      if (other.DisplayName.Length != 0) {
        DisplayName = other.DisplayName;
      }
      if (other.productLevelConfig_ != null) {
        if (productLevelConfig_ == null) {
          ProductLevelConfig = new global::Google.Cloud.Retail.V2Beta.ProductLevelConfig();
        }
        ProductLevelConfig.MergeFrom(other.ProductLevelConfig);
      }
      _unknownFields = pb::UnknownFieldSet.MergeFrom(_unknownFields, other._unknownFields);
    }

    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public void MergeFrom(pb::CodedInputStream input) {
    #if !GOOGLE_PROTOBUF_REFSTRUCT_COMPATIBILITY_MODE
      input.ReadRawMessage(this);
    #else
      uint tag;
      while ((tag = input.ReadTag()) != 0) {
        switch(tag) {
          default:
            _unknownFields = pb::UnknownFieldSet.MergeFieldFrom(_unknownFields, input);
            break;
          case 10: {
            Name = input.ReadString();
            break;
          }
          case 18: {
            DisplayName = input.ReadString();
            break;
          }
          case 34: {
            if (productLevelConfig_ == null) {
              ProductLevelConfig = new global::Google.Cloud.Retail.V2Beta.ProductLevelConfig();
            }
            input.ReadMessage(ProductLevelConfig);
            break;
          }
        }
      }
    #endif
    }

    #if !GOOGLE_PROTOBUF_REFSTRUCT_COMPATIBILITY_MODE
    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    void pb::IBufferMessage.InternalMergeFrom(ref pb::ParseContext input) {
      uint tag;
      while ((tag = input.ReadTag()) != 0) {
        switch(tag) {
          default:
            _unknownFields = pb::UnknownFieldSet.MergeFieldFrom(_unknownFields, ref input);
            break;
          case 10: {
            Name = input.ReadString();
            break;
          }
          case 18: {
            DisplayName = input.ReadString();
            break;
          }
          case 34: {
            if (productLevelConfig_ == null) {
              ProductLevelConfig = new global::Google.Cloud.Retail.V2Beta.ProductLevelConfig();
            }
            input.ReadMessage(ProductLevelConfig);
            break;
          }
        }
      }
    }
    #endif

  }

  #endregion

}

#endregion Designer generated code
