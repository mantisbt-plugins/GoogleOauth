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

namespace Google\Service\Firestore\Resource;

use Google\Service\Firestore\FirestoreEmpty;
use Google\Service\Firestore\GoogleFirestoreAdminV1ChangeStream;
use Google\Service\Firestore\GoogleFirestoreAdminV1ListChangeStreamsResponse;

/**
 * The "changeStreams" collection of methods.
 * Typical usage is:
 *  <code>
 *   $firestoreService = new Google\Service\Firestore(...);
 *   $changeStreams = $firestoreService->projects_databases_changeStreams;
 *  </code>
 */
class ProjectsDatabasesChangeStreams extends \Google\Service\Resource
{
  /**
   * Creates a new change stream for the database. (changeStreams.create)
   *
   * @param string $parent Required. The parent database to create the change
   * stream for. Format is `projects/{project}/databases/{database}`.
   * @param GoogleFirestoreAdminV1ChangeStream $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string changeStreamId Required. The ID to use for the change
   * stream, which will become the final component of the change stream's resource
   * name. This value should be 4-63 characters. Valid characters are lowercase
   * letters, numbers, and hyphens. The first character must be a letter, and the
   * last character must be a letter or a number.
   * @return GoogleFirestoreAdminV1ChangeStream
   * @throws \Google\Service\Exception
   */
  public function create($parent, GoogleFirestoreAdminV1ChangeStream $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], GoogleFirestoreAdminV1ChangeStream::class);
  }
  /**
   * Deletes a change stream. (changeStreams.delete)
   *
   * @param string $name Required. The name of the change stream to delete. Format
   * is `projects/{project}/databases/{database}/changeStreams/{change_stream}`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string etag Optional. The etag of the change stream to delete. If
   * this is not the current etag of the change stream, the deletion will fail.
   * @return FirestoreEmpty
   * @throws \Google\Service\Exception
   */
  public function delete($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('delete', [$params], FirestoreEmpty::class);
  }
  /**
   * Gets information about a change stream. (changeStreams.get)
   *
   * @param string $name Required. The name of the change stream to retrieve.
   * Format is
   * `projects/{project}/databases/{database}/changeStreams/{change_stream}`.
   * @param array $optParams Optional parameters.
   * @return GoogleFirestoreAdminV1ChangeStream
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], GoogleFirestoreAdminV1ChangeStream::class);
  }
  /**
   * Lists all change streams in a database.
   * (changeStreams.listProjectsDatabasesChangeStreams)
   *
   * @param string $parent Required. The parent database to list change streams
   * from. Format is `projects/{project}/databases/{database}`.
   * @param array $optParams Optional parameters.
   * @return GoogleFirestoreAdminV1ListChangeStreamsResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsDatabasesChangeStreams($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], GoogleFirestoreAdminV1ListChangeStreamsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsDatabasesChangeStreams::class, 'Google_Service_Firestore_Resource_ProjectsDatabasesChangeStreams');
