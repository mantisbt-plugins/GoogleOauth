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

use Google\Service\AndroidPublisher\ListRecentUpdateEventsResponse;

/**
 * The "recentupdateevents" collection of methods.
 * Typical usage is:
 *  <code>
 *   $androidpublisherService = new Google\Service\AndroidPublisher(...);
 *   $recentupdateevents = $androidpublisherService->appstorecatalog_recentupdateevents;
 *  </code>
 */
class AppstorecatalogRecentupdateevents extends \Google\Service\Resource
{
  /**
   * Lists update events for eligible apps in the given time range.
   * (recentupdateevents.listAppstorecatalogRecentupdateevents)
   *
   * @param string $appStorePackageName Required. The package name of the app
   * store on behalf of which the request is made.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string endTime Required. The end time of the range (exclusive).
   * @opt_param int pageSize Optional. The maximum number of update events to
   * return. The service may return fewer than this value. If unspecified, at most
   * 100 update events will be returned. The maximum value is 1000; values above
   * 1000 will be coerced to 1000.
   * @opt_param string pageToken Optional. A page token, received from a previous
   * `ListRecentUpdateEvents` call. Provide this to retrieve the subsequent page.
   * When paginating, all other parameters provided to `ListRecentUpdateEvents`
   * must match the call that provided the page token.
   * @opt_param string startTime Required. The start time of the range
   * (inclusive).
   * @return ListRecentUpdateEventsResponse
   * @throws \Google\Service\Exception
   */
  public function listAppstorecatalogRecentupdateevents($appStorePackageName, $optParams = [])
  {
    $params = ['appStorePackageName' => $appStorePackageName];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListRecentUpdateEventsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AppstorecatalogRecentupdateevents::class, 'Google_Service_AndroidPublisher_Resource_AppstorecatalogRecentupdateevents');
