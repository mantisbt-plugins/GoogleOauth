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

class AppStoreAppActiveApks extends \Google\Collection
{
  protected $collection_key = 'activeApkSets';
  protected $activeApkSetsType = AppStoreAppActiveApkSet::class;
  protected $activeApkSetsDataType = 'array';

  /**
   * Required. List specifying which APK sets are distributed together. This
   * list should contain all APKs that you're distributing for this app. Add an
   * entry for each individual installable set of APKs.
   *
   * @param AppStoreAppActiveApkSet[] $activeApkSets
   */
  public function setActiveApkSets($activeApkSets)
  {
    $this->activeApkSets = $activeApkSets;
  }
  /**
   * @return AppStoreAppActiveApkSet[]
   */
  public function getActiveApkSets()
  {
    return $this->activeApkSets;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AppStoreAppActiveApks::class, 'Google_Service_AndroidPublisher_AppStoreAppActiveApks');
