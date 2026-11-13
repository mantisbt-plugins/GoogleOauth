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

namespace Google\Service\CloudBillingBudget;

class GoogleCloudBillingBudgetsV1SpendCap extends \Google\Model
{
  /**
   * Unspecified state.
   */
  public const INPUT_STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * Spend cap is configured and active.
   */
  public const INPUT_STATE_CONFIGURED = 'CONFIGURED';
  /**
   * Spend cap limit is reached and enforced.
   */
  public const INPUT_STATE_ENFORCED = 'ENFORCED';
  /**
   * Spend cap is waiting for the next period to start.
   */
  public const INPUT_STATE_AWAITING_NEXT_PERIOD = 'AWAITING_NEXT_PERIOD';
  /**
   * Unspecified state.
   */
  public const OUTPUT_STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * Spend cap is configured and active.
   */
  public const OUTPUT_STATE_CONFIGURED = 'CONFIGURED';
  /**
   * Spend cap limit is reached and enforced.
   */
  public const OUTPUT_STATE_ENFORCED = 'ENFORCED';
  /**
   * Spend cap is waiting for the next period to start.
   */
  public const OUTPUT_STATE_AWAITING_NEXT_PERIOD = 'AWAITING_NEXT_PERIOD';
  /**
   * Required. The desired state specified by the user. Valid values for
   * mutation: - `CONFIGURED`: Must be set when creating a spend cap
   * (`CreateBudget`). Also valid when updating (`UpdateBudget`) to activate the
   * spend cap. If the spend cap is in state `AWAITING_NEXT_PERIOD`,
   * `input_state` must be set to `CONFIGURED`. - `AWAITING_NEXT_PERIOD`: Valid
   * only when updating (`UpdateBudget`) to explicitly lift an enforced cap. Not
   * allowed if the spend cap is in state `AWAITING_NEXT_PERIOD`. Supplying any
   * other value will result in an INVALID_ARGUMENT error.
   *
   * @var string
   */
  public $inputState;
  /**
   * Output only. The actual resting state of the spend cap.
   *
   * @var string
   */
  public $outputState;
  /**
   * Output only. Indicates whether the server is actively processing a state
   * transition or async workflow.
   *
   * @var bool
   */
  public $reconciling;

  /**
   * Required. The desired state specified by the user. Valid values for
   * mutation: - `CONFIGURED`: Must be set when creating a spend cap
   * (`CreateBudget`). Also valid when updating (`UpdateBudget`) to activate the
   * spend cap. If the spend cap is in state `AWAITING_NEXT_PERIOD`,
   * `input_state` must be set to `CONFIGURED`. - `AWAITING_NEXT_PERIOD`: Valid
   * only when updating (`UpdateBudget`) to explicitly lift an enforced cap. Not
   * allowed if the spend cap is in state `AWAITING_NEXT_PERIOD`. Supplying any
   * other value will result in an INVALID_ARGUMENT error.
   *
   * Accepted values: STATE_UNSPECIFIED, CONFIGURED, ENFORCED,
   * AWAITING_NEXT_PERIOD
   *
   * @param self::INPUT_STATE_* $inputState
   */
  public function setInputState($inputState)
  {
    $this->inputState = $inputState;
  }
  /**
   * @return self::INPUT_STATE_*
   */
  public function getInputState()
  {
    return $this->inputState;
  }
  /**
   * Output only. The actual resting state of the spend cap.
   *
   * Accepted values: STATE_UNSPECIFIED, CONFIGURED, ENFORCED,
   * AWAITING_NEXT_PERIOD
   *
   * @param self::OUTPUT_STATE_* $outputState
   */
  public function setOutputState($outputState)
  {
    $this->outputState = $outputState;
  }
  /**
   * @return self::OUTPUT_STATE_*
   */
  public function getOutputState()
  {
    return $this->outputState;
  }
  /**
   * Output only. Indicates whether the server is actively processing a state
   * transition or async workflow.
   *
   * @param bool $reconciling
   */
  public function setReconciling($reconciling)
  {
    $this->reconciling = $reconciling;
  }
  /**
   * @return bool
   */
  public function getReconciling()
  {
    return $this->reconciling;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudBillingBudgetsV1SpendCap::class, 'Google_Service_CloudBillingBudget_GoogleCloudBillingBudgetsV1SpendCap');
