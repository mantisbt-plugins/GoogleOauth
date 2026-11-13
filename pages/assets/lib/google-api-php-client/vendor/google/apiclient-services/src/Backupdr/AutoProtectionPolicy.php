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

namespace Google\Service\Backupdr;

class AutoProtectionPolicy extends \Google\Collection
{
  /**
   * The state of the policy is unspecified.
   */
  public const STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * The policy is being created.
   */
  public const STATE_CREATING = 'CREATING';
  /**
   * The policy is active and protecting matching resources.
   */
  public const STATE_ACTIVE = 'ACTIVE';
  /**
   * The policy is being updated.
   */
  public const STATE_UPDATING = 'UPDATING';
  /**
   * The policy is being deleted.
   */
  public const STATE_DELETING = 'DELETING';
  protected $collection_key = 'backupPlanDetails';
  protected $backupPlanDetailsType = BackupPlanDetail::class;
  protected $backupPlanDetailsDataType = 'array';
  protected $bindingSummaryType = BindingSummary::class;
  protected $bindingSummaryDataType = '';
  /**
   * Output only. The timestamp when the policy was created.
   *
   * @var string
   */
  public $createTime;
  protected $criteriaType = Criteria::class;
  protected $criteriaDataType = '';
  /**
   * Optional. A description of the policy. The description must be at most 2048
   * characters.
   *
   * @var string
   */
  public $description;
  /**
   * Output only. The etag for the policy. If this is provided on update, it
   * must match the server's etag.
   *
   * @var string
   */
  public $etag;
  /**
   * Output only. Identifier. The resource name of the AutoProtectionPolicy.
   * Format: `projects/{project}/locations/{location}/autoProtectionPolicies/{au
   * to_protection_policy}`
   *
   * @var string
   */
  public $name;
  protected $policyEvaluationSummaryType = PolicyEvaluationSummary::class;
  protected $policyEvaluationSummaryDataType = '';
  /**
   * Output only. The current state of the AutoProtectionPolicy.
   *
   * @var string
   */
  public $state;
  /**
   * Output only. The timestamp when the policy was last updated.
   *
   * @var string
   */
  public $updateTime;

  /**
   * Required. The backup plan details for matching resources.
   *
   * @param BackupPlanDetail[] $backupPlanDetails
   */
  public function setBackupPlanDetails($backupPlanDetails)
  {
    $this->backupPlanDetails = $backupPlanDetails;
  }
  /**
   * @return BackupPlanDetail[]
   */
  public function getBackupPlanDetails()
  {
    return $this->backupPlanDetails;
  }
  /**
   * Output only. Summary of total count of different containers covered through
   * this policy.
   *
   * @param BindingSummary $bindingSummary
   */
  public function setBindingSummary(BindingSummary $bindingSummary)
  {
    $this->bindingSummary = $bindingSummary;
  }
  /**
   * @return BindingSummary
   */
  public function getBindingSummary()
  {
    return $this->bindingSummary;
  }
  /**
   * Output only. The timestamp when the policy was created.
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
   * Required. The criteria for matching resources.
   *
   * @param Criteria $criteria
   */
  public function setCriteria(Criteria $criteria)
  {
    $this->criteria = $criteria;
  }
  /**
   * @return Criteria
   */
  public function getCriteria()
  {
    return $this->criteria;
  }
  /**
   * Optional. A description of the policy. The description must be at most 2048
   * characters.
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
   * Output only. The etag for the policy. If this is provided on update, it
   * must match the server's etag.
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
   * Output only. Identifier. The resource name of the AutoProtectionPolicy.
   * Format: `projects/{project}/locations/{location}/autoProtectionPolicies/{au
   * to_protection_policy}`
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
   * Output only. Summary of last policy evaluation when job was run per
   * workload type.
   *
   * @param PolicyEvaluationSummary $policyEvaluationSummary
   */
  public function setPolicyEvaluationSummary(PolicyEvaluationSummary $policyEvaluationSummary)
  {
    $this->policyEvaluationSummary = $policyEvaluationSummary;
  }
  /**
   * @return PolicyEvaluationSummary
   */
  public function getPolicyEvaluationSummary()
  {
    return $this->policyEvaluationSummary;
  }
  /**
   * Output only. The current state of the AutoProtectionPolicy.
   *
   * Accepted values: STATE_UNSPECIFIED, CREATING, ACTIVE, UPDATING, DELETING
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
   * Output only. The timestamp when the policy was last updated.
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
class_alias(AutoProtectionPolicy::class, 'Google_Service_Backupdr_AutoProtectionPolicy');
