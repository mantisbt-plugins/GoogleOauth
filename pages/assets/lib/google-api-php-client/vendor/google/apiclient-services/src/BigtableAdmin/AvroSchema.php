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

namespace Google\Service\BigtableAdmin;

class AvroSchema extends \Google\Collection
{
  protected $collection_key = 'jsonSchemas';
  /**
   * Required. The Avro schemas in JSON format. Each element must be the content
   * of a valid, self-contained Avro schema file (.avsc), as described in
   * https://avro.apache.org/docs/1.8.1/spec.html. Use repeated elements to
   * include multiple Avro schema files in a single bundle.
   *
   * @var string[]
   */
  public $jsonSchemas;

  /**
   * Required. The Avro schemas in JSON format. Each element must be the content
   * of a valid, self-contained Avro schema file (.avsc), as described in
   * https://avro.apache.org/docs/1.8.1/spec.html. Use repeated elements to
   * include multiple Avro schema files in a single bundle.
   *
   * @param string[] $jsonSchemas
   */
  public function setJsonSchemas($jsonSchemas)
  {
    $this->jsonSchemas = $jsonSchemas;
  }
  /**
   * @return string[]
   */
  public function getJsonSchemas()
  {
    return $this->jsonSchemas;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AvroSchema::class, 'Google_Service_BigtableAdmin_AvroSchema');
