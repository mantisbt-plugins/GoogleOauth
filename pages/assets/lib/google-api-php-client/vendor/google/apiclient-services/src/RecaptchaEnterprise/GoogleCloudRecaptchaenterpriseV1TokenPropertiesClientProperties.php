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

namespace Google\Service\RecaptchaEnterprise;

class GoogleCloudRecaptchaenterpriseV1TokenPropertiesClientProperties extends \Google\Model
{
  /**
   * Output only. The `User-Agent` header string observed by reCAPTCHA during
   * token generation. This string is truncated to a maximum length of 1000
   * characters.
   *
   * @var string
   */
  public $userAgent;
  /**
   * Output only. The user's IP address at token generation. This can be either
   * an IPv4 address (e.g., `192.0.2.1`) or an IPv6 address in canonical format
   * per RFC 5952 section 4 (e.g., `2001:db8::1`). IPv4-mapped IPv6 addresses
   * are canonicalized to standard IPv4.
   *
   * @var string
   */
  public $userIpAddress;

  /**
   * Output only. The `User-Agent` header string observed by reCAPTCHA during
   * token generation. This string is truncated to a maximum length of 1000
   * characters.
   *
   * @param string $userAgent
   */
  public function setUserAgent($userAgent)
  {
    $this->userAgent = $userAgent;
  }
  /**
   * @return string
   */
  public function getUserAgent()
  {
    return $this->userAgent;
  }
  /**
   * Output only. The user's IP address at token generation. This can be either
   * an IPv4 address (e.g., `192.0.2.1`) or an IPv6 address in canonical format
   * per RFC 5952 section 4 (e.g., `2001:db8::1`). IPv4-mapped IPv6 addresses
   * are canonicalized to standard IPv4.
   *
   * @param string $userIpAddress
   */
  public function setUserIpAddress($userIpAddress)
  {
    $this->userIpAddress = $userIpAddress;
  }
  /**
   * @return string
   */
  public function getUserIpAddress()
  {
    return $this->userIpAddress;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudRecaptchaenterpriseV1TokenPropertiesClientProperties::class, 'Google_Service_RecaptchaEnterprise_GoogleCloudRecaptchaenterpriseV1TokenPropertiesClientProperties');
