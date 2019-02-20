<?php
namespace Tests\Unit;
use Tests\TestCase;

class TrackApiUnitTest extends TestCase
{

    /** @test */
    public function it_can_create_a_track()
    {
        $data = [
            'album_id' => $this->faker->uuid, 
            'album_title' => $this->faker->sentence,
            'artist' => $this->faker->name,
            'former_id' => $this->faker->sentence,
            'title' => $this->faker->sentence,
            'track_number' => $this->faker->sentence,
            'track_length' => $this->faker->sentence,
            'library' => $this->faker->sentence,
            'library_id' => $this->faker->sentence,
            'library_track_status' => $this->faker->sentence,
            'explicit' => $this->faker->randomFloat(1,0,1),
            'suggestive' => $this->faker->randomFloat(1,0,1),
            'offensive' => $this->faker->randomFloat(1,0,1),
            'profanity' => $this->faker->randomFloat(1,0,1),
            'labels' => $this->faker->sentence,
            'genres' => $this->faker->sentence,
            'tags' => $this->faker->sentence,
            'bpm' => $this->faker->numberBetween(10,200),
            'search_tags' => $this->faker->sentence
        ];

        $this->post(route('track.store'), $data)
            ->assertStatus(201)
            ->assertJson($data);
    }
}