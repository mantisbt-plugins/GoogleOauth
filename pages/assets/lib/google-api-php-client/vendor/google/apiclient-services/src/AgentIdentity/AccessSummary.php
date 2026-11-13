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

class AccessSummary extends \Google\Collection
{
  /**
   * Unspecified auth provider type.
   */
  public const AUTH_PROVIDER_TYPE_AUTH_PROVIDER_TYPE_UNSPECIFIED = 'AUTH_PROVIDER_TYPE_UNSPECIFIED';
  /**
   * 3-legged OAuth (3LO) auth provider type.
   */
  public const AUTH_PROVIDER_TYPE_AUTH_PROVIDER_TYPE_THREE_LEGGED_OAUTH = 'AUTH_PROVIDER_TYPE_THREE_LEGGED_OAUTH';
  /**
   * 2-legged OAuth (2LO) auth provider type.
   */
  public const AUTH_PROVIDER_TYPE_AUTH_PROVIDER_TYPE_TWO_LEGGED_OAUTH = 'AUTH_PROVIDER_TYPE_TWO_LEGGED_OAUTH';
  /**
   * API key auth provider type.
   */
  public const AUTH_PROVIDER_TYPE_AUTH_PROVIDER_TYPE_API_KEY = 'AUTH_PROVIDER_TYPE_API_KEY';
  /**
   * Gemini Enterprise auth provider type.
   */
  public const AUTH_PROVIDER_TYPE_AUTH_PROVIDER_TYPE_GEMINI_ENTERPRISE = 'AUTH_PROVIDER_TYPE_GEMINI_ENTERPRISE';
  /**
   * Cross-App Access auth provider type.
   */
  public const AUTH_PROVIDER_TYPE_AUTH_PROVIDER_TYPE_CROSS_APP_ACCESS = 'AUTH_PROVIDER_TYPE_CROSS_APP_ACCESS';
  /**
   * Connector Reference auth provider type.
   */
  public const AUTH_PROVIDER_TYPE_AUTH_PROVIDER_TYPE_CONNECTOR_REFERENCE = 'AUTH_PROVIDER_TYPE_CONNECTOR_REFERENCE';
  protected $collection_key = 'scopes';
  /**
   * Output only. The auth provider that this access summary is associated with.
   *
   * @var string
   */
  public $authProvider;
  /**
   * Output only. The auth provider type used to create this access summary.
   *
   * @var string
   */
  public $authProviderType;
  /**
   * Output only. The first time this user interacted with this workload,
   * rounded to the previous hour.
   *
   * @var string
   */
  public $firstAccessTime;
  /**
   * Optional. Labels as key-value pairs.
   *
   * @var string[]
   */
  public $labels;
  /**
   * Output only. The most recent time this user interacted with this workload,
   * rounded to the previous hour.
   *
   * @var string
   */
  public $lastAccessTime;
  /**
   * Output only. Identifier. The resource name of the access summary.
   *
   * @var string
   */
  public $name;
  /**
   * Output only. The time when this access summary is permanently deleted.
   *
   * @var string
   */
  public $purgeTime;
  /**
   * Output only. All scopes that have been used by this user with this
   * workload. The number of scopes is limited to 200.
   *
   * @var string[]
   */
  public $scopes;
  /**
   * Output only. The URL of the authentication server that was accessed.
   *
   * @var string
   */
  public $tokenUrl;
  /**
   * Output only. The user ID provided by the workload application for this
   * user. Not verified by Google.
   *
   * @var string
   */
  public $userId;
  /**
   * Output only. The identity bound to the workload that this user interacted
   * with to produce this access summary. Typically an agentic SPIFFE ID.
   *
   * @var string
   */
  public $workloadId;

  /**
   * Output only. The auth provider that this access summary is associated with.
   *
   * @param string $authProvider
   */
  public function setAuthProvider($authProvider)
  {
    $this->authProvider = $authProvider;
  }
  /**
   * @return string
   */
  public function getAuthProvider()
  {
    return $this->authProvider;
  }
  /**
   * Output only. The auth provider type used to create this access summary.
   *
   * Accepted values: AUTH_PROVIDER_TYPE_UNSPECIFIED,
   * AUTH_PROVIDER_TYPE_THREE_LEGGED_OAUTH, AUTH_PROVIDER_TYPE_TWO_LEGGED_OAUTH,
   * AUTH_PROVIDER_TYPE_API_KEY, AUTH_PROVIDER_TYPE_GEMINI_ENTERPRISE,
   * AUTH_PROVIDER_TYPE_CROSS_APP_ACCESS, AUTH_PROVIDER_TYPE_CONNECTOR_REFERENCE
   *
   * @param self::AUTH_PROVIDER_TYPE_* $authProviderType
   */
  public function setAuthProviderType($authProviderType)
  {
    $this->authProviderType = $authProviderType;
  }
  /**
   * @return self::AUTH_PROVIDER_TYPE_*
   */
  public function getAuthProviderType()
  {
    return $this->authProviderType;
  }
  /**
   * Output only. The first time this user interacted with this workload,
   * rounded to the previous hour.
   *
   * @param string $firstAccessTime
   */
  public function setFirstAccessTime($firstAccessTime)
  {
    $this->firstAccessTime = $firstAccessTime;
  }
  /**
   * @return string
   */
  public function getFirstAccessTime()
  {
    return $this->firstAccessTime;
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
   * Output only. The most recent time this user interacted with this workload,
   * rounded to the previous hour.
   *
   * @param string $lastAccessTime
   */
  public function setLastAccessTime($lastAccessTime)
  {
    $this->lastAccessTime = $lastAccessTime;
  }
  /**
   * @return string
   */
  public function getLastAccessTime()
  {
    return $this->lastAccessTime;
  }
  /**
   * Output only. Identifier. The resource name of the access summary.
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
   * Output only. The time when this access summary is permanently deleted.
   *
   * @param string $purgeTime
   */
  public function setPurgeTime($purgeTime)
  {
    $this->purgeTime = $purgeTime;
  }
  /**
   * @return string
   */
  public function getPurgeTime()
  {
    return $this->purgeTime;
  }
  /**
   * Output only. All scopes that have been used by this user with this
   * workload. The number of scopes is limited to 200.
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
   * Output only. The URL of the authentication server that was accessed.
   *
   * @param string $tokenUrl
   */
  public function setTokenUrl($tokenUrl)
  {
    $this->tokenUrl = $tokenUrl;
  }
  /**
   * @return string
   */
  public function getTokenUrl()
  {
    return $this->tokenUrl;
  }
  /**
   * Output only. The user ID provided by the workload application for this
   * user. Not verified by Google.
   *
   * @param string $userId
   */
  public function setUserId($userId)
  {
    $this->userId = $userId;
  }
  /**
   * @return string
   */
  public function getUserId()
  {
    return $this->userId;
  }
  /**
   * Output only. The identity bound to the workload that this user interacted
   * with to produce this access summary. Typically an agentic SPIFFE ID.
   *
   * @param string $workloadId
   */
  public function setWorkloadId($workloadId)
  {
    $this->workloadId = $workloadId;
  }
  /**
   * @return string
   */
  public function getWorkloadId()
  {
    return $this->workloadId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AccessSummary::class, 'Google_Service_AgentIdentity_AccessSummary');
