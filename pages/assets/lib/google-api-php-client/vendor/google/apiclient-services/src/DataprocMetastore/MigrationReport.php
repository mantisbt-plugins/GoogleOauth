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

class MigrationReport extends \Google\Collection
{
  protected $collection_key = 'catalogReports';
  protected $catalogReportsType = CatalogReport::class;
  protected $catalogReportsDataType = 'array';
  protected $summaryType = MigrationSummary::class;
  protected $summaryDataType = '';

  /**
   * Output only. Detailed results for each catalog involved in the migration.
   *
   * @param CatalogReport[] $catalogReports
   */
  public function setCatalogReports($catalogReports)
  {
    $this->catalogReports = $catalogReports;
  }
  /**
   * @return CatalogReport[]
   */
  public function getCatalogReports()
  {
    return $this->catalogReports;
  }
  /**
   * Output only. High-level summary of the migration results.
   *
   * @param MigrationSummary $summary
   */
  public function setSummary(MigrationSummary $summary)
  {
    $this->summary = $summary;
  }
  /**
   * @return MigrationSummary
   */
  public function getSummary()
  {
    return $this->summary;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(MigrationReport::class, 'Google_Service_DataprocMetastore_MigrationReport');
