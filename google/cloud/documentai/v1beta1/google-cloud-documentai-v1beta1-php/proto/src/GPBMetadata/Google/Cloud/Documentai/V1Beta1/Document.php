<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/documentai/v1beta1/document.proto

namespace GPBMetadata\Google\Cloud\Documentai\V1Beta1;

class Document
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Cloud\Documentai\V1Beta1\Geometry::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        \GPBMetadata\Google\Type\Color::initOnce();
        $pool->internalAddGeneratedFile(
            '
�(
.google/cloud/documentai/v1beta1/document.protogoogle.cloud.documentai.v1beta1.google/cloud/documentai/v1beta1/geometry.protogoogle/rpc/status.protogoogle/type/color.proto"�$
Document
uri (	H 
content (H 
	mime_type (	
text (	D
text_styles (2/.google.cloud.documentai.v1beta1.Document.Style=
pages (2..google.cloud.documentai.v1beta1.Document.PageB
entities (20.google.cloud.documentai.v1beta1.Document.EntityR
entity_relations (28.google.cloud.documentai.v1beta1.Document.EntityRelationG

shard_info	 (23.google.cloud.documentai.v1beta1.Document.ShardInfo!
error
 (2.google.rpc.StatusJ
	ShardInfo
shard_index (
shard_count (
text_offset (�
StyleI
text_anchor (24.google.cloud.documentai.v1beta1.Document.TextAnchor!
color (2.google.type.Color,
background_color (2.google.type.Color
font_weight (	

text_style (	
text_decoration (	K
	font_size (28.google.cloud.documentai.v1beta1.Document.Style.FontSize&
FontSize
size (
unit (	�
Page
page_number (K
	dimension (28.google.cloud.documentai.v1beta1.Document.Page.DimensionE
layout (25.google.cloud.documentai.v1beta1.Document.Page.Layout[
detected_languages (2?.google.cloud.documentai.v1beta1.Document.Page.DetectedLanguageD
blocks (24.google.cloud.documentai.v1beta1.Document.Page.BlockL

paragraphs (28.google.cloud.documentai.v1beta1.Document.Page.ParagraphB
lines (23.google.cloud.documentai.v1beta1.Document.Page.LineD
tokens (24.google.cloud.documentai.v1beta1.Document.Page.TokenU
visual_elements	 (2<.google.cloud.documentai.v1beta1.Document.Page.VisualElementD
tables
 (24.google.cloud.documentai.v1beta1.Document.Page.TableM
form_fields (28.google.cloud.documentai.v1beta1.Document.Page.FormField8
	Dimension
width (
height (
unit (	�
LayoutI
text_anchor (24.google.cloud.documentai.v1beta1.Document.TextAnchor

confidence (D
bounding_poly (2-.google.cloud.documentai.v1beta1.BoundingPolyV
orientation (2A.google.cloud.documentai.v1beta1.Document.Page.Layout.Orientation"e
Orientation
ORIENTATION_UNSPECIFIED 
PAGE_UP

PAGE_RIGHT
	PAGE_DOWN
	PAGE_LEFT�
BlockE
layout (25.google.cloud.documentai.v1beta1.Document.Page.Layout[
detected_languages (2?.google.cloud.documentai.v1beta1.Document.Page.DetectedLanguage�
	ParagraphE
layout (25.google.cloud.documentai.v1beta1.Document.Page.Layout[
detected_languages (2?.google.cloud.documentai.v1beta1.Document.Page.DetectedLanguage�
LineE
layout (25.google.cloud.documentai.v1beta1.Document.Page.Layout[
detected_languages (2?.google.cloud.documentai.v1beta1.Document.Page.DetectedLanguage�
TokenE
layout (25.google.cloud.documentai.v1beta1.Document.Page.LayoutZ
detected_break (2B.google.cloud.documentai.v1beta1.Document.Page.Token.DetectedBreak[
detected_languages (2?.google.cloud.documentai.v1beta1.Document.Page.DetectedLanguage�
DetectedBreakU
type (2G.google.cloud.documentai.v1beta1.Document.Page.Token.DetectedBreak.Type"C
Type
TYPE_UNSPECIFIED 	
SPACE

WIDE_SPACE

HYPHEN�
VisualElementE
layout (25.google.cloud.documentai.v1beta1.Document.Page.Layout
type (	[
detected_languages (2?.google.cloud.documentai.v1beta1.Document.Page.DetectedLanguage�
TableE
layout (25.google.cloud.documentai.v1beta1.Document.Page.LayoutR
header_rows (2=.google.cloud.documentai.v1beta1.Document.Page.Table.TableRowP
	body_rows (2=.google.cloud.documentai.v1beta1.Document.Page.Table.TableRow[
detected_languages (2?.google.cloud.documentai.v1beta1.Document.Page.DetectedLanguageY
TableRowM
cells (2>.google.cloud.documentai.v1beta1.Document.Page.Table.TableCell�
	TableCellE
layout (25.google.cloud.documentai.v1beta1.Document.Page.Layout
row_span (
col_span ([
detected_languages (2?.google.cloud.documentai.v1beta1.Document.Page.DetectedLanguage�
	FormFieldI

field_name (25.google.cloud.documentai.v1beta1.Document.Page.LayoutJ
field_value (25.google.cloud.documentai.v1beta1.Document.Page.Layout`
name_detected_languages (2?.google.cloud.documentai.v1beta1.Document.Page.DetectedLanguagea
value_detected_languages (2?.google.cloud.documentai.v1beta1.Document.Page.DetectedLanguage=
DetectedLanguage
language_code (	

confidence (�
EntityI
text_anchor (24.google.cloud.documentai.v1beta1.Document.TextAnchor
type (	
mention_text (	

mention_id (	I
EntityRelation

subject_id (	
	object_id (	
relation (	�

TextAnchorW
text_segments (2@.google.cloud.documentai.v1beta1.Document.TextAnchor.TextSegment5
TextSegment
start_index (
	end_index (B
sourceB�
#com.google.cloud.documentai.v1beta1BDocumentProtoPZIgoogle.golang.org/genproto/googleapis/cloud/documentai/v1beta1;documentai�Google.Cloud.DocumentAI.V1Beta1�Google\\Cloud\\DocumentAI\\V1beta1�"Google::Cloud::DocumentAI::V1beta1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

