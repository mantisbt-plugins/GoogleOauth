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

class GoogleCloudDataplexV1BatchChangeMetadataRequestChange extends \Google\Model
{
  protected $createEntryLinkRequestType = GoogleCloudDataplexV1CreateEntryLinkRequest::class;
  protected $createEntryLinkRequestDataType = '';
  protected $createEntryRequestType = GoogleCloudDataplexV1CreateEntryRequest::class;
  protected $createEntryRequestDataType = '';
  protected $deleteEntryLinkRequestType = GoogleCloudDataplexV1DeleteEntryLinkRequest::class;
  protected $deleteEntryLinkRequestDataType = '';
  protected $deleteEntryRequestType = GoogleCloudDataplexV1DeleteEntryRequest::class;
  protected $deleteEntryRequestDataType = '';
  protected $updateEntryLinkRequestType = GoogleCloudDataplexV1UpdateEntryLinkRequest::class;
  protected $updateEntryLinkRequestDataType = '';
  protected $updateEntryRequestType = GoogleCloudDataplexV1UpdateEntryRequest::class;
  protected $updateEntryRequestDataType = '';

  /**
   * Payload for creating an EntryLink.
   *
   * @param GoogleCloudDataplexV1CreateEntryLinkRequest $createEntryLinkRequest
   */
  public function setCreateEntryLinkRequest(GoogleCloudDataplexV1CreateEntryLinkRequest $createEntryLinkRequest)
  {
    $this->createEntryLinkRequest = $createEntryLinkRequest;
  }
  /**
   * @return GoogleCloudDataplexV1CreateEntryLinkRequest
   */
  public function getCreateEntryLinkRequest()
  {
    return $this->createEntryLinkRequest;
  }
  /**
   * Payload for creating an Entry.
   *
   * @param GoogleCloudDataplexV1CreateEntryRequest $createEntryRequest
   */
  public function setCreateEntryRequest(GoogleCloudDataplexV1CreateEntryRequest $createEntryRequest)
  {
    $this->createEntryRequest = $createEntryRequest;
  }
  /**
   * @return GoogleCloudDataplexV1CreateEntryRequest
   */
  public function getCreateEntryRequest()
  {
    return $this->createEntryRequest;
  }
  /**
   * Payload for deleting an EntryLink.
   *
   * @param GoogleCloudDataplexV1DeleteEntryLinkRequest $deleteEntryLinkRequest
   */
  public function setDeleteEntryLinkRequest(GoogleCloudDataplexV1DeleteEntryLinkRequest $deleteEntryLinkRequest)
  {
    $this->deleteEntryLinkRequest = $deleteEntryLinkRequest;
  }
  /**
   * @return GoogleCloudDataplexV1DeleteEntryLinkRequest
   */
  public function getDeleteEntryLinkRequest()
  {
    return $this->deleteEntryLinkRequest;
  }
  /**
   * Payload for deleting an Entry.
   *
   * @param GoogleCloudDataplexV1DeleteEntryRequest $deleteEntryRequest
   */
  public function setDeleteEntryRequest(GoogleCloudDataplexV1DeleteEntryRequest $deleteEntryRequest)
  {
    $this->deleteEntryRequest = $deleteEntryRequest;
  }
  /**
   * @return GoogleCloudDataplexV1DeleteEntryRequest
   */
  public function getDeleteEntryRequest()
  {
    return $this->deleteEntryRequest;
  }
  /**
   * Payload for updating an EntryLink.
   *
   * @param GoogleCloudDataplexV1UpdateEntryLinkRequest $updateEntryLinkRequest
   */
  public function setUpdateEntryLinkRequest(GoogleCloudDataplexV1UpdateEntryLinkRequest $updateEntryLinkRequest)
  {
    $this->updateEntryLinkRequest = $updateEntryLinkRequest;
  }
  /**
   * @return GoogleCloudDataplexV1UpdateEntryLinkRequest
   */
  public function getUpdateEntryLinkRequest()
  {
    return $this->updateEntryLinkRequest;
  }
  /**
   * Payload for updating an Entry.
   *
   * @param GoogleCloudDataplexV1UpdateEntryRequest $updateEntryRequest
   */
  public function setUpdateEntryRequest(GoogleCloudDataplexV1UpdateEntryRequest $updateEntryRequest)
  {
    $this->updateEntryRequest = $updateEntryRequest;
  }
  /**
   * @return GoogleCloudDataplexV1UpdateEntryRequest
   */
  public function getUpdateEntryRequest()
  {
    return $this->updateEntryRequest;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDataplexV1BatchChangeMetadataRequestChange::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1BatchChangeMetadataRequestChange');
