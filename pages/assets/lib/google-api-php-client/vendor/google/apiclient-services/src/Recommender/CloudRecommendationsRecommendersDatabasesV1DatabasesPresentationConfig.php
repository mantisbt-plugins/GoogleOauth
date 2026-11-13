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

namespace Google\Service\Recommender;

class CloudRecommendationsRecommendersDatabasesV1DatabasesPresentationConfig extends \Google\Collection
{
  protected $collection_key = 'playbookLinks';
  protected $ctaConfigsType = CloudRecommendationsRecommendersDatabasesV1CtaConfig::class;
  protected $ctaConfigsDataType = 'array';
  protected $issueContentChunksType = CloudRecommendationsRecommendersDatabasesV1ContentChunk::class;
  protected $issueContentChunksDataType = 'array';
  protected $issueDescriptionType = CloudRecommendationsRecommendersDatabasesV1Description::class;
  protected $issueDescriptionDataType = '';
  protected $issueTableFieldsType = CloudRecommendationsRecommendersDatabasesV1TableField::class;
  protected $issueTableFieldsDataType = 'array';
  protected $nextStepsContentChunksType = CloudRecommendationsRecommendersDatabasesV1ContentChunk::class;
  protected $nextStepsContentChunksDataType = 'array';
  protected $nextStepsDescriptionType = CloudRecommendationsRecommendersDatabasesV1Description::class;
  protected $nextStepsDescriptionDataType = '';
  protected $nextStepsTableFieldsType = CloudRecommendationsRecommendersDatabasesV1TableField::class;
  protected $nextStepsTableFieldsDataType = 'array';
  protected $playbookLinksType = CloudRecommendationsRecommendersDatabasesV1PlaybookLink::class;
  protected $playbookLinksDataType = 'array';

  /**
   * Call to action buttons for the issue.
   *
   * @param CloudRecommendationsRecommendersDatabasesV1CtaConfig[] $ctaConfigs
   */
  public function setCtaConfigs($ctaConfigs)
  {
    $this->ctaConfigs = $ctaConfigs;
  }
  /**
   * @return CloudRecommendationsRecommendersDatabasesV1CtaConfig[]
   */
  public function getCtaConfigs()
  {
    return $this->ctaConfigs;
  }
  /**
   * Content chunks for the issue.
   *
   * @param CloudRecommendationsRecommendersDatabasesV1ContentChunk[] $issueContentChunks
   */
  public function setIssueContentChunks($issueContentChunks)
  {
    $this->issueContentChunks = $issueContentChunks;
  }
  /**
   * @return CloudRecommendationsRecommendersDatabasesV1ContentChunk[]
   */
  public function getIssueContentChunks()
  {
    return $this->issueContentChunks;
  }
  /**
   * Issue description for the issue.
   *
   * @param CloudRecommendationsRecommendersDatabasesV1Description $issueDescription
   */
  public function setIssueDescription(CloudRecommendationsRecommendersDatabasesV1Description $issueDescription)
  {
    $this->issueDescription = $issueDescription;
  }
  /**
   * @return CloudRecommendationsRecommendersDatabasesV1Description
   */
  public function getIssueDescription()
  {
    return $this->issueDescription;
  }
  /**
   * Fields for the table containing metadata associated with the issue.
   *
   * @param CloudRecommendationsRecommendersDatabasesV1TableField[] $issueTableFields
   */
  public function setIssueTableFields($issueTableFields)
  {
    $this->issueTableFields = $issueTableFields;
  }
  /**
   * @return CloudRecommendationsRecommendersDatabasesV1TableField[]
   */
  public function getIssueTableFields()
  {
    return $this->issueTableFields;
  }
  /**
   * Content chunks for the next steps.
   *
   * @param CloudRecommendationsRecommendersDatabasesV1ContentChunk[] $nextStepsContentChunks
   */
  public function setNextStepsContentChunks($nextStepsContentChunks)
  {
    $this->nextStepsContentChunks = $nextStepsContentChunks;
  }
  /**
   * @return CloudRecommendationsRecommendersDatabasesV1ContentChunk[]
   */
  public function getNextStepsContentChunks()
  {
    return $this->nextStepsContentChunks;
  }
  /**
   * Next steps description for the issue.
   *
   * @param CloudRecommendationsRecommendersDatabasesV1Description $nextStepsDescription
   */
  public function setNextStepsDescription(CloudRecommendationsRecommendersDatabasesV1Description $nextStepsDescription)
  {
    $this->nextStepsDescription = $nextStepsDescription;
  }
  /**
   * @return CloudRecommendationsRecommendersDatabasesV1Description
   */
  public function getNextStepsDescription()
  {
    return $this->nextStepsDescription;
  }
  /**
   * Fields for the table containing metadata associated with the next steps.
   *
   * @param CloudRecommendationsRecommendersDatabasesV1TableField[] $nextStepsTableFields
   */
  public function setNextStepsTableFields($nextStepsTableFields)
  {
    $this->nextStepsTableFields = $nextStepsTableFields;
  }
  /**
   * @return CloudRecommendationsRecommendersDatabasesV1TableField[]
   */
  public function getNextStepsTableFields()
  {
    return $this->nextStepsTableFields;
  }
  /**
   * Playbook links for the issue.
   *
   * @param CloudRecommendationsRecommendersDatabasesV1PlaybookLink[] $playbookLinks
   */
  public function setPlaybookLinks($playbookLinks)
  {
    $this->playbookLinks = $playbookLinks;
  }
  /**
   * @return CloudRecommendationsRecommendersDatabasesV1PlaybookLink[]
   */
  public function getPlaybookLinks()
  {
    return $this->playbookLinks;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CloudRecommendationsRecommendersDatabasesV1DatabasesPresentationConfig::class, 'Google_Service_Recommender_CloudRecommendationsRecommendersDatabasesV1DatabasesPresentationConfig');
