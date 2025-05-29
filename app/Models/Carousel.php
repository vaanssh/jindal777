<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Carousel extends Model
{
    protected $fillable = [
        'title',
        'image',
        'description',
        'status'
    ];

    protected $appends = ['image_url'];

    public function getImageUrlAttribute()
    {
        return $this->image ? Storage::disk('public')->url('carousels/' . $this->image) : null;
    }
}
