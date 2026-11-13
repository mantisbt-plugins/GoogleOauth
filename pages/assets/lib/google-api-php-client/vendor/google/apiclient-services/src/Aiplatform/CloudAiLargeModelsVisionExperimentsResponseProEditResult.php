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

class CloudAiLargeModelsVisionExperimentsResponseProEditResult extends \Google\Model
{
  /**
   * The output structured prompt (JSON string) produced by this edit.
   *
   * @var string
   */
  public $structuredPrompt;

  /**
   * The output structured prompt (JSON string) produced by this edit.
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
class_alias(CloudAiLargeModelsVisionExperimentsResponseProEditResult::class, 'Google_Service_Aiplatform_CloudAiLargeModelsVisionExperimentsResponseProEditResult');
