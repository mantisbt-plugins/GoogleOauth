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

class AclPolicyRevision extends \Google\Collection
{
  protected $collection_key = 'attachedClusters';
  /**
   * Output only. A list of clusters that are attached to this ACL policy
   * revision.
   *
   * @var string[]
   */
  public $attachedClusters;
  /**
   * Output only. The timestamp that the revision was created.
   *
   * @var string
   */
  public $createTime;
  /**
   * Identifier. The name of the ACL policy revision. Format: "projects/{project
   * }/locations/{location}/aclPolicies/{acl_policy}/revisions/{revision}"
   *
   * @var string
   */
  public $name;
  /**
   * Output only. The revision number of the ACL policy revision.
   *
   * @var string
   */
  public $revisionNumber;
  protected $snapshotType = AclPolicy::class;
  protected $snapshotDataType = '';

  /**
   * Output only. A list of clusters that are attached to this ACL policy
   * revision.
   *
   * @param string[] $attachedClusters
   */
  public function setAttachedClusters($attachedClusters)
  {
    $this->attachedClusters = $attachedClusters;
  }
  /**
   * @return string[]
   */
  public function getAttachedClusters()
  {
    return $this->attachedClusters;
  }
  /**
   * Output only. The timestamp that the revision was created.
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
   * Identifier. The name of the ACL policy revision. Format: "projects/{project
   * }/locations/{location}/aclPolicies/{acl_policy}/revisions/{revision}"
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
   * Output only. The revision number of the ACL policy revision.
   *
   * @param string $revisionNumber
   */
  public function setRevisionNumber($revisionNumber)
  {
    $this->revisionNumber = $revisionNumber;
  }
  /**
   * @return string
   */
  public function getRevisionNumber()
  {
    return $this->revisionNumber;
  }
  /**
   * Output only. The snapshot of the ACL policy at the time of revision
   * creation.
   *
   * @param AclPolicy $snapshot
   */
  public function setSnapshot(AclPolicy $snapshot)
  {
    $this->snapshot = $snapshot;
  }
  /**
   * @return AclPolicy
   */
  public function getSnapshot()
  {
    return $this->snapshot;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AclPolicyRevision::class, 'Google_Service_CloudRedis_AclPolicyRevision');
