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

class GoogleFirebaseAppcheckV1ExchangeCustomTokenRequest extends \Google\Model
{
  /**
   * Required. A custom token signed using your project's Admin SDK service
   * account credentials.
   *
   * @var string
   */
  public $customToken;
  /**
   * Optional. When `limited_use` is set to `true`, this field specifies the
   * desired `jti` claim (Section 4.1.7 of RFC 7519) in the returned App Check
   * token. *Limited use* App Check tokens with the same `jti` will be counted
   * as the same token for the purposes of replay protection. An error is
   * returned if this field is specified without setting `limited_use` to
   * `true`. The size of this field is limited to 250 bytes. If specified, its
   * length must be at least 16 bytes. If this field is omitted or is empty and
   * `limited_use` is set to `true`, a randomly generated `jti` claim with
   * length between 16 and 250 bytes (inclusive) will be used in the returned
   * App Check token. Leaving this field empty is only recommended if your
   * custom attestation provider itself is not vulnerable to replay attacks.
   * When `limited_use` is set to `false`, the presence and the contents of the
   * `jti` claim in the returned App Check token are unspecified. To ensure that
   * the returned App Check token is eligible for limited-use functionality, set
   * `limited_use` to `true`.
   *
   * @var string
   */
  public $jti;
  /**
   * Specifies whether this attestation is for use in a *limited use* (`true`)
   * or *session based* (`false`) context. To enable this attestation to be used
   * with the *replay protection* feature, set this to `true`. The default value
   * is `false`.
   *
   * @var bool
   */
  public $limitedUse;

  /**
   * Required. A custom token signed using your project's Admin SDK service
   * account credentials.
   *
   * @param string $customToken
   */
  public function setCustomToken($customToken)
  {
    $this->customToken = $customToken;
  }
  /**
   * @return string
   */
  public function getCustomToken()
  {
    return $this->customToken;
  }
  /**
   * Optional. When `limited_use` is set to `true`, this field specifies the
   * desired `jti` claim (Section 4.1.7 of RFC 7519) in the returned App Check
   * token. *Limited use* App Check tokens with the same `jti` will be counted
   * as the same token for the purposes of replay protection. An error is
   * returned if this field is specified without setting `limited_use` to
   * `true`. The size of this field is limited to 250 bytes. If specified, its
   * length must be at least 16 bytes. If this field is omitted or is empty and
   * `limited_use` is set to `true`, a randomly generated `jti` claim with
   * length between 16 and 250 bytes (inclusive) will be used in the returned
   * App Check token. Leaving this field empty is only recommended if your
   * custom attestation provider itself is not vulnerable to replay attacks.
   * When `limited_use` is set to `false`, the presence and the contents of the
   * `jti` claim in the returned App Check token are unspecified. To ensure that
   * the returned App Check token is eligible for limited-use functionality, set
   * `limited_use` to `true`.
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
  /**
   * Specifies whether this attestation is for use in a *limited use* (`true`)
   * or *session based* (`false`) context. To enable this attestation to be used
   * with the *replay protection* feature, set this to `true`. The default value
   * is `false`.
   *
   * @param bool $limitedUse
   */
  public function setLimitedUse($limitedUse)
  {
    $this->limitedUse = $limitedUse;
  }
  /**
   * @return bool
   */
  public function getLimitedUse()
  {
    return $this->limitedUse;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleFirebaseAppcheckV1ExchangeCustomTokenRequest::class, 'Google_Service_Firebaseappcheck_GoogleFirebaseAppcheckV1ExchangeCustomTokenRequest');
