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

namespace Google\Service\CloudDataplex;

class GoogleCloudDataplexV1DataDomainBinding extends \Google\Model
{
  /**
   * Output only. The time at which the DataDomainBinding was created.
   *
   * @var string
   */
  public $createTime;
  /**
   * Identifier. The relative resource name of the DataDomainBinding. Format: pr
   * ojects/{project_id_or_number}/locations/{location}/dataDomains/{data_domain
   * _id}/bindings/{binding_id}
   *
   * @var string
   */
  public $name;
  /**
   * Required. Immutable. The full resource name of the Google Cloud resource to
   * be bound (i.e. included together with its contents) to the
   * DataDomain.Format: IAM Full resource name
   * (https://docs.cloud.google.com/iam/docs/full-resource-names) Examples: -
   * GCP Project: //cloudresourcemanager.googleapis.com/projects/{project-id} -
   * BigQuery Dataset: //bigquery.googleapis.com/projects/{project-
   * id}/datasets/{dataset-id} - BigQuery Table:
   * //bigquery.googleapis.com/projects/{project-id}/datasets/{dataset-
   * id}/tables/{table-id} - Dataplex Data Product:
   * //dataplex.googleapis.com/projects/{project-
   * number}/locations/{location}/dataProducts/{data-product-id}Authorization:
   * the resource to be bound must first grant an IAM role with the resource-
   * specific setIamPolicy permission to the DataDomain. Example: - resource:
   * //bigquery.googleapis.com/projects/{project-id}/datasets/{dataset-id} - IAM
   * role: with bigquery.datasets.setIamPolicy permission (e.g. roles/owner) -
   * IAM member: principal://dataplex.googleapis.com/projects/{project-
   * number}/name/locations/{location}/dataDomains/{data-domain-id}
   *
   * @var string
   */
  public $resource;
  /**
   * Output only. System-generated unique ID.
   *
   * @var string
   */
  public $uid;

  /**
   * Output only. The time at which the DataDomainBinding was created.
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
   * Identifier. The relative resource name of the DataDomainBinding. Format: pr
   * ojects/{project_id_or_number}/locations/{location}/dataDomains/{data_domain
   * _id}/bindings/{binding_id}
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
   * Required. Immutable. The full resource name of the Google Cloud resource to
   * be bound (i.e. included together with its contents) to the
   * DataDomain.Format: IAM Full resource name
   * (https://docs.cloud.google.com/iam/docs/full-resource-names) Examples: -
   * GCP Project: //cloudresourcemanager.googleapis.com/projects/{project-id} -
   * BigQuery Dataset: //bigquery.googleapis.com/projects/{project-
   * id}/datasets/{dataset-id} - BigQuery Table:
   * //bigquery.googleapis.com/projects/{project-id}/datasets/{dataset-
   * id}/tables/{table-id} - Dataplex Data Product:
   * //dataplex.googleapis.com/projects/{project-
   * number}/locations/{location}/dataProducts/{data-product-id}Authorization:
   * the resource to be bound must first grant an IAM role with the resource-
   * specific setIamPolicy permission to the DataDomain. Example: - resource:
   * //bigquery.googleapis.com/projects/{project-id}/datasets/{dataset-id} - IAM
   * role: with bigquery.datasets.setIamPolicy permission (e.g. roles/owner) -
   * IAM member: principal://dataplex.googleapis.com/projects/{project-
   * number}/name/locations/{location}/dataDomains/{data-domain-id}
   *
   * @param string $resource
   */
  public function setResource($resource)
  {
    $this->resource = $resource;
  }
  /**
   * @return string
   */
  public function getResource()
  {
    return $this->resource;
  }
  /**
   * Output only. System-generated unique ID.
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
class_alias(GoogleCloudDataplexV1DataDomainBinding::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1DataDomainBinding');
