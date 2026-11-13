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

namespace Google\Service\DataManager\Resource;

use Google\Service\DataManager\ListUserListGlobalLicensesResponse;
use Google\Service\DataManager\UserListGlobalLicense;

/**
 * The "userListGlobalLicenses" collection of methods.
 * Typical usage is:
 *  <code>
 *   $datamanagerService = new Google\Service\DataManager(...);
 *   $userListGlobalLicenses = $datamanagerService->accountTypes_accounts_userListGlobalLicenses;
 *  </code>
 */
class AccountTypesAccountsUserListGlobalLicenses extends \Google\Service\Resource
{
  /**
   * (userListGlobalLicenses.create)
   *
   * @param string $parent
   * @param UserListGlobalLicense $postBody
   * @param array $optParams Optional parameters.
   * @return UserListGlobalLicense
   * @throws \Google\Service\Exception
   */
  public function create($parent, UserListGlobalLicense $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], UserListGlobalLicense::class);
  }
  /**
   * (userListGlobalLicenses.get)
   *
   * @param string $name
   * @param array $optParams Optional parameters.
   * @return UserListGlobalLicense
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], UserListGlobalLicense::class);
  }
  /**
   * (userListGlobalLicenses.listAccountTypesAccountsUserListGlobalLicenses)
   *
   * @param string $parent
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter
   * @opt_param int pageSize
   * @opt_param string pageToken
   * @return ListUserListGlobalLicensesResponse
   * @throws \Google\Service\Exception
   */
  public function listAccountTypesAccountsUserListGlobalLicenses($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListUserListGlobalLicensesResponse::class);
  }
  /**
   * (userListGlobalLicenses.patch)
   *
   * @param string $name
   * @param UserListGlobalLicense $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask
   * @return UserListGlobalLicense
   * @throws \Google\Service\Exception
   */
  public function patch($name, UserListGlobalLicense $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], UserListGlobalLicense::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AccountTypesAccountsUserListGlobalLicenses::class, 'Google_Service_DataManager_Resource_AccountTypesAccountsUserListGlobalLicenses');
