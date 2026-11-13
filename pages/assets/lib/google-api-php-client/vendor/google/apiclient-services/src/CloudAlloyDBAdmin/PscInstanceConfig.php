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

namespace Google\Service\CloudAlloyDBAdmin;

class PscInstanceConfig extends \Google\Collection
{
  /**
   * The state is unspecified. For old instances, this means the PSC auto
   * connection is disabled. For new instances, this means the PSC auto
   * connection is enabled by default.
   */
  public const PSC_AUTO_CONNECTION_POLICY_STATE_PSC_AUTO_CONNECTION_POLICY_STATE_UNSPECIFIED = 'PSC_AUTO_CONNECTION_POLICY_STATE_UNSPECIFIED';
  /**
   * Enables the PSC auto connection for the instance.
   */
  public const PSC_AUTO_CONNECTION_POLICY_STATE_ENABLED = 'ENABLED';
  /**
   * Disables the PSC auto connection for the instance.
   */
  public const PSC_AUTO_CONNECTION_POLICY_STATE_DISABLED = 'DISABLED';
  /**
   * The state is unspecified. For old instances, this means the PSC auto DNS is
   * disabled. For new instances, this means the PSC auto DNS is enabled by
   * default. Use `effective_psc_auto_dns_enabled` to check the effective state
   * of the PSC auto DNS.
   */
  public const PSC_AUTO_DNS_STATE_PSC_AUTO_DNS_STATE_UNSPECIFIED = 'PSC_AUTO_DNS_STATE_UNSPECIFIED';
  /**
   * Enables the PSC auto DNS for the instance.
   */
  public const PSC_AUTO_DNS_STATE_PSC_AUTO_DNS_STATE_ENABLED = 'PSC_AUTO_DNS_STATE_ENABLED';
  /**
   * Disables the PSC auto DNS for the instance.
   */
  public const PSC_AUTO_DNS_STATE_PSC_AUTO_DNS_STATE_DISABLED = 'PSC_AUTO_DNS_STATE_DISABLED';
  protected $collection_key = 'pscInterfaceConfigs';
  /**
   * Optional. List of consumer projects that are allowed to create PSC
   * endpoints to service-attachments to this instance.
   *
   * @var string[]
   */
  public $allowedConsumerProjects;
  /**
   * Optional. Configuration for setting up PSC auto connection for the
   * instance.
   *
   * @var string
   */
  public $pscAutoConnectionPolicyState;
  protected $pscAutoConnectionsType = PscAutoConnectionConfig::class;
  protected $pscAutoConnectionsDataType = 'array';
  /**
   * Optional. Configuration for setting up PSC auto DNS for the instance.
   *
   * @var string
   */
  public $pscAutoDnsState;
  /**
   * Output only. The DNS name of the instance for PSC connectivity. Name
   * convention: ...alloydb-psc.goog
   *
   * @var string
   */
  public $pscDnsName;
  protected $pscInterfaceConfigsType = PscInterfaceConfig::class;
  protected $pscInterfaceConfigsDataType = 'array';
  /**
   * Output only. The service attachment created when Private Service Connect
   * (PSC) is enabled for the instance. The name of the resource will be in the
   * format of `projects//regions//serviceAttachments/`
   *
   * @var string
   */
  public $serviceAttachmentLink;

  /**
   * Optional. List of consumer projects that are allowed to create PSC
   * endpoints to service-attachments to this instance.
   *
   * @param string[] $allowedConsumerProjects
   */
  public function setAllowedConsumerProjects($allowedConsumerProjects)
  {
    $this->allowedConsumerProjects = $allowedConsumerProjects;
  }
  /**
   * @return string[]
   */
  public function getAllowedConsumerProjects()
  {
    return $this->allowedConsumerProjects;
  }
  /**
   * Optional. Configuration for setting up PSC auto connection for the
   * instance.
   *
   * Accepted values: PSC_AUTO_CONNECTION_POLICY_STATE_UNSPECIFIED, ENABLED,
   * DISABLED
   *
   * @param self::PSC_AUTO_CONNECTION_POLICY_STATE_* $pscAutoConnectionPolicyState
   */
  public function setPscAutoConnectionPolicyState($pscAutoConnectionPolicyState)
  {
    $this->pscAutoConnectionPolicyState = $pscAutoConnectionPolicyState;
  }
  /**
   * @return self::PSC_AUTO_CONNECTION_POLICY_STATE_*
   */
  public function getPscAutoConnectionPolicyState()
  {
    return $this->pscAutoConnectionPolicyState;
  }
  /**
   * Optional. Configurations for setting up PSC service automation.
   *
   * @param PscAutoConnectionConfig[] $pscAutoConnections
   */
  public function setPscAutoConnections($pscAutoConnections)
  {
    $this->pscAutoConnections = $pscAutoConnections;
  }
  /**
   * @return PscAutoConnectionConfig[]
   */
  public function getPscAutoConnections()
  {
    return $this->pscAutoConnections;
  }
  /**
   * Optional. Configuration for setting up PSC auto DNS for the instance.
   *
   * Accepted values: PSC_AUTO_DNS_STATE_UNSPECIFIED,
   * PSC_AUTO_DNS_STATE_ENABLED, PSC_AUTO_DNS_STATE_DISABLED
   *
   * @param self::PSC_AUTO_DNS_STATE_* $pscAutoDnsState
   */
  public function setPscAutoDnsState($pscAutoDnsState)
  {
    $this->pscAutoDnsState = $pscAutoDnsState;
  }
  /**
   * @return self::PSC_AUTO_DNS_STATE_*
   */
  public function getPscAutoDnsState()
  {
    return $this->pscAutoDnsState;
  }
  /**
   * Output only. The DNS name of the instance for PSC connectivity. Name
   * convention: ...alloydb-psc.goog
   *
   * @param string $pscDnsName
   */
  public function setPscDnsName($pscDnsName)
  {
    $this->pscDnsName = $pscDnsName;
  }
  /**
   * @return string
   */
  public function getPscDnsName()
  {
    return $this->pscDnsName;
  }
  /**
   * Optional. Configurations for setting up PSC interfaces attached to the
   * instance which are used for outbound connectivity. Only primary instances
   * can have PSC interface attached. Currently we only support 0 or 1 PSC
   * interface.
   *
   * @param PscInterfaceConfig[] $pscInterfaceConfigs
   */
  public function setPscInterfaceConfigs($pscInterfaceConfigs)
  {
    $this->pscInterfaceConfigs = $pscInterfaceConfigs;
  }
  /**
   * @return PscInterfaceConfig[]
   */
  public function getPscInterfaceConfigs()
  {
    return $this->pscInterfaceConfigs;
  }
  /**
   * Output only. The service attachment created when Private Service Connect
   * (PSC) is enabled for the instance. The name of the resource will be in the
   * format of `projects//regions//serviceAttachments/`
   *
   * @param string $serviceAttachmentLink
   */
  public function setServiceAttachmentLink($serviceAttachmentLink)
  {
    $this->serviceAttachmentLink = $serviceAttachmentLink;
  }
  /**
   * @return string
   */
  public function getServiceAttachmentLink()
  {
    return $this->serviceAttachmentLink;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PscInstanceConfig::class, 'Google_Service_CloudAlloyDBAdmin_PscInstanceConfig');
