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

namespace Google\Service\Recommender;

class CloudRecommendationsRecommendersDatabasesV1Description extends \Google\Model
{
  public const DESCRIPTION_ENUM_DESC_ENUM_UNSPECIFIED = 'DESC_ENUM_UNSPECIFIED';
  /**
   * Enum used to map to the html template to be shown in the UI.
   *
   * @var string
   */
  public $descriptionEnum;

  /**
   * Enum used to map to the html template to be shown in the UI.
   *
   * Accepted values: DESC_ENUM_UNSPECIFIED
   *
   * @param self::DESCRIPTION_ENUM_* $descriptionEnum
   */
  public function setDescriptionEnum($descriptionEnum)
  {
    $this->descriptionEnum = $descriptionEnum;
  }
  /**
   * @return self::DESCRIPTION_ENUM_*
   */
  public function getDescriptionEnum()
  {
    return $this->descriptionEnum;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CloudRecommendationsRecommendersDatabasesV1Description::class, 'Google_Service_Recommender_CloudRecommendationsRecommendersDatabasesV1Description');
