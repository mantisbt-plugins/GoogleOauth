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

namespace Google\Service\NetworkServices;

class ExtensionBindingTarget extends \Google\Collection
{
  protected $collection_key = 'resources';
  /**
   * Optional. The references to the target resources to which this binding
   * should attach. Exactly one of `resources` or `scope` must be set. For AI
   * Application resources, specify the full resource name in the format:
   * `projects/{project}/locations/{location}/applications/{application}`.
   * Limited to 1 resource.
   *
   * @var string[]
   */
  public $resources;
  protected $scopeType = ExtensionBindingTargetScope::class;
  protected $scopeDataType = '';

  /**
   * Optional. The references to the target resources to which this binding
   * should attach. Exactly one of `resources` or `scope` must be set. For AI
   * Application resources, specify the full resource name in the format:
   * `projects/{project}/locations/{location}/applications/{application}`.
   * Limited to 1 resource.
   *
   * @param string[] $resources
   */
  public function setResources($resources)
  {
    $this->resources = $resources;
  }
  /**
   * @return string[]
   */
  public function getResources()
  {
    return $this->resources;
  }
  /**
   * Optional. Specifies the scope of resources to which this binding should
   * attach. Exactly one of `resources` or `scope` must be set.
   *
   * @param ExtensionBindingTargetScope $scope
   */
  public function setScope(ExtensionBindingTargetScope $scope)
  {
    $this->scope = $scope;
  }
  /**
   * @return ExtensionBindingTargetScope
   */
  public function getScope()
  {
    return $this->scope;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ExtensionBindingTarget::class, 'Google_Service_NetworkServices_ExtensionBindingTarget');
