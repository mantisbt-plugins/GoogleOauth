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
use Google\Service\AgentIdentity\AuthProvider;
use Google\Service\AgentIdentity\DisableAuthProviderRequest;
use Google\Service\AgentIdentity\EnableAuthProviderRequest;
use Google\Service\AgentIdentity\ListAuthProvidersResponse;
use Google\Service\AgentIdentity\Policy;
use Google\Service\AgentIdentity\QueryAuthProvidersResponse;
use Google\Service\AgentIdentity\QueryWorkloadsResponse;
use Google\Service\AgentIdentity\ResolveAuthorizationRequest;
use Google\Service\AgentIdentity\ResolveAuthorizationResponse;
use Google\Service\AgentIdentity\RevokeAuthorizationRequest;
use Google\Service\AgentIdentity\RevokeAuthorizationResponse;
use Google\Service\AgentIdentity\SetIamPolicyRequest;
use Google\Service\AgentIdentity\TestIamPermissionsRequest;
use Google\Service\AgentIdentity\TestIamPermissionsResponse;
use Google\Service\AgentIdentity\UndeleteAuthProviderRequest;

/**
 * The "authProviders" collection of methods.
 * Typical usage is:
 *  <code>
 *   $agentidentityService = new Google\Service\AgentIdentity(...);
 *   $authProviders = $agentidentityService->projects_locations_authProviders;
 *  </code>
 */
class ProjectsLocationsAuthProviders extends \Google\Service\Resource
{
  /**
   * Creates a new auth provider in a given project and location.
   * (authProviders.create)
   *
   * @param string $parent Required. The parent resource where the auth provider
   * is created. Format: projects/{project}/locations/{location}
   * @param AuthProvider $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string authProviderId Required. The ID to use for the auth
   * provider, which will become the final segment of the auth provider's resource
   * name. This value should be 1-63 characters, and valid characters are /a-z-/.
   * The first character must be a lowercase letter, and the last character must
   * be a lowercase letter or a number.
   * @opt_param string requestId Optional. An optional request ID to identify
   * requests. Specify a unique request ID so that if you must retry your request,
   * the server will know to ignore the request if it has already been completed.
   * The server will guarantee that for at least 60 minutes since the first
   * request. For example, consider a situation where you make an initial request
   * and the request times out. If you make the request again with the same
   * request ID, the server can check if original operation with the same request
   * ID was received, and if so, will ignore the second request. This prevents
   * clients from accidentally creating duplicate commitments. The request ID must
   * be a valid UUID with the exception that zero UUID is not supported
   * (00000000-0000-0000-0000-000000000000).
   * @return AuthProvider
   * @throws \Google\Service\Exception
   */
  public function create($parent, AuthProvider $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], AuthProvider::class);
  }
  /**
   * Deletes a single auth provider. (authProviders.delete)
   *
   * @param string $name Required. The resource name of the auth provider.
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
   * Disables a single auth provider. (authProviders.disable)
   *
   * @param string $name Required. The resource name of the auth provider. Format:
   * projects/{project}/locations/{location}/authProviders/{auth_provider}
   * @param DisableAuthProviderRequest $postBody
   * @param array $optParams Optional parameters.
   * @return AuthProvider
   * @throws \Google\Service\Exception
   */
  public function disable($name, DisableAuthProviderRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('disable', [$params], AuthProvider::class);
  }
  /**
   * Enables a single auth provider. (authProviders.enable)
   *
   * @param string $name Required. The resource name of the auth provider. Format:
   * projects/{project}/locations/{location}/authProviders/{auth_provider}
   * @param EnableAuthProviderRequest $postBody
   * @param array $optParams Optional parameters.
   * @return AuthProvider
   * @throws \Google\Service\Exception
   */
  public function enable($name, EnableAuthProviderRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('enable', [$params], AuthProvider::class);
  }
  /**
   * Gets details of a single auth provider. (authProviders.get)
   *
   * @param string $name Required. The resource name of the auth provider.
   * @param array $optParams Optional parameters.
   * @return AuthProvider
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], AuthProvider::class);
  }
  /**
   * Gets the access control policy for a resource. Returns an empty policy if the
   * resource exists and does not have a policy set. (authProviders.getIamPolicy)
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
   * Lists auth providers in a given project and location.
   * (authProviders.listProjectsLocationsAuthProviders)
   *
   * @param string $parent Required. The parent resource where the search is
   * performed. Format: projects/{project}/locations/{location}
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. Filter results. This field is currently
   * ignored.
   * @opt_param string orderBy Optional. Currently ignored. Defaults to ordering
   * by auth_provider_id in ascending order.
   * @opt_param int pageSize Optional. Requested page size. Server may return
   * fewer items than requested. If unspecified, server will pick an appropriate
   * default. The maximum page size is 1000.
   * @opt_param string pageToken Optional. A token, which can be sent as
   * `page_token` to retrieve the next page. If this field is omitted, the first
   * page is returned.
   * @opt_param bool showDeleted Optional. Deleted auth providers will be kept
   * with a soft-delete for 30 days before being purged. If this field is set to
   * `true`, deleted auth providers will also be returned.
   * @return ListAuthProvidersResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsAuthProviders($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListAuthProvidersResponse::class);
  }
  /**
   * Updates the parameters of a single auth provider. (authProviders.patch)
   *
   * @param string $name Identifier. The full resource name of the auth provider.
   * Format: projects/{project}/locations/{location}/authProviders/{auth_provider}
   * @param AuthProvider $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string requestId Optional. An optional request ID to identify
   * requests. Specify a unique request ID so that if you must retry your request,
   * the server will know to ignore the request if it has already been completed.
   * The server will guarantee that for at least 60 minutes since the first
   * request. For example, consider a situation where you make an initial request
   * and the request times out. If you make the request again with the same
   * request ID, the server can check if original operation with the same request
   * ID was received, and if so, will ignore the second request. This prevents
   * clients from accidentally creating duplicate commitments. The request ID must
   * be a valid UUID with the exception that zero UUID is not supported
   * (00000000-0000-0000-0000-000000000000).
   * @opt_param string updateMask Optional. Field mask is used to specify the
   * fields to be overwritten in the auth provider resource by the update. The
   * fields specified in the `update_mask` are relative to the resource, not the
   * full request. A field will be overwritten if it is in the mask. If the user
   * does not provide a mask then all fields present in the request will be
   * overwritten.
   * @return AuthProvider
   * @throws \Google\Service\Exception
   */
  public function patch($name, AuthProvider $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], AuthProvider::class);
  }
  /**
   * Queries which auth providers are used by a given workload ID.
   * (authProviders.query)
   *
   * @param string $parent Required. The parent resource where the search is
   * performed. Format: projects/{project}/locations/{location}
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize Optional. Requested page size. Server may return
   * fewer items than requested. If unspecified, server will pick an appropriate
   * default. The maximum page size is 1000.
   * @opt_param string pageToken Optional. A token, which can be sent as
   * `page_token` to retrieve the next page. If this field is omitted, the first
   * page is returned. A page token, received from a previous QueryAuthProviders
   * call. Provide this to retrieve the subsequent page. When paginating, all
   * other parameters provided to QueryAuthProviders must match the call that
   * provided the page token.
   * @opt_param string workloadId Required. The workload identifier to filter by.
   * @return QueryAuthProvidersResponse
   * @throws \Google\Service\Exception
   */
  public function query($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('query', [$params], QueryAuthProvidersResponse::class);
  }
  /**
   * Queries which workloads are using a given auth provider.
   * (authProviders.queryWorkloads)
   *
   * @param string $name Required. The name of the auth provider to query. Format:
   * projects/{project}/locations/{location}/authProviders/{auth_provider}
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize Optional. Requested page size. Server may return
   * fewer items than requested. If unspecified, server will pick an appropriate
   * default. The maximum page size is 1000.
   * @opt_param string pageToken Optional. A token, which can be sent as
   * `page_token` to retrieve the next page. When paginating, all other parameters
   * provided to `QueryWorkloads` must match the call that provided the page
   * token. If this field is omitted, the first page is returned.
   * @return QueryWorkloadsResponse
   * @throws \Google\Service\Exception
   */
  public function queryWorkloads($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('queryWorkloads', [$params], QueryWorkloadsResponse::class);
  }
  /**
   * Resolves an authorization for a user on an auth provider, creating one if it
   * does not exist or returning an existing one.
   * (authProviders.resolveAuthorization)
   *
   * @param string $name Required. The name of the auth provider to resolve
   * authorization for. Format:
   * projects/{project}/locations/{location}/authProviders/{auth_provider}
   * @param ResolveAuthorizationRequest $postBody
   * @param array $optParams Optional parameters.
   * @return ResolveAuthorizationResponse
   * @throws \Google\Service\Exception
   */
  public function resolveAuthorization($name, ResolveAuthorizationRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('resolveAuthorization', [$params], ResolveAuthorizationResponse::class);
  }
  /**
   * Revokes all authorizations for a specific user on an auth provider. This
   * deletes all authorization records associated with the user and auth provider,
   * effectively revoking access across all agents.
   * (authProviders.revokeAuthorization)
   *
   * @param string $name Required. The resource name of the auth provider. Format:
   * projects/{project}/locations/{location}/authProviders/{auth_provider}
   * @param RevokeAuthorizationRequest $postBody
   * @param array $optParams Optional parameters.
   * @return RevokeAuthorizationResponse
   * @throws \Google\Service\Exception
   */
  public function revokeAuthorization($name, RevokeAuthorizationRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('revokeAuthorization', [$params], RevokeAuthorizationResponse::class);
  }
  /**
   * Sets the access control policy on the specified resource. Replaces any
   * existing policy. Can return `NOT_FOUND`, `INVALID_ARGUMENT`, and
   * `PERMISSION_DENIED` errors. (authProviders.setIamPolicy)
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
   * (authProviders.testIamPermissions)
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
  /**
   * Undeletes a single auth provider. (authProviders.undelete)
   *
   * @param string $name Required. The resource name of the auth provider. Format:
   * projects/{project}/locations/{location}/authProviders/{auth_provider}
   * @param UndeleteAuthProviderRequest $postBody
   * @param array $optParams Optional parameters.
   * @return AuthProvider
   * @throws \Google\Service\Exception
   */
  public function undelete($name, UndeleteAuthProviderRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('undelete', [$params], AuthProvider::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsAuthProviders::class, 'Google_Service_AgentIdentity_Resource_ProjectsLocationsAuthProviders');
