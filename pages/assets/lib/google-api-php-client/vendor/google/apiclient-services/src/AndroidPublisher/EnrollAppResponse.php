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

class EnrollAppResponse extends \Google\Model
{
  protected $signingCertificateType = CertificateHashes::class;
  protected $signingCertificateDataType = '';
  protected $uploadCertificateType = CertificateHashes::class;
  protected $uploadCertificateDataType = '';

  /**
   * The signing certificate hashes for the app. Always set.
   *
   * @param CertificateHashes $signingCertificate
   */
  public function setSigningCertificate(CertificateHashes $signingCertificate)
  {
    $this->signingCertificate = $signingCertificate;
  }
  /**
   * @return CertificateHashes
   */
  public function getSigningCertificate()
  {
    return $this->signingCertificate;
  }
  /**
   * The upload certificate hashes for the app. Set iff pem_upload_certificate
   * was set in the request.
   *
   * @param CertificateHashes $uploadCertificate
   */
  public function setUploadCertificate(CertificateHashes $uploadCertificate)
  {
    $this->uploadCertificate = $uploadCertificate;
  }
  /**
   * @return CertificateHashes
   */
  public function getUploadCertificate()
  {
    return $this->uploadCertificate;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(EnrollAppResponse::class, 'Google_Service_AndroidPublisher_EnrollAppResponse');
