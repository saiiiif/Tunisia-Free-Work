<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Membre;


class AppServiceProvider extends ServiceProvider
{



    
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

        
        \Cmgmyr\Messenger\Models\Models::setUserModel(\App\Membre::class);
        \Cmgmyr\Messenger\Models\Models::setTables([
            'users' => 'membres',
        ]);
        

    }
}
