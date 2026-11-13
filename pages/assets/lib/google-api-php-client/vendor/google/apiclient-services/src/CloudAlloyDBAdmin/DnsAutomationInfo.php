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

namespace Google\Service\CloudAlloyDBAdmin;

class DnsAutomationInfo extends \Google\Model
{
  /**
   * Default value. This value is unused.
   */
  public const STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * DNS record creation is pending.
   */
  public const STATE_PENDING_CREATE = 'PENDING_CREATE';
  /**
   * DNS record is active.
   */
  public const STATE_ACTIVE = 'ACTIVE';
  /**
   * DNS record deletion is pending.
   */
  public const STATE_PENDING_DELETE = 'PENDING_DELETE';
  /**
   * DNS record creation failed.
   */
  public const STATE_CREATE_FAILED = 'CREATE_FAILED';
  /**
   * DNS record deletion failed.
   */
  public const STATE_DELETE_FAILED = 'DELETE_FAILED';
  /**
   * Output only. The fully qualified domain name of the instance for DNS
   * automation. Example: "...alloydb.goog.". Note: The AUDIT directive is
   * intentionally omitted because this field contains sensitive network
   * topology information.
   *
   * @var string
   */
  public $fullyQualifiedDomainName;
  /**
   * Output only. The state of the DNS automation.
   *
   * @var string
   */
  public $state;

  /**
   * Output only. The fully qualified domain name of the instance for DNS
   * automation. Example: "...alloydb.goog.". Note: The AUDIT directive is
   * intentionally omitted because this field contains sensitive network
   * topology information.
   *
   * @param string $fullyQualifiedDomainName
   */
  public function setFullyQualifiedDomainName($fullyQualifiedDomainName)
  {
    $this->fullyQualifiedDomainName = $fullyQualifiedDomainName;
  }
  /**
   * @return string
   */
  public function getFullyQualifiedDomainName()
  {
    return $this->fullyQualifiedDomainName;
  }
  /**
   * Output only. The state of the DNS automation.
   *
   * Accepted values: STATE_UNSPECIFIED, PENDING_CREATE, ACTIVE, PENDING_DELETE,
   * CREATE_FAILED, DELETE_FAILED
   *
   * @param self::STATE_* $state
   */
  public function setState($state)
  {
    $this->state = $state;
  }
  /**
   * @return self::STATE_*
   */
  public function getState()
  {
    return $this->state;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DnsAutomationInfo::class, 'Google_Service_CloudAlloyDBAdmin_DnsAutomationInfo');
