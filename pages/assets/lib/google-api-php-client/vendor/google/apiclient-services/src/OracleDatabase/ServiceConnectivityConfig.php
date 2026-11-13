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

namespace Google\Service\OracleDatabase;

class ServiceConnectivityConfig extends \Google\Model
{
  protected $pscInterfaceConfigType = PscInterfaceConfig::class;
  protected $pscInterfaceConfigDataType = '';

  /**
   * Optional. Configuration for Private Service Connect (PSC) interface.
   *
   * @param PscInterfaceConfig $pscInterfaceConfig
   */
  public function setPscInterfaceConfig(PscInterfaceConfig $pscInterfaceConfig)
  {
    $this->pscInterfaceConfig = $pscInterfaceConfig;
  }
  /**
   * @return PscInterfaceConfig
   */
  public function getPscInterfaceConfig()
  {
    return $this->pscInterfaceConfig;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ServiceConnectivityConfig::class, 'Google_Service_OracleDatabase_ServiceConnectivityConfig');
