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

namespace Google\Service\Firebaseappcheck;

class GoogleFirebaseAppcheckV1LimitedUseConfig extends \Google\Model
{
  /**
   * Optional. Specifies the desired `jti` claim (Section 4.1.7 of RFC 7519) in
   * the returned App Check token. Limited-use App Check tokens with the same
   * `jti` will be counted as the same token for the purposes of replay
   * protection. The size of this field is limited to 250 bytes. If specified,
   * its length must be at least 16 bytes. If this field is omitted or is empty,
   * a randomly generated `jti` claim with length between 16 and 250 bytes
   * (inclusive) will be used in the returned App Check token. Leaving this
   * field empty is only recommended if your custom attestation provider itself
   * is not vulnerable to replay attacks.
   *
   * @var string
   */
  public $jti;

  /**
   * Optional. Specifies the desired `jti` claim (Section 4.1.7 of RFC 7519) in
   * the returned App Check token. Limited-use App Check tokens with the same
   * `jti` will be counted as the same token for the purposes of replay
   * protection. The size of this field is limited to 250 bytes. If specified,
   * its length must be at least 16 bytes. If this field is omitted or is empty,
   * a randomly generated `jti` claim with length between 16 and 250 bytes
   * (inclusive) will be used in the returned App Check token. Leaving this
   * field empty is only recommended if your custom attestation provider itself
   * is not vulnerable to replay attacks.
   *
   * @param string $jti
   */
  public function setJti($jti)
  {
    $this->jti = $jti;
  }
  /**
   * @return string
   */
  public function getJti()
  {
    return $this->jti;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleFirebaseAppcheckV1LimitedUseConfig::class, 'Google_Service_Firebaseappcheck_GoogleFirebaseAppcheckV1LimitedUseConfig');
