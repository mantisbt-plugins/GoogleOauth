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

class GoogleAdsSearchads360V23ServicesCallConversionResult extends \Google\Model
{
  /**
   * The date time at which the call occurred. The format is "yyyy-mm-dd
   * hh:mm:ss+|-hh:mm", for example, "2019-01-01 12:32:45-08:00".
   *
   * @var string
   */
  public $callStartDateTime;
  /**
   * The caller id from which this call was placed. Caller id is expected to be
   * in E.164 format with preceding '+' sign.
   *
   * @var string
   */
  public $callerId;
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
   * The date time at which the call occurred. The format is "yyyy-mm-dd
   * hh:mm:ss+|-hh:mm", for example, "2019-01-01 12:32:45-08:00".
   *
   * @param string $callStartDateTime
   */
  public function setCallStartDateTime($callStartDateTime)
  {
    $this->callStartDateTime = $callStartDateTime;
  }
  /**
   * @return string
   */
  public function getCallStartDateTime()
  {
    return $this->callStartDateTime;
  }
  /**
   * The caller id from which this call was placed. Caller id is expected to be
   * in E.164 format with preceding '+' sign.
   *
   * @param string $callerId
   */
  public function setCallerId($callerId)
  {
    $this->callerId = $callerId;
  }
  /**
   * @return string
   */
  public function getCallerId()
  {
    return $this->callerId;
  }
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesCallConversionResult::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesCallConversionResult');
