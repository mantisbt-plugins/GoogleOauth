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

namespace Google\Service\AndroidPublisher;

class UpdateAppStoreHostedAppPublishStatusRequest extends \Google\Model
{
  /**
   * Unspecified publish state. Do not use.
   */
  public const PUBLISH_STATE_APP_STORE_APP_PUBLISH_STATE_UNSPECIFIED = 'APP_STORE_APP_PUBLISH_STATE_UNSPECIFIED';
  /**
   * The app is published and available on the third-party app store.
   */
  public const PUBLISH_STATE_APP_STORE_APP_PUBLISH_STATE_PUBLISHED = 'APP_STORE_APP_PUBLISH_STATE_PUBLISHED';
  /**
   * The app is unpublished and no longer available on the third-party app
   * store.
   */
  public const PUBLISH_STATE_APP_STORE_APP_PUBLISH_STATE_UNPUBLISHED = 'APP_STORE_APP_PUBLISH_STATE_UNPUBLISHED';
  /**
   * Required. The new publish state for the hosted app.
   *
   * @var string
   */
  public $publishState;

  /**
   * Required. The new publish state for the hosted app.
   *
   * Accepted values: APP_STORE_APP_PUBLISH_STATE_UNSPECIFIED,
   * APP_STORE_APP_PUBLISH_STATE_PUBLISHED,
   * APP_STORE_APP_PUBLISH_STATE_UNPUBLISHED
   *
   * @param self::PUBLISH_STATE_* $publishState
   */
  public function setPublishState($publishState)
  {
    $this->publishState = $publishState;
  }
  /**
   * @return self::PUBLISH_STATE_*
   */
  public function getPublishState()
  {
    return $this->publishState;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(UpdateAppStoreHostedAppPublishStatusRequest::class, 'Google_Service_AndroidPublisher_UpdateAppStoreHostedAppPublishStatusRequest');
