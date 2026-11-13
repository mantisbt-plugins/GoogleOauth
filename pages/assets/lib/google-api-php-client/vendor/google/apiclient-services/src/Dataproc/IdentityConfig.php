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

namespace Google\Service\Dataproc;

class IdentityConfig extends \Google\Model
{
  /**
   * Optional. Whether to enable SSH access for the cluster. The default is true
   * for image versions prior to 3.1 and false for image versions 3.1 and later.
   * The default behavior can be changed when creating clusters using image
   * versions 2.3.30 and later.
   *
   * @var bool
   */
  public $enableSsh;
  /**
   * Required. Map of user to service account.
   *
   * @var string[]
   */
  public $userServiceAccountMapping;

  /**
   * Optional. Whether to enable SSH access for the cluster. The default is true
   * for image versions prior to 3.1 and false for image versions 3.1 and later.
   * The default behavior can be changed when creating clusters using image
   * versions 2.3.30 and later.
   *
   * @param bool $enableSsh
   */
  public function setEnableSsh($enableSsh)
  {
    $this->enableSsh = $enableSsh;
  }
  /**
   * @return bool
   */
  public function getEnableSsh()
  {
    return $this->enableSsh;
  }
  /**
   * Required. Map of user to service account.
   *
   * @param string[] $userServiceAccountMapping
   */
  public function setUserServiceAccountMapping($userServiceAccountMapping)
  {
    $this->userServiceAccountMapping = $userServiceAccountMapping;
  }
  /**
   * @return string[]
   */
  public function getUserServiceAccountMapping()
  {
    return $this->userServiceAccountMapping;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(IdentityConfig::class, 'Google_Service_Dataproc_IdentityConfig');
