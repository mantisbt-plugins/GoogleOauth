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

namespace Google\Service\CloudResourceManager;

class Boundary extends \Google\Model
{
  /**
   * Unspecified state.
   */
  public const STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * Boundary is being created.
   */
  public const STATE_CREATING = 'CREATING';
  /**
   * Boundary is operational, and the management project is fully active.
   */
  public const STATE_ACTIVE = 'ACTIVE';
  /**
   * Output only. The creation time of the Boundary.
   *
   * @var string
   */
  public $createTime;
  /**
   * Optional. Human-readable display name of the Boundary. When present it must
   * be between 4 to 30 characters. Allowed characters are: lowercase and
   * uppercase letters, numbers, hyphen, single-quote, double-quote, space, and
   * exclamation point. Example: `My Production Boundary`
   *
   * @var string
   */
  public $displayName;
  /**
   * This checksum is computed by the server based on the value of other fields,
   * and may be sent on update and delete requests to ensure the client has an
   * up-to-date value before proceeding.
   *
   * @var string
   */
  public $etag;
  /**
   * Output only. The Management Project of the CapabilityConfig this Boundary
   * is associated with. Will be empty if the Boundary is not associated with
   * any CapabilityConfig. Format: `projects/{project_number}` Example:
   * `projects/123456789012`
   *
   * @var string
   */
  public $managementProject;
  /**
   * Identifier. The unique resource name of the Boundary. Format: -
   * `organizations/{organization_id}/boundaries/{boundary_id}` -
   * `folders/{folder_id}/boundaries/{boundary_id}` Example:
   * `folders/123456789/boundaries/my-boundary`
   *
   * @var string
   */
  public $name;
  protected $resourceFilterType = ResourceFilter::class;
  protected $resourceFilterDataType = '';
  /**
   * Output only. The lifecycle state of the Boundary.
   *
   * @var string
   */
  public $state;
  /**
   * Output only. The most recent time this Boundary was modified.
   *
   * @var string
   */
  public $updateTime;

  /**
   * Output only. The creation time of the Boundary.
   *
   * @param string $createTime
   */
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  /**
   * @return string
   */
  public function getCreateTime()
  {
    return $this->createTime;
  }
  /**
   * Optional. Human-readable display name of the Boundary. When present it must
   * be between 4 to 30 characters. Allowed characters are: lowercase and
   * uppercase letters, numbers, hyphen, single-quote, double-quote, space, and
   * exclamation point. Example: `My Production Boundary`
   *
   * @param string $displayName
   */
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /**
   * @return string
   */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /**
   * This checksum is computed by the server based on the value of other fields,
   * and may be sent on update and delete requests to ensure the client has an
   * up-to-date value before proceeding.
   *
   * @param string $etag
   */
  public function setEtag($etag)
  {
    $this->etag = $etag;
  }
  /**
   * @return string
   */
  public function getEtag()
  {
    return $this->etag;
  }
  /**
   * Output only. The Management Project of the CapabilityConfig this Boundary
   * is associated with. Will be empty if the Boundary is not associated with
   * any CapabilityConfig. Format: `projects/{project_number}` Example:
   * `projects/123456789012`
   *
   * @param string $managementProject
   */
  public function setManagementProject($managementProject)
  {
    $this->managementProject = $managementProject;
  }
  /**
   * @return string
   */
  public function getManagementProject()
  {
    return $this->managementProject;
  }
  /**
   * Identifier. The unique resource name of the Boundary. Format: -
   * `organizations/{organization_id}/boundaries/{boundary_id}` -
   * `folders/{folder_id}/boundaries/{boundary_id}` Example:
   * `folders/123456789/boundaries/my-boundary`
   *
   * @param string $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * Optional. The filter defining the criteria for descendant projects to be
   * included in the Boundary. Descendant projects are dynamically included in
   * the Boundary based on this filter.
   *
   * @param ResourceFilter $resourceFilter
   */
  public function setResourceFilter(ResourceFilter $resourceFilter)
  {
    $this->resourceFilter = $resourceFilter;
  }
  /**
   * @return ResourceFilter
   */
  public function getResourceFilter()
  {
    return $this->resourceFilter;
  }
  /**
   * Output only. The lifecycle state of the Boundary.
   *
   * Accepted values: STATE_UNSPECIFIED, CREATING, ACTIVE
   *
   * @param self::STATE_* $state
   */
  public function setState($state)
  {
    $this->state = $state;
  }
  /**
   * @return self::STATE_*
   */
  public function getState()
  {
    return $this->state;
  }
  /**
   * Output only. The most recent time this Boundary was modified.
   *
   * @param string $updateTime
   */
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  /**
   * @return string
   */
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Boundary::class, 'Google_Service_CloudResourceManager_Boundary');
