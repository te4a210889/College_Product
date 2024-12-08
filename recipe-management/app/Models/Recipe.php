<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

        // ここに大量割り当てを許可するカラムを指定する
        protected $fillable = [
            'title',
            'description',
            'ingredients',
            'instructions',
        ];
}
