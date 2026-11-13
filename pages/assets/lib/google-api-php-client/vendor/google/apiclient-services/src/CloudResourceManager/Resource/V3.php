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

namespace Google\Service\CloudResourceManager\Resource;

use Google\Service\CloudResourceManager\FetchResourceSemanticsResponse;

/**
 * The "v3" collection of methods.
 * Typical usage is:
 *  <code>
 *   $cloudresourcemanagerService = new Google\Service\CloudResourceManager(...);
 *   $v3 = $cloudresourcemanagerService->v3;
 *  </code>
 */
class V3 extends \Google\Service\Resource
{
  /**
   * Returns the semantics associated with the specified resource.
   * (v3.fetchResourceSemantics)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string fullResourceName Required. The full resource name of the
   * GCP resource to retrieve semantics for. Examples:
   * "//compute.googleapis.com/projects/123/zones/us-central1-a/instances/my-
   * instance" "//storage.googleapis.com/projects/_/buckets/my_bucket"
   * @return FetchResourceSemanticsResponse
   * @throws \Google\Service\Exception
   */
  public function fetchResourceSemantics($optParams = [])
  {
    $params = [];
    $params = array_merge($params, $optParams);
    return $this->call('fetchResourceSemantics', [$params], FetchResourceSemanticsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(V3::class, 'Google_Service_CloudResourceManager_Resource_V3');
