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

namespace Google\Service\Aiplatform;

class GoogleCloudAiplatformV1SemanticGovernancePolicyEngine extends \Google\Model
{
  /**
   * Default value. This value is unused.
   */
  public const STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * A provisioning operation is in progress. The engine will transition to
   * ACTIVE on success or FAILED on failure.
   */
  public const STATE_PROVISIONING = 'PROVISIONING';
  /**
   * The engine and all of its gateway configurations are provisioned and ready
   * to serve traffic.
   */
  public const STATE_ACTIVE = 'ACTIVE';
  /**
   * A deprovisioning operation is in progress. The engine will transition to
   * INACTIVE on success or FAILED on failure.
   */
  public const STATE_DEPROVISIONING = 'DEPROVISIONING';
  /**
   * The engine has no provisioned infrastructure: either never provisioned, or
   * successfully deprovisioned.
   */
  public const STATE_INACTIVE = 'INACTIVE';
  /**
   * The most recent provisioning or deprovisioning operation failed. The engine
   * may have partial infrastructure that needs explicit deprovision; the engine
   * may be either re-provisioned or deprovisioned to recover.
   */
  public const STATE_FAILED = 'FAILED';
  /**
   * Output only. Timestamp when this SemanticGovernancePolicyEngine was
   * created.
   *
   * @var string
   */
  public $createTime;
  protected $gatewayConfigsType = GoogleCloudAiplatformV1GatewayConfig::class;
  protected $gatewayConfigsDataType = 'map';
  /**
   * Output only. The private IPv4 address of the PSC endpoint.
   *
   * @var string
   */
  public $ipAddress;
  /**
   * Identifier. The resource name of the SemanticGovernancePolicyEngine.
   * Format:
   * projects/{project}/locations/{location}/semanticGovernancePolicyEngine
   *
   * @var string
   */
  public $name;
  /**
   * Output only. The URI of the PSC endpoint resource created in customer
   * project. Format:
   * projects/{project}/regions/{region}/forwardingRules/{forwarding_rule}
   *
   * @var string
   */
  public $pscForwardingRule;
  /**
   * Output only. URI of the PSC attachment resource provided by SGP. Format:
   * projects/{project}/regions/{region}/serviceAttachments/{service_attachment}
   *
   * @var string
   */
  public $pscServiceAttachment;
  /**
   * Output only. The state of the SemanticGovernancePolicyEngine.
   *
   * @var string
   */
  public $state;
  /**
   * Output only. Timestamp when this SemanticGovernancePolicyEngine was last
   * updated.
   *
   * @var string
   */
  public $updateTime;

  /**
   * Output only. Timestamp when this SemanticGovernancePolicyEngine was
   * created.
   *
   * @param string $createTime
   */
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  /**
   * @return string
   */
  public function getCreateTime()
  {
    return $this->createTime;
  }
  /**
   * Optional. Configurations for gateways. The keys are user-defined names for
   * each gateway. At most 5 gateway configurations are allowed.
   *
   * @param GoogleCloudAiplatformV1GatewayConfig[] $gatewayConfigs
   */
  public function setGatewayConfigs($gatewayConfigs)
  {
    $this->gatewayConfigs = $gatewayConfigs;
  }
  /**
   * @return GoogleCloudAiplatformV1GatewayConfig[]
   */
  public function getGatewayConfigs()
  {
    return $this->gatewayConfigs;
  }
  /**
   * Output only. The private IPv4 address of the PSC endpoint.
   *
   * @param string $ipAddress
   */
  public function setIpAddress($ipAddress)
  {
    $this->ipAddress = $ipAddress;
  }
  /**
   * @return string
   */
  public function getIpAddress()
  {
    return $this->ipAddress;
  }
  /**
   * Identifier. The resource name of the SemanticGovernancePolicyEngine.
   * Format:
   * projects/{project}/locations/{location}/semanticGovernancePolicyEngine
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
   * Output only. The URI of the PSC endpoint resource created in customer
   * project. Format:
   * projects/{project}/regions/{region}/forwardingRules/{forwarding_rule}
   *
   * @param string $pscForwardingRule
   */
  public function setPscForwardingRule($pscForwardingRule)
  {
    $this->pscForwardingRule = $pscForwardingRule;
  }
  /**
   * @return string
   */
  public function getPscForwardingRule()
  {
    return $this->pscForwardingRule;
  }
  /**
   * Output only. URI of the PSC attachment resource provided by SGP. Format:
   * projects/{project}/regions/{region}/serviceAttachments/{service_attachment}
   *
   * @param string $pscServiceAttachment
   */
  public function setPscServiceAttachment($pscServiceAttachment)
  {
    $this->pscServiceAttachment = $pscServiceAttachment;
  }
  /**
   * @return string
   */
  public function getPscServiceAttachment()
  {
    return $this->pscServiceAttachment;
  }
  /**
   * Output only. The state of the SemanticGovernancePolicyEngine.
   *
   * Accepted values: STATE_UNSPECIFIED, PROVISIONING, ACTIVE, DEPROVISIONING,
   * INACTIVE, FAILED
   *
   * @param self::STATE_* $state
   */
  public function setState($state)
  {
    $this->state = $state;
  }
  /**
   * @return self::STATE_*
   */
  public function getState()
  {
    return $this->state;
  }
  /**
   * Output only. Timestamp when this SemanticGovernancePolicyEngine was last
   * updated.
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
class_alias(GoogleCloudAiplatformV1SemanticGovernancePolicyEngine::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1SemanticGovernancePolicyEngine');
