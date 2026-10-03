<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo; // ← Added Import

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'body',
        'image',
    ];

    /**
     * Get the user that owns the Post
     */
    public function user(): BelongsTo // ← Added Return Type
    {
        return $this->belongsTo(User::class);
    }
}