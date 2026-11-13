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

namespace Google\Service\Assuredworkloads;

class GoogleCloudAssuredworkloadsV1CELExpression extends \Google\Model
{
  /**
   * Required. The logical expression in CEL. The maximum length of the
   * condition is 1000 characters. For more information, see [CEL
   * expression](https://cloud.google.com/security-command-
   * center/docs/compliance-manager-write-cel-expressions).
   *
   * @var string
   */
  public $expression;
  protected $resourceTypesValuesType = GoogleCloudAssuredworkloadsV1StringList::class;
  protected $resourceTypesValuesDataType = '';

  /**
   * Required. The logical expression in CEL. The maximum length of the
   * condition is 1000 characters. For more information, see [CEL
   * expression](https://cloud.google.com/security-command-
   * center/docs/compliance-manager-write-cel-expressions).
   *
   * @param string $expression
   */
  public function setExpression($expression)
  {
    $this->expression = $expression;
  }
  /**
   * @return string
   */
  public function getExpression()
  {
    return $this->expression;
  }
  /**
   * The resource instance types on which this expression is defined. The format
   * is `/`. For example: `compute.googleapis.com/Instance`
   *
   * @param GoogleCloudAssuredworkloadsV1StringList $resourceTypesValues
   */
  public function setResourceTypesValues(GoogleCloudAssuredworkloadsV1StringList $resourceTypesValues)
  {
    $this->resourceTypesValues = $resourceTypesValues;
  }
  /**
   * @return GoogleCloudAssuredworkloadsV1StringList
   */
  public function getResourceTypesValues()
  {
    return $this->resourceTypesValues;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAssuredworkloadsV1CELExpression::class, 'Google_Service_Assuredworkloads_GoogleCloudAssuredworkloadsV1CELExpression');
