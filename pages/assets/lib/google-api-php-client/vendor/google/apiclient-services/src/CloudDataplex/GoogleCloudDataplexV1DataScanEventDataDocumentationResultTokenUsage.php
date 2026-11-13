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

namespace Google\Service\CloudDataplex;

class GoogleCloudDataplexV1DataScanEventDataDocumentationResultTokenUsage extends \Google\Model
{
  /**
   * Billable cached content tokens (billed at discounted prompt caching SKU).
   *
   * @var string
   */
  public $cachedContentTokenCount;
  /**
   * Generated candidate response tokens.
   *
   * @var string
   */
  public $candidatesTokenCount;
  /**
   * Billable non-cached input tokens.
   *
   * @var string
   */
  public $inputTokenCount;
  /**
   * Billable output tokens (candidates + thoughts).
   *
   * @var string
   */
  public $outputTokenCount;
  /**
   * Base prompt and system instructions tokens.
   *
   * @var string
   */
  public $promptTokenCount;
  /**
   * Reasoning / Chain-of-Thought tokens.
   *
   * @var string
   */
  public $thoughtsTokenCount;
  /**
   * Tool use context tokens (schema, profile, query history).
   *
   * @var string
   */
  public $toolUsePromptTokenCount;
  /**
   * Total billable tokens (billable_input + billable_cached + billable_output).
   * Evaluates to 0 for failed or cancelled jobs.
   *
   * @var string
   */
  public $totalTokenCount;

  /**
   * Billable cached content tokens (billed at discounted prompt caching SKU).
   *
   * @param string $cachedContentTokenCount
   */
  public function setCachedContentTokenCount($cachedContentTokenCount)
  {
    $this->cachedContentTokenCount = $cachedContentTokenCount;
  }
  /**
   * @return string
   */
  public function getCachedContentTokenCount()
  {
    return $this->cachedContentTokenCount;
  }
  /**
   * Generated candidate response tokens.
   *
   * @param string $candidatesTokenCount
   */
  public function setCandidatesTokenCount($candidatesTokenCount)
  {
    $this->candidatesTokenCount = $candidatesTokenCount;
  }
  /**
   * @return string
   */
  public function getCandidatesTokenCount()
  {
    return $this->candidatesTokenCount;
  }
  /**
   * Billable non-cached input tokens.
   *
   * @param string $inputTokenCount
   */
  public function setInputTokenCount($inputTokenCount)
  {
    $this->inputTokenCount = $inputTokenCount;
  }
  /**
   * @return string
   */
  public function getInputTokenCount()
  {
    return $this->inputTokenCount;
  }
  /**
   * Billable output tokens (candidates + thoughts).
   *
   * @param string $outputTokenCount
   */
  public function setOutputTokenCount($outputTokenCount)
  {
    $this->outputTokenCount = $outputTokenCount;
  }
  /**
   * @return string
   */
  public function getOutputTokenCount()
  {
    return $this->outputTokenCount;
  }
  /**
   * Base prompt and system instructions tokens.
   *
   * @param string $promptTokenCount
   */
  public function setPromptTokenCount($promptTokenCount)
  {
    $this->promptTokenCount = $promptTokenCount;
  }
  /**
   * @return string
   */
  public function getPromptTokenCount()
  {
    return $this->promptTokenCount;
  }
  /**
   * Reasoning / Chain-of-Thought tokens.
   *
   * @param string $thoughtsTokenCount
   */
  public function setThoughtsTokenCount($thoughtsTokenCount)
  {
    $this->thoughtsTokenCount = $thoughtsTokenCount;
  }
  /**
   * @return string
   */
  public function getThoughtsTokenCount()
  {
    return $this->thoughtsTokenCount;
  }
  /**
   * Tool use context tokens (schema, profile, query history).
   *
   * @param string $toolUsePromptTokenCount
   */
  public function setToolUsePromptTokenCount($toolUsePromptTokenCount)
  {
    $this->toolUsePromptTokenCount = $toolUsePromptTokenCount;
  }
  /**
   * @return string
   */
  public function getToolUsePromptTokenCount()
  {
    return $this->toolUsePromptTokenCount;
  }
  /**
   * Total billable tokens (billable_input + billable_cached + billable_output).
   * Evaluates to 0 for failed or cancelled jobs.
   *
   * @param string $totalTokenCount
   */
  public function setTotalTokenCount($totalTokenCount)
  {
    $this->totalTokenCount = $totalTokenCount;
  }
  /**
   * @return string
   */
  public function getTotalTokenCount()
  {
    return $this->totalTokenCount;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDataplexV1DataScanEventDataDocumentationResultTokenUsage::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1DataScanEventDataDocumentationResultTokenUsage');
