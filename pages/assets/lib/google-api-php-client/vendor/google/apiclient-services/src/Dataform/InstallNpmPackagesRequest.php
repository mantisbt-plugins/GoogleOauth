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

class InstallNpmPackagesRequest extends \Google\Model
{
  protected $pipelineConfigType = PipelineConfig::class;
  protected $pipelineConfigDataType = '';

  /**
   * Optional. The pipeline options which defines the pipeline type and path
   * within the Git repository.
   *
   * @param PipelineConfig $pipelineConfig
   */
  public function setPipelineConfig(PipelineConfig $pipelineConfig)
  {
    $this->pipelineConfig = $pipelineConfig;
  }
  /**
   * @return PipelineConfig
   */
  public function getPipelineConfig()
  {
    return $this->pipelineConfig;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(InstallNpmPackagesRequest::class, 'Google_Service_Dataform_InstallNpmPackagesRequest');
