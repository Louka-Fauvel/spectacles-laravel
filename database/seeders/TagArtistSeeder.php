<?php

namespace Database\Seeders;

use App\Models\Artist;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagArtistSeeder extends Seeder
{
    /** @var array */
    protected static $tags = array(
        'Théâte', 'Concert', 'Opéra', 'Danse'
    );

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if(Tag::count() < count(static::$tags)) {

            foreach(static::$tags as $tag) {
                Tag::factory()
                    ->create([
                        'name' => $tag,
                    ]);
            }
            
        };

        Artist::factory()
            ->count(3)
            ->create();
    }
}
