<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Artwork extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'artist_id',
        'slug',
        'image',
        'description',
        'year',
    ];

    public function artist(){
        return $this->belongsTo(Artist::class);
    }

    public static function generateSlug($string)
    {
        $slug = Str::slug($string, '-');

        $original_slug = $slug;
        $c = 1;
        $artwork_exists = Artwork::where('slug', $slug)->first();
        while ($artwork_exists) {
            $slug = $original_slug . '-' . $c;
            $museum_exists = Artwork::where('slug', $slug)->first();
            $c++;
        }
        return $slug;
    }

}
