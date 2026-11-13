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

namespace Google\Service\CloudRedis\Resource;

use Google\Service\CloudRedis\AclPolicyRevision;
use Google\Service\CloudRedis\ListAclPolicyRevisionsResponse;

/**
 * The "revisions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $redisService = new Google\Service\CloudRedis(...);
 *   $revisions = $redisService->projects_locations_aclPolicies_revisions;
 *  </code>
 */
class ProjectsLocationsAclPoliciesRevisions extends \Google\Service\Resource
{
  /**
   * Gets details of a specific ACL policy revision. (revisions.get)
   *
   * @param string $name Required. Redis ACL policy revision resource name using
   * the form: `projects/{project_id}/locations/{location_id}/aclPolicies/{acl_pol
   * icy_id}/revisions/{revision_id}` where `location_id` refers to a Google Cloud
   * region.
   * @param array $optParams Optional parameters.
   * @return AclPolicyRevision
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], AclPolicyRevision::class);
  }
  /**
   * Lists all ACL policy revisions in a given ACL policy.
   * (revisions.listProjectsLocationsAclPoliciesRevisions)
   *
   * @param string $parent Required. The name of the ACL policy to list revisions
   * for. Format:
   * "projects/{project_id}/locations/{location_id}/aclPolicies/{acl_policy_id}"
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize Optional. The maximum number of items to return.
   * @opt_param string pageToken Optional. The `next_page_token` value returned
   * from a previous `ListAclPolicyRevisions` request, if any.
   * @return ListAclPolicyRevisionsResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsAclPoliciesRevisions($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListAclPolicyRevisionsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsAclPoliciesRevisions::class, 'Google_Service_CloudRedis_Resource_ProjectsLocationsAclPoliciesRevisions');
