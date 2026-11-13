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

namespace Google\Service\Aiplatform;

class GenaiVertexV1StepStop extends \Google\Model
{
  /**
   * @var int
   */
  public $index;
  protected $stepUsageType = GenaiVertexV1InteractionUsage::class;
  protected $stepUsageDataType = '';
  protected $usageType = GenaiVertexV1InteractionUsage::class;
  protected $usageDataType = '';

  /**
   * @param int $index
   */
  public function setIndex($index)
  {
    $this->index = $index;
  }
  /**
   * @return int
   */
  public function getIndex()
  {
    return $this->index;
  }
  /**
   * Model usage stats for this specific step.
   *
   * @param GenaiVertexV1InteractionUsage $stepUsage
   */
  public function setStepUsage(GenaiVertexV1InteractionUsage $stepUsage)
  {
    $this->stepUsage = $stepUsage;
  }
  /**
   * @return GenaiVertexV1InteractionUsage
   */
  public function getStepUsage()
  {
    return $this->stepUsage;
  }
  /**
   * Cumulative model usage stats from the start of the session.
   *
   * @param GenaiVertexV1InteractionUsage $usage
   */
  public function setUsage(GenaiVertexV1InteractionUsage $usage)
  {
    $this->usage = $usage;
  }
  /**
   * @return GenaiVertexV1InteractionUsage
   */
  public function getUsage()
  {
    return $this->usage;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GenaiVertexV1StepStop::class, 'Google_Service_Aiplatform_GenaiVertexV1StepStop');
