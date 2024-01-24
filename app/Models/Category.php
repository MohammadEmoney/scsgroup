<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

class Category extends Model
{
    use HasFactory, NodeTrait;

    protected $fillable = [
        'name',
        'name_en',
        'slug',
        'is_active',
        'description',
        'description_en',
    ];

    public function portfolios()
    {
        return $this->belongsToMany(Portfolio::class);
    }

    public function scopeIsActive($query)
    {
        $query->where('is_active', 1);
    }
}
