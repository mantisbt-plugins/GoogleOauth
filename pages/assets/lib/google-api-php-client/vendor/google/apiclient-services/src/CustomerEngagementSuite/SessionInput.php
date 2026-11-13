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

namespace Google\Service\CustomerEngagementSuite;

class SessionInput extends \Google\Model
{
  /**
   * The app is not controlling recording. The app's logging settings decide, as
   * they do for every session that never sets this field.
   */
  public const RECORDING_CONTROL_RECORDING_CONTROL_UNSPECIFIED = 'RECORDING_CONTROL_UNSPECIFIED';
  /**
   * The conversation may be recorded and logged from here on.
   */
  public const RECORDING_CONTROL_RECORDING_ENABLED = 'RECORDING_ENABLED';
  /**
   * The conversation may not be recorded or logged from here on.
   */
  public const RECORDING_CONTROL_RECORDING_DISABLED = 'RECORDING_DISABLED';
  /**
   * Optional. Audio data from the end user.
   *
   * @var string
   */
  public $audio;
  protected $blobType = Blob::class;
  protected $blobDataType = '';
  /**
   * Optional. DTMF digits from the end user.
   *
   * @var string
   */
  public $dtmf;
  protected $eventType = Event::class;
  protected $eventDataType = '';
  protected $imageType = Image::class;
  protected $imageDataType = '';
  /**
   * Optional. Whether the conversation may be recorded and logged from here on.
   * Use this when the app, rather than the agent, decides what may be kept: for
   * example when the end user has to consent to being recorded before anything
   * about the call can be stored. The value stays in effect until the client
   * sends a different one, so it only needs to be sent when the answer changes.
   * Whatever is in effect when a turn completes decides that turn, both whether
   * its audio reaches the recording bucket and whether its transcript reaches
   * conversation history, BigQuery and Cloud Logging. It covers the agent's
   * side of the turn as well as the end user's. Turns that complete before the
   * client first sends this are recorded according to the app's logging
   * settings, as though the field did not exist. If more than one input in the
   * same request sets it, the last one wins.
   *
   * @var string
   */
  public $recordingControl;
  /**
   * Optional. Text data from the end user.
   *
   * @var string
   */
  public $text;
  protected $toolResponsesType = ToolResponses::class;
  protected $toolResponsesDataType = '';
  /**
   * Optional. Contextual variables for the session, keyed by name. Only
   * variables declared in the app will be used by the CES agent. Unrecognized
   * variables will still be sent to the Dialogflow agent as additional session
   * parameters.
   *
   * @var array[]
   */
  public $variables;
  /**
   * Optional. A flag to indicate if the current message is a fragment of a
   * larger input in the bidi streaming session. When set to `true`, the agent
   * defers processing until it receives a subsequent message where
   * `will_continue` is `false`, or until the system detects an endpoint in the
   * audio input. NOTE: This field does not apply to audio and DTMF inputs, as
   * they are always processed automatically based on the endpointing signal.
   *
   * @var bool
   */
  public $willContinue;

  /**
   * Optional. Audio data from the end user.
   *
   * @param string $audio
   */
  public function setAudio($audio)
  {
    $this->audio = $audio;
  }
  /**
   * @return string
   */
  public function getAudio()
  {
    return $this->audio;
  }
  /**
   * Optional. Blob data from the end user.
   *
   * @param Blob $blob
   */
  public function setBlob(Blob $blob)
  {
    $this->blob = $blob;
  }
  /**
   * @return Blob
   */
  public function getBlob()
  {
    return $this->blob;
  }
  /**
   * Optional. DTMF digits from the end user.
   *
   * @param string $dtmf
   */
  public function setDtmf($dtmf)
  {
    $this->dtmf = $dtmf;
  }
  /**
   * @return string
   */
  public function getDtmf()
  {
    return $this->dtmf;
  }
  /**
   * Optional. Event input.
   *
   * @param Event $event
   */
  public function setEvent(Event $event)
  {
    $this->event = $event;
  }
  /**
   * @return Event
   */
  public function getEvent()
  {
    return $this->event;
  }
  /**
   * Optional. Image data from the end user.
   *
   * @param Image $image
   */
  public function setImage(Image $image)
  {
    $this->image = $image;
  }
  /**
   * @return Image
   */
  public function getImage()
  {
    return $this->image;
  }
  /**
   * Optional. Whether the conversation may be recorded and logged from here on.
   * Use this when the app, rather than the agent, decides what may be kept: for
   * example when the end user has to consent to being recorded before anything
   * about the call can be stored. The value stays in effect until the client
   * sends a different one, so it only needs to be sent when the answer changes.
   * Whatever is in effect when a turn completes decides that turn, both whether
   * its audio reaches the recording bucket and whether its transcript reaches
   * conversation history, BigQuery and Cloud Logging. It covers the agent's
   * side of the turn as well as the end user's. Turns that complete before the
   * client first sends this are recorded according to the app's logging
   * settings, as though the field did not exist. If more than one input in the
   * same request sets it, the last one wins.
   *
   * Accepted values: RECORDING_CONTROL_UNSPECIFIED, RECORDING_ENABLED,
   * RECORDING_DISABLED
   *
   * @param self::RECORDING_CONTROL_* $recordingControl
   */
  public function setRecordingControl($recordingControl)
  {
    $this->recordingControl = $recordingControl;
  }
  /**
   * @return self::RECORDING_CONTROL_*
   */
  public function getRecordingControl()
  {
    return $this->recordingControl;
  }
  /**
   * Optional. Text data from the end user.
   *
   * @param string $text
   */
  public function setText($text)
  {
    $this->text = $text;
  }
  /**
   * @return string
   */
  public function getText()
  {
    return $this->text;
  }
  /**
   * Optional. Execution results for the tool calls from the client.
   *
   * @param ToolResponses $toolResponses
   */
  public function setToolResponses(ToolResponses $toolResponses)
  {
    $this->toolResponses = $toolResponses;
  }
  /**
   * @return ToolResponses
   */
  public function getToolResponses()
  {
    return $this->toolResponses;
  }
  /**
   * Optional. Contextual variables for the session, keyed by name. Only
   * variables declared in the app will be used by the CES agent. Unrecognized
   * variables will still be sent to the Dialogflow agent as additional session
   * parameters.
   *
   * @param array[] $variables
   */
  public function setVariables($variables)
  {
    $this->variables = $variables;
  }
  /**
   * @return array[]
   */
  public function getVariables()
  {
    return $this->variables;
  }
  /**
   * Optional. A flag to indicate if the current message is a fragment of a
   * larger input in the bidi streaming session. When set to `true`, the agent
   * defers processing until it receives a subsequent message where
   * `will_continue` is `false`, or until the system detects an endpoint in the
   * audio input. NOTE: This field does not apply to audio and DTMF inputs, as
   * they are always processed automatically based on the endpointing signal.
   *
   * @param bool $willContinue
   */
  public function setWillContinue($willContinue)
  {
    $this->willContinue = $willContinue;
  }
  /**
   * @return bool
   */
  public function getWillContinue()
  {
    return $this->willContinue;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SessionInput::class, 'Google_Service_CustomerEngagementSuite_SessionInput');
