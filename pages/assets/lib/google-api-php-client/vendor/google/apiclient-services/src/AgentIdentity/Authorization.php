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

namespace Google\Service\AgentIdentity;

class Authorization extends \Google\Collection
{
  /**
   * Unspecified state.
   */
  public const STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * Active.
   */
  public const STATE_ACTIVE = 'ACTIVE';
  /**
   * Suspended.
   */
  public const STATE_SUSPENDED = 'SUSPENDED';
  protected $collection_key = 'scopes';
  /**
   * Output only. The client user ID provided by the client application for
   * their end user. Not verified by Google.
   *
   * @var string
   */
  public $clientUserId;
  /**
   * Output only. The creation timestamp.
   *
   * @var string
   */
  public $createTime;
  /**
   * Identifier. The resource name of the authorization.
   *
   * @var string
   */
  public $name;
  /**
   * Output only. The scopes actually granted by the end user during the consent
   * flow.
   *
   * @var string[]
   */
  public $scopes;
  /**
   * Output only. The state of the authorization.
   *
   * @var string
   */
  public $state;
  /**
   * Output only. The update timestamp.
   *
   * @var string
   */
  public $updateTime;

  /**
   * Output only. The client user ID provided by the client application for
   * their end user. Not verified by Google.
   *
   * @param string $clientUserId
   */
  public function setClientUserId($clientUserId)
  {
    $this->clientUserId = $clientUserId;
  }
  /**
   * @return string
   */
  public function getClientUserId()
  {
    return $this->clientUserId;
  }
  /**
   * Output only. The creation timestamp.
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
   * Identifier. The resource name of the authorization.
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
   * Output only. The scopes actually granted by the end user during the consent
   * flow.
   *
   * @param string[] $scopes
   */
  public function setScopes($scopes)
  {
    $this->scopes = $scopes;
  }
  /**
   * @return string[]
   */
  public function getScopes()
  {
    return $this->scopes;
  }
  /**
   * Output only. The state of the authorization.
   *
   * Accepted values: STATE_UNSPECIFIED, ACTIVE, SUSPENDED
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
   * Output only. The update timestamp.
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
class_alias(Authorization::class, 'Google_Service_AgentIdentity_Authorization');
