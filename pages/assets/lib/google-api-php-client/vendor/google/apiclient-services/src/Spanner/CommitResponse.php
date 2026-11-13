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

namespace Google\Service\Spanner;

class CommitResponse extends \Google\Model
{
  /**
   * Default value. If the value is not specified, the `SERIALIZABLE` isolation
   * level is used.
   */
  public const ISOLATION_LEVEL_ISOLATION_LEVEL_UNSPECIFIED = 'ISOLATION_LEVEL_UNSPECIFIED';
  /**
   * All transactions appear as if they executed in a serial order, even if some
   * of the reads, writes, and other operations of distinct transactions
   * actually occurred in parallel. Spanner assigns commit timestamps that
   * reflect the order of committed transactions to implement this property.
   * Spanner offers a stronger guarantee than serializability called external
   * consistency. For more information, see [TrueTime and external
   * consistency](https://cloud.google.com/spanner/docs/true-time-external-
   * consistency#serializability).
   */
  public const ISOLATION_LEVEL_SERIALIZABLE = 'SERIALIZABLE';
  /**
   * All reads performed during the transaction observe a consistent snapshot of
   * the database, and the transaction is only successfully committed in the
   * absence of conflicts between its updates and any concurrent updates that
   * have occurred since that snapshot. Consequently, in contrast to
   * `SERIALIZABLE` transactions, only write-write conflicts are detected in
   * snapshot transactions. This isolation level does not support read-only and
   * partitioned DML transactions. When `REPEATABLE_READ` is specified on a
   * read-write transaction, the locking semantics default to `OPTIMISTIC`.
   */
  public const ISOLATION_LEVEL_REPEATABLE_READ = 'REPEATABLE_READ';
  /**
   * Default value. * If isolation level is SERIALIZABLE, locking semantics
   * default to `PESSIMISTIC`. * If isolation level is REPEATABLE_READ, locking
   * semantics default to `OPTIMISTIC`. * See [Concurrency
   * control](https://cloud.google.com/spanner/docs/concurrency-control) for
   * more details.
   */
  public const READ_LOCK_MODE_READ_LOCK_MODE_UNSPECIFIED = 'READ_LOCK_MODE_UNSPECIFIED';
  /**
   * Pessimistic lock mode. Lock acquisition behavior depends on the isolation
   * level in use. In SERIALIZABLE isolation, reads and writes acquire necessary
   * locks during transaction statement execution. In REPEATABLE_READ isolation,
   * reads that explicitly request to be locked and writes acquire locks. See
   * [Concurrency control](https://cloud.google.com/spanner/docs/concurrency-
   * control) for details on the types of locks acquired at each transaction
   * step.
   */
  public const READ_LOCK_MODE_PESSIMISTIC = 'PESSIMISTIC';
  /**
   * Optimistic lock mode. Lock acquisition behavior depends on the isolation
   * level in use. In both SERIALIZABLE and REPEATABLE_READ isolation, reads and
   * writes do not acquire locks during transaction statement execution. See
   * [Concurrency control](https://cloud.google.com/spanner/docs/concurrency-
   * control) for details on how the guarantees of each isolation level are
   * provided at commit time.
   */
  public const READ_LOCK_MODE_OPTIMISTIC = 'OPTIMISTIC';
  protected $commitStatsType = CommitStats::class;
  protected $commitStatsDataType = '';
  /**
   * The Cloud Spanner timestamp at which the transaction committed.
   *
   * @var string
   */
  public $commitTimestamp;
  /**
   * The isolation level used for the read-write transaction.
   *
   * @var string
   */
  public $isolationLevel;
  protected $precommitTokenType = MultiplexedSessionPrecommitToken::class;
  protected $precommitTokenDataType = '';
  /**
   * The read lock mode used for the read-write transaction.
   *
   * @var string
   */
  public $readLockMode;
  /**
   * If `TransactionOptions.isolation_level` is set to
   * `IsolationLevel.REPEATABLE_READ`, then the snapshot timestamp is the
   * timestamp at which all reads in the transaction ran. This timestamp is
   * never returned.
   *
   * @var string
   */
  public $snapshotTimestamp;

  /**
   * The statistics about this `Commit`. Not returned by default. For more
   * information, see CommitRequest.return_commit_stats.
   *
   * @param CommitStats $commitStats
   */
  public function setCommitStats(CommitStats $commitStats)
  {
    $this->commitStats = $commitStats;
  }
  /**
   * @return CommitStats
   */
  public function getCommitStats()
  {
    return $this->commitStats;
  }
  /**
   * The Cloud Spanner timestamp at which the transaction committed.
   *
   * @param string $commitTimestamp
   */
  public function setCommitTimestamp($commitTimestamp)
  {
    $this->commitTimestamp = $commitTimestamp;
  }
  /**
   * @return string
   */
  public function getCommitTimestamp()
  {
    return $this->commitTimestamp;
  }
  /**
   * The isolation level used for the read-write transaction.
   *
   * Accepted values: ISOLATION_LEVEL_UNSPECIFIED, SERIALIZABLE, REPEATABLE_READ
   *
   * @param self::ISOLATION_LEVEL_* $isolationLevel
   */
  public function setIsolationLevel($isolationLevel)
  {
    $this->isolationLevel = $isolationLevel;
  }
  /**
   * @return self::ISOLATION_LEVEL_*
   */
  public function getIsolationLevel()
  {
    return $this->isolationLevel;
  }
  /**
   * If specified, transaction has not committed yet. You must retry the commit
   * with the new precommit token.
   *
   * @param MultiplexedSessionPrecommitToken $precommitToken
   */
  public function setPrecommitToken(MultiplexedSessionPrecommitToken $precommitToken)
  {
    $this->precommitToken = $precommitToken;
  }
  /**
   * @return MultiplexedSessionPrecommitToken
   */
  public function getPrecommitToken()
  {
    return $this->precommitToken;
  }
  /**
   * The read lock mode used for the read-write transaction.
   *
   * Accepted values: READ_LOCK_MODE_UNSPECIFIED, PESSIMISTIC, OPTIMISTIC
   *
   * @param self::READ_LOCK_MODE_* $readLockMode
   */
  public function setReadLockMode($readLockMode)
  {
    $this->readLockMode = $readLockMode;
  }
  /**
   * @return self::READ_LOCK_MODE_*
   */
  public function getReadLockMode()
  {
    return $this->readLockMode;
  }
  /**
   * If `TransactionOptions.isolation_level` is set to
   * `IsolationLevel.REPEATABLE_READ`, then the snapshot timestamp is the
   * timestamp at which all reads in the transaction ran. This timestamp is
   * never returned.
   *
   * @param string $snapshotTimestamp
   */
  public function setSnapshotTimestamp($snapshotTimestamp)
  {
    $this->snapshotTimestamp = $snapshotTimestamp;
  }
  /**
   * @return string
   */
  public function getSnapshotTimestamp()
  {
    return $this->snapshotTimestamp;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CommitResponse::class, 'Google_Service_Spanner_CommitResponse');
