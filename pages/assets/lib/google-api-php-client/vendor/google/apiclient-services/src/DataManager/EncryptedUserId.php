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

class EncryptedUserId extends \Google\Model
{
  public const ENTITY_TYPE_ENCRYPTION_ENTITY_TYPE_UNSPECIFIED = 'ENCRYPTION_ENTITY_TYPE_UNSPECIFIED';
  public const ENTITY_TYPE_CAMPAIGN_MANAGER_ACCOUNT = 'CAMPAIGN_MANAGER_ACCOUNT';
  public const ENTITY_TYPE_CAMPAIGN_MANAGER_ADVERTISER = 'CAMPAIGN_MANAGER_ADVERTISER';
  public const ENTITY_TYPE_DISPLAY_VIDEO_PARTNER = 'DISPLAY_VIDEO_PARTNER';
  public const ENTITY_TYPE_DISPLAY_VIDEO_ADVERTISER = 'DISPLAY_VIDEO_ADVERTISER';
  public const ENTITY_TYPE_GOOGLE_ADS_CUSTOMER = 'GOOGLE_ADS_CUSTOMER';
  public const ENTITY_TYPE_GOOGLE_AD_MANAGER_NETWORK_CODE = 'GOOGLE_AD_MANAGER_NETWORK_CODE';
  public const SOURCE_ENCRYPTION_SOURCE_UNSPECIFIED = 'ENCRYPTION_SOURCE_UNSPECIFIED';
  public const SOURCE_AD_SERVING = 'AD_SERVING';
  public const SOURCE_DATA_TRANSFER = 'DATA_TRANSFER';
  /**
   * @var string
   */
  public $encryptedId;
  /**
   * @var string
   */
  public $entityId;
  /**
   * @var string
   */
  public $entityType;
  /**
   * @var string
   */
  public $source;

  /**
   * @param string $encryptedId
   */
  public function setEncryptedId($encryptedId)
  {
    $this->encryptedId = $encryptedId;
  }
  /**
   * @return string
   */
  public function getEncryptedId()
  {
    return $this->encryptedId;
  }
  /**
   * @param string $entityId
   */
  public function setEntityId($entityId)
  {
    $this->entityId = $entityId;
  }
  /**
   * @return string
   */
  public function getEntityId()
  {
    return $this->entityId;
  }
  /**
   * @param self::ENTITY_TYPE_* $entityType
   */
  public function setEntityType($entityType)
  {
    $this->entityType = $entityType;
  }
  /**
   * @return self::ENTITY_TYPE_*
   */
  public function getEntityType()
  {
    return $this->entityType;
  }
  /**
   * @param self::SOURCE_* $source
   */
  public function setSource($source)
  {
    $this->source = $source;
  }
  /**
   * @return self::SOURCE_*
   */
  public function getSource()
  {
    return $this->source;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(EncryptedUserId::class, 'Google_Service_DataManager_EncryptedUserId');
