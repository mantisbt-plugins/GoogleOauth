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

class GenaiVertexV1UrlContextCallStep extends \Google\Model
{
  protected $argumentsType = GenaiVertexV1UrlContextCallStepUrlContextCallStepArguments::class;
  protected $argumentsDataType = '';

  /**
   * Required. The arguments to pass to the URL context.
   *
   * @param GenaiVertexV1UrlContextCallStepUrlContextCallStepArguments $arguments
   */
  public function setArguments(GenaiVertexV1UrlContextCallStepUrlContextCallStepArguments $arguments)
  {
    $this->arguments = $arguments;
  }
  /**
   * @return GenaiVertexV1UrlContextCallStepUrlContextCallStepArguments
   */
  public function getArguments()
  {
    return $this->arguments;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GenaiVertexV1UrlContextCallStep::class, 'Google_Service_Aiplatform_GenaiVertexV1UrlContextCallStep');
