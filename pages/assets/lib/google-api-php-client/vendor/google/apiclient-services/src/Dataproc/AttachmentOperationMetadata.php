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

namespace Google\Service\Dataproc;

class AttachmentOperationMetadata extends \Google\Collection
{
  /**
   * Attachment operation type is unknown.
   */
  public const OPERATION_TYPE_ATTACHMENT_OPERATION_TYPE_UNSPECIFIED = 'ATTACHMENT_OPERATION_TYPE_UNSPECIFIED';
  /**
   * Create Attachment operation type.
   */
  public const OPERATION_TYPE_CREATE = 'CREATE';
  /**
   * Update Attachment operation type.
   */
  public const OPERATION_TYPE_UPDATE = 'UPDATE';
  /**
   * Delete Attachment operation type.
   */
  public const OPERATION_TYPE_DELETE = 'DELETE';
  protected $collection_key = 'warnings';
  /**
   * Output only. Name of the attachment for the operation.
   *
   * @var string
   */
  public $attachment;
  /**
   * Output only. Attachment UUID for the operation.
   *
   * @var string
   */
  public $attachmentUuid;
  /**
   * Output only. The time when the operation was created.
   *
   * @var string
   */
  public $createTime;
  /**
   * Output only. Short description of the operation.
   *
   * @var string
   */
  public $description;
  /**
   * Output only. The time when the operation finished.
   *
   * @var string
   */
  public $doneTime;
  /**
   * Output only. Labels associated with the operation.
   *
   * @var string[]
   */
  public $labels;
  /**
   * Output only. The operation type.
   *
   * @var string
   */
  public $operationType;
  /**
   * Output only. Warnings encountered during operation execution.
   *
   * @var string[]
   */
  public $warnings;

  /**
   * Output only. Name of the attachment for the operation.
   *
   * @param string $attachment
   */
  public function setAttachment($attachment)
  {
    $this->attachment = $attachment;
  }
  /**
   * @return string
   */
  public function getAttachment()
  {
    return $this->attachment;
  }
  /**
   * Output only. Attachment UUID for the operation.
   *
   * @param string $attachmentUuid
   */
  public function setAttachmentUuid($attachmentUuid)
  {
    $this->attachmentUuid = $attachmentUuid;
  }
  /**
   * @return string
   */
  public function getAttachmentUuid()
  {
    return $this->attachmentUuid;
  }
  /**
   * Output only. The time when the operation was created.
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
   * Output only. Short description of the operation.
   *
   * @param string $description
   */
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /**
   * @return string
   */
  public function getDescription()
  {
    return $this->description;
  }
  /**
   * Output only. The time when the operation finished.
   *
   * @param string $doneTime
   */
  public function setDoneTime($doneTime)
  {
    $this->doneTime = $doneTime;
  }
  /**
   * @return string
   */
  public function getDoneTime()
  {
    return $this->doneTime;
  }
  /**
   * Output only. Labels associated with the operation.
   *
   * @param string[] $labels
   */
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  /**
   * @return string[]
   */
  public function getLabels()
  {
    return $this->labels;
  }
  /**
   * Output only. The operation type.
   *
   * Accepted values: ATTACHMENT_OPERATION_TYPE_UNSPECIFIED, CREATE, UPDATE,
   * DELETE
   *
   * @param self::OPERATION_TYPE_* $operationType
   */
  public function setOperationType($operationType)
  {
    $this->operationType = $operationType;
  }
  /**
   * @return self::OPERATION_TYPE_*
   */
  public function getOperationType()
  {
    return $this->operationType;
  }
  /**
   * Output only. Warnings encountered during operation execution.
   *
   * @param string[] $warnings
   */
  public function setWarnings($warnings)
  {
    $this->warnings = $warnings;
  }
  /**
   * @return string[]
   */
  public function getWarnings()
  {
    return $this->warnings;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AttachmentOperationMetadata::class, 'Google_Service_Dataproc_AttachmentOperationMetadata');
