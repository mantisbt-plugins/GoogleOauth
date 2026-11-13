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

class GoogleCloudAssuredworkloadsV1Rule extends \Google\Collection
{
  protected $collection_key = 'ruleActionTypes';
  protected $celExpressionType = GoogleCloudAssuredworkloadsV1CELExpression::class;
  protected $celExpressionDataType = '';
  /**
   * Optional. The rule description. The maximum length is 2000 characters.
   *
   * @var string
   */
  public $description;
  /**
   * Required. The functionality that's enabled by the rule.
   *
   * @var string[]
   */
  public $ruleActionTypes;

  /**
   * The rule's logic expression in Common Expression Language (CEL).
   *
   * @param GoogleCloudAssuredworkloadsV1CELExpression $celExpression
   */
  public function setCelExpression(GoogleCloudAssuredworkloadsV1CELExpression $celExpression)
  {
    $this->celExpression = $celExpression;
  }
  /**
   * @return GoogleCloudAssuredworkloadsV1CELExpression
   */
  public function getCelExpression()
  {
    return $this->celExpression;
  }
  /**
   * Optional. The rule description. The maximum length is 2000 characters.
   *
   * @param string $description
   */
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /**
   * @return string
   */
  public function getDescription()
  {
    return $this->description;
  }
  /**
   * Required. The functionality that's enabled by the rule.
   *
   * @param string[] $ruleActionTypes
   */
  public function setRuleActionTypes($ruleActionTypes)
  {
    $this->ruleActionTypes = $ruleActionTypes;
  }
  /**
   * @return string[]
   */
  public function getRuleActionTypes()
  {
    return $this->ruleActionTypes;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAssuredworkloadsV1Rule::class, 'Google_Service_Assuredworkloads_GoogleCloudAssuredworkloadsV1Rule');
