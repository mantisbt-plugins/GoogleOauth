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

class UserListLicenseMetrics extends \Google\Model
{
  /**
   * @var string
   */
  public $clickCount;
  /**
   * @var string
   */
  public $endDate;
  /**
   * @var string
   */
  public $impressionCount;
  /**
   * @var string
   */
  public $revenueUsdMicros;
  /**
   * @var string
   */
  public $startDate;

  /**
   * @param string $clickCount
   */
  public function setClickCount($clickCount)
  {
    $this->clickCount = $clickCount;
  }
  /**
   * @return string
   */
  public function getClickCount()
  {
    return $this->clickCount;
  }
  /**
   * @param string $endDate
   */
  public function setEndDate($endDate)
  {
    $this->endDate = $endDate;
  }
  /**
   * @return string
   */
  public function getEndDate()
  {
    return $this->endDate;
  }
  /**
   * @param string $impressionCount
   */
  public function setImpressionCount($impressionCount)
  {
    $this->impressionCount = $impressionCount;
  }
  /**
   * @return string
   */
  public function getImpressionCount()
  {
    return $this->impressionCount;
  }
  /**
   * @param string $revenueUsdMicros
   */
  public function setRevenueUsdMicros($revenueUsdMicros)
  {
    $this->revenueUsdMicros = $revenueUsdMicros;
  }
  /**
   * @return string
   */
  public function getRevenueUsdMicros()
  {
    return $this->revenueUsdMicros;
  }
  /**
   * @param string $startDate
   */
  public function setStartDate($startDate)
  {
    $this->startDate = $startDate;
  }
  /**
   * @return string
   */
  public function getStartDate()
  {
    return $this->startDate;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(UserListLicenseMetrics::class, 'Google_Service_DataManager_UserListLicenseMetrics');
