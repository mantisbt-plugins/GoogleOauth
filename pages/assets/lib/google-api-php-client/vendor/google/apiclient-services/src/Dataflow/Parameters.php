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

namespace Google\Service\Dataflow;

class Parameters extends \Google\Model
{
  /**
   * Optional. The target CPU utilization for this schedule.
   *
   * @var 
   */
  public $cpuUtilizationTarget;
  /**
   * Optional. The target latency for this schedule.
   *
   * @var string
   */
  public $latencyTarget;
  /**
   * Optional. The maximum number of workers for this schedule.
   *
   * @var int
   */
  public $maxWorkerCount;
  /**
   * Optional. The minimum number of workers for this schedule.
   *
   * @var int
   */
  public $minWorkerCount;

  public function setCpuUtilizationTarget($cpuUtilizationTarget)
  {
    $this->cpuUtilizationTarget = $cpuUtilizationTarget;
  }
  public function getCpuUtilizationTarget()
  {
    return $this->cpuUtilizationTarget;
  }
  /**
   * Optional. The target latency for this schedule.
   *
   * @param string $latencyTarget
   */
  public function setLatencyTarget($latencyTarget)
  {
    $this->latencyTarget = $latencyTarget;
  }
  /**
   * @return string
   */
  public function getLatencyTarget()
  {
    return $this->latencyTarget;
  }
  /**
   * Optional. The maximum number of workers for this schedule.
   *
   * @param int $maxWorkerCount
   */
  public function setMaxWorkerCount($maxWorkerCount)
  {
    $this->maxWorkerCount = $maxWorkerCount;
  }
  /**
   * @return int
   */
  public function getMaxWorkerCount()
  {
    return $this->maxWorkerCount;
  }
  /**
   * Optional. The minimum number of workers for this schedule.
   *
   * @param int $minWorkerCount
   */
  public function setMinWorkerCount($minWorkerCount)
  {
    $this->minWorkerCount = $minWorkerCount;
  }
  /**
   * @return int
   */
  public function getMinWorkerCount()
  {
    return $this->minWorkerCount;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Parameters::class, 'Google_Service_Dataflow_Parameters');
