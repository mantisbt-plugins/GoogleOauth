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

class PartnerAudienceInfo extends \Google\Model
{
  public const PARTNER_AUDIENCE_SOURCE_PARTNER_AUDIENCE_SOURCE_UNSPECIFIED = 'PARTNER_AUDIENCE_SOURCE_UNSPECIFIED';
  public const PARTNER_AUDIENCE_SOURCE_COMMERCE_AUDIENCE = 'COMMERCE_AUDIENCE';
  public const PARTNER_AUDIENCE_SOURCE_LINEAR_TV_AUDIENCE = 'LINEAR_TV_AUDIENCE';
  public const PARTNER_AUDIENCE_SOURCE_AGENCY_PROVIDER_AUDIENCE = 'AGENCY_PROVIDER_AUDIENCE';
  /**
   * @var string
   */
  public $commercePartner;
  /**
   * @var string
   */
  public $partnerAudienceSource;

  /**
   * @param string $commercePartner
   */
  public function setCommercePartner($commercePartner)
  {
    $this->commercePartner = $commercePartner;
  }
  /**
   * @return string
   */
  public function getCommercePartner()
  {
    return $this->commercePartner;
  }
  /**
   * @param self::PARTNER_AUDIENCE_SOURCE_* $partnerAudienceSource
   */
  public function setPartnerAudienceSource($partnerAudienceSource)
  {
    $this->partnerAudienceSource = $partnerAudienceSource;
  }
  /**
   * @return self::PARTNER_AUDIENCE_SOURCE_*
   */
  public function getPartnerAudienceSource()
  {
    return $this->partnerAudienceSource;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PartnerAudienceInfo::class, 'Google_Service_DataManager_PartnerAudienceInfo');
