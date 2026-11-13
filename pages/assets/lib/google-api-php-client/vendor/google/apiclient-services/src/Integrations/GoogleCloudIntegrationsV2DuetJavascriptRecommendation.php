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

class GoogleCloudIntegrationsV2DuetJavascriptRecommendation extends \Google\Collection
{
  protected $collection_key = 'integrationParameters';
  /**
   * The explanation of the Javascript code.
   *
   * @var string
   */
  public $explanation;
  protected $integrationParametersType = GoogleCloudIntegrationsV2DuetIntegrationParameter::class;
  protected $integrationParametersDataType = 'array';
  protected $taskConfigType = GoogleCloudIntegrationsV2DuetTaskConfig::class;
  protected $taskConfigDataType = '';

  /**
   * The explanation of the Javascript code.
   *
   * @param string $explanation
   */
  public function setExplanation($explanation)
  {
    $this->explanation = $explanation;
  }
  /**
   * @return string
   */
  public function getExplanation()
  {
    return $this->explanation;
  }
  /**
   * Optional. The list of the new integration parameters.
   *
   * @param GoogleCloudIntegrationsV2DuetIntegrationParameter[] $integrationParameters
   */
  public function setIntegrationParameters($integrationParameters)
  {
    $this->integrationParameters = $integrationParameters;
  }
  /**
   * @return GoogleCloudIntegrationsV2DuetIntegrationParameter[]
   */
  public function getIntegrationParameters()
  {
    return $this->integrationParameters;
  }
  /**
   * Optional. The task config of the Javascript task.
   *
   * @param GoogleCloudIntegrationsV2DuetTaskConfig $taskConfig
   */
  public function setTaskConfig(GoogleCloudIntegrationsV2DuetTaskConfig $taskConfig)
  {
    $this->taskConfig = $taskConfig;
  }
  /**
   * @return GoogleCloudIntegrationsV2DuetTaskConfig
   */
  public function getTaskConfig()
  {
    return $this->taskConfig;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudIntegrationsV2DuetJavascriptRecommendation::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV2DuetJavascriptRecommendation');
