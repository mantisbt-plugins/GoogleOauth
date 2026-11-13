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

namespace Google\Service\Aiplatform\Resource;

use Google\Service\Aiplatform\GoogleCloudAiplatformV1ListSemanticGovernancePoliciesResponse;
use Google\Service\Aiplatform\GoogleCloudAiplatformV1SemanticGovernancePolicy;
use Google\Service\Aiplatform\GoogleLongrunningOperation;

/**
 * The "semanticGovernancePolicies" collection of methods.
 * Typical usage is:
 *  <code>
 *   $aiplatformService = new Google\Service\Aiplatform(...);
 *   $semanticGovernancePolicies = $aiplatformService->projects_locations_semanticGovernancePolicies;
 *  </code>
 */
class ProjectsLocationsSemanticGovernancePolicies extends \Google\Service\Resource
{
  /**
   * Creates a SemanticGovernancePolicy. (semanticGovernancePolicies.create)
   *
   * @param string $parent Required. The resource name of the Location into which
   * to create the SemanticGovernancePolicy. Format:
   * `projects/{project}/locations/{location}`
   * @param GoogleCloudAiplatformV1SemanticGovernancePolicy $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string semanticGovernancePolicyId Required. The ID to use for the
   * SemanticGovernancePolicy, which will become the final component of the
   * SemanticGovernancePolicy's resource name. This value may be up to 63
   * characters, and valid characters are `[a-z0-9-]`. The first character cannot
   * be a number or hyphen. The last character must be a letter or a number.
   * @return GoogleLongrunningOperation
   * @throws \Google\Service\Exception
   */
  public function create($parent, GoogleCloudAiplatformV1SemanticGovernancePolicy $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], GoogleLongrunningOperation::class);
  }
  /**
   * Deletes a SemanticGovernancePolicy. (semanticGovernancePolicies.delete)
   *
   * @param string $name Required. The name of the SemanticGovernancePolicy
   * resource to be deleted. Format: `projects/{project}/locations/{location}/sema
   * nticGovernancePolicies/{semantic_governance_policy}`
   * @param array $optParams Optional parameters.
   *
   * @opt_param string etag Optional. The etag of the SemanticGovernancePolicy. If
   * an etag is provided and does not match the current etag of the
   * SemanticGovernancePolicy, deletion will be blocked and an ABORTED error will
   * be returned.
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
   * Gets a SemanticGovernancePolicy. (semanticGovernancePolicies.get)
   *
   * @param string $name Required. The name of the SemanticGovernancePolicy
   * resource. Format: `projects/{project}/locations/{location}/semanticGovernance
   * Policies/{semantic_governance_policy}`
   * @param array $optParams Optional parameters.
   * @return GoogleCloudAiplatformV1SemanticGovernancePolicy
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], GoogleCloudAiplatformV1SemanticGovernancePolicy::class);
  }
  /**
   * Lists SemanticGovernancePolicies in a given location.
   * (semanticGovernancePolicies.listProjectsLocationsSemanticGovernancePolicies)
   *
   * @param string $parent Required. The resource name of the Location from which
   * to list the SemanticGovernancePolicies. Format:
   * `projects/{project}/locations/{location}`
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize Optional. The list page size. If zero, a default page
   * size of 10 is used.
   * @opt_param string pageToken Optional. The standard list page token.
   * @return GoogleCloudAiplatformV1ListSemanticGovernancePoliciesResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsSemanticGovernancePolicies($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], GoogleCloudAiplatformV1ListSemanticGovernancePoliciesResponse::class);
  }
  /**
   * Updates a SemanticGovernancePolicy. (semanticGovernancePolicies.patch)
   *
   * @param string $name Identifier. Resource name of the
   * SemanticGovernancePolicy.
   * @param GoogleCloudAiplatformV1SemanticGovernancePolicy $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask Optional. `update_mask` is used to specify the
   * fields to be overwritten in the SemanticGovernancePolicy resource by the
   * update. The fields specified in the `update_mask` are relative to the
   * resource, not the full request. A field will be overwritten if it is in the
   * mask. If the mask is not present, then all fields that are populated in the
   * request message will be overwritten. Set the `update_mask` to `*` to override
   * all fields.
   * @return GoogleLongrunningOperation
   * @throws \Google\Service\Exception
   */
  public function patch($name, GoogleCloudAiplatformV1SemanticGovernancePolicy $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], GoogleLongrunningOperation::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsSemanticGovernancePolicies::class, 'Google_Service_Aiplatform_Resource_ProjectsLocationsSemanticGovernancePolicies');
