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

class ExtensionBindingTargetScope extends \Google\Collection
{
  protected $collection_key = 'resourceTypes';
  /**
   * Required. The parent resource that defines the scope, in the format
   * `projects/{project_number}`. When the scope is a project, the binding
   * applies to the resources that meet all of the following conditions: * The
   * resource belongs to the specified project. * The resource is in the same
   * location as the `ExtensionBinding`. * The resource type is listed in
   * `resource_types`.
   *
   * @var string
   */
  public $parent;
  /**
   * Required. The types of resources to which the binding should attach.
   * Limited to 1 resource type.
   *
   * @var string[]
   */
  public $resourceTypes;

  /**
   * Required. The parent resource that defines the scope, in the format
   * `projects/{project_number}`. When the scope is a project, the binding
   * applies to the resources that meet all of the following conditions: * The
   * resource belongs to the specified project. * The resource is in the same
   * location as the `ExtensionBinding`. * The resource type is listed in
   * `resource_types`.
   *
   * @param string $parent
   */
  public function setParent($parent)
  {
    $this->parent = $parent;
  }
  /**
   * @return string
   */
  public function getParent()
  {
    return $this->parent;
  }
  /**
   * Required. The types of resources to which the binding should attach.
   * Limited to 1 resource type.
   *
   * @param string[] $resourceTypes
   */
  public function setResourceTypes($resourceTypes)
  {
    $this->resourceTypes = $resourceTypes;
  }
  /**
   * @return string[]
   */
  public function getResourceTypes()
  {
    return $this->resourceTypes;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ExtensionBindingTargetScope::class, 'Google_Service_NetworkServices_ExtensionBindingTargetScope');
