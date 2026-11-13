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

namespace Google\Service\StorageBatchOperations;

class RewriteObject extends \Google\Model
{
  /**
   * The storage class is not specified.
   */
  public const STORAGE_CLASS_STORAGE_CLASS_UNSPECIFIED = 'STORAGE_CLASS_UNSPECIFIED';
  /**
   * Standard storage class.
   */
  public const STORAGE_CLASS_STANDARD = 'STANDARD';
  /**
   * Nearline storage class.
   */
  public const STORAGE_CLASS_NEARLINE = 'NEARLINE';
  /**
   * Coldline storage class.
   */
  public const STORAGE_CLASS_COLDLINE = 'COLDLINE';
  /**
   * Archive storage class.
   */
  public const STORAGE_CLASS_ARCHIVE = 'ARCHIVE';
  /**
   * Optional. Resource name of the Cloud KMS key that is used to encrypt the
   * object. The Cloud KMS key must be located in same location as the object.
   * For details, see https://cloud.google.com/storage/docs/encryption/using-
   * customer-managed-keys#add-object-key Format: `projects/{project_id}/locatio
   * ns/{location}/keyRings/{keyring}/cryptoKeys/{key}` For example:
   * `projects/123456/locations/us-central1/keyRings/my-keyring/cryptoKeys/my-
   * key`. The object will be rewritten and set with the specified KMS key.
   *
   * @var string
   */
  public $kmsKey;
  /**
   * Optional. Rewrites the object to the specified storage class. Setting this
   * field will perform a full byte copy of the object if the storage class is
   * different from the object's current storage class. If Autoclass is enabled
   * on the bucket, storage class changes are ignored by Cloud Storage.
   *
   * @var string
   */
  public $storageClass;

  /**
   * Optional. Resource name of the Cloud KMS key that is used to encrypt the
   * object. The Cloud KMS key must be located in same location as the object.
   * For details, see https://cloud.google.com/storage/docs/encryption/using-
   * customer-managed-keys#add-object-key Format: `projects/{project_id}/locatio
   * ns/{location}/keyRings/{keyring}/cryptoKeys/{key}` For example:
   * `projects/123456/locations/us-central1/keyRings/my-keyring/cryptoKeys/my-
   * key`. The object will be rewritten and set with the specified KMS key.
   *
   * @param string $kmsKey
   */
  public function setKmsKey($kmsKey)
  {
    $this->kmsKey = $kmsKey;
  }
  /**
   * @return string
   */
  public function getKmsKey()
  {
    return $this->kmsKey;
  }
  /**
   * Optional. Rewrites the object to the specified storage class. Setting this
   * field will perform a full byte copy of the object if the storage class is
   * different from the object's current storage class. If Autoclass is enabled
   * on the bucket, storage class changes are ignored by Cloud Storage.
   *
   * Accepted values: STORAGE_CLASS_UNSPECIFIED, STANDARD, NEARLINE, COLDLINE,
   * ARCHIVE
   *
   * @param self::STORAGE_CLASS_* $storageClass
   */
  public function setStorageClass($storageClass)
  {
    $this->storageClass = $storageClass;
  }
  /**
   * @return self::STORAGE_CLASS_*
   */
  public function getStorageClass()
  {
    return $this->storageClass;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RewriteObject::class, 'Google_Service_StorageBatchOperations_RewriteObject');
