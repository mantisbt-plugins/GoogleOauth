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

class GoogleCloudDialogflowV2beta1CompanionSuggestionGuidance extends \Google\Collection
{
  protected $collection_key = 'triggeringToolCallAnswerRecords';
  /**
   * @var string
   */
  public $explanation;
  protected $groundingMetadataType = GoogleCloudDialogflowV2beta1GroundingMetadata::class;
  protected $groundingMetadataDataType = '';
  protected $instructionSourceType = GoogleCloudDialogflowV2beta1GuidanceInstruction::class;
  protected $instructionSourceDataType = '';
  protected $knowledgeSourcesType = GoogleCloudDialogflowV2beta1CompanionSuggestionGuidanceKnowledgeSource::class;
  protected $knowledgeSourcesDataType = 'array';
  /**
   * @var string
   */
  public $suggestedAction;
  /**
   * @var string
   */
  public $suggestedReply;
  protected $toolCallsType = GoogleCloudDialogflowV2beta1ToolCallSuggestion::class;
  protected $toolCallsDataType = 'array';
  /**
   * @var string[]
   */
  public $triggeringToolCallAnswerRecords;

  /**
   * @param string $explanation
   */
  public function setExplanation($explanation)
  {
    $this->explanation = $explanation;
  }
  /**
   * @return string
   */
  public function getExplanation()
  {
    return $this->explanation;
  }
  /**
   * @param GoogleCloudDialogflowV2beta1GroundingMetadata $groundingMetadata
   */
  public function setGroundingMetadata(GoogleCloudDialogflowV2beta1GroundingMetadata $groundingMetadata)
  {
    $this->groundingMetadata = $groundingMetadata;
  }
  /**
   * @return GoogleCloudDialogflowV2beta1GroundingMetadata
   */
  public function getGroundingMetadata()
  {
    return $this->groundingMetadata;
  }
  /**
   * @param GoogleCloudDialogflowV2beta1GuidanceInstruction $instructionSource
   */
  public function setInstructionSource(GoogleCloudDialogflowV2beta1GuidanceInstruction $instructionSource)
  {
    $this->instructionSource = $instructionSource;
  }
  /**
   * @return GoogleCloudDialogflowV2beta1GuidanceInstruction
   */
  public function getInstructionSource()
  {
    return $this->instructionSource;
  }
  /**
   * @param GoogleCloudDialogflowV2beta1CompanionSuggestionGuidanceKnowledgeSource[] $knowledgeSources
   */
  public function setKnowledgeSources($knowledgeSources)
  {
    $this->knowledgeSources = $knowledgeSources;
  }
  /**
   * @return GoogleCloudDialogflowV2beta1CompanionSuggestionGuidanceKnowledgeSource[]
   */
  public function getKnowledgeSources()
  {
    return $this->knowledgeSources;
  }
  /**
   * @param string $suggestedAction
   */
  public function setSuggestedAction($suggestedAction)
  {
    $this->suggestedAction = $suggestedAction;
  }
  /**
   * @return string
   */
  public function getSuggestedAction()
  {
    return $this->suggestedAction;
  }
  /**
   * @param string $suggestedReply
   */
  public function setSuggestedReply($suggestedReply)
  {
    $this->suggestedReply = $suggestedReply;
  }
  /**
   * @return string
   */
  public function getSuggestedReply()
  {
    return $this->suggestedReply;
  }
  /**
   * @param GoogleCloudDialogflowV2beta1ToolCallSuggestion[] $toolCalls
   */
  public function setToolCalls($toolCalls)
  {
    $this->toolCalls = $toolCalls;
  }
  /**
   * @return GoogleCloudDialogflowV2beta1ToolCallSuggestion[]
   */
  public function getToolCalls()
  {
    return $this->toolCalls;
  }
  /**
   * @param string[] $triggeringToolCallAnswerRecords
   */
  public function setTriggeringToolCallAnswerRecords($triggeringToolCallAnswerRecords)
  {
    $this->triggeringToolCallAnswerRecords = $triggeringToolCallAnswerRecords;
  }
  /**
   * @return string[]
   */
  public function getTriggeringToolCallAnswerRecords()
  {
    return $this->triggeringToolCallAnswerRecords;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDialogflowV2beta1CompanionSuggestionGuidance::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1CompanionSuggestionGuidance');
