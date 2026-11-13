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

class GenaiVertexV1DeepResearchAgentConfig extends \Google\Model
{
  /**
   * Default value. This value is unused.
   */
  public const THINKING_SUMMARIES_THINKING_SUMMARIES_UNSPECIFIED = 'THINKING_SUMMARIES_UNSPECIFIED';
  /**
   * Auto thinking summaries.
   */
  public const THINKING_SUMMARIES_THINKING_SUMMARIES_AUTO = 'THINKING_SUMMARIES_AUTO';
  /**
   * No thinking summaries.
   */
  public const THINKING_SUMMARIES_THINKING_SUMMARIES_NONE = 'THINKING_SUMMARIES_NONE';
  /**
   * The default visualization mode. Will default to AUTO.
   */
  public const VISUALIZATION_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Do not include visualizations.
   */
  public const VISUALIZATION_OFF = 'OFF';
  /**
   * Automatically include visualizations.
   */
  public const VISUALIZATION_AUTO = 'AUTO';
  /**
   * Enables human-in-the-loop planning for the Deep Research agent. If set to
   * true, the Deep Research agent will provide a research plan in its response.
   * The agent will then proceed only if the user confirms the plan in the next
   * turn.
   *
   * @var bool
   */
  public $collaborativePlanning;
  /**
   * Enables bigquery tool for the Deep Research agent.
   *
   * @var bool
   */
  public $enableBigqueryTool;
  /**
   * Whether to include thought summaries in the response.
   *
   * @var string
   */
  public $thinkingSummaries;
  /**
   * Whether to include visualizations in the response.
   *
   * @var string
   */
  public $visualization;

  /**
   * Enables human-in-the-loop planning for the Deep Research agent. If set to
   * true, the Deep Research agent will provide a research plan in its response.
   * The agent will then proceed only if the user confirms the plan in the next
   * turn.
   *
   * @param bool $collaborativePlanning
   */
  public function setCollaborativePlanning($collaborativePlanning)
  {
    $this->collaborativePlanning = $collaborativePlanning;
  }
  /**
   * @return bool
   */
  public function getCollaborativePlanning()
  {
    return $this->collaborativePlanning;
  }
  /**
   * Enables bigquery tool for the Deep Research agent.
   *
   * @param bool $enableBigqueryTool
   */
  public function setEnableBigqueryTool($enableBigqueryTool)
  {
    $this->enableBigqueryTool = $enableBigqueryTool;
  }
  /**
   * @return bool
   */
  public function getEnableBigqueryTool()
  {
    return $this->enableBigqueryTool;
  }
  /**
   * Whether to include thought summaries in the response.
   *
   * Accepted values: THINKING_SUMMARIES_UNSPECIFIED, THINKING_SUMMARIES_AUTO,
   * THINKING_SUMMARIES_NONE
   *
   * @param self::THINKING_SUMMARIES_* $thinkingSummaries
   */
  public function setThinkingSummaries($thinkingSummaries)
  {
    $this->thinkingSummaries = $thinkingSummaries;
  }
  /**
   * @return self::THINKING_SUMMARIES_*
   */
  public function getThinkingSummaries()
  {
    return $this->thinkingSummaries;
  }
  /**
   * Whether to include visualizations in the response.
   *
   * Accepted values: UNSPECIFIED, OFF, AUTO
   *
   * @param self::VISUALIZATION_* $visualization
   */
  public function setVisualization($visualization)
  {
    $this->visualization = $visualization;
  }
  /**
   * @return self::VISUALIZATION_*
   */
  public function getVisualization()
  {
    return $this->visualization;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GenaiVertexV1DeepResearchAgentConfig::class, 'Google_Service_Aiplatform_GenaiVertexV1DeepResearchAgentConfig');
