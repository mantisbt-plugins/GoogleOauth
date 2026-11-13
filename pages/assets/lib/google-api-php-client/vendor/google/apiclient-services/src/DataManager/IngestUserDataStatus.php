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

class IngestUserDataStatus extends \Google\Model
{
  public const UPLOAD_MATCH_RATE_RANGE_MATCH_RATE_RANGE_UNKNOWN = 'MATCH_RATE_RANGE_UNKNOWN';
  public const UPLOAD_MATCH_RATE_RANGE_MATCH_RATE_RANGE_NOT_ELIGIBLE = 'MATCH_RATE_RANGE_NOT_ELIGIBLE';
  public const UPLOAD_MATCH_RATE_RANGE_MATCH_RATE_RANGE_LESS_THAN_20 = 'MATCH_RATE_RANGE_LESS_THAN_20';
  public const UPLOAD_MATCH_RATE_RANGE_MATCH_RATE_RANGE_20_TO_30 = 'MATCH_RATE_RANGE_20_TO_30';
  public const UPLOAD_MATCH_RATE_RANGE_MATCH_RATE_RANGE_31_TO_40 = 'MATCH_RATE_RANGE_31_TO_40';
  public const UPLOAD_MATCH_RATE_RANGE_MATCH_RATE_RANGE_41_TO_50 = 'MATCH_RATE_RANGE_41_TO_50';
  public const UPLOAD_MATCH_RATE_RANGE_MATCH_RATE_RANGE_51_TO_60 = 'MATCH_RATE_RANGE_51_TO_60';
  public const UPLOAD_MATCH_RATE_RANGE_MATCH_RATE_RANGE_61_TO_70 = 'MATCH_RATE_RANGE_61_TO_70';
  public const UPLOAD_MATCH_RATE_RANGE_MATCH_RATE_RANGE_71_TO_80 = 'MATCH_RATE_RANGE_71_TO_80';
  public const UPLOAD_MATCH_RATE_RANGE_MATCH_RATE_RANGE_81_TO_90 = 'MATCH_RATE_RANGE_81_TO_90';
  public const UPLOAD_MATCH_RATE_RANGE_MATCH_RATE_RANGE_91_TO_100 = 'MATCH_RATE_RANGE_91_TO_100';
  /**
   * @var string
   */
  public $recordCount;
  /**
   * @var string
   */
  public $uploadMatchRateRange;
  /**
   * @var string
   */
  public $userIdentifierCount;

  /**
   * @param string $recordCount
   */
  public function setRecordCount($recordCount)
  {
    $this->recordCount = $recordCount;
  }
  /**
   * @return string
   */
  public function getRecordCount()
  {
    return $this->recordCount;
  }
  /**
   * @param self::UPLOAD_MATCH_RATE_RANGE_* $uploadMatchRateRange
   */
  public function setUploadMatchRateRange($uploadMatchRateRange)
  {
    $this->uploadMatchRateRange = $uploadMatchRateRange;
  }
  /**
   * @return self::UPLOAD_MATCH_RATE_RANGE_*
   */
  public function getUploadMatchRateRange()
  {
    return $this->uploadMatchRateRange;
  }
  /**
   * @param string $userIdentifierCount
   */
  public function setUserIdentifierCount($userIdentifierCount)
  {
    $this->userIdentifierCount = $userIdentifierCount;
  }
  /**
   * @return string
   */
  public function getUserIdentifierCount()
  {
    return $this->userIdentifierCount;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(IngestUserDataStatus::class, 'Google_Service_DataManager_IngestUserDataStatus');
