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

namespace Google\Service\FirebaseCrashlytics\Resource;

use Google\Service\FirebaseCrashlytics\DeleteUserCrashReportsResponse;

/**
 * The "users" collection of methods.
 * Typical usage is:
 *  <code>
 *   $firebasecrashlyticsService = new Google\Service\FirebaseCrashlytics(...);
 *   $users = $firebasecrashlyticsService->projects_apps_users;
 *  </code>
 */
class ProjectsAppsUsers extends \Google\Service\Resource
{
  /**
   * Enqueues a request to permanently remove crash reports associated with the
   * specified user. All reports belonging to the specified user will be deleted
   * typically within 24 hours of receiving the crash report.
   * (users.deleteCrashReports)
   *
   * @param string $name Required. Resource name for user reports, in the format:
   * projects/ PROJECT_IDENTIFIER/apps/APP_ID/users/USER_ID/crashReports -
   * PROJECT_IDENTIFIER: The Firebase project's project number (recommended) or
   * its project ID. Learn more about using project identifiers in Google's [AIP
   * 2510 standard](https://google.aip.dev/cloud/2510). - APP_ID: The globally
   * unique, Firebase-assigned identifier for the Firebase App. This is not your
   * package name or bundle ID. Learn how to [find your app
   * ID](https://firebase.google.com/support/faq/#find-app-id). - USER_ID: The
   * user ID set using the Crashlytics SDK. Learn how to [set user
   * identifiers](https://firebase.google.com/docs/crashlytics/customize-crash-
   * reports#set-user-ids).
   * @param array $optParams Optional parameters.
   * @return DeleteUserCrashReportsResponse
   * @throws \Google\Service\Exception
   */
  public function deleteCrashReports($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('deleteCrashReports', [$params], DeleteUserCrashReportsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsAppsUsers::class, 'Google_Service_FirebaseCrashlytics_Resource_ProjectsAppsUsers');
