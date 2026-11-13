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

class GoogleAdsSearchads360V23ServicesSessionAttributeKeyValuePair extends \Google\Model
{
  /**
   * Required. The name of the session attribute.
   *
   * @var string
   */
  public $sessionAttributeKey;
  /**
   * Required. The value of the session attribute.
   *
   * @var string
   */
  public $sessionAttributeValue;

  /**
   * Required. The name of the session attribute.
   *
   * @param string $sessionAttributeKey
   */
  public function setSessionAttributeKey($sessionAttributeKey)
  {
    $this->sessionAttributeKey = $sessionAttributeKey;
  }
  /**
   * @return string
   */
  public function getSessionAttributeKey()
  {
    return $this->sessionAttributeKey;
  }
  /**
   * Required. The value of the session attribute.
   *
   * @param string $sessionAttributeValue
   */
  public function setSessionAttributeValue($sessionAttributeValue)
  {
    $this->sessionAttributeValue = $sessionAttributeValue;
  }
  /**
   * @return string
   */
  public function getSessionAttributeValue()
  {
    return $this->sessionAttributeValue;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesSessionAttributeKeyValuePair::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesSessionAttributeKeyValuePair');
