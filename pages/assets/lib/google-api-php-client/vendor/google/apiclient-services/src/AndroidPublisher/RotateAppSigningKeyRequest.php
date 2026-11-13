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

namespace Google\Service\AndroidPublisher;

class RotateAppSigningKeyRequest extends \Google\Model
{
  /**
   * Unspecified key rotation reason. Cannot be used.
   */
  public const KEY_ROTATION_REASON_KEY_ROTATION_REASON_UNSPECIFIED = 'KEY_ROTATION_REASON_UNSPECIFIED';
  /**
   * Key is compromised.
   */
  public const KEY_ROTATION_REASON_COMPROMISED_KEY = 'COMPROMISED_KEY';
  /**
   * Stronger key is required.
   */
  public const KEY_ROTATION_REASON_USE_STRONGER_KEY = 'USE_STRONGER_KEY';
  /**
   * Same key is used for multiple apps.
   */
  public const KEY_ROTATION_REASON_USE_SAME_KEY_FOR_MULTIPLE_APPS = 'USE_SAME_KEY_FOR_MULTIPLE_APPS';
  /**
   * Routine key upgrade.
   */
  public const KEY_ROTATION_REASON_ROUTINE_KEY_UPGRADE = 'ROUTINE_KEY_UPGRADE';
  /**
   * Other reason.
   */
  public const KEY_ROTATION_REASON_OTHER = 'OTHER';
  /**
   * Required. Reason for rotating the app key.
   *
   * @var string
   */
  public $keyRotationReason;
  protected $rotatedCloudKmsKeyType = RotatedCloudKmsKey::class;
  protected $rotatedCloudKmsKeyDataType = '';

  /**
   * Required. Reason for rotating the app key.
   *
   * Accepted values: KEY_ROTATION_REASON_UNSPECIFIED, COMPROMISED_KEY,
   * USE_STRONGER_KEY, USE_SAME_KEY_FOR_MULTIPLE_APPS, ROUTINE_KEY_UPGRADE,
   * OTHER
   *
   * @param self::KEY_ROTATION_REASON_* $keyRotationReason
   */
  public function setKeyRotationReason($keyRotationReason)
  {
    $this->keyRotationReason = $keyRotationReason;
  }
  /**
   * @return self::KEY_ROTATION_REASON_*
   */
  public function getKeyRotationReason()
  {
    return $this->keyRotationReason;
  }
  /**
   * Required. Self-hosted Cloud KMS key.
   *
   * @param RotatedCloudKmsKey $rotatedCloudKmsKey
   */
  public function setRotatedCloudKmsKey(RotatedCloudKmsKey $rotatedCloudKmsKey)
  {
    $this->rotatedCloudKmsKey = $rotatedCloudKmsKey;
  }
  /**
   * @return RotatedCloudKmsKey
   */
  public function getRotatedCloudKmsKey()
  {
    return $this->rotatedCloudKmsKey;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RotateAppSigningKeyRequest::class, 'Google_Service_AndroidPublisher_RotateAppSigningKeyRequest');
