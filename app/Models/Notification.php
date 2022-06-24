<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $created_at
 * @property string $updated_at
 * @property string $title
 * @property string $img_path
 * @property string $start_date
 * @property string $end_date
 * @property integer $weight
 */
class Notification extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    // protected $keyType = 'integer';
    protected $table = 'news';

    /**
     * @var array
     */
    protected $fillable = ['created_at', 'updated_at', 'title', 'img_path', 'start_date', 'end_date', 'weight'];
}
