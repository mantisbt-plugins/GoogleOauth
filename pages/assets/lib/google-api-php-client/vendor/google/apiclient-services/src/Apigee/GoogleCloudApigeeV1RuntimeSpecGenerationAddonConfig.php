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

namespace Google\Service\Apigee;

class GoogleCloudApigeeV1RuntimeSpecGenerationAddonConfig extends \Google\Model
{
  /**
   * Full Pub/Sub topic path in the Apigee Runtime Tenant Project where the
   * Schema Inferring Engine publishes inferred ApiObservation messages. Format:
   * projects/{project}/topics/{topic}. Same sentinel semantics as
   * raw_observations_pubsub_topic. Default: empty string.
   *
   * @var string
   */
  public $apiObservationsPubsubTopic;
  /**
   * Whether the Spec Generation add-on is active for this environment. Default:
   * false.
   *
   * @var bool
   */
  public $enabled;
  /**
   * ISO-8601 timestamp until which Spec Generation remains active (e.g.
   * "2026-12-31T23:59:59Z"). Empty string is the canonical "not configured"
   * sentinel and MUST be treated by the consumer as "expired" (short-circuit
   * before parsing). Default: empty string.
   *
   * @var string
   */
  public $enabledUntil;
  /**
   * Full Pub/Sub topic path in the Apigee Runtime Tenant Project where the
   * message processor publishes captured RawObservation messages. Format:
   * projects/{project}/topics/{topic}. Empty string is the "not configured"
   * sentinel; the consumer short-circuits publishing when empty. Default: empty
   * string.
   *
   * @var string
   */
  public $rawObservationsPubsubTopic;
  /**
   * Fraction of eligible transactions to capture, in [0.0, 1.0]. The consumer
   * enforces an internal upper-bound clamp independently of this field.
   * Default: 0.0 (omitted from JSON per proto3 default-scalar-omission; the
   * consumer's field initializer supplies the effective 0.01 fallback).
   *
   * @var 
   */
  public $samplingRate;

  /**
   * Full Pub/Sub topic path in the Apigee Runtime Tenant Project where the
   * Schema Inferring Engine publishes inferred ApiObservation messages. Format:
   * projects/{project}/topics/{topic}. Same sentinel semantics as
   * raw_observations_pubsub_topic. Default: empty string.
   *
   * @param string $apiObservationsPubsubTopic
   */
  public function setApiObservationsPubsubTopic($apiObservationsPubsubTopic)
  {
    $this->apiObservationsPubsubTopic = $apiObservationsPubsubTopic;
  }
  /**
   * @return string
   */
  public function getApiObservationsPubsubTopic()
  {
    return $this->apiObservationsPubsubTopic;
  }
  /**
   * Whether the Spec Generation add-on is active for this environment. Default:
   * false.
   *
   * @param bool $enabled
   */
  public function setEnabled($enabled)
  {
    $this->enabled = $enabled;
  }
  /**
   * @return bool
   */
  public function getEnabled()
  {
    return $this->enabled;
  }
  /**
   * ISO-8601 timestamp until which Spec Generation remains active (e.g.
   * "2026-12-31T23:59:59Z"). Empty string is the canonical "not configured"
   * sentinel and MUST be treated by the consumer as "expired" (short-circuit
   * before parsing). Default: empty string.
   *
   * @param string $enabledUntil
   */
  public function setEnabledUntil($enabledUntil)
  {
    $this->enabledUntil = $enabledUntil;
  }
  /**
   * @return string
   */
  public function getEnabledUntil()
  {
    return $this->enabledUntil;
  }
  /**
   * Full Pub/Sub topic path in the Apigee Runtime Tenant Project where the
   * message processor publishes captured RawObservation messages. Format:
   * projects/{project}/topics/{topic}. Empty string is the "not configured"
   * sentinel; the consumer short-circuits publishing when empty. Default: empty
   * string.
   *
   * @param string $rawObservationsPubsubTopic
   */
  public function setRawObservationsPubsubTopic($rawObservationsPubsubTopic)
  {
    $this->rawObservationsPubsubTopic = $rawObservationsPubsubTopic;
  }
  /**
   * @return string
   */
  public function getRawObservationsPubsubTopic()
  {
    return $this->rawObservationsPubsubTopic;
  }
  public function setSamplingRate($samplingRate)
  {
    $this->samplingRate = $samplingRate;
  }
  public function getSamplingRate()
  {
    return $this->samplingRate;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudApigeeV1RuntimeSpecGenerationAddonConfig::class, 'Google_Service_Apigee_GoogleCloudApigeeV1RuntimeSpecGenerationAddonConfig');
