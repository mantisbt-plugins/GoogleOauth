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

namespace Google\Service\CloudRun;

class GoogleCloudRunV2AmbientNetworking extends \Google\Model
{
  /**
   * Unspecified.
   */
  public const AMBIENT_SCOPE_AMBIENT_SCOPE_UNSPECIFIED = 'AMBIENT_SCOPE_UNSPECIFIED';
  /**
   * Regional ambient networking.
   */
  public const AMBIENT_SCOPE_AMBIENT_SCOPE_REGIONAL = 'AMBIENT_SCOPE_REGIONAL';
  /**
   * Global ambient networking.
   */
  public const AMBIENT_SCOPE_AMBIENT_SCOPE_GLOBAL = 'AMBIENT_SCOPE_GLOBAL';
  /**
   * The ambient networking scope of the instance.
   *
   * @var string
   */
  public $ambientScope;
  /**
   * Optional. Whether ambient networking is enabled.
   *
   * @var bool
   */
  public $enabled;

  /**
   * The ambient networking scope of the instance.
   *
   * Accepted values: AMBIENT_SCOPE_UNSPECIFIED, AMBIENT_SCOPE_REGIONAL,
   * AMBIENT_SCOPE_GLOBAL
   *
   * @param self::AMBIENT_SCOPE_* $ambientScope
   */
  public function setAmbientScope($ambientScope)
  {
    $this->ambientScope = $ambientScope;
  }
  /**
   * @return self::AMBIENT_SCOPE_*
   */
  public function getAmbientScope()
  {
    return $this->ambientScope;
  }
  /**
   * Optional. Whether ambient networking is enabled.
   *
   * @param bool $enabled
   */
  public function setEnabled($enabled)
  {
    $this->enabled = $enabled;
  }
  /**
   * @return bool
   */
  public function getEnabled()
  {
    return $this->enabled;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudRunV2AmbientNetworking::class, 'Google_Service_CloudRun_GoogleCloudRunV2AmbientNetworking');
