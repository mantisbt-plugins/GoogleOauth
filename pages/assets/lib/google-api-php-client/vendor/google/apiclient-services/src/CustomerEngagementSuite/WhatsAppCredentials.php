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

namespace Google\Service\CustomerEngagementSuite;

class WhatsAppCredentials extends \Google\Model
{
  /**
   * Required. The Meta auth code provided by the embedded signup flow.
   *
   * @var string
   */
  public $authCode;
  /**
   * Required. The Business Account ID to use for the phone number.
   *
   * @var string
   */
  public $businessAccountId;
  /**
   * Optional. The Conversation Profile ID to use for the deployment.
   *
   * @var string
   */
  public $conversationProfileId;
  /**
   * Required. The phone number to register with WhatsApp.
   *
   * @var string
   */
  public $phoneNumber;
  /**
   * Required. The 6-digit PIN created by the user for two-step verification.
   *
   * @var string
   */
  public $pin;
  /**
   * Required. The WhatsApp Business Account ID.
   *
   * @var string
   */
  public $wabaId;

  /**
   * Required. The Meta auth code provided by the embedded signup flow.
   *
   * @param string $authCode
   */
  public function setAuthCode($authCode)
  {
    $this->authCode = $authCode;
  }
  /**
   * @return string
   */
  public function getAuthCode()
  {
    return $this->authCode;
  }
  /**
   * Required. The Business Account ID to use for the phone number.
   *
   * @param string $businessAccountId
   */
  public function setBusinessAccountId($businessAccountId)
  {
    $this->businessAccountId = $businessAccountId;
  }
  /**
   * @return string
   */
  public function getBusinessAccountId()
  {
    return $this->businessAccountId;
  }
  /**
   * Optional. The Conversation Profile ID to use for the deployment.
   *
   * @param string $conversationProfileId
   */
  public function setConversationProfileId($conversationProfileId)
  {
    $this->conversationProfileId = $conversationProfileId;
  }
  /**
   * @return string
   */
  public function getConversationProfileId()
  {
    return $this->conversationProfileId;
  }
  /**
   * Required. The phone number to register with WhatsApp.
   *
   * @param string $phoneNumber
   */
  public function setPhoneNumber($phoneNumber)
  {
    $this->phoneNumber = $phoneNumber;
  }
  /**
   * @return string
   */
  public function getPhoneNumber()
  {
    return $this->phoneNumber;
  }
  /**
   * Required. The 6-digit PIN created by the user for two-step verification.
   *
   * @param string $pin
   */
  public function setPin($pin)
  {
    $this->pin = $pin;
  }
  /**
   * @return string
   */
  public function getPin()
  {
    return $this->pin;
  }
  /**
   * Required. The WhatsApp Business Account ID.
   *
   * @param string $wabaId
   */
  public function setWabaId($wabaId)
  {
    $this->wabaId = $wabaId;
  }
  /**
   * @return string
   */
  public function getWabaId()
  {
    return $this->wabaId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(WhatsAppCredentials::class, 'Google_Service_CustomerEngagementSuite_WhatsAppCredentials');
