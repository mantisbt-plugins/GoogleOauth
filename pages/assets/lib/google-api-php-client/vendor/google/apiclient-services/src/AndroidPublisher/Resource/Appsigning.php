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

namespace Google\Service\AndroidPublisher\Resource;

use Google\Service\AndroidPublisher\EnrollAppRequest;
use Google\Service\AndroidPublisher\EnrollAppResponse;
use Google\Service\AndroidPublisher\RotateAppSigningKeyRequest;
use Google\Service\AndroidPublisher\RotateAppSigningKeyResponse;

/**
 * The "appsigning" collection of methods.
 * Typical usage is:
 *  <code>
 *   $androidpublisherService = new Google\Service\AndroidPublisher(...);
 *   $appsigning = $androidpublisherService->appsigning;
 *  </code>
 */
class Appsigning extends \Google\Service\Resource
{
  /**
   * Enrolls an app in Play App Signing using a self-hosted Google Cloud KMS key.
   * Warning: Do not use this method for standard Play App Signing enrollment. *
   * Standard enrollment with Google-generated or Google-managed keys cannot be
   * done via API. * This advanced API is strictly for enterprise organizations
   * with mandatory compliance, regulatory, or policy requirements to retain key
   * custody in an external Google Cloud KMS instance. * Prerequisites: Requires
   * an active, properly configured Google Cloud KMS key with appropriate IAM
   * permissions granted to Google Play before calling this method. See Help
   * Center: https://support.google.com/googleplay/android-
   * developer/answer/9842756 (appsigning.enrollApp)
   *
   * @param string $name Required. Either package name or app ID of the app
   * enrolling in Play Signing.
   * @param EnrollAppRequest $postBody
   * @param array $optParams Optional parameters.
   * @return EnrollAppResponse
   * @throws \Google\Service\Exception
   */
  public function enrollApp($name, EnrollAppRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('enrollApp', [$params], EnrollAppResponse::class);
  }
  /**
   * Rotates an app's signing key to a new self-hosted Google Cloud KMS key.
   * Warning: This method only applies to apps enrolled with self-hosted Cloud KMS
   * keys. For apps using standard Google-managed Play App Signing, key rotation
   * requests must be initiated through the Google Play Console UI. See Help
   * Center: https://support.google.com/googleplay/android-
   * developer/answer/9842756 (appsigning.rotateAppSigningKey)
   *
   * @param string $name Required. Either package name or app ID of the app
   * rotating the signing key.
   * @param RotateAppSigningKeyRequest $postBody
   * @param array $optParams Optional parameters.
   * @return RotateAppSigningKeyResponse
   * @throws \Google\Service\Exception
   */
  public function rotateAppSigningKey($name, RotateAppSigningKeyRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('rotateAppSigningKey', [$params], RotateAppSigningKeyResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Appsigning::class, 'Google_Service_AndroidPublisher_Resource_Appsigning');
