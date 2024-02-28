<?php

namespace Database\Seeders;

use App\Models\Artist;
use App\Models\City;
use App\Models\Client;
use App\Models\Country;
use App\Models\Event;
use App\Models\Place;
use App\Models\Room;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountryToEventToClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = Tag::get();
        $artists = Artist::get();

        Country::factory()
            ->has(
                City::factory()
                    ->count(3)
                    ->has(
                        Place::factory()
                            ->count(2)
                            ->has(
                                Room::factory()
                                    ->count(2)
                                    ->has(
                                        Event::factory()
                                            ->count(2)
                                            ->has(
                                                Client::factory()
                                                    ->count(3),
                                                'clients'
                                            ),
                                        'events'
                                    ),
                                'rooms'
                            ),
                        'places'
                    ),
                'cities'
            )
            ->create();
        
        foreach(Event::get() as $event) {
            $tagsRandom = $tags->random(2);
            $artistsRandom = $artists->random(3);
            $event->tags()->attach($tagsRandom);
            $event->artists()->attach($artistsRandom);
        }
    }
}
