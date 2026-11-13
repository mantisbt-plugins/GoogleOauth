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

namespace Google\Service\DataManager;

class PartnerLink extends \Google\Model
{
  public const FEATURE_SET_FEATURE_SET_UNSPECIFIED = 'FEATURE_SET_UNSPECIFIED';
  public const FEATURE_SET_FEATURE_SET_AUDIENCE_AND_EVENT_MANAGEMENT = 'FEATURE_SET_AUDIENCE_AND_EVENT_MANAGEMENT';
  public const FEATURE_SET_FEATURE_SET_AD_EVENT_MANAGEMENT = 'FEATURE_SET_AD_EVENT_MANAGEMENT';
  /**
   * @var string
   */
  public $featureSet;
  /**
   * @var string
   */
  public $name;
  protected $owningAccountType = ProductAccount::class;
  protected $owningAccountDataType = '';
  protected $partnerAccountType = ProductAccount::class;
  protected $partnerAccountDataType = '';
  protected $partnerCustomerAccountType = PartnerCustomerAccount::class;
  protected $partnerCustomerAccountDataType = '';
  /**
   * @var string
   */
  public $partnerLinkId;
  protected $partnerLinkMetadataType = PartnerLinkMetadata::class;
  protected $partnerLinkMetadataDataType = '';

  /**
   * @param self::FEATURE_SET_* $featureSet
   */
  public function setFeatureSet($featureSet)
  {
    $this->featureSet = $featureSet;
  }
  /**
   * @return self::FEATURE_SET_*
   */
  public function getFeatureSet()
  {
    return $this->featureSet;
  }
  /**
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
   * @param ProductAccount $owningAccount
   */
  public function setOwningAccount(ProductAccount $owningAccount)
  {
    $this->owningAccount = $owningAccount;
  }
  /**
   * @return ProductAccount
   */
  public function getOwningAccount()
  {
    return $this->owningAccount;
  }
  /**
   * @param ProductAccount $partnerAccount
   */
  public function setPartnerAccount(ProductAccount $partnerAccount)
  {
    $this->partnerAccount = $partnerAccount;
  }
  /**
   * @return ProductAccount
   */
  public function getPartnerAccount()
  {
    return $this->partnerAccount;
  }
  /**
   * @param PartnerCustomerAccount $partnerCustomerAccount
   */
  public function setPartnerCustomerAccount(PartnerCustomerAccount $partnerCustomerAccount)
  {
    $this->partnerCustomerAccount = $partnerCustomerAccount;
  }
  /**
   * @return PartnerCustomerAccount
   */
  public function getPartnerCustomerAccount()
  {
    return $this->partnerCustomerAccount;
  }
  /**
   * @param string $partnerLinkId
   */
  public function setPartnerLinkId($partnerLinkId)
  {
    $this->partnerLinkId = $partnerLinkId;
  }
  /**
   * @return string
   */
  public function getPartnerLinkId()
  {
    return $this->partnerLinkId;
  }
  /**
   * @param PartnerLinkMetadata $partnerLinkMetadata
   */
  public function setPartnerLinkMetadata(PartnerLinkMetadata $partnerLinkMetadata)
  {
    $this->partnerLinkMetadata = $partnerLinkMetadata;
  }
  /**
   * @return PartnerLinkMetadata
   */
  public function getPartnerLinkMetadata()
  {
    return $this->partnerLinkMetadata;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PartnerLink::class, 'Google_Service_DataManager_PartnerLink');
