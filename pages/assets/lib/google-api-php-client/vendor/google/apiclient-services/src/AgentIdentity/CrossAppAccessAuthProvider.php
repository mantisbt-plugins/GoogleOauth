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

class CrossAppAccessAuthProvider extends \Google\Model
{
  /**
   * Optional. Additional parameters to be passed to the token endpoint.
   *
   * @var string[]
   */
  public $additionalParameters;
  protected $clientAssertionJwtAuthType = ClientAssertionJwtAuth::class;
  protected $clientAssertionJwtAuthDataType = '';
  protected $clientSecretAuthType = ClientSecretAuth::class;
  protected $clientSecretAuthDataType = '';
  protected $customIssuerType = CustomIssuer::class;
  protected $customIssuerDataType = '';
  protected $googleAccountType = GoogleAccount::class;
  protected $googleAccountDataType = '';
  protected $idJagInputType = DirectIdJagInput::class;
  protected $idJagInputDataType = '';
  protected $idTokenInputType = IdTokenProcessingConfig::class;
  protected $idTokenInputDataType = '';
  protected $workforceIdentityFederationType = WorkforceIdentityFederation::class;
  protected $workforceIdentityFederationDataType = '';

  /**
   * Optional. Additional parameters to be passed to the token endpoint.
   *
   * @param string[] $additionalParameters
   */
  public function setAdditionalParameters($additionalParameters)
  {
    $this->additionalParameters = $additionalParameters;
  }
  /**
   * @return string[]
   */
  public function getAdditionalParameters()
  {
    return $this->additionalParameters;
  }
  /**
   * Option 2: Authenticate using a standard `client_id` and a Client Assertion
   * JWT.
   *
   * @param ClientAssertionJwtAuth $clientAssertionJwtAuth
   */
  public function setClientAssertionJwtAuth(ClientAssertionJwtAuth $clientAssertionJwtAuth)
  {
    $this->clientAssertionJwtAuth = $clientAssertionJwtAuth;
  }
  /**
   * @return ClientAssertionJwtAuth
   */
  public function getClientAssertionJwtAuth()
  {
    return $this->clientAssertionJwtAuth;
  }
  /**
   * Option 1: Authenticate using a standard `client_id` and `client_secret`.
   *
   * @param ClientSecretAuth $clientSecretAuth
   */
  public function setClientSecretAuth(ClientSecretAuth $clientSecretAuth)
  {
    $this->clientSecretAuth = $clientSecretAuth;
  }
  /**
   * @return ClientSecretAuth
   */
  public function getClientSecretAuth()
  {
    return $this->clientSecretAuth;
  }
  /**
   * Configuration when using a custom or third-party authorization server as
   * the issuer.
   *
   * @param CustomIssuer $customIssuer
   */
  public function setCustomIssuer(CustomIssuer $customIssuer)
  {
    $this->customIssuer = $customIssuer;
  }
  /**
   * @return CustomIssuer
   */
  public function getCustomIssuer()
  {
    return $this->customIssuer;
  }
  /**
   * Configuration when using Google Accounts as the issuer.
   *
   * @param GoogleAccount $googleAccount
   */
  public function setGoogleAccount(GoogleAccount $googleAccount)
  {
    $this->googleAccount = $googleAccount;
  }
  /**
   * @return GoogleAccount
   */
  public function getGoogleAccount()
  {
    return $this->googleAccount;
  }
  /**
   * Configuration for when the input is already an ID-JAG.
   *
   * @param DirectIdJagInput $idJagInput
   */
  public function setIdJagInput(DirectIdJagInput $idJagInput)
  {
    $this->idJagInput = $idJagInput;
  }
  /**
   * @return DirectIdJagInput
   */
  public function getIdJagInput()
  {
    return $this->idJagInput;
  }
  /**
   * Configuration for when the input is an ID token.
   *
   * @param IdTokenProcessingConfig $idTokenInput
   */
  public function setIdTokenInput(IdTokenProcessingConfig $idTokenInput)
  {
    $this->idTokenInput = $idTokenInput;
  }
  /**
   * @return IdTokenProcessingConfig
   */
  public function getIdTokenInput()
  {
    return $this->idTokenInput;
  }
  /**
   * Configuration when using Workforce Identity Federation as the issuer.
   *
   * @param WorkforceIdentityFederation $workforceIdentityFederation
   */
  public function setWorkforceIdentityFederation(WorkforceIdentityFederation $workforceIdentityFederation)
  {
    $this->workforceIdentityFederation = $workforceIdentityFederation;
  }
  /**
   * @return WorkforceIdentityFederation
   */
  public function getWorkforceIdentityFederation()
  {
    return $this->workforceIdentityFederation;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CrossAppAccessAuthProvider::class, 'Google_Service_AgentIdentity_CrossAppAccessAuthProvider');
