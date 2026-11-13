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

namespace Google\Service\CloudDataplex\Resource;

use Google\Service\CloudDataplex\GoogleCloudDataplexV1DataDomainBinding;
use Google\Service\CloudDataplex\GoogleCloudDataplexV1ListDataDomainBindingsResponse;
use Google\Service\CloudDataplex\GoogleLongrunningOperation;

/**
 * The "bindings" collection of methods.
 * Typical usage is:
 *  <code>
 *   $dataplexService = new Google\Service\CloudDataplex(...);
 *   $bindings = $dataplexService->projects_locations_dataDomains_bindings;
 *  </code>
 */
class ProjectsLocationsDataDomainsBindings extends \Google\Service\Resource
{
  /**
   * Creates a DataDomainBinding resource. (bindings.create)
   *
   * @param string $parent Required. The resource name of the parent DataDomain: p
   * rojects/{project_id_or_number}/locations/{location_id}/dataDomains/{data_doma
   * in_id}
   * @param GoogleCloudDataplexV1DataDomainBinding $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string dataDomainBindingId Optional. DataDomainBinding identifier.
   * * Must contain only lowercase letters, numbers and hyphens. * Must start with
   * a letter. * Must be between 1-63 characters. * Must end with a number or a
   * letter. * Must be unique within the parent DataDomain. If not provided, a
   * system-generated UUID will be used.
   * @opt_param bool validateOnly Optional. Only validate the request, but do not
   * perform mutations.
   * @return GoogleLongrunningOperation
   * @throws \Google\Service\Exception
   */
  public function create($parent, GoogleCloudDataplexV1DataDomainBinding $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], GoogleLongrunningOperation::class);
  }
  /**
   * Deletes a DataDomainBinding resource. (bindings.delete)
   *
   * @param string $name Required. The resource name of the DataDomainBinding: pro
   * jects/{project_id_or_number}/locations/{location_id}/dataDomains/{data_domain
   * _id}/bindings/{binding_id}
   * @param array $optParams Optional parameters.
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
   * Retrieves a DataDomainBinding resource. (bindings.get)
   *
   * @param string $name Required. The resource name of the DataDomainBinding: pro
   * jects/{project_id_or_number}/locations/{location_id}/dataDomains/{data_domain
   * _id}/bindings/{binding_id}
   * @param array $optParams Optional parameters.
   * @return GoogleCloudDataplexV1DataDomainBinding
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], GoogleCloudDataplexV1DataDomainBinding::class);
  }
  /**
   * Lists DataDomainBinding resources under a DataDomain.
   * (bindings.listProjectsLocationsDataDomainsBindings)
   *
   * @param string $parent Required. The resource name of the parent DataDomain: p
   * rojects/{project_id_or_number}/locations/{location_id}/dataDomains/{data_doma
   * in_id}
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. Filter request.
   * @opt_param string orderBy Optional. Order by fields for the result.
   * @opt_param int pageSize Optional. Maximum number of DataDomainBindings to
   * return. The service may return fewer. If unspecified, at most 50 bindings
   * will be returned. The maximum value is 100; values above 100 will be coerced
   * to 100.
   * @opt_param string pageToken Optional. Page token received from a previous
   * ListDataDomainBindings call.
   * @return GoogleCloudDataplexV1ListDataDomainBindingsResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsDataDomainsBindings($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], GoogleCloudDataplexV1ListDataDomainBindingsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsDataDomainsBindings::class, 'Google_Service_CloudDataplex_Resource_ProjectsLocationsDataDomainsBindings');
