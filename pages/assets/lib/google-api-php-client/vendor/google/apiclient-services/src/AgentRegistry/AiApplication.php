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

namespace Google\Service\AgentRegistry;

class AiApplication extends \Google\Model
{
  /**
   * Default value. This value is unused.
   */
  public const STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * The resource is being provisioned or created.
   */
  public const STATE_CREATING = 'CREATING';
  /**
   * The resource is active and ready for use.
   */
  public const STATE_ACTIVE = 'ACTIVE';
  /**
   * The resource is in the process of being deleted.
   */
  public const STATE_DELETING = 'DELETING';
  protected $applicationPropertiesType = ApplicationProperties::class;
  protected $applicationPropertiesDataType = '';
  protected $attributesType = Attributes::class;
  protected $attributesDataType = '';
  /**
   * Output only. Creation time.
   *
   * @var string
   */
  public $createTime;
  /**
   * Optional. User-defined description of the AI Application.
   *
   * @var string
   */
  public $description;
  /**
   * Optional. User-defined name for the AI Application.
   *
   * @var string
   */
  public $displayName;
  /**
   * Identifier. Resource name of the AI Application. Format:
   * `projects/{project}/locations/{location}/aiApplications/{ai_application}`
   *
   * @var string
   */
  public $name;
  /**
   * Output only. The current state of the AI Application.
   *
   * @var string
   */
  public $state;
  /**
   * Output only. Universally unique identifier (UUID4) for the AI Application.
   *
   * @var string
   */
  public $uid;
  /**
   * Output only. Last update time.
   *
   * @var string
   */
  public $updateTime;

  /**
   * Output only. Properties of an underlying cloud resource that can comprise
   * an AI Application.
   *
   * @param ApplicationProperties $applicationProperties
   */
  public function setApplicationProperties(ApplicationProperties $applicationProperties)
  {
    $this->applicationProperties = $applicationProperties;
  }
  /**
   * @return ApplicationProperties
   */
  public function getApplicationProperties()
  {
    return $this->applicationProperties;
  }
  /**
   * Optional. Consumer provided attributes.
   *
   * @param Attributes $attributes
   */
  public function setAttributes(Attributes $attributes)
  {
    $this->attributes = $attributes;
  }
  /**
   * @return Attributes
   */
  public function getAttributes()
  {
    return $this->attributes;
  }
  /**
   * Output only. Creation time.
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
   * Optional. User-defined description of the AI Application.
   *
   * @param string $description
   */
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /**
   * @return string
   */
  public function getDescription()
  {
    return $this->description;
  }
  /**
   * Optional. User-defined name for the AI Application.
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
   * Identifier. Resource name of the AI Application. Format:
   * `projects/{project}/locations/{location}/aiApplications/{ai_application}`
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
   * Output only. The current state of the AI Application.
   *
   * Accepted values: STATE_UNSPECIFIED, CREATING, ACTIVE, DELETING
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
   * Output only. Universally unique identifier (UUID4) for the AI Application.
   *
   * @param string $uid
   */
  public function setUid($uid)
  {
    $this->uid = $uid;
  }
  /**
   * @return string
   */
  public function getUid()
  {
    return $this->uid;
  }
  /**
   * Output only. Last update time.
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
class_alias(AiApplication::class, 'Google_Service_AgentRegistry_AiApplication');
