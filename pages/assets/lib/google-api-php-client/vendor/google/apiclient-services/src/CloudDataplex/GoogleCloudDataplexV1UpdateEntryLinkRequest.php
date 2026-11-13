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

class GoogleCloudDataplexV1UpdateEntryLinkRequest extends \Google\Collection
{
  protected $collection_key = 'aspectKeys';
  /**
   * Optional. If set to true and the entry link doesn't exist, the service will
   * create it.
   *
   * @var bool
   */
  public $allowMissing;
  /**
   * Optional. The map keys of the Aspects which the service should modify. It
   * should be the aspect type reference in the format
   * {project_id_or_number}.{location_id}.{aspect_type_id}.If this field is left
   * empty, the service treats it as specifying exactly those Aspects present in
   * the request.
   *
   * @var string[]
   */
  public $aspectKeys;
  protected $entryLinkType = GoogleCloudDataplexV1EntryLink::class;
  protected $entryLinkDataType = '';

  /**
   * Optional. If set to true and the entry link doesn't exist, the service will
   * create it.
   *
   * @param bool $allowMissing
   */
  public function setAllowMissing($allowMissing)
  {
    $this->allowMissing = $allowMissing;
  }
  /**
   * @return bool
   */
  public function getAllowMissing()
  {
    return $this->allowMissing;
  }
  /**
   * Optional. The map keys of the Aspects which the service should modify. It
   * should be the aspect type reference in the format
   * {project_id_or_number}.{location_id}.{aspect_type_id}.If this field is left
   * empty, the service treats it as specifying exactly those Aspects present in
   * the request.
   *
   * @param string[] $aspectKeys
   */
  public function setAspectKeys($aspectKeys)
  {
    $this->aspectKeys = $aspectKeys;
  }
  /**
   * @return string[]
   */
  public function getAspectKeys()
  {
    return $this->aspectKeys;
  }
  /**
   * Required. Entry Link resource.
   *
   * @param GoogleCloudDataplexV1EntryLink $entryLink
   */
  public function setEntryLink(GoogleCloudDataplexV1EntryLink $entryLink)
  {
    $this->entryLink = $entryLink;
  }
  /**
   * @return GoogleCloudDataplexV1EntryLink
   */
  public function getEntryLink()
  {
    return $this->entryLink;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDataplexV1UpdateEntryLinkRequest::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1UpdateEntryLinkRequest');
