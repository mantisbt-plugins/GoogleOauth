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

namespace Google\Service\Firestore;

class GoogleFirestoreAdminV1ChangeStream extends \Google\Model
{
  protected $collectionGroupScopeType = GoogleFirestoreAdminV1CollectionGroupScope::class;
  protected $collectionGroupScopeDataType = '';
  /**
   * Output only. The time the Change Stream was created.
   *
   * @var string
   */
  public $createTime;
  protected $databaseScopeType = GoogleFirestoreAdminV1DatabaseScope::class;
  protected $databaseScopeDataType = '';
  /**
   * Optional. An etag used to determine which version of the configuration is
   * being edited.
   *
   * @var string
   */
  public $etag;
  /**
   * Identifier. The external resource name of the change stream. Format
   * `projects/{project}/databases/{database}/changeStreams/{change_stream}`
   *
   * @var string
   */
  public $name;
  /**
   * Required. The retention period of the change stream. This is the amount of
   * time a change event is available on the change stream. Must be from 1 to 7
   * days, inclusive. The retention_period must be in day granularity, i.e. it
   * must be a multiple of 24 hours.
   *
   * @var string
   */
  public $retentionPeriod;
  /**
   * Output only. The time the Change Stream started recording events.
   *
   * @var string
   */
  public $startTime;
  /**
   * Output only. The time the Change Stream was last updated.
   *
   * @var string
   */
  public $updateTime;

  /**
   * If set, the change stream is scoped to a collection group.
   *
   * @param GoogleFirestoreAdminV1CollectionGroupScope $collectionGroupScope
   */
  public function setCollectionGroupScope(GoogleFirestoreAdminV1CollectionGroupScope $collectionGroupScope)
  {
    $this->collectionGroupScope = $collectionGroupScope;
  }
  /**
   * @return GoogleFirestoreAdminV1CollectionGroupScope
   */
  public function getCollectionGroupScope()
  {
    return $this->collectionGroupScope;
  }
  /**
   * Output only. The time the Change Stream was created.
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
   * If set, the change stream is scoped to the entire database.
   *
   * @param GoogleFirestoreAdminV1DatabaseScope $databaseScope
   */
  public function setDatabaseScope(GoogleFirestoreAdminV1DatabaseScope $databaseScope)
  {
    $this->databaseScope = $databaseScope;
  }
  /**
   * @return GoogleFirestoreAdminV1DatabaseScope
   */
  public function getDatabaseScope()
  {
    return $this->databaseScope;
  }
  /**
   * Optional. An etag used to determine which version of the configuration is
   * being edited.
   *
   * @param string $etag
   */
  public function setEtag($etag)
  {
    $this->etag = $etag;
  }
  /**
   * @return string
   */
  public function getEtag()
  {
    return $this->etag;
  }
  /**
   * Identifier. The external resource name of the change stream. Format
   * `projects/{project}/databases/{database}/changeStreams/{change_stream}`
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
   * Required. The retention period of the change stream. This is the amount of
   * time a change event is available on the change stream. Must be from 1 to 7
   * days, inclusive. The retention_period must be in day granularity, i.e. it
   * must be a multiple of 24 hours.
   *
   * @param string $retentionPeriod
   */
  public function setRetentionPeriod($retentionPeriod)
  {
    $this->retentionPeriod = $retentionPeriod;
  }
  /**
   * @return string
   */
  public function getRetentionPeriod()
  {
    return $this->retentionPeriod;
  }
  /**
   * Output only. The time the Change Stream started recording events.
   *
   * @param string $startTime
   */
  public function setStartTime($startTime)
  {
    $this->startTime = $startTime;
  }
  /**
   * @return string
   */
  public function getStartTime()
  {
    return $this->startTime;
  }
  /**
   * Output only. The time the Change Stream was last updated.
   *
   * @param string $updateTime
   */
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  /**
   * @return string
   */
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleFirestoreAdminV1ChangeStream::class, 'Google_Service_Firestore_GoogleFirestoreAdminV1ChangeStream');
