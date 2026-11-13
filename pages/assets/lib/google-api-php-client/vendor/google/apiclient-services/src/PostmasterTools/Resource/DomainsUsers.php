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

namespace Google\Service\PostmasterTools\Resource;

use Google\Service\PostmasterTools\CreateUserRequest;
use Google\Service\PostmasterTools\GmailpostmastertoolsEmpty;
use Google\Service\PostmasterTools\ListUsersResponse;
use Google\Service\PostmasterTools\User;

/**
 * The "users" collection of methods.
 * Typical usage is:
 *  <code>
 *   $gmailpostmastertoolsService = new Google\Service\PostmasterTools(...);
 *   $users = $gmailpostmastertoolsService->domains_users;
 *  </code>
 */
class DomainsUsers extends \Google\Service\Resource
{
  /**
   * [Developer Preview](https://developers.google.com/workspace/preview): Creates
   * a user, who has access to a domain. Returns INVALID_ARGUMENT if a user is not
   * provided. (users.create)
   *
   * @param string $parent Required. The parent resource where this user will be
   * created. Format: domains/{domain}
   * @param CreateUserRequest $postBody
   * @param array $optParams Optional parameters.
   * @return User
   * @throws \Google\Service\Exception
   */
  public function create($parent, CreateUserRequest $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], User::class);
  }
  /**
   * [Developer Preview](https://developers.google.com/workspace/preview): Deletes
   * a user from a domain. Returns NOT_FOUND if the user does not exist.
   * (users.delete)
   *
   * @param string $name Required. The resource name of the user to delete.
   * Format: domains/{domain}/users/{user}
   * @param array $optParams Optional parameters.
   * @return GmailpostmastertoolsEmpty
   * @throws \Google\Service\Exception
   */
  public function delete($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('delete', [$params], GmailpostmastertoolsEmpty::class);
  }
  /**
   * [Developer Preview](https://developers.google.com/workspace/preview):
   * Retrieves detailed information about a user that has access to a domain.
   * Returns NOT_FOUND if the user does not exist. (users.get)
   *
   * @param string $name Required. The resource name of the user to retrieve.
   * Format: `domains/{domain}/users/{user}`
   * @param array $optParams Optional parameters.
   * @return User
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], User::class);
  }
  /**
   * [Developer Preview](https://developers.google.com/workspace/preview): Lists
   * the users that have access to a domain. (users.listDomainsUsers)
   *
   * @param string $parent Required. The parent resource name for which to list
   * users. Format: `domains/{domain}`
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize Optional. Requested page size. Server may return
   * fewer users than requested. If unspecified, the default value for this field
   * is 10. The maximum value for this field is 200.
   * @opt_param string pageToken Optional. The next_page_token value returned from
   * a previous List request, if any.
   * @return ListUsersResponse
   * @throws \Google\Service\Exception
   */
  public function listDomainsUsers($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListUsersResponse::class);
  }
  /**
   * [Developer Preview](https://developers.google.com/workspace/preview): Updates
   * a user for a domain. Only Owners and Admins can execute this RPC, only a
   * user's domain permission will be allowed to be updated. Returns NOT_FOUND if
   * the user does not exist. Returns INVALID_ARGUMENT if a permission is not
   * provided or is PERMISSION_UNSPECIFIED, NONE, or OWNER. (users.patch)
   *
   * @param string $name Identifier. The resource name of the user. Format:
   * users/{user} Note: {user} is the user's email address.
   * @param User $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask The list of fields to update.
   * @return User
   * @throws \Google\Service\Exception
   */
  public function patch($name, User $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], User::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DomainsUsers::class, 'Google_Service_PostmasterTools_Resource_DomainsUsers');
