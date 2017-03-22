<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Food
 *
 * @property int $id
 * @property string $name
 * @property int $brand_id
 * @property string $description
 * @property string $image
 * @property string $serving
 * @property int $serving_per_container
 * @property int $calories
 * @property int $total_fat
 * @property int $saturated
 * @property int $polyunsaturated
 * @property int $monounsaturated
 * @property int $trans
 * @property int $cholesterol
 * @property int $sodium
 * @property int $potassium
 * @property int $total_carbs
 * @property int $dietary_fiber
 * @property int $sugar
 * @property int $protein
 * @property int $vitamin_a
 * @property int $vitamin_c
 * @property int $calcium
 * @property int $iron
 * @property bool $guaranteed
 * @property bool $published
 * @property bool $enabled
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Food whereBrandId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Food whereCalcium($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Food whereCalories($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Food whereCholesterol($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Food whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Food whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Food whereDietaryFiber($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Food whereEnabled($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Food whereGuaranteed($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Food whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Food whereImage($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Food whereIron($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Food whereMonounsaturated($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Food whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Food wherePolyunsaturated($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Food wherePotassium($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Food whereProtein($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Food wherePublished($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Food whereSaturated($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Food whereServing($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Food whereServingPerContainer($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Food whereSodium($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Food whereSugar($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Food whereTotalCarbs($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Food whereTotalFat($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Food whereTrans($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Food whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Food whereVitaminA($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Food whereVitaminC($value)
 * @mixin \Eloquent
 */
class Food extends Model
{
    //
}
