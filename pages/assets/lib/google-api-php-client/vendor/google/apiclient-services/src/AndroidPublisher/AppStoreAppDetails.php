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

class AppStoreAppDetails extends \Google\Model
{
  /**
   * Required. The app developer's contact email address.
   *
   * @var string
   */
  public $contactEmail;
  /**
   * Required. The app developer's name.
   *
   * @var string
   */
  public $developerName;
  /**
   * Optional. Website link for the developer or app.
   *
   * @var string
   */
  public $developerWebsite;

  /**
   * Required. The app developer's contact email address.
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
   * Required. The app developer's name.
   *
   * @param string $developerName
   */
  public function setDeveloperName($developerName)
  {
    $this->developerName = $developerName;
  }
  /**
   * @return string
   */
  public function getDeveloperName()
  {
    return $this->developerName;
  }
  /**
   * Optional. Website link for the developer or app.
   *
   * @param string $developerWebsite
   */
  public function setDeveloperWebsite($developerWebsite)
  {
    $this->developerWebsite = $developerWebsite;
  }
  /**
   * @return string
   */
  public function getDeveloperWebsite()
  {
    return $this->developerWebsite;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AppStoreAppDetails::class, 'Google_Service_AndroidPublisher_AppStoreAppDetails');
