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

namespace Google\Service\Reports;

class SharedDriveIdentity extends \Google\Model
{
  /**
   * Shared drive gaia id.
   *
   * @var string
   */
  public $id;
  /**
   * Shared drive name.
   *
   * @var string
   */
  public $sharedDriveName;

  /**
   * Shared drive gaia id.
   *
   * @param string $id
   */
  public function setId($id)
  {
    $this->id = $id;
  }
  /**
   * @return string
   */
  public function getId()
  {
    return $this->id;
  }
  /**
   * Shared drive name.
   *
   * @param string $sharedDriveName
   */
  public function setSharedDriveName($sharedDriveName)
  {
    $this->sharedDriveName = $sharedDriveName;
  }
  /**
   * @return string
   */
  public function getSharedDriveName()
  {
    return $this->sharedDriveName;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SharedDriveIdentity::class, 'Google_Service_Reports_SharedDriveIdentity');
