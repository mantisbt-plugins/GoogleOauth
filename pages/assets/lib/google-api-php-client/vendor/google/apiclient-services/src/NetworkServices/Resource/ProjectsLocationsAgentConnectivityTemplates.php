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

namespace Google\Service\NetworkServices\Resource;

use Google\Service\NetworkServices\AgentConnectivityTemplate;
use Google\Service\NetworkServices\ListAgentConnectivityTemplatesResponse;
use Google\Service\NetworkServices\Operation;

/**
 * The "agentConnectivityTemplates" collection of methods.
 * Typical usage is:
 *  <code>
 *   $networkservicesService = new Google\Service\NetworkServices(...);
 *   $agentConnectivityTemplates = $networkservicesService->projects_locations_agentConnectivityTemplates;
 *  </code>
 */
class ProjectsLocationsAgentConnectivityTemplates extends \Google\Service\Resource
{
  /**
   * Creates a new AgentConnectivityTemplate in a given project and location.
   * (agentConnectivityTemplates.create)
   *
   * @param string $parent Required. The parent resource of the
   * AgentConnectivityTemplate. Must be in the format `projects/locations`.
   * @param AgentConnectivityTemplate $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string agentConnectivityTemplateId Required. Short name of the
   * AgentConnectivityTemplate resource to be created.
   * @return Operation
   * @throws \Google\Service\Exception
   */
  public function create($parent, AgentConnectivityTemplate $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], Operation::class);
  }
  /**
   * Deletes a single AgentConnectivityTemplate.
   * (agentConnectivityTemplates.delete)
   *
   * @param string $name Required. A name of the AgentConnectivityTemplate to
   * delete. Must be in the format
   * `projects/locations/agentConnectivityTemplates`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string etag Optional. The etag of the AgentConnectivityTemplate to
   * delete.
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
   * Gets details of a single AgentConnectivityTemplate.
   * (agentConnectivityTemplates.get)
   *
   * @param string $name Required. A name of the AgentConnectivityTemplate to get.
   * Must be in the format `projects/locations/agentConnectivityTemplates`.
   * @param array $optParams Optional parameters.
   * @return AgentConnectivityTemplate
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], AgentConnectivityTemplate::class);
  }
  /**
   * Lists AgentConnectivityTemplates in a given project and location.
   * (agentConnectivityTemplates.listProjectsLocationsAgentConnectivityTemplates)
   *
   * @param string $parent Required. The project and location from which the
   * AgentConnectivityTemplates should be listed, specified in the format
   * `projects/locations`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize Optional. Maximum number of
   * AgentConnectivityTemplates to return per call.
   * @opt_param string pageToken Optional. The value returned by the last
   * `ListAgentConnectivityTemplatesResponse` Indicates that this is a
   * continuation of a prior `ListAgentConnectivityTemplates` call, and that the
   * system should return the next page of data.
   * @opt_param bool returnPartialSuccess Optional. If true, allow partial
   * responses for multi-regional Aggregated List requests. Otherwise if one of
   * the locations is down or unreachable, the Aggregated List request will fail.
   * @return ListAgentConnectivityTemplatesResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsAgentConnectivityTemplates($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListAgentConnectivityTemplatesResponse::class);
  }
  /**
   * Updates the parameters of a single AgentConnectivityTemplate.
   * (agentConnectivityTemplates.patch)
   *
   * @param string $name Identifier. Name of the AgentConnectivityTemplate
   * resource. It matches pattern
   * `projects/locations/agentConnectivityTemplates/`.
   * @param AgentConnectivityTemplate $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask Optional. Field mask is used to specify the
   * fields to be overwritten in the AgentConnectivityTemplate resource by the
   * update. The fields specified in the update_mask are relative to the resource,
   * not the full request. A field will be overwritten if it is in the mask. If
   * the user does not provide a mask then all fields will be overwritten.
   * @return Operation
   * @throws \Google\Service\Exception
   */
  public function patch($name, AgentConnectivityTemplate $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], Operation::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsAgentConnectivityTemplates::class, 'Google_Service_NetworkServices_Resource_ProjectsLocationsAgentConnectivityTemplates');
