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

namespace Google\Service\SQLAdmin;

class StopWorkloadCaptureContext extends \Google\Model
{
  /**
   * Optional. If true, immediately aborts the concurrent live replay and
   * discards any un-replayed traffic alongside stopping the capture. If false
   * (the default), the capture stops recording new traffic, but the live replay
   * will continue executing until the entire backlog of captured traffic has
   * been replayed.
   *
   * @var bool
   */
  public $abortLiveReplay;

  /**
   * Optional. If true, immediately aborts the concurrent live replay and
   * discards any un-replayed traffic alongside stopping the capture. If false
   * (the default), the capture stops recording new traffic, but the live replay
   * will continue executing until the entire backlog of captured traffic has
   * been replayed.
   *
   * @param bool $abortLiveReplay
   */
  public function setAbortLiveReplay($abortLiveReplay)
  {
    $this->abortLiveReplay = $abortLiveReplay;
  }
  /**
   * @return bool
   */
  public function getAbortLiveReplay()
  {
    return $this->abortLiveReplay;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(StopWorkloadCaptureContext::class, 'Google_Service_SQLAdmin_StopWorkloadCaptureContext');
