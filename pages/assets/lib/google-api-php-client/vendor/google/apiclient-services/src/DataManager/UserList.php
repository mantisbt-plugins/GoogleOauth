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

class UserList extends \Google\Model
{
  public const ACCESS_REASON_ACCESS_REASON_UNSPECIFIED = 'ACCESS_REASON_UNSPECIFIED';
  public const ACCESS_REASON_OWNED = 'OWNED';
  public const ACCESS_REASON_SHARED = 'SHARED';
  public const ACCESS_REASON_LICENSED = 'LICENSED';
  public const ACCESS_REASON_SUBSCRIBED = 'SUBSCRIBED';
  public const ACCESS_REASON_AFFILIATED = 'AFFILIATED';
  public const ACCOUNT_ACCESS_STATUS_ACCESS_STATUS_UNSPECIFIED = 'ACCESS_STATUS_UNSPECIFIED';
  public const ACCOUNT_ACCESS_STATUS_ENABLED = 'ENABLED';
  public const ACCOUNT_ACCESS_STATUS_DISABLED = 'DISABLED';
  public const CLOSING_REASON_CLOSING_REASON_UNSPECIFIED = 'CLOSING_REASON_UNSPECIFIED';
  public const CLOSING_REASON_UNUSED = 'UNUSED';
  public const MEMBERSHIP_STATUS_MEMBERSHIP_STATUS_UNSPECIFIED = 'MEMBERSHIP_STATUS_UNSPECIFIED';
  public const MEMBERSHIP_STATUS_OPEN = 'OPEN';
  public const MEMBERSHIP_STATUS_CLOSED = 'CLOSED';
  /**
   * @var string
   */
  public $accessReason;
  /**
   * @var string
   */
  public $accountAccessStatus;
  /**
   * @var string
   */
  public $closingReason;
  /**
   * @var string
   */
  public $description;
  /**
   * @var string
   */
  public $displayName;
  /**
   * @var string
   */
  public $id;
  protected $ingestedUserListInfoType = IngestedUserListInfo::class;
  protected $ingestedUserListInfoDataType = '';
  /**
   * @var string
   */
  public $integrationCode;
  /**
   * @var string
   */
  public $membershipDuration;
  /**
   * @var string
   */
  public $membershipStatus;
  /**
   * @var string
   */
  public $name;
  /**
   * @var bool
   */
  public $readOnly;
  protected $sizeInfoType = SizeInfo::class;
  protected $sizeInfoDataType = '';
  protected $targetNetworkInfoType = TargetNetworkInfo::class;
  protected $targetNetworkInfoDataType = '';

  /**
   * @param self::ACCESS_REASON_* $accessReason
   */
  public function setAccessReason($accessReason)
  {
    $this->accessReason = $accessReason;
  }
  /**
   * @return self::ACCESS_REASON_*
   */
  public function getAccessReason()
  {
    return $this->accessReason;
  }
  /**
   * @param self::ACCOUNT_ACCESS_STATUS_* $accountAccessStatus
   */
  public function setAccountAccessStatus($accountAccessStatus)
  {
    $this->accountAccessStatus = $accountAccessStatus;
  }
  /**
   * @return self::ACCOUNT_ACCESS_STATUS_*
   */
  public function getAccountAccessStatus()
  {
    return $this->accountAccessStatus;
  }
  /**
   * @param self::CLOSING_REASON_* $closingReason
   */
  public function setClosingReason($closingReason)
  {
    $this->closingReason = $closingReason;
  }
  /**
   * @return self::CLOSING_REASON_*
   */
  public function getClosingReason()
  {
    return $this->closingReason;
  }
  /**
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
   * @param string $displayName
   */
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /**
   * @return string
   */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /**
   * @param string $id
   */
  public function setId($id)
  {
    $this->id = $id;
  }
  /**
   * @return string
   */
  public function getId()
  {
    return $this->id;
  }
  /**
   * @param IngestedUserListInfo $ingestedUserListInfo
   */
  public function setIngestedUserListInfo(IngestedUserListInfo $ingestedUserListInfo)
  {
    $this->ingestedUserListInfo = $ingestedUserListInfo;
  }
  /**
   * @return IngestedUserListInfo
   */
  public function getIngestedUserListInfo()
  {
    return $this->ingestedUserListInfo;
  }
  /**
   * @param string $integrationCode
   */
  public function setIntegrationCode($integrationCode)
  {
    $this->integrationCode = $integrationCode;
  }
  /**
   * @return string
   */
  public function getIntegrationCode()
  {
    return $this->integrationCode;
  }
  /**
   * @param string $membershipDuration
   */
  public function setMembershipDuration($membershipDuration)
  {
    $this->membershipDuration = $membershipDuration;
  }
  /**
   * @return string
   */
  public function getMembershipDuration()
  {
    return $this->membershipDuration;
  }
  /**
   * @param self::MEMBERSHIP_STATUS_* $membershipStatus
   */
  public function setMembershipStatus($membershipStatus)
  {
    $this->membershipStatus = $membershipStatus;
  }
  /**
   * @return self::MEMBERSHIP_STATUS_*
   */
  public function getMembershipStatus()
  {
    return $this->membershipStatus;
  }
  /**
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
   * @param bool $readOnly
   */
  public function setReadOnly($readOnly)
  {
    $this->readOnly = $readOnly;
  }
  /**
   * @return bool
   */
  public function getReadOnly()
  {
    return $this->readOnly;
  }
  /**
   * @param SizeInfo $sizeInfo
   */
  public function setSizeInfo(SizeInfo $sizeInfo)
  {
    $this->sizeInfo = $sizeInfo;
  }
  /**
   * @return SizeInfo
   */
  public function getSizeInfo()
  {
    return $this->sizeInfo;
  }
  /**
   * @param TargetNetworkInfo $targetNetworkInfo
   */
  public function setTargetNetworkInfo(TargetNetworkInfo $targetNetworkInfo)
  {
    $this->targetNetworkInfo = $targetNetworkInfo;
  }
  /**
   * @return TargetNetworkInfo
   */
  public function getTargetNetworkInfo()
  {
    return $this->targetNetworkInfo;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(UserList::class, 'Google_Service_DataManager_UserList');
