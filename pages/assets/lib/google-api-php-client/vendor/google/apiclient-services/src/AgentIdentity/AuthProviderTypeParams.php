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

class AuthProviderTypeParams extends \Google\Model
{
  protected $apiKeyType = ApiKeyParams::class;
  protected $apiKeyDataType = '';
  protected $connectorReferenceAuthProviderType = ConnectorReferenceAuthProvider::class;
  protected $connectorReferenceAuthProviderDataType = '';
  protected $geAuthProviderType = GeminiEnterpriseAuthProviderParams::class;
  protected $geAuthProviderDataType = '';
  protected $threeLeggedOauthType = ThreeLeggedOAuth::class;
  protected $threeLeggedOauthDataType = '';
  protected $twoLeggedOauthType = TwoLeggedOAuth::class;
  protected $twoLeggedOauthDataType = '';
  protected $xaaAuthProviderType = CrossAppAccessAuthProvider::class;
  protected $xaaAuthProviderDataType = '';

  /**
   * Parameters for API key authentication.
   *
   * @param ApiKeyParams $apiKey
   */
  public function setApiKey(ApiKeyParams $apiKey)
  {
    $this->apiKey = $apiKey;
  }
  /**
   * @return ApiKeyParams
   */
  public function getApiKey()
  {
    return $this->apiKey;
  }
  /**
   * Parameters for Connector Reference authentication.
   *
   * @param ConnectorReferenceAuthProvider $connectorReferenceAuthProvider
   */
  public function setConnectorReferenceAuthProvider(ConnectorReferenceAuthProvider $connectorReferenceAuthProvider)
  {
    $this->connectorReferenceAuthProvider = $connectorReferenceAuthProvider;
  }
  /**
   * @return ConnectorReferenceAuthProvider
   */
  public function getConnectorReferenceAuthProvider()
  {
    return $this->connectorReferenceAuthProvider;
  }
  /**
   * Parameters for Gemini Enterprise authentication.
   *
   * @param GeminiEnterpriseAuthProviderParams $geAuthProvider
   */
  public function setGeAuthProvider(GeminiEnterpriseAuthProviderParams $geAuthProvider)
  {
    $this->geAuthProvider = $geAuthProvider;
  }
  /**
   * @return GeminiEnterpriseAuthProviderParams
   */
  public function getGeAuthProvider()
  {
    return $this->geAuthProvider;
  }
  /**
   * Parameters for 3-legged OAuth (3LO) authentication.
   *
   * @param ThreeLeggedOAuth $threeLeggedOauth
   */
  public function setThreeLeggedOauth(ThreeLeggedOAuth $threeLeggedOauth)
  {
    $this->threeLeggedOauth = $threeLeggedOauth;
  }
  /**
   * @return ThreeLeggedOAuth
   */
  public function getThreeLeggedOauth()
  {
    return $this->threeLeggedOauth;
  }
  /**
   * Parameters for 2-legged OAuth (2LO) authentication.
   *
   * @param TwoLeggedOAuth $twoLeggedOauth
   */
  public function setTwoLeggedOauth(TwoLeggedOAuth $twoLeggedOauth)
  {
    $this->twoLeggedOauth = $twoLeggedOauth;
  }
  /**
   * @return TwoLeggedOAuth
   */
  public function getTwoLeggedOauth()
  {
    return $this->twoLeggedOauth;
  }
  /**
   * Parameters for Cross-App Access authentication.
   *
   * @param CrossAppAccessAuthProvider $xaaAuthProvider
   */
  public function setXaaAuthProvider(CrossAppAccessAuthProvider $xaaAuthProvider)
  {
    $this->xaaAuthProvider = $xaaAuthProvider;
  }
  /**
   * @return CrossAppAccessAuthProvider
   */
  public function getXaaAuthProvider()
  {
    return $this->xaaAuthProvider;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AuthProviderTypeParams::class, 'Google_Service_AgentIdentity_AuthProviderTypeParams');
