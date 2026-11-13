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

namespace Google\Service\SecurityCommandCenter;

class GoogleCloudSecuritycenterV2DetectorReference extends \Google\Model
{
  public const SEVERITY_SEVERITY_UNSPECIFIED = 'SEVERITY_UNSPECIFIED';
  public const SEVERITY_CRITICAL = 'CRITICAL';
  public const SEVERITY_HIGH = 'HIGH';
  public const SEVERITY_MEDIUM = 'MEDIUM';
  public const SEVERITY_LOW = 'LOW';
  /**
   * @var string
   */
  public $detectorId;
  /**
   * @var string
   */
  public $displayName;
  /**
   * @var string
   */
  public $explanation;
  /**
   * @var string
   */
  public $recommendation;
  /**
   * @var string
   */
  public $severity;

  /**
   * @param string $detectorId
   */
  public function setDetectorId($detectorId)
  {
    $this->detectorId = $detectorId;
  }
  /**
   * @return string
   */
  public function getDetectorId()
  {
    return $this->detectorId;
  }
  /**
   * @param string $displayName
   */
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /**
   * @return string
   */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /**
   * @param string $explanation
   */
  public function setExplanation($explanation)
  {
    $this->explanation = $explanation;
  }
  /**
   * @return string
   */
  public function getExplanation()
  {
    return $this->explanation;
  }
  /**
   * @param string $recommendation
   */
  public function setRecommendation($recommendation)
  {
    $this->recommendation = $recommendation;
  }
  /**
   * @return string
   */
  public function getRecommendation()
  {
    return $this->recommendation;
  }
  /**
   * @param self::SEVERITY_* $severity
   */
  public function setSeverity($severity)
  {
    $this->severity = $severity;
  }
  /**
   * @return self::SEVERITY_*
   */
  public function getSeverity()
  {
    return $this->severity;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudSecuritycenterV2DetectorReference::class, 'Google_Service_SecurityCommandCenter_GoogleCloudSecuritycenterV2DetectorReference');
