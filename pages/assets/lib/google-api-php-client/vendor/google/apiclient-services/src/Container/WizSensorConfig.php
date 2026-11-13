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

namespace Google\Service\Container;

class WizSensorConfig extends \Google\Model
{
  /**
   * Optional. The GCP Secret Manager URI for the Wiz API key secret. Format:
   * "projects/{project_id}/secrets/{secret_name}/versions/{version}" or Format:
   * "projects/{project_id}/locations/{location_id}/secrets/{secret_name}/versio
   * ns/{version}"
   *
   * @var string
   */
  public $apiKeySecretUri;
  /**
   * Optional. Whether the Wiz Sensor add-on is enabled for this cluster.
   *
   * @var bool
   */
  public $enabled;
  /**
   * Optional. The GCP Secret Manager URI for the Wiz proxy configuration.
   * Format: "projects/{project_id}/secrets/{secret_name}/versions/{version}" or
   * Format: "projects/{project_id}/locations/{location_id}/secrets/{secret_name
   * }/versions/{version}"
   *
   * @var string
   */
  public $proxySecretUri;
  /**
   * Optional. The GCP Secret Manager URI for the Wiz registry secret. Format:
   * "projects/{project_id}/secrets/{secret_name}/versions/{version}" or Format:
   * "projects/{project_id}/locations/{location_id}/secrets/{secret_name}/versio
   * ns/{version}"
   *
   * @var string
   */
  public $registrySecretUri;

  /**
   * Optional. The GCP Secret Manager URI for the Wiz API key secret. Format:
   * "projects/{project_id}/secrets/{secret_name}/versions/{version}" or Format:
   * "projects/{project_id}/locations/{location_id}/secrets/{secret_name}/versio
   * ns/{version}"
   *
   * @param string $apiKeySecretUri
   */
  public function setApiKeySecretUri($apiKeySecretUri)
  {
    $this->apiKeySecretUri = $apiKeySecretUri;
  }
  /**
   * @return string
   */
  public function getApiKeySecretUri()
  {
    return $this->apiKeySecretUri;
  }
  /**
   * Optional. Whether the Wiz Sensor add-on is enabled for this cluster.
   *
   * @param bool $enabled
   */
  public function setEnabled($enabled)
  {
    $this->enabled = $enabled;
  }
  /**
   * @return bool
   */
  public function getEnabled()
  {
    return $this->enabled;
  }
  /**
   * Optional. The GCP Secret Manager URI for the Wiz proxy configuration.
   * Format: "projects/{project_id}/secrets/{secret_name}/versions/{version}" or
   * Format: "projects/{project_id}/locations/{location_id}/secrets/{secret_name
   * }/versions/{version}"
   *
   * @param string $proxySecretUri
   */
  public function setProxySecretUri($proxySecretUri)
  {
    $this->proxySecretUri = $proxySecretUri;
  }
  /**
   * @return string
   */
  public function getProxySecretUri()
  {
    return $this->proxySecretUri;
  }
  /**
   * Optional. The GCP Secret Manager URI for the Wiz registry secret. Format:
   * "projects/{project_id}/secrets/{secret_name}/versions/{version}" or Format:
   * "projects/{project_id}/locations/{location_id}/secrets/{secret_name}/versio
   * ns/{version}"
   *
   * @param string $registrySecretUri
   */
  public function setRegistrySecretUri($registrySecretUri)
  {
    $this->registrySecretUri = $registrySecretUri;
  }
  /**
   * @return string
   */
  public function getRegistrySecretUri()
  {
    return $this->registrySecretUri;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(WizSensorConfig::class, 'Google_Service_Container_WizSensorConfig');
