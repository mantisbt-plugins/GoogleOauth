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

namespace Google\Service\Container;

class AutoprovisioningRestrictionConfig extends \Google\Collection
{
  /**
   * Default value. Permission check mode is unspecified.
   */
  public const SERVICE_ACCOUNT_PERMISSION_CHECK_PERMISSION_CHECK_MODE_UNSPECIFIED = 'PERMISSION_CHECK_MODE_UNSPECIFIED';
  /**
   * Service account permission check is disabled.
   */
  public const SERVICE_ACCOUNT_PERMISSION_CHECK_DISABLED = 'DISABLED';
  /**
   * Service account permission check is enabled.
   */
  public const SERVICE_ACCOUNT_PERMISSION_CHECK_ENABLED = 'ENABLED';
  protected $collection_key = 'authorizedServiceAccounts';
  /**
   * Optional. Contains the list of service accounts allowed for autoprovisioned
   * node pools / Custom ComputeClasses.
   *
   * @var string[]
   */
  public $authorizedServiceAccounts;
  /**
   * Optional. Controls whether service account validation checks are enforced
   * for autoprovisioning.
   *
   * @var string
   */
  public $serviceAccountPermissionCheck;

  /**
   * Optional. Contains the list of service accounts allowed for autoprovisioned
   * node pools / Custom ComputeClasses.
   *
   * @param string[] $authorizedServiceAccounts
   */
  public function setAuthorizedServiceAccounts($authorizedServiceAccounts)
  {
    $this->authorizedServiceAccounts = $authorizedServiceAccounts;
  }
  /**
   * @return string[]
   */
  public function getAuthorizedServiceAccounts()
  {
    return $this->authorizedServiceAccounts;
  }
  /**
   * Optional. Controls whether service account validation checks are enforced
   * for autoprovisioning.
   *
   * Accepted values: PERMISSION_CHECK_MODE_UNSPECIFIED, DISABLED, ENABLED
   *
   * @param self::SERVICE_ACCOUNT_PERMISSION_CHECK_* $serviceAccountPermissionCheck
   */
  public function setServiceAccountPermissionCheck($serviceAccountPermissionCheck)
  {
    $this->serviceAccountPermissionCheck = $serviceAccountPermissionCheck;
  }
  /**
   * @return self::SERVICE_ACCOUNT_PERMISSION_CHECK_*
   */
  public function getServiceAccountPermissionCheck()
  {
    return $this->serviceAccountPermissionCheck;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AutoprovisioningRestrictionConfig::class, 'Google_Service_Container_AutoprovisioningRestrictionConfig');
