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

namespace Google\Service\ContainerAnalysis;

class ContaineranalysisGoogleDevtoolsCloudbuildV1BuildResourceUsage extends \Google\Model
{
  /**
   * Output only. The average CPU utilization ratio across all vCPUs over the
   * duration of the build, expressed as a fraction in the range [0.0, 1.0].
   *
   * @var float
   */
  public $averageCpuUtilization;
  /**
   * Output only. The average memory utilization ratio over the duration of the
   * build, expressed as a fraction in the range [0.0, 1.0].
   *
   * @var float
   */
  public $averageMemoryUtilization;
  /**
   * Output only. The highest CPU utilization ratio across all vCPUs observed
   * over the duration of the build, expressed as a fraction in the range [0.0,
   * 1.0].
   *
   * @var float
   */
  public $peakCpuUtilization;
  /**
   * Output only. The highest memory utilization ratio observed over the
   * duration of the build, expressed as a fraction in the range [0.0, 1.0].
   *
   * @var float
   */
  public $peakMemoryUtilization;
  /**
   * Output only. Total CPU execution time consumed across all cores during
   * build execution.
   *
   * @var string
   */
  public $totalCpuDuration;

  /**
   * Output only. The average CPU utilization ratio across all vCPUs over the
   * duration of the build, expressed as a fraction in the range [0.0, 1.0].
   *
   * @param float $averageCpuUtilization
   */
  public function setAverageCpuUtilization($averageCpuUtilization)
  {
    $this->averageCpuUtilization = $averageCpuUtilization;
  }
  /**
   * @return float
   */
  public function getAverageCpuUtilization()
  {
    return $this->averageCpuUtilization;
  }
  /**
   * Output only. The average memory utilization ratio over the duration of the
   * build, expressed as a fraction in the range [0.0, 1.0].
   *
   * @param float $averageMemoryUtilization
   */
  public function setAverageMemoryUtilization($averageMemoryUtilization)
  {
    $this->averageMemoryUtilization = $averageMemoryUtilization;
  }
  /**
   * @return float
   */
  public function getAverageMemoryUtilization()
  {
    return $this->averageMemoryUtilization;
  }
  /**
   * Output only. The highest CPU utilization ratio across all vCPUs observed
   * over the duration of the build, expressed as a fraction in the range [0.0,
   * 1.0].
   *
   * @param float $peakCpuUtilization
   */
  public function setPeakCpuUtilization($peakCpuUtilization)
  {
    $this->peakCpuUtilization = $peakCpuUtilization;
  }
  /**
   * @return float
   */
  public function getPeakCpuUtilization()
  {
    return $this->peakCpuUtilization;
  }
  /**
   * Output only. The highest memory utilization ratio observed over the
   * duration of the build, expressed as a fraction in the range [0.0, 1.0].
   *
   * @param float $peakMemoryUtilization
   */
  public function setPeakMemoryUtilization($peakMemoryUtilization)
  {
    $this->peakMemoryUtilization = $peakMemoryUtilization;
  }
  /**
   * @return float
   */
  public function getPeakMemoryUtilization()
  {
    return $this->peakMemoryUtilization;
  }
  /**
   * Output only. Total CPU execution time consumed across all cores during
   * build execution.
   *
   * @param string $totalCpuDuration
   */
  public function setTotalCpuDuration($totalCpuDuration)
  {
    $this->totalCpuDuration = $totalCpuDuration;
  }
  /**
   * @return string
   */
  public function getTotalCpuDuration()
  {
    return $this->totalCpuDuration;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ContaineranalysisGoogleDevtoolsCloudbuildV1BuildResourceUsage::class, 'Google_Service_ContainerAnalysis_ContaineranalysisGoogleDevtoolsCloudbuildV1BuildResourceUsage');
