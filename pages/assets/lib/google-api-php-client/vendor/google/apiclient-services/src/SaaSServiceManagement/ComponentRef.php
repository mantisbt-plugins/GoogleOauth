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

class ComponentRef extends \Google\Model
{
  /**
   * Optional. Name of the component in composite.Components
   *
   * @var string
   */
  public $component;
  protected $compositeRefType = CompositeRef::class;
  protected $compositeRefDataType = '';
  /**
   * Optional. Revision of the component. If the component does not have a
   * revision, this field will be explicitly set to the revision of the
   * composite ApplicationTemplate.
   *
   * @var string
   */
  public $revision;

  /**
   * Optional. Name of the component in composite.Components
   *
   * @param string $component
   */
  public function setComponent($component)
  {
    $this->component = $component;
  }
  /**
   * @return string
   */
  public function getComponent()
  {
    return $this->component;
  }
  /**
   * Optional. Reference to the Composite ApplicationTemplate.
   *
   * @param CompositeRef $compositeRef
   */
  public function setCompositeRef(CompositeRef $compositeRef)
  {
    $this->compositeRef = $compositeRef;
  }
  /**
   * @return CompositeRef
   */
  public function getCompositeRef()
  {
    return $this->compositeRef;
  }
  /**
   * Optional. Revision of the component. If the component does not have a
   * revision, this field will be explicitly set to the revision of the
   * composite ApplicationTemplate.
   *
   * @param string $revision
   */
  public function setRevision($revision)
  {
    $this->revision = $revision;
  }
  /**
   * @return string
   */
  public function getRevision()
  {
    return $this->revision;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ComponentRef::class, 'Google_Service_SaaSServiceManagement_ComponentRef');
