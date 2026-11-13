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

namespace Google\Service\SQLAdmin\Resource;

use Google\Service\SQLAdmin\BlueGreenDeployment;
use Google\Service\SQLAdmin\ListBlueGreenDeploymentsResponse;
use Google\Service\SQLAdmin\Operation;
use Google\Service\SQLAdmin\SwitchoverBlueGreenDeploymentRequest;

/**
 * The "blueGreenDeployments" collection of methods.
 * Typical usage is:
 *  <code>
 *   $sqladminService = new Google\Service\SQLAdmin(...);
 *   $blueGreenDeployments = $sqladminService->blueGreenDeployments;
 *  </code>
 */
class BlueGreenDeployments extends \Google\Service\Resource
{
  /**
   * Creates a blue-green deployment under a given project and location.
   * (blueGreenDeployments.create)
   *
   * @param string $parent Required. The parent resource where this blue-green
   * deployment will be created. Format: projects/{project}/locations/{location}
   * @param BlueGreenDeployment $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string blueGreenDeploymentId Required. The ID to use for the blue-
   * green deployment, which will become the final component of the deployment's
   * resource name. The ID must be unique within the given project and location
   * and between 2-63 characters.
   * @return Operation
   * @throws \Google\Service\Exception
   */
  public function create($parent, BlueGreenDeployment $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], Operation::class);
  }
  /**
   * Deletes a blue-green deployment. (blueGreenDeployments.delete)
   *
   * @param string $name Required. The name of the blue-green deployment to
   * delete. Format: projects/{project}/locations/{location}/blueGreenDeployments/
   * {blue_green_deployment}
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool deleteOldSource Optional. If set to true, and the switchover
   * is complete, this deletes the old source instance along with the deployment.
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
   * Retrieves a blue-green deployment resource under a given project and
   * location. (blueGreenDeployments.get)
   *
   * @param string $name Required. The name of the blue-green deployment to
   * retrieve. Format: projects/{project}/locations/{location}/blueGreenDeployment
   * s/{blue_green_deployment}
   * @param array $optParams Optional parameters.
   *
   * @opt_param string view Optional. Specifies whether to return the basic or
   * detailed view of the resource in the response.
   * @return BlueGreenDeployment
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], BlueGreenDeployment::class);
  }
  /**
   * Lists blue-green deployments under a given project.
   * (blueGreenDeployments.listBlueGreenDeployments)
   *
   * @param string $parent Required. The parent resource whose blue-green
   * deployments are to be listed. Format: projects/{project}/locations/{location}
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. A filter expression that filters the
   * results.
   * @opt_param string orderBy Optional. A comma-separated list of fields to order
   * the results by.
   * @opt_param int pageSize Optional. The maximum number of deployments to
   * return. The service may return fewer deployments than this value. If
   * unspecified, at most 500 deployments are returned. The maximum value is 1000;
   * values above 1000 are treated as 1000.
   * @opt_param string pageToken Optional. A page token, received from a previous
   * `ListBlueGreenDeployments` call. Provide this to retrieve the subsequent
   * page.
   * @return ListBlueGreenDeploymentsResponse
   * @throws \Google\Service\Exception
   */
  public function listBlueGreenDeployments($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListBlueGreenDeploymentsResponse::class);
  }
  /**
   * Switches over to green instance for a blue-green deployment.
   * (blueGreenDeployments.switchover)
   *
   * @param string $name Required. The name of the blue-green deployment to switch
   * over. Format: projects/{project}/locations/{location}/blueGreenDeployments/{b
   * lue_green_deployment}
   * @param SwitchoverBlueGreenDeploymentRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Operation
   * @throws \Google\Service\Exception
   */
  public function switchover($name, SwitchoverBlueGreenDeploymentRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('switchover', [$params], Operation::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(BlueGreenDeployments::class, 'Google_Service_SQLAdmin_Resource_BlueGreenDeployments');
