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

class GoogleCloudIntegrationsV2DuetIntegrationBranch extends \Google\Collection
{
  protected $collection_key = 'taskConfigs';
  /**
   * The condition for the branch.
   *
   * @var string
   */
  public $branchCondition;
  /**
   * Explanation of why this integration branch was generated.
   *
   * @var string
   */
  public $explanation;
  protected $integrationParametersType = GoogleCloudIntegrationsV2DuetIntegrationParameter::class;
  protected $integrationParametersDataType = 'array';
  protected $taskConfigsType = GoogleCloudIntegrationsV2DuetTaskConfig::class;
  protected $taskConfigsDataType = 'array';

  /**
   * The condition for the branch.
   *
   * @param string $branchCondition
   */
  public function setBranchCondition($branchCondition)
  {
    $this->branchCondition = $branchCondition;
  }
  /**
   * @return string
   */
  public function getBranchCondition()
  {
    return $this->branchCondition;
  }
  /**
   * Explanation of why this integration branch was generated.
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
   * The newly generated workflow parameters.
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
   * The newly generated tasks which can be branched into the current
   * integration.
   *
   * @param GoogleCloudIntegrationsV2DuetTaskConfig[] $taskConfigs
   */
  public function setTaskConfigs($taskConfigs)
  {
    $this->taskConfigs = $taskConfigs;
  }
  /**
   * @return GoogleCloudIntegrationsV2DuetTaskConfig[]
   */
  public function getTaskConfigs()
  {
    return $this->taskConfigs;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudIntegrationsV2DuetIntegrationBranch::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV2DuetIntegrationBranch');
