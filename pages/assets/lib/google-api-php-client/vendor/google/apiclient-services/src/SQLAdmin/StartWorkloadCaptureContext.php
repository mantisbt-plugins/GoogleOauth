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

class StartWorkloadCaptureContext extends \Google\Model
{
  /**
   * Optional. If true, the captured workload is simultaneously executed on a
   * separate, ephemeral Cloud SQL instance. This "live replay" instance is
   * automatically provisioned and is cloned from the source instance. If false
   * (the default), the workload is only stored and no live replay occurs. It
   * can be replayed later using a separate `StartWorkloadReplayRequest`. Note:
   * The workload capture runs continuously until an explicit
   * `StopWorkloadCaptureRequest` is issued.
   *
   * @var bool
   */
  public $enableLiveReplay;
  /**
   * Optional. Required if `enable_live_replay` is true. The name of the Cloud
   * SQL instance where the captured workload (SQL queries) is being executed,
   * excluding the project ID (for example, `my-replay-instance`). The instance
   * name must start with a lowercase letter and contain only lowercase letters,
   * numbers, and hyphens. The combined length of `project-ID:instance-name`
   * must be 98 characters or less.
   *
   * @var string
   */
  public $replayInstance;

  /**
   * Optional. If true, the captured workload is simultaneously executed on a
   * separate, ephemeral Cloud SQL instance. This "live replay" instance is
   * automatically provisioned and is cloned from the source instance. If false
   * (the default), the workload is only stored and no live replay occurs. It
   * can be replayed later using a separate `StartWorkloadReplayRequest`. Note:
   * The workload capture runs continuously until an explicit
   * `StopWorkloadCaptureRequest` is issued.
   *
   * @param bool $enableLiveReplay
   */
  public function setEnableLiveReplay($enableLiveReplay)
  {
    $this->enableLiveReplay = $enableLiveReplay;
  }
  /**
   * @return bool
   */
  public function getEnableLiveReplay()
  {
    return $this->enableLiveReplay;
  }
  /**
   * Optional. Required if `enable_live_replay` is true. The name of the Cloud
   * SQL instance where the captured workload (SQL queries) is being executed,
   * excluding the project ID (for example, `my-replay-instance`). The instance
   * name must start with a lowercase letter and contain only lowercase letters,
   * numbers, and hyphens. The combined length of `project-ID:instance-name`
   * must be 98 characters or less.
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(StartWorkloadCaptureContext::class, 'Google_Service_SQLAdmin_StartWorkloadCaptureContext');
