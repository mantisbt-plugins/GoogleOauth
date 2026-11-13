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

namespace Google\Service\VMwareEngine;

class EncryptionConfig extends \Google\Model
{
  /**
   * The default value. This value should never be used.
   */
  public const TYPE_TYPE_UNSPECIFIED = 'TYPE_UNSPECIFIED';
  /**
   * Customer-managed encryption keys (CMEK).
   */
  public const TYPE_CMEK = 'CMEK';
  /**
   * Legacy customer-managed encryption keys (CMEK).
   */
  public const TYPE_LEGACY_CMEK = 'LEGACY_CMEK';
  /**
   * Other encryption types, such as self-managed external KMS.
   */
  public const TYPE_OTHER = 'OTHER';
  /**
   * Optional. The resource name of the Cloud KMS key to be used for CMEK
   * encryption. The format of this field is `projects/{project}/locations/{loca
   * tion}/keyRings/{key_ring}/cryptoKeys/{crypto_key}`. The key must be in the
   * same region as the private cloud. This key is used for wrapping the key-
   * encrypting key of vSAN clusters. This field must be provided when `type` is
   * `CMEK` or `LEGACY_CMEK`, and must not be set when `type` is `OTHER`.
   *
   * @var string
   */
  public $cryptoKeyName;
  /**
   * Required. The encryption type of the private cloud.
   *
   * @var string
   */
  public $type;

  /**
   * Optional. The resource name of the Cloud KMS key to be used for CMEK
   * encryption. The format of this field is `projects/{project}/locations/{loca
   * tion}/keyRings/{key_ring}/cryptoKeys/{crypto_key}`. The key must be in the
   * same region as the private cloud. This key is used for wrapping the key-
   * encrypting key of vSAN clusters. This field must be provided when `type` is
   * `CMEK` or `LEGACY_CMEK`, and must not be set when `type` is `OTHER`.
   *
   * @param string $cryptoKeyName
   */
  public function setCryptoKeyName($cryptoKeyName)
  {
    $this->cryptoKeyName = $cryptoKeyName;
  }
  /**
   * @return string
   */
  public function getCryptoKeyName()
  {
    return $this->cryptoKeyName;
  }
  /**
   * Required. The encryption type of the private cloud.
   *
   * Accepted values: TYPE_UNSPECIFIED, CMEK, LEGACY_CMEK, OTHER
   *
   * @param self::TYPE_* $type
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  /**
   * @return self::TYPE_*
   */
  public function getType()
  {
    return $this->type;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(EncryptionConfig::class, 'Google_Service_VMwareEngine_EncryptionConfig');
