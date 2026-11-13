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

class ClusterAclPolicyAttachment extends \Google\Collection
{
  protected $collection_key = 'aclPolicyRevisionStatuses';
  protected $aclPolicyRevisionStatusesType = AclPolicyRevisionStatus::class;
  protected $aclPolicyRevisionStatusesDataType = 'array';
  /**
   * Output only. The resource name of the attached Cluster. Format:
   * "projects/{project}/locations/{location}/clusters/{cluster}"
   *
   * @var string
   */
  public $cluster;

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
   * Output only. The resource name of the attached Cluster. Format:
   * "projects/{project}/locations/{location}/clusters/{cluster}"
   *
   * @param string $cluster
   */
  public function setCluster($cluster)
  {
    $this->cluster = $cluster;
  }
  /**
   * @return string
   */
  public function getCluster()
  {
    return $this->cluster;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ClusterAclPolicyAttachment::class, 'Google_Service_CloudRedis_ClusterAclPolicyAttachment');
