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

namespace Google\Service\OnDemandScanning;

class WorkspacePolicyResult extends \Google\Model
{
  /**
   * Unspecified scan status.
   */
  public const SCAN_STATUS_SCAN_STATUS_UNSPECIFIED = 'SCAN_STATUS_UNSPECIFIED';
  /**
   * Scan was performed.
   */
  public const SCAN_STATUS_PERFORMED = 'PERFORMED';
  /**
   * Scan was not performed.
   */
  public const SCAN_STATUS_NOT_PERFORMED = 'NOT_PERFORMED';
  /**
   * Unspecified verdict.
   */
  public const VERDICT_VERDICT_UNSPECIFIED = 'VERDICT_UNSPECIFIED';
  /**
   * Scanner passed.
   */
  public const VERDICT_PASSED = 'PASSED';
  /**
   * Scanner failed.
   */
  public const VERDICT_FAILED = 'FAILED';
  /**
   * Status of the scan.
   *
   * @var string
   */
  public $scanStatus;
  /**
   * Verdict of the scan.
   *
   * @var string
   */
  public $verdict;

  /**
   * Status of the scan.
   *
   * Accepted values: SCAN_STATUS_UNSPECIFIED, PERFORMED, NOT_PERFORMED
   *
   * @param self::SCAN_STATUS_* $scanStatus
   */
  public function setScanStatus($scanStatus)
  {
    $this->scanStatus = $scanStatus;
  }
  /**
   * @return self::SCAN_STATUS_*
   */
  public function getScanStatus()
  {
    return $this->scanStatus;
  }
  /**
   * Verdict of the scan.
   *
   * Accepted values: VERDICT_UNSPECIFIED, PASSED, FAILED
   *
   * @param self::VERDICT_* $verdict
   */
  public function setVerdict($verdict)
  {
    $this->verdict = $verdict;
  }
  /**
   * @return self::VERDICT_*
   */
  public function getVerdict()
  {
    return $this->verdict;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(WorkspacePolicyResult::class, 'Google_Service_OnDemandScanning_WorkspacePolicyResult');
