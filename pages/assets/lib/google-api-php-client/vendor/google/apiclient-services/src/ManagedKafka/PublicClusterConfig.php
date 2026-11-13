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

namespace Google\Service\ManagedKafka;

class PublicClusterConfig extends \Google\Collection
{
  protected $collection_key = 'allowedSourceIpRanges';
  /**
   * Required. The list of IPv4 ranges in CIDR notation that are allowed to
   * connect to the public Kafka broker endpoints. The Kafka cluster should only
   * be exposed to trusted external ranges. A maximum of 500 IP ranges can be
   * specified and no single range can be larger than a `/16`. This field is
   * required if PublicClusterConfig is specified.
   *
   * @var string[]
   */
  public $allowedSourceIpRanges;

  /**
   * Required. The list of IPv4 ranges in CIDR notation that are allowed to
   * connect to the public Kafka broker endpoints. The Kafka cluster should only
   * be exposed to trusted external ranges. A maximum of 500 IP ranges can be
   * specified and no single range can be larger than a `/16`. This field is
   * required if PublicClusterConfig is specified.
   *
   * @param string[] $allowedSourceIpRanges
   */
  public function setAllowedSourceIpRanges($allowedSourceIpRanges)
  {
    $this->allowedSourceIpRanges = $allowedSourceIpRanges;
  }
  /**
   * @return string[]
   */
  public function getAllowedSourceIpRanges()
  {
    return $this->allowedSourceIpRanges;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PublicClusterConfig::class, 'Google_Service_ManagedKafka_PublicClusterConfig');
