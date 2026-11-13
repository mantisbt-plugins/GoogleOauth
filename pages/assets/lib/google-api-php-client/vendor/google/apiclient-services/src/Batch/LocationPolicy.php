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

namespace Google\Service\Batch;

class LocationPolicy extends \Google\Collection
{
  protected $collection_key = 'allowedLocations';
  /**
   * A list of location names that are allowed for the job's VMs formatted as
   * URLs. Each location can be a region or a zone, but you can only specify one
   * region or multiple zones in one region per job. For example, `["regions/us-
   * central1"]` allow VMs in any zones in region `us-central1`, and
   * `["zones/us-central1-a", "zones/us-central1-c"]` only allow VMs in zones
   * `us-central1-a` and `us-central1-c`. However, `["regions/us-central1",
   * "zones/us-central1-a", "zones/us-central1-b", "zones/us-west1-a"]` causes
   * an error because it contains multiple regions (`us-central1` and `us-
   * west1`). The specified region or zones must be in the same region in which
   * the job is created starting on the following dates: + For projects that
   * have successfully submitted before July 31, 2026 at least one job that uses
   * the `allowedLocations[]` field with any region or zones outside of the
   * job's location, the changes are starting on _June 30, 2027_. + For all
   * other projects, the changes are starting on _July 31, 2026_. For example,
   * for job `projects/123/locations/us-central1/jobs/jobid`, the specified
   * region or zones must be in `us-central1`. Using a different region (e.g.
   * `regions/us-west1`) or a zone not in `us-central1` (e.g. `zones/us-
   * west1-a`) causes an error.
   *
   * @var string[]
   */
  public $allowedLocations;

  /**
   * A list of location names that are allowed for the job's VMs formatted as
   * URLs. Each location can be a region or a zone, but you can only specify one
   * region or multiple zones in one region per job. For example, `["regions/us-
   * central1"]` allow VMs in any zones in region `us-central1`, and
   * `["zones/us-central1-a", "zones/us-central1-c"]` only allow VMs in zones
   * `us-central1-a` and `us-central1-c`. However, `["regions/us-central1",
   * "zones/us-central1-a", "zones/us-central1-b", "zones/us-west1-a"]` causes
   * an error because it contains multiple regions (`us-central1` and `us-
   * west1`). The specified region or zones must be in the same region in which
   * the job is created starting on the following dates: + For projects that
   * have successfully submitted before July 31, 2026 at least one job that uses
   * the `allowedLocations[]` field with any region or zones outside of the
   * job's location, the changes are starting on _June 30, 2027_. + For all
   * other projects, the changes are starting on _July 31, 2026_. For example,
   * for job `projects/123/locations/us-central1/jobs/jobid`, the specified
   * region or zones must be in `us-central1`. Using a different region (e.g.
   * `regions/us-west1`) or a zone not in `us-central1` (e.g. `zones/us-
   * west1-a`) causes an error.
   *
   * @param string[] $allowedLocations
   */
  public function setAllowedLocations($allowedLocations)
  {
    $this->allowedLocations = $allowedLocations;
  }
  /**
   * @return string[]
   */
  public function getAllowedLocations()
  {
    return $this->allowedLocations;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(LocationPolicy::class, 'Google_Service_Batch_LocationPolicy');
