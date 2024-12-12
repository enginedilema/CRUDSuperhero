<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lang extends Model
{
    /** @use HasFactory<\Database\Factories\LangFactory> */
    use HasFactory;
    protected $fillable = ['code', 'name'];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
