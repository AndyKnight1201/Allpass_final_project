<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $created_at
 * @property string $updated_at
 * @property string $meal_name
 * @property string $class
 * @property integer $price
 * @property string $img_path
 */
class Meal extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['created_at', 'updated_at', 'meal_name', 'tag', 'price', 'img_path', 'note'];

    // 餐點類別
    public function tag(){
        return $this->hasOne(Meal_tag::class, 'tag', 'tag');
    }
}
