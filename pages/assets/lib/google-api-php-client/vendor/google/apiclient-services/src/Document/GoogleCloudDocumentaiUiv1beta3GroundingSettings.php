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

namespace Google\Service\Document;

class GoogleCloudDocumentaiUiv1beta3GroundingSettings extends \Google\Model
{
  /**
   * The default value. Behaves like HARD.
   */
  public const GROUNDING_TYPE_GROUNDING_TYPE_UNSPECIFIED = 'GROUNDING_TYPE_UNSPECIFIED';
  /**
   * Requires exact match with OCR text for extractions.
   */
  public const GROUNDING_TYPE_HARD = 'HARD';
  /**
   * Allows for minor discrepancies between LLM output and OCR text.
   */
  public const GROUNDING_TYPE_OCR_RELAXED = 'OCR_RELAXED';
  /**
   * LLM extractions are used without strict OCR matching. Bounding boxes may be
   * approximated or absent.
   */
  public const GROUNDING_TYPE_NO_GROUNDING = 'NO_GROUNDING';
  /**
   * The type of grounding to apply.
   *
   * @var string
   */
  public $groundingType;

  /**
   * The type of grounding to apply.
   *
   * Accepted values: GROUNDING_TYPE_UNSPECIFIED, HARD, OCR_RELAXED,
   * NO_GROUNDING
   *
   * @param self::GROUNDING_TYPE_* $groundingType
   */
  public function setGroundingType($groundingType)
  {
    $this->groundingType = $groundingType;
  }
  /**
   * @return self::GROUNDING_TYPE_*
   */
  public function getGroundingType()
  {
    return $this->groundingType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDocumentaiUiv1beta3GroundingSettings::class, 'Google_Service_Document_GoogleCloudDocumentaiUiv1beta3GroundingSettings');
