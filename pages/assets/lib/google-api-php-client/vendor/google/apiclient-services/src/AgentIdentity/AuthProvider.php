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

class AuthProvider extends \Google\Collection
{
  /**
   * Unspecified state.
   */
  public const STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * Enabled and can be used.
   */
  public const STATE_ENABLED = 'ENABLED';
  /**
   * Disabled and cannot be used.
   */
  public const STATE_DISABLED = 'DISABLED';
  protected $collection_key = 'workloadIds';
  /**
   * Optional. List of scopes that are allowed to be requested for this auth
   * provider. If this list is non-empty, only scopes within this list may be
   * requested. If this list is empty, all scopes may be requested. Scopes
   * appearing in `blocked_scopes` are disallowed even if they appear in
   * `allowed_scopes`. The number of allowed scopes is limited to 200.
   *
   * @var string[]
   */
  public $allowedScopes;
  protected $authProviderTypeParamsType = AuthProviderTypeParams::class;
  protected $authProviderTypeParamsDataType = '';
  /**
   * Optional. List of scopes that are blocked from being requested for this
   * auth provider. If a scope appears in this list, it will not be requested,
   * even if it also appears in `allowed_scopes`. `blocked_scopes` takes
   * precedence over `allowed_scopes`. The number of blocked scopes is limited
   * to 200.
   *
   * @var string[]
   */
  public $blockedScopes;
  /**
   * Output only. The creation timestamp.
   *
   * @var string
   */
  public $createTime;
  /**
   * Output only. Set to `true` if the auth provider is deleted.
   *
   * @var bool
   */
  public $deleted;
  /**
   * Optional. Description of the resource. Must be less than 256 characters.
   *
   * @var string
   */
  public $description;
  /**
   * Output only. The time when the auth provider will expire.
   *
   * @var string
   */
  public $expireTime;
  /**
   * Optional. Labels as key-value pairs.
   *
   * @var string[]
   */
  public $labels;
  /**
   * Identifier. The full resource name of the auth provider. Format:
   * projects/{project}/locations/{location}/authProviders/{auth_provider}
   *
   * @var string
   */
  public $name;
  /**
   * Output only. The state of the auth provider.
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
   * Optional. Input only. Identifiers for the agents that will use this auth
   * provider, starting with `principal://`. For example: `principal://agents.gl
   * obal.org-
   * ${ORG_ID}.system.id.goog/resources/aiplatform/projects/{PROJECT_ID}/locatio
   * ns/{LOCATIONS}/reasoningEngines/{ID}`
   *
   * @var string[]
   */
  public $workloadIds;

  /**
   * Optional. List of scopes that are allowed to be requested for this auth
   * provider. If this list is non-empty, only scopes within this list may be
   * requested. If this list is empty, all scopes may be requested. Scopes
   * appearing in `blocked_scopes` are disallowed even if they appear in
   * `allowed_scopes`. The number of allowed scopes is limited to 200.
   *
   * @param string[] $allowedScopes
   */
  public function setAllowedScopes($allowedScopes)
  {
    $this->allowedScopes = $allowedScopes;
  }
  /**
   * @return string[]
   */
  public function getAllowedScopes()
  {
    return $this->allowedScopes;
  }
  /**
   * Required. Parameters specific to the auth provider type.
   *
   * @param AuthProviderTypeParams $authProviderTypeParams
   */
  public function setAuthProviderTypeParams(AuthProviderTypeParams $authProviderTypeParams)
  {
    $this->authProviderTypeParams = $authProviderTypeParams;
  }
  /**
   * @return AuthProviderTypeParams
   */
  public function getAuthProviderTypeParams()
  {
    return $this->authProviderTypeParams;
  }
  /**
   * Optional. List of scopes that are blocked from being requested for this
   * auth provider. If a scope appears in this list, it will not be requested,
   * even if it also appears in `allowed_scopes`. `blocked_scopes` takes
   * precedence over `allowed_scopes`. The number of blocked scopes is limited
   * to 200.
   *
   * @param string[] $blockedScopes
   */
  public function setBlockedScopes($blockedScopes)
  {
    $this->blockedScopes = $blockedScopes;
  }
  /**
   * @return string[]
   */
  public function getBlockedScopes()
  {
    return $this->blockedScopes;
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
   * Output only. Set to `true` if the auth provider is deleted.
   *
   * @param bool $deleted
   */
  public function setDeleted($deleted)
  {
    $this->deleted = $deleted;
  }
  /**
   * @return bool
   */
  public function getDeleted()
  {
    return $this->deleted;
  }
  /**
   * Optional. Description of the resource. Must be less than 256 characters.
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
   * Output only. The time when the auth provider will expire.
   *
   * @param string $expireTime
   */
  public function setExpireTime($expireTime)
  {
    $this->expireTime = $expireTime;
  }
  /**
   * @return string
   */
  public function getExpireTime()
  {
    return $this->expireTime;
  }
  /**
   * Optional. Labels as key-value pairs.
   *
   * @param string[] $labels
   */
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  /**
   * @return string[]
   */
  public function getLabels()
  {
    return $this->labels;
  }
  /**
   * Identifier. The full resource name of the auth provider. Format:
   * projects/{project}/locations/{location}/authProviders/{auth_provider}
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
   * Output only. The state of the auth provider.
   *
   * Accepted values: STATE_UNSPECIFIED, ENABLED, DISABLED
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
  /**
   * Optional. Input only. Identifiers for the agents that will use this auth
   * provider, starting with `principal://`. For example: `principal://agents.gl
   * obal.org-
   * ${ORG_ID}.system.id.goog/resources/aiplatform/projects/{PROJECT_ID}/locatio
   * ns/{LOCATIONS}/reasoningEngines/{ID}`
   *
   * @param string[] $workloadIds
   */
  public function setWorkloadIds($workloadIds)
  {
    $this->workloadIds = $workloadIds;
  }
  /**
   * @return string[]
   */
  public function getWorkloadIds()
  {
    return $this->workloadIds;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AuthProvider::class, 'Google_Service_AgentIdentity_AuthProvider');
