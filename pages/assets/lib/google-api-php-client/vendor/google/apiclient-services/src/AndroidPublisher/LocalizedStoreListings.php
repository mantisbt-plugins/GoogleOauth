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

class LocalizedStoreListings extends \Google\Collection
{
  protected $collection_key = 'localizedStoreListings';
  /**
   * The default language code of the app. If a localized store listing is not
   * available for a given language, assets from the default language are used
   * instead.
   *
   * @var string
   */
  public $defaultLanguageCode;
  protected $localizedStoreListingsType = LocalizedStoreListing::class;
  protected $localizedStoreListingsDataType = 'array';

  /**
   * The default language code of the app. If a localized store listing is not
   * available for a given language, assets from the default language are used
   * instead.
   *
   * @param string $defaultLanguageCode
   */
  public function setDefaultLanguageCode($defaultLanguageCode)
  {
    $this->defaultLanguageCode = $defaultLanguageCode;
  }
  /**
   * @return string
   */
  public function getDefaultLanguageCode()
  {
    return $this->defaultLanguageCode;
  }
  /**
   * @param LocalizedStoreListing[] $localizedStoreListings
   */
  public function setLocalizedStoreListings($localizedStoreListings)
  {
    $this->localizedStoreListings = $localizedStoreListings;
  }
  /**
   * @return LocalizedStoreListing[]
   */
  public function getLocalizedStoreListings()
  {
    return $this->localizedStoreListings;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(LocalizedStoreListings::class, 'Google_Service_AndroidPublisher_LocalizedStoreListings');
