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

namespace Google\Service\Datastream;

class OauthRefreshTokenCredentials extends \Google\Model
{
  protected $oauthClientCredentialsType = OauthClientCredentials::class;
  protected $oauthClientCredentialsDataType = '';
  protected $refreshTokenType = Secret::class;
  protected $refreshTokenDataType = '';

  /**
   * Required. Specifies the OAuth Client Credentials.
   *
   * @param OauthClientCredentials $oauthClientCredentials
   */
  public function setOauthClientCredentials(OauthClientCredentials $oauthClientCredentials)
  {
    $this->oauthClientCredentials = $oauthClientCredentials;
  }
  /**
   * @return OauthClientCredentials
   */
  public function getOauthClientCredentials()
  {
    return $this->oauthClientCredentials;
  }
  /**
   * Required. Specifies the OAuth Refresh Token.
   *
   * @param Secret $refreshToken
   */
  public function setRefreshToken(Secret $refreshToken)
  {
    $this->refreshToken = $refreshToken;
  }
  /**
   * @return Secret
   */
  public function getRefreshToken()
  {
    return $this->refreshToken;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(OauthRefreshTokenCredentials::class, 'Google_Service_Datastream_OauthRefreshTokenCredentials');
