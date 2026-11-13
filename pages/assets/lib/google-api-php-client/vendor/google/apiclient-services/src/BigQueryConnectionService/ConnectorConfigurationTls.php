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

class ConnectorConfigurationTls extends \Google\Model
{
  /**
   * TLS mode unspecified.
   */
  public const MODE_MODE_UNSPECIFIED = 'MODE_UNSPECIFIED';
  /**
   * TLS is disabled.
   */
  public const MODE_DISABLE = 'DISABLE';
  /**
   * Encryption is enabled, but server certificate is not verified.
   */
  public const MODE_ENCRYPT_VERIFY_NONE = 'ENCRYPT_VERIFY_NONE';
  /**
   * Encryption is enabled, and server certificate is verified.
   */
  public const MODE_ENCRYPT_VERIFY_CA = 'ENCRYPT_VERIFY_CA';
  /**
   * Encryption is enabled, and server certificate and host are verified.
   */
  public const MODE_ENCRYPT_VERIFY_CA_AND_HOST = 'ENCRYPT_VERIFY_CA_AND_HOST';
  /**
   * Optional. The mode of TLS configuration.
   *
   * @var string
   */
  public $mode;
  protected $privatePkiType = ConnectorConfigurationTlsPrivatePki::class;
  protected $privatePkiDataType = '';
  protected $webPkiType = ConnectorConfigurationTlsWebPki::class;
  protected $webPkiDataType = '';

  /**
   * Optional. The mode of TLS configuration.
   *
   * Accepted values: MODE_UNSPECIFIED, DISABLE, ENCRYPT_VERIFY_NONE,
   * ENCRYPT_VERIFY_CA, ENCRYPT_VERIFY_CA_AND_HOST
   *
   * @param self::MODE_* $mode
   */
  public function setMode($mode)
  {
    $this->mode = $mode;
  }
  /**
   * @return self::MODE_*
   */
  public function getMode()
  {
    return $this->mode;
  }
  /**
   * Optional. Private PKI.
   *
   * @param ConnectorConfigurationTlsPrivatePki $privatePki
   */
  public function setPrivatePki(ConnectorConfigurationTlsPrivatePki $privatePki)
  {
    $this->privatePki = $privatePki;
  }
  /**
   * @return ConnectorConfigurationTlsPrivatePki
   */
  public function getPrivatePki()
  {
    return $this->privatePki;
  }
  /**
   * Optional. Web PKI.
   *
   * @param ConnectorConfigurationTlsWebPki $webPki
   */
  public function setWebPki(ConnectorConfigurationTlsWebPki $webPki)
  {
    $this->webPki = $webPki;
  }
  /**
   * @return ConnectorConfigurationTlsWebPki
   */
  public function getWebPki()
  {
    return $this->webPki;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ConnectorConfigurationTls::class, 'Google_Service_BigQueryConnectionService_ConnectorConfigurationTls');
