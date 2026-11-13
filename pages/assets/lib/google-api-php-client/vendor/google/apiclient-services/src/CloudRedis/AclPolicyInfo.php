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

class AclPolicyInfo extends \Google\Collection
{
  protected $collection_key = 'aclPolicyRevisionStatuses';
  protected $aclPolicyRevisionStatusesType = AclPolicyRevisionStatus::class;
  protected $aclPolicyRevisionStatusesDataType = 'array';
  /**
   * Output only. The resource name of the applied ACL policy. Format:
   * "projects/{project}/locations/{location}/aclPolicies/{acl_policy}"
   *
   * @var string
   */
  public $appliedAclPolicy;
  /**
   * Output only. The resource name of the applied ACL policy revision. Format:
   * "projects/{project}/locations/{location}/aclPolicies/{acl_policy}/revisions
   * /{revision}"
   *
   * @var string
   */
  public $appliedAclPolicyRevision;
  /**
   * Output only. The revision number of the applied ACL policy revision.
   *
   * @var string
   */
  public $appliedAclPolicyRevisionNumber;

  /**
   * Output only. A list of status for various revisions of this ACL policy on
   * the cluster.
   *
   * @param AclPolicyRevisionStatus[] $aclPolicyRevisionStatuses
   */
  public function setAclPolicyRevisionStatuses($aclPolicyRevisionStatuses)
  {
    $this->aclPolicyRevisionStatuses = $aclPolicyRevisionStatuses;
  }
  /**
   * @return AclPolicyRevisionStatus[]
   */
  public function getAclPolicyRevisionStatuses()
  {
    return $this->aclPolicyRevisionStatuses;
  }
  /**
   * Output only. The resource name of the applied ACL policy. Format:
   * "projects/{project}/locations/{location}/aclPolicies/{acl_policy}"
   *
   * @param string $appliedAclPolicy
   */
  public function setAppliedAclPolicy($appliedAclPolicy)
  {
    $this->appliedAclPolicy = $appliedAclPolicy;
  }
  /**
   * @return string
   */
  public function getAppliedAclPolicy()
  {
    return $this->appliedAclPolicy;
  }
  /**
   * Output only. The resource name of the applied ACL policy revision. Format:
   * "projects/{project}/locations/{location}/aclPolicies/{acl_policy}/revisions
   * /{revision}"
   *
   * @param string $appliedAclPolicyRevision
   */
  public function setAppliedAclPolicyRevision($appliedAclPolicyRevision)
  {
    $this->appliedAclPolicyRevision = $appliedAclPolicyRevision;
  }
  /**
   * @return string
   */
  public function getAppliedAclPolicyRevision()
  {
    return $this->appliedAclPolicyRevision;
  }
  /**
   * Output only. The revision number of the applied ACL policy revision.
   *
   * @param string $appliedAclPolicyRevisionNumber
   */
  public function setAppliedAclPolicyRevisionNumber($appliedAclPolicyRevisionNumber)
  {
    $this->appliedAclPolicyRevisionNumber = $appliedAclPolicyRevisionNumber;
  }
  /**
   * @return string
   */
  public function getAppliedAclPolicyRevisionNumber()
  {
    return $this->appliedAclPolicyRevisionNumber;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AclPolicyInfo::class, 'Google_Service_CloudRedis_AclPolicyInfo');
