<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Traits\RedirectUserTrait;
use Auth,Session;

class LoginController extends Controller
{
    use RedirectUserTrait;
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;
 

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function validateLogin(Request $request)
    {
        $request->validate([
            'email' =>    'required|email',
            'password' => 'required',
        ]);
    }

    public function login(Request $request)
    {
        $this->validateLogin($request);

        // If the class is using the ThrottlesLogins trait, we can automatically throttle
        // the login attempts for this application. We'll key this by the username and
        // the IP address of the client making these requests into this application.
        if (method_exists($this, 'hasTooManyLoginAttempts') &&
            $this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }

        if ($this->attemptLogin($request)) {
            if ($request->hasSession()) {
                $request->session()->put('auth.password_confirmed_at', time());
            }
            return $this->sendLoginResponse($request);
        }
      

        // If the login attempt was unsuccessful we will increment the number of attempts
        // to login and redirect the user back to the login form. Of course, when this
        // user surpasses their maximum number of attempts they will get locked out.
        $this->incrementLoginAttempts($request);

        return $this->sendFailedLoginResponse($request);
    }

    protected function attemptLogin(Request $request)
    {
        return $this->guard()->attempt(
            $this->credentials($request), $request->boolean('remember')
        );
    }
    protected function credentials(Request $request)
    {
        return $request->only($this->username(), 'password','is_admin');
    }



    protected function authenticated(Request $request, $user)
    {
        if(auth()->user()->status == '1'){
            if (auth()->user()->is_admin == User::TYPE['client']) {
                return redirect()->route('clientdashboard');
            }else if (auth()->user()->is_admin == User::TYPE['freelancer']) {
                return redirect()->route($this->redirectUser(auth()->user()->id));
            }else{
                return redirect()->route('/');
            }
        }else{
            Session::flush();
            Auth::logout();
            return redirect()->route('login')->with('error','Your Account has been closed. Please contact to Admin')->withInput();
        }
       
    }

    protected function logout(Request $request) {
        User::where('id', auth()->user()->id)->update(['chat_status' => '0']);
        $this->guard()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        return $this->loggedOut($request) ?: redirect('/');

    } 
}
