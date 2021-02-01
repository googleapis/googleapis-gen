<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1beta1/training_pipeline.proto

namespace Google\Cloud\Aiplatform\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Assigns input data to training, validation, and test sets based on the given
 * filters, data pieces not matched by any filter are ignored. Currently only
 * supported for Datasets containing DataItems.
 * If any of the filters in this message are to match nothing, then they can be
 * set as '-' (the minus sign).
 * Supported only for unstructured Datasets.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1beta1.FilterSplit</code>
 */
class FilterSplit extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. A filter on DataItems of the Dataset. DataItems that match
     * this filter are used to train the Model. A filter with same syntax
     * as the one used in [DatasetService.ListDataItems][google.cloud.aiplatform.v1beta1.DatasetService.ListDataItems] may be used. If a
     * single DataItem is matched by more than one of the FilterSplit filters,
     * then it is assigned to the first set that applies to it in the
     * training, validation, test order.
     *
     * Generated from protobuf field <code>string training_filter = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $training_filter = '';
    /**
     * Required. A filter on DataItems of the Dataset. DataItems that match
     * this filter are used to validate the Model. A filter with same syntax
     * as the one used in [DatasetService.ListDataItems][google.cloud.aiplatform.v1beta1.DatasetService.ListDataItems] may be used. If a
     * single DataItem is matched by more than one of the FilterSplit filters,
     * then it is assigned to the first set that applies to it in the
     * training, validation, test order.
     *
     * Generated from protobuf field <code>string validation_filter = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $validation_filter = '';
    /**
     * Required. A filter on DataItems of the Dataset. DataItems that match
     * this filter are used to test the Model. A filter with same syntax
     * as the one used in [DatasetService.ListDataItems][google.cloud.aiplatform.v1beta1.DatasetService.ListDataItems] may be used. If a
     * single DataItem is matched by more than one of the FilterSplit filters,
     * then it is assigned to the first set that applies to it in the
     * training, validation, test order.
     *
     * Generated from protobuf field <code>string test_filter = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $test_filter = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $training_filter
     *           Required. A filter on DataItems of the Dataset. DataItems that match
     *           this filter are used to train the Model. A filter with same syntax
     *           as the one used in [DatasetService.ListDataItems][google.cloud.aiplatform.v1beta1.DatasetService.ListDataItems] may be used. If a
     *           single DataItem is matched by more than one of the FilterSplit filters,
     *           then it is assigned to the first set that applies to it in the
     *           training, validation, test order.
     *     @type string $validation_filter
     *           Required. A filter on DataItems of the Dataset. DataItems that match
     *           this filter are used to validate the Model. A filter with same syntax
     *           as the one used in [DatasetService.ListDataItems][google.cloud.aiplatform.v1beta1.DatasetService.ListDataItems] may be used. If a
     *           single DataItem is matched by more than one of the FilterSplit filters,
     *           then it is assigned to the first set that applies to it in the
     *           training, validation, test order.
     *     @type string $test_filter
     *           Required. A filter on DataItems of the Dataset. DataItems that match
     *           this filter are used to test the Model. A filter with same syntax
     *           as the one used in [DatasetService.ListDataItems][google.cloud.aiplatform.v1beta1.DatasetService.ListDataItems] may be used. If a
     *           single DataItem is matched by more than one of the FilterSplit filters,
     *           then it is assigned to the first set that applies to it in the
     *           training, validation, test order.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1Beta1\TrainingPipeline::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. A filter on DataItems of the Dataset. DataItems that match
     * this filter are used to train the Model. A filter with same syntax
     * as the one used in [DatasetService.ListDataItems][google.cloud.aiplatform.v1beta1.DatasetService.ListDataItems] may be used. If a
     * single DataItem is matched by more than one of the FilterSplit filters,
     * then it is assigned to the first set that applies to it in the
     * training, validation, test order.
     *
     * Generated from protobuf field <code>string training_filter = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getTrainingFilter()
    {
        return $this->training_filter;
    }

    /**
     * Required. A filter on DataItems of the Dataset. DataItems that match
     * this filter are used to train the Model. A filter with same syntax
     * as the one used in [DatasetService.ListDataItems][google.cloud.aiplatform.v1beta1.DatasetService.ListDataItems] may be used. If a
     * single DataItem is matched by more than one of the FilterSplit filters,
     * then it is assigned to the first set that applies to it in the
     * training, validation, test order.
     *
     * Generated from protobuf field <code>string training_filter = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setTrainingFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->training_filter = $var;

        return $this;
    }

    /**
     * Required. A filter on DataItems of the Dataset. DataItems that match
     * this filter are used to validate the Model. A filter with same syntax
     * as the one used in [DatasetService.ListDataItems][google.cloud.aiplatform.v1beta1.DatasetService.ListDataItems] may be used. If a
     * single DataItem is matched by more than one of the FilterSplit filters,
     * then it is assigned to the first set that applies to it in the
     * training, validation, test order.
     *
     * Generated from protobuf field <code>string validation_filter = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getValidationFilter()
    {
        return $this->validation_filter;
    }

    /**
     * Required. A filter on DataItems of the Dataset. DataItems that match
     * this filter are used to validate the Model. A filter with same syntax
     * as the one used in [DatasetService.ListDataItems][google.cloud.aiplatform.v1beta1.DatasetService.ListDataItems] may be used. If a
     * single DataItem is matched by more than one of the FilterSplit filters,
     * then it is assigned to the first set that applies to it in the
     * training, validation, test order.
     *
     * Generated from protobuf field <code>string validation_filter = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setValidationFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->validation_filter = $var;

        return $this;
    }

    /**
     * Required. A filter on DataItems of the Dataset. DataItems that match
     * this filter are used to test the Model. A filter with same syntax
     * as the one used in [DatasetService.ListDataItems][google.cloud.aiplatform.v1beta1.DatasetService.ListDataItems] may be used. If a
     * single DataItem is matched by more than one of the FilterSplit filters,
     * then it is assigned to the first set that applies to it in the
     * training, validation, test order.
     *
     * Generated from protobuf field <code>string test_filter = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getTestFilter()
    {
        return $this->test_filter;
    }

    /**
     * Required. A filter on DataItems of the Dataset. DataItems that match
     * this filter are used to test the Model. A filter with same syntax
     * as the one used in [DatasetService.ListDataItems][google.cloud.aiplatform.v1beta1.DatasetService.ListDataItems] may be used. If a
     * single DataItem is matched by more than one of the FilterSplit filters,
     * then it is assigned to the first set that applies to it in the
     * training, validation, test order.
     *
     * Generated from protobuf field <code>string test_filter = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setTestFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->test_filter = $var;

        return $this;
    }

}

