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

class GoogleCloudIntegrationsV2DuetValueType extends \Google\Model
{
  protected $booleanArrayType = GoogleCloudIntegrationsV2DuetBooleanParameterArray::class;
  protected $booleanArrayDataType = '';
  /**
   * Boolean.
   *
   * @var bool
   */
  public $booleanValue;
  protected $doubleArrayType = GoogleCloudIntegrationsV2DuetDoubleParameterArray::class;
  protected $doubleArrayDataType = '';
  /**
   * Double Number.
   *
   * @var 
   */
  public $doubleValue;
  protected $intArrayType = GoogleCloudIntegrationsV2DuetIntParameterArray::class;
  protected $intArrayDataType = '';
  /**
   * Integer.
   *
   * @var string
   */
  public $intValue;
  /**
   * Json.
   *
   * @var string
   */
  public $jsonValue;
  protected $stringArrayType = GoogleCloudIntegrationsV2DuetStringParameterArray::class;
  protected $stringArrayDataType = '';
  /**
   * String.
   *
   * @var string
   */
  public $stringValue;

  /**
   * Boolean Array.
   *
   * @param GoogleCloudIntegrationsV2DuetBooleanParameterArray $booleanArray
   */
  public function setBooleanArray(GoogleCloudIntegrationsV2DuetBooleanParameterArray $booleanArray)
  {
    $this->booleanArray = $booleanArray;
  }
  /**
   * @return GoogleCloudIntegrationsV2DuetBooleanParameterArray
   */
  public function getBooleanArray()
  {
    return $this->booleanArray;
  }
  /**
   * Boolean.
   *
   * @param bool $booleanValue
   */
  public function setBooleanValue($booleanValue)
  {
    $this->booleanValue = $booleanValue;
  }
  /**
   * @return bool
   */
  public function getBooleanValue()
  {
    return $this->booleanValue;
  }
  /**
   * Double Number Array.
   *
   * @param GoogleCloudIntegrationsV2DuetDoubleParameterArray $doubleArray
   */
  public function setDoubleArray(GoogleCloudIntegrationsV2DuetDoubleParameterArray $doubleArray)
  {
    $this->doubleArray = $doubleArray;
  }
  /**
   * @return GoogleCloudIntegrationsV2DuetDoubleParameterArray
   */
  public function getDoubleArray()
  {
    return $this->doubleArray;
  }
  public function setDoubleValue($doubleValue)
  {
    $this->doubleValue = $doubleValue;
  }
  public function getDoubleValue()
  {
    return $this->doubleValue;
  }
  /**
   * Integer Array.
   *
   * @param GoogleCloudIntegrationsV2DuetIntParameterArray $intArray
   */
  public function setIntArray(GoogleCloudIntegrationsV2DuetIntParameterArray $intArray)
  {
    $this->intArray = $intArray;
  }
  /**
   * @return GoogleCloudIntegrationsV2DuetIntParameterArray
   */
  public function getIntArray()
  {
    return $this->intArray;
  }
  /**
   * Integer.
   *
   * @param string $intValue
   */
  public function setIntValue($intValue)
  {
    $this->intValue = $intValue;
  }
  /**
   * @return string
   */
  public function getIntValue()
  {
    return $this->intValue;
  }
  /**
   * Json.
   *
   * @param string $jsonValue
   */
  public function setJsonValue($jsonValue)
  {
    $this->jsonValue = $jsonValue;
  }
  /**
   * @return string
   */
  public function getJsonValue()
  {
    return $this->jsonValue;
  }
  /**
   * String Array.
   *
   * @param GoogleCloudIntegrationsV2DuetStringParameterArray $stringArray
   */
  public function setStringArray(GoogleCloudIntegrationsV2DuetStringParameterArray $stringArray)
  {
    $this->stringArray = $stringArray;
  }
  /**
   * @return GoogleCloudIntegrationsV2DuetStringParameterArray
   */
  public function getStringArray()
  {
    return $this->stringArray;
  }
  /**
   * String.
   *
   * @param string $stringValue
   */
  public function setStringValue($stringValue)
  {
    $this->stringValue = $stringValue;
  }
  /**
   * @return string
   */
  public function getStringValue()
  {
    return $this->stringValue;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudIntegrationsV2DuetValueType::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV2DuetValueType');
