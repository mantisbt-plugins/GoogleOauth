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

class SourceRole extends \Google\Model
{
  protected $targetIdType = InstanceReference::class;
  protected $targetIdDataType = '';

  /**
   * Output only. The target instance paired with this source instance in a
   * blue-green deployment.
   *
   * @param InstanceReference $targetId
   */
  public function setTargetId(InstanceReference $targetId)
  {
    $this->targetId = $targetId;
  }
  /**
   * @return InstanceReference
   */
  public function getTargetId()
  {
    return $this->targetId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SourceRole::class, 'Google_Service_SQLAdmin_SourceRole');
