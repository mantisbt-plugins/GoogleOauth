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

class ConnectorConfiguration extends \Google\Model
{
  protected $assetType = ConnectorConfigurationAsset::class;
  protected $assetDataType = '';
  protected $authenticationType = ConnectorConfigurationAuthentication::class;
  protected $authenticationDataType = '';
  /**
   * Required. Immutable. The ID of the Connector these parameters are
   * configured for.
   *
   * @var string
   */
  public $connectorId;
  protected $endpointType = ConnectorConfigurationEndpoint::class;
  protected $endpointDataType = '';
  protected $networkType = ConnectorConfigurationNetwork::class;
  protected $networkDataType = '';
  protected $parametersType = ConnectorConfigurationParameterValue::class;
  protected $parametersDataType = 'map';
  protected $tlsType = ConnectorConfigurationTls::class;
  protected $tlsDataType = '';

  /**
   * Data asset.
   *
   * @param ConnectorConfigurationAsset $asset
   */
  public function setAsset(ConnectorConfigurationAsset $asset)
  {
    $this->asset = $asset;
  }
  /**
   * @return ConnectorConfigurationAsset
   */
  public function getAsset()
  {
    return $this->asset;
  }
  /**
   * Client authentication.
   *
   * @param ConnectorConfigurationAuthentication $authentication
   */
  public function setAuthentication(ConnectorConfigurationAuthentication $authentication)
  {
    $this->authentication = $authentication;
  }
  /**
   * @return ConnectorConfigurationAuthentication
   */
  public function getAuthentication()
  {
    return $this->authentication;
  }
  /**
   * Required. Immutable. The ID of the Connector these parameters are
   * configured for.
   *
   * @param string $connectorId
   */
  public function setConnectorId($connectorId)
  {
    $this->connectorId = $connectorId;
  }
  /**
   * @return string
   */
  public function getConnectorId()
  {
    return $this->connectorId;
  }
  /**
   * Specifies how to reach the remote system this connection is pointing to.
   *
   * @param ConnectorConfigurationEndpoint $endpoint
   */
  public function setEndpoint(ConnectorConfigurationEndpoint $endpoint)
  {
    $this->endpoint = $endpoint;
  }
  /**
   * @return ConnectorConfigurationEndpoint
   */
  public function getEndpoint()
  {
    return $this->endpoint;
  }
  /**
   * Networking configuration.
   *
   * @param ConnectorConfigurationNetwork $network
   */
  public function setNetwork(ConnectorConfigurationNetwork $network)
  {
    $this->network = $network;
  }
  /**
   * @return ConnectorConfigurationNetwork
   */
  public function getNetwork()
  {
    return $this->network;
  }
  /**
   * Optional. A map of name-value pairs for connector-specific parameters.
   * These extra configuration parameters aren't standardized in the
   * configuration sections. To update a single parameter value, call
   * ConnectionService.UpdateConnection with `update_mask` set to
   * `configuration.parameters.parameter_id`. If ``parameter_id`` doesn't fit
   * the `[a-zA-Z0-9_]+` pattern, ``parameter_id`` should be escaped with
   * backticks—for example, ``configuration.parameters.`parameter id` ``.
   *
   * @param ConnectorConfigurationParameterValue[] $parameters
   */
  public function setParameters($parameters)
  {
    $this->parameters = $parameters;
  }
  /**
   * @return ConnectorConfigurationParameterValue[]
   */
  public function getParameters()
  {
    return $this->parameters;
  }
  /**
   * Optional. TLS configuration options.
   *
   * @param ConnectorConfigurationTls $tls
   */
  public function setTls(ConnectorConfigurationTls $tls)
  {
    $this->tls = $tls;
  }
  /**
   * @return ConnectorConfigurationTls
   */
  public function getTls()
  {
    return $this->tls;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ConnectorConfiguration::class, 'Google_Service_BigQueryConnectionService_ConnectorConfiguration');
