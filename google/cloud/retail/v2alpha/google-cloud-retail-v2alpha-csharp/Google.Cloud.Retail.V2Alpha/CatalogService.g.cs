// <auto-generated>
//     Generated by the protocol buffer compiler.  DO NOT EDIT!
//     source: google/cloud/retail/v2alpha/catalog_service.proto
// </auto-generated>
#pragma warning disable 1591, 0612, 3021
#region Designer generated code

using pb = global::Google.Protobuf;
using pbc = global::Google.Protobuf.Collections;
using pbr = global::Google.Protobuf.Reflection;
using scg = global::System.Collections.Generic;
namespace Google.Cloud.Retail.V2Alpha {

  /// <summary>Holder for reflection information generated from google/cloud/retail/v2alpha/catalog_service.proto</summary>
  public static partial class CatalogServiceReflection {

    #region Descriptor
    /// <summary>File descriptor for google/cloud/retail/v2alpha/catalog_service.proto</summary>
    public static pbr::FileDescriptor Descriptor {
      get { return descriptor; }
    }
    private static pbr::FileDescriptor descriptor;

    static CatalogServiceReflection() {
      byte[] descriptorData = global::System.Convert.FromBase64String(
          string.Concat(
            "CjFnb29nbGUvY2xvdWQvcmV0YWlsL3YyYWxwaGEvY2F0YWxvZ19zZXJ2aWNl",
            "LnByb3RvEhtnb29nbGUuY2xvdWQucmV0YWlsLnYyYWxwaGEaHGdvb2dsZS9h",
            "cGkvYW5ub3RhdGlvbnMucHJvdG8aF2dvb2dsZS9hcGkvY2xpZW50LnByb3Rv",
            "Gh9nb29nbGUvYXBpL2ZpZWxkX2JlaGF2aW9yLnByb3RvGhlnb29nbGUvYXBp",
            "L3Jlc291cmNlLnByb3RvGilnb29nbGUvY2xvdWQvcmV0YWlsL3YyYWxwaGEv",
            "Y2F0YWxvZy5wcm90bxobZ29vZ2xlL3Byb3RvYnVmL2VtcHR5LnByb3RvGiBn",
            "b29nbGUvcHJvdG9idWYvZmllbGRfbWFzay5wcm90bxofZ29vZ2xlL3Byb3Rv",
            "YnVmL3RpbWVzdGFtcC5wcm90byJ3ChNMaXN0Q2F0YWxvZ3NSZXF1ZXN0EjkK",
            "BnBhcmVudBgBIAEoCUIp4EEC+kEjCiFsb2NhdGlvbnMuZ29vZ2xlYXBpcy5j",
            "b20vTG9jYXRpb24SEQoJcGFnZV9zaXplGAIgASgFEhIKCnBhZ2VfdG9rZW4Y",
            "AyABKAkiZwoUTGlzdENhdGFsb2dzUmVzcG9uc2USNgoIY2F0YWxvZ3MYASAD",
            "KAsyJC5nb29nbGUuY2xvdWQucmV0YWlsLnYyYWxwaGEuQ2F0YWxvZxIXCg9u",
            "ZXh0X3BhZ2VfdG9rZW4YAiABKAkigwEKFFVwZGF0ZUNhdGFsb2dSZXF1ZXN0",
            "EjoKB2NhdGFsb2cYASABKAsyJC5nb29nbGUuY2xvdWQucmV0YWlsLnYyYWxw",
            "aGEuQ2F0YWxvZ0ID4EECEi8KC3VwZGF0ZV9tYXNrGAIgASgLMhouZ29vZ2xl",
            "LnByb3RvYnVmLkZpZWxkTWFzazLiAwoOQ2F0YWxvZ1NlcnZpY2UStwEKDExp",
            "c3RDYXRhbG9ncxIwLmdvb2dsZS5jbG91ZC5yZXRhaWwudjJhbHBoYS5MaXN0",
            "Q2F0YWxvZ3NSZXF1ZXN0GjEuZ29vZ2xlLmNsb3VkLnJldGFpbC52MmFscGhh",
            "Lkxpc3RDYXRhbG9nc1Jlc3BvbnNlIkKC0+STAjMSMS92MmFscGhhL3twYXJl",
            "bnQ9cHJvamVjdHMvKi9sb2NhdGlvbnMvKn0vY2F0YWxvZ3PaQQZwYXJlbnQS",
            "ygEKDVVwZGF0ZUNhdGFsb2cSMS5nb29nbGUuY2xvdWQucmV0YWlsLnYyYWxw",
            "aGEuVXBkYXRlQ2F0YWxvZ1JlcXVlc3QaJC5nb29nbGUuY2xvdWQucmV0YWls",
            "LnYyYWxwaGEuQ2F0YWxvZyJggtPkkwJEMjkvdjJhbHBoYS97Y2F0YWxvZy5u",
            "YW1lPXByb2plY3RzLyovbG9jYXRpb25zLyovY2F0YWxvZ3MvKn06B2NhdGFs",
            "b2faQRNjYXRhbG9nLHVwZGF0ZV9tYXNrGknKQRVyZXRhaWwuZ29vZ2xlYXBp",
            "cy5jb23SQS5odHRwczovL3d3dy5nb29nbGVhcGlzLmNvbS9hdXRoL2Nsb3Vk",
            "LXBsYXRmb3JtQuEBCh9jb20uZ29vZ2xlLmNsb3VkLnJldGFpbC52MmFscGhh",
            "QhNDYXRhbG9nU2VydmljZVByb3RvUAFaQWdvb2dsZS5nb2xhbmcub3JnL2dl",
            "bnByb3RvL2dvb2dsZWFwaXMvY2xvdWQvcmV0YWlsL3YyYWxwaGE7cmV0YWls",
            "ogIGUkVUQUlMqgIbR29vZ2xlLkNsb3VkLlJldGFpbC5WMkFscGhhygIbR29v",
            "Z2xlXENsb3VkXFJldGFpbFxWMmFscGhh6gIeR29vZ2xlOjpDbG91ZDo6UmV0",
            "YWlsOjpWMmFscGhhYgZwcm90bzM="));
      descriptor = pbr::FileDescriptor.FromGeneratedCode(descriptorData,
          new pbr::FileDescriptor[] { global::Google.Api.AnnotationsReflection.Descriptor, global::Google.Api.ClientReflection.Descriptor, global::Google.Api.FieldBehaviorReflection.Descriptor, global::Google.Api.ResourceReflection.Descriptor, global::Google.Cloud.Retail.V2Alpha.CatalogReflection.Descriptor, global::Google.Protobuf.WellKnownTypes.EmptyReflection.Descriptor, global::Google.Protobuf.WellKnownTypes.FieldMaskReflection.Descriptor, global::Google.Protobuf.WellKnownTypes.TimestampReflection.Descriptor, },
          new pbr::GeneratedClrTypeInfo(null, null, new pbr::GeneratedClrTypeInfo[] {
            new pbr::GeneratedClrTypeInfo(typeof(global::Google.Cloud.Retail.V2Alpha.ListCatalogsRequest), global::Google.Cloud.Retail.V2Alpha.ListCatalogsRequest.Parser, new[]{ "Parent", "PageSize", "PageToken" }, null, null, null, null),
            new pbr::GeneratedClrTypeInfo(typeof(global::Google.Cloud.Retail.V2Alpha.ListCatalogsResponse), global::Google.Cloud.Retail.V2Alpha.ListCatalogsResponse.Parser, new[]{ "Catalogs", "NextPageToken" }, null, null, null, null),
            new pbr::GeneratedClrTypeInfo(typeof(global::Google.Cloud.Retail.V2Alpha.UpdateCatalogRequest), global::Google.Cloud.Retail.V2Alpha.UpdateCatalogRequest.Parser, new[]{ "Catalog", "UpdateMask" }, null, null, null, null)
          }));
    }
    #endregion

  }
  #region Messages
  /// <summary>
  /// Request for
  /// [CatalogService.ListCatalogs][google.cloud.retail.v2alpha.CatalogService.ListCatalogs]
  /// method.
  /// </summary>
  public sealed partial class ListCatalogsRequest : pb::IMessage<ListCatalogsRequest>
  #if !GOOGLE_PROTOBUF_REFSTRUCT_COMPATIBILITY_MODE
      , pb::IBufferMessage
  #endif
  {
    private static readonly pb::MessageParser<ListCatalogsRequest> _parser = new pb::MessageParser<ListCatalogsRequest>(() => new ListCatalogsRequest());
    private pb::UnknownFieldSet _unknownFields;
    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public static pb::MessageParser<ListCatalogsRequest> Parser { get { return _parser; } }

    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public static pbr::MessageDescriptor Descriptor {
      get { return global::Google.Cloud.Retail.V2Alpha.CatalogServiceReflection.Descriptor.MessageTypes[0]; }
    }

    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    pbr::MessageDescriptor pb::IMessage.Descriptor {
      get { return Descriptor; }
    }

    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public ListCatalogsRequest() {
      OnConstruction();
    }

    partial void OnConstruction();

    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public ListCatalogsRequest(ListCatalogsRequest other) : this() {
      parent_ = other.parent_;
      pageSize_ = other.pageSize_;
      pageToken_ = other.pageToken_;
      _unknownFields = pb::UnknownFieldSet.Clone(other._unknownFields);
    }

    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public ListCatalogsRequest Clone() {
      return new ListCatalogsRequest(this);
    }

    /// <summary>Field number for the "parent" field.</summary>
    public const int ParentFieldNumber = 1;
    private string parent_ = "";
    /// <summary>
    /// Required. The account resource name with an associated location.
    ///
    /// If the caller does not have permission to list
    /// [Catalog][google.cloud.retail.v2alpha.Catalog]s under this location,
    /// regardless of whether or not this location exists, a PERMISSION_DENIED
    /// error is returned.
    /// </summary>
    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public string Parent {
      get { return parent_; }
      set {
        parent_ = pb::ProtoPreconditions.CheckNotNull(value, "value");
      }
    }

    /// <summary>Field number for the "page_size" field.</summary>
    public const int PageSizeFieldNumber = 2;
    private int pageSize_;
    /// <summary>
    /// Maximum number of [Catalog][google.cloud.retail.v2alpha.Catalog]s to
    /// return. If unspecified, defaults to 50. The maximum allowed value is 1000.
    /// Values above 1000 will be coerced to 1000.
    ///
    /// If this field is negative, an INVALID_ARGUMENT is returned.
    /// </summary>
    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public int PageSize {
      get { return pageSize_; }
      set {
        pageSize_ = value;
      }
    }

    /// <summary>Field number for the "page_token" field.</summary>
    public const int PageTokenFieldNumber = 3;
    private string pageToken_ = "";
    /// <summary>
    /// A page token
    /// [ListCatalogsResponse.next_page_token][google.cloud.retail.v2alpha.ListCatalogsResponse.next_page_token],
    /// received from a previous
    /// [CatalogService.ListCatalogs][google.cloud.retail.v2alpha.CatalogService.ListCatalogs]
    /// call. Provide this to retrieve the subsequent page.
    ///
    /// When paginating, all other parameters provided to
    /// [CatalogService.ListCatalogs][google.cloud.retail.v2alpha.CatalogService.ListCatalogs]
    /// must match the call that provided the page token. Otherwise, an
    /// INVALID_ARGUMENT error is returned.
    /// </summary>
    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public string PageToken {
      get { return pageToken_; }
      set {
        pageToken_ = pb::ProtoPreconditions.CheckNotNull(value, "value");
      }
    }

    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public override bool Equals(object other) {
      return Equals(other as ListCatalogsRequest);
    }

    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public bool Equals(ListCatalogsRequest other) {
      if (ReferenceEquals(other, null)) {
        return false;
      }
      if (ReferenceEquals(other, this)) {
        return true;
      }
      if (Parent != other.Parent) return false;
      if (PageSize != other.PageSize) return false;
      if (PageToken != other.PageToken) return false;
      return Equals(_unknownFields, other._unknownFields);
    }

    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public override int GetHashCode() {
      int hash = 1;
      if (Parent.Length != 0) hash ^= Parent.GetHashCode();
      if (PageSize != 0) hash ^= PageSize.GetHashCode();
      if (PageToken.Length != 0) hash ^= PageToken.GetHashCode();
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
      if (Parent.Length != 0) {
        output.WriteRawTag(10);
        output.WriteString(Parent);
      }
      if (PageSize != 0) {
        output.WriteRawTag(16);
        output.WriteInt32(PageSize);
      }
      if (PageToken.Length != 0) {
        output.WriteRawTag(26);
        output.WriteString(PageToken);
      }
      if (_unknownFields != null) {
        _unknownFields.WriteTo(output);
      }
    #endif
    }

    #if !GOOGLE_PROTOBUF_REFSTRUCT_COMPATIBILITY_MODE
    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    void pb::IBufferMessage.InternalWriteTo(ref pb::WriteContext output) {
      if (Parent.Length != 0) {
        output.WriteRawTag(10);
        output.WriteString(Parent);
      }
      if (PageSize != 0) {
        output.WriteRawTag(16);
        output.WriteInt32(PageSize);
      }
      if (PageToken.Length != 0) {
        output.WriteRawTag(26);
        output.WriteString(PageToken);
      }
      if (_unknownFields != null) {
        _unknownFields.WriteTo(ref output);
      }
    }
    #endif

    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public int CalculateSize() {
      int size = 0;
      if (Parent.Length != 0) {
        size += 1 + pb::CodedOutputStream.ComputeStringSize(Parent);
      }
      if (PageSize != 0) {
        size += 1 + pb::CodedOutputStream.ComputeInt32Size(PageSize);
      }
      if (PageToken.Length != 0) {
        size += 1 + pb::CodedOutputStream.ComputeStringSize(PageToken);
      }
      if (_unknownFields != null) {
        size += _unknownFields.CalculateSize();
      }
      return size;
    }

    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public void MergeFrom(ListCatalogsRequest other) {
      if (other == null) {
        return;
      }
      if (other.Parent.Length != 0) {
        Parent = other.Parent;
      }
      if (other.PageSize != 0) {
        PageSize = other.PageSize;
      }
      if (other.PageToken.Length != 0) {
        PageToken = other.PageToken;
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
            Parent = input.ReadString();
            break;
          }
          case 16: {
            PageSize = input.ReadInt32();
            break;
          }
          case 26: {
            PageToken = input.ReadString();
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
            Parent = input.ReadString();
            break;
          }
          case 16: {
            PageSize = input.ReadInt32();
            break;
          }
          case 26: {
            PageToken = input.ReadString();
            break;
          }
        }
      }
    }
    #endif

  }

  /// <summary>
  /// Response for
  /// [CatalogService.ListCatalogs][google.cloud.retail.v2alpha.CatalogService.ListCatalogs]
  /// method.
  /// </summary>
  public sealed partial class ListCatalogsResponse : pb::IMessage<ListCatalogsResponse>
  #if !GOOGLE_PROTOBUF_REFSTRUCT_COMPATIBILITY_MODE
      , pb::IBufferMessage
  #endif
  {
    private static readonly pb::MessageParser<ListCatalogsResponse> _parser = new pb::MessageParser<ListCatalogsResponse>(() => new ListCatalogsResponse());
    private pb::UnknownFieldSet _unknownFields;
    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public static pb::MessageParser<ListCatalogsResponse> Parser { get { return _parser; } }

    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public static pbr::MessageDescriptor Descriptor {
      get { return global::Google.Cloud.Retail.V2Alpha.CatalogServiceReflection.Descriptor.MessageTypes[1]; }
    }

    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    pbr::MessageDescriptor pb::IMessage.Descriptor {
      get { return Descriptor; }
    }

    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public ListCatalogsResponse() {
      OnConstruction();
    }

    partial void OnConstruction();

    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public ListCatalogsResponse(ListCatalogsResponse other) : this() {
      catalogs_ = other.catalogs_.Clone();
      nextPageToken_ = other.nextPageToken_;
      _unknownFields = pb::UnknownFieldSet.Clone(other._unknownFields);
    }

    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public ListCatalogsResponse Clone() {
      return new ListCatalogsResponse(this);
    }

    /// <summary>Field number for the "catalogs" field.</summary>
    public const int CatalogsFieldNumber = 1;
    private static readonly pb::FieldCodec<global::Google.Cloud.Retail.V2Alpha.Catalog> _repeated_catalogs_codec
        = pb::FieldCodec.ForMessage(10, global::Google.Cloud.Retail.V2Alpha.Catalog.Parser);
    private readonly pbc::RepeatedField<global::Google.Cloud.Retail.V2Alpha.Catalog> catalogs_ = new pbc::RepeatedField<global::Google.Cloud.Retail.V2Alpha.Catalog>();
    /// <summary>
    /// All the customer's [Catalog][google.cloud.retail.v2alpha.Catalog]s.
    /// </summary>
    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public pbc::RepeatedField<global::Google.Cloud.Retail.V2Alpha.Catalog> Catalogs {
      get { return catalogs_; }
    }

    /// <summary>Field number for the "next_page_token" field.</summary>
    public const int NextPageTokenFieldNumber = 2;
    private string nextPageToken_ = "";
    /// <summary>
    /// A token that can be sent as
    /// [ListCatalogsRequest.page_token][google.cloud.retail.v2alpha.ListCatalogsRequest.page_token]
    /// to retrieve the next page. If this field is omitted, there are no
    /// subsequent pages.
    /// </summary>
    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public string NextPageToken {
      get { return nextPageToken_; }
      set {
        nextPageToken_ = pb::ProtoPreconditions.CheckNotNull(value, "value");
      }
    }

    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public override bool Equals(object other) {
      return Equals(other as ListCatalogsResponse);
    }

    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public bool Equals(ListCatalogsResponse other) {
      if (ReferenceEquals(other, null)) {
        return false;
      }
      if (ReferenceEquals(other, this)) {
        return true;
      }
      if(!catalogs_.Equals(other.catalogs_)) return false;
      if (NextPageToken != other.NextPageToken) return false;
      return Equals(_unknownFields, other._unknownFields);
    }

    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public override int GetHashCode() {
      int hash = 1;
      hash ^= catalogs_.GetHashCode();
      if (NextPageToken.Length != 0) hash ^= NextPageToken.GetHashCode();
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
      catalogs_.WriteTo(output, _repeated_catalogs_codec);
      if (NextPageToken.Length != 0) {
        output.WriteRawTag(18);
        output.WriteString(NextPageToken);
      }
      if (_unknownFields != null) {
        _unknownFields.WriteTo(output);
      }
    #endif
    }

    #if !GOOGLE_PROTOBUF_REFSTRUCT_COMPATIBILITY_MODE
    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    void pb::IBufferMessage.InternalWriteTo(ref pb::WriteContext output) {
      catalogs_.WriteTo(ref output, _repeated_catalogs_codec);
      if (NextPageToken.Length != 0) {
        output.WriteRawTag(18);
        output.WriteString(NextPageToken);
      }
      if (_unknownFields != null) {
        _unknownFields.WriteTo(ref output);
      }
    }
    #endif

    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public int CalculateSize() {
      int size = 0;
      size += catalogs_.CalculateSize(_repeated_catalogs_codec);
      if (NextPageToken.Length != 0) {
        size += 1 + pb::CodedOutputStream.ComputeStringSize(NextPageToken);
      }
      if (_unknownFields != null) {
        size += _unknownFields.CalculateSize();
      }
      return size;
    }

    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public void MergeFrom(ListCatalogsResponse other) {
      if (other == null) {
        return;
      }
      catalogs_.Add(other.catalogs_);
      if (other.NextPageToken.Length != 0) {
        NextPageToken = other.NextPageToken;
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
            catalogs_.AddEntriesFrom(input, _repeated_catalogs_codec);
            break;
          }
          case 18: {
            NextPageToken = input.ReadString();
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
            catalogs_.AddEntriesFrom(ref input, _repeated_catalogs_codec);
            break;
          }
          case 18: {
            NextPageToken = input.ReadString();
            break;
          }
        }
      }
    }
    #endif

  }

  /// <summary>
  /// Request for
  /// [CatalogService.UpdateCatalog][google.cloud.retail.v2alpha.CatalogService.UpdateCatalog]
  /// method.
  /// </summary>
  public sealed partial class UpdateCatalogRequest : pb::IMessage<UpdateCatalogRequest>
  #if !GOOGLE_PROTOBUF_REFSTRUCT_COMPATIBILITY_MODE
      , pb::IBufferMessage
  #endif
  {
    private static readonly pb::MessageParser<UpdateCatalogRequest> _parser = new pb::MessageParser<UpdateCatalogRequest>(() => new UpdateCatalogRequest());
    private pb::UnknownFieldSet _unknownFields;
    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public static pb::MessageParser<UpdateCatalogRequest> Parser { get { return _parser; } }

    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public static pbr::MessageDescriptor Descriptor {
      get { return global::Google.Cloud.Retail.V2Alpha.CatalogServiceReflection.Descriptor.MessageTypes[2]; }
    }

    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    pbr::MessageDescriptor pb::IMessage.Descriptor {
      get { return Descriptor; }
    }

    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public UpdateCatalogRequest() {
      OnConstruction();
    }

    partial void OnConstruction();

    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public UpdateCatalogRequest(UpdateCatalogRequest other) : this() {
      catalog_ = other.catalog_ != null ? other.catalog_.Clone() : null;
      updateMask_ = other.updateMask_ != null ? other.updateMask_.Clone() : null;
      _unknownFields = pb::UnknownFieldSet.Clone(other._unknownFields);
    }

    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public UpdateCatalogRequest Clone() {
      return new UpdateCatalogRequest(this);
    }

    /// <summary>Field number for the "catalog" field.</summary>
    public const int CatalogFieldNumber = 1;
    private global::Google.Cloud.Retail.V2Alpha.Catalog catalog_;
    /// <summary>
    /// Required. The [Catalog][google.cloud.retail.v2alpha.Catalog] to update.
    ///
    /// If the caller does not have permission to update the
    /// [Catalog][google.cloud.retail.v2alpha.Catalog], regardless of whether or
    /// not it exists, a PERMISSION_DENIED error is returned.
    ///
    /// If the [Catalog][google.cloud.retail.v2alpha.Catalog] to update does not
    /// exist, a NOT_FOUND error is returned.
    /// </summary>
    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public global::Google.Cloud.Retail.V2Alpha.Catalog Catalog {
      get { return catalog_; }
      set {
        catalog_ = value;
      }
    }

    /// <summary>Field number for the "update_mask" field.</summary>
    public const int UpdateMaskFieldNumber = 2;
    private global::Google.Protobuf.WellKnownTypes.FieldMask updateMask_;
    /// <summary>
    /// Indicates which fields in the provided
    /// [Catalog][google.cloud.retail.v2alpha.Catalog] to update. If not set, will
    /// only update the
    /// [Catalog.product_level_config][google.cloud.retail.v2alpha.Catalog.product_level_config]
    /// field, which is also the only currently supported field to update.
    ///
    /// If an unsupported or unknown field is provided, an INVALID_ARGUMENT error
    /// is returned.
    /// </summary>
    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public global::Google.Protobuf.WellKnownTypes.FieldMask UpdateMask {
      get { return updateMask_; }
      set {
        updateMask_ = value;
      }
    }

    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public override bool Equals(object other) {
      return Equals(other as UpdateCatalogRequest);
    }

    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public bool Equals(UpdateCatalogRequest other) {
      if (ReferenceEquals(other, null)) {
        return false;
      }
      if (ReferenceEquals(other, this)) {
        return true;
      }
      if (!object.Equals(Catalog, other.Catalog)) return false;
      if (!object.Equals(UpdateMask, other.UpdateMask)) return false;
      return Equals(_unknownFields, other._unknownFields);
    }

    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public override int GetHashCode() {
      int hash = 1;
      if (catalog_ != null) hash ^= Catalog.GetHashCode();
      if (updateMask_ != null) hash ^= UpdateMask.GetHashCode();
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
      if (catalog_ != null) {
        output.WriteRawTag(10);
        output.WriteMessage(Catalog);
      }
      if (updateMask_ != null) {
        output.WriteRawTag(18);
        output.WriteMessage(UpdateMask);
      }
      if (_unknownFields != null) {
        _unknownFields.WriteTo(output);
      }
    #endif
    }

    #if !GOOGLE_PROTOBUF_REFSTRUCT_COMPATIBILITY_MODE
    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    void pb::IBufferMessage.InternalWriteTo(ref pb::WriteContext output) {
      if (catalog_ != null) {
        output.WriteRawTag(10);
        output.WriteMessage(Catalog);
      }
      if (updateMask_ != null) {
        output.WriteRawTag(18);
        output.WriteMessage(UpdateMask);
      }
      if (_unknownFields != null) {
        _unknownFields.WriteTo(ref output);
      }
    }
    #endif

    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public int CalculateSize() {
      int size = 0;
      if (catalog_ != null) {
        size += 1 + pb::CodedOutputStream.ComputeMessageSize(Catalog);
      }
      if (updateMask_ != null) {
        size += 1 + pb::CodedOutputStream.ComputeMessageSize(UpdateMask);
      }
      if (_unknownFields != null) {
        size += _unknownFields.CalculateSize();
      }
      return size;
    }

    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public void MergeFrom(UpdateCatalogRequest other) {
      if (other == null) {
        return;
      }
      if (other.catalog_ != null) {
        if (catalog_ == null) {
          Catalog = new global::Google.Cloud.Retail.V2Alpha.Catalog();
        }
        Catalog.MergeFrom(other.Catalog);
      }
      if (other.updateMask_ != null) {
        if (updateMask_ == null) {
          UpdateMask = new global::Google.Protobuf.WellKnownTypes.FieldMask();
        }
        UpdateMask.MergeFrom(other.UpdateMask);
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
            if (catalog_ == null) {
              Catalog = new global::Google.Cloud.Retail.V2Alpha.Catalog();
            }
            input.ReadMessage(Catalog);
            break;
          }
          case 18: {
            if (updateMask_ == null) {
              UpdateMask = new global::Google.Protobuf.WellKnownTypes.FieldMask();
            }
            input.ReadMessage(UpdateMask);
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
            if (catalog_ == null) {
              Catalog = new global::Google.Cloud.Retail.V2Alpha.Catalog();
            }
            input.ReadMessage(Catalog);
            break;
          }
          case 18: {
            if (updateMask_ == null) {
              UpdateMask = new global::Google.Protobuf.WellKnownTypes.FieldMask();
            }
            input.ReadMessage(UpdateMask);
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
