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

class TagFilter extends \Google\Model
{
  /**
   * Required. Immutable. The namespaced name of the tag key. Format:
   * `{parent_id}/{tag_key_short_name}` Example: `123456789012/env` (where
   * 123456789012 is the organization ID).
   *
   * @var string
   */
  public $tagKey;
  /**
   * Required. The allowed value for the tag key. A project matches this tag
   * filter if its effective tag value for the given `tag_key` matches this
   * value. Format: short name of the tag value. Example: `production` or
   * `staging`.
   *
   * @var string
   */
  public $tagValue;

  /**
   * Required. Immutable. The namespaced name of the tag key. Format:
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
   * Required. The allowed value for the tag key. A project matches this tag
   * filter if its effective tag value for the given `tag_key` matches this
   * value. Format: short name of the tag value. Example: `production` or
   * `staging`.
   *
   * @param string $tagValue
   */
  public function setTagValue($tagValue)
  {
    $this->tagValue = $tagValue;
  }
  /**
   * @return string
   */
  public function getTagValue()
  {
    return $this->tagValue;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TagFilter::class, 'Google_Service_CloudResourceManager_TagFilter');
