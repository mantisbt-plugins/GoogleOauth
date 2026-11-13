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

namespace Google\Service\AndroidPublisher;

class CatalogSdkVersion extends \Google\Model
{
  /**
   * The maximum SDK version required for the app (inclusive).
   *
   * @var string
   */
  public $maxSdkVersion;
  /**
   * The minimum SDK version required for the app (inclusive).
   *
   * @var string
   */
  public $minSdkVersion;
  /**
   * The target SDK version for the app.
   *
   * @var string
   */
  public $targetSdkVersion;

  /**
   * The maximum SDK version required for the app (inclusive).
   *
   * @param string $maxSdkVersion
   */
  public function setMaxSdkVersion($maxSdkVersion)
  {
    $this->maxSdkVersion = $maxSdkVersion;
  }
  /**
   * @return string
   */
  public function getMaxSdkVersion()
  {
    return $this->maxSdkVersion;
  }
  /**
   * The minimum SDK version required for the app (inclusive).
   *
   * @param string $minSdkVersion
   */
  public function setMinSdkVersion($minSdkVersion)
  {
    $this->minSdkVersion = $minSdkVersion;
  }
  /**
   * @return string
   */
  public function getMinSdkVersion()
  {
    return $this->minSdkVersion;
  }
  /**
   * The target SDK version for the app.
   *
   * @param string $targetSdkVersion
   */
  public function setTargetSdkVersion($targetSdkVersion)
  {
    $this->targetSdkVersion = $targetSdkVersion;
  }
  /**
   * @return string
   */
  public function getTargetSdkVersion()
  {
    return $this->targetSdkVersion;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CatalogSdkVersion::class, 'Google_Service_AndroidPublisher_CatalogSdkVersion');
