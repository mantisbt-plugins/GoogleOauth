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

namespace Google\Service\Backupdr\Resource;

use Google\Service\Backupdr\AutoProtectionPolicyBinding;
use Google\Service\Backupdr\InitiateDeleteAutoProtectionPolicyBindingRequest;
use Google\Service\Backupdr\ListAutoProtectionPolicyBindingsResponse;
use Google\Service\Backupdr\Operation;

/**
 * The "bindings" collection of methods.
 * Typical usage is:
 *  <code>
 *   $backupdrService = new Google\Service\Backupdr(...);
 *   $bindings = $backupdrService->projects_locations_autoProtectionPolicies_bindings;
 *  </code>
 */
class ProjectsLocationsAutoProtectionPoliciesBindings extends \Google\Service\Resource
{
  /**
   * Creates a new AutoProtectionPolicyBinding in a given project and location.
   * (bindings.create)
   *
   * @param string $parent Required. The parent resource where this binding will
   * be created. Format: projects/{project}/locations/{location}/autoProtectionPol
   * icies/{auto_protection_policy}
   * @param AutoProtectionPolicyBinding $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string autoProtectionPolicyBindingId Required. The ID to use for
   * the binding. This will become the final component of the binding's resource
   * name. This value must start with a lowercase letter followed by up to 62
   * lowercase letters, numbers, or hyphens, and cannot end with a hyphen.
   * @opt_param string requestId Optional. An optional request ID to identify
   * requests. Specify a unique request ID so that if you must retry your request,
   * the server will know to ignore the request if it has already been completed.
   * The server will guarantee that for at least 60 minutes since the first
   * request. The request ID must be a valid UUID with the exception that zero
   * UUID is not supported (00000000-0000-0000-0000-000000000000).
   * @return Operation
   * @throws \Google\Service\Exception
   */
  public function create($parent, AutoProtectionPolicyBinding $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], Operation::class);
  }
  /**
   * Returns the auto protection policy binding read from the CCFE tables.
   * (bindings.get)
   *
   * @param string $name Required. The name of the binding to retrieve. Format: pr
   * ojects/{project}/locations/{location}/autoProtectionPolicies/{auto_protection
   * _policy}/bindings/{binding}
   * @param array $optParams Optional parameters.
   * @return AutoProtectionPolicyBinding
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], AutoProtectionPolicyBinding::class);
  }
  /**
   * Initiates delete for AutoProtectionPolicy Binding (bindings.initiateDelete)
   *
   * @param string $name Required. The name of the binding to delete. Format: proj
   * ects/{project}/locations/{location}/autoProtectionPolicies/{auto_protection_p
   * olicy}/bindings/{binding}
   * @param InitiateDeleteAutoProtectionPolicyBindingRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Operation
   * @throws \Google\Service\Exception
   */
  public function initiateDelete($name, InitiateDeleteAutoProtectionPolicyBindingRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('initiateDelete', [$params], Operation::class);
  }
  /**
   * Returns the auto protection policy bindings read from the CCFE tables.
   * (bindings.listProjectsLocationsAutoProtectionPoliciesBindings)
   *
   * @param string $parent Required. The project and location for which to
   * retrieve the list of policies. Format:
   * projects/{project}/locations/{location}
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. A filter expression that filters resources
   * listed in the response. The following fields are filterable:
   * @opt_param string orderBy Optional. An expression that sorts the results in
   * the response. The following fields are sortable:
   * @opt_param int pageSize Optional. The maximum number of policies to return in
   * a single page is 500. If unspecified, a server-default value will be used.
   * @opt_param string pageToken Optional. A page token, received from a previous
   * `ListAutoProtectionPolicies` call. Provide this to retrieve the subsequent
   * page.
   * @return ListAutoProtectionPolicyBindingsResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsAutoProtectionPoliciesBindings($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListAutoProtectionPolicyBindingsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsAutoProtectionPoliciesBindings::class, 'Google_Service_Backupdr_Resource_ProjectsLocationsAutoProtectionPoliciesBindings');
