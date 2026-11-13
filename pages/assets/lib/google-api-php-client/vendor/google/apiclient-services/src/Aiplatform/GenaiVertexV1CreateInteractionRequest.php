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

class GenaiVertexV1CreateInteractionRequest extends \Google\Model
{
  /**
   * Input only. Whether to run the model interaction in the background.
   *
   * @var bool
   */
  public $background;
  protected $interactionType = GenaiVertexV1Interaction::class;
  protected $interactionDataType = '';
  /**
   * Input only. Whether to store the response and request for later retrieval.
   *
   * @var bool
   */
  public $store;
  /**
   * Input only. Whether the interaction will be streamed.
   *
   * @var bool
   */
  public $stream;

  /**
   * Input only. Whether to run the model interaction in the background.
   *
   * @param bool $background
   */
  public function setBackground($background)
  {
    $this->background = $background;
  }
  /**
   * @return bool
   */
  public function getBackground()
  {
    return $this->background;
  }
  /**
   * The interaction to create.
   *
   * @param GenaiVertexV1Interaction $interaction
   */
  public function setInteraction(GenaiVertexV1Interaction $interaction)
  {
    $this->interaction = $interaction;
  }
  /**
   * @return GenaiVertexV1Interaction
   */
  public function getInteraction()
  {
    return $this->interaction;
  }
  /**
   * Input only. Whether to store the response and request for later retrieval.
   *
   * @param bool $store
   */
  public function setStore($store)
  {
    $this->store = $store;
  }
  /**
   * @return bool
   */
  public function getStore()
  {
    return $this->store;
  }
  /**
   * Input only. Whether the interaction will be streamed.
   *
   * @param bool $stream
   */
  public function setStream($stream)
  {
    $this->stream = $stream;
  }
  /**
   * @return bool
   */
  public function getStream()
  {
    return $this->stream;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GenaiVertexV1CreateInteractionRequest::class, 'Google_Service_Aiplatform_GenaiVertexV1CreateInteractionRequest');
