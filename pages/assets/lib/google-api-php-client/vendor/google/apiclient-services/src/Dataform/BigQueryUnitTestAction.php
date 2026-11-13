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

namespace Google\Service\Dataform;

class BigQueryUnitTestAction extends \Google\Model
{
  /**
   * Output only. Job ID for the actual results.
   *
   * @var string
   */
  public $actualResultsJobId;
  /**
   * Output only. SQL script for the actual results.
   *
   * @var string
   */
  public $actualResultsSqlScript;
  /**
   * Output only. Job ID for the expected results.
   *
   * @var string
   */
  public $expectedResultsJobId;
  /**
   * Output only. SQL script for the expected results.
   *
   * @var string
   */
  public $expectedResultsSqlScript;
  /**
   * Output only. Total bytes billed for this action. Combined total for actual
   * and expected jobs.
   *
   * @var string
   */
  public $totalBilledBytes;
  /**
   * Output only. Total bytes processed for this action. Combined total for
   * actual and expected jobs.
   *
   * @var string
   */
  public $totalProcessedBytes;

  /**
   * Output only. Job ID for the actual results.
   *
   * @param string $actualResultsJobId
   */
  public function setActualResultsJobId($actualResultsJobId)
  {
    $this->actualResultsJobId = $actualResultsJobId;
  }
  /**
   * @return string
   */
  public function getActualResultsJobId()
  {
    return $this->actualResultsJobId;
  }
  /**
   * Output only. SQL script for the actual results.
   *
   * @param string $actualResultsSqlScript
   */
  public function setActualResultsSqlScript($actualResultsSqlScript)
  {
    $this->actualResultsSqlScript = $actualResultsSqlScript;
  }
  /**
   * @return string
   */
  public function getActualResultsSqlScript()
  {
    return $this->actualResultsSqlScript;
  }
  /**
   * Output only. Job ID for the expected results.
   *
   * @param string $expectedResultsJobId
   */
  public function setExpectedResultsJobId($expectedResultsJobId)
  {
    $this->expectedResultsJobId = $expectedResultsJobId;
  }
  /**
   * @return string
   */
  public function getExpectedResultsJobId()
  {
    return $this->expectedResultsJobId;
  }
  /**
   * Output only. SQL script for the expected results.
   *
   * @param string $expectedResultsSqlScript
   */
  public function setExpectedResultsSqlScript($expectedResultsSqlScript)
  {
    $this->expectedResultsSqlScript = $expectedResultsSqlScript;
  }
  /**
   * @return string
   */
  public function getExpectedResultsSqlScript()
  {
    return $this->expectedResultsSqlScript;
  }
  /**
   * Output only. Total bytes billed for this action. Combined total for actual
   * and expected jobs.
   *
   * @param string $totalBilledBytes
   */
  public function setTotalBilledBytes($totalBilledBytes)
  {
    $this->totalBilledBytes = $totalBilledBytes;
  }
  /**
   * @return string
   */
  public function getTotalBilledBytes()
  {
    return $this->totalBilledBytes;
  }
  /**
   * Output only. Total bytes processed for this action. Combined total for
   * actual and expected jobs.
   *
   * @param string $totalProcessedBytes
   */
  public function setTotalProcessedBytes($totalProcessedBytes)
  {
    $this->totalProcessedBytes = $totalProcessedBytes;
  }
  /**
   * @return string
   */
  public function getTotalProcessedBytes()
  {
    return $this->totalProcessedBytes;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(BigQueryUnitTestAction::class, 'Google_Service_Dataform_BigQueryUnitTestAction');
