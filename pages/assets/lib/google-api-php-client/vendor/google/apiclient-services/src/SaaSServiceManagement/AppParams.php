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

namespace Google\Service\SaaSServiceManagement;

class AppParams extends \Google\Model
{
  /**
   * Optional. Grouping used to construct the name of the AppHub Application.
   * Multiple UnitKinds can specify the same group to use the same Application
   * across their respective units. Corresponds to the app_boundary_id in the
   * ADC composite ApplicationTemplate. Defaults to UnitKind.name
   *
   * @var string
   */
  public $group;
  protected $scopeType = Scope::class;
  protected $scopeDataType = '';

  /**
   * Optional. Grouping used to construct the name of the AppHub Application.
   * Multiple UnitKinds can specify the same group to use the same Application
   * across their respective units. Corresponds to the app_boundary_id in the
   * ADC composite ApplicationTemplate. Defaults to UnitKind.name
   *
   * @param string $group
   */
  public function setGroup($group)
  {
    $this->group = $group;
  }
  /**
   * @return string
   */
  public function getGroup()
  {
    return $this->group;
  }
  /**
   * Optional. Corresponds to the scope in the ADC composite
   * ApplicationTemplate. Defaults to TYPE_REGIONAL.
   *
   * @param Scope $scope
   */
  public function setScope(Scope $scope)
  {
    $this->scope = $scope;
  }
  /**
   * @return Scope
   */
  public function getScope()
  {
    return $this->scope;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AppParams::class, 'Google_Service_SaaSServiceManagement_AppParams');
