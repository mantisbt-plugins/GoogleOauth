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

class MarketingDataInsightsAttribute extends \Google\Model
{
  public const AGE_RANGE_AGE_RANGE_UNSPECIFIED = 'AGE_RANGE_UNSPECIFIED';
  public const AGE_RANGE_AGE_RANGE_UNKNOWN = 'AGE_RANGE_UNKNOWN';
  public const AGE_RANGE_AGE_RANGE_18_24 = 'AGE_RANGE_18_24';
  public const AGE_RANGE_AGE_RANGE_25_34 = 'AGE_RANGE_25_34';
  public const AGE_RANGE_AGE_RANGE_35_44 = 'AGE_RANGE_35_44';
  public const AGE_RANGE_AGE_RANGE_45_54 = 'AGE_RANGE_45_54';
  public const AGE_RANGE_AGE_RANGE_55_64 = 'AGE_RANGE_55_64';
  public const AGE_RANGE_AGE_RANGE_65_UP = 'AGE_RANGE_65_UP';
  public const GENDER_GENDER_UNSPECIFIED = 'GENDER_UNSPECIFIED';
  public const GENDER_GENDER_UNKNOWN = 'GENDER_UNKNOWN';
  public const GENDER_GENDER_MALE = 'GENDER_MALE';
  public const GENDER_GENDER_FEMALE = 'GENDER_FEMALE';
  /**
   * @var string
   */
  public $ageRange;
  /**
   * @var string
   */
  public $gender;
  /**
   * @var float
   */
  public $lift;
  /**
   * @var string
   */
  public $userInterestId;

  /**
   * @param self::AGE_RANGE_* $ageRange
   */
  public function setAgeRange($ageRange)
  {
    $this->ageRange = $ageRange;
  }
  /**
   * @return self::AGE_RANGE_*
   */
  public function getAgeRange()
  {
    return $this->ageRange;
  }
  /**
   * @param self::GENDER_* $gender
   */
  public function setGender($gender)
  {
    $this->gender = $gender;
  }
  /**
   * @return self::GENDER_*
   */
  public function getGender()
  {
    return $this->gender;
  }
  /**
   * @param float $lift
   */
  public function setLift($lift)
  {
    $this->lift = $lift;
  }
  /**
   * @return float
   */
  public function getLift()
  {
    return $this->lift;
  }
  /**
   * @param string $userInterestId
   */
  public function setUserInterestId($userInterestId)
  {
    $this->userInterestId = $userInterestId;
  }
  /**
   * @return string
   */
  public function getUserInterestId()
  {
    return $this->userInterestId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(MarketingDataInsightsAttribute::class, 'Google_Service_DataManager_MarketingDataInsightsAttribute');
