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

class Manifest extends \Google\Model
{
  /**
   * Required. Specify the manifest file location. The format of manifest
   * location can be an absolute path to the object in the format of
   * `gs://bucket_name/path/object_name`. For example,
   * `gs://bucket_name/path/object_name.csv`. Alternatively, you can specify an
   * absolute path with a single wildcard character in the file name, for
   * example `gs://bucket_name/path/file_name*.csv`. If the manifest location is
   * specified with a wildcard, objects in all manifest files matching the
   * pattern will be acted upon. The manifest is a CSV file, uploaded to Cloud
   * Storage, that contains one object or a list of objects that you want to
   * process. Each row in the manifest must include the `bucket` and `name` of
   * the object. You can optionally specify the `generation` of the object. If
   * you don't specify the `generation`, the current version of the object is
   * used. You can optionally include a header row with the following format:
   * `bucket,name,generation`. For example, bucket,name,generation
   * bucket_1,object_1,generation_1 bucket_1,object_2,generation_2
   * bucket_1,object_3,generation_3 Note: The manifest file must specify only
   * objects within the bucket provided to the job. Rows referencing objects in
   * other buckets are ignored.
   *
   * @var string
   */
  public $manifestLocation;

  /**
   * Required. Specify the manifest file location. The format of manifest
   * location can be an absolute path to the object in the format of
   * `gs://bucket_name/path/object_name`. For example,
   * `gs://bucket_name/path/object_name.csv`. Alternatively, you can specify an
   * absolute path with a single wildcard character in the file name, for
   * example `gs://bucket_name/path/file_name*.csv`. If the manifest location is
   * specified with a wildcard, objects in all manifest files matching the
   * pattern will be acted upon. The manifest is a CSV file, uploaded to Cloud
   * Storage, that contains one object or a list of objects that you want to
   * process. Each row in the manifest must include the `bucket` and `name` of
   * the object. You can optionally specify the `generation` of the object. If
   * you don't specify the `generation`, the current version of the object is
   * used. You can optionally include a header row with the following format:
   * `bucket,name,generation`. For example, bucket,name,generation
   * bucket_1,object_1,generation_1 bucket_1,object_2,generation_2
   * bucket_1,object_3,generation_3 Note: The manifest file must specify only
   * objects within the bucket provided to the job. Rows referencing objects in
   * other buckets are ignored.
   *
   * @param string $manifestLocation
   */
  public function setManifestLocation($manifestLocation)
  {
    $this->manifestLocation = $manifestLocation;
  }
  /**
   * @return string
   */
  public function getManifestLocation()
  {
    return $this->manifestLocation;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Manifest::class, 'Google_Service_StorageBatchOperations_Manifest');
