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

namespace Google\Service\HomeGraphService;

class StructurePresenceStateChangeEvent extends \Google\Model
{
  /**
   * Indicates an unknown presence state.
   */
  public const PRESENCE_STATE_STRUCTURE_PRESENCE_STATE_ENUM_UNSPECIFIED = 'STRUCTURE_PRESENCE_STATE_ENUM_UNSPECIFIED';
  /**
   * Indicates home presence state.
   */
  public const PRESENCE_STATE_HOME = 'HOME';
  /**
   * Indicates away presence state.
   */
  public const PRESENCE_STATE_AWAY = 'AWAY';
  /**
   * Required. Specifies the presence state.
   *
   * @var string
   */
  public $presenceState;
  protected $reasonType = StructurePresenceStateChangeReasonStruct::class;
  protected $reasonDataType = '';

  /**
   * Required. Specifies the presence state.
   *
   * Accepted values: STRUCTURE_PRESENCE_STATE_ENUM_UNSPECIFIED, HOME, AWAY
   *
   * @param self::PRESENCE_STATE_* $presenceState
   */
  public function setPresenceState($presenceState)
  {
    $this->presenceState = $presenceState;
  }
  /**
   * @return self::PRESENCE_STATE_*
   */
  public function getPresenceState()
  {
    return $this->presenceState;
  }
  /**
   * Optional. Specifies the presence state change reason.
   *
   * @param StructurePresenceStateChangeReasonStruct $reason
   */
  public function setReason(StructurePresenceStateChangeReasonStruct $reason)
  {
    $this->reason = $reason;
  }
  /**
   * @return StructurePresenceStateChangeReasonStruct
   */
  public function getReason()
  {
    return $this->reason;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(StructurePresenceStateChangeEvent::class, 'Google_Service_HomeGraphService_StructurePresenceStateChangeEvent');
