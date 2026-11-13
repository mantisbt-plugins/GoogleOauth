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

namespace Google\Service\GoogleHealthAPI\Resource;

use Google\Service\GoogleHealthAPI\HttpBody;
use Google\Service\GoogleHealthAPI\ManifestParams;

/**
 * The "m" collection of methods.
 * Typical usage is:
 *  <code>
 *   $healthService = new Google\Service\GoogleHealthAPI(...);
 *   $m = $healthService->shl_m;
 *  </code>
 */
class ShlM extends \Google\Service\Resource
{
  /**
   * Forward a manifest request for a given SHL (m.getShlManifest)
   *
   * @param string $externalShlId Required. External ID mapping to a
   * ShlSharedLinkCapabilityToken object See https://docs.google.com/document/d/1P
   * ch20pxJHRbsaMxp0EYgs3ZU0Gu7QTUznk8LhvbQvfY/edit?tab=t.0#heading=h.17wg41voij6
   * q
   * @param ManifestParams $postBody
   * @param array $optParams Optional parameters.
   * @return HttpBody
   * @throws \Google\Service\Exception
   */
  public function getShlManifest($externalShlId, ManifestParams $postBody, $optParams = [])
  {
    $params = ['externalShlId' => $externalShlId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('getShlManifest', [$params], HttpBody::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ShlM::class, 'Google_Service_GoogleHealthAPI_Resource_ShlM');
