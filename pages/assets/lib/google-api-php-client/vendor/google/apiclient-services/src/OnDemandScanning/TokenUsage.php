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

namespace Google\Service\OnDemandScanning;

class TokenUsage extends \Google\Model
{
  /**
   * Cache matched tokens for implicit cache.
   *
   * @var string
   */
  public $cacheCount;
  /**
   * Tokens in the model response.
   *
   * @var string
   */
  public $candidateCount;
  /**
   * Tokens in the user request.
   *
   * @var string
   */
  public $promptCount;
  /**
   * Tokens in the thinking output.
   *
   * @var string
   */
  public $thinkingCount;
  /**
   * Prompt tokens for using tools.
   *
   * @var string
   */
  public $toolUsePromptCount;

  /**
   * Cache matched tokens for implicit cache.
   *
   * @param string $cacheCount
   */
  public function setCacheCount($cacheCount)
  {
    $this->cacheCount = $cacheCount;
  }
  /**
   * @return string
   */
  public function getCacheCount()
  {
    return $this->cacheCount;
  }
  /**
   * Tokens in the model response.
   *
   * @param string $candidateCount
   */
  public function setCandidateCount($candidateCount)
  {
    $this->candidateCount = $candidateCount;
  }
  /**
   * @return string
   */
  public function getCandidateCount()
  {
    return $this->candidateCount;
  }
  /**
   * Tokens in the user request.
   *
   * @param string $promptCount
   */
  public function setPromptCount($promptCount)
  {
    $this->promptCount = $promptCount;
  }
  /**
   * @return string
   */
  public function getPromptCount()
  {
    return $this->promptCount;
  }
  /**
   * Tokens in the thinking output.
   *
   * @param string $thinkingCount
   */
  public function setThinkingCount($thinkingCount)
  {
    $this->thinkingCount = $thinkingCount;
  }
  /**
   * @return string
   */
  public function getThinkingCount()
  {
    return $this->thinkingCount;
  }
  /**
   * Prompt tokens for using tools.
   *
   * @param string $toolUsePromptCount
   */
  public function setToolUsePromptCount($toolUsePromptCount)
  {
    $this->toolUsePromptCount = $toolUsePromptCount;
  }
  /**
   * @return string
   */
  public function getToolUsePromptCount()
  {
    return $this->toolUsePromptCount;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TokenUsage::class, 'Google_Service_OnDemandScanning_TokenUsage');
