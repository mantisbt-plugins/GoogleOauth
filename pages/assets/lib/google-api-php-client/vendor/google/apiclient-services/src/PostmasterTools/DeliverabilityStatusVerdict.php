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

namespace Google\Service\PostmasterTools;

class DeliverabilityStatusVerdict extends \Google\Model
{
  /**
   * Unspecified.
   */
  public const REASON_REASON_UNSPECIFIED = 'REASON_UNSPECIFIED';
  /**
   * Not enough outgoing email.
   */
  public const REASON_MESSAGE_VOLUME_LOW = 'MESSAGE_VOLUME_LOW';
  /**
   * Many messages with delivery errors.
   */
  public const REASON_SMTP_ERRORS_HIGH = 'SMTP_ERRORS_HIGH';
  /**
   * The sender does not meet the sender requirements.
   */
  public const REASON_SENDER_NOT_COMPLIANT = 'SENDER_NOT_COMPLIANT';
  /**
   * The spam rate is above 0.1%.
   */
  public const REASON_SPAM_RATE_HIGH = 'SPAM_RATE_HIGH';
  /**
   * Indicates users do not want to receive email messages.
   */
  public const REASON_USER_FEEDBACK_NEGATIVE = 'USER_FEEDBACK_NEGATIVE';
  /**
   * Users do not take action on messages.
   */
  public const REASON_USER_FEEDBACK_LOW = 'USER_FEEDBACK_LOW';
  /**
   * Users signal they want to receive email messages.
   */
  public const REASON_USER_FEEDBACK_POSITIVE = 'USER_FEEDBACK_POSITIVE';
  /**
   * Output only. The specific reason for the compliance verdict.
   *
   * @var string
   */
  public $reason;
  protected $stateType = ComplianceStatus::class;
  protected $stateDataType = '';

  /**
   * Output only. The specific reason for the compliance verdict.
   *
   * Accepted values: REASON_UNSPECIFIED, MESSAGE_VOLUME_LOW, SMTP_ERRORS_HIGH,
   * SENDER_NOT_COMPLIANT, SPAM_RATE_HIGH, USER_FEEDBACK_NEGATIVE,
   * USER_FEEDBACK_LOW, USER_FEEDBACK_POSITIVE
   *
   * @param self::REASON_* $reason
   */
  public function setReason($reason)
  {
    $this->reason = $reason;
  }
  /**
   * @return self::REASON_*
   */
  public function getReason()
  {
    return $this->reason;
  }
  /**
   * Output only. The compliance state.
   *
   * @param ComplianceStatus $state
   */
  public function setState(ComplianceStatus $state)
  {
    $this->state = $state;
  }
  /**
   * @return ComplianceStatus
   */
  public function getState()
  {
    return $this->state;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DeliverabilityStatusVerdict::class, 'Google_Service_PostmasterTools_DeliverabilityStatusVerdict');
