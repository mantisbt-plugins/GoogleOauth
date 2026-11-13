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

namespace Google\Service\GoogleHealthAPI;

class NutritionLog extends \Google\Collection
{
  /**
   * Unspecified meal type.
   */
  public const MEAL_TYPE_MEAL_TYPE_UNSPECIFIED = 'MEAL_TYPE_UNSPECIFIED';
  /**
   * Value representing a meal before breakfast.
   */
  public const MEAL_TYPE_BEFORE_BREAKFAST = 'BEFORE_BREAKFAST';
  /**
   * Value representing a breakfast.
   */
  public const MEAL_TYPE_BREAKFAST = 'BREAKFAST';
  /**
   * Value representing a morning snack.
   */
  public const MEAL_TYPE_BEFORE_LUNCH = 'BEFORE_LUNCH';
  /**
   * Value representing a lunch.
   */
  public const MEAL_TYPE_LUNCH = 'LUNCH';
  /**
   * Value representing an afternoon snack.
   */
  public const MEAL_TYPE_BEFORE_DINNER = 'BEFORE_DINNER';
  /**
   * Value representing dinner.
   */
  public const MEAL_TYPE_DINNER = 'DINNER';
  /**
   * Value representing an evening snack.
   */
  public const MEAL_TYPE_AFTER_DINNER = 'AFTER_DINNER';
  /**
   * Value representing any meal outside of the usual three meals per day.
   */
  public const MEAL_TYPE_SNACK = 'SNACK';
  /**
   * Value representing any time (legacy NA).
   */
  public const MEAL_TYPE_ANYTIME = 'ANYTIME';
  protected $collection_key = 'nutrients';
  protected $energyType = EnergyQuantity::class;
  protected $energyDataType = '';
  protected $energyFromFatType = EnergyQuantity::class;
  protected $energyFromFatDataType = '';
  /**
   * Optional. The resource name of the Food item. Required when creating a
   * nutrition log from an identified food. For anonymous food logs, use the
   * `food_display_name` field instead.
   *
   * @var string
   */
  public $food;
  /**
   * The display name of the food. For identified food logs, this is populated
   * automatically from the referenced food.
   *
   * @var string
   */
  public $foodDisplayName;
  protected $intervalType = SessionTimeInterval::class;
  protected $intervalDataType = '';
  /**
   * Optional. The meal category. One of `BREAKFAST`, `LUNCH`, `DINNER`, or
   * `SNACK`.
   *
   * @var string
   */
  public $mealType;
  protected $nutrientsType = NutrientQuantity::class;
  protected $nutrientsDataType = 'array';
  protected $servingType = Serving::class;
  protected $servingDataType = '';
  protected $totalCarbohydrateType = WeightQuantity::class;
  protected $totalCarbohydrateDataType = '';
  protected $totalFatType = WeightQuantity::class;
  protected $totalFatDataType = '';

  /**
   * Optional. The total energy of the food, measured in kilocalories (`kcal`).
   *
   * @param EnergyQuantity $energy
   */
  public function setEnergy(EnergyQuantity $energy)
  {
    $this->energy = $energy;
  }
  /**
   * @return EnergyQuantity
   */
  public function getEnergy()
  {
    return $this->energy;
  }
  /**
   * Optional. The energy from fat, measured in kilocalories (`kcal`).
   *
   * @param EnergyQuantity $energyFromFat
   */
  public function setEnergyFromFat(EnergyQuantity $energyFromFat)
  {
    $this->energyFromFat = $energyFromFat;
  }
  /**
   * @return EnergyQuantity
   */
  public function getEnergyFromFat()
  {
    return $this->energyFromFat;
  }
  /**
   * Optional. The resource name of the Food item. Required when creating a
   * nutrition log from an identified food. For anonymous food logs, use the
   * `food_display_name` field instead.
   *
   * @param string $food
   */
  public function setFood($food)
  {
    $this->food = $food;
  }
  /**
   * @return string
   */
  public function getFood()
  {
    return $this->food;
  }
  /**
   * The display name of the food. For identified food logs, this is populated
   * automatically from the referenced food.
   *
   * @param string $foodDisplayName
   */
  public function setFoodDisplayName($foodDisplayName)
  {
    $this->foodDisplayName = $foodDisplayName;
  }
  /**
   * @return string
   */
  public function getFoodDisplayName()
  {
    return $this->foodDisplayName;
  }
  /**
   * Required. The time window when the food was logged.
   *
   * @param SessionTimeInterval $interval
   */
  public function setInterval(SessionTimeInterval $interval)
  {
    $this->interval = $interval;
  }
  /**
   * @return SessionTimeInterval
   */
  public function getInterval()
  {
    return $this->interval;
  }
  /**
   * Optional. The meal category. One of `BREAKFAST`, `LUNCH`, `DINNER`, or
   * `SNACK`.
   *
   * Accepted values: MEAL_TYPE_UNSPECIFIED, BEFORE_BREAKFAST, BREAKFAST,
   * BEFORE_LUNCH, LUNCH, BEFORE_DINNER, DINNER, AFTER_DINNER, SNACK, ANYTIME
   *
   * @param self::MEAL_TYPE_* $mealType
   */
  public function setMealType($mealType)
  {
    $this->mealType = $mealType;
  }
  /**
   * @return self::MEAL_TYPE_*
   */
  public function getMealType()
  {
    return $this->mealType;
  }
  /**
   * Optional. An array of individual nutrient values for the nutrition log.
   *
   * @param NutrientQuantity[] $nutrients
   */
  public function setNutrients($nutrients)
  {
    $this->nutrients = $nutrients;
  }
  /**
   * @return NutrientQuantity[]
   */
  public function getNutrients()
  {
    return $this->nutrients;
  }
  /**
   * Optional. The serving information for the logged food.
   *
   * @param Serving $serving
   */
  public function setServing(Serving $serving)
  {
    $this->serving = $serving;
  }
  /**
   * @return Serving
   */
  public function getServing()
  {
    return $this->serving;
  }
  /**
   * Optional. The total carbohydrate content, measured in grams.
   *
   * @param WeightQuantity $totalCarbohydrate
   */
  public function setTotalCarbohydrate(WeightQuantity $totalCarbohydrate)
  {
    $this->totalCarbohydrate = $totalCarbohydrate;
  }
  /**
   * @return WeightQuantity
   */
  public function getTotalCarbohydrate()
  {
    return $this->totalCarbohydrate;
  }
  /**
   * Optional. The total fat content, measured in grams.
   *
   * @param WeightQuantity $totalFat
   */
  public function setTotalFat(WeightQuantity $totalFat)
  {
    $this->totalFat = $totalFat;
  }
  /**
   * @return WeightQuantity
   */
  public function getTotalFat()
  {
    return $this->totalFat;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(NutritionLog::class, 'Google_Service_GoogleHealthAPI_NutritionLog');
