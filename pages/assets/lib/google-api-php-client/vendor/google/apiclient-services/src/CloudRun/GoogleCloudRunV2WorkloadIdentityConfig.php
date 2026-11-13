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

namespace Google\Service\CloudRun;

class GoogleCloudRunV2WorkloadIdentityConfig extends \Google\Model
{
  /**
   * Unspecified
   */
  public const IDENTITY_TYPE_IDENTITY_TYPE_UNSPECIFIED = 'IDENTITY_TYPE_UNSPECIFIED';
  /**
   * Service account identity.
   */
  public const IDENTITY_TYPE_IDENTITY_TYPE_SERVICE_ACCOUNT = 'IDENTITY_TYPE_SERVICE_ACCOUNT';
  /**
   * Agent identity.
   */
  public const IDENTITY_TYPE_IDENTITY_TYPE_AGENT_IDENTITY = 'IDENTITY_TYPE_AGENT_IDENTITY';
  /**
   * Optional. The Revision's SPIFFE workload identity. Enables provisioning of
   * SPIFFE workload certificates.
   *
   * @var string
   */
  public $identity;
  /**
   * Optional. Controls whether an instance receives a MWLID certificate.
   * Corresponds to the intention of the original --[no-]identity-certificate
   * flag.
   *
   * @var bool
   */
  public $identityCertificateEnabled;
  /**
   * Optional. The type of identity to use.
   *
   * @var string
   */
  public $identityType;

  /**
   * Optional. The Revision's SPIFFE workload identity. Enables provisioning of
   * SPIFFE workload certificates.
   *
   * @param string $identity
   */
  public function setIdentity($identity)
  {
    $this->identity = $identity;
  }
  /**
   * @return string
   */
  public function getIdentity()
  {
    return $this->identity;
  }
  /**
   * Optional. Controls whether an instance receives a MWLID certificate.
   * Corresponds to the intention of the original --[no-]identity-certificate
   * flag.
   *
   * @param bool $identityCertificateEnabled
   */
  public function setIdentityCertificateEnabled($identityCertificateEnabled)
  {
    $this->identityCertificateEnabled = $identityCertificateEnabled;
  }
  /**
   * @return bool
   */
  public function getIdentityCertificateEnabled()
  {
    return $this->identityCertificateEnabled;
  }
  /**
   * Optional. The type of identity to use.
   *
   * Accepted values: IDENTITY_TYPE_UNSPECIFIED, IDENTITY_TYPE_SERVICE_ACCOUNT,
   * IDENTITY_TYPE_AGENT_IDENTITY
   *
   * @param self::IDENTITY_TYPE_* $identityType
   */
  public function setIdentityType($identityType)
  {
    $this->identityType = $identityType;
  }
  /**
   * @return self::IDENTITY_TYPE_*
   */
  public function getIdentityType()
  {
    return $this->identityType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudRunV2WorkloadIdentityConfig::class, 'Google_Service_CloudRun_GoogleCloudRunV2WorkloadIdentityConfig');
