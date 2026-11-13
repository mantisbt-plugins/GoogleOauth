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

class CloudRecommendationsRecommendersDatabasesV1ContentChunk extends \Google\Model
{
  protected $tableType = CloudRecommendationsRecommendersDatabasesV1Table::class;
  protected $tableDataType = '';

  /**
   * Table with headers and rows content for the content chunk.
   *
   * @param CloudRecommendationsRecommendersDatabasesV1Table $table
   */
  public function setTable(CloudRecommendationsRecommendersDatabasesV1Table $table)
  {
    $this->table = $table;
  }
  /**
   * @return CloudRecommendationsRecommendersDatabasesV1Table
   */
  public function getTable()
  {
    return $this->table;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CloudRecommendationsRecommendersDatabasesV1ContentChunk::class, 'Google_Service_Recommender_CloudRecommendationsRecommendersDatabasesV1ContentChunk');
