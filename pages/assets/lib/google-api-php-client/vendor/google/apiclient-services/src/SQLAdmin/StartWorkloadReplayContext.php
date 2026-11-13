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

class StartWorkloadReplayContext extends \Google\Model
{
  /**
   * Required. The name of the Cloud SQL instance where the captured workload
   * (SQL queries) is being executed, excluding the project ID (for example,
   * `my-replay-instance`). The instance name must start with a lowercase letter
   * and contain only lowercase letters, numbers, and hyphens. The combined
   * length of `project-ID:instance-name` must be 98 characters or less.
   *
   * @var string
   */
  public $replayInstance;
  /**
   * Output only. The ID of the workload to start executing on the replay
   * instance. Each workload capture generates a unique ID in the format
   * `workload-` (for example, `workload-1786046400`). Use this ID to start
   * executing the recorded SQL queries.
   *
   * @var string
   */
  public $workloadId;

  /**
   * Required. The name of the Cloud SQL instance where the captured workload
   * (SQL queries) is being executed, excluding the project ID (for example,
   * `my-replay-instance`). The instance name must start with a lowercase letter
   * and contain only lowercase letters, numbers, and hyphens. The combined
   * length of `project-ID:instance-name` must be 98 characters or less.
   *
   * @param string $replayInstance
   */
  public function setReplayInstance($replayInstance)
  {
    $this->replayInstance = $replayInstance;
  }
  /**
   * @return string
   */
  public function getReplayInstance()
  {
    return $this->replayInstance;
  }
  /**
   * Output only. The ID of the workload to start executing on the replay
   * instance. Each workload capture generates a unique ID in the format
   * `workload-` (for example, `workload-1786046400`). Use this ID to start
   * executing the recorded SQL queries.
   *
   * @param string $workloadId
   */
  public function setWorkloadId($workloadId)
  {
    $this->workloadId = $workloadId;
  }
  /**
   * @return string
   */
  public function getWorkloadId()
  {
    return $this->workloadId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(StartWorkloadReplayContext::class, 'Google_Service_SQLAdmin_StartWorkloadReplayContext');
