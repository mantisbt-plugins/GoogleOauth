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

namespace Google\Service\DataManager;

class IngestAdEventsRequest extends \Google\Collection
{
  protected $collection_key = 'adEvents';
  protected $adEventsType = AdEvent::class;
  protected $adEventsDataType = 'array';
  protected $encryptionInfoType = EncryptionInfo::class;
  protected $encryptionInfoDataType = '';
  /**
   * @deprecated
   * @var bool
   */
  public $validateOnly;

  /**
   * @param AdEvent[] $adEvents
   */
  public function setAdEvents($adEvents)
  {
    $this->adEvents = $adEvents;
  }
  /**
   * @return AdEvent[]
   */
  public function getAdEvents()
  {
    return $this->adEvents;
  }
  /**
   * @param EncryptionInfo $encryptionInfo
   */
  public function setEncryptionInfo(EncryptionInfo $encryptionInfo)
  {
    $this->encryptionInfo = $encryptionInfo;
  }
  /**
   * @return EncryptionInfo
   */
  public function getEncryptionInfo()
  {
    return $this->encryptionInfo;
  }
  /**
   * @deprecated
   * @param bool $validateOnly
   */
  public function setValidateOnly($validateOnly)
  {
    $this->validateOnly = $validateOnly;
  }
  /**
   * @deprecated
   * @return bool
   */
  public function getValidateOnly()
  {
    return $this->validateOnly;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(IngestAdEventsRequest::class, 'Google_Service_DataManager_IngestAdEventsRequest');
