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

namespace Google\Service\AndroidPublisher;

class ExternalContentLinkDetails extends \Google\Model
{
  /**
   * Unspecified, do not use.
   */
  public const EXTERNAL_APP_CATEGORY_EXTERNAL_CONTENT_APP_CATEGORY_UNSPECIFIED = 'EXTERNAL_CONTENT_APP_CATEGORY_UNSPECIFIED';
  /**
   * The app is classified under the app category.
   */
  public const EXTERNAL_APP_CATEGORY_APP = 'APP';
  /**
   * The app is classified under the game category.
   */
  public const EXTERNAL_APP_CATEGORY_GAME = 'GAME';
  /**
   * Unspecified, do not use.
   */
  public const LINK_TYPE_EXTERNAL_CONTENT_LINK_TYPE_UNSPECIFIED = 'EXTERNAL_CONTENT_LINK_TYPE_UNSPECIFIED';
  /**
   * An offer to purchase digital content.
   */
  public const LINK_TYPE_LINK_TO_DIGITAL_CONTENT_OFFER = 'LINK_TO_DIGITAL_CONTENT_OFFER';
  /**
   * An app install.
   */
  public const LINK_TYPE_LINK_TO_APP_DOWNLOAD = 'LINK_TO_APP_DOWNLOAD';
  /**
   * Optional. The category of the downlaoded app. This must match the category
   * provided in Play Console during the external app verification process. Only
   * required for app installs.
   *
   * @var string
   */
  public $externalAppCategory;
  /**
   * Optional. The package name of the app downloaded through this transaction.
   * Only required for app installs.
   *
   * @var string
   */
  public $installedAppPackage;
  /**
   * Required. The type content being reported by this transaction.
   *
   * @var string
   */
  public $linkType;

  /**
   * Optional. The category of the downlaoded app. This must match the category
   * provided in Play Console during the external app verification process. Only
   * required for app installs.
   *
   * Accepted values: EXTERNAL_CONTENT_APP_CATEGORY_UNSPECIFIED, APP, GAME
   *
   * @param self::EXTERNAL_APP_CATEGORY_* $externalAppCategory
   */
  public function setExternalAppCategory($externalAppCategory)
  {
    $this->externalAppCategory = $externalAppCategory;
  }
  /**
   * @return self::EXTERNAL_APP_CATEGORY_*
   */
  public function getExternalAppCategory()
  {
    return $this->externalAppCategory;
  }
  /**
   * Optional. The package name of the app downloaded through this transaction.
   * Only required for app installs.
   *
   * @param string $installedAppPackage
   */
  public function setInstalledAppPackage($installedAppPackage)
  {
    $this->installedAppPackage = $installedAppPackage;
  }
  /**
   * @return string
   */
  public function getInstalledAppPackage()
  {
    return $this->installedAppPackage;
  }
  /**
   * Required. The type content being reported by this transaction.
   *
   * Accepted values: EXTERNAL_CONTENT_LINK_TYPE_UNSPECIFIED,
   * LINK_TO_DIGITAL_CONTENT_OFFER, LINK_TO_APP_DOWNLOAD
   *
   * @param self::LINK_TYPE_* $linkType
   */
  public function setLinkType($linkType)
  {
    $this->linkType = $linkType;
  }
  /**
   * @return self::LINK_TYPE_*
   */
  public function getLinkType()
  {
    return $this->linkType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ExternalContentLinkDetails::class, 'Google_Service_AndroidPublisher_ExternalContentLinkDetails');
