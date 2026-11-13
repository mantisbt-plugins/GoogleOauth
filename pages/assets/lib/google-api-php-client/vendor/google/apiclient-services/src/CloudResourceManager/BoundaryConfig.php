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

namespace Google\Service\CloudResourceManager;

class BoundaryConfig extends \Google\Model
{
  /**
   * This checksum is computed by the server based on the value of other fields,
   * and may be sent on update requests to ensure the client has an up-to-date
   * value before proceeding.
   *
   * @var string
   */
  public $etag;
  /**
   * Identifier. The unique resource name of the BoundaryConfig. Format: -
   * `organizations/{organization}/boundaryConfig` -
   * `folders/{folder}/boundaryConfig` Example:
   * `folders/123456789/boundaryConfig`
   *
   * @var string
   */
  public $name;
  /**
   * Optional. The namespaced name of the tag key. Format:
   * `{parent_id}/{tag_key_short_name}` Example: `123456789012/env` (where
   * 123456789012 is the organization ID).
   *
   * @var string
   */
  public $tagKey;
  /**
   * Output only. The most recent time this BoundaryConfig was modified.
   *
   * @var string
   */
  public $updateTime;

  /**
   * This checksum is computed by the server based on the value of other fields,
   * and may be sent on update requests to ensure the client has an up-to-date
   * value before proceeding.
   *
   * @param string $etag
   */
  public function setEtag($etag)
  {
    $this->etag = $etag;
  }
  /**
   * @return string
   */
  public function getEtag()
  {
    return $this->etag;
  }
  /**
   * Identifier. The unique resource name of the BoundaryConfig. Format: -
   * `organizations/{organization}/boundaryConfig` -
   * `folders/{folder}/boundaryConfig` Example:
   * `folders/123456789/boundaryConfig`
   *
   * @param string $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * Optional. The namespaced name of the tag key. Format:
   * `{parent_id}/{tag_key_short_name}` Example: `123456789012/env` (where
   * 123456789012 is the organization ID).
   *
   * @param string $tagKey
   */
  public function setTagKey($tagKey)
  {
    $this->tagKey = $tagKey;
  }
  /**
   * @return string
   */
  public function getTagKey()
  {
    return $this->tagKey;
  }
  /**
   * Output only. The most recent time this BoundaryConfig was modified.
   *
   * @param string $updateTime
   */
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  /**
   * @return string
   */
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(BoundaryConfig::class, 'Google_Service_CloudResourceManager_BoundaryConfig');
