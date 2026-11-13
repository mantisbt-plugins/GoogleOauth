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

class GoogleCloudIntegrationsV2DuetIntegrationConfigParameter extends \Google\Model
{
  protected $parameterType = GoogleCloudIntegrationsV2DuetIntegrationParameter::class;
  protected $parameterDataType = '';
  protected $valueType = GoogleCloudIntegrationsV2DuetValueType::class;
  protected $valueDataType = '';

  /**
   * Optional. Integration Parameter to provide the default value, data type and
   * attributes required for the Integration config variables.
   *
   * @param GoogleCloudIntegrationsV2DuetIntegrationParameter $parameter
   */
  public function setParameter(GoogleCloudIntegrationsV2DuetIntegrationParameter $parameter)
  {
    $this->parameter = $parameter;
  }
  /**
   * @return GoogleCloudIntegrationsV2DuetIntegrationParameter
   */
  public function getParameter()
  {
    return $this->parameter;
  }
  /**
   * Values for the defined keys. Each value can either be string, int, double
   * or any proto message or a serialized object.
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
class_alias(GoogleCloudIntegrationsV2DuetIntegrationConfigParameter::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV2DuetIntegrationConfigParameter');
