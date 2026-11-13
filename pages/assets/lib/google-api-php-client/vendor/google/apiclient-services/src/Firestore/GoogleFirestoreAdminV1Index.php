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

class GoogleFirestoreAdminV1Index extends \Google\Collection
{
  /**
   * The index can only be used by the Firestore Native query API. This is the
   * default.
   */
  public const API_SCOPE_ANY_API = 'ANY_API';
  /**
   * The index can only be used by the Firestore in Datastore Mode query API.
   */
  public const API_SCOPE_DATASTORE_MODE_API = 'DATASTORE_MODE_API';
  /**
   * The index can only be used by the MONGODB_COMPATIBLE_API.
   */
  public const API_SCOPE_MONGODB_COMPATIBLE_API = 'MONGODB_COMPATIBLE_API';
  /**
   * Unspecified. It will use database default setting. This value is input
   * only.
   */
  public const DENSITY_DENSITY_UNSPECIFIED = 'DENSITY_UNSPECIFIED';
  /**
   * An index entry will only exist if ALL fields are present in the document.
   * This is both the default and only allowed value for Standard edition
   * databases (for both Cloud Firestore `ANY_API` and Cloud Datastore
   * `DATASTORE_MODE_API`). Take for example the following document: ``` {
   * "__name__": "...", "a": 1, "b": 2, "c": 3 } ``` an index on `(a ASC, b ASC,
   * c ASC, __name__ ASC)` will generate an index entry for this document since
   * `a`, 'b', `c`, and `__name__` are all present but an index of `(a ASC, d
   * ASC, __name__ ASC)` will not generate an index entry for this document
   * since `d` is missing. This means that such indexes can only be used to
   * serve a query when the query has either implicit or explicit requirements
   * that all fields from the index are present.
   */
  public const DENSITY_SPARSE_ALL = 'SPARSE_ALL';
  /**
   * An index entry will exist if ANY field are present in the document. This is
   * used as the definition of a sparse index for Enterprise edition databases.
   * Take for example the following document: ``` { "__name__": "...", "a": 1,
   * "b": 2, "c": 3 } ``` an index on `(a ASC, d ASC)` will generate an index
   * entry for this document since `a` is present, and will fill in an `unset`
   * value for `d`. An index on `(d ASC, e ASC)` will not generate any index
   * entry as neither `d` nor `e` are present. An index that contains `__name__`
   * will generate an index entry for all documents since Firestore guarantees
   * that all documents have a `__name__` field.
   */
  public const DENSITY_SPARSE_ANY = 'SPARSE_ANY';
  /**
   * An index entry will exist regardless of if the fields are present or not.
   * This is the default density for an Enterprise edition database. The index
   * will store `unset` values for fields that are not present in the document.
   */
  public const DENSITY_DENSE = 'DENSE';
  /**
   * The query scope is unspecified. Not a valid option.
   */
  public const QUERY_SCOPE_QUERY_SCOPE_UNSPECIFIED = 'QUERY_SCOPE_UNSPECIFIED';
  /**
   * Indexes with a collection query scope specified allow queries against a
   * collection that is the child of a specific document, specified at query
   * time, and that has the collection ID specified by the index.
   */
  public const QUERY_SCOPE_COLLECTION = 'COLLECTION';
  /**
   * Indexes with a collection group query scope specified allow queries against
   * all collections that has the collection ID specified by the index.
   */
  public const QUERY_SCOPE_COLLECTION_GROUP = 'COLLECTION_GROUP';
  /**
   * Include all the collections's ancestor in the index. Only available for
   * Datastore Mode databases.
   */
  public const QUERY_SCOPE_COLLECTION_RECURSIVE = 'COLLECTION_RECURSIVE';
  /**
   * The state is unspecified.
   */
  public const STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * The index is being created. There is an active long-running operation for
   * the index. The index is updated when writing a document. Some index data
   * may exist.
   */
  public const STATE_CREATING = 'CREATING';
  /**
   * The index is ready to be used. The index is updated when writing a
   * document. The index is fully populated from all stored documents it applies
   * to.
   */
  public const STATE_READY = 'READY';
  /**
   * The index was being created, but something went wrong. There is no active
   * long-running operation for the index, and the most recently finished long-
   * running operation failed. The index is not updated when writing a document.
   * Some index data may exist. Use the google.longrunning.Operations API to
   * determine why the operation that last attempted to create this index
   * failed, then re-create the index.
   */
  public const STATE_NEEDS_REPAIR = 'NEEDS_REPAIR';
  protected $collection_key = 'fields';
  /**
   * The API scope supported by this index.
   *
   * @var string
   */
  public $apiScope;
  /**
   * Immutable. The density configuration of the index.
   *
   * @var string
   */
  public $density;
  protected $fieldsType = GoogleFirestoreAdminV1IndexField::class;
  protected $fieldsDataType = 'array';
  /**
   * Optional. Whether the index is multikey. By default, the index is not
   * multikey. For non-multikey indexes, none of the paths in the index
   * definition reach or traverse an array, except via an explicit array index.
   * For multikey indexes, at most one of the paths in the index definition
   * reach or traverse an array, except via an explicit array index. Violations
   * will result in errors. Note this field only applies to index with
   * MONGODB_COMPATIBLE_API ApiScope.
   *
   * @var bool
   */
  public $multikey;
  /**
   * A server-defined name for this index. Output only. When used in the
   * google.firestore.admin.v1.Index resource, the value is of the form: `projec
   * ts/{project_id}/databases/{database_id}/collectionGroups/{collection_id}/in
   * dexes/{index_id}` When used in the google.firestore.admin.v1.Field
   * resource, the value is empty.
   *
   * @var string
   */
  public $name;
  /**
   * Indexes with a collection query scope specified allow queries against a
   * collection that is the child of a specific document, specified at query
   * time, and that has the same collection ID. Indexes with a collection group
   * query scope specified allow queries against all collections descended from
   * a specific document, specified at query time, and that have the same
   * collection ID as this index.
   *
   * @var string
   */
  public $queryScope;
  protected $searchIndexOptionsType = GoogleFirestoreAdminV1SearchIndexOptions::class;
  protected $searchIndexOptionsDataType = '';
  /**
   * Optional. The number of physical shards for the index. In Cloud Firestore,
   * data and index entries are stored in contiguous, ordered key ranges called
   * splits. While document keys within a collection are hashed to distribute
   * write traffic across splits, secondary index entries are ordered
   * lexicographically by their indexed field values. When an index contains
   * fields with sequential or monotonically increasing or decreasing values
   * (such as timestamps or auto-incrementing IDs), every incoming index write
   * targets the boundary of the index keyspace on a single split. Because
   * sequential writes continuously advance to the newest split at the edge of
   * the range, automatic load-based splitting cannot divide the write traffic
   * across storage servers. Under high write rates, this concentration creates
   * an append hotspot on that single split, resulting in elevated write
   * latency, contention errors, and transaction aborts. Sharded indexes solve
   * this write bottleneck by hash partitioning the secondary index keyspace.
   * When `shard_count` is configured to N, Firestore automatically prepends a
   * virtual computed shard field (with values from 0 to N-1) as the leading
   * field of the index. This splits a single sequential key range into N
   * independent key ranges, uniformly scattering adjacent writes across
   * distinct splits and storage servers to enable linear write scaling. Query
   * trade-offs: Hash partitioning trades query performance for write
   * throughput. Because matching index entries are scattered across all shards,
   * queries executing against a sharded index cannot read from a single
   * contiguous range. The query engine must fan out parallel seeks across all N
   * shards and merge the ordered results. Even index point lookups and queries
   * with `LIMIT 1` must seek across all N shards. Sizing and best practices: -
   * Indexes cannot be updated in-place. `shard_count` is immutable once an
   * index is created; to "reshard" an index, create a new index with the
   * desired `shard_count` and delete the original index. - Use sharded indexes
   * only for indexes experiencing write bottlenecks (typically exceeding
   * 500-1,000 writes/sec) on sequential or timestamp fields. - Do not shard
   * indexes on uniformly distributed fields (such as UUIDs or hash tokens),
   * where writes naturally spread across splits without sharding. Sharding
   * uniform indexes adds query overhead without improving write throughput. -
   * Do not shard read-heavy or low-write collections. - Size `shard_count`
   * based on expected peak write throughput. Because a single split sustains
   * roughly 500-1,000 writes/sec on sequential keys, estimate `shard_count ≈
   * ceil(peak_write_qps / 500)`. - e.g., 4 for up to ~2,000-4,000 writes/sec,
   * 16 for up to ~10,000+ writes/sec. - Setting an excessively high shard count
   * produces diminishing write returns while needlessly increasing read latency
   * and seek costs. If <= 1, the index is unsharded (1 physical shard).
   *
   * @var int
   */
  public $shardCount;
  /**
   * Output only. The serving state of the index.
   *
   * @var string
   */
  public $state;
  /**
   * Optional. Whether it is an unique index. Unique index ensures all values
   * for the indexed field(s) are unique across documents.
   *
   * @var bool
   */
  public $unique;

  /**
   * The API scope supported by this index.
   *
   * Accepted values: ANY_API, DATASTORE_MODE_API, MONGODB_COMPATIBLE_API
   *
   * @param self::API_SCOPE_* $apiScope
   */
  public function setApiScope($apiScope)
  {
    $this->apiScope = $apiScope;
  }
  /**
   * @return self::API_SCOPE_*
   */
  public function getApiScope()
  {
    return $this->apiScope;
  }
  /**
   * Immutable. The density configuration of the index.
   *
   * Accepted values: DENSITY_UNSPECIFIED, SPARSE_ALL, SPARSE_ANY, DENSE
   *
   * @param self::DENSITY_* $density
   */
  public function setDensity($density)
  {
    $this->density = $density;
  }
  /**
   * @return self::DENSITY_*
   */
  public function getDensity()
  {
    return $this->density;
  }
  /**
   * The fields supported by this index. At most 100 fields may be specified. In
   * Standard edition databases only: - At least 2 fields must be specified. -
   * The last field entry is always for the field path `__name__`. If, on
   * creation, `__name__` was not specified as the last field, it will be added
   * automatically with the same direction as that of the last field defined. If
   * the final field in the index is not directional, the `__name__` will be
   * ordered ASCENDING (unless explicitly specified).
   *
   * @param GoogleFirestoreAdminV1IndexField[] $fields
   */
  public function setFields($fields)
  {
    $this->fields = $fields;
  }
  /**
   * @return GoogleFirestoreAdminV1IndexField[]
   */
  public function getFields()
  {
    return $this->fields;
  }
  /**
   * Optional. Whether the index is multikey. By default, the index is not
   * multikey. For non-multikey indexes, none of the paths in the index
   * definition reach or traverse an array, except via an explicit array index.
   * For multikey indexes, at most one of the paths in the index definition
   * reach or traverse an array, except via an explicit array index. Violations
   * will result in errors. Note this field only applies to index with
   * MONGODB_COMPATIBLE_API ApiScope.
   *
   * @param bool $multikey
   */
  public function setMultikey($multikey)
  {
    $this->multikey = $multikey;
  }
  /**
   * @return bool
   */
  public function getMultikey()
  {
    return $this->multikey;
  }
  /**
   * A server-defined name for this index. Output only. When used in the
   * google.firestore.admin.v1.Index resource, the value is of the form: `projec
   * ts/{project_id}/databases/{database_id}/collectionGroups/{collection_id}/in
   * dexes/{index_id}` When used in the google.firestore.admin.v1.Field
   * resource, the value is empty.
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
   * Indexes with a collection query scope specified allow queries against a
   * collection that is the child of a specific document, specified at query
   * time, and that has the same collection ID. Indexes with a collection group
   * query scope specified allow queries against all collections descended from
   * a specific document, specified at query time, and that have the same
   * collection ID as this index.
   *
   * Accepted values: QUERY_SCOPE_UNSPECIFIED, COLLECTION, COLLECTION_GROUP,
   * COLLECTION_RECURSIVE
   *
   * @param self::QUERY_SCOPE_* $queryScope
   */
  public function setQueryScope($queryScope)
  {
    $this->queryScope = $queryScope;
  }
  /**
   * @return self::QUERY_SCOPE_*
   */
  public function getQueryScope()
  {
    return $this->queryScope;
  }
  /**
   * Optional. Options for search indexes that are at the index definition
   * level. This field is only currently supported for indexes with
   * MONGODB_COMPATIBLE_API ApiScope.
   *
   * @param GoogleFirestoreAdminV1SearchIndexOptions $searchIndexOptions
   */
  public function setSearchIndexOptions(GoogleFirestoreAdminV1SearchIndexOptions $searchIndexOptions)
  {
    $this->searchIndexOptions = $searchIndexOptions;
  }
  /**
   * @return GoogleFirestoreAdminV1SearchIndexOptions
   */
  public function getSearchIndexOptions()
  {
    return $this->searchIndexOptions;
  }
  /**
   * Optional. The number of physical shards for the index. In Cloud Firestore,
   * data and index entries are stored in contiguous, ordered key ranges called
   * splits. While document keys within a collection are hashed to distribute
   * write traffic across splits, secondary index entries are ordered
   * lexicographically by their indexed field values. When an index contains
   * fields with sequential or monotonically increasing or decreasing values
   * (such as timestamps or auto-incrementing IDs), every incoming index write
   * targets the boundary of the index keyspace on a single split. Because
   * sequential writes continuously advance to the newest split at the edge of
   * the range, automatic load-based splitting cannot divide the write traffic
   * across storage servers. Under high write rates, this concentration creates
   * an append hotspot on that single split, resulting in elevated write
   * latency, contention errors, and transaction aborts. Sharded indexes solve
   * this write bottleneck by hash partitioning the secondary index keyspace.
   * When `shard_count` is configured to N, Firestore automatically prepends a
   * virtual computed shard field (with values from 0 to N-1) as the leading
   * field of the index. This splits a single sequential key range into N
   * independent key ranges, uniformly scattering adjacent writes across
   * distinct splits and storage servers to enable linear write scaling. Query
   * trade-offs: Hash partitioning trades query performance for write
   * throughput. Because matching index entries are scattered across all shards,
   * queries executing against a sharded index cannot read from a single
   * contiguous range. The query engine must fan out parallel seeks across all N
   * shards and merge the ordered results. Even index point lookups and queries
   * with `LIMIT 1` must seek across all N shards. Sizing and best practices: -
   * Indexes cannot be updated in-place. `shard_count` is immutable once an
   * index is created; to "reshard" an index, create a new index with the
   * desired `shard_count` and delete the original index. - Use sharded indexes
   * only for indexes experiencing write bottlenecks (typically exceeding
   * 500-1,000 writes/sec) on sequential or timestamp fields. - Do not shard
   * indexes on uniformly distributed fields (such as UUIDs or hash tokens),
   * where writes naturally spread across splits without sharding. Sharding
   * uniform indexes adds query overhead without improving write throughput. -
   * Do not shard read-heavy or low-write collections. - Size `shard_count`
   * based on expected peak write throughput. Because a single split sustains
   * roughly 500-1,000 writes/sec on sequential keys, estimate `shard_count ≈
   * ceil(peak_write_qps / 500)`. - e.g., 4 for up to ~2,000-4,000 writes/sec,
   * 16 for up to ~10,000+ writes/sec. - Setting an excessively high shard count
   * produces diminishing write returns while needlessly increasing read latency
   * and seek costs. If <= 1, the index is unsharded (1 physical shard).
   *
   * @param int $shardCount
   */
  public function setShardCount($shardCount)
  {
    $this->shardCount = $shardCount;
  }
  /**
   * @return int
   */
  public function getShardCount()
  {
    return $this->shardCount;
  }
  /**
   * Output only. The serving state of the index.
   *
   * Accepted values: STATE_UNSPECIFIED, CREATING, READY, NEEDS_REPAIR
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
   * Optional. Whether it is an unique index. Unique index ensures all values
   * for the indexed field(s) are unique across documents.
   *
   * @param bool $unique
   */
  public function setUnique($unique)
  {
    $this->unique = $unique;
  }
  /**
   * @return bool
   */
  public function getUnique()
  {
    return $this->unique;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleFirestoreAdminV1Index::class, 'Google_Service_Firestore_GoogleFirestoreAdminV1Index');
