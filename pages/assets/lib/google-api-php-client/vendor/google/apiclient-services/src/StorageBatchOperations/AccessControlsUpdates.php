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

class AccessControlsUpdates extends \Google\Collection
{
  protected $collection_key = 'removeEntities';
  protected $grantsType = ObjectAccessControl::class;
  protected $grantsDataType = 'array';
  /**
   * Optional. Entities for which all grants should be removed. An entity can't
   * be in both `grants` and `remove_entities`.
   *
   * @var string[]
   */
  public $removeEntities;

  /**
   * Optional. Grants to add or update. If a grant for same entity exists, its
   * role is updated.
   *
   * @param ObjectAccessControl[] $grants
   */
  public function setGrants($grants)
  {
    $this->grants = $grants;
  }
  /**
   * @return ObjectAccessControl[]
   */
  public function getGrants()
  {
    return $this->grants;
  }
  /**
   * Optional. Entities for which all grants should be removed. An entity can't
   * be in both `grants` and `remove_entities`.
   *
   * @param string[] $removeEntities
   */
  public function setRemoveEntities($removeEntities)
  {
    $this->removeEntities = $removeEntities;
  }
  /**
   * @return string[]
   */
  public function getRemoveEntities()
  {
    return $this->removeEntities;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AccessControlsUpdates::class, 'Google_Service_StorageBatchOperations_AccessControlsUpdates');
