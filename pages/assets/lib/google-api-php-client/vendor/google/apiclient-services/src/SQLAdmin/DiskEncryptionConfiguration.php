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

namespace Google\Service\SQLAdmin;

class DiskEncryptionConfiguration extends \Google\Model
{
  /**
   * Optional. Whether to enforce CMEK log encryption at source. When enforced,
   * transaction logs are encrypted prior to being uploaded to Cloud Storage. If
   * not enforced, then CMEK logs are encrypted by the Cloud Storage service.
   *
   * @var bool
   */
  public $cmekSourceLogEncryptionEnforced;
  /**
   * Optional. If true, enables Confidential Mode for the instance's Hyperdisk
   * Balanced volumes. Only supported for zonal C4A instances currently.
   *
   * @var bool
   */
  public $confidentialMode;
  /**
   * This is always `sql#diskEncryptionConfiguration`.
   *
   * @var string
   */
  public $kind;
  /**
   * Resource name of KMS key for disk encryption.
   *
   * @var string
   */
  public $kmsKeyName;

  /**
   * Optional. Whether to enforce CMEK log encryption at source. When enforced,
   * transaction logs are encrypted prior to being uploaded to Cloud Storage. If
   * not enforced, then CMEK logs are encrypted by the Cloud Storage service.
   *
   * @param bool $cmekSourceLogEncryptionEnforced
   */
  public function setCmekSourceLogEncryptionEnforced($cmekSourceLogEncryptionEnforced)
  {
    $this->cmekSourceLogEncryptionEnforced = $cmekSourceLogEncryptionEnforced;
  }
  /**
   * @return bool
   */
  public function getCmekSourceLogEncryptionEnforced()
  {
    return $this->cmekSourceLogEncryptionEnforced;
  }
  /**
   * Optional. If true, enables Confidential Mode for the instance's Hyperdisk
   * Balanced volumes. Only supported for zonal C4A instances currently.
   *
   * @param bool $confidentialMode
   */
  public function setConfidentialMode($confidentialMode)
  {
    $this->confidentialMode = $confidentialMode;
  }
  /**
   * @return bool
   */
  public function getConfidentialMode()
  {
    return $this->confidentialMode;
  }
  /**
   * This is always `sql#diskEncryptionConfiguration`.
   *
   * @param string $kind
   */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /**
   * @return string
   */
  public function getKind()
  {
    return $this->kind;
  }
  /**
   * Resource name of KMS key for disk encryption.
   *
   * @param string $kmsKeyName
   */
  public function setKmsKeyName($kmsKeyName)
  {
    $this->kmsKeyName = $kmsKeyName;
  }
  /**
   * @return string
   */
  public function getKmsKeyName()
  {
    return $this->kmsKeyName;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DiskEncryptionConfiguration::class, 'Google_Service_SQLAdmin_DiskEncryptionConfiguration');
