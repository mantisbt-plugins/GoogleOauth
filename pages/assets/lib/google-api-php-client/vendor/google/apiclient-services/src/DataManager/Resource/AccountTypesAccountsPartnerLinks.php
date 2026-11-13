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

use Google\Service\DataManager\DatamanagerEmpty;
use Google\Service\DataManager\PartnerLink;
use Google\Service\DataManager\SearchPartnerLinksResponse;

/**
 * The "partnerLinks" collection of methods.
 * Typical usage is:
 *  <code>
 *   $datamanagerService = new Google\Service\DataManager(...);
 *   $partnerLinks = $datamanagerService->accountTypes_accounts_partnerLinks;
 *  </code>
 */
class AccountTypesAccountsPartnerLinks extends \Google\Service\Resource
{
  /**
   * (partnerLinks.create)
   *
   * @param string $parent
   * @param PartnerLink $postBody
   * @param array $optParams Optional parameters.
   * @return PartnerLink
   * @throws \Google\Service\Exception
   */
  public function create($parent, PartnerLink $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], PartnerLink::class);
  }
  /**
   * (partnerLinks.delete)
   *
   * @param string $name
   * @param array $optParams Optional parameters.
   * @return DatamanagerEmpty
   * @throws \Google\Service\Exception
   */
  public function delete($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('delete', [$params], DatamanagerEmpty::class);
  }
  /**
   * (partnerLinks.search)
   *
   * @param string $parent
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter
   * @opt_param int pageSize
   * @opt_param string pageToken
   * @return SearchPartnerLinksResponse
   * @throws \Google\Service\Exception
   */
  public function search($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('search', [$params], SearchPartnerLinksResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AccountTypesAccountsPartnerLinks::class, 'Google_Service_DataManager_Resource_AccountTypesAccountsPartnerLinks');
