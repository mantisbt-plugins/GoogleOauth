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

namespace Google\Service\OracleDatabase;

class DatabaseConnection extends \Google\Model
{
  /**
   * Default unspecified value.
   */
  public const STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * Indicates that the resource is in a creating state.
   */
  public const STATE_CREATING = 'CREATING';
  /**
   * Indicates that the resource is in an active state.
   */
  public const STATE_ACTIVE = 'ACTIVE';
  /**
   * Indicates that the resource is in a failed state.
   */
  public const STATE_FAILED = 'FAILED';
  /**
   * Indicates that the resource is in a deleting state.
   */
  public const STATE_DELETING = 'DELETING';
  /**
   * Required. Immutable. Oracle Easy Connect or TNS connection string. Example:
   * "your-db-host.example.com:1521/YOUR_SERVICE_NAME"
   *
   * @var string
   */
  public $connectionString;
  /**
   * Output only. The create time of the resource.
   *
   * @var string
   */
  public $createTime;
  /**
   * Optional. Immutable. User-friendly display name for the connection.
   *
   * @var string
   */
  public $displayName;
  /**
   * Optional. Optional: Labels as key-value pairs to organize the resource.
   *
   * @var string[]
   */
  public $labels;
  /**
   * Output only. Additional information about the current state of the
   * connection.
   *
   * @var string
   */
  public $lifecycleDetails;
  /**
   * Identifier. The resource name of the DatabaseConnection. Format: projects/{
   * project}/locations/{location}/databaseConnections/{database_connection}
   *
   * @var string
   */
  public $name;
  /**
   * Optional. Immutable. For Oracle Database@Google cloud resources. Format:
   * projects/{project}/locations/{location}/odbNetworks/{odbNetwork}
   *
   * @var string
   */
  public $odbNetwork;
  /**
   * Optional. The resource name of the GCP Secret Manager secret version
   * containing the password for the specified username. Format:
   * projects/{project}/secrets/{secret_id}/versions/{version_id} The service's
   * Per-Product Per-Project Service Account (P4SA) must have the
   * 'secretmanager.secretAccessor' permission on this secret.
   *
   * @var string
   */
  public $passwordSecretVersion;
  /**
   * Output only. The current state of the connection.
   *
   * @var string
   */
  public $state;
  /**
   * Output only. The update time of the resource.
   *
   * @var string
   */
  public $updateTime;
  /**
   * Optional. Immutable. The default database username to use for connections.
   *
   * @var string
   */
  public $username;
  /**
   * Optional. Optional: The resource name of the GCP Secret Manager secret
   * version containing base64 encoded content of the Oracle Wallet ZIP file
   * required for mTLS/TLS connections. Format:
   * projects/{project}/secrets/{secret_id}/versions/{version_id} The service's
   * Per-Product Per-Project Service Account (P4SA) must have the
   * 'secretmanager.secretAccessor' permission on this secret.
   *
   * @var string
   */
  public $walletSecretVersion;

  /**
   * Required. Immutable. Oracle Easy Connect or TNS connection string. Example:
   * "your-db-host.example.com:1521/YOUR_SERVICE_NAME"
   *
   * @param string $connectionString
   */
  public function setConnectionString($connectionString)
  {
    $this->connectionString = $connectionString;
  }
  /**
   * @return string
   */
  public function getConnectionString()
  {
    return $this->connectionString;
  }
  /**
   * Output only. The create time of the resource.
   *
   * @param string $createTime
   */
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  /**
   * @return string
   */
  public function getCreateTime()
  {
    return $this->createTime;
  }
  /**
   * Optional. Immutable. User-friendly display name for the connection.
   *
   * @param string $displayName
   */
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /**
   * @return string
   */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /**
   * Optional. Optional: Labels as key-value pairs to organize the resource.
   *
   * @param string[] $labels
   */
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  /**
   * @return string[]
   */
  public function getLabels()
  {
    return $this->labels;
  }
  /**
   * Output only. Additional information about the current state of the
   * connection.
   *
   * @param string $lifecycleDetails
   */
  public function setLifecycleDetails($lifecycleDetails)
  {
    $this->lifecycleDetails = $lifecycleDetails;
  }
  /**
   * @return string
   */
  public function getLifecycleDetails()
  {
    return $this->lifecycleDetails;
  }
  /**
   * Identifier. The resource name of the DatabaseConnection. Format: projects/{
   * project}/locations/{location}/databaseConnections/{database_connection}
   *
   * @param string $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * Optional. Immutable. For Oracle Database@Google cloud resources. Format:
   * projects/{project}/locations/{location}/odbNetworks/{odbNetwork}
   *
   * @param string $odbNetwork
   */
  public function setOdbNetwork($odbNetwork)
  {
    $this->odbNetwork = $odbNetwork;
  }
  /**
   * @return string
   */
  public function getOdbNetwork()
  {
    return $this->odbNetwork;
  }
  /**
   * Optional. The resource name of the GCP Secret Manager secret version
   * containing the password for the specified username. Format:
   * projects/{project}/secrets/{secret_id}/versions/{version_id} The service's
   * Per-Product Per-Project Service Account (P4SA) must have the
   * 'secretmanager.secretAccessor' permission on this secret.
   *
   * @param string $passwordSecretVersion
   */
  public function setPasswordSecretVersion($passwordSecretVersion)
  {
    $this->passwordSecretVersion = $passwordSecretVersion;
  }
  /**
   * @return string
   */
  public function getPasswordSecretVersion()
  {
    return $this->passwordSecretVersion;
  }
  /**
   * Output only. The current state of the connection.
   *
   * Accepted values: STATE_UNSPECIFIED, CREATING, ACTIVE, FAILED, DELETING
   *
   * @param self::STATE_* $state
   */
  public function setState($state)
  {
    $this->state = $state;
  }
  /**
   * @return self::STATE_*
   */
  public function getState()
  {
    return $this->state;
  }
  /**
   * Output only. The update time of the resource.
   *
   * @param string $updateTime
   */
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  /**
   * @return string
   */
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
  /**
   * Optional. Immutable. The default database username to use for connections.
   *
   * @param string $username
   */
  public function setUsername($username)
  {
    $this->username = $username;
  }
  /**
   * @return string
   */
  public function getUsername()
  {
    return $this->username;
  }
  /**
   * Optional. Optional: The resource name of the GCP Secret Manager secret
   * version containing base64 encoded content of the Oracle Wallet ZIP file
   * required for mTLS/TLS connections. Format:
   * projects/{project}/secrets/{secret_id}/versions/{version_id} The service's
   * Per-Product Per-Project Service Account (P4SA) must have the
   * 'secretmanager.secretAccessor' permission on this secret.
   *
   * @param string $walletSecretVersion
   */
  public function setWalletSecretVersion($walletSecretVersion)
  {
    $this->walletSecretVersion = $walletSecretVersion;
  }
  /**
   * @return string
   */
  public function getWalletSecretVersion()
  {
    return $this->walletSecretVersion;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DatabaseConnection::class, 'Google_Service_OracleDatabase_DatabaseConnection');
