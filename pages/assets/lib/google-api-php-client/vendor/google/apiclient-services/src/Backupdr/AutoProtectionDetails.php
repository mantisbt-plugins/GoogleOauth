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

class AutoProtectionDetails extends \Google\Model
{
  /**
   * State unspecified.
   */
  public const STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * Resource is protected.
   */
  public const STATE_PROTECTED = 'PROTECTED';
  /**
   * Resource protection failed.
   */
  public const STATE_PROTECTION_FAILED = 'PROTECTION_FAILED';
  /**
   * Resource is being unprotected.
   */
  public const STATE_UNPROTECTING = 'UNPROTECTING';
  /**
   * Resource unprotection failed.
   */
  public const STATE_UNPROTECTION_FAILED = 'UNPROTECTION_FAILED';
  /**
   * Output only. Resource name of backup plan association linked to the
   * resource, if any. Format: projects/{project}/locations/{location}/backupPla
   * nAssociations/{backupPlanAssociationId}
   *
   * @var string
   */
  public $backupPlanAssociation;
  /**
   * Output only. Resource name of the datasource linked to the resource, if
   * any. Format: projects/{project}/locations/{location}/backupVaults/{backupVa
   * ultId}/dataSources/{dataSourceId}
   *
   * @var string
   */
  public $dataSource;
  protected $errorType = Status::class;
  protected $errorDataType = '';
  /**
   * Output only. Protection state of the resource from the current binding's
   * perspective. Output only.
   *
   * @var string
   */
  public $state;

  /**
   * Output only. Resource name of backup plan association linked to the
   * resource, if any. Format: projects/{project}/locations/{location}/backupPla
   * nAssociations/{backupPlanAssociationId}
   *
   * @param string $backupPlanAssociation
   */
  public function setBackupPlanAssociation($backupPlanAssociation)
  {
    $this->backupPlanAssociation = $backupPlanAssociation;
  }
  /**
   * @return string
   */
  public function getBackupPlanAssociation()
  {
    return $this->backupPlanAssociation;
  }
  /**
   * Output only. Resource name of the datasource linked to the resource, if
   * any. Format: projects/{project}/locations/{location}/backupVaults/{backupVa
   * ultId}/dataSources/{dataSourceId}
   *
   * @param string $dataSource
   */
  public function setDataSource($dataSource)
  {
    $this->dataSource = $dataSource;
  }
  /**
   * @return string
   */
  public function getDataSource()
  {
    return $this->dataSource;
  }
  /**
   * Output only. Error during last sync for protection/unprotection, if any.
   *
   * @param Status $error
   */
  public function setError(Status $error)
  {
    $this->error = $error;
  }
  /**
   * @return Status
   */
  public function getError()
  {
    return $this->error;
  }
  /**
   * Output only. Protection state of the resource from the current binding's
   * perspective. Output only.
   *
   * Accepted values: STATE_UNSPECIFIED, PROTECTED, PROTECTION_FAILED,
   * UNPROTECTING, UNPROTECTION_FAILED
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
class_alias(AutoProtectionDetails::class, 'Google_Service_Backupdr_AutoProtectionDetails');
