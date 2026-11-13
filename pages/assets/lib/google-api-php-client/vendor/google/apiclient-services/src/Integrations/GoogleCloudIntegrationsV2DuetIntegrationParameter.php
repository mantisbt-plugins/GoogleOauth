<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\Integrations;

class GoogleCloudIntegrationsV2DuetIntegrationParameter extends \Google\Model
{
  /**
   * Unspecified.
   */
  public const DATA_TYPE_INTEGRATION_PARAMETER_DATA_TYPE_UNSPECIFIED = 'INTEGRATION_PARAMETER_DATA_TYPE_UNSPECIFIED';
  /**
   * String.
   */
  public const DATA_TYPE_STRING_VALUE = 'STRING_VALUE';
  /**
   * Integer.
   */
  public const DATA_TYPE_INT_VALUE = 'INT_VALUE';
  /**
   * Double Number.
   */
  public const DATA_TYPE_DOUBLE_VALUE = 'DOUBLE_VALUE';
  /**
   * Boolean.
   */
  public const DATA_TYPE_BOOLEAN_VALUE = 'BOOLEAN_VALUE';
  /**
   * String Array.
   */
  public const DATA_TYPE_STRING_ARRAY = 'STRING_ARRAY';
  /**
   * Integer Array.
   */
  public const DATA_TYPE_INT_ARRAY = 'INT_ARRAY';
  /**
   * Double Number Array.
   */
  public const DATA_TYPE_DOUBLE_ARRAY = 'DOUBLE_ARRAY';
  /**
   * Boolean Array.
   */
  public const DATA_TYPE_BOOLEAN_ARRAY = 'BOOLEAN_ARRAY';
  /**
   * Json.
   */
  public const DATA_TYPE_JSON_VALUE = 'JSON_VALUE';
  /**
   * Proto Value (Internal use only).
   */
  public const DATA_TYPE_PROTO_VALUE = 'PROTO_VALUE';
  /**
   * Proto Array (Internal use only).
   */
  public const DATA_TYPE_PROTO_ARRAY = 'PROTO_ARRAY';
  /**
   * Default.
   */
  public const INPUT_OUTPUT_TYPE_IN_OUT_TYPE_UNSPECIFIED = 'IN_OUT_TYPE_UNSPECIFIED';
  /**
   * Input parameters for the integration. EventBus validates that these
   * parameters exist in the integrations before execution.
   */
  public const INPUT_OUTPUT_TYPE_IN = 'IN';
  /**
   * Output Parameters for the integration. EventBus will only return the
   * integration parameters tagged with OUT in the response back.
   */
  public const INPUT_OUTPUT_TYPE_OUT = 'OUT';
  /**
   * Input and Output Parameters. These can be used as both input and output.
   * EventBus will validate for the existence of these parameters before
   * execution and will also return this parameter back in the response.
   */
  public const INPUT_OUTPUT_TYPE_IN_OUT = 'IN_OUT';
  /**
   * Type of the parameter.
   *
   * @var string
   */
  public $dataType;
  protected $defaultValueType = GoogleCloudIntegrationsV2DuetValueType::class;
  protected $defaultValueDataType = '';
  /**
   * Optional. Description of the parameter.
   *
   * @var string
   */
  public $description;
  /**
   * The name (without prefix) to be displayed in the UI for this parameter.
   * E.g. if the key is "foo.bar.myName", then the name would be "myName".
   *
   * @var string
   */
  public $displayName;
  /**
   * Specifies the input/output type for the parameter.
   *
   * @var string
   */
  public $inputOutputType;
  /**
   * Whether this parameter is a transient parameter.
   *
   * @var bool
   */
  public $isTransient;
  /**
   * This schema will be used to validate runtime JSON-typed values of this
   * parameter.
   *
   * @var string
   */
  public $jsonSchema;
  /**
   * Key is used to retrieve the corresponding parameter value. This should be
   * unique for a given fired event. These parameters must be predefined in the
   * integration definition.
   *
   * @var string
   */
  public $key;

  /**
   * Type of the parameter.
   *
   * Accepted values: INTEGRATION_PARAMETER_DATA_TYPE_UNSPECIFIED, STRING_VALUE,
   * INT_VALUE, DOUBLE_VALUE, BOOLEAN_VALUE, STRING_ARRAY, INT_ARRAY,
   * DOUBLE_ARRAY, BOOLEAN_ARRAY, JSON_VALUE, PROTO_VALUE, PROTO_ARRAY
   *
   * @param self::DATA_TYPE_* $dataType
   */
  public function setDataType($dataType)
  {
    $this->dataType = $dataType;
  }
  /**
   * @return self::DATA_TYPE_*
   */
  public function getDataType()
  {
    return $this->dataType;
  }
  /**
   * Default values for the defined keys. Each value can either be string, int,
   * double or any proto message or a serialized object.
   *
   * @param GoogleCloudIntegrationsV2DuetValueType $defaultValue
   */
  public function setDefaultValue(GoogleCloudIntegrationsV2DuetValueType $defaultValue)
  {
    $this->defaultValue = $defaultValue;
  }
  /**
   * @return GoogleCloudIntegrationsV2DuetValueType
   */
  public function getDefaultValue()
  {
    return $this->defaultValue;
  }
  /**
   * Optional. Description of the parameter.
   *
   * @param string $description
   */
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /**
   * @return string
   */
  public function getDescription()
  {
    return $this->description;
  }
  /**
   * The name (without prefix) to be displayed in the UI for this parameter.
   * E.g. if the key is "foo.bar.myName", then the name would be "myName".
   *
   * @param string $displayName
   */
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /**
   * @return string
   */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /**
   * Specifies the input/output type for the parameter.
   *
   * Accepted values: IN_OUT_TYPE_UNSPECIFIED, IN, OUT, IN_OUT
   *
   * @param self::INPUT_OUTPUT_TYPE_* $inputOutputType
   */
  public function setInputOutputType($inputOutputType)
  {
    $this->inputOutputType = $inputOutputType;
  }
  /**
   * @return self::INPUT_OUTPUT_TYPE_*
   */
  public function getInputOutputType()
  {
    return $this->inputOutputType;
  }
  /**
   * Whether this parameter is a transient parameter.
   *
   * @param bool $isTransient
   */
  public function setIsTransient($isTransient)
  {
    $this->isTransient = $isTransient;
  }
  /**
   * @return bool
   */
  public function getIsTransient()
  {
    return $this->isTransient;
  }
  /**
   * This schema will be used to validate runtime JSON-typed values of this
   * parameter.
   *
   * @param string $jsonSchema
   */
  public function setJsonSchema($jsonSchema)
  {
    $this->jsonSchema = $jsonSchema;
  }
  /**
   * @return string
   */
  public function getJsonSchema()
  {
    return $this->jsonSchema;
  }
  /**
   * Key is used to retrieve the corresponding parameter value. This should be
   * unique for a given fired event. These parameters must be predefined in the
   * integration definition.
   *
   * @param string $key
   */
  public function setKey($key)
  {
    $this->key = $key;
  }
  /**
   * @return string
   */
  public function getKey()
  {
    return $this->key;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudIntegrationsV2DuetIntegrationParameter::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV2DuetIntegrationParameter');
