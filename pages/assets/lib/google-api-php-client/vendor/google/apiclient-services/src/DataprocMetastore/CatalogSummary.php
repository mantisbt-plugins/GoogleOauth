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

class CatalogSummary extends \Google\Collection
{
  /**
   * The catalog type is unspecified.
   */
  public const CATALOG_TYPE_CATALOG_TYPE_UNSPECIFIED = 'CATALOG_TYPE_UNSPECIFIED';
  /**
   * BigLake Metastore Hive catalog.
   */
  public const CATALOG_TYPE_HIVE = 'HIVE';
  /**
   * BigLake Metastore Iceberg REST catalog.
   */
  public const CATALOG_TYPE_ICEBERG = 'ICEBERG';
  protected $collection_key = 'databaseSummaries';
  /**
   * Output only. The catalog resource name (format: projects/catalogs).
   *
   * @var string
   */
  public $catalog;
  /**
   * Output only. The type of the catalog.
   *
   * @var string
   */
  public $catalogType;
  protected $databaseSummariesType = DatabaseSummary::class;
  protected $databaseSummariesDataType = 'array';

  /**
   * Output only. The catalog resource name (format: projects/catalogs).
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
   * Output only. The type of the catalog.
   *
   * Accepted values: CATALOG_TYPE_UNSPECIFIED, HIVE, ICEBERG
   *
   * @param self::CATALOG_TYPE_* $catalogType
   */
  public function setCatalogType($catalogType)
  {
    $this->catalogType = $catalogType;
  }
  /**
   * @return self::CATALOG_TYPE_*
   */
  public function getCatalogType()
  {
    return $this->catalogType;
  }
  /**
   * Output only. Summary of results for each database in the catalog.
   *
   * @param DatabaseSummary[] $databaseSummaries
   */
  public function setDatabaseSummaries($databaseSummaries)
  {
    $this->databaseSummaries = $databaseSummaries;
  }
  /**
   * @return DatabaseSummary[]
   */
  public function getDatabaseSummaries()
  {
    return $this->databaseSummaries;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CatalogSummary::class, 'Google_Service_DataprocMetastore_CatalogSummary');
