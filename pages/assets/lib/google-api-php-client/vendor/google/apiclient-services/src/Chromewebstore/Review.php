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

namespace Google\Service\Chromewebstore;

class Review extends \Google\Model
{
  protected $authorInfoType = AuthorInfo::class;
  protected $authorInfoDataType = '';
  /**
   * Content of the review.
   *
   * @var string
   */
  public $comment;
  /**
   * Output only. When the review was posted.
   *
   * @var string
   */
  public $createTime;
  /**
   * Output only. The item that this review evaluates. Format:
   * publishers/{publisher}/items/{item}
   *
   * @var string
   */
  public $item;
  /**
   * Identifier. Review resource name. Format: reviews/{reviewId}
   *
   * @var string
   */
  public $name;
  /**
   * Rating of the item, between 1 and 5.
   *
   * @var int
   */
  public $rating;

  /**
   * Info on the author of the review.
   *
   * @param AuthorInfo $authorInfo
   */
  public function setAuthorInfo(AuthorInfo $authorInfo)
  {
    $this->authorInfo = $authorInfo;
  }
  /**
   * @return AuthorInfo
   */
  public function getAuthorInfo()
  {
    return $this->authorInfo;
  }
  /**
   * Content of the review.
   *
   * @param string $comment
   */
  public function setComment($comment)
  {
    $this->comment = $comment;
  }
  /**
   * @return string
   */
  public function getComment()
  {
    return $this->comment;
  }
  /**
   * Output only. When the review was posted.
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
   * Output only. The item that this review evaluates. Format:
   * publishers/{publisher}/items/{item}
   *
   * @param string $item
   */
  public function setItem($item)
  {
    $this->item = $item;
  }
  /**
   * @return string
   */
  public function getItem()
  {
    return $this->item;
  }
  /**
   * Identifier. Review resource name. Format: reviews/{reviewId}
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
   * Rating of the item, between 1 and 5.
   *
   * @param int $rating
   */
  public function setRating($rating)
  {
    $this->rating = $rating;
  }
  /**
   * @return int
   */
  public function getRating()
  {
    return $this->rating;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Review::class, 'Google_Service_Chromewebstore_Review');
