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

namespace Google\Service\AgentIdentityCredentials;

class GoogleCloudAgentidentitycredentialsV1UriConsentRequired extends \Google\Model
{
  /**
   * Output only. The URL where the user should be redirected to grant consent.
   * This will always be present.
   *
   * @var string
   */
  public $authorizationUri;
  /**
   * Output only. A one-time, randomly generated value that validates the entire
   * consent flow is handled by a single user, avoiding CSRF attacks. It must be
   * submitted with the `FinalizeCredentials` request to complete the OAuth
   * exchange. This will always be present. Implemented per [RFC 6819 Section
   * 5.3.5](https://www.rfc-editor.org/rfc/rfc6819#section-5.3.5).
   *
   * @var string
   */
  public $consentNonce;
  /**
   * Output only. The unique ID of the credentials retrieval operation.
   *
   * @var string
   */
  public $uid;

  /**
   * Output only. The URL where the user should be redirected to grant consent.
   * This will always be present.
   *
   * @param string $authorizationUri
   */
  public function setAuthorizationUri($authorizationUri)
  {
    $this->authorizationUri = $authorizationUri;
  }
  /**
   * @return string
   */
  public function getAuthorizationUri()
  {
    return $this->authorizationUri;
  }
  /**
   * Output only. A one-time, randomly generated value that validates the entire
   * consent flow is handled by a single user, avoiding CSRF attacks. It must be
   * submitted with the `FinalizeCredentials` request to complete the OAuth
   * exchange. This will always be present. Implemented per [RFC 6819 Section
   * 5.3.5](https://www.rfc-editor.org/rfc/rfc6819#section-5.3.5).
   *
   * @param string $consentNonce
   */
  public function setConsentNonce($consentNonce)
  {
    $this->consentNonce = $consentNonce;
  }
  /**
   * @return string
   */
  public function getConsentNonce()
  {
    return $this->consentNonce;
  }
  /**
   * Output only. The unique ID of the credentials retrieval operation.
   *
   * @param string $uid
   */
  public function setUid($uid)
  {
    $this->uid = $uid;
  }
  /**
   * @return string
   */
  public function getUid()
  {
    return $this->uid;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAgentidentitycredentialsV1UriConsentRequired::class, 'Google_Service_AgentIdentityCredentials_GoogleCloudAgentidentitycredentialsV1UriConsentRequired');
