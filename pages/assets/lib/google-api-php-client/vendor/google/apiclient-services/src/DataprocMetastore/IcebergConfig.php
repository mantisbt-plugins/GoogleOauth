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

namespace Google\Service\DataprocMetastore;

class IcebergConfig extends \Google\Collection
{
  protected $collection_key = 'namespaces';
  /**
   * Required. The target catalog for migrated Iceberg metadata. Format:
   * "projects/{project_id_or_number}/catalogs/{catalog_id}"
   *
   * @var string
   */
  public $catalog;
  /**
   * Required. The list of namespaces to migrate to the Iceberg REST catalog.
   * Use "*" to migrate all namespaces. Note: If Hive tables exist in these
   * namespaces, they will only be migrated if hive_config is also specified.
   *
   * @var string[]
   */
  public $namespaces;

  /**
   * Required. The target catalog for migrated Iceberg metadata. Format:
   * "projects/{project_id_or_number}/catalogs/{catalog_id}"
   *
   * @param string $catalog
   */
  public function setCatalog($catalog)
  {
    $this->catalog = $catalog;
  }
  /**
   * @return string
   */
  public function getCatalog()
  {
    return $this->catalog;
  }
  /**
   * Required. The list of namespaces to migrate to the Iceberg REST catalog.
   * Use "*" to migrate all namespaces. Note: If Hive tables exist in these
   * namespaces, they will only be migrated if hive_config is also specified.
   *
   * @param string[] $namespaces
   */
  public function setNamespaces($namespaces)
  {
    $this->namespaces = $namespaces;
  }
  /**
   * @return string[]
   */
  public function getNamespaces()
  {
    return $this->namespaces;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(IcebergConfig::class, 'Google_Service_DataprocMetastore_IcebergConfig');
