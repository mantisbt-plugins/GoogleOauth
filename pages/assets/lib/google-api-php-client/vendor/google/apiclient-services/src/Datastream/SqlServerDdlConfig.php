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

namespace Google\Service\Datastream;

class SqlServerDdlConfig extends \Google\Model
{
  /**
   * Optional. If set to true, Datastream will automatically create a new
   * capture instance when DDL is detected on a table.The customer will be
   * responsible for deleting it so that the next set of DDLs can be handled.
   * The default is false and it means that DDL's will not be handled .
   *
   * @var bool
   */
  public $autoCreateNewCaptureInstanceOnDdl;
  /**
   * Optional. If set to true, Datastream will automatically delete the old
   * capture instance after creating a new one to support a DDL change. The
   * default is false and means that the customer has to delete the old capture
   * instance manually.
   *
   * @var bool
   */
  public $autoDeleteOldCaptureInstance;

  /**
   * Optional. If set to true, Datastream will automatically create a new
   * capture instance when DDL is detected on a table.The customer will be
   * responsible for deleting it so that the next set of DDLs can be handled.
   * The default is false and it means that DDL's will not be handled .
   *
   * @param bool $autoCreateNewCaptureInstanceOnDdl
   */
  public function setAutoCreateNewCaptureInstanceOnDdl($autoCreateNewCaptureInstanceOnDdl)
  {
    $this->autoCreateNewCaptureInstanceOnDdl = $autoCreateNewCaptureInstanceOnDdl;
  }
  /**
   * @return bool
   */
  public function getAutoCreateNewCaptureInstanceOnDdl()
  {
    return $this->autoCreateNewCaptureInstanceOnDdl;
  }
  /**
   * Optional. If set to true, Datastream will automatically delete the old
   * capture instance after creating a new one to support a DDL change. The
   * default is false and means that the customer has to delete the old capture
   * instance manually.
   *
   * @param bool $autoDeleteOldCaptureInstance
   */
  public function setAutoDeleteOldCaptureInstance($autoDeleteOldCaptureInstance)
  {
    $this->autoDeleteOldCaptureInstance = $autoDeleteOldCaptureInstance;
  }
  /**
   * @return bool
   */
  public function getAutoDeleteOldCaptureInstance()
  {
    return $this->autoDeleteOldCaptureInstance;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SqlServerDdlConfig::class, 'Google_Service_Datastream_SqlServerDdlConfig');
