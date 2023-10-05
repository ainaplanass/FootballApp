<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Policies\AdminPolicy;
class AppServiceProvider extends ServiceProvider
{protected $policies = [
    // Otras políticas aquí
    User::class => AdminPolicy::class,
];
  
    public function register(): void
    {
        //
    }


    public function boot(): void
    {
      
    }
}
