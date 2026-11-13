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

namespace Google\Service\VMwareEngine;

class StretchedClusterConfig extends \Google\Model
{
  /**
   * Required. Zone that will remain operational when connection between the two
   * zones is lost. Specify the resource name or ID of a zone that belongs to
   * the region of the private cloud. For example:
   * `projects/{project}/locations/europe-west3-a` or `europe-west3-a`, where
   * `{project}` can either be a project number or a project ID.
   *
   * @var string
   */
  public $preferredLocation;
  /**
   * Optional. The identifier of the placement group for preferred location
   * cluster nodes. A placement group is an internal Google identifier for a
   * group of resources that are physically located within the same fault
   * domain. If provided, nodes for this cluster are placed within the specified
   * placement group. If this field is omitted, the system selects an
   * appropriate placement group.
   *
   * @var string
   */
  public $preferredLocationPlacementGroup;
  /**
   * Required. Additional zone for a higher level of availability and load
   * balancing. Specify the resource name or ID of a zone that belongs to the
   * region of the private cloud. For example:
   * `projects/{project}/locations/europe-west3-b` or `europe-west3-b`, where
   * `{project}` can either be a project number or a project ID.
   *
   * @var string
   */
  public $secondaryLocation;
  /**
   * Optional. The identifier of the placement group for secondary location
   * cluster nodes. A placement group is an internal Google identifier for a
   * group of resources that are physically located within the same fault
   * domain. If provided, nodes for this cluster are placed within the specified
   * placement group. If this field is omitted, the system selects an
   * appropriate placement group.
   *
   * @var string
   */
  public $secondaryLocationPlacementGroup;

  /**
   * Required. Zone that will remain operational when connection between the two
   * zones is lost. Specify the resource name or ID of a zone that belongs to
   * the region of the private cloud. For example:
   * `projects/{project}/locations/europe-west3-a` or `europe-west3-a`, where
   * `{project}` can either be a project number or a project ID.
   *
   * @param string $preferredLocation
   */
  public function setPreferredLocation($preferredLocation)
  {
    $this->preferredLocation = $preferredLocation;
  }
  /**
   * @return string
   */
  public function getPreferredLocation()
  {
    return $this->preferredLocation;
  }
  /**
   * Optional. The identifier of the placement group for preferred location
   * cluster nodes. A placement group is an internal Google identifier for a
   * group of resources that are physically located within the same fault
   * domain. If provided, nodes for this cluster are placed within the specified
   * placement group. If this field is omitted, the system selects an
   * appropriate placement group.
   *
   * @param string $preferredLocationPlacementGroup
   */
  public function setPreferredLocationPlacementGroup($preferredLocationPlacementGroup)
  {
    $this->preferredLocationPlacementGroup = $preferredLocationPlacementGroup;
  }
  /**
   * @return string
   */
  public function getPreferredLocationPlacementGroup()
  {
    return $this->preferredLocationPlacementGroup;
  }
  /**
   * Required. Additional zone for a higher level of availability and load
   * balancing. Specify the resource name or ID of a zone that belongs to the
   * region of the private cloud. For example:
   * `projects/{project}/locations/europe-west3-b` or `europe-west3-b`, where
   * `{project}` can either be a project number or a project ID.
   *
   * @param string $secondaryLocation
   */
  public function setSecondaryLocation($secondaryLocation)
  {
    $this->secondaryLocation = $secondaryLocation;
  }
  /**
   * @return string
   */
  public function getSecondaryLocation()
  {
    return $this->secondaryLocation;
  }
  /**
   * Optional. The identifier of the placement group for secondary location
   * cluster nodes. A placement group is an internal Google identifier for a
   * group of resources that are physically located within the same fault
   * domain. If provided, nodes for this cluster are placed within the specified
   * placement group. If this field is omitted, the system selects an
   * appropriate placement group.
   *
   * @param string $secondaryLocationPlacementGroup
   */
  public function setSecondaryLocationPlacementGroup($secondaryLocationPlacementGroup)
  {
    $this->secondaryLocationPlacementGroup = $secondaryLocationPlacementGroup;
  }
  /**
   * @return string
   */
  public function getSecondaryLocationPlacementGroup()
  {
    return $this->secondaryLocationPlacementGroup;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(StretchedClusterConfig::class, 'Google_Service_VMwareEngine_StretchedClusterConfig');
