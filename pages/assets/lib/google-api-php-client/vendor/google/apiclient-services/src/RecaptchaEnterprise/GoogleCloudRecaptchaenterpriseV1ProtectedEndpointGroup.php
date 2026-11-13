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

class GoogleCloudRecaptchaenterpriseV1ProtectedEndpointGroup extends \Google\Collection
{
  protected $collection_key = 'protectedEndpoints';
  protected $protectedEndpointsType = GoogleCloudRecaptchaenterpriseV1ProtectedEndpoint::class;
  protected $protectedEndpointsDataType = 'array';

  /**
   * Optional. List of API endpoints to automatically protect with reCAPTCHA. If
   * any of these endpoints is invoked from a page where a key bound to this
   * policy is installed, a reCAPTCHA token is automatically generated and
   * attached to the request. If multiple protected endpoints match a given API
   * endpoint, the first one in the list is used.
   *
   * @param GoogleCloudRecaptchaenterpriseV1ProtectedEndpoint[] $protectedEndpoints
   */
  public function setProtectedEndpoints($protectedEndpoints)
  {
    $this->protectedEndpoints = $protectedEndpoints;
  }
  /**
   * @return GoogleCloudRecaptchaenterpriseV1ProtectedEndpoint[]
   */
  public function getProtectedEndpoints()
  {
    return $this->protectedEndpoints;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudRecaptchaenterpriseV1ProtectedEndpointGroup::class, 'Google_Service_RecaptchaEnterprise_GoogleCloudRecaptchaenterpriseV1ProtectedEndpointGroup');
