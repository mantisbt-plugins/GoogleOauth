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

namespace Google\Service\AgentIdentity;

class ThreeLeggedOAuth extends \Google\Model
{
  /**
   * Optional. The authorization endpoint to send users to for consenting to
   * delegate to the agent. For example, "https://auth.atlassian.com/authorize".
   *
   * @var string
   */
  public $authorizationUrl;
  /**
   * Optional. The client ID of the OAuth client.
   *
   * @var string
   */
  public $clientId;
  /**
   * Optional. Input only. The client secret of the OAuth client.
   *
   * @var string
   */
  public $clientSecret;
  /**
   * Optional. The default continue URI for the 3LO flow, used when no continue
   * URI is provided in the RetrieveCredentials request.
   *
   * @var string
   */
  public $defaultContinueUri;
  /**
   * Optional. Enables Proof Key for Code Exchange (PKCE) for the OAuth flow to
   * prevent authorization code interception attacks.
   *
   * @var bool
   */
  public $enablePkce;
  /**
   * Output only. The redirect URL this auth provider uses for the OAuth
   * exchange. This is deterministic based on the name of the auth provider.
   *
   * @var string
   */
  public $redirectUrl;
  /**
   * Optional. The token endpoint for requesting tokens on behalf of an end
   * user. For example, "https://auth.atlassian.com/oauth/token".
   *
   * @var string
   */
  public $tokenUrl;

  /**
   * Optional. The authorization endpoint to send users to for consenting to
   * delegate to the agent. For example, "https://auth.atlassian.com/authorize".
   *
   * @param string $authorizationUrl
   */
  public function setAuthorizationUrl($authorizationUrl)
  {
    $this->authorizationUrl = $authorizationUrl;
  }
  /**
   * @return string
   */
  public function getAuthorizationUrl()
  {
    return $this->authorizationUrl;
  }
  /**
   * Optional. The client ID of the OAuth client.
   *
   * @param string $clientId
   */
  public function setClientId($clientId)
  {
    $this->clientId = $clientId;
  }
  /**
   * @return string
   */
  public function getClientId()
  {
    return $this->clientId;
  }
  /**
   * Optional. Input only. The client secret of the OAuth client.
   *
   * @param string $clientSecret
   */
  public function setClientSecret($clientSecret)
  {
    $this->clientSecret = $clientSecret;
  }
  /**
   * @return string
   */
  public function getClientSecret()
  {
    return $this->clientSecret;
  }
  /**
   * Optional. The default continue URI for the 3LO flow, used when no continue
   * URI is provided in the RetrieveCredentials request.
   *
   * @param string $defaultContinueUri
   */
  public function setDefaultContinueUri($defaultContinueUri)
  {
    $this->defaultContinueUri = $defaultContinueUri;
  }
  /**
   * @return string
   */
  public function getDefaultContinueUri()
  {
    return $this->defaultContinueUri;
  }
  /**
   * Optional. Enables Proof Key for Code Exchange (PKCE) for the OAuth flow to
   * prevent authorization code interception attacks.
   *
   * @param bool $enablePkce
   */
  public function setEnablePkce($enablePkce)
  {
    $this->enablePkce = $enablePkce;
  }
  /**
   * @return bool
   */
  public function getEnablePkce()
  {
    return $this->enablePkce;
  }
  /**
   * Output only. The redirect URL this auth provider uses for the OAuth
   * exchange. This is deterministic based on the name of the auth provider.
   *
   * @param string $redirectUrl
   */
  public function setRedirectUrl($redirectUrl)
  {
    $this->redirectUrl = $redirectUrl;
  }
  /**
   * @return string
   */
  public function getRedirectUrl()
  {
    return $this->redirectUrl;
  }
  /**
   * Optional. The token endpoint for requesting tokens on behalf of an end
   * user. For example, "https://auth.atlassian.com/oauth/token".
   *
   * @param string $tokenUrl
   */
  public function setTokenUrl($tokenUrl)
  {
    $this->tokenUrl = $tokenUrl;
  }
  /**
   * @return string
   */
  public function getTokenUrl()
  {
    return $this->tokenUrl;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ThreeLeggedOAuth::class, 'Google_Service_AgentIdentity_ThreeLeggedOAuth');
