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

class CatalogReport extends \Google\Model
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
  /**
   * The name of the catalog (format: projects/catalogs).
   *
   * @var string
   */
  public $catalog;
  /**
   * The type of catalog.
   *
   * @var string
   */
  public $catalogType;
  protected $databaseReportsType = DatabaseReport::class;
  protected $databaseReportsDataType = 'map';

  /**
   * The name of the catalog (format: projects/catalogs).
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
   * The type of catalog.
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
   * A map of database names to their respective reports.
   *
   * @param DatabaseReport[] $databaseReports
   */
  public function setDatabaseReports($databaseReports)
  {
    $this->databaseReports = $databaseReports;
  }
  /**
   * @return DatabaseReport[]
   */
  public function getDatabaseReports()
  {
    return $this->databaseReports;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CatalogReport::class, 'Google_Service_DataprocMetastore_CatalogReport');
