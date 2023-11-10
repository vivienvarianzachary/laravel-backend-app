<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;


class AuthServiceProvider extends ServiceProvider
{
    public static $permission = [
        'dashboard' => ['superadmin', 'admin'],
        'user-index' => ['admin'],
        'payment-update' => ['superadmin'],
    ];
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {

        foreach(self::$permission as $feature => $roles) {
           Gate::define($feature, function (User $user) use ($roles) {
            if (in_array($user->role, ['superadmin'])) {
                return true;
            }
        });  
       
        
    }

       
    }
}
