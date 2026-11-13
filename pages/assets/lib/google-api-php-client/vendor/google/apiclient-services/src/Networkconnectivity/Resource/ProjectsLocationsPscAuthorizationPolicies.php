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

namespace Google\Service\Networkconnectivity\Resource;

use Google\Service\Networkconnectivity\GoogleLongrunningOperation;
use Google\Service\Networkconnectivity\ListPscAuthorizationPoliciesResponse;
use Google\Service\Networkconnectivity\PscAuthorizationPolicy;

/**
 * The "pscAuthorizationPolicies" collection of methods.
 * Typical usage is:
 *  <code>
 *   $networkconnectivityService = new Google\Service\Networkconnectivity(...);
 *   $pscAuthorizationPolicies = $networkconnectivityService->projects_locations_pscAuthorizationPolicies;
 *  </code>
 */
class ProjectsLocationsPscAuthorizationPolicies extends \Google\Service\Resource
{
  /**
   * Creates a new PscAuthorizationPolicy in a given project and location.
   * (pscAuthorizationPolicies.create)
   *
   * @param string $parent Required. The parent resource's name of the
   * PscAuthorizationPolicy.
   * @param PscAuthorizationPolicy $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pscAuthorizationPolicyId Required. Resource ID of the
   * PscAuthorizationPolicy.
   * @opt_param string requestId Optional. An optional request ID to identify
   * requests.
   * @return GoogleLongrunningOperation
   * @throws \Google\Service\Exception
   */
  public function create($parent, PscAuthorizationPolicy $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], GoogleLongrunningOperation::class);
  }
  /**
   * Deletes a single PscAuthorizationPolicy. (pscAuthorizationPolicies.delete)
   *
   * @param string $name Required. The name of the PscAuthorizationPolicy to
   * delete.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string etag Optional. The etag of the PscAuthorizationPolicy to
   * delete.
   * @opt_param string requestId Optional. An optional request ID to identify
   * requests.
   * @return GoogleLongrunningOperation
   * @throws \Google\Service\Exception
   */
  public function delete($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('delete', [$params], GoogleLongrunningOperation::class);
  }
  /**
   * Gets details of a single PscAuthorizationPolicy.
   * (pscAuthorizationPolicies.get)
   *
   * @param string $name Required. Name of the PscAuthorizationPolicy to get.
   * @param array $optParams Optional parameters.
   * @return PscAuthorizationPolicy
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], PscAuthorizationPolicy::class);
  }
  /**
   * Lists PscAuthorizationPolicies in a given project and location.
   * (pscAuthorizationPolicies.listProjectsLocationsPscAuthorizationPolicies)
   *
   * @param string $parent Required. The parent resource's name.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. Filter expression to restrict the results.
   * @opt_param string orderBy Optional. Sort order of the results.
   * @opt_param int pageSize Optional. The maximum number of
   * PscAuthorizationPolicies to return in a single page. The service may return
   * fewer than this value. If unspecified, at most 50 PscAuthorizationPolicies
   * will be returned. The maximum value is 1000; values above 1000 will be
   * coerced to 1000.
   * @opt_param string pageToken Optional. A page token, received from a previous
   * `ListPscAuthorizationPolicies` call.
   * @return ListPscAuthorizationPoliciesResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsPscAuthorizationPolicies($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListPscAuthorizationPoliciesResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsPscAuthorizationPolicies::class, 'Google_Service_Networkconnectivity_Resource_ProjectsLocationsPscAuthorizationPolicies');
