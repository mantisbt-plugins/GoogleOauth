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

namespace Google\Service\CloudBillingBudget;

class GoogleCloudBillingBudgetsV1Budget extends \Google\Collection
{
  /**
   * Unspecified ownership scope, same as ALL_USERS.
   */
  public const OWNERSHIP_SCOPE_OWNERSHIP_SCOPE_UNSPECIFIED = 'OWNERSHIP_SCOPE_UNSPECIFIED';
  /**
   * Both billing account-level users and project-level users have full access
   * to the budget, if the users have the required IAM permissions.
   */
  public const OWNERSHIP_SCOPE_ALL_USERS = 'ALL_USERS';
  /**
   * Only billing account-level users have full access to the budget. Project-
   * level users have read-only access, even if they have the required IAM
   * permissions. Not supported when `spend_cap` is set.
   */
  public const OWNERSHIP_SCOPE_BILLING_ACCOUNT = 'BILLING_ACCOUNT';
  protected $collection_key = 'thresholdRules';
  protected $amountType = GoogleCloudBillingBudgetsV1BudgetAmount::class;
  protected $amountDataType = '';
  protected $budgetFilterType = GoogleCloudBillingBudgetsV1Filter::class;
  protected $budgetFilterDataType = '';
  /**
   * User data for display name in UI. The name must be less than or equal to 60
   * characters.
   *
   * @var string
   */
  public $displayName;
  /**
   * Optional. Etag to validate that the object is unchanged for a read-modify-
   * write operation. An empty etag causes an update to overwrite other changes.
   *
   * @var string
   */
  public $etag;
  /**
   * Output only. Resource name of the budget. The resource name implies the
   * scope of a budget. Values are of the form
   * `billingAccounts/{billingAccountId}/budgets/{budgetId}`.
   *
   * @var string
   */
  public $name;
  protected $notificationsRuleType = GoogleCloudBillingBudgetsV1NotificationsRule::class;
  protected $notificationsRuleDataType = '';
  /**
   * Optional. When `spend_cap` is set, must be `OWNERSHIP_SCOPE_UNSPECIFIED` or
   * `ALL_USERS`. `BILLING_ACCOUNT` is not supported for spend caps.
   *
   * @var string
   */
  public $ownershipScope;
  protected $spendCapType = GoogleCloudBillingBudgetsV1SpendCap::class;
  protected $spendCapDataType = '';
  protected $thresholdRulesType = GoogleCloudBillingBudgetsV1ThresholdRule::class;
  protected $thresholdRulesDataType = 'array';

  /**
   * Required. Budgeted amount. When `spend_cap` is set, `specified_amount` must
   * be set to a non-negative amount (>= 0); `last_period_amount` is not
   * supported.
   *
   * @param GoogleCloudBillingBudgetsV1BudgetAmount $amount
   */
  public function setAmount(GoogleCloudBillingBudgetsV1BudgetAmount $amount)
  {
    $this->amount = $amount;
  }
  /**
   * @return GoogleCloudBillingBudgetsV1BudgetAmount
   */
  public function getAmount()
  {
    return $this->amount;
  }
  /**
   * Optional. Filters that define which resources are used to compute the
   * actual spend against the budget amount, such as projects, services, and the
   * budget's time period, as well as other filters. Must be set when
   * `spend_cap` is set. See `Filter` fields for spend cap restrictions.
   *
   * @param GoogleCloudBillingBudgetsV1Filter $budgetFilter
   */
  public function setBudgetFilter(GoogleCloudBillingBudgetsV1Filter $budgetFilter)
  {
    $this->budgetFilter = $budgetFilter;
  }
  /**
   * @return GoogleCloudBillingBudgetsV1Filter
   */
  public function getBudgetFilter()
  {
    return $this->budgetFilter;
  }
  /**
   * User data for display name in UI. The name must be less than or equal to 60
   * characters.
   *
   * @param string $displayName
   */
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /**
   * @return string
   */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /**
   * Optional. Etag to validate that the object is unchanged for a read-modify-
   * write operation. An empty etag causes an update to overwrite other changes.
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
   * Output only. Resource name of the budget. The resource name implies the
   * scope of a budget. Values are of the form
   * `billingAccounts/{billingAccountId}/budgets/{budgetId}`.
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
   * Optional. Rules to apply to notifications sent based on budget spend and
   * thresholds. Must be set when `spend_cap` is set. For spend caps,
   * `enable_project_level_recipients` must be set to `true`,
   * `disable_default_iam_recipients` must be `false` (or unset), and
   * `pubsub_topic` and `monitoring_notification_channels` must be empty.
   *
   * @param GoogleCloudBillingBudgetsV1NotificationsRule $notificationsRule
   */
  public function setNotificationsRule(GoogleCloudBillingBudgetsV1NotificationsRule $notificationsRule)
  {
    $this->notificationsRule = $notificationsRule;
  }
  /**
   * @return GoogleCloudBillingBudgetsV1NotificationsRule
   */
  public function getNotificationsRule()
  {
    return $this->notificationsRule;
  }
  /**
   * Optional. When `spend_cap` is set, must be `OWNERSHIP_SCOPE_UNSPECIFIED` or
   * `ALL_USERS`. `BILLING_ACCOUNT` is not supported for spend caps.
   *
   * Accepted values: OWNERSHIP_SCOPE_UNSPECIFIED, ALL_USERS, BILLING_ACCOUNT
   *
   * @param self::OWNERSHIP_SCOPE_* $ownershipScope
   */
  public function setOwnershipScope($ownershipScope)
  {
    $this->ownershipScope = $ownershipScope;
  }
  /**
   * @return self::OWNERSHIP_SCOPE_*
   */
  public function getOwnershipScope()
  {
    return $this->ownershipScope;
  }
  /**
   * Optional. The spend cap configured for this budget. When `spend_cap` is
   * set, strict field restrictions apply to the budget (see field-level
   * comments on `ownership_scope`, `budget_filter`, `amount`,
   * `threshold_rules`, and `notifications_rule`). When `spend_cap.output_state`
   * is `ENFORCED`, only `spend_cap.input_state` can be modified in an
   * `UpdateBudget` request (e.g., setting `input_state` to
   * `AWAITING_NEXT_PERIOD` to lift the cap); modifying any other budget field
   * while enforced will fail with `FAILED_PRECONDITION`. If the existing
   * resource is a spend cap and an `update_mask` is supplied in an
   * `UpdateBudget` request, `spend_cap` or `spend_cap.input_state` must be
   * specified in the update mask. To convert a spend cap budget to a regular
   * budget, specify `spend_cap` in the `update_mask` and omit `spend_cap` from
   * the budget in the request.
   *
   * @param GoogleCloudBillingBudgetsV1SpendCap $spendCap
   */
  public function setSpendCap(GoogleCloudBillingBudgetsV1SpendCap $spendCap)
  {
    $this->spendCap = $spendCap;
  }
  /**
   * @return GoogleCloudBillingBudgetsV1SpendCap
   */
  public function getSpendCap()
  {
    return $this->spendCap;
  }
  /**
   * Optional. Rules that trigger alerts (notifications of thresholds being
   * crossed) when spend exceeds the specified percentages of the budget.
   * Optional for `pubsubTopic` notifications. Required if using email
   * notifications. Must be set when `spend_cap` is set. Spend caps must have
   * exactly three `CURRENT_SPEND` threshold rules with `threshold_percent`
   * values of `0.5`, `0.8`, and `1.0` (50%, 80%, and 100%). `FORECASTED_SPEND`
   * threshold rules are not supported for spend caps.
   *
   * @param GoogleCloudBillingBudgetsV1ThresholdRule[] $thresholdRules
   */
  public function setThresholdRules($thresholdRules)
  {
    $this->thresholdRules = $thresholdRules;
  }
  /**
   * @return GoogleCloudBillingBudgetsV1ThresholdRule[]
   */
  public function getThresholdRules()
  {
    return $this->thresholdRules;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudBillingBudgetsV1Budget::class, 'Google_Service_CloudBillingBudget_GoogleCloudBillingBudgetsV1Budget');
