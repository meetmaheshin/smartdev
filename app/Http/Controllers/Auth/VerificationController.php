<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Auth\Events\Verified;
use Illuminate\Support\Facades\Auth;
use App\Mail\CustomVerifyEmail;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Mail;
class VerificationController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Email Verification Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling email verification for any
    | user that recently registered with the application. Emails may also
    | be re-sent if the user didn't receive the original email message.
    |
    */
 
    use VerifiesEmails;

    /**
     * Where to redirect users after verification.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;
    public function redirectTo() {
        $role = Auth::user()->is_admin; 
        switch ($role) {
          case User::TYPE['freelancer']:
            return route('freelancer.welcome');
            break;
          case User::TYPE['client']:
            return route('clientdashboard');
            break; 
          default:
            return '/'; 
          break;
        }
      }


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('signed')->only('verify');
        $this->middleware('throttle:6,1')->only('verify', 'resend');
    }


    

    public function resend(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return redirect()->back()->with('error', 'User not found.');
        }

        if ($user->hasVerifiedEmail()) {
            return redirect()->back()->with('info', 'Email already verified.');
        }

        $user->sendEmailVerificationNotification();

        return redirect()->back()->with('success', 'Verification email resent.');
    }
    public function showResendForm()
    {
        return view('auth.resend_verification');
    }

    public function verify(Request $request, $id, $token)
    {
          $user = User::find($id);

        if (!$user) {
            // Handle user not found scenario
            return response()->json(['error' => 'User not found.'], 404);
        }

        if (! hash_equals((string) $token, sha1($user->getEmailForVerification()))) {
            // Handle invalid token scenario
            return response()->json(['error' => 'Invalid verification token.'], 400);
        }

        if ($user->hasVerifiedEmail()) {
            // Handle already verified scenario
             if($user->status == '1'){
              if($user->is_admin== User::ROLE_CLIENT){
                  return redirect()->route('clientdashboard');
              }else{
                  return redirect()->route('dashboard');
              }
          }
                return response()->json(['error' => 'Email address already verified.'], 400);
        }

        $user->markEmailAsVerified();
        event(new Verified($user));
        Auth::login($user);
        if(auth()->user()->status == '1'){
          if(auth()->user()->is_admin== User::ROLE_CLIENT){
              return redirect()->route('clientdashboard');
          }else{
              return redirect()->route('dashboard');
          }
      }

        return response()->json(['message' => 'Email successfully verified.']);
    }

}
