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

class GenaiVertexV1ReviewSnippet extends \Google\Model
{
  /**
   * The ID of the review snippet.
   *
   * @var string
   */
  public $reviewId;
  /**
   * Title of the review.
   *
   * @var string
   */
  public $title;
  /**
   * A link that corresponds to the user review on Google Maps.
   *
   * @var string
   */
  public $url;

  /**
   * The ID of the review snippet.
   *
   * @param string $reviewId
   */
  public function setReviewId($reviewId)
  {
    $this->reviewId = $reviewId;
  }
  /**
   * @return string
   */
  public function getReviewId()
  {
    return $this->reviewId;
  }
  /**
   * Title of the review.
   *
   * @param string $title
   */
  public function setTitle($title)
  {
    $this->title = $title;
  }
  /**
   * @return string
   */
  public function getTitle()
  {
    return $this->title;
  }
  /**
   * A link that corresponds to the user review on Google Maps.
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
class_alias(GenaiVertexV1ReviewSnippet::class, 'Google_Service_Aiplatform_GenaiVertexV1ReviewSnippet');
