<?php

namespace App\Models;

use CloudinaryLabs\CloudinaryLaravel\MediaAlly;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class projectImages extends Model
{
    use HasFactory, MediaAlly;
    protected $guarded = [];

    public function projects(): BelongsTo
    {
        return $this->belongsTo(projects::class, 'project_id');
    }
}
