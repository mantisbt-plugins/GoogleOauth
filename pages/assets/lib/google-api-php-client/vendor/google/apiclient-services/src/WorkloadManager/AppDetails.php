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

class AppDetails extends \Google\Collection
{
  protected $collection_key = 'appVmNames';
  /**
   * Optional. Instance ID for app.
   *
   * @var string
   */
  public $appInstanceId;
  /**
   * Application service account. Let customers bring their own service account
   * for the application.
   *
   * @var string
   */
  public $appServiceAccount;
  /**
   * Optional. Customized VM names.
   *
   * @var string[]
   */
  public $appVmNames;
  /**
   * Required. Image for the ASCS server.
   *
   * @var string
   */
  public $ascsImage;
  /**
   * Optional. Instance ID for ASCS.
   *
   * @var string
   */
  public $ascsInstanceId;
  /**
   * Required. ASCS machine type.
   *
   * @var string
   */
  public $ascsMachineType;
  /**
   * ASCS service account. Let customers bring their own service account for
   * ASCS.
   *
   * @var string
   */
  public $ascsServiceAccount;
  /**
   * Optional. ASCS VM name.
   *
   * @var string
   */
  public $ascsVm;
  /**
   * Optional. Instance ID for ERS.
   *
   * @var string
   */
  public $ersInstanceId;
  /**
   * Optional. ERS VM name.
   *
   * @var string
   */
  public $ersVm;
  /**
   * Required. Image for the app server and ASCS server.
   *
   * @var string
   */
  public $image;
  /**
   * Required. Machine type.
   *
   * @var string
   */
  public $machineType;
  /**
   * Required. Secret Manager secret.
   *
   * @var string
   */
  public $secretManagerSecret;
  /**
   * Optional. Storage location.
   *
   * @var string
   */
  public $sharedStorage;
  /**
   * Required. The SAP SID is a three-digit server-specific unique
   * identification code.
   *
   * @var string
   */
  public $sid;
  /**
   * Required. VMs multiplier.
   *
   * @var int
   */
  public $vmsMultiplier;

  /**
   * Optional. Instance ID for app.
   *
   * @param string $appInstanceId
   */
  public function setAppInstanceId($appInstanceId)
  {
    $this->appInstanceId = $appInstanceId;
  }
  /**
   * @return string
   */
  public function getAppInstanceId()
  {
    return $this->appInstanceId;
  }
  /**
   * Application service account. Let customers bring their own service account
   * for the application.
   *
   * @param string $appServiceAccount
   */
  public function setAppServiceAccount($appServiceAccount)
  {
    $this->appServiceAccount = $appServiceAccount;
  }
  /**
   * @return string
   */
  public function getAppServiceAccount()
  {
    return $this->appServiceAccount;
  }
  /**
   * Optional. Customized VM names.
   *
   * @param string[] $appVmNames
   */
  public function setAppVmNames($appVmNames)
  {
    $this->appVmNames = $appVmNames;
  }
  /**
   * @return string[]
   */
  public function getAppVmNames()
  {
    return $this->appVmNames;
  }
  /**
   * Required. Image for the ASCS server.
   *
   * @param string $ascsImage
   */
  public function setAscsImage($ascsImage)
  {
    $this->ascsImage = $ascsImage;
  }
  /**
   * @return string
   */
  public function getAscsImage()
  {
    return $this->ascsImage;
  }
  /**
   * Optional. Instance ID for ASCS.
   *
   * @param string $ascsInstanceId
   */
  public function setAscsInstanceId($ascsInstanceId)
  {
    $this->ascsInstanceId = $ascsInstanceId;
  }
  /**
   * @return string
   */
  public function getAscsInstanceId()
  {
    return $this->ascsInstanceId;
  }
  /**
   * Required. ASCS machine type.
   *
   * @param string $ascsMachineType
   */
  public function setAscsMachineType($ascsMachineType)
  {
    $this->ascsMachineType = $ascsMachineType;
  }
  /**
   * @return string
   */
  public function getAscsMachineType()
  {
    return $this->ascsMachineType;
  }
  /**
   * ASCS service account. Let customers bring their own service account for
   * ASCS.
   *
   * @param string $ascsServiceAccount
   */
  public function setAscsServiceAccount($ascsServiceAccount)
  {
    $this->ascsServiceAccount = $ascsServiceAccount;
  }
  /**
   * @return string
   */
  public function getAscsServiceAccount()
  {
    return $this->ascsServiceAccount;
  }
  /**
   * Optional. ASCS VM name.
   *
   * @param string $ascsVm
   */
  public function setAscsVm($ascsVm)
  {
    $this->ascsVm = $ascsVm;
  }
  /**
   * @return string
   */
  public function getAscsVm()
  {
    return $this->ascsVm;
  }
  /**
   * Optional. Instance ID for ERS.
   *
   * @param string $ersInstanceId
   */
  public function setErsInstanceId($ersInstanceId)
  {
    $this->ersInstanceId = $ersInstanceId;
  }
  /**
   * @return string
   */
  public function getErsInstanceId()
  {
    return $this->ersInstanceId;
  }
  /**
   * Optional. ERS VM name.
   *
   * @param string $ersVm
   */
  public function setErsVm($ersVm)
  {
    $this->ersVm = $ersVm;
  }
  /**
   * @return string
   */
  public function getErsVm()
  {
    return $this->ersVm;
  }
  /**
   * Required. Image for the app server and ASCS server.
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
   * Optional. Storage location.
   *
   * @param string $sharedStorage
   */
  public function setSharedStorage($sharedStorage)
  {
    $this->sharedStorage = $sharedStorage;
  }
  /**
   * @return string
   */
  public function getSharedStorage()
  {
    return $this->sharedStorage;
  }
  /**
   * Required. The SAP SID is a three-digit server-specific unique
   * identification code.
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
  /**
   * Required. VMs multiplier.
   *
   * @param int $vmsMultiplier
   */
  public function setVmsMultiplier($vmsMultiplier)
  {
    $this->vmsMultiplier = $vmsMultiplier;
  }
  /**
   * @return int
   */
  public function getVmsMultiplier()
  {
    return $this->vmsMultiplier;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AppDetails::class, 'Google_Service_WorkloadManager_AppDetails');
