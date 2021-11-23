<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // gọi hàm usebootstrap để hiển thị só trang khi paginator ra các số <..1.2.3.4.5.6.7.8.9...>.
        Paginator::useBootstrap();
    }
}
