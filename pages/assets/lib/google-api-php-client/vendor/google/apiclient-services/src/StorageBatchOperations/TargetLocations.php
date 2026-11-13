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

namespace Google\Service\StorageBatchOperations;

class TargetLocations extends \Google\Collection
{
  protected $collection_key = 'locations';
  /**
   * Required. REQUIRED. A list of Cloud Storage locations (e.g., `us-central1`)
   * to include in the job. If `snapshot_time` is omitted, the job automatically
   * defaults to the most recent snapshot timestamp that is successfully
   * populated in BOTH the `object_attributes_view` and `bucket_attributes_view`
   * across ALL specified locations. For details on Storage Insights dataset
   * snapshots and views, see:
   * https://docs.cloud.google.com/storage/docs/insights/dataset-tables-and-
   * schemas#schema
   *
   * @var string[]
   */
  public $locations;
  /**
   * Optional. OPTIONAL. The exact Storage Insights snapshot timestamp to use
   * for the job compatible with the RFC 3339 format (e.g.,
   * `2024-01-02T03:04:05Z`). If specified, this exact snapshot must exist in
   * BOTH the `object_attributes_view` and `bucket_attributes_view` for every
   * location listed in `locations`. If the snapshot is missing from either view
   * in any of the locations, the job fails.
   *
   * @var string
   */
  public $snapshotTime;

  /**
   * Required. REQUIRED. A list of Cloud Storage locations (e.g., `us-central1`)
   * to include in the job. If `snapshot_time` is omitted, the job automatically
   * defaults to the most recent snapshot timestamp that is successfully
   * populated in BOTH the `object_attributes_view` and `bucket_attributes_view`
   * across ALL specified locations. For details on Storage Insights dataset
   * snapshots and views, see:
   * https://docs.cloud.google.com/storage/docs/insights/dataset-tables-and-
   * schemas#schema
   *
   * @param string[] $locations
   */
  public function setLocations($locations)
  {
    $this->locations = $locations;
  }
  /**
   * @return string[]
   */
  public function getLocations()
  {
    return $this->locations;
  }
  /**
   * Optional. OPTIONAL. The exact Storage Insights snapshot timestamp to use
   * for the job compatible with the RFC 3339 format (e.g.,
   * `2024-01-02T03:04:05Z`). If specified, this exact snapshot must exist in
   * BOTH the `object_attributes_view` and `bucket_attributes_view` for every
   * location listed in `locations`. If the snapshot is missing from either view
   * in any of the locations, the job fails.
   *
   * @param string $snapshotTime
   */
  public function setSnapshotTime($snapshotTime)
  {
    $this->snapshotTime = $snapshotTime;
  }
  /**
   * @return string
   */
  public function getSnapshotTime()
  {
    return $this->snapshotTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TargetLocations::class, 'Google_Service_StorageBatchOperations_TargetLocations');
