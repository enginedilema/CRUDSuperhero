<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * Class Lang
 *
 * @property $id
 * @property $code
 * @property $name
 * @property $created_at
 * @property $updated_at
 *
 * @property CategoryLang[] $categoryLangs
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Lang extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['code', 'name'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function categories() : BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }
    
}
