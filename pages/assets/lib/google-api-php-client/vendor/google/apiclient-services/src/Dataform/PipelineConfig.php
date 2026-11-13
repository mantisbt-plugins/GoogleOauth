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

namespace Google\Service\Dataform;

class PipelineConfig extends \Google\Model
{
  /**
   * Default value. This value is unused.
   */
  public const PIPELINE_TYPE_PIPELINE_TYPE_UNSPECIFIED = 'PIPELINE_TYPE_UNSPECIFIED';
  /**
   * Regular Dataform pipeline.
   */
  public const PIPELINE_TYPE_DATAFORM = 'DATAFORM';
  /**
   * SQL single file asset.
   */
  public const PIPELINE_TYPE_SQL = 'SQL';
  /**
   * Notebook single file asset.
   */
  public const PIPELINE_TYPE_NOTEBOOK = 'NOTEBOOK';
  /**
   * Required. The relative path within the Git repository where the pipeline is
   * defined. For example, for a Dataform pipeline, it is a path to the folder
   * where `workflow_settings.yaml` or `dataform.json` is located.
   *
   * @var string
   */
  public $path;
  /**
   * Required. The type of the pipeline.
   *
   * @var string
   */
  public $pipelineType;

  /**
   * Required. The relative path within the Git repository where the pipeline is
   * defined. For example, for a Dataform pipeline, it is a path to the folder
   * where `workflow_settings.yaml` or `dataform.json` is located.
   *
   * @param string $path
   */
  public function setPath($path)
  {
    $this->path = $path;
  }
  /**
   * @return string
   */
  public function getPath()
  {
    return $this->path;
  }
  /**
   * Required. The type of the pipeline.
   *
   * Accepted values: PIPELINE_TYPE_UNSPECIFIED, DATAFORM, SQL, NOTEBOOK
   *
   * @param self::PIPELINE_TYPE_* $pipelineType
   */
  public function setPipelineType($pipelineType)
  {
    $this->pipelineType = $pipelineType;
  }
  /**
   * @return self::PIPELINE_TYPE_*
   */
  public function getPipelineType()
  {
    return $this->pipelineType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PipelineConfig::class, 'Google_Service_Dataform_PipelineConfig');
