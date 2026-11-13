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

class CustomThreatScenarioConfig extends \Google\Model
{
  /**
   * Unspecified scenario type.
   */
  public const SCENARIO_TYPE_CUSTOM_THREAT_SCENARIO_TYPE_UNSPECIFIED = 'CUSTOM_THREAT_SCENARIO_TYPE_UNSPECIFIED';
  /**
   * Data Leaks.
   */
  public const SCENARIO_TYPE_DATA_LEAKS = 'DATA_LEAKS';
  /**
   * Deep & Dark Web.
   */
  public const SCENARIO_TYPE_DEEP_DARK_WEB = 'DEEP_DARK_WEB';
  /**
   * Domain Protection.
   */
  public const SCENARIO_TYPE_DOMAIN_PROTECTION = 'DOMAIN_PROTECTION';
  /**
   * Ransomware Threats.
   */
  public const SCENARIO_TYPE_RANSOMWARE_THREATS = 'RANSOMWARE_THREATS';
  /**
   * Initial Access Broker.
   */
  public const SCENARIO_TYPE_INITIAL_ACCESS_BROKER = 'INITIAL_ACCESS_BROKER';
  /**
   * Netblocks and Domain Mentions.
   */
  public const SCENARIO_TYPE_NETBLOCKS_AND_DOMAIN_MENTIONS = 'NETBLOCKS_AND_DOMAIN_MENTIONS';
  /**
   * Supply Chain Compromise.
   */
  public const SCENARIO_TYPE_SUPPLY_CHAIN_COMPROMISE = 'SUPPLY_CHAIN_COMPROMISE';
  /**
   * Card Shops.
   */
  public const SCENARIO_TYPE_CARD_SHOPS = 'CARD_SHOPS';
  /**
   * Custom Monitor (Non-templated legacy monitor).
   */
  public const SCENARIO_TYPE_CUSTOM_MONITOR = 'CUSTOM_MONITOR';
  /**
   * Output only. The compiled Lucene query string.
   *
   * @var string
   */
  public $compiledLuceneQuery;
  /**
   * Required. The condition driving the scenario, stored as a stringified JSON.
   * This is used to query/filter documents.
   *
   * @var string
   */
  public $documentCondition;
  protected $documentQueryType = DocumentQuery::class;
  protected $documentQueryDataType = '';
  protected $legacyMonitorMetadataType = LegacyMetadata::class;
  protected $legacyMonitorMetadataDataType = '';
  /**
   * Optional. The custom threat scenario type used to create this
   * configuration.
   *
   * @var string
   */
  public $scenarioType;

  /**
   * Output only. The compiled Lucene query string.
   *
   * @param string $compiledLuceneQuery
   */
  public function setCompiledLuceneQuery($compiledLuceneQuery)
  {
    $this->compiledLuceneQuery = $compiledLuceneQuery;
  }
  /**
   * @return string
   */
  public function getCompiledLuceneQuery()
  {
    return $this->compiledLuceneQuery;
  }
  /**
   * Required. The condition driving the scenario, stored as a stringified JSON.
   * This is used to query/filter documents.
   *
   * @param string $documentCondition
   */
  public function setDocumentCondition($documentCondition)
  {
    $this->documentCondition = $documentCondition;
  }
  /**
   * @return string
   */
  public function getDocumentCondition()
  {
    return $this->documentCondition;
  }
  /**
   * Optional. The query used to match documents.
   *
   * @param DocumentQuery $documentQuery
   */
  public function setDocumentQuery(DocumentQuery $documentQuery)
  {
    $this->documentQuery = $documentQuery;
  }
  /**
   * @return DocumentQuery
   */
  public function getDocumentQuery()
  {
    return $this->documentQuery;
  }
  /**
   * Output only. Legacy metadata associated with this scenario/monitor.
   *
   * @param LegacyMetadata $legacyMonitorMetadata
   */
  public function setLegacyMonitorMetadata(LegacyMetadata $legacyMonitorMetadata)
  {
    $this->legacyMonitorMetadata = $legacyMonitorMetadata;
  }
  /**
   * @return LegacyMetadata
   */
  public function getLegacyMonitorMetadata()
  {
    return $this->legacyMonitorMetadata;
  }
  /**
   * Optional. The custom threat scenario type used to create this
   * configuration.
   *
   * Accepted values: CUSTOM_THREAT_SCENARIO_TYPE_UNSPECIFIED, DATA_LEAKS,
   * DEEP_DARK_WEB, DOMAIN_PROTECTION, RANSOMWARE_THREATS,
   * INITIAL_ACCESS_BROKER, NETBLOCKS_AND_DOMAIN_MENTIONS,
   * SUPPLY_CHAIN_COMPROMISE, CARD_SHOPS, CUSTOM_MONITOR
   *
   * @param self::SCENARIO_TYPE_* $scenarioType
   */
  public function setScenarioType($scenarioType)
  {
    $this->scenarioType = $scenarioType;
  }
  /**
   * @return self::SCENARIO_TYPE_*
   */
  public function getScenarioType()
  {
    return $this->scenarioType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CustomThreatScenarioConfig::class, 'Google_Service_ThreatIntelligenceService_CustomThreatScenarioConfig');
