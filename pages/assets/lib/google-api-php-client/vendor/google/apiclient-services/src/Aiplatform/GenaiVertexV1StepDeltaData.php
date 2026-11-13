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

class GenaiVertexV1StepDeltaData extends \Google\Model
{
  protected $argumentsDeltaType = GenaiVertexV1ArgumentsDelta::class;
  protected $argumentsDeltaDataType = '';
  protected $audioType = GenaiVertexV1AudioDelta::class;
  protected $audioDataType = '';
  protected $documentType = GenaiVertexV1DocumentDelta::class;
  protected $documentDataType = '';
  protected $functionResultType = GenaiVertexV1FunctionResultDelta::class;
  protected $functionResultDataType = '';
  protected $imageType = GenaiVertexV1ImageDelta::class;
  protected $imageDataType = '';
  protected $serverToolCallType = GenaiVertexV1ServerToolCallDelta::class;
  protected $serverToolCallDataType = '';
  protected $serverToolResultType = GenaiVertexV1ServerToolResultDelta::class;
  protected $serverToolResultDataType = '';
  protected $textType = GenaiVertexV1TextDelta::class;
  protected $textDataType = '';
  protected $textAnnotationDeltaType = GenaiVertexV1TextAnnotationDelta::class;
  protected $textAnnotationDeltaDataType = '';
  protected $thoughtSignatureType = GenaiVertexV1ThoughtSignatureDelta::class;
  protected $thoughtSignatureDataType = '';
  protected $thoughtSummaryType = GenaiVertexV1ThoughtSummaryDelta::class;
  protected $thoughtSummaryDataType = '';
  protected $videoType = GenaiVertexV1VideoDelta::class;
  protected $videoDataType = '';

  /**
   * @param GenaiVertexV1ArgumentsDelta $argumentsDelta
   */
  public function setArgumentsDelta(GenaiVertexV1ArgumentsDelta $argumentsDelta)
  {
    $this->argumentsDelta = $argumentsDelta;
  }
  /**
   * @return GenaiVertexV1ArgumentsDelta
   */
  public function getArgumentsDelta()
  {
    return $this->argumentsDelta;
  }
  /**
   * @param GenaiVertexV1AudioDelta $audio
   */
  public function setAudio(GenaiVertexV1AudioDelta $audio)
  {
    $this->audio = $audio;
  }
  /**
   * @return GenaiVertexV1AudioDelta
   */
  public function getAudio()
  {
    return $this->audio;
  }
  /**
   * @param GenaiVertexV1DocumentDelta $document
   */
  public function setDocument(GenaiVertexV1DocumentDelta $document)
  {
    $this->document = $document;
  }
  /**
   * @return GenaiVertexV1DocumentDelta
   */
  public function getDocument()
  {
    return $this->document;
  }
  /**
   * @param GenaiVertexV1FunctionResultDelta $functionResult
   */
  public function setFunctionResult(GenaiVertexV1FunctionResultDelta $functionResult)
  {
    $this->functionResult = $functionResult;
  }
  /**
   * @return GenaiVertexV1FunctionResultDelta
   */
  public function getFunctionResult()
  {
    return $this->functionResult;
  }
  /**
   * @param GenaiVertexV1ImageDelta $image
   */
  public function setImage(GenaiVertexV1ImageDelta $image)
  {
    $this->image = $image;
  }
  /**
   * @return GenaiVertexV1ImageDelta
   */
  public function getImage()
  {
    return $this->image;
  }
  /**
   * @param GenaiVertexV1ServerToolCallDelta $serverToolCall
   */
  public function setServerToolCall(GenaiVertexV1ServerToolCallDelta $serverToolCall)
  {
    $this->serverToolCall = $serverToolCall;
  }
  /**
   * @return GenaiVertexV1ServerToolCallDelta
   */
  public function getServerToolCall()
  {
    return $this->serverToolCall;
  }
  /**
   * @param GenaiVertexV1ServerToolResultDelta $serverToolResult
   */
  public function setServerToolResult(GenaiVertexV1ServerToolResultDelta $serverToolResult)
  {
    $this->serverToolResult = $serverToolResult;
  }
  /**
   * @return GenaiVertexV1ServerToolResultDelta
   */
  public function getServerToolResult()
  {
    return $this->serverToolResult;
  }
  /**
   * @param GenaiVertexV1TextDelta $text
   */
  public function setText(GenaiVertexV1TextDelta $text)
  {
    $this->text = $text;
  }
  /**
   * @return GenaiVertexV1TextDelta
   */
  public function getText()
  {
    return $this->text;
  }
  /**
   * @param GenaiVertexV1TextAnnotationDelta $textAnnotationDelta
   */
  public function setTextAnnotationDelta(GenaiVertexV1TextAnnotationDelta $textAnnotationDelta)
  {
    $this->textAnnotationDelta = $textAnnotationDelta;
  }
  /**
   * @return GenaiVertexV1TextAnnotationDelta
   */
  public function getTextAnnotationDelta()
  {
    return $this->textAnnotationDelta;
  }
  /**
   * @param GenaiVertexV1ThoughtSignatureDelta $thoughtSignature
   */
  public function setThoughtSignature(GenaiVertexV1ThoughtSignatureDelta $thoughtSignature)
  {
    $this->thoughtSignature = $thoughtSignature;
  }
  /**
   * @return GenaiVertexV1ThoughtSignatureDelta
   */
  public function getThoughtSignature()
  {
    return $this->thoughtSignature;
  }
  /**
   * @param GenaiVertexV1ThoughtSummaryDelta $thoughtSummary
   */
  public function setThoughtSummary(GenaiVertexV1ThoughtSummaryDelta $thoughtSummary)
  {
    $this->thoughtSummary = $thoughtSummary;
  }
  /**
   * @return GenaiVertexV1ThoughtSummaryDelta
   */
  public function getThoughtSummary()
  {
    return $this->thoughtSummary;
  }
  /**
   * @param GenaiVertexV1VideoDelta $video
   */
  public function setVideo(GenaiVertexV1VideoDelta $video)
  {
    $this->video = $video;
  }
  /**
   * @return GenaiVertexV1VideoDelta
   */
  public function getVideo()
  {
    return $this->video;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GenaiVertexV1StepDeltaData::class, 'Google_Service_Aiplatform_GenaiVertexV1StepDeltaData');
