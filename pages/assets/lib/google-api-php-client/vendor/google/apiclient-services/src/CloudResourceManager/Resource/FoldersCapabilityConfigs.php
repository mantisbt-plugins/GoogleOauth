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

use Google\Service\CloudResourceManager\CapabilityConfig;
use Google\Service\CloudResourceManager\ListCapabilityConfigsResponse;
use Google\Service\CloudResourceManager\Operation;

/**
 * The "capabilityConfigs" collection of methods.
 * Typical usage is:
 *  <code>
 *   $cloudresourcemanagerService = new Google\Service\CloudResourceManager(...);
 *   $capabilityConfigs = $cloudresourcemanagerService->folders_capabilityConfigs;
 *  </code>
 */
class FoldersCapabilityConfigs extends \Google\Service\Resource
{
  /**
   * Creates a CapabilityConfig under a parent Organization, Folder or Project.
   * Creating a CapabilityConfig triggers the creation of a Management Project if
   * one is not supplied. (capabilityConfigs.create)
   *
   * @param string $parent Required. The parent resource under which the
   * CapabilityConfig will be created. Format: `organizations/{organization_id}`
   * or `folders/{folder_id}` or `projects/{project_number}`
   * @param CapabilityConfig $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string capabilityConfigId Required. The user-assigned ID for the
   * CapabilityConfig, which will become the final component of the
   * CapabilityConfig's resource name. Must be unique within the parent resource.
   * It must be 6 to 30 lowercase ASCII letters, digits, or hyphens. It must start
   * with a letter. Trailing hyphens are prohibited. Example: `my-capability-
   * config-123`
   * @return Operation
   * @throws \Google\Service\Exception
   */
  public function create($parent, CapabilityConfig $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], Operation::class);
  }
  /**
   * Deletes the CapabilityConfig identified by the specified `name` (for example,
   * `folders/123456789/capabilityConfigs/my-capability-config`).
   * (capabilityConfigs.delete)
   *
   * @param string $name Required. The name of the CapabilityConfig to delete.
   * Format: `organizations/{organization}/capabilityConfigs/{capabilityConfig}`
   * or, `folders/{folder}/capabilityConfigs/{capabilityConfig}` or,
   * `projects/{project}/capabilityConfigs/{capabilityConfig}`
   * @param array $optParams Optional parameters.
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
   * Retrieves the CapabilityConfig identified by the specified `name` (for
   * example, `folders/123456789/capabilityConfigs/my-capability-config`).
   * (capabilityConfigs.get)
   *
   * @param string $name Required. The name of the CapabilityConfig to retrieve.
   * Format: `organizations/{organization}/capabilityConfigs/{capabilityConfig}`
   * or, `folders/{folder}/capabilityConfigs/{capabilityConfig}` or,
   * `projects/{project}/capabilityConfigs/{capabilityConfig}` Example:
   * `folders/123456789/capabilityConfigs/my-capability-config`
   * @param array $optParams Optional parameters.
   * @return CapabilityConfig
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], CapabilityConfig::class);
  }
  /**
   * Lists CapabilityConfigs that are direct children of the specified
   * organization, folder or project resource.
   * (capabilityConfigs.listFoldersCapabilityConfigs)
   *
   * @param string $parent Required. The name of the parent resource whose
   * CapabilityConfigs are being listed. Format: `organizations/{organization_id}`
   * or `folders/{folder_id}`
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize Optional. The maximum number of CapabilityConfigs to
   * return in the response. The service may return fewer CapabilityConfigs than
   * requested. If unspecified, at most 100 CapabilityConfigs will be returned.
   * The maximum value is 100; values above 100 will be coerced to 100.
   * @opt_param string pageToken Optional. A pagination token received from a
   * previous call to `ListCapabilityConfigs` that indicates from where listing
   * should continue. Provide this to retrieve the subsequent page.
   * @return ListCapabilityConfigsResponse
   * @throws \Google\Service\Exception
   */
  public function listFoldersCapabilityConfigs($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListCapabilityConfigsResponse::class);
  }
  /**
   * Updates the `display_name`, `types` and `boundaries` of the CapabilityConfig
   * identified by the specified `name` (for example,
   * `folders/123456789/capabilityConfigs/my-capability-config`).
   * (capabilityConfigs.patch)
   *
   * @param string $name Identifier. The unique resource name of the
   * CapabilityConfig. Format:
   * `organizations/{organization}/capabilityConfigs/{capabilityConfig}` or,
   * `folders/{folder}/capabilityConfigs/{capabilityConfig}` or,
   * `projects/{project}/capabilityConfigs/{capabilityConfig}`
   * @param CapabilityConfig $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask Optional. The list of fields to update.
   * @return Operation
   * @throws \Google\Service\Exception
   */
  public function patch($name, CapabilityConfig $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], Operation::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(FoldersCapabilityConfigs::class, 'Google_Service_CloudResourceManager_Resource_FoldersCapabilityConfigs');
