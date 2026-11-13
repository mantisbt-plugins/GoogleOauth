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

class GoogleCloudIntegrationsV2DuetRecommendTasksResponse extends \Google\Collection
{
  protected $collection_key = 'taskResponseStatuses';
  protected $taskConfigsType = GoogleCloudIntegrationsV2DuetTaskConfig::class;
  protected $taskConfigsDataType = 'array';
  protected $taskResponseStatusesType = GoogleCloudIntegrationsV2DuetTaskResponseStatus::class;
  protected $taskResponseStatusesDataType = 'array';

  /**
   * The list of recommended tasks.
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
  /**
   * The list of task response status based on the task_types in the request.
   *
   * @param GoogleCloudIntegrationsV2DuetTaskResponseStatus[] $taskResponseStatuses
   */
  public function setTaskResponseStatuses($taskResponseStatuses)
  {
    $this->taskResponseStatuses = $taskResponseStatuses;
  }
  /**
   * @return GoogleCloudIntegrationsV2DuetTaskResponseStatus[]
   */
  public function getTaskResponseStatuses()
  {
    return $this->taskResponseStatuses;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudIntegrationsV2DuetRecommendTasksResponse::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV2DuetRecommendTasksResponse');
