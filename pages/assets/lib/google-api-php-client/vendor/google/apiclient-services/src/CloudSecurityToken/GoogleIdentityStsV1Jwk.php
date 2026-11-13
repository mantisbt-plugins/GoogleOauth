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

class GoogleIdentityStsV1Jwk extends \Google\Model
{
  /**
   * Algorithm intended for use with the key. Currently "RS256".
   *
   * @var string
   */
  public $alg;
  /**
   * Exponent value for kty="RSA".
   *
   * @var string
   */
  public $e;
  /**
   * Key ID.
   *
   * @var string
   */
  public $kid;
  /**
   * Key type. Currently "RSA".
   *
   * @var string
   */
  public $kty;
  /**
   * Modulus value for kty="RSA".
   *
   * @var string
   */
  public $n;
  /**
   * Public key use. Currently "sig".
   *
   * @var string
   */
  public $use;

  /**
   * Algorithm intended for use with the key. Currently "RS256".
   *
   * @param string $alg
   */
  public function setAlg($alg)
  {
    $this->alg = $alg;
  }
  /**
   * @return string
   */
  public function getAlg()
  {
    return $this->alg;
  }
  /**
   * Exponent value for kty="RSA".
   *
   * @param string $e
   */
  public function setE($e)
  {
    $this->e = $e;
  }
  /**
   * @return string
   */
  public function getE()
  {
    return $this->e;
  }
  /**
   * Key ID.
   *
   * @param string $kid
   */
  public function setKid($kid)
  {
    $this->kid = $kid;
  }
  /**
   * @return string
   */
  public function getKid()
  {
    return $this->kid;
  }
  /**
   * Key type. Currently "RSA".
   *
   * @param string $kty
   */
  public function setKty($kty)
  {
    $this->kty = $kty;
  }
  /**
   * @return string
   */
  public function getKty()
  {
    return $this->kty;
  }
  /**
   * Modulus value for kty="RSA".
   *
   * @param string $n
   */
  public function setN($n)
  {
    $this->n = $n;
  }
  /**
   * @return string
   */
  public function getN()
  {
    return $this->n;
  }
  /**
   * Public key use. Currently "sig".
   *
   * @param string $use
   */
  public function setUse($use)
  {
    $this->use = $use;
  }
  /**
   * @return string
   */
  public function getUse()
  {
    return $this->use;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleIdentityStsV1Jwk::class, 'Google_Service_CloudSecurityToken_GoogleIdentityStsV1Jwk');
