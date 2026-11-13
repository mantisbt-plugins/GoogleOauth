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

class SourceTargetPairedNode extends \Google\Collection
{
  /**
   * The state of the paired node is unknown.
   */
  public const STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * The paired node is being provisioned.
   */
  public const STATE_PROVISIONING = 'PROVISIONING';
  /**
   * The paired node is provisioned.
   */
  public const STATE_PROVISIONED = 'PROVISIONED';
  /**
   * The paired node is upgrading.
   */
  public const STATE_UPGRADING = 'UPGRADING';
  /**
   * The paired node is upgraded.
   */
  public const STATE_UPGRADED = 'UPGRADED';
  /**
   * Upgrade failed on the paired node.
   */
  public const STATE_UPGRADE_FAILED = 'UPGRADE_FAILED';
  /**
   * Switchover is in progress.
   */
  public const STATE_SWITCHOVER_IN_PROGRESS = 'SWITCHOVER_IN_PROGRESS';
  /**
   * Switchover failed on the paired node.
   */
  public const STATE_SWITCHOVER_FAILED = 'SWITCHOVER_FAILED';
  /**
   * Switchover completed successfully.
   */
  public const STATE_SWITCHOVER_SUCCEEDED = 'SWITCHOVER_SUCCEEDED';
  /**
   * The paired node is being deleted.
   */
  public const STATE_DELETING = 'DELETING';
  protected $collection_key = 'diffs';
  protected $diffsType = ConfigDiff::class;
  protected $diffsDataType = 'array';
  protected $sourceType = NodeInfo::class;
  protected $sourceDataType = '';
  /**
   * Output only. Specifies the current state of this specific source-target
   * pair.
   *
   * @var string
   */
  public $state;
  protected $targetType = NodeInfo::class;
  protected $targetDataType = '';

  /**
   * Output only. Describes the list of differences for the
   * `SourceTargetPairedNode`.
   *
   * @param ConfigDiff[] $diffs
   */
  public function setDiffs($diffs)
  {
    $this->diffs = $diffs;
  }
  /**
   * @return ConfigDiff[]
   */
  public function getDiffs()
  {
    return $this->diffs;
  }
  /**
   * Output only. Specifies the resource name of the source instance in this
   * pair.
   *
   * @param NodeInfo $source
   */
  public function setSource(NodeInfo $source)
  {
    $this->source = $source;
  }
  /**
   * @return NodeInfo
   */
  public function getSource()
  {
    return $this->source;
  }
  /**
   * Output only. Specifies the current state of this specific source-target
   * pair.
   *
   * Accepted values: STATE_UNSPECIFIED, PROVISIONING, PROVISIONED, UPGRADING,
   * UPGRADED, UPGRADE_FAILED, SWITCHOVER_IN_PROGRESS, SWITCHOVER_FAILED,
   * SWITCHOVER_SUCCEEDED, DELETING
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
   * Output only. Specifies details of the corresponding target instance in this
   * pair.
   *
   * @param NodeInfo $target
   */
  public function setTarget(NodeInfo $target)
  {
    $this->target = $target;
  }
  /**
   * @return NodeInfo
   */
  public function getTarget()
  {
    return $this->target;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SourceTargetPairedNode::class, 'Google_Service_SQLAdmin_SourceTargetPairedNode');
