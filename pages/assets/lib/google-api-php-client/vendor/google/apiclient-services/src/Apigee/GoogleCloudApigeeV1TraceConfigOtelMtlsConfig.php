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

class GoogleCloudApigeeV1TraceConfigOtelMtlsConfig extends \Google\Model
{
  /**
   * Required. Plain alias ID within `key_store` that contains the client
   * key/cert used for mTLS.
   *
   * @var string
   */
  public $keyAlias;
  /**
   * Required. Keystore holding the client-side key/cert alias. Accepts either a
   * plain keystore ID (e.g. `my-keystore`) resolving to
   * `organizations/{org}/environments/{env}/keystores/{key_store}`, or a
   * reference URI of the form `ref://{referenceID}` that points to a Reference
   * whose `resource_type` is `KeyStore`.
   *
   * @var string
   */
  public $keyStore;
  /**
   * Required. Truststore holding the CA(s) that signed the OTel Collector's
   * server certificate. Accepts either a plain keystore ID (e.g. `my-
   * truststore`) resolving to
   * `organizations/{org}/environments/{env}/keystores/{trust_store}`, or a
   * reference URI of the form `ref://{referenceID}` that points to a Reference
   * whose `resource_type` is `KeyStore` (used as a truststore).
   *
   * @var string
   */
  public $trustStore;

  /**
   * Required. Plain alias ID within `key_store` that contains the client
   * key/cert used for mTLS.
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
   * Required. Keystore holding the client-side key/cert alias. Accepts either a
   * plain keystore ID (e.g. `my-keystore`) resolving to
   * `organizations/{org}/environments/{env}/keystores/{key_store}`, or a
   * reference URI of the form `ref://{referenceID}` that points to a Reference
   * whose `resource_type` is `KeyStore`.
   *
   * @param string $keyStore
   */
  public function setKeyStore($keyStore)
  {
    $this->keyStore = $keyStore;
  }
  /**
   * @return string
   */
  public function getKeyStore()
  {
    return $this->keyStore;
  }
  /**
   * Required. Truststore holding the CA(s) that signed the OTel Collector's
   * server certificate. Accepts either a plain keystore ID (e.g. `my-
   * truststore`) resolving to
   * `organizations/{org}/environments/{env}/keystores/{trust_store}`, or a
   * reference URI of the form `ref://{referenceID}` that points to a Reference
   * whose `resource_type` is `KeyStore` (used as a truststore).
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
class_alias(GoogleCloudApigeeV1TraceConfigOtelMtlsConfig::class, 'Google_Service_Apigee_GoogleCloudApigeeV1TraceConfigOtelMtlsConfig');
