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

namespace Google\Service\SA360;

class GoogleAdsSearchads360V23ServicesGclidDateTimePair extends \Google\Model
{
  /**
   * The date time at which the original conversion for this adjustment
   * occurred. The timezone must be specified. The format is "yyyy-mm-dd
   * hh:mm:ss+|-hh:mm", for example, "2019-01-01 12:32:45-08:00".
   *
   * @var string
   */
  public $conversionDateTime;
  /**
   * Google click ID (gclid) associated with the original conversion for this
   * adjustment.
   *
   * @var string
   */
  public $gclid;

  /**
   * The date time at which the original conversion for this adjustment
   * occurred. The timezone must be specified. The format is "yyyy-mm-dd
   * hh:mm:ss+|-hh:mm", for example, "2019-01-01 12:32:45-08:00".
   *
   * @param string $conversionDateTime
   */
  public function setConversionDateTime($conversionDateTime)
  {
    $this->conversionDateTime = $conversionDateTime;
  }
  /**
   * @return string
   */
  public function getConversionDateTime()
  {
    return $this->conversionDateTime;
  }
  /**
   * Google click ID (gclid) associated with the original conversion for this
   * adjustment.
   *
   * @param string $gclid
   */
  public function setGclid($gclid)
  {
    $this->gclid = $gclid;
  }
  /**
   * @return string
   */
  public function getGclid()
  {
    return $this->gclid;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesGclidDateTimePair::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesGclidDateTimePair');
