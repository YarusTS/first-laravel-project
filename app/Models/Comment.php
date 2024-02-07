<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int    $id
 * @property string $name
 * @property string $content
 * @property string $poster
 * @property string $created_at
 * @property string $updated_at
 */

class Comment extends Model
{
    use HasFactory;

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
//    public function posts(): HasMany
//    {
//        return $this->hasMany(Post::class);
//    }
}
