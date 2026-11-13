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

class EnrollAppRequest extends \Google\Model
{
  protected $enrollExistingAppType = EnrollExistingApp::class;
  protected $enrollExistingAppDataType = '';
  protected $enrollNewAppType = EnrollNewApp::class;
  protected $enrollNewAppDataType = '';
  /**
   * The certificate associated with the upload key, in PEM format.
   *
   * @var string
   */
  public $pemUploadCertificate;

  /**
   * Enrolls an existing app into Play signing using an external Cloud KMS key.
   *
   * @param EnrollExistingApp $enrollExistingApp
   */
  public function setEnrollExistingApp(EnrollExistingApp $enrollExistingApp)
  {
    $this->enrollExistingApp = $enrollExistingApp;
  }
  /**
   * @return EnrollExistingApp
   */
  public function getEnrollExistingApp()
  {
    return $this->enrollExistingApp;
  }
  /**
   * Changes the signing key of a new app to an external Cloud KMS key. The app
   * must not have published to Open testing or Production tracks.
   *
   * @param EnrollNewApp $enrollNewApp
   */
  public function setEnrollNewApp(EnrollNewApp $enrollNewApp)
  {
    $this->enrollNewApp = $enrollNewApp;
  }
  /**
   * @return EnrollNewApp
   */
  public function getEnrollNewApp()
  {
    return $this->enrollNewApp;
  }
  /**
   * The certificate associated with the upload key, in PEM format.
   *
   * @param string $pemUploadCertificate
   */
  public function setPemUploadCertificate($pemUploadCertificate)
  {
    $this->pemUploadCertificate = $pemUploadCertificate;
  }
  /**
   * @return string
   */
  public function getPemUploadCertificate()
  {
    return $this->pemUploadCertificate;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(EnrollAppRequest::class, 'Google_Service_AndroidPublisher_EnrollAppRequest');
