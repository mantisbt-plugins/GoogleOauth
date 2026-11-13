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

namespace Google\Service\Bigquery;

class ExternalVolumeMount extends \Google\Model
{
  /**
   * Optional. The absolute path within the container where the volume should be
   * mounted.
   *
   * @var string
   */
  public $mountPath;
  /**
   * Optional. The absolute path of the source to be mounted, only support
   * Google Cloud Storage bucket or folder now. Eg: gs://bucket-xxx for Google
   * Cloud Storage bucket, gs://bucket-xxx/folder1/folder2 for Google Cloud
   * Storage folder.
   *
   * @var string
   */
  public $sourcePath;

  /**
   * Optional. The absolute path within the container where the volume should be
   * mounted.
   *
   * @param string $mountPath
   */
  public function setMountPath($mountPath)
  {
    $this->mountPath = $mountPath;
  }
  /**
   * @return string
   */
  public function getMountPath()
  {
    return $this->mountPath;
  }
  /**
   * Optional. The absolute path of the source to be mounted, only support
   * Google Cloud Storage bucket or folder now. Eg: gs://bucket-xxx for Google
   * Cloud Storage bucket, gs://bucket-xxx/folder1/folder2 for Google Cloud
   * Storage folder.
   *
   * @param string $sourcePath
   */
  public function setSourcePath($sourcePath)
  {
    $this->sourcePath = $sourcePath;
  }
  /**
   * @return string
   */
  public function getSourcePath()
  {
    return $this->sourcePath;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ExternalVolumeMount::class, 'Google_Service_Bigquery_ExternalVolumeMount');
