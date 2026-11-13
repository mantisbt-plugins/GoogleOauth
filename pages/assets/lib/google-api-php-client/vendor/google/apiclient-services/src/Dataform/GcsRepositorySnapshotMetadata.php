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

namespace Google\Service\Dataform;

class GcsRepositorySnapshotMetadata extends \Google\Model
{
  /**
   * Output only. The crc32c checksum of the repository snapshot, big-endian
   * base64 encoded.
   *
   * @var string
   */
  public $crc32cChecksum;
  /**
   * Output only. The generation number of the Cloud Storage object. See
   * https://cloud.google.com/storage/docs/metadata#generation-number.
   *
   * @var string
   */
  public $generation;
  /**
   * Output only. The Google Cloud Storage URI of the repository snapshot.
   *
   * @var string
   */
  public $repositorySnapshotUri;

  /**
   * Output only. The crc32c checksum of the repository snapshot, big-endian
   * base64 encoded.
   *
   * @param string $crc32cChecksum
   */
  public function setCrc32cChecksum($crc32cChecksum)
  {
    $this->crc32cChecksum = $crc32cChecksum;
  }
  /**
   * @return string
   */
  public function getCrc32cChecksum()
  {
    return $this->crc32cChecksum;
  }
  /**
   * Output only. The generation number of the Cloud Storage object. See
   * https://cloud.google.com/storage/docs/metadata#generation-number.
   *
   * @param string $generation
   */
  public function setGeneration($generation)
  {
    $this->generation = $generation;
  }
  /**
   * @return string
   */
  public function getGeneration()
  {
    return $this->generation;
  }
  /**
   * Output only. The Google Cloud Storage URI of the repository snapshot.
   *
   * @param string $repositorySnapshotUri
   */
  public function setRepositorySnapshotUri($repositorySnapshotUri)
  {
    $this->repositorySnapshotUri = $repositorySnapshotUri;
  }
  /**
   * @return string
   */
  public function getRepositorySnapshotUri()
  {
    return $this->repositorySnapshotUri;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GcsRepositorySnapshotMetadata::class, 'Google_Service_Dataform_GcsRepositorySnapshotMetadata');
