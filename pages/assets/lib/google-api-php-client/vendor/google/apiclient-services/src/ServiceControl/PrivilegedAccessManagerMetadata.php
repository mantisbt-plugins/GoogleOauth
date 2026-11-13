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

namespace Google\Service\ServiceControl;

class PrivilegedAccessManagerMetadata extends \Google\Collection
{
  protected $collection_key = 'pamBindingIds';
  protected $pamBindingIdsType = AuditPamBindingId::class;
  protected $pamBindingIdsDataType = 'array';

  /**
   * Output only. If PAM is managing the elevated access, AuditPamBindingId is
   * written to an Identity and Access Management (IAM) policy, which specifies
   * access controls for resources. If the access is granted via an IAM policy
   * with a binding which is managed by Privileged Access Manager,
   * PrivilegedAccessManagerMetadata will contain the AuditPamBindingId.
   *
   * @param AuditPamBindingId[] $pamBindingIds
   */
  public function setPamBindingIds($pamBindingIds)
  {
    $this->pamBindingIds = $pamBindingIds;
  }
  /**
   * @return AuditPamBindingId[]
   */
  public function getPamBindingIds()
  {
    return $this->pamBindingIds;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PrivilegedAccessManagerMetadata::class, 'Google_Service_ServiceControl_PrivilegedAccessManagerMetadata');
