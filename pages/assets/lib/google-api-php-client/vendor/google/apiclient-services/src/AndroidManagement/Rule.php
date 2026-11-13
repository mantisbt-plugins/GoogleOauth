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

namespace Google\Service\AndroidManagement;

class Rule extends \Google\Collection
{
  protected $collection_key = 'targets';
  /**
   * Required. An EMM-defined identifier for this rule, of length at most 64
   * characters. This must not be empty. Within a UnifiedUpdatePolicy, different
   * rules must have different ids.
   *
   * @var string
   */
  public $id;
  protected $outcomeType = Outcome::class;
  protected $outcomeDataType = '';
  protected $predicateType = Predicate::class;
  protected $predicateDataType = '';
  /**
   * Optional. The stages at which the rule is evaluated. If this list is empty,
   * the rule is evaluated at all stages. Specifying stages is supported only
   * for OS_UPDATE_WITHOUT_API_LEVEL_CHANGE and OS_UPDATE_WITH_API_LEVEL_CHANGE.
   * For SINGLE_APP, GOOGLE_SYSTEM_SERVICES, and GOOGLE_PLAY_SYSTEM_UPDATE, this
   * field is ignored and the rule is evaluated at all stages.
   *
   * @var string[]
   */
  public $stages;
  protected $targetsType = Target::class;
  protected $targetsDataType = 'array';

  /**
   * Required. An EMM-defined identifier for this rule, of length at most 64
   * characters. This must not be empty. Within a UnifiedUpdatePolicy, different
   * rules must have different ids.
   *
   * @param string $id
   */
  public function setId($id)
  {
    $this->id = $id;
  }
  /**
   * @return string
   */
  public function getId()
  {
    return $this->id;
  }
  /**
   * Optional. Determines how to proceed with the update.
   *
   * @param Outcome $outcome
   */
  public function setOutcome(Outcome $outcome)
  {
    $this->outcome = $outcome;
  }
  /**
   * @return Outcome
   */
  public function getOutcome()
  {
    return $this->outcome;
  }
  /**
   * Optional. The predicate of the rule, which can evaluate to true or false.
   * See rules for how this is used. If not set, the predicate always evaluates
   * to true.
   *
   * @param Predicate $predicate
   */
  public function setPredicate(Predicate $predicate)
  {
    $this->predicate = $predicate;
  }
  /**
   * @return Predicate
   */
  public function getPredicate()
  {
    return $this->predicate;
  }
  /**
   * Optional. The stages at which the rule is evaluated. If this list is empty,
   * the rule is evaluated at all stages. Specifying stages is supported only
   * for OS_UPDATE_WITHOUT_API_LEVEL_CHANGE and OS_UPDATE_WITH_API_LEVEL_CHANGE.
   * For SINGLE_APP, GOOGLE_SYSTEM_SERVICES, and GOOGLE_PLAY_SYSTEM_UPDATE, this
   * field is ignored and the rule is evaluated at all stages.
   *
   * @param string[] $stages
   */
  public function setStages($stages)
  {
    $this->stages = $stages;
  }
  /**
   * @return string[]
   */
  public function getStages()
  {
    return $this->stages;
  }
  /**
   * Required. Targets that this rule applies to. This can have multiple targets
   * here for convenience, and that is equivalent to having multiple rules in
   * sequence each having one target, in the same order in which targets are
   * listed here. This list must not be empty and must not have duplicates.
   *
   * @param Target[] $targets
   */
  public function setTargets($targets)
  {
    $this->targets = $targets;
  }
  /**
   * @return Target[]
   */
  public function getTargets()
  {
    return $this->targets;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Rule::class, 'Google_Service_AndroidManagement_Rule');
