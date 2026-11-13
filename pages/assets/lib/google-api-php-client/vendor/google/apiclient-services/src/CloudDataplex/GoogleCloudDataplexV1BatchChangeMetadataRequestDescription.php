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

class GoogleCloudDataplexV1BatchChangeMetadataRequestDescription extends \Google\Model
{
  /**
   * Optional. The text description content.
   *
   * @var string
   */
  public $content;
  protected $jobType = GoogleCloudDataplexV1BatchChangeMetadataRequestDescriptionJob::class;
  protected $jobDataType = '';

  /**
   * Optional. The text description content.
   *
   * @param string $content
   */
  public function setContent($content)
  {
    $this->content = $content;
  }
  /**
   * @return string
   */
  public function getContent()
  {
    return $this->content;
  }
  /**
   * Optional. The job that created the batch change.
   *
   * @param GoogleCloudDataplexV1BatchChangeMetadataRequestDescriptionJob $job
   */
  public function setJob(GoogleCloudDataplexV1BatchChangeMetadataRequestDescriptionJob $job)
  {
    $this->job = $job;
  }
  /**
   * @return GoogleCloudDataplexV1BatchChangeMetadataRequestDescriptionJob
   */
  public function getJob()
  {
    return $this->job;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDataplexV1BatchChangeMetadataRequestDescription::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1BatchChangeMetadataRequestDescription');
