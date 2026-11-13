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

namespace Google\Service\SQLAdmin;

class DeploymentTasks extends \Google\Collection
{
  protected $collection_key = 'task';
  protected $taskType = DeploymentTask::class;
  protected $taskDataType = 'array';

  /**
   * Output only. Tasks performed or being performed on the paired nodes of the
   * deployment at a consolidated level.
   *
   * @param DeploymentTask[] $task
   */
  public function setTask($task)
  {
    $this->task = $task;
  }
  /**
   * @return DeploymentTask[]
   */
  public function getTask()
  {
    return $this->task;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DeploymentTasks::class, 'Google_Service_SQLAdmin_DeploymentTasks');
