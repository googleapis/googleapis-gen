<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1p2beta1/text_annotation.proto

namespace GPBMetadata\Google\Cloud\Vision\V1P2Beta1;

class TextAnnotation
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Cloud\Vision\V1P2Beta1\Geometry::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
3google/cloud/vision/v1p2beta1/text_annotation.protogoogle.cloud.vision.v1p2beta1,google/cloud/vision/v1p2beta1/geometry.proto"�
TextAnnotation2
pages (2#.google.cloud.vision.v1p2beta1.Page
text (	=
DetectedLanguage
language_code (	

confidence (�
DetectedBreakS
type (2E.google.cloud.vision.v1p2beta1.TextAnnotation.DetectedBreak.BreakType
	is_prefix ("c
	BreakType
UNKNOWN 	
SPACE

SURE_SPACE
EOL_SURE_SPACE

HYPHEN

LINE_BREAK�
TextPropertyZ
detected_languages (2>.google.cloud.vision.v1p2beta1.TextAnnotation.DetectedLanguageS
detected_break (2;.google.cloud.vision.v1p2beta1.TextAnnotation.DetectedBreak"�
PageL
property (2:.google.cloud.vision.v1p2beta1.TextAnnotation.TextProperty
width (
height (4
blocks (2$.google.cloud.vision.v1p2beta1.Block

confidence ("�
BlockL
property (2:.google.cloud.vision.v1p2beta1.TextAnnotation.TextPropertyA
bounding_box (2+.google.cloud.vision.v1p2beta1.BoundingPoly<

paragraphs (2(.google.cloud.vision.v1p2beta1.ParagraphB

block_type (2..google.cloud.vision.v1p2beta1.Block.BlockType

confidence ("R
	BlockType
UNKNOWN 
TEXT	
TABLE
PICTURE	
RULER
BARCODE"�
	ParagraphL
property (2:.google.cloud.vision.v1p2beta1.TextAnnotation.TextPropertyA
bounding_box (2+.google.cloud.vision.v1p2beta1.BoundingPoly2
words (2#.google.cloud.vision.v1p2beta1.Word

confidence ("�
WordL
property (2:.google.cloud.vision.v1p2beta1.TextAnnotation.TextPropertyA
bounding_box (2+.google.cloud.vision.v1p2beta1.BoundingPoly6
symbols (2%.google.cloud.vision.v1p2beta1.Symbol

confidence ("�
SymbolL
property (2:.google.cloud.vision.v1p2beta1.TextAnnotation.TextPropertyA
bounding_box (2+.google.cloud.vision.v1p2beta1.BoundingPoly
text (	

confidence (B�
!com.google.cloud.vision.v1p2beta1BTextAnnotationProtoPZCgoogle.golang.org/genproto/googleapis/cloud/vision/v1p2beta1;vision�bproto3'
        , true);

        static::$is_initialized = true;
    }
}

