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

namespace Google\Service\AndroidPublisher;

class NestedPolicyResponse extends \Google\Model
{
  protected $booleanResponseType = PolicyBooleanResponse::class;
  protected $booleanResponseDataType = '';
  protected $documentResponseType = PolicyDocumentResponse::class;
  protected $documentResponseDataType = '';
  protected $multipleChoiceResponseType = PolicyMultipleChoiceResponse::class;
  protected $multipleChoiceResponseDataType = '';
  /**
   * Required. ID of the question being answered.
   *
   * @var string
   */
  public $questionId;
  protected $singleChoiceResponseType = PolicySingleChoiceResponse::class;
  protected $singleChoiceResponseDataType = '';
  protected $stringResponseType = PolicyStringResponse::class;
  protected $stringResponseDataType = '';

  /**
   * Optional. A boolean response.
   *
   * @param PolicyBooleanResponse $booleanResponse
   */
  public function setBooleanResponse(PolicyBooleanResponse $booleanResponse)
  {
    $this->booleanResponse = $booleanResponse;
  }
  /**
   * @return PolicyBooleanResponse
   */
  public function getBooleanResponse()
  {
    return $this->booleanResponse;
  }
  /**
   * Optional. A document response.
   *
   * @param PolicyDocumentResponse $documentResponse
   */
  public function setDocumentResponse(PolicyDocumentResponse $documentResponse)
  {
    $this->documentResponse = $documentResponse;
  }
  /**
   * @return PolicyDocumentResponse
   */
  public function getDocumentResponse()
  {
    return $this->documentResponse;
  }
  /**
   * Optional. A multiple choice response.
   *
   * @param PolicyMultipleChoiceResponse $multipleChoiceResponse
   */
  public function setMultipleChoiceResponse(PolicyMultipleChoiceResponse $multipleChoiceResponse)
  {
    $this->multipleChoiceResponse = $multipleChoiceResponse;
  }
  /**
   * @return PolicyMultipleChoiceResponse
   */
  public function getMultipleChoiceResponse()
  {
    return $this->multipleChoiceResponse;
  }
  /**
   * Required. ID of the question being answered.
   *
   * @param string $questionId
   */
  public function setQuestionId($questionId)
  {
    $this->questionId = $questionId;
  }
  /**
   * @return string
   */
  public function getQuestionId()
  {
    return $this->questionId;
  }
  /**
   * Optional. A single choice response.
   *
   * @param PolicySingleChoiceResponse $singleChoiceResponse
   */
  public function setSingleChoiceResponse(PolicySingleChoiceResponse $singleChoiceResponse)
  {
    $this->singleChoiceResponse = $singleChoiceResponse;
  }
  /**
   * @return PolicySingleChoiceResponse
   */
  public function getSingleChoiceResponse()
  {
    return $this->singleChoiceResponse;
  }
  /**
   * Optional. A string response.
   *
   * @param PolicyStringResponse $stringResponse
   */
  public function setStringResponse(PolicyStringResponse $stringResponse)
  {
    $this->stringResponse = $stringResponse;
  }
  /**
   * @return PolicyStringResponse
   */
  public function getStringResponse()
  {
    return $this->stringResponse;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(NestedPolicyResponse::class, 'Google_Service_AndroidPublisher_NestedPolicyResponse');
