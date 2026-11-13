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

namespace Google\Service\CloudComposer;

class ImageVersionRollbackTarget extends \Google\Model
{
  /**
   * Output only. The image version the environment can be rolled back to.
   *
   * @var string
   */
  public $imageVersion;
  /**
   * Output only. The last time when the environment was running this image
   * version.
   *
   * @var string
   */
  public $lastActiveTime;

  /**
   * Output only. The image version the environment can be rolled back to.
   *
   * @param string $imageVersion
   */
  public function setImageVersion($imageVersion)
  {
    $this->imageVersion = $imageVersion;
  }
  /**
   * @return string
   */
  public function getImageVersion()
  {
    return $this->imageVersion;
  }
  /**
   * Output only. The last time when the environment was running this image
   * version.
   *
   * @param string $lastActiveTime
   */
  public function setLastActiveTime($lastActiveTime)
  {
    $this->lastActiveTime = $lastActiveTime;
  }
  /**
   * @return string
   */
  public function getLastActiveTime()
  {
    return $this->lastActiveTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ImageVersionRollbackTarget::class, 'Google_Service_CloudComposer_ImageVersionRollbackTarget');
