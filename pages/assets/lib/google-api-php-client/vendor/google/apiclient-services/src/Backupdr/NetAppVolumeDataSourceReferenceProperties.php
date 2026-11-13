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

namespace Google\Service\Backupdr;

class NetAppVolumeDataSourceReferenceProperties extends \Google\Model
{
  /**
   * Output only. The source volume represented by this DataSourceReference.
   *
   * @var string
   */
  public $sourceResource;
  /**
   * Output only. The volume creation timestamp.
   *
   * @var string
   */
  public $sourceResourceCreateTime;

  /**
   * Output only. The source volume represented by this DataSourceReference.
   *
   * @param string $sourceResource
   */
  public function setSourceResource($sourceResource)
  {
    $this->sourceResource = $sourceResource;
  }
  /**
   * @return string
   */
  public function getSourceResource()
  {
    return $this->sourceResource;
  }
  /**
   * Output only. The volume creation timestamp.
   *
   * @param string $sourceResourceCreateTime
   */
  public function setSourceResourceCreateTime($sourceResourceCreateTime)
  {
    $this->sourceResourceCreateTime = $sourceResourceCreateTime;
  }
  /**
   * @return string
   */
  public function getSourceResourceCreateTime()
  {
    return $this->sourceResourceCreateTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(NetAppVolumeDataSourceReferenceProperties::class, 'Google_Service_Backupdr_NetAppVolumeDataSourceReferenceProperties');
