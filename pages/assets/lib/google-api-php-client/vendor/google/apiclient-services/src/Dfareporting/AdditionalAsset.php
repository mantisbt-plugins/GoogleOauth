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

namespace Google\Service\Dfareporting;

class AdditionalAsset extends \Google\Collection
{
  protected $collection_key = 'longHeadlines';
  /**
   * Optional. Call to actions for the creative.
   *
   * @var string[]
   */
  public $callToActions;
  protected $coverImagesType = CreativeAsset::class;
  protected $coverImagesDataType = 'array';
  /**
   * Optional. Descriptions for the creative.
   *
   * @var string[]
   */
  public $descriptions;
  /**
   * Optional. Display URL for the creative.
   *
   * @var string
   */
  public $displayUrl;
  /**
   * Optional. Headlines for the creative.
   *
   * @var string[]
   */
  public $headlines;
  /**
   * Optional. Long descriptions for the creative.
   *
   * @var string[]
   */
  public $longDescriptions;
  /**
   * Optional. Long headlines for the creative.
   *
   * @var string[]
   */
  public $longHeadlines;

  /**
   * Optional. Call to actions for the creative.
   *
   * @param string[] $callToActions
   */
  public function setCallToActions($callToActions)
  {
    $this->callToActions = $callToActions;
  }
  /**
   * @return string[]
   */
  public function getCallToActions()
  {
    return $this->callToActions;
  }
  /**
   * Optional. Cover images for the creative.
   *
   * @param CreativeAsset[] $coverImages
   */
  public function setCoverImages($coverImages)
  {
    $this->coverImages = $coverImages;
  }
  /**
   * @return CreativeAsset[]
   */
  public function getCoverImages()
  {
    return $this->coverImages;
  }
  /**
   * Optional. Descriptions for the creative.
   *
   * @param string[] $descriptions
   */
  public function setDescriptions($descriptions)
  {
    $this->descriptions = $descriptions;
  }
  /**
   * @return string[]
   */
  public function getDescriptions()
  {
    return $this->descriptions;
  }
  /**
   * Optional. Display URL for the creative.
   *
   * @param string $displayUrl
   */
  public function setDisplayUrl($displayUrl)
  {
    $this->displayUrl = $displayUrl;
  }
  /**
   * @return string
   */
  public function getDisplayUrl()
  {
    return $this->displayUrl;
  }
  /**
   * Optional. Headlines for the creative.
   *
   * @param string[] $headlines
   */
  public function setHeadlines($headlines)
  {
    $this->headlines = $headlines;
  }
  /**
   * @return string[]
   */
  public function getHeadlines()
  {
    return $this->headlines;
  }
  /**
   * Optional. Long descriptions for the creative.
   *
   * @param string[] $longDescriptions
   */
  public function setLongDescriptions($longDescriptions)
  {
    $this->longDescriptions = $longDescriptions;
  }
  /**
   * @return string[]
   */
  public function getLongDescriptions()
  {
    return $this->longDescriptions;
  }
  /**
   * Optional. Long headlines for the creative.
   *
   * @param string[] $longHeadlines
   */
  public function setLongHeadlines($longHeadlines)
  {
    $this->longHeadlines = $longHeadlines;
  }
  /**
   * @return string[]
   */
  public function getLongHeadlines()
  {
    return $this->longHeadlines;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AdditionalAsset::class, 'Google_Service_Dfareporting_AdditionalAsset');
