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

class CapabilityConfig extends \Google\Collection
{
  /**
   * Unspecified state.
   */
  public const STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * CapabilityConfig is operational, and the management project is fully
   * active.
   */
  public const STATE_ACTIVE = 'ACTIVE';
  protected $collection_key = 'types';
  /**
   * Optional. The list of Boundaries associated with this CapabilityConfig.
   * Format: `organizations/{organization}/boundaries/{boundary}` or,
   * `folders/{folder}/boundaries/{boundary}` or,
   * `projects/{project}/boundaries/{boundary}`
   *
   * @var string[]
   */
  public $boundaries;
  /**
   * Output only. The creation time of the CapabilityConfig.
   *
   * @var string
   */
  public $createTime;
  /**
   * Optional. Human-readable non-unique display name of the CapabilityConfig.
   * When present it must be between 4 to 30 characters. Allowed characters are:
   * lowercase and uppercase letters, numbers, hyphen, single-quote, double-
   * quote, space, and exclamation point. Example: `My CapabilityConfig`
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
   * Optional. Immutable. The Management Project associated with this
   * CapabilityConfig. If not provided during creation, a management project
   * will be automatically created. Cannot be modified after creation. Format:
   * `projects/{project_number}` Example: `projects/123456789012`
   *
   * @var string
   */
  public $managementProject;
  /**
   * Identifier. The unique resource name of the CapabilityConfig. Format:
   * `organizations/{organization}/capabilityConfigs/{capabilityConfig}` or,
   * `folders/{folder}/capabilityConfigs/{capabilityConfig}` or,
   * `projects/{project}/capabilityConfigs/{capabilityConfig}`
   *
   * @var string
   */
  public $name;
  /**
   * Output only. The lifecycle state of the CapabilityConfig.
   *
   * @var string
   */
  public $state;
  /**
   * Required. The CapabilityConfig types.
   *
   * @var string[]
   */
  public $types;
  /**
   * Output only. The most recent time this CapabilityConfig was modified.
   *
   * @var string
   */
  public $updateTime;

  /**
   * Optional. The list of Boundaries associated with this CapabilityConfig.
   * Format: `organizations/{organization}/boundaries/{boundary}` or,
   * `folders/{folder}/boundaries/{boundary}` or,
   * `projects/{project}/boundaries/{boundary}`
   *
   * @param string[] $boundaries
   */
  public function setBoundaries($boundaries)
  {
    $this->boundaries = $boundaries;
  }
  /**
   * @return string[]
   */
  public function getBoundaries()
  {
    return $this->boundaries;
  }
  /**
   * Output only. The creation time of the CapabilityConfig.
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
   * Optional. Human-readable non-unique display name of the CapabilityConfig.
   * When present it must be between 4 to 30 characters. Allowed characters are:
   * lowercase and uppercase letters, numbers, hyphen, single-quote, double-
   * quote, space, and exclamation point. Example: `My CapabilityConfig`
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
   * Optional. Immutable. The Management Project associated with this
   * CapabilityConfig. If not provided during creation, a management project
   * will be automatically created. Cannot be modified after creation. Format:
   * `projects/{project_number}` Example: `projects/123456789012`
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
   * Identifier. The unique resource name of the CapabilityConfig. Format:
   * `organizations/{organization}/capabilityConfigs/{capabilityConfig}` or,
   * `folders/{folder}/capabilityConfigs/{capabilityConfig}` or,
   * `projects/{project}/capabilityConfigs/{capabilityConfig}`
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
   * Output only. The lifecycle state of the CapabilityConfig.
   *
   * Accepted values: STATE_UNSPECIFIED, ACTIVE
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
   * Required. The CapabilityConfig types.
   *
   * @param string[] $types
   */
  public function setTypes($types)
  {
    $this->types = $types;
  }
  /**
   * @return string[]
   */
  public function getTypes()
  {
    return $this->types;
  }
  /**
   * Output only. The most recent time this CapabilityConfig was modified.
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
class_alias(CapabilityConfig::class, 'Google_Service_CloudResourceManager_CapabilityConfig');
