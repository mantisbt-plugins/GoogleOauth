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

namespace Google\Service\AndroidDeveloperIDStatus;

class PackageRegistrationStatus extends \Google\Model
{
  /**
   * Default value. This value is unused.
   */
  public const STATE_REGISTRATION_STATE_UNSPECIFIED = 'REGISTRATION_STATE_UNSPECIFIED';
  /**
   * Package is registered with the given certificate fingerprint.
   */
  public const STATE_REGISTERED = 'REGISTERED';
  /**
   * Package is not registered with any public certificate.
   */
  public const STATE_NOT_REGISTERED = 'NOT_REGISTERED';
  /**
   * Package is registered with another public certificate fingerprint.
   */
  public const STATE_REGISTERED_WITH_ANOTHER_CERTIFICATE_FINGERPRINT = 'REGISTERED_WITH_ANOTHER_CERTIFICATE_FINGERPRINT';
  /**
   * Output only. The SHA-256 fingerprint of the public certificate represented
   * as a 64-character lowercase hexadecimal string without any colons or
   * separators (e.g.,
   * `d6ac89ed1d0a805aad4b087d06d5f41645b814480b133fbc867ef7498d069e06`).
   *
   * @var string
   */
  public $certificateFingerprint;
  /**
   * Identifier. The name of the package registration status resource. Format:
   * packages/{package}/packageRegistrationStatus `{package}` must follow the
   * specific format: The fully-qualified Android package name with dots ('.')
   * replaced by hyphens ('-') (e.g., `com-example-app` instead of
   * `com.example.app`).
   *
   * @var string
   */
  public $name;
  /**
   * Output only. Registration state of the package, or pair.
   *
   * @var string
   */
  public $state;

  /**
   * Output only. The SHA-256 fingerprint of the public certificate represented
   * as a 64-character lowercase hexadecimal string without any colons or
   * separators (e.g.,
   * `d6ac89ed1d0a805aad4b087d06d5f41645b814480b133fbc867ef7498d069e06`).
   *
   * @param string $certificateFingerprint
   */
  public function setCertificateFingerprint($certificateFingerprint)
  {
    $this->certificateFingerprint = $certificateFingerprint;
  }
  /**
   * @return string
   */
  public function getCertificateFingerprint()
  {
    return $this->certificateFingerprint;
  }
  /**
   * Identifier. The name of the package registration status resource. Format:
   * packages/{package}/packageRegistrationStatus `{package}` must follow the
   * specific format: The fully-qualified Android package name with dots ('.')
   * replaced by hyphens ('-') (e.g., `com-example-app` instead of
   * `com.example.app`).
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
   * Output only. Registration state of the package, or pair.
   *
   * Accepted values: REGISTRATION_STATE_UNSPECIFIED, REGISTERED,
   * NOT_REGISTERED, REGISTERED_WITH_ANOTHER_CERTIFICATE_FINGERPRINT
   *
   * @param self::STATE_* $state
   */
  public function setState($state)
  {
    $this->state = $state;
  }
  /**
   * @return self::STATE_*
   */
  public function getState()
  {
    return $this->state;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PackageRegistrationStatus::class, 'Google_Service_AndroidDeveloperIDStatus_PackageRegistrationStatus');
