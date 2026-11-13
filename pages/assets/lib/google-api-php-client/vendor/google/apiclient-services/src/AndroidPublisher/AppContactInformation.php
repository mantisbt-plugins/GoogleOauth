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

namespace Google\Service\AndroidPublisher;

class AppContactInformation extends \Google\Model
{
  /**
   * The contact email for this app. Always set.
   *
   * @var string
   */
  public $contactEmail;
  /**
   * The contact phone for this app. Optionally provided by the developer.
   *
   * @var string
   */
  public $phoneNumber;
  /**
   * The contact website url for this app. Optionally provided by the developer.
   *
   * @var string
   */
  public $websiteUrl;

  /**
   * The contact email for this app. Always set.
   *
   * @param string $contactEmail
   */
  public function setContactEmail($contactEmail)
  {
    $this->contactEmail = $contactEmail;
  }
  /**
   * @return string
   */
  public function getContactEmail()
  {
    return $this->contactEmail;
  }
  /**
   * The contact phone for this app. Optionally provided by the developer.
   *
   * @param string $phoneNumber
   */
  public function setPhoneNumber($phoneNumber)
  {
    $this->phoneNumber = $phoneNumber;
  }
  /**
   * @return string
   */
  public function getPhoneNumber()
  {
    return $this->phoneNumber;
  }
  /**
   * The contact website url for this app. Optionally provided by the developer.
   *
   * @param string $websiteUrl
   */
  public function setWebsiteUrl($websiteUrl)
  {
    $this->websiteUrl = $websiteUrl;
  }
  /**
   * @return string
   */
  public function getWebsiteUrl()
  {
    return $this->websiteUrl;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AppContactInformation::class, 'Google_Service_AndroidPublisher_AppContactInformation');
