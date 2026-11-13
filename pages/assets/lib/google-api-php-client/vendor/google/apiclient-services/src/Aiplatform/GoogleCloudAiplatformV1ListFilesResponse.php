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

class GoogleCloudAiplatformV1ListFilesResponse extends \Google\Collection
{
  protected $collection_key = 'data';
  protected $internal_gapi_mappings = [
        "nextPage" => "next_page",
  ];
  protected $dataType = GoogleCloudAiplatformV1ClaudeFile::class;
  protected $dataDataType = 'array';
  /**
   * Opaque cursor for the next page. Unset on the last page, and always unset
   * when `ids` was supplied, since batch fetch is single-page.
   *
   * @var string
   */
  public $nextPage;

  /**
   * The files.
   *
   * @param GoogleCloudAiplatformV1ClaudeFile[] $data
   */
  public function setData($data)
  {
    $this->data = $data;
  }
  /**
   * @return GoogleCloudAiplatformV1ClaudeFile[]
   */
  public function getData()
  {
    return $this->data;
  }
  /**
   * Opaque cursor for the next page. Unset on the last page, and always unset
   * when `ids` was supplied, since batch fetch is single-page.
   *
   * @param string $nextPage
   */
  public function setNextPage($nextPage)
  {
    $this->nextPage = $nextPage;
  }
  /**
   * @return string
   */
  public function getNextPage()
  {
    return $this->nextPage;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1ListFilesResponse::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1ListFilesResponse');
