<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ArtistsTableSeeder::class);
        $this->call(AlbumsTableSeeder::class);
        $this->call(TracksTableSeeder::class);
    }
}
