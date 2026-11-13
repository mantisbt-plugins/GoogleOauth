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

class GoogleCloudRecaptchaenterpriseV1ClientSettings extends \Google\Collection
{
  protected $collection_key = 'allowedDomains';
  /**
   * Optional. If set to true, it means allowed_domains are not enforced.
   *
   * @var bool
   */
  public $allowAllDomains;
  /**
   * Optional. Domains or subdomains of websites allowed to use the policy. All
   * subdomains of an allowed domain are automatically allowed. A valid domain
   * requires a host and must not include any path, port, query or fragment.
   * Examples: 'example.com' or 'subdomain.example.com' Each policy supports a
   * maximum of 250 domains. To use a policy on more domains, set
   * `allow_all_domains` to true. When this is set, you are responsible for
   * validating the hostname by checking the `token_properties.hostname` field
   * in each assessment response against your list of allowed domains.
   *
   * @var string[]
   */
  public $allowedDomains;
  protected $protectedEndpointGroupType = GoogleCloudRecaptchaenterpriseV1ProtectedEndpointGroup::class;
  protected $protectedEndpointGroupDataType = '';

  /**
   * Optional. If set to true, it means allowed_domains are not enforced.
   *
   * @param bool $allowAllDomains
   */
  public function setAllowAllDomains($allowAllDomains)
  {
    $this->allowAllDomains = $allowAllDomains;
  }
  /**
   * @return bool
   */
  public function getAllowAllDomains()
  {
    return $this->allowAllDomains;
  }
  /**
   * Optional. Domains or subdomains of websites allowed to use the policy. All
   * subdomains of an allowed domain are automatically allowed. A valid domain
   * requires a host and must not include any path, port, query or fragment.
   * Examples: 'example.com' or 'subdomain.example.com' Each policy supports a
   * maximum of 250 domains. To use a policy on more domains, set
   * `allow_all_domains` to true. When this is set, you are responsible for
   * validating the hostname by checking the `token_properties.hostname` field
   * in each assessment response against your list of allowed domains.
   *
   * @param string[] $allowedDomains
   */
  public function setAllowedDomains($allowedDomains)
  {
    $this->allowedDomains = $allowedDomains;
  }
  /**
   * @return string[]
   */
  public function getAllowedDomains()
  {
    return $this->allowedDomains;
  }
  /**
   * Optional. Configuration for all API endpoints to protect with reCAPTCHA. If
   * this field is not set, reCAPTCHA will not automatically request tokens on
   * any API endpoints.
   *
   * @param GoogleCloudRecaptchaenterpriseV1ProtectedEndpointGroup $protectedEndpointGroup
   */
  public function setProtectedEndpointGroup(GoogleCloudRecaptchaenterpriseV1ProtectedEndpointGroup $protectedEndpointGroup)
  {
    $this->protectedEndpointGroup = $protectedEndpointGroup;
  }
  /**
   * @return GoogleCloudRecaptchaenterpriseV1ProtectedEndpointGroup
   */
  public function getProtectedEndpointGroup()
  {
    return $this->protectedEndpointGroup;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudRecaptchaenterpriseV1ClientSettings::class, 'Google_Service_RecaptchaEnterprise_GoogleCloudRecaptchaenterpriseV1ClientSettings');
