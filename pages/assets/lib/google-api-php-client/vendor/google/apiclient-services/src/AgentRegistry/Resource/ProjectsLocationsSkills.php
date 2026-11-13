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

namespace Google\Service\AgentRegistry\Resource;

use Google\Service\AgentRegistry\GoogleIamV1Policy;
use Google\Service\AgentRegistry\GoogleIamV1SetIamPolicyRequest;
use Google\Service\AgentRegistry\GoogleIamV1TestIamPermissionsRequest;
use Google\Service\AgentRegistry\GoogleIamV1TestIamPermissionsResponse;
use Google\Service\AgentRegistry\ListSkillsResponse;
use Google\Service\AgentRegistry\Operation;
use Google\Service\AgentRegistry\SearchSkillsResponse;
use Google\Service\AgentRegistry\Skill;

/**
 * The "skills" collection of methods.
 * Typical usage is:
 *  <code>
 *   $agentregistryService = new Google\Service\AgentRegistry(...);
 *   $skills = $agentregistryService->projects_locations_skills;
 *  </code>
 */
class ProjectsLocationsSkills extends \Google\Service\Resource
{
  /**
   * ========================================================================= #
   * Skills Collection APIs Creates a Skill resource container, optionally
   * publishing the initial SkillRevision inline in a single, atomic CRUD
   * roundtrip. (skills.create)
   *
   * @param string $parent Required. The project and location location to
   * bootstrap.
   * @param Skill $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string requestId Optional. Signed UUID request idempotency token.
   * @opt_param string skillId Required. Custom, user-defined unique container
   * identifier. Must be unique within the parent project and location. This value
   * should be 4-64 characters, and valid characters are `/a-z-/`.
   * @return Operation
   * @throws \Google\Service\Exception
   */
  public function create($parent, Skill $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], Operation::class);
  }
  /**
   * Deletes a Skill container along with all its revisions. (skills.delete)
   *
   * @param string $name Required. Target Skill container name to remove.
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool force Optional. If set to true, any child SkillRevisions
   * under this Skill will also be deleted. Otherwise, the request will only
   * succeed if the Skill has no child SkillRevisions.
   * @opt_param string requestId Optional. Signed UUID request idempotency token.
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
   * Fetches the active configuration and metadata of a Skill. (skills.get)
   *
   * @param string $name Required. Target resource container name.
   * @param array $optParams Optional parameters.
   * @return Skill
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], Skill::class);
  }
  /**
   * Gets the access control policy for a resource. Returns an empty policy if the
   * resource exists and does not have a policy set. (skills.getIamPolicy)
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
   * @return GoogleIamV1Policy
   * @throws \Google\Service\Exception
   */
  public function getIamPolicy($resource, $optParams = [])
  {
    $params = ['resource' => $resource];
    $params = array_merge($params, $optParams);
    return $this->call('getIamPolicy', [$params], GoogleIamV1Policy::class);
  }
  /**
   * Lists logical Skills available in a project.
   * (skills.listProjectsLocationsSkills)
   *
   * @param string $parent Required. Parent value for ListSkillsRequest
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. Use this field to specify filter criteria
   * on list results. Filter expressions can be used to restrict results based
   * upon filterable fields, where equality operators can be used. See
   * [instructions](https://docs.cloud.google.com/agent-registry/search-agents-
   * and-tools) for more details. Allowed operators: `=`, `<`, `>`, `NOT`, `AND`,
   * `OR`, and `()`. | Field | `=` | `<`, `>` | |--------------|-----|----------|
   * | state | Yes | No | | targetState | Yes | No | | createTime | Yes | Yes | |
   * updateTime | Yes | Yes | Examples: * `state=ACTIVE` to restrict results to
   * skills in the `ACTIVE` state.
   * @opt_param string orderBy Optional. Hint for how to order the results
   * @opt_param int pageSize Optional. Requested page size. Server may return
   * fewer items than requested. If unspecified, server will pick an appropriate
   * default.
   * @opt_param string pageToken Optional. A token identifying a page of results
   * the server should return.
   * @return ListSkillsResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsSkills($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListSkillsResponse::class);
  }
  /**
   * Updates Skill metadata or overrides active pointers/state using REST standard
   * PATCH. (skills.patch)
   *
   * @param string $name Identifier. Resource name of the Skill. Format:
   * `projects/{project}/locations/{location}/skills/{skill}` The `{skill}`
   * segment acts as the resource ID. If the skill is associated with a Publisher,
   * this segment typically uses a hyphenated namespace prefix corresponding to
   * the publisher (e.g., `google-workspace-create-docs`).
   * @param Skill $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string requestId Optional. Signed UUID request idempotency token.
   * @opt_param string updateMask Optional. Standard update target mask mapping
   * relative fields.
   * @return Operation
   * @throws \Google\Service\Exception
   */
  public function patch($name, Skill $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], Operation::class);
  }
  /**
   * Custom deep-search method to filter by frontmatter or query SKILL.md text
   * blobs. (skills.search)
   *
   * @param string $parent Required. Parent value for SearchSkillsRequest. Format:
   * `projects/{project}/locations/{location}`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. Use this field to specify additional
   * filter criteria on search results. Filter expressions can be used to restrict
   * results based upon filterable fields, where equality operators can be used.
   * See [instructions](https://docs.cloud.google.com/agent-registry/search-
   * agents-and-tools) for more details. Allowed operators: `=`, `<`, `>`, `NOT`,
   * `AND`, `OR`, and `()`. | Field | `=` | `<`, `>` |
   * |--------------|-----|----------| | state | Yes | No | | targetState | Yes |
   * No | | createTime | Yes | Yes | | updateTime | Yes | Yes | Examples: *
   * `state=ACTIVE` to restrict results to skills in the `ACTIVE` state.
   * @opt_param int pageSize Optional. The maximum number of search results to
   * return per page. The page size is capped at `100`, even if a larger value is
   * specified. A negative value will result in an `INVALID_ARGUMENT` error. If
   * unspecified or set to `0`, a default value of `20` will be used. The server
   * may return fewer results than requested.
   * @opt_param string pageToken Optional. If present, retrieve the next batch of
   * results from the preceding call to this method. `page_token` must be the
   * value of `next_page_token` from the previous response. The values of all
   * other method parameters, must be identical to those in the previous call.
   * @opt_param string searchString Optional. Search criteria used to select the
   * Skills to return. If no search criteria is specified then all accessible
   * Skills will be returned. Search expressions can be used to restrict results
   * based upon searchable fields, where the operators can be used along with the
   * suffix wildcard symbol `*`. See
   * [instructions](https://docs.cloud.google.com/agent-registry/search-agents-
   * and-tools) for more details. Allowed operators: `=`, `:`, `NOT`, `AND`, `OR`,
   * and `()`. Searchable fields: | Field | `=` | `:` | `*` | Keyword Search |
   * |---------------------------|-----|-----|-----|----------------| | skillId |
   * Yes | Yes | Yes | Included | | name | No | Yes | Yes | Included | |
   * displayName | No | Yes | Yes | Included | | description | No | Yes | No |
   * Included | | frontmatter.name | No | Yes | No | Included | |
   * frontmatter.description | No | Yes | No | Included | |
   * frontmatter.compatibility | No | Yes | No | Included | | frontmatter.license
   * | No | Yes | No | Included | Examples: *
   * `skillId="urn:skill:projects-1234:locations:global:private-important-skill"`
   * to find the skill with the specified skill ID. * `name:important` to find
   * skills whose name contains `important` as a word. * `displayName:works*` to
   * find skills whose display name contains words that start with `works`.
   * @opt_param string searchType Optional. The type of search.
   * @return SearchSkillsResponse
   * @throws \Google\Service\Exception
   */
  public function search($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('search', [$params], SearchSkillsResponse::class);
  }
  /**
   * Sets the access control policy on the specified resource. Replaces any
   * existing policy. Can return `NOT_FOUND`, `INVALID_ARGUMENT`, and
   * `PERMISSION_DENIED` errors. (skills.setIamPolicy)
   *
   * @param string $resource REQUIRED: The resource for which the policy is being
   * specified. See [Resource
   * names](https://cloud.google.com/apis/design/resource_names) for the
   * appropriate value for this field.
   * @param GoogleIamV1SetIamPolicyRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleIamV1Policy
   * @throws \Google\Service\Exception
   */
  public function setIamPolicy($resource, GoogleIamV1SetIamPolicyRequest $postBody, $optParams = [])
  {
    $params = ['resource' => $resource, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('setIamPolicy', [$params], GoogleIamV1Policy::class);
  }
  /**
   * Returns permissions that a caller has on the specified resource. If the
   * resource does not exist, this will return an empty set of permissions, not a
   * `NOT_FOUND` error. Note: This operation is designed to be used for building
   * permission-aware UIs and command-line tools, not for authorization checking.
   * This operation may "fail open" without warning. (skills.testIamPermissions)
   *
   * @param string $resource REQUIRED: The resource for which the policy detail is
   * being requested. See [Resource
   * names](https://cloud.google.com/apis/design/resource_names) for the
   * appropriate value for this field.
   * @param GoogleIamV1TestIamPermissionsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleIamV1TestIamPermissionsResponse
   * @throws \Google\Service\Exception
   */
  public function testIamPermissions($resource, GoogleIamV1TestIamPermissionsRequest $postBody, $optParams = [])
  {
    $params = ['resource' => $resource, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('testIamPermissions', [$params], GoogleIamV1TestIamPermissionsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsSkills::class, 'Google_Service_AgentRegistry_Resource_ProjectsLocationsSkills');
