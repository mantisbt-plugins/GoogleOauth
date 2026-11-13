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

namespace Google\Service\DiscoveryEngine;

class GoogleCloudDiscoveryengineV1ProjectCustomerProvidedConfigResourceAccessControlConfig extends \Google\Model
{
  /**
   * Optional. If `true`, the data stores and data connectors shown to Gemini
   * Enterprise users are filtered to those the user has the required resource-
   * level `.get` IAM permission on.
   *
   * @var bool
   */
  public $dataStoreAccessControlEnabled;

  /**
   * Optional. If `true`, the data stores and data connectors shown to Gemini
   * Enterprise users are filtered to those the user has the required resource-
   * level `.get` IAM permission on.
   *
   * @param bool $dataStoreAccessControlEnabled
   */
  public function setDataStoreAccessControlEnabled($dataStoreAccessControlEnabled)
  {
    $this->dataStoreAccessControlEnabled = $dataStoreAccessControlEnabled;
  }
  /**
   * @return bool
   */
  public function getDataStoreAccessControlEnabled()
  {
    return $this->dataStoreAccessControlEnabled;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDiscoveryengineV1ProjectCustomerProvidedConfigResourceAccessControlConfig::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1ProjectCustomerProvidedConfigResourceAccessControlConfig');
