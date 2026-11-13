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

namespace Google\Service\BigQueryConnectionService;

class ConnectorConfigurationTlsPrivatePki extends \Google\Model
{
  /**
   * Optional. a PEM-encoded list of certificates to trust
   *
   * @var string
   */
  public $trustedCertificatesPem;

  /**
   * Optional. a PEM-encoded list of certificates to trust
   *
   * @param string $trustedCertificatesPem
   */
  public function setTrustedCertificatesPem($trustedCertificatesPem)
  {
    $this->trustedCertificatesPem = $trustedCertificatesPem;
  }
  /**
   * @return string
   */
  public function getTrustedCertificatesPem()
  {
    return $this->trustedCertificatesPem;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ConnectorConfigurationTlsPrivatePki::class, 'Google_Service_BigQueryConnectionService_ConnectorConfigurationTlsPrivatePki');
