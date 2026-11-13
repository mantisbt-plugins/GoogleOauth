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

namespace Google\Service\Dataform;

class BigQueryUnitTest extends \Google\Collection
{
  protected $collection_key = 'tags';
  protected $dependencyTargetsType = Target::class;
  protected $dependencyTargetsDataType = 'array';
  /**
   * Whether this action is disabled (i.e. should not be run).
   *
   * @var bool
   */
  public $disabled;
  /**
   * The name of the unit test.
   *
   * @var string
   */
  public $displayName;
  /**
   * Expected output query to compare against the test query.
   *
   * @var string
   */
  public $expectedOutputQuery;
  /**
   * Arbitrary, user-defined tags on this action.
   *
   * @var string[]
   */
  public $tags;
  /**
   * Test query to execute.
   *
   * @var string
   */
  public $testQuery;

  /**
   * A list of actions that this action depends on.
   *
   * @param Target[] $dependencyTargets
   */
  public function setDependencyTargets($dependencyTargets)
  {
    $this->dependencyTargets = $dependencyTargets;
  }
  /**
   * @return Target[]
   */
  public function getDependencyTargets()
  {
    return $this->dependencyTargets;
  }
  /**
   * Whether this action is disabled (i.e. should not be run).
   *
   * @param bool $disabled
   */
  public function setDisabled($disabled)
  {
    $this->disabled = $disabled;
  }
  /**
   * @return bool
   */
  public function getDisabled()
  {
    return $this->disabled;
  }
  /**
   * The name of the unit test.
   *
   * @param string $displayName
   */
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /**
   * @return string
   */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /**
   * Expected output query to compare against the test query.
   *
   * @param string $expectedOutputQuery
   */
  public function setExpectedOutputQuery($expectedOutputQuery)
  {
    $this->expectedOutputQuery = $expectedOutputQuery;
  }
  /**
   * @return string
   */
  public function getExpectedOutputQuery()
  {
    return $this->expectedOutputQuery;
  }
  /**
   * Arbitrary, user-defined tags on this action.
   *
   * @param string[] $tags
   */
  public function setTags($tags)
  {
    $this->tags = $tags;
  }
  /**
   * @return string[]
   */
  public function getTags()
  {
    return $this->tags;
  }
  /**
   * Test query to execute.
   *
   * @param string $testQuery
   */
  public function setTestQuery($testQuery)
  {
    $this->testQuery = $testQuery;
  }
  /**
   * @return string
   */
  public function getTestQuery()
  {
    return $this->testQuery;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(BigQueryUnitTest::class, 'Google_Service_Dataform_BigQueryUnitTest');
