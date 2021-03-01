<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/documentai/v1/document.proto

namespace GPBMetadata\Google\Cloud\Documentai\V1;

class Document
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Cloud\Documentai\V1\Geometry::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        \GPBMetadata\Google\Type\Color::initOnce();
        \GPBMetadata\Google\Type\Date::initOnce();
        \GPBMetadata\Google\Type\Datetime::initOnce();
        \GPBMetadata\Google\Type\Money::initOnce();
        \GPBMetadata\Google\Type\PostalAddress::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�>
)google/cloud/documentai/v1/document.protogoogle.cloud.documentai.v1)google/cloud/documentai/v1/geometry.protogoogle/protobuf/timestamp.protogoogle/rpc/status.protogoogle/type/color.protogoogle/type/date.protogoogle/type/datetime.protogoogle/type/money.proto google/type/postal_address.protogoogle/api/annotations.proto"�9
Document
uri (	H 
content (H 
	mime_type (	
text (	?
text_styles (2*.google.cloud.documentai.v1.Document.Style8
pages (2).google.cloud.documentai.v1.Document.Page=
entities (2+.google.cloud.documentai.v1.Document.EntityM
entity_relations (23.google.cloud.documentai.v1.Document.EntityRelationF
translations (20.google.cloud.documentai.v1.Document.TranslationE
text_changes (2/.google.cloud.documentai.v1.Document.TextChangeB

shard_info	 (2..google.cloud.documentai.v1.Document.ShardInfo!
error
 (2.google.rpc.Status@
	revisions (2-.google.cloud.documentai.v1.Document.RevisionJ
	ShardInfo
shard_index (
shard_count (
text_offset (�
StyleD
text_anchor (2/.google.cloud.documentai.v1.Document.TextAnchor!
color (2.google.type.Color,
background_color (2.google.type.Color
font_weight (	

text_style (	
text_decoration (	F
	font_size (23.google.cloud.documentai.v1.Document.Style.FontSize&
FontSize
size (
unit (	�
Page
page_number (>
image (2/.google.cloud.documentai.v1.Document.Page.ImageD

transforms (20.google.cloud.documentai.v1.Document.Page.MatrixF
	dimension (23.google.cloud.documentai.v1.Document.Page.Dimension@
layout (20.google.cloud.documentai.v1.Document.Page.LayoutV
detected_languages (2:.google.cloud.documentai.v1.Document.Page.DetectedLanguage?
blocks (2/.google.cloud.documentai.v1.Document.Page.BlockG

paragraphs (23.google.cloud.documentai.v1.Document.Page.Paragraph=
lines (2..google.cloud.documentai.v1.Document.Page.Line?
tokens (2/.google.cloud.documentai.v1.Document.Page.TokenP
visual_elements	 (27.google.cloud.documentai.v1.Document.Page.VisualElement?
tables
 (2/.google.cloud.documentai.v1.Document.Page.TableH
form_fields (23.google.cloud.documentai.v1.Document.Page.FormField8
	Dimension
width (
height (
unit (	J
Image
content (
	mime_type (	
width (
height (@
Matrix
rows (
cols (
type (
data (�
LayoutD
text_anchor (2/.google.cloud.documentai.v1.Document.TextAnchor

confidence (?
bounding_poly (2(.google.cloud.documentai.v1.BoundingPolyQ
orientation (2<.google.cloud.documentai.v1.Document.Page.Layout.Orientation"e
Orientation
ORIENTATION_UNSPECIFIED 
PAGE_UP

PAGE_RIGHT
	PAGE_DOWN
	PAGE_LEFT�
Block@
layout (20.google.cloud.documentai.v1.Document.Page.LayoutV
detected_languages (2:.google.cloud.documentai.v1.Document.Page.DetectedLanguageC

provenance (2/.google.cloud.documentai.v1.Document.Provenance�
	Paragraph@
layout (20.google.cloud.documentai.v1.Document.Page.LayoutV
detected_languages (2:.google.cloud.documentai.v1.Document.Page.DetectedLanguageC

provenance (2/.google.cloud.documentai.v1.Document.Provenance�
Line@
layout (20.google.cloud.documentai.v1.Document.Page.LayoutV
detected_languages (2:.google.cloud.documentai.v1.Document.Page.DetectedLanguageC

provenance (2/.google.cloud.documentai.v1.Document.Provenance�
Token@
layout (20.google.cloud.documentai.v1.Document.Page.LayoutU
detected_break (2=.google.cloud.documentai.v1.Document.Page.Token.DetectedBreakV
detected_languages (2:.google.cloud.documentai.v1.Document.Page.DetectedLanguageC

provenance (2/.google.cloud.documentai.v1.Document.Provenance�
DetectedBreakP
type (2B.google.cloud.documentai.v1.Document.Page.Token.DetectedBreak.Type"C
Type
TYPE_UNSPECIFIED 	
SPACE

WIDE_SPACE

HYPHEN�
VisualElement@
layout (20.google.cloud.documentai.v1.Document.Page.Layout
type (	V
detected_languages (2:.google.cloud.documentai.v1.Document.Page.DetectedLanguage�
Table@
layout (20.google.cloud.documentai.v1.Document.Page.LayoutM
header_rows (28.google.cloud.documentai.v1.Document.Page.Table.TableRowK
	body_rows (28.google.cloud.documentai.v1.Document.Page.Table.TableRowV
detected_languages (2:.google.cloud.documentai.v1.Document.Page.DetectedLanguageT
TableRowH
cells (29.google.cloud.documentai.v1.Document.Page.Table.TableCell�
	TableCell@
layout (20.google.cloud.documentai.v1.Document.Page.Layout
row_span (
col_span (V
detected_languages (2:.google.cloud.documentai.v1.Document.Page.DetectedLanguage�
	FormFieldD

field_name (20.google.cloud.documentai.v1.Document.Page.LayoutE
field_value (20.google.cloud.documentai.v1.Document.Page.Layout[
name_detected_languages (2:.google.cloud.documentai.v1.Document.Page.DetectedLanguage\\
value_detected_languages (2:.google.cloud.documentai.v1.Document.Page.DetectedLanguage

value_type (	=
DetectedLanguage
language_code (	

confidence (�
EntityD
text_anchor (2/.google.cloud.documentai.v1.Document.TextAnchor
type (	
mention_text (	

mention_id (	

confidence (B�AI
page_anchor (2/.google.cloud.documentai.v1.Document.PageAnchorB�A
id (	B�AZ
normalized_value	 (2;.google.cloud.documentai.v1.Document.Entity.NormalizedValueB�AD

properties
 (2+.google.cloud.documentai.v1.Document.EntityB�AH

provenance (2/.google.cloud.documentai.v1.Document.ProvenanceB�A
redacted (B�A�
NormalizedValue)
money_value (2.google.type.MoneyH \'

date_value (2.google.type.DateH /
datetime_value (2.google.type.DateTimeH 3
address_value (2.google.type.PostalAddressH 
boolean_value (H 
text (	B�AB
structured_valueI
EntityRelation

subject_id (	
	object_id (	
relation (	�
TranslationD
text_anchor (2/.google.cloud.documentai.v1.Document.TextAnchor
language_code (	
translated_text (	C

provenance (2/.google.cloud.documentai.v1.Document.Provenance�

TextAnchorR
text_segments (2;.google.cloud.documentai.v1.Document.TextAnchor.TextSegment
content (	5
TextSegment
start_index (
	end_index (�

PageAnchorJ
	page_refs (27.google.cloud.documentai.v1.Document.PageAnchor.PageRef�
PageRef
page (B�A\\
layout_type (2B.google.cloud.documentai.v1.Document.PageAnchor.PageRef.LayoutTypeB�A
	layout_id (	B�AD
bounding_poly (2(.google.cloud.documentai.v1.BoundingPolyB�A"�

LayoutType
LAYOUT_TYPE_UNSPECIFIED 	
BLOCK
	PARAGRAPH
LINE	
TOKEN
VISUAL_ELEMENT	
TABLE

FORM_FIELD�

Provenance
revision (

id (G
parents (26.google.cloud.documentai.v1.Document.Provenance.ParentK
type (2=.google.cloud.documentai.v1.Document.Provenance.OperationType&
Parent
revision (

id ("x
OperationType
OPERATION_TYPE_UNSPECIFIED 
ADD

REMOVE
REPLACE
EVAL_REQUESTED
EVAL_APPROVED�
Revision
agent (	H 
	processor (	H 

id (	
parent (/
create_time (2.google.protobuf.TimestampO
human_review (29.google.cloud.documentai.v1.Document.Revision.HumanReview3
HumanReview
state (	
state_message (	B
source�

TextChangeD
text_anchor (2/.google.cloud.documentai.v1.Document.TextAnchor
changed_text (	C

provenance (2/.google.cloud.documentai.v1.Document.ProvenanceB
sourceB�
com.google.cloud.documentai.v1BDocumentProtoPZDgoogle.golang.org/genproto/googleapis/cloud/documentai/v1;documentai�Google.Cloud.DocumentAI.V1�Google\\Cloud\\DocumentAI\\V1�Google::Cloud::DocumentAI::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

