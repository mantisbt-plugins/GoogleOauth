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

namespace Google\Service\NetworkServices;

class EgressNetworkConfigTlsConfig extends \Google\Model
{
  /**
   * Unspecified additional roots.
   */
  public const ADDITIONAL_ROOTS_ADDITIONAL_ROOTS_UNSPECIFIED = 'ADDITIONAL_ROOTS_UNSPECIFIED';
  /**
   * Trust only the certificates provided in `trust_config`.
   */
  public const ADDITIONAL_ROOTS_NO_ADDITIONAL_ROOTS = 'NO_ADDITIONAL_ROOTS';
  /**
   * Trust certificates provided in `trust_config` and publicly trusted roots.
   */
  public const ADDITIONAL_ROOTS_PUBLICLY_TRUSTED_ROOTS = 'PUBLICLY_TRUSTED_ROOTS';
  /**
   * Optional. The additional roots to trust.
   *
   * @var string
   */
  public $additionalRoots;
  /**
   * Optional. The trust config resource name. Format:
   * projects/{project}/locations/{location}/trustConfigs/{trust_config}
   *
   * @var string
   */
  public $trustConfig;

  /**
   * Optional. The additional roots to trust.
   *
   * Accepted values: ADDITIONAL_ROOTS_UNSPECIFIED, NO_ADDITIONAL_ROOTS,
   * PUBLICLY_TRUSTED_ROOTS
   *
   * @param self::ADDITIONAL_ROOTS_* $additionalRoots
   */
  public function setAdditionalRoots($additionalRoots)
  {
    $this->additionalRoots = $additionalRoots;
  }
  /**
   * @return self::ADDITIONAL_ROOTS_*
   */
  public function getAdditionalRoots()
  {
    return $this->additionalRoots;
  }
  /**
   * Optional. The trust config resource name. Format:
   * projects/{project}/locations/{location}/trustConfigs/{trust_config}
   *
   * @param string $trustConfig
   */
  public function setTrustConfig($trustConfig)
  {
    $this->trustConfig = $trustConfig;
  }
  /**
   * @return string
   */
  public function getTrustConfig()
  {
    return $this->trustConfig;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(EgressNetworkConfigTlsConfig::class, 'Google_Service_NetworkServices_EgressNetworkConfigTlsConfig');
