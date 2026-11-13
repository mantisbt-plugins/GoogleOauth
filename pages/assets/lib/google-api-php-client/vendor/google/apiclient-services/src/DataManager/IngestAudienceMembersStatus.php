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

class IngestAudienceMembersStatus extends \Google\Model
{
  protected $compositeDataIngestionStatusType = IngestCompositeDataStatus::class;
  protected $compositeDataIngestionStatusDataType = '';
  protected $googleUserIdDataIngestionStatusType = IngestGoogleUserIdDataStatus::class;
  protected $googleUserIdDataIngestionStatusDataType = '';
  protected $mobileDataIngestionStatusType = IngestMobileDataStatus::class;
  protected $mobileDataIngestionStatusDataType = '';
  protected $pairDataIngestionStatusType = IngestPairDataStatus::class;
  protected $pairDataIngestionStatusDataType = '';
  protected $partnerProvidedIdDataIngestionStatusType = IngestPartnerProvidedIdDataStatus::class;
  protected $partnerProvidedIdDataIngestionStatusDataType = '';
  protected $ppidDataIngestionStatusType = IngestPpidDataStatus::class;
  protected $ppidDataIngestionStatusDataType = '';
  protected $userDataIngestionStatusType = IngestUserDataStatus::class;
  protected $userDataIngestionStatusDataType = '';
  protected $userIdDataIngestionStatusType = IngestUserIdDataStatus::class;
  protected $userIdDataIngestionStatusDataType = '';

  /**
   * @param IngestCompositeDataStatus $compositeDataIngestionStatus
   */
  public function setCompositeDataIngestionStatus(IngestCompositeDataStatus $compositeDataIngestionStatus)
  {
    $this->compositeDataIngestionStatus = $compositeDataIngestionStatus;
  }
  /**
   * @return IngestCompositeDataStatus
   */
  public function getCompositeDataIngestionStatus()
  {
    return $this->compositeDataIngestionStatus;
  }
  /**
   * @param IngestGoogleUserIdDataStatus $googleUserIdDataIngestionStatus
   */
  public function setGoogleUserIdDataIngestionStatus(IngestGoogleUserIdDataStatus $googleUserIdDataIngestionStatus)
  {
    $this->googleUserIdDataIngestionStatus = $googleUserIdDataIngestionStatus;
  }
  /**
   * @return IngestGoogleUserIdDataStatus
   */
  public function getGoogleUserIdDataIngestionStatus()
  {
    return $this->googleUserIdDataIngestionStatus;
  }
  /**
   * @param IngestMobileDataStatus $mobileDataIngestionStatus
   */
  public function setMobileDataIngestionStatus(IngestMobileDataStatus $mobileDataIngestionStatus)
  {
    $this->mobileDataIngestionStatus = $mobileDataIngestionStatus;
  }
  /**
   * @return IngestMobileDataStatus
   */
  public function getMobileDataIngestionStatus()
  {
    return $this->mobileDataIngestionStatus;
  }
  /**
   * @param IngestPairDataStatus $pairDataIngestionStatus
   */
  public function setPairDataIngestionStatus(IngestPairDataStatus $pairDataIngestionStatus)
  {
    $this->pairDataIngestionStatus = $pairDataIngestionStatus;
  }
  /**
   * @return IngestPairDataStatus
   */
  public function getPairDataIngestionStatus()
  {
    return $this->pairDataIngestionStatus;
  }
  /**
   * @param IngestPartnerProvidedIdDataStatus $partnerProvidedIdDataIngestionStatus
   */
  public function setPartnerProvidedIdDataIngestionStatus(IngestPartnerProvidedIdDataStatus $partnerProvidedIdDataIngestionStatus)
  {
    $this->partnerProvidedIdDataIngestionStatus = $partnerProvidedIdDataIngestionStatus;
  }
  /**
   * @return IngestPartnerProvidedIdDataStatus
   */
  public function getPartnerProvidedIdDataIngestionStatus()
  {
    return $this->partnerProvidedIdDataIngestionStatus;
  }
  /**
   * @param IngestPpidDataStatus $ppidDataIngestionStatus
   */
  public function setPpidDataIngestionStatus(IngestPpidDataStatus $ppidDataIngestionStatus)
  {
    $this->ppidDataIngestionStatus = $ppidDataIngestionStatus;
  }
  /**
   * @return IngestPpidDataStatus
   */
  public function getPpidDataIngestionStatus()
  {
    return $this->ppidDataIngestionStatus;
  }
  /**
   * @param IngestUserDataStatus $userDataIngestionStatus
   */
  public function setUserDataIngestionStatus(IngestUserDataStatus $userDataIngestionStatus)
  {
    $this->userDataIngestionStatus = $userDataIngestionStatus;
  }
  /**
   * @return IngestUserDataStatus
   */
  public function getUserDataIngestionStatus()
  {
    return $this->userDataIngestionStatus;
  }
  /**
   * @param IngestUserIdDataStatus $userIdDataIngestionStatus
   */
  public function setUserIdDataIngestionStatus(IngestUserIdDataStatus $userIdDataIngestionStatus)
  {
    $this->userIdDataIngestionStatus = $userIdDataIngestionStatus;
  }
  /**
   * @return IngestUserIdDataStatus
   */
  public function getUserIdDataIngestionStatus()
  {
    return $this->userIdDataIngestionStatus;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(IngestAudienceMembersStatus::class, 'Google_Service_DataManager_IngestAudienceMembersStatus');
