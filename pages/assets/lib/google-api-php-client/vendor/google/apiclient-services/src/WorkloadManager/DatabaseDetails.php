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

namespace Google\Service\WorkloadManager;

class DatabaseDetails extends \Google\Model
{
  /**
   * Database service account. Let customers bring their own SA for the
   * database.
   *
   * @var string
   */
  public $databaseServiceAccount;
  /**
   * Required. Disk type.
   *
   * @var string
   */
  public $diskType;
  /**
   * Required. Image for the database server.
   *
   * @var string
   */
  public $image;
  /**
   * Optional. Instance ID.
   *
   * @var string
   */
  public $instanceId;
  /**
   * Required. Machine type.
   *
   * @var string
   */
  public $machineType;
  /**
   * Optional. Primary DB VM name.
   *
   * @var string
   */
  public $primaryDbVm;
  /**
   * Optional. Secondary DB VM name.
   *
   * @var string
   */
  public $secondaryDbVm;
  /**
   * Required. Secret Manager secret.
   *
   * @var string
   */
  public $secretManagerSecret;
  /**
   * Required. The SID is a three-digit server-specific unique identification
   * code.
   *
   * @var string
   */
  public $sid;

  /**
   * Database service account. Let customers bring their own SA for the
   * database.
   *
   * @param string $databaseServiceAccount
   */
  public function setDatabaseServiceAccount($databaseServiceAccount)
  {
    $this->databaseServiceAccount = $databaseServiceAccount;
  }
  /**
   * @return string
   */
  public function getDatabaseServiceAccount()
  {
    return $this->databaseServiceAccount;
  }
  /**
   * Required. Disk type.
   *
   * @param string $diskType
   */
  public function setDiskType($diskType)
  {
    $this->diskType = $diskType;
  }
  /**
   * @return string
   */
  public function getDiskType()
  {
    return $this->diskType;
  }
  /**
   * Required. Image for the database server.
   *
   * @param string $image
   */
  public function setImage($image)
  {
    $this->image = $image;
  }
  /**
   * @return string
   */
  public function getImage()
  {
    return $this->image;
  }
  /**
   * Optional. Instance ID.
   *
   * @param string $instanceId
   */
  public function setInstanceId($instanceId)
  {
    $this->instanceId = $instanceId;
  }
  /**
   * @return string
   */
  public function getInstanceId()
  {
    return $this->instanceId;
  }
  /**
   * Required. Machine type.
   *
   * @param string $machineType
   */
  public function setMachineType($machineType)
  {
    $this->machineType = $machineType;
  }
  /**
   * @return string
   */
  public function getMachineType()
  {
    return $this->machineType;
  }
  /**
   * Optional. Primary DB VM name.
   *
   * @param string $primaryDbVm
   */
  public function setPrimaryDbVm($primaryDbVm)
  {
    $this->primaryDbVm = $primaryDbVm;
  }
  /**
   * @return string
   */
  public function getPrimaryDbVm()
  {
    return $this->primaryDbVm;
  }
  /**
   * Optional. Secondary DB VM name.
   *
   * @param string $secondaryDbVm
   */
  public function setSecondaryDbVm($secondaryDbVm)
  {
    $this->secondaryDbVm = $secondaryDbVm;
  }
  /**
   * @return string
   */
  public function getSecondaryDbVm()
  {
    return $this->secondaryDbVm;
  }
  /**
   * Required. Secret Manager secret.
   *
   * @param string $secretManagerSecret
   */
  public function setSecretManagerSecret($secretManagerSecret)
  {
    $this->secretManagerSecret = $secretManagerSecret;
  }
  /**
   * @return string
   */
  public function getSecretManagerSecret()
  {
    return $this->secretManagerSecret;
  }
  /**
   * Required. The SID is a three-digit server-specific unique identification
   * code.
   *
   * @param string $sid
   */
  public function setSid($sid)
  {
    $this->sid = $sid;
  }
  /**
   * @return string
   */
  public function getSid()
  {
    return $this->sid;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DatabaseDetails::class, 'Google_Service_WorkloadManager_DatabaseDetails');
