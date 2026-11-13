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

namespace Google\Service\CloudWorkstations;

class WorkstationPersistentDirectory extends \Google\Model
{
  /**
   * Optional. The mount path of the persistent directory.
   *
   * @var string
   */
  public $mountPath;
  /**
   * Optional. Size of the persistent directory in GB. If specified in an update
   * request, this is the desired size of the directory.
   *
   * @var int
   */
  public $sizeGb;

  /**
   * Optional. The mount path of the persistent directory.
   *
   * @param string $mountPath
   */
  public function setMountPath($mountPath)
  {
    $this->mountPath = $mountPath;
  }
  /**
   * @return string
   */
  public function getMountPath()
  {
    return $this->mountPath;
  }
  /**
   * Optional. Size of the persistent directory in GB. If specified in an update
   * request, this is the desired size of the directory.
   *
   * @param int $sizeGb
   */
  public function setSizeGb($sizeGb)
  {
    $this->sizeGb = $sizeGb;
  }
  /**
   * @return int
   */
  public function getSizeGb()
  {
    return $this->sizeGb;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(WorkstationPersistentDirectory::class, 'Google_Service_CloudWorkstations_WorkstationPersistentDirectory');
