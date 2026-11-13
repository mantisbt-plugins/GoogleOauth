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

class GoogleCloudDataplexV1BatchChangeMetadataRequest extends \Google\Collection
{
  protected $collection_key = 'changes';
  protected $changesType = GoogleCloudDataplexV1BatchChangeMetadataRequestChange::class;
  protected $changesDataType = 'array';
  protected $descriptionType = GoogleCloudDataplexV1BatchChangeMetadataRequestDescription::class;
  protected $descriptionDataType = '';
  /**
   * Required. The resource name of the EntryGroup on which the batch change
   * applies. Format: projects/{project_number_or_id}/locations/{location_id}/en
   * tryGroups/{entry_group_id}
   *
   * @var string
   */
  public $name;

  /**
   * Required. The list of changes to apply. Only a single change per resource
   * is supported. Maximum number of changes supported is 250.
   *
   * @param GoogleCloudDataplexV1BatchChangeMetadataRequestChange[] $changes
   */
  public function setChanges($changes)
  {
    $this->changes = $changes;
  }
  /**
   * @return GoogleCloudDataplexV1BatchChangeMetadataRequestChange[]
   */
  public function getChanges()
  {
    return $this->changes;
  }
  /**
   * Optional. Text description of the batch change.
   *
   * @param GoogleCloudDataplexV1BatchChangeMetadataRequestDescription $description
   */
  public function setDescription(GoogleCloudDataplexV1BatchChangeMetadataRequestDescription $description)
  {
    $this->description = $description;
  }
  /**
   * @return GoogleCloudDataplexV1BatchChangeMetadataRequestDescription
   */
  public function getDescription()
  {
    return $this->description;
  }
  /**
   * Required. The resource name of the EntryGroup on which the batch change
   * applies. Format: projects/{project_number_or_id}/locations/{location_id}/en
   * tryGroups/{entry_group_id}
   *
   * @param string $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDataplexV1BatchChangeMetadataRequest::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1BatchChangeMetadataRequest');
