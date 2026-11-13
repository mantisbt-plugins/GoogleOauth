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

namespace Google\Service\BigQueryConnectionService;

class ConnectorConfigurationParameterValue extends \Google\Model
{
  /**
   * A boolean parameter value.
   *
   * @var bool
   */
  public $boolValue;
  /**
   * A double parameter value.
   *
   * @var 
   */
  public $doubleValue;
  /**
   * An int32 parameter value.
   *
   * @var int
   */
  public $int32Value;
  protected $secretValueType = ConnectorConfigurationSecret::class;
  protected $secretValueDataType = '';
  /**
   * A string parameter value.
   *
   * @var string
   */
  public $stringValue;

  /**
   * A boolean parameter value.
   *
   * @param bool $boolValue
   */
  public function setBoolValue($boolValue)
  {
    $this->boolValue = $boolValue;
  }
  /**
   * @return bool
   */
  public function getBoolValue()
  {
    return $this->boolValue;
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
   * An int32 parameter value.
   *
   * @param int $int32Value
   */
  public function setInt32Value($int32Value)
  {
    $this->int32Value = $int32Value;
  }
  /**
   * @return int
   */
  public function getInt32Value()
  {
    return $this->int32Value;
  }
  /**
   * A secret parameter value. Allowed only for Authentication parameters.
   *
   * @param ConnectorConfigurationSecret $secretValue
   */
  public function setSecretValue(ConnectorConfigurationSecret $secretValue)
  {
    $this->secretValue = $secretValue;
  }
  /**
   * @return ConnectorConfigurationSecret
   */
  public function getSecretValue()
  {
    return $this->secretValue;
  }
  /**
   * A string parameter value.
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
class_alias(ConnectorConfigurationParameterValue::class, 'Google_Service_BigQueryConnectionService_ConnectorConfigurationParameterValue');
