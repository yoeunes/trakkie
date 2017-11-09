<?php

use App\Album;
use App\Track;
use Illuminate\Database\Seeder;

class TracksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $albums = Album::all();
        foreach($albums as $album) {
            for($track = 1; $track <= 20; $track++) {
                factory(Track::class)->create([
                    'album_id' => $album->id,
                    'track' => $track
                ]);
            }
        }
    }
}
