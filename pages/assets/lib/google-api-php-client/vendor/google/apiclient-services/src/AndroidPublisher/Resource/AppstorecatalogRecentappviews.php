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

namespace Google\Service\AndroidPublisher\Resource;

use Google\Service\AndroidPublisher\RecentAppView;

/**
 * The "recentappviews" collection of methods.
 * Typical usage is:
 *  <code>
 *   $androidpublisherService = new Google\Service\AndroidPublisher(...);
 *   $recentappviews = $androidpublisherService->appstorecatalog_recentappviews;
 *  </code>
 */
class AppstorecatalogRecentappviews extends \Google\Service\Resource
{
  /**
   * Returns metadata about a recently updated app. (recentappviews.get)
   *
   * @param string $appStorePackageName Required. The package name of the app
   * store on behalf of which the request is made.
   * @param string $playAppPackageName Required. The package name of the requested
   * Play app.
   * @param array $optParams Optional parameters.
   * @return RecentAppView
   * @throws \Google\Service\Exception
   */
  public function get($appStorePackageName, $playAppPackageName, $optParams = [])
  {
    $params = ['appStorePackageName' => $appStorePackageName, 'playAppPackageName' => $playAppPackageName];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], RecentAppView::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AppstorecatalogRecentappviews::class, 'Google_Service_AndroidPublisher_Resource_AppstorecatalogRecentappviews');
