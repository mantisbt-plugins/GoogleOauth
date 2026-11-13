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

namespace Google\Service\FirebaseCrashlytics;

class Browser extends \Google\Model
{
  /**
   * Browser name.
   *
   * @var string
   */
  public $browser;
  /**
   * Browser name and version number. Formatted to be suitable for passing to
   * BrowserFilter.
   *
   * @var string
   */
  public $displayName;
  /**
   * Browser display version number.
   *
   * @var string
   */
  public $displayVersion;

  /**
   * Browser name.
   *
   * @param string $browser
   */
  public function setBrowser($browser)
  {
    $this->browser = $browser;
  }
  /**
   * @return string
   */
  public function getBrowser()
  {
    return $this->browser;
  }
  /**
   * Browser name and version number. Formatted to be suitable for passing to
   * BrowserFilter.
   *
   * @param string $displayName
   */
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /**
   * @return string
   */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /**
   * Browser display version number.
   *
   * @param string $displayVersion
   */
  public function setDisplayVersion($displayVersion)
  {
    $this->displayVersion = $displayVersion;
  }
  /**
   * @return string
   */
  public function getDisplayVersion()
  {
    return $this->displayVersion;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Browser::class, 'Google_Service_FirebaseCrashlytics_Browser');
