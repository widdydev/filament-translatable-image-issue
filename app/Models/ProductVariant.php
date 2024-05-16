<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Translatable\HasTranslations;

class ProductVariant extends Model
{
    use HasFactory, HasTranslations;

    public $translatable = [
        'title',
    ];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
