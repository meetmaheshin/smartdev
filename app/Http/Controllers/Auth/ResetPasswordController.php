<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
// use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;
use App\Models\User;
use App\Http\Traits\RedirectUserTrait;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;
    use RedirectUserTrait;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;
    public function redirectTo() {
        $role = Auth::user()->is_admin; 
        switch ($role) {
          case User::TYPE['freelancer']:
            return route($this->redirectUser(auth()->user()->id));
            break;
          case User::TYPE['client']:
            return route('clientdashboard');
            break; 
          default:
            return '/'; 
          break;
        }
      }
      
      protected function setUserPassword($user, $password)
      {
          $user->password = $password;
      }
}
