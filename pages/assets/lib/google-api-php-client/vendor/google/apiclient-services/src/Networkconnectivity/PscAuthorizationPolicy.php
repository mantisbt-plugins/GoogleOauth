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

namespace Google\Service\Networkconnectivity;

class PscAuthorizationPolicy extends \Google\Collection
{
  /**
   * Default value.
   */
  public const AUTHORIZATION_MODE_AUTHORIZATION_MODE_UNSPECIFIED = 'AUTHORIZATION_MODE_UNSPECIFIED';
  /**
   * In this mode, authorization is determined by the permissions on the
   * underlying Service Attachment.
   */
  public const AUTHORIZATION_MODE_AUTHORIZATION_MODE_TRANSITIVE_TO_SERVICE_ATTACHMENT = 'AUTHORIZATION_MODE_TRANSITIVE_TO_SERVICE_ATTACHMENT';
  protected $collection_key = 'authorizedClientResources';
  /**
   * Required. The authorization mode.
   *
   * @var string
   */
  public $authorizationMode;
  /**
   * Required. List of authorized consumer resources allowed to connect.
   * Supported values are: 1. Project resource name (e.g.,
   * `projects/{project_id}`) 2. Wildcard `"*"` (grants global ingress
   * authorization to the target).
   *
   * @var string[]
   */
  public $authorizedClientResources;
  /**
   * Output only. The time when the PscAuthorizationPolicy was created.
   *
   * @var string
   */
  public $createTime;
  /**
   * Optional. A description of this resource.
   *
   * @var string
   */
  public $description;
  /**
   * Output only. The etag of the PscAuthorizationPolicy.
   *
   * @var string
   */
  public $etag;
  /**
   * Optional. User-defined labels.
   *
   * @var string[]
   */
  public $labels;
  /**
   * Identifier. The name of the PscAuthorizationPolicy. Format: projects/{proje
   * ct}/locations/{location}/pscAuthorizationPolicies/{psc_authorization_policy
   * }
   *
   * @var string
   */
  public $name;
  /**
   * Required. The full absolute URI of the targeted resource governed by this
   * policy. For example, for an AgentRegistry resource, the format is:
   * `//agentregistry.googleapis.com/projects/{project}/locations/{location}`
   *
   * @var string
   */
  public $targetResourceUri;
  /**
   * Output only. The unique identifier of the PscAuthorizationPolicy.
   *
   * @var string
   */
  public $uid;
  /**
   * Output only. The time when the PscAuthorizationPolicy was updated.
   *
   * @var string
   */
  public $updateTime;

  /**
   * Required. The authorization mode.
   *
   * Accepted values: AUTHORIZATION_MODE_UNSPECIFIED,
   * AUTHORIZATION_MODE_TRANSITIVE_TO_SERVICE_ATTACHMENT
   *
   * @param self::AUTHORIZATION_MODE_* $authorizationMode
   */
  public function setAuthorizationMode($authorizationMode)
  {
    $this->authorizationMode = $authorizationMode;
  }
  /**
   * @return self::AUTHORIZATION_MODE_*
   */
  public function getAuthorizationMode()
  {
    return $this->authorizationMode;
  }
  /**
   * Required. List of authorized consumer resources allowed to connect.
   * Supported values are: 1. Project resource name (e.g.,
   * `projects/{project_id}`) 2. Wildcard `"*"` (grants global ingress
   * authorization to the target).
   *
   * @param string[] $authorizedClientResources
   */
  public function setAuthorizedClientResources($authorizedClientResources)
  {
    $this->authorizedClientResources = $authorizedClientResources;
  }
  /**
   * @return string[]
   */
  public function getAuthorizedClientResources()
  {
    return $this->authorizedClientResources;
  }
  /**
   * Output only. The time when the PscAuthorizationPolicy was created.
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
   * Optional. A description of this resource.
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
   * Output only. The etag of the PscAuthorizationPolicy.
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
   * Optional. User-defined labels.
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
   * Identifier. The name of the PscAuthorizationPolicy. Format: projects/{proje
   * ct}/locations/{location}/pscAuthorizationPolicies/{psc_authorization_policy
   * }
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
   * Required. The full absolute URI of the targeted resource governed by this
   * policy. For example, for an AgentRegistry resource, the format is:
   * `//agentregistry.googleapis.com/projects/{project}/locations/{location}`
   *
   * @param string $targetResourceUri
   */
  public function setTargetResourceUri($targetResourceUri)
  {
    $this->targetResourceUri = $targetResourceUri;
  }
  /**
   * @return string
   */
  public function getTargetResourceUri()
  {
    return $this->targetResourceUri;
  }
  /**
   * Output only. The unique identifier of the PscAuthorizationPolicy.
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
   * Output only. The time when the PscAuthorizationPolicy was updated.
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
class_alias(PscAuthorizationPolicy::class, 'Google_Service_Networkconnectivity_PscAuthorizationPolicy');
