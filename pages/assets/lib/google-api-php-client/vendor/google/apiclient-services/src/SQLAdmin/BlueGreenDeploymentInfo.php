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

namespace Google\Service\SQLAdmin;

class BlueGreenDeploymentInfo extends \Google\Model
{
  /**
   * The state of the deployment is unknown.
   */
  public const STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * The deployment is pre-switchover.
   */
  public const STATE_PRE_SWITCHOVER = 'PRE_SWITCHOVER';
  /**
   * The deployment is post-switchover.
   */
  public const STATE_POST_SWITCHOVER = 'POST_SWITCHOVER';
  /**
   * Output only. The resource ID of the blue-green deployment.
   *
   * @var string
   */
  public $deploymentId;
  protected $sourceType = SourceRole::class;
  protected $sourceDataType = '';
  /**
   * Output only. The current state of blue-green-deployment for UI tags
   *
   * @var string
   */
  public $state;
  protected $targetType = TargetRole::class;
  protected $targetDataType = '';

  /**
   * Output only. The resource ID of the blue-green deployment.
   *
   * @param string $deploymentId
   */
  public function setDeploymentId($deploymentId)
  {
    $this->deploymentId = $deploymentId;
  }
  /**
   * @return string
   */
  public function getDeploymentId()
  {
    return $this->deploymentId;
  }
  /**
   * Output only. The source instance for the Blue-Green deployment.
   *
   * @param SourceRole $source
   */
  public function setSource(SourceRole $source)
  {
    $this->source = $source;
  }
  /**
   * @return SourceRole
   */
  public function getSource()
  {
    return $this->source;
  }
  /**
   * Output only. The current state of blue-green-deployment for UI tags
   *
   * Accepted values: STATE_UNSPECIFIED, PRE_SWITCHOVER, POST_SWITCHOVER
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
  /**
   * Output only. The target instance for the Blue-Green deployment.
   *
   * @param TargetRole $target
   */
  public function setTarget(TargetRole $target)
  {
    $this->target = $target;
  }
  /**
   * @return TargetRole
   */
  public function getTarget()
  {
    return $this->target;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(BlueGreenDeploymentInfo::class, 'Google_Service_SQLAdmin_BlueGreenDeploymentInfo');
