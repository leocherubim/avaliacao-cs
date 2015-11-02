<?php

namespace Avaliacao\Providers;

use Illuminate\Support\ServiceProvider;

class AvaliacaoRepositoryProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        
        /*
         * Repository Artist
         */
        $this->app->bind(
            \Avaliacao\Repositories\ArtistRepository::class,
            \Avaliacao\Repositories\ArtistRepositoryEloquent::class
        );

        /*
         * Repository Album
         */
        $this->app->bind(
            \Avaliacao\Repositories\AlbumRepository::class,
            \Avaliacao\Repositories\AlbumRepositoryEloquent::class
        );

        /*
         * Repository Music
         */
        $this->app->bind(
            \Avaliacao\Repositories\MusicRepository::class,
            \Avaliacao\Repositories\MusicRepositoryEloquent::class
        );
        
    }
}
