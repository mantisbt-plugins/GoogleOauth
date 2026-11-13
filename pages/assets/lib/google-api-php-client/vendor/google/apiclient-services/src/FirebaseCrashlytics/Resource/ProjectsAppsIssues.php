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

use Google\Service\FirebaseCrashlytics\BatchUpdateIssuesRequest;
use Google\Service\FirebaseCrashlytics\BatchUpdateIssuesResponse;
use Google\Service\FirebaseCrashlytics\Issue;

/**
 * The "issues" collection of methods.
 * Typical usage is:
 *  <code>
 *   $firebasecrashlyticsService = new Google\Service\FirebaseCrashlytics(...);
 *   $issues = $firebasecrashlyticsService->projects_apps_issues;
 *  </code>
 */
class ProjectsAppsIssues extends \Google\Service\Resource
{
  /**
   * Change the state of a group of issues. This method is not atomic, so partial
   * failures can occur. In the event of a partial failure, the request will fail
   * and you will need to call `GetIssue` to see which issues were not updated.
   * (issues.batchUpdate)
   *
   * @param string $parent Required. The parent resource shared by all issues
   * being updated. Format: projects/{project}/apps/{app}. If this is set, the
   * parent field in the UpdateIssueRequest messages must either be empty or match
   * this field.
   * @param BatchUpdateIssuesRequest $postBody
   * @param array $optParams Optional parameters.
   * @return BatchUpdateIssuesResponse
   * @throws \Google\Service\Exception
   */
  public function batchUpdate($parent, BatchUpdateIssuesRequest $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('batchUpdate', [$params], BatchUpdateIssuesResponse::class);
  }
  /**
   * Retrieve an issue. (issues.get)
   *
   * @param string $name Required. The name of the issue to retrieve. Format:
   * "projects/{project}/apps/{app}/issues/{issue}".
   * @param array $optParams Optional parameters.
   * @return Issue
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], Issue::class);
  }
  /**
   * Change the state of an issue. (issues.patch)
   *
   * @param string $name Required. Output only. Immutable. Identifier. The name of
   * the issue resource. Format: "projects/{project}/apps/{app}/issues/{issue}".
   * @param Issue $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask Optional. The list of Issue fields to update.
   * Currently only "state" is mutable.
   * @return Issue
   * @throws \Google\Service\Exception
   */
  public function patch($name, Issue $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], Issue::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsAppsIssues::class, 'Google_Service_FirebaseCrashlytics_Resource_ProjectsAppsIssues');
