<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'user_id',
        'content',
        'status',
        'likes',
        'comments',
        'is_page_post',
        'page_id',
        'is_group_post',
        'group_id'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function group(): BelongsTo
    {
        return $this->belongsTo(Group::class, 'group_id');
    }

    public function page(): BelongsTo
    {
        return $this->belongsTo(Group::class, 'page_id');
    }

}
