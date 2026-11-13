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

namespace Google\Service\AndroidPublisher;

class CloudKmsKey extends \Google\Model
{
  /**
   * Required. Resource identifier of the private key hosted in Google Cloud
   * KMS. The Google Play service account must be granted Decrypt and Sign
   * permissions on this resource. Format:
   * projects//locations//keyRings//cryptoKeys//cryptoKeyVersions/
   *
   * @var string
   */
  public $cryptoKeyVersionResource;

  /**
   * Required. Resource identifier of the private key hosted in Google Cloud
   * KMS. The Google Play service account must be granted Decrypt and Sign
   * permissions on this resource. Format:
   * projects//locations//keyRings//cryptoKeys//cryptoKeyVersions/
   *
   * @param string $cryptoKeyVersionResource
   */
  public function setCryptoKeyVersionResource($cryptoKeyVersionResource)
  {
    $this->cryptoKeyVersionResource = $cryptoKeyVersionResource;
  }
  /**
   * @return string
   */
  public function getCryptoKeyVersionResource()
  {
    return $this->cryptoKeyVersionResource;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CloudKmsKey::class, 'Google_Service_AndroidPublisher_CloudKmsKey');
