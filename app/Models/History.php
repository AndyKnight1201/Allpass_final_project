<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;

    protected $table = 'histories';

    protected $keyType = 'integer';

    protected $fillable = ['created_at', 'updated_at', 'change_history'];
}
