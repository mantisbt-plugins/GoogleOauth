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

class GenaiVertexV1GoogleMapsResultContentGoogleMapsResultPlaces extends \Google\Collection
{
  protected $collection_key = 'reviewSnippets';
  /**
   * Title of the place.
   *
   * @var string
   */
  public $name;
  /**
   * The ID of the place, in `places/{place_id}` format.
   *
   * @var string
   */
  public $placeId;
  protected $reviewSnippetsType = GenaiVertexV1ReviewSnippet::class;
  protected $reviewSnippetsDataType = 'array';
  /**
   * URI reference of the place.
   *
   * @var string
   */
  public $url;

  /**
   * Title of the place.
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
   * The ID of the place, in `places/{place_id}` format.
   *
   * @param string $placeId
   */
  public function setPlaceId($placeId)
  {
    $this->placeId = $placeId;
  }
  /**
   * @return string
   */
  public function getPlaceId()
  {
    return $this->placeId;
  }
  /**
   * Snippets of reviews that are used to generate answers about the features of
   * a given place in Google Maps.
   *
   * @param GenaiVertexV1ReviewSnippet[] $reviewSnippets
   */
  public function setReviewSnippets($reviewSnippets)
  {
    $this->reviewSnippets = $reviewSnippets;
  }
  /**
   * @return GenaiVertexV1ReviewSnippet[]
   */
  public function getReviewSnippets()
  {
    return $this->reviewSnippets;
  }
  /**
   * URI reference of the place.
   *
   * @param string $url
   */
  public function setUrl($url)
  {
    $this->url = $url;
  }
  /**
   * @return string
   */
  public function getUrl()
  {
    return $this->url;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GenaiVertexV1GoogleMapsResultContentGoogleMapsResultPlaces::class, 'Google_Service_Aiplatform_GenaiVertexV1GoogleMapsResultContentGoogleMapsResultPlaces');
