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

class DeveloperDetails extends \Google\Model
{
  /**
   * The physical address of the developer.
   *
   * @var string
   */
  public $address;
  /**
   * The contact email of the developer.
   *
   * @var string
   */
  public $contactEmail;
  /**
   * The developer name of the app.
   *
   * @var string
   */
  public $developerName;
  /**
   * The phone number of the developer.
   *
   * @var string
   */
  public $phoneNumber;
  /**
   * The website of the developer.
   *
   * @var string
   */
  public $website;

  /**
   * The physical address of the developer.
   *
   * @param string $address
   */
  public function setAddress($address)
  {
    $this->address = $address;
  }
  /**
   * @return string
   */
  public function getAddress()
  {
    return $this->address;
  }
  /**
   * The contact email of the developer.
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
   * The developer name of the app.
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
   * The phone number of the developer.
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
   * The website of the developer.
   *
   * @param string $website
   */
  public function setWebsite($website)
  {
    $this->website = $website;
  }
  /**
   * @return string
   */
  public function getWebsite()
  {
    return $this->website;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DeveloperDetails::class, 'Google_Service_AndroidPublisher_DeveloperDetails');
