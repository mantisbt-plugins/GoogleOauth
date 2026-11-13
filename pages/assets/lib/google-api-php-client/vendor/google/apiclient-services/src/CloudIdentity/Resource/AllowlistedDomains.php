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

namespace Google\Service\CloudIdentity\Resource;

use Google\Service\CloudIdentity\AllowlistedDomain;
use Google\Service\CloudIdentity\ListAllowlistedDomainsResponse;
use Google\Service\CloudIdentity\Operation;

/**
 * The "allowlistedDomains" collection of methods.
 * Typical usage is:
 *  <code>
 *   $cloudidentityService = new Google\Service\CloudIdentity(...);
 *   $allowlistedDomains = $cloudidentityService->allowlistedDomains;
 *  </code>
 */
class AllowlistedDomains extends \Google\Service\Resource
{
  /**
   * Adds a domain to the allowlist. (allowlistedDomains.create)
   *
   * @param AllowlistedDomain $postBody
   * @param array $optParams Optional parameters.
   * @return Operation
   * @throws \Google\Service\Exception
   */
  public function create(AllowlistedDomain $postBody, $optParams = [])
  {
    $params = ['postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], Operation::class);
  }
  /**
   * Removes a domain from the allowlist. (allowlistedDomains.delete)
   *
   * @param string $name Required. Specifies the [resource
   * name](https://google.aip.dev/122) of the domain to delete.
   * @param array $optParams Optional parameters.
   * @return Operation
   * @throws \Google\Service\Exception
   */
  public function delete($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('delete', [$params], Operation::class);
  }
  /**
   * Retrieves a specific domain from the allowlist. (allowlistedDomains.get)
   *
   * @param string $name Required. Specifies the [resource
   * name](https://google.aip.dev/122) of the domain to retrieve.
   * @param array $optParams Optional parameters.
   * @return AllowlistedDomain
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], AllowlistedDomain::class);
  }
  /**
   * Lists the domains in the allowlist.
   * (allowlistedDomains.listAllowlistedDomains)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. Provides an optional filter for list
   * results. Currently, only exact matches on the domain are supported, such as
   * "domain = 'google.com'", with no composite conditions.
   * @opt_param int pageSize Optional. Specifies the requested page size. If
   * unspecified, the service returns at most 5000 domains. The maximum value is
   * 5000; values above 5000 coerce to 5000. The limits can change over time.
   * @opt_param string pageToken Optional. Identifies a token from a previous page
   * of results, if any.
   * @return ListAllowlistedDomainsResponse
   * @throws \Google\Service\Exception
   */
  public function listAllowlistedDomains($optParams = [])
  {
    $params = [];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListAllowlistedDomainsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AllowlistedDomains::class, 'Google_Service_CloudIdentity_Resource_AllowlistedDomains');
