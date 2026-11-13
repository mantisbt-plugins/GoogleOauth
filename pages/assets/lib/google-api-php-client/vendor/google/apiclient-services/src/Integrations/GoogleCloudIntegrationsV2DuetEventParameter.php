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

class GoogleCloudIntegrationsV2DuetEventParameter extends \Google\Model
{
  /**
   * Key is used to retrieve the corresponding parameter value. This should be
   * unique for a given fired event. These parameters must be predefined in the
   * integration definition.
   *
   * @var string
   */
  public $key;
  protected $valueType = GoogleCloudIntegrationsV2DuetValueType::class;
  protected $valueDataType = '';

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
  /**
   * Values for the defined keys. Each value can either be string, int, double
   * or any proto message.
   *
   * @param GoogleCloudIntegrationsV2DuetValueType $value
   */
  public function setValue(GoogleCloudIntegrationsV2DuetValueType $value)
  {
    $this->value = $value;
  }
  /**
   * @return GoogleCloudIntegrationsV2DuetValueType
   */
  public function getValue()
  {
    return $this->value;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudIntegrationsV2DuetEventParameter::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV2DuetEventParameter');
