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

namespace Google\Service\CloudDataplex;

class GoogleCloudDataplexV1ContactIdentity extends \Google\Model
{
  /**
   * Optional. Email ID or freeform ID of the Contact person.
   *
   * @var string
   */
  public $contactId;
  /**
   * Required. Name of the contact person for the Data Domain; unvalidated
   * freeform text.
   *
   * @var string
   */
  public $contactName;
  /**
   * Required. Designation of the person i.e. Data Steward or Data Analyst.
   * Example values: owner, steward, producer, admin.
   *
   * @var string
   */
  public $contactRole;

  /**
   * Optional. Email ID or freeform ID of the Contact person.
   *
   * @param string $contactId
   */
  public function setContactId($contactId)
  {
    $this->contactId = $contactId;
  }
  /**
   * @return string
   */
  public function getContactId()
  {
    return $this->contactId;
  }
  /**
   * Required. Name of the contact person for the Data Domain; unvalidated
   * freeform text.
   *
   * @param string $contactName
   */
  public function setContactName($contactName)
  {
    $this->contactName = $contactName;
  }
  /**
   * @return string
   */
  public function getContactName()
  {
    return $this->contactName;
  }
  /**
   * Required. Designation of the person i.e. Data Steward or Data Analyst.
   * Example values: owner, steward, producer, admin.
   *
   * @param string $contactRole
   */
  public function setContactRole($contactRole)
  {
    $this->contactRole = $contactRole;
  }
  /**
   * @return string
   */
  public function getContactRole()
  {
    return $this->contactRole;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDataplexV1ContactIdentity::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1ContactIdentity');
