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

namespace Google\Service\CloudRedis;

class AclPolicy extends \Google\Collection
{
  /**
   * Not set.
   */
  public const STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * ACL policy has been created and is fully usable. Since ACL policy creation
   * is synchronous and not an LRO, there is no CREATING state.
   */
  public const STATE_ACTIVE = 'ACTIVE';
  /**
   * ACL policy is being updated.
   */
  public const STATE_UPDATING = 'UPDATING';
  /**
   * ACL policy is being deleted.
   */
  public const STATE_DELETING = 'DELETING';
  protected $collection_key = 'rules';
  protected $clusterAclPolicyAttachmentsType = ClusterAclPolicyAttachment::class;
  protected $clusterAclPolicyAttachmentsDataType = 'array';
  /**
   * Output only. The timestamp that the ACL policy was created.
   *
   * @var string
   */
  public $createTime;
  /**
   * Output only. Etag for the ACL policy.
   *
   * @var string
   */
  public $etag;
  /**
   * Identifier. Full resource path of the ACL policy.
   *
   * @var string
   */
  public $name;
  protected $rulesType = AclRule::class;
  protected $rulesDataType = 'array';
  /**
   * Output only. The state of the ACL policy.
   *
   * @var string
   */
  public $state;
  /**
   * Output only. The timestamp that the ACL policy was last updated.
   *
   * @var string
   */
  public $updateTime;
  /**
   * Output only. Deprecated: Used in drift resolution.
   *
   * @deprecated
   * @var string
   */
  public $version;

  /**
   * Output only. The ACL policy attachment status for each attached cluster.
   *
   * @param ClusterAclPolicyAttachment[] $clusterAclPolicyAttachments
   */
  public function setClusterAclPolicyAttachments($clusterAclPolicyAttachments)
  {
    $this->clusterAclPolicyAttachments = $clusterAclPolicyAttachments;
  }
  /**
   * @return ClusterAclPolicyAttachment[]
   */
  public function getClusterAclPolicyAttachments()
  {
    return $this->clusterAclPolicyAttachments;
  }
  /**
   * Output only. The timestamp that the ACL policy was created.
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
   * Output only. Etag for the ACL policy.
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
   * Identifier. Full resource path of the ACL policy.
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
   * Required. The ACL rules within the ACL policy.
   *
   * @param AclRule[] $rules
   */
  public function setRules($rules)
  {
    $this->rules = $rules;
  }
  /**
   * @return AclRule[]
   */
  public function getRules()
  {
    return $this->rules;
  }
  /**
   * Output only. The state of the ACL policy.
   *
   * Accepted values: STATE_UNSPECIFIED, ACTIVE, UPDATING, DELETING
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
   * Output only. The timestamp that the ACL policy was last updated.
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
   * Output only. Deprecated: Used in drift resolution.
   *
   * @deprecated
   * @param string $version
   */
  public function setVersion($version)
  {
    $this->version = $version;
  }
  /**
   * @deprecated
   * @return string
   */
  public function getVersion()
  {
    return $this->version;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AclPolicy::class, 'Google_Service_CloudRedis_AclPolicy');
