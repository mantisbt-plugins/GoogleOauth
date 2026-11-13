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

class AppliedAutoProtectionPolicy extends \Google\Collection
{
  /**
   * State is not specified.
   */
  public const STATUS_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * The policy is in the process of being applied.
   */
  public const STATUS_CREATING = 'CREATING';
  /**
   * The policy has been applied and is active.
   */
  public const STATUS_ACTIVE = 'ACTIVE';
  /**
   * The policy is in the process of being removed.
   */
  public const STATUS_DELETION_INITIATED = 'DELETION_INITIATED';
  protected $collection_key = 'backupPlanDetails';
  protected $backupPlanDetailsType = BackupPlanDetail::class;
  protected $backupPlanDetailsDataType = 'array';
  protected $bindingEvaluationSummaryType = BindingEvaluationSummary::class;
  protected $bindingEvaluationSummaryDataType = '';
  /**
   * Output only. Timestamp indicating when the binding was last created.
   *
   * @var string
   */
  public $createTime;
  protected $criteriaType = Criteria::class;
  protected $criteriaDataType = '';
  /**
   * Identifier. Canonical resource name. Format: projects/{workload-project-
   * number}/locations/{location}/appliedAutoProtectionPolicies/{id}.
   *
   * @var string
   */
  public $name;
  /**
   * Output only. The full resource name of the AutoProtectionPolicyBinding that
   * applies the source policy to a scope including this workload project. e.g.,
   * projects/{admin-project}/locations/{location}/autoProtectionPolicies/{polic
   * y_id}/autoProtectionPolicyBindings/{binding_id}.
   *
   * @var string
   */
  public $sourceBinding;
  /**
   * Output only. The status of the applied auto protection policy.
   *
   * @var string
   */
  public $status;
  /**
   * Output only. Timestamp indicating when the binding was last modified.
   *
   * @var string
   */
  public $updateTime;

  /**
   * Output only. The set of backup plan configurations, mirroring the
   * backup_plan_details from the source AutoProtectionPolicy. Each element
   * specifies a backup plan for a given resource type.
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
   * Output only. The summary of the last policy application when the job has
   * run.
   *
   * @param BindingEvaluationSummary $bindingEvaluationSummary
   */
  public function setBindingEvaluationSummary(BindingEvaluationSummary $bindingEvaluationSummary)
  {
    $this->bindingEvaluationSummary = $bindingEvaluationSummary;
  }
  /**
   * @return BindingEvaluationSummary
   */
  public function getBindingEvaluationSummary()
  {
    return $this->bindingEvaluationSummary;
  }
  /**
   * Output only. Timestamp indicating when the binding was last created.
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
   * Output only. The criteria resources must meet for this rule to apply. From
   * AutoProtectionPolicy.criteria.
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
   * Identifier. Canonical resource name. Format: projects/{workload-project-
   * number}/locations/{location}/appliedAutoProtectionPolicies/{id}.
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
   * Output only. The full resource name of the AutoProtectionPolicyBinding that
   * applies the source policy to a scope including this workload project. e.g.,
   * projects/{admin-project}/locations/{location}/autoProtectionPolicies/{polic
   * y_id}/autoProtectionPolicyBindings/{binding_id}.
   *
   * @param string $sourceBinding
   */
  public function setSourceBinding($sourceBinding)
  {
    $this->sourceBinding = $sourceBinding;
  }
  /**
   * @return string
   */
  public function getSourceBinding()
  {
    return $this->sourceBinding;
  }
  /**
   * Output only. The status of the applied auto protection policy.
   *
   * Accepted values: STATE_UNSPECIFIED, CREATING, ACTIVE, DELETION_INITIATED
   *
   * @param self::STATUS_* $status
   */
  public function setStatus($status)
  {
    $this->status = $status;
  }
  /**
   * @return self::STATUS_*
   */
  public function getStatus()
  {
    return $this->status;
  }
  /**
   * Output only. Timestamp indicating when the binding was last modified.
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
class_alias(AppliedAutoProtectionPolicy::class, 'Google_Service_Backupdr_AppliedAutoProtectionPolicy');
