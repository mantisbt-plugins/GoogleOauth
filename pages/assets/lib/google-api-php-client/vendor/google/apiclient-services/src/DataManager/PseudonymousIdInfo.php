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

namespace Google\Service\DataManager;

class PseudonymousIdInfo extends \Google\Model
{
  public const SYNC_STATUS_SYNC_STATUS_UNSPECIFIED = 'SYNC_STATUS_UNSPECIFIED';
  public const SYNC_STATUS_CREATED = 'CREATED';
  public const SYNC_STATUS_READY_FOR_USE = 'READY_FOR_USE';
  public const SYNC_STATUS_FAILED = 'FAILED';
  /**
   * @var string
   */
  public $billableRecordCount;
  /**
   * @var string
   */
  public $syncStatus;

  /**
   * @param string $billableRecordCount
   */
  public function setBillableRecordCount($billableRecordCount)
  {
    $this->billableRecordCount = $billableRecordCount;
  }
  /**
   * @return string
   */
  public function getBillableRecordCount()
  {
    return $this->billableRecordCount;
  }
  /**
   * @param self::SYNC_STATUS_* $syncStatus
   */
  public function setSyncStatus($syncStatus)
  {
    $this->syncStatus = $syncStatus;
  }
  /**
   * @return self::SYNC_STATUS_*
   */
  public function getSyncStatus()
  {
    return $this->syncStatus;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PseudonymousIdInfo::class, 'Google_Service_DataManager_PseudonymousIdInfo');
