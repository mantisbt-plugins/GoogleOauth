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

class GoogleCloudDialogflowV2ResponseMessage extends \Google\Model
{
  protected $endInteractionType = GoogleCloudDialogflowV2ResponseMessageEndInteraction::class;
  protected $endInteractionDataType = '';
  protected $liveAgentHandoffType = GoogleCloudDialogflowV2ResponseMessageLiveAgentHandoff::class;
  protected $liveAgentHandoffDataType = '';
  protected $mixedAudioType = GoogleCloudDialogflowV2ResponseMessageMixedAudio::class;
  protected $mixedAudioDataType = '';
  /**
   * @var array[]
   */
  public $payload;
  protected $telephonyTransferCallType = GoogleCloudDialogflowV2ResponseMessageTelephonyTransferCall::class;
  protected $telephonyTransferCallDataType = '';
  protected $textType = GoogleCloudDialogflowV2ResponseMessageText::class;
  protected $textDataType = '';

  /**
   * @param GoogleCloudDialogflowV2ResponseMessageEndInteraction $endInteraction
   */
  public function setEndInteraction(GoogleCloudDialogflowV2ResponseMessageEndInteraction $endInteraction)
  {
    $this->endInteraction = $endInteraction;
  }
  /**
   * @return GoogleCloudDialogflowV2ResponseMessageEndInteraction
   */
  public function getEndInteraction()
  {
    return $this->endInteraction;
  }
  /**
   * @param GoogleCloudDialogflowV2ResponseMessageLiveAgentHandoff $liveAgentHandoff
   */
  public function setLiveAgentHandoff(GoogleCloudDialogflowV2ResponseMessageLiveAgentHandoff $liveAgentHandoff)
  {
    $this->liveAgentHandoff = $liveAgentHandoff;
  }
  /**
   * @return GoogleCloudDialogflowV2ResponseMessageLiveAgentHandoff
   */
  public function getLiveAgentHandoff()
  {
    return $this->liveAgentHandoff;
  }
  /**
   * @param GoogleCloudDialogflowV2ResponseMessageMixedAudio $mixedAudio
   */
  public function setMixedAudio(GoogleCloudDialogflowV2ResponseMessageMixedAudio $mixedAudio)
  {
    $this->mixedAudio = $mixedAudio;
  }
  /**
   * @return GoogleCloudDialogflowV2ResponseMessageMixedAudio
   */
  public function getMixedAudio()
  {
    return $this->mixedAudio;
  }
  /**
   * @param array[] $payload
   */
  public function setPayload($payload)
  {
    $this->payload = $payload;
  }
  /**
   * @return array[]
   */
  public function getPayload()
  {
    return $this->payload;
  }
  /**
   * @param GoogleCloudDialogflowV2ResponseMessageTelephonyTransferCall $telephonyTransferCall
   */
  public function setTelephonyTransferCall(GoogleCloudDialogflowV2ResponseMessageTelephonyTransferCall $telephonyTransferCall)
  {
    $this->telephonyTransferCall = $telephonyTransferCall;
  }
  /**
   * @return GoogleCloudDialogflowV2ResponseMessageTelephonyTransferCall
   */
  public function getTelephonyTransferCall()
  {
    return $this->telephonyTransferCall;
  }
  /**
   * @param GoogleCloudDialogflowV2ResponseMessageText $text
   */
  public function setText(GoogleCloudDialogflowV2ResponseMessageText $text)
  {
    $this->text = $text;
  }
  /**
   * @return GoogleCloudDialogflowV2ResponseMessageText
   */
  public function getText()
  {
    return $this->text;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDialogflowV2ResponseMessage::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2ResponseMessage');
