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

namespace Google\Service\SQLAdmin;

class WorkloadCapturesListResponse extends \Google\Collection
{
  protected $collection_key = 'workloadCaptures';
  /**
   * This is always `sql#workloadCapturesList`.
   *
   * @var string
   */
  public $kind;
  protected $workloadCapturesType = WorkloadCapture::class;
  protected $workloadCapturesDataType = 'array';

  /**
   * This is always `sql#workloadCapturesList`.
   *
   * @param string $kind
   */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /**
   * @return string
   */
  public function getKind()
  {
    return $this->kind;
  }
  /**
   * List of captured workloads for the instance.
   *
   * @param WorkloadCapture[] $workloadCaptures
   */
  public function setWorkloadCaptures($workloadCaptures)
  {
    $this->workloadCaptures = $workloadCaptures;
  }
  /**
   * @return WorkloadCapture[]
   */
  public function getWorkloadCaptures()
  {
    return $this->workloadCaptures;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(WorkloadCapturesListResponse::class, 'Google_Service_SQLAdmin_WorkloadCapturesListResponse');
