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

use Google\Service\Aiplatform\GoogleApiHttpBody;

/**
 * The "responses" collection of methods.
 * Typical usage is:
 *  <code>
 *   $aiplatformService = new Google\Service\Aiplatform(...);
 *   $responses = $aiplatformService->projects_locations_publishers_v1_responses;
 *  </code>
 */
class ProjectsLocationsPublishersV1Responses extends \Google\Service\Resource
{
  /**
   * Forwards arbitrary HTTP requests for both streaming and non-streaming cases.
   * To use this method, invoke_route_prefix must be set to allow the paths that
   * will be specified in the request. (responses.compact)
   *
   * @param string $endpoint Required. The name of the Endpoint requested to serve
   * the prediction. Format:
   * `projects/{project}/locations/{location}/endpoints/{endpoint}`
   * @param GoogleApiHttpBody $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string deployedModelId ID of the DeployedModel that serves the
   * invoke request.
   * @return GoogleApiHttpBody
   * @throws \Google\Service\Exception
   */
  public function compact($endpoint, GoogleApiHttpBody $postBody, $optParams = [])
  {
    $params = ['endpoint' => $endpoint, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('compact', [$params], GoogleApiHttpBody::class);
  }
  /**
   * Deletes the response from the endpoint. (responses.delete)
   *
   * @param string $name Required. The name of the Response resource to be
   * deleted. Format: `projects/{project}/locations/{location}/endpoints/{endpoint
   * }/responses/{response}`
   * @param array $optParams Optional parameters.
   * @return GoogleApiHttpBody
   * @throws \Google\Service\Exception
   */
  public function delete($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('delete', [$params], GoogleApiHttpBody::class);
  }
  /**
   * Gets the response from the endpoint. (responses.get)
   *
   * @param string $name Required. The name of the Response resource. Format: `pro
   * jects/{project}/locations/{location}/endpoints/{endpoint}/responses/{response
   * }`
   * @param array $optParams Optional parameters.
   * @return GoogleApiHttpBody
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], GoogleApiHttpBody::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsPublishersV1Responses::class, 'Google_Service_Aiplatform_Resource_ProjectsLocationsPublishersV1Responses');
