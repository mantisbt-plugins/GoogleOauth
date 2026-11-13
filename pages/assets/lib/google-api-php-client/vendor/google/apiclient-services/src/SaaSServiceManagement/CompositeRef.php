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

class CompositeRef extends \Google\Model
{
  /**
   * Required. Reference to the ApplicationTemplate resource.
   *
   * @var string
   */
  public $applicationTemplate;
  /**
   * Optional. Revision of the ApplicationTemplate to use. Changes to revision
   * will trigger manual resynchronization. If empty, ApplicationTemplate will
   * be ignored.
   *
   * @var string
   */
  public $revision;
  /**
   * Output only. Reference to on-going AppTemplate import and replication
   * operation (i.e. the operation_id for the long-running operation). This
   * field is opaque for external usage.
   *
   * @var string
   */
  public $syncOperation;

  /**
   * Required. Reference to the ApplicationTemplate resource.
   *
   * @param string $applicationTemplate
   */
  public function setApplicationTemplate($applicationTemplate)
  {
    $this->applicationTemplate = $applicationTemplate;
  }
  /**
   * @return string
   */
  public function getApplicationTemplate()
  {
    return $this->applicationTemplate;
  }
  /**
   * Optional. Revision of the ApplicationTemplate to use. Changes to revision
   * will trigger manual resynchronization. If empty, ApplicationTemplate will
   * be ignored.
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
  /**
   * Output only. Reference to on-going AppTemplate import and replication
   * operation (i.e. the operation_id for the long-running operation). This
   * field is opaque for external usage.
   *
   * @param string $syncOperation
   */
  public function setSyncOperation($syncOperation)
  {
    $this->syncOperation = $syncOperation;
  }
  /**
   * @return string
   */
  public function getSyncOperation()
  {
    return $this->syncOperation;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CompositeRef::class, 'Google_Service_SaaSServiceManagement_CompositeRef');
