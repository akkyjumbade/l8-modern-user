<?php
namespace AkshayJumbade\ModernUser;

use Illuminate\Support\ServiceProvider;

class ModernUserServiceProvider extends ServiceProvider {
   function boot() {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->mergeConfigFrom(__DIR__.'/config/config.php', 'modern_user');
        $this->loadViewsFrom(__DIR__.'/views', 'modern_user');

        // publishes
        $this->publishes([
            __DIR__.'/config/config.php' => config_path('user.php'),
            __DIR__.'/database/migrations' => database_path('migrations'),
            __DIR__.'/views' => resource_path('views'),
        ], 'modern-user');
   }
   function register() {

   }
}
