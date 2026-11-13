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

class GoogleCloudAgentidentitycredentialsV1RetrieveCredentialsResponse extends \Google\Model
{
  protected $consentRejectedType = GoogleCloudAgentidentitycredentialsV1ConsentRejected::class;
  protected $consentRejectedDataType = '';
  protected $pendingType = GoogleCloudAgentidentitycredentialsV1Pending::class;
  protected $pendingDataType = '';
  protected $successType = GoogleCloudAgentidentitycredentialsV1Success::class;
  protected $successDataType = '';
  protected $uriConsentRequiredType = GoogleCloudAgentidentitycredentialsV1UriConsentRequired::class;
  protected $uriConsentRequiredDataType = '';

  /**
   * Message indicating consent was rejected.
   *
   * @param GoogleCloudAgentidentitycredentialsV1ConsentRejected $consentRejected
   */
  public function setConsentRejected(GoogleCloudAgentidentitycredentialsV1ConsentRejected $consentRejected)
  {
    $this->consentRejected = $consentRejected;
  }
  /**
   * @return GoogleCloudAgentidentitycredentialsV1ConsentRejected
   */
  public function getConsentRejected()
  {
    return $this->consentRejected;
  }
  /**
   * Message indicating credential retrieval is pending.
   *
   * @param GoogleCloudAgentidentitycredentialsV1Pending $pending
   */
  public function setPending(GoogleCloudAgentidentitycredentialsV1Pending $pending)
  {
    $this->pending = $pending;
  }
  /**
   * @return GoogleCloudAgentidentitycredentialsV1Pending
   */
  public function getPending()
  {
    return $this->pending;
  }
  /**
   * Message indicating credentials were successfully retrieved.
   *
   * @param GoogleCloudAgentidentitycredentialsV1Success $success
   */
  public function setSuccess(GoogleCloudAgentidentitycredentialsV1Success $success)
  {
    $this->success = $success;
  }
  /**
   * @return GoogleCloudAgentidentitycredentialsV1Success
   */
  public function getSuccess()
  {
    return $this->success;
  }
  /**
   * Message indicating URI-based consent is required.
   *
   * @param GoogleCloudAgentidentitycredentialsV1UriConsentRequired $uriConsentRequired
   */
  public function setUriConsentRequired(GoogleCloudAgentidentitycredentialsV1UriConsentRequired $uriConsentRequired)
  {
    $this->uriConsentRequired = $uriConsentRequired;
  }
  /**
   * @return GoogleCloudAgentidentitycredentialsV1UriConsentRequired
   */
  public function getUriConsentRequired()
  {
    return $this->uriConsentRequired;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAgentidentitycredentialsV1RetrieveCredentialsResponse::class, 'Google_Service_AgentIdentityCredentials_GoogleCloudAgentidentitycredentialsV1RetrieveCredentialsResponse');
