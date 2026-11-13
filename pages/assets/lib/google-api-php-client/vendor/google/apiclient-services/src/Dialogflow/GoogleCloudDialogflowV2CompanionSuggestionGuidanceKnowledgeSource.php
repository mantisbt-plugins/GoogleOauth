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

class GoogleCloudDialogflowV2CompanionSuggestionGuidanceKnowledgeSource extends \Google\Model
{
  /**
   * @var string
   */
  public $knowledgeArticleTitle;
  /**
   * @var string
   */
  public $knowledgeArticleUrl;
  /**
   * @var string
   */
  public $knowledgeSnippet;

  /**
   * @param string $knowledgeArticleTitle
   */
  public function setKnowledgeArticleTitle($knowledgeArticleTitle)
  {
    $this->knowledgeArticleTitle = $knowledgeArticleTitle;
  }
  /**
   * @return string
   */
  public function getKnowledgeArticleTitle()
  {
    return $this->knowledgeArticleTitle;
  }
  /**
   * @param string $knowledgeArticleUrl
   */
  public function setKnowledgeArticleUrl($knowledgeArticleUrl)
  {
    $this->knowledgeArticleUrl = $knowledgeArticleUrl;
  }
  /**
   * @return string
   */
  public function getKnowledgeArticleUrl()
  {
    return $this->knowledgeArticleUrl;
  }
  /**
   * @param string $knowledgeSnippet
   */
  public function setKnowledgeSnippet($knowledgeSnippet)
  {
    $this->knowledgeSnippet = $knowledgeSnippet;
  }
  /**
   * @return string
   */
  public function getKnowledgeSnippet()
  {
    return $this->knowledgeSnippet;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDialogflowV2CompanionSuggestionGuidanceKnowledgeSource::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2CompanionSuggestionGuidanceKnowledgeSource');
