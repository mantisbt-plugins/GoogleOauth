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

class ObjectAccessControl extends \Google\Model
{
  /**
   * Required. The entity holding the permission, in one of the following forms:
   * * `allUsers` * `allAuthenticatedUsers`
   *
   * @var string
   */
  public $entity;
  /**
   * Required. The role to grant. Acceptable values are: * `READER` - gives read
   * access to the object. * `OWNER` - gives owner access to the object.
   *
   * @var string
   */
  public $role;

  /**
   * Required. The entity holding the permission, in one of the following forms:
   * * `allUsers` * `allAuthenticatedUsers`
   *
   * @param string $entity
   */
  public function setEntity($entity)
  {
    $this->entity = $entity;
  }
  /**
   * @return string
   */
  public function getEntity()
  {
    return $this->entity;
  }
  /**
   * Required. The role to grant. Acceptable values are: * `READER` - gives read
   * access to the object. * `OWNER` - gives owner access to the object.
   *
   * @param string $role
   */
  public function setRole($role)
  {
    $this->role = $role;
  }
  /**
   * @return string
   */
  public function getRole()
  {
    return $this->role;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ObjectAccessControl::class, 'Google_Service_StorageBatchOperations_ObjectAccessControl');
