<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SubCategory extends Model {
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'category_id',
        'created_by',
    ];

    public function Category(): BelongsTo {
        return $this->belongsTo(Category::class);
    }

    public function Product(): HasMany {
        return $this->hasMany(Product::class);
    }

}
