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

namespace Google\Service\BigQueryReservation;

class ReservationGroup extends \Google\Model
{
  /**
   * Output only. Creation time of the reservation group.
   *
   * @var string
   */
  public $creationTime;
  /**
   * Identifier. The resource name of the reservation group, e.g.,
   * `projects/locations/reservationGroups/team1-prod`. The reservation_group_id
   * must only contain lower case alphanumeric characters or dashes. It must
   * start with a letter and must not end with a dash. Its maximum length is 64
   * characters.
   *
   * @var string
   */
  public $name;
  /**
   * Optional. The parent reservation group of the reservation group. Format:
   * `projects/locations/reservationGroups/team1-prod` for non-root reservation
   * groups, or `projects/locations` for root reservation groups.
   *
   * @var string
   */
  public $parentGroup;
  /**
   * Output only. Last update time of the reservation group via a user
   * operation. This timestamp is updated only when an update operation
   * explicitly targets this reservation group directly. It is not updated when
   * parent or child groups are created, updated, or deleted.
   *
   * @var string
   */
  public $updateTime;

  /**
   * Output only. Creation time of the reservation group.
   *
   * @param string $creationTime
   */
  public function setCreationTime($creationTime)
  {
    $this->creationTime = $creationTime;
  }
  /**
   * @return string
   */
  public function getCreationTime()
  {
    return $this->creationTime;
  }
  /**
   * Identifier. The resource name of the reservation group, e.g.,
   * `projects/locations/reservationGroups/team1-prod`. The reservation_group_id
   * must only contain lower case alphanumeric characters or dashes. It must
   * start with a letter and must not end with a dash. Its maximum length is 64
   * characters.
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
  /**
   * Optional. The parent reservation group of the reservation group. Format:
   * `projects/locations/reservationGroups/team1-prod` for non-root reservation
   * groups, or `projects/locations` for root reservation groups.
   *
   * @param string $parentGroup
   */
  public function setParentGroup($parentGroup)
  {
    $this->parentGroup = $parentGroup;
  }
  /**
   * @return string
   */
  public function getParentGroup()
  {
    return $this->parentGroup;
  }
  /**
   * Output only. Last update time of the reservation group via a user
   * operation. This timestamp is updated only when an update operation
   * explicitly targets this reservation group directly. It is not updated when
   * parent or child groups are created, updated, or deleted.
   *
   * @param string $updateTime
   */
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  /**
   * @return string
   */
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ReservationGroup::class, 'Google_Service_BigQueryReservation_ReservationGroup');
