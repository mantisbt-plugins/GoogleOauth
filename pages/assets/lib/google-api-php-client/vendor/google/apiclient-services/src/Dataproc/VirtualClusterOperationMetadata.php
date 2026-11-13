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

namespace Google\Service\Dataproc;

class VirtualClusterOperationMetadata extends \Google\Collection
{
  /**
   * VirtualCluster operation type is unknown.
   */
  public const OPERATION_TYPE_VIRTUAL_CLUSTER_OPERATION_TYPE_UNSPECIFIED = 'VIRTUAL_CLUSTER_OPERATION_TYPE_UNSPECIFIED';
  /**
   * Create VirtualCluster operation type.
   */
  public const OPERATION_TYPE_CREATE = 'CREATE';
  /**
   * Update VirtualCluster operation type.
   */
  public const OPERATION_TYPE_UPDATE = 'UPDATE';
  /**
   * Delete VirtualCluster operation type.
   */
  public const OPERATION_TYPE_DELETE = 'DELETE';
  protected $collection_key = 'warnings';
  /**
   * Output only. The time when the operation was created.
   *
   * @var string
   */
  public $createTime;
  /**
   * Output only. Short description of the operation.
   *
   * @var string
   */
  public $description;
  /**
   * Output only. The time when the operation finished.
   *
   * @var string
   */
  public $doneTime;
  /**
   * Output only. Labels associated with the operation.
   *
   * @var string[]
   */
  public $labels;
  /**
   * Output only. The operation type.
   *
   * @var string
   */
  public $operationType;
  /**
   * Output only. Name of the virtual cluster for the operation.
   *
   * @var string
   */
  public $virtualCluster;
  /**
   * Output only. VirtualCluster UUID for the operation.
   *
   * @var string
   */
  public $virtualClusterUuid;
  /**
   * Output only. Warnings encountered during operation execution.
   *
   * @var string[]
   */
  public $warnings;

  /**
   * Output only. The time when the operation was created.
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
   * Output only. Short description of the operation.
   *
   * @param string $description
   */
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /**
   * @return string
   */
  public function getDescription()
  {
    return $this->description;
  }
  /**
   * Output only. The time when the operation finished.
   *
   * @param string $doneTime
   */
  public function setDoneTime($doneTime)
  {
    $this->doneTime = $doneTime;
  }
  /**
   * @return string
   */
  public function getDoneTime()
  {
    return $this->doneTime;
  }
  /**
   * Output only. Labels associated with the operation.
   *
   * @param string[] $labels
   */
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  /**
   * @return string[]
   */
  public function getLabels()
  {
    return $this->labels;
  }
  /**
   * Output only. The operation type.
   *
   * Accepted values: VIRTUAL_CLUSTER_OPERATION_TYPE_UNSPECIFIED, CREATE,
   * UPDATE, DELETE
   *
   * @param self::OPERATION_TYPE_* $operationType
   */
  public function setOperationType($operationType)
  {
    $this->operationType = $operationType;
  }
  /**
   * @return self::OPERATION_TYPE_*
   */
  public function getOperationType()
  {
    return $this->operationType;
  }
  /**
   * Output only. Name of the virtual cluster for the operation.
   *
   * @param string $virtualCluster
   */
  public function setVirtualCluster($virtualCluster)
  {
    $this->virtualCluster = $virtualCluster;
  }
  /**
   * @return string
   */
  public function getVirtualCluster()
  {
    return $this->virtualCluster;
  }
  /**
   * Output only. VirtualCluster UUID for the operation.
   *
   * @param string $virtualClusterUuid
   */
  public function setVirtualClusterUuid($virtualClusterUuid)
  {
    $this->virtualClusterUuid = $virtualClusterUuid;
  }
  /**
   * @return string
   */
  public function getVirtualClusterUuid()
  {
    return $this->virtualClusterUuid;
  }
  /**
   * Output only. Warnings encountered during operation execution.
   *
   * @param string[] $warnings
   */
  public function setWarnings($warnings)
  {
    $this->warnings = $warnings;
  }
  /**
   * @return string[]
   */
  public function getWarnings()
  {
    return $this->warnings;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(VirtualClusterOperationMetadata::class, 'Google_Service_Dataproc_VirtualClusterOperationMetadata');
