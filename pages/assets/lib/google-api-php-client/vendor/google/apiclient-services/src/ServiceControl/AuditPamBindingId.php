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

class AuditPamBindingId extends \Google\Model
{
  /**
   * Output only. GCP Project/Folder/Organization identifier to which the PAM
   * entitlement/grant is bound to. Container will be in the following form:
   * projects/$project_num or folders/$folder_num or organizations/$org
   *
   * @var string
   */
  public $container;
  /**
   * Output only. Represents the unique identifier for the PAM grant.
   * Full_resource_name_pattern for PAM Grant is:
   * //privilegedaccessmanager.googleapis.com/
   * (projects|folders|organizations)/$0/locations/$1/entitlements/$2/ grants/$3
   * where $3 is the grant_uuid.
   *
   * @var string
   */
  public $grantUuid;

  /**
   * Output only. GCP Project/Folder/Organization identifier to which the PAM
   * entitlement/grant is bound to. Container will be in the following form:
   * projects/$project_num or folders/$folder_num or organizations/$org
   *
   * @param string $container
   */
  public function setContainer($container)
  {
    $this->container = $container;
  }
  /**
   * @return string
   */
  public function getContainer()
  {
    return $this->container;
  }
  /**
   * Output only. Represents the unique identifier for the PAM grant.
   * Full_resource_name_pattern for PAM Grant is:
   * //privilegedaccessmanager.googleapis.com/
   * (projects|folders|organizations)/$0/locations/$1/entitlements/$2/ grants/$3
   * where $3 is the grant_uuid.
   *
   * @param string $grantUuid
   */
  public function setGrantUuid($grantUuid)
  {
    $this->grantUuid = $grantUuid;
  }
  /**
   * @return string
   */
  public function getGrantUuid()
  {
    return $this->grantUuid;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AuditPamBindingId::class, 'Google_Service_ServiceControl_AuditPamBindingId');
