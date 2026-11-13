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

namespace Google\Service\AgentIdentity\Resource;

use Google\Service\AgentIdentity\AgentidentityEmpty;
use Google\Service\AgentIdentity\Authorization;
use Google\Service\AgentIdentity\ListAuthorizationsResponse;
use Google\Service\AgentIdentity\Policy;
use Google\Service\AgentIdentity\SetIamPolicyRequest;
use Google\Service\AgentIdentity\TestIamPermissionsRequest;
use Google\Service\AgentIdentity\TestIamPermissionsResponse;

/**
 * The "authorizations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $agentidentityService = new Google\Service\AgentIdentity(...);
 *   $authorizations = $agentidentityService->projects_locations_authProviders_authorizations;
 *  </code>
 */
class ProjectsLocationsAuthProvidersAuthorizations extends \Google\Service\Resource
{
  /**
   * Deletes a single authorization. (authorizations.delete)
   *
   * @param string $name Required. The resource name of the authorization to
   * delete. Format: projects/{project}/locations/{location}/authProviders/{auth_p
   * rovider}/authorizations/{authorization}
   * @param array $optParams Optional parameters.
   *
   * @opt_param string requestId Optional. An optional request ID to identify
   * requests. Specify a unique request ID so that if you must retry your request,
   * the server will know to ignore the request if it has already been completed.
   * The server will guarantee that for at least 60 minutes after the first
   * request. For example, consider a situation where you make an initial request
   * and the request times out. If you make the request again with the same
   * request ID, the server can check if original operation with the same request
   * ID was received, and if so, will ignore the second request. This prevents
   * clients from accidentally creating duplicate commitments. The request ID must
   * be a valid UUID with the exception that zero UUID is not supported
   * (00000000-0000-0000-0000-000000000000).
   * @return AgentidentityEmpty
   * @throws \Google\Service\Exception
   */
  public function delete($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('delete', [$params], AgentidentityEmpty::class);
  }
  /**
   * Gets details of a single authorization. (authorizations.get)
   *
   * @param string $name Required. The resource name of the authorization.
   * @param array $optParams Optional parameters.
   * @return Authorization
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], Authorization::class);
  }
  /**
   * Gets the access control policy for a resource. Returns an empty policy if the
   * resource exists and does not have a policy set. (authorizations.getIamPolicy)
   *
   * @param string $resource REQUIRED: The resource for which the policy is being
   * requested. See [Resource
   * names](https://cloud.google.com/apis/design/resource_names) for the
   * appropriate value for this field.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int options.requestedPolicyVersion Optional. The maximum policy
   * version that will be used to format the policy. Valid values are 0, 1, and 3.
   * Requests specifying an invalid value will be rejected. Requests for policies
   * with any conditional role bindings must specify version 3. Policies with no
   * conditional role bindings may specify any valid value or leave the field
   * unset. The policy in the response might use the policy version that you
   * specified, or it might use a lower policy version. For example, if you
   * specify version 3, but the policy has no conditional role bindings, the
   * response uses version 1. To learn which resources support conditions in their
   * IAM policies, see the [IAM
   * documentation](https://cloud.google.com/iam/help/conditions/resource-
   * policies).
   * @return Policy
   * @throws \Google\Service\Exception
   */
  public function getIamPolicy($resource, $optParams = [])
  {
    $params = ['resource' => $resource];
    $params = array_merge($params, $optParams);
    return $this->call('getIamPolicy', [$params], Policy::class);
  }
  /**
   * Lists authorizations in a given project and location.
   * (authorizations.listProjectsLocationsAuthProvidersAuthorizations)
   *
   * @param string $parent Required. The parent resource where the search is
   * performed. Format:
   * projects/{project}/locations/{location}/authProviders/{auth_provider}
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. Filter string to restrict the results.
   * Currently supports filtering by `client_user_id` only. Format:
   * `client_user_id=""`
   * @opt_param string orderBy Optional. This field is currently ignored. Defaults
   * to ordering by authorization_id in ascending order.
   * @opt_param int pageSize Optional. Requested page size. Server may return
   * fewer items than requested. If unspecified, server will pick an appropriate
   * default. The maximum page size is 1000.
   * @opt_param string pageToken Optional. A page token, received from a previous
   * `ListAuthorizations` call. Provide this to retrieve the subsequent page. When
   * paginating, all other parameters provided to `ListAuthorizations` must match
   * the call that provided the page token.
   * @return ListAuthorizationsResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsAuthProvidersAuthorizations($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListAuthorizationsResponse::class);
  }
  /**
   * Sets the access control policy on the specified resource. Replaces any
   * existing policy. Can return `NOT_FOUND`, `INVALID_ARGUMENT`, and
   * `PERMISSION_DENIED` errors. (authorizations.setIamPolicy)
   *
   * @param string $resource REQUIRED: The resource for which the policy is being
   * specified. See [Resource
   * names](https://cloud.google.com/apis/design/resource_names) for the
   * appropriate value for this field.
   * @param SetIamPolicyRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Policy
   * @throws \Google\Service\Exception
   */
  public function setIamPolicy($resource, SetIamPolicyRequest $postBody, $optParams = [])
  {
    $params = ['resource' => $resource, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('setIamPolicy', [$params], Policy::class);
  }
  /**
   * Returns permissions that a caller has on the specified resource. If the
   * resource does not exist, this will return an empty set of permissions, not a
   * `NOT_FOUND` error. Note: This operation is designed to be used for building
   * permission-aware UIs and command-line tools, not for authorization checking.
   * This operation may "fail open" without warning.
   * (authorizations.testIamPermissions)
   *
   * @param string $resource REQUIRED: The resource for which the policy detail is
   * being requested. See [Resource
   * names](https://cloud.google.com/apis/design/resource_names) for the
   * appropriate value for this field.
   * @param TestIamPermissionsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return TestIamPermissionsResponse
   * @throws \Google\Service\Exception
   */
  public function testIamPermissions($resource, TestIamPermissionsRequest $postBody, $optParams = [])
  {
    $params = ['resource' => $resource, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('testIamPermissions', [$params], TestIamPermissionsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsAuthProvidersAuthorizations::class, 'Google_Service_AgentIdentity_Resource_ProjectsLocationsAuthProvidersAuthorizations');
