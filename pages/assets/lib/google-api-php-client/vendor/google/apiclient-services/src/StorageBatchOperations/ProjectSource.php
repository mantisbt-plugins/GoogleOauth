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

class ProjectSource extends \Google\Model
{
  protected $bucketFiltersType = Expr::class;
  protected $bucketFiltersDataType = '';
  /**
   * Optional. The unique identifier of a dry run job to use as the baseline for
   * the current job. Specifying this ID ensures the job is executed against the
   * same set of objects validated during the dry run. The value corresponds to
   * the {job_id} segment of the resource name:
   * `projects/{project_id}/locations/{location}/jobs/{job_id}`.
   *
   * @var string
   */
  public $dryRunJobId;
  /**
   * Required. The resource identifier of the Storage Insights dataset
   * configuration. Storage batch operations uses the latest snapshot from this
   * dataset as the source to list and filter target objects. Format: `projects/
   * {project_id}/locations/{location}/datasetConfigs/{dataset_config}`.
   *
   * @var string
   */
  public $insightsDatasetConfig;
  protected $objectFiltersType = Expr::class;
  protected $objectFiltersDataType = '';
  /**
   * Required. Project name of the objects to be transformed. e.g. projects/my-
   * project or projects/123456.
   *
   * @var string
   */
  public $project;
  /**
   * Output only. The snapshot time used by the job to read the Storage Insights
   * dataset for bucket and object discovery. This field is populated by the
   * service and reflects the exact timestamp of the dataset snapshot used.
   *
   * @var string
   */
  public $snapshotTime;
  protected $targetLocationsType = TargetLocations::class;
  protected $targetLocationsDataType = '';

  /**
   * Optional. Filters expressed in Common Expression Language (CEL) to apply to
   * buckets to identify buckets with objects to be transformed.
   *
   * @param Expr $bucketFilters
   */
  public function setBucketFilters(Expr $bucketFilters)
  {
    $this->bucketFilters = $bucketFilters;
  }
  /**
   * @return Expr
   */
  public function getBucketFilters()
  {
    return $this->bucketFilters;
  }
  /**
   * Optional. The unique identifier of a dry run job to use as the baseline for
   * the current job. Specifying this ID ensures the job is executed against the
   * same set of objects validated during the dry run. The value corresponds to
   * the {job_id} segment of the resource name:
   * `projects/{project_id}/locations/{location}/jobs/{job_id}`.
   *
   * @param string $dryRunJobId
   */
  public function setDryRunJobId($dryRunJobId)
  {
    $this->dryRunJobId = $dryRunJobId;
  }
  /**
   * @return string
   */
  public function getDryRunJobId()
  {
    return $this->dryRunJobId;
  }
  /**
   * Required. The resource identifier of the Storage Insights dataset
   * configuration. Storage batch operations uses the latest snapshot from this
   * dataset as the source to list and filter target objects. Format: `projects/
   * {project_id}/locations/{location}/datasetConfigs/{dataset_config}`.
   *
   * @param string $insightsDatasetConfig
   */
  public function setInsightsDatasetConfig($insightsDatasetConfig)
  {
    $this->insightsDatasetConfig = $insightsDatasetConfig;
  }
  /**
   * @return string
   */
  public function getInsightsDatasetConfig()
  {
    return $this->insightsDatasetConfig;
  }
  /**
   * Optional. Filters expressed in Common Expression Language (CEL) to apply to
   * objects to identify objects to be transformed.
   *
   * @param Expr $objectFilters
   */
  public function setObjectFilters(Expr $objectFilters)
  {
    $this->objectFilters = $objectFilters;
  }
  /**
   * @return Expr
   */
  public function getObjectFilters()
  {
    return $this->objectFilters;
  }
  /**
   * Required. Project name of the objects to be transformed. e.g. projects/my-
   * project or projects/123456.
   *
   * @param string $project
   */
  public function setProject($project)
  {
    $this->project = $project;
  }
  /**
   * @return string
   */
  public function getProject()
  {
    return $this->project;
  }
  /**
   * Output only. The snapshot time used by the job to read the Storage Insights
   * dataset for bucket and object discovery. This field is populated by the
   * service and reflects the exact timestamp of the dataset snapshot used.
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
  /**
   * Optional. Specifies the Cloud Storage locations to include in the job. If
   * provided, only buckets and objects within these locations will be
   * discovered from the Storage Insights dataset as configured in the
   * `insights_dataset_config`. If omitted, the job will discover buckets and
   * objects from all locations configured in the `insights_dataset_config`.
   *
   * @param TargetLocations $targetLocations
   */
  public function setTargetLocations(TargetLocations $targetLocations)
  {
    $this->targetLocations = $targetLocations;
  }
  /**
   * @return TargetLocations
   */
  public function getTargetLocations()
  {
    return $this->targetLocations;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectSource::class, 'Google_Service_StorageBatchOperations_ProjectSource');
