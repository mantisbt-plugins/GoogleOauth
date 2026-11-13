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

namespace Google\Service\FirebaseCrashlytics;

class Frame extends \Google\Model
{
  /**
   * The address in the binary image which contains the code. Present for native
   * frames.
   *
   * @var string
   */
  public $address;
  /**
   * True when the Crashlytics analysis has determined that this frame is likely
   * to be the cause of the error.
   *
   * @var bool
   */
  public $blamed;
  /**
   * The column on the line.
   *
   * @var string
   */
  public $column;
  /**
   * The name of the source file in which the frame is found.
   *
   * @var string
   */
  public $file;
  /**
   * The display name of the library that includes the frame.
   *
   * @var string
   */
  public $library;
  /**
   * The line number in the file of the frame.
   *
   * @var string
   */
  public $line;
  /**
   * The byte offset into the binary image that contains the code. Present for
   * native frames.
   *
   * @var string
   */
  public $offset;
  /**
   * One of DEVELOPER, VENDOR, RUNTIME, PLATFORM, or SYSTEM.
   *
   * @var string
   */
  public $owner;
  /**
   * The frame symbol after it has been deobfuscated or symbolicated. The raw
   * symbol from the device if it could not be hydrated.
   *
   * @var string
   */
  public $symbol;

  /**
   * The address in the binary image which contains the code. Present for native
   * frames.
   *
   * @param string $address
   */
  public function setAddress($address)
  {
    $this->address = $address;
  }
  /**
   * @return string
   */
  public function getAddress()
  {
    return $this->address;
  }
  /**
   * True when the Crashlytics analysis has determined that this frame is likely
   * to be the cause of the error.
   *
   * @param bool $blamed
   */
  public function setBlamed($blamed)
  {
    $this->blamed = $blamed;
  }
  /**
   * @return bool
   */
  public function getBlamed()
  {
    return $this->blamed;
  }
  /**
   * The column on the line.
   *
   * @param string $column
   */
  public function setColumn($column)
  {
    $this->column = $column;
  }
  /**
   * @return string
   */
  public function getColumn()
  {
    return $this->column;
  }
  /**
   * The name of the source file in which the frame is found.
   *
   * @param string $file
   */
  public function setFile($file)
  {
    $this->file = $file;
  }
  /**
   * @return string
   */
  public function getFile()
  {
    return $this->file;
  }
  /**
   * The display name of the library that includes the frame.
   *
   * @param string $library
   */
  public function setLibrary($library)
  {
    $this->library = $library;
  }
  /**
   * @return string
   */
  public function getLibrary()
  {
    return $this->library;
  }
  /**
   * The line number in the file of the frame.
   *
   * @param string $line
   */
  public function setLine($line)
  {
    $this->line = $line;
  }
  /**
   * @return string
   */
  public function getLine()
  {
    return $this->line;
  }
  /**
   * The byte offset into the binary image that contains the code. Present for
   * native frames.
   *
   * @param string $offset
   */
  public function setOffset($offset)
  {
    $this->offset = $offset;
  }
  /**
   * @return string
   */
  public function getOffset()
  {
    return $this->offset;
  }
  /**
   * One of DEVELOPER, VENDOR, RUNTIME, PLATFORM, or SYSTEM.
   *
   * @param string $owner
   */
  public function setOwner($owner)
  {
    $this->owner = $owner;
  }
  /**
   * @return string
   */
  public function getOwner()
  {
    return $this->owner;
  }
  /**
   * The frame symbol after it has been deobfuscated or symbolicated. The raw
   * symbol from the device if it could not be hydrated.
   *
   * @param string $symbol
   */
  public function setSymbol($symbol)
  {
    $this->symbol = $symbol;
  }
  /**
   * @return string
   */
  public function getSymbol()
  {
    return $this->symbol;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Frame::class, 'Google_Service_FirebaseCrashlytics_Frame');
