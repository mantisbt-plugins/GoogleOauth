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

class MultiZoneConfig extends \Google\Model
{
  /**
   * Target shape is unspecified. Setting this will cause error.
   */
  public const TARGET_SHAPE_TARGET_SHAPE_UNSPECIFIED = 'TARGET_SHAPE_UNSPECIFIED';
  /**
   * Instances may exist in any Zones within the Region.
   */
  public const TARGET_SHAPE_ANY = 'ANY';
  /**
   * Optional. The distribution shape of the nodes in the multi-zonal cluster.
   *
   * @var string
   */
  public $targetShape;

  /**
   * Optional. The distribution shape of the nodes in the multi-zonal cluster.
   *
   * Accepted values: TARGET_SHAPE_UNSPECIFIED, ANY
   *
   * @param self::TARGET_SHAPE_* $targetShape
   */
  public function setTargetShape($targetShape)
  {
    $this->targetShape = $targetShape;
  }
  /**
   * @return self::TARGET_SHAPE_*
   */
  public function getTargetShape()
  {
    return $this->targetShape;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(MultiZoneConfig::class, 'Google_Service_Dataproc_MultiZoneConfig');
