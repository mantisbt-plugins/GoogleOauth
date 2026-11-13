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

class ObjectStorageStats extends \Google\Model
{
  /**
   * Unspecified cloud provider.
   */
  public const CLOUD_PROVIDER_CLOUD_PROVIDER_UNSPECIFIED = 'CLOUD_PROVIDER_UNSPECIFIED';
  /**
   * Google Cloud Platform.
   */
  public const CLOUD_PROVIDER_GCP = 'GCP';
  /**
   * Amazon Web Services.
   */
  public const CLOUD_PROVIDER_AWS = 'AWS';
  /**
   * Microsoft Azure.
   */
  public const CLOUD_PROVIDER_AZURE = 'AZURE';
  /**
   * Total bytes read from the GCP Lakehouse-internal cache, avoiding an object
   * storage read.
   *
   * @var string
   */
  public $cacheBytesRead;
  /**
   * The cloud provider for this block of statistics.
   *
   * @var string
   */
  public $cloudProvider;
  /**
   * Total bytes read directly from the cloud provider's storage.
   *
   * @var string
   */
  public $objectStorageBytesRead;

  /**
   * Total bytes read from the GCP Lakehouse-internal cache, avoiding an object
   * storage read.
   *
   * @param string $cacheBytesRead
   */
  public function setCacheBytesRead($cacheBytesRead)
  {
    $this->cacheBytesRead = $cacheBytesRead;
  }
  /**
   * @return string
   */
  public function getCacheBytesRead()
  {
    return $this->cacheBytesRead;
  }
  /**
   * The cloud provider for this block of statistics.
   *
   * Accepted values: CLOUD_PROVIDER_UNSPECIFIED, GCP, AWS, AZURE
   *
   * @param self::CLOUD_PROVIDER_* $cloudProvider
   */
  public function setCloudProvider($cloudProvider)
  {
    $this->cloudProvider = $cloudProvider;
  }
  /**
   * @return self::CLOUD_PROVIDER_*
   */
  public function getCloudProvider()
  {
    return $this->cloudProvider;
  }
  /**
   * Total bytes read directly from the cloud provider's storage.
   *
   * @param string $objectStorageBytesRead
   */
  public function setObjectStorageBytesRead($objectStorageBytesRead)
  {
    $this->objectStorageBytesRead = $objectStorageBytesRead;
  }
  /**
   * @return string
   */
  public function getObjectStorageBytesRead()
  {
    return $this->objectStorageBytesRead;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ObjectStorageStats::class, 'Google_Service_Bigquery_ObjectStorageStats');
