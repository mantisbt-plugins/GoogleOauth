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

class GoogleCloudIntegrationsV2DuetIntegrationBranchRequest extends \Google\Collection
{
  protected $collection_key = 'taskConfigs';
  /**
   * Optional. The condition for the particular branch which the user selected.
   *
   * @var string
   */
  public $branchCondition;
  protected $integrationParametersType = GoogleCloudIntegrationsV2DuetIntegrationParameter::class;
  protected $integrationParametersDataType = 'array';
  protected $taskConfigsType = GoogleCloudIntegrationsV2DuetTaskConfig::class;
  protected $taskConfigsDataType = 'array';

  /**
   * Optional. The condition for the particular branch which the user selected.
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
   * Optional. A list of all the workflow parameters of the current integration.
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
   * Required. A list of all the tasks of the current integration.
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
class_alias(GoogleCloudIntegrationsV2DuetIntegrationBranchRequest::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV2DuetIntegrationBranchRequest');
