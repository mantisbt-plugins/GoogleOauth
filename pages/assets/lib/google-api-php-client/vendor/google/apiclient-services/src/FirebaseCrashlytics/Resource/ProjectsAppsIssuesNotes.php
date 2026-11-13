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

use Google\Service\FirebaseCrashlytics\FirebasecrashlyticsEmpty;
use Google\Service\FirebaseCrashlytics\ListNotesResponse;
use Google\Service\FirebaseCrashlytics\Note;

/**
 * The "notes" collection of methods.
 * Typical usage is:
 *  <code>
 *   $firebasecrashlyticsService = new Google\Service\FirebaseCrashlytics(...);
 *   $notes = $firebasecrashlyticsService->projects_apps_issues_notes;
 *  </code>
 */
class ProjectsAppsIssuesNotes extends \Google\Service\Resource
{
  /**
   * Create a new note for an issue. (notes.create)
   *
   * @param string $parent Required. The parent resource where this note will be
   * created. Format: "projects/{project}/apps/{app}/issues/{issue}".
   * @param Note $postBody
   * @param array $optParams Optional parameters.
   * @return Note
   * @throws \Google\Service\Exception
   */
  public function create($parent, Note $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], Note::class);
  }
  /**
   * Delete a note by its name. (notes.delete)
   *
   * @param string $name Required. The name of the note to delete. Format:
   * projects/{project}/apps/{app}/issues/{issue}/notes/{note}.
   * @param array $optParams Optional parameters.
   * @return FirebasecrashlyticsEmpty
   * @throws \Google\Service\Exception
   */
  public function delete($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('delete', [$params], FirebasecrashlyticsEmpty::class);
  }
  /**
   * List all notes for a certain issue, sorted in descending order by timestamp.
   * (notes.listProjectsAppsIssuesNotes)
   *
   * @param string $parent Required. The issue the notes belongs to. Format:
   * "projects/{project}/apps/{app}/issues/{issue}".
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize Optional. The maximum number of notes per page. If
   * omitted, defaults to 10.
   * @opt_param string pageToken Optional. A page token, received from a previous
   * calls.
   * @return ListNotesResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsAppsIssuesNotes($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListNotesResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsAppsIssuesNotes::class, 'Google_Service_FirebaseCrashlytics_Resource_ProjectsAppsIssuesNotes');
