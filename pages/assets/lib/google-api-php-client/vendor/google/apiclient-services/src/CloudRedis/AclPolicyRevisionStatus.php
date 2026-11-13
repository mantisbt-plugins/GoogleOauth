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

class AclPolicyRevisionStatus extends \Google\Model
{
  /**
   * Not set.
   */
  public const STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * The cluster is attempting to apply this revision.
   */
  public const STATE_APPLYING = 'APPLYING';
  /**
   * The cluster has successfully applied this revision.
   */
  public const STATE_APPLIED = 'APPLIED';
  /**
   * The cluster failed to apply this revision.
   */
  public const STATE_FAILED = 'FAILED';
  /**
   * Output only. The resource name of the ACL policy revision this status
   * refers to. Format: "projects/{project}/locations/{location}/aclPolicies/{ac
   * l_policy}/revisions/{revision}"
   *
   * @var string
   */
  public $aclPolicyRevision;
  /**
   * Output only. The revision number of the ACL policy revision this status
   * refers to.
   *
   * @var string
   */
  public $aclPolicyRevisionNumber;
  /**
   * Output only. Human-readable error message providing more details for FAILED
   * states.
   *
   * @var string
   */
  public $errorMessage;
  /**
   * Output only. AclPolicyRevision state.
   *
   * @var string
   */
  public $state;

  /**
   * Output only. The resource name of the ACL policy revision this status
   * refers to. Format: "projects/{project}/locations/{location}/aclPolicies/{ac
   * l_policy}/revisions/{revision}"
   *
   * @param string $aclPolicyRevision
   */
  public function setAclPolicyRevision($aclPolicyRevision)
  {
    $this->aclPolicyRevision = $aclPolicyRevision;
  }
  /**
   * @return string
   */
  public function getAclPolicyRevision()
  {
    return $this->aclPolicyRevision;
  }
  /**
   * Output only. The revision number of the ACL policy revision this status
   * refers to.
   *
   * @param string $aclPolicyRevisionNumber
   */
  public function setAclPolicyRevisionNumber($aclPolicyRevisionNumber)
  {
    $this->aclPolicyRevisionNumber = $aclPolicyRevisionNumber;
  }
  /**
   * @return string
   */
  public function getAclPolicyRevisionNumber()
  {
    return $this->aclPolicyRevisionNumber;
  }
  /**
   * Output only. Human-readable error message providing more details for FAILED
   * states.
   *
   * @param string $errorMessage
   */
  public function setErrorMessage($errorMessage)
  {
    $this->errorMessage = $errorMessage;
  }
  /**
   * @return string
   */
  public function getErrorMessage()
  {
    return $this->errorMessage;
  }
  /**
   * Output only. AclPolicyRevision state.
   *
   * Accepted values: STATE_UNSPECIFIED, APPLYING, APPLIED, FAILED
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AclPolicyRevisionStatus::class, 'Google_Service_CloudRedis_AclPolicyRevisionStatus');
