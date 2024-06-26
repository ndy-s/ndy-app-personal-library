<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArtLibrary extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function subArtLibraries() {
        return $this->hasMany(SubArtLibrary::class);
    }
}
