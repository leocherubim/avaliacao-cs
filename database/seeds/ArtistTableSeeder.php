<?php

use Illuminate\Database\Seeder;
use Avaliacao\Entities\Artist;
use Avaliacao\Entities\Album;
use Avaliacao\Entities\Music;

class ArtistTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Artist::class, 10)->create()->each(function($c) {
        	for($i = 0; $i <= 5; $i++) {
        		$c->albums()->save(factory(Album::class)->make());
        		foreach ($c->albums as $album) {
        			$album->musics()->save(factory(Music::class)->make());
        		}
        	}
        });
    }
}
