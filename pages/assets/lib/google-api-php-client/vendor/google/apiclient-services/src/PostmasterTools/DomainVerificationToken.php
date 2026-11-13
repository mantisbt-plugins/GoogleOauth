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

namespace Google\Service\PostmasterTools;

class DomainVerificationToken extends \Google\Model
{
  /**
   * Unspecified.
   */
  public const VERIFICATION_METHOD_DOMAIN_VERIFICATION_METHOD_UNSPECIFIED = 'DOMAIN_VERIFICATION_METHOD_UNSPECIFIED';
  /**
   * Generate a DNS TXT verification token.
   */
  public const VERIFICATION_METHOD_TXT = 'TXT';
  /**
   * Generate a DNS CNAME verification token.
   */
  public const VERIFICATION_METHOD_CNAME = 'CNAME';
  /**
   * Identifier. The resource name of the domain verification token. Format:
   * domains/{domain}/verificationToken
   *
   * @var string
   */
  public $name;
  /**
   * The verification token.
   *
   * @var string
   */
  public $token;
  /**
   * The verification method used.
   *
   * @var string
   */
  public $verificationMethod;

  /**
   * Identifier. The resource name of the domain verification token. Format:
   * domains/{domain}/verificationToken
   *
   * @param string $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * The verification token.
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
  /**
   * The verification method used.
   *
   * Accepted values: DOMAIN_VERIFICATION_METHOD_UNSPECIFIED, TXT, CNAME
   *
   * @param self::VERIFICATION_METHOD_* $verificationMethod
   */
  public function setVerificationMethod($verificationMethod)
  {
    $this->verificationMethod = $verificationMethod;
  }
  /**
   * @return self::VERIFICATION_METHOD_*
   */
  public function getVerificationMethod()
  {
    return $this->verificationMethod;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DomainVerificationToken::class, 'Google_Service_PostmasterTools_DomainVerificationToken');
