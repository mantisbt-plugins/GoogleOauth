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

class GoogleCloudAgentidentitycredentialsV1FinalizeCredentialsRequest extends \Google\Model
{
  /**
   * Required. The same `consent_nonce` value that was provided during retrieval
   * in the [UriConsentRequired](https://cloud.google.com/iam/docs/reference/age
   * ntidentitycredentials/rest/v1/projects.locations.authProviders.credentials/
   * retrieve#UriConsentRequired) metadata.
   *
   * @var string
   */
  public $consentNonce;
  /**
   * Required. The identity of the end user.
   *
   * @var string
   */
  public $userId;
  /**
   * Required. The encrypted state passed back from the consent flow.
   *
   * @var string
   */
  public $userIdValidationState;

  /**
   * Required. The same `consent_nonce` value that was provided during retrieval
   * in the [UriConsentRequired](https://cloud.google.com/iam/docs/reference/age
   * ntidentitycredentials/rest/v1/projects.locations.authProviders.credentials/
   * retrieve#UriConsentRequired) metadata.
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
   * Required. The identity of the end user.
   *
   * @param string $userId
   */
  public function setUserId($userId)
  {
    $this->userId = $userId;
  }
  /**
   * @return string
   */
  public function getUserId()
  {
    return $this->userId;
  }
  /**
   * Required. The encrypted state passed back from the consent flow.
   *
   * @param string $userIdValidationState
   */
  public function setUserIdValidationState($userIdValidationState)
  {
    $this->userIdValidationState = $userIdValidationState;
  }
  /**
   * @return string
   */
  public function getUserIdValidationState()
  {
    return $this->userIdValidationState;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAgentidentitycredentialsV1FinalizeCredentialsRequest::class, 'Google_Service_AgentIdentityCredentials_GoogleCloudAgentidentitycredentialsV1FinalizeCredentialsRequest');
