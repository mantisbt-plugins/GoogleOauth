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

namespace Google\Service\Dataflow\Resource;

use Google\Service\Dataflow\ConfigStoreSetting;
use Google\Service\Dataflow\DataflowEmpty;
use Google\Service\Dataflow\ListConfigStoreSettingsResponse;
use Google\Service\Dataflow\ResolveConfigStoreSettingRequest;
use Google\Service\Dataflow\ResolveConfigStoreSettingResponse;

/**
 * The "configStoreSettings" collection of methods.
 * Typical usage is:
 *  <code>
 *   $dataflowService = new Google\Service\Dataflow(...);
 *   $configStoreSettings = $dataflowService->projects_locations_configStoreSettings;
 *  </code>
 */
class ProjectsLocationsConfigStoreSettings extends \Google\Service\Resource
{
  /**
   * Creates a new ConfigStoreSetting. (configStoreSettings.create)
   *
   * @param string $parent Required. The parent resource where this setting will
   * be created.
   * @param ConfigStoreSetting $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string configStoreSettingId Required. The ID to use for the
   * setting.
   * @return ConfigStoreSetting
   * @throws \Google\Service\Exception
   */
  public function create($parent, ConfigStoreSetting $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], ConfigStoreSetting::class);
  }
  /**
   * Deletes an existing ConfigStoreSetting. (configStoreSettings.delete)
   *
   * @param string $name Required. The name of the ConfigStoreSetting to delete.
   * @param array $optParams Optional parameters.
   * @return DataflowEmpty
   * @throws \Google\Service\Exception
   */
  public function delete($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('delete', [$params], DataflowEmpty::class);
  }
  /**
   * Gets a ConfigStoreSetting. (configStoreSettings.get)
   *
   * @param string $name Required. The name of the ConfigStoreSetting to retrieve.
   * @param array $optParams Optional parameters.
   * @return ConfigStoreSetting
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], ConfigStoreSetting::class);
  }
  /**
   * Lists ConfigStoreSettings.
   * (configStoreSettings.listProjectsLocationsConfigStoreSettings)
   *
   * @param string $parent Required. The parent resource whose settings are being
   * listed.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize Optional. The maximum number of settings to return.
   * @opt_param string pageToken Optional. A page token, received from a previous
   * `ListConfigStoreSettings` call.
   * @return ListConfigStoreSettingsResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsConfigStoreSettings($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListConfigStoreSettingsResponse::class);
  }
  /**
   * Resolves effective value of a ConfigStoreSetting.
   * (configStoreSettings.resolve)
   *
   * @param string $name Required. The name of the setting to resolve.
   * @param ResolveConfigStoreSettingRequest $postBody
   * @param array $optParams Optional parameters.
   * @return ResolveConfigStoreSettingResponse
   * @throws \Google\Service\Exception
   */
  public function resolve($name, ResolveConfigStoreSettingRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('resolve', [$params], ResolveConfigStoreSettingResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsConfigStoreSettings::class, 'Google_Service_Dataflow_Resource_ProjectsLocationsConfigStoreSettings');
