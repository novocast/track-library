<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class TrackRedis extends Model
{
    protected $connection = 'redis';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 
        'album_id', 
        'album_title',
        'artist', 
        'former_id', 
        'title', 
        'track_number', 
        'track_length', 
        'library', 
        'library_id', 
        'library_track_status',
        'explicit', 
        'suggestive', 
        'offensive', 
        'profanity',
        'labels', 
        'genres', 
        'tags',
        'bpm', 
        'search_tags',

        'musixmatcher_track_id', 
        'match_confidence',
        'lyrics',
        'lyrics_explicity',
        'amazon_100_words',
        'match_status',
    ];



    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];
}
