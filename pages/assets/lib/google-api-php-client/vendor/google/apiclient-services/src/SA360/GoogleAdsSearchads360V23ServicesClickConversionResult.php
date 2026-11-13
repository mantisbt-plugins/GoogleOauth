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

class GoogleAdsSearchads360V23ServicesClickConversionResult extends \Google\Collection
{
  protected $collection_key = 'userIdentifiers';
  /**
   * Resource name of the conversion action associated with this conversion.
   *
   * @var string
   */
  public $conversionAction;
  /**
   * The date time at which the conversion occurred. The format is "yyyy-mm-dd
   * hh:mm:ss+|-hh:mm", for example, "2019-01-01 12:32:45-08:00".
   *
   * @var string
   */
  public $conversionDateTime;
  /**
   * The URL parameter for clicks associated with app conversions.
   *
   * @var string
   */
  public $gbraid;
  /**
   * The Google Click ID (gclid) associated with this conversion.
   *
   * @var string
   */
  public $gclid;
  protected $userIdentifiersType = GoogleAdsSearchads360V23CommonUserIdentifier::class;
  protected $userIdentifiersDataType = 'array';
  /**
   * The URL parameter for clicks associated with web conversions.
   *
   * @var string
   */
  public $wbraid;

  /**
   * Resource name of the conversion action associated with this conversion.
   *
   * @param string $conversionAction
   */
  public function setConversionAction($conversionAction)
  {
    $this->conversionAction = $conversionAction;
  }
  /**
   * @return string
   */
  public function getConversionAction()
  {
    return $this->conversionAction;
  }
  /**
   * The date time at which the conversion occurred. The format is "yyyy-mm-dd
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
   * The URL parameter for clicks associated with app conversions.
   *
   * @param string $gbraid
   */
  public function setGbraid($gbraid)
  {
    $this->gbraid = $gbraid;
  }
  /**
   * @return string
   */
  public function getGbraid()
  {
    return $this->gbraid;
  }
  /**
   * The Google Click ID (gclid) associated with this conversion.
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
  /**
   * The user identifiers associated with this conversion. Only hashed_email and
   * hashed_phone_number are supported for conversion uploads. The maximum
   * number of user identifiers for each conversion is 5.
   *
   * @param GoogleAdsSearchads360V23CommonUserIdentifier[] $userIdentifiers
   */
  public function setUserIdentifiers($userIdentifiers)
  {
    $this->userIdentifiers = $userIdentifiers;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonUserIdentifier[]
   */
  public function getUserIdentifiers()
  {
    return $this->userIdentifiers;
  }
  /**
   * The URL parameter for clicks associated with web conversions.
   *
   * @param string $wbraid
   */
  public function setWbraid($wbraid)
  {
    $this->wbraid = $wbraid;
  }
  /**
   * @return string
   */
  public function getWbraid()
  {
    return $this->wbraid;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesClickConversionResult::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesClickConversionResult');
