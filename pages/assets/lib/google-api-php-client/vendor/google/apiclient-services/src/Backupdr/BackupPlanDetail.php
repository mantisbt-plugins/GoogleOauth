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

class BackupPlanDetail extends \Google\Model
{
  /**
   * Required. The resource name of the BackupPlan to apply to resources that
   * match the policy's criteria. This backup plan must be in the same location
   * as AutoProtectionPolicy. Format:
   * projects/{project}/locations/{location}/backupPlans/{backupPlanId}
   *
   * @var string
   */
  public $backupPlan;
  /**
   * Required. The type of resource that this policy will automatically protect.
   * Allowed values are, `compute.googleapis.com/Instance` and
   * `compute.googleapis.com/Disk` are supported.
   *
   * @var string
   */
  public $resourceType;

  /**
   * Required. The resource name of the BackupPlan to apply to resources that
   * match the policy's criteria. This backup plan must be in the same location
   * as AutoProtectionPolicy. Format:
   * projects/{project}/locations/{location}/backupPlans/{backupPlanId}
   *
   * @param string $backupPlan
   */
  public function setBackupPlan($backupPlan)
  {
    $this->backupPlan = $backupPlan;
  }
  /**
   * @return string
   */
  public function getBackupPlan()
  {
    return $this->backupPlan;
  }
  /**
   * Required. The type of resource that this policy will automatically protect.
   * Allowed values are, `compute.googleapis.com/Instance` and
   * `compute.googleapis.com/Disk` are supported.
   *
   * @param string $resourceType
   */
  public function setResourceType($resourceType)
  {
    $this->resourceType = $resourceType;
  }
  /**
   * @return string
   */
  public function getResourceType()
  {
    return $this->resourceType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(BackupPlanDetail::class, 'Google_Service_Backupdr_BackupPlanDetail');
