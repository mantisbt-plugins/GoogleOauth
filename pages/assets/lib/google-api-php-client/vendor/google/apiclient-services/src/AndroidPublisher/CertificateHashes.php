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

class CertificateHashes extends \Google\Model
{
  /**
   * Hex-encoded MD5 hash of the certificate. example:
   * `43:51:43:A1:B5:FC:8B:B7:0A:3A:A9:B1:0F:66:73:A8`
   *
   * @var string
   */
  public $certificateHashMd5;
  /**
   * Hex-encoded SHA1 hash of the certificate. example:
   * `86:61:97:1A:D5:EF:E5:74:1E:A7:5B:84:7C:68:37:65:CD:94:16:DE`
   *
   * @var string
   */
  public $certificateHashSha1;
  /**
   * Hex-encoded SHA256 hash of the certificate. example: `94:49:C7:F3:A9:3C:F0:
   * C5:5A:67:5D:DF:1C:83:73:2D:87:D5:62:55:E7:0B:15:0D:9E:6F:3C:F8:63:BB:7F:C1`
   *
   * @var string
   */
  public $certificateHashSha256;

  /**
   * Hex-encoded MD5 hash of the certificate. example:
   * `43:51:43:A1:B5:FC:8B:B7:0A:3A:A9:B1:0F:66:73:A8`
   *
   * @param string $certificateHashMd5
   */
  public function setCertificateHashMd5($certificateHashMd5)
  {
    $this->certificateHashMd5 = $certificateHashMd5;
  }
  /**
   * @return string
   */
  public function getCertificateHashMd5()
  {
    return $this->certificateHashMd5;
  }
  /**
   * Hex-encoded SHA1 hash of the certificate. example:
   * `86:61:97:1A:D5:EF:E5:74:1E:A7:5B:84:7C:68:37:65:CD:94:16:DE`
   *
   * @param string $certificateHashSha1
   */
  public function setCertificateHashSha1($certificateHashSha1)
  {
    $this->certificateHashSha1 = $certificateHashSha1;
  }
  /**
   * @return string
   */
  public function getCertificateHashSha1()
  {
    return $this->certificateHashSha1;
  }
  /**
   * Hex-encoded SHA256 hash of the certificate. example: `94:49:C7:F3:A9:3C:F0:
   * C5:5A:67:5D:DF:1C:83:73:2D:87:D5:62:55:E7:0B:15:0D:9E:6F:3C:F8:63:BB:7F:C1`
   *
   * @param string $certificateHashSha256
   */
  public function setCertificateHashSha256($certificateHashSha256)
  {
    $this->certificateHashSha256 = $certificateHashSha256;
  }
  /**
   * @return string
   */
  public function getCertificateHashSha256()
  {
    return $this->certificateHashSha256;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CertificateHashes::class, 'Google_Service_AndroidPublisher_CertificateHashes');
