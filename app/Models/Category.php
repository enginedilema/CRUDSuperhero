<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Category extends Model
{
    /** @use HasFactory<\Database\Factories\CategoryFactory> */
    use HasFactory;

    protected $fillable = ['name'];

    public function langs() : BelongsToMany
    {
        return $this->belongsToMany(Lang::class, 'category_lang', 'category_id', 'lang_id')
        ->withPivot('name', 'created_at', 'updated_at');
    }
}
