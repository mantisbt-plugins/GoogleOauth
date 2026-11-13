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

namespace Google\Service\AgentRegistry;

class GcsSource extends \Google\Model
{
  /**
   * Optional. Cloud Storage object generation ID. If not specified, the latest
   * generation is used.
   *
   * @var string
   */
  public $generation;
  /**
   * Required. Cloud Storage object URI. Format:
   * `gs://{bucket_name}/{object_name}`
   *
   * @var string
   */
  public $uri;

  /**
   * Optional. Cloud Storage object generation ID. If not specified, the latest
   * generation is used.
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
   * Required. Cloud Storage object URI. Format:
   * `gs://{bucket_name}/{object_name}`
   *
   * @param string $uri
   */
  public function setUri($uri)
  {
    $this->uri = $uri;
  }
  /**
   * @return string
   */
  public function getUri()
  {
    return $this->uri;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GcsSource::class, 'Google_Service_AgentRegistry_GcsSource');
