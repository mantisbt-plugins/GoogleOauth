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

class GoogleCloudAgentidentitycredentialsV1RetrieveCredentialsRequest extends \Google\Collection
{
  protected $collection_key = 'scopes';
  /**
   * Optional. The URI to redirect the user to after consent is completed. This
   * field is required for auth providers using the 3-legged OAuth flow. For
   * other auth provider types, this field is unused but not rejected.
   *
   * @var string
   */
  public $continueUri;
  /**
   * Optional. Input only. Set this field only if the previous token was expired
   * or invalid. This value must be the full, previously returned token string.
   * Setting this field triggers a refresh of the access token with a stored
   * refresh token, if possible, or a new consent flow.
   *
   * @var string
   */
  public $forceRefreshToken;
  /**
   * Optional. The OAuth scopes required for this access.
   *
   * @var string[]
   */
  public $scopes;
  /**
   * Required. The identity of the end user.
   *
   * @var string
   */
  public $userId;

  /**
   * Optional. The URI to redirect the user to after consent is completed. This
   * field is required for auth providers using the 3-legged OAuth flow. For
   * other auth provider types, this field is unused but not rejected.
   *
   * @param string $continueUri
   */
  public function setContinueUri($continueUri)
  {
    $this->continueUri = $continueUri;
  }
  /**
   * @return string
   */
  public function getContinueUri()
  {
    return $this->continueUri;
  }
  /**
   * Optional. Input only. Set this field only if the previous token was expired
   * or invalid. This value must be the full, previously returned token string.
   * Setting this field triggers a refresh of the access token with a stored
   * refresh token, if possible, or a new consent flow.
   *
   * @param string $forceRefreshToken
   */
  public function setForceRefreshToken($forceRefreshToken)
  {
    $this->forceRefreshToken = $forceRefreshToken;
  }
  /**
   * @return string
   */
  public function getForceRefreshToken()
  {
    return $this->forceRefreshToken;
  }
  /**
   * Optional. The OAuth scopes required for this access.
   *
   * @param string[] $scopes
   */
  public function setScopes($scopes)
  {
    $this->scopes = $scopes;
  }
  /**
   * @return string[]
   */
  public function getScopes()
  {
    return $this->scopes;
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAgentidentitycredentialsV1RetrieveCredentialsRequest::class, 'Google_Service_AgentIdentityCredentials_GoogleCloudAgentidentitycredentialsV1RetrieveCredentialsRequest');
