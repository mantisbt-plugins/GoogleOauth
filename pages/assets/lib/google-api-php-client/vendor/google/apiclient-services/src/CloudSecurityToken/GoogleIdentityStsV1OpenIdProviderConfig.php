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

namespace Google\Service\CloudSecurityToken;

class GoogleIdentityStsV1OpenIdProviderConfig extends \Google\Collection
{
  protected $collection_key = 'subject_types_supported';
  protected $internal_gapi_mappings = [
        "authorizationEndpoint" => "authorization_endpoint",
        "idTokenSigningAlgValuesSupported" => "id_token_signing_alg_values_supported",
        "jwksUri" => "jwks_uri",
        "responseTypesSupported" => "response_types_supported",
        "subjectTypesSupported" => "subject_types_supported",
        "tokenEndpoint" => "token_endpoint",
  ];
  /**
   * URL pointing to an authorization endpoint under this issuer. Note:
   * Currently this endpoint returns a 404.
   *
   * @var string
   */
  public $authorizationEndpoint;
  /**
   * JSON array that contains a list of the JWS signing algorithms (alg values)
   * supported by the OP for the ID token to encode the claims in a JWT.
   * Supported value: `RS256`.
   *
   * @var string[]
   */
  public $idTokenSigningAlgValuesSupported;
  /**
   * URL using the https scheme with no query or fragment components that the OP
   * asserts as its issuer identifier.
   *
   * @var string
   */
  public $issuer;
  /**
   * URL of the OP's JWK Set document, which MUST use the https scheme.
   *
   * @var string
   */
  public $jwksUri;
  /**
   * JSON array that contains a list of the OAuth 2.0 response_type values that
   * this OP supports. Supported value: `id_token`.
   *
   * @var string[]
   */
  public $responseTypesSupported;
  /**
   * JSON array that contains a list of the subject identifier types that this
   * OP supports. Supported value: `public`.
   *
   * @var string[]
   */
  public $subjectTypesSupported;
  /**
   * URL pointing to a token endpoint under this issuer. Note: Currently this
   * endpoint returns a 404.
   *
   * @var string
   */
  public $tokenEndpoint;

  /**
   * URL pointing to an authorization endpoint under this issuer. Note:
   * Currently this endpoint returns a 404.
   *
   * @param string $authorizationEndpoint
   */
  public function setAuthorizationEndpoint($authorizationEndpoint)
  {
    $this->authorizationEndpoint = $authorizationEndpoint;
  }
  /**
   * @return string
   */
  public function getAuthorizationEndpoint()
  {
    return $this->authorizationEndpoint;
  }
  /**
   * JSON array that contains a list of the JWS signing algorithms (alg values)
   * supported by the OP for the ID token to encode the claims in a JWT.
   * Supported value: `RS256`.
   *
   * @param string[] $idTokenSigningAlgValuesSupported
   */
  public function setIdTokenSigningAlgValuesSupported($idTokenSigningAlgValuesSupported)
  {
    $this->idTokenSigningAlgValuesSupported = $idTokenSigningAlgValuesSupported;
  }
  /**
   * @return string[]
   */
  public function getIdTokenSigningAlgValuesSupported()
  {
    return $this->idTokenSigningAlgValuesSupported;
  }
  /**
   * URL using the https scheme with no query or fragment components that the OP
   * asserts as its issuer identifier.
   *
   * @param string $issuer
   */
  public function setIssuer($issuer)
  {
    $this->issuer = $issuer;
  }
  /**
   * @return string
   */
  public function getIssuer()
  {
    return $this->issuer;
  }
  /**
   * URL of the OP's JWK Set document, which MUST use the https scheme.
   *
   * @param string $jwksUri
   */
  public function setJwksUri($jwksUri)
  {
    $this->jwksUri = $jwksUri;
  }
  /**
   * @return string
   */
  public function getJwksUri()
  {
    return $this->jwksUri;
  }
  /**
   * JSON array that contains a list of the OAuth 2.0 response_type values that
   * this OP supports. Supported value: `id_token`.
   *
   * @param string[] $responseTypesSupported
   */
  public function setResponseTypesSupported($responseTypesSupported)
  {
    $this->responseTypesSupported = $responseTypesSupported;
  }
  /**
   * @return string[]
   */
  public function getResponseTypesSupported()
  {
    return $this->responseTypesSupported;
  }
  /**
   * JSON array that contains a list of the subject identifier types that this
   * OP supports. Supported value: `public`.
   *
   * @param string[] $subjectTypesSupported
   */
  public function setSubjectTypesSupported($subjectTypesSupported)
  {
    $this->subjectTypesSupported = $subjectTypesSupported;
  }
  /**
   * @return string[]
   */
  public function getSubjectTypesSupported()
  {
    return $this->subjectTypesSupported;
  }
  /**
   * URL pointing to a token endpoint under this issuer. Note: Currently this
   * endpoint returns a 404.
   *
   * @param string $tokenEndpoint
   */
  public function setTokenEndpoint($tokenEndpoint)
  {
    $this->tokenEndpoint = $tokenEndpoint;
  }
  /**
   * @return string
   */
  public function getTokenEndpoint()
  {
    return $this->tokenEndpoint;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleIdentityStsV1OpenIdProviderConfig::class, 'Google_Service_CloudSecurityToken_GoogleIdentityStsV1OpenIdProviderConfig');
