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

class GoogleCloudIntegrationsV2DuetReplaceTaskRequest extends \Google\Collection
{
  protected $collection_key = 'taskTypes';
  /**
   * Optional. If this request is for copilot.
   *
   * @var bool
   */
  public $copilotEnabled;
  protected $taskConfigType = GoogleCloudIntegrationsV2DuetTaskConfig::class;
  protected $taskConfigDataType = '';
  /**
   * The list of task types.
   *
   * @var string[]
   */
  public $taskTypes;

  /**
   * Optional. If this request is for copilot.
   *
   * @param bool $copilotEnabled
   */
  public function setCopilotEnabled($copilotEnabled)
  {
    $this->copilotEnabled = $copilotEnabled;
  }
  /**
   * @return bool
   */
  public function getCopilotEnabled()
  {
    return $this->copilotEnabled;
  }
  /**
   * Required. The current task selected on the UI.
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
  /**
   * The list of task types.
   *
   * @param string[] $taskTypes
   */
  public function setTaskTypes($taskTypes)
  {
    $this->taskTypes = $taskTypes;
  }
  /**
   * @return string[]
   */
  public function getTaskTypes()
  {
    return $this->taskTypes;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudIntegrationsV2DuetReplaceTaskRequest::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV2DuetReplaceTaskRequest');
