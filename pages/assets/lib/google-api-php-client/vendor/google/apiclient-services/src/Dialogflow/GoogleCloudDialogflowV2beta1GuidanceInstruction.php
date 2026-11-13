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

namespace Google\Service\Dialogflow;

class GoogleCloudDialogflowV2beta1GuidanceInstruction extends \Google\Collection
{
  public const TRIGGER_EVENT_TRIGGER_EVENT_UNSPECIFIED = 'TRIGGER_EVENT_UNSPECIFIED';
  public const TRIGGER_EVENT_END_OF_UTTERANCE = 'END_OF_UTTERANCE';
  public const TRIGGER_EVENT_CUSTOMER_MESSAGE = 'CUSTOMER_MESSAGE';
  public const TRIGGER_EVENT_AGENT_MESSAGE = 'AGENT_MESSAGE';
  protected $collection_key = 'actions';
  protected $actionsType = GoogleCloudDialogflowV2beta1GuidanceInstructionAction::class;
  protected $actionsDataType = 'array';
  /**
   * @var string
   */
  public $condition;
  /**
   * @var bool
   */
  public $disableSuggestedReply;
  /**
   * @var string
   */
  public $displayDetails;
  /**
   * @var string
   */
  public $displayName;
  /**
   * @var string
   */
  public $triggerEvent;

  /**
   * @param GoogleCloudDialogflowV2beta1GuidanceInstructionAction[] $actions
   */
  public function setActions($actions)
  {
    $this->actions = $actions;
  }
  /**
   * @return GoogleCloudDialogflowV2beta1GuidanceInstructionAction[]
   */
  public function getActions()
  {
    return $this->actions;
  }
  /**
   * @param string $condition
   */
  public function setCondition($condition)
  {
    $this->condition = $condition;
  }
  /**
   * @return string
   */
  public function getCondition()
  {
    return $this->condition;
  }
  /**
   * @param bool $disableSuggestedReply
   */
  public function setDisableSuggestedReply($disableSuggestedReply)
  {
    $this->disableSuggestedReply = $disableSuggestedReply;
  }
  /**
   * @return bool
   */
  public function getDisableSuggestedReply()
  {
    return $this->disableSuggestedReply;
  }
  /**
   * @param string $displayDetails
   */
  public function setDisplayDetails($displayDetails)
  {
    $this->displayDetails = $displayDetails;
  }
  /**
   * @return string
   */
  public function getDisplayDetails()
  {
    return $this->displayDetails;
  }
  /**
   * @param string $displayName
   */
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /**
   * @return string
   */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /**
   * @param self::TRIGGER_EVENT_* $triggerEvent
   */
  public function setTriggerEvent($triggerEvent)
  {
    $this->triggerEvent = $triggerEvent;
  }
  /**
   * @return self::TRIGGER_EVENT_*
   */
  public function getTriggerEvent()
  {
    return $this->triggerEvent;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDialogflowV2beta1GuidanceInstruction::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1GuidanceInstruction');
