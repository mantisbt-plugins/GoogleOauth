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

class VpcAccessibleServices extends \Google\Collection
{
  protected $collection_key = 'servicePatternsEnforcementScopes';
  protected $allowedServicePatternsType = ServicePattern::class;
  protected $allowedServicePatternsDataType = 'array';
  /**
   * The list of APIs usable within the Service Perimeter. Must be empty unless
   * `enable_restriction` is `true`. You can specify a list of individual
   * services, as well as include the `'RESTRICTED-SERVICES'` value, which
   * automatically includes all of the services protected by the perimeter.
   *
   * @var string[]
   */
  public $allowedServices;
  /**
   * Whether to restrict API calls within the Service Perimeter to the list of
   * APIs specified in `allowed_services`.
   *
   * @var bool
   */
  public $enableRestriction;
  /**
   * Defines the enforcement scopes of service patterns.
   *
   * @var string[]
   */
  public $servicePatternsEnforcementScopes;

  /**
   * Specifies which Google services are allowed to be accessed from VPC
   * networks in the service perimeter.
   *
   * @param ServicePattern[] $allowedServicePatterns
   */
  public function setAllowedServicePatterns($allowedServicePatterns)
  {
    $this->allowedServicePatterns = $allowedServicePatterns;
  }
  /**
   * @return ServicePattern[]
   */
  public function getAllowedServicePatterns()
  {
    return $this->allowedServicePatterns;
  }
  /**
   * The list of APIs usable within the Service Perimeter. Must be empty unless
   * `enable_restriction` is `true`. You can specify a list of individual
   * services, as well as include the `'RESTRICTED-SERVICES'` value, which
   * automatically includes all of the services protected by the perimeter.
   *
   * @param string[] $allowedServices
   */
  public function setAllowedServices($allowedServices)
  {
    $this->allowedServices = $allowedServices;
  }
  /**
   * @return string[]
   */
  public function getAllowedServices()
  {
    return $this->allowedServices;
  }
  /**
   * Whether to restrict API calls within the Service Perimeter to the list of
   * APIs specified in `allowed_services`.
   *
   * @param bool $enableRestriction
   */
  public function setEnableRestriction($enableRestriction)
  {
    $this->enableRestriction = $enableRestriction;
  }
  /**
   * @return bool
   */
  public function getEnableRestriction()
  {
    return $this->enableRestriction;
  }
  /**
   * Defines the enforcement scopes of service patterns.
   *
   * @param string[] $servicePatternsEnforcementScopes
   */
  public function setServicePatternsEnforcementScopes($servicePatternsEnforcementScopes)
  {
    $this->servicePatternsEnforcementScopes = $servicePatternsEnforcementScopes;
  }
  /**
   * @return string[]
   */
  public function getServicePatternsEnforcementScopes()
  {
    return $this->servicePatternsEnforcementScopes;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(VpcAccessibleServices::class, 'Google_Service_AccessContextManager_VpcAccessibleServices');
