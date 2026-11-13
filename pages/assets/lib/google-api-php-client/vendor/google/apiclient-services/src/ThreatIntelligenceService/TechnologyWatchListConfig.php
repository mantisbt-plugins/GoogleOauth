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

namespace Google\Service\ThreatIntelligenceService;

class TechnologyWatchListConfig extends \Google\Collection
{
  protected $collection_key = 'technologies';
  protected $alertThresholdType = TechnologyWatchListAlertThreshold::class;
  protected $alertThresholdDataType = '';
  /**
   * Optional. List of technologies to watch, one per entry, in the form `
   * [version]`, using the vendor and product names from the Google Threat
   * Intelligence products and fixes section. example: `microsoft outlook`
   * `apache http_server 2.4.54` CPE strings such as
   * `cpe:2.3:a:microsoft:outlook:*:*:*:*:*:*:*:*` are only parsed through the
   * Google Threat Intelligence interface and are not available through the API.
   * Send the vendor and product pair instead.
   *
   * @var string[]
   */
  public $technologies;

  /**
   * Optional. Alert thresholds to effectively reduce noise.
   *
   * @param TechnologyWatchListAlertThreshold $alertThreshold
   */
  public function setAlertThreshold(TechnologyWatchListAlertThreshold $alertThreshold)
  {
    $this->alertThreshold = $alertThreshold;
  }
  /**
   * @return TechnologyWatchListAlertThreshold
   */
  public function getAlertThreshold()
  {
    return $this->alertThreshold;
  }
  /**
   * Optional. List of technologies to watch, one per entry, in the form `
   * [version]`, using the vendor and product names from the Google Threat
   * Intelligence products and fixes section. example: `microsoft outlook`
   * `apache http_server 2.4.54` CPE strings such as
   * `cpe:2.3:a:microsoft:outlook:*:*:*:*:*:*:*:*` are only parsed through the
   * Google Threat Intelligence interface and are not available through the API.
   * Send the vendor and product pair instead.
   *
   * @param string[] $technologies
   */
  public function setTechnologies($technologies)
  {
    $this->technologies = $technologies;
  }
  /**
   * @return string[]
   */
  public function getTechnologies()
  {
    return $this->technologies;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TechnologyWatchListConfig::class, 'Google_Service_ThreatIntelligenceService_TechnologyWatchListConfig');
