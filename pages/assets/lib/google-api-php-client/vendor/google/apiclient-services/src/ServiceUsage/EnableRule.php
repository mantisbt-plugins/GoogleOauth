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

namespace Google\Service\ServiceUsage;

class EnableRule extends \Google\Collection
{
  protected $collection_key = 'values';
  /**
   * The names of the catalogs that are enabled. Example: `catalogs/default-
   * cloud-services`.
   *
   * @var string[]
   */
  public $catalogs;
  /**
   * The names of the services that are enabled. Example:
   * `services/storage.googleapis.com`.
   *
   * @var string[]
   */
  public $services;
  /**
   * Deprecated: Use the `services` field instead. The names of the services or
   * service groups that are enabled. Example:
   * `services/storage.googleapis.com`, `groups/googleServices`,
   * `groups/allServices`.
   *
   * @deprecated
   * @var string[]
   */
  public $values;

  /**
   * The names of the catalogs that are enabled. Example: `catalogs/default-
   * cloud-services`.
   *
   * @param string[] $catalogs
   */
  public function setCatalogs($catalogs)
  {
    $this->catalogs = $catalogs;
  }
  /**
   * @return string[]
   */
  public function getCatalogs()
  {
    return $this->catalogs;
  }
  /**
   * The names of the services that are enabled. Example:
   * `services/storage.googleapis.com`.
   *
   * @param string[] $services
   */
  public function setServices($services)
  {
    $this->services = $services;
  }
  /**
   * @return string[]
   */
  public function getServices()
  {
    return $this->services;
  }
  /**
   * Deprecated: Use the `services` field instead. The names of the services or
   * service groups that are enabled. Example:
   * `services/storage.googleapis.com`, `groups/googleServices`,
   * `groups/allServices`.
   *
   * @deprecated
   * @param string[] $values
   */
  public function setValues($values)
  {
    $this->values = $values;
  }
  /**
   * @deprecated
   * @return string[]
   */
  public function getValues()
  {
    return $this->values;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(EnableRule::class, 'Google_Service_ServiceUsage_EnableRule');
