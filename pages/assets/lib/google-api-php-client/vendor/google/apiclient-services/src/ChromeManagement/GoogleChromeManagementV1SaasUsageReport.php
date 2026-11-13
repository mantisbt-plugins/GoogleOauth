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

namespace Google\Service\ChromeManagement;

class GoogleChromeManagementV1SaasUsageReport extends \Google\Collection
{
  protected $collection_key = 'encryptionProtocols';
  /**
   * Output only. The name of the application.
   *
   * @var string
   */
  public $app;
  /**
   * Output only. The category of the application.
   *
   * @var string
   */
  public $category;
  protected $contentTransferDetailsType = GoogleChromeManagementV1SaasUsageReportContentTransferDetails::class;
  protected $contentTransferDetailsDataType = '';
  /**
   * Output only. Number of distinct browsers that visited the application.
   *
   * @var string
   */
  public $distinctBrowsersCount;
  /**
   * Output only. Number of distinct users who visited the application.
   *
   * @var string
   */
  public $distinctUsersCount;
  /**
   * Output only. A list of domains and subdomains associated with the
   * application.
   *
   * @var string[]
   */
  public $domains;
  /**
   * Output only. A list of encryption protocols used to access the application.
   *
   * @var string[]
   */
  public $encryptionProtocols;
  /**
   * Output only. The timestamp when the application was first navigated to.
   *
   * @var string
   */
  public $firstNavigationTime;
  /**
   * Output only. The year the organization was founded.
   *
   * @var int
   */
  public $foundedYear;
  /**
   * Output only. The headquarters location of the organization.
   *
   * @var string
   */
  public $headquarters;
  /**
   * Output only. The timestamp when the application was last navigated to.
   *
   * @var string
   */
  public $lastNavigationTime;
  /**
   * Output only. The ID of the organizational unit.
   *
   * @var string
   */
  public $orgUnitId;
  /**
   * Output only. The organization that develops the application.
   *
   * @var string
   */
  public $organization;
  /**
   * Output only. The primary domain of the application.
   *
   * @var string
   */
  public $primaryDomain;
  /**
   * Output only. Total number of visits to the application.
   *
   * @var string
   */
  public $visitsCount;

  /**
   * Output only. The name of the application.
   *
   * @param string $app
   */
  public function setApp($app)
  {
    $this->app = $app;
  }
  /**
   * @return string
   */
  public function getApp()
  {
    return $this->app;
  }
  /**
   * Output only. The category of the application.
   *
   * @param string $category
   */
  public function setCategory($category)
  {
    $this->category = $category;
  }
  /**
   * @return string
   */
  public function getCategory()
  {
    return $this->category;
  }
  /**
   * Output only. Provides information about content transfer events, if
   * available.
   *
   * @param GoogleChromeManagementV1SaasUsageReportContentTransferDetails $contentTransferDetails
   */
  public function setContentTransferDetails(GoogleChromeManagementV1SaasUsageReportContentTransferDetails $contentTransferDetails)
  {
    $this->contentTransferDetails = $contentTransferDetails;
  }
  /**
   * @return GoogleChromeManagementV1SaasUsageReportContentTransferDetails
   */
  public function getContentTransferDetails()
  {
    return $this->contentTransferDetails;
  }
  /**
   * Output only. Number of distinct browsers that visited the application.
   *
   * @param string $distinctBrowsersCount
   */
  public function setDistinctBrowsersCount($distinctBrowsersCount)
  {
    $this->distinctBrowsersCount = $distinctBrowsersCount;
  }
  /**
   * @return string
   */
  public function getDistinctBrowsersCount()
  {
    return $this->distinctBrowsersCount;
  }
  /**
   * Output only. Number of distinct users who visited the application.
   *
   * @param string $distinctUsersCount
   */
  public function setDistinctUsersCount($distinctUsersCount)
  {
    $this->distinctUsersCount = $distinctUsersCount;
  }
  /**
   * @return string
   */
  public function getDistinctUsersCount()
  {
    return $this->distinctUsersCount;
  }
  /**
   * Output only. A list of domains and subdomains associated with the
   * application.
   *
   * @param string[] $domains
   */
  public function setDomains($domains)
  {
    $this->domains = $domains;
  }
  /**
   * @return string[]
   */
  public function getDomains()
  {
    return $this->domains;
  }
  /**
   * Output only. A list of encryption protocols used to access the application.
   *
   * @param string[] $encryptionProtocols
   */
  public function setEncryptionProtocols($encryptionProtocols)
  {
    $this->encryptionProtocols = $encryptionProtocols;
  }
  /**
   * @return string[]
   */
  public function getEncryptionProtocols()
  {
    return $this->encryptionProtocols;
  }
  /**
   * Output only. The timestamp when the application was first navigated to.
   *
   * @param string $firstNavigationTime
   */
  public function setFirstNavigationTime($firstNavigationTime)
  {
    $this->firstNavigationTime = $firstNavigationTime;
  }
  /**
   * @return string
   */
  public function getFirstNavigationTime()
  {
    return $this->firstNavigationTime;
  }
  /**
   * Output only. The year the organization was founded.
   *
   * @param int $foundedYear
   */
  public function setFoundedYear($foundedYear)
  {
    $this->foundedYear = $foundedYear;
  }
  /**
   * @return int
   */
  public function getFoundedYear()
  {
    return $this->foundedYear;
  }
  /**
   * Output only. The headquarters location of the organization.
   *
   * @param string $headquarters
   */
  public function setHeadquarters($headquarters)
  {
    $this->headquarters = $headquarters;
  }
  /**
   * @return string
   */
  public function getHeadquarters()
  {
    return $this->headquarters;
  }
  /**
   * Output only. The timestamp when the application was last navigated to.
   *
   * @param string $lastNavigationTime
   */
  public function setLastNavigationTime($lastNavigationTime)
  {
    $this->lastNavigationTime = $lastNavigationTime;
  }
  /**
   * @return string
   */
  public function getLastNavigationTime()
  {
    return $this->lastNavigationTime;
  }
  /**
   * Output only. The ID of the organizational unit.
   *
   * @param string $orgUnitId
   */
  public function setOrgUnitId($orgUnitId)
  {
    $this->orgUnitId = $orgUnitId;
  }
  /**
   * @return string
   */
  public function getOrgUnitId()
  {
    return $this->orgUnitId;
  }
  /**
   * Output only. The organization that develops the application.
   *
   * @param string $organization
   */
  public function setOrganization($organization)
  {
    $this->organization = $organization;
  }
  /**
   * @return string
   */
  public function getOrganization()
  {
    return $this->organization;
  }
  /**
   * Output only. The primary domain of the application.
   *
   * @param string $primaryDomain
   */
  public function setPrimaryDomain($primaryDomain)
  {
    $this->primaryDomain = $primaryDomain;
  }
  /**
   * @return string
   */
  public function getPrimaryDomain()
  {
    return $this->primaryDomain;
  }
  /**
   * Output only. Total number of visits to the application.
   *
   * @param string $visitsCount
   */
  public function setVisitsCount($visitsCount)
  {
    $this->visitsCount = $visitsCount;
  }
  /**
   * @return string
   */
  public function getVisitsCount()
  {
    return $this->visitsCount;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleChromeManagementV1SaasUsageReport::class, 'Google_Service_ChromeManagement_GoogleChromeManagementV1SaasUsageReport');
