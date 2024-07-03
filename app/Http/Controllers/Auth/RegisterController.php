<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Country;
use App\Models\UserBalance;
use App\Mail\CustomVerifyEmail;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\JsonResponse;
use App\Rules\Password as PasswordRule;
use Auth,DB,Mail;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $existingUserId = '';
        $existingUser = User::where('email',$data['email'])->get();
        if(count($existingUser)>=1 && $existingUser[0]->is_admin != $data['is_admin']){
            $existingUserId = $existingUser[0]->id;
        }
        $messages = [
            'password.regex.alpha' => 'Password must contain at least one letter.',
            'password.regex.num' => 'Password must contain at least one number.',
            'password.regex.special' => 'Password must contain at least one special character.',
            'password.min' => 'Password must be at least 8 characters long.',
        ];
        return Validator::make($data, [
            'firstname' => 'required|string|regex:/^[\pL\s\-]+$/u',
            'lastname' => 'required|string|regex:/^[\pL\s\-]+$/u',
            'email' => 'required|email|regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/|unique:users,email,'.$existingUserId,
            'country_id'=>"required",
            'password' => ['required', new PasswordRule],
            'confirm_password' => 'required|same:password',
            'terms'=>'required',
            'is_admin'=>'nullable'
        ]);
    }

    public function showRegistrationForm()
	{
		// Meta Tags
		$data['countries'] = Country::get(["name", "id"]);
        $data['title'] = 'Create an Account - SmartDev3';
		return view('auth.register',$data);
	}

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {

        return User::create([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'email' => $data['email'],
            'country_id' => $data['country_id'],
            'password' => $data['password'],
            'is_admin'=> $data['is_admin']
        ]);
    } 

    public function register(Request $request) {
        
        $this->validator($request->all())->validate();
        try {
            DB::beginTransaction();
            /* Trigger event for email verification */
            $user = User::create($request->all());
            // event(new Registered($user));

            UserBalance::insert([
                'user_id' => $user->id,
                'rovi_balance' => 0,
                'dev3_balance' => 0,
                'usdt_balance' => 0,
            ]);
            // Mail::to($user->email)->send(new CustomVerifyEmail($user));
            $user->sendEmailVerificationNotification();

            DB::commit();
            // Auth::login($user);
            return response()->json(['status'=>200,'type'=>'success','msg'=>'Registered Successfully']);        
        }
        catch (\Throwable $th) {
            DB::rollBack();
            return response()->json(['status'=>500,'type'=>'error','msg'=>'Sorry, You have no received a mail. Something went wrong']);
        }
    }
}
