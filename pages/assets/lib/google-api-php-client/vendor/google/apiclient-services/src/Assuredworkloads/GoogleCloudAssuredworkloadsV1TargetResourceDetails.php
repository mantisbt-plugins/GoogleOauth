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

namespace Google\Service\Assuredworkloads;

class GoogleCloudAssuredworkloadsV1TargetResourceDetails extends \Google\Model
{
  /**
   * The create time of the target resource.
   *
   * @var string
   */
  public $createTime;
  /**
   * The framework deployment name for the target resource. For example, `organi
   * zations/{organization_id}/locations/{location}/frameworkDeployments/{framew
   * ork_deployment_id}`
   *
   * @var string
   */
  public $frameworkDeployment;
  /**
   * The major revision ID of the framework for the target resource.
   *
   * @var string
   */
  public $majorRevisionId;
  /**
   * The minor revision ID of the framework for the target resource.
   *
   * @var string
   */
  public $minorRevisionId;
  /**
   * The target resource. For example, `organizations/1234567890`,
   * `projects/1234567890`, or `folders/1234567890`.
   *
   * @var string
   */
  public $targetResource;
  /**
   * The display name of the target resource. For example, `google.com`,
   * `staging-project`, or `development-folder`.
   *
   * @var string
   */
  public $targetResourceDisplayName;
  /**
   * The update time of the target resource.
   *
   * @var string
   */
  public $updateTime;

  /**
   * The create time of the target resource.
   *
   * @param string $createTime
   */
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  /**
   * @return string
   */
  public function getCreateTime()
  {
    return $this->createTime;
  }
  /**
   * The framework deployment name for the target resource. For example, `organi
   * zations/{organization_id}/locations/{location}/frameworkDeployments/{framew
   * ork_deployment_id}`
   *
   * @param string $frameworkDeployment
   */
  public function setFrameworkDeployment($frameworkDeployment)
  {
    $this->frameworkDeployment = $frameworkDeployment;
  }
  /**
   * @return string
   */
  public function getFrameworkDeployment()
  {
    return $this->frameworkDeployment;
  }
  /**
   * The major revision ID of the framework for the target resource.
   *
   * @param string $majorRevisionId
   */
  public function setMajorRevisionId($majorRevisionId)
  {
    $this->majorRevisionId = $majorRevisionId;
  }
  /**
   * @return string
   */
  public function getMajorRevisionId()
  {
    return $this->majorRevisionId;
  }
  /**
   * The minor revision ID of the framework for the target resource.
   *
   * @param string $minorRevisionId
   */
  public function setMinorRevisionId($minorRevisionId)
  {
    $this->minorRevisionId = $minorRevisionId;
  }
  /**
   * @return string
   */
  public function getMinorRevisionId()
  {
    return $this->minorRevisionId;
  }
  /**
   * The target resource. For example, `organizations/1234567890`,
   * `projects/1234567890`, or `folders/1234567890`.
   *
   * @param string $targetResource
   */
  public function setTargetResource($targetResource)
  {
    $this->targetResource = $targetResource;
  }
  /**
   * @return string
   */
  public function getTargetResource()
  {
    return $this->targetResource;
  }
  /**
   * The display name of the target resource. For example, `google.com`,
   * `staging-project`, or `development-folder`.
   *
   * @param string $targetResourceDisplayName
   */
  public function setTargetResourceDisplayName($targetResourceDisplayName)
  {
    $this->targetResourceDisplayName = $targetResourceDisplayName;
  }
  /**
   * @return string
   */
  public function getTargetResourceDisplayName()
  {
    return $this->targetResourceDisplayName;
  }
  /**
   * The update time of the target resource.
   *
   * @param string $updateTime
   */
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  /**
   * @return string
   */
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAssuredworkloadsV1TargetResourceDetails::class, 'Google_Service_Assuredworkloads_GoogleCloudAssuredworkloadsV1TargetResourceDetails');
