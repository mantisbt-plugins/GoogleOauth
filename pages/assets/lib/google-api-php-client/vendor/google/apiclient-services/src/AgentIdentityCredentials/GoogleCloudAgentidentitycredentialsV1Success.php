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

class GoogleCloudAgentidentitycredentialsV1Success extends \Google\Collection
{
  protected $collection_key = 'scopes';
  /**
   * The expiration time of the token. This does not guarantee that the token
   * will be valid until this time, since the token could be revoked earlier.
   * There could also be clock skew between the auth provider and the client so
   * it may expire slightly earlier. If not set, the token might be permanent or
   * it may be that the service does not (or cannot) know when it will expire.
   *
   * @var string
   */
  public $expireTime;
  /**
   * The HTTP header name where the token should be placed.
   *
   * @var string
   */
  public $header;
  /**
   * The scopes actually associated with the retrieved token. End users may have
   * rejected some requested scopes, or the third-party authorization servers
   * can return a different set of scopes than what was asked for. Callers
   * should verify that all required scopes for their intended use are included
   * in this list.
   *
   * @var string[]
   */
  public $scopes;
  /**
   * The retrieved access token or credential for the end user. On an MCP tool
   * call, for an invalid token the OAuth spec states that this should return
   * `401` or `403`, but MCP servers may implement this differently. If you get
   * any flavor of `PERMISSION_DENIED`, retry your original request to
   * `RetrieveCredentials` with force_refresh_token set to the expired/invalid
   * token string, which will fetch a new token or initiate a new consent flow.
   *
   * @var string
   */
  public $token;

  /**
   * The expiration time of the token. This does not guarantee that the token
   * will be valid until this time, since the token could be revoked earlier.
   * There could also be clock skew between the auth provider and the client so
   * it may expire slightly earlier. If not set, the token might be permanent or
   * it may be that the service does not (or cannot) know when it will expire.
   *
   * @param string $expireTime
   */
  public function setExpireTime($expireTime)
  {
    $this->expireTime = $expireTime;
  }
  /**
   * @return string
   */
  public function getExpireTime()
  {
    return $this->expireTime;
  }
  /**
   * The HTTP header name where the token should be placed.
   *
   * @param string $header
   */
  public function setHeader($header)
  {
    $this->header = $header;
  }
  /**
   * @return string
   */
  public function getHeader()
  {
    return $this->header;
  }
  /**
   * The scopes actually associated with the retrieved token. End users may have
   * rejected some requested scopes, or the third-party authorization servers
   * can return a different set of scopes than what was asked for. Callers
   * should verify that all required scopes for their intended use are included
   * in this list.
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
   * The retrieved access token or credential for the end user. On an MCP tool
   * call, for an invalid token the OAuth spec states that this should return
   * `401` or `403`, but MCP servers may implement this differently. If you get
   * any flavor of `PERMISSION_DENIED`, retry your original request to
   * `RetrieveCredentials` with force_refresh_token set to the expired/invalid
   * token string, which will fetch a new token or initiate a new consent flow.
   *
   * @param string $token
   */
  public function setToken($token)
  {
    $this->token = $token;
  }
  /**
   * @return string
   */
  public function getToken()
  {
    return $this->token;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAgentidentitycredentialsV1Success::class, 'Google_Service_AgentIdentityCredentials_GoogleCloudAgentidentitycredentialsV1Success');
