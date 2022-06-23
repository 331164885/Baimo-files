<?php

namespace Baimo\Files\Models;

use Exception;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Storage;
use Baimo\Core\Models\BaseModel;

class File extends BaseModel
{
    protected $guarded = [];

    public $translatable = [
        'description',
        'alt_attribute',
    ];

    protected $appends = ['thumb_sm', 'alt_attribute_translated', 'url'];


    public function folder(): BelongsTo
    {
        return $this->belongsTo(self::class, 'folder_id', 'id');
    }

    public function children(): HasMany
    {
        return $this->hasMany(self::class, 'folder_id', 'id');
    }

    public function getUrlAttribute(): string
    {
        $url = '';

        try {
            $url = Storage::url($this->path);
        } catch (Exception $e) {
        }

        return $url;
    }
}
