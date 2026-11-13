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

namespace Google\Service\CloudAlloyDBAdmin;

class AlloydbClhErrorsAlloyDbInternalDebugInfo extends \Google\Model
{
  /**
   * The original error message or details before sanitization, used internally
   * for debugging and logging.
   *
   * @var string
   */
  public $originalError;

  /**
   * The original error message or details before sanitization, used internally
   * for debugging and logging.
   *
   * @param string $originalError
   */
  public function setOriginalError($originalError)
  {
    $this->originalError = $originalError;
  }
  /**
   * @return string
   */
  public function getOriginalError()
  {
    return $this->originalError;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AlloydbClhErrorsAlloyDbInternalDebugInfo::class, 'Google_Service_CloudAlloyDBAdmin_AlloydbClhErrorsAlloyDbInternalDebugInfo');
