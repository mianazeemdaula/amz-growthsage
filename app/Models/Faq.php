<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Faq extends Model
{
    use HasFactory;

    protected $fillable = ['faq_category_id', 'question', 'answer', 'active'];

    public function category(): BelongsTo
    {
        return $this->belongsTo(FaqCategory::class);
    }
}
