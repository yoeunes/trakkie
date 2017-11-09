<?php

use App\Album;
use App\Artist;
use Illuminate\Database\Seeder;

class AlbumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $artists = Artist::all();
        foreach($artists as $artist) {
            factory(Album::class, 10)->create(['artist_id' => $artist->id]);
        }
    }
}
