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

namespace Google\Service\CloudIdentity;

class AllowlistedDomain extends \Google\Model
{
  /**
   * Required. Immutable. Name of the domain that is in the allowlist. e.g.
   * "google.com"
   *
   * @var string
   */
  public $domain;
  /**
   * Output only. Identifier. Resource name of the domain in the allowlist e.g.
   * "allowlistedDomains/0184mhaj1smlusv"
   *
   * @var string
   */
  public $name;

  /**
   * Required. Immutable. Name of the domain that is in the allowlist. e.g.
   * "google.com"
   *
   * @param string $domain
   */
  public function setDomain($domain)
  {
    $this->domain = $domain;
  }
  /**
   * @return string
   */
  public function getDomain()
  {
    return $this->domain;
  }
  /**
   * Output only. Identifier. Resource name of the domain in the allowlist e.g.
   * "allowlistedDomains/0184mhaj1smlusv"
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AllowlistedDomain::class, 'Google_Service_CloudIdentity_AllowlistedDomain');
