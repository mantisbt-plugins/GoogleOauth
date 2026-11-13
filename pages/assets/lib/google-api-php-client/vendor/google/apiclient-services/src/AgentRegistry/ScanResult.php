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

namespace Google\Service\AgentRegistry;

class ScanResult extends \Google\Collection
{
  /**
   * Should not be used.
   */
  public const SCAN_STATE_SCAN_STATE_UNSPECIFIED = 'SCAN_STATE_UNSPECIFIED';
  /**
   * The underlying scanning system failed to execute the scan.
   */
  public const SCAN_STATE_FAILED = 'FAILED';
  /**
   * The uploaded artifact format is unsupported by the scanning system.
   */
  public const SCAN_STATE_UNSUPPORTED_FORMAT = 'UNSUPPORTED_FORMAT';
  /**
   * The scan has completed successfully.
   */
  public const SCAN_STATE_SUCCEEDED = 'SUCCEEDED';
  /**
   * The scan was disabled.
   */
  public const SCAN_STATE_DISABLED = 'DISABLED';
  /**
   * The scan is running.
   */
  public const SCAN_STATE_RUNNING = 'RUNNING';
  protected $collection_key = 'findings';
  /**
   * Output only. The error message if the scan failed.
   *
   * @var string
   */
  public $errorMessage;
  /**
   * Output only. The finding resource names for the skill revision.
   *
   * @var string[]
   */
  public $findings;
  /**
   * Output only. The state of the vulnerability check.
   *
   * @var string
   */
  public $scanState;
  /**
   * Output only. The time when the scan was completed.
   *
   * @var string
   */
  public $scanTime;

  /**
   * Output only. The error message if the scan failed.
   *
   * @param string $errorMessage
   */
  public function setErrorMessage($errorMessage)
  {
    $this->errorMessage = $errorMessage;
  }
  /**
   * @return string
   */
  public function getErrorMessage()
  {
    return $this->errorMessage;
  }
  /**
   * Output only. The finding resource names for the skill revision.
   *
   * @param string[] $findings
   */
  public function setFindings($findings)
  {
    $this->findings = $findings;
  }
  /**
   * @return string[]
   */
  public function getFindings()
  {
    return $this->findings;
  }
  /**
   * Output only. The state of the vulnerability check.
   *
   * Accepted values: SCAN_STATE_UNSPECIFIED, FAILED, UNSUPPORTED_FORMAT,
   * SUCCEEDED, DISABLED, RUNNING
   *
   * @param self::SCAN_STATE_* $scanState
   */
  public function setScanState($scanState)
  {
    $this->scanState = $scanState;
  }
  /**
   * @return self::SCAN_STATE_*
   */
  public function getScanState()
  {
    return $this->scanState;
  }
  /**
   * Output only. The time when the scan was completed.
   *
   * @param string $scanTime
   */
  public function setScanTime($scanTime)
  {
    $this->scanTime = $scanTime;
  }
  /**
   * @return string
   */
  public function getScanTime()
  {
    return $this->scanTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ScanResult::class, 'Google_Service_AgentRegistry_ScanResult');
