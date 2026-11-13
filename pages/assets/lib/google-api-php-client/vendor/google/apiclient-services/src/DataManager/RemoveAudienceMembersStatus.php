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

namespace Google\Service\DataManager;

class RemoveAudienceMembersStatus extends \Google\Model
{
  protected $compositeDataRemovalStatusType = RemoveCompositeDataStatus::class;
  protected $compositeDataRemovalStatusDataType = '';
  protected $googleUserIdDataRemovalStatusType = RemoveGoogleUserIdDataStatus::class;
  protected $googleUserIdDataRemovalStatusDataType = '';
  protected $mobileDataRemovalStatusType = RemoveMobileDataStatus::class;
  protected $mobileDataRemovalStatusDataType = '';
  protected $pairDataRemovalStatusType = RemovePairDataStatus::class;
  protected $pairDataRemovalStatusDataType = '';
  protected $partnerProvidedIdDataRemovalStatusType = RemovePartnerProvidedIdDataStatus::class;
  protected $partnerProvidedIdDataRemovalStatusDataType = '';
  protected $ppidDataRemovalStatusType = RemovePpidDataStatus::class;
  protected $ppidDataRemovalStatusDataType = '';
  protected $userDataRemovalStatusType = RemoveUserDataStatus::class;
  protected $userDataRemovalStatusDataType = '';
  protected $userIdDataRemovalStatusType = RemoveUserIdDataStatus::class;
  protected $userIdDataRemovalStatusDataType = '';

  /**
   * @param RemoveCompositeDataStatus $compositeDataRemovalStatus
   */
  public function setCompositeDataRemovalStatus(RemoveCompositeDataStatus $compositeDataRemovalStatus)
  {
    $this->compositeDataRemovalStatus = $compositeDataRemovalStatus;
  }
  /**
   * @return RemoveCompositeDataStatus
   */
  public function getCompositeDataRemovalStatus()
  {
    return $this->compositeDataRemovalStatus;
  }
  /**
   * @param RemoveGoogleUserIdDataStatus $googleUserIdDataRemovalStatus
   */
  public function setGoogleUserIdDataRemovalStatus(RemoveGoogleUserIdDataStatus $googleUserIdDataRemovalStatus)
  {
    $this->googleUserIdDataRemovalStatus = $googleUserIdDataRemovalStatus;
  }
  /**
   * @return RemoveGoogleUserIdDataStatus
   */
  public function getGoogleUserIdDataRemovalStatus()
  {
    return $this->googleUserIdDataRemovalStatus;
  }
  /**
   * @param RemoveMobileDataStatus $mobileDataRemovalStatus
   */
  public function setMobileDataRemovalStatus(RemoveMobileDataStatus $mobileDataRemovalStatus)
  {
    $this->mobileDataRemovalStatus = $mobileDataRemovalStatus;
  }
  /**
   * @return RemoveMobileDataStatus
   */
  public function getMobileDataRemovalStatus()
  {
    return $this->mobileDataRemovalStatus;
  }
  /**
   * @param RemovePairDataStatus $pairDataRemovalStatus
   */
  public function setPairDataRemovalStatus(RemovePairDataStatus $pairDataRemovalStatus)
  {
    $this->pairDataRemovalStatus = $pairDataRemovalStatus;
  }
  /**
   * @return RemovePairDataStatus
   */
  public function getPairDataRemovalStatus()
  {
    return $this->pairDataRemovalStatus;
  }
  /**
   * @param RemovePartnerProvidedIdDataStatus $partnerProvidedIdDataRemovalStatus
   */
  public function setPartnerProvidedIdDataRemovalStatus(RemovePartnerProvidedIdDataStatus $partnerProvidedIdDataRemovalStatus)
  {
    $this->partnerProvidedIdDataRemovalStatus = $partnerProvidedIdDataRemovalStatus;
  }
  /**
   * @return RemovePartnerProvidedIdDataStatus
   */
  public function getPartnerProvidedIdDataRemovalStatus()
  {
    return $this->partnerProvidedIdDataRemovalStatus;
  }
  /**
   * @param RemovePpidDataStatus $ppidDataRemovalStatus
   */
  public function setPpidDataRemovalStatus(RemovePpidDataStatus $ppidDataRemovalStatus)
  {
    $this->ppidDataRemovalStatus = $ppidDataRemovalStatus;
  }
  /**
   * @return RemovePpidDataStatus
   */
  public function getPpidDataRemovalStatus()
  {
    return $this->ppidDataRemovalStatus;
  }
  /**
   * @param RemoveUserDataStatus $userDataRemovalStatus
   */
  public function setUserDataRemovalStatus(RemoveUserDataStatus $userDataRemovalStatus)
  {
    $this->userDataRemovalStatus = $userDataRemovalStatus;
  }
  /**
   * @return RemoveUserDataStatus
   */
  public function getUserDataRemovalStatus()
  {
    return $this->userDataRemovalStatus;
  }
  /**
   * @param RemoveUserIdDataStatus $userIdDataRemovalStatus
   */
  public function setUserIdDataRemovalStatus(RemoveUserIdDataStatus $userIdDataRemovalStatus)
  {
    $this->userIdDataRemovalStatus = $userIdDataRemovalStatus;
  }
  /**
   * @return RemoveUserIdDataStatus
   */
  public function getUserIdDataRemovalStatus()
  {
    return $this->userIdDataRemovalStatus;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RemoveAudienceMembersStatus::class, 'Google_Service_DataManager_RemoveAudienceMembersStatus');
