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

namespace Google\Service\SaaSServiceManagement;

class DurationLimits extends \Google\Model
{
  /**
   * Optional. The maximum duration a UnitOperation is allowed to execute in the
   * RUNNING state. - Minimum value: 60 seconds (1 minute) - Maximum value:
   * 604800 seconds (7 days) If this field is not set, or if the provided value
   * falls outside the allowed range, the system will use a default timeout of
   * 10800 seconds (3 hours). Upon exceeding this time limit, the UnitOperation
   * will be best-effort cancelled, and its state will be set to FAILED.
   *
   * @var string
   */
  public $unitOperationTimeout;

  /**
   * Optional. The maximum duration a UnitOperation is allowed to execute in the
   * RUNNING state. - Minimum value: 60 seconds (1 minute) - Maximum value:
   * 604800 seconds (7 days) If this field is not set, or if the provided value
   * falls outside the allowed range, the system will use a default timeout of
   * 10800 seconds (3 hours). Upon exceeding this time limit, the UnitOperation
   * will be best-effort cancelled, and its state will be set to FAILED.
   *
   * @param string $unitOperationTimeout
   */
  public function setUnitOperationTimeout($unitOperationTimeout)
  {
    $this->unitOperationTimeout = $unitOperationTimeout;
  }
  /**
   * @return string
   */
  public function getUnitOperationTimeout()
  {
    return $this->unitOperationTimeout;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DurationLimits::class, 'Google_Service_SaaSServiceManagement_DurationLimits');
