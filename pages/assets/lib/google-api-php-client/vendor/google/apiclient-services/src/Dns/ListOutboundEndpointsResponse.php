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

namespace Google\Service\Dns;

class ListOutboundEndpointsResponse extends \Google\Collection
{
  protected $collection_key = 'unreachable';
  /**
   * A token to retrieve the next page of results. Set to empty if there are no
   * remaining results.
   *
   * @var string
   */
  public $nextPageToken;
  protected $outboundEndpointsType = OutboundEndpoint::class;
  protected $outboundEndpointsDataType = 'array';
  /**
   * Unordered list. The resource names of the unreachable locations. Format:
   * `projects/{project}/locations/{location}`
   *
   * @var string[]
   */
  public $unreachable;

  /**
   * A token to retrieve the next page of results. Set to empty if there are no
   * remaining results.
   *
   * @param string $nextPageToken
   */
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  /**
   * @return string
   */
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
  /**
   * The list of OutboundEndpoints.
   *
   * @param OutboundEndpoint[] $outboundEndpoints
   */
  public function setOutboundEndpoints($outboundEndpoints)
  {
    $this->outboundEndpoints = $outboundEndpoints;
  }
  /**
   * @return OutboundEndpoint[]
   */
  public function getOutboundEndpoints()
  {
    return $this->outboundEndpoints;
  }
  /**
   * Unordered list. The resource names of the unreachable locations. Format:
   * `projects/{project}/locations/{location}`
   *
   * @param string[] $unreachable
   */
  public function setUnreachable($unreachable)
  {
    $this->unreachable = $unreachable;
  }
  /**
   * @return string[]
   */
  public function getUnreachable()
  {
    return $this->unreachable;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ListOutboundEndpointsResponse::class, 'Google_Service_Dns_ListOutboundEndpointsResponse');
