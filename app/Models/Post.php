<?php

namespace App\Models;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int    $id
 * @property string $name
 * @property string $description
 * @property string $content
 * @property string $poster
 * @property string $created_at
 * @property string $updated_at
 */
class Post extends Model
{
    use HasFactory;

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(CategoryController::class);
    }
    public function comments(): HasMany
    {
        return $this->hasMany(CommentController::class);
    }
}
