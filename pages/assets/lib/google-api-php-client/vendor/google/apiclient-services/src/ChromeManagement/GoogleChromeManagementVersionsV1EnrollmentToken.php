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

namespace Google\Service\ChromeManagement;

class GoogleChromeManagementVersionsV1EnrollmentToken extends \Google\Model
{
  /**
   * Unknown token state.
   */
  public const STATE_ENROLLMENT_TOKEN_STATE_UNSPECIFIED = 'ENROLLMENT_TOKEN_STATE_UNSPECIFIED';
  /**
   * The token is still active and valid.
   */
  public const STATE_ENROLLMENT_TOKEN_STATE_ACTIVE = 'ENROLLMENT_TOKEN_STATE_ACTIVE';
  /**
   * The token has expired.
   */
  public const STATE_ENROLLMENT_TOKEN_STATE_EXPIRED = 'ENROLLMENT_TOKEN_STATE_EXPIRED';
  /**
   * The token has been revoked by user.
   */
  public const STATE_ENROLLMENT_TOKEN_STATE_REVOKED = 'ENROLLMENT_TOKEN_STATE_REVOKED';
  /**
   * Unknown token device type.
   */
  public const TOKEN_TYPE_ENROLLMENT_TOKEN_TYPE_UNSPECIFIED = 'ENROLLMENT_TOKEN_TYPE_UNSPECIFIED';
  /**
   * The token is used to enroll a Chrome Browser device.
   */
  public const TOKEN_TYPE_ENROLLMENT_TOKEN_TYPE_CHROME_BROWSER = 'ENROLLMENT_TOKEN_TYPE_CHROME_BROWSER';
  /**
   * Output only. The creation time of the token.
   *
   * @var string
   */
  public $createTime;
  /**
   * Output only. The id of the user who created the token.
   *
   * @var string
   */
  public $creatorId;
  /**
   * Output only. The obfuscated ID of the customer to whom this token is
   * associated.
   *
   * @var string
   */
  public $customerId;
  /**
   * Identifier. The resource name of the enrollment token. Format:
   * customers/{customer}/enrollmentTokens/{token_permanent_id}
   *
   * @var string
   */
  public $name;
  /**
   * Optional. Obfuscated ID of the organization unit this token is associated
   * with. If not set, the token is created for the root organization unit.
   *
   * @var string
   */
  public $orgUnitId;
  /**
   * Output only. The revocation time of the token, null if the token is not
   * revoked.
   *
   * @var string
   */
  public $revokeTime;
  /**
   * Output only. The id of the user who revoked the token, null if the token is
   * not revoked.
   *
   * @var string
   */
  public $revokerId;
  /**
   * Output only. The state of the token.
   *
   * @var string
   */
  public $state;
  /**
   * Output only. The value of the token stored on the device and used to
   * identify it to the management service handling the enrollment request.
   *
   * @var string
   */
  public $token;
  /**
   * Output only. Unique identifier of the enrollment token used to access
   * information on tokens.
   *
   * @var string
   */
  public $tokenPermanentId;
  /**
   * Optional. The device type this token is used for. If not set, defaults to
   * `ENROLLMENT_TOKEN_TYPE_CHROME_BROWSER`.
   *
   * @var string
   */
  public $tokenType;

  /**
   * Output only. The creation time of the token.
   *
   * @param string $createTime
   */
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  /**
   * @return string
   */
  public function getCreateTime()
  {
    return $this->createTime;
  }
  /**
   * Output only. The id of the user who created the token.
   *
   * @param string $creatorId
   */
  public function setCreatorId($creatorId)
  {
    $this->creatorId = $creatorId;
  }
  /**
   * @return string
   */
  public function getCreatorId()
  {
    return $this->creatorId;
  }
  /**
   * Output only. The obfuscated ID of the customer to whom this token is
   * associated.
   *
   * @param string $customerId
   */
  public function setCustomerId($customerId)
  {
    $this->customerId = $customerId;
  }
  /**
   * @return string
   */
  public function getCustomerId()
  {
    return $this->customerId;
  }
  /**
   * Identifier. The resource name of the enrollment token. Format:
   * customers/{customer}/enrollmentTokens/{token_permanent_id}
   *
   * @param string $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * Optional. Obfuscated ID of the organization unit this token is associated
   * with. If not set, the token is created for the root organization unit.
   *
   * @param string $orgUnitId
   */
  public function setOrgUnitId($orgUnitId)
  {
    $this->orgUnitId = $orgUnitId;
  }
  /**
   * @return string
   */
  public function getOrgUnitId()
  {
    return $this->orgUnitId;
  }
  /**
   * Output only. The revocation time of the token, null if the token is not
   * revoked.
   *
   * @param string $revokeTime
   */
  public function setRevokeTime($revokeTime)
  {
    $this->revokeTime = $revokeTime;
  }
  /**
   * @return string
   */
  public function getRevokeTime()
  {
    return $this->revokeTime;
  }
  /**
   * Output only. The id of the user who revoked the token, null if the token is
   * not revoked.
   *
   * @param string $revokerId
   */
  public function setRevokerId($revokerId)
  {
    $this->revokerId = $revokerId;
  }
  /**
   * @return string
   */
  public function getRevokerId()
  {
    return $this->revokerId;
  }
  /**
   * Output only. The state of the token.
   *
   * Accepted values: ENROLLMENT_TOKEN_STATE_UNSPECIFIED,
   * ENROLLMENT_TOKEN_STATE_ACTIVE, ENROLLMENT_TOKEN_STATE_EXPIRED,
   * ENROLLMENT_TOKEN_STATE_REVOKED
   *
   * @param self::STATE_* $state
   */
  public function setState($state)
  {
    $this->state = $state;
  }
  /**
   * @return self::STATE_*
   */
  public function getState()
  {
    return $this->state;
  }
  /**
   * Output only. The value of the token stored on the device and used to
   * identify it to the management service handling the enrollment request.
   *
   * @param string $token
   */
  public function setToken($token)
  {
    $this->token = $token;
  }
  /**
   * @return string
   */
  public function getToken()
  {
    return $this->token;
  }
  /**
   * Output only. Unique identifier of the enrollment token used to access
   * information on tokens.
   *
   * @param string $tokenPermanentId
   */
  public function setTokenPermanentId($tokenPermanentId)
  {
    $this->tokenPermanentId = $tokenPermanentId;
  }
  /**
   * @return string
   */
  public function getTokenPermanentId()
  {
    return $this->tokenPermanentId;
  }
  /**
   * Optional. The device type this token is used for. If not set, defaults to
   * `ENROLLMENT_TOKEN_TYPE_CHROME_BROWSER`.
   *
   * Accepted values: ENROLLMENT_TOKEN_TYPE_UNSPECIFIED,
   * ENROLLMENT_TOKEN_TYPE_CHROME_BROWSER
   *
   * @param self::TOKEN_TYPE_* $tokenType
   */
  public function setTokenType($tokenType)
  {
    $this->tokenType = $tokenType;
  }
  /**
   * @return self::TOKEN_TYPE_*
   */
  public function getTokenType()
  {
    return $this->tokenType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleChromeManagementVersionsV1EnrollmentToken::class, 'Google_Service_ChromeManagement_GoogleChromeManagementVersionsV1EnrollmentToken');
