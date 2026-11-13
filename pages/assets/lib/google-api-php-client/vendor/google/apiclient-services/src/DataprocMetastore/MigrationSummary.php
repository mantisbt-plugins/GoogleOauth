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

class MigrationSummary extends \Google\Collection
{
  protected $collection_key = 'catalogSummaries';
  protected $catalogSummariesType = CatalogSummary::class;
  protected $catalogSummariesDataType = 'array';
  /**
   * Output only. The UTC time when the source metadata read was initiated.
   *
   * @var string
   */
  public $createTime;
  /**
   * Output only. Whether the migration was a dry run.
   *
   * @var bool
   */
  public $dryRun;
  /**
   * Output only. The UTC time when the report was written.
   *
   * @var string
   */
  public $endTime;
  /**
   * Output only. The Dataproc Metastore service name (format:
   * projects/locations/services) on which the migration was executed.
   *
   * @var string
   */
  public $service;

  /**
   * Output only. Summary of results for each catalog involved in the migration.
   *
   * @param CatalogSummary[] $catalogSummaries
   */
  public function setCatalogSummaries($catalogSummaries)
  {
    $this->catalogSummaries = $catalogSummaries;
  }
  /**
   * @return CatalogSummary[]
   */
  public function getCatalogSummaries()
  {
    return $this->catalogSummaries;
  }
  /**
   * Output only. The UTC time when the source metadata read was initiated.
   *
   * @param string $createTime
   */
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  /**
   * @return string
   */
  public function getCreateTime()
  {
    return $this->createTime;
  }
  /**
   * Output only. Whether the migration was a dry run.
   *
   * @param bool $dryRun
   */
  public function setDryRun($dryRun)
  {
    $this->dryRun = $dryRun;
  }
  /**
   * @return bool
   */
  public function getDryRun()
  {
    return $this->dryRun;
  }
  /**
   * Output only. The UTC time when the report was written.
   *
   * @param string $endTime
   */
  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }
  /**
   * @return string
   */
  public function getEndTime()
  {
    return $this->endTime;
  }
  /**
   * Output only. The Dataproc Metastore service name (format:
   * projects/locations/services) on which the migration was executed.
   *
   * @param string $service
   */
  public function setService($service)
  {
    $this->service = $service;
  }
  /**
   * @return string
   */
  public function getService()
  {
    return $this->service;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(MigrationSummary::class, 'Google_Service_DataprocMetastore_MigrationSummary');
