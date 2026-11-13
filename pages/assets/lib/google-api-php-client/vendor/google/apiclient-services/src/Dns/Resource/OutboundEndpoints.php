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

namespace Google\Service\Dns\Resource;

use Google\Service\Dns\GoogleLongrunningOperation;
use Google\Service\Dns\ListOutboundEndpointsResponse;
use Google\Service\Dns\OutboundEndpoint;

/**
 * The "outboundEndpoints" collection of methods.
 * Typical usage is:
 *  <code>
 *   $dnsService = new Google\Service\Dns(...);
 *   $outboundEndpoints = $dnsService->outboundEndpoints;
 *  </code>
 */
class OutboundEndpoints extends \Google\Service\Resource
{
  /**
   * Creates a new Outbound Endpoint. (outboundEndpoints.create)
   *
   * @param string $parent Required. The parent project and location where this
   * OutboundEndpoint will be created. Format:
   * projects/{project}/locations/{location}
   * @param OutboundEndpoint $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string clientOperationId For mutating operation requests only. An
   * optional identifier specified by the client. Must be unique for operation
   * resources in the Operations collection.
   * @opt_param string outboundEndpointId Required. The ID to use for the
   * OutboundEndpoint, which will become the final component of the
   * OutboundEndpoint's resource name.
   * @opt_param string requestId Optional. An optional request ID to identify
   * requests.
   * @return GoogleLongrunningOperation
   * @throws \Google\Service\Exception
   */
  public function create($parent, OutboundEndpoint $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], GoogleLongrunningOperation::class);
  }
  /**
   * Deletes a previously created Outbound Endpoint. (outboundEndpoints.delete)
   *
   * @param string $name Required. The name of the OutboundEndpoint to delete.
   * Format:
   * projects/{project}/locations/{location}/outboundEndpoints/{outboundEndpoint}
   * @param array $optParams Optional parameters.
   *
   * @opt_param string clientOperationId For mutating operation requests only. An
   * optional identifier specified by the client. Must be unique for operation
   * resources in the Operations collection.
   * @opt_param string requestId Optional. An optional request ID to identify
   * requests.
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
   * Fetches the representation of an existing Outbound Endpoint.
   * (outboundEndpoints.get)
   *
   * @param string $name Required. The name of the OutboundEndpoint to retrieve.
   * Format:
   * projects/{project}/locations/{location}/outboundEndpoints/{outboundEndpoint}
   * @param array $optParams Optional parameters.
   *
   * @opt_param string clientOperationId For mutating operation requests only. An
   * optional identifier specified by the client. Must be unique for operation
   * resources in the Operations collection.
   * @return OutboundEndpoint
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], OutboundEndpoint::class);
  }
  /**
   * Enumerates all Outbound Endpoints associated with a project.
   * (outboundEndpoints.listOutboundEndpoints)
   *
   * @param string $parent Required. The parent project and location from which to
   * list resources. Format: projects/{project}/locations/{location}
   * @param array $optParams Optional parameters.
   *
   * @opt_param string clientOperationId
   * @opt_param int pageSize Optional. The maximum number of results to return.
   * @opt_param string pageToken Optional. A page token received from a previous
   * List call.
   * @return ListOutboundEndpointsResponse
   * @throws \Google\Service\Exception
   */
  public function listOutboundEndpoints($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListOutboundEndpointsResponse::class);
  }
  /**
   * Updates an existing Outbound Endpoint. (outboundEndpoints.patch)
   *
   * @param string $name Identifier. The resource name of the OutboundEndpoint.
   * Format: `projects/{project}/locations/{location}/outboundEndpoints/{outboundE
   * ndpoint}`
   * @param OutboundEndpoint $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string clientOperationId For mutating operation requests only. An
   * optional identifier specified by the client. Must be unique for operation
   * resources in the Operations collection.
   * @opt_param string requestId Optional. An optional request ID to identify
   * requests.
   * @opt_param string updateMask Required. The list of fields to be updated.
   * @return GoogleLongrunningOperation
   * @throws \Google\Service\Exception
   */
  public function patch($name, OutboundEndpoint $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], GoogleLongrunningOperation::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(OutboundEndpoints::class, 'Google_Service_Dns_Resource_OutboundEndpoints');
