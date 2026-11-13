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

namespace Google\Service\AgentRegistry;

class SkillRevision extends \Google\Model
{
  /**
   * Default value. This value is unused.
   */
  public const STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * The revision is being created.
   */
  public const STATE_CREATING = 'CREATING';
  /**
   * The revision is active.
   */
  public const STATE_ACTIVE = 'ACTIVE';
  /**
   * The revision failed to compile or ingest.
   */
  public const STATE_FAILED = 'FAILED';
  /**
   * The revision is being deleted.
   */
  public const STATE_DELETING = 'DELETING';
  protected $archiveUploadSourceType = ArchiveUploadSource::class;
  protected $archiveUploadSourceDataType = '';
  /**
   * Output only. Revision creation timestamp.
   *
   * @var string
   */
  public $createTime;
  protected $frontmatterType = Frontmatter::class;
  protected $frontmatterDataType = '';
  protected $gcsSourceType = GcsSource::class;
  protected $gcsSourceDataType = '';
  /**
   * Identifier. Resource name of the SkillRevision. Format: `projects/{project}
   * /locations/{location}/skills/{skill}/revisions/{revision}`
   *
   * @var string
   */
  public $name;
  protected $scanResultType = ScanResult::class;
  protected $scanResultDataType = '';
  /**
   * Output only. Cryptographic SHA-256 integrity and deduplication digest of
   * the payload zip.
   *
   * @var string
   */
  public $sha256Hash;
  /**
   * Output only. Size of the compiled zip payload in bytes (assists client
   * download progress).
   *
   * @var string
   */
  public $sizeBytes;
  /**
   * Output only. The system-managed lifecycle state of this revision.
   *
   * @var string
   */
  public $state;
  /**
   * Output only. Universally unique identifier (UUID4) for the skill revision.
   *
   * @var string
   */
  public $uid;

  /**
   * Optional. Immutable. Direct write-only raw archive upload source.
   *
   * @param ArchiveUploadSource $archiveUploadSource
   */
  public function setArchiveUploadSource(ArchiveUploadSource $archiveUploadSource)
  {
    $this->archiveUploadSource = $archiveUploadSource;
  }
  /**
   * @return ArchiveUploadSource
   */
  public function getArchiveUploadSource()
  {
    return $this->archiveUploadSource;
  }
  /**
   * Output only. Revision creation timestamp.
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
   * Output only. Extracted YAML frontmatter configuration snapshot.
   *
   * @param Frontmatter $frontmatter
   */
  public function setFrontmatter(Frontmatter $frontmatter)
  {
    $this->frontmatter = $frontmatter;
  }
  /**
   * @return Frontmatter
   */
  public function getFrontmatter()
  {
    return $this->frontmatter;
  }
  /**
   * Optional. Immutable. Cloud Storage object generation URI.
   *
   * @param GcsSource $gcsSource
   */
  public function setGcsSource(GcsSource $gcsSource)
  {
    $this->gcsSource = $gcsSource;
  }
  /**
   * @return GcsSource
   */
  public function getGcsSource()
  {
    return $this->gcsSource;
  }
  /**
   * Identifier. Resource name of the SkillRevision. Format: `projects/{project}
   * /locations/{location}/skills/{skill}/revisions/{revision}`
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
   * Output only. Scan result of the skill revision.
   *
   * @param ScanResult $scanResult
   */
  public function setScanResult(ScanResult $scanResult)
  {
    $this->scanResult = $scanResult;
  }
  /**
   * @return ScanResult
   */
  public function getScanResult()
  {
    return $this->scanResult;
  }
  /**
   * Output only. Cryptographic SHA-256 integrity and deduplication digest of
   * the payload zip.
   *
   * @param string $sha256Hash
   */
  public function setSha256Hash($sha256Hash)
  {
    $this->sha256Hash = $sha256Hash;
  }
  /**
   * @return string
   */
  public function getSha256Hash()
  {
    return $this->sha256Hash;
  }
  /**
   * Output only. Size of the compiled zip payload in bytes (assists client
   * download progress).
   *
   * @param string $sizeBytes
   */
  public function setSizeBytes($sizeBytes)
  {
    $this->sizeBytes = $sizeBytes;
  }
  /**
   * @return string
   */
  public function getSizeBytes()
  {
    return $this->sizeBytes;
  }
  /**
   * Output only. The system-managed lifecycle state of this revision.
   *
   * Accepted values: STATE_UNSPECIFIED, CREATING, ACTIVE, FAILED, DELETING
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
   * Output only. Universally unique identifier (UUID4) for the skill revision.
   *
   * @param string $uid
   */
  public function setUid($uid)
  {
    $this->uid = $uid;
  }
  /**
   * @return string
   */
  public function getUid()
  {
    return $this->uid;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SkillRevision::class, 'Google_Service_AgentRegistry_SkillRevision');
