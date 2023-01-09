<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\ModelsExtended\User;
use App\ModelsExtended\Role;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use App\Rules\PhoneNumberValidationRule;
use Redirect;
use App\Services\ClientService;
use App\Http\Requests\Auth\RegistrationRequest;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create(Request $request)
    {
        $register = $request->session()->get('register');
        return view('auth.register',compact('register'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function registerStepOne(RegistrationRequest $request){

          if(empty($request->session()->get('register'))){
            $register = new User();
            $register->fill($request->input());
            $request->session()->put('register', $register);
        }else{
            $register = $request->session()->get('register');
            $register->fill($request->input());
            $request->session()->put('register', $register);
        }
        return redirect('/create-account-terms');
    }
    public function store(Request $request)
    {
        $register = $request->session()->get('register');
        if($request->has('agreement') && $request->input('agreement') == 1 && $register->first_name != 'null'){
            $user = User::create([
                'first_name' => $register->first_name,
                'last_name' => $register->last_name,
                'name' => "{$register->first_name} {$register->last_name}",
                'address' => $register->address,
                'phone' => $register->phone,
                'email' => $register->email,
                'role_id' => Role::TravelAdvisors,
                'password' => Hash::make($register->password),
            ]);
            event(new Registered($user));
            $client =  new ClientService();
            $client->setUserNotification($user);
            // Attempt to login the user
            if (Auth::attempt(['email' => $register->email, 'password' => $register->password])) {
                $request->session()->forget('register');
                return redirect()->intended(RouteServiceProvider::HOME);
            }else{
                toastr()->success('Your registration is completed! Try to login manually');
                return redirect('/login');
            }
        }else{
            toastr()->error('Please accept terms and conditions.');
            return back();
        }
    }


    public function accountTerms(Request $request)
    {
        $register = $request->session()->get('register');
        return view('auth.account_terms',compact('register'));
    }

    public function viewProfilePassword()
    {
        return view('auth.view_profile_password');
    }

    public function clientComplete()
    {
        return view('auth.client_complete');
    }

    public function accountWatingToApproval()
    {
        return view('auth.account_approval');
    }
}
