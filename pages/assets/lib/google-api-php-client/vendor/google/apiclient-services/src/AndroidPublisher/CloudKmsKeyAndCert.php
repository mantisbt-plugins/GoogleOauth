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

class CloudKmsKeyAndCert extends \Google\Model
{
  protected $cloudKmsKeyType = CloudKmsKey::class;
  protected $cloudKmsKeyDataType = '';
  /**
   * Required. Certificate associated with the key. The bytes must contain the
   * certificate in PEM format.
   *
   * @var string
   */
  public $pemCertificate;

  /**
   * Required. Cloud KMS key.
   *
   * @param CloudKmsKey $cloudKmsKey
   */
  public function setCloudKmsKey(CloudKmsKey $cloudKmsKey)
  {
    $this->cloudKmsKey = $cloudKmsKey;
  }
  /**
   * @return CloudKmsKey
   */
  public function getCloudKmsKey()
  {
    return $this->cloudKmsKey;
  }
  /**
   * Required. Certificate associated with the key. The bytes must contain the
   * certificate in PEM format.
   *
   * @param string $pemCertificate
   */
  public function setPemCertificate($pemCertificate)
  {
    $this->pemCertificate = $pemCertificate;
  }
  /**
   * @return string
   */
  public function getPemCertificate()
  {
    return $this->pemCertificate;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CloudKmsKeyAndCert::class, 'Google_Service_AndroidPublisher_CloudKmsKeyAndCert');
