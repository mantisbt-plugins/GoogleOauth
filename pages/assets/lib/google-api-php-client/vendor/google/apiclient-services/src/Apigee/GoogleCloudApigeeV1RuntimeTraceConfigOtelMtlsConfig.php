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

namespace Google\Service\Apigee;

class GoogleCloudApigeeV1RuntimeTraceConfigOtelMtlsConfig extends \Google\Model
{
  /**
   * Full alias resource name of the client-side key/cert alias. Format: `organi
   * zations/{org}/environments/{env}/keystores/{keystore}/aliases/{alias}` Set
   * when the customer supplied a plain keystore ID in
   * `TraceConfig.OtelMtlsConfig.key_store`.
   *
   * @var string
   */
  public $keyAlias;
  protected $keyAliasReferenceType = GoogleCloudApigeeV1KeyAliasReference::class;
  protected $keyAliasReferenceDataType = '';
  /**
   * Full resource name of the truststore holding the CA(s) that signed the OTel
   * Collector's server certificate. Either a keystore or a reference resource
   * name, mirroring `TlsInfoConfig.trust_store` above:
   * `organizations/{org}/environments/{env}/keystores/{keystore}`
   * `organizations/{org}/environments/{env}/references/{reference}`
   *
   * @var string
   */
  public $trustStore;

  /**
   * Full alias resource name of the client-side key/cert alias. Format: `organi
   * zations/{org}/environments/{env}/keystores/{keystore}/aliases/{alias}` Set
   * when the customer supplied a plain keystore ID in
   * `TraceConfig.OtelMtlsConfig.key_store`.
   *
   * @param string $keyAlias
   */
  public function setKeyAlias($keyAlias)
  {
    $this->keyAlias = $keyAlias;
  }
  /**
   * @return string
   */
  public function getKeyAlias()
  {
    return $this->keyAlias;
  }
  /**
   * Reference name and alias-id pair. Set when the customer supplied a
   * `ref://{referenceID}` URI in `TraceConfig.OtelMtlsConfig.key_store`.
   * Resolved via the References catalog the same way as
   * `TlsInfoConfig.key_alias_reference` in target-server TLS. Reuses the top-
   * level `KeyAliasReference` message defined for `TlsInfoConfig` above; no new
   * message.
   *
   * @param GoogleCloudApigeeV1KeyAliasReference $keyAliasReference
   */
  public function setKeyAliasReference(GoogleCloudApigeeV1KeyAliasReference $keyAliasReference)
  {
    $this->keyAliasReference = $keyAliasReference;
  }
  /**
   * @return GoogleCloudApigeeV1KeyAliasReference
   */
  public function getKeyAliasReference()
  {
    return $this->keyAliasReference;
  }
  /**
   * Full resource name of the truststore holding the CA(s) that signed the OTel
   * Collector's server certificate. Either a keystore or a reference resource
   * name, mirroring `TlsInfoConfig.trust_store` above:
   * `organizations/{org}/environments/{env}/keystores/{keystore}`
   * `organizations/{org}/environments/{env}/references/{reference}`
   *
   * @param string $trustStore
   */
  public function setTrustStore($trustStore)
  {
    $this->trustStore = $trustStore;
  }
  /**
   * @return string
   */
  public function getTrustStore()
  {
    return $this->trustStore;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudApigeeV1RuntimeTraceConfigOtelMtlsConfig::class, 'Google_Service_Apigee_GoogleCloudApigeeV1RuntimeTraceConfigOtelMtlsConfig');
