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

class CloudRecommendationsRecommendersDatabasesV1Table extends \Google\Collection
{
  protected $collection_key = 'rows';
  /**
   * Headers for the table. IMPORTANT: Each header defines a column and its
   * title. All Headers must be unique and shouldn't be used more than once
   * within the same list.
   *
   * @var string[]
   */
  public $headers;
  protected $rowsType = CloudRecommendationsRecommendersDatabasesV1TableRow::class;
  protected $rowsDataType = 'array';

  /**
   * Headers for the table. IMPORTANT: Each header defines a column and its
   * title. All Headers must be unique and shouldn't be used more than once
   * within the same list.
   *
   * @param string[] $headers
   */
  public function setHeaders($headers)
  {
    $this->headers = $headers;
  }
  /**
   * @return string[]
   */
  public function getHeaders()
  {
    return $this->headers;
  }
  /**
   * Rows for the table. Ensure that the order of the cells in the row matches
   * the order of the headers.
   *
   * @param CloudRecommendationsRecommendersDatabasesV1TableRow[] $rows
   */
  public function setRows($rows)
  {
    $this->rows = $rows;
  }
  /**
   * @return CloudRecommendationsRecommendersDatabasesV1TableRow[]
   */
  public function getRows()
  {
    return $this->rows;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CloudRecommendationsRecommendersDatabasesV1Table::class, 'Google_Service_Recommender_CloudRecommendationsRecommendersDatabasesV1Table');
