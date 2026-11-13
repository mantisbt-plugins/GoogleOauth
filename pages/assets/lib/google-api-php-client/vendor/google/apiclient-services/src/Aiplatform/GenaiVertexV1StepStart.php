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

class GenaiVertexV1StepStart extends \Google\Model
{
  /**
   * @var int
   */
  public $index;
  protected $stepType = GenaiVertexV1Step::class;
  protected $stepDataType = '';

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
   * @param GenaiVertexV1Step $step
   */
  public function setStep(GenaiVertexV1Step $step)
  {
    $this->step = $step;
  }
  /**
   * @return GenaiVertexV1Step
   */
  public function getStep()
  {
    return $this->step;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GenaiVertexV1StepStart::class, 'Google_Service_Aiplatform_GenaiVertexV1StepStart');
