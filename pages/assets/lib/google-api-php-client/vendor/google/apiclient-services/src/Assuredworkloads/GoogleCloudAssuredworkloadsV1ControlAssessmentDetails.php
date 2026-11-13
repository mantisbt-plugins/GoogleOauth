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

namespace Google\Service\Assuredworkloads;

class GoogleCloudAssuredworkloadsV1ControlAssessmentDetails extends \Google\Collection
{
  protected $collection_key = 'passingControlIds';
  /**
   * The list of controls that were assessed and are passing.
   *
   * @var string[]
   */
  public $assessedPassingControlIds;
  /**
   * The number of controls that were assessed and are passing.
   *
   * @var int
   */
  public $assessedPassingControls;
  /**
   * The list of controls that are failing.
   *
   * @var string[]
   */
  public $failingControlIds;
  /**
   * The number of controls that are failing.
   *
   * @var int
   */
  public $failingControls;
  /**
   * The list of controls that aren't assessed because they require manual
   * review.
   *
   * @var string[]
   */
  public $notAssessedControlIds;
  /**
   * The number of controls that aren't assessed because they require manual
   * review.
   *
   * @var int
   */
  public $notAssessedControls;
  /**
   * The list of controls that are passing or not assessed.
   *
   * @var string[]
   */
  public $passingControlIds;
  /**
   * The number of controls that are passing or not assessed.
   *
   * @var int
   */
  public $passingControls;

  /**
   * The list of controls that were assessed and are passing.
   *
   * @param string[] $assessedPassingControlIds
   */
  public function setAssessedPassingControlIds($assessedPassingControlIds)
  {
    $this->assessedPassingControlIds = $assessedPassingControlIds;
  }
  /**
   * @return string[]
   */
  public function getAssessedPassingControlIds()
  {
    return $this->assessedPassingControlIds;
  }
  /**
   * The number of controls that were assessed and are passing.
   *
   * @param int $assessedPassingControls
   */
  public function setAssessedPassingControls($assessedPassingControls)
  {
    $this->assessedPassingControls = $assessedPassingControls;
  }
  /**
   * @return int
   */
  public function getAssessedPassingControls()
  {
    return $this->assessedPassingControls;
  }
  /**
   * The list of controls that are failing.
   *
   * @param string[] $failingControlIds
   */
  public function setFailingControlIds($failingControlIds)
  {
    $this->failingControlIds = $failingControlIds;
  }
  /**
   * @return string[]
   */
  public function getFailingControlIds()
  {
    return $this->failingControlIds;
  }
  /**
   * The number of controls that are failing.
   *
   * @param int $failingControls
   */
  public function setFailingControls($failingControls)
  {
    $this->failingControls = $failingControls;
  }
  /**
   * @return int
   */
  public function getFailingControls()
  {
    return $this->failingControls;
  }
  /**
   * The list of controls that aren't assessed because they require manual
   * review.
   *
   * @param string[] $notAssessedControlIds
   */
  public function setNotAssessedControlIds($notAssessedControlIds)
  {
    $this->notAssessedControlIds = $notAssessedControlIds;
  }
  /**
   * @return string[]
   */
  public function getNotAssessedControlIds()
  {
    return $this->notAssessedControlIds;
  }
  /**
   * The number of controls that aren't assessed because they require manual
   * review.
   *
   * @param int $notAssessedControls
   */
  public function setNotAssessedControls($notAssessedControls)
  {
    $this->notAssessedControls = $notAssessedControls;
  }
  /**
   * @return int
   */
  public function getNotAssessedControls()
  {
    return $this->notAssessedControls;
  }
  /**
   * The list of controls that are passing or not assessed.
   *
   * @param string[] $passingControlIds
   */
  public function setPassingControlIds($passingControlIds)
  {
    $this->passingControlIds = $passingControlIds;
  }
  /**
   * @return string[]
   */
  public function getPassingControlIds()
  {
    return $this->passingControlIds;
  }
  /**
   * The number of controls that are passing or not assessed.
   *
   * @param int $passingControls
   */
  public function setPassingControls($passingControls)
  {
    $this->passingControls = $passingControls;
  }
  /**
   * @return int
   */
  public function getPassingControls()
  {
    return $this->passingControls;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAssuredworkloadsV1ControlAssessmentDetails::class, 'Google_Service_Assuredworkloads_GoogleCloudAssuredworkloadsV1ControlAssessmentDetails');
