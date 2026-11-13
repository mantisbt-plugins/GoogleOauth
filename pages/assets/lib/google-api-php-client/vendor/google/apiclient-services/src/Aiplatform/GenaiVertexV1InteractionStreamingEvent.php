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

class GenaiVertexV1InteractionStreamingEvent extends \Google\Model
{
  protected $errorEventType = GenaiVertexV1ErrorEvent::class;
  protected $errorEventDataType = '';
  /**
   * The event_id token to be used to resume the interaction stream, from this
   * event.
   *
   * @var string
   */
  public $eventId;
  protected $interactionCompletedEventType = GenaiVertexV1InteractionCompletedSseEvent::class;
  protected $interactionCompletedEventDataType = '';
  protected $interactionCreatedEventType = GenaiVertexV1InteractionCreatedSseEvent::class;
  protected $interactionCreatedEventDataType = '';
  protected $interactionStatusUpdateType = GenaiVertexV1InteractionStatusUpdate::class;
  protected $interactionStatusUpdateDataType = '';
  protected $stepDeltaType = GenaiVertexV1StepDelta::class;
  protected $stepDeltaDataType = '';
  protected $stepStartType = GenaiVertexV1StepStart::class;
  protected $stepStartDataType = '';
  protected $stepStopType = GenaiVertexV1StepStop::class;
  protected $stepStopDataType = '';

  /**
   * The error event data, used for error events.
   *
   * @param GenaiVertexV1ErrorEvent $errorEvent
   */
  public function setErrorEvent(GenaiVertexV1ErrorEvent $errorEvent)
  {
    $this->errorEvent = $errorEvent;
  }
  /**
   * @return GenaiVertexV1ErrorEvent
   */
  public function getErrorEvent()
  {
    return $this->errorEvent;
  }
  /**
   * The event_id token to be used to resume the interaction stream, from this
   * event.
   *
   * @param string $eventId
   */
  public function setEventId($eventId)
  {
    $this->eventId = $eventId;
  }
  /**
   * @return string
   */
  public function getEventId()
  {
    return $this->eventId;
  }
  /**
   * The interaction data, used for interaction.completed events. Used when
   * steps are enabled.
   *
   * @param GenaiVertexV1InteractionCompletedSseEvent $interactionCompletedEvent
   */
  public function setInteractionCompletedEvent(GenaiVertexV1InteractionCompletedSseEvent $interactionCompletedEvent)
  {
    $this->interactionCompletedEvent = $interactionCompletedEvent;
  }
  /**
   * @return GenaiVertexV1InteractionCompletedSseEvent
   */
  public function getInteractionCompletedEvent()
  {
    return $this->interactionCompletedEvent;
  }
  /**
   * The interaction data, used for interaction.created events. Used when steps
   * are enabled.
   *
   * @param GenaiVertexV1InteractionCreatedSseEvent $interactionCreatedEvent
   */
  public function setInteractionCreatedEvent(GenaiVertexV1InteractionCreatedSseEvent $interactionCreatedEvent)
  {
    $this->interactionCreatedEvent = $interactionCreatedEvent;
  }
  /**
   * @return GenaiVertexV1InteractionCreatedSseEvent
   */
  public function getInteractionCreatedEvent()
  {
    return $this->interactionCreatedEvent;
  }
  /**
   * The interaction status data, used for interaction.status_update events.
   *
   * @param GenaiVertexV1InteractionStatusUpdate $interactionStatusUpdate
   */
  public function setInteractionStatusUpdate(GenaiVertexV1InteractionStatusUpdate $interactionStatusUpdate)
  {
    $this->interactionStatusUpdate = $interactionStatusUpdate;
  }
  /**
   * @return GenaiVertexV1InteractionStatusUpdate
   */
  public function getInteractionStatusUpdate()
  {
    return $this->interactionStatusUpdate;
  }
  /**
   * The step delta data, used for step.delta events. Step-based streaming
   * event, used when steps are enabled.
   *
   * @param GenaiVertexV1StepDelta $stepDelta
   */
  public function setStepDelta(GenaiVertexV1StepDelta $stepDelta)
  {
    $this->stepDelta = $stepDelta;
  }
  /**
   * @return GenaiVertexV1StepDelta
   */
  public function getStepDelta()
  {
    return $this->stepDelta;
  }
  /**
   * The step start data, used for step.start events. Step-based streaming
   * event, used when steps are enabled.
   *
   * @param GenaiVertexV1StepStart $stepStart
   */
  public function setStepStart(GenaiVertexV1StepStart $stepStart)
  {
    $this->stepStart = $stepStart;
  }
  /**
   * @return GenaiVertexV1StepStart
   */
  public function getStepStart()
  {
    return $this->stepStart;
  }
  /**
   * The step stop data, used for step.stop events. Step-based streaming event,
   * used when steps are enabled.
   *
   * @param GenaiVertexV1StepStop $stepStop
   */
  public function setStepStop(GenaiVertexV1StepStop $stepStop)
  {
    $this->stepStop = $stepStop;
  }
  /**
   * @return GenaiVertexV1StepStop
   */
  public function getStepStop()
  {
    return $this->stepStop;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GenaiVertexV1InteractionStreamingEvent::class, 'Google_Service_Aiplatform_GenaiVertexV1InteractionStreamingEvent');
