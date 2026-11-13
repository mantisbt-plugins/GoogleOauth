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

namespace Google\Service\AccessContextManager;

class GcpUserAccessBinding extends \Google\Collection
{
  protected $collection_key = 'scopedAccessSettings';
  /**
   * Optional. Access level that a user must have to be granted access. Only one
   * access level is supported, not multiple. This repeated field must have
   * exactly one element. Example:
   * `"accessPolicies/9522/accessLevels/device_trusted"`
   *
   * @var string[]
   */
  public $accessLevels;
  /**
   * Optional. Dry-run access level that is evaluated, but not enforced. Any
   * access denial based on the dry-run policy is logged. Only one access level
   * is supported, not multiple. This list must have exactly one element.
   * Example: `"accessPolicies/9522/accessLevels/device_trusted"`
   *
   * @var string[]
   */
  public $dryRunAccessLevels;
  /**
   * Optional. Immutable. Google Group ID whose users are subject to this
   * binding's restrictions. See "id" in the [Google Workspace Directory API's
   * Group Resource] (https://developers.google.com/admin-
   * sdk/directory/v1/reference/groups#resource). If a group's email address or
   * alias is changed, this resource will continue to point at the changed
   * group. This field does not accept group email addresses or aliases.
   * Example: `"01d520gv4vjcrht"`
   *
   * @var string
   */
  public $groupKey;
  /**
   * Immutable. Assigned by the server during creation. The last segment has an
   * arbitrary length and has only URI unreserved characters (as defined by [RFC
   * 3986 Section 2.3](https://tools.ietf.org/html/rfc3986#section-2.3)). Should
   * not be specified by the client during creation. Example:
   * `"organizations/256/gcpUserAccessBindings/b3-BhcX_Ud5N"`
   *
   * @var string
   */
  public $name;
  protected $principalType = Principal::class;
  protected $principalDataType = '';
  protected $scopedAccessSettingsType = ScopedAccessSettings::class;
  protected $scopedAccessSettingsDataType = 'array';
  protected $sessionSettingsType = SessionSettings::class;
  protected $sessionSettingsDataType = '';

  /**
   * Optional. Access level that a user must have to be granted access. Only one
   * access level is supported, not multiple. This repeated field must have
   * exactly one element. Example:
   * `"accessPolicies/9522/accessLevels/device_trusted"`
   *
   * @param string[] $accessLevels
   */
  public function setAccessLevels($accessLevels)
  {
    $this->accessLevels = $accessLevels;
  }
  /**
   * @return string[]
   */
  public function getAccessLevels()
  {
    return $this->accessLevels;
  }
  /**
   * Optional. Dry-run access level that is evaluated, but not enforced. Any
   * access denial based on the dry-run policy is logged. Only one access level
   * is supported, not multiple. This list must have exactly one element.
   * Example: `"accessPolicies/9522/accessLevels/device_trusted"`
   *
   * @param string[] $dryRunAccessLevels
   */
  public function setDryRunAccessLevels($dryRunAccessLevels)
  {
    $this->dryRunAccessLevels = $dryRunAccessLevels;
  }
  /**
   * @return string[]
   */
  public function getDryRunAccessLevels()
  {
    return $this->dryRunAccessLevels;
  }
  /**
   * Optional. Immutable. Google Group ID whose users are subject to this
   * binding's restrictions. See "id" in the [Google Workspace Directory API's
   * Group Resource] (https://developers.google.com/admin-
   * sdk/directory/v1/reference/groups#resource). If a group's email address or
   * alias is changed, this resource will continue to point at the changed
   * group. This field does not accept group email addresses or aliases.
   * Example: `"01d520gv4vjcrht"`
   *
   * @param string $groupKey
   */
  public function setGroupKey($groupKey)
  {
    $this->groupKey = $groupKey;
  }
  /**
   * @return string
   */
  public function getGroupKey()
  {
    return $this->groupKey;
  }
  /**
   * Immutable. Assigned by the server during creation. The last segment has an
   * arbitrary length and has only URI unreserved characters (as defined by [RFC
   * 3986 Section 2.3](https://tools.ietf.org/html/rfc3986#section-2.3)). Should
   * not be specified by the client during creation. Example:
   * `"organizations/256/gcpUserAccessBindings/b3-BhcX_Ud5N"`
   *
   * @param string $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * Optional. Immutable. The principal that is subject to the access policies
   * in this policy binding.
   *
   * @param Principal $principal
   */
  public function setPrincipal(Principal $principal)
  {
    $this->principal = $principal;
  }
  /**
   * @return Principal
   */
  public function getPrincipal()
  {
    return $this->principal;
  }
  /**
   * Optional. A list of scoped access settings that set this binding's
   * restrictions on a subset of applications.
   *
   * @param ScopedAccessSettings[] $scopedAccessSettings
   */
  public function setScopedAccessSettings($scopedAccessSettings)
  {
    $this->scopedAccessSettings = $scopedAccessSettings;
  }
  /**
   * @return ScopedAccessSettings[]
   */
  public function getScopedAccessSettings()
  {
    return $this->scopedAccessSettings;
  }
  /**
   * Optional. The Google Cloud session length (GCSL) policy for the group key.
   *
   * @param SessionSettings $sessionSettings
   */
  public function setSessionSettings(SessionSettings $sessionSettings)
  {
    $this->sessionSettings = $sessionSettings;
  }
  /**
   * @return SessionSettings
   */
  public function getSessionSettings()
  {
    return $this->sessionSettings;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GcpUserAccessBinding::class, 'Google_Service_AccessContextManager_GcpUserAccessBinding');
