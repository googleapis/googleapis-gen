<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/translate/v3beta1/translation_service.proto

namespace Google\Cloud\Translate\V3beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Output configuration for BatchTranslateText request.
 *
 * Generated from protobuf message <code>google.cloud.translation.v3beta1.OutputConfig</code>
 */
class OutputConfig extends \Google\Protobuf\Internal\Message
{
    protected $destination;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Translate\V3beta1\GcsDestination $gcs_destination
     *           Google Cloud Storage destination for output content.
     *           For every single input file (for example, gs://a/b/c.[extension]), we
     *           generate at most 2 * n output files. (n is the # of target_language_codes
     *           in the BatchTranslateTextRequest).
     *           Output files (tsv) generated are compliant with RFC 4180 except that
     *           record delimiters are '\n' instead of '\r\n'. We don't provide any way to
     *           change record delimiters.
     *           While the input files are being processed, we write/update an index file
     *           'index.csv'  under 'output_uri_prefix' (for example,
     *           gs://translation-test/index.csv) The index file is generated/updated as
     *           new files are being translated. The format is:
     *           input_file,target_language_code,translations_file,errors_file,
     *           glossary_translations_file,glossary_errors_file
     *           input_file is one file we matched using gcs_source.input_uri.
     *           target_language_code is provided in the request.
     *           translations_file contains the translations. (details provided below)
     *           errors_file contains the errors during processing of the file. (details
     *           below). Both translations_file and errors_file could be empty
     *           strings if we have no content to output.
     *           glossary_translations_file and glossary_errors_file are always empty
     *           strings if the input_file is tsv. They could also be empty if we have no
     *           content to output.
     *           Once a row is present in index.csv, the input/output matching never
     *           changes. Callers should also expect all the content in input_file are
     *           processed and ready to be consumed (that is, no partial output file is
     *           written).
     *           The format of translations_file (for target language code 'trg') is:
     *           `gs://translation_test/a_b_c_'trg'_translations.[extension]`
     *           If the input file extension is tsv, the output has the following
     *           columns:
     *           Column 1: ID of the request provided in the input, if it's not
     *           provided in the input, then the input row number is used (0-based).
     *           Column 2: source sentence.
     *           Column 3: translation without applying a glossary. Empty string if there
     *           is an error.
     *           Column 4 (only present if a glossary is provided in the request):
     *           translation after applying the glossary. Empty string if there is an
     *           error applying the glossary. Could be same string as column 3 if there is
     *           no glossary applied.
     *           If input file extension is a txt or html, the translation is directly
     *           written to the output file. If glossary is requested, a separate
     *           glossary_translations_file has format of
     *           `gs://translation_test/a_b_c_'trg'_glossary_translations.[extension]`
     *           The format of errors file (for target language code 'trg') is:
     *           `gs://translation_test/a_b_c_'trg'_errors.[extension]`
     *           If the input file extension is tsv, errors_file contains the following:
     *           Column 1: ID of the request provided in the input, if it's not
     *           provided in the input, then the input row number is used (0-based).
     *           Column 2: source sentence.
     *           Column 3: Error detail for the translation. Could be empty.
     *           Column 4 (only present if a glossary is provided in the request):
     *           Error when applying the glossary.
     *           If the input file extension is txt or html, glossary_error_file will be
     *           generated that contains error details. glossary_error_file has format of
     *           `gs://translation_test/a_b_c_'trg'_glossary_errors.[extension]`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Translate\V3Beta1\TranslationService::initOnce();
        parent::__construct($data);
    }

    /**
     * Google Cloud Storage destination for output content.
     * For every single input file (for example, gs://a/b/c.[extension]), we
     * generate at most 2 * n output files. (n is the # of target_language_codes
     * in the BatchTranslateTextRequest).
     * Output files (tsv) generated are compliant with RFC 4180 except that
     * record delimiters are '\n' instead of '\r\n'. We don't provide any way to
     * change record delimiters.
     * While the input files are being processed, we write/update an index file
     * 'index.csv'  under 'output_uri_prefix' (for example,
     * gs://translation-test/index.csv) The index file is generated/updated as
     * new files are being translated. The format is:
     * input_file,target_language_code,translations_file,errors_file,
     * glossary_translations_file,glossary_errors_file
     * input_file is one file we matched using gcs_source.input_uri.
     * target_language_code is provided in the request.
     * translations_file contains the translations. (details provided below)
     * errors_file contains the errors during processing of the file. (details
     * below). Both translations_file and errors_file could be empty
     * strings if we have no content to output.
     * glossary_translations_file and glossary_errors_file are always empty
     * strings if the input_file is tsv. They could also be empty if we have no
     * content to output.
     * Once a row is present in index.csv, the input/output matching never
     * changes. Callers should also expect all the content in input_file are
     * processed and ready to be consumed (that is, no partial output file is
     * written).
     * The format of translations_file (for target language code 'trg') is:
     * `gs://translation_test/a_b_c_'trg'_translations.[extension]`
     * If the input file extension is tsv, the output has the following
     * columns:
     * Column 1: ID of the request provided in the input, if it's not
     * provided in the input, then the input row number is used (0-based).
     * Column 2: source sentence.
     * Column 3: translation without applying a glossary. Empty string if there
     * is an error.
     * Column 4 (only present if a glossary is provided in the request):
     * translation after applying the glossary. Empty string if there is an
     * error applying the glossary. Could be same string as column 3 if there is
     * no glossary applied.
     * If input file extension is a txt or html, the translation is directly
     * written to the output file. If glossary is requested, a separate
     * glossary_translations_file has format of
     * `gs://translation_test/a_b_c_'trg'_glossary_translations.[extension]`
     * The format of errors file (for target language code 'trg') is:
     * `gs://translation_test/a_b_c_'trg'_errors.[extension]`
     * If the input file extension is tsv, errors_file contains the following:
     * Column 1: ID of the request provided in the input, if it's not
     * provided in the input, then the input row number is used (0-based).
     * Column 2: source sentence.
     * Column 3: Error detail for the translation. Could be empty.
     * Column 4 (only present if a glossary is provided in the request):
     * Error when applying the glossary.
     * If the input file extension is txt or html, glossary_error_file will be
     * generated that contains error details. glossary_error_file has format of
     * `gs://translation_test/a_b_c_'trg'_glossary_errors.[extension]`
     *
     * Generated from protobuf field <code>.google.cloud.translation.v3beta1.GcsDestination gcs_destination = 1;</code>
     * @return \Google\Cloud\Translate\V3beta1\GcsDestination
     */
    public function getGcsDestination()
    {
        return $this->readOneof(1);
    }

    public function hasGcsDestination()
    {
        return $this->hasOneof(1);
    }

    /**
     * Google Cloud Storage destination for output content.
     * For every single input file (for example, gs://a/b/c.[extension]), we
     * generate at most 2 * n output files. (n is the # of target_language_codes
     * in the BatchTranslateTextRequest).
     * Output files (tsv) generated are compliant with RFC 4180 except that
     * record delimiters are '\n' instead of '\r\n'. We don't provide any way to
     * change record delimiters.
     * While the input files are being processed, we write/update an index file
     * 'index.csv'  under 'output_uri_prefix' (for example,
     * gs://translation-test/index.csv) The index file is generated/updated as
     * new files are being translated. The format is:
     * input_file,target_language_code,translations_file,errors_file,
     * glossary_translations_file,glossary_errors_file
     * input_file is one file we matched using gcs_source.input_uri.
     * target_language_code is provided in the request.
     * translations_file contains the translations. (details provided below)
     * errors_file contains the errors during processing of the file. (details
     * below). Both translations_file and errors_file could be empty
     * strings if we have no content to output.
     * glossary_translations_file and glossary_errors_file are always empty
     * strings if the input_file is tsv. They could also be empty if we have no
     * content to output.
     * Once a row is present in index.csv, the input/output matching never
     * changes. Callers should also expect all the content in input_file are
     * processed and ready to be consumed (that is, no partial output file is
     * written).
     * The format of translations_file (for target language code 'trg') is:
     * `gs://translation_test/a_b_c_'trg'_translations.[extension]`
     * If the input file extension is tsv, the output has the following
     * columns:
     * Column 1: ID of the request provided in the input, if it's not
     * provided in the input, then the input row number is used (0-based).
     * Column 2: source sentence.
     * Column 3: translation without applying a glossary. Empty string if there
     * is an error.
     * Column 4 (only present if a glossary is provided in the request):
     * translation after applying the glossary. Empty string if there is an
     * error applying the glossary. Could be same string as column 3 if there is
     * no glossary applied.
     * If input file extension is a txt or html, the translation is directly
     * written to the output file. If glossary is requested, a separate
     * glossary_translations_file has format of
     * `gs://translation_test/a_b_c_'trg'_glossary_translations.[extension]`
     * The format of errors file (for target language code 'trg') is:
     * `gs://translation_test/a_b_c_'trg'_errors.[extension]`
     * If the input file extension is tsv, errors_file contains the following:
     * Column 1: ID of the request provided in the input, if it's not
     * provided in the input, then the input row number is used (0-based).
     * Column 2: source sentence.
     * Column 3: Error detail for the translation. Could be empty.
     * Column 4 (only present if a glossary is provided in the request):
     * Error when applying the glossary.
     * If the input file extension is txt or html, glossary_error_file will be
     * generated that contains error details. glossary_error_file has format of
     * `gs://translation_test/a_b_c_'trg'_glossary_errors.[extension]`
     *
     * Generated from protobuf field <code>.google.cloud.translation.v3beta1.GcsDestination gcs_destination = 1;</code>
     * @param \Google\Cloud\Translate\V3beta1\GcsDestination $var
     * @return $this
     */
    public function setGcsDestination($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Translate\V3beta1\GcsDestination::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getDestination()
    {
        return $this->whichOneof("destination");
    }

}

