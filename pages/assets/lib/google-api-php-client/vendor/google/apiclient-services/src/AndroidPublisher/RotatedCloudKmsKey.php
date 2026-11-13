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

class RotatedCloudKmsKey extends \Google\Model
{
  protected $cloudKmsKeyAndCertType = CloudKmsKeyAndCert::class;
  protected $cloudKmsKeyAndCertDataType = '';
  /**
   * Required. Proof-of-rotation. See [creating signing certificate
   * lineages](https://developer.android.com/studio/command-
   * line/apksigner#rotate_signing_keys_2).
   *
   * @var string
   */
  public $signingCertificateLineage;

  /**
   * Required. Cloud KMS key and the certificate associated with the key.
   *
   * @param CloudKmsKeyAndCert $cloudKmsKeyAndCert
   */
  public function setCloudKmsKeyAndCert(CloudKmsKeyAndCert $cloudKmsKeyAndCert)
  {
    $this->cloudKmsKeyAndCert = $cloudKmsKeyAndCert;
  }
  /**
   * @return CloudKmsKeyAndCert
   */
  public function getCloudKmsKeyAndCert()
  {
    return $this->cloudKmsKeyAndCert;
  }
  /**
   * Required. Proof-of-rotation. See [creating signing certificate
   * lineages](https://developer.android.com/studio/command-
   * line/apksigner#rotate_signing_keys_2).
   *
   * @param string $signingCertificateLineage
   */
  public function setSigningCertificateLineage($signingCertificateLineage)
  {
    $this->signingCertificateLineage = $signingCertificateLineage;
  }
  /**
   * @return string
   */
  public function getSigningCertificateLineage()
  {
    return $this->signingCertificateLineage;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RotatedCloudKmsKey::class, 'Google_Service_AndroidPublisher_RotatedCloudKmsKey');
