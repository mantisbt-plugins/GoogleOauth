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

class RabPolicyViolationInfo extends \Google\Collection
{
  protected $collection_key = 'resourceLocations';
  /**
   * Optional. Error message detailing what triggered the violation. The error
   * message content originates from the authz library e.g.,
   * google3/cloud/security/iam/cap/deny_explanation/internal/make_error_msg.cc.
   * This will be the same (canonical) error message provided by the http error
   * code.
   *
   * @var string
   */
  public $errorMessage;
  /**
   * Optional. The list of target locations of the resource.
   *
   * @var string[]
   */
  public $resourceLocations;

  /**
   * Optional. Error message detailing what triggered the violation. The error
   * message content originates from the authz library e.g.,
   * google3/cloud/security/iam/cap/deny_explanation/internal/make_error_msg.cc.
   * This will be the same (canonical) error message provided by the http error
   * code.
   *
   * @param string $errorMessage
   */
  public function setErrorMessage($errorMessage)
  {
    $this->errorMessage = $errorMessage;
  }
  /**
   * @return string
   */
  public function getErrorMessage()
  {
    return $this->errorMessage;
  }
  /**
   * Optional. The list of target locations of the resource.
   *
   * @param string[] $resourceLocations
   */
  public function setResourceLocations($resourceLocations)
  {
    $this->resourceLocations = $resourceLocations;
  }
  /**
   * @return string[]
   */
  public function getResourceLocations()
  {
    return $this->resourceLocations;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RabPolicyViolationInfo::class, 'Google_Service_ServiceControl_RabPolicyViolationInfo');
