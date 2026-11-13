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

namespace Google\Service\ChromeManagement;

class GoogleChromeManagementVersionsV1MoveChromeBrowsersRequest extends \Google\Collection
{
  protected $collection_key = 'resourceIds';
  /**
   * Required. ID of the destination organizational unit.
   *
   * @var string
   */
  public $destinationOrgUnitId;
  /**
   * Required. List of resource IDs of Chrome Browser Devices to move. A maximum
   * of 600 browsers may be moved per request.
   *
   * @var string[]
   */
  public $resourceIds;

  /**
   * Required. ID of the destination organizational unit.
   *
   * @param string $destinationOrgUnitId
   */
  public function setDestinationOrgUnitId($destinationOrgUnitId)
  {
    $this->destinationOrgUnitId = $destinationOrgUnitId;
  }
  /**
   * @return string
   */
  public function getDestinationOrgUnitId()
  {
    return $this->destinationOrgUnitId;
  }
  /**
   * Required. List of resource IDs of Chrome Browser Devices to move. A maximum
   * of 600 browsers may be moved per request.
   *
   * @param string[] $resourceIds
   */
  public function setResourceIds($resourceIds)
  {
    $this->resourceIds = $resourceIds;
  }
  /**
   * @return string[]
   */
  public function getResourceIds()
  {
    return $this->resourceIds;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleChromeManagementVersionsV1MoveChromeBrowsersRequest::class, 'Google_Service_ChromeManagement_GoogleChromeManagementVersionsV1MoveChromeBrowsersRequest');
