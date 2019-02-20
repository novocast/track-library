<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTracksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tracks', function (Blueprint $table) {
            $table->increments('id');
        
            $table->string('album_id');
            $table->string('album_title');
            $table->string('artist');
            $table->string('former_id');
            $table->string('title');
            $table->string('track_number');
            $table->string('track_length');
            $table->string('library');
            $table->string('library_id');
            $table->string('library_track_status');
            $table->float('explicit', 1);
            $table->float('suggestive', 1); 
            $table->float('offensive', 1); 
            $table->float('profanity', 1);
            $table->string('labels');
            $table->string('genres');
            $table->string('tags');
            $table->float('bpm', 4);
            $table->string('search_tags');

            $table->string('musixmatcher_track_id');
            $table->string('match_confidence');
            $table->string('lyrics');
            $table->string('lyrics_explicity');
            $table->string('amazon_100_words');
            $table->string('match_status');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tracks');
    }
}
