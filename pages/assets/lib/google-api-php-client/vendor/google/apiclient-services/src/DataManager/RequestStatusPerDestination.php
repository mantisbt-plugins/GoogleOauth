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

class RequestStatusPerDestination extends \Google\Model
{
  public const REQUEST_STATUS_REQUEST_STATUS_UNKNOWN = 'REQUEST_STATUS_UNKNOWN';
  public const REQUEST_STATUS_SUCCESS = 'SUCCESS';
  public const REQUEST_STATUS_PROCESSING = 'PROCESSING';
  public const REQUEST_STATUS_FAILED = 'FAILED';
  public const REQUEST_STATUS_PARTIAL_SUCCESS = 'PARTIAL_SUCCESS';
  protected $audienceMembersIngestionStatusType = IngestAudienceMembersStatus::class;
  protected $audienceMembersIngestionStatusDataType = '';
  protected $audienceMembersRemovalStatusType = RemoveAudienceMembersStatus::class;
  protected $audienceMembersRemovalStatusDataType = '';
  protected $destinationType = Destination::class;
  protected $destinationDataType = '';
  protected $errorInfoType = ErrorInfo::class;
  protected $errorInfoDataType = '';
  protected $eventsIngestionStatusType = IngestEventsStatus::class;
  protected $eventsIngestionStatusDataType = '';
  protected $removeAllAudienceMembersStatusType = RemoveAllAudienceMembersStatus::class;
  protected $removeAllAudienceMembersStatusDataType = '';
  /**
   * @var string
   */
  public $requestStatus;
  protected $warningInfoType = WarningInfo::class;
  protected $warningInfoDataType = '';

  /**
   * @param IngestAudienceMembersStatus $audienceMembersIngestionStatus
   */
  public function setAudienceMembersIngestionStatus(IngestAudienceMembersStatus $audienceMembersIngestionStatus)
  {
    $this->audienceMembersIngestionStatus = $audienceMembersIngestionStatus;
  }
  /**
   * @return IngestAudienceMembersStatus
   */
  public function getAudienceMembersIngestionStatus()
  {
    return $this->audienceMembersIngestionStatus;
  }
  /**
   * @param RemoveAudienceMembersStatus $audienceMembersRemovalStatus
   */
  public function setAudienceMembersRemovalStatus(RemoveAudienceMembersStatus $audienceMembersRemovalStatus)
  {
    $this->audienceMembersRemovalStatus = $audienceMembersRemovalStatus;
  }
  /**
   * @return RemoveAudienceMembersStatus
   */
  public function getAudienceMembersRemovalStatus()
  {
    return $this->audienceMembersRemovalStatus;
  }
  /**
   * @param Destination $destination
   */
  public function setDestination(Destination $destination)
  {
    $this->destination = $destination;
  }
  /**
   * @return Destination
   */
  public function getDestination()
  {
    return $this->destination;
  }
  /**
   * @param ErrorInfo $errorInfo
   */
  public function setErrorInfo(ErrorInfo $errorInfo)
  {
    $this->errorInfo = $errorInfo;
  }
  /**
   * @return ErrorInfo
   */
  public function getErrorInfo()
  {
    return $this->errorInfo;
  }
  /**
   * @param IngestEventsStatus $eventsIngestionStatus
   */
  public function setEventsIngestionStatus(IngestEventsStatus $eventsIngestionStatus)
  {
    $this->eventsIngestionStatus = $eventsIngestionStatus;
  }
  /**
   * @return IngestEventsStatus
   */
  public function getEventsIngestionStatus()
  {
    return $this->eventsIngestionStatus;
  }
  /**
   * @param RemoveAllAudienceMembersStatus $removeAllAudienceMembersStatus
   */
  public function setRemoveAllAudienceMembersStatus(RemoveAllAudienceMembersStatus $removeAllAudienceMembersStatus)
  {
    $this->removeAllAudienceMembersStatus = $removeAllAudienceMembersStatus;
  }
  /**
   * @return RemoveAllAudienceMembersStatus
   */
  public function getRemoveAllAudienceMembersStatus()
  {
    return $this->removeAllAudienceMembersStatus;
  }
  /**
   * @param self::REQUEST_STATUS_* $requestStatus
   */
  public function setRequestStatus($requestStatus)
  {
    $this->requestStatus = $requestStatus;
  }
  /**
   * @return self::REQUEST_STATUS_*
   */
  public function getRequestStatus()
  {
    return $this->requestStatus;
  }
  /**
   * @param WarningInfo $warningInfo
   */
  public function setWarningInfo(WarningInfo $warningInfo)
  {
    $this->warningInfo = $warningInfo;
  }
  /**
   * @return WarningInfo
   */
  public function getWarningInfo()
  {
    return $this->warningInfo;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RequestStatusPerDestination::class, 'Google_Service_DataManager_RequestStatusPerDestination');
