<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Notification;
use Illuminate\Support\Facades\View;

use Auth;

class NotificationServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        view()->composer('*', function ($view) {
            $user = Auth::user()  ? Auth::user()->notifications->take(3) : '';
            $unreadnotifications = Auth::user()  ? Auth::user()->unreadnotifications : '';
            $view->with('notifications',  $user);
            $view->with('unreadnotifications',  $unreadnotifications);

        });
    }
}
