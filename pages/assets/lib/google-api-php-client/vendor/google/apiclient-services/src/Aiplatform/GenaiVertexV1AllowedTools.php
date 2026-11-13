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

class GenaiVertexV1AllowedTools extends \Google\Collection
{
  /**
   * Default value. This value is unused.
   */
  public const MODE_TOOL_CHOICE_TYPE_UNSPECIFIED = 'TOOL_CHOICE_TYPE_UNSPECIFIED';
  /**
   * Auto tool choice.
   */
  public const MODE_AUTO = 'AUTO';
  /**
   * Any tool choice.
   */
  public const MODE_ANY = 'ANY';
  /**
   * No tool choice.
   */
  public const MODE_NONE = 'NONE';
  /**
   * Validated tool choice.
   */
  public const MODE_VALIDATED = 'VALIDATED';
  protected $collection_key = 'tools';
  /**
   * The mode of the tool choice.
   *
   * @var string
   */
  public $mode;
  /**
   * The names of the allowed tools.
   *
   * @var string[]
   */
  public $tools;

  /**
   * The mode of the tool choice.
   *
   * Accepted values: TOOL_CHOICE_TYPE_UNSPECIFIED, AUTO, ANY, NONE, VALIDATED
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
   * The names of the allowed tools.
   *
   * @param string[] $tools
   */
  public function setTools($tools)
  {
    $this->tools = $tools;
  }
  /**
   * @return string[]
   */
  public function getTools()
  {
    return $this->tools;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GenaiVertexV1AllowedTools::class, 'Google_Service_Aiplatform_GenaiVertexV1AllowedTools');
