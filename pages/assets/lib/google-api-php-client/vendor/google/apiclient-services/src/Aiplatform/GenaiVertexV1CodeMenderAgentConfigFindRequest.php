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

class GenaiVertexV1CodeMenderAgentConfigFindRequest extends \Google\Collection
{
  /**
   * Default value. This value is unused.
   */
  public const MODE_MODE_UNSPECIFIED = 'MODE_UNSPECIFIED';
  /**
   * Fast scan using only the initial classifier.
   */
  public const MODE_MODE_SCAN = 'MODE_SCAN';
  /**
   * Performs classification followed by detailed investigation.
   */
  public const MODE_MODE_VERIFY = 'MODE_VERIFY';
  protected $collection_key = 'sourceFiles';
  /**
   * Additional context or custom instructions provided by the user to guide the
   * vulnerability analysis.
   *
   * @var string
   */
  public $description;
  /**
   * The identifier of a specific finding to verify. This is primarily used in
   * VERIFY mode to focus the agent's execution-based validation on a single
   * vulnerability.
   *
   * @var string
   */
  public $findingId;
  /**
   * The mode of the find session.
   *
   * @var string
   */
  public $mode;
  protected $sourceFilesType = GenaiVertexV1CodeMenderAgentConfigFileContent::class;
  protected $sourceFilesDataType = 'array';

  /**
   * Additional context or custom instructions provided by the user to guide the
   * vulnerability analysis.
   *
   * @param string $description
   */
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /**
   * @return string
   */
  public function getDescription()
  {
    return $this->description;
  }
  /**
   * The identifier of a specific finding to verify. This is primarily used in
   * VERIFY mode to focus the agent's execution-based validation on a single
   * vulnerability.
   *
   * @param string $findingId
   */
  public function setFindingId($findingId)
  {
    $this->findingId = $findingId;
  }
  /**
   * @return string
   */
  public function getFindingId()
  {
    return $this->findingId;
  }
  /**
   * The mode of the find session.
   *
   * Accepted values: MODE_UNSPECIFIED, MODE_SCAN, MODE_VERIFY
   *
   * @param self::MODE_* $mode
   */
  public function setMode($mode)
  {
    $this->mode = $mode;
  }
  /**
   * @return self::MODE_*
   */
  public function getMode()
  {
    return $this->mode;
  }
  /**
   * A list of source files to provide as context for the scan.
   *
   * @param GenaiVertexV1CodeMenderAgentConfigFileContent[] $sourceFiles
   */
  public function setSourceFiles($sourceFiles)
  {
    $this->sourceFiles = $sourceFiles;
  }
  /**
   * @return GenaiVertexV1CodeMenderAgentConfigFileContent[]
   */
  public function getSourceFiles()
  {
    return $this->sourceFiles;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GenaiVertexV1CodeMenderAgentConfigFindRequest::class, 'Google_Service_Aiplatform_GenaiVertexV1CodeMenderAgentConfigFindRequest');
