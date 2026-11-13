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

class CloudAiLargeModelsVisionGenerateVideoExperimentsProEditConfig extends \Google\Model
{
  /**
   * A text string containing the user's edit instruction. Will be applied to
   * the original URF.
   *
   * @var string
   */
  public $editInstructionPrompt;
  /**
   * Required. The operation_id from a previous omni-cine generation whose OF
   * and URF should be retrieved for editing.
   *
   * @var string
   */
  public $fromOperationId;
  /**
   * A JSON string containing the user's modified URF. The URF Editing Preamble
   * will diff this against the original URF to determine what changed.
   *
   * @var string
   */
  public $structuredPrompt;

  /**
   * A text string containing the user's edit instruction. Will be applied to
   * the original URF.
   *
   * @param string $editInstructionPrompt
   */
  public function setEditInstructionPrompt($editInstructionPrompt)
  {
    $this->editInstructionPrompt = $editInstructionPrompt;
  }
  /**
   * @return string
   */
  public function getEditInstructionPrompt()
  {
    return $this->editInstructionPrompt;
  }
  /**
   * Required. The operation_id from a previous omni-cine generation whose OF
   * and URF should be retrieved for editing.
   *
   * @param string $fromOperationId
   */
  public function setFromOperationId($fromOperationId)
  {
    $this->fromOperationId = $fromOperationId;
  }
  /**
   * @return string
   */
  public function getFromOperationId()
  {
    return $this->fromOperationId;
  }
  /**
   * A JSON string containing the user's modified URF. The URF Editing Preamble
   * will diff this against the original URF to determine what changed.
   *
   * @param string $structuredPrompt
   */
  public function setStructuredPrompt($structuredPrompt)
  {
    $this->structuredPrompt = $structuredPrompt;
  }
  /**
   * @return string
   */
  public function getStructuredPrompt()
  {
    return $this->structuredPrompt;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CloudAiLargeModelsVisionGenerateVideoExperimentsProEditConfig::class, 'Google_Service_Aiplatform_CloudAiLargeModelsVisionGenerateVideoExperimentsProEditConfig');
